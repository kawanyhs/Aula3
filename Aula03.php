<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid purple;
        }
    </style>
</head>
<body>
<?php
echo "<h1>Contando PHP</h1>";
for($x=1; $x<=10; $x++){
    echo "$x <br>";
};


echo "<h1>Tabela de 1 a 10 em PHP</h1>";

echo "<table><tr>";
for ($x=1; $x<=10; $x++){
    echo "<td>$x</td>";

}
echo "<tr></table>";
 
    ?>

</body>
</html>