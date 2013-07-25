<?php
// Program is a Caesar Cipher. It shifts the alphabet the number input as cipher.

// Get user input variables -
// Cipher is number to offset by - set to $num
// encrypt is "Encode this" string - set to $strtocode
// decrypt is "Decode this" - set to $codetostring
if (isset($_POST['cipher'])) $num = $_POST['cipher'];
else $num = 0;

if (isset($_POST['encrypt']))
{
    $strtocode = $_POST['encrypt'];
    $strtocode = sanitizeString($strtocode);
}
else
{
    $strtocode = NULL;
    echo ("Nothing entered to encrypt <br />");
}

if (isset($_POST['decrypt']))
{
    $codetostr = $_POST['decrypt'];
    $codetostr = sanitizeString($codetostr);
    

}
else {
    $codetostr = NULL;
    echo ("Nothing entered to decrypt <br />");
}

// Pass user variables and cipher number to encoding or decoding functions if user actually put anything in
if($strtocode != NULL) strtoCode($strtocode, $num);
if($codetostr != NULL) codetoStr($codetostr, $num);

function breakStr($var) // Key for encoding function, intended input for $var is the string to encode
{
    $cipher = array(
    'a' => '1',
    'b' => '2',
    'c' => '3',
    'd' => '4',
    'e' => '5',
    'f' => '6',
    'g' => '7',
    'h' => '8',
    'i' => '9',
    'j' => '10',
    'k' => '11',
    'l' => '12',
    'm' => '13',
    'n' => '14',
    'o' => '15',
    'p' => '16',
    'q' => '17',
    'r' => '18',
    's' => '19',
    't' => '20',
    'u' => '21',
    'v' => '22',
    'w' => '23',
    'x' => '24',
    'y' => '25',
    'z' => '26',
    ' ' => '27',
    '0' => '28',
    '1' => '29',
    '2' => '30',
    '3' => '31',
    '4' => '32',
    '5' => '33',
    '6' => '34',
    '7' => '35',
    '8' => '36',
    '9' => '37');
    
    // break apart string into array character by character
    for ($i = 0, $j = strlen($var); $i < $j ; $i++){ 
        $character[] = substr($var, $i, 1);
    }
    
    // pass each character through the key to get a numeric value
    foreach ($character as $item){
        $letters[] = $cipher[$item];
    }
    
    return $letters; 
}

function decode($var) // Reverse key function
{
    $revcipher = array(
    '1' => 'a',
    '2' => 'b',
    '3' => 'c',
    '4' => 'd',
    '5' => 'e',
    '6' => 'f',
    '7' => 'g',
    '8' => 'h',
    '9' => 'i',
    '10' => 'j',
    '11' => 'k',
    '12' => 'l',
    '13' => 'm',
    '14' => 'n',
    '15' => 'o',
    '16' => 'p',
    '17' => 'q',
    '18' => 'r',
    '19' => 's',
    '20' => 't',
    '21' => 'u',
    '22' => 'v',
    '23' => 'w',
    '24' => 'x',
    '25' => 'y',
    '26' => 'z',
    '27' => ' ',
    '28' => '0',
    '29' => '1',
    '30' => '2',
    '31' => '3',
    '32' => '4',
    '33' => '5',
    '34' => '6',
    '35' => '7',
    '36' => '8',
    '37' => '9');
    
    // Passes string through the key to translate to the alphanumeric character
    foreach($var as $item){
        $codedletters[] = $revcipher[$item];
    }
    
    // Implode string into readable format
    $final = implode('',$codedletters);
    return $final;
}

function strtoCode($var, $num) // Function for encoding
{
    $letters = breakStr($var); // Convert string into array, convert array into numbers via key, return number array to var letters
    foreach($letters as $item){ // Uses cipher to determine how many alphanumeric characters to shift by. 
        if ($item + $num > 27) { // Resets cipher to beginning if number goes over number of available characters (like Z + 1 goes back to A)
            $foo = $item + $num - 27; 
            
            $moddedletters[] = $foo; 
            
        }
        else $moddedletters[] = $item + $num; // Modifies if addition is within bounds
    }
    echo (decode($moddedletters)); // Use decode to convert integer array into strings and implode it
}

function codetoStr($var, $num) // Function for decoding
{
    $letters = breakStr($var);
    foreach($letters as $item){
        if ($item - $num < 1) {
            $foo = 27 + ($item - $num); // Subtract cipher  and passthrough breakStr
            
            $moddedletters[] = $foo;
            
        }
        else $moddedletters[] = $item - $num;
    }
    echo (decode($moddedletters));
}
function sanitizeString($var) //function to clean user input for strings
{
    $var    = strip_tags($var);
    $var    = htmlentities($var);
    $var    = stripslashes($var);
    $var    = strtolower($var);
    return mysql_real_escape_string($var);
}

?>
<html>
    <body>
        <div><br />
            Instructions: If you wish encode a phrase, type your string into "Encode this" field and enter a cipher number. Cipher number must be an integer of your choosing. <br />
            If you wish to decode a phrase, paste the coded string you have and the specific sipher. <br />
            NOTE: Alphanumeric characters and spaces only. Do not use punctuation <br />
            NOTE: Positive integers only
        </div>
        <pre><form method="post" action="Modular_Caesar_Cipher.php">
Encode this: <input type="text" name="encrypt" /><br />
Decode this: <input type="text" name="decrypt" /><br />
     Cipher: <input type="text" name="cipher" /><br />
     <input type='submit' />
        </form></pre>
    </body>
</html>