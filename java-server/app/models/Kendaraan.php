<?php

	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Kendaraan extends Eloquent {

		protected $table = 'kendaraan';
		protected $primaryKey = 'id';

		public $timestamps = false;
	}