<?php 

/* STRINGS */

//Heredoc - treat string as if it's enclosed in double quotes. The line 1 to 3 is your content
$text = <<<TEXT
Line 1
Line 2
Line 3
TEXT;

//echo $text;
echo nl2br($text);

echo '<br>';
echo '<br>';

$x = 1;
$y = 2;

$text2 = <<<TEXT
Line 1 $x
Line 2 $y
Line 3
TEXT;

echo nl2br($text2);

echo '<br>';
echo '<br>';

//Nowdoc - treat string as if it's enclosed in single quotes. The identifier must be enclosed with single quotes and var can no longer be printed
$text3 = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3
TEXT;

echo nl2br($text3);//the var is not printed correctly

//you use these when you have multi-line strings with complex expression, heredoc and nowdoc are more readable and much better than having bunch of concatenation, bunch of quotes and escape quotes. 

//example where we give single and double quotes below

echo '<br>';
echo '<br>';

$x = 1;
$y = 2;

$text4 = <<<TEXT
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;

echo nl2br($text4);

echo '<br>';
echo '<br>';

$text5 = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;

echo nl2br($text5);

echo '<br>';
echo '<br>';

$text6 = <<<'TEXT'
<div>
<p>Hello</p>
<p>World</p>
</div>
TEXT;

echo nl2br($text6);

echo '<br>';
echo '<br>';

//you cannot see the tab or space in the browser. you can var dump it
$text7 = <<<'TEXT'
	Hello World
TEXT;

echo nl2br($text7);
echo '<br>';
var_dump($text7);