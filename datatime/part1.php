<?php 
 /*
    Date And Time Functions

    - date_default_timezone_get()

    - date_default_timezone_set(timezone[Required])

    - date_create(Date/Time[Optional], Timezone[Optional])
    --- Time: Date/Time String || Current Time If NULL
    --- Timezone: Timezone String || Current Timezone

    - timezone_open(Timezone)

    - checkdate(M, D, Y) => All Required
    --- Validate A Gregorian Date

    Will Cover Later
    - date()
    - date_format()

  */
//!  Gettime 
// afficher la zone => //! par default travaille sur le server 
echo date_default_timezone_get() ; 
echo "<br>" ; 
// changer la zone 
date_default_timezone_set("Africa/Casablanca") ;
echo date_default_timezone_get() ;  
echo "<br>" ; 
// afiicher le temps
echo date("Y-m-d") ; 
echo "<br>" ; 
echo date("y-m-d h:i:s") ;
echo "<br>" ; 
$date = date_create("",timezone_open("America/Bogota")) ; 
echo date_format($date , "y-m-d h:i:s") ; 
// checkdate 
echo "<br>" ; 
var_dump(checkdate(5,16,2005)) ; 
echo "<br>" ; 
var_dump(checkdate(1,01,1980)) ; 
echo "<br>" ; 
var_dump(checkdate(-3,16,2001)) ; 
echo "<br>" ; 
var_dump(checkdate(32,2,2012)) ; 

?>