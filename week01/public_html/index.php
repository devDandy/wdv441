<?php 

$listOfNames = array("Dan", "Robert", "Sam", "Jeff", "Brogan", "Logan", "Jake", "Steven", "James", "Alfredo");

$randNumbThrough20 = rand(0,20);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Week One Assignment</title>
</head>
<body>
<?php if ($randNumbThrough20 < 10) 
	{
 		//If randNumbThrough20 is less than 10 
		//Display Hello $listOfNames[Number]
	?>
		<p>Hello <?php echo $listOfNames[$randNumbThrough20] ?></p>
<?php } else { ?>
	<?php foreach ($listOfNames as $name) 
	  	{
	?>
		<div class="nameFormat"><?php echo $name; ?></div>
	<?php } ?>
<?php } ?>





</body>
</html>