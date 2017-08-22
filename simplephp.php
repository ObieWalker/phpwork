<?php
$Word = 'TestingFirstLetter';
$newWord = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$Word);
echo $newWord;
?>