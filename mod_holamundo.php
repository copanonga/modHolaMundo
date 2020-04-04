<?php
defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

$hola = modHolaMundoHelper::getHola($params);
require JModuleHelper::getLayoutPath('mod_holamundo');
