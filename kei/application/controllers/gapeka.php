<?php
class Gapeka extends CI_Controller
{

    //load library, helper, dan model
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
    }

    //fungsi menampilkan data transport dan halaman
    public function index()
    {

        $this->load->view('v_header');
        $this->load->view('v_gapeka1');
    }
}
