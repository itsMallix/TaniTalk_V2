<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9f5461f601.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="floating_container">
        <div class="floating_btn">
            <div class="element">
                <a href="tambahKatalog.php">
                    <span class="float_element">
                        <i class="fa-solid fa-plus"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    body {
        background: #eaedf2;
    }

    .floating_container{
        position: fixed;
        width: 100px;
        height: 100px;
        bottom: 0;
        right: 0;
        margin: 35px 25px;
    }
    .floating_container:hover{
        height: 300px;
    }

    .floating_container:hover .floating_btn{
        box-shadow: 0 10px 25px rgb(179, 179, 179);
        transform: translateY(5px);
        transition: all 0.3s;
    }
    .floating_btn{
        position: absolute;
        width: 65px;
        height: 65px;
        background-color: #333;
        bottom: 0;
        border-radius: 50%;
        left: 0;
        right: 0;
        color: white;
        text-align: center;
        font-size: 23px;
        z-index: 100;
        cursor: pointer;
    }
    .float_element{
        position: relative;
        display: block;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        margin: 8px ;
        color: white;
        display: grid;
        place-items: center;
        /* z-index: 0; */
        opacity: 100;
        
    }
</style>