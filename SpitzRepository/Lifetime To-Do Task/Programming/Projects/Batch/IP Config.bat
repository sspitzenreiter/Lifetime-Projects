:home
cls
@echo off
color 16


netsh interface ipv4 show addresses "Wi-Fi"

@echo off
echo Choose Your Option
echo 1. Set IP Address to DHCP
echo 2. Set IP Address Automatically (Checking IP Required)
echo 3. Set IP Address Manually
echo 4. Exit

set /p isi="Choose your Option : "
cls
if %isi%==1 GOTO start
if %isi%==2 GOTO stop
if %isi%==3 GOTO edit
if %isi%==4 GOTO End


:start
netsh interface ip set address name="Wi-Fi" source=dhcp
netsh interface ip set dnsservers name="Wi-Fi" source=dhcp
@echo off
cls
netsh interface ipv4 show addresses "Wi-Fi"
echo Network Settings Changed
pause
cls
GOTO home

:stop
cls

GOTO home

:edit
cls

set /p ssid="Masukan IP : "
set /p key="Masukan Default Gateway : "

ping -n 1 %ssid% | find "TTL=" >nul
if errorlevel 1 ( GOTO komand ) else (GOTO edit2)



:edit2
cls
echo IP telah terpakai
set /p ssid="Masukan IP : "
set /p key="Masukan Default Gateway : "
ping -n 1 %ssid% | find "TTL=" >nul
if errorlevel 1 ( GOTO komand ) else (GOTO edit2)
pause


:confirm
cls
set /p dns="Masukan DNS : "
GOTO DNSE

:komand
netsh interface ip set address "Wi-Fi" static %ssid% 255.255.255.0 %key%

cls
netsh interface ipv4 show addresses "Wi-Fi"
set /p con="Mau Pakai DNS?(y/n) "
if %con%==y GOTO confirm
if %con%==n GOTO setDef

:setDef
netsh interface ip set dnsservers name="Wi-Fi" static 192.168.1.254 primary
GOTO home


:DNSE
netsh interface ipv4 show addresses "Wi-Fi"
cls
set /p con="Apakah data sudah benar?(y/n) "
if %con%==y GOTO home
if %con%==n GOTO confirm




:none
echo Unknown Command
:End