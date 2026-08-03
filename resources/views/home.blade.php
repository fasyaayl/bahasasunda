<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SuraSunda - E-Learning Basa Sunda</title>

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Plus Jakarta Sans',sans-serif;
    background:#f8f7f3;
    color:#222;
}

a{
    text-decoration:none;
}

.container{
    width:90%;
    max-width:1180px;
    margin:auto;
}

/* ================= NAVBAR ================= */

header{
    background:white;
    border-bottom:1px solid #e8e3da;
}

.navbar{
    height:75px;
    display:flex;
    align-items:center;
    justify-content:space-between;
}

.logo{
    display:flex;
    align-items:center;
    gap:12px;
}

.logo-box{
    width:45px;
    height:45px;
    border-radius:12px;
    background:#16863f;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:20px;
    font-weight:bold;
}

.logo h2{
    color:#176c38;
    font-size:24px;
}

.logo p{
    font-size:11px;
    color:#888;
}

.nav-right{
    display:flex;
    gap:15px;
}

.btn-login{
    padding:11px 22px;
    border:1px solid #16863f;
    border-radius:8px;
    color:#16863f;
    font-weight:600;
}

.btn-login:hover{
    background:#16863f;
    color:white;
}

.btn-register{
    padding:11px 22px;
    background:#16863f;
    border-radius:8px;
    color:white;
    font-weight:600;
}

.btn-register:hover{
    background:#126d34;
}

/* ================= HERO ================= */

.hero{
    padding:90px 0;
}

.hero-content{
    display:grid;
    grid-template-columns:1fr 1fr;
    align-items:center;
    gap:60px;
}

.hero h1{
    font-size:50px;
    line-height:1.25;
    margin-bottom:20px;
}

.hero h1 span{
    color:#16863f;
}

.hero p{
    color:#666;
    line-height:1.8;
    margin-bottom:35px;
}

.hero-buttons{
    display:flex;
    gap:15px;
}

.btn-main{
    background:#16863f;
    color:white;
    padding:15px 28px;
    border-radius:10px;
    font-weight:600;
}

.btn-main:hover{
    background:#126d34;
}

.btn-outline{
    border:1px solid #16863f;
    color:#16863f;
    padding:15px 28px;
    border-radius:10px;
    font-weight:600;
}

.btn-outline:hover{
    background:#16863f;
    color:white;
}

.hero-card{
    background:white;
    border-radius:20px;
    padding:35px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
}

.hero-card h3{
    color:#16863f;
    margin-bottom:25px;
}

.stat{
    margin-bottom:20px;
}

.stat-title{
    font-size:14px;
    margin-bottom:8px;
}

.progress{
    width:100%;
    height:12px;
    background:#eee;
    border-radius:20px;
    overflow:hidden;
}

.progress span{
    display:block;
    height:100%;
    background:#16863f;
}

.badge{
    margin-top:25px;
    display:inline-block;
    background:#e8f5ea;
    color:#16863f;
    padding:10px 18px;
    border-radius:8px;
    font-weight:600;
}

/* ================= FITUR ================= */

.section{
    padding:70px 0;
}

.section h2{
    text-align:center;
    font-size:36px;
    margin-bottom:50px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.card{
    background:white;
    border-radius:15px;
    padding:30px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,.05);
}

.icon{
    width:65px;
    height:65px;
    border-radius:15px;
    background:#16863f;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:28px;
    margin:auto;
    margin-bottom:20px;
}

.card h3{
    margin-bottom:10px;
}

.card p{
    color:#777;
    line-height:1.6;
}

/* ================= CTA ================= */

.cta{
    margin:90px 0;
    background:#16863f;
    color:white;
    border-radius:20px;
    text-align:center;
    padding:70px 20px;
}

.cta h2{
    font-size:40px;
    margin-bottom:15px;
}

.cta p{
    margin-bottom:30px;
    color:#dff3e5;
}

.cta a{
    background:white;
    color:#16863f;
    padding:15px 30px;
    border-radius:10px;
    font-weight:700;
}

footer{
    padding:35px;
    text-align:center;
    color:#888;
}

@media(max-width:900px){

.hero-content{
grid-template-columns:1fr;
}

.cards{
grid-template-columns:1fr;
}

.hero h1{
font-size:38px;
}

.navbar{
flex-direction:column;
height:auto;
padding:20px 0;
gap:20px;
}

}
</style>

</head>
<body>

<header>

<div class="container navbar">

<div class="logo">

<div class="logo-box">▣</div>

<div>
<h2>SuraSunda</h2>
<p>E-Learning Basa Sunda</p>
</div>

</div>

<div class="nav-right">

<a href="{{ route('login') }}" class="btn-login">
Masuk
</a>

<a href="{{ route('register') }}" class="btn-register">
Daftar
</a>

</div>

</div>

</header>

<section class="hero">

<div class="container hero-content">

<div>

<h1>
Belajar <span>Bahasa Sunda</span><br>
Lebih Mudah dan Menyenangkan
</h1>

<p>
SuraSunda merupakan platform pembelajaran Bahasa Sunda yang menyediakan materi, latihan soal, kuis, riwayat nilai, peringkat, dan pencapaian untuk membantu siswa belajar secara interaktif.
</p>

<div class="hero-buttons">

<a href="{{ route('register') }}" class="btn-main">
Mulai Belajar
</a>

<a href="{{ route('login') }}" class="btn-outline">
Masuk
</a>

</div>

</div>

<div class="hero-card">

<h3>Progress Belajar</h3>

<div class="stat">
<div class="stat-title">Materi</div>
<div class="progress">
<span style="width:70%"></span>
</div>
</div>

<div class="stat">
<div class="stat-title">Latihan</div>
<div class="progress">
<span style="width:85%"></span>
</div>
</div>

<div class="stat">
<div class="stat-title">Nilai</div>
<div class="progress">
<span style="width:90%"></span>
</div>
</div>

<div class="badge">
Belajar kapan saja 📖
</div>

</div>

</div>

</section>

<section class="section">

<div class="container">

<h2>Fitur SuraSunda</h2>

<div class="cards">

<div class="card">
<div class="icon">📖</div>
<h3>Materi</h3>
<p>Pelajari materi Bahasa Sunda dari dasar hingga lanjutan.</p>
</div>

<div class="card">
<div class="icon">📝</div>
<h3>Kuis</h3>
<p>Kerjakan latihan dan evaluasi kemampuanmu.</p>
</div>

<div class="card">
<div class="icon">🏆</div>
<h3>Peringkat</h3>
<p>Bersaing dengan siswa lain melalui sistem leaderboard.</p>
</div>

</div>

</div>

</section>

<div class="container">

<section class="cta">

<h2>Siap Belajar?</h2>

<p>
Daftar sekarang dan mulai perjalanan belajar Bahasa Sunda bersama SuraSunda.
</p>

<a href="{{ route('register') }}">
Daftar Sekarang
</a>

</section>

</div>

<footer>

© {{ date('Y') }} SuraSunda • E-Learning Basa Sunda

</footer>

</body>
</html>