<html>
<head>
    <meta charset="utf-8">
    <title>My First CI App</title>
    <style>
    body {
        background-image: url("<?=base_url()?>asset/bg.jpg");
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        font-family: cursive;
        margin-left: 200px;
        margin-right: 200px;
    }
    img {
        border: 3px solid red;
        width: 120px;
        height: 170px;
        position: relative;
    }

    #container{
        text-align: center;
    }

    h1,h3 {
        color: white;
    }

    p {
        color: white;
    }
    </style>
</head>
<body>
    
<div id="container">
    <!-- <marquee behavior="" direction="right" speed ><h1>Hello World</h1></marquee>

    <div id="body">
        <p>Selamat kamu sudah bisa menggunakan konsep Controller dan View pada CI.</p>
    </div> -->
    <marquee behavior="" direction="right" speed ><H1>Biodata</H1></marquee>
    <p>
    <img src="<?=base_url()?>asset/alfian.jpg"><br><br>
    Nama    : Muhammad Alfian<br>
    Ttl     : Banyuwangi, 29 Agustus 2001<br>
    Kelas   : XI Rpl 2<br>
    Absen   : 25
    </p>
    <br><h3><b>Perkenalan Singkat</b></h3>
    <p>Perkenalkan nama saya Muhammad Alfian, biasa dipanggil Alfian ya biasanya dipanggil Fian juga. Saya lahir di Banyuwangi pada tanggal 29 Agustus 2001, dan saya merupakan anak pertama dari dua bersaudara. Saya sendiri berasal dari keluarga yang sederhana dan tinggal di Desa yang cukup dekat dengan tempat keramaian. </p>
</div>

</body>
</html>