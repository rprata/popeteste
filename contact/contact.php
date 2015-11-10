<?php
// Start the session
session_start();

	error_reporting (E_ALL ^ E_NOTICE);

	$post = (!empty($_POST)) ? true : false;

	if($post){
		$cod = stripslashes($_POST['cod']);
		if($cod=='01'){
			$name = stripslashes($_POST['name']);
			$number = stripslashes($_POST['number']);
			$sex = stripslashes($_POST['sex']);
			$education = stripslashes($_POST['education']);
			$if_graduation = stripslashes($_POST['if-graduation']);
			$job = stripslashes($_POST['job']);
			$how_long_do_you_study_spanish = stripslashes($_POST['how-long-do-you-study-spanish']);
			$spanish_school = stripslashes($_POST['spanish-school']);
			$spanish_level = stripslashes($_POST['spanish-level']);
			$difficulty = stripslashes($_POST['difficulty']);
			$email = trim($_POST['email']);
			$subject = 'Questionário Parte 1';

			//salva na sessao
			$_SESSION["email"] = $email;

			$txt = " ------------------ \n\nAssunto: $subject\n\n Nome: $name\n\n Tel: $number\n\n Sexo: $sex\n\n Escolaridade: $education\n\n Graduado?:$if_graduation\n\n Profissão: $job\n\n Tempo de Estudo de espanhol: $how_long_do_you_study_spanish\n\n Cursou espanhol em: $spanish_school\n\n Nível de espanhol: $spanish_level\n\n Dificuldade: $difficulty\n\n Email: $email\n\n ------------------ ";

			$fileName = "files/".$_SESSION["email"]."popeteste-parte1.txt";
			$myfile = fopen($fileName, "w+");

			if (!$myfile) {
				echo "Error! Couldn't open the file.";
			} else {
				fwrite($myfile, $txt);
				fclose($myfile);
			}
		}
		else if($cod=='10'){
			$fileName = "files/".$_SESSION["email"]."popeteste-parte2.txt";
			$myfile = fopen($fileName, "w+");

			if (!$myfile) {
				echo "Error! Couldn't open the file.";
			} else {
				fwrite($myfile, $txt);
				fclose($myfile);
			}
		}
		else if($cod=='11'){
			$fileName = "files/".$_SESSION["email"]."popeteste-parte3.txt";
			$myfile = fopen($fileName, "w+");

			if (!$myfile) {
				echo "Error! Couldn't open the file.";
			} else {
				fwrite($myfile, $txt);
				fclose($myfile);
			}
		}
		else echo 'Não tente modificar os parâmetros do form. Seu IP foi identificado.';
	}
?>
