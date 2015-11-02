<?php
use yii\helpers\Url;

$navItemUrl = [
    'dashboard' =>[
        'dashboard' => Url::to(['/site/index'], true)
    ]
    ,'personal-setting' =>[
        'profile' =>Url::to(['/user/profile'],true),
        'account-setting' =>Url::to(['/user/account-setting'],true)
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
    ,'personal-setting' =>[
        'title' =>'Setting',
        'iconCls' =>'icon-cog',
        'content' =><<<HTML
            <a id="nav-profile" class="nav-btn" data-icon="icon-profile" data-url="{$navItemUrl['personal-setting']['profile']}" data-tabtitle="Profile">Profile</a>
            <a id="nav-account-setting" class="nav-btn" data-icon="icon-group-gear" data-url="{$navItemUrl['personal-setting']['account-setting']}" data-tabtitle="Account Setting">Account Setting</a>
HTML
    ]
    ,'setting' =>[
        'title' =>'Admin Setting',
        'iconCls' =>'icon-group-gear',
        'content' =><<<HTML
            <a id="nav-access-list" class="nav-btn" data-icon="icon-group-gear" data-url="{$navItemUrl['setting']['access']}" data-tabtitle="Access Management">Access Management</a>
HTML
    ]
];
