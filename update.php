<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php
include('config/config.php');
$id = $_GET['id'];

 $sql = "SELECT * FROM books WHERE b_id='$id'";
 $result = mysqli_query($conn , $sql);

?>
<div class="container bg-info">
<div class="row" style="margin-top:10px; margin-bottom:10px;">
<div class="col-lg-12">
<form action="edit.php" method="post">
<?php
while ($row = mysqli_fetch_assoc($result)){
?>
<input class="form-control" name="book_id" type="hidden" value="<?php echo $row['b_id']; ?>" />
<div class="form-group">
    <label for="name">Book Name:</label>
    <div class="input-group">
   <div class="input-group-addon">
  <span class="glyphicon glyphicon-book"></span> 
   </div>
   <input class="form-control" name="book_name" type="text" value="<?php echo $row['book_name']; ?>" />
  </div>
  </div>
  <div class="form-group">
    <label for="name">Author Name:</label>
        <div class="input-group">
   <div class="input-group-addon">
  <span class="glyphicon glyphicon-user"></span> 
   </div>
   <input class="form-control" name="author_name" type="text" value="<?php echo $row['book_auther']; ?>"/>
  </div>
  </div>
  <div class="form-group">
    <label for="email">Book Price:</label>
        <div class="input-group">
   <div class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span> 
   </div>
   <input class="form-control" name="book_price" type="number" value="<?php echo $row['book_price']; ?>"/>
  </div>
  </div>
  <div class="form-group">
    <label for="age">Data Of Published:</label>
  <div class="input-group">
   <div class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span> 
   </div>
   <input class="form-control" name="date_published" type="date" value="<?php echo $row['date_of_published']; ?>" />
  </div>
  </div>
<?php
}
?>  
<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-edit"></span> Edit Books</button>
</form>
</div>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>