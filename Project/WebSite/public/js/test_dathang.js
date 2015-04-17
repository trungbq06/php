function check_form()
		{
		//Khai báo các biến để lấy giá trị từ người dùng khi họ nhập dữ liệu vào form.		
		hoten=document.form.txtname.value;		
		dienthoai=document.form.txtdienthoai.value;			
		mail=document.form.txtmail.value;
		diachi=document.form.txtdiachi.value;	

		//Khai báo các biến để thông báo lỗi khi có lỗi xảy ra ^^!
		var loimail=document.getElementById("idmail");
		var loidt=document.getElementById("iddt");		
		var loiht=document.getElementById("idname");		
		var loidc=document.getElementById("iddc");
	
		//ho ten
		if(hoten=="") //Nếu name bỏ trống không nhập gì hết
		{			
			loiht.innerHTML="Chưa nhập họ tên !"; //Xuất ra dòng thông báo lỗi nếu họ tên bỏ trống.
			document.form.txtname.focus(); //Đặt lại tiêu điểm (Tức là con trot chuột ấy) vào ô bị lỗi
			return false; //Quay lại check tiếp khi nhận đc tiêu điểm .
		}
		loiht.innerHTML=""; //Xóa dòng thông báo lỗi khi nhập đúng.
				
		//phone
		if(dienthoai=="")
		{
			loidt.innerHTML="Chưa nhập số điện thoại !";
			document.form.txtdienthoai.focus();
			return;
		}
		loidt.innerHTML="";
		if(isNaN(dienthoai))
		{
			loidt.innerHTML="Bạn phải nhập số !";
			document.form.txtdienthoai.focus();
			return false;
		}
		loidt.innerHTML="";
				
		dangmail= /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,4}$/ //Tạo biểu thức quy tắc (tức là định dạng 1 mail nó như thế nào).
		kq2=dangmail.test(mail); //Kiểm tra mail mà người dùng nhập vào.
		if(mail=="") //Nếu mail bỏ trống
		{	
			loimail.innerHTML="Chưa nhập mail !";
			document.form.txtmail.focus();
			return false;
		}
		loimail.innerHTML="";
		if(kq2==false)
		{			
			loimail.innerHTML="Sai đinh dạng mail !";
			document.form.txtmail.focus();
			return false;
		}
		loimail.innerHTML="";
			
		if(diachi=="")
		{
			loidc.innerHTML="Chưa nhập địa chỉ !";
			document.form.txtdiachi.focus();
			return;
		}
		loidc.innerHTML="";
		
		document.form.submit();
}
