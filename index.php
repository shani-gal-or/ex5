

<!DOCTYPE html>
<html lang="en">
<?php
    include "db.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Books List</title>
</head>
<body>
    <h1>Books List<h1>
        <main id="dataServices">
            <select id="categoryDropdown" class="form-select"></select>     
        </main>
    <?php
        $query= "select * from tbl_26_books";
        $result=mysqli_query($connection,$query); 
        echo "<ul>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<li class='" .$row["category"]. " list-group-item bg-body bg-gradient'>
            <a href='./book.php?book_id=".$row["book_id"]."' class='link-body-emphasis h-100 d-flex flex-column justify-content-between align-items-center'>";
            echo "<h3 class='text-wrap m-auto pb-2'>" . $row["book_name"] . "</h3>";
            echo "<img src='" . $row["image_url1"] ."' class='bookImage object-fit-contain' title='".$row["book_name"]."' alt='".$row["book_name"]."'></a></li>";
        }
        echo "</ul>";
        mysqli_free_result($result);
        ?>
    
</body>
</html>
<?php
mysqli_close($connection);
?>