<?php
echo $_SERVER['PHP_SELF'];//نام فایل اسکریبتی که اخیراً اجرا شده است را برمی گرداند
echo "<br>";
echo $_SERVER['SERVER_NAME'];//نام سرور هاست را برمی گرداند
echo "<br>";
echo $_SERVER['HTTP_HOST'];//با توجه به درخواست جاری، هدر هاست را برمی گرداند
echo "<br>";
echo $_SERVER['HTTP_REFERER'];//آدرس کامل صفحه جاری را برمی گرداند
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];//اطلاعات مرورگر و سیستم عامل و ... را برمی گرداند
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];//مسیر اسکریبت جاری را برمی گرداند
?>