<?php

	require "vendor/autoload.php";

	$app = new \Slim\Slim();

	$app->get('/', function() {
		echo "Hello Selamat Datang Di Rest API Aplikasi Penyewaan Kendaraan";
	});

	/* ------- user ------- */
	$app->get('/user/show', 'getUser');
	$app->get('/user/show/', 'getUser');
	$app->get('/user/show/:id', 'getUserId');
	$app->get('/user/login/:username/:password', 'loginUser');
	$app->get('/user/create/:username/:password/:nama', 'addUser');
	$app->get('/user/delete/:id', 'deleteUser');
	$app->get('/user/status/:id/:status', 'statusUser');
	$app->get('/user/update/:id/:nama/:username/:password', 'updateUser');
	$app->get('/user/update/:id/:nama/:username/', 'updateUser');

	/* ------- kendaraan ------- */
	$app->get('/kendaraan/show', 'getKendaraan');
	$app->get('/kendaraan/show/', 'getKendaraan');
	$app->get('/kendaraan/show/:id', 'getKendaraanId');
	$app->get('/kendaraan/create/:nopolisi/:namakendaraan/:tahunkendaraan/:biayasewa', 'addKendaraan');
	$app->get('/kendaraan/update/:id/:nopolisi/:namakendaraan/:tahunkendaraan/:biayasewa', 'updateKendaraan');
	$app->get('/kendaraan/delete/:id', 'deleteKendaraan');
	
	/* ------- pelanggan ------- */
	$app->get('/pelanggan/show', 'getPelanggan');
	$app->get('/pelanggan/show/', 'getPelanggan');
	$app->get('/pelanggan/show/:id', 'getPelangganId');
	$app->get('/pelanggan/create/:namapelanggan/:alamat/:notelp/:noidentitas', 'addPelanggan');
	$app->get('/pelanggan/update/:id/:namapelanggan/:alamat/:notelp/:noidentitas', 'updatePelanggan');
	$app->get('/pelanggan/delete/:id', 'deletePelanggan');

	/* ------- sewa ------- */
	$app->get('/sewa/show', 'getSewa');
	$app->get('/sewa/show/', 'getSewa');
	$app->get('/sewa/show/:id', 'getSewaId');
	$app->get('/sewa/update/:id', 'updateSewa');
	$app->get('/sewa/delete/:id', 'deleteSewa');
	$app->get('/sewa/create/:idpelanggan/:tanggalmulai/:tanggalakhir/:idkendaraan', 'addSewa');	
	$app->get('/sewa/kendaraan/', 'getSewaKendaraan');
	$app->get('/sewa/pelanggan/', 'getSewaPelanggan');


	/** 
	 * 	function list for User
	 * 	------------------------------------------------------------------------------
	 *  addUser($username, $password, $nama)
	 *  loginUser($username, $password)	
	 */

	function getUser() {
		$app = instanceApp();

		$data = User::orderBy('status', 'DESC')
						 ->orderBy('nama', 'ASC')
						 ->get();
					
		send_toJson($data, $app);
	}

	function getUserId($id) {
		$app = instanceApp();

		$data = User::find($id);

		($data) ? $data->toJson() : $data = '{}';
		
		$data = "[".$data."]";

		send_toJson($data, $app);
	}

	function addUser($username, $password, $nama) {
		$app = instanceApp();

		$m_user = new User;

		$data = $m_user->where('username', $username)->get();

		if($data->isEmpty()) {
			$m_user->username = $username;
			$m_user->password = $password;
			$m_user->nama = $nama;
			$m_user->status = '1';
			$m_user->save();
			
			$data = "1";
		} else {
			$data = "0";
		}

		send_toJson($data, $app);
	
	}

	function loginUser($username, $password) {
		$app = instanceApp();

		$m_user = new User;

		$data = $m_user->where([
				'username' => $username,
				'password' => $password
			])->get();
		
		// check available data
		if(!$data->isEmpty()){
			// check status data
			$data = $m_user->where([
				'username' => $username,
				'status' => '1'
			])->get();

			if (!$data->isEmpty()) {
				$data = "1";
			} else {
				$data = "2";
			}
		} else {
			$data = "0";
		}
		
		send_toJson($data, $app);
	}

	function deleteUser($id) {
		$app = instanceApp();

		$m_user = new User;
		$data = $m_user->where("id", $id)->exists();

		if ($data) {
			$m_user->find($id)->delete();
			$data = '1';
		} else {
			$data = '0';
		}

		send_toJson($data, $app);
	}

	function statusUser($id, $status){
		$app = instanceApp();

		$m_user = new User;
		$data = $m_user->where("id", $id)->exists();

		if ($data) {
			$m_user->where("id", $id)
						->update([
							'status' => $status
						]);
			$data = '1';
		} else {
			$data = '0';
		}
						
		send_toJson($data, $app);
	}

	function updateUser($id, $nama, $username, $password = null) {
		$app = instanceApp();

		$m_user = new User;
		$data = $m_user->where("id", $id)->exists();

		if ($data) {
			$m_user->where("id", $id)
						->update([
							'nama' => $nama,
							'username' => $username
						]);

			if($password != null) {
				$m_user->where("id", $id)
						->update(['password' => $password]);
			}

			$data = '1';
		} else {
			$data = '0';
		}
						
		send_toJson($data, $app);
	}

	/** 
	 *	function list for Kendaraan
	 *  ------------------------------------------------------------------------------
	 *	getKendaraan()
	 *	getKendaraan($id)
	 *  addKendaraan($nopolisi, $namakendaraan, $tahunkendaraan, $biayasewa)
	 *  updateKendaraan($id, $nopolisi, $namakendaraan, $tahunkendaraan, $biayasewa)
	 *	deleteKendaraan($id)
	 */

	function getKendaraan() {
		$app = instanceApp();

		$data = Kendaraan::orderBy('status', 'DESC')
						 ->orderBy('nama_kendaraan', 'ASC')
						 ->get();
					
		send_toJson($data, $app);
	}

	function getKendaraanId($id) {
		$app = instanceApp();

		$data = Kendaraan::find($id);
		($data) ? $data->toJson() : $data = '{}';
		
		$data = "[".$data."]";

		send_toJson($data, $app);
	}

	function addKendaraan($nopolisi, $namakendaraan, $tahunkendaraan, $biayasewa) {
		echo "Response From Server : \n";
		echo "No Polisi : ".$nopolisi."\n";
		echo "Nama Kendaraan : ".$namakendaraan."\n";
		echo "Tahun Kendaraan : ".$tahunkendaraan."\n";
		echo "Biaya Sewa : ".$biayasewa."\n";

		$m_kendaraan = new Kendaraan;
		$m_kendaraan->no_polisi = $nopolisi;
		$m_kendaraan->nama_kendaraan = $namakendaraan;
		$m_kendaraan->tahun_kendaraan = $tahunkendaraan;
		$m_kendaraan->biaya_sewa = $biayasewa;
		$m_kendaraan->status = "1";
		$data = $m_kendaraan->save();
	}

	function updateKendaraan($id, $nopolisi, $namakendaraan, $tahunkendaraan, $biayasewa) {
		$app = instanceApp();

		$m_kendaraan = new Kendaraan;
		$data = $m_kendaraan->where("id", $id)->exists();

		if ($data) {
			$m_kendaraan->where("id", $id)
						->update([
							'no_polisi' => $nopolisi,
							'nama_kendaraan' => $namakendaraan,
							'tahun_kendaraan' => $tahunkendaraan,
							'biaya_sewa' => $biayasewa
						]);
			$data = '1';
		} else {
			$data = '0';
		}
						
		send_toJson($data, $app);
	}

	function deleteKendaraan($id){
		$app = instanceApp();

		$m_kendaraan = new Kendaraan;
		$data = $m_kendaraan->where("id", $id)->exists();

		if ($data) {
			$m_kendaraan->find($id)->delete();
			$data = '1';
		} else {
			$data = '0';
		}

		send_toJson($data, $app);
	}

	/** 
	 *	function list for Pelanggan
	 *  ------------------------------------------------------------------------------
	 *	getPelanggan()
	 *	getPelanggan($id)
	 *  addPelanggan($namapelanggan, $alamat, $notelp, $noidentitas)
	 *  updatePelanggan($id, $namapelanggan, $alamat, $notelp, $noidentitas)
	 *	deletePelanggan($id)
	 */

	function getPelanggan() {
		$app = instanceApp();

		$data = Pelanggan::all()->toJson();
		
		send_toJson($data, $app);
	}

	function getPelangganId($id) {
		$app = instanceApp();

		$data = Pelanggan::find($id);
		($data) ? $data->toJson() : $data = '{}';
		
		$data = "[".$data."]";

		send_toJson($data, $app);
	}

	function addPelanggan($namapelanggan, $alamat, $notelp, $noidentitas) {
		echo "Response From Server : \n";
		echo "Nama Pelanggan : ".$namapelanggan."\n";
		echo "Alamat : ".$alamat."\n";
		echo "No Telepon : ".$notelp."\n";
		echo "No Identitas : ".$noidentitas."\n";

		$m_pelanggan = new Pelanggan;
		$m_pelanggan->nama_pelanggan = $namapelanggan;
		$m_pelanggan->alamat = $alamat;
		$m_pelanggan->no_telp = $notelp;
		$m_pelanggan->no_identitas = $noidentitas;
		$data = $m_pelanggan->save();
	}

	function updatePelanggan($id, $namapelanggan, $alamat, $notelp, $noidentitas) {
		$app = instanceApp();

		$m_pelanggan = new Pelanggan;
		$data = $m_pelanggan->where("id", $id)->exists();

		if ($data) {
			$m_pelanggan->where("id", $id)
						->update([
							'nama_pelanggan' => $namapelanggan,
							'alamat' => $alamat,
							'no_telp' => $notelp,
							'no_identitas' => $noidentitas
						]);
			$data = '1';
		} else {
			$data = '0';
		}
						
		send_toJson($data, $app);
	}

	function deletePelanggan($id){
		$app = instanceApp();

		$m_pelanggan = new Pelanggan;
		$data = $m_pelanggan->where("id", $id)->exists();

		if ($data) {
			$m_pelanggan->find($id)->delete();
			$data = '1';
		} else {
			$data = '0';
		}

		send_toJson($data, $app);
	}

	/** 
	 *	function list for Sewa
	 *  ------------------------------------------------------------------------------
	 *	getSewa()
	 *	getSewaId($id)
	 *	updateSewa($id)
	 * 	deleteSewa($id)
	 *	addSewa($idpelanggan, $tanggalmulai, $tanggalakhir, $idkendaraan)
	 *	getSewaKendaraan()
	 *	getSewaPelanggan()
	 */

	function getSewa() {
		$app = instanceApp();

		$data = Sewa::orderBy('status', 'ASC')
					->orderBy('tanggal_sewa', 'DESC')
					->get();
		
		send_toJson($data, $app);
	}

	function getSewaId($id) {
		$app = instanceApp();

		$data = Sewa::with(['pelanggan', 'kendaraan'])
					->where('id', $id)
					->get()->toJson();

		send_toJson($data, $app);
	}

	function updateSewa($id) {
		$app = instanceApp();

		$m_sewa = new Sewa;
		$m_kendaraan = new Kendaraan;

		$data = $m_sewa->find($id)->exists();
		
		if($data) {
			$m_sewa->where("id", $id)
					->update(["status" => "1"]);	
			
			$data = $m_sewa->select('id_kendaraan')
			   		   	   ->where("id", $id)
			   		       ->get();

			$idkendaraan = $data[0]['id_kendaraan'];
			
			$data = $m_kendaraan->where("id", $idkendaraan)
								->update(["status" => "1"]);
			$data = '1';
		} else {
			$data = '0';
		}
		
		send_toJson($data, $app);
	}

	function deleteSewa($id) {
		$app = instanceApp();

		$m_sewa = new Sewa;
		$m_kendaraan = new Kendaraan;

		$data = $m_sewa->find($id)->exists();

		if($data) {
			$data = $m_sewa->select('id_kendaraan')
			   		   	   ->where("id", $id)
			   		       ->get();

			$idkendaraan = $data[0]['id_kendaraan'];
			
			$data = $m_kendaraan->where("id", $idkendaraan)
								->update(["status" => "1"]);
			
			$data = $m_sewa->find($id)->delete();

			$data = '1';
		} else {
			$data = '0';
		}
		
		send_toJson($data, $app);
	}

	function addSewa($idpelanggan, $tanggalmulai, $tanggalakhir, $idkendaraan) {
		$m_sewa = new Sewa;
		$m_kendaraan = new Kendaraan;
		
		$m_sewa->id_pelanggan = $idpelanggan;
		$m_sewa->tanggal_mulai = $tanggalmulai;
		$m_sewa->tanggal_akhir = $tanggalakhir;
		$m_sewa->id_kendaraan = $idkendaraan;
		$m_sewa->status = "0";
		$data = $m_sewa->save();

		$m_kendaraan->where("id", $idkendaraan)
					->update(["status" => "0"]);
	}

	function getSewaKendaraan() {
		$app = instanceApp();

		$m_kendaraan = new Kendaraan;

		$data = $m_kendaraan->select('id')
					->where('status', '1')
					->get()
					->toJson();
		
		send_toJson($data, $app);
	}

	function getSewaPelanggan() {
		$app = instanceApp();

		$m_pelanggan = new Pelanggan;
		
		$data = $m_pelanggan->all('id')->toJson();
		
		send_toJson($data, $app);
	}

	/**
	 *	Additional Function
	 *  ------------------------------------------------------------------------------
	 */

	function instanceApp() {
		return $app = \Slim\Slim::getInstance();
	}

	function send_toJson($data, $app){
    	$app->contentType('application/json');
		echo $data;
	}

	$app->run();