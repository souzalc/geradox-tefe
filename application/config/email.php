<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Para envio de e-mail usando uma conta g-mail com TLS

$config['protocol']='smtp';
$config['smtp_host']='smtp.gmail.com';
$config['smtp_crypto'] = 'tls';
$config['smtp_port']= 587;
$config['starttls'] = TRUE;
$config['validate']= TRUE;
$config['smtp_user']='lucassectitefe@gmail.com';
$config['smtp_pass']='Lucas81213566';
$config['mailtype']='html';
$config['charset'] = 'utf-8';
$config['wordwrap'] = 'TRUE';
$config['newline']="\r\n"; 