<?php 
	if(isset($_GET["url"]))
	{
		switch ($_GET["url"]) {
			case 'Principal':
				# code...
				break;
			case 'Aulas_Manual':
				require_once("controllers/manual/aulas_manual_controller.php");
				break;

			case 'Docentes_Manual':
				require_once("controllers/manual/docentes_manual_controller.php");
				break;

			case 'Cursos_Manual':
				require_once("controllers/manual/cursos_manual_controller.php");
				break;

			case 'Modulo_Manual':
				require_once("controllers/manual/modulo_manual_controller.php");
				break;

			default:
				require_once("controllers/principal_controller.php");
				break;
		}
	}
	else{
		require_once("controllers/principal_controller.php");
	}
 ?>