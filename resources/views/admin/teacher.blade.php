@extends('adminLayout.app')

@section('content')
    <div class="col-md-9">
        <div class="row">
            <div class="col-12">
                <h1 class="text-primary text-center">All Teachers</h1>
                <hr style="width: 300px" class="bg-primary">
            </div>
            @foreach ($users as $user)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $user->fullname }}</h3>
                        <p>{{ $user->email }}</p>
                        <p>{{ $user->address }}</p>
                        <p>{{ $user->role }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('admin.suspend',['id'=>$user->id]) }}" class="btn btn-sm btn-danger">Suspend</a>
                        <a href="{{ route('admin.addStudent.destroy',['id'=>$user->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection