<?php
namespace App\Controller;
class IndexController extends AppController {
	public function index() {
		$this->loadModel('Vehicles');
		$vehicles = $this->Vehicles->getAllVehicles();
		$this->set(compact('vehicles'));
	}
}