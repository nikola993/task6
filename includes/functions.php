<?php

class NewsLetter {

    private static $_instance = null;
    
    function send()
    {

    }
    
    function save()
    {
    
    }

    public static function getInstance()
    {

        if (self::$_instance == null)
        {
            self::$_instance = new NewsLetter();
        }

        return self::$_instance;
    }

}