<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator Pupuk</title>
</head>
<body>
    <?php
        include "_sidebarPetani.php";
        include "../../_navbar.php"; 
        
        if(isset($_POST['hitung'])){
            $dosis = 0.33;
            $hasil = 0;
            if($_POST['pola']=='3'){
                $jumlah_tanaman = ($_POST['luaslahan'])/($_POST['jarakTanam1'])*($_POST['luaslahan'])/($_POST['jarakTanam2']);
                $hasil = $jumlah_tanaman * $dosis;
            }elseif($_POST['pola']=='5'){
                $jumlah_tanaman = ($_POST['luaslahan']/($_POST['jarakTanam1']+$_POST['jarakTanam2']))*2;
                $hasil = $jumlah_tanaman * $dosis;
            }elseif($_POST['pola']=='4'){
                $jumlah_tanaman = ($_POST['luaslahan']/($_POST['jarakTanam1']*$_POST['jarakTanam2']));
                $hasil = $jumlah_tanaman * $dosis;
            }else{
                $hasil = 0;
            }
        }
    ?>
    <div class="container">
        <div class="content">
            <a href=""><img class="premium" src="../../assets/premium.jpg" alt=""></a>
            <button class="choice">Pilih Tanaman</button>
        </div>
    </div>
    <br><br>
    <div class="kalkulator">
        <form action="" method="post">
            <div class="luasLahan">
                <h2>Luas Lahan : </h2>
                <input class ="kalkulator_form" type="num" name="luaslahan" placeholder="0.0"><div class="dropdown">
                    <select>
                        <option value="1">cm</option>
                        <option value="2">m2</option>
                    </select>
                </div>
            </div>
            <br>
            <hr>
            <div class="polaTanam">
                <h2>Pola Penanaman</h2>
                <div class="dropdown">
                    <select name="pola">
                        <option value="3">Persegi</option>
                        <option value="4">Persegi Panjang</option>
                        <option value="5">Segitiga</option>
                    </select>
                </div>
            </div>
            <br>
            <hr>
            <div class="jarakTanam">
                <h2>Jarak Tanam Sisi 1</h2>
                <input class ="kalkulator_form_jarak" type="num" name="jarakTanam1" placeholder="0.0">
                <h2>Jarak Tanam Sisi 2</h2>
                <input class ="kalkulator_form_jarak" type="num" name="jarakTanam2" placeholder="0.0">
            </div>
            <br>
            <hr>
            <br>
            <hr>
            <br>
            <div class="kandungan">
                <h2>Nitrogen(N)</h2>
                <div class="dropdown">
                    <select>
                        <option value="6">Urea</option>
                        <option value="7">ZA</option>
                    </select>
                </div>
                <h2>Fosfor(P)</h2>
                <div class="dropdown">
                    <select>
                        <option value="8">TSP</option>
                        <option value="9">SP36</option>
                    </select>
                </div>
                <h2>Kalium(K)</h2>
                <div class="dropdown">
                    <select>
                        <option value="10">KCL</option>
                        <option value="11">MOP</option>
                    </select>
                </div>
            </div>
            <button class="hitung" name="hitung">Hitung</button>
            <br>
            <?php 
                echo "<h2> Hasil : $hasil </h2>"
            ?>
        </form>
    </div>
</body>
</html>

<style>
.kandungan{
    display: flex;
    justify-content: space-between;
}
.kandungan_form{
    border: none;
}
.hitung{
    background-color: #6CBB08;
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: flex;
    justify-content: center;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
}
.jarakTanam{
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
}
.luasLahan, .polaTanam{
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
}
h2{
    padding-right: 20px;
}
.kalkulator_form_jarak{
    margin-left: 55px;
    width: 300px;
    border: none;
}
.kalkulator_form{
    width: 600px;
    border: none;
}
.kalkulator{
    display: flex;
    justify-content: center;
    margin-left: 200px;
}

.container{
    background-color: #E9E9E9;
    height: 320px;
}

.content a{
    display: flex;
    justify-content: center;
}
.premium{
    margin-top: 100px;
    border-radius: 15px;
    width: 50%;
    margin-left: 200px;
}
.choice {
  background-color: white;
  border: none;
  color: #242424;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  width: 10%;
  margin-left: 480px;
  margin-top: 10px;
  
}

.choice:hover {
  background-color: grey;
}

/* DROPDOWN */
.dropdown select {
  font-size: 16px;
  padding: 5px 5px;
  border: none;
  border-radius: 5px;
  background-color: #f1f1f1;
  color: #6CBB08;
}

.dropdown select:hover {
  background-color: #e1e1e1;
}

.dropdown select:focus {
  outline: none;
  background-color: #fff;
  box-shadow: 0 0 5px #b3b3b3;
}


</style>