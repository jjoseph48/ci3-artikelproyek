<?php
// untuk setting website

class Setting extends CI_Controller
{
    // The __construct() function is a special PHP method called automatically 
    // when a controller class is instantiated. 
    // It is used to set up global variables, load libraries, 
    // or check user permissions for every method within that specific controller.
    
    //  You must call parent::__construct() to ensure the base CodeIgniter 
    // features are initialized.

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        if(!$this->auth_model->current_user()){
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['current_user'] = $this->auth_model->current_user();
        $this->load->view('admin/setting.php', $data);
    }
}
?>