@extends('layout/admin_layout')
@section('header')
   <link rel="stylesheet" href="/assets/css/sgrstyle.css">
@endsection
@section('body')
<div class="panel">
   <p class="title">Welcome <span>{{ Session::get('admin') }}</span>..!</p>
   <p> <a href="admin/logout" class="logout-btn"> Logout </a></p>

   <a href="manage-product" class="product"> Manage Products </a>
   <!-- <a href="manage-users" class="users"> Manage Users </a> -->
</div>
@endsection
@section('script')
    
@endsection
