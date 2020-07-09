<html>
<body>
<form method="get">
Country:
<input type="text" name="country"> <!--el name permite definir el nombre del key dentro del arreglo asociativo-->
<br>
Language:
<input type="text" name="language">
<br>
<input type="submit" value="Submit">
</form>
<br>
<p>Your language is: <?=$_GET['language'];?></p> <!--tanto el country como el language pasan al arreglo asociativo $_GET. En esta parte del código llamo al que requiero-->
<p>Your country is: <?=$_GET['country'];?></p>
<a href="index.php">Reset</a>
</body>

<!--The array keys in the PHP request superglobals are set by the name attributes in the HTML form, which need to be unique.
The action attribute is used to specify which file should handle data from the form request.-->

</html>