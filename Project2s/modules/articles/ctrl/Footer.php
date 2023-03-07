<?php

class Footer{

public static $footer;

public static function articlesFooter(){

$article = new CtrlArticles();

self::$footer = $article->articles();

}

}