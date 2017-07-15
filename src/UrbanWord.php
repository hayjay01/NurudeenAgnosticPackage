<?php
namespace Nurudeen;
require "../vendor/autoload.php";

class UrbanWord 
{
	public static $data = [
		"slang" => "Tight",
		"description" => "When someone performs an awesome task",
		"sample_sentence" => "Andrei: Prosper, Have you finished the curriculum?.\nProsper: Yes.\nAndrei: Tight, Tight, Tight!!!"
		];
}

$inst = new UrbanWord();
// print_r($inst::$data);

