@extends('layout/admin_layout')
@section('header')
    
@endsection
@section('body')
<link rel="stylesheet" href="/assets/css/sgrstyle.css">

    <h1 class="manage-title"> Edit Product :<span>{{$data[0]->pname}}</span></h1>
    <form action="edit-product" method="POST" enctype="multipart/form-data" class="edit-form">
        @csrf
        <label for="" class="edit-form-label"> Product Category </label>
        <select name="category" >
            <option value=""> Select Category </option>
            <option value="men" @if ($data[0]->cname == 'men') selected @endif> Men </option>
            <option value="women" @if ($data[0]->cname == 'women') selected @endif> Women </option>
        </select> <br>
        <label for="" class="edit-form-label"> Enter Product Name</label>
        <input type="text" name="pname" value="{{$data[0]->pname}}"> <br>

        <label for="" class="edit-form-label"> Enter Product Price</label>
        <input type="text" name="price" value="{{$data[0]->pprice}}"> <br>

        <label for="" class="edit-form-label"> Enter Product Quantity</label>
        <input type="text" name="qty" value="{{$data[0]->pqty}}"> <br>

        <label for="" class="edit-form-label"> Enter Product Description</label>
        <textarea name="desc"> {{$data[0]->pdesc}} </textarea> <br>

        @php 
            $imgs = explode('|',$data[0]->pimg);
            $counter = 0;
        @endphp
        <div class="images-div">
            @foreach ($imgs as $item)
                @php  $counter++;  @endphp
                @if ($item != '0')
                    <div class="sub-image-div">
                        <img src="/assets/images/{{$item}}" alt="" width="150px" class="img-{{$counter}}">
                        <input type="hidden" name="image{{$counter}}" value="{{$item}}" counter="{{$counter}}">
                        <span class="rm-img" > X </span>
                    </div>    
                @endif
            @endforeach
        </div>
        <input type="hidden" name="total_prev_image" class="total_prev_image">
        <input type="hidden" name="product_id" value="{{$data[0]->id}}">
        <br>
        <input type="file" name="image[]" multiple> 
        
        <br><br>
        <button type="submit" class="button-submit edit-submit" style="width: 10%;"> Submit </button>
        <div>
            <a href="/admin-panel" class="product"> Back To Panel </a>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.button-submit').click(function(){
                var arr = [];
                $('.sub-image-div input').each(function(){
                    var val = parseInt($(this).attr('counter'));
                    arr.push(val);                    
                });
                $('.total_prev_image').val(arr);
            });

            $('.rm-img').click(function(){
                $(this).parent('.sub-image-div').remove();
            })
        });
    </script>
@endsection