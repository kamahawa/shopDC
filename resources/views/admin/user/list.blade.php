@extends('admin.layouts.master')
@section('controller', 'User')
@section('icons')
<li><a href="{{ url('/admin/user/list') }}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></a></li>
@endsection

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="form-group margin-top-15">
	<a href="{{ url('/admin/user/add') }}" class="btn btn-default btn-custom-width-100">Add</a>
	</div>
</div>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Username</th>
            <th>Level</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $count = 1;
    ?>
        @foreach($user as $item_user)
        <tr class="odd gradeX" align="center">
            <td>{!! $count++; !!}</td>
            <td>{!! $item_user['username'] !!}</td>
            <td>
                @if($item_user['level'] == 1)
                    Admin
                @elseif($item_user['level'] == 2)
                    Mod
                @elseif($item_user['level'] == 0)
                    Member in active
                @else
                    Member
                @endif

            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="xacnhanxoa('Bạn có chắc là muốn xóa không?')" href="{!! URL::route('admin.user.getDelete', $item_user['id']) !!}"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.user.getEdit', $item_user['id']) !!}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
