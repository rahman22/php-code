<?php

include('config/config.php');
 
$response = array();

$id = $_GET['id'];

$query ="DELETE FROM books WHERE b_id='$id'";
$result = mysqli_query($conn , $query);
if($result>0){
 
$response['success'] =1;
$response['message'] ='book delete successfully from database';
echo json_encode($response,JSON_PRETTY_PRINT);


}

else{

$response['faild'] =0;
$response['message'] ='query faild insert records';
echo json_encode($response,JSON_PRETTY_PRINT);

}

?>