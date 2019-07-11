<form action="<?=BASE_URL?>?controller=enquiries&action=insert_enquiry" method="post">
	<h1 class="text-center">Student enquiry</h1>
	
	<ul class="form-style-1">
		<li>
			<label>Name <span class="required">*</span></label>
			<input type="text" name="enquiry[name]" required pattern="[a-zA-Z ]+" title="Name should not contain numbers or special characters." />
		</li>

		<li>
			<label>Contact Number <span class="required">*</span></label>
			<input type="text" name="enquiry[contact_no]" required pattern="[0-9]{10}" title="Contact number should be 10 digits number only." />
		</li>

		<li>
			<label>Course <span class="required">*</span></label>
			<select type="text" name="enquiry[course]">
				<option>PHP</option>
				<option>ReactJS</option>
				<option>Angular</option>
				<option>JAVA</option>
				<option>C#</option>
			</select>
		</li>

		<li>
			<div class="g-recaptcha" data-sitekey="xxxx"></div>	<?// Put your site key here?>
		</li>

		<li>
			<input type="submit" value="Submit" />
		</li>
	</ul>
</form>