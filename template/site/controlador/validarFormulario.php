<?php echo '<script type="text/javascript">
function validarPasswd() {
   
  var p1 = document.getElementById("pass").value;
  var p2 = document.getElementById("passConfirm").value;
   
  if (p1 != p2) {
   alert("Las contraseñas no coinciden");
   return false;
  } else {
   return true; 
  }
 }

function validarPasswdEdit() {
   
  var p1 = document.getElementById("pass").value;
  var p2 = document.getElementById("passConfirm").value;
   
  if(p1=="" && p2==""){
	return true;  
	}
  
  if (p1 != p2) {
   alert("Las contraseñas no coinciden");
   return false;
  } else {
   return true; 
  }
 }
</script>';
?>
