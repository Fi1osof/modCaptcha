<?php

$chunks = array();


$chunk = $modx->newObject('modChunk', array(
    'name'          =>  'modcaptcha',
    'description'   => '',
    'snippet'       => getSnippetContent($sources['source_core'].'/elements/chunks/modcaptcha.tpl'),
    "properties"    => unserialize('a:1:{s:3:"src";a:7:{s:4:"name";s:3:"src";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:49:"[[++assets_url]]components/modcaptcha/captcha.php";s:7:"lexicon";N;s:4:"area";s:0:"";}}'),
));
$chunks[] = $chunk;
 

return $chunks;
