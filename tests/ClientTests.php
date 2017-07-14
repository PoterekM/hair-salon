<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Client.php";
    require_once "src/Stylist.php";

    $server = 'mysql:host=localhost:8889;dbname=hair_salon_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);


    class ClientTest extends PHPUnit_Framework_TestCase
    {
        // protected function tearDown()
        // {
        //     Client::deleteAll();
        //     Stylist::deleteAll();
        // }

        function testSave()
        {
            // //Arrange
            // $stylist = "hodor";
            // $test_client = new Client($stylist);
            // $test_client->save();
            // $stylist_id = $test_stylist->getId();
            //
            // $name = "clientwithgreatname";
            // $number = 1234567890;
            // $appointment = 2017-12-08;
            // $test_client = new Client($name, $number, $appointment, $stylist_id);
            // $test_client->save();
            //
            // //Act
            // $executed = $test_client->save();
            //
            // //Assert
            // $this->assertTrue($executed, "Client not saved to database, braaaah");
        }


        function testGetName()
        {
            // $stylist = "boo";
            // $test_stylist = new Stylist($stylist);
            // $test_stylist->save();
            // $stylist_id = $test_stylist->getId()
            //
            // $name = "clientwithgreatname";
            // $number = 1234567890;
            // $appointment = 2017-12-08;
            // $test_client = new Client($name, $number, $appointment, $stylist_id);
            // $test_client->save();
            //
            // $result = $test_client->getName();
            //
            // $this->assertEquals($name, $result);


        }





    }
?>
