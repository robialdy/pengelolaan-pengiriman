<?php

	function createSlug($string)
	{

		$string = strtolower($string);

		$string = preg_replace('/[^a-z0-9]+/i', '-', $string);

		$string = trim($string, '-');
		
		return $string;
	}

