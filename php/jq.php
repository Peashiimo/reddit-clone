<?php

	// configuration
    require_once("../includes/config.php");
	
	$regs = get_new_registrations(30);
	// $regs = ($regs);

	render_mult([
					"jq.php"
				],
				[
					"title"=> "jq",
					"regs"=> $regs
			    ]
		   );
	
?>