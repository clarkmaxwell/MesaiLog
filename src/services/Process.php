<?php
$action     = @$_GET['action'] or "";
$controller = @$_GET['controller'] or "";

call_user_method($action, ucfirst($controller)."Controller");

