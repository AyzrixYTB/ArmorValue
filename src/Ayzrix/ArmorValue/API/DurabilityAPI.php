<?php

#                                        __      __   _
#       /\                               \ \    / /  | |
#      /  \   _ __ _ __ ___   ___  _ __   \ \  / /_ _| |_   _  ___  ___
#     / /\ \ | '__| '_ ` _ \ / _ \| '__|   \ \/ / _` | | | | |/ _ \/ __|
#    / ____ \| |  | | | | | | (_) | |       \  / (_| | | |_| |  __/\__ \
#   /_/    \_\_|  |_| |_| |_|\___/|_|        \/ \__,_|_|\__,_|\___||___/
#
#

namespace Ayzrix\ArmorValue\API;

class DurabilityAPI {

    /**
     * @param int $id
     * @return int
     */
    public static function getBaseDurability(int $id): int {
        switch ($id) {
            case 298:
                return 56;
            case 299:
                return 81;
            case 300:
                return 76;
            case 301:
                return 66;
            case 302:
            case 306:
                return 166;
            case 303:
            case 307:
                return 241;
            case 304:
            case 308:
                return 226;
            case 305:
            case 309:
                return 196;
            case 310:
                return 364;
            case 311:
                return 529;
            case 312:
                return 496;
            case 313:
                return 430;
            case 314:
                return 78;
            case 315:
                return 113;
            case 316:
                return 106;
            case 317:
                return 92;
            case 748:
                return 407;
            case 749:
                return 592;
            case 750:
                return 555;
            case 751:
                return 481;
            default:
                return 0;
        }
    }
}
