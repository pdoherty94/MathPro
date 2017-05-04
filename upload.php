<?php

 require 'vendor/autoload.php';
              require 'credentials.php';
              //include('image_check.php');

              use Aws\DynamoDb\DynamoDbClient;
              use Aws\Common\Enum\Region;
              use Aws\DynamoDb\Enum\Type;
              use Aws\DynamoDb\Enum\AttributeAction;
              use Aws\DynamoDb\Enum\ReturnValue;
              use Aws\DynamoDb\Enum\KeyType;
              use Aws\S3\S3Client;
               
              use Aws\Sdk;
              
              
              use Aws\DynamoDb\Exception\DynamoDbException;

// Create the AWS service builder, providing the path to the config file

              
//              $client = DynamoDbClient::factory($config);

$dynamoDbCLient = new DynamoDbClient([
    
    'version'     => 'latest',
    'region' => 'eu-west-1',
    'credentials' => [
                    'key'    => 'AKIAJJN6QQGIMNFA5DGA',
                    'secret' => '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']
        ]);

if (!$dynamoDbCLient){
    
    echo ("Please try again later");
}

else{
    
    echo ("connected\n");
    
    $tableName = 'QuestionText';
echo "Adding data to the $tableName table...\n";

try{
    
    $response = $dynamoDbCLient->batchWriteItem([
        'RequestItems' => [
            $tableName => [
                [
                    'PutRequest' => [
                        'Item' => [
                            'QuestionID' =>  ['S'  => 'S2S2'],
                            "Answer1" => ['S'  => 'A1'],
                            "Answer2" => ['S'  => 'A2']
                        ]
                    ]
]]]]);
                echo "done.\n";
    
} catch (DynamoDbException $e) {
    echo $e->getMessage() . "\n";
    exit ("Unable to load data into $tableName\n");
}
    
    
}

//           $response = $dynamoDBCLient->putItem([
//                               'TableName' => 'QuestionText',
//                                     'Item' => [
//                                     'QuestionID' =>  ['S'  => 'S2S2'],
//                                     "Answer1" => ['S'  => 'A1'],
//                                     "Answer2" => ['S'  => 'A2'] ] ]
//                                             );
//          print_r($response)
          
          ?>


                                     
                                     
        
                    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

