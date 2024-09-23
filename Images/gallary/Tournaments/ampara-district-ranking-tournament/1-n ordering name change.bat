@echo off
setlocal enabledelayedexpansion

set "folder=C:\xampp\htdocs\Project-holders-project-2\Images\gallary\Tournaments\ampara-district-ranking-tournament"
set "ext=.jpg"
set "count=1"

for %%F in ("%folder%\*%ext%") do (
    ren "%%F" "!count!%ext%"
    set /a count+=1
)

endlocal
