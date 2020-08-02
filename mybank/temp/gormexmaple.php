<!DOCTYPE html>
<html>
<head>
	<title>form example</title>
</head>
<body>
      <form action="server.php" method="POST">
      	<h1> Input Tag Type Text </h1>
      	<input type="Text" name="name" placeholder="name">
      	<input type="Text" name="name1" placeholder="this is disabled" disabled>
      	<input type="Text" name="name2" placeholder="this is already written" readonly>
      	<input type="Text" name="name3" placeholder="this is required" required>

		<h1> Input Tag Type password </h1>
      	<input type="password" name="password" placeholder="enter your password">

		<h1> Input Tag Type select</h1>
      	<select name="dragonball">
      		<option value="null" disabled selected>choose your fav character</option>
      		<option value="goku"> goku</option>
      		<option value="bulma"> bulma</option>
      		<option value="picollo"> picollo</option>
      		<option value="gohan"> gohan</option>
      		</select>


      	 <h1> Input Tag Type radio</h1>
      	 <br>
      	<input type="radio" name="gender" value="M">Male<br>
      	<input type="radio" name="gender" value="F">Female<br>

		<h1> Input Tag Type checkbox</h1>
		<br>
      	<input type="checkbox" name="book[]" value="AM1">AM1<br>
      	<input type="checkbox" name="book[]" value="AM2">AM2<br>
      	<input type="checkbox" name="book[]" value="AM3">AM3<br>
<br>
		
      	<input type="number" name="phone" maxlength="10" placeholder="enter number" required><br>
      	<input type="email" name="email"  placeholder="enter email" required><br>
      	<input type="submit" name="submit" value="submit">

		


      		

      	







     
      </form>
</body>
</html>