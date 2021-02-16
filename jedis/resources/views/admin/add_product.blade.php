@extends('layout/admin_layout')
@section('header')
    
@endsection
@section('body')
   <link rel="stylesheet" href="/assets/css/sgrstyle.css">
    <h1> Add New Product </h1>
    <form action="add-new-product" method="POST" enctype="multipart/form-data" class="add_product_form">
        @csrf
        <label for=""> Product Category </label>
        <select name="category" >
            <option value=""> Select Category </option>
            @foreach ($data as $item)
                <option value="{{$item->cname}}"> {{$item->cname}} </option>
            @endforeach
        </select> <br>
        <label for=""> Enter Product Name</label>
        <input type="text" name="pname"> <br>

        <label for=""> Enter Product Price</label>
        <input type="text" name="price"> <br>

        <label for=""> Enter Product Quantity</label>
        <input type="text" name="qty"> <br>

        <label for=""> Enter Product Description</label>
        <textarea name="desc"></textarea> <br>

        <input type="file" name="image[]" multiple> 
        <br><br>
        <button type="submit"> Submit </button>
    </form>
    <div>
        <a href="/admin-panel" class="product"> Back To Panel </a>
   </div>
@endsection
@section('script')
    
@endsection