<?php
class Session
{
    public static $pseudo = "";
    public static $droit = "";


    public static function getDroit()
    {
        if (self::$droit != "") {
            return self::$droit;
        } else {
            return false;
        }
    }

    public static function getPseudo()
    {
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

}
