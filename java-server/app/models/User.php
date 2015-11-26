<?php

	use Illuminate\Database\Eloquent\Model as Eloquent;

	class User extends Eloquent {

		protected $table = 'user';
		protected $primaryKey = 'id';

		public $timestamps = false;
	}