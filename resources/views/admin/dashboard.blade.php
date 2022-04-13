@extends('adminLayout.app')
@section('content')
    <div class="col-md-9">
    <div class="d-flex justify-content-around align-items-center">
        <h1 class="text-primary">Welcome Admin: {{ Auth::user()->name   }}</h1>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
    </div>
@endsection