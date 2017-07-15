<?php
namespace NurudeenUrbanPackage;
require "../vendor/autoload.php";

class ManipulateUrbanWords 
{
    private $urbanData;

    public function __construct(){
        $this->urbanData = UrbanWord::$data;
    }

    public function show(){
        return $this->data;
    }

    public function isKeyExistInArray($keySlang){

        $issetKeyInArray = false;
        // checks if inserted key exist in the giving array in_array wont work here because
        // it checks for values in a container or an array alone
        if( array_key_exists($keySlang, $this->urbanData) ){
            return true;
        }

        //basically returns true or false at the end of executing this function
        return $issetKeyInArray; 
    }

    public function createUrbanWords($slang, $desc, $sample_sentence){
        if($this->isKeyExistInArray($slang)){
            echo "This slang Already exist in the array key Try again...";
        }else{
            $newArray = [
                'description' => $desc,
                'sample_sentence' => $sample_sentence
            ];

            $this->urbanData[$slang] = $newArray;

            return $this->urbanData;
        }
    }

}