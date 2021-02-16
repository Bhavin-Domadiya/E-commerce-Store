@extends('layout/admin_layout')
@section('header')
    
@endsection
@section('body')
<link rel="stylesheet" href="/assets/css/sgrstyle.css">
<p class="manage-title">Welcome <span>{{ Session::get('admin') }}</span> !</p>
   <p class="manage-user">Manage Users here</p>
   <div style="text-align: center;">
   		<a href="/admin-panel" class="product"> Back To Panel </a>
   </div>
@endsection
@section('script')
    
@endsection
