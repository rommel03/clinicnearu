<?php

namespace Doctor;

use View;
use BaseController;
use URL;


Class PatientController extends BaseController{

	public $_layout = "doctor_default"; 
	
	function index()
	{
		$patient = View::make("doctor.patient.index");
		
		$header_js[] = "/js/bootstrap-datepicker.js";
		
		return View::make("layout.".$this->_layout)
			->with(array("content"=>$patient,"header_js"=>$header_js,
						 "css" => $this->css(), "footer_js" => $this->footer_js()));
	}
	
	function add()
	{
		$patient = View::make("doctor.patient.add");
		$header_js[] = "/js/bootstrap-datepicker.js";
		$css[] = "/css/datepicker3.css";
		$css[] = "/css/doctor/patient.css";
		return View::make("layout.".$this->_layout)
			->with(array("content"=>$patient,"css"=>$css, "header_js"=>$header_js,"footer_js" => $this->footer_js()));
	}
	
	function search()
	{
		
		$patient = View::make("doctor.patient.search_result");
		
		$header_js[] = "/js/bootstrap-datepicker.js";
		
		return View::make("layout.".$this->_layout)
			->with(array("content"=>$patient,"header_js"=>$header_js,"css" => $this->css(), "footer_js" => $this->footer_js()));
	}
	
	function view($id)
	{
		$patient = View::make("doctor.patient.view");
		
		return View::make("layout.".$this->_layout)
			->with(array("content"=>$patient, "css" => $this->css(), "footer_js" => $this->footer_js()));
	}
	
	function edit($id)
	{
		$patient = View::make("doctor.patient.edit");
		
		return View::make("layout.".$this->_layout)
			->with(array("content"=>$patient, "css" => $this->css(), "footer_js" => $this->footer_js()));
	}
	
	
	private function footer_js()
	{
		$_ = URL::to("/");
		return array($_."/js/doctor/patient.js");
	}
	
	private function css()
	{
		$_ = URL::to("/");
		return array($_."/css/datepicker3.css",$_."/css/doctor/patient.css");
	}
}