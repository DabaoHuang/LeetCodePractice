<?php

function join_chars($a, $b) {

    $a = mb_str_split($a);
    $b = mb_str_split($b);
    $answer = '';

    for($i=0 ; $i<max(count($a),count($b)) ; $i++) {
        if($a[$i]) $answer .= $a[$i];
        if($b[$i]) $answer .= $b[$i];
    }

    return $answer;
}

echo join_chars('單元','xy') . "\nd";
echo join_chars('a','xyz') . "\n";
echo join_chars('abc','x') . "\n";
echo join_chars('abc','') . "\n";

?>