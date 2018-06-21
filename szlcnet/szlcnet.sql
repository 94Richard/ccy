/*
Navicat MySQL Data Transfer

Source Server         : 灵创官网_万网
Source Server Version : 50173
Source Host           : sdm209639348.my3w.com:3306
Source Database       : sdm209639348_db

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2017-03-28 20:24:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `lc_admin_auth`
-- ----------------------------
DROP TABLE IF EXISTS `lc_admin_auth`;
CREATE TABLE `lc_admin_auth` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL,
  `title` varchar(250) NOT NULL,
  `auth_action` varchar(250) NOT NULL,
  `auth_fun` varchar(250) NOT NULL,
  `menu_name` varchar(20) NOT NULL,
  `menu_url` varchar(200) NOT NULL,
  `orderid` mediumint(6) unsigned NOT NULL,
  `css_icon` varchar(150) DEFAULT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8 COMMENT='后台菜单表';

-- ----------------------------
-- Records of lc_admin_auth
-- ----------------------------
INSERT INTO `lc_admin_auth` VALUES ('1', '0', '系统设置', '', '', '系统设置', '', '0', 'home', '1');
INSERT INTO `lc_admin_auth` VALUES ('2', '0', '查看后台角色', 'AdminRole', 'index,', '角色管理', 'url:a=AdminRole', '1', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('3', '0', '新增后台角色', 'AdminRole', 'add,insert,', '', '', '2', '', '1');
INSERT INTO `lc_admin_auth` VALUES ('4', '1', '编辑后台角色', 'AdminRole', 'edit,update,status,', '', '', '3', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('5', '1', '删除后台角色', 'AdminRole', 'delete,', '', '', '4', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('6', '1', '后台角色授权', 'AdminRole', 'auth,', '', '', '5', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('7', '1', '查看后台用户', 'AdminUser', 'index,', '用户管理', 'url:a=AdminUser', '5', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('8', '1', '新增后台用户', 'AdminUser', 'add,insert,', '', '', '6', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('9', '1', '编辑后台用户', 'AdminUser', 'edit,update,status,', '', '', '7', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('10', '1', '删除后台用户', 'AdminUser', 'delete,', '', '', '8', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('11', '1', '后台用户授权', 'AdminUser', 'auth,', '', '', '9', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('12', '1', '查看权限列表', 'AdminAuth', 'index,', '权限列表', 'url:a=AdminAuth', '10', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('13', '1', '新增权限列表', 'AdminAuth', 'add,insert,', '', '', '11', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('14', '1', '编辑权限列表', 'AdminAuth', 'edit,update,status,', '', '', '12', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('15', '1', '删除权限列表', 'AdminAuth', 'delete,', '', '', '13', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('16', '0', '其他', '', '', '', '', '2', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('25', '16', '修改密码', 'AdminUser', 'changePwd,', '', '', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('28', '0', '单页管理', '', '', '单页管理', '', '2', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('34', '1', '网站基本设置', 'WebConfig', 'index,update,,edit,changeLang,', '网站基本设置', 'url:a=WebConfig&dir=1', '3', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('60', '28', '单页分类', 'BasicSort', 'index,add,insert,edit,update,delete,', '单页分类', 'url:a=BasicSort&dir=1&tab=BasicSort', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('61', '28', '单页管理', 'Basic', 'index,add,insert,edit,update,delete,', '单页管理', 'url:a=Basic&dir=1&tab=Basic', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('62', '0', '新闻管理', '', '', '新闻管理', '', '3', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('63', '62', '新闻分类', 'NewsSort', 'index,add,insert,edit,update,delete,', '新闻分类', 'url:a=NewsSort&dir=1&tab=NewsSort', '0', '', '1');
INSERT INTO `lc_admin_auth` VALUES ('64', '62', '新闻列表', 'News', 'index,add,insert,edit,update,delete,parent_auth,', '新闻列表', 'url:a=News&dir=1&tab=News', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('65', '66', '广告分类', 'Banner', 'index,add,insert,edit,update,delete,', '广告分类', 'url:a=BannerSort&dir=1&tab=BannerSort', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('66', '0', '广告管理', '', '', '广告管理', '', '5', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('68', '66', '广告列表', 'BannerSort', 'index,add,insert,edit,update,delete,', '广告列表', 'url:a=Banner&dir=1&tab=Banner', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('69', '0', '产品管理', '', '', '产品管理', '', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('70', '69', '产品分类管理', 'ProductSort', 'index,add,insert,edit,update,delete,', '产品分类管理', 'url:a=ProductSort&dir=1&tab=ProductSort', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('71', '69', '产品列表', 'Product', 'index,add,insert,edit,update,delete,', '产品列表', 'url:a=Product&dir=1&tab=Product', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('72', '0', '图片管理', '', '', '图片管理', '', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('73', '72', '图片分类', 'CaseSort', 'index,add,insert,edit,update,delete,', '图片分类', 'url:a=CaseSort&dir=1&tab=CaseSort', '0', '', '1');
INSERT INTO `lc_admin_auth` VALUES ('74', '72', '图片列表', 'Case', 'index,add,insert,edit,update,delete,', '图片列表', 'url:a=Case&dir=1&tab=Case', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('75', '0', '留言管理', '', '', '留言管理', '', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('76', '75', 'Message', 'Message', 'index,add,insert,edit,update,delete,', '留言内容管理', 'url:a=Message&dir=1&tab=Message', '0', null, '1');
INSERT INTO `lc_admin_auth` VALUES ('77', '0', '会员管理', 'User', 'index,edit,update,', '会员管理', 'url:a=User&dir=1&tab=User', '0', 'user', '1');
INSERT INTO `lc_admin_auth` VALUES ('78', '77', '会员管理', 'Member', 'index,edit,update,', '会员管理', 'url:a=Member&dir=1&tab=member&f=index', '0', 'user', '1');
INSERT INTO `lc_admin_auth` VALUES ('79', '0', '招聘管理', 'Recruitment', '', '招聘管理', '', '0', '', '1');
INSERT INTO `lc_admin_auth` VALUES ('80', '79', '部门管理', 'RecruitmentSort', 'index,', '部门管理', 'url:a=RecruitmentSort&dir=1&tab=RecruitmentSort', '0', '', '1');
INSERT INTO `lc_admin_auth` VALUES ('81', '79', '简历中心', 'Resume', 'index,', '简历中心', 'url:a=Resume&dir=1&tab=Resume', '0', '', '1');
INSERT INTO `lc_admin_auth` VALUES ('82', '79', '职位管理', 'Recruitment', 'index,', '职位管理', 'url:a=Recruitment&dir=1&tab=Recruitment', '0', '', '1');

-- ----------------------------
-- Table structure for `lc_admin_get_letter`
-- ----------------------------
DROP TABLE IF EXISTS `lc_admin_get_letter`;
CREATE TABLE `lc_admin_get_letter` (
  `admin_lettet_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员接受信息箱ID',
  `admin_id` int(11) NOT NULL COMMENT '管理员ID（可能是发给管理员|也有可能是小秘书）',
  `sender_member_Id` int(11) NOT NULL COMMENT '发送人ID',
  `letter_Info_type` tinyint(4) NOT NULL COMMENT '信息类型（1投诉|2求助|3提问...）',
  `send_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '信息发送时间',
  `reply_content` text COMMENT '管理员回复内容',
  `reply_time` datetime DEFAULT NULL COMMENT '管理员回复时间',
  `Info_isOnce` tinyint(3) DEFAULT NULL COMMENT '此信息是否不允许再次回复（管理员才可填写）',
  `isReply` tinyint(4) NOT NULL DEFAULT '0' COMMENT '该信息是否已经回复过',
  `Last_letter_id` int(11) DEFAULT '0' COMMENT '上一条发送的信息ID',
  PRIMARY KEY (`admin_lettet_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='管理员信箱表';

-- ----------------------------
-- Records of lc_admin_get_letter
-- ----------------------------

-- ----------------------------
-- Table structure for `lc_admin_role`
-- ----------------------------
DROP TABLE IF EXISTS `lc_admin_role`;
CREATE TABLE `lc_admin_role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `description` varchar(250) NOT NULL,
  `auth` text NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='后台管理员等级表';

-- ----------------------------
-- Records of lc_admin_role
-- ----------------------------
INSERT INTO `lc_admin_role` VALUES ('1', '系统管理员', '系统管理员无需授权便拥有后台的全部管理权限。本角色是系统自带并且不可删除的。', '', '1');
INSERT INTO `lc_admin_role` VALUES ('2', '无权限用户组', '本组不授权。用户属于本组的单独对该用户进行授权', '', '1');
INSERT INTO `lc_admin_role` VALUES ('3', '普通管理员', '普通管理员拥有绝大部份权限', '2,3,4,5,7,8,9,10', '1');

-- ----------------------------
-- Table structure for `lc_admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `lc_admin_user`;
CREATE TABLE `lc_admin_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `description` varchar(250) NOT NULL,
  `role_id` int(11) unsigned NOT NULL,
  `auth` text NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of lc_admin_user
-- ----------------------------
INSERT INTO `lc_admin_user` VALUES ('1', 'uadmin', 'e10adc3949ba59abbe56e057f20f883e', '超级系统管理员', '1', '3,34,4,5,6,7,8,9,10,35,11,12,13,14,15,61,21,47,46,60,48,30,31,49,25,42,33,41,40,39,38,37,51', '1');
INSERT INTO `lc_admin_user` VALUES ('3', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '', '3', '34,7,70,71,73,74,76,25,60,61,65,68', '1');

-- ----------------------------
-- Table structure for `lc_aliyun_oss`
-- ----------------------------
DROP TABLE IF EXISTS `lc_aliyun_oss`;
CREATE TABLE `lc_aliyun_oss` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `accessKeyId` text NOT NULL COMMENT '访问秘钥的ID',
  `accessKeySecret` text NOT NULL COMMENT '秘钥',
  `endpoint` text NOT NULL COMMENT 'OSS数据中心访问域名',
  `bucket` text NOT NULL COMMENT '存储空间名称',
  `url` varchar(50) NOT NULL COMMENT 'URL访问路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=gbk COMMENT='阿里云对象存储OSS服务器设置';

-- ----------------------------
-- Records of lc_aliyun_oss
-- ----------------------------
INSERT INTO `lc_aliyun_oss` VALUES ('1', 'oXeSJG1wc29AQ4VM', 'AZeFeLrR6U6KngRBWNyKdbmXvT8jHk', 'http://oss-cn-shenzhen.aliyuncs.com', 'szlcnet', 'http://file.szlcnet.com/');

-- ----------------------------
-- Table structure for `lc_banner`
-- ----------------------------
DROP TABLE IF EXISTS `lc_banner`;
CREATE TABLE `lc_banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `banner_name` varchar(150) NOT NULL,
  `banner_content` varchar(150) DEFAULT NULL,
  `banner_spic` text NOT NULL,
  `banner_url` varchar(150) DEFAULT NULL,
  `banner_order` int(11) DEFAULT NULL,
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_banner
-- ----------------------------
INSERT INTO `lc_banner` VALUES ('1', '2', 'banner_1', 'ss567657666', 'web_up_file/banner_spic/20160614142647566.jpg', '', '5', '1');
INSERT INTO `lc_banner` VALUES ('2', '2', 'banner_2', '', 'web_up_file/banner_spic/20160614142627217.jpg', '', '2', '1');

-- ----------------------------
-- Table structure for `lc_banner_sort`
-- ----------------------------
DROP TABLE IF EXISTS `lc_banner_sort`;
CREATE TABLE `lc_banner_sort` (
  `banner_sort_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_sort_name` varchar(150) NOT NULL,
  `banner_sort_order` int(11) DEFAULT NULL,
  `banner_sort_content` text,
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`banner_sort_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_banner_sort
-- ----------------------------
INSERT INTO `lc_banner_sort` VALUES ('2', '首页广告', '0', 'asdasd', '1');

-- ----------------------------
-- Table structure for `lc_basic`
-- ----------------------------
DROP TABLE IF EXISTS `lc_basic`;
CREATE TABLE `lc_basic` (
  `basic_id` int(11) NOT NULL AUTO_INCREMENT,
  `basic_name` varchar(150) NOT NULL,
  `basic_alias` varchar(150) DEFAULT NULL COMMENT '别名',
  `url` varchar(150) DEFAULT NULL,
  `basic_seo_title` varchar(150) NOT NULL,
  `basic_seo_description` varchar(150) DEFAULT NULL,
  `basic_seo_keyword` text,
  `basic_one_id` int(11) NOT NULL,
  `basic_content` text NOT NULL,
  `basic_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `basic_spic` text,
  `basic_order` int(11) NOT NULL,
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`basic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_basic
-- ----------------------------
INSERT INTO `lc_basic` VALUES ('39', '域名注册', 'YuMingZhuCe', 'Help/Domain', '域名注册', '域名注册', '', '51', '域名注册', '2016-06-03 17:15:51', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('40', '虚拟主机', 'XuNiZhuJi', 'Help/VirtualHost', '虚拟主机', '虚拟主机', '', '46', '<p>\r\n	<span style=\"color:#666666;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\"> 虚拟主机，也叫“网站空间”，就是把一台运行在互联网上的物理服务器划分成多个“虚拟”服务器。虚拟主机技术极大的促进了网络技术的应用和普及。同时虚拟主机的租用服务也成了网络时代的一种新型经济形式。</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\"> </span> \r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"color:#666666;\">虚拟主机技术是互联网服务器采用的节省服务器硬件成本的技术，虚拟主机技术主要应用于HTTP（Hypertext Transfer Protocol，超文本传输协议）服务，将一台服务器的某项或者全部服务内容逻辑划分为多个服务单位，对外表现为多个服务器，从而充分利用服务器硬件资源。</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"color:#666666;\">虚拟主机是使用特殊的软硬件技术，把一台真实的物理服务器主机分割成多个逻辑存储单元。每个逻辑单元都没有物理实体，但是每一个逻辑单元都能像真实的物理主机一样在网络上工作，具有单独的IP地址（或共享的IP地址）、独立的域名以及完整的Internet服务器（支持WWW、FTP、E-mail等）功能。</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"color:#666666;\">虚拟主机的关键技术在于，即使在同一台硬件、同一个操作系统上，运行着为多个用户打开的不同的服务器程式，也互不干扰。而各个用户拥有自己的一部分系统资源（IP地址、文档存储空间、内存、CPU等）。各个虚拟主机之间完全独立，在外界看来，每一台虚拟主机和一台单独的主机的表现完全相同。所以这种被虚拟化的逻辑主机被形象地称为“虚拟主机”。</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"color:#666666;\">相对于购买独立服务器，网站建设的费用大大降低，为普及中小型网站提供了极大便利。</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"color:#666666;\">虚拟主机之间完全独立，在外界看来，每一台虚拟主机和一台独立的主机完全一样。由于多台虚拟主机共享一台真实主机的资源，每个虚拟主机用户承受的硬件费用、网络维护费用、通信线路的费用均大幅度降低。</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"color:#666666;\">许多企业建立网站都采用这种方法，这样不仅大大节省了购买机器和租用专线的费用，网站服务器管理简单，诸如软件配置、防病毒、防攻击等安全措施都由专业服务商提供，大大简化了服务器管理的复杂性；同时也不必为使用和维护服务器的技术问题担心，更不必聘用专门的管理人员。</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"color:#666666;\">网站建设初期，购买服务器到安装操作系统和应用软件需要较长的时间，而租用虚拟主机通常只需要几分钟的时间就可以开通，因为主要的注册域名查询服务商都已经实现了整个业务流程的电子商务化，选择适合自己需要的虚拟主机，在线付款之后马上就可以开通了。</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<div class=\"para\" style=\"font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"color:#666666;\">虚拟主机技术的出现，是对Internet技术和网络发展的重大贡献，由于多台虚拟主机共享一台真实主机的资源，大大增加了服务器和通讯线路的利用率，使得一台服务器上能够毫无冲突地配置多个网络IP地址，这意味着人们能够利用虚拟主机把若干个带有单独域名的站点建置在一台服务器上，不必再为建立一个站点而购置单独的服务器和用巨资申请专线作为网络信息出口。</span> \r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<br />\r\n<p>\r\n	<br />\r\n</p>', '2016-06-03 17:16:09', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('41', '企业邮箱', 'QiYeYouXiang', 'Help/Mail', '企业邮箱', '企业邮箱', '', '46', '<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	企业邮箱（Enterprise Mailbox）是指以您的域名作为后缀的电子邮件地址。通常一个企业经常有多个员工要使用电子邮件，企业电子邮局可以让集团邮局管理员任意开设不同名字的邮箱，并根据不同的需求设定邮箱的空间，而且可以随时关闭或者删除这些邮箱。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	1. 按照企业自有域名开通的邮箱：name@企业域名。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	2. 可自行管理、自由分配、命名的邮箱。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	功能更多，空间容量更大，大大提高企业邮箱的稳定高效性，反垃圾反病毒性能更强，邮件收发速度更快。 企业邮箱是以企业自己的域名为后缀的信箱，例如：name@企业域名。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	拥有企业邮箱可以为自己的员工设置电子邮箱，还可以根据需要设置不同的管理权限，以及部门成员之间或者公司全体员工之间的群发功能等等，除了一般的终端邮件程序方式(如outlook)收发E-mail之外，还可以实现WEB方式收发和管理邮件，比一般ISP提供的电子邮箱和虚拟主机提供的信箱更为方便。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<h3 class=\"title-text\" style=\"font-size:18px;color:#333333;font-weight:400;font-family:\'Microsoft YaHei\', SimHei, Verdana;background-color:#FFFFFF;\">\r\n		<h3 class=\"title-text\" style=\"font-size:18px;color:#333333;font-weight:400;font-family:\'Microsoft YaHei\', SimHei, Verdana;background-color:#FFFFFF;\">\r\n			关于企业邮箱的一些<span style=\"line-height:1.5;\">常见问题</span>\r\n		</h3>\r\n	</h3>\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"font-weight:700;\">1.</span><span style=\"font-weight:700;\">感觉各大邮件系统功能差不多</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"font-weight:700;\"><br />\r\n</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	企业邮箱用户没有明确的邮件需求，网管往往觉得各大邮件系统功能类似，价格参差不齐，性能好坏也无从考究，选型时更是摇摆不定。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"font-weight:700;\">2.</span><span style=\"font-weight:700;\">不知如何测试系统稳定性</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"font-weight:700;\"><br />\r\n</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	对于零邮件数据环境下的测试，无论是内网功能测试，还是公网测试，或者开通账户给用户使用，短时间内都是无法检验系统稳定性，而公司也不可能在一个项目上花费数月或者更久的时间来等待你去选型测试。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"font-weight:700;\">3.</span><span style=\"font-weight:700;\">无法检验系统安全性</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"font-weight:700;\"><br />\r\n</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	企业使用新域名或者新IP进行邮件系统测试，由于垃圾邮件发送者、黑客或者蠕虫病毒等尚未探测到新域名或者IP的存在，并不会攻击该系统，而安全性测试则如同一张白纸，无从考究，更不要说对系统盗号问题、邮件炸弹等安全性的测试。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"font-weight:700;\">4.</span><span style=\"font-weight:700;\">能否满足企业后续邮件需求</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"font-weight:700;\"><br />\r\n</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	很多企业往往上了邮件系统一段时间，用户才反馈各种各样的邮件需求，甚至包含一些个性化定制服务需求。厂家能否满足企业后续的邮件需求，是否有条件不断的进行系统更新和升级，往往直接影响着企业使用该系统的年限。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"font-weight:700;\">5.</span><span style=\"font-weight:700;\">售后服务</span> \r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"font-weight:700;\"><br />\r\n</span> \r\n</p>\r\n<div class=\"para\" style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	专业高效的售后服务，直接保障邮件系统是否能够长期稳定的运行。对于没有合作过的厂商，企业往往需要多方考证。\r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<br />', '2016-06-03 17:16:28', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('42', '服务器租用', 'FuWuQiZuYong', 'Help/ServerRent', '服务器租用', '服务器租用', '', '46', '<p>\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	整机租用是由数据中心提供服务器，只能有一个客户或者是网站通过租用方式使用它，并且由Internet数据<span style=\"line-height:1.5;\">中心替客户进行管理维护。您轻松享受从设备、环境到维护的一整套服务。针对一些客户（尤其是小型客户）对服务器的硬件没有研究，对服务器的选型没有经验，希望有人能提供一站式的IDC服务而应运产生的。</span>\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"line-height:1.5;\"><br />\r\n</span>\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"line-height:1.5;\">租用业务是托管业务的延伸，客户一般只需要提出最终目的，支付包括服务器购置款和托管费在内的一笔款项，而是由IDC供应商为客户进行策划实施，最终由客户掌握服务器的产权。租用业务在长期的运作过程中，已不只是单纯地为客户代购服务器，而更多的倾向租赁的性质。租用的费用中已经含盖了托管费，即IDC供应商已将硬件和托管捆绑成一个价格。这种业务模式有多期付款的、有不送服务器产权的多种组合。租用业务就是IDC供应商通过将硬件纳入到产品线里来，为客户提供的多样式的、把服务器选购和托管捆绑在一起的一种业务。</span>\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"line-height:1.5;\"><br />\r\n</span>\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<span style=\"line-height:1.5;\">服务器租用一般由具有实力的主机服务公司提供硬件，并负责基本软件的安装、配置和维护服务器上基本服务功能的正常运行。服务器租用一般又细分为整机租用和空间租用，前者用户独享整台服务器的资源，并自行开发运行的程序；后者为多个用户共享服务器资源，由每个用户自行上传文件内容，由服务商统一管理。</span>\r\n</p>\r\n<div class=\"anchor-list\" style=\"color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</div>\r\n<div class=\"para-title level-3\" style=\"margin:20px 0px 12px;font-size:18px;font-family:\'Microsoft YaHei\', SimHei, Verdana;color:#666666;background-color:#FFFFFF;\">\r\n	<h3 class=\"title-text\" style=\"font-size:18px;font-weight:400;\">\r\n		什么是服务器租用\r\n	</h3>\r\n</div>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	服务器租用是指用户无须自己购买服务器，只需根据自己业务的需要，提出对硬件配置的要求。主机服务器由IDC服务商配置。用户采取租用的方式，安装相应的系统软件及应用软件以实现用户独享专用高性能服务器，实现WEB+FTP+MAIL+VDNS全部网络服务功能，用户的初期投资减轻了，可以更专著于自己业务的研发。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	主机提供商提供的主机租用服务的主机类型主要是基于Intel CPU的服务器，用户可以自行安装操作系统及相应的应用软件，并完全自行管理 ，也可由公司代用户安装系统、应用软件，免费提供服务器监测服务。\r\n</p>\r\n<div class=\"anchor-list\" style=\"color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</div>\r\n<div class=\"para-title level-3\" style=\"margin:20px 0px 12px;font-size:18px;font-family:\'Microsoft YaHei\', SimHei, Verdana;color:#666666;background-color:#FFFFFF;\">\r\n	<h3 class=\"title-text\" style=\"font-size:18px;font-weight:400;\">\r\n		与主机托管的区别\r\n	</h3>\r\n</div>\r\n<div class=\"para\" style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	随着网络资源服务市场的成熟，现发展起来的共有四种基本的网站系统方式：虚拟主机空间，虚拟主机（包括VPS和云主机），整机租用以及服务器托管。\r\n</div>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	服务器托管是客户自身拥有一台服务器，并把它放置在Internet数据中心的机房，由客户自己进行维护，或者是由其它的签约人进行远程维护。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<div class=\"para\" style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	两者相比，整机租用在成本和服务方面的优势更为显著。它让您起步更轻松，不仅综合性价比更优良，且有很好的可扩展性和多样化的选择服务器品牌和操作系统。\r\n</div>\r\n<div class=\"anchor-list\" style=\"color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</div>\r\n<div class=\"para-title level-3\" style=\"margin:20px 0px 12px;font-size:18px;font-family:\'Microsoft YaHei\', SimHei, Verdana;color:#666666;background-color:#FFFFFF;\">\r\n	<h3 class=\"title-text\" style=\"font-size:18px;font-weight:400;\">\r\n		与虚拟主机的区别\r\n	</h3>\r\n</div>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	虚拟主机是使用特殊的软硬件技术，把一台运行在因特网上的服务器主机分成一台台“虚拟”的主机，每一台虚拟主机都具有独立的ip，具有完整的Internet服务器（WWW、FTP、Email等）功能，虚拟主机之间完全独立，并可由用户自行管理，在外界看来，每一台虚拟主机和一台独立的主机完全一样。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<div class=\"para\" style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	虚拟主机依托于一台（计算机）服务器，多个网站可以在这台服务器上共享资源（硬盘空间、处理器周期以及内存空间）。市面上一台独立服务器可以同时运行10台至100台的云主机或100台至1000台的VPS。\r\n</div>\r\n<div class=\"anchor-list\" style=\"color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</div>\r\n<div class=\"para-title level-3\" style=\"margin:20px 0px 12px;font-size:18px;font-family:\'Microsoft YaHei\', SimHei, Verdana;color:#666666;background-color:#FFFFFF;\">\r\n	<h3 class=\"title-text\" style=\"font-size:18px;font-weight:400;\">\r\n		与虚拟主机空间的区别\r\n	</h3>\r\n</div>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	虚拟主机空间是通过虚拟主机空间 ware Server虚拟化技术实现的虚拟服务器，虚拟化是一个抽象层，它将物理硬件与操作系统分开，从而提供更高的 IT 资源利用率和灵活性。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<div class=\"para\" style=\"font-size:14px;color:#666666;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;\">\r\n	与服务器租用与主机托管相比之下，虚拟主机空间是价格最低，但仅能满足小部分中小企业要求。例如，传统型企业网站，网站仅做公司介绍用，及网站浏览者不多类型的可以选择用虚拟主机空间。现今，企业对网络的应用也日趋广泛，如ERP、OA、EMAIL、web2.0、论坛、商城等应用系统大部分应用都选择服务器托管或租用的形式。\r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '2016-06-03 17:16:53', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('43', '400电话', '400DianHua', 'Help/Tel400', '400电话', '400电话', '', '46', '400电话', '2016-06-03 17:17:16', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('44', '关于我们', 'GuanYuWoMen', 'About/Index', '关于我们', '关于我们', '', '44', '<div class=\"general_con_c_ri_word\">\r\n	<span style=\"font-size:14px;color:#666666;\"><span>创驰云</span>网络是一家专业为中小企业提供电子商务策划、培训、应用于一体的大型联盟服\r\n务提供商，公司成立于2011年，几年来,公司已发展成为一家高速成长、富有活力且专业过硬的网络服务商。公司一致坚持以：做中国最诚信的网络服务提供\r\n商，只为企业提供最有效的网络营销解决方案为服务宗旨！让企业能有效利用互联网做好的网络营销，打造企业网络营销平台，提升企业形象、品牌，通过网络营销\r\n的方式开拓市场！</span> \r\n</div>\r\n<div class=\"general_con_c_ri_int\">\r\n	<span style=\"font-size:14px;color:#666666;\">以良心树立诚信人格，用思维创造崭新明天。</span> \r\n</div>', '2016-06-03 17:18:30', null, '4', '1');
INSERT INTO `lc_basic` VALUES ('45', '联系我们', 'LianXiWoMen', 'About/Contact', '联系我们', '联系我们', '', '44', '<p>\r\n	<span style=\"color:#666666;font-size:16px;\">公司地址：深圳市龙岗区龙翔大道9009号珠江国际中心18楼B1</span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-size:16px;\">传真号码：0755-33059400</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-size:16px;\">邮政编码：518110</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-size:16px;\">工作时间：周一至周五 8：30 - 18：00</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-size:16px;\">7*24小时电话：135 7081 6465</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-size:16px;\"><br />\r\n</span> \r\n</p>\r\n<p class=\"weibo\">\r\n	<img src=\"/Admin/template/Default/kindeditor/php/../attached/image/20160706/20160706172445_74245.png\" alt=\"\" /> <img src=\"/Admin/template/Default/kindeditor/php/../attached/image/20160706/20160706172445_55087.png\" width=\"60\" alt=\"\" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '2016-06-03 17:20:56', null, '1', '1');
INSERT INTO `lc_basic` VALUES ('46', '付款方式', 'FuKuanFangShi', 'About/Payment', '付款方式', '付款方式', '', '44', '付款方式', '2016-06-03 18:56:00', null, '2', '1');
INSERT INTO `lc_basic` VALUES ('47', '手机网站', 'ShouJiWangZhan', 'Mobile/Index', '手机网站', '手机网站', '手机网站', '48', '手机网站', '2016-06-04 09:11:36', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('48', '微信定制开发', 'WeiXinDingZhiKaiFa', 'Mobile/Weixin', '微信定制开发', '微信定制开发', '微信定制开发', '48', '微信定制开发', '2016-06-04 09:12:14', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('49', 'app应用', 'appYingYong', 'Mobile/Apps', 'app应用', 'app应用', 'app应用', '48', 'app应用', '2016-06-04 09:14:29', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('50', '360全景展示', '360QuanJingZhanShi', 'Product/Panorama', '360全景展示', '360全景展示', null, '49', '360全景展示', '2016-06-04 09:17:54', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('51', '系统开发', 'XiTongKaiFa', 'Product/SystemExploit', '系统开发', '系统开发', null, '49', '系统开发', '2016-06-04 09:20:58', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('52', 'G3云推广', 'G3YunTuiGuang', 'Extension/Index', 'G3云推广', 'G3云推广', 'G3云推广', '50', 'G3云推广', '2016-06-04 09:22:40', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('53', '赛富通', 'SaiFuTong', 'Extension/Safton', '赛富通', '赛富通', '赛富通', '50', '赛富通', '2016-06-04 09:23:23', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('54', '营销型网站', 'YingXiaoXingWangZhan', 'Marketing/Index', '营销型网站', '营销型网站', '营销型网站*SEO页面关键词', '51', '营销型网站', '2016-06-04 09:25:35', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('55', '创意策划', 'ChuangYiCeHua', 'Scheme/Index', '创意策划', '创意策划', null, '51', '创意策划', '2016-06-04 09:26:53', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('56', '网站建设', 'WangZhanJianShe', 'web/Index', '网站建设', '网站建设', null, '51', '网站建设', '2016-06-04 09:34:22', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('58', '团队介绍', 'TuanDuiJieShao', 'About/Team', '团队介绍', '团队介绍', '团队介绍', '44', '<span style=\"font-size:14px;color:#666666;\">深圳市<span>创驰云</span>网络技术开发有限公司拥有一支富有朝气的团队，我们的团队成员来自五湖四海，为了一个共同的梦想走到了一起。我们虽然拥有不同的性格、教育背景和工作经历，但都有一个共同的特点：热爱互联网、热爱手机游戏！</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">我们激情四射，但底蕴丰厚；我们活力无限，也同样耐得住寂寞；我们满怀理想，脚踏实地去实现；我们创想无限，我们拒绝平庸！</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">在这里，我们优势互补，不用担心自己想法的实施局限于自己的能力范围；在这里，我们的每个想法都会得到团队中肯的意见，最终趋于完美；在这里，我们在一起，没有曲高和寡，只有知己相伴；在这里，我们的工作受到应得的肯定，付出一定有回报！</span><br />\r\n<span style=\"font-size:14px;color:#999999;\"></span>', '2016-06-06 18:36:45', null, '3', '1');
INSERT INTO `lc_basic` VALUES ('59', 'FAQ', 'FAQ', 'Help/Faq', 'FAQ', 'FAQ', 'FAQ', '46', '<ul>\r\n	<li id=\"m1_1\" class=\"q\">\r\n		<span style=\"font-size:14px;line-height:2;\">Q: 什么是金牌邮局？</span>\r\n	</li>\r\n	<li>\r\n		<strong><span style=\"font-size:14px;line-height:2;\">A: </span></strong><span style=\"font-size:14px;line-height:2;\">金牌邮局是公司依托多年专业的互联网服务经验，基于对企业用户需求的深入分析与理解，从系统的安全性、稳定性、高性能、可扩展性以及良好的性能价格比等角度综合分析，为顾客提供的邮箱服务系统。</span>\r\n	</li>\r\n	<li id=\"m1_2\" class=\"q\">\r\n		<span style=\"font-size:14px;line-height:2;\">Q: 金牌邮局有哪些产品优势？</span>\r\n	</li>\r\n	<li>\r\n		<strong><span style=\"font-size:14px;line-height:2;\">A: </span></strong><span style=\"font-size:14px;line-height:2;\">金牌邮局主要产品优势包括：邮件管家、手机邮箱、无限空间、海外收发、智能反垃圾、实时病毒检测等。</span>\r\n	</li>\r\n	<li id=\"m1_3\" class=\"q\">\r\n		<span style=\"font-size:14px;line-height:2;\">Q: 金牌邮局的试用、购买和使用流程是怎样的？</span>\r\n	</li>\r\n	<li>\r\n		<strong><span style=\"font-size:14px;line-height:2;\">A: </span></strong><span style=\"font-size:14px;line-height:2;\">用户可以通过中资源金牌邮局官方网站上或各种联系方式同我们进行联\r\n系，或直接在网站填写相关信息，我们的工作人员会在1个工作日之内与您联系。在确认购买信息并履行相应购买流程后，金牌邮局将为用户开通相应的金牌邮局。\r\n同时，在正式购买之前，用户也可享受7天的免费试用时间。</span>\r\n	</li>\r\n	<li id=\"m1_4\" class=\"q\">\r\n		<span style=\"font-size:14px;line-height:2;\">Q: 金牌邮局有哪些产品？价格如何？我该如何选购？</span>\r\n	</li>\r\n	<li>\r\n		<strong><span style=\"font-size:14px;line-height:2;\">A: </span></strong><span style=\"font-size:14px;line-height:2;\">金牌邮局分为风尚邮、豪华邮和尊贵邮三组套餐，价格优惠，具体可参见金牌邮局官方网站首页的相关介绍。我们还可以根据您的实际情况为您推荐最适合您需要的购买使用方案。</span>\r\n	</li>\r\n	<li id=\"m1_5\" class=\"q\">\r\n		<span style=\"font-size:14px;line-height:2;\">Q: 金牌邮局如何定义每个邮箱用户空间的大小？</span>\r\n	</li>\r\n	<li>\r\n		<strong><span style=\"font-size:14px;line-height:2;\">A: </span></strong><span style=\"font-size:14px;line-height:2;\">金牌邮局在业界首推无限空间，每个邮箱的空间都是无限的，无需再对邮箱用户的空间大小再进行定义或者升级。</span>\r\n	</li>\r\n	<li id=\"m1_6\" class=\"q\">\r\n		<span style=\"font-size:14px;line-height:2;\">Q: 公司又新招了新员工，邮箱不够分配了怎么办？</span>\r\n	</li>\r\n	<li>\r\n		<strong><span style=\"font-size:14px;line-height:2;\">A: </span></strong><span style=\"font-size:14px;line-height:2;\">您可以随时联系我们的客服人员为您的企业邮局进行邮箱用户升级服务。</span>\r\n	</li>\r\n	<li id=\"m1_7\" class=\"q\">\r\n		<span style=\"font-size:14px;line-height:2;\">Q: 我的邮局到期了，如何续费？</span>\r\n	</li>\r\n	<li>\r\n		<strong><span style=\"font-size:14px;line-height:2;\">A: </span></strong><span style=\"font-size:14px;line-height:2;\">您可以随时联系我们的客服人员为您的企业邮局进行续费服务。</span>\r\n	</li>\r\n	<li id=\"m1_7\" class=\"q\">\r\n		<span style=\"font-size:14px;line-height:2;\">Q: 不是通过中资源申请的域名，是否能在中资源申请企业邮箱服务？</span>\r\n	</li>\r\n	<li>\r\n		<strong><span style=\"font-size:14px;line-height:2;\">A: </span></strong><span style=\"font-size:14px;line-height:2;\">可以。只要使用 DNS 进行域名解析，即可方便的使用金牌邮局的各项功能。</span>\r\n	</li>\r\n	<li id=\"m1_8\" class=\"q\">\r\n		<span style=\"font-size:14px;line-height:2;\">Q: 如何购买短信？价格如何？</span>\r\n	</li>\r\n	<li>\r\n		<strong><span style=\"font-size:14px;line-height:2;\">A: </span></strong><span style=\"font-size:14px;line-height:2;\">您可以随时联系我们的客户人员为您的企业购买短信，我司短信以1000条为梯度，价格为0.1元/条。</span>\r\n	</li>\r\n	<li id=\"m1_9\" class=\"q\">\r\n		<span style=\"font-size:14px;line-height:2;\">Q: 如何购买传真？价格如何？</span>\r\n	</li>\r\n</ul>\r\n<strong><span style=\"font-size:14px;line-height:2;\">A: </span></strong><span style=\"font-size:14px;line-height:2;\">您可以随时联系我们的客户人员为您的邮局开通购买传真，我司传真功能以100元为购买梯度，接收传真 免费，发送传真收费标准：</span>', '2016-06-30 15:10:39', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('60', '经典案例', 'JingDianAnLi', '', '经典案例-SEO页面标题', '经典案例-SEO页面描述', '经典案例-SEO页面关键词', '51', '', '2016-07-28 14:14:03', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('61', '新闻中心', 'XinWenZhongXin', '', '新闻中心-SEO页面标题', '新闻中心-SEO页面描述', '新闻中心-SEO页面关键词', '51', '', '2016-07-28 14:47:39', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('62', '招聘', 'ZhaoPin', '', '招聘', '招聘', '招聘', '51', '', '2016-07-28 16:26:01', null, '0', '1');
INSERT INTO `lc_basic` VALUES ('63', '手机站联系我们', 'ShouJiZhanLianXiWoMen', '', '手机站联系我们', '手机站联系我们', '手机站联系我们', '44', '<p>\r\n	<span style=\"color:#666666;font-size:16px;\">公司地址：深圳市龙岗区龙翔大道9009号珠江国际中心18楼B1</span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-size:16px;\"><span style=\"color:#666666;font-size:16px;\">座机号码：0755-33059400</span><br />\r\n</span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-size:16px;\">传真号码：0755-33059400</span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-size:16px;\">邮政编码：518110</span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-size:16px;\">工作时间：周一至周五 8：30 - 18：00</span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-size:16px;\">7*24小时电话：135 7081 6465</span>\r\n</p>', '2016-11-29 11:53:12', null, '0', '1');

-- ----------------------------
-- Table structure for `lc_basic_sort`
-- ----------------------------
DROP TABLE IF EXISTS `lc_basic_sort`;
CREATE TABLE `lc_basic_sort` (
  `basic_sort_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `basic_sort_name` varchar(150) NOT NULL,
  `basic_alias` varchar(150) NOT NULL,
  `basic_sort_pic` varchar(150) DEFAULT NULL,
  `basic_sort_content` text NOT NULL,
  `basic_sort_order` int(11) DEFAULT NULL,
  `basic_sort_date` datetime DEFAULT NULL,
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`basic_sort_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_basic_sort
-- ----------------------------
INSERT INTO `lc_basic_sort` VALUES ('44', '0', '关于我们', 'gywm', null, '关于我们', '0', null, '1');
INSERT INTO `lc_basic_sort` VALUES ('46', '0', '基础业务', 'JiChuYeWu', null, '基础业务', '0', null, '1');
INSERT INTO `lc_basic_sort` VALUES ('47', '0', '联系我们', 'LianXiWoMen', null, '联系我们', '0', null, '1');
INSERT INTO `lc_basic_sort` VALUES ('48', '0', '移动应用', 'YiDongYingYong', null, '移动应用', '0', null, '1');
INSERT INTO `lc_basic_sort` VALUES ('49', '0', '配套产品', 'PeiTaoChanPin', null, '配套产品', '0', null, '1');
INSERT INTO `lc_basic_sort` VALUES ('50', '0', '网络推广', 'WangLuoTuiGuang', null, '网络推广', '0', null, '1');
INSERT INTO `lc_basic_sort` VALUES ('51', '0', '其他单页', 'QiTaDanYe', null, '其他单页', '0', null, '1');

-- ----------------------------
-- Table structure for `lc_case`
-- ----------------------------
DROP TABLE IF EXISTS `lc_case`;
CREATE TABLE `lc_case` (
  `case_id` int(11) NOT NULL AUTO_INCREMENT,
  `case_one_id` int(11) DEFAULT NULL,
  `case_name` text NOT NULL,
  `alias` varchar(150) DEFAULT NULL,
  `case_seo_title` varchar(150) DEFAULT NULL,
  `case_seo_keyword` varchar(150) DEFAULT NULL,
  `case_seo_description` text,
  `case_order` int(11) DEFAULT '0',
  `case_content` text,
  `case_spic` varchar(150) DEFAULT NULL,
  `case_commend` int(11) DEFAULT '0',
  `case_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `case_des` text COMMENT '简要描述',
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`case_id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_case
-- ----------------------------
INSERT INTO `lc_case` VALUES ('113', '25', '东莞市平尚电子科技有限公司', 'DongGuanShiPingShangDianZiKeJiYouXianGongSi', '东莞市平尚电子科技有限公司', '东莞市平尚电子科技有限公司', '东莞市平尚电子科技有限公司', '0', '平尚电子科技有限公司成立于1999年，生产基地设在台湾，以香港为销售总部辐射国际业务市场，研究开发适应国际高科技电子工业所需求的贴片电容，高压片电容、钽电容、电解电容、贴片电阻...', 'web_up_file/case_spic/20160620091602468.jpg|web_up_file/case_spic/20160620091609585.jpg|web_up_file/case_spic/20160620091610442.jpg|web_up_file/case_s', '0', '2016-06-20 09:16:25', '东莞市平尚电子科技有限公司', '1');
INSERT INTO `lc_case` VALUES ('114', '25', '巧多多', 'QiaoDuoDuo', '巧多多', '巧多多 GPS定位童鞋', '巧多多', '0', '巧夺多品牌是广州菲艺乐旗下专门服务于儿童定位鞋产品的品牌。', 'web_up_file/case_spic/20160620093012665.jpg|web_up_file/case_spic/20160620093055478.jpg|web_up_file/case_spic/20160620093056192.jpg', '1', '2016-06-20 09:31:39', '巧多多', '1');
INSERT INTO `lc_case` VALUES ('115', '25', '广州市海珠区恒立制衣厂', 'GuangZhouShiHaiZhuQuHengLiZhiYiChang', '广州市海珠区恒立制衣厂', '广州市海珠区恒立制衣厂', '广州市海珠区恒立制衣厂', '0', '广州市海珠区恒立制衣厂位于广东省广州海珠区大塘，是一家外贸服装厂，10年来一直致力于欧美中高档服装，日韩女装及国内中高档服装生产。', 'web_up_file/case_spic/20160620093418242.jpg|web_up_file/case_spic/20160620093422510.jpg|web_up_file/case_spic/20160620093424393.jpg', '0', '2016-06-20 09:34:44', '广州市海珠区恒立制衣厂', '1');
INSERT INTO `lc_case` VALUES ('116', '26', '广州市风华服装有限公司', 'GuangZhouShiFengHuaFuZhuangYouXianGongSi', '广州市风华服装有限公司', '广州市风华服装有限公司', '广州市风华服装有限公司', '0', '广州市风华服装有限公司是一家集设计、生产、销售为一体的扎un也洋服制服的老牌服装企业。有自己的服装生产家的基地。自成立以来凭借自身的专业优势为国内外众多企、事业集团塑造了各种个性化、功能化的企业形象。', 'web_up_file/case_spic/20160620093729331.jpg|web_up_file/case_spic/20160620093733110.jpg|web_up_file/case_spic/20160620093735871.jpg', '1', '2016-06-20 09:38:01', '广州市风华服装有限公司', '1');
INSERT INTO `lc_case` VALUES ('112', '26', '广州市精格净水设备有限公司', 'GuangZhouShiJingGeJingShuiSheBeiYouXianGongSi', '广州市精格净水设备有限公司', '广州市精格净水设备有限公司', '广州市精格净水设备有限公司', '0', '广州市精格净水设备有限公司成立于2003年，佐罗在广州市花都白云国际机场旁，公司长期致力于研发制造大中型反渗透主机设备，家用超滤设备，不锈钢饮水台，中央净水设备等系列产品。', 'web_up_file/case_spic/20160620091033781.jpg|web_up_file/case_spic/20160620091045528.jpg|web_up_file/case_spic/20160620091050101.jpg', '0', '2016-06-20 09:11:31', '广州市精格净水设备有限公司', '1');
INSERT INTO `lc_case` VALUES ('110', '26', '深圳市风恒科技有限公司', 'ShenChouShiFengHengKeJiYouXianGongSi', '深圳市风恒科技有限公司', '深圳市风恒科技有限公司', '深圳市风恒科技有限公司', '0', '深圳市风恒科技有限公司专业生产各类无刷直流风扇，交流风机，CPU散热风扇，显卡散热风扇，电磁炉散热风扇，LED灯发光风扇电子冰箱风扇，加湿器风扇，鼓风机等等...', 'web_up_file/case_spic/20160620085953791.jpg|web_up_file/case_spic/20160620085958828.jpg|web_up_file/case_spic/20160620085959487.jpg', '1', '2016-06-20 09:00:21', '深圳市风恒科技有限公司', '1');
INSERT INTO `lc_case` VALUES ('111', '26', '深圳市高迪数码有限公司', 'ShenChouShiGaoDiShuMaYouXianGongSi', '深圳市高迪数码有限公司', '深圳市高迪数码有限公司', '深圳市高迪数码有限公司', '0', '<p>\r\n	深圳市高迪数码有限公司成立于1996年，是国际领先的消费性电子产品的生产商。\r\n</p>\r\n<p>\r\n	本集团主要从事高清数码摄像机、数码照相机、行车记录仪，平板电脑、智能手机等消费类电子产品的研发和生产。\r\n</p>', 'web_up_file/case_spic/20160620090436562.jpg|web_up_file/case_spic/20160620090607519.jpg|web_up_file/case_spic/20160620090608712.jpg', '1', '2016-06-20 09:06:29', '深圳市高迪数码有限公司', '1');
INSERT INTO `lc_case` VALUES ('108', '26', '深圳市光为光通信科技有限公司', 'ShenChouShiGuangWeiGuangTongXinKeJiYouXianGongSi', '深圳市光为光通信科技有限公司', '深圳市光为光通信科技有限公司', '深圳市光为光通信科技有限公司', '0', '深圳市光为光通信科技有限公司专业致力于光电产品的研发、生产和销售。公司聚集了大批业内资深人才，凭借对行业的高度专注和多年的丰富经验，我们能为客户提供全系列的光收发模块产品和解决方案。', 'web_up_file/case_spic/20160618164554882.jpg|web_up_file/case_spic/20160618164558436.jpg|web_up_file/case_spic/20160618164600281.jpg', '0', '2016-06-18 16:46:11', '深圳市光为光通信科技有限公司', '1');
INSERT INTO `lc_case` VALUES ('109', '26', '深圳市风之源电子有限公司', 'ShenChouShiFengZhiYuanDianZiYouXianGongSi', '深圳市风之源电子有限公司', '深圳市风之源电子有限公司', '深圳市风之源电子有限公司', '0', '<p>\r\n	<span style=\"line-height:1.5;\">深圳市风之源（The source of the wind)电子有限公司是一个具备高素质管理和人才，现代化管理模式的散热产品公司。</span>\r\n</p>', 'web_up_file/case_spic/20160618164920904.jpg|web_up_file/case_spic/20160618164923163.jpg|web_up_file/case_spic/20160618164926900.jpg', '0', '2016-06-18 16:49:35', '深圳市风之源电子有限公司', '1');
INSERT INTO `lc_case` VALUES ('105', '26', '晴朗天空电子科技有限公司', 'QingLangTianKongDianZiKeJiYouXianGongSi', '晴朗天空电子科技有限公司', '晴朗天空电子科技有限公司', '晴朗天空电子科技有限公司', '0', '', 'web_up_file/case_spic/20160618155405455.jpg|web_up_file/case_spic/20160618155409791.jpg|web_up_file/case_spic/20160618155411353.jpg', '0', '2016-06-18 15:50:02', '晴朗天空电子科技有限公司', '1');
INSERT INTO `lc_case` VALUES ('106', '26', '中山市驰牌电器有限公司', 'ZhongShanShiChiPaiDianQiYouXianGongSi', '中山市驰牌电器有限公司', '中山市驰牌电器有限公司', '中山市驰牌电器有限公司', '0', '', 'web_up_file/case_spic/20160618155935548.jpg|web_up_file/case_spic/20160618155939115.jpg|web_up_file/case_spic/20160618155942808.jpg', '0', '2016-06-18 15:59:53', '中山市驰牌电器有限公司', '1');
INSERT INTO `lc_case` VALUES ('107', '26', '深圳市金天意标识有限公司', 'ShenChouShiJinTianYiBiaoShiYouXianGongSi', '深圳市金天意标识有限公司', '深圳市金天意标识有限公司', '深圳市金天意标识有限公司', '0', '', 'web_up_file/case_spic/20160618164216422.jpg|web_up_file/case_spic/20160618164221162.jpg|web_up_file/case_spic/20160618164224393.jpg', '1', '2016-06-18 16:42:33', '深圳市金天意标识有限公司', '1');
INSERT INTO `lc_case` VALUES ('99', '26', '深圳市汇海威视科技有限公司', 'ShenZhengShiHuiHaiWeiShiKeJiYouXianGongSi', '深圳市汇海威视科技有限公司', '深圳市汇海威视科技有限公司', '深圳市汇海威视科技有限公司', '0', '', 'web_up_file/case_spic/20160618153150957.jpg|web_up_file/case_spic/20160618144821671.jpg|web_up_file/case_spic/20160618144825351.jpg', '0', '2016-06-18 14:49:03', '深圳市汇海威视科技有限公司', '1');
INSERT INTO `lc_case` VALUES ('98', '26', '深圳市亮键电子科技有限公司', 'ShenChouShiLiangJianDianZiKeJiYouXianGongSi', '深圳市亮键电子科技有限公司', '深圳市亮键电子科技有限公司', '深圳市亮键电子科技有限公司', '0', '', 'web_up_file/case_spic/20160618153222625.jpg|web_up_file/case_spic/20160618144443665.jpg|web_up_file/case_spic/20160618144451276.jpg', '1', '2016-06-18 14:45:06', '深圳市亮键电子科技有限公司', '1');
INSERT INTO `lc_case` VALUES ('100', '26', '福禄克中国销售中心', 'FuLuKeZhongGuoXiaoShouZhongXin', '福禄克中国销售中心', '福禄克中国销售中心', '福禄克中国销售中心', '0', '', 'web_up_file/case_spic/20160618150613248.jpg|web_up_file/case_spic/20160618150619549.jpg|web_up_file/case_spic/20160618150624835.jpg', '0', '2016-06-18 15:07:18', '福禄克中国销售中心', '1');
INSERT INTO `lc_case` VALUES ('101', '26', '东影导航品牌', 'DongYingDaoHangPinPai', '东影导航品牌', '东影导航品牌', '东影导航品牌', '0', '', 'web_up_file/case_spic/20160618151902212.jpg|web_up_file/case_spic/20160618151907715.jpg|web_up_file/case_spic/20160618151908926.jpg', '0', '2016-06-18 15:19:27', '东影导航品牌', '1');
INSERT INTO `lc_case` VALUES ('102', '26', '东莞市磁丰电子有限公司', 'DongGuanShiCiFengDianZiYouXianGongSi', '东莞市磁丰电子有限公司', '东莞市磁丰电子有限公司', '东莞市磁丰电子有限公司', '0', '', 'web_up_file/case_spic/20160618152439968.jpg|web_up_file/case_spic/20160618152455832.jpg|web_up_file/case_spic/20160618152458211.jpg', '1', '2016-06-18 15:25:16', '东莞市磁丰电子有限公司', '1');
INSERT INTO `lc_case` VALUES ('103', '25', '中山市卡门灯饰有限公司', 'ZhongShanShiKaMenDengShiYouXianGongSi', '中山市卡门灯饰有限公司', '中山市卡门灯饰有限公司', '中山市卡门灯饰有限公司', '0', '', 'web_up_file/case_spic/20160618153720822.jpg|web_up_file/case_spic/20160618153726478.jpg|web_up_file/case_spic/20160618153735506.jpg', '1', '2016-06-18 15:38:00', '中山市卡门灯饰有限公司', '1');
INSERT INTO `lc_case` VALUES ('104', '26', '深圳市一线电子有限公司', 'ShenChouShiYiXianDianZiYouXianGongSi', '深圳市一线电子有限公司', '深圳市一线电子有限公司', '深圳市一线电子有限公司', '0', '', 'web_up_file/case_spic/20160618155550986.jpg|web_up_file/case_spic/20160618155554881.jpg|web_up_file/case_spic/20160618155556866.jpg', '0', '2016-06-18 15:45:46', '深圳市一线电子有限公司', '1');
INSERT INTO `lc_case` VALUES ('117', '26', '广州傲域贸易有限公司', 'GuangZhouAoYuMaoYiYouXianGongSi', '广州傲域贸易有限公司', '广州傲域贸易有限公司', '广州傲域贸易有限公司', '0', '傲域挂带旗下的傲域饰品厂11年专注生产定制批发展会挂带，会议挂带，工作挂带，行李带，相机带，宠物带等织带类广告促销品。', 'web_up_file/case_spic/20160620094037150.jpg|web_up_file/case_spic/20160620094040297.jpg|web_up_file/case_spic/20160620094043604.jpg', '0', '2016-06-20 09:41:31', '广州傲域贸易有限公司', '1');
INSERT INTO `lc_case` VALUES ('118', '26', '中山市美棉纺织制衣有限公司', 'ZhongShanShiMeiMianFangZhiZhiYiYouXianGongSi', '中山市美棉纺织制衣有限公司', '中山市美棉纺织制衣有限公司', '中山市美棉纺织制衣有限公司', '0', '中山市美棉纺织制衣有限公司创立于2005年，是一家集内裤、袜品、保暖内衣的设计、生产为一体的服装企业。', 'web_up_file/case_spic/20160620094444736.jpg|web_up_file/case_spic/20160620094457879.jpg|web_up_file/case_spic/20160620094458830.jpg', '0', '2016-06-20 09:45:20', '中山市美棉纺织制衣有限公司', '1');
INSERT INTO `lc_case` VALUES ('119', '26', '卡诗贝尔内衣', 'KaShiBeiErNaYi', '卡诗贝尔内衣', '卡诗贝尔内衣', '卡诗贝尔内衣', '0', '', 'web_up_file/case_spic/20160620094639320.jpg|web_up_file/case_spic/20160620094644741.jpg|web_up_file/case_spic/20160620094649329.jpg', '0', '2016-06-20 09:48:49', '卡诗贝尔内衣', '1');
INSERT INTO `lc_case` VALUES ('120', '26', 'CHIHIRO BY S.K.', 'CHIHIROBYSK', 'CHIHIRO BY S.K.', 'CHIHIRO BY S.K.', 'CHIHIRO BY S.K.', '0', '', 'web_up_file/case_spic/20160620094929634.jpg|web_up_file/case_spic/20160620094938120.jpg|web_up_file/case_spic/20160620094939138.jpg', '0', '2016-06-20 09:51:36', 'CHIHIRO BY S.K.', '1');
INSERT INTO `lc_case` VALUES ('121', '26', '北京世纪京泰家具有限公司', 'BeiJingShiJiJingTaiJiaJuYouXianGongSi', '北京世纪京泰家具有限公司', '北京世纪京泰家具有限公司', '北京世纪京泰家具有限公司', '0', '北京世纪京泰家具有限公司是一家从事高品质、高效率、重管理及设计、制造、销售和服务于一体的现代化办公家具生产企业。', 'web_up_file/case_spic/20160620103010977.jpg|web_up_file/case_spic/20160620103014464.jpg|web_up_file/case_spic/20160620103017960.jpg', '0', '2016-06-20 10:30:40', '北京世纪京泰家具有限公司', '1');
INSERT INTO `lc_case` VALUES ('122', '26', '佛山市金刚无敌豪门有限公司', 'FuShanShiJinGangWuDiHaoMenYouXianGongSi', '佛山市金刚无敌豪门有限公司', '佛山市金刚无敌豪门有限公司', '佛山市金刚无敌豪门有限公司', '0', '金刚无敌不锈钢门厂创建于2001年，是一家以生产高档不锈钢防盗门、欧式仿古门、豪华原木门等为核心主导产品，集设计、生产制造、销售一体的民营企业。', 'web_up_file/case_spic/20160620103420739.jpg|web_up_file/case_spic/20160620103423109.jpg|web_up_file/case_spic/20160620103426921.jpg', '0', '2016-06-20 10:34:37', '佛山市金刚无敌豪门有限公司', '1');
INSERT INTO `lc_case` VALUES ('123', '26', '深圳市智合宠物家居有限公司', 'ShenChouShiZhiHeChongWuJiaJiYouXianGongSi', '深圳市智合宠物家居有限公司', '深圳市智合宠物家居有限公司', '深圳市智合宠物家居有限公司', '0', '<p>\r\n	“给宠物一个五星级的家！”\r\n</p>', 'web_up_file/case_spic/20160620105047682.jpg|web_up_file/case_spic/20160620105051699.jpg|web_up_file/case_spic/20160620105054802.jpg', '0', '2016-06-20 10:51:32', '深圳市智合宠物家居有限公司', '1');
INSERT INTO `lc_case` VALUES ('124', '25', '合众家具', 'HeZhongJiaJu', '合众家具', '合众家具', '合众家具', '0', '深圳市合众家具有限公司成立于２００３年，厂房面积占地一万多平方米，是一家专业从事葡萄<br />\r\n酒窖、实木楼梯、原木门、实木橱柜，高档实木整体配套家具生产批发厂家。研发、设计、制造<br />\r\n、销售、工程安装和售后服务为一体的专业公司，优质的材料和创新的设计，造就了高品位的精<br />\r\n品。楼梯以和谐，大众化设计在楼梯市场上备受青睐，纯正的欧式风格、古典风格、中式风格、<br />\r\n美式风格、现代简约等各性化风格给楼梯注入了全新的含义，再也不是简单的踏步工具，更可以<br />\r\n给家庭装饰带来了耳目一新的感觉。酒窖引用美国原装进口比士亚酒窖恒温恒湿空调，我们的<br />\r\n酒窖空调是全球最稳定的。引用国外先进的生产设备，严格按照标准化工艺流程生产，并吸取国<br />\r\n际先进的设计理念和制造工艺。在为客户提供经典酒窖产品的同时，不断的开发新技术、新工<br />\r\n艺，新款式产品', 'web_up_file/case_spic/20160620110615658.jpg|web_up_file/case_spic/20160620110620435.jpg', '0', '2016-06-20 11:03:39', '合众家具', '1');
INSERT INTO `lc_case` VALUES ('132', '25', '深圳海媚数码科技有限公司', 'ShenChouHaiMeiShuMaKeJiYouXianGongSi', '深圳海媚数码科技有限公司', '深圳海媚数码科技有限公司', '深圳海媚数码科技有限公司', '0', '福建海媚数码科技有限公司总部坐落于榕城福州，品牌创建于上世纪90年代末，是一家以研发信息化、网络化IT先进工具为基础，国内唯一跨专业跨行业新音响解决方案提供商。公司致力于科技创新、商业模式创新、资源整合末，是一家以研发信息化、网络化IT先进工具为基础，国内唯一跨专业跨行', 'web_up_file/case_spic/20160620112925332.jpg||web_up_file/case_spic/20160620112934416.jpg', '0', '2016-06-20 11:29:38', '深圳海媚数码科技有限公司', '1');
INSERT INTO `lc_case` VALUES ('133', '25', '广利五金（深圳）有限公司', 'GuangLiWuJinShenChouYouXianGongSi', '广利五金（深圳）有限公司', '广利五金（深圳）有限公司', '广利五金（深圳）有限公司', '0', '广利五金（深圳）有限公司成立于2005年，为香港广利（亚太）有限公司子公司, 公司于\r\n2010年初成为日资全资拥有企业。广利（亚太）五金有限公司成立于1960年，多年累积的高端\r\n精密金属材料加工贸易经验，可提供优质的产品，全方位服务与技术指导。专业经营进口特殊\r\n金属材料如日本NGK铍铜，DOWA OLIN 鈦铜，日本三菱材料（Mitsubishi Materials），东\r\n洋精箔(TOHAKU)，藤井（FUJII）特殊金属材料等等，国内有色金属包括黄铜，鏻铜，红铜，', 'web_up_file/case_spic/20160620113319879.jpg||web_up_file/case_spic/20160620113325224.jpg', '0', '2016-06-20 11:33:44', '广利五金（深圳）有限公司', '1');
INSERT INTO `lc_case` VALUES ('134', '25', '深圳欧立高建材实业有限公司', 'ShenChouOuLiGaoJianCaiShiYeYouXianGongSi', '深圳欧立高建材实业有限公司', '深圳欧立高建材实业有限公司', '深圳欧立高建材实业有限公司', '0', '深圳欧立高建材实业有限公司是一家采用德国先进技术为基础，15年专注于墙面施工工程，公司专业\r\n生产YN聚合物防水抗裂涂料，强力瓷砖胶，保温砂浆等各种绿色环保新型墙体材料。\r\n公司秉承靠科技创新，做健康环保墙面的品质坚持，采用高科技配方，经改良开发新型墙体材料，取\r\n得了重大突破，是广东省建材行业的健康环保墙体材料的新型企业。公司专业生产的健康绿色环保产\r\n品“YN聚合物水泥防水涂料”率先执行国家环保标准，施工方便快捷，强粘通用柔韧型，高品\r\n质产品和高质量服务是我们的最终目...', 'web_up_file/case_spic/20160620113858983.jpg|web_up_file/case_spic/20160620113904346.jpg', '0', '2016-06-20 11:39:19', '深圳欧立高建材实业有限公司', '1');
INSERT INTO `lc_case` VALUES ('135', '25', '深圳市远成天安科技发展有限', 'ShenChouShiYuanChengTianAnKeJiFaZhanYouXian', '深圳市远成天安科技发展有限', '深圳市远成天安科技发展有限', '深圳市远成天安科技发展有限', '0', '深圳市远成天安科技发展有限公司成立于2011年，是国内创意消费电子产品、智能家居知名企业。我司致力于创意消费电子产品的研发、生产与销售到服务的完善体系，全球OEM高端合作的高科技实体企业。  公司秉承创意无处不在，坚持以质量为生命、以客户为中心。\r\n        公司拥有资深的研发团队和业内最先进、最齐全的生产和检测设备，广泛承接海内外客户OEM合作项目，成为全球众多知名品牌的OEM长期合作伙伴。', 'web_up_file/case_spic/20160620114549985.jpg|web_up_file/case_spic/20160620114555721.jpg', '0', '2016-06-20 11:46:00', '深圳市远成天安科技发展有限', '1');
INSERT INTO `lc_case` VALUES ('136', '25', '礼之彩伞业有限公司', 'LiZhiCaiSanYeYouXianGongSi', '礼之彩伞业有限公司', '礼之彩伞业有限公司', '礼之彩伞业有限公司', '0', '礼之彩伞业有限公司成立于美丽的繁华之都—深圳，公司拥有厂房面积1300平方米，职员上百余人。本公司是一家集产品研发、生产、销售、服务于一体的专业化伞具生产企业，目前产品有流行洋伞，晴雨伞、高尔夫伞、儿童卡通伞、婴儿车伞、礼品伞、广告伞，雨衣，帐篷，无纺布袋，围裙和其他特殊用途伞等等。年产值达500万支雨伞，围裙800万条，环保购物袋1200万个的生产能力。\r\n       为国内外多家知名品牌提供ODM服务，专业为香水化妆品、服装、广告、电器等公司，大', 'web_up_file/case_spic/20160620114915522.jpg|web_up_file/case_spic/20160620114920663.jpg|web_up_file/case_spic/20160620115046888.jpg', '0', '2016-06-20 11:49:24', '礼之彩伞业有限公司', '1');
INSERT INTO `lc_case` VALUES ('137', '25', '深圳市森之源木业有限公司', 'ShenChouShiSenZhiYuanMuYeYouXianGongSi', '深圳市森之源木业有限公司', '深圳市森之源木业有限公司', '深圳市森之源木业有限公司', '0', '深圳市森之源木业有限公司持有品牌，为全面推广金钢铂林品牌。', 'web_up_file/case_spic/20160620115055889.jpg|web_up_file/case_spic/20160620115100506.jpg|web_up_file/case_spic/20160620115101171.jpg', '0', '2016-06-20 11:55:22', '深圳市森之源木业有限公司', '1');
INSERT INTO `lc_case` VALUES ('138', '25', '广州鼎胜建筑基础工程公司', 'GuangZhouDingShengJianZhuJiChuGongChengGongSi', '广州鼎胜建筑基础工程公司', '广州鼎胜建筑基础工程公司', '广州鼎胜建筑基础工程公司', '0', '广州鼎胜建筑基础工程公司持有地基与基础工程”专业承包叁级资质，以基坑工程、边坡工程、桩基工程为主营业务，集基坑支护，边坡支护、地基处理、山体护坡、各种预制柱、', 'web_up_file/case_spic/20160620140733484.jpg|web_up_file/case_spic/20160620140737447.jpg|web_up_file/case_spic/20160620140739812.jpg', '0', '2016-06-20 14:07:55', '广州鼎胜建筑基础工程公司', '1');
INSERT INTO `lc_case` VALUES ('139', '25', '快乐粉刷匠', 'KuaiLeFenShuaJiang', '快乐粉刷匠', '快乐粉刷匠', '快乐粉刷匠', '0', '快乐粉刷匠始创于2002年5月，前身为嘉力涂料厂，于2007年2月改造为快乐建材有限公司，本公司是致力于研制新型环保，性能优越，适应市场需求的绿色环保干粉建材的制造企业。', 'web_up_file/case_spic/20160620170823704.jpg|web_up_file/case_spic/20160620170827770.jpg|web_up_file/case_spic/20160620170829687.jpg', '0', '2016-06-20 17:08:42', '快乐粉刷匠', '1');
INSERT INTO `lc_case` VALUES ('140', '25', '深圳市华友家具有限公司', 'ShenChouShiHuaYouJiaJuYouXianGongSi', '深圳市华友家具有限公司', '深圳市华友家具有限公司', '深圳市华友家具有限公司', '0', '深圳市华友家具有限公司是一家集生产、销售为一体的综合性现代化家居企业，专注水疗、沐足、沐足沙发市场十三年。', 'web_up_file/case_spic/20160620173040937.jpg|web_up_file/case_spic/20160620173044292.jpg|web_up_file/case_spic/20160620173046826.jpg', '0', '2016-06-20 17:31:01', '深圳市华友家具有限公司', '1');
INSERT INTO `lc_case` VALUES ('146', '27', '世森同城商城系统', 'ShiSenTongChengShangChengXiTong', '世森同城商城系统', '世森同城商城系统', '世森同城商城系统', '0', '世森同城商城系统', 'web_up_file/case_spic/20160624154141107.jpg|web_up_file/case_spic/20160624154126141.jpg|web_up_file/case_spic/20160624154131910.jpg|web_up_file/case_s', '0', '2016-06-24 15:41:44', '世森同城商城系统', '1');
INSERT INTO `lc_case` VALUES ('144', '27', '邻州淘商城系统', 'LinZhouTaoShangChengXiTong', '邻州淘商城系统', '邻州淘商城系统', '邻州淘商城系统', '0', '邻州淘商城系统', 'web_up_file/case_spic/20160624154007737.jpg|web_up_file/case_spic/20160624154000912.jpg|web_up_file/case_spic/20160624154002980.jpg', '0', '2016-06-24 15:40:08', '邻州淘商城系统', '1');
INSERT INTO `lc_case` VALUES ('145', '27', '灯界嘿客商城系统', 'DengJieHeiKeShangChengXiTong', '灯界嘿客商城系统', '灯界嘿客商城系统', '灯界嘿客商城系统', '0', '灯界嘿客商城系统', 'web_up_file/case_spic/20160624154049637.jpg|web_up_file/case_spic/20160624154042136.jpg|web_up_file/case_spic/20160624154044819.jpg|web_up_file/case_s', '0', '2016-06-24 15:40:51', '灯界嘿客商城系统', '1');
INSERT INTO `lc_case` VALUES ('147', '27', '嘿动活动发布展示交易平台', 'HeiDongHuoDongFaBuZhanShiJiaoYiPingTai', '嘿动活动发布展示交易平台', '嘿动活动发布展示交易平台', '嘿动活动发布展示交易平台', '0', '嘿动活动发布展示交易平台', 'web_up_file/case_spic/20160624154559916.jpg|web_up_file/case_spic/20160624154548250.jpg|web_up_file/case_spic/20160624154552273.jpg|web_up_file/case_s', '0', '2016-06-24 15:46:01', '嘿动活动发布展示交易平台', '1');
INSERT INTO `lc_case` VALUES ('148', '27', '爱婴岛商城系统', 'AiYingDaoShangChengXiTong', '爱婴岛商城系统', '爱婴岛商城系统', '爱婴岛商城系统', '0', '爱婴岛商城系统', 'web_up_file/case_spic/20160624154749543.jpg|web_up_file/case_spic/20160624154737755.png|web_up_file/case_spic/20160624154741974.png|web_up_file/case_s', '0', '2016-06-24 15:47:51', '爱婴岛商城系统', '1');
INSERT INTO `lc_case` VALUES ('149', '27', '天天便民商城', 'TianTianBianMinShangCheng', '天天便民商城', '天天便民商城', '天天便民商城', '0', '天天便民商城', 'web_up_file/case_spic/20160624154831486.jpg|web_up_file/case_spic/20160624154820612.jpg|web_up_file/case_spic/20160624154824927.jpg|web_up_file/case_s', '0', '2016-06-24 15:48:33', '天天便民商城', '1');

-- ----------------------------
-- Table structure for `lc_case_sort`
-- ----------------------------
DROP TABLE IF EXISTS `lc_case_sort`;
CREATE TABLE `lc_case_sort` (
  `case_sort_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `alias` varchar(150) DEFAULT NULL,
  `case_seo_title` text,
  `case_seo_description` text,
  `case_seo_keyword` text,
  `case_sort_name` varchar(150) NOT NULL,
  `case_sort_order` int(11) DEFAULT NULL,
  `case_sort_content` text,
  `case_sort_spic` varchar(150) DEFAULT NULL,
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`case_sort_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_case_sort
-- ----------------------------
INSERT INTO `lc_case_sort` VALUES ('26', '0', 'YingXiaoXingWangZhan', '营销型网站', '营销型网站', '营销型网站', '营销型网站', '0', '', '', '1');
INSERT INTO `lc_case_sort` VALUES ('25', '0', 'QiYeGuanWang', '企业官网', '企业官网', '企业官网', '企业官网', '0', '', '', '1');
INSERT INTO `lc_case_sort` VALUES ('27', '0', 'ShangChengXiTong', '商城系统', '商城系统', '商城系统', '商城系统', '0', '', '', '1');
INSERT INTO `lc_case_sort` VALUES ('28', '0', 'ShouJiWangZhan', '手机网站', '手机网站', '手机网站', '手机网站', '0', '', '', '1');
INSERT INTO `lc_case_sort` VALUES ('29', '0', 'APPKaiFa', 'APP开发', 'APP开发', 'APP开发', 'APP开发', '0', '', '', '1');
INSERT INTO `lc_case_sort` VALUES ('30', '0', 'WeiXinPingTai', '微信平台', '微信平台', '微信平台', '微信平台', '0', '', '', '1');
INSERT INTO `lc_case_sort` VALUES ('31', '0', 'XiTongDingZhi', '系统定制', '系统定制', '系统定制', '系统定制', '0', '', '', '1');

-- ----------------------------
-- Table structure for `lc_extend`
-- ----------------------------
DROP TABLE IF EXISTS `lc_extend`;
CREATE TABLE `lc_extend` (
  `name` varchar(150) DEFAULT NULL,
  `value` text,
  `language` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='扩展表';

-- ----------------------------
-- Records of lc_extend
-- ----------------------------
INSERT INTO `lc_extend` VALUES ('product', '价格,折扣,类型,区域', '1');
INSERT INTO `lc_extend` VALUES ('listing', '', '1');

-- ----------------------------
-- Table structure for `lc_image_setting`
-- ----------------------------
DROP TABLE IF EXISTS `lc_image_setting`;
CREATE TABLE `lc_image_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `w` float NOT NULL DEFAULT '0',
  `h` float NOT NULL DEFAULT '0',
  `watermark` varchar(150) DEFAULT NULL,
  `option` int(11) DEFAULT '5' COMMENT '水印位置',
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=gbk COMMENT='图片设置';

-- ----------------------------
-- Records of lc_image_setting
-- ----------------------------
INSERT INTO `lc_image_setting` VALUES ('13', '产品列表缩略图', '450', '0', 'web_up_file/watermark_spic/20160512134820518.png', '1', '1');

-- ----------------------------
-- Table structure for `lc_language`
-- ----------------------------
DROP TABLE IF EXISTS `lc_language`;
CREATE TABLE `lc_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '语言类型',
  `language` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `css_icon` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_language
-- ----------------------------
INSERT INTO `lc_language` VALUES ('1', '中文', '1', '');
INSERT INTO `lc_language` VALUES ('6', '英文', '0', '');

-- ----------------------------
-- Table structure for `lc_member`
-- ----------------------------
DROP TABLE IF EXISTS `lc_member`;
CREATE TABLE `lc_member` (
  `member_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '会员ID',
  `member_name` varchar(32) NOT NULL DEFAULT '' COMMENT '客户姓名',
  `member_sex` tinyint(1) NOT NULL,
  `member_mobile` varchar(16) NOT NULL DEFAULT '',
  `member_tel` varchar(16) NOT NULL DEFAULT '',
  `member_fax` varchar(16) NOT NULL DEFAULT '',
  `member_id_card_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '证件类型：1.身份证；2.通行证；3.组织机构；4.驾驶证；5.营业执照；',
  `member_id_card` varchar(64) NOT NULL DEFAULT '',
  `member_addr` varchar(128) NOT NULL DEFAULT '',
  `member_email` varchar(64) NOT NULL DEFAULT '',
  `member_qq` varchar(16) NOT NULL DEFAULT '',
  `member_bank` varchar(32) NOT NULL DEFAULT '',
  `member_bank_account` varchar(32) NOT NULL DEFAULT '',
  `member_parent_id` mediumint(8) NOT NULL DEFAULT '0',
  `member_parent` varchar(64) NOT NULL DEFAULT '',
  `member_middleman` varchar(16) NOT NULL DEFAULT '',
  `member_card_front` varchar(128) NOT NULL DEFAULT '',
  `member_card_back` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lc_member
-- ----------------------------
INSERT INTO `lc_member` VALUES ('1', 'asdf', '1', '13265654651', '', '', '1', '411254569563212360', 'asdf', 'sadf@sa.com', '', '302', '12312434265531', '0', '', '', '', '');

-- ----------------------------
-- Table structure for `lc_members`
-- ----------------------------
DROP TABLE IF EXISTS `lc_members`;
CREATE TABLE `lc_members` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `LoginAccount` varchar(50) NOT NULL COMMENT '登录账号',
  `LoginPassword` varchar(50) NOT NULL COMMENT '登录密码',
  `Name` varchar(50) NOT NULL COMMENT '名称',
  `Address` varchar(100) NOT NULL COMMENT '地址',
  `ContactUser` varchar(20) DEFAULT NULL COMMENT '联系人',
  `Dept` varchar(50) DEFAULT NULL COMMENT '所属部门',
  `Tel` varchar(20) DEFAULT NULL COMMENT '固定电话',
  `Mobile` varchar(11) DEFAULT NULL COMMENT '手机号',
  `Fax` varchar(20) DEFAULT NULL COMMENT '传真号',
  `Email` varchar(50) DEFAULT NULL COMMENT '电子邮件',
  `WebUrl` varchar(50) DEFAULT NULL COMMENT '企业网站',
  `WebTestUrl` varchar(50) DEFAULT NULL COMMENT '测试地址',
  `Status` int(11) DEFAULT NULL COMMENT '状态',
  `ConsumerType` varchar(50) NOT NULL COMMENT '客户类型',
  `Remarks` varchar(2000) DEFAULT NULL COMMENT '备注',
  `Creator` varchar(50) NOT NULL COMMENT '创建人',
  `CreateDate` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='会员信息表';

-- ----------------------------
-- Records of lc_members
-- ----------------------------
INSERT INTO `lc_members` VALUES ('5', 'admin', 'admin', '灵创官网测试', '深圳南联铭泰商务中心', '石榴', '技术部', '0755-22222', '13005409632', '0755-245454', 'szlcnet@163.com', 'http://www.baidu.com', 'http://test.demo.com', '0', '1', '备注', '梁勇', '2016-06-16 00:00:00');

-- ----------------------------
-- Table structure for `lc_message`
-- ----------------------------
DROP TABLE IF EXISTS `lc_message`;
CREATE TABLE `lc_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `content` text NOT NULL,
  `is_ready` int(11) NOT NULL DEFAULT '0',
  `subject` text,
  `email` varchar(150) DEFAULT NULL,
  `tel` varchar(32) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `company` varchar(150) DEFAULT NULL,
  `reply` text,
  `qq` int(11) DEFAULT NULL,
  `phone` varchar(120) DEFAULT NULL,
  `website` varchar(120) DEFAULT NULL,
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_message
-- ----------------------------
INSERT INTO `lc_message` VALUES ('28', null, '', '1', '营销型网站专栏', 'liangyong@sshl.cn', '15817479402', '张先生', null, '深圳市灵创网络技术有限公司', null, '530886845', '0755-22225698', 'http://szlcnet.com', '1');
INSERT INTO `lc_message` VALUES ('25', null, '', '0', '赛富通专栏!', 'liangyong@sshl.cn', '15817479402', '张先生', null, '深圳市灵创网络技术有限公司', null, '0', '0755-22225698', '', '1');
INSERT INTO `lc_message` VALUES ('26', null, '', '0', '赛富通专栏!', 'liangyong@sshl.cn', '15817479402', '张先生', null, '深圳市灵创网络技术有限公司', null, '1', '0755-22225698', 'http://szlcnet.com', '1');
INSERT INTO `lc_message` VALUES ('27', null, '', '0', '赛富通专栏!', 'liangyong@sshl.cn', '15817479402', '张先生', null, '深圳市灵创网络技术有限公司', null, '1', '0755-22225698', 'http://szlcnet.com', '1');
INSERT INTO `lc_message` VALUES ('29', null, '', '1', '营销型网站专栏', 'liangy333ong@sshl.cn', '15817479402', '小马哥', null, '测试公司', null, '530886845', '0755-22225694', 'http://szlcnet.com', '1');
INSERT INTO `lc_message` VALUES ('30', null, '', '1', '营销型网站', 'shiliu@szlcnet.com', '15817460855', '石小姐', null, '深圳市灵创网络技术有限公司', null, '317361652', '0755-33059400', 'www.szlcnet.com', '1');
INSERT INTO `lc_message` VALUES ('31', null, '', '1', '赛富通', 'shiliu@szlcnet.com', '15817460855', '石小姐', null, 'asdfasdf', null, '0', '0755-33059400', '', '1');

-- ----------------------------
-- Table structure for `lc_news`
-- ----------------------------
DROP TABLE IF EXISTS `lc_news`;
CREATE TABLE `lc_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `news_title` varchar(150) DEFAULT NULL,
  `news_seo_title` varchar(150) DEFAULT NULL,
  `news_seo_description` text,
  `news_seo_keyword` varchar(150) DEFAULT NULL,
  `news_content` text,
  `news_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `news_from` varchar(150) DEFAULT NULL,
  `news_spic` varchar(150) DEFAULT NULL,
  `news_commend` int(11) DEFAULT NULL,
  `news_top` int(11) DEFAULT NULL,
  `news_click` int(11) DEFAULT NULL,
  `news_order` int(11) DEFAULT NULL,
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_news
-- ----------------------------
INSERT INTO `lc_news` VALUES ('61', '2', '李彦宏首次公开表态：要重新审视公司所有产品的商业模式', '李彦宏首次公开表态：要重新审视公司所有产品的商业模式', '李彦宏首次公开表态：要重新审视公司所有产品的商业模式', '李彦宏首次公开表态：要重新审视公司所有产品的商业模式', '继2016年5月9日网信办公布了对百度的调查结果后，2016年5月10日早间李彦宏发布内部信，终于对魏则西事件表态。在这封有些迟来的内部信中，李彦宏强调了用户体验至上，称要重新审视公司所有产品的商业模式。并提出了三项整改措施：<br />\r\n<br />\r\n首先，是重新审视公司所有产品的商业模式，是否因变现而影响用户体验，对于不尊重用户体验的行为要彻底整改。<br />\r\n<br />\r\n其次，要完善我们的用户反馈机制，倾听用户的声音。<br />\r\n<br />\r\n最后，要继续完善现有的先行赔付等网民权益保障机制，增设10亿元保障基金，充分保障网民权益。<br />\r\n<br />\r\n如果没记错的话，上次百度贴吧风波后，李彦宏并未做出像这次这样的“百度需要整改”这么明确的表态，而且，他几乎是首次明确提出“重新审视公司所有产品的\r\n商业模式”——当然，百度的商业模式到底会发生什么彻底变化，他并没有、也不可能在这么一个公开信里提出来。百度的进化，需要时间。<br />\r\n<br />\r\n以下是内部信全文：<br />\r\n各位百度同学：<br />\r\n一月份的贴吧事件、四月份的魏则西事件引起了网民对百度的广泛批评和质疑。其愤怒之情，超过了以往百度经历的任何危机。这些天，每当夜深人静的时候，我就会想：为什么很多每天都在使用百度的用户不再热爱我们？为什么我们不再为自己的产品感到骄傲了？问题到底出在哪里？<br />\r\n<br />\r\n还记得创业初期的百度，那时我们主要在跟谷歌等竞争对手抢用户，但我更怕的是它去高价挖我们的人才，谷歌完全有实力给百度的工程师们开出三倍以上的工资待\r\n遇来。后来他们进来了，却几乎没有挖动我们什么人。细想起来，那个时候大家都憋着一股气，要做最好的中文搜索引擎。我们每个人每天都为自己做的事情感到特\r\n别自豪。<br />\r\n<br />\r\n那时候我们的招聘海报经常用一个名人的头像，在下面配一句简练的文字。比如用鲁迅的头像，下面配的文字就是：“是翻译，还是用创作寻找中国意义？”用钱学\r\n森，文字就是：“是在海外住别墅还是回中国做导弹之父？”用毛泽东，文字就是“是投降，还是比敌人更强”……一直到今天，每当我把这些词句说给后来人听\r\n时，都会几近哽咽。在这些梦想的感召下，我们去倾听用户的声音，去了解用户的需求，在实力相差极为悬殊的情况下，一点点地赢得了中国市场。是我们坚守用户\r\n至上的价值观为我们赢得了用户，也正是这些用户在贴吧里盖楼、在知道里回答问题、在百科里编写词条，他们创造的内容、贡献的信息，让我们区别于竞争对手，\r\n成就了百度的辉煌。<br />\r\n<br />\r\n然而今天呢？我更多地会听到不同部门为了KPI分配而争吵不休，会看到一些高级工程师在平衡商业利益和用户体验之间纠结甚至妥协。用户也因此开始质疑我们\r\n商业推广的公平性和客观性，吐槽我们产品的安装策略，反对我们贴吧、百科等产品的过度商业化……因为从管理层到员工对短期KPI的追逐，我们的价值观被挤\r\n压变形了，业绩增长凌驾于用户体验，简单经营替代了简单可依赖，我们与用户渐行渐远，我们与创业初期坚守的使命和价值观渐行渐远。如果失去了用户的支持，\r\n失去了对价值观的坚守，百度离破产就真的只有30天！<br />\r\n<br />\r\n今天，百度能影响的人比以往任何时候都更多，信息的流动比以往任何时候都更快，市场的环境比以往任何时候都更复杂，好的，坏的，美的，丑的，真的，假的，\r\n在网上都有。每天有无数的人会根据在百度搜到的结果去做决策，这也对我们的产品理念，行为准则提出了更高的要求。我们要与时俱进，为用户负责！<br />\r\n<br />\r\n网民希望我们做的事儿，我们要顺应民心和民意，积极承担社会责任。哪些钱可以赚，怎么赚，关键时刻高管和员工如何选择，这些问题时刻考验着我们的商业道德和行为规范。我们在接下来的时间必须集中力量做好几件事：<br />\r\n<br />\r\n首先，是重新审视公司所有产品的商业模式，是否因变现而影响用户体验，对于不尊重用户体验的行为要彻底整改。我们要建立起用户体验审核的一票否决制度，由专门的部门负责监督，违背用户体验原则的做法，一票否决，任何人都不许干涉。<br />\r\n<br />\r\n其次，要完善我们的用户反馈机制，倾听用户的声音，让用户的意见能快速反映到产品的设计和更新中，让用户对产品和服务的评价成为搜索排名的关键因素。<br />\r\n<br />\r\n最后，要继续完善现有的先行赔付等网民权益保障机制，增设10亿元保障基金，充分保障网民权益。<br />\r\n<br />\r\n这些个措施，也许对公司的收入有负面影响，但我们有壮士断腕的决心，因为我相信，这是正确的做法！是长远的做法！是顺天应时的做法！<br />\r\n<br />\r\n十年前，我们以搜索为基础，创立了贴吧、知道、百科等新产品；今天，我希望我们以人工智能为基础，把语音搜索、自动翻译、无人车做成影响人们日常生活的新\r\n产品。百度要跑完从大企业到伟大企业的长距离，要有拓展业务的“体力”，更要有坚守简单可依赖文化的“意志”。让我们坚守用户至上的价值观，为实现让人们\r\n平等便捷获取信息找到所求的使命努力拼搏，让我们的后人为我们所做的事情感到骄傲和自豪！ ? ?', '2016-06-04 14:13:03', null, '', '1', null, null, '0', '1');
INSERT INTO `lc_news` VALUES ('60', '9', '富绮（聚象生态木）环保科技营销型网站建设项目上线', '富绮（聚象生态木）环保科技营销型网站建设项目上线', '深圳网站建设国人伟业为富绮网站在设计当中我们给其产品赋予吸引视觉的效果，使其整个画面的中心，集中在展示上面，我们重视其产品的展示，最终呈现出来的效果就是，简单，大方。', '', '<strong>客户背景：</strong><br />\r\nRFL品牌创立于2007年，专业从事高精密螺纹切削工具与内螺纹产品的研发、制造与推广，我们采用德国科学、严谨、精密的螺纹研磨制造技术，以德国棒材\r\n为原料，引进德国精密螺纹研磨机器生产丝锥，精密的设备、成熟的技术、源自德国的技术、丰富的丝锥制造经验和多年的人才培养，沉淀了大量的技术人才，成就\r\n了我们丝锥高效、稳定、耐磨的卓越品质。<br />\r\n<br />\r\n<strong>产品定位：</strong>螺纹切削工具的工匠品牌<br />\r\n<br />\r\n<strong>服务目标：</strong><br />\r\n1、建设品牌营销型网站，提升公司及产品在网络上的认知度和实力<br />\r\n2、提升网站转化率，实现网上询盘、网上接单、网上赚钱<br />\r\n3、提升网站的自然优化排名，节省网络推广费用，让叠峰科技网站更好的在网络上进行推广<br />\r\n<br />\r\n<strong>国人伟业为叠峰科技项目实施团队配备有：</strong><br />\r\n项目组长、文案策划、高级界面设计师、前端工程师、PHP程序员、网站编辑、SEO专员、技术支持专员 <br />\r\n<br />\r\n<strong>国人伟业为客户提供：</strong><br />\r\n<strong>一、营销型网站策划和网站风格设计：</strong><br />\r\n<strong>1、网站VI风格诠释</strong><br />\r\n<p>\r\n	深圳网站建设国人伟业为叠峰科技网站设计的采用简洁的色块布局，色调统一，深黑色和红色体现稳重的视觉效果。页面重点突出品牌价值和追求细节品质，在页面细节处理上精益求精。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<img src=\"http://www.grwy.net/Uploads/201605/572c553ebebc2.png\" alt=\"\" /> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<br />\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<strong>2、网站banner图传达的寓意</strong><br />\r\n1）顶尖技术，精益求精，让客户选择产品有保障\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<img src=\"http://www.grwy.net/Uploads/201605/572c5562b71b0.png\" alt=\"\" /> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	2）突出产品的重要性，与我们生活息息相关\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<img src=\"http://www.grwy.net/Uploads/201605/572c557a7a120.png\" alt=\"\" /> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	3）诚招代理，选择叠峰科技做代理有保证\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<img src=\"http://www.grwy.net/Uploads/201605/572c55957270e.png\" alt=\"\" /> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<strong>3、首页策划与设计亮点展示</strong><br />\r\n1）简洁明朗的优势与服务支持展示，让想做代理的客户有信心，并且应用领域广泛\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"http://www.grwy.net/Uploads/201605/572c55c640d99.png\" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"http://www.grwy.net/Uploads/201605/572c55c6a7d8c.png\" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"http://www.grwy.net/Uploads/201605/572c55c71312d.png\" /> \r\n</p>\r\n<p>\r\n	2）公信力打造展示：让客户说话更具有说服力，展示公司实力，让客户看到公司的实力\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"http://www.grwy.net/Uploads/201605/572c55f016e36.png\" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"http://www.grwy.net/Uploads/201605/572c55f0d9701.png\" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<strong>4、设计理念</strong><br />\r\n网站整体在栏目分版上也进行了合理布局，让用户更加清晰和快捷操作。网站融入了各种鼠标特效，加强了用户的视觉体验。网站在设计风格上沉稳大气，凸显机械\r\n行业网站的特点；在网站页面排版布局上紧紧围绕公司的产品展开；用户打开网站第一感觉很容易识别出公司从事的行业，具有营销型网站的特点。<br />\r\n<br />\r\n<strong>二、营销型网站前端制作：</strong><br />\r\n1、采用XHTML+CSS的布局方式，让页面更加轻量，也更利于搜索引擎方面的表现<br />\r\n2、合理使用特效，简洁、层次分明的布局格式让网页加载更有效率<br />\r\n<br />\r\n<strong>三、营销型网站程序开发：</strong><br />\r\n1、采用全球最流程的网站开发程序PHP为核心语言，结合PHP+MYSQL数据库的黄金组合，让叠峰公司网站运行更加安全、稳定、高效<br />\r\n2、自主独立开发的V2.4功能版本，让客户自如的更新网站所有信息，以及网站的标题，除了方便客户使用，更加强了在搜索引擎亲和力方面的表现，促进网站自然排名的提升<br />\r\n<br />\r\n<strong>四、营销型网站外拍摄影服务：</strong><br />\r\n为更好的将产品呈现给客户，国人伟业为叠峰公司提供了免费外拍服务，产品图片更加清晰细腻，增加了网站的转化率\r\n</p>', '2016-06-04 11:19:19', null, 'web_up_file/news_spic/20160604111832588.jpg', '1', null, null, '0', '1');
INSERT INTO `lc_news` VALUES ('63', '10', '什么是网络推广？', '什么是网络推广？', '什么是网络推广？', '', '<span style=\"font-size:14px;color:#666666;\">? ? ?网络推广就是以企业产品或服务为核心内容，建立网站，再把这个网站通过各种免费或收费渠道展示给网民的一种推广方式。常见的推广方式就是整体推广、百度推广，谷歌推广，搜狗推广，搜搜推广（CPC，CPS，CPV，CPA）等，免费网站推广就是论坛、SNS、交换链接、B2B平台建站、博客以及微博、微信等新媒体渠道方式；狭义地说，网络推广的载体是互联网，离开了互联网的推广就不算是网络推广；可以分为两种：1、做好自身的用户体验，2、口碑：利用互联网平台工具进行推广。</span><br />\r\n<br />\r\n<span style=\"font-size:14px;color:#666666;\">? ? ?传统企业的从业人员早已经达到饱和的状态，而电子商务行业人员的需求数量则不断加大。传统行业人员的下岗与电子商务人员的极度匮乏形成了一个鲜明的对比，并且差距会以极快的速度不断拉大。这就可以得出结论，率先从事电子商务的行业，其以后所占的市场份额及经验的积累，并将使其成为电子商务行业的领军人物，而从事相关行业的人员则是电子商务行业的元老，专家级人物。</span><br />\r\n<br />\r\n<span style=\"font-size:14px;color:#666666;\">? ? ?虽然电子商务在国内发展已经有了十多年的时间了。但其衍生行业例如搜索引擎优化，网络推广仍是一个新鲜的概念；国内的专业公司及专业人才非常缺少，无法满足现有的行业发展需求。有实力的公司常采取通过花钱来推广的途径，而大多数的中小型的刚起步公司则是通过具有针对性的且低成本的网络推广来达到增加品牌知名度的目的，根据各个企业不同的特点制定不同的推广方案，取得了一定的成效。</span><br />\r\n<br />\r\n<span style=\"font-size:14px;color:#666666;\">? ? ?随着国家相关扶植政策的陆续出台，对电子商务行业的支持力度不断加大。电子商务行业以其低成本，无地域限制等特点，必将会对传统行业产生极大的冲击。很多之前从事于传统购物的企业也纷纷开启的购物网站，并通过互联网来宣传。随着电子商务的不断发展，为数不多的网络推广人员显得越来越重要。</span><br />', '2016-06-27 14:41:26', null, 'web_up_file/news_spic/20160627144413195.jpg', '1', null, null, '0', '1');
INSERT INTO `lc_news` VALUES ('62', '9', '洞悉互联网前沿资讯，探寻网站优化规律', '洞悉互联网前沿资讯，探寻网站优化规律', '洞悉互联网前沿资讯，探寻网站优化规律', '', '<p>\r\n	创驰云网络创立于2011年8月，是一家专业的网络营销服务提供商。<span><span>创驰云</span>网络</span>同时为企业提供：网络营销策划、网络营销顾问和营销型网站建设，一站式网络营销整体实施外包服务。\r\n</p>\r\n<p>\r\n	<span><span>创驰云</span>网络</span>深知“做生意从找到开始”，无论是传统商贸还是网络贸易。找到了客户，才能做成生意，才能实现销售！更多的中小企业通过销售人员来获取客户，然而人\r\n员能力的参差不起和高成本，以及高流动性，使得业务的稳定和提升变得困难，如今的市场是客户主导时代，客户更愿意按照自己的需求主动获取信息而拒绝推销，\r\n企业只有更好的满足客户需求，才能获得生意机会，客户需求获取必然成为业务的关键环节。企业有什么方法才能更好的获取客户呢？\r\n</p>\r\n<p>\r\n	如果您的开始重视企业电子商务的发展，建立了企业专属的“营销型网站”，启动了货真价实的网络营销运营推广系统，就用不着再为了获取潜在客户而苦恼，相反，客户会主动找您，生意就找上门来了！\r\n</p>\r\n<p>\r\n	“<span>创驰云</span>网络营销推广服务”—独一无二的企业网络营销整体解决方案，结合于<span><span>创驰云</span></span>自主开发营销型网站系统，使企业网站与网络营销、网站优化、品牌推广同步\r\n进行，让潜在客户主动搜索点击您的企业网站，实现不断获取潜在客户之核心目标，迅速提高客户转化率，达成交易，成为企业实现网络营销最有“利”的武器！\r\n</p>', '2016-06-06 18:20:17', null, 'web_up_file/news_spic/20160606182034944.png', '1', null, null, '0', '1');
INSERT INTO `lc_news` VALUES ('65', '10', '网络推广的主要技巧', '网络推广的主要技巧', '网络推广的主要技巧', '', '<span style=\"font-size:14px;color:#666666;\">推广技巧</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">网络推广和网络营销是两个不同的概念，网络营销偏重于营销层面，更重视网络营销后是否产生实际的经济效益，而网络推广重在推广，更注重的是通过推广后，给企业带来的网站流量、世界排名、访问量、注册量等等，目的是扩大被推广对象的知名度和影响力。可以说，网络营销中必须包含网络推广这一步骤，而且网络推广是网络营销的核心工作。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">另外一个容易模糊的概念是：网站推广。网站推广是网络营销中极其重要的一部分，网站是网络的主体，很多网络推广都包含着网站推广。当然网络推广也还进行非网站的推广，例如线下的产品、公司等等。这两个概念容易混淆是因为网络推广活动贯穿于网站的生命周期，从网站策划、建设、推广、反馈等网站存在的一系列环节中都涉及了网络推广活动。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">网络广告则是网络推广所采用的一种手段。除了网络广告以外，网络推广还可以利用搜索引擎、友情链接、网络新闻炒作等方法来进行推广。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">随着互联网的迅速发展，网民将会越来越多，截止2010年12月底，中国网民已经达到4.57亿人数，位居全世界第一，因此网络的影响力也将会越来越大。如果不希望在互联网上做一个信息孤岛，就需要有效实现网络宣传。对企业而言，做好网络推广，可以带来经济效益；对个人而言，可以让更多人了解，认识更多的朋友。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">优拓互动在网络推广上能快速传递企业品牌营销信息，并通过互动方式加深受众对品牌的印象。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">病毒式营销</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">说到病毒式营销，如果是行外之人听了一般都会以为所谓的病毒式营销就是以传播病毒的方式开展营销，其实所谓的病毒式营销指的是信息像病毒一样，传播和扩散，利用快速复制的方式传向数以千计，数以百万计的受众。这是一种最为有效也是最为常见的企业营销方式。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">网络广告</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">中国是个人口大国，网民数是全球最多的国家，在现今这个快节奏的信息化经济时代，随着互联网给企业带来的便利性越发的明显，网络广告显然也就成了最为受欢迎的广告形式之一。网络广告的主要特点是其操作简便、成本低、见效快、受众人群广。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">信息发布</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">所谓的信息发布，其实也就是一个企业在自我宣传的过程，不管是发布什么内容的信息，其过程就是营销过程。消费者通过网络了解企业的相关信息，从而主动联系企业相关负责人员，这就改变了以往的企业被动式的营销方式，这种变被动为主动的营销方式结合广告投放效果是很明显的。天展网络在广告投放结合信息发布的情况下，为众多企业创造了企业所期望的营销价值，得到了一致的好评。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">邮件列表</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">邮件列表实际上也是一种Email营销方式，邮件的方便之处在于邮件内容以及形式的多样化可以很灵活的选择，没有广告性质的限制，发布的时候不需要太多的技巧性的东西，而且针对性强，是属于精准营销一块。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\"></span>', '2016-06-27 14:47:18', null, 'web_up_file/news_spic/20160627144737812.jpg', '1', null, null, '0', '1');
INSERT INTO `lc_news` VALUES ('64', '10', '网络推广涉及的范围', '网络推广涉及的范围', '网络推广涉及的范围', '', '<span style=\"font-size:14px;color:#666666;\">1、对外推广</span><br />\r\n<p>\r\n	<span style=\"font-size:14px;color:#666666;\">顾名思义，对外推广就是指针对站外潜在用户的推广。主要是通过一系列手段针对潜在用户进行营销推广，以达到增加网站PV、IP、会员数或收入的目的。</span>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<span style=\"font-size:14px;color:#666666;\">2、对内推广</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">和对外推广相反，对内推广是专门针对网站内部的推广。比如如何增加用户浏览频率、如何激活流失用户、如何增加频道之间的互动等。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\">很多人忽略了对内推广的重要性，其实如果对内推广使用得当，效果不比对外推广差。毕竟在现有用户基础上进行二次开发，要比开发新用户容易的多，投入也会少很多。</span><br />\r\n<span style=\"font-size:14px;color:#666666;\"></span><br />', '2016-06-27 14:42:56', null, 'web_up_file/news_spic/20160627144426169.jpg', '1', null, null, '0', '1');

-- ----------------------------
-- Table structure for `lc_news_sort`
-- ----------------------------
DROP TABLE IF EXISTS `lc_news_sort`;
CREATE TABLE `lc_news_sort` (
  `news_sort_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_seo_title` text,
  `news_seo_description` text,
  `news_seo_keyword` text,
  `news_sort_one_id` int(11) DEFAULT '0',
  `news_sort_order` int(11) DEFAULT NULL,
  `news_sort_content` text,
  `news_sort_pic` varchar(200) DEFAULT NULL,
  `news_sort_name` varchar(150) DEFAULT NULL,
  `alias` varchar(150) DEFAULT NULL,
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`news_sort_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk COMMENT='新闻分类表';

-- ----------------------------
-- Records of lc_news_sort
-- ----------------------------
INSERT INTO `lc_news_sort` VALUES ('2', '资讯中心', '资讯中心', '资讯中心', null, '6', '资讯中心', null, '资讯中心', 'ZiXunZhongXin', '1');
INSERT INTO `lc_news_sort` VALUES ('9', '公司新闻', '公司新闻', '公司新闻', '0', '0', '公司新闻', null, '公司新闻', 'GongSiXinWen', '1');
INSERT INTO `lc_news_sort` VALUES ('10', '常见问题', '常见问题', '常见问题', '0', '0', '常见问题', null, '常见问题', 'ChangJianWenTi', '1');

-- ----------------------------
-- Table structure for `lc_orders`
-- ----------------------------
DROP TABLE IF EXISTS `lc_orders`;
CREATE TABLE `lc_orders` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `OrderNo` varchar(20) DEFAULT NULL COMMENT '订单流水号',
  `MemberId` int(11) DEFAULT NULL COMMENT '客户ID',
  `PackageType` int(11) DEFAULT NULL COMMENT '套餐类型',
  `PackageName` varchar(200) DEFAULT NULL COMMENT '套餐名称',
  `PackageRemarks` varchar(500) DEFAULT NULL COMMENT '套餐备注',
  `FTPAccount` varchar(50) DEFAULT NULL COMMENT 'FTP账号',
  `FTPPassword` varchar(50) DEFAULT NULL COMMENT 'FTP密码',
  `SEOAccount` varchar(50) DEFAULT NULL COMMENT 'SEO用户名',
  `SEOPassword` varchar(50) DEFAULT NULL COMMENT 'SEO密码',
  `OrderSignDate` datetime DEFAULT NULL COMMENT '签单日期',
  `PayStatus` int(11) DEFAULT NULL COMMENT '支付状态',
  `OrderTotalMoney` decimal(8,2) DEFAULT NULL COMMENT '签单总额',
  `PaidMoney` decimal(8,2) DEFAULT NULL COMMENT '已付金额',
  `SurplusMoney` decimal(8,2) DEFAULT NULL COMMENT '剩余金额',
  `StartDate` datetime DEFAULT NULL COMMENT '开始日期',
  `EndDate` datetime DEFAULT NULL COMMENT '到期日期',
  `SignUser` int(11) DEFAULT NULL COMMENT '签单人',
  `OrderType` varchar(50) DEFAULT NULL COMMENT '订单类型',
  `OrderStatus` int(11) DEFAULT NULL COMMENT '订单状态',
  `DeliveryDate` datetime DEFAULT NULL COMMENT '交付日期',
  `SEOKeyword` varchar(500) DEFAULT NULL COMMENT '优化关键字',
  `PrincipalUser` varchar(500) DEFAULT NULL COMMENT '项目负责人',
  `IsBuyDomain` int(11) DEFAULT NULL COMMENT '是否购买域名',
  `IsSpecialApproval` int(11) DEFAULT NULL COMMENT '是否上级特批',
  `Remarks` varchar(2000) DEFAULT NULL COMMENT '备注',
  `Operator` varchar(50) DEFAULT NULL COMMENT '操作人',
  `OperateDate` datetime DEFAULT NULL COMMENT '操作时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of lc_orders
-- ----------------------------

-- ----------------------------
-- Table structure for `lc_orderworkflow`
-- ----------------------------
DROP TABLE IF EXISTS `lc_orderworkflow`;
CREATE TABLE `lc_orderworkflow` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `OrderId` int(11) DEFAULT NULL COMMENT '订单Id',
  `CurrUserId` int(11) DEFAULT NULL COMMENT '当前处理人',
  `PreUserId` int(11) DEFAULT NULL COMMENT '上次处理人',
  `OperatorId` int(11) DEFAULT NULL COMMENT '指派人Id',
  `OperateDate` datetime DEFAULT NULL COMMENT '指派时间',
  PRIMARY KEY (`Id`),
  KEY `FK_Reference_59` (`OrderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单工作流';

-- ----------------------------
-- Records of lc_orderworkflow
-- ----------------------------

-- ----------------------------
-- Table structure for `lc_orderworkflowschedule`
-- ----------------------------
DROP TABLE IF EXISTS `lc_orderworkflowschedule`;
CREATE TABLE `lc_orderworkflowschedule` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `WorkflowId` int(11) DEFAULT NULL COMMENT '工作流Id',
  `Status` int(11) DEFAULT NULL COMMENT '处理状态',
  `ChangeDate` datetime DEFAULT NULL COMMENT '处理时间',
  `Remarks` varchar(2000) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`Id`),
  KEY `FK_Reference_57` (`WorkflowId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单工作流进度表';

-- ----------------------------
-- Records of lc_orderworkflowschedule
-- ----------------------------

-- ----------------------------
-- Table structure for `lc_product`
-- ----------------------------
DROP TABLE IF EXISTS `lc_product`;
CREATE TABLE `lc_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_one_id` int(11) DEFAULT NULL,
  `product_name` text NOT NULL,
  `defined` text,
  `alias` varchar(150) DEFAULT NULL,
  `product_seo_title` varchar(150) DEFAULT NULL,
  `product_seo_keyword` varchar(150) DEFAULT NULL,
  `product_seo_description` text,
  `product_order` int(11) DEFAULT '0',
  `product_content` text,
  `product_spic` varchar(150) DEFAULT NULL,
  `product_commend` int(11) DEFAULT '0',
  `product_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `url` text,
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_product
-- ----------------------------
INSERT INTO `lc_product` VALUES ('113', '37', '深圳市灵创网络技术有限公司', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'ShenChouShiLingChuangWangLuoJiShuYouXianGongSi', '深圳市灵创网络技术有限公司', '深圳市灵创网络技术有限公司', '深圳市灵创网络技术有限公司', '0', '开户行：<span>建设银行深圳双龙支行</span><br />\r\n帐　号：4420 1017 8000 5252 7435<br />\r\n户　名：<span>深圳市灵创网络技术有限公司</span>', 'web_up_file/product_spic/20160617184335873.png', '0', '2016-06-04 18:30:19', '', '1');
INSERT INTO `lc_product` VALUES ('114', '38', '礼之彩伞业', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'LiZhiCaiSanYe', '礼之彩伞业有限公司', '礼之彩伞业有限公司', '礼之彩伞业有限公司', '0', '<p>\r\n	<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Simsun, Mingliu, Arial, Helvetica;line-height:25px;background-color:#FFFFFF;\"><span style=\"font-family:tahoma, 微软雅黑, Simsun, Mingliu, Arial, Helvetica;background-color:#FFFFFF;\">礼之彩伞业有限公司</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Simsun, Mingliu, Arial, Helvetica;line-height:25px;background-color:#FFFFFF;\"></span>\r\n</p>', 'web_up_file/product_spic/20160615091029771.jpg', '0', '2016-06-06 16:53:18', '', '1');
INSERT INTO `lc_product` VALUES ('115', '37', '招商银行', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'ZhaoShangYinXing', '招商银行', '招商银行', '招商银行', '0', '开户行：深圳南山支行<br />\r\n帐　号：6226 0978 0590 7277<br />\r\n户　名：石榴', 'web_up_file/product_spic/20160617184459773.png', '0', '2016-06-04 18:30:19', '', '1');
INSERT INTO `lc_product` VALUES ('144', '37', '建设银行', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'JianSheYinXing', '建设银行', '建设银行', '建设银行', '0', '开户行：<span>深圳建行龙城支行</span><br />\r\n帐　号：6227 0072 0090 0934 888<br />\r\n户　名：<span>石榴</span>', 'web_up_file/product_spic/20160617184550711.png', '0', '2016-06-17 18:46:35', '', '1');
INSERT INTO `lc_product` VALUES ('168', '40', '睿兴塑胶', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'RuiXingSuJiao', '睿兴塑胶', '睿兴塑胶', '睿兴塑胶', '0', '睿兴塑胶', 'web_up_file/product_spic/20160627175332363.png', '0', '2016-06-27 17:53:43', '', '1');
INSERT INTO `lc_product` VALUES ('169', '41', '邻州淘', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'LinZhouTao', '邻州淘', '邻州淘', '邻州淘', '0', '邻州淘', 'web_up_file/product_spic/20160627175423170.png', '0', '2016-06-27 17:54:33', '', '1');
INSERT INTO `lc_product` VALUES ('175', '42', '沃派电子', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'WoPaiDianZi', '沃派电子', '沃派电子', '沃派电子', '0', '沃派电子', 'web_up_file/product_spic/20160627175821158.png', '0', '2016-06-27 17:58:30', '', '1');
INSERT INTO `lc_product` VALUES ('167', '40', '欧力高', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'OuLiGao', '欧力高', '欧力高', '欧力高', '0', '欧力高', 'web_up_file/product_spic/20160627175318171.png', '0', '2016-06-27 17:53:24', '', '1');
INSERT INTO `lc_product` VALUES ('146', '47', '礼之彩伞业', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'LiZhiCaiSanYe', '礼之彩伞业', '礼之彩伞业', '礼之彩伞业', '0', '礼之彩伞业', 'web_up_file/product_spic/20160627165906256.png', '0', '2016-06-27 16:59:56', '', '1');
INSERT INTO `lc_product` VALUES ('174', '42', '依兰格', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'YiLanGe', '依兰格', '依兰格', '依兰格', '0', '依兰格', 'web_up_file/product_spic/20160627175713960.png', '0', '2016-06-27 17:57:55', '', '1');
INSERT INTO `lc_product` VALUES ('166', '40', '中泽文化', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'ZhongZeWenHua', '中泽文化', '中泽文化', '中泽文化', '0', '中泽文化', 'web_up_file/product_spic/20160627180303485.png', '0', '2016-06-27 17:53:11', '', '1');
INSERT INTO `lc_product` VALUES ('181', '44', '星科源', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'XingKeYuan', '星科源', '星科源', '星科源', '0', '星科源', 'web_up_file/product_spic/20160627180107216.png', '0', '2016-06-27 18:01:13', '', '1');
INSERT INTO `lc_product` VALUES ('150', '48', '国能环保', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'GuoNenHuanBao', '国能环保', '国能环保', '国能环保', '0', '国能环保', 'web_up_file/product_spic/20160627172821393.png', '0', '2016-06-27 17:28:28', '', '1');
INSERT INTO `lc_product` VALUES ('154', '49', '天地中篷房', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'TianDiZhongPengFang', '天地中篷房', '天地中篷房', '天地中篷房', '0', '天地中篷房', 'web_up_file/product_spic/20160627172957815.png', '0', '2016-06-27 17:30:05', '', '1');
INSERT INTO `lc_product` VALUES ('126', '40', '国能节能', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'GuoNenJieNen', '国能节能', '国能节能', '国能节能', '0', '<p>\r\n	国能节能\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'web_up_file/product_spic/20160627175245689.png', '0', '2016-06-08 09:08:40', '234324', '1');
INSERT INTO `lc_product` VALUES ('127', '38', '欧立高', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'OuLiGao', '深圳欧立高建材实业有限公司', '深圳欧立高建材实业有限公司', '深圳欧立高建材实业有限公司', '0', '<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Simsun, Mingliu, Arial, Helvetica;line-height:25px;background-color:#FFFFFF;\">深圳欧立高建材实业有限公司</span>', 'web_up_file/product_spic/20160615091156541.jpg', '0', '2016-06-15 09:11:57', '', '1');
INSERT INTO `lc_product` VALUES ('128', '38', '睿兴塑胶', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'RuiXingSuJiao', '睿兴塑胶制品有限公司', '睿兴塑胶制品有限公司', '睿兴塑胶制品有限公司', '0', '睿兴塑胶制品有限公司', 'web_up_file/product_spic/20160615092612890.jpg', '0', '2016-06-15 09:26:35', '', '1');
INSERT INTO `lc_product` VALUES ('129', '38', '远成天安', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'YuanChengTianAn', '深圳市远成天安科技发展有限公司', '深圳市远成天安科技发展有限公司', '深圳市远成天安科技发展有限公司', '0', '深圳市远成天安科技发展有限公司', 'web_up_file/product_spic/20160615092739538.jpg', '0', '2016-06-15 09:28:15', '', '1');
INSERT INTO `lc_product` VALUES ('147', '47', '欧立高实业', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'OuLiGaoShiYe', '欧立高实业', '欧立高实业', '欧立高实业', '0', '欧立高实业', 'web_up_file/product_spic/20160627172553322.png', '0', '2016-06-27 17:26:05', '', '1');
INSERT INTO `lc_product` VALUES ('131', '38', '熊购商城', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'XiongGouShangCheng', '熊购商城', '熊购商城', '熊购商城', '0', '熊购商城', 'web_up_file/product_spic/20160615092857226.jpg', '0', '2016-06-15 09:29:07', '', '1');
INSERT INTO `lc_product` VALUES ('133', '38', '国能节能', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'GuoNenJieNen', '深圳国能环保节能科技有限公司', '深圳国能环保节能科技有限公司', '深圳国能环保节能科技有限公司', '0', '<span style=\"color:#333333;font-family:Arial, 宋体, Verdana, Helvetica, sans-serif;font-size:14px;line-height:27px;background-color:#FFFFFF;\">深圳国能环保节能科技有限公司</span>', 'web_up_file/product_spic/20160615093119764.jpg', '0', '2016-06-15 09:31:47', '', '1');
INSERT INTO `lc_product` VALUES ('134', '38', '沃派电子', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'WoPaiDianZi', '东莞市沃派电子有限公司', '东莞市沃派电子有限公司', '东莞市沃派电子有限公司', '0', '<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Simsun, Mingliu, Arial, Helvetica;line-height:25px;\">东莞市沃派电子有限公司</span>', 'web_up_file/product_spic/20160615093212879.jpg', '0', '2016-06-15 09:33:01', '', '1');
INSERT INTO `lc_product` VALUES ('135', '38', '广利五金', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'GuangLiWuJin', '广利五金（深圳）有限公司', '广利五金（深圳）有限公司', '广利五金（深圳）有限公司', '0', '广利五金（深圳）有限公司', 'web_up_file/product_spic/20160615093401409.jpg', '0', '2016-06-15 09:34:49', '', '1');
INSERT INTO `lc_product` VALUES ('136', '38', '天地中篷房', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'TianDiZhongPengFang', '深圳市天地中篷房有限公司', '深圳市天地中篷房有限公司', '深圳市天地中篷房有限公司', '0', '深圳市天地中篷房有限公司', 'web_up_file/product_spic/20160615093509694.jpg', '0', '2016-06-15 09:35:52', '', '1');
INSERT INTO `lc_product` VALUES ('137', '38', '中泽文化', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'ZhongZeWenHua', '深圳中泽文化传播有限公司', '深圳中泽文化传播有限公司', '深圳中泽文化传播有限公司', '0', '深圳中泽文化传播有限公司', 'web_up_file/product_spic/20160615093613472.jpg', '0', '2016-06-15 09:37:39', '', '1');
INSERT INTO `lc_product` VALUES ('138', '38', '鼎丰科技', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'DingFengKeJi', '深圳鼎丰信息科技有限公司', '深圳鼎丰信息科技有限公司', '深圳鼎丰信息科技有限公司', '0', '深圳鼎丰信息科技有限公司', 'web_up_file/product_spic/20160615093807262.jpg', '0', '2016-06-15 09:38:37', '', '1');
INSERT INTO `lc_product` VALUES ('139', '38', '康达源', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'KangDaYuan', '深圳市康达源科技有限公司', '深圳市康达源科技有限公司', '深圳市康达源科技有限公司', '0', '深圳市康达源科技有限公司', 'web_up_file/product_spic/20160615094844451.jpg', '0', '2016-06-15 09:49:08', '', '1');
INSERT INTO `lc_product` VALUES ('140', '38', '友和设计印刷', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'YouHeSheJiYinShua', '深圳市友和设计印刷有限公司', '深圳市友和设计印刷有限公司', '深圳市友和设计印刷有限公司', '0', '深圳市友和设计印刷有限公司', 'web_up_file/product_spic/20160615094920939.jpg', '0', '2016-06-15 09:49:39', '', '1');
INSERT INTO `lc_product` VALUES ('141', '38', '星科源自动化设备', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'XingKeYuanZiDongHuaSheBei', '深圳市星科源自动化设备有限公司', '深圳市星科源自动化设备有限公司', '深圳市星科源自动化设备有限公司', '0', '深圳市星科源自动化设备有限公司', 'web_up_file/product_spic/20160615095017888.jpg', '0', '2016-06-15 09:50:19', '', '1');
INSERT INTO `lc_product` VALUES ('142', '38', '海媚数码科技', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'HaiMeiShuMaKeJi', '深圳市海媚数码科技有限公司', '深圳市海媚数码科技有限公司', '深圳市海媚数码科技有限公司', '0', '深圳市海媚数码科技有限公司', 'web_up_file/product_spic/20160615095047873.jpg', '0', '2016-06-15 09:51:13', '', '1');
INSERT INTO `lc_product` VALUES ('143', '38', '唯美家居', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'WeiMeiJiaJi', '深圳市唯美家居衣柜有限公司', '深圳市唯美家居衣柜有限公司', '深圳市唯美家居衣柜有限公司', '0', '深圳市唯美家居衣柜有限公司', 'web_up_file/product_spic/20160615095121291.jpg', '0', '2016-06-15 09:51:51', '', '1');
INSERT INTO `lc_product` VALUES ('145', '37', '支付宝', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'ZhiFuBao', '支付宝', '支付宝', '支付宝', '0', '帐　号：qq529097312@163.com<br />\r\n户　名：<span>石榴</span>', 'web_up_file/product_spic/20160617184904739.png', '0', '2016-06-17 18:49:59', '', '1');
INSERT INTO `lc_product` VALUES ('148', '47', '睿兴塑胶', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'RuiXingSuJiao', '睿兴塑胶', '睿兴塑胶', '睿兴塑胶', '0', '睿兴塑胶', 'web_up_file/product_spic/20160627172614979.png', '0', '2016-06-27 17:27:28', '', '1');
INSERT INTO `lc_product` VALUES ('149', '47', '远成天安', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'YuanChengTianAn', '远成天安', '远成天安', '远成天安', '0', '远成天安', 'web_up_file/product_spic/20160627172739417.png', '0', '2016-06-27 17:27:49', '', '1');
INSERT INTO `lc_product` VALUES ('151', '48', '沃派电子', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'WoPaiDianZi', '沃派电子', '沃派电子', '沃派电子', '0', '沃派电子', 'web_up_file/product_spic/20160627172833942.png', '0', '2016-06-27 17:28:47', '', '1');
INSERT INTO `lc_product` VALUES ('152', '48', '广利五金', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'GuangLiWuJin', '广利五金', '广利五金', '广利五金', '0', '广利五金', 'web_up_file/product_spic/20160627172904871.png', '0', '2016-06-27 17:29:12', '', '1');
INSERT INTO `lc_product` VALUES ('153', '48', '中泽文化', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'ZhongZeWenHua', '中泽文化', '中泽文化', '中泽文化', '0', '中泽文化', 'web_up_file/product_spic/20160627172919793.png', '0', '2016-06-27 17:29:29', '', '1');
INSERT INTO `lc_product` VALUES ('155', '49', '鼎丰科技', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'DingFengKeJi', '鼎丰科技', '鼎丰科技', '鼎丰科技', '0', '鼎丰科技', 'web_up_file/product_spic/20160627173015183.png', '0', '2016-06-27 17:30:25', '', '1');
INSERT INTO `lc_product` VALUES ('156', '49', '康达源', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'KangDaYuan', '康达源', '康达源', '康达源', '0', '康达源', 'web_up_file/product_spic/20160627173037551.png', '0', '2016-06-27 17:30:50', '', '1');
INSERT INTO `lc_product` VALUES ('157', '49', '友和设计印刷', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'YouHeSheJiYinShua', '友和设计印刷', '友和设计印刷', '友和设计印刷', '0', '友和设计印刷', 'web_up_file/product_spic/20160627173103431.png', '0', '2016-06-27 17:31:16', '', '1');
INSERT INTO `lc_product` VALUES ('158', '50', '熊购商城', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'XiongGouShangCheng', '熊购商城', '熊购商城', '熊购商城', '0', '熊购商城', 'web_up_file/product_spic/20160627173128373.png', '0', '2016-06-27 17:31:39', '', '1');
INSERT INTO `lc_product` VALUES ('159', '51', '星科源', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'XingKeYuan', '星科源', '星科源', '星科源', '0', '星科源', 'web_up_file/product_spic/20160627173249492.png', '0', '2016-06-27 17:33:36', '', '1');
INSERT INTO `lc_product` VALUES ('160', '51', '海媚数码', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'HaiMeiShuMa', '海媚数码', '海媚数码', '海媚数码', '0', '海媚数码', 'web_up_file/product_spic/20160627173345266.png', '0', '2016-06-27 17:34:00', '', '1');
INSERT INTO `lc_product` VALUES ('161', '51', '唯美家居', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'WeiMeiJiaJi', '唯美家居', '唯美家居', '唯美家居', '0', '唯美家居', 'web_up_file/product_spic/20160627173411676.png', '0', '2016-06-27 17:34:19', '', '1');
INSERT INTO `lc_product` VALUES ('162', '50', '邻州淘', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'LinZhouTao', '邻州淘', '邻州淘', '邻州淘', '0', '邻州淘', 'web_up_file/product_spic/20160627174048798.png', '0', '2016-06-27 17:40:50', '', '1');
INSERT INTO `lc_product` VALUES ('163', '50', '世森同城', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'ShiSenTongCheng', '世森同城', '世森同城', '世森同城', '0', '世森同城', 'web_up_file/product_spic/20160627174056573.png', '0', '2016-06-27 17:41:09', '', '1');
INSERT INTO `lc_product` VALUES ('164', '50', '嘿动', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'HeiDong', '嘿动', '嘿动', '嘿动', '0', '嘿动', 'web_up_file/product_spic/20160627174117666.png', '0', '2016-06-27 17:41:37', '', '1');
INSERT INTO `lc_product` VALUES ('165', '51', '依兰格', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'YiLanGe', '依兰格', '依兰格', '依兰格', '0', '<span style=\"color:#603913;font-family:Verdana, Geneva, sans-serif;line-height:24px;\">依兰格</span>', 'web_up_file/product_spic/20160627174528187.png', '0', '2016-06-27 17:45:30', '', '1');
INSERT INTO `lc_product` VALUES ('171', '41', '嘿动', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'HeiDong', '嘿动', '嘿动', '嘿动', '0', '嘿动', 'web_up_file/product_spic/20160627175456620.png', '0', '2016-06-27 17:55:04', '', '1');
INSERT INTO `lc_product` VALUES ('172', '41', '熊购商城', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'XiongGouShangCheng', '熊购商城', '熊购商城', '熊购商城', '0', '熊购商城', 'web_up_file/product_spic/20160627175515344.png', '0', '2016-06-27 17:55:23', '', '1');
INSERT INTO `lc_product` VALUES ('173', '45', '远程天安', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'YuanChengTianAn', '远程天安', '远程天安', '远程天安', '0', '远程天安', 'web_up_file/product_spic/20160627175551215.png', '0', '2016-06-27 17:56:19', '', '1');
INSERT INTO `lc_product` VALUES ('176', '42', '广利五金', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'GuangLiWuJin', '广利五金', '广利五金', '广利五金', '0', '广利五金', 'web_up_file/product_spic/20160627175837948.png', '0', '2016-06-27 17:58:45', '', '1');
INSERT INTO `lc_product` VALUES ('177', '42', '天地中篷房', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'TianDiZhongPengFang', '天地中篷房', '天地中篷房', '天地中篷房', '0', '天地中篷房', 'web_up_file/product_spic/20160627175913431.png', '0', '2016-06-27 17:59:21', '', '1');
INSERT INTO `lc_product` VALUES ('178', '45', '鼎丰科技', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'DingFengKeJi', '鼎丰科技', '鼎丰科技', '鼎丰科技', '0', '鼎丰科技', 'web_up_file/product_spic/20160627175954469.png', '0', '2016-06-27 18:00:00', '', '1');
INSERT INTO `lc_product` VALUES ('179', '45', '康达源', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'KangDaYuan', '康达源', '康达源', '康达源', '0', '康达源', 'web_up_file/product_spic/20160627180008489.png', '0', '2016-06-27 18:00:15', '', '1');
INSERT INTO `lc_product` VALUES ('182', '44', '海媚数码', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'HaiMeiShuMa', '海媚数码', '海媚数码', '海媚数码', '0', '海媚数码', 'web_up_file/product_spic/20160627180123807.png', '0', '2016-06-27 18:01:36', '', '1');
INSERT INTO `lc_product` VALUES ('183', '44', '唯美家居', '价格：\r\n折扣：\r\n类型：\r\n区域：', 'WeiMeiJiaJi', '唯美家居', '唯美家居', '唯美家居', '0', '唯美家居', 'web_up_file/product_spic/20160627180144301.png', '0', '2016-06-27 18:01:52', '', '1');

-- ----------------------------
-- Table structure for `lc_product_sort`
-- ----------------------------
DROP TABLE IF EXISTS `lc_product_sort`;
CREATE TABLE `lc_product_sort` (
  `product_sort_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `alias` varchar(150) DEFAULT NULL,
  `product_seo_title` text,
  `product_seo_description` text,
  `product_seo_keyword` text,
  `product_sort_name` varchar(150) NOT NULL,
  `product_sort_order` int(11) DEFAULT NULL,
  `product_sort_content` text,
  `product_sort_spic` varchar(150) DEFAULT NULL,
  `commend` int(11) DEFAULT '0',
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_sort_id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_product_sort
-- ----------------------------
INSERT INTO `lc_product_sort` VALUES ('37', '0', 'FuKuanFangShi', null, null, null, '付款方式', '0', '付款方式', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('38', '0', 'KeHuLogo', null, null, null, '客户Logo', '0', '', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('39', '0', 'WangZhanJianShe', null, null, null, '网站建设', '0', '网站建设', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('40', '39', 'GuanWangJianShe', null, null, null, '官网建设', '0', '企业官方网站涵盖的行业类型多、信息量大、访问群体广，有利于社会对企业的全面了解。灵创网络提供的企业官网建设服务会根 据客户不同行业、不同类型，辅以一套特色的网站视觉识别系统，从而提出一个最合适的形象定位。用最合适的展示方式、展示效果、站点框架，把客户及其用户最 关心的问题突出表现。', '', '1', '1');
INSERT INTO `lc_product_sort` VALUES ('41', '39', '聪明友善好软件 网罗生意大管家', null, null, null, '网上商城', '0', '网上商城开辟了属于自己的稳定的营销渠道，能扩大市场份额，建立连锁、分销的统一电商运营管理系统，同时还可接触最直接消费者，获得第一手产品市场 反馈。灵创网络商城网站建设服务能为客户建立符合自身特点的积分管理、VIP管理、客户服务交流管理，商品销售分析系统和已有的进销存(MIS，ERP) 互通的数据共享系统等。\r\n\r\n基本功能包括:\r\n产品管理、订购管理、订单管理、产品推荐、支付管理、收费管理、送发货管理、会员管理、 连锁店运营管理系统、加盟店运营管理系统等等。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('42', '39', '高效互动 提升业绩', null, null, null, '互动营销', '0', '互动营销型网站的特点在于能加强与客户之间的交流，利用互联网(尤其是移动互联网)的特性，提升客户管理的准确性、高效 性，从而打造品牌、提升销售业绩。灵创网络互动营销网站能精准把握企业与消费者的共同利益点，找到巧妙的沟通时机和方法将二者紧密结合起来。对于企业商务 活动，网站则可实现渠道分销、终端客户销售、合作伙伴管理、网上采购、实时在线服务、物流管理、售后服务管理等。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('43', '39', '塑造品牌形象 传递品牌价值', null, null, null, '品牌型网站', '0', '品牌型网站着重展示企业文化和品牌特色，非常强调创意设计与文化的结合，能通过视觉感官的冲击，令目标受众对品牌产生深刻而美好的印象。灵创网络品 牌型网站建设利用多媒体交互技术、动态网页技术，配合广告设计，将企业品牌形象在互联网上多维度、全方位、立体式地表现出来。对于产品品牌众多的企业，可 单独建立各品牌的独立网站，以方便市场营销策略与网站宣传的统一。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('44', '39', '信息互通统一管理', null, null, null, '内外信息网', '0', '内外信息型网站包含外部地区门户网站以及内部信息网站，此类网站用于某地区及相关联单位的综合信息服务或电子商务服务。灵创网络打造的地区门户网站 可供企业、组织以及社会公众了解该地信息、查找企业和相关产品，实现公众、企业、社会团体的信息共享和互动，促进区域内的项目合作、企业和产品交流。内部 信息网站则利于办公区以外的相关部门(或上、下级机构)，互通信息、统一数据处理、共享资料。主要功能包括提供多数据源的接口，实现业务系统的数据整合； 统一用户管理，提供方便有效的访问权限和管理权限体系；方便建立二级子网站和部门网站；实现复杂的信息发布管理流程。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('45', '39', '打造商务交互平台树立行业权威形象', null, null, null, '行业门户', '0', '行业门户网站是专门针对某一个行业而构建的大型网站，是某个行业的产、供、销供应链以及周边相关行业的企业、产品、商机、咨询类信息等的棸合平台。 灵创网络打造的行业门户网站包含企业会员、供求信息、产品库、公司库、专项商机、产品报价、网商博客、委托代理、产品展示、求职招聘、展会展览、商贸助 手、竞价排名、行业资讯、商务社区、在线支付、全方位搜索等功能。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('46', '0', 'ChuangYiCeHua', null, null, null, '创意策划', '0', '创意策划', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('47', '46', 'ChanPinFuWuChaXunZhanShiXing', null, null, null, '产品(服务) 查询展示型', '0', '本类网站核心目的是推广产品(服务)，是企业的产品“展示框”。利用网络的多媒体技术、数据库存储查询技术、三维展示技术、配合有效的图片和文字说明，将 企业的产品(服务)充分展现给新老客户，使客户能全方位的了解公司产品。与产品印刷资料相比，网站可以营造更加直观的氛围和产品的感染力，促使商家及消费 者对产品产生采购欲望，从而促进企业销售。我们通过18年经验积累，总结十八种网站展示产品(服务)的方法，在视觉冲击、体验互动的过程中，让消费者产生 购买欲望。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('48', '46', 'PinPaiXuanChuanXing', null, null, null, '品牌宣传型', '0', '本类网站非常强调创意设计，但不同于一般的平面广告设计。网站利用多媒体交互技术、动态网页技术，配合广告设计、将企业品牌在互联网上发挥得淋漓尽致。本 类型网站着重展示企业CI、传播品牌文化、提高品牌知名度。对于产品品牌众多的企业，可以单独建立各个品牌的独立网站，以便市场营销策略与网站宣传统一。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('49', '46', 'QiYeShangWuHeKeHuFuWu', null, null, null, '企业商务和客户服务', '0', '通过互联网对企业客户提供远程、及时、准确的服务，是本类网站的核心目标。本网站可实现渠道分销、终端客户销售、合作伙伴管理、网上采购、实时在线服务、 物流管理、售后服务管理等，它将更进一步的优化企业现有的服务体系，实现公司对分公司、经销商、售后服务商、消费者的有效管理，加速企业的信息流、资金 流、物流的运转效率，降低企业经营成本，为企业创造额外收益，降低企业经营成本。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('50', '46', 'WangShangShangCheng', null, null, null, '网上商城', '0', '通过互联网对企业客户提供远程、及时、准确的服务，是本类网站的核心目标。本网站可实现渠道分销、终端客户销售、合作伙伴管理、网上采购、实时在线服务、 物流管理、售后服务管理等，它将更进一步的优化企业现有的服务体系，实现公司对分公司、经销商、售后服务商、消费者的有效管理，加速企业的信息流、资金 流、物流的运转效率，降低企业经营成本，为企业创造额外收益，降低企业经营成本。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('51', '46', 'QiYeXinXiMenHuGuanWang', null, null, null, '企业信息门户官网', '0', '通过互联网对企业客户提供远程、及时、准确的服务，是本类网站的核心目标。本网站可实现渠道分销、终端客户销售、合作伙伴管理、网上采购、实时在线服务、 物流管理、售后服务管理等，它将更进一步的优化企业现有的服务体系，实现公司对分公司、经销商、售后服务商、消费者的有效管理，加速企业的信息流、资金 流、物流的运转效率，降低企业经营成本，为企业创造额外收益，降低企业经营成本。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('52', '46', 'ZhengFuMenHuXinXi', null, null, null, '政府门户信息', '0', '该类网站主要体现政务信息公开，促进政府管理职责到位，落实公务人员的岗位责任，树立为社会服务的良好形象，提供优质的社会公众信息方步及政民互动服务。 网站面向公众，提供管理职能介绍、办事指南、监督举报、政策法规、动态信息、行政业务受理及审批查询，可公开的宏观数据查询等。政府门户信息网站更新信息 及数据非常严肃，必须具备严格的信息管理流程及安全机制。', '', '0', '1');
INSERT INTO `lc_product_sort` VALUES ('53', '46', 'Website Planning', null, null, null, '网站策划', '0', '企业网站的设计源于内容规划，企业做网站的内容取决于经营特点与市场分析，而网站建设的技术，则是实现内容和设计的最终保障，三者相互依存，缺一不可。\r\n因此，在网站策划阶段，我们会首先研究企业经营管理特点、网站运营目标，分析企业终端客户及市场状况，然后规划网站的内容与功能，根据网站的内容与功能再决定采用什么样的设计。最后，要实现符合网站需求的内容、功能与设计，我们还会规划稳定安全的技术方案做保障。', '', '0', '1');

-- ----------------------------
-- Table structure for `lc_recruitment`
-- ----------------------------
DROP TABLE IF EXISTS `lc_recruitment`;
CREATE TABLE `lc_recruitment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(150) NOT NULL,
  `alias` text NOT NULL,
  `des` text NOT NULL,
  `recruitment_num` int(11) NOT NULL COMMENT '招聘人数',
  `employ_num` int(11) NOT NULL COMMENT '应聘人数',
  `sort_id` int(11) NOT NULL COMMENT '所属部门',
  `salary` varchar(30) NOT NULL,
  `address` text NOT NULL COMMENT '工作地点',
  `experience` varchar(50) NOT NULL DEFAULT '1年' COMMENT '工作经验',
  `education` varchar(50) DEFAULT '大专' COMMENT '学历要求',
  `sart_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '开始时间',
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '截止时间',
  `nature` varchar(50) NOT NULL DEFAULT '全职' COMMENT '工作性质',
  `language` int(11) DEFAULT '1' COMMENT '招聘语言-默认为中文',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=gbk COMMENT='招聘表';

-- ----------------------------
-- Records of lc_recruitment
-- ----------------------------
INSERT INTO `lc_recruitment` VALUES ('3', '销售代表', 'XiaoShouDaiBiao', '岗位职责<br />\r\n<br />\r\n1、销售人员职位，在上级的领导和监督下定期完成量化的工作要求，并能独立处理和解决所负责的任务;<br />\r\n<br />\r\n2、管理客户关系，完成销售任务;<br />\r\n<br />\r\n3、了解和发掘客户需求及购买愿望，介绍自己产品的优点和特色;<br />\r\n<br />\r\n4、对客户提供专业的咨询;<br />\r\n<br />\r\n5、收集潜在客户资料;<br />\r\n<br />\r\n6、收取应收帐款;<br />\r\n<br />\r\n任职资格<br />\r\n<br />\r\n1、学历不限;<br />\r\n<br />\r\n2、1年以上销售行业工作经验，业绩突出者优先;<br />\r\n<br />\r\n3、性格外向、反应敏捷、表达能力强，具有较强的沟通能力及交际技巧，具有亲和力;<br />\r\n<br />\r\n4、具备一定的市场分析及判断能力，良好的客户服务意识;<br />\r\n<br />\r\n5、有责任心，能承受较大的工作压力;<br />\r\n<br />\r\n福利待遇：<br />\r\n1、工时制度:8小时 24天制(法定节不用上班);<br />\r\n2、公司不包吃住，签订正式劳动合同，购买社保，享受法定规定待遇<br />\r\n3、不定期公司活动，员工培训；<br />\r\n4、技术型公司，视能力决定待遇，只要你够叼，加薪不是问题；<br />\r\n5、有意者可直接投递简历，技术类请上传作品，本公司不接受网络面试，请直接前来公司面试；<br />\r\n<br />\r\n联系电话:400-186-9596 / 0755-33059400 / 13538100855 <br />\r\n<div>\r\n	<br />\r\n</div>\r\n<br />\r\n<p>\r\n	<br />\r\n</p>\r\n<span style=\"color:#666666;font-size:14px;\"></span>', '10', '0', '4', '3000~10000', '龙岗区南联路73号铭泰商务中心', '1年以上', '无', '2016-09-29 15:44:46', '2016-10-06 14:08:10', '销售代表', '1');
INSERT INTO `lc_recruitment` VALUES ('4', '客服专员/助理', 'KeFuZhuanYuanZhuLi', '<p>\r\n	岗位职责：<br />\r\n1、配合好客服专员维护客户系统后台，稳定效果<br />\r\n2、具备处理问题、安排进展、跟进进程、沟通及疑难问题服务的意识跟能力，遇到不能解决的问题按流<br />\r\n程提交相关人员或经理处理，并跟踪进展直至解决；<br />\r\n3、熟悉产品知识，针对公司现有的客户及对应的产品进行培训，让客户接受更为广泛的网络产品，达到<br />\r\n最好的网络营销的效果。<br />\r\n<br />\r\n任职资格：<br />\r\n1、高中以上学历，有一定客户服务知识和能力 。<br />\r\n2、计算机操作熟练，office办公软件使用熟练。<br />\r\n3、要求一定要有“客户为先”的服务精神，一切从帮助客户、满足客户角度出发。<br />\r\n4、性格要求沉稳、善于倾听，有同理心，乐观、积极。普通话标准、流利，反应灵敏。<br />\r\n5、热爱工作，敬业、勤恳，乐于思考，具有自我发展的主观愿望和自我学习能力。<br />\r\n<br />\r\n福利待遇：<br />\r\n1、工时制度:8小时 24天制(法定节假日除外);<br />\r\n2、公司不包吃住，签订正式劳动合同，购买社保，享受法定规定待遇<br />\r\n3、不定期公司活动，员工培训；<br />\r\n4、技术型公司，视能力决定待遇，只要你够叼，加薪不是问题；<br />\r\n5、有意者可直接投递简历，技术类请上传作品，本公司不接受网络面试，请直接前来公司面试；<br />\r\n<br />\r\n联系电话:400-186-9596 &nbsp;/ &nbsp;0755-33059400 &nbsp;/ &nbsp;13538100855<br />\r\n<br />\r\n</p>\r\n<span style=\"color:#999999;font-size:14px;\"></span>', '5', '0', '3', '3000~5000', '龙岗区南联路73号铭泰商务中心', '不限', '不限', '2016-09-05 14:08:37', '2016-10-14 14:08:24', '客服专员', '1');
INSERT INTO `lc_recruitment` VALUES ('6', 'PHP工程师', 'PHPGongChengShi', '<span style=\"color:gray;\"> \r\n<p>\r\n	<span style=\"color:#000000;\"><strong>岗位职责：</strong></span> \r\n</p>\r\n<p>\r\n	<span style=\"color:gray;\"><span style=\"color:#000000;\">1.配合团队及公司方案完成程序项目的开发工作;</span><br />\r\n<span style=\"color:#000000;\">2.配合团队完成项目的构架，开发思路，流程等工作;</span><br />\r\n<span style=\"color:#000000;\">3.团队写作，实现编程模块功能对接工作，及项目整体协调工作;</span><br />\r\n<span style=\"color:#000000;\">4.项目的维护，BUG修复，功能完善等后期工作;</span></span> \r\n</p>\r\n<p>\r\n	<span style=\"color:gray;\"><strong><br />\r\n</strong></span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#000000;\"><strong>任职资格：</strong></span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#000000;\">1、3年以上PHP实际项目编程经验,熟悉php编程、Mysql数据库设计维护和优化；</span><br />\r\n<span style=\"color:#000000;\">2、熟悉DIV+CSS网页布局 , HTML/XHTM/HTML5等Web技术；</span><br />\r\n<span style=\"color:#000000;\">3、熟悉jquery框架和ajax应用，对浏览器的兼容性有一定的掌握；</span><br />\r\n<span style=\"color:#000000;\">4、熟悉windows、Linux平台，可以独立配置生产环境；</span><br />\r\n<span style=\"color:#000000;\">5、熟悉MVC开发模式和OOP开发思想；</span><br />\r\n<span style=\"color:#000000;\">6、熟悉thinkphp、YIIl等框架；</span><br />\r\n<span style=\"color:#000000;\">7、有良好的代码习惯，要求结构清晰、命名规范</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#000000;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<strong><span style=\"color:#000000;\">福利待遇：</span></strong> \r\n</p>\r\n<p>\r\n	<strong><span style=\"color:#000000;\"></span><span style=\"color:#000000;\"></span></strong><span style=\"color:gray;\"> </span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#000000;\">1、工时制度:8小时 24天制(法定节假日除外);</span><br />\r\n<span style=\"color:#000000;\">2、公司不包吃住，签订正式劳动合同，购买社保，享受法定规定待遇</span><br />\r\n<span style=\"color:#000000;\">3、不定期公司活动，员工培训；</span><br />\r\n<span style=\"color:#000000;\">4、技术型公司，视能力决定待遇，只要你够叼，加薪不是问题；</span><br />\r\n<span style=\"color:#000000;\">5、有意者可直接投递简历，技术类请上传作品，本公司不接受网络面试，请直接前来公司面试；</span> \r\n</p>\r\n<p>\r\n	<br />\r\n<span style=\"color:#000000;\"></span> \r\n</p>\r\n<p>\r\n	<strong>面试时间:周一至周五 早上9：00-11：00 &nbsp;下午:14:30-17:00</strong><br />\r\n<span style=\"color:#000000;\"></span><span style=\"color:#000000;\"></span> \r\n</p>\r\n</span><br />\r\n<span style=\"color:#000000;\"></span> \r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style=\"color:#000000;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:gray;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:gray;\"><br />\r\n</span> \r\n</p>', '2', '0', '1', '8000-12000', '深圳市龙岗区', '3-5年', '不限', '2016-09-05 14:08:43', '2016-10-06 14:08:38', '全职', '1');

-- ----------------------------
-- Table structure for `lc_recruitment_sort`
-- ----------------------------
DROP TABLE IF EXISTS `lc_recruitment_sort`;
CREATE TABLE `lc_recruitment_sort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort_name` varchar(150) NOT NULL,
  `seo_title` varchar(150) DEFAULT NULL,
  `seo_description` text NOT NULL,
  `seo_keyword` text,
  `order` int(11) NOT NULL,
  `des` text NOT NULL,
  `alias` text NOT NULL,
  `email` varchar(150) NOT NULL COMMENT '部门邮箱',
  `language` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gbk COMMENT='招聘分类表';

-- ----------------------------
-- Records of lc_recruitment_sort
-- ----------------------------
INSERT INTO `lc_recruitment_sort` VALUES ('1', '技术部', '阿斯顿撒旦', '阿斯顿撒旦', '是第三代', '3', '技术部按时打算按时打算', 'jishubu', 'js@szlcnet.com', '1');
INSERT INTO `lc_recruitment_sort` VALUES ('3', '客服部', '客服部', '客服部', '客服部', '8', '客服部', 'KeFuBu', 'kf@szlcnet.com', '1');
INSERT INTO `lc_recruitment_sort` VALUES ('4', '商务部', '商务部', '商务部', '商务部', '0', '商务部', 'ShangWuBu', 'shiliu@szlcnet.com', '1');

-- ----------------------------
-- Table structure for `lc_resume`
-- ----------------------------
DROP TABLE IF EXISTS `lc_resume`;
CREATE TABLE `lc_resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(150) NOT NULL COMMENT '姓名',
  `tel` varchar(150) NOT NULL COMMENT '电话',
  `education` varchar(150) NOT NULL COMMENT '学历',
  `email` varchar(150) NOT NULL,
  `resume_doc` text NOT NULL COMMENT '简历',
  `production` varchar(150) NOT NULL,
  `job` int(11) NOT NULL COMMENT '求职岗位',
  `is_ready` int(11) NOT NULL DEFAULT '0' COMMENT '是否已经阅读',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `language` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk COMMENT='简历表';

-- ----------------------------
-- Records of lc_resume
-- ----------------------------

-- ----------------------------
-- Table structure for `lc_token`
-- ----------------------------
DROP TABLE IF EXISTS `lc_token`;
CREATE TABLE `lc_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `token` text NOT NULL COMMENT '秘钥',
  `des` varchar(50) NOT NULL COMMENT '令牌描述',
  `category_id` int(11) NOT NULL COMMENT '令牌类别',
  PRIMARY KEY (`id`),
  CONSTRAINT `lc_token_ibfk_1` FOREIGN KEY (`id`) REFERENCES `lc_token_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=gbk COMMENT='口令令牌-外部接口安全验证';

-- ----------------------------
-- Records of lc_token
-- ----------------------------
INSERT INTO `lc_token` VALUES ('1', '04391a96-9b29-dca0-fd2b-75abe1351fb7', 'crm系统-外部接口调用的token', '1');

-- ----------------------------
-- Table structure for `lc_token_category`
-- ----------------------------
DROP TABLE IF EXISTS `lc_token_category`;
CREATE TABLE `lc_token_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '令牌种类ID',
  `name` varchar(50) NOT NULL COMMENT '种类名称',
  `des` text COMMENT '种类描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=gbk COMMENT='口令令牌类型';

-- ----------------------------
-- Records of lc_token_category
-- ----------------------------
INSERT INTO `lc_token_category` VALUES ('1', 'CRM系统token', null);

-- ----------------------------
-- Table structure for `lc_user_copy`
-- ----------------------------
DROP TABLE IF EXISTS `lc_user_copy`;
CREATE TABLE `lc_user_copy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL COMMENT '等级',
  `register_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '注册时间',
  `integral` int(11) NOT NULL COMMENT '会员积分',
  `money` float NOT NULL COMMENT '余额',
  `state` int(11) NOT NULL COMMENT '会员状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk COMMENT='会员表';

-- ----------------------------
-- Records of lc_user_copy
-- ----------------------------

-- ----------------------------
-- Table structure for `lc_web_config`
-- ----------------------------
DROP TABLE IF EXISTS `lc_web_config`;
CREATE TABLE `lc_web_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web_title` text NOT NULL,
  `server_code` text,
  `web_keywords` varchar(150) DEFAULT NULL,
  `web_description` text,
  `web_address` text,
  `web_contact` varchar(150) NOT NULL,
  `web_phone` varchar(150) DEFAULT NULL,
  `web_fax` varchar(150) DEFAULT NULL,
  `web_email` varchar(180) DEFAULT NULL,
  `web_copyright` varchar(150) DEFAULT NULL,
  `web_company` varchar(150) DEFAULT NULL,
  `web_logo` text NOT NULL,
  `web_ewm` varchar(150) NOT NULL,
  `web_close` int(11) DEFAULT NULL,
  `tel_400` varchar(150) DEFAULT NULL,
  `qq` varchar(50) DEFAULT NULL,
  `language` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lc_web_config
-- ----------------------------
INSERT INTO `lc_web_config` VALUES ('1', '网络营销策划|网站建设|网络推广|系统开发|APP开发|移动开发|网站设计|网站策划|品牌网站|商城制作|创驰云网络-深圳市创驰云网络技术有限公司', '', '网络营销策划,网站建设,网络推广,系统开发,APP开发,移动开发网站设计,网站策划,品牌网站,商城制作,创驰云网络', '创驰云网络公司是一家集网络营销策划,网站建设,网络推广,系统开发,APP开发,移动开发网站设计,网站策划,品牌网站,商城制作为一体的综合性网络服务公司,主要业务为营销型网站建设制作,商城网站建设制作,手机网站制作,欢迎来电洽谈:0755-33059400!', '深圳市龙岗区龙翔大道9009号珠江国际中心18楼B1', '', '0755-33059400|33059401', '0755-33059400', 'mail@szlcnet.com', '粤ICP备15075516号-1', '深圳市创驰云网络技术有限公司', 'web_up_file/web_logo_spic/20170215155720313.jpg', '', '1', '400-186-9596', '691977539|317361652', '1');
INSERT INTO `lc_web_config` VALUES ('5', '请输入英文站点标题', null, null, null, null, '', null, null, null, null, null, '', '', null, null, null, '6');
