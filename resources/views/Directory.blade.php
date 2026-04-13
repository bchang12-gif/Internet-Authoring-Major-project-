<!DOCTYPE html>
<html>
<head>
    <title> Directory </title>
    @vite(['resources/css/Directory.css', 'resources/js/app.js'])
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="/images/uccCrest.avif" alt="UCC Crest">
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    <ul class="nav-links" id="navLinks">
        <li><a href="/" class="active"> Directory </a></li>
        <li><a href="/courses"> Courses </a></li>
        <li><a href="/admissions"> Admissions </a></li>
        <li><a href="/social"> Social </a></li>
    </ul>
</div>

<h1 class="page-title"> UCC Faculty Directory </h1>

<div class="courses-container">

    <div class="course">
        <img src="/images/istockphoto-2150163129-612x612.jpg" alt="Ms. Jacklin Sterlin">
        <h3> Ms. Jack Sterlin </h3>
        <h3> Head of UCC IT department </h3>
        <p><a href="tel:1-876-456-8989"> Call 1-876-456-8989</a></p>
        <h3 p><a href="mailto:ithod@ucc.edu.jm"> Email </a></p></h3>
    </div>

    <div class="course">
        <img src="/images/images.jfif" alt=" Mr. Collen Mclean">
        <h3> Mr. Collen Mclean </h3>
        <h3> Vice - Head of UCC IT department </h3>
        <p><a href="tel:1-876-456-8989"> Call 1-876-456-8989</a></p>
        <h3 p><a href="mailto:ithod@ucc.edu.jm"> Email </a></p></h3>
    </div>

     <div class="course">
        <img src="/images/Teacher.jfif" alt="Ms. Kayla Smith">
        <h3> Ms. Kayla Smith </h3>
        <h3> Lecturer </h3>
        <p><a href="tel:1-876-456-8989"> Call 1-876-456-6756</a></p>
        <h3 p><a href="mailto:ucconline@ucc.edu.jm"> Email </a></p></h3>
    </div>
    
      <div class="course">
        <img src="/images/male teacher (1).jfif" alt="Mr. Adam Pual">
        <h3> Mr. Adam Pual </h3>
        <h3> Lecturer </h3>
        <p><a href="tel:1-876-456-8989"> Call 1-876-456-6756</a></p>
        <h3 p><a href="mailto:ucconline@ucc.edu.jm"> Email </a></p></h3>
    </div>
</div>

<a href="mailto:ithod@ucc.edu.jm" class="fab" title="Email Us"> ✉ </a>

<script>
function toggleMenu() {
    document.getElementById("navLinks").classList.toggle("show");
}
</script>

</body>
</html>
