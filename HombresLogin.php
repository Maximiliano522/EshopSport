<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hombres</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto+Serif:opsz,wght@8..144,300;8..144,400;8..144,500;8..144,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sirin+Stencil&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/styleArt.css">
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <div class="overlay"></div>
    <div class="left-side">
        <div class="hogar">
            <button class="casa-btn">
                <a href="indexLogin.php" class = "casa">
                    <img class="casa-btn.img" src="./img/Casa.png">
                </a>
            </button>
        </div>
    <span class="logo">Fashion</span>
        <div class="sm-product">
            <h1 class="product-index">01</h1>
            <div class="sm-product-img-container">
                <img src="./img/imgH1.png" id = "img1" alt="" class="sm-product-img">
            </div>
            <p class="sm-product-des">
                Gran y nuevo diseño de los diseñadores de la marca SHEIN
            </p>
        </div>
        <div class="social-link">
                <a title="Facebook" href="https://www.facebook.com/Maximilian5222"><img src="./img/facebook.png" alt="facebook" class="social-link-img" ></a>
                <a title="Instagram" href="https://www.instagram.com/max.steel15/"><img src="./img/instagram.png" alt="Instagram" class="social-link-img"></a>
        </div>
    </div>
    <div class="right-side">
        <img src="./img/imgH1.png" id ="img1" alt="" class="backdrop-img">
        <div class="content">
            <div class="product-detail">
                <h1 class="product-name">Run Red</h1>
                <p class="product-des">
                    Sientete libre y como a la hora de entrenar con esta increible blusa roja.
                </p>
                <button class="productButton2">Compra Ahora</button>
                <button class="nxt-btn">
                    
                    <img src="./img/arrow.png" alt="" class="nxt-btn-img">
                </button>
            </div>
            <div class="payment2">
                <h1 class="payTitle">Personal Information</h1>
                <label>Name and Surname</label>
                <input type="text" placeholder="John Doe" class="payInput">
                <label>Phone Number</label>
                <input type="text" placeholder="+1 234 5678" class="payInput">
                <label>Address</label>
                <input type="text" placeholder="Elton St 21 22-145" class="payInput">
                <h1 class="payTitle">Card Information</h1>
                <div class="cardIcons">
                    <img src="./img/visa.png" alt="" class="cardIcon">
                    <img src="./img/master.png" alt="" class="cardIcon">
                </div>
                <input type="password" class="payInput" name="" id="" placeholder="Card Number">
                <div class="cardInfo">
                    <input type="text" placeholder="mm" class="payInput sm">
                    <input type="text" placeholder="yyyy" class="payInput sm">
                    <input type="text" placeholder="cvv" class="payInput sm">
                </div>
                <button class="payButton">Cheackout!!!</button>
                <span class="close">X</span>
            </div>
            <div class="product-img-container">
                <img src="./img/imgH1.png" id="img1" alt="" class="product-img">
            </div>
        </div>
    </div>
    
    
    <script src="./JS/appHombres.js"></script>
    <script src="./JS/app.js"></script>
</body>
</html>