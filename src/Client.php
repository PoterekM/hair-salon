<?php
    class Client
    {
        private $name;
        private $number;
        private $appointment;
        private $client_id;
        private $id;

        function __construct($name, $number, $appointment, $client_id, $id = null)
        {
            $this->name = $name;
            $this->number = $number;
            $this->appointment = $appointment;
            $this->client_id = $client_id;
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

        function setName($newName)
        {
            $this->name = (string) $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setNumber($new_number)
        {
            $this->number = intval($new_number);
        }

        function getAppointment()
        {
            return $this->appointment;
        }

        function setDate($new_appointment)
        {
            $this->appointment = (string) $new_appointment;
        }

        function getClientId()
        {
            return $this->client_id;
        }

        function setClientId($new_client_id)
        {
            $this->client_id = intval($new_client_id);
        }




    }
?>
