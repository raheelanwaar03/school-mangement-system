<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin Panel</title>
</head>
<body>
    <div class="container-fliud"> 
        <x-alert/>
        <div class="row">
        <div class="col-md-3">
         <div class="side-nav-inner">
            <div class="side-nav">
            <ul class="side-nav-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="side-nav-item">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.addStudent') }}">
                            <span class="side-nav-item">Add New Member</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.addStudent.show') }}">
                            <span class="side-nav-item">All Members</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.suspended.member') }}">
                            <span class="side-nav-item">Suspended Members</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.principalRole') }}">
                            <span class="side-nav-item">Principles</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.teacherRole') }}">
                            <span class="side-nav-item">All Teachers</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.studentRole') }}">
                            <span class="side-nav-item">All Students</span>
                        </a>
                    </li>
                </ul>
            </div>
         </div>
     </div>
     <div class="col-md-9">
         @yield('content')
     </div>
    </div>
</div>

</body>
</html>