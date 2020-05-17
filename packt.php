<?php 
require 'header.php';
?>


<ul id="selected-plays">
  <li>Comedies
      <ul><li><a href="/asyoulikeit/">As You Like It</a></li>
            <li>All's Well That Ends Well</li>
                  <li>A Midsummer Night's Dream</li>
                        <li>Twelfth Night</li>
                            </ul></li>
   <li>Tragedies
       <ul><li><a href="hamlet.pdf">Hamlet</a></li>
           <li>Macbeth</li>      
           <li>Romeo and Juliet</li>    
       </ul></li>  
    <li>Histories
    	<ul>
       <li>Henry IV (<a href="mailto:henryiv@king.co.uk">email</a>)
       	<ul>
            <li>Part I</li>           
            <li>Part II</li> 
        </ul>
        <li><a href="http://www.shakespeare.co.uk/henryv.htm">Henry V</a></li>      
             <li>Richard II</li>
         </ul>
     </li>
 </ul>
<style type="text/css">
	.horizontal {  float: left;  list-style: none;  margin: 10px; }
</style>


<script type="text/javascript">
	$(document).ready(function() {  
	$('#selected-plays > li').addClass('horizontal'); }); 
</script>
<?php 
require 'footer.php';
?>
	