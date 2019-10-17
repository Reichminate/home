<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Lead extends CI_Migration
{
    public function up()
    {
        if ( ! $this->db->table_exists('lead')) {
            // Setup Keys
            $this->dbforge->add_key('id', true);

            $this->dbforge->add_field([
                'id' => [
                    'type'           => 'MEDIUMINT',
                    'constraint'     => 15,
                    'unsigned'       => true,
                    'null'           => false,
                    'auto_increment' => true
                ],
                'first_name' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 50,
                    'null'           => false
                ],
                'last_name' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 50,
                    'null'           => false
                ],
                'job_title' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 50,
                    'null'           => false
                ],
                'company_name' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 50,
                    'null'           => false
                ],
                'contact_number' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 50,
                    'null'           => false
                ],
                'email' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 50,
                    'null'           => false
                ],
                'message' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 50,
                    'null'           => false
                ],
                'deleted' => [
                    'type'           => 'TINYINT',
                    'constraint'     => 1,
                    'unsigned'       => true,
                    'null'           => false,
                    'default'        => 0,
                ],
            ]);

            // create table
            $this->dbforge->create_table('lead', true);
        }
    }



    public function down()
    {
        $this->dbforge->drop_table('lead', true);
    }
}