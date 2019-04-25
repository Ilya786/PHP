<?php
$menu = [
    [
        'Title' => 'Home',
        'Class' => 'menu-link menu-link-active',
    ],
    [
        'Title' => 'Man',
        'SubMenu' => [
            [
                'Title' => 'Women',
                'Links' => [
                    'Dresses',
                    'Tops',
                    'Sweaters/Knits',
                    'Jackets/Coats',
                    'Blazers',
                    'Denim',
                    'Leggings/Pants',
                    'Skirts/Shorts',
                    'Accessories',
                ]
            ],
            [
                'Title' => 'Women',
                'Links' => [
                    'Dresses',
                    'Tops',
                    'Sweaters/Knits',
                    'Jackets/Coats',
                ]
            ],
            [
                'Title' => 'Women',
                'Links' => [
                    'Dresses',
                    'Tops',
                    'Sweaters/Knits',
                ]
            ],

        ],
        'Class' => 'menu-link',
    ],
    [
        'Title' => 'Kids',
        'SubMenu' => [
            [
                'Title' => 'Women',
                'Links' => [
                    'Dresses',
                    'Tops',
                    'Sweaters/Knits',
                    'Jackets/Coats',
                    'Blazers',
                    'Denim',
                    'Leggings/Pants',
                    'Skirts/Shorts',
                    'Accessories',
                ]
            ],
            [
                'Title' => 'Women',
                'Links' => [
                    'Dresses',
                    'Tops',
                    'Sweaters/Knits',
                    'Jackets/Coats',
                ]
            ],
            [
                'Title' => 'Women',
                'Links' => [
                    'Dresses',
                    'Tops',
                    'Sweaters/Knits',
                ]
            ],

        ],
        'Class' => 'menu-link',
    ],
    [
        'Title' => 'Accoseriese',
        'SubMenu' => [
            [
                'Title' => 'Women',
                'Links' => [
                    'Dresses',
                    'Tops',
                    'Sweaters/Knits',
                    'Jackets/Coats',
                    'Blazers',
                    'Denim',
                    'Leggings/Pants',
                    'Skirts/Shorts',
                    'Accessories',
                ]
            ],
            [
                'Title' => 'Women',
                'Links' => [
                    'Dresses',
                    'Tops',
                    'Sweaters/Knits',
                    'Jackets/Coats',
                ]
            ],
            [
                'Title' => 'Women',
                'Links' => [
                    'Dresses',
                    'Tops',
                    'Sweaters/Knits',
                ]
            ],

        ],
        'Class' => 'menu-link',
    ],
    [
        'Title' => 'Featured',
        'Class' => 'menu-link',
    ],
    [
        'Title' => 'Hot Deals',
        'Class' => 'menu-link',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="styel.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
<header class="header">
    <div class="container header-flex">
        <div class="header-left">
            <a href="#" class="logo"><img src="img/logo.svg" alt="logo" class="logo-img">BRAN<span
                        class="logo-d">D</span></a>
            <form action="#" class="header-form">
                <div class="form-select">Browse
                    <div class="mega-box search">
                        <div class="mega-flex">
                            <h3 class="mega-heading">Women</h3>
                            <ul class="mega-ul">
                                <li><a class="mega-link" href="#">Dresses</a></li>
                                <li><a class="mega-link" href="#">Tops</a></li>
                                <li><a class="mega-link" href="#">Sweaters/Knits</a></li>
                                <li><a class="mega-link" href="#">Jackets/Coats</a></li>
                                <li><a class="mega-link" href="#">Blazers</a></li>

                            </ul>
                            <h3 class="mega-heading">Men</h3>
                            <ul class="mega-ul">
                                <li><a class="mega-link" href="#">Tees/Tank tops</a></li>
                                <li><a class="mega-link" href="#">Shirts/Polos</a></li>
                                <li><a class="mega-link" href="#">Sweaters</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <input class="header-form_input" type="text" placeholder="Search for Item...">
                <button class="header-form_button"><img src="img/лупа.png" alt=""></button>
            </form>
        </div>
        <div class="header-right">
            <div class="img-cart">
                <a href="#">
                    <svg id="redCart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="32" height="29" viewBox="0 0 32 29">
                        <defs>
                            <path id="xmola"
                                  d="M1181 41.182c0-.65.533-1.182 1.184-1.182h4.28c.533 0 1.007.354 1.145.867l4.833 17.455h13.178l4.379-10.048H1195.4a1.186 1.186 0 0 1-1.184-1.182c0-.65.533-1.182 1.184-1.182h16.413c.394 0 .77.197.986.532.217.335.257.749.099 1.123l-5.405 12.412c-.198.433-.612.709-1.085.709h-14.855a1.184 1.184 0 0 1-1.144-.867l-4.833-17.455h-3.393a1.186 1.186 0 0 1-1.184-1.182zm6.747 25.138a2.684 2.684 0 0 1 5.365 0 2.684 2.684 0 0 1-5.365 0zm16.788.178c-.1-1.458 1.006-2.758 2.485-2.857 1.48-.098 2.762 1.025 2.86 2.483.04.728-.177 1.418-.65 1.95a2.678 2.678 0 0 1-1.835.926h-.197c-1.401 0-2.565-1.103-2.663-2.502z"/>
                        </defs>
                        <g>
                            <g transform="translate(-1181 -40)">
                                <use id="red" xlink:href="#xmola"/>
                            </g>
                        </g>
                    </svg>
                </a>
                <div class="cart-value">2</div>
                <div class="mega-box cart">
                    <div class="cart-flex">
                        <div class="cart-product">
                            <img src="img/product_9_small.jpg" alt="" class="cart-img">
                            <div class="cart-product-text">
                                <p class="cart-product-name">Rebox Zane</p>
                                <div class="cart-product-details">
                                    <p class="cart-product-value">1</p>
                                    <p class="cart">x</p>
                                    <p class="cart-product-price">$250</p>
                                </div>
                            </div>
                            <div class="del-product"><i class="fas fa-times-circle del"></i></div>
                        </div>
                        <div class="cart-product">
                            <img src="img/product_10_small.jpg" alt="" class="cart-img">
                            <div class="cart-product-text">
                                <p class="cart-product-name">Rebox Zane</p>
                                <div class="cart-product-details">
                                    <p class="cart-product-value">1</p>
                                    <p class="cart">x</p>
                                    <p class="cart-product-price">$250</p>
                                </div>
                            </div>
                            <div class="del-product"><i class="fas fa-times-circle del"></i></div>
                        </div>
                        <div class="cart-total">
                            <p class="cart-total-titel">TOTAL</p>
                            <p class="cart-total-price">$500.00</p>
                        </div>
                        <button class="cart-chekout">Checkout</button>
                        <button class="cart-goToCart">Go to cart</button>
                    </div>
                </div>
            </div>
            <a class="button" href="#">My Account <img class="button-img" src="img/стрелка.png" alt=""></a>
        </div>
    </div>
</header>
<hr>
<nav class="nav">
    <ul class="menu container">
        <?php foreach ($menu as $value): ?>
            <li class="menu-list"><a href="#" class="<?= $value['Class'] ?>"><?= $value['Title'] ?></a>
                <?php if ($value['SubMenu']): ?>
                    <div class="mega-box">
                        <?php $SubMenu = $value['SubMenu'];
                        foreach ($SubMenu as $el):?>
                        <div class="mega-flex">
                            <h3 class="mega-heading"><?= $el['Title'] ?></h3>
                            <ul class="mega-ul">
                                <?php foreach ($el['Links'] as $item): ?>
                                    <li><a class="mega-link" href="#"><?= $item ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
</body>
</html>