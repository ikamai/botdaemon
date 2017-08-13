<?php

$tx = shell_exec('ps aux | grep apibot.sh');
$tx = explode("\n",$tx);
foreach($tx as $t){
	if(strpos($t,'container/apibot')!==false){
		$t = preg_replace('/\s+/', ' ', $t);
		echo $t."\n";
	}
}
