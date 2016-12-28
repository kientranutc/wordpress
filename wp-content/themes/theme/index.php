<?php get_header(); ?>

<section id="tab-menu">
	<div class="container">

		<div id="menu-header-bottom">
			<ul class="menu-bottom">
				<li><a href="#header" title="">Top</a></li>
				<li><a href="#intro" title="">Giới Thiệu</a></li>
				<li><a href="#tienich" title="">Tiên ích</a></li>

				<li><a href="#add-house" title="">Bán &cho thuê</a></li>

				<li><a href="#why-select" title="">Tại sao chọn ?</a></li>

				<li><a href="#map" title="">Vị trí</a></li>
				<li><a href="#more" title="">Tìm hiểu thêm</a></li>

			</ul>
		</div>
	</div>
</section>
<section id="intro">
	<?php 	
   
  $array_intro=ot_get_option( 'list_intro', array() );

  foreach ($array_intro as $value) {
  
	 ?>
	<div class="fix-with-intro">
		<div class="inner-intro">
			<div class="icon">
				<i class="<?php echo $value['icon_intro'] ?>" aria-hidden="true"></i>
			</div>
			<div class="content-intro">
				<h3><?php echo $value['title']; ?></h3>
				<p><?php echo $value['content_intro']; ?></p>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="fix-clean"></div>
	<div id="info-detail">
		<div id="info-detail-left">
			<div id="img">
				<img src="<?php echo ot_get_option('_nh_gi_i_thi_u'); ?>" alt="">
			</div>
			<div id="icon">
				<a href=""><i class="fa fa-play" aria-hidden="true"></i></a>
			</div>

			<div id="title-intro">
				<p><?php echo ot_get_option('ti_u____'); ?></p>
			</div>
			<div id="imga-pos-top"></div>
			<div id="imga-pos-bottom"></div>
		</div>
		<div id="info-detail-right">
		   <div class="fix-padding">
			<div id="info-detail-right-title">
				<h3><?php echo ot_get_option('ti_u____'); ?></h3>
			</div>
			<div class="line">
				<span class="line-left"></span>
				<span><i class="fa fa-star" aria-hidden="true"></i></span>
				<span class="line-right"></span>
			</div>
			<div class="info-detail-right-content">
             <?php 
               echo ot_get_option('n_i_dung');
              ?>
			</div>
			<div id="add-home">
                     <?php 
                      $array_carthouse=ot_get_option('b_n_v__cho_thu_', array());
                      $i=1;

                      foreach ($array_carthouse as  $value) {
                        if($i==1)
                        {
                      ?>
				  <div id="add-home-left">
				  	<a href="<?php echo $value['link_gt']; ?>"><?php echo $value['title']; ?> <i class="fa fa-envelope" aria-hidden="true"></i>
                   </a>
				  </div>

				   <?php 
                      }
                      else
                      	if($i==2)
                      {
				   ?>
				  <div id="add-home-right">
				  	<a href="<?php echo $value['link_gt']; ?>"><?php echo $value['title']; ?> <i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
				  </div>

				  <?php }
                   $i++;
				  } ?>
			</div>
			</div>
		</div>
	</div>
	
</section>
 
 <section >

	<div id="info-detail">
		
		<div id="info-detail-right" class="tienich-left">
		   <div class="fix-padding">
			<div id="info-detail-right-title">
				<h3><?php echo ot_get_option('ti_u___'); ?></h3>
			</div>
          <div id="tienich"></div>
			<div class="line">
				<span class="line-left"></span>
				<span><i class="fa fa-star" aria-hidden="true"></i></span>
				<span class="line-right"></span>
			</div>
			<div class="info-detail-right-content">
		      	<?php echo ot_get_option('noidung_tienich'); ?>
			</div>
			<div id="add-home">
				   <?php 
                      $array_carthouse=ot_get_option('b_n_v__cho_thu_', array());
                      $i=1;

                      foreach ($array_carthouse as  $value) {
                        if($i==1)
                        {
                      ?>
				  <div id="add-home-left">
				  	<a href="<?php echo $value['link_gt']; ?>"><?php echo $value['title']; ?> <i class="fa fa-envelope" aria-hidden="true"></i>
                   </a>
				  </div>

				   <?php 
                      }
                      else
                      	if($i==2)
                      {
				   ?>
				  <div id="add-home-right">
				  	<a href="<?php echo $value['link_gt']; ?>"><?php echo $value['title']; ?> <i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
				  </div>

				  <?php }
                   $i++;
				  } ?>
			</div>
			</div>
		</div>
		<div id="info-detail-left">
			<div id="img">
				<img src="<?php echo ot_get_option('_nh_ti_n__ch'); ?>" alt="">
			</div>
			<div id="icon">
				<a href="<?php echo ot_get_option('link_li_n_k_ts'); ?>"><i class="fa fa-play" aria-hidden="true"></i></a>
			</div>

			<div id="title-intro">
				<p><?php echo ot_get_option('ti_u___'); ?></p>
			</div>
			<div id="imga-pos-top"></div>
			<div id="imga-pos-bottom"></div>
		</div>
	</div>


</section>
<div class="fix-clean"></div>
<section id="add-house">
	<div id="add-house-title">
		<p><?php echo ot_get_option('ti_u____1'); ?>
         </p>
		<h3><?php echo ot_get_option('ti_u____2') ?></h3>
	</div>

	<div id="add-house-content">
		  <?php 
           $array_cart=ot_get_option('danh_s_ch__nh', array());
           foreach ($array_cart as $value) {
           
           
		  ?>
		<div class="fix-add-house">
		<div class="inner-addhouse">
			  <div class="addhouse-img">
			  	 <img src="<?php echo $value['anh_ban'];?>" alt="">
			  </div>
			  <div class="addhouse-pos">
			  	<h3><a href="<?php echo $value['link_bannha']; ?>"><?php  ?><?php echo $value['title']; ?></a></h3>
			  </div>
		</div>
		</div>
		<?php 
         }
		 ?>

		
		

	</div>
</section>
<section id="why-select">
<div class="container">
	<div id="why-select-title">
		<h1><?php echo ot_get_option('tieu_de_tai_sao'); ?></h1>
       <div class="why-select-star">
       <span class="line-left"></span>
		<span><i class="fa fa-star" aria-hidden="true"></i></span>
	    <span class="line-right"></span>
       </div>
	</div>
	<div id="why-select-content">
	<?php 

    $array_why=ot_get_option('danh_sach_th_ng_tin', array());
    if(empty($array_why))
    {
    	echo "chưa có bài viết";
    }
    else
    {
    foreach($array_why as $value) {
    
	 ?>
		<div class="why-select-item">
			<div class="why-select-icon">
			<i class="<?php echo $value['icon_taisaochonj']; ?>" aria-hidden="true"></i>
			</div>
			<div class="why-select-item-content">
				<h3><?php echo $value['title']; ?></h3>
				<p><?php echo $value['noidung_taisao']; ?></p>
			</div>
		</div>
		<?php }} ?>


	</div>
	</div>
</section>
<section id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3724.327003497654!2d105.7781669144072!3d21.019597893468088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2sus!4v1482811272547" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></section>
<section id="more">
    <div class="container">
    	<div id="more-title">
    		<p><?php echo ot_get_option('ti_u____t_m_hi_u_th_m_1'); ?></p>
    		<h1><?php echo ot_get_option('ti_u____t_m_hi_u_th_m_2'); ?></h1>
    	</div>
    </div>
 <div id="more-slideshow"> 
 <?php 
  $array_timhieuthem=ot_get_option('danh_s_ch__nh_t_m_hi_u_th_m',array());
  foreach ($array_timhieuthem as $value) {
  ?>
<a href="<?php echo $value['anh_tim_hieu_them']; ?>" data-lightbox="roadtrip"><img src="<?php echo $value['anh_tim_hieu_them']; ?>" alt=""></a>    <?php } ?>
    <div id="more-slideshow-tooptip">
    	<a>Click ảnh  để xem được nhiều ảnh hơn</a>
    </div>

 </div>
</section>
<div id="goTop">
<i class="fa fa-angle-up" aria-hidden="true"></i>
</div>


<?php get_footer(); ?>