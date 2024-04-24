@echo off
setlocal enabledelayedexpansion

set "folder=C:\Users\moham\Downloads\about-us-mooving-img"
set "ext=.jpg"
set "count=1"

for %%F in ("%folder%\*%ext%") do (
    ren "%%F" "!count!%ext%"
    set /a count+=1
)

endlocal
