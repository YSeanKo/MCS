<?php

class MainController extends Controller {
    public function actionIndex() {
        //$this->render('index');
        if (Yii::app()->request->isAjaxRequest == Yii::app()->getRequest()->getIsAjaxRequest())
            ;
        $this->redirect($this->createUrl('landing'));
    }

    public function actionLanding() {
        $this->layout = 'landing';
        $this->render('landing');

    }

    public function actionHome() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->layout = 'index';
        $this->render('index');
    }

    public function actionOthers() {
        $this->render('others');
    }

    public function actionContact() {
        $this->render('contact');
    }

    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'inlineFilterName',
            array(
                'class'=>'path.to.FilterClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }

    public function actions()
    {
        // return external action classes, e.g.:
        return array(
            'action1'=>'path.to.ActionClass',
            'action2'=>array(
                'class'=>'path.to.AnotherActionClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }
    */


}