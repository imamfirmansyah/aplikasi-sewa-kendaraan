<?php

	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Sewa extends Eloquent {

		protected $table = 'sewa';
		protected $primaryKey = 'id';

		public $timestamps = false;

		public function kendaraan() {
			return $this->belongsTo('Kendaraan', 'id_kendaraan');
		}

		public function pelanggan() {
			return $this->belongsTo('Pelanggan', 'id_pelanggan');
		}
	}