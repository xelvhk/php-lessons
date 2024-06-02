=========== Task 10. Number flip function ==============
function reverse (int $num) 
{
    if ($num > 0){
        $temp = strrev(strval($num));
    }
    elseif ($num === 0) {
        $temp = 0;
    }
    else {
        $temp = "-".strrev(strval($num));
    }
    return intval($temp);
}
