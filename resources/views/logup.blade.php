<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&display=swap"
        rel="stylesheet">
    <title>تسجيل دخول</title>
</head>
<body>
    <div class="alllogup">
<p>Home<br><span>online</span></p>
    <div class="formlogup">
    <div class="container">
    <form action="#" method="">
       {{--  <label for="em">Email</label> --}}
        
        {{-- <label for="pass">Password</label> --}}
        <div class="name"><input type="text" name="f_nmae"  placeholder="الاسم الأول" >
        <input type="text" name="l_nmae"  placeholder="الكنية" class="lname"></div>
        
        <input type="email" id="em" name="email" placeholder="البريد الالكتروني" >
        <input type="number" name="phone"  placeholder="رقم الهاتف" class="phone">
        <input type="password" id="pass" name="password" value="pass" placeholder="كلمة السر">
        <input type="submit" name="logup" value="انشاء حساب" class="logup">
        <h4>ــــــــــــــــــــــــ أو ــــــــــــــــــــــــ</h4> 
        <input type="submit" name="login" value="تسجيل دخول" class="login">
    </form></div></div></div>
 
</body>
</html>