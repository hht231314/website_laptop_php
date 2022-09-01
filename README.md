> ## GIỚI THIỆU TRANG WEB PHP LAPTOP
___________________________________________________________________________________________________________________
 **Demo đầy đủ (đã tua nhanh): [tại đây](https://drive.google.com/file/d/19rxZmOdPvkFDjgTpb1HQrlUSjnw3u0On/view?usp=sharing) 
<br>Các video Demo lẻ: [tại đây](https://drive.google.com/drive/folders/1n5aYw11h9ae0ehNC5GEULy9HNfPf4IoL?usp=sharing)
<br>Folder Video Demo: [tại đây](https://drive.google.com/drive/folders/1OI1IZB4d10008jSEun3tmPu-1AokW9oz?usp=sharing)**
___________________________________________________________________________________________________________________
> ### 1. Công nghệ sử dụng
- PHP là chính.
- JavaScript để bắt lỗi Form.
- Ajax để kiểm tra số điện thoại trùng.
- Database MySQL.
> ### 2. Demo trang Web
```PHP
Trang Index
```

<IMG SRC="Img/Index.png" WIDTH="800" >

```PHP
Thông tin ở cuối trang Web
```

<IMG SRC="Img/footer.png" WIDTH="800" >

```PHP
Menu khi chưa đăng nhập
```

<IMG SRC="Img/Menu.png" WIDTH="800" >

```PHP
Menu khi khách hàng đăng nhập
```

<IMG SRC="Img/menuUser.png" WIDTH="800" >

```PHP
Menu khi Admin đăng nhập
```

<IMG SRC="Img/menuAdmin.png" WIDTH="800" >

```PHP
Trang thông tin cá nhân
```

<IMG SRC="Img/profile.png" WIDTH="800" >

```PHP
Sửa thông tin cá nhân
```

<IMG SRC="Img/editProfile.png" WIDTH="800" >

```PHP
Trang xem Laptop: phân chia theo brand.
```

<IMG SRC="Img/showlaptop.png" WIDTH="800" >

```PHP
Xem chi tiết Laptop: có thể thêm vào giỏ hàng hoặc thêm vào yêu thích.
```

<IMG SRC="Img/infoLaptop.png" WIDTH="800" >

```PHP
Nếu hết hàng sẽ ẩn nút thêm vào giỏ và yêu thích.
```

<IMG SRC="Img/infoLaptopHide.png" WIDTH="800" >

```PHP
Trang đăng nhập
```

<IMG SRC="Img/login.png" WIDTH="800" >

```PHP
Báo lỗi đăng nhập
```

<IMG SRC="Img/loginErr.png" WIDTH="800" >

```PHP
Trang đăng ký
```

<IMG SRC="Img/signupTop.png" WIDTH="800" >
<IMG SRC="Img/signupBot.png" WIDTH="800" >

***Báo lỗi đăng ký:***
|--------------------------------------------------------------------------------------------------------------------------------------------------------------|
|-	Không được bỏ trống.                                                                                                                                       | 
| -	Mật khẩu phải có cả chữ cái và số, không được có ký tự khác ngoài chữ cái và số, dài từ 6 đến 15 ký tự (dùng biểu thức chính quy).                         | 
| -	Mật khẩu không khớp.                                                                                                                                       |
| -	Email không hợp lệ (dùng biểu thức chính quy).                                                                                                             |
| -	Số điện thoại đã tồn tại. (dùng Ajax).                                                                                                                     | 
| -	Số điện thoại không hợp lệ!! Không đúng định dạng (dùng biểu thức chính quy).                                                                              |
<IMG SRC="Img/signupTopErr.png" WIDTH="800" >
<IMG SRC="Img/signupBotErr.png" WIDTH="800" >

```PHP
Giỏ Hàng có thể thay đổi số lượng sản phẩm, xóa và đặt hàng.
```

<IMG SRC="Img/cart.png" WIDTH="800" >

```PHP
Trang yêu thích sản phẩm có thể xóa hoặc thêm vào giỏ hàng. Trong trường hợp sản phẩm đã có trong giỏ hàng thì sẽ cộng dồn số lượng lên.
```

<IMG SRC="Img/wishList.png" WIDTH="800" >

```PHP
Trang Đơn Hàng cho phép xem những đơn hàng đã đặt và xem trạng thái đơn hàng. Sắp xếp theo trạng thái đơn hàng.
```

<IMG SRC="Img/purchase.png" WIDTH="800" >

```PHP
Trang quản lý User cho phép thêm, sửa, xóa User. Ngoài ra có thể set “User” thành “Admin” và ngược lại.
```
```PHP
Trang thêm User là trang đăng ký.
```

<IMG SRC="Img/ad_user.png" WIDTH="800" >

```PHP
Trang quản lý Laptop cho phép thêm, sửa, xóa Laptop. Ngoài ra còn có sửa trạng thái Laptop. Laptop ở trạng thái “hết hàng” sẽ nằm ở cuối cùng.
Trang này được sắp xếp theo brand.
```

<IMG SRC="Img/ad_laptop.png" WIDTH="800" >

```PHP
Trang quản lý đơn hàng chỉ có tính năng cập nhật trạng thái đơn hàng.
```

<IMG SRC="Img/ad_purchase.png" WIDTH="800" >

```PHP
Cập nhật trạng thái đơn hàng, đơn hàng được sắp xếp theo trạng thái đơn hàng.
```

<IMG SRC="Img/purchaseStatus.png" WIDTH="800" >

```PHP
Trang profile của Admin không có tính năng xóa tài khoản.
```

<IMG SRC="Img/profileAdmin.png" WIDTH="800" >

```PHP
Thêm Laptop
```

<IMG SRC="Img/addLaptop.png" WIDTH="800" >

```PHP
Báo lỗi thêm Laptop không cho bỏ trống.
```

<IMG SRC="Img/addLaptopErr.png" WIDTH="800" >

```PHP
Chuyển tiếp sang thêm hình ảnh mô tả Laptop đó.
```

<IMG SRC="Img/addPictures.png" WIDTH="800" >

```PHP
Báo lỗi thêm hình ảnh không được bỏ trống.
```

<IMG SRC="Img/addPicturesErr.png" WIDTH="800" >

```PHP
Hạn chế không cho người dùng truy cập các trang dành cho Admin. Hiện thông báo và chuyển về trang Index.
```

<IMG SRC="Img/permit.png" WIDTH="800" >
<IMG SRC="Img/Index.png" WIDTH="800" >

```PHP
Chưa đăng nhập sẽ không thể vào một số trang như giỏ hàng, yêu thích, đơn hàng, các trang dành cho Admin. Cụ thể là sẽ chuyển hướng về trang đăng nhập.
```

<IMG SRC="Img/login.png" WIDTH="800" >

> ### 3.	Một số Logo đã sử dụng trong trang Web
  *Các Logo này do chính chủ làm ra. Logo nhà làm, đơn sơ đạm bạc mong bạn không reup.*
```PHP
Logo trang Web: chữ HT được bao bọc bởi 1 đám mây.. không phải trái tim đâu..
```

<IMG SRC="Img/HT_Cloud_Logo_1.png" WIDTH="500" >

```PHP
Logo Sign Up
```

<IMG SRC="Img/SignUp.png" WIDTH="250" >

```PHP
Logo Login
```

<IMG SRC="Img/Login_1.png" WIDTH="250" >

```PHP
Logo Profile
```

<img src="Img/Profile_1.png" width="250" >
