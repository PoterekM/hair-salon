<?php
    class Client
    {
        private $name;
        private $number;
        private $date;
        private $client_id;
        private $id;

        function __construct($name, $number, $date, $client_id, $id = null)
        {
            $this->name = $name;
            $this->number = $number;
            $this->date = $date;
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
            $this->number = intval($new_number)
        }

        function getDate()
        {
            return $this->date;
        }

        function setDate($new_date)
        {
            $this->date = (string) $new_date;
        }

        function getClientId()
        {
            return $this->client_id;
        }

        function setClientId($new_client_id)
        {
            $this->client_id = intval($new_client_id);
        }

        function getId()
        {
            return $this->id;
        }


    }
?>
