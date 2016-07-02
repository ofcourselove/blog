<?php
class Cat extends CActiveRecord{
   public static function model($className=__CLASS__){

   	return parent::model($className);
   }

   public function tableName(){

   	 return 'cat';
   }
   public function relations()
    {
        return array(
            //'art'=>array(self::BELONGS_TO, 'art', 'cat_id'),
            'art'=>array(self::HAS_MANY, 'art', 'cat_id'),

        );
    }

}

?>
