<?php

class HomeController extends PrepareHelloController {
	protected $caption = 'Bine ați venit pe aplicația <u>Finance Flow Credite</u>';
	protected $small = '';

	public function __construct(){
		parent::__construct();
	} 
	
	public function showWelcome() {
		$links = [];
		$rows = $this->prepare_clients();
		return View::make('hello')->with(compact('rows'));
	}

	public function lockScreen() {
		$user = $this->current_user;
		return View::make('account.lock')->with(compact('user'));
	}

}
