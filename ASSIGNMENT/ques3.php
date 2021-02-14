<?php
include('connect.php');
?>

<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `users` (`id`,`username`, `email`, `gender`, `city`) VALUES ('$id', '$username', '$email', '$gender', '$city')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click on submit button";
}
?>

<html>
    <head>
        <title>Form</title>
    </head>
<body>
<form method="POST" action="ques3.php">
    ID: <input type="text" name="id" placeholder="Type Your ID" required><br>

    USERNAME: <input type="text" name="username" placeholder="Type Your Username" required><br>

    E-MAIL: <input type="email" name="email" placeholder="Type Your E-mail" required><br>

    GENDER: <br><input type="radio" name="gender" value="male" required>
           <label for="male">Male</label><br>
           <input type="radio" name="gender" value="female" required>
           <label for="female">Female</label><br>

    Select City: <select name="city">
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Nanital">Nanital</option>
        <option value="Mussoorie">Mussoorie</option>
        <option value="Lucknow">Lucknow</option>
    </select><br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>