<?php
$config = array (
  'Authake' => 
  array (
    'baseUrl' => '/',
    'service' => 'Authake',
    'loginAction' => 
    array (
      'controller' => 'innerspage',
      'action' => 'e404',
      'named' => 
      array (
      ),
      'pass' => 
      array (
      ),
      'plugin' => NULL,
    ),
    'loggedAction' => '/authake/index/home',
    'sessionTimeout' => '604800',
    'defaultDeniedAction' => 
    array (
      'controller' => 'innerspage',
      'action' => 'e404',
      'named' => 
      array (
      ),
      'pass' => 
      array (
      ),
      'plugin' => NULL,
    ),
    'rulesCacheTimeout' => '300',
    'systemEmail' => 'noreply@example.com',
    'systemReplyTo' => 'noreply@example.com',
    'passwordVerify' => '1',
    'registration' => '1',
    'defaultGroup' => '2',
    'useDefaultLayout' => '0',
    'useEmailAsUsername' => '0',
  ),
);