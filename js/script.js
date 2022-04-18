
<script>
    var picArr=new Array("fotos/fondo1.jpg","fotos/fondo2.jpg");
    var index=0;
    function next(){
        index++;
        if(index==picArr.length){
            index=0;
        }
        document.getElementById("pic").src=picArr[index];
    }
    function pre(){
        index--;
        if(index<0){
            index=picArr.length-1;
        }
        document.getElementById("pic").src=picArr[index];
    }
	
	function cita(){
	    window.location.href="cita.php"; 
	
	}
	
		function adminCita(){
	    window.location.href="adminCita.php"; 
	
	}
		function adminArticulo(){
	    window.location.href="adminArticulo.php"; 
	
	}
		function cancelarSesion(){
			<?php
			
				unset($_SESSION['login']);
			
			?>
			 window.location.href="index.php"; 
		}
	

</script>