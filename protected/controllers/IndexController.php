<?php

  class IndexController extends Controller
  {
    public function actionIndex()
    {

       $num = Art::model()->count();
       $pages = new CPagination($num);
       $criteria = new CDbCriteria;
       if (isset($_GET['art_id'])) {
         $where = "art_id=$_GET[art_id]";//此处用t不用art
         $criteria->addCondition( " $where " , 'AND' );
       }
       $criteria->order = 'pubtime DESC';
       $criteria->limit = 4;
       $pages->pageSize = 3;// 每一页的记录显示多少条
       $pages->applyLimit($criteria);
       //$criteria->limit = 4;//与$pages->pageSize作用相同设置一个即可
       $art = Art::model()->with('cat')->findAll($criteria);
       //print_r($art);
       //print_r($pages);
       $this->renderPartial('index',array('art' =>$art ,'pages'=>$pages ));
    }
    public function actionNotes()
    {
      $num = Art::model()->count();
      $criteria = new CDbCriteria;
      // if (isset($_GET['art_id'])) {
      $where = "t.cat_id=1";//此处用t不用art
      $criteria->addCondition( " $where " , 'AND' );
      // }
      $criteria->order = 'pubtime DESC';
      //$criteria->limit = 4;//与$pages->pageSize作用相同设置一个即可
      $art = Art::model()->with('cat')->findAll($criteria);
      //print_r($art);
      $this->renderPartial('notes',array('art' =>$art ));
    }
    public function actionMend()
    {
      $num = Art::model()->count();
      $criteria = new CDbCriteria;
      // if (isset($_GET['art_id'])) {
      $where = "t.cat_id=2";//此处用t不用art
      $criteria->addCondition( " $where " , 'AND' );
      // }
      $criteria->order = 'pubtime DESC';
      //$criteria->limit = 4;//与$pages->pageSize作用相同设置一个即可
      $art = Art::model()->with('cat')->findAll($criteria);
      $this->renderPartial('mend',array('art' =>$art ));
    }
    public function actionThink()
    {
      $num = Art::model()->count();
      $criteria = new CDbCriteria;
      // if (isset($_GET['art_id'])) {
      $where = "t.cat_id=3";//此处用t不用art
      $criteria->addCondition( " $where " , 'AND' );
      // }
      $criteria->order = 'pubtime DESC';
      //$criteria->limit = 4;//与$pages->pageSize作用相同设置一个即可
      $art = Art::model()->with('cat')->findAll($criteria);
      $this->renderPartial('think',array('art' =>$art ));
    }
    public function actionSearch()
    {
      $word = Yii::app()->request->getParam('wordname');
      if (!$word) {
        return ;
      }
      $criteria = new CDbCriteria;
      $criteria->select = 'art_id,content';
      $criteria->addSearchCondition('content',$word);
      $criteria->order = 'pubtime DESC';
      $data = Art::model()->findAll($criteria);
      //print_r($data);
      echo  CJSON::encode($data);
    }
  }



 ?>
