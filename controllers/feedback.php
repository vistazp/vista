<?php

class feedback extends controller {

    function __construct() {
        parent::__construct();
        auth::HandleLogin();


        $this->view->titl = 'Feedback page';
    }

    function index() {
//        echo 'inside index index';
        $this->view->feedList = $this->model->feedList();
        $this->view->payedList = $this->model->payedList();
        $this->view->subList = $this->model->subList();
        $this->view->render('feedback/index');
    }

    public function view($id) {
        $this->view->feedback = $this->model->feedSingleList($id);
        $this->view->render('feedback/view');
    }

    public function editSave($id) {
        $data = array();
        $data['noteid'] = $id;
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];

        $this->model->editSave($data);

        header('location:' . URL . 'feedback');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('location:' . URL . 'feedback');
    }

    public function deleteSub($id) {
        $this->model->deleteSub($id);
        header('location:' . URL . 'feedback');
    }

    public function sendMailEachPost($postid) {
        $this->model->sendMailEachPost($postid);
        header('location:' . URL . 'feedback');
    }

    public function generate() {
        require "libs/sitemap.php";
        $sitemap = new sitemap(URL);
        //$sitemap->setPath(URL.'xmls/');
        $sitemap->setPath('/var/www/cdwebjo14041/data/www/webjobnow.com/');
        $sitemap->setFilename('customsitemap');

        $sitemap->addItem('about', '0.8', 'monthly', 'Jun 25');

        $posts = $this->model->sitemapList();


        foreach ($posts as $post) {
            $sitemap->addItem('jobs/view/' . $post['postid'], '0.6', 'weekly', $post['date_create']);
        }
        $sitemap->createSitemapIndex(URL, 'Today');
        header('location:' . URL . 'feedback');
    }

    public function publish($postid) {
        $this->model->publishPost($postid);
        //$this->sendMailEachPost($postid);
        header('location:' . URL . 'feedback');
    }

    public function callback() {
        $data = $_POST;

               
        $fp = fopen("/var/www/cdwebjo14041/data/www/webjobnow.com/call.txt", "a"); // Открываем файл в режиме записи 
        $mytext = $data; // Исходная строка
        
        $test = fwrite($fp, $mytext); // Запись в файл
        
        fclose($fp); //Закрытие файла
        //
        //var_dump($_POST['data']);
        
        die();
    }

}
