<?php
// other format 0f for loop
$x=1;
for ( ; $x <=10; $x++) {
echo $x*$x,"<BR>\n";
}
echo "-----------------<br>";
$x=1;
for ( ; $x <=10; ) {
echo $x*$x,"<BR>\n";
$x++;
}
echo "-----------------<br>";
?>