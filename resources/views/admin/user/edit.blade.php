@extends('admin.layouts.master')
@section('controller', 'User')
@section('icons')
<li><a href="{{ url('/admin/user/list') }}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></a></li>
@endsection
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error')
    <form action="" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" disabled value="{!! old('txtUser', isset($data) ? $data['username'] : null) !!}"/>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Password"/>
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="RePassword"/>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email"  value="{!! old('txtEmail', isset($data) ? $data['email'] : null) !!}"/>
        </div>
        @if(\Illuminate\Support\Facades\Auth::user()->id != $id)
            <div class="form-group">
                <label>User Level</label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="1" type="radio"
                        @if($data['level'] == 1)
                            checked="checked"
                        @endif
                    >Admin
                </label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="2" type="radio"
                        @if($data['level'] == 2)
                            checked="checked"
                        @endif
                    >Mod
                </label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="3" type="radio"
                        @if($data['level'] == 3)
                            checked="checked"
                        @endif
                    >Member
                </label>
            </div>
        @endif
        <div class="form-group">
            <label>Category Status</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" type="radio"
                	@if($data['status'] != 0)
						checked="checked"
					@endif
                >Active
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="0" type="radio"
                	@if($data['status'] == 0)
						checked="checked"
					@endif
                >Deactive
            </label>
        </div>
        <button type="submit" class="btn btn-default">User Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection
