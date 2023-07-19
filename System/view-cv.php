<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nsu Jobs Scopes - View Cv</title>
<link rel="shortcut icon" href="images/ico/NSU_favicon3.png">
<link href="css/main.css" rel="stylesheet">
</head>

<body>
<?php
require 'constants/db_config.php';
$file_id = $_GET['id'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("SELECT * FROM tbl_cv WHERE id = :fileid");
$stmt->bindParam(':fileid', $file_id);
$stmt->execute();
$result = $stmt->fetchAll();
$title="Cv";
foreach($result as $row)
{
    $certificate = $row['attachment'];
	
	
	?>
<iframe  style="border:none;" src="ViewerJS/?title=<?php echo "$title"; ?>#<?php echo 'data:application/pdf;base64,'.base64_encode($certificate).'' ?>" height="100%" width="100%"></iframe>

<?php
}

					  
}catch(PDOException $e)
{

}

?>
</body>

</html>
