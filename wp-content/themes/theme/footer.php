
<section id="logo-footer">
<div class="container">
     

     <?php 

     $array_footer=ot_get_option('danh_s_ch__nh_cu_i_trang',array());
     foreach ($array_footer as $value) {
     
      ?>
     <div class="content-logo-footer">
     <a href=""><img src="<?php echo $value['anh_cuoi_trang']; ?>" alt=""></a>
     	
     	   <div class="logo-footer-tooltip">
     		<a><?php echo $value['title']; ?></a>
     	</div>
     </div>
     <?php } ?>
 </div>

</section>

<footer>
<div class="container">
    <div id="footer-content">
	<div id="footer-left">
		<div id="copyright">
			 © Copyright 2016 - Vinhomes Tân Cảng, Vinhomes Apartment, Vinhomes Central Park, Vinhomes Golden River - Web Design by NTHung
		</div>
	</div>
	<div id="footer-right">
		 <ul id="menu-socail">
		 	<li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
		 	<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		 	<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		 </ul>
	</div>
	</div>
	</div>
</footer>

<script>
    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
	    var hamburgers = document.querySelectorAll(".hamburger");
	    if (hamburgers.length > 0) {
	      forEach(hamburgers, function(hamburger) {
	        hamburger.addEventListener("click", function() {
	          this.classList.toggle("is-active");
	        }, false);
	      });
	    }
  </script>
</body>
</html>