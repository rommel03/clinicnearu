<?php

namespace doctor\Ajax;

use View;
use BaseController;
use URL;


Class PatientController extends BaseController{

	public function getMyPatient()
	{
		
		echo json_encode(array(array("id"=>1,"name"=>"Rommel","status"=>"Done","time"=>"09:00 AM","action" =>"<a class=\"quick_update_btn\" href=\"\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Update</a>"),array("id"=>2,"name"=>"Rommel2","status"=>"Waiting","time"=>"09:45 AM","action" =>"<a class=\"quick_update_btn\" href=\"\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Update</a>"),));
		exit;
	}
	
	public function getPatientRequest()
	{
		$patient[] = array("id" => 12, "name" => "Mag Pedro", "time" => "09:35 AM");
		$patient[] = array("id" => 13, "name" => "Mag Pedro", "time" => "09:35 AM");
		echo json_encode($patient);
		exit;
	}
	
	public function searchPatient()
	{
		$patient = array();
		
		if(!empty($_GET['search']) && $_GET['search'] != "" )
			{
				$action = "<div class=\"btn-group\"> <a href=\"".URL::to("/")."/doctor/patient/user/15\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-eye-open icon-eye-open\"></i> VIEW </a><a href=\"".URL::to("/")."/doctor/patient/edit/15\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-pencil icon-pencil\"></i> EDIT </a></div>";
				$patient[] = array("counter" => 1, "id" => 15, "name" => "<a href=\"".URL::to("/")."/doctor/patient/user/15\">".urldecode($_GET['search'])."</a>", "time" => "09:35 AM","action"=>$action);
			}
		echo json_encode(array("total"=>count($patient), "rows"=>$patient));
		exit;
	}
}