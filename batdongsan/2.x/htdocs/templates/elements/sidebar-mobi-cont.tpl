<div class="row col-default sidebar-mobile-cont">
            <div class="container">
                <div class="box-sidebar">
                       <div class="full-content support-online">
                          <h3 style="background:#0094da; color: white; font-weight: 700; padding: 0px 0px 3px 5px;">
                            Hỗ trợ trực tuyến
                             <!-- <p class="face-icon"></p>
                             <p class="tw-icon"></p>
                             <p class="googlePlus-icon"></p>
                             <p class="in-icon"></p>
                             <p class="youtube-icon"></p> -->
                          </h3>
                          <div class="hotline">
                             <span class="hotlinename">Liên hệ</span> 
                             <span class="hotlinenumber">Để được tư vấn</span>
                          </div>
                          <ul class="link-support">
                            
                             <li class="boss">
                                <h3><i class="telephone ">BIDTRACO@gmail.com</i></h3> <!--homephone-->
                             </li>
                            
                             <li class="area">
                                <p class="tit"><a href="">Hotline</a></p>
                                <p class="phone"><i class="usephone"></i>{$info.phone}<span> </span></p>
                                
                             </li>
                            
                          </ul>
                        
                       </div>
                    </div>

                    <div class="support box full-content">
                        <form method="post" action="./contact" id="FrmValidate" name="FrmValidate" class="frm_contact mar-2top">
                        <h3>Yêu cầu tư vấn</h3>
                        <ul>
                            <li>
                                <p>Họ tên (*)</p>
                                <input type="text" name="name" class="required form-control" minlength="5">
                            </li>
                            <li>
                                <p>Email (*)</p>
                                <input type="text" name="email" class="fnt-x250 email required form-control">
                            </li>
                            <li>
                                <p>Điện thoại (*)</p>
                                <input type="text" name="phone" class="fnt-x250 number form-control" minlength="10">
                            </li>
                            <li>
                                <p>Địa chỉ (*)</p>
                                <input type="text" name="address" class="fnt-x250 required form-control">
                            </li>
                            <li>
                                <p>Nội dung (*)</p>
                                <textarea name="content"  class="fnt-x360  required " minlength="40" maxlength="255" style="width: 100%; min-height: 100px;"></textarea>
                            </li>
                            <li style="display: block; margin: 10px 0px; float: left; width: 100%; clear: both;">
                                <p>Mã Bảo Mật (*)</p>
                                <div class="lf" style="float: left;"><img src="?mod=helps&site=captcha"></div>
                                <input type="text" name="captcha" minlength="6" class="fnt-x90 required number form-control" style="width: 150px; float: left; margin-left: 10px;">
                            </li>
                            <li>
                                <input type="submit" value="{$trans.contact_send}" name="FrmSubmit" class="contact btn btn-danger">
                                
                            </li>
                        </ul>
                    </form>
                    </div>
            </div>
        </div>