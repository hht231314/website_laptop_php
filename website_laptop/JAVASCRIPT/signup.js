check = true;
function showHint(str) {
    var xhttp;
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    } else {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            if (xhttp.responseText == "Số điện thoại đã tồn tại !!") {
                document.getElementById("errPhoneNumber").innerHTML = "Số điện thoại đã tồn tại";
                document.getElementById("div-phone").style.borderBottom = "2px solid #de0303";
                document.getElementById("errPhoneNumber").style.visibility = "visible";
                return check = false;
            } else if (xhttp.responseText == "OK") {
                var sdt = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                var str1 = document.getElementById("phone").value;
                if (str1 == "") {
                    document.getElementById("errPhoneNumber").innerHTML = "*Vui lòng nhập số điện thoại !!";
                    document.getElementById("div-phone").style.borderBottom = "2px solid #de0303";
                    document.getElementById("errPhoneNumber").style.visibility = "visible";
                    return check = false;
                    
                } else if (!sdt.test(str1)) {
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
            } else {
                document.getElementById("errPhoneNumber").innerHTML = "";
                document.getElementById("div-phone").style.borderBottom = "2px solid rgb(185, 185, 185)";
                document.getElementById("errPhoneNumber").style.visibility = "hidden";
                return check = true;
            }
        }
    }
    xhttp.open("GET", "../PHP/gethint.php?q=" + str, true);
    xhttp.send();
}

function signup() {
    checkName();
    checkPassword();
    checkRePassword();
    checkAddress();
    checkImage();
    checkEmail();
    showHint(phone);

    if (check == false) {
        alert("Đăng ký không thành công, vui lòng xem lại thông tin.");
    }

    return check;
}

function checkName() {
    var str = document.getElementById("username").value;
    if (str == "") {
        document.getElementById("errName").innerHTML = "*Vui lòng nhập tên đăng nhập !!";
        document.getElementById("div-username").style.borderBottom = "2px solid #de0303";
        document.getElementById("errName").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errName").innerHTML = "";
        document.getElementById("div-username").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errName").style.visibility = "hidden";
        return check = true;
    }
}

function checkPassword() {
    var pass = /[A-Za-z0-9]{6,15}/;
    var str = document.getElementById("pass").value;
    if (str == "") {
        document.getElementById("errPassword").innerHTML = "*Vui lòng nhập mật khẩu !!";
        document.getElementById("div-password").style.borderBottom = "2px solid #de0303";
        document.getElementById("errPassword").style.visibility = "visible";
        return check = false;
    } else if (!pass.test(str)) {
        document.getElementById("errPassword").innerHTML = "*Mật khẩu phải có cả chữ cái và số, không được có ký tự khác ngoài chữ cái và số, dài từ 6 đến 15 ký tự !!";
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

function checkRePassword() {
    var str = document.getElementById("pass").value;
    var str1 = document.getElementById("rePass").value;
    if (str1 == "") {
        document.getElementById("errRePassword").innerHTML = "*Vui lòng nhập lại mật khẩu !!";
        document.getElementById("div-rePass").style.borderBottom = "2px solid #de0303";
        document.getElementById("errRePassword").style.visibility = "visible";
        return check = false;
    } else if (str != str1) {
        document.getElementById("errRePassword").innerHTML = "*Mật khẩu không khớp !!";
        document.getElementById("div-rePass").style.borderBottom = "2px solid #de0303";
        document.getElementById("errRePassword").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errRePassword").innerHTML = "";
        document.getElementById("div-rePass").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errRePassword").style.visibility = "hidden";
        return check = true;
    }
}

function checkImage() {
    if (document.getElementById("image").value == "") {
        document.getElementById("errImage").innerHTML = "*Vui lòng chọn 1 ảnh";
        document.getElementById("div-image").style.borderBottom = "2px solid #de0303";
        document.getElementById("errImage").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errImage").innerHTML = "";
        document.getElementById("div-image").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errImage").style.visibility = "hidden";
        return check = true;
    }
}

function checkAddress() {
    if (document.getElementById("address").value == "") {
        document.getElementById("errAddress").innerHTML = "*Vui lòng nhập địa chỉ !!";
        document.getElementById("div-address").style.borderBottom = "2px solid #de0303";
        document.getElementById("errAddress").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errAddress").innerHTML = "";
        document.getElementById("div-address").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errAddress").style.visibility = "hidden";
        return check = true;
    }


}

function checkEmail() {
    var email = /^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/;
    str = document.getElementById("mail").value;
    if (str == "") {
        document.getElementById("errEmail").innerHTML = "*Vui lòng nhập địa chỉ email !!";
        document.getElementById("div-email").style.borderBottom = "2px solid #de0303";
        document.getElementById("errEmail").style.visibility = "visible";
        return check = false;
    } else if (!email.test(str)) {
        document.getElementById("errEmail").innerHTML = "** Email không hợp lệ !!";
        document.getElementById("div-email").style.borderBottom = "2px solid #de0303";
        document.getElementById("errEmail").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errEmail").innerHTML = "";
        document.getElementById("div-email").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errEmail").style.visibility = "hidden";
        return check = true;
    }
}


