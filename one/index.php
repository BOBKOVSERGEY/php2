<?php
require_once __DIR__ . '/modules/function.php'
abstract class Article {
    public $title;
    public $text;

    static protected $delim = ': ';

    public function view() {
        echo $this->title;
    }
}

class NewsArticle extends Article {
    public $author;
    public function view()
    {
        echo $this->title . self::$delim . $this->author;
    }
}

$a = new NewsArticle();

$a->title = 'heading';
$a->author = 'Ivanov';
$a->view();

