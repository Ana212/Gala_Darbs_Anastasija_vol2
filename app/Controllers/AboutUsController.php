

<?php

class AboutUsController
{
    public function index(): string
    {
        $article= ArticleRepository::getArticle();
        
        return BaseView::generate('AboutUs', 'index', ['articles' => $article]);
    }

}

