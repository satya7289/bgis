
if (window.matchMedia('(min-width: 992px)').matches) {

/* Demo panel */

if(jQuery)(function($){$.minicolors={defaults:{animationSpeed:50,animationEasing:'swing',change:null,changeDelay:0,control:'hue',dataUris:true,defaultValue:'',hide:null,hideSpeed:100,inline:false,letterCase:'lowercase',opacity:false,position:'bottom left',show:null,showSpeed:100,theme:'default'}};$.extend($.fn,{minicolors:function(method,data){switch(method){case'destroy':$(this).each(function(){destroy($(this))});return $(this);case'hide':hide();return $(this);case'opacity':if(data===undefined){return $(this).attr('data-opacity')}else{$(this).each(function(){updateFromInput($(this).attr('data-opacity',data))})}return $(this);case'rgbObject':return rgbObject($(this),method==='rgbaObject');case'rgbString':case'rgbaString':return rgbString($(this),method==='rgbaString');case'settings':if(data===undefined){return $(this).data('minicolors-settings')}else{$(this).each(function(){var settings=$(this).data('minicolors-settings')||{};destroy($(this));$(this).minicolors($.extend(true,settings,data))})}return $(this);case'show':show($(this).eq(0));return $(this);case'value':if(data===undefined){return $(this).val()}else{$(this).each(function(){updateFromInput($(this).val(data))})}return $(this);default:if(method!=='create')data=method;$(this).each(function(){init($(this),data)});return $(this)}}});function init(input,settings){var minicolors=$('<div class="minicolors" />'),defaults=$.minicolors.defaults;if(input.data('minicolors-initialized'))return;settings=$.extend(true,{},defaults,settings);minicolors.addClass('minicolors-theme-'+settings.theme).toggleClass('minicolors-with-opacity',settings.opacity).toggleClass('minicolors-no-data-uris',settings.dataUris!==true);if(settings.position!==undefined){$.each(settings.position.split(' '),function(){minicolors.addClass('minicolors-position-'+this)})}input.addClass('minicolors-input').data('minicolors-initialized',false).data('minicolors-settings',settings).prop('size',7).wrap(minicolors).after('<div class="minicolors-panel minicolors-slider-'+settings.control+'">'+'<div class="minicolors-slider minicolors-sprite">'+'<div class="minicolors-picker"></div>'+'</div>'+'<div class="minicolors-opacity-slider minicolors-sprite">'+'<div class="minicolors-picker"></div>'+'</div>'+'<div class="minicolors-grid minicolors-sprite">'+'<div class="minicolors-grid-inner"></div>'+'<div class="minicolors-picker"><div></div></div>'+'</div>'+'</div>');if(!settings.inline){input.after('<span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color"></span></span>');input.next('.minicolors-swatch').on('click',function(event){event.preventDefault();input.focus()})}input.parent().find('.minicolors-panel').on('selectstart',function(){return false}).end();if(settings.inline)input.parent().addClass('minicolors-inline');updateFromInput(input,false);input.data('minicolors-initialized',true)}function destroy(input){var minicolors=input.parent();input.removeData('minicolors-initialized').removeData('minicolors-settings').removeProp('size').removeClass('minicolors-input');minicolors.before(input).remove()}function show(input){var minicolors=input.parent(),panel=minicolors.find('.minicolors-panel'),settings=input.data('minicolors-settings');if(!input.data('minicolors-initialized')||input.prop('disabled')||minicolors.hasClass('minicolors-inline')||minicolors.hasClass('minicolors-focus'))return;hide();minicolors.addClass('minicolors-focus');panel.stop(true,true).fadeIn(settings.showSpeed,function(){if(settings.show)settings.show.call(input.get(0))})}function hide(){$('.minicolors-focus').each(function(){var minicolors=$(this),input=minicolors.find('.minicolors-input'),panel=minicolors.find('.minicolors-panel'),settings=input.data('minicolors-settings');panel.fadeOut(settings.hideSpeed,function(){if(settings.hide)settings.hide.call(input.get(0));minicolors.removeClass('minicolors-focus')})})}function move(target,event,animate){var input=target.parents('.minicolors').find('.minicolors-input'),settings=input.data('minicolors-settings'),picker=target.find('[class$=-picker]'),offsetX=target.offset().left,offsetY=target.offset().top,x=Math.round(event.pageX-offsetX),y=Math.round(event.pageY-offsetY),duration=animate?settings.animationSpeed:0,wx,wy,r,phi;if(event.originalEvent.changedTouches){x=event.originalEvent.changedTouches[0].pageX-offsetX;y=event.originalEvent.changedTouches[0].pageY-offsetY}if(x<0)x=0;if(y<0)y=0;if(x>target.width())x=target.width();if(y>target.height())y=target.height();if(target.parent().is('.minicolors-slider-wheel')&&picker.parent().is('.minicolors-grid')){wx=75-x;wy=75-y;r=Math.sqrt(wx*wx+wy*wy);phi=Math.atan2(wy,wx);if(phi<0)phi+=Math.PI*2;if(r>75){r=75;x=75-(75*Math.cos(phi));y=75-(75*Math.sin(phi))}x=Math.round(x);y=Math.round(y)}if(target.is('.minicolors-grid')){picker.stop(true).animate({top:y+'px',left:x+'px'},duration,settings.animationEasing,function(){updateFromControl(input,target)})}else{picker.stop(true).animate({top:y+'px'},duration,settings.animationEasing,function(){updateFromControl(input,target)})}}function updateFromControl(input,target){function getCoords(picker,container){var left,top;if(!picker.length||!container)return null;left=picker.offset().left;top=picker.offset().top;return{x:left-container.offset().left+(picker.outerWidth()/2),y:top-container.offset().top+(picker.outerHeight()/2)}}var hue,saturation,brightness,x,y,r,phi,hex=input.val(),opacity=input.attr('data-opacity'),minicolors=input.parent(),settings=input.data('minicolors-settings'),swatch=minicolors.find('.minicolors-swatch'),grid=minicolors.find('.minicolors-grid'),slider=minicolors.find('.minicolors-slider'),opacitySlider=minicolors.find('.minicolors-opacity-slider'),gridPicker=grid.find('[class$=-picker]'),sliderPicker=slider.find('[class$=-picker]'),opacityPicker=opacitySlider.find('[class$=-picker]'),gridPos=getCoords(gridPicker,grid),sliderPos=getCoords(sliderPicker,slider),opacityPos=getCoords(opacityPicker,opacitySlider);if(target.is('.minicolors-grid, .minicolors-slider')){switch(settings.control){case'wheel':x=(grid.width()/2)-gridPos.x;y=(grid.height()/2)-gridPos.y;r=Math.sqrt(x*x+y*y);phi=Math.atan2(y,x);if(phi<0)phi+=Math.PI*2;if(r>75){r=75;gridPos.x=69-(75*Math.cos(phi));gridPos.y=69-(75*Math.sin(phi))}saturation=keepWithin(r/0.75,0,100);hue=keepWithin(phi*180/Math.PI,0,360);brightness=keepWithin(100-Math.floor(sliderPos.y*(100/slider.height())),0,100);hex=hsb2hex({h:hue,s:saturation,b:brightness});slider.css('backgroundColor',hsb2hex({h:hue,s:saturation,b:100}));break;case'saturation':hue=keepWithin(parseInt(gridPos.x*(360/grid.width()),10),0,360);saturation=keepWithin(100-Math.floor(sliderPos.y*(100/slider.height())),0,100);brightness=keepWithin(100-Math.floor(gridPos.y*(100/grid.height())),0,100);hex=hsb2hex({h:hue,s:saturation,b:brightness});slider.css('backgroundColor',hsb2hex({h:hue,s:100,b:brightness}));minicolors.find('.minicolors-grid-inner').css('opacity',saturation/100);break;case'brightness':hue=keepWithin(parseInt(gridPos.x*(360/grid.width()),10),0,360);saturation=keepWithin(100-Math.floor(gridPos.y*(100/grid.height())),0,100);brightness=keepWithin(100-Math.floor(sliderPos.y*(100/slider.height())),0,100);hex=hsb2hex({h:hue,s:saturation,b:brightness});slider.css('backgroundColor',hsb2hex({h:hue,s:saturation,b:100}));minicolors.find('.minicolors-grid-inner').css('opacity',1-(brightness/100));break;default:hue=keepWithin(360-parseInt(sliderPos.y*(360/slider.height()),10),0,360);saturation=keepWithin(Math.floor(gridPos.x*(100/grid.width())),0,100);brightness=keepWithin(100-Math.floor(gridPos.y*(100/grid.height())),0,100);hex=hsb2hex({h:hue,s:saturation,b:brightness});grid.css('backgroundColor',hsb2hex({h:hue,s:100,b:100}));break}input.val(convertCase(hex,settings.letterCase))}if(target.is('.minicolors-opacity-slider')){if(settings.opacity){opacity=parseFloat(1-(opacityPos.y/opacitySlider.height())).toFixed(2)}else{opacity=1}if(settings.opacity)input.attr('data-opacity',opacity)}swatch.find('SPAN').css({backgroundColor:hex,opacity:opacity});doChange(input,hex,opacity)}function updateFromInput(input,preserveInputValue){var hex,hsb,opacity,x,y,r,phi,minicolors=input.parent(),settings=input.data('minicolors-settings'),swatch=minicolors.find('.minicolors-swatch'),grid=minicolors.find('.minicolors-grid'),slider=minicolors.find('.minicolors-slider'),opacitySlider=minicolors.find('.minicolors-opacity-slider'),gridPicker=grid.find('[class$=-picker]'),sliderPicker=slider.find('[class$=-picker]'),opacityPicker=opacitySlider.find('[class$=-picker]');hex=convertCase(parseHex(input.val(),true),settings.letterCase);if(!hex){hex=convertCase(parseHex(settings.defaultValue,true),settings.letterCase)}hsb=hex2hsb(hex);if(!preserveInputValue)input.val(hex);if(settings.opacity){opacity=input.attr('data-opacity')===''?1:keepWithin(parseFloat(input.attr('data-opacity')).toFixed(2),0,1);if(isNaN(opacity))opacity=1;input.attr('data-opacity',opacity);swatch.find('SPAN').css('opacity',opacity);y=keepWithin(opacitySlider.height()-(opacitySlider.height()*opacity),0,opacitySlider.height());opacityPicker.css('top',y+'px')}swatch.find('SPAN').css('backgroundColor',hex);switch(settings.control){case'wheel':r=keepWithin(Math.ceil(hsb.s*0.75),0,grid.height()/2);phi=hsb.h*Math.PI/180;x=keepWithin(75-Math.cos(phi)*r,0,grid.width());y=keepWithin(75-Math.sin(phi)*r,0,grid.height());gridPicker.css({top:y+'px',left:x+'px'});y=150-(hsb.b/(100/grid.height()));if(hex==='')y=0;sliderPicker.css('top',y+'px');slider.css('backgroundColor',hsb2hex({h:hsb.h,s:hsb.s,b:100}));break;case'saturation':x=keepWithin((5*hsb.h)/12,0,150);y=keepWithin(grid.height()-Math.ceil(hsb.b/(100/grid.height())),0,grid.height());gridPicker.css({top:y+'px',left:x+'px'});y=keepWithin(slider.height()-(hsb.s*(slider.height()/100)),0,slider.height());sliderPicker.css('top',y+'px');slider.css('backgroundColor',hsb2hex({h:hsb.h,s:100,b:hsb.b}));minicolors.find('.minicolors-grid-inner').css('opacity',hsb.s/100);break;case'brightness':x=keepWithin((5*hsb.h)/12,0,150);y=keepWithin(grid.height()-Math.ceil(hsb.s/(100/grid.height())),0,grid.height());gridPicker.css({top:y+'px',left:x+'px'});y=keepWithin(slider.height()-(hsb.b*(slider.height()/100)),0,slider.height());sliderPicker.css('top',y+'px');slider.css('backgroundColor',hsb2hex({h:hsb.h,s:hsb.s,b:100}));minicolors.find('.minicolors-grid-inner').css('opacity',1-(hsb.b/100));break;default:x=keepWithin(Math.ceil(hsb.s/(100/grid.width())),0,grid.width());y=keepWithin(grid.height()-Math.ceil(hsb.b/(100/grid.height())),0,grid.height());gridPicker.css({top:y+'px',left:x+'px'});y=keepWithin(slider.height()-(hsb.h/(360/slider.height())),0,slider.height());sliderPicker.css('top',y+'px');grid.css('backgroundColor',hsb2hex({h:hsb.h,s:100,b:100}));break}if(input.data('minicolors-initialized')){doChange(input,hex,opacity)}}function doChange(input,hex,opacity){var settings=input.data('minicolors-settings'),lastChange=input.data('minicolors-lastChange');if(!lastChange||lastChange.hex!==hex||lastChange.opacity!==opacity){input.data('minicolors-lastChange',{hex:hex,opacity:opacity});if(settings.change){if(settings.changeDelay){clearTimeout(input.data('minicolors-changeTimeout'));input.data('minicolors-changeTimeout',setTimeout(function(){settings.change.call(input.get(0),hex,opacity)},settings.changeDelay))}else{settings.change.call(input.get(0),hex,opacity)}}input.trigger('change').trigger('input')}}function rgbObject(input){var hex=parseHex($(input).val(),true),rgb=hex2rgb(hex),opacity=$(input).attr('data-opacity');if(!rgb)return null;if(opacity!==undefined)$.extend(rgb,{a:parseFloat(opacity)});return rgb}function rgbString(input,alpha){var hex=parseHex($(input).val(),true),rgb=hex2rgb(hex),opacity=$(input).attr('data-opacity');if(!rgb)return null;if(opacity===undefined)opacity=1;if(alpha){return'rgba('+rgb.r+', '+rgb.g+', '+rgb.b+', '+parseFloat(opacity)+')'}else{return'rgb('+rgb.r+', '+rgb.g+', '+rgb.b+')'}}function convertCase(string,letterCase){return letterCase==='uppercase'?string.toUpperCase():string.toLowerCase()}function parseHex(string,expand){string=string.replace(/[^A-F0-9]/ig,'');if(string.length!==3&&string.length!==6)return'';if(string.length===3&&expand){string=string[0]+string[0]+string[1]+string[1]+string[2]+string[2]}return'#'+string}function keepWithin(value,min,max){if(value<min)value=min;if(value>max)value=max;return value}function hsb2rgb(hsb){var rgb={};var h=Math.round(hsb.h);var s=Math.round(hsb.s*255/100);var v=Math.round(hsb.b*255/100);if(s===0){rgb.r=rgb.g=rgb.b=v}else{var t1=v;var t2=(255-s)*v/255;var t3=(t1-t2)*(h%60)/60;if(h===360)h=0;if(h<60){rgb.r=t1;rgb.b=t2;rgb.g=t2+t3}else if(h<120){rgb.g=t1;rgb.b=t2;rgb.r=t1-t3}else if(h<180){rgb.g=t1;rgb.r=t2;rgb.b=t2+t3}else if(h<240){rgb.b=t1;rgb.r=t2;rgb.g=t1-t3}else if(h<300){rgb.b=t1;rgb.g=t2;rgb.r=t2+t3}else if(h<360){rgb.r=t1;rgb.g=t2;rgb.b=t1-t3}else{rgb.r=0;rgb.g=0;rgb.b=0}}return{r:Math.round(rgb.r),g:Math.round(rgb.g),b:Math.round(rgb.b)}}function rgb2hex(rgb){var hex=[rgb.r.toString(16),rgb.g.toString(16),rgb.b.toString(16)];$.each(hex,function(nr,val){if(val.length===1)hex[nr]='0'+val});return'#'+hex.join('')}function hsb2hex(hsb){return rgb2hex(hsb2rgb(hsb))}function hex2hsb(hex){var hsb=rgb2hsb(hex2rgb(hex));if(hsb.s===0)hsb.h=360;return hsb}function rgb2hsb(rgb){var hsb={h:0,s:0,b:0};var min=Math.min(rgb.r,rgb.g,rgb.b);var max=Math.max(rgb.r,rgb.g,rgb.b);var delta=max-min;hsb.b=max;hsb.s=max!==0?255*delta/max:0;if(hsb.s!==0){if(rgb.r===max){hsb.h=(rgb.g-rgb.b)/delta}else if(rgb.g===max){hsb.h=2+(rgb.b-rgb.r)/delta}else{hsb.h=4+(rgb.r-rgb.g)/delta}}else{hsb.h=-1}hsb.h*=60;if(hsb.h<0){hsb.h+=360}hsb.s*=100/255;hsb.b*=100/255;return hsb}function hex2rgb(hex){hex=parseInt(((hex.indexOf('#')>-1)?hex.substring(1):hex),16);return{r:hex>>16,g:(hex&0x00FF00)>>8,b:(hex&0x0000FF)}}$(document).on('mousedown.minicolors touchstart.minicolors',function(event){if(!$(event.target).parents().add(event.target).hasClass('minicolors')){hide()}}).on('mousedown.minicolors touchstart.minicolors','.minicolors-grid, .minicolors-slider, .minicolors-opacity-slider',function(event){var target=$(this);event.preventDefault();$(document).data('minicolors-target',target);move(target,event,true)}).on('mousemove.minicolors touchmove.minicolors',function(event){var target=$(document).data('minicolors-target');if(target)move(target,event)}).on('mouseup.minicolors touchend.minicolors',function(){$(this).removeData('minicolors-target')}).on('mousedown.minicolors touchstart.minicolors','.minicolors-swatch',function(event){var input=$(this).parent().find('.minicolors-input');event.preventDefault();show(input)}).on('focus.minicolors','.minicolors-input',function(){var input=$(this);if(!input.data('minicolors-initialized'))return;show(input)}).on('blur.minicolors','.minicolors-input',function(){var input=$(this),settings=input.data('minicolors-settings');if(!input.data('minicolors-initialized'))return;input.val(parseHex(input.val(),true));if(input.val()==='')input.val(parseHex(settings.defaultValue,true));input.val(convertCase(input.val(),settings.letterCase))}).on('keydown.minicolors','.minicolors-input',function(event){var input=$(this);if(!input.data('minicolors-initialized'))return;switch(event.keyCode){case 9:hide();break;case 13:case 27:hide();input.blur();break}}).on('keyup.minicolors','.minicolors-input',function(){var input=$(this);if(!input.data('minicolors-initialized'))return;updateFromInput(input,true)}).on('paste.minicolors','.minicolors-input',function(){var input=$(this);if(!input.data('minicolors-initialized'))return;setTimeout(function(){updateFromInput(input,true)},1)})})(jQuery);



// ! important

var SITE_URL = '//demos.hogash.com/kallyas-template/';


function updateQueryStringParameter(uri, key, value) {

	var re = new RegExp("([?|&])" + key + "=.*?(&|#|$)", "i");

	if (uri.match(re)) {

		return uri.replace(re, '$1' + key + "=" + value + '$2');

	} else {

		var hash =  '';

		if( uri.indexOf('#') !== -1 ){

				hash = uri.replace(/.*#/, '#');

				uri = uri.replace(/#.*/, '');

				console.log('had tag');

		}

		var separator = uri.indexOf('?') !== -1 ? "&" : "?";    

		return uri + separator + key + "=" + value + hash;

	}

}



/*

 * OnLoad

 */

(function($){

	$(document).ready(function() {

		// // ENABLE HEADER STYLE CHANGING
		var header_style_option = $( '#dp_header_style' );
		if(header_style_option)
		{
			var _headers = {
				'header1' : 'components/headers/header-style1.php',
				'header2' : 'components/headers/header-style2.php',
				'header3' : 'components/headers/header-style3.php',
				'header4' : 'components/headers/header-style4.php',
				'header5' : 'components/headers/header-style5.php',
				'header6' : 'components/headers/header-style6.php',
				'header7' : 'components/headers/header-style7.php',
				'header8' : 'components/headers/header-style8.php',
				'header9' : 'components/headers/header-style9.php',
				'header10' : 'components/headers/header-style10.php',
				'header11' : 'components/headers/header-style11.php',
				'header12' : 'components/headers/header-style12.php',
			};

			var targetElement = $('#dp-js-header-helper'),

			getHeader = function( header )
			{
				if(header.length > 0)
				{
					$.ajax({
						'url' : SITE_URL+_headers[header],
						'cache': false,
						'async': true, 
						'method': 'GET'

					}).done(function(reply){
						$('#header').remove();
						$(reply).insertBefore(targetElement);
						document.getElementById('header').scrollIntoView();
					});
				}
			};

			header_style_option.change(function(){
				var value = $( this ).val();
				getHeader( value );
			});
		}


		// // ENABLE FOOTER STYLE CHANGING
		var footer_style_option = $( '#dp_footer_style' );
		if(footer_style_option)
		{
			var _footers = {
				'footer1' : 'components/footers/footer1.html',
				'footer2' : 'components/footers/footer2.html',
				'footer3' : 'components/footers/footer3.html',
				'footer4' : 'components/footers/footer4.html',
				'footer5' : 'components/footers/footer5.html',
				'footer6' : 'components/footers/footer6.html'
			};

			var targetElement2 = $('#dp-js-footer-helper'),

			getFooter = function( footer )
			{
				if(footer.length > 0)
				{
					$.ajax({
						'url' : SITE_URL+_footers[footer],
						'cache': false,
						'async': true, 
						'method': 'GET'

					}).done(function(reply){
						$('#footer').remove();
						$(reply).insertBefore(targetElement2);
						document.getElementById('footer').scrollIntoView();
					});
				}
			};

			footer_style_option.change(function(){
				var value = $( this ).val();
				getFooter( value );
			});
		}



		var $header = $('#header'),

			$body =	$('body');



		function doBgColor(elem, hex){

			$(elem).css('background-color',hex);

		}

		function doBodyTextColor(hex){

			$body.css('color',hex);

		}



		function convertHex(hex,opacity){

				hex = hex.replace('#','');

				r = parseInt(hex.substring(0,2), 16);

				g = parseInt(hex.substring(2,4), 16);

				b = parseInt(hex.substring(4,6), 16);



				result = 'rgba('+r+','+g+','+b+','+opacity/100+')';

				return result;

		}





		function doThemeColor(hex){

			var styleSheet = $('#template-colors');



			if( styleSheet.length == 0 ){

				$('<style id="template-colors">')

						.appendTo('head');

			}



			styleSheet.text(" a:hover,.cart-container > .widget_shopping_cart_content .checkout,.sc-infopop__btn,.m_title,.smallm_title,.circle_title,.zn_text_box-title--style1,.feature_box .title,.services_box--classic .services_box__title,.latest_posts.default-style .hoverBorder:hover h6,.latest_posts.style2 ul.posts .title,.recentwork_carousel--1 .recentwork_carousel__crsl-title,.acc--default-style .acc-tgg-button,.acc--style3 .acc-tgg-button:after,.screenshot-box .left-side h3.title,.vertical_tabs.kl-style-1 .tabbable .nav>li.active>a,.services_box_element .box .list li,.shop-latest .tabbable .nav li.active a,.product-list-item:hover .details h3,.product-category .product-list-item:hover h3,.eBlog .itemContainer:not(.featured-post) .post_details .catItemAuthor a,.theHoverBorder:hover,.text-custom,.text-custom-hover:hover,.statbox h4 , #bbpress-forums .bbp-topics li.bbp-body .bbp-topic-title > a,.ib2-text-color-light-theme .ib2-info-message:before,.tbk--color-theme.tbk-symbol--icon .tbk__icon,.pricing-table-element .plan-column .plan-title,.process_steps--style2 .process_steps__step-icon,.vertical_tabs.kl-style-2 .tabbable .nav>li>a:hover,.vertical_tabs.kl-style-2 .tabbable .nav>li.active>a [data-zn_icon]:before,.vertical_tabs.kl-style-2 .tabbable .nav>li>a:hover [data-zn_icon]:before,.services_box--boxed .services_box__fonticon,.services_box--boxed .services_box__list li,.woocommerce ul.product_list_widget li .star-rating,.woocommerce .woocommerce-product-rating .star-rating,body .static-content__infopop .sc-infopop__btn, .hg_accordion_element.style3 .th-accordion .acc-group > a, .grid-ibx__item:hover .grid-ibx__icon, .kl-iconbox__title, .full-portfolio .hg-portfolio-sortable #portfolio-nav li a:hover, .full-portfolio .hg-portfolio-sortable #portfolio-nav li.current a, ul.thumbs.style2 .appreciate::before, .product-list-item:hover .kw-details-title, .kl-store-page ul.products li.product .product-list-item:hover .kw-details-title, .kl-store.widget ul.product_list_widget li .star-rating, .testimonial_slider.quoter-style .testimonialbox .who strong, .hg_accordion_element.default-style .th-accordion .acc-group > button, .team-member .mmb-position, .kl-iconbox.stage:hover .kl-iconbox__icon, .priceListElement-itemPrice, .hg_accordion_element.style2 .th-accordion .acc-group > button, .fun-fact .fun-number, .site-header .kl-header-toptext a, .testimonial_slider__carousel-wrapper .testimonialbox .who strong, .image-boxes__carousel-wrapper .inner-slide:hover a {color: #"+hex+"; } .tcolor, .vertical_tabs .tabbable .nav>li.active>a, .vertical_tabs .tabbable .nav>li>a:hover, .vertical_tabs .tabbable .nav>li.active>a>span, .vertical_tabs .tabbable .nav>li>a:hover>span, .services_boxes_wgt li:hover .kl-icon, .works_carousel.stl-simple .inner-slide:hover a, .works_carousel.stl-simple .inner-slide a:hover, .orange, .blue, .works_carousel .cfs--navigation a:hover::before, .vertical_tabs .tabbable .nav>li>a.active, .vertical_tabs .tabbable .nav>li>a.active>span, .hg_accordion_element.style4 .th-accordion .acc-group a {color: #"+hex+" !important; } .tbg, .photo-wall .pw-item::after, .bg-default, .site-header .kl-cart-button .fas:after, .logo-container .logo-infocard .right-side, .hg_accordion_element.style5 .th-accordion a::before, .image-boxes__carousel-wrapper .inner-slide .imgprev, .hg_accordion_element.style4 > h3, .hg_accordion_element.style3 .th-accordion .acc-group a:before, .keywordbox.keywordbox-4 {background-color: #"+hex+" !important;} .acc--style4,#page-loading:after,.ib2-text-color-light-theme .ib2-info-message:before,.itemThumbnail .overlay__inner a:hover,.acc--style4 .acc-tgg-button .acc-icon, .btn-lined.lined-custom, .hg_accordion_element.style4 .th-accordion {border-color: #"+hex+"; } .btn-lined.lined-custom:hover {border-color: "+convertHex('#'+hex,70)+";} .acc--style3 .acc-tgg-button:hover,.acc--style3 .acc-tgg-button:hover:after,.acc--default-style .acc-tgg-button,.acc--style2 .acc-tgg-button,.acc--style3 .acc-tgg-button,.acc--style4 .acc-tgg-button, .btn-lined.lined-custom {color: #"+hex+" ; } .tabs_style5 > ul.nav > li.active > a, .wgt-title > span, .tabs_style5 > ul.nav > li > a.active {border-bottom: 2px solid #"+hex+"; } header.style1,header.style2 .site-logo a,header.style3 .site-logo a {border-top: 3px solid #"+hex+"; } .tabs_style1 > ul.nav > li.active > a, .tabs_style1 > ul.nav > li > a.active {box-shadow: inset 0 3px 0 #"+hex+"; } .main-nav > ul > li > a:before,.main-nav .zn_mega_container li a:not(.zn_mega_title):before,.social-icons.sc--normal li a:hover,.action_box,body .circlehover,body .kl-flex--classic .zn_general_carousel-arr:hover,body .kl-ioscaption--style1 .more:before,body .kl-ioscaption--style1 .more:after,body .kl-ioscaption--style2 .more,body .nivo-directionNav a:hover,body .th-wowslider a.ws_next:hover,body .th-wowslider a.ws_prev:hover,body .ca-more,body .title_circle,body .title_circle:before,body ul.links li a,.hg-portfolio-sortable #portfolio-nav li a:hover, .hg-portfolio-sortable #portfolio-nav li.current a,.kl-ioscaption--style1 .more:before, .kl-ioscaption--style1 .more:after,.btn-flat ,.zn_limited_offers li:after,.login-panel .login_facebook ,.imgboxes_style1 .hoverBorder h6,.circlehover:before,.kl-cta-ribbon,.newsletter-signup input[type=submit],.recentwork_carousel--1 .recentwork_carousel__bg,.zn-acc--style4 .acc-title,.zn-acc--style3 .acc-tgg-button:before,.process_box .content:before,#bbpress-forums div.bbp-search-form input[type=submit], #bbpress-forums .bbp-submit-wrapper button, #bbpress-forums #bbp-your-profile fieldset.submit button,.bg-custom,.bg-custom-hover:hover,.site-header.style8 .kl-main-header .kl-cta-lined,.site-header.style9 .kl-cta-lined,.latest_posts.default-style.kl-style-2 .lp-title,.latest_posts.default-style.kl-style-2 .post:not(.lp-title) .m_title:after,.latest_posts.default-style .hoverBorder h6,.itemThumbnail .overlay__inner a:hover,.elm-searchbox--normal .elm-searchbox__submit,.elm-searchbox--transparent .elm-searchbox__submit,.itemThumbnail .overlay__inner a:hover,.zn-acc--style4 .acc-tgg-button .acc-icon:before,span.zn_badge_sale,span.zn_badge_sale:after,.zn_limited_offers li:before,.style3 .action_box_inner,.style3 .action_box_inner:before,.action_box.style3:before,.circlehover.style2,.circlehover.style2:before,body .kl-flex--classic .zn_simple_carousel-arr:hover, .main-nav .hg_mega_container li a:not(.zn_mega_title):before {background-color: #"+hex+"; } .breadcrumbs li:after,.ib2-text-color-light-theme .ib2-inner, .breadcrumbs li:after, .breadcrumbs2 li:after, .photogallery-widget .pg-thumb:nth-child(even) .pg-caption::before, .portfolio-item-details.travel li::before {border-left-color: #"+hex+"; } .kl-cta-ribbon .trisvg path,.kl-bottommask .bmask-customfill,.kl-slideshow .kl-loader svg path,.kl-slideshow.kl-loadersvg rect,.kl-diagram circle, .kl-cta-ribbon .trisvg {fill: #"+hex+"; } .how_to_shop .number, .newsletter-signup input[type=submit], .th-map_controls, .hg-portfolio-sortable #portfolio-nav li.current a, .ptcarousel .controls > a:hover, .itemLinks span a:hover, .product-list-item .kw-actions a, .woocommerce ul.products li.product .product-list-item .kw-actions a, .shop-features .shop-feature:hover, .btn-flat, .redbtn, .imgboxes_style1 .hoverBorder h6, .feature_box.style3 .box:hover, .services_box--classic:hover .services_box__icon, services_box_element:hover .box .icon, .latest_posts.default-style .hoverBorder h6, .process_steps--style1 .process_steps__intro, .process_steps--style2 .process_steps__intro, .recentwork_carousel.style2 li a .details .plus, .gobox.ok:before, .gobox.ok:after, .gobox.ok, .recentwork_carousel--1 .recentwork_carousel__bg, .circlehover:before,.kl-ioscaption--style1 .more:before, .kl-ioscaption--style1 .more:after ,.kl-ioscaption--style2 .more {background-color: #"+hex+"; } .hover-box:hover {background-color: #"+hex+" !important;} .vertical_tabs.kl-style-1 .tabbable .nav>li.active>a, .vertical_tabs.kl-style-1 .tabbable .nav >li > a.active {box-shadow: inset -3px 0 0 0 #"+hex+" !important;} .action_box:before, .action_box:after, .site-header.style1, .site-header.style6, .site-header.style4 .site-logo a, .site-header.style5 {border-top-color: #"+hex+"; } .process_steps--style1 .process_steps__intro:after,body .nivo-caption,body .kl-flex--classic .flex-caption,body .th-wowslider .ws-title,.process_box[data-align=left] .content:after,body .ls--laptop .ls__item-caption {border-left-color: #"+hex+"; } .process_box[data-align=right] .content:after, .photogallery-widget .pg-thumb:nth-child(odd) .pg-caption::before {border-right-color: #"+hex+"; } .theHoverBorder:hover {box-shadow: 0 0 0 5px #"+hex+" inset; } .vertical_tabs.kl-style-1 .tabbable .nav>li.active>a {box-shadow: inset -3px 0 0 0 #"+hex+" inset; } .offline-page .containerbox {border-bottom: 5px solid #"+hex+"; } .offline-page .containerbox:after {border-top: 20px solid #"+hex+"; } .site-header.style2 .site-logo a, .site-header.style5, .site-header.style6 .site-logo a {border-top: 3px solid #"+hex+"; } body .kl-ioscaption--style2 .title_big, body .kl-ioscaption--style2 .title_small {border-left: 5px solid #"+hex+"; } body .kl-ioscaption--style2.fromright .title_big, body .kl-ioscaption--style2.fromright .title_small {border-right: 5px solid #"+hex+" ; } #buddypress form#whats-new-form p.activity-greeting:after {border-top-color: #"+hex+"; } #buddypress input[type=submit],#buddypress input[type=button],#buddypress input[type=reset] ,#buddypress .activity-list li.load-more a, .stg-bigblog .bb-title .bb-category, .product-list-item .kw-actions a, .kl-store-page ul.products li.product .product-list-item .kw-actions a, .btn-flat, .kl-store-page a.button, .kl-store-page button.button, .kl-store-page button.button.alt, .kl-store-page input.button, .kl-store-page input#button, .kl-store-page #review_form #submit, .fancy-list li:hover::before, .testimonial_slider.quoter-style .cfs--pagination a.selected, .photogallery-widget .pg-thumb .pg-caption, ul.dash-list li::before, .kl-iconbox--sh-circle span.kl-iconbox__icon, .process-list .processitems li:hover .ico-wrapper > span, .works_carousel.stl-simple .inner-slide .imgprev {background: #"+hex+"; } #buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a {border-top: 2px solid #"+hex+"; } #buddypress form#whats-new-form p.activity-greeting,.widget.buddypress ul.item-list li:hover {background-color: #"+hex+"; } .widget.buddypress div.item-options a.selected ,#buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a ,#buddypress div.activity-meta a ,#buddypress div.activity-meta a:hover,#buddypress .acomment-options a {color: #"+hex+"; } .keywordbox.keywordbox-2, .hg_post_image, .hg_full_image {border-bottom: 5px solid #"+hex+";} {border-bottom: solid 5px #"+hex+"; } .keywordbox.keywordbox-3 {border-bottom: solid 10px #"+hex+"; } .process_box4 .number:before,.loginbox-popup input[type=submit],.login-panel .login_facebook {background: #"+hex+"; } .statistics-horizontal .v-line {border-bottom: dotted 1px #"+hex+"; } .statistics-vertical::before {border-left: dotted 1px #"+hex+"; } .circle-text-box.style3 .wpk-circle-span,.circle-text-box.style2 .wpk-circle-span::before {background: #"+hex+"; } .circle-text-box:not(.style3) .wpk-circle-span:after {background-color: #"+hex+"; } .circle-text-box .wpk-circle-title,.media-container .media-container__link--style-borderanim2 .media-container__text:hover {color: #"+hex+"; } .services_box--modern .services_box__icon {box-shadow: inset 0 0 0 2px #"+hex+"; } .services_box--modern:hover .services_box__icon {box-shadow: inset 0 0 0 40px #"+hex+"; } .services_box--modern .services_box__fonticon {color: #"+hex+"; } .services_box--modern .services_box__list li:before {box-shadow: 0 0 0 2px #"+hex+"; } .services_box--modern .services_box__list li:hover:before {box-shadow: 0 0 0 3px #"+hex+"; } .kl-has-overlay .img-intro:hover .overlay {box-shadow: inset 0 -8px 0 0 #"+hex+"; } .kl-cta-ribbon, .hg_accordion_element.style3 .th-accordion .acc-group > a:before, .tbk-symbol--line_border .tbk__symbol span, .stl-hoverstyle .cfs--navigation a:hover {background-color: #"+hex+"} .kl-cta-ribbon .trisvg path {fill: #"+hex+"} .logo-container .logo-infocard {background: #"+hex+"} body .kl-ioscaption--style4 .more:before {border-color: #"+hex+"; background: "+convertHex('#'+hex,70)+"} body .kl-ioscaption--style4 .more:hover:before, .cart-container .buttons .button.wc-forward:hover, .logo-container .logo-infocard .left-side, .kl-ios-selectors-block.bullets2 .item.selected::before, .kl-ios-selectors-block.bullets2 .item:hover:before {background: "+convertHex('#'+hex,90)+"} .timeline_box:hover:before {background-color: #"+hex+"} body .kl-ioscaption--style3.s3ext .main_title::before,body .kl-ios-selectors-block.bullets2 .item.selected::before,.iosslider__item .kl-ioscaption--style5 .klios-separator-line span,.btn-fullcolor,.btn-fullcolor:focus,.btn-fullcolor.btn-skewed:before,.cart-container .buttons .button.wc-forward,body .kl-flex--modern .flex-underbar,.tbk--color-theme.tbk-symbol--line .tbk__symbol span,.tbk--color-theme.tbk-symbol--line_border .tbk__symbol span,.ls__nav-item.selected,.site-header.style7 .kl-cart-button .glyphicon:after,.how_to_shop .number,.recentwork_carousel--2 .recentwork_carousel__title:after,.recentwork_carousel_v3 .btn::before,.recentwork_carousel--2 .recentwork_carousel__cat,.recentwork_carousel_v2 .recentwork_carousel__plus,.recentwork_carousel_v3 .recentwork_carousel__cat,.pricing-table-element .plan-column.featured .subscription-price .inner-cell,.shop-latest .tabbable .nav li.active a:before,.product-list-item .kw-actions a, .woocommerce ul.products li.product .product-list-item .kw-actions a,.latest_posts.style2 ul.posts .details span.date,.eBlog .related-articles .rta-post > a:after,.shop-features .shop-feature:hover,.cart-container .buttons .button.wc-forward,.media-container__link--style-borderanim1 > i,.site-header .kl-cart-button .glyphicon:after,.chaser .main-menu li.active > a,.imgboxes_style4 .imgboxes-title:after,.woocommerce a.button,.woocommerce button.button,.woocommerce button.button.alt,.woocommerce input.button,.woocommerce input#button,.woocommerce #review_form #submit {background-color: #"+hex+"; } .borderanim2-svg__shape {stroke: #"+hex+" !important; } .btn-fullcolor.btn-skewed:hover:before,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce button.button.alt:hover,.woocommerce input.button:hover,.woocommerce input#button:hover,.woocommerce #review_form #submit:hover {background-color: #a41a1b } .site-header.style8 .kl-main-header,.site-header.style9,.shop-latest .tabbable .nav li.active a:after,.zn_post_image,.zn_full_image,.sidebar .widget .widgettitle:after,.imgboxes_style4.kl-title_style_bottom .imgboxes-border-helper,.imgboxes_style4.kl-title_style_bottom:hover .imgboxes-border-helper,.statistic-box__line, .read-more-link:hover {border-bottom-color: #"+hex+"} .fake-loading:after {border: 2px solid "+convertHex('#'+hex,15)+"; border-top-color: #"+hex+"; border-right-color: #"+hex+"; } .latest_posts.style2 ul.posts .details span.date:after {border-top-color: #"+hex+"; } .eluidf3608cd8 .kl-bg-source__overlay {background: #"+hex+" ; } .kl-iconbox--sh-circle:hover span.kl-iconbox__icon:after, .kl-iconbox--sh-circle:hover span.kl-iconbox__icon, .btn-fullcolor:hover {background: "+convertHex('#'+hex,70)+" } .btn-fullcolor.btn-skewed:hover:before, .section-video-icons .right-side {background-color: "+convertHex('#'+hex,70)+" !important; } .skills_wgt .skill-bar > i {background: #"+hex+" !important;} .works_carousel .inner-slide:hover .imgprev::after {border-bottom: 8px solid #"+hex+" !important;} .site-header.style2 .kl-main-header, .site-header.style3, .site-header.style10 {border-bottom: 3px solid #"+hex+";} "

			);



		}





		// Init Tooltips

		$('[data-toggle=tooltip]').tooltip();



		var togglePanel = $('#togglePanel'),

			demoPanel = $('#kallyas_demopanel');
	

		togglePanel.click(function(e) {

			e.preventDefault();

			demoPanel.toggleClass('is-opened');

			

		});


		setTimeout(function() {
			demoPanel.removeClass("is-opened");
				},1000
		);


		// Hide the tooltip after load ( delay is attached on the css's transition )

		togglePanel.next(".demo_tooltip").addClass("hideme").one('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd',

			function() {

				$(this).remove();

		});



		// Init Pickers

		$('.cpicker').each( function() {

			var $this = $(this);

			$this.minicolors({

				control: $this.attr('data-control') || 'hue',

				inline: $this.attr('data-inline') === 'true',

				letterCase: $this.attr('data-letterCase') || 'lowercase',

				changeDelay: $this.attr('data-changedelay') || 0,

				change: function(hex, opacity) {

					if( !hex ) return;



					switch( $this.attr('id') ){

						case"bodybgcolor":

							doBgColor( $("body.boxed-layout"), hex );

						break;

						case"boxed_bgcolor":

							doBgColor( $("body.boxed-layout"), hex );

						break;

						case"themecolor":

							doThemeColor( hex.substring(1,7) );

						break;

					}



				},

				theme: 'default'

			});

		});




		// Color presets
		$('#dp-color-presets > span').click(function(event) {

			doThemeColor( $(this).attr('data-color') );

		});



		// Boxed layout options 
		// enable boxed layout?

		$('#enableboxed').change(function(){

			if($(this).is(':checked')) 	$body.addClass('boxed-layout');

			else 						$body.removeClass('boxed-layout');

			jQuery(window).trigger("resize");

		});

		// Add patterns:
		$('#dp-patterns a').click(function(e) {
			e.preventDefault();
			console.log($(this).attr('href'))
			$body.css('background-image', 'url(' + $(this).attr('href') + ')');
		});


		var updateStateSpecialCbx = function(sticky,chaser){
			var sh = $('#stickyheader'), cs = $('#chaserMenu');
			if(sticky){
				cs.prop('checked', false);
				$body.addClass('sticky-header');
			}
			else if(chaser){
				sh.prop('checked', false);
				$body.removeClass('sticky-header');
			}
		};

		var updateShOnScroll = function(){
			var header = $('#header'),
				scrolled = $(window).scrollTop();

			if (scrolled > 0 && scrolled <= 9) {
				$body.addClass('sticky-header');
				header.removeClass('header--is-sticked').addClass('header--no-sticked');
			}
			else if (scrolled >= 10) {
				header.addClass('header--is-sticked');
			}
			else {
				header.removeClass('header--is-sticked').addClass('header--no-sticked');
			}
		};

		var updateStateSh = function(state){
			var header = $('#header');

			$(window).scroll(function(){
				if(state){
					updateShOnScroll();
				}
				else{
					if( ! $('#stickyheader').is(':checked') ) {
						$body.removeClass('sticky-header');
						header.removeClass('header--is-sticked').addClass('header--no-sticked');
						$(window).unbind('scroll', updateStateSh);
					}
				}
			});
		};

		var setupChaser = function( state ){
			var _chaser = $('body .chaser');
			KallyasConfig.enableChaserMenu = state;
			if(_chaser && _chaser.length > 0 ) { return false; }
				if (window.matchMedia('(min-width: 992px)').matches) {
					var KT_Chaser = {
					// Whether or not the chaser is visible
					visible: false,

					update: function( $header, headerStyleNumber )
					{
						if(headerStyleNumber < 1){
							console.warn('[KT_Chaser::update] Error: Invalid header style number provided.');
							return;
						}

						// Clone needed elements from $header depending on the headerStyleNumber and generate chaser menu
						this._createChaserByHeaderStyle( $header, headerStyleNumber );
					},

					// Clone needed elements from $header depending on the headerStyleNumber and generate chaser menu
					_createChaserByHeaderStyle: function( $header, headerStyleNumber )
					{
						// Show top bar when headerStyleNumber = [1,2,3]
						var populateTopBar = ($.inArray(parseInt(headerStyleNumber,10), [1,2,3]));

						// Update chaser's content
						this._updateChaserHtml( $header, populateTopBar );
					},

					// Update the chaser menu's content
					_updateChaserHtml: function( $header, populateTopBar ){
						populateTopBar = (populateTopBar > -1);

						// Create new html structure
						var chaserMenu = $('body .chaser');
						if( ! chaserMenu){
							return;
						}

						// Create chaser menu
						$('#chaserMenuRow').html('')
							//.append('<div class="col-sm-2 col-md-2" id="left-container"></div>')
							.append('<div class="col-sm-12 col-md-12" id="right-container"></div>');

						// Add logo
						//$('#left-container').html($('.logo-container', $header).clone(true));

						// Add the content in the right area
						var rightContainer = $('#right-container');
						rightContainer
							// Adding top bar
							//.append('<div id="_wpk-custom-bar" class="col-sm-12 col-md-12"></div>')
							// add main menu
							.append('<div id="wpk-main-menu" class="col-sm-12 col-md-12"></div>')
							// Add cta button
							//.append('<div id="_wpk-cta-button" class="col-sm-1 col-md-1"></div>')
							;

						// Add content in the newly created sections
						// if(populateTopBar) {
						// 	if($header.attr('data-header-style') == '2'){
						// 		$('#_wpk-custom-bar').html( $('<div style="height:32px;"></div>') );
						// 	}
						// 	else if($header.attr('data-header-style') == '3'){
						// 		$('#_wpk-custom-bar').html( $('.kl-top-header').clone(true) );
						// 	}
						// 	else {
						// 		$('#_wpk-custom-bar').html( $('.kl-top-header').clone(true) );
						// 	}
						// }
						// else {
						// 	$('#_wpk-custom-bar').html( $('<div style="height:32px;"></div>') );
						// }

						//$('#_wpk-cta-button').html($('#ctabutton', $header).clone(true));

						$('#wpk-main-menu').html($('#menu-main-menu', $header).clone(true));

						//#! Remove search
						chaserMenu.find('#search.header-search').remove();
					}
				};

				if(KallyasConfig.enableChaserMenu) {
					// ON LOAD
					// the reference to the default header element
					var _header = $('#header'),
						// Default value for chaser's visibility
						forch = KallyasConfig.chaserMenuOffsetDisplay;

					// ENABLE HEADER STYLE CHANGING (the dropdown in options)
					// var header_style_option = _header.attr('data-header-style') || '1';


					// Setup references
					var docMainMenu = $('#main-menu > ul');
					if(docMainMenu) {
						// Set the default style for header
						//_header.attr('data-header-style', header_style_option);

						// Create chaser menu
						$('<div id="chaserMenuRow" class="row"></div>')
							.appendTo(document.body)
							.wrap('<div class="chaser"><div class="container"></div></div>');

						// Set the chaser's visibility
						var scrolled = $(window).scrollTop(),
						// Get the reference to the chaser menu
							_chaser = $('body .chaser');
						if(scrolled > forch) {
							_chaser.addClass('visible');
							KT_Chaser.visible = true;
						}
						KT_Chaser.update( _header, _header.attr('data-header-style'));
					}
					// END if(docMainMenu)
					
					var _chaser = $('body .chaser');

					// OnScroll
					$(window).scroll(function(e) {
						if(! KallyasConfig.enableChaserMenu){
							_chaser.removeClass('visible');
							KT_Chaser.visible = false;
							return false;
						}
						var scrolled = $(window).scrollTop();

						if ( scrolled >= forch ) {
							_chaser.addClass('visible');
							KT_Chaser.visible = true;
						}
						else if ( scrolled < forch ) {
							_chaser.removeClass('visible');
							KT_Chaser.visible = false;

						}
						else {
							// Triggered when the chaser menu is visible but doesn't have content.
							// Only happens when the window is scrolled and then the page is refreshed.
							if(_chaser.hasClass('visible') && $('#chaserMenuRow').html().trim() == ''){
								KT_Chaser.visible = true;

							}
						}
					});
					// END onScroll
				}
				else {
					var _chaser = $('body .chaser');
					_chaser.removeClass('visible');
					KT_Chaser.visible = false;
				}
			}
		};

		var updateStateCs = function(state){
			setupChaser(state);
		};

		// Sticky Header options
		$('#stickyheader').change(function(){
			if($(this).is(':checked')){
				updateStateSpecialCbx(true, false);
				updateStateSh(true);
				updateStateCs(false);
			}
			else{
				var cs = $('#chaserMenu').is(':checked');
				updateStateSpecialCbx(false, cs);
				updateStateSh(false);
				updateStateCs(cs);
			}
		});

		// Chaser menu options
		$('#chaserMenu').change(function(){
			if($(this).is(':checked')){
				updateStateSpecialCbx(false, true);
				updateStateSh(false);
				updateStateCs(true);
			}
			else{
				var sh = $('#stickyheader').is(':checked');
				updateStateSpecialCbx(sh, false);
				updateStateSh(sh);
				updateStateCs(false);
			}
		});



	});

})(jQuery);
}