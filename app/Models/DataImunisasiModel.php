<?php

namespace App\Models;

use CodeIgniter\Model;

class DataImunisasiModel extends Model
{
    protected $table                = 'dataimunisasi';
	protected $primaryKey           = 'id_anak';
	protected $allowedFields        = ['nama_anak', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'jenis_imunisasi'];
	protected $useTimestamps        = true;

	public function getDataImunisasi($id_anak = false){
		if($id_anak == false) {
			return $this->findAll();
		}
		return $this->where(['id_anak' => $id_anak])->first();
	}
}
