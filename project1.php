<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Project 01</title>

<style>
body {
    margin: 0;
    padding: 0;
    background: #111;
    font-family: Poppins, sans-serif;
    color: #fff;
}

/* WRAPPER */
.project-box {
    width: 90%;
    max-width: 520px;
    margin: 60px auto;
    background: rgba(255,255,255,0.05);
    padding: 25px;
    border-radius: 14px;
    text-align: center;
    box-shadow: 0 0 25px rgba(0,0,0,0.5);
}

/* SMALL IMAGE */
.project-box img {
    width: 100%;
    max-width: 300px;
    height: 170px;
    object-fit: cover;
    border-radius: 12px;
    margin-bottom: 18px;
}

h2 {
    font-size: 26px;
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    line-height: 1.6;
    color: #ddd;
}

.back-btn {
    margin-top: 16px;
    padding: 10px 20px;
    background: #0a84ff;
    color: white;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}
</style>
</head>

<body>

<div class="project-box">

    <img src="https://images.pexels.com/photos/2882568/pexels-photo-2882568.jpeg">

    <h2>Project 01</h2>

    <p>
        HTML is the standard language used to create web pages...
    </p>

    <button class="back-btn" onclick="history.back()">⬅ BACK</button>

</div>

</body>
</html>
