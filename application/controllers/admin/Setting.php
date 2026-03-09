<?php
// untuk setting website

class Setting extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/setting.php');
    }
}
?>