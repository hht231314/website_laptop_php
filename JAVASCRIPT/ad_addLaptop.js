check = true;

function addLaptop() {

    checkName();
    checkImage();
    checkPrice();
    checkCpu();
    checkRam();
    checkDriver();
    checkScreen();
    checkCard();
    checkPort();
    checkOs();
    checkDesign();
    checkSize();
    checkTime();

    if (check == false) {
        alert("Thêm không thành công, vui lòng xem lại thông tin.");
    }

    return check;
}

function editLaptop() {

    checkName();
    checkPrice();
    checkCpu();
    checkRam();
    checkDriver();
    checkScreen();
    checkCard();
    checkPort();
    checkOs();
    checkDesign();
    checkSize();
    checkTime();

    if (check == false) {
        alert("Thêm không thành công, vui lòng xem lại thông tin.");
    }

    return check;
}

function checkName() {
    var str1 = document.getElementById("laptopName").value;
    if (str1 == "") {
        document.getElementById("errName").innerHTML = "*Vui lòng nhập tên Laptop !!";
        document.getElementById("div-laptopName").style.borderBottom = "2px solid #de0303";
        document.getElementById("errName").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errName").innerHTML = "";
        document.getElementById("div-laptopName").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errName").style.visibility = "hidden";
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

function checkPrice() {
    var str1 = document.getElementById("price").value;
    if (str1 == "") {
        document.getElementById("errPrice").innerHTML = "*Vui lòng nhập giá !!";
        document.getElementById("div-price").style.borderBottom = "2px solid #de0303";
        document.getElementById("errPrice").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errPrice").innerHTML = "";
        document.getElementById("div-price").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errPrice").style.visibility = "hidden";
        return check = true;
    }
}

function checkCpu() {
    var str1 = document.getElementById("cpu").value;
    if (str1 == "") {
        document.getElementById("errCpu").innerHTML = "*Vui lòng nhập thông số CPU !!";
        document.getElementById("div-cpu").style.borderBottom = "2px solid #de0303";
        document.getElementById("errCpu").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errCpu").innerHTML = "";
        document.getElementById("div-cpu").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errCpu").style.visibility = "hidden";
        return check = true;
    }
}

function checkRam() {
    var str1 = document.getElementById("ram").value;
    if (str1 == "") {
        document.getElementById("errRam").innerHTML = "*Vui lòng nhập thông số RAM !!";
        document.getElementById("div-ram").style.borderBottom = "2px solid #de0303";
        document.getElementById("errRam").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errRam").innerHTML = "";
        document.getElementById("div-ram").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errRam").style.visibility = "hidden";
        return check = true;
    }
}

function checkDriver() {
    var str1 = document.getElementById("driver").value;
    if (str1 == "") {
        document.getElementById("errDriver").innerHTML = "*Vui lòng nhập thông số ổ cứng !!";
        document.getElementById("div-driver").style.borderBottom = "2px solid #de0303";
        document.getElementById("errDriver").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errDriver").innerHTML = "";
        document.getElementById("div-driver").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errDriver").style.visibility = "hidden";
        return check = true;
    }
}

function checkScreen() {
    var str1 = document.getElementById("screen").value;
    if (str1 == "") {
        document.getElementById("errScreen").innerHTML = "*Vui lòng nhập thông số màn hình !!";
        document.getElementById("div-screen").style.borderBottom = "2px solid #de0303";
        document.getElementById("errScreen").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errScreen").innerHTML = "";
        document.getElementById("div-screen").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errScreen").style.visibility = "hidden";
        return check = true;
    }
}

function checkCard() {
    var str1 = document.getElementById("card").value;
    if (str1 == "") {
        document.getElementById("errCard").innerHTML = "*Vui lòng nhập thông số card màn hình !!";
        document.getElementById("div-card").style.borderBottom = "2px solid #de0303";
        document.getElementById("errCard").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errCard").innerHTML = "";
        document.getElementById("div-card").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errCard").style.visibility = "hidden";
        return check = true;
    }
}

function checkPort() {
    var str = document.getElementById("port").value;
    if (str == "") {
        document.getElementById("errPort").innerHTML = "*Vui lòng nhập cổng kết nối !!";
        document.getElementById("div-port").style.borderBottom = "2px solid #de0303";
        document.getElementById("errPort").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errPort").innerHTML = "";
        document.getElementById("div-port").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errPort").style.visibility = "hidden";
        return check = true;
    }
}

function checkOs() {
    var str1 = document.getElementById("os").value;
    if (str1 == "") {
        document.getElementById("errOs").innerHTML = "*Vui lòng nhập thông số hệ điều hành !!";
        document.getElementById("div-os").style.borderBottom = "2px solid #de0303";
        document.getElementById("errOs").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errOs").innerHTML = "";
        document.getElementById("div-os").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errOs").style.visibility = "hidden";
        return check = true;
    }
}

function checkDesign() {
    var str1 = document.getElementById("design").value;
    if (str1 == "") {
        document.getElementById("errDesign").innerHTML = "*Vui lòng nhập thiết kế !!";
        document.getElementById("div-design").style.borderBottom = "2px solid #de0303";
        document.getElementById("errDesign").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errDesign").innerHTML = "";
        document.getElementById("div-design").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errDesign").style.visibility = "hidden";
        return check = true;
    }
}

function checkSize() {
    var str1 = document.getElementById("size").value;
    if (str1 == "") {
        document.getElementById("errSize").innerHTML = "*Vui lòng nhập kích thước !!";
        document.getElementById("div-size").style.borderBottom = "2px solid #de0303";
        document.getElementById("errSize").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errSize").innerHTML = "";
        document.getElementById("div-size").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errSize").style.visibility = "hidden";
        return check = true;
    }
}

function checkTime() {
    var str1 = document.getElementById("time").value;
    if (str1 == "") {
        document.getElementById("errTime").innerHTML = "*Vui lòng nhập thời điểm ra mắt !!";
        document.getElementById("div-time").style.borderBottom = "2px solid #de0303";
        document.getElementById("errTime").style.visibility = "visible";
        return check = false;
    } else {
        document.getElementById("errTime").innerHTML = "";
        document.getElementById("div-time").style.borderBottom = "2px solid rgb(185, 185, 185)";
        document.getElementById("errTime").style.visibility = "hidden";
        return check = true;
    }
}