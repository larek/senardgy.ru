<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Pages;

use harrytang\fineuploader\FineuploaderHandler;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionNews(){
      return $this->render('news');
    }

    public function actionIndex()
    {
        $guid = Yii::$app->request->get('guid');
        $model_child = Pages::find()->where(['parent_id' => 1])->all();

        return $this->render('index',[
            'model_child' => $model_child,
            'guid' => $guid,
        ]);
    }

    public function actionSimplePage(){
        return $this->render('simple-page');
    }

    public function actionLogin()
    {
        $this->layout = 'login';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        $uploader = new FineuploaderHandler();
        $uploader->allowedExtensions = ['jpeg', 'jpg', 'png', 'bmp', 'gif']; // all files types allowed by default
        $uploader->sizeLimit = YOUR_PHP_MaxFileSizeLimit;
        $uploader->inputName = "qqfile"; // matches Fine Uploader's default inputName value by default
        //$uploader->chunksFolder = "chunks";
        if (Yii::$app->request->isPost) {
            // upload file
            $result = $uploader->handleUpload("/upload");
            if (isset($result['success']) && $result['success'] == true) {
                // do something more
            }
            echo json_encode($result);
        }
        return $this->render('about');
    }

    public function actionView(){

        $guid = Yii::$app->request->get('guid');

        $page = Pages::find()->where(['guid' => $guid])->one();

        $page->seo_title=="" ? $title = $page->title : $title = $page->seo_title;

        $page->parent_id == 0 ? $model_child = Pages::find()->where(['parent_id' => $page->id])->all() : $model_child = Pages::find()->where(['parent_id' => $page->parent_id])->all();
        
        count($model_child)>0 ? $divTemplate="col-xs-12" : $divTemplate="col-xs-12";

        $page->type=="" ? $viewTemplate = "view" : $viewTemplate = $page->type;

        $parents_array = $this->getParents($page->id);

        $rootParent = $this->getRootParent($page->id);

        return $this->render($viewTemplate, [
            'model' => $page,
            'title' => $title,
            'model_child' => $model_child,
            'divTemplate' => $divTemplate,
            'guid' => $guid,
            'parents_array' => $parents_array,
            'rootParent' => $rootParent,
            ]);
    }

    public function actionCallback(){

            echo Yii::$app->mail->compose('layouts/callback',['name' => $_GET['name'], 'company' => $_GET['company'], 'phone' => $_GET['phone'], 'email' => $_GET['email'], 'subject' => $_GET['subject'], 'message' => $_GET['message']])
            ->setFrom(['saitom@yandex.ru' => 'formulakd.ru'])
            ->setTo(['t9101029991@gmail.com'])
            ->setSubject('Обратный звонок с сайта')
            //->setHtmlBody('Заказ - <a href="http://'.$_SERVER['SERVER_NAME'].$url.'">Ссылка на заказ</a>')
            ->send();

    }

    protected function getParents($id){
        static $parents_array = [];
        $model = Pages::find()->where(['id' => $id])->one();
        if($model->parent_id !== 0) {
            $page = Pages::find()->where(['id' => $model->parent_id])->one();
            $parents_array[] = [
                'label' => $page->title,
                'url' => $page->guid,
                ];
                $this->getParents($page->id);
        }
       
        return array_reverse($parents_array);

    }

    protected function getRootParent($id){
        static $rootParentId;
        $model = Pages::find()->where(['id' => $id])->one();
        if($model->parent_id == 0) {
            $rootParentId = $model->id;
        }else{
            $page = Pages::find()->where(['id' => $model->parent_id])->one();
            $this->getRootParent($page->id);
        } 

       return $rootParentId;

    }
}
