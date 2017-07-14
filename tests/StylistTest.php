<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Stylist.php";

    $server = 'mysql:host=localhost:8889;dbname=hair_salon_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);


    class StylistTest extends PHPUnit_Framework_TestCase
    {

        function testGetStylist()
        {
            //Arrange
            $stylist = "Nancy";
            $test_stylist = new Stylist($stylist);

            //Act
            $result = $test_stylist->getStylist();
            //Assert
            $this->assertEquals($stylist, $result);

        }

        function testSetStylist()
        {
            $stylist = "Yani";
            $test_stylist = new Stylist($stylist);
            $new_stylist = "Yawni";

            $test_stylist->setStylist($new_stylist);
            $result = $test_stylist->getStylist();

            $this->assertEquals($new_stylist, $result);
        }

        function testGetId()
        {
            //Arrange
            $stylist = "Drew";
            $test_stylist = new Stylist($stylist);
            $test_stylist->save();

            //Act
            $result = $test_stylist->getId();

            //Assert
            $this->assertTrue(is_numeric($result));
        }

        protected function tearDown()
        {
            Stylist::deleteAll();
            //hey, eventually you'll need one for the clients, too
        }

        function testSave()
        {
            $stylist = "Lucy";
            $test_stylist = new Stylist($stylist);

            $executed = $test_stylist->save();

            $this->assertTrue($executed, "This stylist wasn't saved, bro.");
        }

        function testGetAll()
        {
            $stylist = "Jimi";
            $stylist2 = "Alpert";
            $test_stylist = new Stylist($stylist);
            $test_stylist->save();
            $test_stylist2 = new Stylist($stylist2);
            $test_stylist2->save();

            $restult = Stylist::getAll();

            $this->assertEquals([$test_stylist, $test_stylist2], $result);
        }

        function testDeleteAll()
        {
            $stylist = "Bobbo";
            $stylist2 = "Rudy";
            $test_stylist = new Stylist($stylist);
            $test_stylist->save();
            $test_stylist2 = new Stylist($stylist2);
            $test_stylist2->save();

            Stylist::deleteAll();
            $restult = Stylist::getAll();

            $this->assertEquals([], $result);

        }

        // function testSetStylist()
        // {
        //     //Arrange
        //     $stylist = "Billi";
        //
        //     //Act
        //
        //     //Assert
        //
        // }
        //
        // function testGetStylist()
        // {
        //     //Arrange
        //
        //     //Act
        //
        //     //Assert
        //
        // }
    }
?>
