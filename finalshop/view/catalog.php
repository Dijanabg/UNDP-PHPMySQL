<?php

include "productlist.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="script/style.css">
    <title>SHOP</title>
</head>

<body>
    <div class="logout"><a href="#">logout</a></div>
    <div class="page">


        <!-- prikaz proizvoda -->
        <!-- sesija cart je prazna i proveravam da li je pokrenuta -->
        <!-- provera da li sesija radi i ukoliko radi menjam klasu na active-->
        <!-- <?php



                if (!isset($_SESSION['cart'])) {
                    $css = "cart ";
                } else {
                    $css = "cart active";
                }
                ?> -->
        <div class="<?php echo $css; ?>">
            <!-- hidden preko css klase cart -->
            <?php //echo var_export($_SESSION['cart'], true)   //provera da li radi session
            ?>
            <table>
                <tr>
                    <th>Proizvod</th>
                    <th>Naziv</th>
                    <th>Kolicina</th>
                    <th>Cena proizvoda</th>
                    <th>Total cena </th>
                    <th>Ukloni</th>
                </tr>

                <tr>
                    <!-- Cart items  -->
                    <td class="cart-items" colspan="6">Korpa
                        <span><?php //echo Cart::getNumberOfCartItems(); 
                                ?></span>
                    </td>
                </tr>
                <?php
                //foreach ($_SESSION['cart'] as $value) {
                ?>
                <tr>
                    <!-- The product html template -->
                    <td><img src="<?php //echo $value['image']; 
                                    ?>"></td>
                    <td><?php //echo $value['name']; 
                        ?></td>
                    <td>
                        <form action="#" method="get" autocomplete="off">
                            <span>Količina</span>
                            <input type="text" name="kolicina" value="<?php //echo $value['quantity']; 
                                                                        ?>">
                            <input type="hidden" name="itemId" value="<?php //echo $value['id']; 
                                                                        ?>">
                            <input type="submit" name="updateQuantity" value="Potvrdi količinu">
                        </form>
                    </td>
                    <td><?php //echo $value['price']; 
                        ?></td>
                    <td><?php //echo Cart::getSubTotal($value['id']); 
                        ?></td>
                    <td><a href="#<?php //echo $value['id']; 
                                    ?>">Ukloni</a></td>

                </tr>
                <?php // } 
                ?>
                <tr>
                    <!-- Suma za placanje -->
                    <td class="total-price" colspan="6">Ukupno za placanje
                        <?php //echo Cart::getPriceTotal(); 
                        ?>

                    </td>
                    <td></td>
                </tr>

                <tr>
                    <!-- Isprazni korpu -->
                    <td class="clear-cart" colspan="6"><a href="#">Isprazni korpu </a> </td>
                    <!-- "cartfu.php?clearCart" -->
                </tr>
                <tr>
                    <td colspan="6"><a href="#">Kupi</a></td>
                </tr>
            </table>
        </div>


        <!-- Title and sub-title -->
        <h1>Najbolja kupovina zauvek</h1>
        <h3 class="text">
            Ostanite zdravi, sacuvajte okolinu, ustedite novac.
        </h3>


        <!-- Category search 
*****************************************************************nece pa nece-->
        <div class="search">
            <form method="get" action="">
                <label for="catname">Kategorija:</label>
                <select name="catname" id="catname">
                    <option value="">Izaberite kategoriju</option>
                    <option value="Trotinet">Trotinet</option>
                    <option value="Bicikl">Bicikl</option>
                </select>
                <button type="submit" name="search">Pretraga</button>
            </form>
        </div>
        <!-- The products wrapper -->
        <div class="products">
            <?php
            foreach ($products as $product) {

            ?>
                <!-- The product element -->
                <div class="product">
                    <!-- The products image -->
                    <img src="<?php echo $product->image ?>" alt="">
                    <!-- The products name -->
                    <p class="name"><?php echo $product->name ?></p>
                    <!-- The products price formatted with two decimals  -->
                    <p class="price"><?php echo number_format($product->price) ?>DIN</p>
                    <!-- The add cart button -->
                    <a href="#<?php echo $product->id;
                                ?>">Ubaci u korpu</a>
                </div> <!-- End of product element -->
            <?php
            }
            ?>
        </div> <!-- End of products -->



    </div> <!-- End of page -->
</body>

</html>