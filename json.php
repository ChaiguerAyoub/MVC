<?php
function parseCSV($filename, $delimetre)
{
    $csvfile = fopen($filename, 'r');
    $alldata = array();

    while ($data = fgetcsv($csvfile, 0, $delimetre)) {
        $alldata[] = $data;
    }
    return $alldata;
}

$CSV = parseCSV("../MVC/data.csv", ",");


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Json displaying</title>


    <script type="text/javascript">
        var phpArray = <?php echo json_encode($CSV);  ?>;
        var line;

        var myTable = '<table border="1">';

        for (i = 0; i < phpArray.length; i++) {
            myTable += "<tr>";

            for (j = 0; j < phpArray[i].length; j++) {
                myTable += "<td>" + phpArray[i][j] + "</td>";
            }
            myTable += "</tr>";
        }
        myTable += "</table>";

        document.write(myTable);

        /*
        creating the table as a node
        var table = document.createElement("table");
        var tr = document.createElement("tr");
        var td = document.createElement("td");

            tr.appendChild(td);
            td.appendChild(table);
*/

    </script>

</head>
<body>


</body>
</html>