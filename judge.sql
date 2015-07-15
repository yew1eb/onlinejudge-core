-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-07-15 21:20:44
-- 服务器版本： 5.6.24-0ubuntu2
-- PHP Version: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `judge`
--

-- --------------------------------------------------------

--
-- 表的结构 `solution`
--

CREATE TABLE IF NOT EXISTS `solution` (
`solution_id` int(11) NOT NULL,
  `problem_id` int(11) NOT NULL DEFAULT '0',
  `user_id` char(48) NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  `memory` int(11) NOT NULL DEFAULT '0',
  `in_date` datetime NOT NULL DEFAULT '1970-01-01 00:00:00',
  `result` smallint(6) NOT NULL DEFAULT '11',
  `language` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL,
  `contest_id` int(11) DEFAULT NULL,
  `valid` tinyint(4) NOT NULL DEFAULT '1',
  `num` tinyint(4) NOT NULL DEFAULT '-1',
  `code_length` int(11) NOT NULL DEFAULT '0',
  `judgetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pass_rate` decimal(2,2) unsigned NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM AUTO_INCREMENT=1074 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `solution`
--

INSERT INTO `solution` (`solution_id`, `problem_id`, `user_id`, `time`, `memory`, `in_date`, `result`, `language`, `ip`, `contest_id`, `valid`, `num`, `code_length`, `judgetime`, `pass_rate`) VALUES
(1063, 1000, '7', 0, 0, '2015-07-15 12:16:38', 0, 2, '210.43.79.249', NULL, 1, -1, 147, '2015-07-15 04:16:38', 0.00),
(1062, 1000, '7', 0, 0, '2015-07-15 11:59:53', 0, 2, '210.43.79.249', NULL, 1, -1, 147, '2015-07-15 03:59:53', 0.00),
(1061, 1000, '7', 0, 0, '2015-07-15 11:59:26', 0, 2, '210.43.79.249', NULL, 1, -1, 147, '2015-07-15 03:59:26', 0.00),
(1060, 1000, '7', 0, 0, '2015-07-10 07:25:55', 0, 5, '210.43.79.249', NULL, 1, -1, 46, '2015-07-10 11:25:56', 0.00),
(1059, 1000, '7', 0, 0, '2015-07-10 07:23:43', 7, 1, '210.43.79.249', NULL, 1, -1, 0, '2015-07-10 11:23:43', 0.00),
(1057, 1000, '7', 0, 0, '2015-07-05 08:38:28', 0, 5, '210.43.79.249', NULL, 1, -1, 46, '2015-07-05 12:38:28', 0.00),
(1056, 1000, '7', 172, 9884, '2015-07-05 08:36:55', 0, 4, '210.43.79.249', NULL, 1, -1, 405, '2015-07-05 12:36:55', 0.00),
(1055, 1000, '7', 0, 0, '2015-07-05 08:35:02', 7, 4, '210.43.79.249', NULL, 1, -1, 397, '2015-07-05 12:35:02', 0.00),
(1054, 1000, '7', 0, 0, '2015-07-05 08:33:04', 0, 2, '210.43.79.249', NULL, 1, -1, 147, '2015-07-05 12:33:04', 0.00),
(1053, 1000, '7', 0, 0, '2015-07-05 08:31:53', 7, 1, '210.43.79.249', NULL, 1, -1, 172, '2015-07-05 12:31:53', 0.00),
(1052, 1000, '7', 0, 384, '2015-07-05 08:31:32', 4, 1, '210.43.79.249', NULL, 1, -1, 149, '2015-07-05 12:31:32', 0.00),
(1051, 1000, '7', 0, 384, '2015-07-05 08:31:04', 4, 1, '210.43.79.249', NULL, 1, -1, 137, '2015-07-05 12:31:04', 0.00),
(1050, 1000, '7', 0, 384, '2015-07-05 07:34:19', 4, 1, '210.43.79.249', NULL, 1, -1, 141, '2015-07-05 11:34:19', 0.00),
(1049, 1000, '7', 0, 376, '2015-07-05 07:34:07', 0, 1, '210.43.79.249', NULL, 1, -1, 143, '2015-07-05 11:34:07', 0.00),
(1048, 1000, '7', 0, 380, '2015-07-05 05:26:44', 0, 1, '210.43.79.249', NULL, 1, -1, 171, '2015-07-05 09:26:44', 0.00),
(1047, 1000, '7', 0, 380, '2015-07-05 05:25:40', 0, 1, '210.43.79.249', NULL, 1, -1, 171, '2015-07-05 09:25:40', 0.00),
(1064, 1000, '7', 0, 0, '2015-07-15 12:19:59', 0, 2, '210.43.79.249', NULL, 1, -1, 147, '2015-07-15 04:19:59', 0.00),
(1065, 1000, '7', 0, 0, '2015-07-15 12:23:45', 0, 2, '210.43.79.249', NULL, 1, -1, 147, '2015-07-15 04:23:45', 0.00),
(1066, 1000, '7', 0, 432, '2015-07-15 12:25:33', 0, 2, '210.43.79.249', NULL, 1, -1, 147, '2015-07-15 04:25:33', 0.00),
(1067, 1000, '7', 0, 432, '2015-07-15 12:29:21', 0, 2, '210.43.79.249', NULL, 1, -1, 147, '2015-07-15 04:29:21', 0.00),
(1068, 1000, '7', 0, 432, '2015-07-15 12:34:34', 0, 2, '210.43.79.249', NULL, 1, -1, 147, '2015-07-15 04:34:34', 0.00),
(1069, 1000, '7', 0, 0, '2015-07-15 04:03:52', 7, 2, '210.43.79.249', NULL, 1, -1, 8, '2015-07-15 08:03:52', 0.00),
(1070, 1000, '7', 0, 0, '2015-07-15 07:28:52', 7, 1, '210.43.79.249', NULL, 1, -1, 4, '2015-07-15 11:28:52', 0.00),
(1071, 1000, '7', 0, 0, '2015-07-15 07:31:24', 7, 1, '210.43.79.249', NULL, 1, -1, 39, '2015-07-15 11:31:24', 0.00),
(1072, 1000, '7', 0, 0, '2015-07-15 09:02:29', 0, 5, '210.43.79.249', NULL, 1, -1, 46, '2015-07-15 13:02:29', 0.00),
(1073, 1000, '7', 0, 416, '2015-07-15 09:08:34', 0, 2, '210.43.79.249', NULL, 1, -1, 147, '2015-07-15 13:08:34', 0.00);

-- --------------------------------------------------------

--
-- 表的结构 `source_code`
--

CREATE TABLE IF NOT EXISTS `source_code` (
  `solution_id` int(11) NOT NULL,
  `source` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `source_code`
--

INSERT INTO `source_code` (`solution_id`, `source`) VALUES
(1055, 'import java.math.BigInteger;     \r\nimport java.util.Scanner;     \r\n  \r\npublic class Main {     \r\n    \r\n    public static void main(String[] args) {     \r\n        Scanner cin = new Scanner((System.in));    \r\n        while(cin.hasNext()){\r\n            a = cin.nextInt();  \r\n            b = cin.nextInt();\r\n            System.out.println(a+b);  \r\n        }  \r\n    }     \r\n} '),
(1054, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    cin>>a>>b;\r\n    cout<<a+b<<endl;\r\n    return 0;\r\n}'),
(1053, '#include <stdio.h>\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    scanf("%d%d", &a, &b);\r\n    while(true)\r\n        printf("%d %d\\n", a+b, 3);\r\n    return 0;\r\n}'),
(1052, '#include <stdio.h>\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    scanf("%d%d", &a, &b);\r\n    printf("%d %d\\n", a+b, 3);\r\n    return 0;\r\n}'),
(1051, '#include <stdio.h>\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    scanf("%d", &a);\r\n    printf("%d\\n", a+b);\r\n    return 0;\r\n}'),
(1049, '#include <stdio.h>\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    scanf("%d%d", &a, &b);\r\n    printf("%d\\n", a+b);\r\n    return 0;\r\n}'),
(1050, '#include <stdio.h>\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    scanf("%d", &a, &b);\r\n    printf("%d\\n", a+b);\r\n    return 0;\r\n}'),
(1048, '#include <stdio.h>\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    while(~scanf("%d%d", &a,&b))\r\n    {\r\n        printf("%d\\n", a+b);\r\n    }\r\n    return 0;\r\n}'),
(1047, '#include <stdio.h>\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    while(~scanf("%d%d", &a,&b))\r\n    {\r\n        printf("%d\\n", a+b);\r\n    }\r\n    return 0;\r\n}'),
(1056, 'import java.math.BigInteger;     \r\nimport java.util.Scanner;     \r\n  \r\npublic class Main {     \r\n    \r\n    public static void main(String[] args) {     \r\n        Scanner cin = new Scanner((System.in));    \r\n        while(cin.hasNext()){\r\n            int a = cin.nextInt();  \r\n            int b = cin.nextInt();\r\n            System.out.println(a+b);  \r\n        }  \r\n    }     \r\n} '),
(1057, 'print sum(int(x) for x in raw_input().split())'),
(1059, ''),
(1060, 'print sum(int(x) for x in raw_input().split())'),
(1061, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    cin>>a>>b;\r\n    cout<<a+b<<endl;\r\n    return 0;\r\n}'),
(1062, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    cin>>a>>b;\r\n    cout<<a+b<<endl;\r\n    return 0;\r\n}'),
(1063, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    cin>>a>>b;\r\n    cout<<a+b<<endl;\r\n    return 0;\r\n}'),
(1064, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    cin>>a>>b;\r\n    cout<<a+b<<endl;\r\n    return 0;\r\n}'),
(1065, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    cin>>a>>b;\r\n    cout<<a+b<<endl;\r\n    return 0;\r\n}'),
(1066, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    cin>>a>>b;\r\n    cout<<a+b<<endl;\r\n    return 0;\r\n}'),
(1067, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    cin>>a>>b;\r\n    cout<<a+b<<endl;\r\n    return 0;\r\n}'),
(1068, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    cin>>a>>b;\r\n    cout<<a+b<<endl;\r\n    return 0;\r\n}'),
(1069, '/usr/bin'),
(1070, 'fdsa'),
(1071, '//è¯·åœ¨è¿™é‡Œè¾“å…¥ä½ çš„ä»£ç ï¼Œ^-^d'),
(1072, 'print sum(int(x) for x in raw_input().split())'),
(1073, '#include <iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int a, b;\r\n    cin>>a>>b;\r\n    cout<<a+b<<endl;\r\n    return 0;\r\n}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
 ADD PRIMARY KEY (`solution_id`), ADD KEY `uid` (`user_id`), ADD KEY `pid` (`user_id`), ADD KEY `res` (`result`), ADD KEY `cid` (`contest_id`);

--
-- Indexes for table `source_code`
--
ALTER TABLE `source_code`
 ADD PRIMARY KEY (`solution_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
MODIFY `solution_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1074;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
