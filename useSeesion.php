<?php
session_start();

echo $_SESSION['favcolor'];
echo $_SESSION['greencolor'];

session_destroy();
