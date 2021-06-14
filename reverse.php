<html>
<head><title>Reverse</title></head>
<body style="background-color: black;color: yellow;">
<center>
    <form method="post">        
Enter a Number: <input type="text" name="num"/><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $num1 = $num;
        $rev_num = 0;
        $sum = 0;
        $rem = 0;
        while($num > 1)
        {
            $rem = $num % 10;
            $sum += $rem;
            $rev_num = $rev_num * 10 + $rem;
            $num = (int)$num / 10;
        }
        echo "The sum of the digits of $num1 is $sum <br>";
        echo "The Reverse of the digits of $num1 is $rev_num"; 
        echo "</br>";
        if($num1 == $rev_num){  
            echo "The number $num1 is Palindrome";     
        }else{  
            echo "The number $num1 is not a Palindrome";   
        }  
}     
      ?> 
</center>
</body>
</html>


