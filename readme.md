﻿---
layout:     post
title:      使用须知
subtitle:   
date:       2017-09-18
author:     Heber
header-img: 
catalog: true
tags:
    - readme
---

## 注意

这是一个用来练手的基于MVC分层结构的文章管理系统，index.php是前台的入口文件，admin.php是后台入口文件(使用时需用GET方法带上控制器和方法名，如下面的例子)，实现了文章的增删改查等基本功能，前台只是一个展示页面，无法注册或登录，后台管理员用户密码也是手动录入数据库中后使用。

取用请给星星:)

```objc
举个例子:http://127.0.0.1/mvc/admin.php?controller=admin&method=login
```
