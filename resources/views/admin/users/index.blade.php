@extends('layouts.admin')
@section('title')
<title>All Users | Admin</title>
@stop

@section('content')
<h1 class="page-header">All Users</h1>

<table class="table table-striped">
   <thead>
     <tr>
       <th>Name</th>
       <th>Email</th>
       <th>Role</th>
       <th>Created</th>
       <th>Last Updated</th>
       <th>Status</th>
     </tr>
   </thead>
   <tbody>
     @if($users)
     @foreach($users as $user)
     <tr>
       <td>
           @if(isset($user->photo->path))
           <img src="../images/{{$user->photo->path ? $user->photo->path : "user.png"}}"  height="50" width="50">
            @else
               <img src="../images/user.png" height="50" width="50">
               @endif
       </td>
       <td>{{$user->name}}</td>
       <td>{{$user->email}}</td>
       <td>{{$user->role->name}}</td>
       <td>{{$user->created_at->diffForHumans()}}</td>
       <td>{{$user->updated_at->diffForHumans()}}</td>
       <td>{{$user->is_active == 1 ? "Active" : "InActive"}}</td>
     </tr>
     @endforeach
     @endif
   </tbody>
 </table>
@stop
