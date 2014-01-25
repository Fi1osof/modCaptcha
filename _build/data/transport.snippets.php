<?php

$snippets = array();


$snippet= $modx->newObject('modSnippet');
$snippet->fromArray(array(
    'name' => 'modcaptcha.check_captcha',
    'description' => '',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/modcaptcha.check_captcha.php'),
    "properties"    => unserialize('a:3:{s:14:"case_sensitive";a:7:{s:4:"name";s:14:"case_sensitive";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:4:"code";a:7:{s:4:"name";s:4:"code";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"method";a:7:{s:4:"name";s:6:"method";s:4:"desc";s:16:"REQUEST|GET|POST";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:7:"REQUEST";s:7:"lexicon";N;s:4:"area";s:0:"";}}'),
),'',true,true);
 

$snippets[] = $snippet;


return $snippets;