@echo off
setlocal enabledelayedexpansion

set "folder=C:\xampp\htdocs\php\project-holders-project-2\Images\gallary\Tournaments\Concordance Year End Tournaments"
set "old_ext=.jpeg"
set "new_ext=.jpg"

for %%F in ("%folder%\*%old_ext%") do (
    ren "%%F" "%%~nF%new_ext%"
)

endlocal
