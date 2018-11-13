<?php

namespace creavixstd\cekongkir;

use creavixstd\cekongkir\app\Subdistrict;
use creavixstd\cekongkir\app\Province;
use creavixstd\cekongkir\app\City;
use creavixstd\cekongkir\app\CostCount;

class CekOngkir {
	public function Provinsi(){
		return new Province;
	}

	public function Kota(){
		return new City;
	}

	public function Kecamatan(){
		return new Subdistrict();
	}

	public function Cost($attributes){
		return new CostCount($attributes);
	}
}