<?php

// Untuk halaman awal admin

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/dashboard.php');
    }
}

?>