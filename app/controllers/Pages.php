<?php
class Pages extends Controller {
    public function __construct(){
        
    }

// When logged in we redirect to the posts page
    public function index(){
        if(isLoggedIn()){
            redirect('posts');
        }
        
        $data = ['title'=>'Php Chat App Project',
    'description'=>'Built on a custom Php framework'];

    // If the user is logged in home page is the pages/index
       $this->view('pages/index', $data);
    }

    //When we are request the about page this is called
    public function about(){
        $data = ['title'=>'About Us', 'description'=>'App to share posts with other users'];
       $this->view('pages/about',$data);
    }
}