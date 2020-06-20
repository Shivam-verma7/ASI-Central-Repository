<?php
$command = escapeshellcmd('/usr/python37/myfile.py');
$output = shell_exec($command);
echo $output;
?>