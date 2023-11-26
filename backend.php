<?php
$conn = mysqli_connect("localhost","root","","library_data");
if(!$conn) 
{
    echo mysqli_connect_error();     //connection data base in html(1 to 7)
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
</head>
<body>
    <h1>Welcome to the Library Management System</h1>
	<div class="from">
    <form method="POST">
        <!-- ... (other form fields) -->
		<div class="input_field">
        <label for="title">Name:</label>
        <input type="text" name="title" placeholder="ENTER new data" required><br><br>
		</div>
        <label for="author">Author:</label>
        <input type="text" name="author" required><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required><br><br>
        <a href=""><input type="submit" id="button" name="submit"></a>
		
    </form>
	<?php
		if (isset($_POST["submit"])) {
			$title= $_POST["title"];     			//
			$author= $_POST["author"];
			$quantity= $_POST["quantity"];
			$insert= "insert into book values('','$title','$author','$quantity')";
			
			if(mysqli_query($conn,$insert)){
				$message= "value inserted";
				
				echo "<script>alert('$message');window.location.href='backend.php';</script>";

			}
			else {
				$message= "value not inserted";
				
				echo "<script>alert('$message');window.location.href='backend.php';</script>";
			}
		}
	?>
	</div>
    <a href="project.php">Display Books</a>

</body>
</html>