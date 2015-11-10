<?php
namespace App\Model\Table;

class VehiclesTable extends Table {

	public function getAllVehicles() {
		return $this->find()->all();
	}

}

