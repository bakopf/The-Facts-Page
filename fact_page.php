<?php
include('includes/header.php');
include('database/read_fact.php');

?>

    <div class="factName">
      <h1>Here is your awesome f4ct:</h1>
    </div>

    <div class="fact">
      <p><?php echo $fact['fact'];?></p>
    </div>
  <!-- Main content of the Pages -->
  

<?php
include('includes/footer.php');
?>
  