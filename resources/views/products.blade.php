@extends('layouts.Adminapp')

@section('content')

    <div class="container offset-2 col-8 offset-2">
        <form method="post" action="">
            <h1 align="center"> Add New Product</h1>
            @csrf
            <input type="text" class="form-control" placeholder="Product Name" name="product">
            <br>
            <input type="text" class="form-control" placeholder="Product Price" name="price">
            <br>
            <input type="text" class="form-control" placeholder="Product Category" name="category">
            <br>
            <textarea rows="3" class="form-control" placeholder="Product Description" name="desc"></textarea>
            <br>
            <input type="file"  name=""image>
            <br><br>
            <input type="submit" class="btn btn-success" value="Save Product" name="store">
            <input type="reset" class="btn btn-danger" value="Reset">

        </form>
    </div>

@endsection
