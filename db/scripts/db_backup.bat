FOR /f %%a IN ('WMIC OS GET LocalDateTime ^| FIND "."') DO SET DTS=%%a
SET date=%DTS:~0,8%-%DTS:~8,6%

D:\xampp\mysql\bin\mysql.exe  -h localhost -u root d8c < D:\htdocs\iq\d8\db\cleanup.sql
D:\xampp\mysql\bin\mysqldump.exe -h localhost -u root  d8c > D:\htdocs\iq\d8\db\d8_dbbk_%date%.sql