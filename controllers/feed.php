<?php

class feed extends controller{

    function __construct() {
        parent::__construct();
        
    }

    function index(){
    require "libs/rss.php";           // это собственно класс
    //require "libs/feed.php";           // это собственно класс
    require "config/conn.inc";          // переменные для открытия базы
    
            $Rss = new CRss;

        $Rss->Title = "Заголовок канала";
        $Rss->Link = "http://www.webjobnow.com";
        $Rss->Copyright = "© Копирайт.";
        $Rss->Description = "Описание";
        $Rss->Category = "Разработка программного обеспечения";
        $Rss->Language = "ru";

        $Rss->ManagingEditor = "admin@webjobnow.com";
        $Rss->WebMaster = "admin@webjobnow.com";
        $Rss->Query = "SELECT
                post.title,
                post.company,
                post.apply,
                post.date_pablish,
                post.type
                FROM post
     ORDER by date_pablish desc Limit 0,20";

        $Rss->Open($Server, $DataBase, $Login, $Password);

        $Rss->LastBuildDate = date("r");
// получаем последнюю дату публикации
        $query = "select post.date_pablish
                        FROM post
          ORDER by post.date_pablish desc Limit 0,1";

        $result1 = mysql_query($query)
                or die("FROM blog failed");

        $line = mysql_fetch_array($result1);

        $Date = date("r", strtotime($line[0]));
        mysql_free_result($result1);

        $Rss->LastBuildDate = $Date;
        $Rss->PubDate = $Rss->LastBuildDate;

        $Rss->PrintHeader();
        $Rss->Query();

        while ($line = mysql_fetch_array($Rss->Result)) {   // для каждой записи выведем
            $Title = $line[0];
            $Description = $line[1];
            $Link = $line[2];
            $PubDate = date("r", strtotime($line[3]));
            $Category = $line[4];
            $Rss->PrintBody($Title, $Link, $Description, $Category, $PubDate);
        }
        $Rss->PrintFooter();
        $Rss->Close();

        
    }



}






