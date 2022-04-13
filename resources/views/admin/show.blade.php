@extends('adminLayout.app')

@section('content')
<div class="col-12">
    <h1 class="text-primary text-center">All Members</h1>
    <hr style="width: 300px" class="bg-primary">

</div>
    <div class="row">
        @foreach ($users as $user)
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h3>{{ $user->fullname }}</h3>
                    <p>{{ $user->email }}</p>
                    <p>{{ $user->address }}</p>
                    <p>{{ $user->role }}</p>
                    <a href="{{ route('admin.suspend',['id'=>$user->id]) }}" class="btn btn-danger">Suspend</a>
                    <a href="{{ route('admin.addStudent.edit',['id'=>$user->id]) }}" class="btn btn-danger">Edit Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection