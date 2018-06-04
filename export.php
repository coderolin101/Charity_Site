
<?php
$connect = mysqli_connect("localhost", "root", "", "esufundraiser");  
 $query ="SELECT sock_descr, sum(qty) as sum FROM `order_table` join item_table on item_table.sock_id = order_table.sock_id group by sock_descr";  
 $result = mysqli_query($connect, $query);  
 ?>  
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
           <div class="container" style="width:900px;">  
                <h2 align="center">Exporting Mysql Table Data to XML file in PHP</h2>              
				<form align="center" method="post" action="export.php" >  
                     <input type="submit" name="export" value="XML Export" class="btn btn-success" />  
                </form>  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
					 <tr> <th>	</th> <th>	</th> <th>	</th></tr>
                          <tr>  
                               <th width="5%">Name</th>  
                               <th width="35%">Quantity</th>  
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["sock_descr"]; ?></td>  
                               <td><?php echo $row["sum"]; ?></td>   
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div> 
  				

           </div> 
<?php		   
     //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "esufundraiser");  
      header('Content-Type: text/XML; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.XML');  
      $output = fopen("php://output", "w");  
      fputXML($output, array('ID', 'Name'));  
      $query = "SELECT sock_descr, sum(qty) as sum FROM `order_table` join item_table on item_table.sock_id = order_table.sock_id group by sock_descr ";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputXML($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  
</body>
</html>