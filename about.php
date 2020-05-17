<?php 
require 'header.php';
?>

<!-- =============================================== -->
<main>
	<h2>HAlaman about</h2>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde at, magnam totam eligendi ex nulla suscipit earum nesciunt quas, blanditiis quaerat nam et provident labore animi doloremque accusamus voluptate. Quo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae quas fugit similique architecto culpa et maiores quod officiis illum optio harum perspiciatis dolore odit blanditiis, illo, cupiditate eum adipisci sunt? </p>

</main>
<!-- =============================================== -->


<?php
$end_time = microtime(TRUE);
$time_taken =($end_time - $start_time)*1000;
$time_taken = round($time_taken,5);
 
echo 'Page generated in '.$time_taken.' seconds.';
?>

<?php

require 'footer.php';
?>