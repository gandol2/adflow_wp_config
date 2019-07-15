# 주요 명령어
## 서버 재시작 (nginx)
<code>systemctl reload nginx</code>

## MySQL 재시작 
<code>systemctl reload mysql</code>

## Cron 작업 확인
<code>crontab -l</code>


# 주요 경로 
### WP 설정파일 경로
<code>vi /var/www/html/wp-config.php</code>

### HTTP 설정파일 경로
<code>vi /etc/nginx/conf.d/wordpress_http.conf</code>

### HTTPS 설정파일 경로
<code>vi /etc/nginx/conf.d/wordpress_https.conf</code>
