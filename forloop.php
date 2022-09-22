<!DOCTYPE html>
<html>
    <head> 
        <title> for | loop </title> 
    </head>
<body> 
<?php
 

//  for( $n = 0; $n < 5; $n++ ){

//     echo $n. " - allowed to .<br>";
//}



$students = [

    [
        'name' => 'mariam',
        'tribe' => 'chagga',
        'age' => 30,
    ],

    [
        'name' => 'abdallah',
        'tribe' => 'maasai',
        'age' => 16,
    ],

    [
        'name' => 'juma',
        'tribe' => 'hadzabe',
        'age' => 59,
    ],
];
    
//  $average = count ( $students );
//   echo " $average ";



//    echo $students[0]['age']."<br>";
//     echo $students[1]['age']."<br>";
//     echo $students[2]['age']."<br";



for( $m = 0; $m < 3; $m++ ){

    echo  " allowed to <br>";
}


  $average = count( $students );
  echo " $average ";

?>
</body>
</html>




<?php
$marks = count( $students );
 echo "$marks";






 foreach( $students as $pupils  ){

    echo $puils['name']." ";
    echo $pupils['condition']."<br>";

 }




for( $m = 21; $m > 15; $m++){
    echo $m. "- allowed to";
}
?>