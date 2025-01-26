<?php 
/*
 pre-definded contante [case sensitive]
 -PHP_VERSION 
 -PHP_OS_FAMILY
 -PHP_INT_MAX
 DEFAULT_INCLUDE_PATH

 magic constants [case insensitive]
 
Constant	Description	
__CLASS__	If used inside a class, the class name is returned.	
__DIR__	The directory of the file.	
__FILE__	The file name including the full path.	
__FUNCTION__	If inside a function, the function name is returned.	
__LINE__	The current line number.	
__METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
__TRAIT__	If used inside a trait, the trait name is returned.	
ClassName::class	Returns the name of the specified class and the name of the namespace, if any.

 reserve keywords 
 -break 
 - clone 
 - .. 
 searsh 
 - php predefides constante 
 - compile time vs Runtime 
 - list of reserves words 

*/

echo PHP_OS_FAMILY ; // => type of user 
echo '<br>'; 
echo PHP_INT_MAX ;   // => max number 
echo '<br>';
echo DEFAULT_INCLUDE_PATH ;
echo '<br>';
echo __LINE__ ;
echo '<br>';
echo __DIR__ ;
echo '<br>';
echo __file__;
echo '<br>';
?>