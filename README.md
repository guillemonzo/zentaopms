Hi! The purpose of this fork is to have a running installation of Zentao as a Heroku app.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

# Installation
ZenTao uses a flag in a configuration file in order to indicate if it has been installed or not. Heroku filesystem is [ephemeral](https://devcenter.heroku.com/articles/dynos#ephemeral-filesystem), that means that any changes to the filesystem whilst the dyno is running only last until that dyno is shut down or restarted. 

In order to make it running on Heroku, we are going to simulate that the installations is already done and we are going to run the following SQL scripts:

1. Execute [install.sql](https://github.com/guillemonzo/zentaopms/blob/master/install.sql) script to create the database structure.
2. Execute the following statements to create the admin user and the company:

   `` INSERT INTO `zt_user` (`id`, `dept`, `account`, `password`, `role`, `realname`, `nickname`, `commiter`, `avatar`, `birthday`, `gender`, `email`, `skype`, `qq`, `mobile`, `phone`, `weixin`, `dingding`, `slack`, `whatsapp`, `address`, `zipcode`, `join`, `visits`, `ip`, `last`, `fails`, `locked`, `ranzhi`, `score`, `scoreLevel`, `deleted`) VALUES (1, 0, 'admin', 'php md5(password)', '', 'admin', '', '', '', '0000-00-00', 'f', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1, '', 1556626755, 0, '0000-00-00 00:00:00', '', 0, 0, '0'); `` 
  
   `` INSERT INTO `zt_company` (`id`, `name`, `phone`, `fax`, `address`, `zipcode`, `website`, `backyard`, `guest`, `admins`, `deleted`) VALUES	(1, 'Company name', NULL, NULL, NULL, NULL, NULL, NULL, '0', ',admin,', '0'); ``
   
   `` INSERT INTO `zt_userview` (`account`, `products`, `projects`) VALUES	('admin', '', ''); ``

# ZenTao

1. What is ZenTao?

=====================

ZenTao is an open source project management software, developed by Qingdao Nature Easy Soft Network Technology Co. Ltd. Combining product management, project management, QA management, document management, company management and todo management. It is a professional project management software, covering the core process of software development projects.


ZenTao is practical and pragmatic. It has full features and beautiful interfaces, and is easy to use. ZenTao is well structured and can be flexibly extended. It also has powerful search features, various forms of statistical reports and complete API.


ZenTao focuses on development project management!

2. Why is it called ZenTao?

============================

Zen(禅) and Tao(道) are the two Chinese characters that have rich meanings in both religion and culture. ZenTao Project Management Software takes the cultural meaning of Zen and Tao, and is expected to convey our understanding and thinking of management. Inspired by The Tao of Programming and The Zen of Programming, we named our software ZenTao.

3. Design philosophy of ZenTao Project Management Software

==========================================================

The main design philosophy of ZenTao Project Management Software is based on Scrum, an internationally popular Agile methodology. Scrum is very pragmatic and easy to operate, so it fits in the fast iterative development of software projects. However, Scrum only defines the core management framework. There are still many details and processes that have to be extended and developed. Based on the philosophy of Scrum and with the observation of the current development situations in China, ZenTao integrates bug management, test case management, release management and document management, and it completely covers the entire lifecycle of software development. In ZenTao, the concepts of product, project and test are clearly defined. Product team, development team and QA team coordinate and check with each other while they function differently. The three teams interact with each other through stories, tasks and bugs, and eventually deliver the product with quality.

4. Why choose ZenTao Project Management Software?

===============================================

* ZenTao is a professional development project management software and cannot be replaced by any simple project management software.
* ZenTao has precise and pragmatic management philosphy, which will accelerate Agile development.
* ZenTao has full features as a project management software, so you don’t have to integrate several systems together, like mantisbt + trac + testlink.
* Open source codes and flexible extension mechanism. It is convenient to use and develop based on ZenTao.
* Underlying framework and frontend UI framework are developed independently; robust and stable with beautiful interface and friendly interaction.
* Perfect community mechanism; you can get technical support and help in time.
* Zero input, which means you have no risk for choosing ZenTao, compared with other commercial software that cost you thousands of dollars.
* Support various deployments, either private or cloud.


5. Features of ZenTao Project Management Software

======================================================

* Product management: including products, stories, plans, releases and roadmaps;
* Project management: including projects, tasks, teams, builds and burn-down charts;
* Quality management: including bugs, test cases, test tasks and test results;
* Document management: including product document library, project document library and customized document library;
* Work management: including to-do management and personal management, such as my tasks, my bugs, my story and my projects;
* Organization management: including department, users, groups and privileges;
* Statistics: various reports;
* Search: powerful search functions to help you find the data you need.
* Extension mechanism: extensible in almost any parts of ZenTao;
* API mechanism: convenient for integration with other systems.

6. Website

==========

Our website is: [www.zentao.pm](http://www.zentao.pm)

