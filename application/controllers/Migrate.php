<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class Migrate extends ReichminateController
class Migrate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library('migration');

        // $this->data['version'] = $this->migration->current();
        // $this->data['result'] = $result = $this->migration->current();

        if ($this->migration->current() === FALSE) {
            show_error($this->migration->error_string());
        }

        $this->view = false;
        $this->data['announcement_type'] = 'database_migrated';
		$this->load->view('controllers/main/announcement.php', $this->data);
    }

    public function reset()
    {
        $this->load->library('migration');
        $version = '';
        $this->data['version'] = $this->migration->version($version);

        $this->view = false;
        $this->data['announcement_type'] = 'database_reset';
		$this->load->view('controllers/main/announcement.php', $this->data);
    }
    
}