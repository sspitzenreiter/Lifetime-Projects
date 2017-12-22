@echo off

:Start
cls
echo ============================Java Launcher CMD Alpha 1===========================
echo.
echo.
echo.
echo.
echo.
echo Base Class Path : %CLASSPATH%
echo Java Path : %JAVA_HOME%
echo.
echo Opsi :
echo 1.Run Java Program
echo 2.Change Base Class Path
echo 3.Exit

set /p opsi="Pilihan Anda ? : "
cls
if %opsi%==1 GOTO run
if %opsi%==2 GOTO util
if %opsi%==3 GOTO exit


:util
cls
echo Program akan langsung Ditutup setelah Diedit
echo Class Path lama : %CLASSPATH%
set /p clas="Class Path Baru : "
setx CLASSPATH %clas%
echo.
echo New ClassPath : %clas%
echo.

GOTO exit



:menu
cd %CLASSPATH%
%CLASSPATH:~0,2%
echo 1.Compile
echo 2.Run
echo 3.Back to Menu
set /p opt="Pilihan anda? : "
if %opt%==1 GOTO compile
if %opt%==2 GOTO run
if %opt%==3 GOTO Start


:run
cls
cd %CLASSPATH%
%CLASSPATH:~0,2%
@echo off
echo Format Pengetikan untuk berbentuk Folder : NamaFolder.Nama File
echo.
echo Ketik menu untuk kembali ke menu
echo Ketik compile untuk ke tab Compile
echo.
set /p java="File yang mau di run?: "
if NOT %java%==menu if NOT %java%==compile start cmd.exe /k "java %java% & @echo off & echo Ketik exit untuk keluar" & GOTO run
if %java%==menu cls & GOTO Start
if %java%==compile cls & GOTO compile


:compile
cls
cd %CLASSPATH%
%CLASSPATH:~0,2%
@echo off
echo Format Pengetikan untuk berbentuk Folder : NamaFolder/Nama File.java
echo.
echo Ketik menu untuk kembali ke menu
echo Ketik run untuk ke tab Run
echo.
set /p java="File yang mau di Compile?: "
if NOT %java%==menu if NOT %java%==run javac %java% & GOTO compile
if %java%==menu cls & GOTO Start
if %java%==run cls & GOTO run

:exit
echo Batch File Created By : BlueLightning
echo.
TIMEOUT /T 5
exit

