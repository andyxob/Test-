<?php
session_start();
session_destroy();
header('location:../forms/sign_in_form.php');