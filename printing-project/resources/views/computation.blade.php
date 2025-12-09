<?php

function computeCost($originals, $copies, $isB2B, $paperType, $serviceType){
    //PHOTOCOPY
    $totalCost = 0;
    $paperCost = 0;
    $serviceCost = 0;

    if($copies >= 100){
        $serviceCost = ($copies - 100)/5;
    }

    if($serviceType === "RISOGRAPH"){
        if($paperType == 0){
            //US Bondpaper
        }else if($paperType == 1){
            //Newsprint
        }else if($paperType == 2){
            //Color Bondpaper
        }
    }
}