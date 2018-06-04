<!DOCTYPE html>
<html>
<head>
  <h1>Admin Form</h1> 
  <link rel="stylesheet" href="adminFormCSSstyle.css" type="text/css" charset="utf-8">
    <style type="text/css">
        table{
            background-color: #FFFFFF;
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
		<br /><br />
        <label>Delete By Category:
            <select name = "category">
                <option value = "email">Email</option>
                <option value = "cust_fn">FirstName</option>
                <option value = "cust_ln">LastName</option>
            </select>
        </label>

        <label>Delete Criteria: <input type ="text" name ="criteria"/></label>
        <input type = "submit"/>

    </form>
    <br />
<?php   
             
            $conn = mysqli_connect("localhost", "root", "", "esufundraiser")or die(mysqli_error($mysqli));
			if(isset($_POST['submitted'])){
			$category = $_POST['category'];
            $criteria = $_POST['criteria'];
			$sql = "DELETE from customer_table WHERE $category LIKE '%".$criteria."%'";
			echo "<table>";
			echo "<tr> <th>	</th> <th>	</th> <th>	</th></tr>";
			if (mysqli_query($conn, $sql)) {
				echo "<tr><td>";
				echo "Record deleted successfully";
				echo "</td><tr>";
			} 
			else {
				echo "<tr><td>";
				echo "Error deleting record: ".mysqli_error($conn);
				echo "</td><tr>";
			}
			echo "<table/>";
			}
			mysqli_close($conn);			
?>

</body>
</html>