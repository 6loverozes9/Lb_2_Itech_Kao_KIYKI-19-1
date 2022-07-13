<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <table class="table" >
        <tr>
            <th>VENDOR</th>
        </tr>

<?php
 include('connection.php');

 $cursor = $collection->distinct('vendor');

 $table_vend = '';
for($i = 0; $i< count($cursor); $i++)
{
    $table_vend .="<tr><th> $cursor[$i] </th></tr>";
}
echo $table_vend;
?>
</table>
    <?php
        $script="<script>localStorage.setItem('Vendor', '$table_vend')</script>";
        echo $script;
    ?>

</body>
</html>