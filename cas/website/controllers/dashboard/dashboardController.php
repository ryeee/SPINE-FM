<?php

class dashboardController extends Spine_SuperController
{
	public function main()
	{
		$this->renderTemplate('inner_most', 'home/set');
	}
	
	public function indexAction()
	{
		die('hey');
	}
	
	public function logoutAction()
	{
	}
	
	public function userControlAction ()
	{
		
	}
}