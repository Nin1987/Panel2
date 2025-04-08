<?php

class View_user
{
    public function __construct()
    {
        include("template.php");
    }
}

add_action("zoo_baner", function(){$view_user = new View_user();});