---
layout:     post
title:      主标题
subtitle:   副标题
date:       2017-07-26
author:     Heber
header-img: img/post-bg-hacker.jpg
catalog: true
tags:
    - 标签
    - 开发技巧
---


## 模板
模板：

![](https://ws4.sinaimg.cn/large/006tNc79gy1fhxct12udnj311x0s3grw.jpg)

## 正文

我最近的项目中，退出登录后（跳转到登录页），发现首页控制器没有被销毁，依旧能接收通知。

退出登录代码：

```objc
模板
搭建阿芙拉进房间爱上了飞机啊；是打飞机啊沙发沙发撒旦了房间爱上；劳动纠纷；阿斯顿发生地方就撒旦就发生；df
```

很明显发生了循环引用导致的内测泄漏。

接下来就使用 **Debug Memory Graph** 来查看内测泄漏了。
