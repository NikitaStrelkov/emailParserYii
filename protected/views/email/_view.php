<?php
/* @var $this EmailController */
/* @var $data Email */
?>

<table class="view">
    <tr>
        <th>ID</th>
        <th>Site</th>
        <th>Email</th>
        <th>Time</th>
    </tr>
    <tr>
        <td>
            <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
        </td>
        <td>
            <?php echo CHtml::encode($data->site); ?>
        </td>
        <td>
            <?php echo CHtml::encode($data->email); ?>
        </td>
        <td>
            <?php echo CHtml::encode($data->dateInsert); ?>
        </td>
    </tr>
</table>