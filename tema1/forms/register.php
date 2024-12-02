<html>
<head>
    <title>First form example with PHP server code</title>
</head>
<body>
    Welcome <?php echo $_GET["fname"] . " " . $_GET["lname"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?>
</body>
</html>