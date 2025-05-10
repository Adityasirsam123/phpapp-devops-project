# Todo-list-with-php
A simple todo list with bootstrap and raw php

## How to run:
* create a database and name it "todo"
* upload 'todo.sql'  file in "todo" database
* and just simply run index.php with any browser 
* make sure you have active internet connection because i used bootstrap cdn . so without internet you will not show proper output


## ✅ 1. Install Apache, MySQL, PHP

To install Apache, MySQL, PHP, and required modules, run the following commands:

```bash
sudo apt update
sudo apt install apache2 mysql-server php libapache2-mod-php php-mysql unzip -y
✅ Phase 2: Setup MySQL DB on db-server
bash
Copy
Edit
sudo apt update && sudo apt install mysql-server
sudo mysql_secure_installation
# Allow remote access
sudo sed -i 's/bind-address.*/bind-address = 0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf
sudo systemctl restart mysql


##some screenshoots
![](https://raw.githubusercontent.com/crrakib5/Todo-list-with-php/master/screenshoots/Screenshot%20(303).png)
![](https://raw.githubusercontent.com/crrakib5/Todo-list-with-php/master/screenshoots/Screenshot%20(304).png)
![](https://raw.githubusercontent.com/crrakib5/Todo-list-with-php/master/screenshoots/Screenshot%20(305).png)
![](https://raw.githubusercontent.com/crrakib5/Todo-list-with-php/master/screenshoots/Screenshot%20(306).png)
![](https://raw.githubusercontent.com/crrakib5/Todo-list-with-php/master/screenshoots/Screenshot%20(307).png)
