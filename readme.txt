need to change at hosting manifest.json file url

db_conn.php username and password

important files to handle when editing files on adtennis.lk
****************************************************************
    manifest.json
    Images/membership-payment-proof
    Images/payment-proof
    Images/tournament-payment-proof
    Images/news
    Images/payment-proof
    Images/profile-pic
    db_conn.php

code to copy all files from cpanel repository to hoste repository
**********************************************************************
---
deployment: 
  tasks:
    - export DEPLOYPATH=/home2/adtennis/public_html/project-holders-project-2
    - /bin/cp -r * $DEPLOYPATH

git update-index --skip-worktree PHP-mailer/index.php
git update-index --skip-worktree manifest.json 


