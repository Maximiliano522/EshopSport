<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar</title>
    <link rel="stylesheet" href="/CSS/Style.css">
</head>
<body>
        <div class="hogar">
            <button class="casa-btn">
                <a href="indexLogin.php" class = "casa">
                    <img class="casa-btn.img" src="./img/Casa.png">
                </a>
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
            <span class="close2">X</span>
        </div>

        <script src="/JS/app.js"></script>
</body>
</html>