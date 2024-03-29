<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<?php
include('Header.php');
?>
	<br/><br/><br/><br/>
	<form name='f1' method='post' action=''>
	<br/>
	<br/>
	<center>
<table align="center" style="width:40%;" border='1' class="table table-bordered table-striped table-hover">
<tr><td>Select Category</td>
<td><select name='cboCategory'>

					  <option value="Wedding Album">Wedding Album</option>
					  <option value="Portraits">Portraits</option>
					  <option value="Landscapes">Landscapes</option>
					  <option value="Baby Shooting">Baby Shooting</option>
					  <option value="Festivals">Festivals</option>
					  <option value="Functions">Functions</option>
</select>
</td>
</tr>
<tr>
<td colspan='2' align='center'>
<input type='submit' name='submit' value='Show'/>
</td>
</table>

</center>
</form>	
    <table align="center" style="width:90%;">

        <?php

        $Count = 1;
		
		
		if(isset($_POST['submit']))
		{
		$query = mysql_query("Select * From TemplateTable Where Category='" . $_REQUEST['cboCategory']. "'",$con);	
		}
else
{
		$query = mysql_query("Select * From TemplateTable",$con);
}
       
        While($r = mysql_fetch_array($query))
        {

            if($Count == 1)
            {
                echo "<tr>";
            }

            $Count += 1;

            echo "<td><br/><br/><h4>" . $r['TemplateName'] . "</h4>";
            echo "<img src = 'Image/Template/". $r['Image'] . "' Height='150px' Width='200px' /><br/>";
			echo "Rs " . $r['Cost']  ;

            if($Count == 5)
            {
                echo "<tr>";
                $Count = 1;
            }
        }
        mysql_close($con);
        ?>

    </table>


</div>
</body>
</html>