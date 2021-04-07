<html>
<body>





    <?php
$families = array("Ahmadi"=>array("a"=>"Ali","b"=>"Reza","c"=>"Sara"),
"Naderi"=>array("a"=>"Amir"),
"Mohamadi"=>array("a"=>"Poya","b"=>"Parniya")
);
foreach ($families as $k => $v)
foreach ($v as $b=>$v)
echo "families[$k] => $v "."<br />";

?>
</body>
</html>