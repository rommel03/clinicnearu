jQuery(document).ready(function($){

	/*patient page*/

	$("#my_patient_request_tbl .fixed-table-toolbar,#my_patient_today_tbl .fixed-table-toolbar").addClass("container-fluid");
	
	/*
	* Always check if class or object exists before calling it.
	* I intend not to load all js library for optimization 
	*/
	if(typeof($.fn.datepicker) != "undefined")
	{
		$.fn.datepicker.defaults.format = "mm/dd/yyyy";
	
		$('.datepicker').datepicker();
	}
	
	$("#my_patient_request_tbl .fixed-table-pagination").addClass("container-fluid");
	
	$("#medical-history .fixed-table-toolbar").addClass("container-fluid");
	$("#medical-history .fixed-table-toolbar .bars.pull-left").removeClass("pull-left").addClass("pull-right");
});