<?php
include('HeaderAdmin.php');
?>

<?php
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Name=$_POST["txtName"];
	$Category=$_POST["ddCategory"];
$cost=$_POST["txtCost"];
	$file_name = "";
	
	if(isset($_FILES['fileUploader']))
	{
		$nameforExt = $_FILES['fileUploader']['name'];
		$ext = pathinfo($nameforExt, PATHINFO_EXTENSION);
        
        $file_name = $Id . '.' . $ext;
        $file_tmp =$_FILES['fileUploader']['tmp_name'];
        move_uploaded_file($file_tmp,"Image/Template/".$file_name);
	}
		
	$qry="Insert Into TemplateTable Values('". $Id ."','". $Category ."','". $Name ."','". $cost . "','" . $file_name ."')";
	mysql_query($qry,$con) or die(mysql_error());
   	echo "Data Saved Successfully!<br/>";
	echo "<a href='AddTemplate.php'>Click here for New Record</a>";
	mysql_close($con);
?>