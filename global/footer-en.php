    <!-- #site-wrap -->
  <div id="footer-wrap" class="is-clearfix" style="">
    <footer id="footer" class="site-footer">
      <div id="footer-inner" class="site-footer-inner container">
        <div id="new" class="row">
          <div class="col-md-12" style="display: flex; flex-wrap: wrap">
                <div class="pad-logo-f">
                  <a href="/index">
                    <img class="foot-logo" src="/img/logomariangelcoghlan-38.png" style="" alt="Diseño de Interiores">
                  </a>
                </div>
            </div>
      </div>
      <div class="row pt-40">
        <div class="col-sm-4 cols-pre-sub">
          <div class="cols-sub">
            <div class="sub-col" style="display: inline-block">
                <h4>CONTACT</h4>
                <ul>
                  <li>
                    <a href="https://g.page/InteriorismoMariangelCoghlan?share" target="_blank" rel="noopener">Av. Revolución 1495<br>San Ángel, CDMX</a>
                  </li>
                  <li>
                    <a href="tel:+5567833642" onclick="sendEvent('Contact')">(55) 6783 3642</a>
                  </li>
                </ul>
              </div>
              <div class="sub-col" style="display: inline-block">
                <h4>SERVICES</h4>
                <ul role="menu" class="hs-menu-children-wrapper">
                <li class="hs-menu-item hs-menu-depth-2" role="none"><a href="/en/residential-interior-design" role="menuitem">Residential interior design</a></li>
                  <li class="hs-menu-item hs-menu-depth-2" role="none"><a href="/en/commercial-interior-design" role="menuitem">Commercial interior design</a></li>
                  <li class="hs-menu-item hs-menu-depth-2" role="none"><a href="/en/remodeling-project" role="menuitem">Remodeling project</a></li>
                  <li class="hs-menu-item hs-menu-depth-2" role="none"><a href="/en/architectural-design" role="menuitem">Architectural design</a></li>
                </ul>
              </div>
          </div>
            
          <div class="social">
            <div class="social-item-new">
                <a href="https://www.instagram.com/mcoghlan.mx/" target="_blank">
                  <span class="icon">
                    <img src="/img/instagram.svg"alt="Instagram">
                    <!-- <i class="fa fa-instagram"></i> -->
                  </span>
                </a>
              </div>
            <div class="social-item-new">
                <a href="https://www.facebook.com/InteriorismoMariangelCoghlan" target="_blank">
                  <span class="icon">
                    <img src="/img/facebook.svg" alt="Facebook">
                    <!-- <i class="fa fa-facebook"></i> -->
                  </span>
                </a>
            </div>
              <div class="social-item-new">
                  <a href="https://www.youtube.com/c/MARIANGELCOGHLANmx" target="_blank">
                    <span class="icon">
                      <img src="/img/youtube-dg.svg" alt="Youtube">
                      <!-- <i class="fa fa-youtube"></i> -->
                    </span>
                  </a>
              </div>
            <div class="social-item-new">
                <a href="https://es.pinterest.com/coghlanm/" target="_blank">
                  <span class="icon">
                    <!-- <i class="fa fa-pinterest"></i> -->
                    <img src="/img/pinterest.svg" alt="Pintrest">
                  </span>
                </a>
            </div>
            <div class="social-item-new">
                <a href="https://wa.me/5215567833642" target="_blank">
                  <span class="icon">
                    <img src="/img/whatsapp.svg" alt="Whatsapp">
                  </span>
                </a>
            </div>
          </div>        
        </div>
        <div class="col-md-4">      	
          <h4>INSTAGRAM</h4>
          <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
          <iframe title="Instagram Widget" id="myIframe" src="" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>          
        </div>	
        <div class="col-md-4 mt-15-mov">	
          <h4>SUBSCRIBE TO OUR BLOG</h4>
          <!-- <script type="text/javascript" src="https://form.jotform.com/jsform/211797230346052"></script> -->
          <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
          <script>
            hbspt.forms.create({
            region: "na1",
            portalId: "2379052",
            formId: "9704088a-53e3-4087-bdbf-c12d44c76b83"
          });
          </script>		 -->
        </div>

       </div>
            <!-- .columns -->
     </div>
          <!-- #footer-inner -->
    </footer>
        <!-- #footer -->
      
      <!-- #footer-bottom-wrap -->
      <!-- show floating buttons -->
      
      
  </div>
 
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>
  <!--TODO: Put this code in script file-->
  <script>
      $('div.dropdown').hover(function() {
          $('a.dropdown-toggle').dropdown("toggle");
      }, function() {
          $('a.dropdown-toggle').dropdown('toggle');
      });

      $('li.index-tab').click(function(){
          $('li.index-tab').removeClass('is-active');
          $(this).addClass('is-active');
      });
	  
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $(".clearHeader").addClass("darkHeader");
    } else {
        $(".clearHeader").removeClass("darkHeader");
    }
});


  
	  
		// $(function() {
			//caches a jQuery object containing the header element

			
		// 	var logo = $(".logo-top-white");
		// 	var width = $(window).width();
		// 	if (width < 993) {
		// 			logo.addClass("logo-top-scrolled");
		// 		} else {
			
		// 			$(window).scroll(function() {
		// 				var scroll = $(window).scrollTop();
		// 				var width = $(window).width();
		// 				if (scroll <= 80 && width < 993) {
		// 					logo.addClass("logo-top-scrolled");
		// 				} else if (scroll <= 80 && width >= 993) {
		// 					logo.removeClass("logo-top-scrolled");  
		// 				} else {
		// 					logo.addClass("logo-top-scrolled");
		// 				}
		// 			});
		// 		}
		// });	
	  

	  
