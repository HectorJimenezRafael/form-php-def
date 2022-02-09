<?php
// index -> pantalla1
if (isset($_POST['index']) && strtolower($_POST['pokemon'])=='pikachu') {
    // creo la sesión por primera vez.
    session_start();
    $_SESSION['pantalla1']='check';

    header('Location: ../view/pantalla1.php');
} else if(isset($_POST['index'])){
    header('Location: ../index.php?msg=25');
}
// pantalla1 -> pantalla2
else if(isset($_POST['pantalla1']) && strtolower($_POST['pokemon'])=='charmander'){
    // sesión para la pantalla2, recuperar sesión
    session_start();
    $_SESSION['pantalla2']='check';
    header('Location: ../view/pantalla2.php');
} else if (isset($_POST['pantalla1'])){
    header('Location: ../view/pantalla1.php?msg=4');
}


?>