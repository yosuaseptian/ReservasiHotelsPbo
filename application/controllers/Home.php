<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_pengunjung','m_pengunjung');
		$this->load->model('M_slider','m_slider');
		$this->load->model('M_tulisan','m_tulisan');
		$this->load->model('M_room','m_room');
        $this->m_pengunjung->count_visitor();
	}

	public function index(){
		$x['slider']=$this->m_slider->get_all_slider();
		$x['rooms']=$this->m_room->get_all_room_home();
		$x['blog']=$this->m_tulisan->get_blog_home();
		$this->load->view('frontend/home_view',$x);
		
	}

}
