<section id="contato" class="pages">
	
	<div class="container">
		
		<header class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="10" data-wow-delay="0s">
			<h2>Contato</h2>
			<h1>Contato</h1>
		</header><!-- /header -->
		
		<p class="wow fadeInUp" data-wow-duration=".5s" data-wow-offset="0" data-wow-delay=".3s">Preencha o formulário abaixo, e em breve entraremos em contato. Se preeferir entre em contato pelo telefone <a href="tel:81984607268">(81) 98460.7268</a>
</p>

		<form id="ajax_form" method="post" action="php/mail.php">

			<div id="obs"></div><!-- obs -->
			<div class="boxes">
				
				<fieldset class="wow fadeInUp" data-wow-duration=".8s" data-wow-offset="10" data-wow-delay=".8s">

					<label for="nome">
						<input id="nome" type="text" name="nome" placeholder="Nome" autocomplete="off" required>
					</label>

					<label for="email">
						<input id="email" type="email" name="email" placeholder="E-mail" autocomplete="off" required>
					</label>

					<label for="fone">
						<input id="fone" type="tel" name="fone" placeholder="(xx)xxxx-xxxx" autocomplete="off">
					</label>

				</fieldset>
				<fieldset class="wow fadeInUp" data-wow-duration=".8s" data-wow-offset="10" data-wow-delay="1.1s">

					<label for="assunto">
						<!-- <input id="assunto" type="text" name="assunto" placeholder="Assunto" autocomplete="off"> -->
						<select id="assunto" name="assunto" required>
							<option value="">Escolha o setor</option>
							<option value="contato">Contato</option>
							<option value="comercial">Comercial</option>
							</select><?php /* <option value="webmaster">Webmaster</option> */?>
						</select>
					</label>

					<label for="mensagem">
						<textarea id="mensagem" name="mensagem" placeholder="Mensagem" autocomplete="off" required></textarea>
					</label>

				</fieldset>

				<fieldset class="final wow fadeInUp" data-wow-duration=".8s" data-wow-offset="0" data-wow-delay="1.4s">
					<input id="enviar" type="submit" name="enviar" value=" Enviar ">
				</fieldset>	

			</div><!-- boxes -->

		</form><!-- formulario -->            			         			

	</div><!-- container -->

</section><!-- sobre-nos -->