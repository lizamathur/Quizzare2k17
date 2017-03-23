<html>
<head>
  <title> Register </title>
  <link href="qqstyle.css" rel='stylesheet'>
  <script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script src="sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
<link rel="stylesheet" type="text/css" href="styles/qqstyle.css">
</head>

<body>
  <nav>
      <ul>
          <a href="qqhome.php"><li>Home</li></a>
          <a href="qqregister.php"><li>Register</li></a>
          <a href="qqabout.php"><li>About Us</li></a>
      </ul>
  </nav>
  <div class='container'>
    <form action="" method="" id="registerForm">
      <label class="aa"><font size=6px>Team Details</font><br /></label>
      <input class="layout2" name="team" type="text" value="" placeholder="Team Name" id="teamName" required="Required"><br />

	  <label>Member 1<br /></label>
      <input class="layout1" name="name0" type="text" value="" placeholder="Name" required="Required">
      <select class="layout" name="dept0" required>
        <option value="" >Select Department</option>
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="IT">IT</option>
        <option value="ME">ME</option>
        <option value="EE">EE</option>
        <option value="AUE">AUE</option>
      </select>
      <select class="layout" name="year0" required>
        <option value="" >Select Year</option>
        <option value="1">1st</option>
        <option value="2">2nd</option>
        <option value="3">3rd</option>
        <option value="4">4th</option>
      </select>
      <input class="layout" name="roll0" type="text" value="" placeholder="Roll No." required="Required"><br />

	  <label>Member 2<br /></label>
      <input class="layout1" name="name1" type="text" value="" placeholder="Name" required="Required">
      <select class="layout" name="dept1" required>
        <option value="" >Select Department</option>
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="IT">IT</option>
        <option value="ME">ME</option>
        <option value="EE">EE</option>
        <option value="AUE">AUE</option>
      </select>
      <select class="layout" name="year1" required>
        <option value="" >Select Year</option>
        <option value="1">1st</option>
        <option value="2">2nd</option>
        <option value="3">3rd</option>
        <option value="4">4th</option>
      </select>
      <input class="layout" name="roll1" type="text" value="" placeholder="Roll No." required="Required"><br />
      <label>Member 3<br /></label>
      <input class="layout1" name="name2" type="text" value="" placeholder="Name" required="Required">
      <select class="layout" name="dept2" required>
        <option value="" >Select Department</option>
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="IT">IT</option>
        <option value="ME">ME</option>
        <option value="EE">EE</option>
        <option value="AUE">AUE</option>
      </select>
      <select class="layout" name="year2" required>
        <option value="" >Select Year</option>
        <option value="1">1st</option>
        <option value="2">2nd</option>
        <option value="3">3rd</option>
        <option value="4">4th</option>
      </select>
      <input class="layout" name="roll2" type="text" value="" placeholder="Roll No." required="Required"><br />

      <input class="centered" name="submit" id="submitButton" type="submit" value="Register">
    </form>
  </div>
</body>
<script type="text/javascript">
$( document ).ready(function() {
    $("#submitButton").prop('disabled',true);

    $(function() {
      $("#teamName").blur(function(e) {
			$.ajax({
			    type: 'POST',
			    url: 'teamCheck.php',
			    data: ({team:$("#teamName").val()}),
			    error:function(data){
					swal("Error");
				},
				success:function(data){
					  if(data==="fail")
						swal("Team Name already exists");
					  else
						$("#submitButton").prop('disabled',false);
				}
			});
			return false;
	  });
	});
	$(function () {

       $('#registerForm').on('submit', function (e) {

			 e.preventDefault();

			 $.ajax({
				   type: 'POST',
				   url: 'finalEntry.php',
				   data: $('#registerForm').serialize(),
				   success: function (data) {
						if(data==="success"){
							swal('Team successfully registered','See you at Quizzare 2k17');
							$("#registerForm")[0].reset();
						}
						else {
						  swal('Team member '+data+' is already a member of another team');
						}
				   }
			});

       });

    });

});
  </script>

</html>
