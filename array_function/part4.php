<?php 
/*
    Array Functions

    --- Every Array Has An Internal Pointer To Its "Current" Element
    --- Which Is Initialized To The First Element.
    --- Functions Returns Value Of Array Element That's Currently Pointed By The Internal Pointer

    - current(Array[Required]) => Return The Current Element In An Array
    - next(Array[Required]) => Advance The Internal Pointer
    - prev(Array[Required]) => Rewind The Internal Pointer
    - reset(Array[Required]) => Put The Internal Pointer On First Element
    - end(Array[Required]) => Put The Internal Pointer On Last Element

  */
  $amis = ["elmehdi","ahmed","morad","brahim","sameh","asmae"]  ;
  echo  current($amis)."<br>" ;  //elmehdi
  echo next($amis)."<br>" ; // ahmed
  echo current($amis)."<br>" ; //ahmed
  echo next($amis)."<br>" ; // morad
  echo reset($amis)."<br>" ; // elemhdi
  echo current($amis)."<br>" ;// elmehdi
  echo next($amis)."<br>" ;// ahmed 
  echo end($amis)."<br>" ;  // asmae
?>