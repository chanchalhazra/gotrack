<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class gotrackActiveRecord extends CActiveRecord
{
    /*
     * prepares for create_user_id and Update_user_id before saving
     
     */
    protected function beforeSave() 
    {
        
        
        if (!null == yii::app()->user)
        {
            $id = yii::app()->user->id;
            
        }
        else
        {
            $id=1;
        }
        
        if($this->isNewRecord)
            $this->create_user_id =$id;
        
        $this->update_user_id = $id;
        
        return parent::beforeSave();
    }
    
    public function behaviors() {
       return array(
       'CTimestampBehavior'=>array(
           'class'=>'zii.behaviors.CTimestampBehavior',
           'createAttribute'=>'create_time',
           'updateAttribute'=>'update_time',
           'setUpdateOnCreate'=>true
             )
        );
    }
}