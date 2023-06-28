<?php 
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>book page</title>
</head>
<body>
    <?php
    $id = $_GET["book_id"] ?: 0;
    $query = "select * from tbl_26_books where book_id = $id";
    $result=mysqli_query($connection,$query); 
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="row pb-5 text-center"><h1>'.$row["book_name"].'</h1></div><br>';
        echo '<div class="row pb-5 text-center"><h1> the price of the book is '.$row["price"].'</h1></div><br>';
        echo '<div class="row pb-5 text-center"><h2> the category is: '.$row["category"].'</h2></div><br>';
        echo '<div class="row pb-5 justify-content-center d-flex">
          <img src="'.$row["image_url1"].'" class="bookImage object-fit-scale pb-1" title="Front cover of '.$row["book_name"].'" alt="Front cover of '.$row["book_name"].'">';
        echo '<img src="'.$row["image_url2"].'" class="bookImage object-fit-scale pb-1" title="Back cover of '.$row["book_name"].'" alt="Back cover of '.$row["book_name"].'"></div>';
    }
    ?>
</body>
</html>