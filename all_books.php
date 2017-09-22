<?php

include 'config/config.php';

$response = array();

$query = "SELECT * FROM `books` ORDER BY `b_id` DESC";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0) {

$response["books"] = array();

while ($row = mysqli_fetch_array($result)){
		$data = array();
		$data["id"]=$row["b_id"];
		$data["name"]=$row["book_name"];
		$data["authors"]=$row["book_auther"];
		$data["price"]=$row["book_price"];
		$data['date_published'] = $row["date_of_published"];
		array_push($response["books"], $data);
}

if($result){
		$response["success"] = 1;
		$response["message"] = "Successfully Display All Books";
		echo json_encode($response,JSON_PRETTY_PRINT);
}
else{
		$response["faild"] = 0;
		$response["message"] = "Error Try Again";
		echo json_encode($response,JSON_PRETTY_PRINT);
}
}

else {

	$response["faild"] = 0;
	$response["message"] = "No Records Found";
	echo json_encode($response,JSON_PRETTY_PRINT);
}

mysqli_close($conn);


?>