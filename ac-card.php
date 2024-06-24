<?php
session_start();
if (isset($_SESSION['sessionEmail'])) {
    
} else {
    header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/abc.css">
</head>

<body>
<div class="card mb-3 md-50" style="max-width: 400px;  margin-top: 300px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="<?php echo $_SESSION['sessionImg']?>" width="150" style="border-radius: 50%;" alt="User Image" />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5  class="card-title"><a style="text-decoration: none;" class="js-acc-btn" href="#"><?php echo $_SESSION['sessionName']?></a>
        </h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</body>

</html>