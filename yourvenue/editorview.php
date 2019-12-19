
<?php
session_start();

$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'yourvenue');
$editorhallsid = $_SESSION['editorhall'];

$q = "SELECT * from request r join user u on u.U_ID=r.user_id WHERE r.HALLSH_ID = '$editorhallsid'";
   
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
					<th>Date</th>
					<th>User</th>
					<th>Request ID</th>
                    <th>phone Number</th>
				
				</tr>
			</thead>
		
			<tbody>
			<?php
			///$table is a two dimensional array, first loop will return each row of the table
            while($rows=mysqli_fetch_assoc($result)){
				?>
				
				<tr>
					<td><?php echo $rows['REQ_DATETIME'] ?></td>
					<td><?php echo $rows['user_id'] ?></td>
					<td><?php echo $rows['REQ_ID'] ?></td>
                    <td><?php echo $rows['U_CONTACT'] ?></td>
				</tr>
				
				<?php
			}
				
			?>
			</tbody>
		</table>

        ?>
        <button type="button" onclick="logout()">Log Out </button>
</body>
<script>
  function logout(){
    location.assign('logouteditor.php');
  }

</script>

</html>