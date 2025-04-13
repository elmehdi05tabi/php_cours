<?php 
class PhpString{
    private $str ; 
    private $length ; 
    public function __construct($par){
        $this->str=$par ; 
        $this->length=strlen($this->str) ; 
    }
    // obtenir la valuer 
    public function __get($att){
       return $this->$att ; 
    }
    // modifier la valuer
    public function __set($att,$val) {
        $this-> $att = $val ; 
    }
    public function __toString()
    {
        return $this->str ;  
    }
    public function __isset($att){
        return isset($this->str) ; 
    }
    public function __unset($att)
    {
         unset($this->str) ;    
    }
}
$str1 = new PhpString("Elmehdi") ; 
// $str1->str="tabi";
// echo $str1->str ;  
// echo '<br/>' ; 
// echo $str1 ; 
// echo '<br/>' ; 
unset($str1->srt) ; 
if (isset($str1->str)) {
    echo "Existe" ; 
}else{
    echo "N'existe Pas" ; 
}
?>