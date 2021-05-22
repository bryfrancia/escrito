<?php  validacionCampos();

        function validacionCampos(){
            if($_POST['nombre'] === "" || $_POST['apellido'] === "" || $_POST['telefono'] === "" || $_POST['fechaNacimiento'] === "" ||
            $_POST['edad'] === "" || $_POST['email'] === ""
            ) {
                echo "Complete todos los campos";
               
                }

                
    }













    