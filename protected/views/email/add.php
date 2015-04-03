<?php
/* @var $this EmailController */
/* @var $model Email */

$this->breadcrumbs=array(
    'Emails'=>array('index'),
    'Add',
);

$this->menu=array(
    array('label'=>'All Emails', 'url'=>array('index')),
);
?>
    <h1>Add Email</h1>
<?php
if(isset($_POST['Email'])):?>
    <?php if(!empty($emails)):?>
        <div class="Site">Page <b><?=$_POST['Email']['site']?></b> has emails :
            <ul>
                <?php foreach($emails as $email):?>
                    <li><?=$email?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php else:?>
        <div class="Site">Page <b><?=$_POST['Email']['site']?></b> hasn't got any emails</div>
    <?php endif?>

<?php endif ?>
<br>
<?php $this->renderPartial('_parse', array('model'=>$model)); ?>