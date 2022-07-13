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
            <th>NAME</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>VENDOR</th>
            <th>CATEGORY</th>
            <th>CONDITION</th>
            <th>FEEDBACK</th>
        </tr>

<?php
 include('connection.php');
$start_price= $_GET["start_price"];
$end_price = $_GET["end_price"];

$cursor = $collection->find(
    ['$and' => 
    [
        [
            'price'=>
    
            [
                '$gte' => 
    
                intval($start_price)]], 
    
                [
                    'price'=>['$lte' => 
    
                    intval($end_price)
                    
                    ]]]]);


$table_price = " ";
foreach($cursor as $document){
    $name = $document['name'];
    $price = $document['price'];
    $quantity = $document['quantity'];

    if($document['vendor'] ?? null ){
        $vendor = $document['vendor'];
    }
    else{
        $vendor = "not set";
    }

    if($document['category'] ?? null ){
        $category = $document['category'];
    }
    else{
        $category = "not set";
    }

    if($document['feed_back'] ?? null ){
        $feed_back = $document['feed_back'];
    }
    else{
        $feed_back = "not set";
    }
    
    if($document['condition'] ?? null ){
        $condition = $document['condition'];
    }
    else{
        $condition = "not set";
    }

    $table_price .= "<tr><th>$name</th><th>$price</th><th>$quantity</th><th>$vendor</th><th>$category</th><th>$condition</th><th>$feed_back</th></tr>";
}
echo $table_price;

?>
</table>
<?php
        $script="<script>localStorage.setItem('Range_last', '$table_price')</script>";
        echo $script;
?>
</body>
</html>
