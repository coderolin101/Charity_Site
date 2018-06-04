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
<br />
 <form method = "post" action="">
        <input type="hidden" name="submitted" value="true"/>
        <label>New Charity Name: <input type ="text" name ="char_name"/></label>
        <input type = "submit"/>

    </form>
    <br />
	<?php   
             
            $mysqli = mysqli_connect("localhost", "root", "", "esufundraiser")or die(mysqli_error($mysqli));

            if(isset($_POST['submitted'])){

            $criteria = $_POST['char_name'];
			
            $query = "insert into charity_table (charity_name) values ('".$_POST['char_name']."')"; 
            
            $result = mysqli_query($mysqli, $query) or die(' error');
           
            echo "<table>";
			echo "<tr> <th>	</th> <th>	</th> <th>	</th></tr>";
			echo "<th>  Name $criteria added to Charities table.</th>";
			echo "</td><tr>";
			echo "<table/>";
			}
            mysqli_close($mysqli);   

        ?>
		</body>
		</html>