<!-- Header -->
<header>
	<div class="container">
		<div class="slider-container">
			<div class="intro-text">
				<div class="intro-lead-in">Sejam bem-vindos à Agência Evoluir</div>
				<div class="intro-heading">É um prazer recebê-lo!</div>
				<a href="#about" class="page-scroll btn btn-xl">Saiba Mais</a>

			</div>
		</div>
	</div>
</header>
<section id="about" class="light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>SOBRE</h2>
					<p>Uma agência criativa que se destina a fazer você entrar no mundo
						do marketing e se tornar um futuro grande parceiro de negócios.
						Garantimos excelência em nossos serviços.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- about module -->
			<div class="col-md-3 text-center">
				<div class="mz-module-about">
					<i class="fa fa-briefcase ot-circle"></i>
					<h3>Desenvolvimento de Sites</h3>
					<p>Sites profissionais e personalizados garantindo um perfil real,
						sólido e qualitativo</p>
				</div>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-3 text-center">
				<div class="mz-module-about">
					<i class="fa fa-group ot-circle"></i>
					<h3>Marketing</h3>
					<p>Integração com as principais redes sociais da atualidade</p>
				</div>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-3 text-center">
				<div class="mz-module-about">
					<i class="fa fa-clock-o ot-circle"></i>
					<h3>Suporte</h3>
					<p>Consultoria especialista para eventuais problemas com o seu
						empreendimento</p>
				</div>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-3 text-center">
				<div class="mz-module-about">
					<i class="fa fa-id-card-o ot-circle"></i>
					<h3>Identidade</h3>
					<p>Você será o dono do seu próprio negócio</p>
				</div>
			</div>
			<!-- end about module -->
		</div>
	</div>
	<!-- /.container -->
</section>


<!-- <section class="overlay-dark bg-img1 dark-bg short-section"> -->
<!-- 	<div class="container text-center"> -->
<!-- 		<div class="row"> -->
<!-- 			<div class="col-md-offset-3 col-md-3 mb-sm-30"> -->
<!-- 				<div class="counter-item"> -->
<!-- 					<a class="page-scoll" href="#courses"> -->
<!-- 						<h6>Curso</h6> -->
<!-- 					</a> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="col-md-3 mb-sm-30"> -->
<!-- 				<div class="counter-item"> -->
<!-- 					<a class="page-scoll" href="#team"> -->
<!-- 						<h6>Equipe</h6> -->
<!-- 					</a> -->
<!-- 				</div> -->
<!-- 			</div> -->
			
<!-- 		</div> -->
		<!-- end about module -->
<!-- 	</div> -->
	<!-- /.container -->
<!-- </section> -->


<section id="courses" class="light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Cursos</h2>
					<p>Invista em você mesmo! Tenha acesso aos cursos mais completos da web! Seja o dono de um negócio lucrativo aprendendo com os melhores profissionais! </p>
				</div>
			</div>
		</div>
		<div class="row">
		
			<?php  
			if (!empty($courses)) {
			    foreach ($courses as $course) {
			        $course_id = "course_" . $course["course_id"]; 
			        ?>
			        <!-- start loop course item -->
			<div class="col-md-4">
				<div class="ot-portfolio-item">
					<figure class="effect-bubba">
						<img src="<?=base_url() . $course["course_img"]?>" alt="img02" class="img-responsive avatar img-thumbnail center-block" />
						<figcaption>
							<a href="#" data-toggle="modal" data-target="#<?=$course_id?>">Ver Mais</a>
							<p><?=$course["course_name"]?></p>
						</figcaption>
					</figure>
				</div>
			</div>
			
			<!-- start modal for course -->
			<div class="modal fade" id="<?=$course_id?>" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="Modal-label-1"><?=$course["course_name"]?></h4>
					</div>
					
					<div class="modal-body">
						<img src="<?=base_url() . $course["course_img"]?>" alt="img01" class="img-responsive center-block" />
						<div class="modal-works"><span>Duração: <?=intval($course["course_duration"])?> h</span></div>
						<p><?=$course["course_description"]?></p>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		<!-- end modal for course -->
		<!-- end loop course item -->	
			    <?php } // END FOREACH
			} //END IF?>
		</div>
	</div>
	<!-- end container -->
</section>

<section id="team" class="light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Nossa Equipe</h2>
					<p>Nascida em um momento de dificuldade, em meio a pandêmia,
						conseguimos juntar os melhores profissionais em cada uma das áreas
						de atuação</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- team member item -->
						<?php  
			if (!empty($team)) {
			    foreach ($team as $member) {
			        $member_id = "member_" . $member["member_id"]; 
			        ?>
			<div class="col-md-3">
				<div class="team-item">
					<div class="team-image">
						<img src="<?=$member["member_photo"]?>" class="img-responsive avatar img-thumbnail" alt="author">
					</div>
					<div class="team-text">
						<h3><?=$member["member_name"]?></h3>
						<div class="team-position"><?=$member["member_description"] ?></div>
					</div>
				</div>
			</div>
			<!-- end team member item -->
					    <?php } // END FOREACH
			} //END IF?>
		</div>
	</div>
</section>
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Entre em contato</h2>
					<p>
						Caso você tenha alguma dúvida ou precise de ajuda!<br>Temos ótimas
						estratégias para alavancar as suas vendas e a divulgação de seus
						produtos ou serviços
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h3>Nosso Escritório</h3>
				<p>Av. Cristóvão Colombo 1000 / sala 500</p>
				<p>
					<i class="fa fa-phone"></i> +55 51 xxxx-xxxxx
				</p>
				<p>
					<i class="fa fa-envelope"></i> <a
						href="mailto:contato@evoluirmd.com.br">contato@evoluirmd.com.br</a>
				</p>
			</div>
			<div class="col-md-3">
				<h3>Nossos Horários</h3>
				<p>
					<i class="fa fa-clock-o"></i> <span class="day">Segunda a Sexta: </span><span>9h
						às 18h</span>
				</p>
				<p>
					<i class="fa fa-clock-o"></i> <span class="day">Aos Sábados: </span><span>9h
						às 12h</span>
				</p>
			</div>
			<div class="col-md-6">
				<form id="form-contact">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Seu Nome*"
									id="name" name="name">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control"
									placeholder="Seu E-mail*" id="email" name="email">
								<p class="help-block text-danger"></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" placeholder="Sua Mensagem*"
									id="message" name="message"></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button id="btn_send_email" type="submit" class="btn btn-block">
								<i class="fa fa-send">&nbsp;&nbsp;</i>Enviar Mensagem
							</button>
							<span class="help-block"></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<p id="back-top">
	<a href="#top"><i class="fa fa-angle-up"></i></a>
</p>