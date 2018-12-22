<?php
	namespace app\index\controller;
	use think\Controller;
	use app\index\controller\Index;
	use app\index\model\User;
	
	class Register extends Controller{
		
		public function register(){
			$user = new user();
			$user->username = input('post.username');
			$user->password = input('post.password');
			$user->email = input('post.email');
			//$index = new Index();
			if($user->save()){
				$this->redirect('index/succ');
			}else{
				$this->redirect('index/fail');
			}
			
			//$this->redirect('index/index');
			//return $this->fetch('/index/index');
		}
	}