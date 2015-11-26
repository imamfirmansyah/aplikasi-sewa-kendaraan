<?php

	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Pelanggan extends Eloquent {

		protected $table = 'pelanggan';
		protected $primaryKey = 'id';

		public $timestamps = false;
	}