<?php

class Feedback extends Controller {

    function __construct() {
        parent::__construct();
        Auth::HandleLogin();


        $this->view->titl = 'Feedback page';
    }

    function index() {
//        echo 'inside index index';
        $this->view->feedList = $this->model->feedList();
        $this->view->payedList = $this->model->payedList();
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
    
     public function generate() {
         require "libs/Sitemap.php";
         $sitemap = new Sitemap(URL);   
         //$sitemap->setPath(URL.'xmls/');
         $sitemap->setPath('/var/www/cdvista7738/data/www/vista.zp.ua/dot/xmls/');
         $sitemap->setFilename('customsitemap');
         
        

         
         
      $sitemap->addItem('about', '0.8', 'monthly', 'Jun 25');   
    //     $query = Doctrine_Query::create()
     //           ->select('.created_at, p.slug')
     //           ->from('Posts p')
     //           ->orderBy('p.id DESC')
     //           ->useResultCache(true);
    //     
              $posts =  $this->model->sitemapList();
             
           
             foreach ($posts as $post) {
                              $sitemap->addItem('jobs/view/' . $post['postid'], '0.6', 'weekly', $post['date_create']);
                        }
         $sitemap->createSitemapIndex(URL, 'Today');
         header('location:' . URL . 'feedback');
    }
    public function publish($postid){
        $this->model->publishPost($postid);
        header('location:' . URL . 'feedback');
    }
}
