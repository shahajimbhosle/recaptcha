<a class="pure-button pure-button-primary" style="float: right;" href="<?=BASE_URL?>?controller=enquiries&action=create_enquiry">Add Enquiry</a>
<h1 class="text-center">Enquiries</h1>

<table class="pure-table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Course</th>
			<th>Contact Number</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach( $enquiries as $enquiry ):?>
			<tr>
				<td><?=$enquiry['id']?></td>
				<td><?=$enquiry['name']?></td>
				<td><?=$enquiry['course']?></td>
				<td><?=$enquiry['contact_no']?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>