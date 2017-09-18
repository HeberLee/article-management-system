<?php
  class testController{
  	function show(){
   		global $view;
   		$testModel = M('test');
   		$data = $testModel -> get();
   		$view ->assign('str','boom!');
   		$view ->display('show.tpl');
   }
  }
?>