<?php
class Session
{
    public static $pseudo = "";
    public static $droit = "";
    public static $langue = "";

    public static function getDroit()
    {
        if (self::$droit == "" && isset($_SESSION['droit'])) {
            self::$droit = $_SESSION['droit'];
        }
        if (self::$droit != "") {
            return self::$droit;
        } else {
            return false;
        }
    }

    public static function getPseudo()
    {
        if (self::$pseudo == "" && isset($_SESSION['pseudo'])) {
            self::$pseudo = $_SESSION['pseudo'];
        }
        if (self::$pseudo != "") {
            return self::$pseudo;
        } else {
            return false;
        }
    }

    public static function setDroit($droit)
    {
        $_SESSION['droit'] = $droit;
        self::$droit = $droit;
    }

    public static function setPseudo($pseudo)
    {
        $_SESSION['pseudo'] = $pseudo;
        self::$pseudo = $pseudo;
    }

    public static function delDroit()
    {
        unset($_SESSION['droit']);
        self::$droit = "";
    }

    public static function delPseudo()
    {
        unset($_SESSION['pseudo']);
        self::$pseudo = "";
    }

    
    public static function setLangue($langue)
    {
        $_SESSION['langue'] = $langue;
        Config::$langue = $langue;
    }

    public static function getLangue()
    {
        if (isset($_SESSION['langue'])) {
            return $_SESSION['langue'];
        } else {
            $langue = Config::$langue;
            self::setLangue($langue);
            return $langue;
        }
    }
}
