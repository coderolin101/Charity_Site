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

    <form method = "post" action="">
        <input type="hidden" name="submitted" value="true"/>
		<br />
        <label>Search Category:
            <select name = "category">
                <option value = "email">Email</option>
                <option value = "cust_fn">FirstName</option>
                <option value = "cust_ln">LastName</option>
            </select>
        </label>

        <label>Search Criteria: <input type ="text" name ="criteria"/></label>
        <input type = "submit"/>

    </form>
    <br />
<?php   
             
            $mysqli = mysqli_connect("localhost", "root", "", "esufundraiser")or die(mysqli_error($mysqli));
                //echo "connected to DB";
         
            if(isset($_POST['submitted'])){
            
            $category = $_POST['category'];
            $criteria = $_POST['criteria'];
            $query = "SELECT cust_fn,cust_ln,cc_num,cvs,email,sock_descr,qty,charity_name,building_num,room_num from customer_table 
					join order_cust_table on customer_table.cust_id = order_cust_table.cust_id join order_table on order_cust_table.order_cust_id=order_table.order_cust_id 
					join item_table on item_table.sock_id = order_table.sock_id 
					join charity_table on charity_table.charity_id = order_table.charity_id
					join delivery_table on order_cust_table.order_cust_id =delivery_table.order_cust_id
					WHERE $category LIKE '%".$criteria."%'"; 
            //LIKE '%".$criteria."%'" wild card to find by a few characters of the word 
            $result = mysqli_query($mysqli, $query) or die(' error');
            $num_rows = mysqli_num_rows($result);

                        
            echo "<table>";
			echo "<th>  $num_rows results found</th>";
			echo "</td><tr>";
            //header row
            echo "<tr> <th>First</th> <th>Last</th> <th>Card Number</th><th>CVS</th><th>Email</th><th>Descript</th>
			<th>Quantity</th><th>Charity</th><th>Building</th><th>Room</th></tr>";
            //while to display a number of rows that are neccessary
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                //echo mysqli_num_rows($result);
                
                echo "<tr><td>";
                echo $row['cust_fn'];//email  
                echo "</td><td>";   
				echo $row['cust_ln'];//email  
                echo "</td><td>";   
				echo $row['cc_num'];//email  
                echo "</td><td>";   
				echo $row['cvs'];//email  
                echo "</td><td>";   
				echo $row['email'];//email  
                echo "</td><td>";   
				echo $row['sock_descr'];//email  
                echo "</td><td>";   
				echo $row['qty'];//email  
                echo "</td><td>";   
				echo $row['charity_name'];//email  
                echo "</td><td>";   
                echo $row['building_num'];//fname    
                echo "</td><td>";   
                echo $row['room_num'];//lname
                echo "</td><tr>";
            }
            echo "<table/>";

            }// end of main if stmt       
           
            
            mysqli_close($mysqli);   
            

        ?>
		
</body>
</html>