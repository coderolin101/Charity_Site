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
            $query = "SELECT * from customer_table WHERE $category LIKE '%".$criteria."%'"; 
            $result = mysqli_query($mysqli, $query) or die(' error');
            $num_rows = mysqli_num_rows($result);
/****************************************Encryption Function**********************************/
/*Source: Nazmul Ahsan of https://nazmulahsan.me/simple-two-way-function-encrypt-decrypt-string*/
	function encrypt_decrypt($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
	} 
/********************************************************************************************/	
            echo "<table>";
			echo "<th>  $num_rows results found</th>";
			echo "</td><tr>";
            //header row
            echo "<tr> <th>CREDIT CARD NUMBER</th> <th>CVS</th> <th>	</th></tr>";
            //while to display a number of rows that are neccessary
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                //echo mysqli_num_rows($result);
                
                echo "<tr><td>";
                echo encrypt_decrypt('decrypt',$row['cc_num']);//email  
				 
                echo "</td><td>";   
                echo encrypt_decrypt('decrypt',$row['cvs']);//fname  
				
				echo "</td><td>";   
                echo "</td><tr>";
            }
            echo "<table/>";

            }// end of main if stmt       
           
            
            mysqli_close($mysqli);   
            

        ?>
		
</body>
</html>