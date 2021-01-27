<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <style>
            table,td,th {
                margin: 20px;
                padding: 20px;
                border-collapse: collapse;
                border: 1px solid blue;
            }
    </style>
</head>
<body>

<form method="POST" action="form1.php">
    Name <input type="text" name="username" placeholder="Type Your Name" required><br>
    E-mail <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    Contact Number<input type="number" name="contact" placeholder="Type Contact Number" required><br> 
    City<input type="text" name="city" placeholder="Type Your city" required><br>
    Course<input type="text" name="course" placeholder="Type Your course name" required><br>
    Interests<br>
    Programming <input type="checkbox" name="int1" value="Programming">
    Sports<input type="checkbox" name="int1" value="Sports">
    Reading<input type="checkbox" name="int1" value="Reading">
    Games<input type="checkbox" name="int1" value="Games"><br>
    <input type="submit" value="Click Here To Submit Your Data" name="submit">
</form>
</body>
</html>

<?php
        if (isset($_POST['submit'])) 
        { ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th><th>Email</th><th>Contact</th><th>City</th><th>Course</th><th>Interest</th>
                </tr>
            </thead>
        
            <tbody>
                <tr>
                <td><?php echo $_POST['username']?></td>
                <td><?php echo $_POST['email']?></td>
                <td><?php echo $_POST['contact']?></td>
                <td><?php echo $_POST['city']?></td>
                <td><?php echo $_POST['course']?></td>
                <td><?php echo $_POST['int1'] ?></td>
                </tr>
            </tbody>
        </table>
        <?php } ?>

        

    