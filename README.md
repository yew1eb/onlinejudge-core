# OnlineJudgeCore
程序设计在线测评系统判题端开发
## 开发日志
__版本 V 1.0__
## 功能
支持 C, C++, Java, Python 判题

## 其他
数据库"**judge.sql**"：只使用了两张测试表 “solution”(soution_id,problem_id,user_id,time,memory,in_date, result,language,...) 和 “source_code”(solution_id, source)    
Web端"**AcmSuperX**"：（仅用于测试）使用Bootstrap和PHP       
判题端"**judge**"： 开发平台linux(Ubuntu 15.04 64bit)， python实现守护进程与MySQL数据库交互，C语言实现判题核心      
守护程序"**JudgeDaemon.py**"：Usage: ./JudgeDaemon.py		start|stop|restart
```
├── judge.conf
├── JudgeDaemon.py
├── make.sh
├── err_log
├── judge
│   ├── judge
│   ├── judge.c
│   ├── judge_core.h
│   ├── judge.h
│   ├── log.h
│   ├── Makefile
│   ├── misc.h
│   └── syscalls.h
├── Data
│   └── 1000
│       ├── test.in
│       └── test.out
└── Work
    ├── last
    ├── oj-judge.log
	└── 1064
       ├── Main
       ├── Main.cc
       ├── stderr_compiler.txt
       ├── stderr_executive.txt
       ├── stdout_compiler.txt
       ├── test.in
       └── test.out
```
