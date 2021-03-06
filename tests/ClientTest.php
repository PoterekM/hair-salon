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

        // function testSave()
        // {
        //     //Arrange
        //     // $stylist = "hodor";
        //     // $test_client = new Client($stylist);
        //     // $test_client->save();
        //     // $stylist_id = $test_stylist->getId();
        //     //
        //     $name = "clientwithgreatname";
        //     $number = 1234567890;
        //     $appointment = 2017-12-08;
        //     $test_client = new Client($name, $number, $appointment);
        //     $test_client->save();
        //
        //     //Act
        //     $executed = $test_client->save();
        //
        //     //Assert
        //     $this->assertTrue($executed, "Client not saved to database, braaaah");
        // }

        // function testDeleteAll()
        // {
        //     $name = "clientwithgreatname";
        //     $number = 1234567890;
        //     $appointment = 2017-12-08;
        //     $test_client = new Client($name, $number, $appointment);
        //     $test_client->save();
        //
        //     $name2 = "clientwithgreatname";
        //     $number2 = 1234567890;
        //     $appointment2 = 2017-12-08;
        //     $test_client2 = new Client($name2, $number2, $appointment2);
        //     $test_client2->save();
        //
        //     //Act
        //     Client::deleteAll();
        //     $result = Client::getAll();
        //     //Assert
        //     $this->assertEquals([], $result);
        //
        // }


        function testGetName()
        {
            // $stylist = "boo";
            // $test_stylist = new Stylist($stylist);
            // $test_stylist->save();
            // $stylist_id = $test_stylist->getId()

            $name = "clientwithgreatname";
            $number = 1234567890;
            $appointment = 2017-12-08;
            $test_client = new Client($name, $number, $appointment);
            $test_client->save();


            $result = $test_client->getName();

            $this->assertEquals($name, $result);
        }

        function testSetName()
        {
            $name = "yabadabado";
            $number = 8484848;
            $appointment = 2017-10-08;
            $test_client = new Client($name, $number, $appointment);
            $test_client->save();

            $new_name = "Trishia";

            $test_client->setName($new_name);
            $result = $test_client->getName();

            $this->assertEquals($new_name, $result);
        }

        function testGetNumber()
        {

            $name = "clientwithgreatname";
            $number = 1234567890;
            $appointment = 2017-12-08;
            $test_client = new Client($name, $number, $appointment);
            $test_client->save();

            $result = $test_client->getNumber();

            $this->assertEquals($number, $result);
        }

        function testSetNumber()
        {
            $name = "yabadabado";
            $number = 8484848;
            $appointment = 2017-10-08;
            $test_client = new Client($name, $number, $appointment);
            $test_client->save();

            $new_number = "6663336363";

            $test_client->setNumber($new_number);
            $result = $test_client->getNumber();

            $this->assertEquals($new_number, $result);
        }

            function testGetAppointment()
            {
                // $stylist = "boo";
                // $test_stylist = new Stylist($stylist);
                // $test_stylist->save();
                // $stylist_id = $test_stylist->getId()

                $name = "clientwithgreatname";
                $number = 1234567890;
                $appointment = 2017-12-08;
                $test_client = new Client($name, $number, $appointment);
                $test_client->save();

                $result = $test_client->getAppointment();

                $this->assertEquals($appointment, $result);
            }

            function testSetAppointment()
            {
                $name = "yabadabado";
                $number = 8484848;
                $appointment = 2017-10-08;
                $test_client = new Client($name, $number, $appointment);
                $test_client->save();

                $new_appointment = "Trishia";

                $test_client->setAppointment($new_appointment);
                $result = $test_client->getAppointment();

                $this->assertEquals($new_appointment, $result);
            }

                // function testGetName()
                // {
                //     $name = "clientwithgreatname";
                //     $number = 1234567890;
                //     $appointment = 2017-12-08;
                //     $test_client = new Client($name, $number, $appointment);
                //     $test_client->save();
                //
                //     $result = $test_client->getName();
                //
                //     $this->assertEquals($name, $result);
                // }
                //
                // function testSetName()
                // {
                //     $name = "yabadabado";
                //     $number = 8484848;
                //     $appointment = 2017-10-08;
                //     $test_client = new Client($name, $number, $appointment);
                //     $test_client->save();
                //
                //     $new_name = "Trishia";
                //
                //     $test_client->setName($new_name);
                //     $result = $test_client->getName();
                //
                //     $this->assertEquals($new_name, $result);







    }
?>
