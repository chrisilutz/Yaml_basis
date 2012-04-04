<?php
$menu_data = array(
 "Home"    		=> array("Home", "/"),
 "Kontakt"    	=> array("Kontakt", "kontakt"),
 "Anfahrt"    	=> array("Anfahrt", "anfahrt"),
 );
?>
<?php

$navi = "<nav id='nav'><div class='ym-hlist'><ul>\n";
 foreach ($menu_data as $key => $value) {
  $navi .= " <li";
    if($key != $current_page) {
     $navi .= "><a href='".$value[1]."'>";
    }
	else {$navi .= " class='active'><strong>";
	}
   $navi .= $value[0];
    if($key != $current_page) {
     $navi .= "</a>";
    }
	else {$navi .= "</strong>";
	}
   $navi .= "</li>\n";
 }
$navi .= "</ul></div></nav>";
?>				
