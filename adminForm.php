<!DOCTYPE HTML>
<?--This is the first round of coding for Admin form.-->
<?--Olin Saint-Louis , Agnieszka Mandosik-->

<html>
<head>
  <title>AdminForm</title>
  <link rel="stylesheet" href="adminFormCSSstyle.css" type="text/css" charset="utf-8">
</head>
<body>
 <div id="container">
    <h1>Admin Form</h1> 
		<form action="buttonSelection.php" method="post">
<div class="btn-group" style = "width: 100%">
	<br /> <br /> 
  	<button style="width:20%" type="submit" name="0" class = "zero">Total  Sold</button>
    <button style="width:20%" type="submit" name="1" class = "one">Sold to Charity</button>
    <button style="width:20%" type="submit" name="2" class = "two">Large Socks Sold </button>
    <button style="width:20%" type="submit" name="3" class = "three">Socks to  be Delivered</button>
    <button style="width:20%" type="submit" name="4" class = "four">Search by email</button><br /> <br /> 
    <br /> <br /> <br /> <br /> 
	<button style="width:20%" type="submit" name="5" class = "five">Add New Charity</button>
    <button style="width:20%" type="submit" name="6" class = "six" >Export</button>
    <button style="width:20%" type="submit" name="7" class = "seven">Decript Credit Card</button>
    <button style="width:20%" type="submit" name="8" class = "eight" >Add New Adminstrator</button>
    <button style="width:20%" type="submit" name="9" class = "nine" >Delete User by email</button>
	<br /> <br /> <br /> <br /> 
	<?--input type="text" name= "input" value= "" size=159-->

</div>
</div>
	</form>

</body>
</html>