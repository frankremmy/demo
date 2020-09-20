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
        // IF statement
        // $number = 4;
        // if ($number < 10) {
        //     echo "Yes it is";
        // }
        // if ($number < 20) {
        //     echo "Yes it is" . '<br>';
        // }
        // if ($number < 20) {
        //     echo "Yes it is";
        // }


        // SWITCH statement
        // CASE is used, then BREAK to end.

        $number = 100;

        switch ($number) {
            case 100:
                echo 'It is 100';
                break;
            case 37:
                echo 'It is 37';
                break;
            case 35:
                echo 'It is 35';
                break;
            default:
                echo 'We could not find anything';
                break;
        }
    ?>


</body>
</html>