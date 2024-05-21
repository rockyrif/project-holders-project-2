need to change at hosting manifest.json file url

db_conn.php username and password

important files to handle when editing files on adtennis.lk
****************************************************************
    manifest.json
    manifest.json
    Images/membership-payment-proof
    Images/news
    Images/payment-proof
    Images/profile-pic

code to copy all files from cpanel repository to hoste repository
**********************************************************************
---
deployment: 
  tasks:
    - export DEPLOYPATH=/home2/adtennis/public_html/project-holders-project-2
    - /bin/cp -r * $DEPLOYPATH

code to copy all files except excepted files from cpanel repository to hoste repository
********************************************************************************************

---
deployment:
  tasks:
    - export DEPLOYPATH=/home2/adtennis/public_html/project-holders-project-2
    - find . -type f -not -name 'db_conn.php' -not -name 'manifest.json' -not -path './Images/membership-payment-proof/*' -not -path './Images/news/*' -not -path './Images/payment-proof/*' -not -path './Images/profile-pic/*' -exec cp -r {} $DEPLOYPATH/{} \;

#     find .: This command starts the search from the current directory (.).
# -type f: This option specifies that find should only search for regular files (not directories).
# -not -name 'db_conn.php': This part of the command excludes files with the name db_conn.php. The -not option negates the condition specified with -name, so it selects files that do not match the specified name.
# -exec cp -r {} $DEPLOYPATH/{} \;: This part of the command executes the cp command for each file found by find. Here's what each component does:
# -exec: This option allows you to execute a command for each file found.
# cp -r {} $DEPLOYPATH/{} \;: This is the command that is executed for each file found. Here's what each part does:
# cp -r: This is the cp command, used to copy files. The -r option recursively copies directories and their contents.
# {}: This is a placeholder that find replaces with the path of each file found during the search.
# $DEPLOYPATH/{} \;: This specifies the destination path where each file should be copied. $DEPLOYPATH is an environment variable containing the deployment path, and {} is replaced with the path of each file found by find.
# So, overall, this command finds all regular files in the current directory and its subdirectories, except for those named db_conn.php, and copies each found file to the deployment path specified by $DEPLOYPATH.

test 78

git update-index --skip-worktree PHP-mailer/index.php
git update-index --skip-worktree manifest.json 

1009

gjsdhgjfhgh
dfkjglkdjfkg
hfgkdhfkgjh