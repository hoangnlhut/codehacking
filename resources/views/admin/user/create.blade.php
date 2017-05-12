@extends('layouts.admin')


@section('content')

<h1>Create users</h1>

    {!! Form::open(['method'=>'POST', 'action' => 'AdminUsersController@store', 'files'=>true]) !!}

            {{--Nếu ko dùng laravel collective HTML thì phải có thêm dòng này--}}
            {{--{{ csrf_field() }}--}}

            <div class="form-group">
                {{ Form::label('name', 'Name:') }}
                {{ Form::text('name', null , ['class'=>'form-control'] ) }}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', $roles, null, ['placeholder'=>'Choose a role', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}
                {{--default value is 0--}}
                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                  {!! Form::label('file', 'Upload File:') !!}
                  {!! Form::file('file',null,  ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                  {!! Form::label('password', 'Password:') !!}
                  {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
            </div>

    {!! Form::close() !!}

@include('includes.form_error')

@stop