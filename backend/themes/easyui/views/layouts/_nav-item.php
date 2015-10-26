<?php
use yii\helpers\Url;

$navItemUrl = [
    'dashboard' =>[
        'dashboard' => Url::to(['site/index'], true)
    ]
    ,'setting' =>[
        'access' =>Url::to(['/user/setting'],true)
    ]
];

$navItem = [
    'dashboard'=>[
        'title'=>'Dashboard',
        'iconCls'=>'icon-chart-curve',
        'content'=><<<HTML
            <a id="nav-dashboard" class="nav-btn" data-icon="icon-chart-curve" data-url="{$navItemUrl['dashboard']['dashboard']}" data-tabtitle="Dashboard">Dashboard</a>
HTML
    ]
    ,'setting' =>[
        'title' =>'Setting',
        'iconCls' =>'icon-cog',
        'content' =><<<HTML
            <a id="nav-access-list" class="nav-btn" data-icon="icon-group-gear" data-url="{$navItemUrl['setting']['access']}" data-tabtitle="Access Management">Access Management</a>
HTML
    ]
];
