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
//            testing what the phpversion text does
      echo phpversion();
    ?>
        </p>
         <p>The PHP code was rendered with Zend Engine version 
       <?php
//        testing another built in PHP function called "zend_version"
         echo zend_version();
        ?>
        </p>
        <p>PHP's default MIME type is
       <?php
       /* Here we are using the built in ini_git function to get the default mimetype which is just another word for how its formatted*/
         echo ini_get("default_mimetype");
        ?>
        </p>
          <p>The maxium allowable execution time of a PHP script is
       <?php
//         Then we use the same default function but this time to find the execution time
         echo ini_get("max_execution_time");
        ?>
        </p>
    </body>

</html>