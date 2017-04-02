@extends('Admin.layouts.master')
 @section('add_user','active')
 @section('main_title','Edit User')

 @section('content_title','Edit User')
 @section('content')

     @if(Session::has('message'))
         <h2 class="btn btn-success">{{Session::get('message')}}</h2>
     @endif
     {!! Form::model($data,['url'=>'admin/user/'.$data->id.'/update']) !!}

     {!! Form::label('name','UserName') !!}
     {!! Form::text('name', null,['placeholder'=>'something']) !!}
     {!! Form::label('email','Email') !!}
     {!! Form::email('email') !!}


     {!! Form::submit('Save') !!}

     {!! Form::close() !!}
 @endsection