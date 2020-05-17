<?php 
require 'header.php';
?>

<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

try {
	$dbh = new PDO("mysql:host=$hostname;dbname=yii2basic",$username,$password);
	$sql = "SELECT * FROM country";
?>
<div>
	<table class="table table-striped">
		<tr>
			<th>code</th>
			<th>name</th>
			<th>population</th>
		</tr>
		
		<?php foreach ($dbh->query($sql) as $row) { ?>
		<tr>
			<td><?= $row['code'] ?></td>
			<td><?= $row['name'] ?></td>
			<td><?= $row['population'] ?></td>

		<?php } ?>
	</tr>
	</table>
</div>
<?php	
	$dbh = null;
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>

<?php 
	require 'footer.php';
 ?>