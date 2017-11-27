<?php

require "config.php";

//require "Library/Bootstrap.php";
//require "library/Database.php";
//require "library/Controller.php";
//require "library/View.php";
//require "library/Model.php";


function __autoload($class){
	require "library/".$class.".php";
}

//$app = new Autoload();

function parseCSV($filename, $delimetre)
{
    $csvfile = fopen($filename, 'r');
    $alldata = array();

    while ($data = fgetcsv($csvfile, 0, $delimetre)) {
        $alldata[] = $data;
    }
    return $alldata;
}

$CSV = parseCSV("data.csv", ",");

?>
<table border="1">
    <?php foreach ($CSV as $line): ?>
        <tr>
            <?php foreach ($line as $data): ?>
                <td><?php echo $data ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

