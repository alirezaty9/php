
<?php
class My_class
{
  public $name="Alireza";
  function SayHello()
  {
   print "Hello My Name is $this->name";
  }
}

$obj=new My_Class();
$obj->SayHello();
?>