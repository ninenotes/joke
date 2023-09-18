<?php
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $time = $_POST['time'];
    $date = $_POST['mydate'];
	$sex = $_POST['sex'];
	$position= $_POST['position'];

    $sToken = "PNmxCGjrE5q7ZnGUvyCvUveN64OnpNBadJ4o0dVtjDL";
	$sMessage = "รายละเอียดการจองคิว";
    $sMessage .= "Email :" .$email ."\n";
    $sMessage .= "ชื่อผู้จอง :" .$name ."\n";
    $sMessage .= "เบอร์โทรศัพท์ :" .$phone ."\n";
    $sMessage .= "วันที่จอง :" .$date ."\n";
    $sMessage .= "เวลาที่จอง :" .$time ."\n";
	$sMessage .= "เพศ :" .$sex ."\n";
	$sMessage .= "ลายละเอียด :" .$position ."\n";
	$sticker_package_id = '6632'; 
	$sticker_id = '11825378'; 

	$data  = array(
		'message' => $sMessage,
		'stickerPackageId' => $sticker_package_id,
		'stickerId' => $sticker_id
	);


   
	
	
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, $data); 
	$headers = array( 'Content-type: multipart/form-data', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 



	 if ($result) {
		$_SESSION['success'] = "จองคิวเรียบร้อยแล้ว!";
		header("location: insert.php");
	 }
	 else {
		$_SESSION['error'] = "จองคิวผิดพลาด";
		header("location: insert.php");
	 }

	//Result error 
	// if(curl_error($chOne)) 
	// { 
	// 	echo 'error:' . curl_error($chOne); 
	// } 
	// else { 
	// 	$result_ = json_decode($result, true); 
	// 	echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	// } 
	// curl_close( $chOne );   

}




?>