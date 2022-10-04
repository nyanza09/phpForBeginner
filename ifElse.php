
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifelse|page</title>
</head>
<body>
    <?php
        // kama ni mtu, muulize jina lake, kama ni juma muulize juma wa mapi?
        // kama  sio mtu muulize yeye ni mdudu au jani, kama ni jani muulize ni la kijani au njano
        $kitu = "---";
        if( $kitu == "mtu" ){
            $unaitwaNani = "----";
            if( $unaitwaNani == "juma" ){
                echo "juma wa wapi";
            }
        }else{
            $weweNani = "----";
            if( $weweNani == "jani"){
                echo "wewe ni jani la  njano au kijani";
            }
        }

        
        $jibu = "--";
        $laKweli = 40;

        if( condition ){
            if( condition ){
                true;
            }elseif( condition ){
                false;
            }else{
                echo "here";
            }
        }elseif( condition ){
            false;
        }elseif( condition ){
            false;
        }else{
            echo "this";
        }
    ?>
</body>
</html>