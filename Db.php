 <?php
    $con = mysql_connect("localhost","root","");
	mysql_select_db("EPhotoGallery", $con);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
?>
