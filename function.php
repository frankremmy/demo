<?php 

    // functions
    function sayHello($name = 'shaun'){
        echo "Good morning $name";
    }
    // sayHello('Mario');

    function formatProduct($product) {
        // echo "{$product['name']} costs £{$product['price']} to buy <br>";
        return "{$product['name']} costs £{$product['price']} to buy <br>";
    }
    // formatProduct(['name'=>'gold star', 'price'=>'20']);
    $formatted = formatProduct(['name'=>'gold star', 'price'=>'20']);
    echo $formatted;

?>