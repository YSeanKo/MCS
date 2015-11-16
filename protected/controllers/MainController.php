<?php

class MainController extends Controller {
    public function actionIndex() {
        //$this->render('index');
        if (Yii::app()->request->isAjaxRequest == Yii::app()->getRequest()->getIsAjaxRequest())
            ;
        $this->redirect($this->createUrl('landing'));
    }

    public function actionLanding() {

            $model = new LoginForm;

            // if it is ajax validation request
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }

            // collect user input data
            if (isset($_POST['LoginForm'])) {
                $model->attributes = $_POST['LoginForm'];
                // validate user input and redirect to the previous page if valid
                if ($model->validate() && $model->login())
                    $this->redirect( array('/main/home') );
                    //$this->redirect(Yii::app()->user->returnUrl); //redirects to URL from which request came from

            }
            // display the login form
        $this->layout = 'landing';
        $this->render('landing', array('model' => $model));
           // $this->render('login', array('model' => $model));
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