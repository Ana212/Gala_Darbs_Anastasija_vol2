<?php

class ArticleRepository
{
    public static function getArticle(): array
    {
        $query = DB::$connection->query("SELECT * FROM articles");

        $output = [];
        while ($article = $query->fetchObject('Article')) {
            $output[] = $article;
        }
        
        return $output;
    }

}