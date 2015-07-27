<?php

class feedback extends controller {

    function __construct() {
        require 'libs/mark/michelf/markdown.inc.php';
        parent::__construct();
        auth::HandleLogin();
            

        $this->view->titl = 'Admin area';
        $this->view->canon = 'feedback';
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
        $sitemap->setFilename('sitemap');

        $sitemap->addItem('', '0.9', 'weekly', 'Jun 25');
        $sitemap->addItem('postjob', '0.4', 'monthly', 'Jun 25');
        $sitemap->addItem('login', '0.4', 'monthly', 'Jun 25');
        $sitemap->addItem('contactus', '0.4', 'monthly', 'Jun 25');
        $sitemap->addItem('terms', '0.4', 'monthly', 'Jun 25');
        $sitemap->addItem('privacy', '0.4', 'monthly', 'Jun 25');
        $sitemap->addItem('signup', '0.4', 'monthly', 'Jun 25');

        $posts = $this->model->sitemapList();


        foreach ($posts as $post) {
            $sitemap->addItem('jobs/view/' . $post['postid'], '0.7', 'weekly', $post['date_create']);
        }
        $sitemap->createSitemapIndex(URL, 'Today');
        header('location:' . URL . 'feedback');
    }

    public function publish($postid) {
        $this->model->publishPost($postid);
        $this->generate();
        //$this->sendMailEachPost($postid);
        header('location:' . URL . 'feedback');
    }


}
