<?php
// internship.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diploma Internship v2.0 | SDM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .hero {
            background-color: #f8f9fa;
            padding: 80px 20px;
            text-align: center;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 20px;
        }
        footer {
            background-color: #212529;
            color: white;
            padding: 30px 20px;
        }
        .highlight-box {
            background: #e3f2fd;
            border-left: 5px solid #007bff;
            padding: 20px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">SDM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Syllabus</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Rules & Regulations</a></li>
                <li class="nav-item"><a class="btn btn-primary btn-sm ms-2" href="#">REGISTER</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="display-5">Diploma Internship v2.0</h1>
        <p class="lead">Kickstart Your Tech Career</p>
        <h6 class="text-primary fw-bold">#YourGrowth</h6>
        <a href="#" class="btn btn-success m-2">ENROLL NOW</a>
        <a href="#" class="btn btn-outline-primary m-2">CHECK SYLLABUS</a>
    </div>
</section>

<!-- Program Overview -->
<section class="container py-5">
    <h2 class="section-title">What is Diploma Internship v2.0?</h2>
    <p>A <strong>42-day Full Stack Web Development program</strong> combining hands-on learning with real-world projects. Led by mentor <strong>Sahil Makwana</strong>, participants will master Python, PostgreSQL, SQLAlchemy ORM, REST APIs, Svelte, SvelteKit, Git & GitHub, and Deployment.</p>

    <div class="row text-center my-4">
        <div class="col-md-4"><h3>6</h3><p>Functional Apps</p></div>
        <div class="col-md-4"><h3>1</h3><p>Full-Stack Project</p></div>
        <div class="col-md-4"><h3>42</h3><p>Days</p></div>
    </div>
</section>

<!-- Program Highlights -->
<section class="container py-5">
    <h2 class="section-title">Program Highlights & Structure</h2>
    <div class="highlight-box">
        <h5>6-Week Structure</h5>
        <p>Each week focuses on a specific aspect of full-stack development with progressive skill-building.</p>
    </div>
    <div class="highlight-box">
        <h5>Learning Format</h5>
        <p>Live coding sessions, hands-on assignments, and collaborative project work with real-world applications.</p>
    </div>
    <div class="highlight-box">
        <h5>Batch Timings</h5>
        <p>Morning (10:30 AM–12:30 PM) and Evening (9:00 PM–11:00 PM or 6:00 PM–8:00 PM) slots available.</p>
    </div>
    <div class="highlight-box">
        <h5>Support System</h5>
        <p>Regular doubt-solving sessions, personalized feedback, and mentorship to ensure continuous progress.</p>
    </div>
</section>

<!-- Certification & Benefits -->
<section class="container py-5">
    <h2 class="section-title">Certification, Benefits, and Expectations</h2>

    <h5>📜 Certificate of Completion</h5>
    <ul>
        <li>Awarded upon meeting all program requirements</li>
        <li>Special recognition for top performers</li>
        <li>Industry-recognized credentials</li>
    </ul>

    <h5>🎁 Program Benefits</h5>
    <ul>
        <li>Portfolio of 6 apps + 1 full-stack project</li>
        <li>Job-ready full-stack development skills</li>
        <li>Resume building and career guidance</li>
    </ul>

    <h5>📌 Participant Expectations</h5>
    <ul>
        <li>Adhere to code of conduct</li>
        <li>Attend sessions punctually</li>
        <li>Complete and submit assignments on time</li>
    </ul>
</section>

<!-- Fellowship Section -->
<section class="container py-5">
    <h2 class="section-title">SDM Freelance Fellowship</h2>
    <p>An Exclusive Opportunity for Top 10 Interns to Work on Real Projects & Earn</p>

    <h5>🔍 Fellowship Structure</h5>
    <ul>
        <li><strong>Selection:</strong> Based on final project, consistency, creativity, and discipline</li>
        <li><strong>Orientation:</strong> Fellowship rules, client expectations, and tools</li>
        <li><strong>Project Matching:</strong> Assigned based on skills (Web Dev, Content, AI, etc.)</li>
        <li><strong>Execution:</strong> Freelance tasks under SDM mentorship</li>
        <li><strong>Payment:</strong> Paid per milestone/project with performance reviews</li>
        <li><strong>Path:</strong> Top performers may continue long-term</li>
    </ul>

    <h5>📜 Terms & Conditions</h5>
    <ul>
        <li>Only Top 10 interns eligible</li>
        <li>Freelance basis only, not a job or extension</li>
        <li>Strict deadlines and quality standards</li>
        <li>Professional communication is mandatory</li>
    </ul>

    <h5>🎯 Perks</h5>
    <ul>
        <li>Real paid projects</li>
        <li>Mentorship and growth</li>
        <li>Strong resume portfolio</li>
    </ul>

    <a href="#" class="btn btn-outline-success m-2">Apply Now</a>
    <a href="#" class="btn btn-outline-primary m-2">Learn More</a>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <p class="mb-2">Shivai Digital Media - Empowering the next generation of developers</p>
        <p class="mb-1">📍 Gujarat, India</p>
        <p>📧 sahilmakwana.connect@gmail.com | 📞 +91 97250 57379</p>

        <div class="my-3">
            <a href="#" class="btn btn-sm btn-outline-light">Facebook</a>
            <a href="#" class="btn btn-sm btn-outline-light">Instagram</a>
            <a href="#" class="btn btn-sm btn-outline-light">LinkedIn</a>
            <a href="#" class="btn btn-sm btn-outline-light">YouTube</a>
        </div>

        <p class="mb-0">© 2025 SHIVAI Digital Media. All rights reserved. | <a href="#" class="text-white">www.shivaidm.live</a></p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
