<div class="row">
	<div class="col-sm-8">
		<a class="btn btn-primary" href="<?php echo URL::to("/")?>/doctor/patient/add" ><i class="glyphicon glyphicon-plus icon-plus"></i>  Add Patient</a>
	</div>
	<div class="col-sm-4" >
		<?php echo VIEW::make("doctor.patient.search_form");?>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div  id="my_patient_request_tbl" class="panel panel-default">
		  <div class="panel-heading">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
			Patient Personal Information <a href="<?php echo URL::to("/")?>/doctor/patient/edit/15" class="pull-right btn btn-primary btn-xs"><i class="glyphicon glyphicon-pencil icon-pencil" aria-hidden="true"></i> EDIT</a>
		  </div>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<colgroup>
						<col class="col-xs-3">
						<col class="col-xs-9">
					</colgroup>
					<tr>
						<td class=" text-right">First Name</td>
						<td>Rommel</td>
					</tr>
					<tr>
						<td class=" text-right">Last Name</td>
						<td>Gutierrez</td>
					</tr>
					<tr>
						<td class=" text-right">Birthday</td>
						<td>May 22, 1989</td>
					</tr>
					<tr>
						<td class=" text-right">Email</td>
						<td>rommel.gutierrez@ymail.com</td>
					</tr>
					<tr>
						<td class=" text-right">Contact Number</td>
						<td>+639487297250</td>
					</tr>
					<tr>
						<td class=" text-right media-middle">Address</td>
						<td>Brgy Stmo. Rosario <br> San Pablo City,<br> Laguna</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="" id="history-toolbar">
			<div class="pull-right">
				<div class="input-group">
					<input type="text" class="form-control" id="search_visit" name="search_visit" value="" placeholder="Search Medical History">
					  <span class="input-group-btn">
						<button type="submit" id="search_visit" name="search_visit_btn" class="btn btn-default"><i class="glyphicon glyphicon-search icon-search"></i>  Search</button>
					  </span>
				</div>
			</div>
		</div>
		<div  id="my_patient_medical_history_tbl" class="panel panel-default">
		  <div class="panel-heading">
			<span class="glyphicon glyphicon-book icon-book" aria-hidden="true"></span> 
			Patient Medical History
		  </div>
		  <div id="medical-history" class="table-responsive">
			<table class="table table-bordered table-striped"
				data-toggle="table" 
				data-pagination="true"
				data-toolbar="#history-toolbar"
				data-side-pagination="server"
				data-page-list="[5, 10, 20, 50, 100, 200]"
				data-url="<?php echo URL::to("/")?>/doctor/ajax/patient-medical-history" 
				data-cache="false"
				data-height="283"
				id="search-result-tbl">
				<thead>
					<tr>
						<th data-field="date" data-align="center" data-halign="center" class="col-sm-1">Date</th>
						<th data-field="name" class="col-sm-8">Reason for Visit</th>
					</tr>
				</thead>
				</table>
		  </div>
		</div>
	</div>
</div>