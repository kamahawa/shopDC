@extends('admin.layouts.master')
@section('controller', 'Product')
@section('icons')
<li><a href="{{ url('/admin/product/list') }}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg></a></li>
@endsection
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="form-group margin-top-15">
	<a href="{{ url('/admin/product/add') }}" class="btn btn-default btn-custom-width-100">Add</a>
	</div>
</div>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Date</th>
            <th>Category</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = 1 ?>
        @foreach($data as $item)
            <tr class="odd gradeX" align="center">
                <td>{!! $count++; !!}</td>
                <td>{!! $item['name'] !!}</td>
                <td>{!! number_format($item['price'], 0, ",", ".") !!} VNĐ</td>
                <td>
                    {!! \Carbon\Carbon::createFromTimestamp(strtotime($item["created_at"]))->diffForHumans();!!}
                </td>
                <td>
                    <?php $cate = DB::table('cates')->where('id', $item['cate_id'])->first(); ?>
                    @if(!empty($cate->name))
                        {!! $cate->name !!}
                    @endif
                </td>
                <td class="center">
                    <i class="fa fa-trash-o  fa-fw"></i>
                    <a href="{!! URL::route('admin.product.getDelete', $item['id']) !!}" onclick="return xacnhanxoa('Bạn có chắc là muốn xóa không?')"> Delete</a>
                </td>
                <td class="center">
                    <i class="fa fa-pencil fa-fw"></i>
                    <a href="{!! URL::route('admin.product.getEdit', $item['id']) !!}">Edit</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection