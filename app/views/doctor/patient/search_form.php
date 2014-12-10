<form id="search_patient_form" action="<?php echo URL::to("/")?>/doctor/patient/search" method="GET">
	<div class="input-group">
		<input type="text" placeHolder="Search Patient" value="<?php echo isset($_GET["search"]) ? $_GET["search"] : ""?>" name="search" id="patient_query" class="form-control">
		  <span class="input-group-btn">
			<button class="btn btn-default" name="patient_srch_btn" id="patient_srch_btn" type="submit"><i class="glyphicon glyphicon-search icon-search"></i>  Search</button>
		  </span>
	</div>
</form>