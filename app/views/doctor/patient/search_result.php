<div class="row">
<div class="col-sm-8">
	<!-- Modal -->
	<div class="modal fade" id="add_patient_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Add Patient Form</h4>
		  </div>
		  <div class="modal-body">
			<?php echo VIEW::make("doctor.patient.add_form_input");?>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
	<a class="btn btn-primary" data-toggle="modal" data-target="#add_patient_form" ><i class="glyphicon glyphicon-plus icon-plus"></i>  Add Patient</a>
</div>
<div class="col-sm-4" >
	<?php echo VIEW::make("doctor.patient.search_form");?>
</div>
</div>
<div class="row">
	<div class="col-sm-12">
	<div  id="my_patient_request_tbl" class="panel panel-default">
		  <div class="panel-heading"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search Result</div>
			<div class="table-responsive">
				<table class="table table-bordered table-striped"

				data-toggle="table" 
				data-show-header="false"
				data-pagination="true"
				data-side-pagination="server"
				data-page-list="[5, 10, 20, 50, 100, 200]"
				data-url="<?php echo URL::to("/")?>/doctor/ajax/search-patient?search=<?php echo isset($_GET["search"]) ? urlencode($_GET["search"]) : ""?>" 
				data-cache="false" data-height="299"
				id="search-result-tbl">
				<thead>
					<tr>
						<th data-field="counter" data-align="center" data-halign="center" class="col-sm-1">Patient's Name</th>
						<th data-field="name" class="col-sm-8">Patient's Name</th>
						<th data-field="action"  class="col-sm-3">Patient's Name</th>
					</tr>
				</thead>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function($){
		$("#search_patient_form").on("submit",function(e){
			e.preventDefault();
			$('#search-result-tbl').bootstrapTable("refresh",{url:"/doctor/ajax/search-patient?search="+$("#patient_query").val()});
		});
	});
</script>