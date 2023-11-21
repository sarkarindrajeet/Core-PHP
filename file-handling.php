
<?php
// echo readfile('doc/text.doc');
echo "<br>";
$openfile = fopen("doc/text.doc", "r") or die("unable to open file!");
echo fread($openfile, filesize("doc/text.doc"));
fclose($openfile);

?>