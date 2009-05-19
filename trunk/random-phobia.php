<?php
/*
Plugin Name: Random Phobia
Plugin URI: http://www.randomphobia.com/wp-plugin/
Description: Outputs a random phobia from phobias.txt - <em>Usage: <code>random_phobia('$before', '$after');</code></em>.
Version: 1.0
Author: Frederik Kreijmborg
Author URI: http://www.salaazy.org/
*/

function random_phobia ($pre = '', $suf = '') {
	$file_path = "phobias.txt";
	$phobias = (ABSPATH . "wp-content/plugins/wp-random-phobia/" . $file_path);
	if (!file_exists($phobias)) {
		touch($phobias);
		chmod($phobias, 0644);}
		else {
			$linesize = file("$phobias");
			$single_phobia = rand(0, sizeof($linesize)-1);
			echo $pre, $linesize[$single_phobia], $suf;
			}
        }
?>