<!DOCTYPE html>
<html>
<head>
    <title> Home </title>

    @vite(['resources/css/Home.css', 'resources/js/app.js'])
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="/images/uccCrest.avif" alt="UCC Crest">
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    <ul class="nav-links" id="navLinks">
        <li><a href="/" class="active"> Home </a></li>
        <li><a href="/"> Directory </a></li>
        <li><a href="/courses"> Courses </a></li>
        <li><a href="/admissions"> Admissions </a></li>
        <li><a href="/social"> Social </a></li>
    </ul>
</div>

<div class="hero">

    <div class="hero-text">
        <h1>Welcome to the IT Department</h1>

        <p>
            Your gateway to innovation, technology, and endless possibilities.
            Whether you're just getting started or continuing your journey,
            we're here to guide you every step of the way.
        </p>

        <p>
            Explore programs, connect with staff, and discover opportunities
            designed to help you grow in the world of Information Technology.
        </p>

        <a href="/courses" class="hero-btn">Explore Courses</a>
    </div>

    <div class="hero-image">
        <img src="/images/ucc (1).jfif" alt=" UCC Campus">
    </div>

</div>

<div class="info-section">

    <div class="info-card">
        <h2>New to IT?</h2>
        <p>
            Start your journey with helpful resources, guidance, and support
            to make your transition smooth and exciting.
        </p>
    </div>

    <div class="info-card">
        <h2>Find Your Path</h2>
        <p>
            Browse our wide range of courses and discover what fits your
            passion and career goals.
        </p>
    </div>

    <div class="info-card">
        <h2>Stay Connected</h2>
        <p>
            Keep up with updates, events, and important announcements
            happening within the department.
        </p>
    </div>

</div>

<a href="mailto:ucconline@ucc.edu.jm" class="fab"> ✉ </a>

<script>
function toggleMenu() {
    document.getElementById("navLinks").classList.toggle("show");
}
</script>

</body>
</html>
