<?php
class Pages extends Controller {
    public function __construct(){
        
    }


    public function index(){
        if(isLoggedIn()){
            redirect('posts');
        }
        
        $data = ['title'=>'Php Chat App Project',
    'description'=>'Built on a custom Php framework'];

       $this->view('pages/index', $data);
    }

    public function about(){
        $data = ['title'=>'About Us', 'description'=>'App to share posts with other users'];
       $this->view('pages/about',$data);
    }
}