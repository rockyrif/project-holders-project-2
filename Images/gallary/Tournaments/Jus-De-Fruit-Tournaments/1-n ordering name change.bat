@echo off
setlocal enabledelayedexpansion

set "folder=C:\xampp\htdocs\php\project-holders-project-2\Images\gallary\Tournaments\Jus De Fruit Tournaments"
set "ext=.jpg"
set "count=1"

for %%F in ("%folder%\*%ext%") do (
    ren "%%F" "!count!%ext%"
    set /a count+=1
)

endlocal
