
<body>
<?php
require 'vendor\autoload.php';
                 use Aws\Common\Enum\Region;
                 use Aws\DynamoDb\Enum\Type;

                
                 $tableName = "QuestionText"; #Replace with your Database table name
                 $config = array(
                                 'key'    => 'AKIAJJN6QQGIMNFA5DGA',
                                 'secret' => 'FeoDNxI531efurardO9QFdE5r7GTuqVQshrvpePR',
                                 'profile' => 'default',
                                 'region' => Region::EU_WEST_1 #replace with your desired region     
                               );
                 
                 $response = $client->putItem(array(
                               "QuestionText" => $tableName,
                                     "Item" => $client->formatAttributes(array(
                                     "QuestionID" =>  "S2S2",
                                     "Answer1" => "userName",
                                     "Answer2" => "userEmail",
                                     
                                     
                                             )),
          "ReturnConsumedCapacity" => 'TOTAL'
                     ));
                 
                 ?>


</body>
