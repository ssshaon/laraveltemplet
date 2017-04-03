 @extends('Admin.layouts.master')
 @section('add_user','active')
 @section('main_title','Add New User')

 @section('content_title','Add New User')
 @section('content')

     @if(Session::has('message'))
         <h2 class="btn btn-success">{{Session::get('message')}}</h2>
         @endif
   {!! Form::open(['url'=>'admin/users/store']) !!}

   {!! Form::label('name','UserName') !!}
   {!! Form::text('name',null,['placeholder'=>'something']) !!}
   {!! Form::label('email','Email') !!}
   {!! Form::email('email') !!}
   {!! Form::label('password','Password') !!}
   {!! Form::password('password') !!}

   {!! Form::submit('Save') !!}

     {!! Form::close() !!}
     @endsection