<?php
include('config/config.php');

$response = array();

$id = $_POST['book_id'];
$name = $_POST['book_name'];
$author = $_POST['author_name'];
$price = $_POST['book_price'];
$date = $_POST['date_published'];

$sql = "UPDATE books SET book_name='$name' , book_auther='$author' , book_price='$price' , date_of_published='$date' WHERE b_id='$id'";

$result=mysqli_query($conn,$sql);

if($result) {
   
$response['success'] =1;
$response['message'] ='book update successfully in database';
echo json_encode($response,JSON_PRETTY_PRINT);


}
else {

$response['faild'] =0;
$response['message'] ='query faild insert records';
echo json_encode($response,JSON_PRETTY_PRINT);

}

?>