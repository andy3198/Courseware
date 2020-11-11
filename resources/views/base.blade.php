<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
    
    <title>Blade</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">D'Invi.AndyJee</a>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/instructor')}}">Instructor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/learner')}}">Learner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/course')}}">Course</a>
                </li>
            
            </ul>
        </div>
    </nav>

<div class="container">
    @yield('content')
</div>

   <div>
    @yield('content2')
   </div>
</body>
</html>