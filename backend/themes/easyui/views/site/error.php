<?php

use yii\helpers\Html;

$this->title = 'Dashboard';
$this->params['selectedNavAccordion'] = 'dashboard';
$this->params['selectedNav'] = 'nav-dashboard';
$this->params['error'][] = nl2br(Html::encode($message));