<?php
$output = shell_exec('cd ..; git pull');
echo '<p>'.$output.'</p>';
$output = shell_exec('cd ..; /var/lib/gems/1.8/bin/jekyll');
echo '<p>'.$output.'</p>';
?>
