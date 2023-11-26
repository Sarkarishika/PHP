<?php
$conn = mysqli_connect("localhost","root","","library_data");
if(!$conn) 
{
    echo mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Display Books</title>
</head>
<body  align="center">
    <h1>Books in the Library</h1><br>
    <table border="3" align="center" width="30%">
        <tr>
            <th>sl_no</th>

            <th>Title</th>
            <th>Author</th>
            <th>Quantity</th>
        </tr>
		<?php
		$query = "select * from book";
        $res = mysqli_query($conn, $query);
        $c = 1;
        while ($row = mysqli_fetch_assoc($res)) {

		?>
            <tr>
			<td><?php echo $c; ?></td>

                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
            </tr>
			<?php
                                                        $c++;
                                                    }
             ?>
    </table><br>
    <a href="backend.php">Go back to home</a>


    
</body>
</html>