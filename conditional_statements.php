<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statement</title>
</head>
<body>
    <?php 
        // $price = 20;
        // if ($price < 10) {
        //     echo 'The condition is met'; 
        // } elseif($price < 30) {
        //     echo 'elseif the condition is met';
        // }  
        // else {
        //     echo 'The condition is not met';
        // }

        $products = [
            ['name' => 'shiny star', 'price' =>20],
            ['name' => 'green shell', 'price' =>10],
            ['name' => 'red shell', 'price' =>15],
            ['name' => 'gold coin', 'price' =>5],
            ['name' => 'lightning bolt', 'price' =>40],
            ['name' => 'banana skin', 'price' =>2],
        ];

        foreach($products as $product) {

            // if ($product['price'] < 15 && $product['price'] > 2 ) {
            //     echo $product['name'] . '<br>';
            // }

            // if ($product['price'] > 20 || $product['price'] < 10 ) {
            //     echo $product['name'] . '<br>';
            // }
        
        }
        // foreach($products as $product) { ?>
        //     <?php if ($product['name'] > 15) { ?>
        //         <li> <?php echo $product['name']; ?></li>                
        //     <?php }?>
        // ?>
    ?>


</body>
</html>