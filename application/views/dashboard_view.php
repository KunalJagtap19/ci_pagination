		<div class="container">
			<h2>All User</h2>   
			<div class="topnav">
				<input id='keywords' type="text" placeholder="Search by Name or Exam..." onkeyup="searchFilter();">
			</div>
			<div id="dataList">
				  <table class="table table-striped">
				    <thead>
				      <tr>
				        <th id="firstname" onclick="searchFilter('', 'firstname');"  data-id='asc'>Firstname <i class="fa fa-arrow-up" aria-hidden="true"></i></th>
				        <th id="lastname" onclick="searchFilter('', 'lastname');"  data-id='asc'>Lastname <i class="fa fa-arrow-up" aria-hidden="true"></i></th>
				        <th id="exam" onclick="searchFilter('', 'exam');" data-id='asc'>Exam <i class="fa fa-arrow-up" aria-hidden="true"></i></th>
				      </tr>
				    </thead>
				    <tbody id="">
				    	<?php foreach ($all_users as $key => $value) {?>
							<tr>
					        	<td><?php echo $value['f_name']; ?></td>
					        	<td><?php echo $value['l_name']; ?></td>
					        	<td><?php echo $value['exam']; ?></td>
					      	</tr>
				    	<?php } ?>
				    </tbody>
				  </table>
				  <hr>
				  <?php echo $this->ajax_pagination->create_links(); ?>
			</div>
		</div>		
			
	</div>

<script>

function searchFilter(page_num, pa){

    page_num = page_num?page_num:0;

    var keywords = $('#keywords').val();
    var sortBy = 'asc';
    var sortCol = '';

    if (pa == 'firstname') {
    	sortBy = $('#firstname').data("id");
    	sortCol = 'f_name';
    }else if (pa == 'lastname') {
    	sortBy = $('#lastname').data("id");
    	sortCol = 'l_name';
    }else if(pa == 'exam'){
    	sortBy = $('#exam').data("id");
    	sortCol = 'exam';
    }

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('dashboard/ajaxPaginationData/'); ?>'+page_num,
        data:'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy+'&sortCol='+sortCol,

        success: function(html){
            $('#dataList').html(html);
            $('#keywords').val(keywords);

            // cloumn sorting
            if (sortBy) {
		    	if (sortBy == 'asc') {
		    		if (sortCol == 'f_name') {
		    			$('#firstname').attr('data-id', 'desc');
		    			$('#firstname').find('i').addClass('fa fa-arrow-down');
		    		}else if (sortCol == 'l_name') {
		    			$('#lastname').attr('data-id', 'desc');	
		    			$('#lastname').find('i').addClass('fa fa-arrow-down');
		    		}else if (sortCol== 'exam') {
		    			$('#exam').attr('data-id', 'desc');	
		    			$('#exam').find('i').addClass('fa fa-arrow-down');
		    		}
		    	}else{
		    		if (sortCol == 'f_name') {
		    			$('#firstname').attr('data-id', 'asc');	
		    		}else if (sortCol== 'l_name') {
		    			$('#lastname').attr('data-id', 'asc');	
		    		}else if (sortCol== 'exam') {
		    			$('#exam').attr('data-id', 'asc');	
		    		}
		    	}
		    }
        }
    });
}
</script>
</body>
</html>