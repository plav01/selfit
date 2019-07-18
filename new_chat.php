<style type="text/css">
	
.form-container textarea
 {
  width:100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}
.form-container
 {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}
.form-container .btn 
{
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.form-container .cancel {
  background-color: red;
}

.form-container .btn:hover, .open-button:hover 
{
  opacity: 4;
}

.form-container .cancel 
 {
    background-color: red;
  }

 .chat-popup 
 {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
 
}
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 250px;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
		<button class="open-button" onclick="openform()">Want To Chat Click Here</button>
		<div class="chat-popup" id="myForm">
		<form method="post" action="new_chat_submit.php" class="form-container" align="center">
			<label ><b><u>Go Green IT Hub</u></b></label>
			<input type="hidden" name="email"></input>
			<textarea name="msg" placeholder="type msg" required></textarea><br>
            <button type="submit" name="submit" class="btn" required>Send</button>
            <button type="button" class="btn cancel" onclick="closeform()">Close</button>
	   	</form>
	</div>
	<script>
		function openform() 
		{
         document.getElementById("myForm").style.display = "block";
        }

		function closeform() 
		{
		  document.getElementById("myForm").style.display = "none";
		}
	</script>

	

