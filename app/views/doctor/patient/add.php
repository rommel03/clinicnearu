<div class="row">
	<div class="col-sm-6 col-xs-offset-3"><?php echo VIEW::make("doctor.patient.search_form");?></div>
	<div class="col-sm-6 col-sm-offset-3">
		<div  id="add_patient_panel" class="panel panel-default">
		  <div class="panel-heading"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Add Patient Form</div>
			<form id="add_patient" >
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<?php echo VIEW::make("doctor.patient.add_form_input");?>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>