<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends Login {
	
	protected $activePage = null;
	
	
	function __construct(){
		parent::__construct();
		$this->lang->load('meta', $this->language);
		$this->lang->load('global', $this->language);
	}
	
	
	public function index(){
		$this->lang->load('website/home', $this->language);
		$this->loadpage("home", array("title"=> lang("title-home") , "description"=> lang("description-home"), "image"=> $this->getSEOImage("home")));
	}
	
	
	
	public function routepage($a = "", $b = null, $c = null){
		$b = !is_null($b) ? "/".$b : "";
		$c = !is_null($c) ? "/".$c : "";
		
		$dir = $a.$b.$c;
		
		if( !is_file( APPPATH . 'views/website/pages/' . $dir . ".php" ) ){ show_404(); }
		
		$currentPage = explode("/", $dir); 
		if( $b == "" ){
			$currentPage = $a;
		}
		else{
			$currentPage = $a."-".$currentPage[ count($currentPage) - 1 ];
		}
		
		// CHARGEMENT DU FICHIER LANGUE
		$this->lang->load('website/'.str_replace("-", "/", $currentPage), $this->language);
		
		// MARQUONS COMME ACTIVE
		$this->activePage = $a;
		
		// CHARGEMENT DE LA VUE.
		$this->loadpage("pages/".$dir, $this->meta($currentPage) );
	}
	

	
	private function meta($pageID){
		$metas = array("signup", "main", "twofactor", "password" ) ;

		if( array_search($pageID, $metas) > -1 ){
			$image = $this->getSEOImage($pageID);
			return array("title"=> lang("title-".$pageID), "description"=> lang("description-".$pageID), "image"=> $image);
		} else {
			return array("title"=> "", "description"=> "");
		}
	}
	
	
	
	private function getSEOImage($pageID = "home"){
		return is_file( FCPATH . 'public/assets/img/seo/preview-' . $pageID . '.jpg' ) ? 'preview-' . $pageID . '.jpg' : 'seo-main.jpg';
	}
	
	
	
	private function loadpage($pageDIR, $meta){
		$this->load->view("website/header/head", array("meta"=> $meta, "self"=> $this));
		//$this->load->view("website/header/header", array("active"=> $this->activePage, "self"=> $this));
		$this->load->view("website/header/afterheader", array("active"=> $this->activePage, "self"=> $this));
		
		$this->load->view("website/".$pageDIR, array("self"=> $this));
		
		$this->load->view("website/footer/footer", array("active"=> $this->activePage, "self"=> $this));
	}
	
	
	
	public function _include($content = null, $data = null, $langDIR = null){
		if( is_null($content) ) { return; }
		if( !is_file( APPPATH . 'views/website/include/' . $content . ".php" ) ){ return; }
		
		// CHARGEMENT DU FICHIER LANGUE
		$this->lang->load('website/include/'.$content, $this->language);
		
		$this->load->view("website/include/".$content, $data);
	}
	
	
	
	public function call($func = null, $b = null){
		return !is_null($b) ? $this->$func($b) : $this->$func();
	}
	
	
	private function sendmessage(){
		
		$this->recaptcha("/contact");
		
		$data = array("name"=> _name($this->input->post("name"), 16), 
			"email"=> $this->input->post("contact"), 
			"message"=> _textarea($this->input->post("message"), 500), 
			"topic"=> $this->input->post("topic"));
			
		$html = $this->email_template("contact_email", $data);
		
		$send = $this->sendmail($html, "New message from ".$data["name"], "info@maryfuneral.com");
		if( $send ){
			$this->alert->set("mail_sent", true);
		}
		redirect("/contact");
	}
	
	private function getquote(){
		
		$this->recaptcha("/quote");
		
		$data = array("concern"=>_name($this->input->post("concern"),10),
		"funeral"=> _name($this->input->post("funeral"),10),
		"death_name"=> _name($this->input->post("deathname"), 20),
		"death_first_name"=> _name($this->input->post("deathprename"), 45),
		"death_date"=> _textarea($this->input->post("deathdate"),40),
		"death_birth"=> _textarea($this->input->post("deathbirth"),40),
		"death_gender"=> $this->input->post("deathgender"),
		"name"=> _name($this->input->post("name"), 20),
		"first_name"=> _name($this->input->post("prename"), 45),
		"phone"=> $this->input->post("phone"),
		"email"=> $this->input->post("email"),
		"gender"=> $this->input->post("gender"),
		"dateof"=> now(),
		"quote_status"=> "false",
		"uid"=> $this->get_uid(),
		"message"=> _textarea($this->input->post("message"), 500));
		
		($data["concern"] == "funeral" || $data["concern"] == "insurance") ? : $this->alert->set("quote_error", true) ;
		($data["funeral"] == "vault" || $data["funeral"] == "ground") ? : $this->alert->set("quote_error", true)  ;
		($data["death_gender"] == "male" || $data["death_gender"] == "female") ? : $this->alert->set("quote_error", true)  ;
		($data["gender"] == "male" || $data["gender"] == "female") ?  : $this->alert->set("quote_error", true) ;
		
		$quoteID = $this->Base->insertData("quote",$data);
		($quoteID) ? $this->alert->set("quote_save", true) : $this->alert->set("quote_error", true) ; 
		
		redirect("/quote");
	}
	
	
	public function getcasket(){
		$data = $this->Base->get("casket");
		return $data ? $data : null;
	}
	
	public function getcasketimg($id,$uid){
		$data = $this->Base->getwhere("images", array("casket"=> $id ));
		return $data;
	}
	
	public function showimg(){
		$this->load->helper('upload');
		$dirfile = './public/assets/img/upload/'.urldecode($this->input->get("id"));
		$Images = new \Verot\Upload\Upload($dirfile);
		$Images->image_resize          = true;
		$Images->image_ratio_crop      = true;
		$Images->image_y               = $this->input->get("h");
		$Images->image_x               = $this->input->get("w");
		header('Content-type: ' . $Images->file_src_mime);
		echo $Images->process(); die;
	}
	
	public function gettestimonial(){
		$data = $this->Base->get("testimonial");
		return $data ? $data : null;
	}
 

	public function user($action = ""){
		if(is_null(_post('email')) || is_null(_post('password')) ){
			$action == 'signup' ? $this->error_redirect('error', "signup" ) : $this->error_redirect('error', "" );
		}elseif(filter_var(_post('email'), FILTER_VALIDATE_EMAIL)){
			$test = $this->Base->getthis('users', array('email'=>_post('email')));
			if(!$test || $action == 'signin'){
				if($this->validpassword(_post("password"))){
					$data = array("email"=> _post("email"), 
						"password"=> md5(_post("password")),
					);
				}else{$this->error_redirect('passwordError', 'signup' );}
				
			}else{$action == 'signup' ? $this->error_redirect('emailError', 'signup' ) : $this->error_redirect('error', '' ) ;}
		}else{$action == 'signup' ? $this->error_redirect('emailError', 'signup' ) : $this->error_redirect('error2', '' ) ;}

		if ($action == "signup") {
			if(is_null(_post('name')) || is_null(_post('consent'))){
				$this->error_redirect('error', "signup" );
			}else{
				$data["name"]= trim(_post("name")). " ". trim(_post("lastname"));
				$data["uid"]= $this->get_uid();
				$data["authentication"]= false;
				$data["online"]= false;
				$data["status"]= true;
				$data["dateof"]= now();
				$this->Base->insertdata("users", $data);
				$this->login($data['email'], $data['password']) ? $this->alert->set('success', true) : $this->error_redirect('error') ; 
			}
			
		}
		
		if ($action == "signin") {
			$this->login($data['email'], $data['password']) ? $this->alert->set('success', true)  : $this->error_redirect('error') ;
		}
	}

	public function logout(){
		$this->session->unset_userdata('user');
		redirect("/");
	}

	public function login($email, $password) {
		$this->session->unset_userdata('user');
		$user = $this->Base->getthis('users', array("email"=> $email, "password"=> $password));
		if ($user){
			$this->session->set_userdata( array("user"=> $user ) );
			$user = ( object) $this->session->userdata("user"); 
			$this->userinfo = ( object ) $this->session->userdata('user');
			$this->Base->updateData(array("lastseen"=> now()), array("id"=> $this->user->id), "users");
			redirect("/main");
			return true;
		}else {
			return false;
		}

	}

	public function error_redirect($error, $redirect = ''){
		$this->alert->set($error, true);
		$redirect = '' ? redirect("/") : redirect("/".$redirect);
	}

	public function validpassword($password) {
		if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $password))
			return FALSE;
		return TRUE;
	}











}