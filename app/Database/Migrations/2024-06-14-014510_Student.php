<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'=>[
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name'=>[
                'type' => 'VARCHAR',
                'constraint' => '225'
            ],
            'email'=>[
                'type' => 'VARCHAR',
                'constraint' => '225'
            ],
            'gender'=>[
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'major'=>[
                'type' => 'VARCHAR',
                'constraint' => '225'
            ],
            'school'=>[
                'type' => 'VARCHAR',
                'constraint' => '225'
            ],
            'create_at timestamp default current_timestamp',
            'update_at timestamp default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('student_tb');
    }

    public function down()
    {
        //
        $this->forge->dropTable('student_tb');
    }
}
