#!/bin/bash
/usr/bin/mysqladmin ping| grep 'mysqld is alive' > /dev/null 2>&1
if [ $? != 0 ]
then
	echo "MySQL을 재가동 합니다.."
    sudo service mysql restart
else
	echo "MySQL 가동중.."
fi
