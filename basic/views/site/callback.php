<?
use app\components\SideMenu;
use yii\helpers\Html;


$this->title = $title;

?>

<table class="tblContent" cellpadding="0" cellspacing="0">
        <tr>

            <td class="tdLeftNavigation noPrint">

                <div class="divLeftNavigation">

                    <div class="divLeftNavL">
					<?= SideMenu::widget(['model' => $model_child,'guid' => $guid]); ?>

                    </div>

                </div>
            </td>
            <td>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td colspan="3">
                            <div class="divContentRectangleWide">
                                <div class="divBreadcrump">

                                </div>
                                <div class="divMainContent">
                                    
									<?//content of the view?>

<div class="col-md-12">
<h1><?= $model->title;?></h1>
</div>

<div class="col-md-12">
<?= $model->content?>
</div>

<div class="col-md-5" >
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Имя" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Номер телефона" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Тема сообщения" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Сообщение" maxlength="140" rows="7"></textarea>
                                         
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Отправить</button>
        </form>
    </div>
</div>
									<?// end content of the view?>
									

                                </div>
                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
  </table>


