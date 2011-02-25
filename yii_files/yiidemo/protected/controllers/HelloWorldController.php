<?php
/**
 * Created by karthik.
 * Date: 2/23/11
 * Time: 10:31 AM
 */
 
class HelloWorldController extends CController
{

    public function actionIndex()
    {

        $data = array();
        $data["myValue"] = "Content Loaded";
        $this->render('index',$data);
    }
    public function actionUpdateAjax()
    {

        $data = array();
        $data["myValue"] = "Content updated in ajax";
        $this->renderPartial('_ajaxContent',$data,false,true);
    }
}