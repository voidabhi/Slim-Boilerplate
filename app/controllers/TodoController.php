<?php 

class TodoController extends \SlimController\SlimController
{
    public function index($id)
    {
		 $todo = Todo::find($id); 
		 $this->app->response->setBody($todo["title"]);
    }
	
    public function all()
    {
		$todos= Todo::all(); 
		$this->app->response->setBody($todos);
    }	
}
