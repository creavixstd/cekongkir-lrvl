<?php

namespace creavixstd\cekongkir;

use Illuminate\Support\Facades\Facade;

class CekOngkirFacade extends Facade{
	protected static function getFacadeAccessor() { return 'cekOngkir'; }
}