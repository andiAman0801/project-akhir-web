<?php 
// check for admin access cookie
if (!isset($_COOKIE['staff_access'])) {
    header("Location: login.php"); // redirect to login page
    exit();
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halo
    </h1>
</body>
</html>