
<html> 
<head>
<title>FORM</title>
</head> 
<body>  
<form method="POST" action="Form1.php">  
Num1: <input type="number" name="num1" placeholder="Enter first number" required><br><br>  
Num2: <input type="number" name="num2" placeholder="Enter second number" required><br><br>  
<input  type="submit" name="submit" value="Add">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['num1'];  
        $number2 = $_POST['num2'];  
        $sum =  $number1+$number2;     
echo "The sum of $number1 and $number2 is: ".$sum;   
}  
else
{
    echo "please enter values";
}
?>  
</body>  
</html>  