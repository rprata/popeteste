<?php
	error_reporting (E_ALL ^ E_NOTICE);

	$post = (!empty($_POST)) ? true : false;

	if($post){
		$cod = stripslashes($_POST['cod']);
		
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

			$txt = " ------------------ \n\nAssunto:". $subject."\n\n";
			$txt.= "Nome: ".$name."\n\n ";
			$txt.= "Tel: ".$number."\n\n";
			$txt.= "Sexo: ".$sex."\n\n";
			$txt.= "Escolaridade: ".$education."\n\n";
			$txt.= "Graduado?:".$if_graduation."\n\n";
			$txt.= "Profissão: ".$job."\n\n";
			$txt.= "Tempo de Estudo de espanhol: ".$how_long_do_you_study_spanish."\n\n";
			$txt.= "Cursou espanhol em: ".$spanish_school."\n\n";
			$txt.= "Nível de espanhol: ".$spanish_level."\n\n";
			$txt.= "Dificuldade: ".$difficulty."\n\n";
			$txt.= "Email: ".$email."\n\n ------------------ ";

			$name = $string = preg_replace('/\s+/', '', $name);
			$fileName = "files/".$name."_1.txt";
			$myfile = fopen($fileName, "w+");

			if (!$myfile) {
				echo "Error! Couldn't open the file.";
			} else {
				fwrite($myfile, $txt);
				fclose($myfile);
			}
		/*
		else if($cod=='10'){
			$fileName = "files/".$name."parte2.txt";
			$myfile = fopen($fileName, "w+");

			if (!$myfile) {
				echo "Error! Couldn't open the file.";
			} else {
				fwrite($myfile, $txt);
				fclose($myfile);
			}
		}
		else if($cod=='11'){
			$fileName = "files/".$name."popeteste-parte3.txt";
			$myfile = fopen($fileName, "w+");

			if (!$myfile) {
				echo "Error! Couldn't open the file.";
			} else {
				fwrite($myfile, $txt);
				fclose($myfile);
			}
		}
		else echo 'Não tente modificar os parâmetros do form. Seu IP foi identificado.';
		*/
	}
	else{
		echo ("Erro!!");
	}
?>
