
<?php
session_start();

$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'yourvenue');
$c = $_SESSION['selected'];

$q = "SELECT * from halls where H_NAME = '$c'";
   
$result=mysqli_query($con,$q);
    
    

?>

<html>
    <head>
    <link rel="stylesheet" href="details.css" type="text/css">
    <style>
          #table1{
    width: 100%;
    margin-bottom: 20px;
  }
  
  #table1 th, #table1, #table1 td{
    border: 2px solid blue;
    border-collapse: collapse;
  }
  
  td img{
    width:80px;
    height:80px;
  }
  td{
    text-align: center;
  }

</style>
</head>
<body>
<table bgcolor=" #99bbff
" id="table1">
<thead>
				<tr>
					<th>Name</th>
					<th>Capacity</th>
					<th>Price</th>
				
				</tr>
			</thead>
		
			<tbody>
			<?php
			///$table is a two dimensional array, first loop will return each row of the table
            while($rows=mysqli_fetch_assoc($result)){
				?>
				
				<tr>
					<td><?php echo $rows['H_NAME'] ?></td>
					<td><?php echo $rows['CAPACITY'] ?></td>
					<td><?php echo $rows['H_PRICE'] ?></td>
				</tr>
				
				<?php
			}
				
			?>
			</tbody>
		</table>

        ?>
        <button type="button" onclick="req()">Send Booking Request </button>
</body>
<script>
  function req(){
    location.assign('booking.php');
  }

</script>

</html>