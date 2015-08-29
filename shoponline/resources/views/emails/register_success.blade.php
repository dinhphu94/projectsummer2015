<h1>Chào, {{ $name }}!</h1>
<p>Chào mừng bạn đến với GFashion shop. Chúng tôi rất vui mừng với sự tham gia của bạn</p>

<p>Để kích hoạt tài khoản này, bạn vui lòng sao chép liên kết dưới đây vào trình duyệt:.</p>
<?php
$href = "http://localhost/shoponline/public/activated/" . $email . "/" . $token;
echo $href;
?>