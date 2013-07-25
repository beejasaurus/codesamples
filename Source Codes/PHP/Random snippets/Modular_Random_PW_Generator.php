<?php
$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"; // Declare which letters to be included within password

$num = 10; // Set default length of password if user enters nothing

// Check for valid user input (field was filled out and is an integer) and set $num to user input
if (isset($_POST['num'])) {  
    if(is_numeric($_POST['num'])) {
        $num = $_POST['num'];
    }
}

// Shove each char in $letters variable into array to allow for array implosion and randomization
for ($i = 0 ; $i < strlen($letters) ; $i++)
{
    $all[] = substr($letters, $i, 1);
}

// Choose random letter up to $num
for ($i = 0 ; $i < $num ; $i++)
{
    $newpass[] = $all[rand(0,strlen($letters)-1)];
}
// Implode array of random letters
echo "Here is your randomly generated $num digit password: <br /><br />" . implode($newpass);
?>
<html>
    <body>
        <p>
            <form method="post" action="Modular_Random_PW_Generator.php">
                Enter length of desired password you wish to generate: <input type="text" name="num" />
                <input type="submit" value="Generate new password">
            </form>
        </p>
    </body>
</html>
