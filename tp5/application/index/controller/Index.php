<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
    public function index() 
    {
    	/* $userInfo = Db::table('user')
    				->where('userid',1)
    				->find();
    	dump($userInfo); */
    	return $this->fetch('index');
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
