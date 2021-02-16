@extends('layout/admin_layout')
@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/assets/css/sgrstyle.css">
@endsection
@section('body')

<p class="manage-title">Welcome <span>{{ Session::get('admin') }}</span> !</p>
    <div class="add-product-section">
        <span>Manage products here</span> 
        <a href="add-new-product" class="add-product"> Add Product </a>
    </div>
    <table border="0" id="productTable">
        <thead>
            <tr class="table-heading">
                <th colspan="9">Products</th>
            </tr>
            <tr>
                <th> # </th>
                <th> Image </th>
                <th> Product Category </th>
                <th> Product Name  </th>
                <th> Product price  </th>
                <th> Quantity </th>
                <th> Description </th>
                <th> Edit </th>
                <th> Delete </th>
            </tr>
        </thead>
        <tbody>

            @php   $counter = 0;   @endphp
                @foreach ($data as $item)
                    @php   $counter++;  @endphp
                    <tr>
                    <td> {{ $counter }} </td>
                    <td> <img @if (strpos($item->pimg, '|') !== false)
                        src="assets/images/{{substr($item->pimg, 0, strpos($item->pimg, '|'))}}"
                    @else
                        src="assets/images/{{$item->pimg}}"
                    @endif   alt="" width="150px"> 
                    </td>
                    <td> {{$item->cname}} </td>
                    <td> {{$item->pname}} </td>
                    <td> {{$item->pprice}} </td>
                    <td> {{$item->pqty}} </td>
                    <td> {{$item->pdesc}} </td>
                    <td> <a href="edit-product/{{$item->id}}" class="manage-edit-btn"> Edit</a> </td>
                    <td> <a href="delete-product/{{$item->id}}" class="manage-delete-btn"> Delete</a> </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    <div>
        <a href="/admin-panel" class="product"> Back To Panel </a>
    </div>
@endsection
@section('script') 
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#productTable').DataTable();
        });
    </script> 
@endsection
