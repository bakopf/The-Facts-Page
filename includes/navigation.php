<script>
$(document).ready(function(){
    if(isMobile.any()) {
      $("#shaker").css("display", "block");
      $("#getfact").css("display", "none");
    } else {
      $("#shaker").css("display", "none");
      $("#getfact").css("display", "block");
    }
});

</script>
<div data-role="panel" id="myPanel" data-theme="a" data-display="push" data-position="left">
  <div data-role="controlgroup" data-corners="false">
    <h2>Menü</h2>
    <a href="index.php" data-role="button">Home</a>
    <a href="fact_page.php" style="display: none;" id="getfact" data-role="button">Get Fact</a>
    <a href="shake_fact.php" style="display: none;" id="shaker" data-role="button">Shake Fact</a>
    <a href="write_page.php" data-role="button">Send Fact</a>
    <a href="about.php" data-role="button">About</a>
    <a href="contact.php" data-role="button">Contact</a>
    <a href="impressum.php" data-role="button">Impressum</a>
  </div>
</div>

<div data-role="header">
 <h1><a href="index.php"><img  width="120" src="images/navigation/logo.png"></a></h1>
  <a id="bars-button" data-icon="bars" class="ui-btn-left" href="#myPanel">Menu</a>

</div>





