<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index | page</title>
    </head>
    <body>
        <div style="color: white; padding: 30px; background: blue;">
            <form action="../controller/submitForm.php" method="POST"> 
                <div>
                    <div style="margin-bottom: 5px;">
                        <label>First name</label>
                        <input type="text" name="fname">
                        <?php
                            if( isset($_GET['error']) ){
                                if( $_GET['error'] == 'first'){
                                     echo '
                                        <div style="margin-bottom: 10px; color: red">
                                        <span>'.$_GET['fmessage'].'</span>
                                        </div>
                                     ';
                                }
                            }
                        ?>
                    </div>

                    <div>
                        <label>Second name</label>
                        <input type="text" name="lname">
                         <?php
                            if( isset($_GET['error']) ){
                                if( $_GET['error'] == 'second'){
                                     echo '
                                        <div style="margin-bottom: 10px; color: red">
                                        <span>'.$_GET['smessage'].'</span>
                                        </div>
                                     ';
                                }
                            }
                        ?>
                    </div>

                    <div>
                        <button type="submit" name="submit">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>