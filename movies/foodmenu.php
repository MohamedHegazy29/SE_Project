<?php
include("include/header.php");
if (!isset($_SESSION['client']['status'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/foodmenu.css">
    <title>Menu</title>
</head>

<body>
    <section class="food1">
        <div class="container">
            <div class="CARD-container">
                <div class="card">
                    <img src="upload/FOOD/CB CHICKEN BURGER(1)(1).png" alt="">
                    <div class="card-content">
                        <h2>HOT_FOOD</h2>
                        <div class="card-body">
                            <H3>CB CLASSIC CHICKEN BURGER</H3>
                            <H4>95.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/CHEESYHOTDOG.jpg" alt="">
                    <div class="card-content">
                        <h2>HOT_FOOD</h2>

                        <div class="card-body">
                            <H3>CHEESYHOTDOG</H3>
                            <H4>65.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/HOT CHOCOLATE.jpg" alt="">
                    <div class="card-content">
                        <h2>JUICE</h2>

                        <div class="card-body">
                            <H3>HOT CHOCOLATE</H3>
                            <H4>25.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/JUICE.jpg" alt="">
                    <div class="card-content">
                        <h2>JUICE</h2>

                        <div class="card-body">
                            <H3>MANGO JUICE</H3>
                            <H4>15.00 EGP</H4>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="upload/FOOD/MILKSHAKE.jpg" alt="">
                    <div class="card-content">
                        <h2>JUICE</h2>

                        <div class="card-body">
                            <H3>MILKSHAKE</H3>
                            <H4>25.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/AMRICANO.jpg" alt="">
                    <div class="card-content">
                        <h2>JUICE</h2>

                        <div class="card-body">
                            <H3>AMRICANO</H3>
                            <H4>15.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/CARAMEL POPCORN.png" alt="">
                    <div class="card-content">
                        <h2>Snacks</h2>

                        <div class="card-body">
                            <H3>CARAMEL POPCORN</H3>
                            <H4>25.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/NACHOS.jpg" alt="">
                    <div class="card-content">
                        <h2>Snacks</h2>

                        <div class="card-body">
                            <H3>NACHOS</H3>
                            <H4>20.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/cutton candy.jpg" alt="">
                    <div class="card-content">
                        <h2>Snacks</h2>

                        <div class="card-body">
                            <H3>cutton candy</H3>
                            <H4>20.00 EGP</H4>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="upload/FOOD/CRUNCHY CHEETOS.jpg" alt="">
                    <div class="card-content">
                        <h2>Snacks</h2>
                        <div class="card-body">
                            <H3>CRUNCHY CHEETOS</H3>
                            <H4>20.00 EGP</H4>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </section>





    <section class="food2">

        <div class="FOOD-form-container form">
            <form action="foodmenumanege.php" method="POST">

                <select name="HOT_FOOD" id="2">
                    <option value="" disabled selected>HOT_FOOD</option>
                    <option value="CB CHICKEN BURGER">CB CHICKEN BURGER</option>
                    <option value="CHEESYHOTDOG">CHEESYHOTDOG</option>
                </select>

                <select name="DRINK" id="2" >
                    <option value="" disabled selected>DRINK</option>
                    <option value="MILK SHAKE">MILK SHAKE</option>
                    <option value="AMRICANO">AMRICANO</option>
                    <option value="HOT CHOCOLATE">HOT CHOCOLATE</option>
                    <option value="JUICE">JUICE</option>
                </select>
                <select name="Snacks" id="2" >
                    <option value="" disabled selected>Snacks</option>
                    <option value="CARAMEL POPCORN">CARAMEL POPCORN</option>
                    <option value="CRUNCHY CHEETOS">CRUNCHY CHEETOS</option>
                    <option value="NACHOS">NACHOS</option>
                    <option value="cutton candy">cutton candy</option>
                </select>
                <button type="submit" value="submit">REQUEST FOOD</button>
            </form>

            <?php

            ?>
        </div>
        </div>
    </section>

</body>

</html>