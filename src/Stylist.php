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
            $execued = $GLOBALS['DB']->exec("INSERT INTO stylist (stylist) VALUES ('{$this->getStylist()}');");
            if ($executed) {
                return true;
            } else {
                return false;
            }
        }

        static function getAll()
        {
            $returned_stylists = $GLOBALS['DB']->query("SELECT * FROM stylist;");
        }


    }
?>
