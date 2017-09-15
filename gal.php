<?php
header('Content-Type: text/json');
echo '{"images":[';
if ($handle = opendir('img/gal/')) {
$result = "";
    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        
        if ($entry != "." && $entry != "..") {
            $result .= '{"name":"'.$entry.'"},';
            
        }
    }
    
    echo substr($result, 0,-1);
    closedir($handle);
}
echo "]}";
?>