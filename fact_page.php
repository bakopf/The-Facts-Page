<?php
include('includes/header.php');
include('database/read_fact.php');
?>

 <div data-role="content">
 	  <a onclick="window.location.reload(true);" class="reload" data-role="button">new fact</a> 
      <h1>Here is your awesome f4ct:</h1>
   


      <p><?php echo $fact['fact'];?></p>

   </div>

<?php
include('includes/footer.php');
?>
  