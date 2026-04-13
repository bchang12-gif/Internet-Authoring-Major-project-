<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.0/css/all.min.css">

    @vite(['resources/css/Social.css', 'resources/js/app.js'])
</head>

<body>

<div class="navbar">
    <div class="logo">
        <img src="/images/uccCrest.avif" alt="UCC Crest">
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    <ul class="nav-links" id="navLinks">
        <li><a href="/"> Directory </a></li>
        <li><a href="/courses"> Courses </a></li>
        <li><a href="/admissions"> Admissions </a></li>
        <li><a href="/social" class="active"> Social </a> </li>
    </ul>
</div>

<h2 class="page-title"> Follow UCC IT deparment! </h2>
<div class="social-container">

    <div class="course">
        <i class="fab fa-facebook fa-3x icon facebook">  </i>
        <h3>Facebook</h3>
        <a href="https://www.facebook.com/uccjamaica/" target="_blank">
             Follow ucc Facebook page, thank you!
        </a>
    </div>

    <div class="course">
        <i class="fab fa-x-twitter fa-3x icon twitter"> </i>
        <h3> X </h3>
        <a href="https://x.com/UCCjamaica" target="_blank">
            Follow ucc X page, thank you!
        </a>
    </div>

    <div class="course">
        <i class="fab fa-instagram fa-3x icon instagram"></i>
        <h3>Instagram</h3>
        <a href="https://www.instagram.com/uccjamaica/" target="_blank">
           Follow ucc Insta page, thank you!
        </a>
    </div>

</div>

<a href="mailto:ithod@ucc.edu.jm" class="fab" title="Email Us">✉</a>

<script>
function toggleMenu() {
    document.getElementById("navLinks").classList.toggle("show");
}
</script>

</body>
</html>
