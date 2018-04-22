<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        $female = array("ค่ะ","หนู");
        $male = array("ครับ","ผม");
        for($i=0;$i<sizeof($male);$i++){
            
            if(strpos($text, $male[$i]) !== false){                
                return 'Male';
            }
        }

        for($i=0;$i<sizeof($female);$i++)
        {
            if(strpos($text, $female[$i]) !== false){
                return 'Female';
            }
        }  
        return 'Unknown';
    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        return 'Neutral';
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        return ['TH', 'EN'];
    }
}
