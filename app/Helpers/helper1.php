<?php
function get_all($model){
    $data=$model::all();
    return $data;
}
?>