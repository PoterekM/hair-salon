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

        function testGetId()
        {
            //Arrange
            $stylist = "Drew";
            $test_stylist = new Stylist($stylist);
            $test_stylist->save();

            //Act
            $restult = $test_stylist->getId();

            //Assert
            $this->assertTrue(is_numeric($result));
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
