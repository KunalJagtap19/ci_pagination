<table class="table table-striped">
	<thead>
		<tr>
			<th id="firstname" onclick="searchFilter('', 'firstname');" data-id='asc'>Firstname <i class="fa fa-arrow-up" aria-hidden="true"></i></th>
			<th id="lastname" onclick="searchFilter('', 'lastname');" data-id='asc'>Lastname<i class="fa fa-arrow-up" aria-hidden="true"></i></th>
			<th id="exam" onclick="searchFilter('', 'exam');" data-id='asc'>Exam <i class="fa fa-arrow-up" aria-hidden="true"></i></th>
		</tr>
		</thead>
		<tbody>
			<?php 
			if(empty($all_users)){  echo "<tr><td colspan='3'>No Result Found</td></tr>";}
			foreach ($all_users as $key => $value) { ?>
			<tr>
				<td><?php echo $value['f_name']; ?></td>
				<td><?php echo $value['l_name']; ?></td>
				<td><?php echo $value['exam']; ?></td>
			</tr>
			<?php }?>
		</tbody>
</table>
<hr>
<?php echo $this->ajax_pagination->create_links(); ?>