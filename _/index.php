<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        
        <?php include("incs/meta.php"); ?>
        <meta name="description" content="A Artesandra (Arte em Tecnologia e Serviços de Informática) é uma empresa especializada em consultoria e, desde 2003, fornece soluções de integração às mais diversas áreas de atuação empresarial. Atua com grande, média e micro informática, venda e suporte técnico de equipamentos, softwares, redes, além de soluções de contingência e projetos de internet.">
        <meta name="keywords" content="artesandra, tecnologia, ti, informática, serviços, venda, suporte, técnico, softwares, internet, desenvolvimento, sites">
        <?php include("incs/css.php"); ?>
        <?php include("incs/analytics.php"); ?>

    </head>
    <body>

        <?php include("incs/ie.php"); ?>
        <div class="pre-con"></div>

        <div id="menu-mobile">
             <div class="icon-mobile close-btn">
                <span class="mb_item mb_02_01"></span>
                <span class="mb_item mb_02_02"></span>
            </div><!-- icon-mobile -->           
            <nav class="menu">
                <h2 class="hide">Navegação Mobile</h2>
                <ul>
                    <li class="link-ativo"><a data-name="home" href="#home">Home</a></li>  
                    <li><a data-name="sobre-nos" href="#sobre-nos">Sobre Nós</a></li> 
                    <li><a data-name="nossos-servicos" href="#nossos-servicos">Nossos Serviços</a></li>
                    <li><a data-name="contato" href="#contato">Contato</a></li>                 
                </ul>
            </nav>

        </div><!-- menu-mobile -->

        <div class="wrap">
                
        	<?php include("incs/header.php"); ?>
        	<?php include("incs/banner.php"); ?>
        	<?php include("incs/sobre-nos.php"); ?>
        	<?php include("incs/servicos.php"); ?>
        	<?php include("incs/contato.php"); ?>
            <?php include("incs/footer.php"); ?>

        </div><!-- wrap -->
        <?php include("incs/scripts.php"); ?>
    </body>
</html>