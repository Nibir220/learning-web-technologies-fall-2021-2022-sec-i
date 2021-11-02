<?php
include('../model/db.php');
require_once('../model/usersModel.php');
$id=$_GET['id'];
$status = getUserById($id);

if(isset($_POST['submit'])){

    $data = array(
        'idd'=>$_POST["id"],
        'username'=>$_POST["username"],
        'password'=>$_POST["password"],
        'email'=>$_POST["email"]
    );
    editUser($data);
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
</head>

<body>
    <h2>Edit</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
        <label>Username:</label><input type="text" value="<?php echo $status['username']; ?>" name="username">
        <label>Password:</label><input type="text" value="<?php echo $status['password']; ?>" name="password">
        <label>Email: </label><input type="email" value="<?php echo $status['email']; ?>" name="email">
        <input type="hidden" name="id" id="" value="<?php echo $_GET['id']; ?> ">
        <input type="submit" name="submit">
        <a href="../views/userlist.php">Back</a>
    </form>
</body>

</html>