<!-- sidebar  -->
<div class="sidebar" draggable="false">
    <ul class="menu">
        <img src="../../assets/logo_sidebar.jpg" alt="">
        <!-- <li><a href="profilePetani.php"><i class="fa-solid fa-user"></i>Profile</a></li> -->
        <br><br><br><br>
        <li class="nav"><a href="_dashboardPengelola.php"><i class="fa-solid fa-compass"></i>Home</a></li>
        <li class="nav"><a href="_katalogPenyakitPengelola.php"><i class="fa-solid fa-bug"></i>Katalog Penyakit</a></li>
        <li class="nav"><a href="_katalogBudidayaPengelola.php"><i class="fa-solid fa-lemon"></i>Katalog Budidaya</a></li>
        <li class="nav"><a href="_kalkulatorPupuk.php"><i class="fa-solid fa-calculator"></i>Kalkulasi pupuk</a></li>
        <li class="nav"><a href="#"><i class="fa-solid fa-seedling"></i>Formulasi pupuk</a></li>
        <li class="nav"><a href="#"><i class="fa-solid fa-book"></i>Pencatatan</a></li>
        <li class="nav"><a href="_cuaca.php"><i class="fa-solid fa-cloud"></i>Cuaca</a></li>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- <li><a href="../../config/logout.php"><i class="fa-solid fa-power-off"></i>Logout</a></li> -->
    </ul>
</div>
<script src="https://kit.fontawesome.com/9f5461f601.js" crossorigin="anonymous"></script>

<style>
img{
    border-radius: 60%;
    width: 50%;
    margin-left: 60px;
    margin-top: 30px;
}

body {
    margin: 0;
    font-family: 'poppins' , Times, serif;
    font-size: 10px;
    color: #333;
    -webkit-text-size-adjust: 40%;
    -webkit-tap-highlight-color: transparent;
}

main {
    display: flex;
    flex-wrap: nowrap;
    height: -webkit-fill-availeble;
    max-height: 100vh;
    overflow-x: auto;
    overflow-y: hidden;
}

* {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}

.sidebar {
    z-index: 1;
    position: fixed;
    left: 0px;
    width: 260px;
    height: 100%;
    background: #333;
    transition: all 0.5s ease;
}

.sidebar .top {
    font-size: 22px;
    color: #fff;
    text-align: center;
    line-height: 70px;
    background-image: linear-gradient(to right, #fec8a7, #b2d2a4);
}

.sidebar ul a {
    display: block;
    height: 100%;
    width: 100%;
    line-height: 50px;
    font-size: 15px;
    color: #fff;
    padding-left: 40px;
    box-sizing: border-box;
    transition: all 0.5s ease;
}

ul .nav:hover a {
    background: #6CBB08;
    color: white;
}

.sidebar ul a i {
    margin-right: 16px;
}


#check {
    display: none;
}

label #btn {
    position: absolute;
    cursor: pointer;
    background: #ffffff;
    border-radius: 3px;
}

label #open {
    position: absolute;
    cursor: pointer;
    background: #924227;
    border-radius: 1px;
    font-size: 30px;
}

label #open {
    left: 0;
    top: 10;
    font-size: 30px;
    color: rgb(255, 255, 255);
    padding: 6px 12px;
    transition: all 0.5s ease;
}

label #btn {
    z-index: 1111;
    left: 195px;
    top: 25px;
    font-size: 20px;
    color: #000000;
    padding: 4px 9px;
    transition: all 0.5s ease;
}

#check:checked~.sidebar {
    left:-250px;
}

#check:checked~label #open {
    left:30px;
    font-size: 20px;
}

#check:checked~label #btn {
    left:-195px;
}

section {
    background: #ffffff;
    background-position: center;
    background-size: cover;
    height: 100vh;
    width: 100%;
}

section h1 {
    text-align: center;
    padding-top: 200px;
    font-size: 60px;
    color: #004369;
}
</style>