<?php
include('Header.php');
?>

<?php
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Name=$_POST["txtName"];
	$Category=$_POST["ddCategory"];
	$Cus=$_POST["txtCus"];
$Addr=$_POST["txtAddress"];
$Cont=$_POST["txtContactNo"];
$mailid=$_POST["txtEmailID"];
	
	
	$file_name = "";
	
	if(isset($_FILES['fileUploader']))
	{
		$nameforExt = $_FILES['fileUploader']['name'];
		$ext = pathinfo($nameforExt, PATHINFO_EXTENSION);
        
        $file_name = $Id . '.' . $ext;
        $file_tmp =$_FILES['fileUploader']['tmp_name'];
        move_uploaded_file($file_tmp,"Image/Template/".$file_name);
	}
			$file_name2 = "";
	
	if(isset($_FILES['fileUploader2']))
	{
		$nameforExt2 = $_FILES['fileUploader2']['name'];
		$ext2 = pathinfo($nameforExt2, PATHINFO_EXTENSION);
        
        $file_name2 = $Id . '.' . $ext2;
        $file_tmp2 =$_FILES['fileUploader']['tmp_name'];
        move_uploaded_file($file_tmp2,"Image/Template/".$file_name2);
	}
	$qry="Insert Into TemplateTableByCustomer Values('". $Id ."','". $Category ."','". $Name ."','". $file_name ."','" . $Cus . "','" . $Addr . "','" . $Cont . "','" . $mailid . "','". $file_name2 ."')";
	mysql_query($qry,$con) or die(mysql_error());
   	echo "Data Saved Successfully!<br/>";
	echo "<a href='AddTemplateByCustomer.php'>Click here for New Record</a>";
	mysql_close($con);
?>