
<?php
session_start();

$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'yourvenue');

if (isset($_POST['search'])) {
    $vendortype = $_POST["vendor"];
    $q = "SELECT * from vendors where V_TYPE='$vendortype'";
    $result1=mysqli_query($con,$q);
}


?>

<html>
    <head>
</head>
<body>
<?php
    while($rows=mysqli_fetch_assoc($result1)){
?>
        <table>
    <td><?php echo "<a href='http://localhost:81/yourvenue/vendordetails.php' >".$rows['V_NAME']."</a>";
        echo "<br>";
        echo "<br>";
        $_SESSION['selected'] = $rows['V_NAME'];
        
       
        ?></td>
    </table>
    <?php
      
    
}

        ?>
</body>

</html>