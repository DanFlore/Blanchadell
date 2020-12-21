<?php 
if(is_array($params)){
echo json_encode($params);
}else{
    echo $params;
}
?>