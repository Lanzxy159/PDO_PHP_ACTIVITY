<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	
	<?php 

    $query = "SELECT * FROM users"  ;
    $stmt = $pdo->prepare($query);

    $executeQuery = $stmt->execute();

    // Fetch  and pre tag
    if ($executeQuery){
        $allUsers = $stmt->fetchAll();
    }
    else
    {
        echo "query failed";
    }

	?>



<table>
		<tr>
			<th>User ID</th>
			<th>Username </th>
			<th>Contact Info</th>
			<th>Balance</th>
		</tr>
		<?php foreach ($allUsers as $row) { ?>
		<tr>
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['user_name']; ?></td>
			<td><?php echo $row['contact_info']; ?></td>
			<td><?php echo $row['balance']; ?></td>
		</tr>
		<?php } ?>
</table> 

</body>
</html>