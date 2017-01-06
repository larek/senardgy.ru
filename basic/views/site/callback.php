<?
use app\components\SideMenu;
use yii\helpers\Html;

$this->registerJsFile("/js/callback.js",['depends' => [\yii\web\JqueryAsset::className()]]);
$this->title = $title;
$this->params['breadcrumbs'] = ['label' => $model->title];
?>


<div class="col-md-12">
<h1><?= $model->title;?></h1>
</div>

<div class="col-md-12">
<?= $model->content?>
</div>

<div class="col-md-6" >
    <div class="form-area">  
        <br style="clear:both">
                    
    				<div class="form-group">
						<input type="text" class="form-control name" id="name" name="name" placeholder="Имя*" >
					</div>
					<div class="form-group">
						<input type="text" class="form-control email" id="email" name="email" placeholder="Email" >
					</div>
					<div class="form-group">
						<input type="text" class="form-control phone" id="mobile" name="mobile" placeholder="Номер телефона*" >
					</div>
					<div class="form-group">
						<input type="text" class="form-control company" id="mobile" name="mobile" placeholder="Организация" >
					</div>
					<div class="form-group">
						<input type="text" class="form-control subject" id="subject" name="subject" placeholder="Тема сообщения" >
					</div>
                    <div class="form-group">
                    <textarea class="form-control message" type="textarea" id="message" placeholder="Сообщение" maxlength="140" rows="7"></textarea>
                                         
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right btn-callback">Отправить</button>
        
    </div>
</div>

<br><br>

<div class="col-md-12">
	<div class="alert alert-success" style='display: none'>
        	Спасибо за обращение, в ближайшее время мы свяжемся с вами.
        </div>
</div>
