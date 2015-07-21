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

        $Rss->Title = "Web Job Board";
        $Rss->Link = "http://www.webjobnow.com";
        $Rss->Copyright = "© Pozitive Group LLC";
        $Rss->Description = "Best Vacancy on Web Jobs Board";
        $Rss->Category = "Jobs";
        $Rss->Language = "en-us";

        $Rss->ManagingEditor = "admin@webjobnow.com";
        $Rss->WebMaster = "admin@webjobnow.com";
        $Rss->Query = "SELECT
               post.postid,
                post.title,
                post.jobdescription,
                post.date_pablish
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
            $Title = $line[1];
            $Description = substr($line[2],0,200).' ...';
            $Link = "http://www.webjobnow.com/jobs/view/".$line[0];
            $PubDate = date("r", strtotime($line[3]));
            $Category = "Job";
            $Rss->PrintBody($Title, $Link, $Description, $Category, $PubDate);
        }
        $Rss->PrintFooter();
        $Rss->Close();

        
    }



}






