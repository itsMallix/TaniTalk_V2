<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/cuaca.css">
    <title>Cuaca</title>
</head>
<?php
    include '_sidebarPengelola.php';
    include '_navbar.php';
    echo "<br><br><br><br>";
?>
<body>
    <div class="container">
        <!-- <h2 class="text-title">Prakiraan Cuaca</h2> -->
        <div class="input-grup">
            <input type="text" class="formControl" id="city" placeholder="Masukkan Nama Kota">
            <br>
            <button class="searchBtn" id="send">Search</button>
        </div>

        <br>
        <div class="flex">
            <div class="check">
                <input type="checkbox" class="box0" name="weather" id="currentWeather">
                <label for="currentWeather">Cuaca Saat Ini</label>

                <input type="checkbox" class="box1" name="weather" id="forecast">
                <label for="forcast">Prakiraan Cuaca</label>

                <!-- <iframe style="float:right" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.364508146232!2d113.71429927461817!3d-8.165982281828327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6943505e30a6d%3A0x4a4df80f122d472f!2sFakultas%20Ilmu%20Komputer%20Universitas%20Jember!5e0!3m2!1sid!2sid!4v1683170415546!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>
        </div>
        <br>
        <!-- currrent  -->
        <div class="card" id="weatherContainer" style="display:none">
            <!-- muncul cuaca disini -->
        </div>
        <!-- forecasting -->
        <div class="card" id="forecastContainer" style="display:none">
            <div class="cardBody" id="cardBody">
                <h2 class="title" id="title"></h2>
                <table class="table">
                    <tbody id="body">
                        <!-- ramalan cuaca disini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<script src="../../js/cuaca.js"></script>
<style>
.container{
    margin-left: 320px;
    width: 350px;
    padding: 10px 20px 50px 20px;
    border-radius: 5px;
    /* display: flex; */
    /* justify-content: space-between; */
}
.searchBtn{
    border: none;
    background-color: #6CBB08;
    align-items: center;
    margin-left: 15px;
    color: white;
}
.formControl{
    width: 300px;
    margin: 5px;
    border: 1px solid;
    border-radius: 5px;
    padding: 10px;
    font-size: 15pt;
}
.searchBtn{
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius: 5px;
    padding: 10px 20px;
    border-bottom: 5px;
    width: 300px;
}
.box1{
    margin-left: 130px;
}
.cardBody{
    max-width: auto;
}
.cardBody p{
    font-size: 12px;
    text-align: center;
}
.card{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    /* display: none; */
}
.card:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.title{
    text-align: center;
    padding-top: 5px;
    padding-bottom: 5px;
}
.castIcon{
    display: block;
    margin-left: auto;
    margin-right: auto;
}
iframe{
    float: right;
    margin-right: 30px;
    margin-bottom: 100px;
    z-index: 1;
    display: flex;
    justify-content: space-between;
}
body{
    overflow: hidden;
}
</style>