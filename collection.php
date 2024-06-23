<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="myntra clone/html/newlogo2.png" type="image/icon type">
    <title>collection</title>
</head>

<body>
    
<div class="loader-wrapper">
        <div class="loader">
            <img src="myntra clone/html/newlogo2.png" alt="Loader"> <!-- Replace with your loader image -->
        </div>
    </div>
    <header>
        <div class="mobile_navbar_logo">
            <li onclick="showsidebar()"><a href="#"> <span class="material-symbols-outlined">
                        menu
                    </span></a></li>

            <h4>Myntra</h4>
        </div>
        <script>
            function showsidebar() {
                const sidebar = document.querySelector('.mobile_sidebar')
                sidebar.style.transform = 'translateX(0%)'
                sidebar.style.transition = 'all 0.2s linear'
            }
            function closesidebar() {
                const sidebar = document.querySelector('.mobile_sidebar')

                sidebar.style.transform = 'translateX(-100%)'
            }
        </script>
        <div class="mainlogo"><a href="home.php"><img src="newlogo.png"></a></div>
        <div class="mobile_sidebar">
            <div class="profile_div">

                <li onclick="closesidebar()"><a href="#"><span class="material-symbols-outlined " id="close_icon">
                            close
                        </span></a></li>
            </div>
            <div class="menu_side">
                <ul class="sidebar">

                    <li><a href="#">men</a></li>
                    <li><a href="#">men</a></li>
                    <li><a href="#">men</a></li>
                    <li><a href="#">men</a></li>
                    <li><a href="#">men</a></li>
                </ul>
            </div>
            <div class="other_services">other services</div>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#">MEN</a>
                    <hr style="width: 100%; color: red; display: flex; height: 2px;">
                    <div class="men_dropdown">
                        <div class="men_dropmenu">
                            <h5>Top Wear</h5>
                            <ul>
                                <li><a href="collection.php">T-Shirt</a></li>
                                <li><a href="collection.php">Jackets</a></li>
                                <li><a href="collection.php">Casual Shirt</a></li>
                                <li><a href="collection.php">Formal shirt</a></li>
                                <li><a href="collection.php">Swratshirt</a></li>
                                <li><a href="collection.php">Sweaters</a></li>
                                <li><a href="collection.php">Jackets</a></li>
                                <li><a href="collection.php">Blazers & Coats</a></li>
                                <li><a href="collection.php">Suits</a></li>
                                <li><a href="collection.php">Rain jacketss</a></li>
                            </ul>
                            <br>
                            <span></span>
                            <h5>Indian & Festive Wear</h5>
                            <ul>
                                <li><a href="#">Jackets</a></li>
                                <li><a href="#">Blazers & Coats</a></li>
                                <li><a href="#">Suits</a></li>
                                <li><a href="#">Rain jacketss</a></li>
                            </ul>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Bottom Wear</h5>
                            <ul>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Casual Trousers</a></li>
                                <li><a href="#"> Formal Trousers</a></li>
                                <li><a href="#">Shorts</a></li>
                                <li><a href="#">Track Pants & Joggers</a></li>
                            </ul>
                            <br>
                            <span class="span2"></span>
                            <h5>Innerwear & Sleepwear</h5>
                            <ul>
                                <li><a href="#">Briefs & Trunks</a></li>
                                <li><a href="#">Boxers</a></li>
                                <li><a href="#">Vests</a></li>
                                <li><a href="#">Sleepwear & Loungewear</a></li>
                                <li><a href="#">Thermals</a></li>
                            </ul>
                            <h5>Plus Size</h5>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Foot wear</h5>
                            <ul>
                                <li><a href="#">Casual Shoes</a></li>
                                <li><a href="#"> Sports Shoes</a></li>
                                <li><a href="#"> Formal Shoes</a></li>
                                <li><a href="#">Sneakers</a></li>
                                <li><a href="#">Sandals & Floaters</a></li>
                                <li><a href="#">Flip Flops</a></li>
                                <li><a href="#">Socks</a></li>
                            </ul>
                            <span class="span3"></span>
                            <br>
                            <h5>Personal Care & Grooming</h5>

                            <h5>Sun Glasses & Frames</h5>

                            <h5>Watches</h5>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Sports & Active Wear</h5>
                            <ul>
                                <li><a href="#">Sports Shoes</a></li>
                                <li><a href="#">Sports Sandals</a></li>
                                <li><a href="#">Active T-Shirts</a></li>
                                <li><a href="#">Track Pants & Shorts</a></li>
                                <li><a href="#">Tracksuits</a></li>
                                <li><a href="#">Jackets & Sweatshirts</a></li>
                                <li><a href="#">Sports & Accessories</a></li>
                                <li><a href="#">Swimwear</a></li>
                            </ul>
                            <span class="span4"></span>
                            <br>
                            <h5>Gadgets</h5>
                            <ul>
                                <li><a href="#">Smart Wearables</a></li>
                                <li><a href="#">Fitness Gadgets</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Speakers</a></li>
                            </ul>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Fashion Accessories</h5>
                            <ul>
                                <li><a href="#">Wallets</a></li>
                                <li><a href="#">Belts</a></li>
                                <li><a href="#">Perfumnes & Body Mists</a></li>
                                <li><a href="#">Trimmers</a></li>
                                <li><a href="#">Deodrants</a></li>
                                <li><a href="#">Ties,Cufflinks & Pocket Squares</a></li>
                                <li><a href="#">Accessory Gift Sets</a></li>
                                <li><a href="#">Caps & Hats</a></li>
                                <li><a href="#">Mufflers,Scarves & Gloves</a></li>
                                <li><a href="#">Phone Cases</a></li>
                                <li><a href="#">Rings & wristwear</a></li>
                                <li><a href="#">Halmets</a></li>
                            </ul>
                            <h5>Bags & Backpacks</h5>

                            <h5>Luggages & Trolleys</h5>
                        </div>
                    </div>


                </li>
                <li><a href="#">WOMEN</a>
                    <div class="men_dropdown">
                        <div class="men_dropmenu">
                            <h5>Indian & Fusion Wear</h5>
                            <ul>
                                <li><a href="collection2.php">Kurtas & Suits</a></li>
                                <li><a href="collection2.php"> Kurtis, Tunics & Tops</a></li>
                                <li><a href="collection2.php"> Sarees</a></li>
                                <li><a href="collection2.php"> Ethnic Wear</a></li>
                                <li><a href="collection2.php"> Leggings, Salwars & Churidars</a></li>
                                <li><a href="collection2.php"> Skirts & Palazzos</a></li>
                                <li><a href="collection2.php"> Dress Materials</a></li>
                                <li><a href="collection2.php">Lehenga Cholis</a></li>
                                <li><a href="collection2.php">Dupattas & Shawls</a></li>
                                <li><a href="collection2.php">Jackets</a></li>
                            </ul>
                            <br>
                            <span></span>
                            <h5>Belts, Scarves & More</h5>
                            <h5> Watches & Wearables</h5>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Western Wear</h5>
                            <ul>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Tops</a></li>
                                <li><a href="#">Tshirts</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Trousers & Capris</a></li>
                                <li><a href="#"> Shorts & Skirts</a></li>
                                <li><a href="#">Co-ords</a></li>
                                <li><a href="#">Playsuits</a></li>
                                <li><a href="#">Jumpsuits</a></li>
                                <li><a href="#">Shrugs</a></li>
                                <li><a href="#">Sweaters & Sweatshirts</a></li>
                                <li><a href="#"> Jackets & Coats</a></li>
                                <li><a href="#">Blazers & Waistcoats</a></li>
                            </ul>
                            <br>
                            <h5>Plus Size</h5>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Maternity</h5>
                            <h5>Sunglassws & Frames</h5>
                            <h5>Footwear</h5>
                            <ul>
                                <li><a href="#">Flats</a></li>
                                <li><a href="#">Casual Shoes</a></li>
                                <li><a href="#">Heels</a></li>
                                <li><a href="#">Boots</a></li>
                                <li><a href="#">Sports Shoes & Floaters</a></li>
                            </ul>
                            <span class="span3"></span>
                            <br>
                            <h5>Sports & Active Wear</h5>
                            <ul>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Footwear</a></li>
                                <li><a href="#">Sports Accessories</a></li>
                                <li><a href="#">Sports Equipment</a></li>
                            </ul>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Lingerie & Sleepwear</h5>
                            <ul>
                                <li><a href="#">Bra</a></li>
                                <li><a href="#">Brief</a></li>
                                <li><a href="#">Shapewear</a></li>
                                <li><a href="#">Sleepwear & Loungwear</a></li>
                                <li><a href="#">Swimwear</a></li>
                                <li><a href="#">Camisoles & Thermals</a></li>
                            </ul>
                            <span class="span4"></span>
                            <br>
                            <h5>Beauty & Personal Care</h5>
                            <ul>
                                <li><a href="#">Makeup</a></li>
                                <li><a href="#">Skincare</a></li>
                                <li><a href="#">Perminum Beauty</a></li>
                                <li><a href="#">Lipsticks</a></li>
                                <li><a href="#">Fragrances</a></li>
                            </ul>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Gadgets</h5>
                            <ul>
                                <li><a href="#">Smart Wearables</a></li>
                                <li><a href="#">Fitness Gadgets</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Speakers</a></li>
                            </ul>
                            <h5>Jewellery</h5>
                            <ul>
                                <li><a href="#">Fashion Jewellery</a></li>
                                <li><a href="#">Fine Jewellery</a></li>
                                <li><a href="#">Earings</a></li>
                            </ul>
                            <br>
                            <h5>Backpacks</h5>
                            <br>
                            <h5>Handbags,Bags & Wallets</h5>
                            <br>
                            <h5>Luggages & Trolleys</h5>
                        </div>
                    </div>
                </li>
                <li><a href="#">KIDS</a></li>
                <li><a href="#">HOME & LIVING</a></li>
                <li><a href="#">BEAUTY</a></li>
                <li><a href="#">STUDIO</a><sup>NEW</sup></li>
            </ul>

        </div>

        <div class="searchbox">
            <span class="material-symbols-outlined search_icon">search</span><input
                placeholder="Search for products, brands and more" class="input_bar">
        </div>
        <div class="loginbox">
            <div class="actioncontainer">
                <span name="login_man" class="material-symbols-outlined action_icon">person</span>
                <span name="login_man_name" class="action_name">Profile</span>
                <div class="profile_dropdown"></div>
            </div>
            <div name="mobile_searchbox_name" class="mobile_searchbox actioncontainer">
                <span class="material-symbols-outlined action_icon">search</span>
            </div>
            <div class="actioncontainer">
                <span class="material-symbols-outlined action_icon">favorite</span>
                <a href="wishlist.php"><span class="action_name">Wishlist</span></a>

            </div>
            <div class="actioncontainer">
                <span class="material-symbols-outlined action_icon">local_mall</span>
                <span class="action_name">Bag</span>
            </div>
        </div>
    </header>

    <section class="collection_cards">

        <div class="card_row1">

            <div class="card1">
                <div class="card_img">
                    <img src="myntra clone/html/clothe1.webp">
                </div>
                <div class="card_price_div">
                    <h3>Stormborn</h3>
                    <label>Pure Cotton T-shirt</label>
                    <h5>RS.499</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Stormborn">
                            <input type="hidden" name="Price" value="499">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card2">
                <div class="card_img">
                    <img src="myntra clone/html/clothe2.webp">
                </div>
                <div class="card_price_div">
                    <h3>BULLMER</h3>
                    <label>Pure Cotton T-shirt</label>
                    <h5>RS.749</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="BULLMER">
                            <input type="hidden" name="Price" value="749">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card3">
                <div class="card_img">
                    <img src="myntra clone/html/clothe3.webp">

                </div>
                <div class="card_price_div">
                    <h3>ROADSTER</h3>
                    <label>Pure Cotton T-shirt</label>
                    <h5>RS.399</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="ROADSTER">
                            <input type="hidden" name="Price" value="399">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card4">
                <div class="card_img">
                    <img src="myntra clone/html/clothe4.webp">
                </div>
                <div class="card_price_div">
                    <h3>H&M</h3>
                    <label>Pure Cotton T-shirt</label>
                    <h5>RS.999</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button">
                            <button type="submit" class="btn btn-info" name="add_to_cart">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="H&M">
                            <input type="hidden" name="Price" value="999">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>




