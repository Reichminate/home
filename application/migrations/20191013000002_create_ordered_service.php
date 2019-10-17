<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Ordered_Service extends CI_Migration
{
    public function up()
    {
        if ( ! $this->db->table_exists('ordered_service')) {
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
                'lead_id' => [
                    'type'           => 'MEDIUMINT',
                    'constraint'     => 15,
                    'unsigned'       => true,
                    'null'           => false,
                ],
                'service_name' => [
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
            $this->dbforge->create_table('ordered_service', true);
        }
    }



    public function down()
    {
        $this->dbforge->drop_table('ordered_service', true);
    }
}