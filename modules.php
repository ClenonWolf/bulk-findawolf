<?php
//Not needed but wanted to try it out
function scan_dir($path){
    $ite=new RecursiveDirectoryIterator($path);
    $bytestotal=0;
    $nbfiles=0;
    foreach (new RecursiveIteratorIterator($ite) as $filename=>$cur) {
        $filesize=$cur->getSize();
        $bytestotal+=$filesize;
        $nbfiles++;
        $files[] = $filename;
    }
    $bytestotal=number_format($bytestotal);
    return array('total_files'=>$nbfiles,'total_size'=>$bytestotal,'files'=>$files);
}