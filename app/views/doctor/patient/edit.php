<div class="row">
	<div class="col-sm-6 col-xs-offset-3"><?php echo VIEW::make("doctor.patient.search_form");?></div>
	<div class="col-sm-6 col-sm-offset-3">
		<div  id="add_patient_panel" class="panel panel-default">
		  <div class="panel-heading"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Update Patient Information</div>
			<form id="add_patient" action="" method="POST" >
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<?php 
								$data = array("fname"=>"Rommel","lname"=>"Gutierrez","bday"=>"05/22/1989","email"=>"rommel.gutierrez@ymail.com",
								"gender" =>"male","contact"=>"+639487297250","addr"=>"Brgy. Stmo. Rosario <br> San Pablo City,<br> Laguna");
								echo VIEW::make("doctor.patient.add_form_input")
									->with(array("data"=>$data));
							;?>
							<button type="submit" class="btn btn-primary btn-m"><i class="glyphicon glyphicon-floppy-save icon-floppy-save"></i> SAVE</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>