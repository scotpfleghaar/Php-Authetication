<?php
class Pages extends Controller {
    public function __construct(){
        
    }


    public function index(){
        if(isLoggedIn()){
            redirect('posts');
        }
        
        $data = ['title'=>'Php CRUD Project',
    'description'=>'Php Sample Crud Application built on custom Php framework'];

       $this->view('pages/index', $data);
    }

    public function about(){
        $data = ['title'=>'About Us', 'description'=>'App to share posts with other users'];
       $this->view('pages/about',$data);
    }
}