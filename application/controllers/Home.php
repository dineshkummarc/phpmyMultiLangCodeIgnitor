<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("home/index");
	}
	
	public function search() {

        $search_data = $_POST['search_data'];
        $query = $this->book->get_live_items($search_data);
        foreach ($query as $row):
            echo "<li><a href='".site_url()."books/single/$row->isbn'>" . $row->book_name . "</a></li>";

        endforeach;
    }
}
?>
