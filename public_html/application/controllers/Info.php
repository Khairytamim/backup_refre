<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Home_model');
    }
	public function aboutus()
	{
		$title['title']='About Us / cari dan buat gayamu';
		$info['banner']='SEVE';
		$info['seve']['0']='About Us';
		$info['seve']['1']='Terms and Conditions';
		$info['seve']['2']='User Agreement';
		$info['seve']['3']='Privacy Policy';
         	$info['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$info);
		$this->load->view('sidenav/sidenavinfo',$info);
		$this->load->view('info/aboutus');
		$this->load->view('footer/footerbar');
	}
		public function termsandconditions()
	{
		$title['title']='Terms and Conditions / cari dan buat gayamu';
		$info['banner']='SEVE';
		$info['seve']['0']='About Us';
		$info['seve']['1']='Terms and Conditions';
		$info['seve']['2']='User Agreement';
		$info['seve']['3']='Privacy Policy';
         	$info['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$info);
		$this->load->view('sidenav/sidenavinfo',$info);
		$this->load->view('info/termsandconditions');
		$this->load->view('footer/footerbar');
	}
		public function useragreement()
	{
		$title['title']='User Agreement / cari dan buat gayamu';
		$info['banner']='SEVE';
		$info['seve']['0']='About Us';
		$info['seve']['1']='Terms and Conditions';
		$info['seve']['2']='User Agreement';
		$info['seve']['3']='Privacy Policy';
         	$info['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$info);
		$this->load->view('sidenav/sidenavinfo',$info);
		$this->load->view('info/useragreement');
		$this->load->view('footer/footerbar');
	}
	
		public function privacypolicy()
	{
		$title['title']='Privacy Policy / cari dan buat gayamu';
		$info['banner']='SEVE';
		$info['seve']['0']='About Us';
		$info['seve']['1']='Terms and Conditions';
		$info['seve']['2']='User Agreement';
		$info['seve']['3']='Privacy Policy';
         	$info['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$info);
		$this->load->view('sidenav/sidenavinfo',$info);
		$this->load->view('info/privacypolicy');
		$this->load->view('footer/footerbar');
	}
		public function contactus()
	{
		$title['title']='Contact Us / cari dan buat gayamu';
		$info['banner']='HELP';
		$info['seve']['0']='Contact us';
		$info['seve']['1']='FAQs';
		$info['seve']['2']='Tutorial';
		$info['seve']['3']='';
         	$info['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$info);
		$this->load->view('sidenav/sidenavinfo',$info);
		$this->load->view('info/contactus');
		$this->load->view('footer/footerbar');
	}
		public function faqs()
	{
		$title['title']='FAQs / cari dan buat gayamu';
		$info['banner']='HELP';
		$info['seve']['0']='Contact us';
		$info['seve']['1']='FAQs';
		$info['seve']['2']='Tutorial';
		$info['seve']['3']='';
         	$info['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$info);
		$this->load->view('sidenav/sidenavinfo',$info);
		$this->load->view('info/faqs');
		$this->load->view('footer/footerbar');
	}
		public function tutorial()
	{
		$title['title']='Tutorial / cari dan buat gayamu';
		$info['banner']='HELP';
		$info['seve']['0']='Contact us';
		$info['seve']['1']='FAQs';
		$info['seve']['2']='Tutorial';
		$info['seve']['3']='';
         	$info['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$info);
		$this->load->view('sidenav/sidenavinfo',$info);
		$this->load->view('info/tutorial');
		$this->load->view('footer/footerbar');
	}
		public function discount()
	{
		$title['title']='Discounts / cari dan buat gayamu';
		$info['banner']='NEWSLETTER';
		$info['seve']['0']='Discount';
		$info['seve']['1']='Promo Code';
		$info['seve']['2']='';
		$info['seve']['3']='';
         	$info['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$info);
		$this->load->view('sidenav/sidenavinfo',$info);
		$this->load->view('info/discount');
		$this->load->view('footer/footerbar');
	}
		public function promocode()
	{
		$title['title']='Promo Code / cari dan buat gayamu';
		$info['banner']='NEWSLETTER';
		$info['seve']['0']='Discount';
		$info['seve']['1']='Promo Code';
		$info['seve']['2']='';
		$info['seve']['3']='';
         	$info['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$info);
		$this->load->view('sidenav/sidenavinfo',$info);
		$this->load->view('info/promocode');
		$this->load->view('footer/footerbar');
	}
}