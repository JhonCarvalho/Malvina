@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/zendframework/zftool/zf.php
php "%BIN_TARGET%" %*
