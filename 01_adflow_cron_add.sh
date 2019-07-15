#! /bin/bash
echo "===================[cron 작업][START]"
echo "[INFO] cron 삭제중.."
crontab -r
echo "[INFO] cron 작업 등록중.."
cat <(crontab -l) <(echo "* * * * * wget -q -O - http://127.0.0.1/wp-cron.php") | crontab -
crontab -l
echo "[INFO] cron 서비스 재시작중.."
service cron restart
echo "[INFO] [완료]"
echo "===================[cron 작업][END]"


echo ""
echo "===================[wp-config.php 작업][START]"
echo "[INFO] wp-config.php 권한 변경중.."
chown www-data:www-data ./wp-config.php
echo "[INFO] wp-config.php 복사중.."
yes |cp -arpf ./wp-config.php /var/www/html/wp-config.php
echo "[INFO] nginx 서비스 재시작중.."
service nginx reload
echo "[INFO] [완료]"
echo "===================[wp-config.php 작업][END]"
