
<?php include ('header.php'); ?>
<?php include ('navbar.php'); ?>
<?php include ('connection/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="css/w3.css"> -->
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
	<script type="text/javascript">

		$(document).ready(function() {
			$('#send').on("click", function(){
				var value = $('#question').val();
				$.ajax({
					url: 'answer.php',
					data: {'question': value},
					type: 'post',
					success: function(res){
						$(".chat_bot_conserv").append('<li style = "text-shadow: 1px 1px #333;">'+ res +'</li><br>') ;
					}
				});
			});
		});

</script>
	<style type="text/css">
		body{
            background: url(images/eye6.jpg) no-repeat fixed center;
             background-size: 100% 100%;
             background-blend-mode: hard-light;
        }
		
		#container {
		  padding: 12px;
		  width: 800px;
		  height: 400px;
		  margin: 10px auto;
		  box-shadow: 4px 4px 10px 20px black;
		  position: relative;
		  color: black;
		  overflow-y: scroll;
		  background-size:contain;
		  background-color: white;
		}

		#controls {
		  width: 400px;
		  margin: 0px auto;
		  background-color: #90CAF9;
		  border-radius:5px; 
		  /*box-shadow: 4px 4px 2px #a8b2c1;*/
		  border-radius: 1px;
		  height: 120px;
		  margin-bottom: 20px;
		  margin-top: 50px;
		}

		textarea {
		  resize: none;
		  width: 400px;
		  float: left;
		  height: 50px;
		  font-family: arial-bold;
		  padding: 7px;
		  /*box-shadow: 4px 2px  10px black;*/
		  border: 0px;
		  font-size: 30px;
		  border-radius: 1px;
		  background-color: white;
		  color: black;
		}

		#send {
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  font-size: 13px;
		  margin: 5px 12px;
		  /*position: absolute;*/
		  float: right;
		  /*box-shadow: 4px 4px 2px #a8b2c1;*/
		  border-radius: 10px;

		}
		.chat_bot_conserv{
			list-style-type: none;
			display: block;
		}


	</style>
</head>
<body>
	<div class="container w3-teal" style="color: white; margin-top: 40px;">

      <h1 style="text-align: center; margin-bottom: 50px;">This Module Provides Answers to FAQ's</h1>
      <p style="text-align: center;">this are the instructions on how to work with the chat bot..</p>
      <p style="text-align: center;">bla bla bla bla bla ..........................</p>
      <p style="text-align: center;">give instructions on how the chatbot works.......... like to train using #question:answer</p>



      <h1 style="text-align: center; color: white; padding-top: 20px; margin-bottom: 30px;">Expert System Chatbot</h1>
			<div id="container">
				<div class="chat_bot">
					<ul class="chat_bot_conserv">
						
					</ul>
				</div>
			</div>
			<div id="controls">
				<div class="form-group" style="text-align: center;">
					<input type="text" class="form-control" name="question" id="question" placeholder="Type Here.........">	
				</div>
				<button id="send" style="float:right;" class="btn btn-lg w3-teal btn-primary w3-hover-black" name="send">Send</button>
		  	</div>	
	</div>
 	
		<?php 

			include('footer.php');

		 ?>


</body>
</html>



