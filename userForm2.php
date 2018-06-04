<!DOCTYPE html>
<!--User form more coding needed. Graphical draft.-->
<html>

<?php
$mysqli = new mysqli("localhost", "root", "", "esufundraiser");
?>


<head>
  <title>UserForm</title>
  <link rel="stylesheet" href="userFormCSSstyle.css" type="text/css" charset="utf-8">
  <!--bootstrap-->
  <!--<<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
</head>
<div class="inner">
<div id="wrap">

<header id="header">
<div class="grid_5"><a id="headerLogo" href="//www.esu.edu"><img alt="ESU Logo" src="https://www.esu.edu//images/esu-header.png"></a></div>
</header>
	</div>
</div>

<!--Top added banner here-->
<div class="navbar">  
      <a href="#">About</a>
      <a href="#">Academics</a>
      <a href="#">Admissions</a>
      <a href="#">Student Life</a>
      <a href="#">Faculty &amp; Staff</a>
      <a href="#">Athletics</a>
      <a href="#">Alumni</a>
      <a href="#">Search</a>
      </div>

<body>
<!--This is the main content of customer page-->
<section>
<div class=container1>
  <div class=container2>
  <h1>ESU Join the Flock</h1>
  <p class="a">Social Entrepreneurial Campaign</p>
  </div>
  <div class=container3>
  <!--Labels for name credit card and csv aligned with the text boxes-->
  <!--FORM START HERE-->
  <form method="post" action="insert2.php">
    <input type = "hidden" name = "submiteed" value = "true"/>
  <table style="width:100%">
  <tr>
    <td><div style="width: 120px; font: bold 14px serif">Name</div></td>
    <td><div style="width: 150px;">Credit Card Numbers</div></td> 
    <td><div style="width: 150px;">CSV</div></td>
  </tr>
  </table>
    <input type="text1" id="fname" name="firstname">
    <input type="text2" id="lname" name="lastname">
    <input type="text6" style="width: 375px;" id="front" name="card_front">
    <input type="text4" id="back" name="card_back"><br>
	<!--Gray labels aligned under text boxes-->
	<table style="width:25%">
  <tr>
    <td><sup>First</sup></td>
    <td><sup>Last</sup></td> 
  </tr>
  </table>
	<!--Labels for email and password aligned with text boxes-->
    <table style="width:100%">
  <tr>
	<td><div style="width: 120px; font: bold 14px serif">Email<sup class="star">*</sup></div></td>
    <td><div style="width: 150px;">Password</div></td> 
	</tr>
	</table>
    <input type="text5" id="email" name="email_address">
    <input type="text6" style="width: 200px;" id="password" name="pass_word_pass"><br><br>
	<!--Label for phone-->
    <div class="navbar">
    <a6 for="phone" href="#">Phone Number (optional)</a6>
    </div>
    <input type="text6" style="width: 200px;" id="phone1" name="phone_phone">
    <p id="textC">Choose the color(s) and size(s) of the pair of sock(s) you would like, a matching pair(s) will be donated to the charity of your choice. Please make checks payavle to ESU and write Sock Donation in the check memo.</p>

    <div class=container4>
      <table>
        <tr>
          <td class="descr" name = "medium1ESU">ESU Colors - Medium - Men (6-8) Women (6-9) Donation $20</td>
          <td class="q">Qty</td>
          <td><select name = "quantity_1" class ="choose">
                <option value="">Choose</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>

          <td class="ch">Charity</td>
          <td><select name = "charity_1" class ="choose">
                <option value="" >Choose</option>
                <option value="1">Charity1</option>
                <option value="2">Charity2</option>
                <option value="3">Charity3</option>
                <option value="4">Charity4</option>
                <option value="5">Charity5</option>
				<option value="6"><?php
				$query = "SELECT charity_name from charity_table"; 
				$result = mysqli_query($mysqli, $query);
				$num_rows = mysqli_num_rows($result);	
				$counter=0;
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			if (++$counter == $num_rows) {
				echo $row['charity_name'];//email 
			}
				}?></option>
              </select></td>
        </tr>
        <tr>
          <td class="descr" name = "large1ESU">ESU Colors - Large - Men (9-13) Donation $20</td>
          <td class="q">Qty</td>
          <td><select name = "quantity_2" class ="choose">
                <option value="">Choose</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
              </select></td>
          <td class="ch">Charity</td>
          <td><select name = "charity_2" class ="choose">
                <option value="">Choose</option>
                <option value="1">Charity1</option>
                <option value="2">Charity2</option>
                <option value="3">Charity3</option>
                <option value="4">Charity4</option>
                <option value="5">Charity5</option>
				<option value="6"><?php
				$query = "SELECT charity_name from charity_table"; 
				$result = mysqli_query($mysqli, $query);
				$num_rows = mysqli_num_rows($result);	
				$counter=0;
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				if (++$counter == $num_rows) {
                echo $row['charity_name'];//email 
				}
				}?></option>
              </select></td>
        </tr>
        <tr>
          <td class="descr" name = "medium2Neon">Neon Colors - Medium - Men (6-8) Women (6-9) Donation $20</td>
          <td class="q">Qty</td>
          <td><select name = "quantity_3" class ="choose">
                <option value="">Choose</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
              </select></td>
          <td class="ch">Charity</td>
          <td><select name = "charity_3" class ="choose">
                <option value="">Choose</option>
                <option value="1">Charity1</option>
                <option value="2">Charity2</option>
                <option value="3">Charity3</option>
                <option value="4">Charity4</option>
                <option value="5">Charity5</option>
				<option value="6"><?php
				$query = "SELECT charity_name from charity_table"; 
				$result = mysqli_query($mysqli, $query);
				$num_rows = mysqli_num_rows($result);
				$counter=0;				
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				if (++$counter == $num_rows) {
                echo $row['charity_name'];//email
				}				
				}?></option>
              </select></td>
        </tr>
        <tr>
          <td class="descr" name = "large2Neon">Neon Colors - Large - Men (9-13) Donation $20</td>
          <td class="q">Qty</td>
          <td><select name = "quantity_4" class ="choose">
                <option value="">Choose</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
              </select></td>
          <td class="ch">Charity</td>
          <td><select name = "charity_4"class ="choose">
                <option value="">Choose</option>
                <option value="1">Charity1</option>
                <option value="2">Charity2</option>
                <option value="3">Charity3</option>
                <option value="4">Charity4</option>
                <option value="5">Charity5</option>
				<option value="6"><?php
				$query = "SELECT charity_name from charity_table"; 
				$result = mysqli_query($mysqli, $query);
				$num_rows = mysqli_num_rows($result);	
				$counter=0;
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				if (++$counter == $num_rows) {
                echo $row['charity_name'];//email 
				}
				}?></option>
              </select></td>
        </tr>
      </table>
    </div>

    <div class=container5>      
      <fieldset id ="field1">
       <legend id = "pidel">Pickup or Delivery</legend>
       <p>           
          <input type = "radio" name = "radio1" id = "pickup" checked="" />
          <label for = "rad1">I want to pickup my socks. Socks are available for Pickup from the C.R.E.A.T.E Lab (Stroud Hall, Room 107) Tuesdays and Wednesdays 1-4pm.</label><br>
          <input type = "radio" name = "radio1" id = "delivery" />
          <label for = "rad2">I want my socks delivered. Delivery available on campus only. Delivery day Tuesdays between 1-4pm.</label>          
        </p>       
      </fieldset>
    </div>

    <div class="container6">
      <fieldset id ="field1">
       <legend id = "optional1">Deliver My Socks to (Optional)</legend>
       <p>           
          <select id="building" name="building_select">
            <option value="">Building Name</option>
            <option value="1">Building1</option>
            <option value="2">Building2</option>
            <option value="3">Building3</option>
            <option value="4">Building4</option>
            <option value="5">Building5</option>            
          </select>

          <select id="room" name="room_select">
            <option value="">Room #</option>
            <option value="1">Room1</option>
            <option value="2">Room2</option>
            <option value="3">Room3</option>
            <option value="4">Room4</option>
            <option value="5">Room5</option>
          </select>                   
        </p>       
      </fieldset>
  </div>

  <hr>
  
  <p>For large orders <br>
    Please contact the C.R.E.A.T.E Lab at esucreatelab@gmail.com
  </p>

   <button type="submit" value=" " name = "sub" class = "zero">Submit</button>
    </form>
</div>
  
</div> 
</section>
</body>
</html>