<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
// $title = ucwords($_POST['title']);
// $issuer = ucwords($_POST['issuer']);
$certificate="";
if(!empty($_FILES['certificate']['tmp_name']) 
     && file_exists($_FILES['certificate']['tmp_name'])) {
    $certificate = addslashes(file_get_contents($_FILES['certificate']['tmp_name']));
}
$certid = $_POST['attid'];

if ($certificate == "") {

header("location:../mycv.php?r=7764");					  
	
}else{
	
if ($_FILES["certificate"]["size"] > 1000000) {
header("location:../mycv.php?r=2290");
}else{
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("UPDATE tbl_cv SET  attachment = '$certificate' WHERE id=:certid AND member_no = '$myid'");
// $stmt->bindParam(':title', $title);
// $stmt->bindParam(':issuer', $issuer);
$stmt->bindParam(':certid', $certid);
$stmt->execute();
header("location:../mycv.php?r=7764");					  
}catch(PDOException $e)
{

}

}
	
}

?>