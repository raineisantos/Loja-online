<script type="text/javascript">

	// Megamenu
	$(function() {
						
		var $menu = $('#ldd_menu');
		
		$menu.children('li').each(function(){
			var $this = $(this);
			var $span = $this.children('span');
			$span.data('width',$span.width());
			
			$this.bind('mouseenter',function(){
				$menu.find('.ldd_submenu').stop(true,true).hide();
				$span.stop().animate({'width':'auto'},150,function(){
					$this.find('.ldd_submenu').slideDown(300);
				});
			}).bind('mouseleave',function(){
				$this.find('.ldd_submenu').stop(true,true).hide();
				$span.stop().animate({'width':$span.data('width')+'px'},300);
			});
		});
	});
	
	$(document).ready(function() {
		
		// Border effects
		$("#main_navi li img").insetBorder({
			borderColor : '#EDE6E9',
			inset: 4
		});
		
		// Navigation menu
		$('ul.sf-menu').superfish({ 
			delay: 100
		});  
		
		// Slider
		$(".slider").scrollable({
			next: '.next2', 
			prev: '.prev2'
		});
	
		// Fancybox
		$("a.grouped-elements").fancybox({
			'titlePosition'	: 'inside'
		});

		$("a[rel=group4]").fancybox({
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'titlePosition' 	: 'over',
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
				return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
			}
		});
		
		// Mouseover effect for thumbnails
		$("a.grouped-elements").hover(function() {
			  $(this).find(".imagehover").toggleClass("mouseon");
		});
		
	});

	$(window).load(function() {
		// Main Promo Scroller
		$("#main").scrollable({

			vertical: true,
			keyboard: 'static',
			onSeek: function(event, i) {
				horizontal.eq(i).data("scrollable").focus();
			}
		
		}).navigator("#main_navi");

		var horizontal = $(".scrollable").scrollable({ circular: true }).navigator(".navi");
		horizontal.eq(0).data("scrollable").focus();
	});
	
</script>
