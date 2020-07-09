<html>
<body>
<form method="get" action="greet_user.php"> <!-- el action permite capturar la información en una página y redirigir hacia otra de acuerdo al nombre en el action-->

First Name:
<input type="text" name="first">
<br>
Last Name:
<input type="text" name="last">
<br>
<input type="submit" value="Submit">
</form>

<a href="index.php">Reset</a>
</body>

<!--The array keys in the PHP request superglobals are set by the name attributes in the HTML form, which need to be unique.
The action attribute is used to specify which file should handle data from the form request.-->
</html>