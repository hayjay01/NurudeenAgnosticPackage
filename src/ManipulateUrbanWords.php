<?php
namespace Nurudeen;
require "../vendor/autoload.php";

class ManipulateUrbanWords 
{
    private $urbanData;

    public function __construct(){
        $this->urbanData = UrbanWord::$data;
    }

    // retrieve urbanData
    public function show(){
        return $this->urbanData;
    }

    public function isKeyExistInArray($keyDescription){

        $issetKeyInArray = false;
        // checks if inserted key exist in the giving array in_array wont work here because
        // it checks for values in a container or an array alone
        // array_key_exist accept two param 1. key to search for 2. array name
        if( array_key_exists($keyDescription, $this->urbanData) ){
            return true;
        }

        //basically returns true or false at the end of executing this function
        return $issetKeyInArray; 
    }

    public function addDescriptionToArray($slang, $desc, $sample_sentence){
        if($this->isKeyExistInArray($desc)){
            echo "This word ".$desc." Already exist as a description in the array key Try again...";
        }else{
            $newArray = [
                'slang' => $slang,
                'sample_sentence' => $sample_sentence
            ];

            //append description to array 
            $this->urbanData[$desc] = $newArray;

            return $this->urbanData;
        }
    }

    public function destroyDescriptionFromArray($desc){
        //validating if the incoming parameter exist in the array
        if( $this->isKeyExistInArray($desc) ){
            // remove description from array
            unset($this->urbanData[$desc]);
            return true;
        }else{
            //
            echo $desc."is not found in the array key...Try adding new description or meaning";
        }
    }

    public function updateDescriptionFromArray($slang, $desc, $sample_sentence) {
        if ($this->arrayKeyExist($desc)) {
            $updatedArray= [
                'slang' => $slang,
                'sample_sentence' => $sample_sentence
            ];
            $this->urbanData[$desc] = $updatedArray;
            return true;
        }
        echo $desc.' not found in the array...Try again';
    }


}