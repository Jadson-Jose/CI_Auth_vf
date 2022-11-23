<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        // Create users table
        $this->forge->addFiend([
            'id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],

            
        ]);
    }

    public function down()
    {
        // Reverse table creation
        $this->forge->dropTable('users');
    }
}
