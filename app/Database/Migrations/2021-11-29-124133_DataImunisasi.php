<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataImunisasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_anak'=>[
				'type'=> 'INT',
				'constraint'=> 10,
				'unsigned'=> true,
				'auto_increment'=> true
			],
			'nama_anak'=>[
				'type'=> 'VARCHAR',
				'constraint'=> 100,
			],
			'tempat_lahir' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'tanggal_lahir'=>[
				'type'=> 'VARCHAR',
				'constraint'=> 100,
            ],
            'jenis_kelamin'=>[
				'type'=> 'VARCHAR',
				'constraint'=> 100,
            ],
            'jenis_imunisasi'=>[
				'type'=> 'VARCHAR',
				'constraint'=> 100,
            ]
        ]);
		$this->forge->addKey('id_anak', true);
		$this->forge->createTable('dataimunisasi');
    }

    public function down()
    {
        $this->forge->dropTable('dataimunisasi');
    }
}
