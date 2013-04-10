<?php
echo shell_exec('cd ..; ls');
$output = shell_exec('cd ..; git pull');
echo '<prev>'.$output.'</prev>';
$output = shell_exec('cd ..; /var/lib/gems/1.8/bin/jekyll');
echo '<prev>'.$output.'</prev>';
?>