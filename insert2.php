
<?php
$mysqli = mysqli_connect("localhost", "root", "", "esufundraiser")or die(mysqli_error($mysqli));
echo "connected to DB"."<br>";
"<br>";
if(!$mysqli){
	echo "failed to connect";
}
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

/*************************************customer_table*************************************/

$fname = ($_POST['firstname']);
echo $fname."<br>";
$lname = ($_POST['lastname']);
echo $lname."<br>";
$input1 = $_POST['card_front'];
$ccfront = encrypt_decrypt('encrypt', $input1);
echo $ccfront."<br>";
$input2 = $_POST['card_back'];
$ccback = encrypt_decrypt('encrypt', $input2);
echo $ccback."<br>";
//$ccdate = ($_POST['cc_date']);
//echo $ccdate."<br>";
$email = ($_POST['email_address']);
echo $email."<br>";
$pass_pass = ($_POST['pass_word_pass']);
echo $pass_pass."<br>";
$phone_ph = ($_POST['phone_phone']);
echo $phone_ph."<br>";

$sql_insert = "INSERT INTO customer_table (cust_fn, cust_ln, cc_num, cvs, email, passwrd, phone_num)
VALUES 
('$fname','$lname','$ccfront','$ccback','$email','$pass_pass','$phone_ph')";

if (!mysqli_query($mysqli, $sql_insert))
  {
  	die(' Error: ' . mysqli_error($mysqli));
  }

/*******************************************order_cust_table*****************************************************/

//order_cust_id
//cust_id
//date

$cust_id = $mysqli->insert_id;
//date function
$date = date("Y-m-d");

$sql_insert = "INSERT INTO order_cust_table (cust_id)
VALUES 
('$cust_id')";

if (!mysqli_query($mysqli, $sql_insert))
  {
  	die(' Error: ' . mysqli_error($mysqli));
  }


/*******************************************delivery_table*****************************************************/

//order_cust_id
//building_num
//room_num

$order_cust_id = $mysqli->insert_id;

$building = ($_POST['building_select']);
$room = ($_POST['room_select']);
echo $building."<br>";
$sql_insert = "INSERT INTO delivery_table (order_cust_id, building_num, room_num)
VALUES ('$order_cust_id', '$building', '$room')";

if (!mysqli_query($mysqli, $sql_insert))
  {
  	die(' Error: ' . mysqli_error($mysqli));
  }

/*******************************************order_table*****************************************************/

//order_sock_id
//order_cust_id
//sock_id
//charity_id
//qty

if(!empty($_POST['quantity_1']) && !empty($_POST['charity_1']))
{
$charity_id1 = ($_POST['charity_1']);
$qtyChosen1 = ($_POST['quantity_1']);
echo $qtyChosen1."<br>";
$sql_insert = "INSERT INTO order_table ( order_cust_id, qty, sock_id, charity_id)
VALUES ('$order_cust_id','$qtyChosen1', 1,'$charity_id1')";

if (!mysqli_query($mysqli, $sql_insert))
  {
  	die(' Error: ' . mysqli_error($mysqli));
  }
}//end outer if 


if(!empty($_POST['quantity_2']) && !empty($_POST['charity_2']))
{
$charity_id2 = ($_POST['charity_2']);
$qtyChosen2 = ($_POST['quantity_2']);
echo $qtyChosen2."<br>";
$sql_insert = "INSERT INTO order_table (order_cust_id,qty,sock_id, charity_id)
VALUES ('$order_cust_id','$qtyChosen2',2,'$charity_id2' )";

if (!mysqli_query($mysqli, $sql_insert))
  {
  	die(' Error: ' . mysqli_error($mysqli));
  }
}//end outer if 


if(!empty($_POST['quantity_3']) && !empty($_POST['charity_3']))
{  
$charity_id3 = ($_POST['charity_3']);
$qtyChosen3 = ($_POST['quantity_3']);
echo $qtyChosen3."<br>";
$sql_insert = "INSERT INTO order_table (order_cust_id,qty,sock_id, charity_id)
VALUES ('$order_cust_id','$qtyChosen3',3 ,'$charity_id3')";

if (!mysqli_query($mysqli, $sql_insert))
  {
  	die(' Error: ' . mysqli_error($mysqli));
  }
}//end outer if 


if(!empty($_POST['quantity_4']) && !empty($_POST['charity_4']))
{  
$charity_id4 = ($_POST['charity_4']);
$qtyChosen4 = ($_POST['quantity_4']);
echo $qtyChosen4."<br>";
$sql_insert = "INSERT INTO order_table (order_cust_id,qty,sock_id, charity_id)
VALUES ('$order_cust_id','$qtyChosen4',4, '$charity_id4' )";

if (!mysqli_query($mysqli, $sql_insert))
  {
  	die(' Error: ' . mysqli_error($mysqli));
  }
}//end outer if 

//echo "1 record added";

mysqli_close($mysqli);
?>


 