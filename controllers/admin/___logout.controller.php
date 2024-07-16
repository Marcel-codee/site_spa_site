<?php
session_destroy();
$_SESSION['userConnect']=null;
header('Location:' . LINK . '___spa___admin');