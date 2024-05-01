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

