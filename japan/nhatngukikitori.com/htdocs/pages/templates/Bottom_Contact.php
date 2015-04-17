<div class="wrapper col5">
  <div id="footer">
    <div id="contactform">
      <h2>Gửi Thông Tin Liên Hệ !</h2>
      <form action="../controller/ContactController.php" method="post" name="contact" onsubmit="return checkInputContact();">
        <fieldset>
          <legend>Contact Form</legend>
          <label for="name">Họ Và Tên:
            <input name="name" type="text" id="name" value="" size="40" />
          </label>
		   <label for="phone">Điện Thoại:
            <input id="phone" name="phone" type="text" value="" />
          </label>
          <label for="email">Email:
            <input id="email" name="email" type="text" value="" />
          </label>
          <label for="message">Tin Nhắn:<br />
            <textarea id="message" name="message" cols="40" rows="4"></textarea>
          </label>
          <p>
            <input id="resetform" name="resetform" type="reset" value="Xóa" />
            &nbsp;
            <input id="submitform" name="commit" type="submit" value="Gửi" />
          </p>
        </fieldset>
      </form>
    </div>
    <!-- End Contact Form -->
    <div id="compdetails">
      <div id="officialdetails">
        <h2>Công Ty PDT Việt Nam !</h2>
        <ul>
          <li>Trung Tâm Nhật Ngữ KIKITORI</li>
          <li>Km12 Đường 32 Đình Quán,Phú Diễn,Từ Liêm,Hà Nội</li>
          <li>Tel: 0973300309 - 0902355395</li>
		  <li>Email: tiengnhatkikitori@gmail.com</li>
          <li class="last">Website: nhatngukikitori.com</li>
        </ul>
      </div>
      <div id="contactdetails">
        <h2>Liên Kết !</h2>
        <ul>
          <li>
			<a rel="nofollow" href="https://www.facebook.com/HocTiengNhatMoiNgay" target="_blank">
				<img src="images/icon/Facebook-icon.png" alt="" />
			</a>
		  Facebook
		  </li>
          <li>
			<a rel="nofollow" href="https://plus.google.com/u/0/103954942835043952855/posts" target="_blank">
				<img src="images/icon/google-plus2-icon.png" alt="" />
			</a>
		  Google +
		  </li>
          <li>
			<a rel="nofollow" href="http://www.youtube.com/channel/UCT9nb-wFi56Jko4V0f38n4A/videos?view=1" target="_blank">
				<img src="images/icon/Youtube-logo.png" alt="" />
			</a>
			Youtube
		  </li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <!-- End Company Details -->
    <div id="copyright">
      <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved</p>
      <p class="fl_right">Hỗ Trợ Bởi Công Ty PDT Việt Nam</p>
      <br class="clear" />
    </div>
    <div class="clear"></div>
  </div>
</div>