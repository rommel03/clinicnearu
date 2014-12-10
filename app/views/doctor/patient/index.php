<div class="row">
	<div class="col-sm-8">
		<a class="btn btn-primary" href="<?php echo URL::to("/")?>/doctor/patient/add" ><i class="glyphicon glyphicon-plus icon-plus"></i>  Add Patient</a>
	</div>
	<div class="col-sm-4" >
		<?php echo VIEW::make("doctor.patient.search_form");?>
	</div>
	<div class="col-sm-6">
	<!-- Patient Request -->
	<div id="custom-toolbar">
		<div class="form-inline" role="form">
			<div class="btn-group"> <a class="btn btn-default"><i class="glyphicon glyphicon-ok icon-ok"></i> Accept </a><a class="btn btn-default"><i class="glyphicon glyphicon-remove icon-remove"></i> Decline </a></div>
		</div>
	</div>
		<div  id="my_patient_request_tbl" class="panel panel-default">
		  <div class="panel-heading"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Patient Schedule Requests</div>
		<table 
			data-show-refresh="true" 
			data-show-columns="true" 
			data-toggle="table" 
			data-toolbar="#custom-toolbar" 
			data-sort-name="time" 
			data-sort-order="desc" 
			data-url="<?php echo URL::to("/")?>/doctor/ajax/get-patient-request" 
			data-cache="false" data-height="299">
			<colgroup>
				<col class="col-xs-1">
				<col class="col-xs-8">
				<col class="col-xs-3">
			</colgroup>
			<thead>
				<tr>
					<th data-field="id" data-checkbox="true"></th>
					<th data-field="name" >Patient's Name</th>
					<th data-field="time" data-sortable="true" >Time</th>
				</tr>
			</thead>
		</table>
		</div>
		<!--End of Patient schedule request-->
	</div>
	<div class="col-sm-6">
	<!-- My Patient Today-->
		<div  id="my_patient_today_tbl" class="panel panel-default">
		  <div class="panel-heading"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Patient For Today</div>
		<table 
			data-show-refresh="true" 
			data-show-toggle="true" 
			data-show-columns="true" 
			data-search="true" 
			data-toggle="table" 
			data-sort-name="time" 
			data-sort-order="desc" 
			data-url="<?php echo URL::to("/")?>/doctor/ajax/get-my-patient" 
			data-cache="false" data-height="299">
			<thead>
				<tr>
					<th data-field="id"> ID</th>
					<th data-field="name" >Patient's Name</th>
					<th data-field="time" data-sortable="true" >Time</th>
				</tr>
			</thead>
		</table>
		</div>
	</div>
</div>