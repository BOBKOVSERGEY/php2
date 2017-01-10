<?php


class NewsController
{
    public function actionAll()
    {

        $art = NewsModel::findOneByColumn('title', 'новый заголовок');
        $art->title = 'новый заголовок 123';
        $art->save();

        var_dump( $art->id );



    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->items = $item;
        $view->display('news/one.php');
    }


}





