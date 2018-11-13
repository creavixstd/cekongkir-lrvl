<?php

namespace creavixstd\cekongkir\app;

class City extends CekOngkirApi {
	protected $method = "city";

	public function byProvinsi($province_id){
		$this->parameters = "?province=".$province_id;
		return $this->GetData();
	}
}