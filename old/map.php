 <base href="https://maps.google.com">
 <style>
 .pane {display:none; visibility:hidden;}
 </style>
<?php 
echo file_get_contents('https://www.google.com/maps/dir/?api=1&destination=herlianska&dir_action=navigate');

?> 