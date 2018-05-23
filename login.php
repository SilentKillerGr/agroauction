<!-- Login Form -->
<div id="modal-wrapper" class="modal">

  

  <form role="form" method="post" class="modal-content animate" action="pages/login_handle.php">

        

    <div class="imgcontainer">

      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>

      <h1 style="text-align:center">Σύνδεση Χρήστη</h1>

    </div>



    <div class="container">

      <input type="text" placeholder="Όνομα Χρήστη" name="uname">

      <input type="password" placeholder="Κωδικός Πρόσβασης" name="psw">        

      <button type="submit">Σύνδεση</button>    

      <!--<a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>-->

    </div>

    

  </form>

  

</div>

<!-- Sign Up form -->

<div id="modal-wrapper-s" class="modal">

  

  <form role="form" method="post" class="modal-content animate" action="pages/server.php">

        

    <div class="imgcontainer">

      <span onclick="document.getElementById('modal-wrapper-s').style.display='none'" class="close" title="Close PopUp">&times;</span>

      <h1 style="text-align:center">Εγγραφή Νέου Χρήστη</h1>

    </div>



    <div class="container">

      	<input type="text" placeholder="Όνομα Χρήστη" name="uname">
      	<input type="text" placeholder="E-Mail" name="mail">
		<input type="password" placeholder="Κωδικός Πρόσβασης" name="psw">
		<input type="text" placeholder="Όνομα" name="name">
		<input type="text" placeholder="Επώνυμο" name="surn">
		<input type="text" placeholder="Τηλέφωνο" name="phnum">
		<input type="text" placeholder="Διεύθυνση" name="addr">
		<input type="radio" name="utype" value="1" checked>Παραγωγός
      	<input type="radio" name="utype" value="2">Έμπορος        
		<button type="submit">Εγγραφή</button>

    </div>

    

  </form>

  

</div>



<script>

// If user clicks anywhere outside of the modal, Modal will close



var modal = document.getElementById('modal-wrapper');

var modals = document.getElementById('modal-wrapper-s');

window.onclick = function(event) {

    if (event.target == modal) {

        modal.style.display = "none";

    }

}



window.onclick = function(event) {

    if (event.target == modals) {

        modals.style.display = "none";

    }

}

</script>