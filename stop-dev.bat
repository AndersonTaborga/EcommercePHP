@echo off
echo Parando servidores...
echo.
taskkill /f /im mysqld.exe 2>nul
taskkill /f /im php.exe 2>nul
echo Servidores parados.
pause
