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

            $query = "SELECT cust_fn, cust_ln, sock_descr, building_num, room_num from customer_table 
			join order_cust_table on customer_table.cust_id = order_cust_table.cust_id 
			join order_table on order_cust_table.order_cust_id = order_table.order_cust_id 
			join item_table on item_table.sock_id = order_table.sock_id 
			join delivery_table on order_cust_table.order_cust_id = delivery_table.order_cust_id 
			where not building_num = '0'"; 

			$result = mysqli_query($mysqli, $query);

			echo "<table>";
			echo "</td><tr>";
            //header row
            echo "<tr><th>First</th><th>Last</th><th>Description</th><th>BUILDING NUMBER</th> <th>ROOM NUMBER</th></tr>";
            //while to display a number of rows that are neccessary
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                //echo mysqli_num_rows($result);
                
                echo "<tr><td>";
                echo $row['cust_fn'];//email  
                echo "</td><td>";
                echo $row['cust_ln'];//email  
                echo "</td><td>";
                echo $row['sock_descr'];//email  
                echo "</td><td>";				
                echo $row['building_num'];//email  
                echo "</td><td>";   
                echo $row['room_num'];//fname    
                 echo "<tr><td>";
				 
                echo "</td><tr>";
            }
            echo "<table/>";
            mysqli_close($mysqli);   
        ?>
		</body>
		</html>