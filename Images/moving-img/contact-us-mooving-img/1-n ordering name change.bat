@echo off
setlocal enabledelayedexpansion

set "folder=C:\xampp\htdocs\project-holders-project-2\Images\moving-img\contact-us-mooving-img"
set "ext=.jpg"
set "count=1"

for %%F in ("%folder%\*%ext%") do (
    ren "%%F" "!count!%ext%"
    set /a count+=1
)

endlocal
