<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends ReichminateModel{
    protected $_table = 'lead';
    protected $soft_delete = false;

    public function __construct()
	{
		parent::__construct();
	}

    public function get_posts($data = FALSE) {
        if ($data == FALSE) {
            $query = $this->db->get('post');
            return $query->result_array();
        }

        $query = $this->db->get('posts');
    }
}
