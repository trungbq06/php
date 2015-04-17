function checkInput(){
	if(document.registration.name.value==""){ 
		alert("Mời Bạn Nhập Họ Tên!");
		document.registration.name.focus();
		return false;
	}
	if(document.registration.phone.value==""){ 
		alert("Mời Bạn Nhập Số Điện Thoại!");
		document.registration.phone.focus();
		return false;
	}
	return true;
}
function checkInputContact(){
	if(document.contact.name.value==""){ 
		alert("Mời Bạn Nhập Họ Tên!");
		document.contact.name.focus();
		return false;
	}
	if(document.contact.phone.value==""){ 
		alert("Mời Bạn Nhập Số Điện Thoại!");
		document.contact.phone.focus();
		return false;
	}
	if(document.contact.message.value==""){ 
		alert("Mời Bạn Nhập Tin Nhắn!");
		document.contact.message.focus();
		return false;
	}
	return true;
}