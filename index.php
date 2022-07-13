<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<h2>Лабораторна робота №2, КІУКІ-19-1, Туан Као Ань, Варіант №5 </h2>

<script>
    function vendor_last()
    {
  
     document.getElementById("quant_price_thead").innerHTML="<tr><th>Manufactor</th></tr>";
     document.getElementById("quant_price").innerHTML=localStorage.getItem('vend');
        
    } 
    function quantity_zero_last()
    {
        document.getElementById("quant_price_thead").innerHTML= "<tr><th>NAME</th><th>PRICE</th><th>QUANTITY</th><th>VENDOR</th><th>CATEGORY</th><th>CONDITION</th><th>FEEDBACK</th></tr>"
  
        document.getElementById("quant_price").innerHTML=localStorage.getItem('zero_last');
        
    } 
    function range_last()
    {
        document.getElementById("quant_price_thead").innerHTML= "<tr><th>name</th><th>PRICE</th><th>QUANTITY</th><th>VENDOR</th><th>CATEGORY</th><th>CONDITION</th><th>FEEDBACK</th></tr>"
  
        document.getElementById("quant_price").innerHTML=localStorage.getItem('Range_last');
        
    } 
</script>

<body>
<div class="wrapper">

       <div class="vendor">
            <h4>Manufacturers(cooperate):</h4>
            <form action="vendor.php" method="get">
                <input class="submit" type="submit" value="Accept"> 
            </form>
        </div>
        <div class="quantity_zero">
            <h4>Items out of stock:</h4>
            <form action="quantity_zero.php" method="get">
                <input class="submit" type="submit" value="Accept"> 
            </form>
        </div>

        <div class="range">
            <h4>Enter price range: </h4>
            <form action="price.php" method="get">
            <input name="start_price" value="0">
            <input name="end_price" value="0"> 
                <br>
                <input class="submit" type="submit" value="Accept"> 
            </form>
        </div>
</div>

<div class="wrapper2">
        <div class="vendor_last">
        <h4>Manufacturers(cooperate) last: </h4>
        <input class="submit" type="submit" value="Accept" onclick="vendor_last()"> 
        </div>

        <div class="quantity_zero_last">
            <h4>Items out of stock(last):</h4>
            <input class="submit" type="submit" value="Accept" onclick="quantity_zero_last()"> 
        </div>

        <div class="range_last">
            <h4>Price range(last): </h4>
            <input class="submit" type="submit" value="Accept" onclick="range_last()"> 
        </div>

</div>

<h5> </h5>


<table class="table" >
        <thead id = "quant_price_thead">
        </thead>
        <tbody id = "quant_price">
        </tbody>
    </table>



        
</body>
</html>