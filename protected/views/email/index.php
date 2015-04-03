<?php
/* @var $this EmailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emails',
);

$this->menu=array(
	array('label'=>'Add Email', 'url'=>array('add')),
);
?>

<h1>Emails</h1>
<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'email-add-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'site',
        'email',
        'dateInsert'
    ),
)); ?>