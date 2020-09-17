<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $numberList1 = array(); // old way
    $numberList = [23, 64, 267, 478, 267, 8765,345, '5345', 345, '<h1>Hello</h1>']; //new way
    
    // echo $numberList[9];

    print_r($numberList);
    ?>



</body>
</html>