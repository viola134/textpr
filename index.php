<?php
$text = 'Hi, $world! $It is #PHP!';
echo preg_replace("/([\$]\w+)/", "<b>$1</b>", $text);
