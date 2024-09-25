<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class AddResume extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company' => [
                'type'       => 'VARCHAR',
                'constraint' => '125',
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '125',
            ],
            'tag' => [
                'type'       => 'VARCHAR',
                'constraint' => '125',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'uploads' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'date_from' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'date_to' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'deleted_at' => [
                'type'    => 'TIMESTAMP',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('resumes');
    }

    public function down()
    {
        $this->forge->dropTable('resumes');
    }
}
