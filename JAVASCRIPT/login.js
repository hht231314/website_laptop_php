check = true;

function login() {
	checkPhone();
	checkPassword();
	
	if (check == false) {
		alert("Đăng nhập không thành công. Vui lòng xem lại thông tin.");
	}

	return check;
}

function checkPhone() {
	var sdt = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	var str = document.getElementById("phone").value;

	if (str == "" || str == null) {
		document.getElementById("errPhoneNumber").innerHTML = "*Vui lòng nhập số điện thoại !!";
		document.getElementById("div-phone").style.borderBottom = "2px solid #de0303";
		document.getElementById("errPhoneNumber").style.visibility = "visible";
		return check = false;
	} else if (!sdt.test(str)) {
		document.getElementById("errPhoneNumber").innerHTML = "** Số điện thoại không hợp lệ!! Vui lòng nhập đúng số điện thoại bạn đang dùng !!";
		document.getElementById("div-phone").style.borderBottom = "2px solid #de0303";
		document.getElementById("errPhoneNumber").style.visibility = "visible";
		return check = false;
	} else {
		document.getElementById("errPhoneNumber").innerHTML = "";
		document.getElementById("div-phone").style.borderBottom = "2px solid rgb(185, 185, 185)";
		document.getElementById("errPhoneNumber").style.visibility = "hidden";
		return check = true;
	}
}

function checkPassword() {
	var pass = document.getElementById("pass").value;

	if (pass == "" || pass == null) {
		document.getElementById("errPassword").innerHTML = "*Vui lòng nhập password !!";
		document.getElementById("div-password").style.borderBottom = "2px solid #de0303";
		document.getElementById("errPassword").style.visibility = "visible";
		return check = false;
	} else {
		document.getElementById("errPassword").innerHTML = "";
		document.getElementById("div-password").style.borderBottom = "2px solid rgb(185, 185, 185)";
		document.getElementById("errPassword").style.visibility = "hidden";
		return check = true;
	}
}