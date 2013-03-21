<?php

    // for author
    $author = 'Rajesh KS';
    $qry_author = "SELECT * FROM authors WHERE author='$author'";
    mysql_connect('localhost','root','','genesis');
    mysql_select_db('genesis');
    $result_author = mysql_query($qry_author);
    while($row_author = mysql_fetch_array($result_author))
    {
        $article_id = $row_author['article_id'];
        $qry_article_author = "SELECT * FROM articles WHERE article_id = '$article_id'";
        $result_article_author = mysql_query($qry_article_author);
        while($row_article_author = mysql_fetch_array($result_article_author))
        {
            echo $row_article_author['title'];
            echo "<br/>";
            echo "data/Articles/" . $row_article_author['magazine'] . "/" . $row_article_author['volume'] . "/" . $row_article_author['site_id'] . ".pdf";
//            echo $row_article_author['']
            echo "<br/>";
            echo "<br/>";
        }
    }
//    echo mysql_affected_rows();

    //for keyword
    $keyword = 'Oxadiazole';
    $qry_keyword = "SELECT * FROM keywords WHERE keyword='$keyword'";
    $result_keyword = mysql_query($qry_keyword);
    echo "<br/>";
    echo "<br/>";
    while($row_keyword = mysql_fetch_array($result_keyword))
    {
        $article_id = $row_keyword['article_id'];
        $qry_article_keyword = "SELECT * FROM articles WHERE article_id = '$article_id'";
        $result_article_keyword = mysql_query($qry_article_keyword);
        while($row_article_keyword = mysql_fetch_array($result_article_keyword))
        {
            echo $row_article_keyword['title'];
            echo "<br/>";
            echo "data/Articles/" . $row_article_keyword['magazine'] . "/" . $row_article_keyword['volume'] . "/" . $row_article_keyword['site_id'] . ".pdf";
//            echo $row_article_keyword['']
            echo "<br/>";
            echo "<br/>";
        }
    }
//    echo mysql_affected_rows();
    mysql_close();
//    while(mysql)
?>