<?php

$settings = array();

$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'modcaptcha.num_chars',     // set unique key
    'value' => 5,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'modcaptcha.num_lines',     // set unique key
    'value' => 2,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'modcaptcha.session_id',     // set unique key
    'value' => 'php_captcha',
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'modcaptcha.width',     // set unique key
    'value' => 160,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'modcaptcha.height',     // set unique key
    'value' => 38,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'modcaptcha.chars',     // set unique key
    'value' => 'a-z,A-Z,1-9',
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


unset($setting);
return $settings;