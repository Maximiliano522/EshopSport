<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop of Sport</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/Style.css">
</head>
<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <img src="./img/Logo.png" alt="" class ="Logo">
            </div>
            <div class="navItem">
                <div class="search">
                    <input type="text" placeholder="Search..." class="searchInput">
                    <img src="./img/search.png" alt="" width="20" height="20">
                </div>
            </div>
            
            <div class="navItem">
                <a href="/index.php">
                    <span class="Login">Salir</span>
                </a>
            </div>
        </div>
        <div class="navButton">
            <h3 class="menuItem">Mujer</h3>
            <h3 class="menuItem">Hombre</h3>
            <h3 class="menuItem">Niño</h3>
            <h3 class="menuItem">Perfil</h3>
            <h3 class="menuItem">🛒</h3>
        </div>
    </nav>
    <div class="slider">
        <div class="sliderWrapper"> 
            <div class="sliderItem">
                <img src="./img/Mujeres.png" alt="" class="sliderImg">
                <div class="sliderBg">
                    <a href="/Mujeres.html">
                        <button class="buyButton">Ver productos</button>
                    </a>
                </div>
            </div>
            <div class="sliderItem">
                <img src="./img/Hombres.png" alt="" class="sliderImg">
                <div class="sliderBg">
                    <a href="/Hombres.html">
                        <button class="buyButton" id="buyHombres">Ver productos</button>
                    </a>
                </div>
            </div>
                <div class="sliderItem">
                    <img src="./img/Niños.png" alt="" class="sliderImg">
                    <div class="sliderBg">
                        <a href="/Niños.html">
                            <button class="buyButton">Ver productos</button>
                        </a>
                    </div>
                </div>
                    <div class="sliderItem">
                        <img src="./img/Niños.png" alt="" class="sliderImg">
                        <div class="sliderBg">
                            <a href="/Niños.html">
                                <button class="buyButton">Ver productos</button>
                            </a>
                        </div>
                    </div>
                        <div class="sliderItem">
                            <img src="./img/Niños.png" alt="" class="sliderImg">
                            <div class="sliderBg">
                                <a href="/Niños.html">
                                    <button class="buyButton">Ver productos</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <div class="features">
        <div class="feature">
            <img class="featureIcon" src="./img/shipping.png" alt="">
            <span class="featureTitle">Envios Gratis</span>
            <span class="featureDesc">
                Envios gratis a partir de 900$
            </span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">Devoluciones

            </span>
            <span class="featureDesc">
                Devoluciones por 30 dias.
            </span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">
                Tarjetas de regalo.
            </span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">Contactanos</span>
            <span class="featureDesc">
                Mandanos correo o sigue nuestras rees sociales.
            </span>
        </div>
    </div>
    <div class="product" id="product">
        <img src="./img/Index1.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">Conjunto Adidas</h1>
            <h2 class="productPrice">$1300</h2>
            <p class="productDes">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, aliquid. At molestias totam vero ratione asperiores, soluta nam, enim odit, reprehenderit sed quisquam voluptate nisi assumenda! Impedit earum doloremque atque!</p>
            <div class="colors">
            </div>
            <div class="sizes">
            </div>
            <button class="productButton">BUY NOW!!!</button>
        </div>
        <div class="payment">
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
    </div>
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">
                Be Yourself!!!
            </h1>
            <img class="galleryImg" src="https://images.pexels.com/photos/9295809/pexels-photo-9295809.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" >
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">
                This is the First Day of your new life
            </h1>
            <img class="galleryImg" src="https://images.pexels.com/photos/1040427/pexels-photo-1040427.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" >
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">
                Just Do It!!!
            </h1>
            <img class="galleryImg" src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" >
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/4753986/pexels-photo-4753986.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSn">WINTER ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="nsImg">
        </div>
    </div>
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">About Us</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Store</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Useful links</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refound</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <a href="Mujeres.html"> <li class="fListItem">Mujer </li> </a>
                    <li class="fListItem">Hombre</li>
                    <li class="fListItem">Niño</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Suscribe to our newsletters</h1>
                <div class="fmail">
                    <input type="text" class="fInput" placeholder="Join!!!">
                    <button class="fButton">Join!!!</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">
                    Follow Us!!!
                </h1>
                <div class="fIcons">
                    <img src="./img/facebook.png" class="fIcon">
                    <img src="./img/twitter.png" class="fIcon">
                    <img src="./img/instagram.png" class="fIcon">
                    <img src="./img/whatsapp.png" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">Maximiliano Programming 2022</span>
            </div>
        </div>
    </footer>
    <script src="/JS/app.js"></script>
</body>
</html>