<?php
if (!function_exists('convertNumericDateToAlphabetical')) {
    function convertNumericDateToAlphabetical($stringDate)
    {
        if ($stringDate != null) {
            $number = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            $stringDate = explode("-", $stringDate);
            switch ($stringDate[1]) {
                case '01':
                    $str = $stringDate[2] . ' ' . $number[0] . ' ' . $stringDate[0];
                    break;
                case '02':
                    $str = $stringDate[2] . ' ' . $number[1] . ' ' . $stringDate[0];
                    break;
                case '03':
                    $str = $stringDate[2] . ' ' . $number[2] . ' ' . $stringDate[0];
                    break;
                case '04':
                    $str = $stringDate[2] . ' ' . $number[3] . ' ' . $stringDate[0];
                    break;
                case '05':
                    $str = $stringDate[2] . ' ' . $number[4] . ' ' . $stringDate[0];
                    break;
                case '06':
                    $str = $stringDate[2] . ' ' . $number[5] . ' ' . $stringDate[0];
                    break;
                case '07':
                    $str = $stringDate[2] . ' ' . $number[6] . ' ' . $stringDate[0];
                    break;
                case '08':
                    $str = $stringDate[2] . ' ' . $number[7] . ' ' . $stringDate[0];
                    break;
                case '09':
                    $str = $stringDate[2] . ' ' . $number[8] . ' ' . $stringDate[0];
                    break;
                case '10':
                    $str = $stringDate[2] . ' ' . $number[9] . ' ' . $stringDate[0];
                    break;
                case '11':
                    $str = $stringDate[2] . ' ' . $number[10] . ' ' . $stringDate[0];
                    break;
                case '12':
                    $str = $stringDate[2] . ' ' . $number[11] . ' ' . $stringDate[0];
                    break;
                default:
                    $str = $stringDate[2] . '  not valid  ' . $stringDate[0];
                    break;
            }
            return $str;
        } else {
            return $stringDate;
        }
    }
}
