<?php
include('connect.php');
?>

<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>

    <table border="1px">
		<thead>
			<tr>
				<th>ID</th>
				<th>USERNAME</th>
				<th>E-MAIL</th>
				<th>GENDER</th>
                <th>CITY</th>
				<th>EDIT</th>
				<th>DELETE</th>
			</tr>
		</thead>
		<tbody>
			
            <?php
			while($row = $result->fetch_assoc()){?>
			<tr>
                <td><?php echo $row['id']?></td>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['gender']?></td>
				<td><?php echo $row['city']?></td>
				<td><a href="edit.php?id=<?php echo $row['id']?>">
				<input type="button" value="Edit"></a></td>
				<td><a href="delete.php?id=<?php echo $row['id']?>">
				<input type="button" value="Delete"></a></td>
            </tr>
           <?php } ?>
		</tbody>
	</table>
<?php    }
?>
<html>
    <head>
        <title>Details</title>
    </head>
<body>

</body>
</html>