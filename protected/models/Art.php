<?php
class Art extends CActiveRecord{
   public static function model($className=__CLASS__){

   	return parent::model($className);
   }

   public function tableName(){

   	 return 'art';
   }
   public function relations()
    {
        return array(
           'cat'=>array(self::BELONGS_TO, 'cat', 'cat_id'),
            //'cat'=>array(self::HAS_ONE, 'cat', 'cat_id'),

        );
    }

}

?>
