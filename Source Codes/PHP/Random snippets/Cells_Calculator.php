<?php // dailyprogrammer challenge 2 easy - calculate things

$assay = $volume = $df = $ncells = $cellconc = $density = $needed = $stock = $med = "";

if(isset($_POST['assay']) && is_numeric($_POST['assay']))
{
    $assay = $_POST['assay'];
    switch($assay)
    {
        case 65:
            $density = 5.3e4;
            break;
        case 67:
            $density = 3.3e4;
            break;
        case 77:
            $density = 8.0e4;
            break;
        default: echo "Unrecognized selection";
            break;
    }
}
else $assay = "Please enter a valid assay number";

if (isset($_POST['volume']) && is_numeric($_POST['volume']))
{
    $volume = $_POST['volume'];
    if ($density != NULL) $needed = $volume * $density;
    else $needed = "__";
}
else $volume = "Please enter a valid volume";

if (isset($_POST['df']) && is_numeric($_POST['df'])) $df = $_POST['df'];
else $df = "Please enter a valid dilution factor";

if (isset($_POST['ncells']) && is_numeric($_POST['ncells']))
{
    $ncells = $_POST['ncells'];
    if($df != NULL)
    {
        $cellconc = $df * $ncells * 10*10*10;
        if($needed != NULL)
        {
            $stock = $needed / $cellconc;
            $med = $volume - $stock;
        }
        else
        {
            $stock = "__";
            $med = "__";
        }
    }
    else $cellconc = "__";
}
else $ncells = "Please enter a valid number of cells";

echo <<<_CALC
Assay Number: $assay<br />
Volume of Seeding Solution to Prepare: $volume<br />
Dilution Factor: $df<br />
Live Cell Count: $ncells<br />
Stock Cell Concentration: $cellconc<br />
Target Seeding Density: $density<br />
Cells Needed: $needed<br />
Volume Cell Stock Needed: $stock<br />
Medium to Add: $med<br /><br />
_CALC;

?>

<html>
    <body>
        <form method='post' action='2e.php'>
            Assay Number: <input type='text' name='assay' /><br />
            Volume Needed: <input type='text' name='volume' /><br />
            Dilution Factor: <input type='text' name='df' /><br />
            Number of Live Cells: <input type='text' name='ncells' /><br />
            <input type="submit" />
        </form>
    </body>
</html>