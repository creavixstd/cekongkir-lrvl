<?php

namespace creavixstd\cekongkir\app;

class Subdistrict extends CekOngkirApi {
	protected $method = "subdistrict";

	public function byKota($city_id){
		$this->parameters = "?city=".$city_id;
		return $this->GetData();
	}
}