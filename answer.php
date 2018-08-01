<?php 
  require 'connection/db.php';
 
if (isset($_POST['question'])) {
	$value = $_POST['question'];
	
	$arr = str_split($value);
	if ($arr[0]=='#') {

		$input2 = $value;


		$ab = explode( ':', $input2 );
		$ques = ltrim($ab[0], '#');
		$ans = $ab[1];

		$awesome = "INSERT INTO chatbot (question, answer) VALUES ('$ques', '$ans')";
		$Absee = $conn->query($awesome);
   		$Absee = $Absee->fetch(PDO::FETCH_OBJ);
	}
	else{
	$great = "SELECT * from chatbot where question = '$value'";
	$Absee= $conn->query($great);
   	$Absee = $Absee->fetch(PDO::FETCH_OBJ);

	if ($Absee) {
		$answer = $Absee->answer ;
		echo '<div class= "container">
				<p  style= "width:60%;background:#BBDEFB;color:white;border-radius:5px;padding:10px;">'
					.$value.'
				<br>
				</p>'.
				'<p style= ";width:40%;background:black;color:white;border-radius:5px;padding:10px;margin-bottom:20px;margin-top:10px;">'.$answer.'<br>
				</p>
			</div>';
	
	}else{
		$reply = 'Not in db';
		echo '<div class= "container">
				<p  style= "width:60%;background:#BBDEFB;color:white;border-radius:5px;padding:10px;">'
					.$value.'
				<br>
				</p>'.
				'<p style= "float:;width:40%;background:#FF5722;color:white;border-radius:5px;padding:10px;margin-bottom:20px;margin-top:10px;">'.$reply.'<br>
				</p>
			</div>';
		
	}
		
	}
}



 ?>
 