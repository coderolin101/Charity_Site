<!DOCTYPE html>
<html>
<head>
  <h1>Admin Form</h1> 
  <link rel="stylesheet" href="adminFormCSSstyle.css" type="text/css" charset="utf-8">
    <style type="text/css">
        table{
            background-color:  #FFFFFF;
        }
        th{
            width:350px;
            text-align: left;
        }
    </style>
</head>
<body>
<div class="btn-group" style = "width: 100%">
<button onclick="window.location.href='http://localhost:8012/projectDB/adminForm.php'" style="width:10%" type="submit" name="0" class = "zero"> HOME </button>
</div>
<br /> <br />
<?php          
            $mysqli = mysqli_connect("localhost", "root", "", "esufundraiser")or die(mysqli_error($mysqli));
             
            $query = "select sum(qty) as sum from order_table"; 

			$result = mysqli_query($mysqli, $query);

			$row = mysqli_fetch_assoc($result); 

			$sum = $row['sum'];

            echo "<table>";
            echo "<tr> <th>TOTAL SOLD : $sum</th> 		<th></th> 		<th></th></tr>";
            echo "<table/>";

            mysqli_close($mysqli);   
 
        ?>
		</body>
		</html>