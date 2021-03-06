<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!-- BASICS -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>POPETeste</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/style.css">
		<!-- skin -->
		<link rel="stylesheet" href="skin/default.css">
    </head>


	<body>
		<section id="header" class="appear"></section>
		<section id="section-test1" class="section appear clearfix">
		<div class="container">
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">Teste - Parte 1</h2>
							<p>Por favor, complete com seus dados o questionário a seguir.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="cform" id="contact-form">
							<div id="sendmessage">
								 Sua mensagem foi enviada. Obrigado!
							</div>
							<form action="contact/contact.php" method="post" role="form" class="contactForm">
								<input type="hidden" name="cod" value="01">
							  <div class="form-group">
								<label for="name">Nome Completo</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="maxlen:4" data-msg="Por favor, digite seu nome" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
							 	<label for="age">Idade</label>
							  	<input type="number" size="6" name="age" min="0" max="99" value="21"><br>
							  </div>
							  <div class="form-group">
							  	<label for="sex">Sexo</label>
							  	<br>
							  	<input type="radio" name="sex" value="male" checked> Masculino
								<br>
								<input type="radio" name="sex" value="female"> Feminino
							  </div>
							  <div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor, digite um email válido" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
							  	<label for="education">Nível de Escolaridade</label>
							  	<br>
							  	<input type="radio" name="education" value="fundamental-incompleto" checked> Ensino Fundamental Incompleto
								<br>
								<input type="radio" name="education" value="fundamental-completo"> Ensino Fundamental Completo
								<br>
								<input type="radio" name="education" value="medio-incompleto"> Ensino Médio Incompleto
								<br>
								<input type="radio" name="education" value="medio-completo"> Ensino Médio Completo
								<br>
								<input type="radio" name="education" value="superior-incompleto"> Ensino Superior Incompleto
								<br>
								<input type="radio" name="education" value="superior-completo"> Ensino Superior Completo
								<br>
								<input type="radio" name="education" value="mestrado"> Mestrado
								<br>
								<input type="radio" name="education" value="doutorado"> Doutorado
								<br>
								<input type="radio" name="education" value="pos-doutorado"> Pós-doutorado
								<br>
							  </div>
							  <div class="form-group">
							  	<label for="if-graduation">Se Possui Ensino Superior</label>
							  	<br>
							  	<input type="radio" name="if-graduation" value="no-graduation" checked> Não Possuo Graduação
								<br>
								<input type="radio" name="if-graduation" value="in-languages"> Em Letras
								<br>
								<input type="radio" name="if-graduation" value="in-languages-port-esp"> Em Letras Português-Espanhol
								<br>
								<input type="radio" name="if-graduation" value="in-other"> Em Outras Áreas
								<br>
							  </div>
							  <div class="form-group">
							  	<label for="jon">Profissão</label>
								<input type="text" name="job" class="form-control" id="job" placeholder="Profissão" data-rule="maxlen:4" data-msg="Por favor, digite sua profissão" />
								<div class="validation"></div>
							  </div>
  							  <div class="form-group">
							  	<label for="how-long-do-you-study-spanish">Por Quanto Tempo Estudou Língua Espanhola?</label>
							  	<br>
							  	<input type="radio" name="how-long-do-you-study-spanish" value="6-months" checked> 6 meses
								<br>
								<input type="radio" name="how-long-do-you-study-spanish" value="1-year"> 1 ano
								<br>
								<input type="radio" name="how-long-do-you-study-spanish" value="2-year"> 2 anos
								<br>
								<input type="radio" name="how-long-do-you-study-spanish" value="3-year"> 3 anos
								<br>
								<input type="radio" name="how-long-do-you-study-spanish" value="4-year"> 4 anos
								<br>
								<input type="radio" name="how-long-do-you-study-spanish" value="5-year-or-more"> 5 anos ou mais
								<br>
							  </div>
							  <div class="form-group">
							  	<label for="spanish-school">Qual Instituição Você Cursou Língua Espanhola</label>
							  	<br>
							  	<input type="checkbox" name="spanish-school" value="language-college"> Faculdade de Letras
							  	<br>
							  	<input type="checkbox" name="spanish-school" value="free-classes"> Curso Livre de Idiomas
							  	<br>
							  	<input type="checkbox" name="spanish-school" value="other-class" onclick="if(this.checked){ document.getElementById('other-class-text').focus();}"> Em Outros Locais. Cite-o(s):&nbsp;&nbsp;&nbsp;
							  	<input type="name" id="other-class-text" size="50" name="other-class-text" />
							  	<br>
							  </div>
							  <div class="form-group">
							  	<label for="spanish-level">Você se Considera um Aluno de Espanhol em Nível</label>
							  	<br>
							  	<input type="radio" name="spanish-level" value="beginner" checked> Iniciante
								<br>
								<input type="radio" name="spanish-level" value="intermediate"> Intermediário
								<br>
								<input type="radio" name="spanish-level" value="advanced"> Avançado
								<br>
							  </div>
							  <div class="form-group">
							  	<label for="difficulty">Você Considera que Tem Mais Dificuldade:</label>
							  	<br>
							  	<input type="checkbox" name="difficulty" value="oral-production"> Produção Oral
							  	<br>
							  	<input type="checkbox" name="difficulty" value="written-production"> Produção Escrita
							  	<br>
							  	<input type="checkbox" name="difficulty" value="reading"> Leitura
							  	<br>
							  	<input type="checkbox" name="difficulty" value="listening"> Na Percepção Auditiva
							  	<br>
							  	<input type="checkbox" name="difficulty" value="no-problem"> Não Tenho Dificuldade
							  	<br>
							  </div>
							  <br>
							  <button type="submit" id="test1_bt" class="btn btn-theme pull-right">PROSSEGUIR</button>
							</form>

						</div>
					</div>
					<!-- ./span12 -->
				</div>

			</div>
		</section>


		<section id="footer" class="section footer">
		<!-- <div class="container">
			<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
				<div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
				</div>
			</div> -->

			<div class="row align-center copyright">
					<div class="col-sm-12"><p>Copyright &copy; 2014 Amoeba - by <a href="http://bootstraptaste.com">Bootstraptaste</a></p></div>
			</div>
		</div>

		</section>
		<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

		<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
	    <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/fancybox/jquery.fancybox.pack.js"></script>
		<script src="js/skrollr.min.js"></script>
		<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script src="js/jquery.localscroll-1.2.7-min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/validate.js"></script>

		<script type="text/javascript">
		  $('#test1_bt').click(function() {
		    	var win = window.open('teste2.html', '_self');
	  			win.focus();
		  });
		</script>

	</body>
