<?php
	class indexController{
		function index(){
		 	$newsobj = M('news');
		 	$data = $newsobj->get_news_list();
		 	$this->showabout();
		 	VIEW::assign(array('data'=>$data));
		 	VIEW::display('index/index.html');
		}

		function newsshow(){
			$data = M('news')->getnewsinfo(intval($_GET['id']));
			$this->showabout();
			VIEW::assign(array('data'=>$data));
			VIEW::display('index/show.html');
		}

		function showabout(){
			$data = M('about')->aboutinfo();
			VIEW::assign(array('about'=>$data));
		}
	}
?>