<!-- section2 -->




     <section class="collection_cards2">
        <div class="card_row1">
            <div class="card1">
                <div class="card_img">
                    <img src="myntra clone/html/clothe5.webp">
                </div>
                <div class="card_price_div">
                    <h3>HYCROSS</h3>
                    <label>Pure Cotton T-shirt</label>
                    <h5>RS.249</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="HYCROSS">
                            <input type="hidden" name="Price" value="249">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card2">
                <div class="card_img">
                    <img src="myntra clone/html/clothe6.webp">
                </div>
                <div class="card_price_div">
                    <h3>CHITA</h3>
                    <label>Pure Cotton T-shirt</label>
                    <h5>RS.699</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="CHITA">
                            <input type="hidden" name="Price" value="699">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card3">
                <div class="card_img">
                    <img src="myntra clone/html/clothe7.webp">

                </div>
                <div class="card_price_div">
                    <h3>COTTO</h3>
                    <label>Pure Cotton T-shirt</label>
                    <h5>RS.369</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="COTTO">
                            <input type="hidden" name="Price" value="369">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card4">
                <div class="card_img">
                    <img src="myntra clone/html/clothe8.webp">
                </div>
                <div class="card_price_div">
                    <h3>BUTTER</h3>
                    <label>Pure Cotton T-shirt</label>
                    <h5>RS.799</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button">
                            <button type="submit" class="btn btn-info" name="add_to_cart">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="BUTTER">
                            <input type="hidden" name="Price" value="799">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 





    <!-- section3 -->





    <section class="collection_cards2">
        <div class="card_row1">
            <div class="card1">
                <div class="card_img">
                    <img src="myntra clone/html/men1.webp">
                </div>
                <div class="card_price_div">
                    <h3>COTTON KING</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.1599</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="COTTON KING">
                            <input type="hidden" name="Price" value="1599">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card2">
                <div class="card_img">
                    <img src="myntra clone/html/men2.webp">
                </div>
                <div class="card_price_div">
                    <h3>CHESS</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.999</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="CHESS">
                            <input type="hidden" name="Price" value="999">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card3">
                <div class="card_img">
                    <img src="myntra clone/html/men3.webp">

                </div>
                <div class="card_price_div">
                    <h3>MEN CHOICE</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.369</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="MEN CHOICE">
                            <input type="hidden" name="Price" value="699">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card4">
                <div class="card_img">
                    <img src="myntra clone/html/men4.webp">
                </div>
                <div class="card_price_div">
                    <h3>PORCHE</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.799</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button">
                            <button type="submit" class="btn btn-info" name="add_to_cart">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="PORCHE">
                            <input type="hidden" name="Price" value="649">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 



    <!-- SECTION 4 -->



    <section class="collection_cards2">
        <div class="card_row1">
            <div class="card1">
                <div class="card_img">
                    <img src="myntra clone/html/men5.webp">
                </div>
                <div class="card_price_div">
                    <h3>SUNNY</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.379</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="SUNNY">
                            <input type="hidden" name="Price" value="379">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card2">
                <div class="card_img">
                    <img src="myntra clone/html/men6.webp">
                </div>
                <div class="card_price_div">
                    <h3>MOON LIGHT</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.576</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="MOON LIGHT">
                            <input type="hidden" name="Price" value="576">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card3">
                <div class="card_img">
                    <img src="myntra clone/html/men7.webp">

                </div>
                <div class="card_price_div">
                    <h3>SIDELIVE</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.400</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="SIDELIVE">
                            <input type="hidden" name="Price" value="400">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card4">
                <div class="card_img">
                    <img src="myntra clone/html/men8.webp">
                </div>
                <div class="card_price_div">
                    <h3>JAKE RE</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.345</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button">
                            <button type="submit" class="btn btn-info" name="add_to_cart">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="JAKE RE">
                            <input type="hidden" name="Price" value="345">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 




    <!-- SECTION 5 -->



    <section class="collection_cards2">
        <div class="card_row1">
            <div class="card1">
                <div class="card_img">
                    <img src="myntra clone/html/men9.webp">
                </div>
                <div class="card_price_div">
                    <h3>RADOO</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.399</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="SUNNY">
                            <input type="hidden" name="Price" value="399">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card2">
                <div class="card_img">
                    <img src="myntra clone/html/men10.webp">
                </div>
                <div class="card_price_div">
                    <h3>KING FIT</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.999</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="MOON LIGHT">
                            <input type="hidden" name="Price" value="999">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card3">
                <div class="card_img">
                    <img src="myntra clone/html/men11.webp">

                </div>
                <div class="card_price_div">
                    <h3>RICHLOOK</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.679</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="RICHLOOK">
                            <input type="hidden" name="Price" value="679">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card4">
                <div class="card_img">
                    <img src="myntra clone/html/men12.webp">
                </div>
                <div class="card_price_div">
                    <h3>FIT PRO</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.459</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button">
                            <button type="submit" class="btn btn-info" name="add_to_cart">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="FIT PRO">
                            <input type="hidden" name="Price" value="459">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 
    <!-- <div class="clothescollection">
                <img src="myntra clone/html/clothe1.webp">
                <img src="myntra clone/html/clothe2.webp">
                <img src="myntra clone/html/clothe3.webp">
                <img src="myntra clone/html/clothe4.webp">
                <img src="myntra clone/html/clothe5.webp">
                <img src="myntra clone/html/clothe6.webp">
                <img src="myntra clone/html/clothe7.webp">
                <img src="myntra clone/html/clothe8.webp">
                <img src="myntra clone/html/clothe1.webp">
                <img src="myntra clone/html/men1.webp">
                <img src="myntra clone/html/men2.webp">
                <img src="myntra clone/html/men3.webp">
                <img src="myntra clone/html/men4.webp">
                <img src="myntra clone/html/men5.webp">
                <img src="myntra clone/html/men6.webp">
                <img src="myntra clone/html/men7.webp">
                <img src="myntra clone/html/men8.webp">
                <img src="myntra clone/html/men9.webp">
                <img src="myntra clone/html/men10.webp">
                <img src="myntra clone/html/men11.webp">
                <img src="myntra clone/html/men12.webp">
                

            </div> -->
            <script>
        window.addEventListener("load", function () {
            const body = document.querySelector("body");
            setTimeout(function () {
                body.classList.add("loaded");
            }, 2000); // Wait for 2 seconds before hiding the loading screen
        });
    </script>
</body>

</html>