<div class="form-group">
	<label for="fname">First Name</label>
	<input type="text" name="fname" value="<?php echo isset($data["fname"]) ? $data["fname"] : "";?>" class="form-control" id="fname" placeholder="First Name">
</div>
<div class="form-group">
	<label for="lname">Last Name</label>
	<input type="text" class="form-control"  value="<?php echo isset($data["lname"]) ? $data["lname"] : "";?>" id="lname" placeholder="Last Name">
</div>

<div class="form-group">
	<label for="bday">Birthday</label>
	<input type="text" class="form-control datepicker" id="bday" placeholder="Birthday"   name="bday" value="<?php echo isset($data["bday"]) ? $data["bday"] : "";?>" data-provide="datepicker">
</div>
<div class="form-group">
	<label for="gender">Gender</label>
	<select name="gender" class="form-control" id="gender">
		<option value="">Select Gender</option>
		<option value="male" <?php echo (isset($data["gender"]) && $data["gender"] == "male") ? " SELECTED " : ""?> >Male</option>
		<option value="female"  <?php echo (isset($data["gender"]) && $data["gender"] == "female") ? " SELECTED " : ""?> >Female</option>
	</select>
</div>
<div class="form-group">
	<label for="contact">Contact Number</label>
	<input type="text" class="form-control" id="contact"  name="contact" value="<?php echo isset($data["contact"]) ? $data["contact"] : "";?>"  placeholder="Contact Number">
</div>
<div class="form-group">
	<label for="contact">Email</label>
	<input type="email" class="form-control" id="email" placeholder="Email"  
	name="email" value="<?php echo isset($data["email"]) ? $data["email"] : "";?>" >
</div>
<div class="form-group">
	<label for="addr">Address</label>
	<textarea class="form-control" id="addr" name="addr" placeholder="Address"><?php echo isset($data["addr"]) ? $data["addr"] : "";?></textarea>
</div>