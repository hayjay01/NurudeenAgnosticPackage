<?php
re Nurudeen;
require "../vendor/autoload.php";

class rankOrder{

    public function __construct(){
        $this->urbanData = UrbanWord::$data;
    }


    public function rankWordAndSort($sample_sentence) {
        $rankWords = [];
        $rankrWords = array_count_values(str_word_count(strtolower($sample_sentence), 1));
        arsort($rankWords);

        return $rankWords;
    }

    
}

$rank = new rankOrder();
$rank->rankWordAndSort($this->urbanData);
