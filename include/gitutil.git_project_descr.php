<?php
/*
 *  gitutil.git_project_descr.php
 *  gitphp: A PHP git repository browser
 *  Component: Git utility - project description
 *
 *  Copyright (C) 2008 Christopher Han <xiphux@gmail.com>
 */

require_once('defs.constants.php');

function git_project_descr($projectroot,$project,$trim = FALSE)
{
	$desc = file_get_contents($projectroot . $project . "/description");
	if ($trim && (strlen($desc) > GITPHP_TRIM_LENGTH))
		$desc = substr($desc,0, GITPHP_TRIM_LENGTH) . "...";
	return $desc;
}

?>
