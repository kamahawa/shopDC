@extends('admin.layouts.master')
@section('controller', 'Category')
@section('icons')
<li><a href="{{ url('/admin/cate/list') }}"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg></a></li>
@endsection
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="form-group margin-top-15">
	<a href="{{ url('/admin/cate/add') }}" class="btn btn-default btn-custom-width-100">Add</a>
	</div>
</div>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Category Parent</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $count = 1;
        ?>
        @foreach($data as $item)
        <tr class="odd gradeX" align="center">
            <td><?php echo $count++; ?> <!--{!! $item['id'] !!}--></td>
            <td>{!! $item['name'] !!}</td>
            <td>
                @if($item['parent_id'] == 0)
                    {{ "None" }}
                @else
                    <?php
                        $parent = DB::table('cates')->where('id',$item['parent_id'])->first();
                        echo $parent->name;
                    ?>
                @endif
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc là muốn xóa không?')" href="{!! URL::route('admin.cate.getDelete', $item['id']) !!}"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.cate.getEdit', $item['id']) !!}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection