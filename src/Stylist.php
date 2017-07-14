<?php
    class Stylist
    {
        private $stylist;
        private $id;

        function __construct($stylist, $id = null)
        {
            $this->stylist = $stylist;
            $this->id = $id;
        }

        function getId()
        {
            return $this->id;
        }

        function getStylist()
        {
            return $this->stylist;
        }

        function setStylist($new_stylist)
        {
            $this->stylist = (string) $new_stylist;
        }

        function save()
        {
            $executed = $GLOBALS['DB']->exec("INSERT INTO stylists (stylist) VALUES ('{$this->getStylist()}');");
            if ($executed) {
                return true;
            } else {
                return false;
            }
        }

        static function getAll()
        {
            $returned_stylists = $GLOBALS['DB']->query("SELECT * FROM stylists;");
            $stylists = array();
            foreach($returned_stylists as $stylist) {
                $stylist = $stylist['stylist'];
                $id = $stylist['id'];
                $new_stylist = new Stylist($stylist, $id);
                array_push($stylist, $new_stylist);
            }
            return $stylists;
        }

        static function deleteAll()
        {
            $executed = $GLOBALS['DB']->exec("DELETE FROM stylists;");
            if ($executed) {
                return true;
            } else {
                return false;
            }
        }


    }
?>
