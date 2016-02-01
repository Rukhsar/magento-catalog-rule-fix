-Catalog Rule Fix
-====================================
-
-Every night Magento clears the catalog price rules and then can not restore them.
-This extension modifies the recovery process to fix it.
-Cancellation and recovery procedures are called automatically every night by cron.
-On your server you need to configure a cron that calls www.domain.com/cron.php every 15 minutes.
-The specified versions are tested versions. The module may also work on other versions.
View
