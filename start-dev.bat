@echo off
echo Iniciando servidor de desenvolvimento...
echo.
echo MySQL: Iniciando...
start "MySQL" "C:\xampp\mysql\bin\mysqld.exe" --console
timeout /t 3 /nobreak > nul
echo.
echo PHP Server: Iniciando em http://localhost:8000
echo.
echo Pressione Ctrl+C para parar o servidor
echo.
"C:\xampp\php\php.exe" -S localhost:8000
