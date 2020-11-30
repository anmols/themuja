<?php 
set_time_limit(0);
header("Content-type: text/event-stream");

while(1){
    echo "data:" . date("Y-m-d H:i:s") . "\n\n";
    @ob_flush();flush();
    sleep(1);
    }