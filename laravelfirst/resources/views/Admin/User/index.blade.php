@extends('Admin.layouts.master')
@section('alluser_menu','active')
@section('main_title','All User List')

@section('content_title','All User')
@section('content')
    @if(Session::has('message'))
        <h2 class="btn btn-success">{{Session::get('message')}}</h2>
    @endif
   <table class="table table-bordered">
       <thead>
       <tr>
           <th>Id</th>
           <th>Email</th>
           <th>Name</th>
           <th>Action</th>
       </tr>
       @foreach($allUser as $user)
       <tr>
           <td>{{$user->id}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->name}}</td>
           <td>
               <a href="{{url('/admin/user',[$user->id, 'edit'])}}">Edit</a>
           </td>

       </tr>
           @endforeach

       </thead>

   </table>
    {{$allUser->links()}}
    @endsection

