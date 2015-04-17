<?php
		include '../model/clsSlide.php';
		include '../dao/SlideDAO.php';

?>
 <div id="gallery">
    <!-- Content Slider -->
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><img src="<?php echo getSlideById(1)->Url ?>" alt="" style="width:960px; height:370px" /></li>
            <li><img src="<?php echo getSlideById(2)->Url ?>" alt="" style="width:960px; height:370px" /></li>
          </ul>
        </div>
        <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> </div>
      </div>
      <!-- End Content Slider -->  
  </div>