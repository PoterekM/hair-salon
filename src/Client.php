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

    }
?>
