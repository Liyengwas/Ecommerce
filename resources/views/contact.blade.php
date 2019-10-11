@extends('layouts.app')

@section('content')
    <div class="container offset-3 col-6 offset-3">
        <h1 align="center">DROP US A MESSAGE </h1>
        <form method="post" action="">
            <input type="text" class="form-control" placeholder="Your Full names" required>
            <br>
            <input type="text" class="form-control" placeholder="Your Email Address" required>
            <br>
            <input type="text" class="form-control" placeholder="Your Subject">
            <br>
            <textarea class="form-control" placeholder="Your Message..." rows="3"></textarea>
            <br>
            <input type="submit" class="btn btn-outline-success" value="Send Message">
            <input type="reset" class="btn btn-outline-danger" value="Reset">
        </form>
    </div>


@endsection

