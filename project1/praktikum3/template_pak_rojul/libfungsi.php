<?php
// presentase nilai
function presentase ($nilai_uts, $nilai_uas, $nilai_tugas){
    $nilai_akhir = (30 *(int) $nilai_uts / 100) + (35 *(int) $nilai_uas / 100) + (35 * (int) $nilai_tugas / 100);
    return $nilai_akhir;
}

// kelulusan
function kelulusan($nilai){
    if($nilai > 55) {
        return "LULUS";
    }else {
        return "TIDAK LULUS";
    }
}
// method grade nilai 
function grade_nilai ($nilai){
    if($nilai > 85){
        return "A";
    }elseif($nilai > 70){
        return "B";
    }elseif($nilai > 56){
        return "C";
    }elseif($nilai > 36){
        return "D";
    }elseif($nilai > 0){
        return "E";
    }else{
        return "I"; 
    }
}

//method predikat
function predikat($grade){
    switch($grade){
        case "A";
            return " Sangat Baik ";
            break;

        case "B";
            return " Baik ";
            break;

        case "C";
            return " Cukup ";
            break;

        case "D";
            return " Kurang ";
            break;

        case "E";
            return " Sangat Kurang ";
            break;
        default:
            return " Predikat Tidak Terdefinisi ";
    }
}

?>