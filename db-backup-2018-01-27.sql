DROP TABLE IF EXISTS tapp_bulk_sms;

CREATE TABLE `tapp_bulk_sms` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `list_name` varchar(50) NOT NULL,
  `mobile_number` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_countries;

CREATE TABLE `tapp_countries` (
  `id` int(11) NOT NULL DEFAULT '0',
  `sortname` varchar(3) CHARACTER SET utf8 NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tapp_countries VALUES("1","AF","Afghanistan","93"),
("2","AL","Albania","355"),
("3","DZ","Algeria","213"),
("4","AS","American Samoa","1684"),
("5","AD","Andorra","376"),
("6","AO","Angola","244"),
("7","AI","Anguilla","1264"),
("8","AQ","Antarctica","0"),
("9","AG","Antigua And Barbuda","1268"),
("10","AR","Argentina","54"),
("11","AM","Armenia","374"),
("12","AW","Aruba","297"),
("13","AU","Australia","61"),
("14","AT","Austria","43"),
("15","AZ","Azerbaijan","994"),
("16","BS","Bahamas The","1242"),
("17","BH","Bahrain","973"),
("18","BD","Bangladesh","880"),
("19","BB","Barbados","1246"),
("20","BY","Belarus","375"),
("21","BE","Belgium","32"),
("22","BZ","Belize","501"),
("23","BJ","Benin","229"),
("24","BM","Bermuda","1441"),
("25","BT","Bhutan","975"),
("26","BO","Bolivia","591"),
("27","BA","Bosnia and Herzegovina","387"),
("28","BW","Botswana","267"),
("29","BV","Bouvet Island","0"),
("30","BR","Brazil","55"),
("31","IO","British Indian Ocean Territory","246"),
("32","BN","Brunei","673"),
("33","BG","Bulgaria","359"),
("34","BF","Burkina Faso","226"),
("35","BI","Burundi","257"),
("36","KH","Cambodia","855"),
("37","CM","Cameroon","237"),
("38","CA","Canada","1"),
("39","CV","Cape Verde","238"),
("40","KY","Cayman Islands","1345"),
("41","CF","Central African Republic","236"),
("42","TD","Chad","235"),
("43","CL","Chile","56"),
("44","CN","China","86"),
("45","CX","Christmas Island","61"),
("46","CC","Cocos (Keeling) Islands","672"),
("47","CO","Colombia","57"),
("48","KM","Comoros","269"),
("49","CG","Republic Of The Congo","242"),
("50","CD","Democratic Republic Of The Congo","242"),
("51","CK","Cook Islands","682"),
("52","CR","Costa Rica","506"),
("53","CI","Cote D\'Ivoire (Ivory Coast)","225"),
("54","HR","Croatia (Hrvatska)","385"),
("55","CU","Cuba","53"),
("56","CY","Cyprus","357"),
("57","CZ","Czech Republic","420"),
("58","DK","Denmark","45"),
("59","DJ","Djibouti","253"),
("60","DM","Dominica","1767"),
("61","DO","Dominican Republic","1809"),
("62","TP","East Timor","670"),
("63","EC","Ecuador","593"),
("64","EG","Egypt","20"),
("65","SV","El Salvador","503"),
("66","GQ","Equatorial Guinea","240"),
("67","ER","Eritrea","291"),
("68","EE","Estonia","372"),
("69","ET","Ethiopia","251"),
("70","XA","External Territories of Australia","61"),
("71","FK","Falkland Islands","500"),
("72","FO","Faroe Islands","298"),
("73","FJ","Fiji Islands","679"),
("74","FI","Finland","358"),
("75","FR","France","33"),
("76","GF","French Guiana","594"),
("77","PF","French Polynesia","689"),
("78","TF","French Southern Territories","0"),
("79","GA","Gabon","241"),
("80","GM","Gambia The","220"),
("81","GE","Georgia","995"),
("82","DE","Germany","49"),
("83","GH","Ghana","233"),
("84","GI","Gibraltar","350"),
("85","GR","Greece","30"),
("86","GL","Greenland","299"),
("87","GD","Grenada","1473"),
("88","GP","Guadeloupe","590"),
("89","GU","Guam","1671"),
("90","GT","Guatemala","502"),
("91","XU","Guernsey and Alderney","44"),
("92","GN","Guinea","224"),
("93","GW","Guinea-Bissau","245"),
("94","GY","Guyana","592"),
("95","HT","Haiti","509"),
("96","HM","Heard and McDonald Islands","0"),
("97","HN","Honduras","504"),
("98","HK","Hong Kong S.A.R.","852"),
("99","HU","Hungary","36"),
("100","IS","Iceland","354"),
("101","IN","India","91"),
("102","ID","Indonesia","62"),
("103","IR","Iran","98"),
("104","IQ","Iraq","964"),
("105","IE","Ireland","353"),
("106","IL","Israel","972"),
("107","IT","Italy","39"),
("108","JM","Jamaica","1876"),
("109","JP","Japan","81"),
("110","XJ","Jersey","44"),
("111","JO","Jordan","962"),
("112","KZ","Kazakhstan","7"),
("113","KE","Kenya","254"),
("114","KI","Kiribati","686"),
("115","KP","Korea North","850"),
("116","KR","Korea South","82"),
("117","KW","Kuwait","965"),
("118","KG","Kyrgyzstan","996"),
("119","LA","Laos","856"),
("120","LV","Latvia","371"),
("121","LB","Lebanon","961"),
("122","LS","Lesotho","266"),
("123","LR","Liberia","231"),
("124","LY","Libya","218"),
("125","LI","Liechtenstein","423"),
("126","LT","Lithuania","370"),
("127","LU","Luxembourg","352"),
("128","MO","Macau S.A.R.","853"),
("129","MK","Macedonia","389"),
("130","MG","Madagascar","261"),
("131","MW","Malawi","265"),
("132","MY","Malaysia","60"),
("133","MV","Maldives","960"),
("134","ML","Mali","223"),
("135","MT","Malta","356"),
("136","XM","Man (Isle of)","44"),
("137","MH","Marshall Islands","692"),
("138","MQ","Martinique","596"),
("139","MR","Mauritania","222"),
("140","MU","Mauritius","230"),
("141","YT","Mayotte","269"),
("142","MX","Mexico","52"),
("143","FM","Micronesia","691"),
("144","MD","Moldova","373"),
("145","MC","Monaco","377"),
("146","MN","Mongolia","976"),
("147","MS","Montserrat","1664"),
("148","MA","Morocco","212"),
("149","MZ","Mozambique","258"),
("150","MM","Myanmar","95"),
("151","NA","Namibia","264"),
("152","NR","Nauru","674"),
("153","NP","Nepal","977"),
("154","AN","Netherlands Antilles","599"),
("155","NL","Netherlands The","31"),
("156","NC","New Caledonia","687"),
("157","NZ","New Zealand","64"),
("158","NI","Nicaragua","505"),
("159","NE","Niger","227"),
("160","NG","Nigeria","234"),
("161","NU","Niue","683"),
("162","NF","Norfolk Island","672"),
("163","MP","Northern Mariana Islands","1670"),
("164","NO","Norway","47"),
("165","OM","Oman","968"),
("166","PK","Pakistan","92"),
("167","PW","Palau","680"),
("168","PS","Palestinian Territory Occupied","970"),
("169","PA","Panama","507"),
("170","PG","Papua new Guinea","675"),
("171","PY","Paraguay","595"),
("172","PE","Peru","51"),
("173","PH","Philippines","63"),
("174","PN","Pitcairn Island","0"),
("175","PL","Poland","48"),
("176","PT","Portugal","351"),
("177","PR","Puerto Rico","1787"),
("178","QA","Qatar","974"),
("179","RE","Reunion","262"),
("180","RO","Romania","40"),
("181","RU","Russia","70"),
("182","RW","Rwanda","250"),
("183","SH","Saint Helena","290"),
("184","KN","Saint Kitts And Nevis","1869"),
("185","LC","Saint Lucia","1758"),
("186","PM","Saint Pierre and Miquelon","508"),
("187","VC","Saint Vincent And The Grenadines","1784"),
("188","WS","Samoa","684"),
("189","SM","San Marino","378"),
("190","ST","Sao Tome and Principe","239"),
("191","SA","Saudi Arabia","966"),
("192","SN","Senegal","221"),
("193","RS","Serbia","381"),
("194","SC","Seychelles","248"),
("195","SL","Sierra Leone","232"),
("196","SG","Singapore","65"),
("197","SK","Slovakia","421"),
("198","SI","Slovenia","386"),
("199","XG","Smaller Territories of the UK","44"),
("200","SB","Solomon Islands","677"),
("201","SO","Somalia","252"),
("202","ZA","South Africa","27"),
("203","GS","South Georgia","0"),
("204","SS","South Sudan","211"),
("205","ES","Spain","34"),
("206","LK","Sri Lanka","94"),
("207","SD","Sudan","249"),
("208","SR","Suriname","597"),
("209","SJ","Svalbard And Jan Mayen Islands","47"),
("210","SZ","Swaziland","268"),
("211","SE","Sweden","46"),
("212","CH","Switzerland","41"),
("213","SY","Syria","963"),
("214","TW","Taiwan","886"),
("215","TJ","Tajikistan","992"),
("216","TZ","Tanzania","255"),
("217","TH","Thailand","66"),
("218","TG","Togo","228"),
("219","TK","Tokelau","690"),
("220","TO","Tonga","676"),
("221","TT","Trinidad And Tobago","1868"),
("222","TN","Tunisia","216"),
("223","TR","Turkey","90"),
("224","TM","Turkmenistan","7370"),
("225","TC","Turks And Caicos Islands","1649"),
("226","TV","Tuvalu","688"),
("227","UG","Uganda","256"),
("228","UA","Ukraine","380"),
("229","AE","United Arab Emirates","971"),
("230","GB","United Kingdom","44"),
("231","US","United States","1"),
("232","UM","United States Minor Outlying Islands","1"),
("233","UY","Uruguay","598"),
("234","UZ","Uzbekistan","998"),
("235","VU","Vanuatu","678"),
("236","VA","Vatican City State (Holy See)","39"),
("237","VE","Venezuela","58"),
("238","VN","Vietnam","84"),
("239","VG","Virgin Islands (British)","1284"),
("240","VI","Virgin Islands (US)","1340"),
("241","WF","Wallis And Futuna Islands","681"),
("242","EH","Western Sahara","212"),
("243","YE","Yemen","967"),
("244","YU","Yugoslavia","38"),
("245","ZM","Zambia","260"),
("246","ZW","Zimbabwe","263");



DROP TABLE IF EXISTS tapp_drft_msg;

CREATE TABLE `tapp_drft_msg` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_groups;

CREATE TABLE `tapp_groups` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(500) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `g_inx` (`group_name`),
  KEY `fi_name` (`first_name`),
  KEY `li_name` (`last_name`)
) ENGINE=MyISAM AUTO_INCREMENT=25951 DEFAULT CHARSET=latin1;

