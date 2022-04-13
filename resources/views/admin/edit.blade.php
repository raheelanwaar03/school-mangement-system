@extends('adminLayout.app')

@section('content')

     <div>
         <h1 class="text-primary text-center">Edit Users Details</h1>
     </div>

<div class="card mr-2">
    <div class="card-body">
        <form action="{{ route('admin.addStudent.update',['id'=>$user->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter User's Full Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter User's Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter User's Password">
            </div>
            <div class="form-group">
                <label for="adderss">Adderss</label>
                <input type="text" class="form-control" id="adderss" name="adderss" placeholder="Enter User's Adderss">
            </div>
            <div class="form-group">
                <label for="role">Select User Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="">Select User Role</option>
                    <option value="principal">Principal</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection