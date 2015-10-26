<?php

use app\themes\easyui\assets\AppAsset;
use yii\helpers\Html;
use common\components\helpers\Regex;
use yii\helpers\Url;
use yii\helpers\Json;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <div id="global-error"></div>
        <?php $this->beginBody() ?>

        <?php $this->endBody() ?>
    </body>
</html>

<?php
$username = Yii::$app->user->identity->username;
$logoutUrl = Url::to(['site/logout'],true);
$getReferenceUrl = Url::to(['reference/get'],true);
$northContent = preg_replace(Regex::htmlMinified, ' ', $this->render('_north-content'));
$centerContent = '<div id="maintab"></div>';
$westContent = preg_replace(Regex::htmlMinified, ' ', $this->render('_west-content'));

$params = $this->params;

require(__DIR__ . '/_nav-item.php');

$this->params['selectedNavAccordion'] = isset($this->params['selectedNavAccordion']) ? $this->params['selectedNavAccordion'] : 'dashboard';

$navItem[$this->params['selectedNavAccordion']]['selected'] = true;

$navItemJson = Json::encode($navItem);

$myRoles = Json::encode(Yii::$app->authManager->getRolesByUser(Yii::$app->user->identity->id));

$allRoles = Yii::$app->authManager->getRoles();
$arrRoles = [];
foreach($allRoles as $k=>$v){
    $arrRoles[] = ['name'=>$v->name];
}
$roles = Json::encode($arrRoles);

$this->registerJs(<<<EOD
    yii.app.logoutUrl = '{$logoutUrl}';
    yii.app.getReferenceUrl = '{$getReferenceUrl}';
    yii.app.northContent = '{$northContent}';
    yii.app.centerContent = '{$centerContent}';
    yii.app.westContent = '{$westContent}';
    yii.app.navItem = {$navItemJson};
    yii.app.selectedNav = '{$this->params['selectedNav']}';
    yii.app.myRoles = {$myRoles};
    yii.app.reference.roles = {$roles};
    yii.app.init();
EOD
);?>

<?php $this->endPage(); ?>
