$(function() {

	$(window).load(function(){

		new WOW().init();

		//banner
		$txt = 1;
		setInterval(function(){ 
			
			$txt++;
			$(".active").removeClass("active");
			$("#txt-0" + $txt).addClass("active");
			if($txt > 2){
				//volta a primeira div txt-01
				$txt = 0;
			}

		}, 5000);		

		//$(".se-pre-con").fadeOut("slow");

		//depois de 1s remover o pre-con*
		setTimeout(function(){ 
			$(".pre-con").hide();
		}, 1100);

		//navegacao do site
		var body  		= 	$("html, body"),
			top 		= 	$(window).scrollTop(),
			easing 		= 	"easeInOutQuad",
			duration 	=	'800';

		//clicando na logo
		$('#logo a').click(function(e){
			body.stop().animate({scrollTop: '0px' }, duration, easing, function(){});
			return false;
		});//click	

		//quando clicar no menu vai para a sessao escolhida
		$('nav a').click(function(e){

		  var 	div   	= $(this).attr("href"),
		    	sessao  = $(div).offset().top - 35, // 70 altura do menu
		    	id    	= $(this).attr("data-name");
			
			$('.link-ativo').removeClass('link-ativo');
			$(this).parent().addClass('link-ativo');
			body.stop().animate({scrollTop: sessao }, duration, easing, function(){

				if($(this).hasClass("open")){
					$(this).removeClass("open");
				}

			});  

		   	return false;

		});//click	

        //navegacao mobile
        $(".icon-mobile").click(function(){
            $('body').toggleClass("open");
        });

		//mascara telefone
		$('#fone').maskbrphone({  
		    useDdd           : true, // Define se o usuário deve digitar o DDD  
		    useDddParenthesis: true,  // Informa se o DDD deve estar entre parênteses  
		    dddSeparator     : ' ',   // Separador entre o DDD e o número do telefone  
		    numberSeparator  : '-'    // Caracter que separa o prefixo e o sufixo do telefone  
		});

		//validacao formulario

			$("#enviar").click(function(){

				//var dados = $(this).serialize();

				/*validacao nome*/
				if( $('#nome').val() === "" )
				{
					$("#obs").html("<p>* Preencha o campo nome corretamente!</p>").fadeIn('fast');
					$('#nome').focus();
					return false;
				} 
				
				/*validacao email */
				if($('#email').val() === "" || 	$('#email').val().indexOf('@') === -1 || $('#email').val().indexOf('.') === -1)
				{
					$("#obs").html("<p>* Preencha o campo email corretamente!</p>").fadeIn('fast');
					$('#email').focus();
					return false;
				}

				/*validacao assunto*/
				if( $('#assunto').val() === "" )
				{
					$("#obs").html("<p>* Preencha o campo setor corretamente!</p>").fadeIn('fast');
					$('#assunto').focus();
					return false;
				} 

				/*validacao msg*/
				if( $('#mensagem').val() === "")
				{
					$("#obs").html("<p>* Preencha o campo mensagem corretamente!</p>").fadeIn('fast');
					$('#mensagem').focus();
					return false;
				}

				//evita o resfresh: return false
				return true;

			});

	});//load

	$(window).scroll(function(){

		//posicao do scroll
		var posicao = $(window).scrollTop();

		if(posicao > 90){
			$('.wrap').addClass('scrolled');
		}else{
			$('.wrap').removeClass('scrolled');
		}

		//Navegacao menu

			var home		= $("#home").offset().top - 70,
				sobre		= $("#sobre-nos").offset().top - 70,
				servicos	= $("#nossos-servicos").offset().top - 70,
				contato		= $("#contato").offset().top - 70,
				sessao 		= '';

			if(posicao === home || posicao > home){
				sessao = 'home';
			}

			if(posicao > sobre){
				sessao = 'sobre-nos';
			}

			if(posicao > servicos){
				sessao = 'nossos-servicos';
			}

			if(posicao > contato){
				sessao = 'contato';
			}

			//removendo a classe ativa se houver
			if($('.link-ativo').hasClass('link-ativo')){
				$('.link-ativo').removeClass('link-ativo');
			}

			//adcionando a classe ativa a sessao atual
			$('nav a[data-name="' + sessao + '"]').parent().addClass('link-ativo');
			//e mudando o location hash da url		
			//location.hash = sessao;

		return false;
		
	});

});