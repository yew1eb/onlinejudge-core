#!/usr/bin/env python
# -*- coding: utf-8 -*- 

import sys,os,time,atexit
from ConfigParser import ConfigParser
import MySQLdb
import subprocess
import fcntl

from Daemon import Daemon

"""
OJ_AC 	= 0
OJ_PE 	= 1
OJ_TLE 	= 2
OJ_MLE	= 3
OJ_WA	= 4
OJ_RE	= 5
OJ_OLE	= 6
OJ_CE	= 7
OJ_RF	= 8
OJ_SE	= 9
OJ_VE	= 10
OJ_WAIT	= 11
OJ_RUN	= 12
"""

langf = {0:"",1:"Main.c",2:"Main.cc",3:"Main.pas",4:"Main.java",5:"Main.py"}
cfgFile = "./judge.conf"

class judge:
    def __init__(self, solution_id, problem_id, lang, datadir="./data", tmpdir="./temp", \
        timelimit=1000, memlimit=65535, outlimit=8192, spj= False, tc=False):
        self.solution_id = solution_id
	self.problem_id = problem_id
	self.lang = lang
	self.datadir = datadir
	self.tmpdir = tmpdir
	self.timelimit = timelimit
	self.memlimit = memlimit
	self.outlimit = outlimit
	self.spj = spj
	self.tc = tc
	
    def setlimit(self, timelimit = 1000, memlimit = 65535, outlimit = 8192):
	self.timelimit = timelimit
	self.memlimit = memlimit
	self.outlimit = outlimit

    def run(self):
	try:
            self.result, self.time, self.mem = (0, 0, 0)
            if self.spj and self.tc:
		pass
            elif self.spj:
		pass
            elif self.tc:
		pass
            else:
#./judge -s 1042 -p 1000 -l 1 -d /home/jsucoder/Judged/Work -D /home/jsucoder/Judged/Data
                p = subprocess.Popen("/usr/bin/judge -s "+str(self.solution_id)+" -p "+str(self.problem_id)\
			+" -l "+str(self.lang)+" -d "+self.tmpdir+" -D "+self.datadir, shell=True, stdout=subprocess.PIPE)

	    for l in p.stdout:
		(self.result, self.time, self.mem) = l.split()
	    self.result = int(self.result)
            self.time = int(self.time)
            self.mem = int(self.mem)
	except:
            exit(1)


class JudgeDaemon(Daemon):
    def run(self):
        cfg = ConfigParser()
	cfg.readfp(open(cfgFile))
	tempdir = cfg.get("judge", "temp")
	datadir = cfg.get("judge", "data")
	con = MySQLdb.connect(
            host = cfg.get('db','dbHost'),
            port = cfg.getint('db','dbPort'),
            user = cfg.get('db','dbUser'),
            passwd = cfg.get('db','dbPass'),
            db = cfg.get('db','dbName'),
	)

	cur = con.cursor()
	while True:
            try:
                cur.execute("SELECT solution_id,problem_id,language FROM solution WHERE result=11 ORDER BY solution_id DESC LIMIT 1");
                rows = cur.fetchall()
		if rows==None:
                    time.sleep(2)
		    continue
		for row in rows:
                    solution_id = row[0]
                    problem_id = row[1]
                    language = row[2]
#cur.execute("UPDATE solution SET result=12 WHERE solution_id=%d"  % solution_id);
                    cur.execute("SELECT source FROM source_code WHERE solution_id=%d" % solution_id);
                    code_text = cur.fetchone()[0]
                    workdir = tempdir+'/'+str(solution_id)
                    if not os.path.exists(workdir):
                        os.makedirs(workdir)
                    srcpath = workdir+'/'+langf[language]
		    fp = open(srcpath,'w')
                    fp.write(code_text)
                    fp.close()
#judge(solution_id, problem_id, lang, datadir="./data", tmpdir="./temp",timelimit=1000, memlimit=65535, outlimit=8192, spj= False, tc=False):			
                    acmsuperx = judge(solution_id, problem_id, language, datadir, tempdir)
                    acmsuperx.run()
                    cur.execute("UPDATE solution SET result=%d,time=%d,memory=%d WHERE solution_id=%d"\
				% (acmsuperx.result, acmsuperx.time, acmsuperx.mem, solution_id) )
                    cur.commit()
                    os.rmdir(workdir)
            except:
                pass
            time.sleep(2)

if __name__ == '__main__':
    daemon = JudgeDaemon('./pidfile', stderr='./err_log')
    if len(sys.argv) == 2:
        if 'start' == sys.argv[1]:
            daemon.start()
        elif 'stop' == sys.argv[1]:
            daemon.stop()
        elif 'restart' == sys.argv[1]:
            daemon.restart()
        else:
            print 'unkonow command'
            sys.exit(2)
        sys.exit(0)
    else:
        print "usage:%s start|stop|restart" % sys.argv[0]
        sys.exit(2)
