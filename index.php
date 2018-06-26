<!DOCTYPE html>

<html lang="enctype">
	<head>
		<meta charset="UTF-8"/>
		<title> Javascript Fundamental </title>
		<link rel = "stylesheet" type="text/css" href="main.css">
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"> </script>
		<script>
			$(document).ready(function(){
			  $("#b1").click(function(){
				 $("#pera").hide();
			  });
			});
			
			$(document).ready(function(){
			  $("#b2").dblclick(function(){
				 $("#pera1").hide();
			  });
			});
			
			$(document).ready(function(){
			  $("#b3").mouseenter(function(){
				 $("#pera2").hide();
			  });
			});
			
			$(document).ready(function(){
			  $("#b4").mouseleave(function(){
				 $("#pera3").hide();
			  });
			});
			
		</script>
	</head>
	
	<body>
	
		<section class= "content">
			<div class="header">
				<h2><script> document.write("Javascript Practice") </script></h2>
			</div>
			
			<div class="maincontent">
				<h3>Hide Using click,dblclick,mouseenter,mouseleave</h3>
				<p id= "pera" > Start to learn javascript. </p>
				<button id="b1"> Hide </button>
				
				<p id= "pera1" > Start to learn javascript. </p>
				<button id="b2"> Hide1 </button>
				
				<p id= "pera2" > Start to learn javascript. </p>
				<button id="b3"> Hide2 </button>
				
				<p id= "pera3" > Start to learn javascript. </p>
				<button id="b4"> Hide3 </button>
				</br>
				
			</div>
			
			<div class="footer">
				<h3><script> document.write("@Team-twentyfive")</script></h3>
			</div>
			
		</section>
	</body>
	
</html>
