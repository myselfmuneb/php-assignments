<?php

	$total_score = 100;
	$score = 66;
	$score_per = $score /$total_score * 100;

	switch ($score_per) {
		
		case $score_per<'50%':
			echo "You are fail because you got less then 50%. Grade: F";
			break;
		case $score_per<'60%':
			echo "You are pass. Grade: D";
			break;
		case $score_per<'70%':
			echo "You are pass. Grade: C";
			break;
		case $score_per<'80%':
			echo "You are pass. Grade: B";
			break;			
		case $score_per<'90%':
			echo "You are pass. Grade: A";
			break;
		case $score_per<='100%':
			echo "You are pass. Grade: A+";
			break;	
			default: echo "Given score $score is invalid";			
	
	}		
	
	