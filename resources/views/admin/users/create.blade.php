@extends('layouts.admin')
@section('title')
<title>Create User | Admin</title>
@stop

@section('content')
<h1 class="page-header">Create User</h1>

@include('includes.errors')
{!! Form::open(['method'=> 'POST' ,'action' => 'AdminUsersController@store','files'=>true]) !!}

<div class="form-group">
    {!! Form::label('name', 'User Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('photo_id', 'User Avatar') !!}
    {!! Form::file('photo_id',NULL, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('role_id', 'Role') !!}
    {!! Form::select('role_id', $roles,NULL, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('is_active', 'Status') !!}
    {!! Form::select('is_active', ['1' => 'Active','0' => 'InActive',],0, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create User', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}




@stop