INSERT INTO tapp_groups VALUES("25940","my group","s","1244565","dgf","gfd","ghfh","2017-12-26 09:01:45"),
("25941","my group","dgfgf","4565","gf","dgf","gfhdh","2017-12-26 09:01:45"),
("25942","my group","dgfdgf","4565645","s","gs","ghfh","2017-12-26 09:01:45"),
("25943","my group","gf","45656","gs","dgf","hgfdfhg","2017-12-26 09:01:45"),
("25944","my group","dgff","456","g","dgfsd","hgfdgf","2017-12-26 09:01:45"),
("25950","new group","123456987","sample","demo","Example@gmail.com","US","2018-01-24 00:26:37");



DROP TABLE IF EXISTS tapp_groups_log;

CREATE TABLE `tapp_groups_log` (
  `id` int(100) unsigned NOT NULL DEFAULT '0',
  `group_name` varchar(500) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  `unsub_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_keywords;

CREATE TABLE `tapp_keywords` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(1000) NOT NULL,
  `client_name` varchar(500) NOT NULL,
  `client_email` varchar(500) NOT NULL,
  `client_address` varchar(100) DEFAULT NULL,
  `num_of_times` varchar(500) NOT NULL,
  `expiry_dates` date NOT NULL,
  `twilio_num` varchar(500) NOT NULL,
  `left_msg` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL,
  `filename` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_list;

CREATE TABLE `tapp_list` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `list_name` varchar(50) NOT NULL,
  `number` varchar(200) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `list_name` (`list_name`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_list_numbers;

CREATE TABLE `tapp_list_numbers` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `list_name` varchar(50) NOT NULL,
  `number` varchar(200) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2959 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_message_newsletter;

CREATE TABLE `tapp_message_newsletter` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(500) NOT NULL,
  `message_date` datetime DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO tapp_message_newsletter VALUES("21","dadAF ","2017-12-06 12:12:00","2017-12-06 17:00:49"),
("22","abc ","2017-12-06 12:12:00","2017-12-06 17:03:24"),
("23","abc ","2017-12-06 12:12:00","2017-12-06 17:05:02"),
("24","abc ","2017-12-06 12:12:00","2017-12-06 17:23:34"),
("25","abc ","2017-12-06 01:12:00","2017-12-06 17:39:52"),
("26","haru ","2017-12-06 01:12:00","2017-12-06 17:40:01"),
("27","r ","2017-12-06 01:12:00","2017-12-06 18:23:12"),
("28","Hello this is test sms ","2017-12-25 03:12:00","2017-12-25 08:47:47"),
("29","hi ","2017-12-25 03:12:00","2017-12-25 08:59:05"),
("30","dsf ","2017-12-25 03:12:00","2017-12-25 08:59:30");



DROP TABLE IF EXISTS tapp_newletter_log;

CREATE TABLE `tapp_newletter_log` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `mobile_no` varchar(1000) NOT NULL,
  `keyword` varchar(500) NOT NULL,
  `mode` varchar(500) DEFAULT NULL,
  `unsub_date` datetime DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_newsletter;

CREATE TABLE `tapp_newsletter` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `mobile_no` varchar(1000) NOT NULL,
  `keyword` varchar(500) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_newsletter_log;

CREATE TABLE `tapp_newsletter_log` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `mobile_no` varchar(1000) NOT NULL,
  `keyword` varchar(500) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `unsub_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_poll;

CREATE TABLE `tapp_poll` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `poll_name` varchar(1000) NOT NULL,
  `sms_number` varchar(500) NOT NULL,
  `message` varchar(500) DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_poll_msg;

CREATE TABLE `tapp_poll_msg` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `sms_number` varchar(1000) NOT NULL,
  `message` varchar(500) NOT NULL,
  `scheduled_for` datetime DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `poll_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_poll_msg_log;

CREATE TABLE `tapp_poll_msg_log` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `sms_number` varchar(1000) NOT NULL,
  `message` varchar(500) NOT NULL,
  `scheduled_for` datetime DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `poll_id` int(11) DEFAULT NULL,
  `msg_sent_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_predrafted_message;

CREATE TABLE `tapp_predrafted_message` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `date_time` datetime NOT NULL,
  `keywords` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO tapp_predrafted_message VALUES("16","abc","2017-12-06 12:05:27",""),
("18","ad","2017-12-06 12:15:04","");



DROP TABLE IF EXISTS tapp_received_responses;

CREATE TABLE `tapp_received_responses` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `mobile_no` varchar(1000) NOT NULL,
  `keyword` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL,
  `Poll_Name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_recevied_msg;

CREATE TABLE `tapp_recevied_msg` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `sms_number` varchar(1000) NOT NULL,
  `twilio_num` varchar(500) NOT NULL,
  `msg_type` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=345 DEFAULT CHARSET=latin1;

INSERT INTO tapp_recevied_msg VALUES("1","1407486645","1123486645","","thank you for help","2017-12-07 03:47:00");



DROP TABLE IF EXISTS tapp_sent_msg;

CREATE TABLE `tapp_sent_msg` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `sms_number` varchar(1000) NOT NULL,
  `message` varchar(500) NOT NULL,
  `twilio_num` varchar(100) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17721 DEFAULT CHARSET=latin1;

INSERT INTO tapp_sent_msg VALUES("17653","1234567","abc helo","07956566083","2017-09-28 05:01:40"),
("17654","12344567","hello hi","07956566083","2017-09-28 05:01:40"),
("17655","2","","07956566083","2017-09-28 05:01:40"),
("17656","3","","07956566083","2017-09-28 05:01:40"),
("17657","4","","07956566083","2017-09-28 05:01:40"),
("17658","5","","07956566083","2017-09-28 05:01:40"),
("17659","6","","07956566083","2017-09-28 05:01:40"),
("17660","7","","07956566083","2017-09-28 05:01:40"),
("17661","8","","07956566083","2017-09-28 05:01:40"),
("17662","9","","07956566083","2017-09-28 05:01:40"),
("17663","","","07956566083","2017-09-28 05:01:40"),
("17664","10","","07956566083","2017-09-28 05:01:40"),
("17665","11","","07956566083","2017-09-28 05:01:40"),
("17666","12","","07956566083","2017-09-28 05:01:40"),
("17667","13","","07956566083","2017-09-28 05:01:40"),
("17668","14","","07956566083","2017-09-28 05:01:40"),
("17669","15","","07956566083","2017-09-28 05:01:40"),
("17670","","","07956566083","2017-09-28 05:01:40"),
("17671","","","07956566083","2017-09-28 05:01:40"),
("17672","","","07956566083","2017-09-28 05:01:40"),
("17673","","","07956566083","2017-09-28 05:01:40"),
("17674","","","07956566083","2017-09-28 05:01:40"),
("17675","","","07956566083","2017-09-28 05:01:40"),
("17676","","","07956566083","2017-09-28 05:01:40"),
("17677","","","07956566083","2017-09-28 05:01:40"),
("17678","","","07956566083","2017-09-28 05:01:40"),
("17679","16","","07956566083","2017-09-28 05:01:40"),
("17680","17","","07956566083","2017-09-28 05:01:40"),
("17681","","","07956566083","2017-09-28 05:01:40"),
("17682","","","07956566083","2017-09-28 05:01:40"),
("17683","","","07956566083","2017-09-28 05:01:40"),
("17684","","","07956566083","2017-09-28 05:01:40"),
("17685","","","07956566083","2017-09-28 05:01:40"),
("17686","18","","07956566083","2017-09-28 05:01:40"),
("17687","19","","07956566083","2017-09-28 05:01:40"),
("17688","","","07956566083","2017-09-28 05:01:40"),
("17689","","","07956566083","2017-09-28 05:01:40"),
("17690","20","","07956566083","2017-09-28 05:01:40"),
("17691","21","","07956566083","2017-09-28 05:01:40"),
("17692","22","","07956566083","2017-09-28 05:01:40"),
("17693","23","","07956566083","2017-09-28 05:01:40"),
("17694","24","","07956566083","2017-09-28 05:01:40"),
("17695","25","","07956566083","2017-09-28 05:01:40"),
("17696","26","","07956566083","2017-09-28 05:01:40"),
("17697","","","07956566083","2017-09-28 05:01:40"),
("17698","","","07956566083","2017-09-28 05:01:40"),
("17699","","","07956566083","2017-09-28 05:01:40"),
("17700","","","07956566083","2017-09-28 05:01:40"),
("17701","","","07956566083","2017-09-28 05:01:40"),
("17702","","","07956566083","2017-09-28 05:01:40"),
("17703","","","07956566083","2017-09-28 05:01:40"),
("17704","","","07956566083","2017-09-28 05:01:40"),
("17705","","","07956566083","2017-09-28 05:01:40"),
("17706","","","07956566083","2017-09-28 05:01:40"),
("17707","","","07956566083","2017-09-28 05:01:40"),
("17708","","","07956566083","2017-09-28 05:01:40"),
("17709","","","07956566083","2017-09-28 05:01:40"),
("17710","","","07956566083","2017-09-28 05:01:40"),
("17711","","","07956566083","2017-09-28 05:01:40"),
("17712","","","07956566083","2017-09-28 05:01:40"),
("17713","","","07956566083","2017-09-28 05:01:40"),
("17714","","","07956566083","2017-09-28 05:01:40"),
("17715","","","07956566083","2017-09-28 05:01:40"),
("17716","","","07956566083","2017-09-28 05:01:40"),
("17717","","","07956566083","2017-09-28 05:01:40"),
("17718","","","07956566083","2017-09-28 05:01:40"),
("17719","EmailID","","07956566083","2017-12-05 12:41:56"),
("17720","3123213123","sdfsad df asdf sadf edf sdaf asdf asdf asdf asdf.","312321321","2017-12-09 00:00:00");



DROP TABLE IF EXISTS tapp_sent_msg_failed;

CREATE TABLE `tapp_sent_msg_failed` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `sms_number` varchar(1000) NOT NULL,
  `twilio_num` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `url` varchar(500) DEFAULT NULL,
  `images` varchar(500) DEFAULT NULL,
  `scheduled_for` datetime DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5392 DEFAULT CHARSET=latin1;

INSERT INTO tapp_sent_msg_failed VALUES("5380","919634843418","","ðŸ˜„","","","","2017-06-14 01:39:53"),
("5381","dsassafafafa","07956566083","sadaaf","","","","2017-12-05 10:43:36"),
("5382","dsassafafafa","07956566083","sadaaf","","","","2017-12-05 10:46:24"),
("5383","+919412992004","07956566083","ðŸ˜hiÂ ","","","","2017-12-05 10:59:01"),
("5384","+919412992004","07956566083","abc","","","","2017-12-05 12:35:37"),
("5385","+917456851006","07956566083","abc","","","","2017-12-05 12:37:24"),
("5386","+919412992004","07956566083","abc","","","","2017-12-05 12:39:43"),
("5387","+917456851006","07956566083","abc","","","","2017-12-05 12:41:11"),
("5388","ad","07956566083","asassaf","","","","2017-12-07 12:09:17"),
("5389","12311231","12312312","sdfsad df asdf sadf edf sdaf asdf asdf asdf asdf.","","","2017-12-09 00:00:00","2017-12-10 00:00:00"),
("5390","12312321","12321321321","sdfsad df asdf sadf edf sdaf asdf asdf asdf asdf.","","","2017-12-08 00:00:00","2017-12-09 00:00:00"),
("5391","919756299982","+18316215367","hello test sms","","","","2017-12-27 01:00:06");



DROP TABLE IF EXISTS tapp_sent_msg_log;

CREATE TABLE `tapp_sent_msg_log` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `sms_number` varchar(1000) NOT NULL,
  `twilio_num` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `url` varchar(500) DEFAULT NULL,
  `images` varchar(500) DEFAULT NULL,
  `scheduled_for` datetime DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25819 DEFAULT CHARSET=latin1;

INSERT INTO tapp_sent_msg_log VALUES("25813","21213421","12312321","sdfsad df asdf sadf edf sdaf asdf asdf asdf asdf.","","","2017-12-09 00:00:00","2017-12-09 00:00:00"),
("25814","12321421412","12342141424","Scsafsadfdsaf sdfsdfgsd sdds","","","2017-12-07 00:00:00","2017-12-09 00:00:00"),
("25815","43543543","346436","Zxsdsadsad asfsaf","","","2017-12-06 00:00:00","2017-12-09 00:00:00"),
("25816","2132143654","123124214","sccxzzfadfsda","","","2017-12-04 00:00:00","2017-12-09 00:00:00"),
("25817","918535083023","+12014534100 ","hi test sms","","","","2017-12-27 01:13:30"),
("25818","919756299982","+12014534100 ","hello test sms","","","","2017-12-27 01:15:11");



DROP TABLE IF EXISTS tapp_single_msg;

CREATE TABLE `tapp_single_msg` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `sms_number` varchar(1000) NOT NULL,
  `message` varchar(500) NOT NULL,
  `images` varchar(500) DEFAULT NULL,
  `scheduled_for` datetime DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_stored_numbers;

CREATE TABLE `tapp_stored_numbers` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sms_number` varchar(1000) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_suscribers_list;

CREATE TABLE `tapp_suscribers_list` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `list_name` varchar(1000) NOT NULL,
  `description` varchar(500) NOT NULL,
  `numbers` varchar(500) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_tbl_leads;

CREATE TABLE `tapp_tbl_leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(20) DEFAULT NULL,
  `body` text,
  `date_time` datetime DEFAULT NULL,
  `twilio_num` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` text,
  `postal_code` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=228 DEFAULT CHARSET=latin1;

INSERT INTO tapp_tbl_leads VALUES("1","2121321123213","wefsadf sdfadsf sdaf adfsda sadf sadf df asd.","2017-12-26 04:17:31","12133243254","Hasd","wwerwe","ha@gmail.com","India","fdadfsdfa","123");



DROP TABLE IF EXISTS tapp_test;

CREATE TABLE `tapp_test` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `sms_number` varchar(1000) NOT NULL,
  `twilio_num` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=259 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_twilio_account;

CREATE TABLE `tapp_twilio_account` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `service_type` varchar(150) DEFAULT NULL,
  `twilio_sid` varchar(500) NOT NULL,
  `twilio_token` varchar(1000) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO tapp_twilio_account VALUES("19","twilio","dasfds54fds5af4sd64f5sad","asf5d4f5a4ds5af4sd5f4asd5fdsa5f4sda5f","2017-12-06 00:00:00"),
("22","plivo","dasfds54fds5af4sd64f5sad12","asf5d4f5a4ds5af4sd5f4asd5fdsa5f4sdad5f","2018-01-25 03:18:27");



DROP TABLE IF EXISTS tapp_twilio_number;

CREATE TABLE `tapp_twilio_number` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `service_type` varchar(150) DEFAULT NULL,
  `client_name` varchar(500) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `twilio_sid` varchar(200) DEFAULT NULL,
  `twilio_token` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO tapp_twilio_number VALUES("31","plivo","","123456456456","dasfds54fds5af4sd64f5sad12","asf5d4f5a4ds5af4sd5f4asd5fdsa5f4sdad5f","","2018-01-25 04:00:03"),
("32","twilio","","12365874565","dasfds54fds5af4sd64f5sad","asf5d4f5a4ds5af4sd5f4asd5fdsa5f4sda5f","admin@gmail.com","2018-01-25 03:55:25"),
("33","plivo","","1236598574","dasfds54fds5af4sd64f5sad12","asf5d4f5a4ds5af4sd5f4asd5fdsa5f4sdad5f","admin@gmail.com","2018-01-25 03:55:33");



DROP TABLE IF EXISTS tapp_unsub_keywords;

CREATE TABLE `tapp_unsub_keywords` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(1000) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tapp_unsub_keywords VALUES("6","ABC","sad","2017-12-06 11:53:34");



DROP TABLE IF EXISTS tapp_url_count;

CREATE TABLE `tapp_url_count` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(500) DEFAULT NULL,
  `link_id` int(10) unsigned NOT NULL,
  `link_count` varchar(500) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_url_id;

CREATE TABLE `tapp_url_id` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=206 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tapp_user_login;

CREATE TABLE `tapp_user_login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `profile_image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

INSERT INTO tapp_user_login VALUES("34","Nitesh","admin@gmail.com","123","super admin","2015-12-26 15:03:46","8.jpg"),
("55","sachinder","sachindersk09@gmail.com","12345","","2017-12-06 15:56:38","avatarpic.png"),
("57","nads1","nads@gmail.com","1234","","2017-12-26 00:08:17","Desert.jpg"),
("58","harendra","haru@gmail.com","123","","2017-12-26 22:33:01","user-default.png"),
("59","sachinder 1","sachinder@gmail.com","1232","","2017-12-25 23:40:22","Chrysanthemum.jpg"),
("60","ns","ns@gmail.com","123","","2017-12-26 22:08:26","Desert.jpg"),
("61","abc","abc@gmail.com","123","","2017-12-26 22:32:26","user-default.png");



