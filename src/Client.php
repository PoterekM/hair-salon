<?php
    class Client
    {
        private $name;
        private $number;
        private $appointment;
        // private $stylist_id;
        private $id;

        function __construct($name, $number, $appointment, $id = null)
        {
            $this->name = $name;
            $this->number = $number;
            $this->appointment = $appointment;
            // $this->stylist_id = $stylist_id;
            $this->id = $id;
        }

        function setId()
        {
            $this->id = inval($id);
        }

        function getId()
        {
            return $this->id;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function getNumber()
        {
            return $this->number;
        }

        function setNumber($new_number)
        {
            $this->number = intval($new_number);
        }

        function getAppointment()
        {
            return $this->appointment;
        }

        function setAppointment($new_appointment)
        {
            $this->appointment = $new_appointment;
        }


        function setDate($new_appointment)
        {
            $this->appointment = (string) $new_appointment;
        }

        // function getStylistId()
        // {
        //     return $this->stylist_id;
        // }
        //
        // function setStylistId($new_stylist_id)
        // {
        //     $this->stylist_id = intval($new_stylist_id);
        // }


        function save()
        {
            $executed = $GLOBALS['DB']->exec("INSERT INTO clients (name, number, appointment) VALUES ('{$this->getName()}', {$this->getNumber()}, '{$this->getAppointment()}')");
        }

        static function deleteAll()
        {
            $executed = $GLOBALS['DB']->exec("DELETE FROM clients;"); {
                if ($executed) {
                    return true;
                } else {
                    return false;
                }
            }
        }


    }
?>
