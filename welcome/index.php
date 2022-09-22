
<!DOCTYPE html>
<!-- 
    !DOCTYPE html
    Is the code that describe what type ofk html document is this, 
    and this specify that this is a html5 document.
 -->

<html lang="en">
<!-- 
    <html lang="en">
    This shows the start of html document. Then lang="en" describes that the
    primary language ofk this dockument is english.        
-->
    <head>
<!-- 
    head
    This is then part where extra information about the page is stored.
    Example: style, tittle and links to fonts and jacvascript.
-->
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
                                /** isset() 
                                 * Is a function in php that we use to show wether the variable
                                 * exits or does not exist in the file.
                                 */
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