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

    public function actionClaim()
    {
        $this->layout = 'claim';
        $model = new Trip;
//        $this->render('claim', array('model' => $model));
//
//        if ($model->load(Yii::$app->request->post()) && $model->claim(Yii::$app->params['adminEmail']))
//        {
//            Yii::$app->session->setFlash('contactFormSubmitted');
//
//            return $this->refresh();
//        }
//        else
//        {
//            return $this->render('claim', array('model' => $model));
//        }
        if (isset($_POST['Trip'])) {
            $model->attributes = $_POST['Trip'];
            $model->claim();
            Yii::app()->user->setFlash('claim','Thank you for contacting us. We will respond to you as soon as possible.');
            $this->refresh();
        }

        $dataProvider=new CActiveDataProvider('Trip');

        $this->render('claim', array('model' => $model, 'dataProvider'=>$dataProvider,
        ));
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

    public function actionSummary() {
        $model = new Trip;

        $this->render('summary', array('model'=>$model));
    }

    public function actionView() {
        $this->layout = 'main';
        $dataProvider=new CActiveDataProvider('Trip');
        $this->render('view',array(
            'dataProvider'=>$dataProvider,
        ));
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