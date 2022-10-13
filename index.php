<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Hlavní stránka</title>
</head>
<body>
    <div class="header">
        <div class="menu">
            <div class="logo">
                <img src="./images/logo.png" width="100%" height="auto" alt="">
            </div>
            <div class="menuList" id="menuList">
                <div class="close" onclick="menuScrip()">
                        <img src="./images/x.svg" width="32px" height="auto">
                </div>
                <p><a href="#">Domů</a></p>
                <p><a href="#">Jídelní lístek</a></p>
                <p><a href="#">Galerie</a></p>
                <p><a href="#">Rozvoz</a></p>
                <p><a href="#">Kontakt</a></p>
            </div>
            <div class="phone">
                <img src="./images/phone.svg" width="100%" height="auto" alt="">
                <p>+420 774 744 994</p>
            </div>
            <div class="order-onl">
                <p class="btn"><a href="#">Objednat on-line</a></p>
            </div>
            <div class="burger" onclick="menuScrip()">
                <img src="./images/menu.svg" width="32px" height="auto">
            </div>
        </div>
        <div class="mainText">
            <div class="pizza-forte">
                <h1>Pizza Forte</h1>
                <p>Pizza a burgery přímo z Dobrušky až k Vaším dveřím</p>
                <div class="buttons">
                    <div class="left-button">
                        <img src="./images/pizza.svg" width="auto" height="64px" alt="">
                        <p class="btn"><a href="">Objednat on-line</a></p>
                    </div>
                    <div class="right-button">
                        <img src="./images/telephone.svg" width="auto" height="64px" alt="">
                        <p class="btn"><a href="">+420 774 744 994</a></p>
                    </div>
                </div>
            </div>
            <div class="right-side">
            </div>
        </div>
        <div class="leftText">
            <p>Pizza Forte, Javorová 828, Dobruška 518 01</p>
        </div>
        <div class="socialNetwork">
            <img src="./images/facebook.svg" width="100%" height="auto" alt="">
            <img src="./images/instagram.svg" width="100%" height="auto" alt="">
        </div>
    </div>
    <div class="food">
        <div class="img" id="pizza">
            <a href=""><img src="./images/pizza.png" width="100%" height="auto" alt=""></a>
        </div>
        <div class="img" id="burger">
            <a href=""><img src="./images/burger.png" width="100%" height="auto" alt=""></a>
        </div>
        <div class="img" id="salad">
            <a href=""><img src="./images/salad.png" width="100%" height="auto" alt=""></a>
        </div>
    </div>
    <div class="container">
        <div class="review">
            <div class="classOne">
                <div class="pictures">
                    <img src="./images/pizzas.png" width="100%" height="auto" alt="">
                </div>
                <div class="description">
                    <h3>Pizzy</h3>
                    <p>Popis produktu</p>
                </div>
            </div>
            <div class="classTwo">
                <div class="description">
                    <h3>Burgery</h3>
                    <p>Popis produktu</p>
                </div>
                <div class="pictures">
                    <img src="./images/burgers.png" width="100%" height="auto" alt="">
                </div>
            </div>
            <div class="classOne">
                <div class="pictures">
                    <img src="./images/salads.png" width="100%" height="auto" alt="">
                </div>
                <div class="description">
                    <h3>Saláty</h3>
                    <p>Popis produktu</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text">
        <h2>U nás žízní trpět nebudete</h2>
    </div>
    <div class="food">
        <div class="img" id="pizza">
            <a href=""><img src="./images/drinkOne.png" width="100%" height="auto" alt=""></a>
        </div>
        <div class="img" id="burger">
            <a href=""><img src="./images/drinkTwo.png" width="100%" height="auto" alt=""></a>
        </div>
        <div class="img" id="salad">
            <a href=""><img src="./images/drinkThree.png" width="100%" height="auto" alt=""></a>
        </div>
    </div>
    <div class="container">
        <div class="offers">
            <div class="btns">
                <div class="offerBtn">
                    <p class="btn"><a href="#">Pizzy</a></p>
                </div>
                <div class="offerBtn">
                    <p class="btn"><a href="#">Burgery</a></p>
                </div>
                <div class="offerBtn">
                    <p class="btn"><a href="#">Saláty</a></p>
                </div>
            </div>
            <div class="offerMenu">
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
                <div class="offer">
                    <div class="offerImg">
                        <img src="./images/offer.svg" width="100%" height="auto" alt="">
                    </div>
                    <div class="offerInfo">
                        <h5>1. Margherita</h5>
                        <p>Rajčatový základ mozzarella, bazalka</p>
                        <p>Ø 33cm: <b>135 kč</b></p>
                        <p>Ø 45cm: <b>230 kč</b></p>
                    </div>
                </div>
            </div>
        </div>
        <h2>Rozvoz</h2>
        <div class="distribution">
            <div class="distr-text">
                <p>Poslední objednávky na rozvoz přijímáme 30 minut před ukončením doby rozvozu.</p>
                <p>Mimo Dobrušku se jedna pizza NEROZVÁŽÍ.</p>
                <p>Do 10 km rozvoz dvou a více ks za poplatek 20 Kč.</p>
                <p>Možnost využítí rozvozu do Škoda Auto a.s. Kvasiny a firem v blízkém okolí - 10 a více kusů jídel.</p>
                <p>Nad 10 km jinak NEROZVÁŽÍME.</p>
                <p>Veškeré obaly jsou zdarma.</p>
                <p>Možnost platit kartou - prosíme, tuto informaci nahlaste při objednávce.</p>
                <p>Přijímáme stravenky typů Ticket Restaurant, Sodexo a Chèque Déjeuner.</p>
            </div>
            <div class="distr-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d81560.6665482941!2d16.1310971!3d50.2962056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470e778f965cd52d%3A0xb5385b08552e7d2e!2sCaf%C3%A9%20%26%20Pizza%20Forte!5e0!3m2!1scs!2scz!4v1665144071307!5m2!1scs!2scz" width="400" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            
            </div>
        </div>
        <h3>Café Forte</h3>
        <div class="info">
            <div class="infoText">
                <div class="divs">
                    <div class="div">
                        <p><strong>Doba rozvozu:</strong></p>
                    </div>
                    <div class="divTwo">
                        <p>Po-Čt: 16:00 - 21:00</p>
                        <p>Pá-So: 16:00 - 22:00</p>
                        <p>Ne: 16:00 - 21:00</p>
                    </div>
                </div>
                <div class="divs">
                    <div class="div">
                        <p><strong>Adresa:</strong></p>
                    </div>
                    <div class="divTwo">
                        <p>Javorová 828, Dobruška 518 01</p>
                    </div>
                </div>
                <div class="divs">
                    <div class="div">
                        <p><strong>Telefon: </strong></p>
                    </div>
                    <div class="divTwo">
                        <p>+420 774 744 994</p>
                    </div>
                </div>
                <div class="order-onl">
                    <p class="btn"><a href="#">Objednat on-line</a></p>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1410.1739351235874!2d16.16447513170425!3d50.2947748108088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470e778f965cd52d%3A0xb5385b08552e7d2e!2sCaf%C3%A9%20%26%20Pizza%20Forte!5e0!3m2!1scs!2scz!4v1665404743421!5m2!1scs!2scz" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</body>
</html>