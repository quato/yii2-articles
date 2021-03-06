<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-articles
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-articles
* @version 0.4.1
*/

use yii\helpers\Html;

?>

<div class="yii2artcles-admin-menu">
	
    <!-- Dashboard -->
    <?= Html::a(Yii::t('articles', 'Dashboard'), ['/articles/default'], [
    	'class' => 'btn btn-default',
		'role'  => 'button'
	]) ?>
    
    <!-- Categories -->
    <?= Html::a(Yii::t('articles', 'Categories'), ['/articles/categories'], [
    	'class' => 'btn btn-default',
		'role'  => 'button'
	]) ?>
    
    <!-- Items -->
    <?= Html::a(Yii::t('articles', 'Items'), ['/articles/items'], [
    	'class' => 'btn btn-default',
		'role'  => 'button'
	]) ?>
     
    <!-- Attachments -->
    <?= Html::a(Yii::t('articles', 'Attachments'), ['/articles/attachments'], [
    	'class' => 'btn btn-default',
		'role'  => 'button'
	]) ?>

</div>