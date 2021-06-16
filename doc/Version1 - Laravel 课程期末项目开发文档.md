# 基于 Laravel 框架的教务管理系统项目开发文档
###  
>
>👨‍💻 王龙杨
>
>📧 cheneydev@gmail.com
>
>📅 06/13/2021

###  

## 项目介绍

这是一个基于 Laravel 框架开发的教务管理系统项目，是对我校（天津职业大学）的教务管理系统（http://jwxt.tjtc.edu.cn）部分功能的**简单复刻**。通俗地说，就是在有限的时间和有限的技术能力下，用 Laravel 来实现我校教务系统的几个功能，且不考虑该系统的性能、安全性等诸多超出当前本人技术水平的要素。

## 项目需求分析

这是一个基于 Laravel 框架开发的教务管理系统项目。该项目面向高校师生以及教务管理人员，用于满足这类群体对教务信息网络化与信息化的需求。

这个教务管理系统包含了以下功能：

1. 面向教务管理人员的后台管理模块：管理学生信息、管理学生成绩、管理课程信息、查询学生课表、修改密码。
2. 面向学生的个人信息管理模块：选课、查询课表、查询成绩、查询选课情况、修改个人资料、修改密码。

## 技术栈与工具

### 技术栈

开发语言：PHP

框架：Laravel 8.46.0  &  Bootstrap

版本控制：Git 2.28.0.windows.1

数据库：MySQL 8.0.23

### 工具

IDE：IntelliJ PhpStrom 2021.1

数据库管理：IntelliJ DataGrip 2021.1

文档编辑：Typora 0.10.11

浏览器：Chrome 91.0.4472.77

操作系统：Windows 10 Pro 20H1


## 参考资源

