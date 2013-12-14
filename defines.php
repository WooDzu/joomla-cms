<?php

defined('_JEXEC') or die('No access');

/**
 * Here are some defines to address GAE specific tweaks
 */


// GAE disables loading external zml entities by default
// see: https://developers.google.com/appengine/docs/php/#PHP_Disabled_functions
libxml_disable_entity_loader(false);
