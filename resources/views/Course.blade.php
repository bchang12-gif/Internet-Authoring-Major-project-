<!DOCTYPE html>
<html>
<head>
    <title> My Courses </title>

    @vite(['resources/css/Course.css', 'resources/js/app.js'])
</head>
<body>

{{ dd($courses); }}
    
<div class="navbar">
    <div class="logo">
        <img src="/images/uccCrest.avif" alt="UCC Crest">
    </div>

    <ul class="nav-links">
        <li><a href="/"> Directory </a></li>
        <li><a href="/courses" class="active"> Courses </a></li>
        <li><a href="/admissions"> Admissions </a></li>
        <li><a href="/social"> Social </a></li>
    </ul>
</div>

<h1 class="page-title"> My Courses </h1>

<div class="courses-container">

@foreach($courses as $course)

    <div class="course">
        <h3>{{ $course->code }} - {{ $course->name }}</h3>

        <p><strong> Credits:</strong> {{ $course->credits }}</p>

        <p><strong> Prerequisites: </strong> {{ $course->prerequisites }}</p>

        <p>{{ $course->description }}</p>
    </div>

@endforeach

</div>

<a href="mailto:ucconline@ucc.edu.jm" class="fab" title="Email Us"> ✉ </a>

</body>
</html>
