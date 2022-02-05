@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Category_Id</th>
        <th>Image_url</th>
    </tr>

        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->image_url}}</td>
        </td>
        @endforeach
    </table>
</div>
@endsection()