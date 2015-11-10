<?php

namespace App\Controller;
use App\Controller\AppController;

class VehiclesController extends AppController {

	public function index() {
		$this->loadModel('Vehicles');
		$vehicles = $this->Vehicles->getAllVehicles();
		$this->set(compact('vehicles'));
	}
}

