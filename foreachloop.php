<!DOCTYPE html>
<html>
<head>

<title> foreach | loop</title>
</head>

<body>

<?php
    
    $citizens = [

        [
            'job' => 'carpenter',
            'condition'=>'middle',
            'children' => 6,
      
        ],

        [
            'job' => 'driver',
            'condition'=>'low',
            'children' => 9,
        ],

      
        [
            'job' => 'engineer',
            'condition'=>'low',
            'children' => 9,
        ],
    
        [
            'job' => 'businessman',
            'condition'=>'low',
            'children' => 9,
        ],


    ];

   foreach( $citizens as $guests ){ 

    echo $guests['condition'] ." ";
    echo $guests['job'] ."<br>";

}    

?>

</body>








</html>