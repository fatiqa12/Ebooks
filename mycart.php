<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My CART</h1>
            </div>
            <div class="col-lg-9">
            <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $total=0;
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key => $value)
    {
      $sr=$key+1;
        $total=$total+$value['Price'];
        echo"
        <tr>
          <td>$sr</td>
          <td>$value[Item_Name]</td>
          <td>$value[Price]</td>
          <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
          <td>
          <form action='manage_cart.php' method='POST'>
          <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
          <input type='hidden' name='Item_Name' value='$value[Item_Name]'> 
          </form>
          </td>
        </tr>
        ";
    }
  }
    ?>
  </tbody>
</table>
            </div>
            <div class="col-lg-3">
              <div class="border bg-light rounded p-4">
              <h4>Total:</h4>
              <h5 class="text-right"><?php echo $total ?></h5>
              <br>
              <form>
              <div class="form-check">
               <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
               <label class="form-check-label" for="flexRadioDefault1">
                 Cash On Delivery
               </label>
             </div>
             <br>
                <button class="btn btn-primary btn-block">Make Purchase</button>
              </form>
              </div>
            </div>
        </div>
    </div>
</body>

</html>