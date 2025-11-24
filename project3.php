<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Project 03</title>

<style>
body {
    margin: 0;
    padding: 0;
    background: #111;
    font-family: Poppins, sans-serif;
    color: #fff;
}

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

.project-box img {
    width: 100%;
    max-width: 300px;
    height: 170px;
    object-fit: cover;
    border-radius: 12px;
    margin-bottom: 18px;
}

h2 { font-size: 26px; }
p  { font-size: 16px; color:#ddd; }

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

    <img src="https://images.pexels.com/photos/3184636/pexels-photo-3184636.jpeg">

    <h2>Project 03</h2>

    <p>
        Responsive layouts, accessibility and performance focused.
    </p>

    <button class="back-btn" onclick="history.back()">⬅ BACK</button>

</div>

</body>
</html>
