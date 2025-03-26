<?php 
namespace App\Login\Fe;

class Main
{
    public function render()
    {
    	$view = new \Rino\Rain\View();
        echo $view->see(dirname(__FILE__).DS."tpl".DS."main.html");
    }

}

 ?>