1. [Laravel Projects Share](https://laravelproject.com/)
2. [Google Search: Laravel  Educational Administration Management System](https://www.google.com/search?q=laravel++Educational+Administration+Management+System&newwindow=1&sxsrf=ALeKk01IjcnFCWdadhn1mY433iaWh-VCkQ%3A1623548069649&ei=pWDFYKWKJ--4mAXn_ab4BQ&oq=laravel++Educational+Administration+Management+System&gs_lcp=Cgdnd3Mtd2l6EAM6BwgAEEcQsAM6BggAEA0QHjoFCAAQhgNQn4wCWLOjAmDIpQJoAXACeACAAYkCiAHWC5IBBTIuOC4xmAEAoAEBqgEHZ3dzLXdpesgBCMABAQ&sclient=gws-wiz&ved=0ahUKEwjl8N3vu5PxAhVvHKYKHee-CV8Q4dUDCA4&uact=5)
3. [Open source porject: lav_sms](https://github.com/4jean/lav_sms)
4. [Github Search: Laravel School Management System](https://github.com/search?q=Laravel+School+Management+System)
5. [Github Project: StudentCMS](https://github.com/974988176/StudentCMS)
6. [Github Project: Unifiedtransform](https://github.com/changeweb/Unifiedtransform)

## 项目设计

### 用户角色

1. 教务管理人员（Administrator）
2. 学生（Student）

### 测试账号

| 角色         | 账号      | 密码     |
| ------------ | --------- | -------- |
| 教务管理人员 | 1         | admin001 |
| 学生         | 190431015 | wly2021  |
| 学生         | 190431011 | mlh2021  |
| 学生         | 190431631 | ljh2021  |

### 模块及其功能

1. 后台管理模块 - Control Panel（面向教务管理人员）
   * 学生信息增删改查
   * 学生成绩增删改查
   * 课程信息增删改查
2. 个人信息管理模块 - Student Panel（面向学生）

### 页面

1. 登陆页（Administrator & Student Page）

   **描述：**教务管理人员与学生共用一个登陆页面，因此这个页面需要具备选择角色（登陆身份）功能。

2. 教务系统首页（Administrator & Student Page）

   * 首页 - 面向教务管理人员
   * 首页 - 面向学生

3. 选课（Student Page）

   * 全校公共选修课

     **描述：**“全校公共选修课”的操作结果与“课表”、“选课情况”相关联。

4. 信息维护（Student Page）
   * 个人资料
   * 个人密码
5. 信息查询（Student Page）
   * 个人课表
   * 个人成绩
   * 选课情况

6. 课程管理（Administrator Page）

   **描述：**教务管理人员在这个页面进行课程的增删查改操作。

7. 信息维护（Administrator Page）

   * 全校学生信息维护
   * 全校学生成绩管理
   * 管理员密码

8. 信息查询（Administrator Page）

   * 学生课表查询

     **描述：**这个页面给教务管理人员提供查询任意学生个人课表的功能。


页面关系图：

<img src=./images/页面关系图.png width=70% >

## 数据库设计

**Table name: t_student_profile**

| ID   | studentName | studentID | gender | dateOfBirth | registrationDate | telphone | major |
| ---- | ----------- | --------- | ------ | ----------- | ---------------- | -------- | ----- |
|      | 学生姓名    | 学号      | 性别   | 出生日期    | 入学时期         | 电话     | 专业  |

**Table name: **t_course_information

| ID   | courseName | courseID | courseTime | courseLocation |
| ---- | ---------- | -------- | ---------- | -------------- |
|      | 课程名     | 课程编号 | 上课时间   | 上课地点       |

**Table name: **t_student_account

| ID   | studentID    | password | securityTelphone |
| ---- | ------------ | -------- | ---------------- |
|      | 账号（学号） | 密码     | 安全手机         |

**Table name: **t_administrator_account

| ID   | employeeID   | passsword | securityTelphone |
| ---- | ------------ | --------- | ---------------- |
|      | 账号（工号） | 密码      | 安全手机         |

**Table name: **t_student_score

| ID   | studentID | courseID | score |
| ---- | --------- | -------- | ----- |
|      | 学号      | 课程编号 | 分数  |

### SQL

```sql
//t_student_account
create database wang_wang_group;  
use wang_wang_group;   
DROP TABLE IF EXISTS `t_student_account`;  
CREATE TABLE `t_student_account` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `studentID` int(9) NOT NULL DEFAULT '0',
  `password` varchar(32) NOT NULL DEFAULT '',
  `securityTelephone` varchar(11) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)  
) ENGINE=InnoDB CHARSET=utf8mb4;   
  
INSERT INTO `t_student_account` VALUES ('1', '190431015','wly2021', '19922580103');  
INSERT INTO `t_student_account` VALUES ('2', '190431011', 'mlh2021','17547464068');  
INSERT INTO `t_student_account` VALUES ('3', '190431631', 'ljh2021','18047693761');  

//t_administrator_account
use wang_wang_group;   
DROP TABLE IF EXISTS `t_administrator_account`;  
CREATE TABLE `t_administrator_account` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `employeeID` int(9) NOT NULL DEFAULT '0',
  `password` varchar(32) NOT NULL DEFAULT '',
  `securityTelephone` varchar(11) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)  
) ENGINE=InnoDB CHARSET=utf8mb4;   
  
INSERT INTO `t_administrator_account` VALUES ('1', '1001','admin001', '19922580104');  

```



## 后端设计

### 路由设计

#### 登陆路由（学生）

登陆功能需要响应 get & post 两种请求，官方文档中[相关的介绍](https://laravel.com/docs/8.x/routing#available-router-methods)如下：

> Sometimes you may need to register a route that responds to multiple HTTP verbs. You may do so using the `match` method:
>
> ```php
> Route::match(['get', 'post'], '/', function () {
>     //
> });
> ```



## 参考资料

MySQL 8.0 Reference Manual https://dev.mysql.com/doc/refman/8.0/en/

## 操作日志

### 数据库

```
[2021-06-16 15:36:38] Connected
laravel_wly> use laravel_wly
[2021-06-16 15:36:38] completed in 6 ms
laravel_wly> create database wang_wang_group
[2021-06-16 15:36:38] 1 row affected in 66 ms
laravel_wly> use wang_wang_group
[2021-06-16 15:36:39] completed in 8 ms
laravel_wly> DROP TABLE IF EXISTS `t_student_account`
[2021-06-16 15:36:39] [42S02][1051] Unknown table 'wang_wang_group.t_student_account'
[2021-06-16 15:36:39] completed in 71 ms
laravel_wly> CREATE TABLE `t_student_account` (  
               `id` int(11) NOT NULL AUTO_INCREMENT,  
               `studentID` int(9) NOT NULL DEFAULT '0',
               `password` varchar(32) NOT NULL DEFAULT '',
               `securityTelephone` varchar(11) NOT NULL DEFAULT '',
               PRIMARY KEY (`id`)  
             ) ENGINE=InnoDB CHARSET=utf8mb4
[2021-06-16 15:36:39] [HY000][1681] Integer display width is deprecated and will be removed in a future release.
[2021-06-16 15:36:39] [HY000][1681] Integer display width is deprecated and will be removed in a future release.
[2021-06-16 15:36:39] completed in 102 ms
laravel_wly> INSERT INTO `t_student_account` VALUES ('1', '190431015','wly2021', '19922580103')
[2021-06-16 15:36:39] 1 row affected in 18 ms
laravel_wly> INSERT INTO `t_student_account` VALUES ('2', '190431011', 'mlh2021','17547464068')
[2021-06-16 15:36:39] 1 row affected in 18 ms
laravel_wly> INSERT INTO `t_student_account` VALUES ('3', '190431631', 'ljh2021','18047693761')
[2021-06-16 15:36:40] 1 row affected in 12 ms

wang_wang_group> use wang_wang_group
[2021-06-16 16:54:20] completed in 18 ms
wang_wang_group> DROP TABLE IF EXISTS `t_administrator_account`
[2021-06-16 16:54:21] [42S02][1051] Unknown table 'wang_wang_group.t_administrator_account'
[2021-06-16 16:54:21] completed in 65 ms
wang_wang_group> CREATE TABLE `t_administrator_account` (
                   `id` int(11) NOT NULL AUTO_INCREMENT,
                   `employeeID` int(9) NOT NULL DEFAULT '0',
                   `password` varchar(32) NOT NULL DEFAULT '',
                   `securityTelephone` varchar(11) NOT NULL DEFAULT '',
                   PRIMARY KEY (`id`)
                 ) ENGINE=InnoDB CHARSET=utf8mb4
[2021-06-16 16:54:21] [HY000][1681] Integer display width is deprecated and will be removed in a future release.
[2021-06-16 16:54:21] [HY000][1681] Integer display width is deprecated and will be removed in a future release.
[2021-06-16 16:54:21] completed in 106 ms
wang_wang_group> INSERT INTO `t_administrator_account` VALUES ('1', '001','admin001', '19922580104')
[2021-06-16 16:54:21] 1 row affected in 20 ms
// employedID 设置为 001 的情况下前面两个 0 会被自动忽略，为减少工作量，直接将 employedID 改为 1001 。
wang_wang_group> SELECT t.*
                 FROM wang_wang_group.t_administrator_account t
                 LIMIT 501
[2021-06-16 17:04:06] 1 row retrieved starting from 1 in 16 ms (execution: 9 ms, fetching: 7 ms)
```

