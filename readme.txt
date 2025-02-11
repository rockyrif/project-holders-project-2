Welcome To the project adtennis.lk.
This project is a website for Ampara District tennis club.

db_conn.php username and password for hosting 
*********************************************************
$servername = "localhost";
$username = "adtennis";
$password = "*****";
$dbname = "adtennis_amp_dtc";

important files to handle when editing files on adtennis.lk (Different configurations in hosting and local)
**************************************************************************************************************
    manifest.json
    db_conn.php
    PHP-mailer/index.php

    Images/membership-payment-proof
    Images/payment-proof
    Images/tournament-payment-proof
    Images/news
    Images/profile-pic

local repository changes
**********************************
  git update-index --skip-worktree PHP-mailer/index.php
  git update-index --skip-worktree manifest.json 
  git update-index --skip-worktree db_conn.php

code to copy all files from cpanel repository to host repository using .cpane.yml
*************************************************************************************
---
deployment: 
  tasks:
    - export DEPLOYPATH=/home2/adtennis/public_html/project-holders-project-2
    - /bin/cp -r * $DEPLOYPATH

fgfgeedvvd




