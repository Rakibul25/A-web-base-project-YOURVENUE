<html>
    <body>
    <ul>
<li onclick="location.href = 'http://stackoverflow.com/questions/3486110/make-a-list-item-clickable-html-css';">Make A List Item Clickable</li>
</ul>
    </body>

</html>
<table id="table1">

			<thead>
				<tr>
					<th>Result</th>
					
				</tr>
			</thead>
		
			<tbody>
            <?php
                while($rows=mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td><?php echo $rows['H_NAME']?></td>

            <?php
            }
            ?>