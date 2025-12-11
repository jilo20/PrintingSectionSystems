<?php

namespace App\Helpers;

class Computation
{
    public static function computeCost($originals, $copies, $isB2B, $paperType, $serviceType)
    {
        $totalCost = 0;
        $paperCost = 0;
        $serviceCost = 0;

        if ($serviceType === "RISOGRAPH" || $serviceType === "PHOTOCOPY") {
            $shortB2BPrice = 2;
            $longB2BPrice = 3;
            $shortPrice = 1.5;
            $longPrice = 2;

            // Pricing for <= 99 copies
            if ($copies <= 99) {
                if ($isB2B == 1) {
                    $b2bOriginal = ($originals % 2 != 0) ? floor($originals / 2) + 1 : $originals / 2;
                    $totalCost = $b2bOriginal * $copies * $longPrice;
                } else {
                    $totalCost = $originals * $copies * $longPrice;
                }
                return $totalCost;
            }

            // Pricing for 100-500 copies
            if ($copies >= 100 && $copies <= 500) {
                $serviceCost = (ceil(($copies - 100) / 5) + 65) * $originals;
            } elseif ($copies > 500) {
                $serviceCost = $originals * $copies * 0.30;
            }

            // Paper cost based on type
            $paperPrices = [
                0 => 0.5,   // US Bondpaper
                1 => 0.46,  // Newsprint
                2 => 0.55,  // ColorBond
                3 => 0.5,   // Bondpaper S
                4 => 0.45,  // Newsprint S
                5 => 0.55,  // ColorBond S
            ];

            if (isset($paperPrices[$paperType])) {
                if (!$isB2B) {
                    $paperCost = $originals * $copies * $paperPrices[$paperType];
                } else {
                    $b2bOriginal = ($originals % 2 != 0) ? floor($originals / 2) + 1 : $originals / 2;
                    $paperCost = $b2bOriginal * $copies * $paperPrices[$paperType];
                }
            }

            $totalCost = $paperCost + $serviceCost;
        }

        if ($serviceType === 'LAMINATION') {
            if ($paperType === 6) $totalCost = $copies * 70;
            elseif ($paperType === 7) $totalCost = $copies * 90;

            return $totalCost;
        }

        if ($serviceType === 'SORT') {
            $totalCost = $originals * $copies * 0.03;
        }

        return $totalCost;
    }
}
