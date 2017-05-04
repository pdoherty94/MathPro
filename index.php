<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     
        
        
       <?php
       
       //echo "Hello World";
        //require 'C:\xampp\phpMyAdmin\libraries\plugins\auth\recaptcha\autoload.php';
        //require 'C:\xampp\phpMyAdmin\libraries\sql-parser\autoload.php';
       
                 require 'vendor\autoload.php';
                 //use Aws\Common\Enum\Region;
                 //use Aws\DynamoDb\Enum\Type;

                // $bucket='userprofilebucket';  #Replace with your Bucket name 
                 $tableName = "QuestionsText"; #Replace with your Database table name
                 $config = array(
                                 'key'    => 'AKIAJJN6QQGIMNFA5DGA',
                                 'secret' => 'FeoDNxI531efurardO9QFdE5r7GTuqVQshrvpePR',
                                 'profile' => 'default',
                                 'region' => 'eu-west-1', #replace with your desired region  
                                   'version' => 'latest'
                               );
           
        ?>
    </body>
</html>
