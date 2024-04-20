@echo off
setlocal enabledelayedexpansion

set "Folder=C:\xampp\htdocs\project-holders-project-2\Images\gallary\Tournaments\Inter-School-Tournaments"
set "ext=.jpg"
set "count=1"

for %%F in ("%folder%\*%ext%") do (
    ren "%%F" "!count!%ext%"
    set /a count+=1
)

endlocal
