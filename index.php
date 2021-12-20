<?php
session_start();

$_SESSION['greetings'] = '<br> Рзультатов пока нет, сделай первую догадку';
require 'template.php';