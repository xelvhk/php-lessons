=========== Task 6. Сase inversion ==============
function invertCase($text) {
    $result = '';
    for ($i = 0; $i < mb_strlen($text); $i += 1)
    {
        $temp = mb_substr($text,$i,1);
        if ($temp === mb_strtoupper($temp)){
            $result = $result.mb_strtolower($temp);
        }
        else {
            $result = $result.mb_strtoupper($temp);
        }   
    } 
    return $result;
}
