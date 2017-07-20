<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <?php include("incs/meta.php"); ?>
        <meta name="robots" content="noindex">
        <?php include("incs/css.php"); ?>
    </head>

    <body>

        <?php include("incs/ie.php"); ?>
        <div class="se-pre-con"></div>
        <div class="wrap">
                
        	<?php include("incs/header.php"); ?>
            
            <section id="ok-error" class="pages">
                <div class="container">    
                    <div class="resultado erro">
                        <p><span class="erro">Erro</span> ao enviar o formulário!<br> Por favor, tente novamente!</p>  
                        <a href="index.php" class="back">Voltar</a>
                    </div> 
                </div><!-- container -->
            </section><!-- sobre-nos -->
        
        </div><!-- wrap -->
        <?php include("incs/scripts.php"); ?>
        <script type="text/javascript">
          //window.setTimeout("location.href='index.php';", 5000);
        </script>

    </body>
</html>