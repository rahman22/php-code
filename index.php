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
$result = mysqli_query($conn , 'SELECT * FROM books');
?>
<div class="container bg-info">
<div class="row" style="margin-top:10px; margin-bottom:10px;">
<div align="right">
<a href="all_books.php">All Books</a>  
</div>
<div class="col-lg-12" style="margin-top:5px;">
<div align="center">
<h4 class="text-primary">Display all records of rest api database</h4>



<table class="table table-bordered">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Author</th>
<th>Price</th>
<th>Data Published</th>
<th>Actions</th>	
</tr>	
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($result)){
if($row>0){
?>
<tr>
<td><?php echo $row['b_id']; ?></td>
<td><?php echo $row['book_name']; ?></td>  
<td><?php echo $row['book_auther']; ?></td>  
<td>$<?php echo $row['book_price']; ?></td> 
<td><?php echo $row['date_of_published']; ?></td>
<td>
<a href="update.php?id=<?php echo $row['b_id'];  ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"> Edit</span></a>  
<a href="delete.php?id=<?php echo $row['b_id'];  ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete</span></a>  
</td>
</tr> 
<?php
}
}
?>
</tbody>	
</table>
<div align="center">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-book"></span> Add Books</button>
</div>
</div><!-- end second col-lg-12 -->	
</div><!-- end second row -->	
</div><!-- end of container -->

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Books In Rest Api</h4>
        </div>
        <div class="modal-body">
  <form action="insert.php" method="post">
     <div class="form-group">
    <label for="name">Book Name:</label>
    <div class="input-group">
   <div class="input-group-addon">
  <span class="glyphicon glyphicon-book"></span> 
   </div>
   <input class="form-control" name="book_name" type="text"/>
  </div>
  </div>
  <div class="form-group">
    <label for="name">Author Name:</label>
        <div class="input-group">
   <div class="input-group-addon">
  <span class="glyphicon glyphicon-user"></span> 
   </div>
   <input class="form-control" name="author_name" type="text"/>
  </div>
  </div>
  <div class="form-group">
    <label for="email">Book Price:</label>
        <div class="input-group">
   <div class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span> 
   </div>
   <input class="form-control" name="book_price" type="number"/>
  </div>
  </div>
  <div class="form-group">
    <label for="age">Data Of Published:</label>
  <div class="input-group">
   <div class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span> 
   </div>
   <input class="form-control" name="date_published" type="date"/>
  </div>
  </div>
  
  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-book"></span> Add New Books</button>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>