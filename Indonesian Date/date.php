<?php 
    class Date {
        public function indonesianDate(){
            $englishDays = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
            $indonesianDays = ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"];
            $englishMonths = ["January","February","March","April","June","July","August","September","October",                            "November","December"];
            $indonesianMonths = ["Januari","Februari","Maret","April","Juni","Juli","Agustus","September","Oktober",                           "November","Desember"];
            $tanggal = str_replace(
                $englishDays,
                $indonesianDays, 
                str_replace($englishMonths, $indonesianMonths, date('l, m F Y', strtotime("now"))));
            return $tanggal;
        }
    }
?>