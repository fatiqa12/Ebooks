<?php include("header.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="./manage_cart.php" method="POST">
                    <div class="card">
                        <img src="./images/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Novel</h5>
                            <p class="card-text">Price: Rs.450</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Novel">
                            <input type="hidden" name="Price" value="450">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="./manage_cart.php" method="POST">
                    <div class="card">
                        <img src="./images/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Comics</h5>
                            <p class="card-text">Price: Rs.550</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Comics">
                            <input type="hidden" name="Price" value="550">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="./manage_cart.php" method="POST">
                    <div class="card">
                        <img src="./images/3.webp" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">General Knowledge</h5>
                            <p class="card-text">Price: Rs.650</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="General Knowledge">
                            <input type="hidden" name="Price" value="650">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="./manage_cart.php" method="POST">
                    <div class="card">
                        <img src="./images/4.webp" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Story Books</h5>
                            <p class="card-text">Price: Rs.750</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Story Books">
                            <input type="hidden" name="Price" value="750">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>