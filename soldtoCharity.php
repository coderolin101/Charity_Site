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

            $query = "SELECT charity_name, sum(qty) as sum 
						FROM `order_table`
						join charity_table on charity_table.charity_id = order_table.charity_id
						group by charity_name"; 
	
			$result = mysqli_query($mysqli, $query);

			echo "<table>";
			echo "</td><tr>";
            //header row
            echo "<tr> <th>CHARITY</th> <th>SUM</th> <th>	</th></tr>";
            //while to display a number of rows that are neccessary
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                //echo mysqli_num_rows($result);
                
                echo "<tr><td>";
                echo $row['charity_name'];//email  
                echo "</td><td>";   
                echo $row['sum'];//fname    
             
                echo "</td><tr>";
            }
            echo "<table/>";
            mysqli_close($mysqli);   
        ?>
		</body>
		</html>