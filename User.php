<?php

$userId="";
if(isset($_GET["userId"])){
	$userId=$_GET["userId"];
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User3</title>
</head>

<body>
<?php
	
	$connection=mysqli_connect("localhost","root","","members");
	if(!mysqli_connect_error($connection)){
		$recordset=mysqli_query($connection,"select * from user where userID=3;");
		while($row=mysqli_fetch_row($recordset)){
		$User3=$row[0]+$row[1]+$row[2];
		}
		
		$User3_json=json_encode($User3,JSON_FORCE_OBJECT);
		echo $User3_json."\n";
	}
	
	else{
		echo("صفحه قادر به برقراری اتصال با پایگاه داده نمیباشد.");
	}
	
		?>

</body>
</html>