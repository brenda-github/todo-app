<?php
function generateId (){
    srand(mktime(12));
    $uniqueId = rand();
return $uniqueId;
    
}
?>