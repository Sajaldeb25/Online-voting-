<?php
    
	session_start();
	require('connection.php');
 $position1 = "President"; 
 $position2 = "Secratery"; 
 $position3 = "vice-president"; 
 $position4 = "Treasurer"; 
 $position5 = "Joint-secretary"; 
 $position6 = "Executive-member"; 
 
 $result1 = mysqli_query($link ,"SELECT * FROM candidate WHERE c_position='$position1'")
 or die(" There are no records at the moment ... \n"); 
 
  $result2 = mysqli_query($link ,"SELECT * FROM candidate WHERE c_position='$position2'")
 or die(" There are no records at the moment ... \n");
  $result3 = mysqli_query($link ,"SELECT * FROM candidate WHERE c_position='$position3'")
 or die(" There are no records at the moment ... \n");
  $result4 = mysqli_query($link ,"SELECT * FROM candidate WHERE c_position='$position4'")
 or die(" There are no records at the moment ... \n");
  $result5 = mysqli_query($link ,"SELECT * FROM candidate WHERE c_position='$position5'")
 or die(" There are no records at the moment ... \n");
  $result6 = mysqli_query($link ,"SELECT * FROM candidate WHERE c_position='$position6'")
 or die(" There are no records at the moment ... \n");
  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vote form page</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<style>
* {
  box-sizing: border-box;
}
body {
  background-color: #f1f1f1;
}
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}
h1 {
  text-align: center;  
}
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}
/* Hide all steps by default: */
.tab {
  display: none;
}
button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}
button:hover {
  opacity: 0.8;
}
#prevBtn {
  background-color: #bbbbbb;
}
/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
.step.active {
  opacity: 1;
}
/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

	

  </head>
  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/login.js"></script>
    
    <div class="container-fluid">
        <h1 style="text-align: center; font-weight: 700; font-size: 60px; ">Online Voting System</h1> <br>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-black sticky-top">
    <a class="navbar-brand"><img src="logo.jpg" style="height: 43px; width: 70px;" ></a>
   <ul class="navbar-nav " style="padding-left: 700px">
    
    <li class="nav-item">
      <a class="nav-link" href="homenext.php">Home</a>
    </li>   
       
    <li class="nav-item" style="padding-left: 14px">
        <a href="candidate.php" class="nav-link" >Candidates</a>
    </li>
	
	<li class="nav-item" style="padding-left: 14px">
        <a href="vote.php" class="nav-link" >Vote</a>
    </li>
	
	<li class="nav-item" style="padding-left: 14px">
        <a href="" class="nav-link" >Vote Result</a>
    </li>
	
	<li class="nav-item" style="padding-left: 14px">
        <a href="" class="nav-link" >About Us</a>
    </li>
	
    <li class="nav-item" style="padding-left: 14px">
        <a href="" class="nav-link" >Log Out</a>
    </li>
  </ul>
</nav>


<form id="regForm" action="submit.php" method="POST">
  <h1 style="color:#077a97  ;font-weight: 750" >Submit Your Vote</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><h3 style="color: #d1a00e; font-weight: 900" >President:</h3></br>
    <?php
				
					while ($row=mysqli_fetch_array($result1))
					{
						echo "<tr>";
						echo "<td>" . $row['name']."</td>";
						echo "<td><input type='radio' name='vote1' value='$row[name]'   /></td>";
						echo "</tr>";
					}
					mysqli_free_result($result1);
				
			
	?>
    
  </div>
  <div class="tab"> <h3 style="color: #d1a00e; font-weight: 900" >Secretary:</h3></br>
    <?php
				
					while ($row=mysqli_fetch_array($result2))
					{
						echo "<tr>";
						echo "<td>" . $row['name']."</td>";
						echo "<td><input type='radio' name='vote2' value='$row[name]'   /></td>";
						echo "</tr>";
					}
					mysqli_free_result($result2);
				
			
	?>
  </div>
  <div class="tab"> <h3 style="color: #d1a00e; font-weight: 900" >Vice President:</h3></br>
      <?php
				
					while ($row=mysqli_fetch_array($result3))
					{
						echo "<tr>";
						echo "<td>" . $row['name']."</td>";
						echo "<td><input type='radio' name='vote3' value='$row[name]'  /></td>";
						echo "</tr>";
					}
					mysqli_free_result($result3);
				
			
	?>
  </div>
  
  <div class="tab"> <h3 style="color: #d1a00e; font-weight: 900" >Treasurer:</h3></br>
  
	<?php
				
					while ($row=mysqli_fetch_array($result4))
					{
						echo "<tr>";
						echo "<td>" . $row['name']."</td>";
						echo "<td><input type='radio' name='vote4' value='$row[name]'   /></td>";
						echo "</tr>";
					}
					mysqli_free_result($result4);
				
			
	?>
  </div>
  
  <div class="tab"> <h3 style="color: #d1a00e; font-weight: 900" >Join Secretary:</h3></br>
      <?php
				
					while ($row=mysqli_fetch_array($result5))
					{
						echo "<tr>";
						echo "<td>" . $row['name']."</td>";
						echo "<td><input type='radio' name='vote5' value='$row[name]'    /></td>";
						echo "</tr>";
					}
					mysqli_free_result($result5);
				
			
	?>
  </div>
  
  <div class="tab"><h3 style="color: #d1a00e; font-weight: 900" >Executive Members:</h3></br>
  
	<?php
				
					while ($row=mysqli_fetch_array($result6))
					{
						echo "<tr>";
						echo "<td>" . $row['name']."</td>";
						echo "<td><input type='checkbox' name='check_list_sub[]' value='$row[name]'   /></td>";
						echo "</tr>";
					}
					mysqli_free_result($result6);
				
			
	?>
  </div>
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:60px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
	
    
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab
function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}
function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>



    
  </body>
</html>
