	<div class="col-md-5 col-md-offset-4 ">
		<form action="#" method="post">
		  <div class="form-group">
		    <label for="name">First Name:</label>
		    <input type="text" name="f_name" class="form-control" id="f_name" value="<?php echo set_value('f_name'); ?>">
		  </div>
		  <div class="form-group">
		    <label for="name">Last Name:</label>
		    <input type="text" name="l_name" class="form-control" id="l_name" value="<?php echo set_value('l_name'); ?>">
		  </div>
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" name="email" class="form-control" id="email" value="<?php echo set_value('email'); ?>">
		  </div>
		  <div class="form-group">
		    <label for="exam">Exam Name:</label>
		    <input type="text" name="exam" class="form-control" id="exam" value="<?php echo set_value('exam'); ?>">
		  </div>

		  <button type="button" id="reg_form" class="btn btn-primary">Register</button>
		</form>
	</div>	
</div>
	
</body>

<script type="text/javascript">

$(document).ready(function() {

  $('#reg_form').click(function(e) {
    e.preventDefault();
    
    var f_name = $('#f_name').val();
    var l_name = $('#l_name').val();
    var email = $('#email').val();
    var exam = $('#exam').val();

    $(".error").remove();
    
    if(get_validate() == true ){
      $.ajax({
        url: '<?php echo base_url('register/store'); ?>',
        method: 'post',
        data: {f_name: f_name, l_name:l_name, email:email, exam:exam},
        dataType: 'json',

        success:function(data){
          swal("Done!","Succesfully Registered!","success");
          window.location.replace('<?php echo base_url('dashboard'); ?>');
        },
        error: function(error){
          console.log(error);
        }
      })
    }
    

  });

  function get_validate(){
    var first_name = $('#f_name').val();
    var last_name = $('#l_name').val();
    var email = $('#email').val();
    var exam = $('#exam').val();

    if (first_name.length < 1) {
      $('#f_name').after('<span class="error">This field is required</span>');
      return false;
    } 
    if (last_name.length < 1) {
      $('#l_name').after('<span class="error">This field is required</span>');
      return false;
    }
    if (email.length == 0) {
      $('#email').after('<span class="error">This field is required</span>');
      return false; 
    }
    if(email.length > 1) {
        var regEx = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          $('#email').after('<span class="error">Enter a valid email</span>');
          return false;
        }
    }

    if (exam.length < 1) {
      $('#exam').after('<span class="error">This field is required</span>');
      return false;
    }
    return true;
  }

});
</script>
</html>
