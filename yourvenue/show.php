
<?php
session_start();

$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'yourvenue');


$eventtype = $_POST["evnt"];
$location = $_POST["loc"];


if (isset($_POST['search'])) {
   
    
    $q = "SELECT * from halls h join locations l on h.LOCATIONSL_ID=l.L_ID where EV_type='$eventtype' && L_NAME = '$location'";
   
    $result=mysqli_query($con,$q);
    
    
    
}

?>

<html>
    <head>
    <link rel="stylesheet" href="show.css" type="text/css">
</head>
<body>
<?php
    while($rows=mysqli_fetch_assoc($result)){
?>
        <table>
    <td><?php echo "<a href='http://localhost:81/yourvenue/details.php' >".$rows['H_NAME']."</a>";
        echo "<br>";
        echo "<br>";
        $_SESSION['selected'] = $rows['H_NAME'];
        $_SESSION['hid'] = $rows['H_ID'];
        ?></td>
    </table>
    <?php
      
    
}

        ?>
</body>

</html>