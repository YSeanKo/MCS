<?php

class MainController extends Controller {

    public function actionHome() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->layout = 'main';
        $this->render('home');
    }

    public function actionProfile() {
        $this->layout = 'main';
        $this->render('profile');
    }

    public function actionClaim() {
        $this->layout = 'claim';
        $this->render('claim');
    }

    public function actionStatus() {
        $this->layout = 'main';
        $this->render('status');
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