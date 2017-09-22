<?php

include('config/config.php');

$response = array();

$names = $_POST['book_name'];
$authors = $_POST['author_name'];
$prices = $_POST['book_price'];
$dates = $_POST['date_published'];

$query = "INSERT INTO books(book_name , book_auther , book_price , date_of_published) VALUES('$names' , '$authors' , '$prices' , '$dates')";

$result = mysqli_query($conn , $query);

if($result){

$response['success'] =1;
$response['message'] ='book : '  .$names.  ' insert successfully in database';
echo json_encode($response,JSON_PRETTY_PRINT);

}
else{

$response['faild'] =0;
$response['message'] ='query faild insert records';
echo json_encode($response,JSON_PRETTY_PRINT);
}

?>