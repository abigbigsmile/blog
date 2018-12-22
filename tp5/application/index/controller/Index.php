<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index() 
    {
    	return $this->fetch('index');
    }
    

    public function succ()
    {
    	return $this->fetch('success');
    }
    
    public function about()
    {
    	return $this->fetch('about');
    }
    
    public function contact()
    {
    	return $this->fetch('contact');
    }
    
    public function login()
    {
    	return $this->fetch('login');
    }
    
    public function register()
    {
    	return $this->fetch('register');
    }
    
}


?>
