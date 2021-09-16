
<?php

if($_SERVER["REQUEST_METHOD"] === "post"){
	header("Location: page2.html");
}

;?>



<div class="container">
	<form method="post" action="">
		<span>Name:</span><input type="text" name="username" class="textline" id="username" >
		<br>
		<span>E-Mail:</span><input type="text" name="email" class="textline" id="email">
		<br>
		<span>Reason for Contact:</span><select name="dropdown" id="dropdown">
			<option value="query">Query</option>
			<option value="complaint">Complaint</option>
			<option value="feedback">Feedback</option>
			<option value="other">Other</option>
		</select>
		<br>
		<span>Comment:</span> <textarea class="textline" id="comment"></textarea>
		<input type="submit" name="submit" value="Send">
	</form>
	
</div>