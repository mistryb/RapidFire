<?php
return array (
  'RBAC Manager' => 
  array (
    'type' => 2,
    'description' => 'Manages Auth Items and Role Assignments. RBAM required role.',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'Auth Items Manager',
      1 => 'Auth Assignments Manager',
    ),
    'assignments' => 
    array (
      14 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
    ),
  ),
  'Auth Items Manager' => 
  array (
    'type' => 2,
    'description' => 'Manages Auth Items. RBAM required role.',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Auth Assignments Manager' => 
  array (
    'type' => 2,
    'description' => 'Manages Role Assignments. RBAM required role.',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Authenticated' => 
  array (
    'type' => 2,
    'description' => 'Default role for users that are logged in. RBAC default role.',
    'bizRule' => 'return !Yii::app()->getUser()->getIsGuest();',
    'data' => NULL,
  ),
  'Guest' => 
  array (
    'type' => 2,
    'description' => 'Default role for users that are not logged in. RBAC default role.',
    'bizRule' => 'return Yii::app()->getUser()->getIsGuest();',
    'data' => NULL,
  ),
  '5d87b05e' => 
  array (
    'type' => 2,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'Comment',
      1 => 'Request',
      2 => 'Response',
      3 => 'Site',
      4 => 'User',
    ),
  ),
  'Comment' => 
  array (
    'type' => 1,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'Comment:View',
      1 => 'Comment:Create',
      2 => 'Comment:Update',
      3 => 'Comment:Delete',
      4 => 'Comment:Index',
      5 => 'Comment:Admin',
      6 => 'Comment:Approve',
    ),
  ),
  'Comment:View' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Comment:Create' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Comment:Update' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Comment:Delete' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Comment:Index' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Comment:Admin' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Comment:Approve' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Request' => 
  array (
    'type' => 1,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'Request:View',
      1 => 'Request:Create',
      2 => 'Request:Update',
      3 => 'Request:Delete',
      4 => 'Request:Index',
      5 => 'Request:Admin',
    ),
  ),
  'Request:View' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Request:Create' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Request:Update' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Request:Delete' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Request:Index' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Request:Admin' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Response' => 
  array (
    'type' => 1,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'Response:View',
      1 => 'Response:Create',
      2 => 'Response:Update',
      3 => 'Response:Delete',
      4 => 'Response:Index',
      5 => 'Response:Admin',
    ),
  ),
  'Response:View' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Response:Create' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Response:Update' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Response:Delete' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Response:Index' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Response:Admin' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Site' => 
  array (
    'type' => 1,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'Site:Captcha',
      1 => 'Site:CCaptchaAction',
      2 => 'Site:Index',
      3 => 'Site:Error',
      4 => 'Site:Contact',
      5 => 'Site:Login',
      6 => 'Site:Logout',
    ),
  ),
  'Site:Captcha' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Site:CCaptchaAction' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Site:Index' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Site:Error' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Site:Contact' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Site:Login' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Site:Logout' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'User' => 
  array (
    'type' => 1,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'User:View',
      1 => 'User:Create',
      2 => 'User:Update',
      3 => 'User:Delete',
      4 => 'User:Index',
      5 => 'User:Admin',
    ),
  ),
  'User:View' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'User:Create' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'User:Update' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'User:Delete' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'User:Index' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'User:Admin' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
);
