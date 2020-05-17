<?php 
require 'header.php';
?>
<!--  batas-->

<style type="text/css">
	img{
		transform: rotate(10deg);
	}
</style>		
<img src="assets/img/profile.png" alt="">
<h1>Belajar Jquery</h1>
	<div id="box1">Box 1</div>
<div id ="boxes_wrap">
	<div class="boxes">baris pertama</div>
	<div class="boxes">baris kedua</div>
	<div class="boxes">dua koma lima</div>
	<div class="boxes">baris ketiga</div>
 </div>
 <form>
 	<input type="text" id="inputText">
 	<input type="submit">
 </form>	

<script>
	$(document).ready(function(){
		// --- selection -----

		// $('h1').css('color','blue');
		// $('#box1').css('color','green');
		// $('.boxes').css('color','blue');

		// $('.boxes:first').css('color','red');
		// $('.boxes:last').css('color','aqua');
		// $('.boxes:eq(2)').css('color','red');

		// ------ event -------
		$('h1').click(function(){
			$('h1').css({
				'color':'red',
				'fontSize': '20px',
				'backgroundColor':'yellow'
			});
		});

		$('h1').mouseenter(function(){
			$('h1').css('color','yellow');
		});

		$('h1').mouseleave(function(){
			$('h1').css('color','green');
		});

		$('.boxes').mouseenter(function(){
			$(this).css('color','yellow');
		});
		// ----- get dan set nilai --------

		$('form').submit(function(){
			var tulisan = $('#inputText').val();
			$('h1').text( tulisan );

			event.preventDefault();
		});
		// ---- append prepend | after before
		$('#boxes_wrap').before('<div>Wakwau</div>')
		// ----- remove -----
		$('#boxes_wrap').remove();
	});
</script>

<!-- batas -->
<?php 
require 'footer.php';
?>

