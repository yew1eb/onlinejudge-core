# OnlineJudgeCore
程序设计在线测评系统判题端开发
## 开发日志
版本 V 0.0.1
功能

支持 C, C++, Java, Python 提交
使用ACE在线编辑器
其他

只使用了两张测试表 “solution”(soution_id,problem_id,user_id,time,memory,in_date, result,language,...) 和 “source_code”(solution_id, source)
Web端（仅用于测试）使用Bootstrap和PHP
判题端 开发平台linux(Ubuntu 15.04 64bit)， python实现守护进程与MySQL数据库交互，C语言实现判题核心