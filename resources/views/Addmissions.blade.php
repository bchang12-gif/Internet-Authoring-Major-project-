<!DOCTYPE html>
<html>
<head>
    <title> Admissions </title>
    
    @vite(['resources/css/Addmissions.css', 'resources/js/app.js'])

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
        <li><a href="/admissions" class="active"> Admissions </a></li>
        <li><a href="/social"> Social </a></li>
    </ul>
</div>

<h1 class="page-title"> UCC Admissions Requirements </h1>

<div class="content-box">

    <p> Minimum of five 5 CSEC/GCE subjects including English and Math. </p>
    <p> Grades A's - C's or 1 - 3 required. </p>

    <p> Applicants with 4 subjects may complete UCC replacement courses. </p>

    <p> Mature Entry: 25+ years, 5 years work experience required. </p>

    <p> For more information, please tap the "Apply Now" button located below. </p>

    <br>

    <a href="https://www.ucc.edu.jm/apply" target="_blank" class="apply-btn">
        Apply Now
    </a>

</div>

<a href="mailto:ithod@ucc.edu.jm" class="fab" title="Email Us"> ✉ </a>

<script>
function toggleMenu() {
    document.getElementById("navLinks").classList.toggle("show");
}
</script>

</body>
</html>
