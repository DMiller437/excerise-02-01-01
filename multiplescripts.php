<!DOCTYPE html>
<html>

<head>
    <!--
     Excerise 02_01_01
     Author: Dylan J. Jones-Miller
     date: 9.10.18
     
     multiplescripts.php
    -->

    <meta charset="UTF-8">
    <title>PHP Enviroment info</title>
    <meta name="viewport" content="intial-scale=1.0" </head>

    <body>
       <h1>Php enviroment info</h1>
        <p>
           The php code was rendered with PHP version
            
            <?php
      echo phpversion();
    ?>
        </p>
         <p>The PHP code was rendered with Zend Engine version 
       <?php
         echo zend_version();
        ?>
        </p>
        <p>PHP's default MIME type is
       <?php
         echo ini_get("default_mimetype");
        ?>
        </p>
          <p>The maxium allowable execution time of a PHP script is
       <?php
         echo ini_get("max_execution_time");
        ?>
        </p>
    </body>

</html>