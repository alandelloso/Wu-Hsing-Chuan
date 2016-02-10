$(document).on('ready', app);

function app() {

//Navigation Material Shaodw Effect on scroll
	$(window).scroll(function() {

    var height = $(window).scrollTop();
    var width = $(window).width();

    if(width > 1165 && height  > 175) {
         $('#mainnav').css({'box-shadow' :'rgba(0,0,0,0.5) 0 1px 5px'});
         $('.mainnav__list').css({'padding': '0 0 0 9rem'});
         $('.mainnav__logo').css({'top': '-38px'});
         $('.scroll-up').css({'bottom': '30%'})
         $('.scroll-up__line1').css({'transform': 'rotate(-45deg)'})
         $('.scroll-up__line2').css({'transform': 'rotate(45deg)'})
         $('.scroll-up__button').css({'padding': '25px'})
    } else if (width > 1165 && height  < 175) {
        $('#mainnav').css({'box-shadow' :'none'});
        $('.mainnav__logo').css({'top': '100px'});
        $('.mainnav__list').css({'padding': '0 0 0 1rem'});
        $('.scroll-up').css({'bottom': '-10%'})
        $('.scroll-up__line1').css({'transform': 'rotate(0deg)'})
        $('.scroll-up__line2').css({'transform': 'rotate(0deg)'})
        $('.scroll-up__button').css({'padding': '10px'})
    } 
});

//Events
$('#movile-menu').on('click', MovileMenu);
$('#menudarker').on('click', MovileMenu);

}

function MovileMenu() {

	if($('#mobilenav').hasClass('closed')){

		$('#mobilenav__menu__line-1').css({'transform': 'rotate(-45deg)',
			'width': '20px',});
		$('#mobilenav__menu__line-2').css({'transform': 'rotate(180deg)',
			'margin-left': '3px',});
		$('#mobilenav__menu__line-3').css({'transform': 'rotate(45deg)',
			'width': '20px',});

		$('#mobilelinks').css({'left': '0'});
		$('#menudarker').css({'display': 'block'});
		
		$('#mobilenav').removeClass('closed');
		$('#mobilenav').addClass('open');

	} else 

	if($('#mobilenav').hasClass('open')){

		$('#mobilenav__menu__line-1').css({'transform': 'rotate(0deg)',
			'width': '30px',});
		$('#mobilenav__menu__line-2').css({'transform': 'rotate(0deg)',
			'margin-left': '0px',});
		$('#mobilenav__menu__line-3').css({'transform': 'rotate(0deg)',
			'width': '30px',});

		$('#mobilelinks').css({'left': '-250px'});
		$('#menudarker').css({'display': 'none'});

		$('#mobilenav').removeClass('open');
		$('#mobilenav').addClass('closed');
	};
	
	
}