//$( document ).ready(function() {	  
//	  
//		$(function() {
//			//caches a jQuery object containing the header element
//
//			var logo = $(".logo-top-white");
//			$(window).scroll(function() {
//				var scroll = $(window).scrollTop();
//				var width = $(window).width();
//				if (scroll <= 80 && width < 993) {
//					logo.addClass("logo-top-scrolled");
//				} else if (scroll <= 80 && width >= 993) {
//					logo.removeClass("logo-top-scrolled");  
//				} else {
//					logo.addClass("logo-top-scrolled");
//				}
//			});
//		});	
//	  
//	});
	  
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".navbar-dark");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
		var width = $(window).width();
        if (width < 993) {
            header.addClass("scrolled-nav");
        } else if (scroll >= 80 && width >= 993) {
			 header.addClass("scrolled-nav");
            
        } else {
			header.removeClass("scrolled-nav");
		}
    });
});	
	  
//$(function() {
//    //caches a jQuery object containing the header element
//    var header = $(".navbar-dark");
//	var logo = $(".logo-top-white");
//    $(window).scroll(function() {
//        var scroll = $(window).scrollTop();
//		var width = $(window).width();
//        if (scroll >= 80 && width > 993 ) {
//            header.addClass("scrolled-nav");
//			logo.addClass("logo-top-scrolled");
//        } else {
//            header.removeClass("scrolled-nav");
//			logo.removeClass("logo-top-scrolled");
//        }
//    });
//});	
  </script>
  <script>
	  window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80 && window.innerWidth > 901) {
		document.getElementById("header-wrap").style.background = "#3C4650";
    document.getElementById("header-wrap").classList.remove('pad-top-nav');
	  } else {
		document.getElementById("header-wrap").style.background = "transparent";
    document.getElementById("header-wrap").classList.add('pad-top-nav');
      if(window.innerWidth < 900){
        document.getElementById("header-wrap").style.background = "#3C4650";
        document.getElementById("header-wrap").classList.remove('pad-top-nav');
      }
	  }
	}

  </script>
   <script>
 	$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
	if ($(window).width() >= 980){	

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
		// do something here
	}	
});  
  
  

// document ready  
});
   </script>
<!--  Counter	-->
	<script>
		(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
    </script>

<!--CAROUSEL-->

<script>
	
	  $('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 4,
  arrows: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
 		
	function prevSlide(){
		 $('.center').slick('slickPrev');
	}
	function nextSlide(){
		 $('.center').slick('slickNext');
	}	
	
</script>
<script>

	  $('.single').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 4,
  dots: false,
  arrows: false,
  responsive: [
	  {
      breakpoint: 1200,
      settings: {
		dots: false,
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
		dots: false,
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

$('.single-index').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 1,
  dots: false,
  arrows: false,
  lazyLoad: 'ondemand',
  responsive: [
	  {
      breakpoint: 1200,
      settings: {
		dots: false,
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
		dots: false,
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

	
</script>

<script>

  // LAZY LOADER
  document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})

</script>

<script>
  $(document).ready(function(){
    $('.venobox').venobox(); 
});
</script>
<script type="text/javascript" src="/js/app.min.js"></script>
<script type="text/javascript" src="/js/events.min.js"></script>
<script type="text/javascript">
  _linkedin_partner_id = "3294473";
  window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
  window._linkedin_data_partner_ids.push(_linkedin_partner_id);
  </script><script type="text/javascript">
  (function(){var s = document.getElementsByTagName("script")[0];
  var b = document.createElement("script");
  b.type = "text/javascript";b.async = true;
  b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
  s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
  <img height="1" width="1" style="display:none;" alt="Diseño de Interiores" src="https://px.ads.linkedin.com/collect/?pid=3294473&amp;fmt=gif">
</noscript>

<div id="simp-whatsapp">
  <a rel="noopener" onclick="sendEvent('whatsapp')" id="whats-btn" href="https://wa.me/5215567833642" target="_blank">
  	<img src="/img/transparent-social-media-icon-whatsapp-icon.png" alt="ícono whatsapp" style="">
  </a>
</div>
  </body>
</html>