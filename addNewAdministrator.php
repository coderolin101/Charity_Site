<!DOCTYPE html>
<head>
  <h1>Admin Form</h1> 
  <link rel="stylesheet" href="adminFormCSSstyle.css" type="text/css" charset="utf-8">
</head>

<body>
<div class="btn-group" style = "width: 100%">
<button onclick="window.location.href='http://localhost:8012/projectDB/adminForm.php'" style="width:10%" type="submit" name="0" class = "zero"> HOME </button>
</div>
<form method = "post" action="">
		<br />
		<table>		
  <tr>
    <td>New Administrator User Name: </td>
    <td><input type ="text" name ="user"/></td>
  </tr>
<!--  <tr>
    <td>New Administrator User Password:	</td>
    <td><input type ="text" name ="pass"/></td>
  </tr>-->
  <br />
	</table>

<div >
<input type="submit" value="SUBMIT" style="display: block; width: 20%; margin: 0 auto;">
</div>

</form>

<?php
            $mysqli = mysqli_connect("localhost", "root", "", "esufundraiser")or die(mysqli_error($mysqli));
            if(isset($_POST['user']))
			{
				$user = $_POST['user'];
//				$pass = $_POST['pass'];

				$query = "CREATE USER $user @'localhost' IDENTIFIED BY 'mysqli_native_password';
				
//				SET PASSWORD FOR $user @'localhost' = PASSWORD('$pass');";
				$result = mysqli_query($mysqli, $query) or die('error');
            }    
             
?>

</body>
</html>