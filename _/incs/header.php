<header id="site_header">
    <div class="container">

        <div class="box-header">

            <div id="logo">
            	<a href="index.php" title="ArteSandra">
            		<img src="imgs/artesandra.png" alt="ArteSandra - Arte em serviços de informática" border="0">
            	</a>
            </div><!-- logo -->

            <?php //só vai mostrar a navegacao se nao for as paginas ok e error.php ?>
            <?php if($url != "ok.php" && $url != "error.php"): ?>

            <div class="icon-mobile">
                <span class="mb_item mb_01"></span>
                <span class="mb_item mb_02_01"></span>
                <span class="mb_item mb_02_02"></span>
                <span class="mb_item mb_03"></span>
            </div><!-- icon-mobile -->

                <nav class="menu-mob">
                    <h2 class="hide">Navegação Principal</h2>
                    <ul>
                        <li><a data-name="contato" href="#contato">Contato</a></li>
                        <li><a data-name="nossos-servicos" href="#nossos-servicos">Nossos Serviços</a></li>
                        <li><a data-name="sobre-nos" href="#sobre-nos">Sobre Nós</a></li>
                        <li class="link-ativo"><a data-name="home" href="#home">Home</a></li>	                 
                    </ul>
                </nav>

            <?php endif; ?>
        	
        </div><!-- box-header -->

    </div><!-- container -->
</header><!-- /header -->