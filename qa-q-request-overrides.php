<?php

function qa_q_request($questionid, $title)
{
	$turkishCharacters = array("ç","Ç","ğ","Ğ","ı","İ","ö","Ö","ş","Ş","ü","Ü");
	$changeCharacters = array ("c","C","g","G","i","I","o","Ö","s","S","u","U");

	$title = str_replace($turkishCharacters, $changeCharacters, $title);
	return qa_q_request_base($questionid, $title);
}