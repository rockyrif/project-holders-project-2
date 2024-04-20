@echo off
setlocal enabledelayedexpansion

set "folder=C:\xampp\htdocs\project-holders-project-2\Images\gallary\Achievement-by-ADTC\Achievement-by-ADTC"
set "ext=.webp"
set "count=1"

for %%F in ("%folder%\*%ext%") do (
    ren "%%F" "!count!%ext%"
    set /a count+=1
)

endlocal
