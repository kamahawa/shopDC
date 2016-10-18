<?php

namespace App\Http\Controllers;

use App\Cate;
use App\Product;
use App\ProductImage;
use Auth;
use File;
//use Request;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
	public function getAdd()
	{
		$cate = Cate::select('id', 'name', 'parent_id')->get()->toArray();
		return view('admin.product.add', compact('cate'));
	}

	public function postAdd(ProductRequest $request)
	{
		$path_parts = pathinfo($request->file('fImages')->getClientOriginalName());
		$fileName = md5($request->txtName).".".$path_parts['extension'];//$request->file('fImages')->getClientOriginalName();
		$product = new Product();
		$product->name = $request->txtName;
		$product->alias = convert_vi_to_en($request->txtName);
		$product->price = $request->txtPrice;
		$product->intro = $request->txtIntro;
		$product->content = $request->txtContent;
		$product->image = $fileName;
		$product->keywords = $request->txtKeywords;
		$product->description = $request->txtDescription;
		$product->user_id = Auth::user()->id;
		$product->cate_id = $request->sltParent;
		$product->status = $request->rdoStatus;
		$request->file('fImages')->move('resources/upload/', $fileName);
		$product->save();

		$product_id = $product->id;
		if ($request->hasFile('fProductDetail')) {
			foreach ($request->file('fProductDetail') as $key => $file) {
				$product_img = new ProductImage();
				if (isset($file)) {
					$detail_path_parts = pathinfo($file->getClientOriginalName());
					$date = date('ymddhmsa');
					$img_detail_name = md5($request->txtName).$date.$key.".".$detail_path_parts['extension'];
					$product_img->image = $img_detail_name;//$file->getClientOriginalName();
					$product_img->product_id = $product_id;
					$product_img->status = $request->rdoStatus;
					$file->move('resources/upload/detail/', $img_detail_name);
					$product_img->save();
				}
			}
		}
		return redirect()->route('admin.product.list')->with(['flash_level' => 'success', 'flash_message' => 'Success!! Complete add product']);
	}

	public function getList()
	{
		$data = Product::select('id', 'name', 'price', 'cate_id', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
		return view('admin.product.list', compact('data'));
	}

	public function getDelete($id)
	{
		$product_detail = Product::find($id)->pimage->toArray();

		foreach ($product_detail as $value) {
			File::delete('resources/upload/detail/' . $value['image']);
		}
		$product = Product::find($id);
		File::delete('resources/upload/' . $product->image);
		$product->delete($id);
		return redirect()->route('admin.product.list')->with(['flash_level' => 'success', 'flash_message' => 'Success!! Complete delete product']);
	}

	public function getEdit($id)
	{
		$cate = Cate::select('id', 'name', 'parent_id')->get()->toArray();
		$product = Product::find($id);
		$product_image = Product::find($id)->pimage;
		return view('admin.product.edit', compact('cate', 'product', 'product_image'));
	}

	public function postEdit(Request $request, $id)
	{
		$product = Product::find($id);
		//2 cach dung khac nhau va dung thu vien khac nhau
		//cach 1 dung thu vien la : use Request;
		/*
		$product->name = Request::input('txtName');
		$product->alias = convert_vi_to_en( Request::input('txtName'));
		$product->price = Request::input('txtPrice');
		$product->intro = Request::input('txtIntro');
		$product->content = Request::input('txtContent');
		//$product->image = $fileName;
		$product->keywords = Request::input('txtKeywords');
		$product->description = Request::input('txtDescription');
		$product->user_id = 1;
		$product->cate_id = Request::input('sltParent');
		*/

		//cach 2 dung thu vien la : use Illuminate\Http\Request;
		$product->name = $request->txtName;
		$product->alias = convert_vi_to_en($request->txtName);
		$product->price = $request->txtPrice;
		$product->intro = $request->txtIntro;
		$product->content = $request->txtContent;
		//$product->image = $fileName;
		$product->keywords = $request->txtKeywords;
		$product->description = $request->txtDescription;
		$product->user_id = Auth::user()->id;
		$product->cate_id = $request->sltParent;
		$product->status = $request->rdoStatus;
		//$request->file('fImages')->move('resources/upload/',$fileName);
		$img_current = 'resources/upload/' . $request->img_current;
		//if(!empty(Request::file('fImages')))
		if (!empty($request->fImages)) {
			//xoa file cu di
			if (File::exists($img_current)) {
				File::delete($img_current);
			}
			//them file moi
			$path_parts = pathinfo($request->file('fImages')->getClientOriginalName());
			$filename = md5($request->txtName).".".$path_parts['extension'];//$request->fImages->getClientOriginalName();
			$product->image = $filename;
			$request->fImages->move('resources/upload/', $filename);
		}
		$product->save();
		if (!empty($request->fProductDetail)) {
			foreach ($request->fProductDetail as $key => $file) {
				if (isset($file)) {
					$productImage = new ProductImage();
					$detail_path_parts = pathinfo($file->getClientOriginalName());
					$date = date('ymddhmsa');
					$img_detail_name = md5($request->txtName).$date.$key.".".$detail_path_parts['extension'];
					$productImage->image = $img_detail_name;//$file->getClientOriginalName();
					$productImage->product_id = $id;
					$productImage->status = $request->rdoStatus;
					$file->move('resources/upload/detail', $img_detail_name);
					$productImage->save();
				}
			}
		}
		return redirect()->route('admin.product.list')->with(['flash_level' => 'success', 'flash_message' => 'Success!! Complete update product']);
	}

	public function getDelImg(Request $request, $id)
	{
		//if(Request::ajax())
		if ($request->ajax()) {
			//$idHinh = (int)Request::get('idHinh');
			$idHinh = (int)$request->get('idHinh');
			$image_detail = ProductImage::find($idHinh);
			if (!empty($image_detail)) {
				$img = 'resources/upload/detail/' . $image_detail->image;
				if (File::exists($img)) {
					File::delete($img);
				}
				$image_detail->delete();
			}
			return 'Ok';
		}
	}
}
