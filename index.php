<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MY PORTFOLIO</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
    *{margin:0;padding:0;box-sizing:border-box}
    html,body{height:100%;font-family:'Poppins',sans-serif;overflow-x:hidden;background:#111}
    main{width:100%}



    .main, .page2, .page3, .page4, .page5, .heading8, .dec1, .dec2 {
        min-height:100vh;
        width:100%;
        padding:80px 40px;
        background-size:cover!important;
        background-position:center!important;
        background-repeat:no-repeat!important;
        position:relative;
        overflow:hidden;
    }

    .main::before, .page2::before, .page3::before,
    .page4::before, .page5::before, .heading8::before, .dec1::before, .dec2::before {
        content:"";
        position:absolute;
        inset:0;
        background:rgba(0,0,0,0.40);
        z-index:1;
        will-change:opacity;
        backface-visibility:hidden;
    }
    main *{position:relative;z-index:2}

    .main, .page2, .page3, .page4, .page5, .heading8, .dec1, .dec2 {
        background-attachment:scroll!important; /* avoid jank */
        will-change:transform;
    }
    html{scroll-behavior:smooth}
    main > div, main > section { transform:translateZ(0) }

    h1{font-size:45px;font-weight:800;color:#fff;text-transform:uppercase;margin-bottom:24px;text-align:center}
    h2{font-size:38px;font-weight:700;color:#fff;margin-bottom:18px;text-align:center}
    h3{font-size:30px;font-weight:600;color:#fff;margin-bottom:14px;text-align:center}
    h4,h5,h6{font-size:26px;font-weight:600;color:#fff;margin-bottom:12px}

    p{color:#f1f1f1;line-height:1.7;margin-bottom:18px}

    .main {
        background-image: url("https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg");
        background-position:center bottom;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:flex-start;
    }
    .main h1{margin-top:40px}
    .main p{font-size:20px;margin-top:6px;color:#eee}
    .main-logo {
        margin-top:90px;
        width:150px;
        height:auto;
        display:block;
        border-radius:8px;
        box-shadow:0 6px 30px rgba(0,0,0,0.5);
    }

    .middle-buttons{
        position:absolute;
        top:60%;
        left:50%;
        transform:translate(-50%,-50%);
        width:80%;
        display:flex;
        justify-content:space-between;
        gap:20px;
    }
    .left-btn, .right-btn {
        padding:12px 26px;font-size:18px;border-radius:8px;border:none;background:rgba(255,255,255,0.15);color:#fff;backdrop-filter:blur(4px);cursor:pointer
    }

    .page2{ background-image:url("https://images.pexels.com/photos/34733315/pexels-photo-34733315.jpeg") }
    .page2 h1{margin-top:10px}
    .options {
        width:85%;
        margin:40px auto;
        list-style:none;
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:28px;
        padding:10px;
    }
    .options li a {
        display:block;padding:16px;font-size:18px;background:rgba(255,255,255,0.20);border-radius:10px;color:#fff;text-decoration:none;text-align:center;transition:all .18s ease;
    }
    .options li a:hover{transform:translateY(-6px);background:rgba(255,255,255,0.30)}

    .page3 { background-image:url("https://images.pexels.com/photos/6960358/pexels-photo-6960358.jpeg") }
    .page3 *{color:#fff}
    .options2 { margin-left:22px; margin-top:10px; color:#fff }
    .page4 {
    background-image: url("https://images.pexels.com/photos/6114984/pexels-photo-6114984.jpeg") !important;
    background-size: cover;
    background-position: center;
}

    .page5 { background-image:url("https://images.pexels.com/photos/1083728/pexels-photo-1083728.jpeg") }
    .heading7{font-size:42px;color:#fff;margin-bottom:18px;text-align:center}

    .heading8 {
        background-image: url("https://images.pexels.com/photos/8970679/pexels-photo-8970679.jpeg");
        background-size:cover;
        background-position:center;
        min-height:100vh;
        padding:80px 40px;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        text-align:center;
        position:relative;
    }
    .heading8::before { content:""; position:absolute; inset:0; background:rgba(0,0,0,0.45); z-index:1 }
    .heading8 * { position:relative; z-index:2; max-width:880px; }
    .heading8 .logo { width:160px;height:auto;margin-top:22px;display:block;border-radius:8px;box-shadow:0 8px 40px rgba(0,0,0,0.45) }

    .dec1{ background-image:url("https://images.pexels.com/photos/1291281/pexels-photo-1291281.jpeg"); display:flex;flex-direction:column;align-items:center;padding:70px 20px }
    .dec1 h1{margin-top:10px}
    .project-grid { width:100%; max-width:980px; display:grid; grid-template-columns:repeat(3,1fr); gap:22px; margin-top:18px }
    .project-card { background:rgba(255,255,255,0.03); border-radius:12px; overflow:hidden; padding:12px; text-align:left; box-shadow:0 6px 20px rgba(0,0,0,0.4) }
    .project-card img{width:100%;height:180px;object-fit:cover;border-radius:8px;display:block}
    .project-card h4{color:#fff;margin-top:12px;font-size:20px}
    .project-card p{color:#eee;font-size:15px;margin-top:8px;line-height:1.5}

    .project-img { width:300px;height:180px;object-fit:cover;border-radius:12px;margin:20px auto;display:block;box-shadow:0 4px 20px rgba(0,0,0,0.4) }

    .dec2{ background-image:url("https://images.pexels.com/photos/6446709/pexels-photo-6446709.jpeg"); text-align:center; color:#25a4c6; font-size:25px }

    .main-footer{
        background:linear-gradient(90deg,#0b2238,#03121b);
        color:#fff;
        padding:28px 20px;
        text-align:center;
    }
    .footer-container{font-size:16px;line-height:1.7}

    @media (max-width:980px){
        .options { grid-template-columns:repeat(2,1fr); width:90% }
        .project-grid { grid-template-columns:repeat(2,1fr); gap:18px }
    }
    @media (max-width:600px){
        h1{font-size:36px} h2{font-size:30px} h3{font-size:22px}
        .options { grid-template-columns:1fr; width:92%; margin:28px auto }
        .middle-buttons{position:static;transform:none;margin-top:32px;display:flex;justify-content:center;gap:12px}
        .main-logo{margin-top:60px;width:130px}
        .project-grid{grid-template-columns:1fr}
        .heading8{padding:60px 20px}
        .main, .page2, .page3, .page4, .page5, .heading8, .dec1, .dec2 { padding:60px 20px }
    }

    a{color:inherit}
    </style>
</head>
<body>
<main>

    <div class="main">
        <h1>MY PORTFOLIO</h1>
        <p>BACKEND DEVELOPMENT</p>

        <img src="Tata.png" alt="Logo" class="main-brand">

        <div class="middle-buttons">
                <a href="#page2" class="left-btn">MY PORTFOLIO</a>
                <a href="#page5" class="right-btn">2021 - 2025</a>

        </div>
    </div>

    <div class="page2" id="page2">

        <h1>TABLES OF CONTENTS</h1>

        <ul class="options">
            <li><a href="#">About Me</a></li>
            <li><a href="#">Skills & Expertise</a></li>
            <li><a href="#">Portfolio Overview</a></li>
            <li><a href="#">Branding & Logo Design</a></li>
            <li><a href="#">Print & Packaging Design</a></li>
            <li><a href="#">Digital & Web Design</a></li>
            <li><a href="#">Motion & Illustration Work</a></li>
            <li><a href="#">Client Testimonials & Collaborations</a></li>
            <li><a href="#">Get In Touch</a></li>
        </ul>
    </div>

    <div class="page3">
        <h2>ABOUT ME</h2>

        <h3>BACKGROUND</h3>
        <p>I’m a developer with a passion for transforming ideas into functional, beautiful websites.</p>

        <h3>EXPERIENCE</h3>
        <p>Experience is the knowledge, skills, and understanding a person gains over time.</p>

        <h4>SPECIALTIES</h4>
        <ul class="options2">
            <li>PHP development</li>
            <li>Web design</li>
            <li>Problem-solving</li>
            <li>Database management</li>
            <li>Communication skills</li>
        </ul>
    </div>

    <div class="page4">
        <h4>SKILLS AND EXPERTISE</h4>
        <h4>SOFTWARE</h4>
        <p class="soft-desc">The software skills and expertise you have gained...</p>

        <h5>DESIGN AREA</h5>
        <p class="design-desc">The design area is the part of a project where creative work happens...</p>

        <h6>ADDITIONAL SKILLS</h6>
        <p class="additional-desc">Additional skills are extra abilities that support your main expertise...</p>
    </div>

    <div class="page5">
        <div class="heading7">PORTFOLIO OVERVIEW</div>

        <p>
            Portfolio Overview provides a brief introduction to your body of work.  
            It highlights your key projects, skills, and creative approach.
        </p>

        <p class="bullets">
            • Showcases a curated selection of my best work.<br>
            • Highlights real-world projects demonstrating creativity & technical skills.<br>
            • Provides a clear understanding of my design style & working process.
        </p>
    </div>

    <section class="heading8">
        <h2>Branding & Logo Design</h2>

        <p>
            Branding is the visual and emotional identity of a company. It reflects who you are, 
            what you stand for, and how you communicate your message to the world.
        </p>

        <p>
            My logo design strategy focuses on simplicity, relevance, and long-term adaptability.  
            I design clean, modern, and memorable logos that represent a brand’s values.
        </p>

        <h3>Logo Example</h3>
        <img src="https://t4.ftcdn.net/jpg/01/18/87/59/360_F_118875926_Cm6cDyP5UvkhPZzTW1oGPieXEhIyOpMQ.jpg" alt="My Logo" class="logo">
    </section>

    <section class="dec1">
        <h1>DIGITAL & WEB DESIGN</h1>
        <p>Focuses on creating visually appealing, user-friendly designs...</p>

        <div class="project-grid">

    <a href="project1.php" class="project-card">
            <img src="https://images.pexels.com/photos/2882568/pexels-photo-2882568.jpeg" alt="Project 01" class ="ss">
            <h4>Project 01</h4>
            <p>HTML is the standard language used to create web pages...</p>
    </a>

    <a href="project2.php" class="project-card">
            <img src="https://images.pexels.com/photos/34804002/pexels-photo-34804002.jpeg" alt="Project 02">
            <h4>Project 02</h4>
            <p>The process of creating modern and visually appealing experiences...</p>
    </a>

    <a href="project3.php" class="project-card">
            <img src="https://images.pexels.com/photos/3184636/pexels-photo-3184636.jpeg" alt="Project 03">
            <h4>Project 03</h4>
            <p>Responsive layouts, accessibility and performance focused.</p>
    </a>

</div>

<!-- MOTION & ILLUSTRATION PAGE -->
<section class="neww-section">

    <h1>MOTION & ILLUSTRATION</h1>
    <p>Explore creative animations, vector illustrations, and UI micro-interactions.</p>

    <div class="neww">

        <!-- PROJECT 01 -->
        <a href="motion1.php" class="project-card">
            <img src="https://images.pexels.com/photos/7676334/pexels-photo-7676334.jpeg" alt="Motion Project 01">
            <h4>Logo Animation</h4>
            <p>A clean and modern animated logo reveal showcasing brand identity.</p>
        </a>

        <!-- PROJECT 02 -->
        <a href="motion2.php" class="project-card">
            <img src="https://images.pexels.com/photos/1809644/pexels-photo-1809644.jpeg" alt="Illustration Project 02">
            <h4>Vector Illustration</h4>
            <p>A custom-made character illustration focusing on shapes & color harmony.</p>
        </a>

        <!-- PROJECT 03 -->
        <a href="motion3.php" class="project-card">
            <img src="https://images.pexels.com/photos/1827373/pexels-photo-1827373.jpeg" alt="Motion Project 03">
            <h4>UI Animation</h4>
            <p>A smooth micro-interaction animation designed for apps & websites.</p>
        </a>

    </div>

</section>



    </section>
<div class="options7">

    <section class="dec2">
        <h1>PROFESSIONAL & CLEAN VERSION</h1>
        <p>I’m a beginner developer/designer, open to learning and collaborating.</p>
    </section>

    </main>

    <footer class="main-footer">
        <div class="footer-container">
            <strong>Talib Ahmad Siddiqui</strong><br>
            Email: example@gmail.com <br>
            Contact: +91 8909876528
        </div>

</div>
</footer>

</body>
</html>
