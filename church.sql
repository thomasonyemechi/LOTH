-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 10:04 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `sn` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(1000) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(300) DEFAULT NULL,
  `category` varchar(4) DEFAULT NULL,
  `detail` mediumtext,
  `photo` varchar(100) DEFAULT NULL,
  `rep` varchar(20) DEFAULT NULL,
  `ctime` int(11) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`),
  UNIQUE KEY `sn` (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`sn`, `slug`, `title`, `subtitle`, `category`, `detail`, `photo`, `rep`, `ctime`, `status`, `created`) VALUES
(10, '10469-hwdcbdahcbh', 'Why did i Drink this hennessy', 'downloads\n\ncommunity chatapp\n\ncommunity newsfield\n\ncategory update by admins\n\nbetter display of profile on both admin part and user pannel\n', '7', '<p class="excert">\n                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you\n                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a\n                                fraction of the camp price. However, who has the willpower\n                            </p>\n                            <p>\n                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you\n                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a\n                                fraction of the camp price. However, who has the willpower to actually sit through a\n                                self-imposed MCSE training. who has the willpower to actually\n                            </p>\n                            <div class="quote-wrapper">\n                                <div class="quotes">\n                                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you\n                                    should have to spend money on boot camp when you can get the MCSE study materials yourself at\n                                    a fraction of the camp price. However, who has the willpower to actually sit through a\n                                    self-imposed MCSE training.\n                                </div>\n                            </div>\n                            <p>\n                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you\n                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a\n                                fraction of the camp price. However, who has the willpower\n                            </p>\n                            <p>\n                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you\n                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a\n                                fraction of the camp price. However, who has the willpower to actually sit through a\n                                self-imposed MCSE training. who has the willpower to actually\n                            </p>', 'arccon.jpg', 'buf1dfnylr', 1596056855, 1, '2020-08-19 08:56:53'),
(11, '10047-comming-from-club-cuban', 'Comming from club cuban', 'downloads\n\ncommunity chatapp\n\ncommunity newsfield\n\ncategory update by admins\n\nbetter display of profile on both admin part and user pannel\n', '7', '<p>Payment Integration<br />\r\nPayment Gateway is the service that automates the payment transaction between you and your customers. At Livepetal, we help you integrate payment gateway that allows hitch-free payment transactions which is necessary for your business through secure internet connections.<br />\r\nWe create test merchant account that allows you to integrate with the payment gateway at your end and helps you test all facilities. Our integrated payment gateway helps you check the transactions taking place on your website and allows you to refund transactions if required.<br />\r\nAt Livepetal, we help you integrate Payment gateways that fulfill a vital role in the e-commerce transaction process, authorizing the payment between you and your customer.<br />\r\nYour payment transaction can flow as smooth as possible when you allow us handle your payment integration.</p>\r\n\r\n<p>2D animation<br />\r\nColourful, quirky videos and images can effectively promote your business without losing its primary motive.2D animation is an amazing way to communicate a purpose to your target audience. Our animations blend ideas and emotions seamlessly to market your business among its audience through e-commerce sites, Books, Entertainment and Education<br />\r\nAt Livepetal, we help you create 2D animation&nbsp;in an amazing way to communicate your business to your target audience.<br />\r\nWe&nbsp;focus on creating characters, storyboards, and backgrounds in two-dimensional environments.<br />\r\n&nbsp;Our 2D animation can be used as a promotional and marketing element. Our designers are always available to perfect your 2D animation for better influence on your consumers&rsquo; decisions.&nbsp;At Livepetal, we offer you high-quality and distinguishing 2D animation.</p>\r\n\r\n<p>Prototype design<br />\r\nA prototype design is a simulation or sample version of your final product, which is used for testing prior to launch. The goal of a prototype is to test your products (and product ideas) before sinking lots of time and money into the final product.<br />\r\nAt Livepetal, prototyping is comparatively speedy and wouldn&rsquo;t slow down your project.<br />\r\nWe design Prototypes that meet the specifications and requirements provided to us. We design prototype that help you anticipate higher costs, needed changes and potential project hurdles. The prototype we design here at Livepetal ensures your product quality and savings for years to come.<br />\r\nOur designers are always available for your feedback, requested project changes and alterations to model specifications.<br />\r\nArchitectural concept.<br />\r\nGood architecture is often overlooked by a lot of people, and they don&#39;t often think about the elements that make it good. To most people, sometimes it&#39;s just another building. However for us at Livepetal, it is so much more.<br />\r\nWe understand that good architecture enhances our daily lives enhance productivity and boost profits. Here at Livepetal, our creative team helps you create Architectural concepts from three key areas;<br />\r\nUltimately our goal at Livepetal is to help you create architectural concepts to push the boundaries and present you with a unique, creative, beautiful, yet functional and practical solution.<br />\r\nAutocad Design<br />\r\nAutoCAD software is an industry proven and dynamic engineering model which is used on a large scale basis by many engineering professionals as well as organizations for various applications. At Livepetal, we help you to create diverse kinds of drawings and designs, two dimensional and three-dimensional models of solid surfaces and meshes and architectural drawings through the use of AutoCAD.<br />\r\nWith innovative ideas and creative imagination, we help you create different solutions for your intending projects. We also provide you with effective and better design for any mechanical product, detailing &amp; drafting and construction of building.<br />\r\nHere at Livepetal, we understand the need for speed and economy in the delivery of projects as such our turnaround time is very fast</p>\r\n\r\n<p>Technical Documentation<br />\r\nTechnical documentation refers to any document that explains the use, functionality, creation, or architecture of a product. We create documentations for:<br />\r\nEnd-user support:&nbsp; user guides, release notes, online help systems, training programs or operating procedures.<br />\r\nMarketing support:&nbsp; explainer videos, presentations or technical landing pages<br />\r\nDevelopment support:&nbsp; functional and technical specifications, software development guides, or simply procedures and tools to help your developers do their jobs.<br />\r\nOrganization support:&nbsp;Information about your company, structure, procedures, workflows, policies, and anything else your teammates need to know to do their jobs.<br />\r\nAt Livepetal, we realize that technical documentation matters, not only does it help your users achieve their goals for using your product, it is also a guide for your users, new hires, administrators, and anyone else who needs to know how your product works.<br />\r\nAt Livepetal, we get this and so we create your technical documentation not just to capture information put help you to present it in a way that is easy to read, usable, and&nbsp;actually helpful for your audience (end-users, administrators, colleagues or technicians)<br />\r\nAt Livepetal, we realize that your technical document is more than just for customer support but helps brand building and trust. We will help create for you a document that is clear, searchable, and helpful&nbsp;.While back in the day most of these documents would come as physical guides for users, today, most technical documentation should be available on your website or help pages (which is also great for SEO).</p>\r\n\r\n<p>&nbsp;</p>', 'LOTHLOTH2.jpg', 'oy6ab5u6ss', 1596724052, 1, '2020-08-19 08:57:01'),
(12, '10629-live-a-free-life-without-dating', 'live a free life without dating', 'downloads\n\ncommunity chatapp\n\ncommunity newsfield\n\ncategory update by admins\n\nbetter display of profile on both admin part and user pannel\n', '8', '<p>Website design<br />\r\nWeb design is a process of conceptualizing, planning, and building a collection of electronic files that determine the layout, colors, text styles, structure, graphics, images, and use of interactive features that deliver pages to your site visitors. Everything about your website - including the content, the way it looks, and the way it works - is determined by the website design.<br />\r\n&nbsp;Here at Livepetal our design team ensure that our&nbsp; webpages are designed with a focus on simplicity, so that no extraneous information and functionality that might distract or confuse users.Our web design is easy to use, aesthetically pleasing, and suits our user group and brand of the website.<br />\r\nA website is more than just a signpost for your business, it is so much more. We at Livepetal understand this and that is why we put in so much to ensure a well designed and functional site for you.<br />\r\nGraphics design.<br />\r\nGraphic design is the art and practice of planning and projecting ideas and experiences with visual and textual content. In other terms, graphic design communicates certain ideas or messages in a visual way.Our designs can be used by your company to promote and sell your products through advertising.Our designs help to convey complicated information in a digestible way through infographics.Our designs help your business to develop an identity through branding, among other things.<br />\r\nOur end goal is to make your organization recognizable and prominent. By using a variety of media,our designs communicate a particular idea or identity to be used in advertising and promoting your business.</p>\r\n\r\n<p>Logo design.<br />\r\n&nbsp;Your logo is so important that when a picture of your business comes to mind, people immediately picture your logo.Likewise, when you see a logo, you&rsquo;re familiar with, you&rsquo;ll immediately associate it with your memories, experiences, and interactions with the brand.<br />\r\nLogo is a design that is used by an organization for its letterhead, advertising material, and signs as an emblem by which the organization can easily be recognized. Your logo forms expectations of your company, and if it fails to meet those expectations, or if your business attracts the wrong people, things will start to go downhill &ndash; wasted time and money serving people that won&rsquo;t become your customers, and potentially even bad reviews from disappointed customers&hellip; getting the logo right matters.<br />\r\nAt Livepetal, we understand this. We provide you with a customized logo that speaks to your customers.<br />\r\nBanner design<br />\r\nBanner design is a fundamental component of online branding. When marketing your business&rsquo; products and services, catering to the visual component of your target audience&rsquo;s purchasing intent and behavior is a crucial factor. Banners are among the most prevalent forms of graphic design used to market services at present.&nbsp; We at Livepetal understand this and our bannersare well designed to announce upcoming events by your brand, or happenings related to the services offered by your brand. As a business owner, we can help you market your products and attract prospects through posting your banners on ad-hosting sites. We also create banners for blogs to provide a summary or sneak-peak of what the article is all about.<br />\r\nYour banner speaks a lot about your business and we can help you achieve this at Livepetal.<br />\r\nWordPress website<br />\r\nWordPress is an excellent website platform for a variety of websites. From blogging to e-commerce to business and portfolio websites, WordPress is a versatile content management system (CMS). WordPress is a great solution for both large and small websites.<br />\r\nWe design with usability and flexibility of the website you have in mind.WordPress website is good for you because of its simplicity, flexibility and security.At Livepetal, we help you build a mobile friendly, fast and easy to useWordPress website.</p>\r\n\r\n<p>Digital marketing<br />\r\nDo you know that your customers are online hanging out on social media, staying up to date on news sites and blogs, and searching online when they have a need.<br />\r\nDigital marketing puts you in those same channels, so your best prospects see you, learn more about you, and even ask questions to learn more about you and your products or services.<br />\r\nDigital marketing is the act of promoting and selling products and services by leveraging online marketing tactics&nbsp;such as social media marketing, search engine marketing, and email marketing.Having a strong digital presence will help you in multiple ways.<br />\r\nAt Livepetal, our marketing expertshelp you market your products or services at the right time and in the right place, create awareness and engagement&nbsp;both before and after the sale of your products,convert new buyers&nbsp;into rabid fans who buy more (and more often). We shorten the&nbsp;buyer&#39;s journey&nbsp;by presenting your product to them at the right time.<br />\r\nAt Livepetalwe are ready to boost your online and offline business with our effective marketing campaign.</p>\r\n\r\n<p>SEO(search engine optimization)<br />\r\nBillions of searches are conducted online every single day and many people search for specific products and services with the intent to pay for these things. These searches have&nbsp;commercial intent, meaning&nbsp;they are clearly indicating with their search that they want to buy something you offer.<br />\r\nSEO is optimizing your online content so that a search engine likes to show it as a top result for searches of a certain keyword.Here at Livepetal, we provide you the expertise needed in order to make search engines include your posts, articles, products and services as one of their top results whenever someone searches for them.<br />\r\nBusiness branding<br />\r\nWith Business branding, your company can create a name, symbol or design that is easily identifiable as belonging to your company. Branding is important because not only does it make a memorable impression on your customers but it also allows your customers and clients to know what to expect from your company.<br />\r\nOur goal at Livepetal,is to help you make a brand that distinguishes you from your competitors and clarifying what it is you offer that makes you the better choice. At Livepetal we will create your brand to be a true representation of who you are as a business, and how you wish to be perceived.<br />\r\nWe help you develop your brand through top notchadvertisement, customer service, promotional merchandise, reputation, and logo design which will improve how customers perceive your brand.</p>\r\n\r\n<p>Software development<br />\r\nAt Livepetal we are involved in all activities related to the process of creating, designing, deploying and supporting software which can help improve the way you do business.Our softwares are guaranteed to increase your productivity and efficiency. We have a wide range of software solutions and even better you can customize your software development process to meet your unique business needs.<br />\r\n&nbsp;At Livepetal we give you the unique opportunity to choose the operations and functionality that your software should have.<br />\r\nOur programmers are passionate about developing softwares that will boost your business.</p>\r\n\r\n<p><br />\r\nMobile Applications<br />\r\nAs more and more people are entering into the mobile world through their smart gadgets there is an increasing need for you to engage them on these platforms.<br />\r\nAt Livepetal, we can bring you into this world by building your mobile app software intended to run on your mobile devices and optimized to take advantage of your product&#39;s unique features and hardware.<br />\r\nAt Livepetal, we can help you develop apps made for a wide range of purposes, be it entertainment, e-commerce portals for existing businesses or little enhancements that add functionality to the base features of the end-user&rsquo;s phone or devices.<br />\r\nIf you are in search of a mobile developer for your mobile application, Livepetal is a smart choice for you.<br />\r\n3D Modelling<br />\r\n3D modeling is a technique in 3D computer graphics for producing a 3D digital representation of any object or surface. The 3D modeling process produces a digital object capable of being fully animated, making it an&nbsp;essential process&nbsp;for character animation and special effects.At livepetal, we model 3D that are used for a variety of mediums including video games, movies, architecture, illustration, engineering, and commercial advertising. We also model 3D programs which allow the creation of a 2D images using a process called 3D rendering.<br />\r\nLet us help you model a fantastic hyper-realistic scene using our sophisticated lighting algorithms.</p>\r\n\r\n<p>Accounting Software<br />\r\nWe have Accounting software that helps you automate&nbsp;your book keeping and records and accounting processes.At Livepetal, we also create unique software that include several functional modules such as accounts payable, accounts receivable, payroll and trial balance, general ledger, timesheets among many others. At Livepetal, we take pride in our software being able to handle all aspects of your finance management.<br />\r\nYour business doesn&rsquo;t have to get complicated, get an accounting software here at Livepetal.</p>\r\n\r\n<p><br />\r\nWeb Content Development<br />\r\nAt Livepetal, we develop Web content that supports and promotes your online presence.<br />\r\nThroughout the course of developing your web content, we at Livepetalwill brainstorm, plan, research, organize, and create content for your online publications. We develop web content development plan that promotes your business through various medium such as text, images, audio, and video.<br />\r\nIn today&rsquo;s technological age, your business needs a good web content which we at Livepetal provide you and your business.</p>\r\n\r\n<p><br />\r\ne-Commerce<br />\r\nYou can take your business online by using an e-Commerce web application which is a platform for your customer&nbsp;shopping&nbsp;online and processing their payment. It would allow visitors to shop your products and securely enter their payment information to complete their purchase.<br />\r\nAt Livepetal, we design a good e-commerce websitethat will convince visitors to purchase your products and services. We make your e-commerce website attractive to your potential customers, provide&nbsp;great&nbsp;user experience and present your shop in the best light.<br />\r\nIn order to start your&nbsp;e-Commerce&nbsp;business, you need to put three&nbsp;components&nbsp;together: an&nbsp;eCommerce&nbsp;website, a payment system and an effective marketing strategy.At Livepetal, we provide all three components in a seamless package.</p>\r\n\r\n<p>PowerPoint Presentation<br />\r\nGreat presentations are supported by well-designed slides but it&#39;s only when something is wrong with a slide design&nbsp;that you&#39;ll notice how design can be problematic in a presentation<br />\r\nAt Livepetal, We create your own custom&nbsp;templates&nbsp;which can be stored, reused and shared with others. We also cover the basics of your presentation design and give subtle details that go a long way in designing a visually pleasing presentation for you. if you&#39;re looking to use ready-made presentation designs to shorten the process, you&nbsp; can hire a PowerPoint designer at Livepetal. You can save valuable time when you need to get a beautiful presentation, done quickly by using our team.</p>\r\n\r\n<p>Database development.<br />\r\nAs you now know, the organized collection of data is what makes up a database. The process actually starts with database design, which requires creating a detailed data model of the database that&#39;s to be built.This model includes all logical and physical design patterns that will be utilized to create the database.<br />\r\nNowadays, it is extremely important for businesses to keep their data safe and holistic. We can help you with a well-structured data that can facilitate better customer service, marketing, and sales.<br />\r\nWe specialized in database development and creating databases for varying amounts of data storage.<br />\r\nOur services include database optimization, debugging, troubleshooting, and monitoring services to solve performance issues.<br />\r\nHere, at Livepetal, our database developers offer forms development, reports automation, advanced search features and much more for your database.<br />\r\nWe can integrate your database in any smartphone or tablet.<br />\r\nIf you need a professional database development partner to discuss any question concerning your idea, our experts will be glad to help you and discuss your database development needs with you.</p>\r\n\r\n<p>Product design<br />\r\nProduct design describes the process of imagining, creating, and iterating products that solve users&rsquo; problems or address specific needs in a given market.<br />\r\nwe can help you design product that is pleasing to your customer, easy to open, install and use.<br />\r\nWe Designed Products that can be easily differentiated from others in the market<br />\r\nwe will&nbsp; product design your product in such a way that it optimally performs the main task or function for which it is purchased by your buyer, therefore the product satisfying the needs and wants of the consumer.<br />\r\nThe product must be designed in such a way that it can be easily repaired whenever necessary during a malfunction.Repair cost must be low<br />\r\nConsumers prefer to purchase which perform their main function or task optimally for a longer period without any failure.<br />\r\nA durable product performs flawlessly for a longer period.It is a sign of a good-quality product. Consumers want their products to have a longer life. They do not want to replace their products repeatedly.<br />\r\nProduct must be designed in such a way that it can be Produced in large quantities, and in less time.the simpler a design, the easier, it is to produce and use. &bull; The product must have the least number of operations without affecting its functionality.</p>', '1954904.jpg', 'oy6ab5u6ss', 1597050398, 1, '2020-08-19 08:57:05'),
(13, '10513-software-development', 'software Development', NULL, '5', '<p>kbkk</p>', '1955028.jpg', 'oy6ab5u6ss', 1597872852, 1, '2020-08-19 21:34:12'),
(14, '10237-web-design', 'Web Design', NULL, '4', '<p>jlhjkkkjngg</p>', '1954880.jpg', 'oy6ab5u6ss', 1597872880, 1, '2020-08-19 21:34:40'),
(15, '10204-logo-design', 'logo Design', NULL, '5', '<p>k bkb jb</p>', '1954934.jpg', 'oy6ab5u6ss', 1597872905, 1, '2020-08-19 21:35:05'),
(16, '10561-politics', 'politics', NULL, '1', '<p>kjnkplnobh</p>', '1954974.jpg', 'oy6ab5u6ss', 1597872929, 1, '2020-08-19 21:35:29'),
(17, '10424-web-design', 'Web Design', NULL, '4', '<p>khblojnknl</p>', '196100.jpg', 'oy6ab5u6ss', 1597872954, 1, '2020-08-19 21:35:54'),
(18, '11084-digital-marketing', 'Digital Marketing', NULL, '8', '<p>kblbnjnbljkjbnkj</p>', '1954885.jpg', 'oy6ab5u6ss', 1597873060, 1, '2020-08-19 21:37:40'),
(19, '10462-logo-design', 'logo Design', NULL, '4', '<p>kjbkjnlkn</p>', '853609.jpg', 'oy6ab5u6ss', 1597873079, 1, '2020-08-19 21:37:59'),
(20, '10480-this-is-a-blog-ooh', 'This is a blog ooh', NULL, '4', '<p>lsfnlsfn</p>', '1954952.jpg', 'oy6ab5u6ss', 1597873306, 1, '2020-08-19 21:41:46'),
(21, '10075-light-on-the-hill-top', 'Light on the hill top', NULL, '7', '<p>nvfejbvlnfl fljk em ofmow</p>', '1954882.jpg', 'oy6ab5u6ss', 1597873346, 1, '2020-08-19 21:42:26'),
(22, '10951-digital-marketing', 'Digital Marketing', 'This is the sumaary for cludin in the cuban of africa what else do you want to just do coomon talk nahh', '7', '<p>kjjb kjnbjnjkj,</p>', 'Br0hsZ.jpg', 'oy6ab5u6ss', 1597873430, 1, '2020-08-21 01:16:26'),
(23, '10720-digital-marketing', 'Digital Marketing', 'This is the sumaary for cludin in the cuban of africa what else do you want to just do coomon talk nahh', '5', '<p>khb kb kj</p>', '1954887.jpg', 'oy6ab5u6ss', 1597873444, 1, '2020-08-21 01:16:19'),
(24, '10963-clubing-in-the-cuban-og-africa', 'clubing In the cuban og africa', 'This is the sumaary for cludin in the cuban of africa what else do you want to just do coomon talk nahh', '7', '<p>This is the sumaary for cludin in the cuban of africa what else do you want to just do coomon talk nahh</p>', '1954904.jpg', 'oy6ab5u6ss', 1597896045, 1, '2020-08-20 04:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `blogcomment`
--

CREATE TABLE IF NOT EXISTS `blogcomment` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `blogid` varchar(10) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `userid` varchar(15) DEFAULT NULL,
  `comment` varchar(5000) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `blogcomment`
--

INSERT INTO `blogcomment` (`sn`, `blogid`, `username`, `email`, `userid`, `comment`, `ctime`, `created`) VALUES
(1, '10', 'Thomas Onyemechi', 'thomasonyemechi03@gmail.com', '0', 'My Message for today', 1596160604, '2020-07-31 01:56:44'),
(2, '10', 'Thomas Onyemechi', 'thomasonyemechi03@gmail.com', '0', 'My Message for today', 1596160806, '2020-07-31 02:00:06'),
(3, '10', 'Layo Ademide', 'layo@gmail.com', '0', 'Your email address will not be published. Required fields are marked Your email address will not be published. Required fields are markedYour email address will not be published. Required fields are marked', 1596178526, '2020-07-31 06:55:26'),
(4, '10', 'Bayde Caydduk', 'bayde@gmail.com', '0', 'Windows PowerShell\r\nCopyright (C) 2015 Microsoft Corporation. All rights reserved.', 1596178696, '2020-07-31 06:58:16'),
(6, '10', 'Admin admin', 'admin@gmail.com', 'buf1dfnylr', 'This ismy comment for today educate about some loprem', 1596179631, '2020-07-31 07:13:51'),
(7, '10', 'temidayo Ayodeji', 'ayo@g', '0', '', 1596297856, '2020-08-01 16:04:16'),
(8, '10', 'temidayo Ayodeji', 'ayo@gmail.com', '0', 'iquebfcihwecfhbwdhkcbkhdcv wwdchj wchwj chfwd cfd chwdvc dbcnbkwnkhd', 1596297891, '2020-08-01 16:04:51'),
(9, '10', 'nimi braid', 'braid@gmail.com', 'oy6ab5u6ss', 'i dont do that', 1597050462, '2020-08-10 09:07:42'),
(10, '10', 'nimi braid', 'braid@gmail.com', 'oy6ab5u6ss', 'rwhfbvebfvyhbfgv', 1597050492, '2020-08-10 09:08:12'),
(11, '10', 'nimi braid', 'braid@gmail.com', 'oy6ab5u6ss', 'comment', 1597551309, '2020-08-16 04:15:09'),
(12, '12', 'nimi braid', 'braid@gmail.com', 'oy6ab5u6ss', 'as it was before inever know how iw will let oyu go', 1597551906, '2020-08-16 04:25:06'),
(13, '12', 'nimi braid', 'braid@gmail.com', 'oy6ab5u6ss', '', 1597782996, '2020-08-18 20:36:36'),
(14, '12', 'nimi braid', 'braid@gmail.com', 'oy6ab5u6ss', 'lmlkmlk', 1597783131, '2020-08-18 20:38:51'),
(15, '22', 'nimi braid', 'braid@gmail.com', 'oy6ab5u6ss', 'noso', 1597877402, '2020-08-19 22:50:02'),
(16, '24', 'nimi braid', 'braid@gmail.com', 'oy6ab5u6ss', 'rvfrbvrg bnhtrynht b negn rhynhtbnthntr yhn rh tnhyrnegnrthnb', 1597915704, '2020-08-20 09:28:24');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `id` varchar(200) DEFAULT NULL,
  `subtitle` varchar(1000) DEFAULT NULL,
  `detail` varchar(10000) DEFAULT NULL,
  `filename` longblob,
  `photo` varchar(150) DEFAULT NULL,
  `rep` varchar(20) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`sn`, `title`, `id`, `subtitle`, `detail`, `filename`, `photo`, `rep`, `created`) VALUES
(1, 'Search The Scripture', NULL, 'searching the scripture and knowing what is in it', '<p>not all about searching the scripture</p>', 0x4c697665706574616c206f6e6c696e65206d61726b6574696e672063616d706169676e2e646f6378, 'livepetal-refer-nd-earn_01.png', 'oy6ab5u6ss', '2020-08-09 08:23:58'),
(2, 'Loving toyur negibour', NULL, 'loving your people as you love your own self at all times', '<p>not all about showing love tothe people around you</p>', 0x6465732e646f6378, 'livepetal-refer-nd-earn_04.png', 'oy6ab5u6ss', '2020-08-09 08:27:20'),
(3, 'the best of soul winning', NULL, 'about winning souls for you lord and personal savior', '<p>not all about winning souls for you lord and personal savior</p>', 0x636f72726563746564206a6f62206465736372697074696f6e20666f72204c697665706574616c2e646f6378, 'livepetal-refer-nd-earn_06.png', 'oy6ab5u6ss', '2020-08-09 08:29:26'),
(4, 'Secret To Successful Living', 'u3t4ukq27f', 'This is aal the faqs that is contain in hte livepetal system both for service and registered member and also for non registered members', '<p>s aal the faqs that is contain in hte livepetal system both for service and registered member and also for non registered members</p>\n<p>s aal the faqs that is contain in hte livepetal system both for service and registered member and also for non registered members</p>\nvsvfsfsf\n<p>s aal the faqs that is contain in hte livepetal system both for service and registered member and also for non registered members</p>\nahcadbvhkadbvkahskkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkbdkhvnbkhdsnbgvkhwdnv\n<p>s aal the faqs that is contain in hte livepetal system both for service and registered member and also for non registered members</p>\n\n', 0x353434464151732e646f6378, '48394413_2268664400034960_287804762072547328_o.jpg', NULL, '2020-08-19 22:54:06'),
(5, 'Will you ever be this happy', 'zv7wjh9up5', 'his is aal the faqs that is contain in hte livepetal system both for service and registered member and also for non registered members', '<p>his is aal the faqs that is contain in hte livepetal system both for service and registered member and also for non registered members</p>\r\n', 0x37313569626d2d617069732d666f722d64756d6d6965732d3372642d69626d2d6c696d697465642d65646974696f6e5f57534d31343032355553454e2e706466, '53741184_2317685778466155_7941256455695368192_n.jpg', NULL, '2020-08-20 04:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `sn` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `rep` varchar(20) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`),
  UNIQUE KEY `sn` (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`sn`, `title`, `rep`, `ctime`, `created`) VALUES
(1, 'politics', 'buf1dfnylr', 1595925569, '2020-07-30 07:24:46'),
(4, 'Education', 'buf1dfnylr', 1596054500, '2020-07-30 07:24:56'),
(5, 'Lifestyle', 'buf1dfnylr', 1596054766, '2020-07-30 07:25:05'),
(7, 'Clubing', 'buf1dfnylr', 1596055116, '2020-07-30 07:25:35'),
(8, 'dating', 'oy6ab5u6ss', 1597050191, '2020-08-10 09:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `senderid` varchar(50) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`sn`, `senderid`, `category`, `message`, `timestamp`, `status`) VALUES
(1, '3', 1, 'uweabfuwfbuyef', '2020-08-10 14:15:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `book` varchar(50) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`sn`, `userid`, `category`, `book`, `created`) VALUES
(1, 'oy6ab5u6ss', NULL, NULL, '2020-08-20 04:18:48'),
(2, 'oy6ab5u6ss', NULL, NULL, '2020-08-20 04:19:17'),
(3, 'oy6ab5u6ss', NULL, NULL, '2020-08-20 04:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `subtitle` varchar(10000) DEFAULT NULL,
  `location` varchar(1000) DEFAULT NULL,
  `edate` varchar(20) DEFAULT NULL,
  `flyer` varchar(100) DEFAULT NULL,
  `detail` mediumtext,
  `rep` varchar(20) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`sn`, `title`, `subtitle`, `location`, `edate`, `flyer`, `detail`, `rep`, `ctime`, `created`) VALUES
(1, 'Sunday Worship Service', 'Offers for social media\n40 clients in 40 days get you 40k worth of reward find out more. www.livepetal.com\nMake 40k in 40days  www.livepetal.com\nDo you want to make 40k in 40 days? Let me show you ', 'Deeper Life Bible Church Akure', '2020-08-09', '1954896.jpg', 'Excepteur sint occaecat <img class="card-img rounded-0" src="admin/images/1954898.jpg" >cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.', 'buf1dfnylr', 1596195049, '2020-07-31 21:22:19'),
(2, 'Youth Success Camp', 'Offers for social media\n40 clients in 40 days get you 40k worth of reward find out more. www.livepetal.com\nMake 40k in 40days  www.livepetal.com\nDo you want to make 40k in 40 days? Let me show you ', 'Deeper Life Bible Church Akure ondo', '2020-07-31', '1954881.jpg', '<p class="excert">\n                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you\n                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a\n                                fraction of the camp price. However, who has the willpower\n                            </p>\n                            <p>\n                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you\n     <img class="card-img rounded-0" src="admin/images/1954898.jpg; ?>" alt="" width="10%">                           should have to spend money on boot camp when you can get the MCSE study materials yourself at a\n                                fraction of the camp price. However, who has the willpower to actually sit through a\n                                self-imposed MCSE training. who has the willpower to actually\n                            </p>\n                            <div class="quote-wrapper">\n                                <div class="quotes">\n                                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you\n                                    should have to spend money on boot camp when you can get the MCSE study materials yourself at\n                                    a fraction of the camp price. However, who has the willpower to actually sit through a\n                                    self-imposed MCSE training.\n                                </div>\n                            </div>\n                            <p>\n                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you\n                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a\n                                fraction of the camp price. However, who has the willpower\n                            </p>\n      <img class="card-img rounded-0" src="admin/images/1954898.jpg" >                      <p>\n                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you\n                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a\n                                fraction of the camp price. However, who has the willpower to actually sit through a\n                                self-imposed MCSE training. who has the willpower to actually\n                            </p>', 'buf1dfnylr', 1596195218, '2020-07-31 21:22:25'),
(3, 'Home Sucess Fellowship', 'Cras sit amet nibh libero, in gOffers for social media\n40 clients in 40 days get you 40k worth of reward find out more. www.livepetal.com\nMake 40k in 40days  www.livepetal.com\nDo you want to make 40k in 40 days? Let me show you ravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo', 'united states of Nigeria', '2020-08-05', '1954882.jpg', '<p>Offers for social media<br />\r\n40 clients in 40 days get you 40k worth of reward find out more. www.livepetal.com<br />\r\nMake 40k in 40days&nbsp; www.livepetal.com<br />\r\nDo you want to make 40k in 40 days? Let me show you how. www.livepetal.com<br />\r\nEarn 40k from the comfort of your sofa? www.livepetal.com<br />\r\nEarn big @ www.livepetal.com. 40 clients will earn you 40k. no stress no hassles.<br />\r\nAt livepetal we give you the opportunity to make some extra cash. How? Just refer 40 people within 40days and you automatically get 40k. It&rsquo;s that simply really. www.livepetal.com<br />\r\nWe make earning very easy at livepetal. Refer just 40 people within 40 days and get 40k. why wait ?www.livepetal.com<br />\r\nWe make earning very easy at livepetal. Refer just 40 people within 40 days and get 40k. Start now. www.livepetal.com<br />\r\nRefer and earn big. Unbelievable offer: 40k within 40 days. What are you waiting for sign up right away @ www.livepetal.com<br />\r\nThe bonus that keeps on giving.&nbsp; Get 100 naira on every one who registers through your link.<br />\r\nOffer lasts for 7 days<br />\r\n7 day &ldquo;refer and earn&rdquo; offer exclusively for you. Every registration via your link keeps you earning.<br />\r\nDo you know how much the cumulative of 100naira can be? Earn as many 100 naira as possible at&nbsp; www.Livepetal.com for every registration through your referral link.&nbsp; Note: paid registration gets additional referral bonus. Offer valid for 7days<br />\r\nYou can make thousands of naira within 7 days. Want to know how?&nbsp; www.Livepetal.com&nbsp;&nbsp;&nbsp; &nbsp;<br />\r\nEarn as much as you like at www.Livepetal.com. You earn 100naira on every registration through your referral link and additional referral bonus on every paid registration.</p>\r\n\r\n<p>&nbsp;</p>', 'oy6ab5u6ss', 1596230385, '2020-07-31 21:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `magzine`
--

CREATE TABLE IF NOT EXISTS `magzine` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `id` varchar(500) DEFAULT NULL,
  `subtitle` varchar(1000) DEFAULT NULL,
  `detail` varchar(10000) DEFAULT NULL,
  `filename` varchar(200) DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `rep` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `magzine`
--

INSERT INTO `magzine` (`sn`, `title`, `id`, `subtitle`, `detail`, `filename`, `photo`, `rep`, `created`) VALUES
(1, 'will i ever be free', NULL, 'JUST ALL ABOUT FICTION', '<p>FICTION</p>', '378WILL I EVER BE FREE BY HAPPINESS AJAYI.pdf', 'livepetal-refer-nd-earn_02.png', 'oy6ab5u6ss', '2020-08-09 01:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(400) DEFAULT NULL,
  `subtitle` varchar(1000) DEFAULT NULL,
  `detail` mediumtext,
  `photo` varchar(200) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `rep` varchar(20) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`sn`, `title`, `subtitle`, `detail`, `photo`, `ctime`, `rep`, `created`) VALUES
(1, 'How to study the blible daily', 'This is the 2020 world tour and it gonnabe wonder ful am hoping t do good ther what about other people that are coming to the concert how about you yourselt is it good for you to do tht', '<p>How to study the blible daily</p>', '1954898.jpg', 1596190546, 'buf1dfnylr', '2020-07-31 21:52:20'),
(4, 'celine dion live concert', '<p>The call to action is what you want people to do. If the marketing campaign youâ€™re creating is aimed at the Subscribe stage of the Customer Journey, your call to action might be for people to download a whitepaper, checklist, or video resource. If itâ€™s a campaign in the Convert or Ascend stage, your call to action might be to buy a product or service. If the campaign you are creating is for the Awareness stage, the call to action might be as simple as listening to a podcast episode or reading a blog post.<br />The traffic source could be digital clicks from ads, email, social media sites, or search engines like Google. Offline marketing could include direct mail, TV, or radio advertising, print ads, or anything else that gets the call to action in front of your prospects.<br />The purpose of a marketing campaign is to intentionally move people from one stage of the Value Journey to the next.<br />You cannot possibly create one campaign that makes people aware of you, engages the', '<p>celine dion live concert</p>', '1954882.jpg', 1596232057, 'oy6ab5u6ss', '2020-08-10 09:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `crreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`sn`, `email`, `ctime`, `crreated`) VALUES
(1, 'thomasonyemechi03@gmail.com', 1596181050, '2020-07-31 07:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE IF NOT EXISTS `timeline` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `category` int(4) DEFAULT NULL,
  `note` text,
  `photo` varchar(10000) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`sn`, `id`, `userid`, `category`, `note`, `photo`, `ctime`, `created`) VALUES
(1, '4676548829382136944223671138952943878784', 'oy6ab5u6ss', 1, 'THis is too seriuos', '', 1597934735, '2020-08-20 19:51:35'),
(4, '8494974738524186659384243357331951788553', 'oy6ab5u6ss', 2, 'downloads..........\r\n\r\ncommunity chatapp\r\n\r\ncommunity newsfield\r\n\r\ncategory update by admins\r\n\r\nbetter display of profile on both admin part and user pannel\r\n\r\nadmin dashboard\r\n\r\npagination on blogpage............\r\n\r\nsahring and reading of testimoniess\r\n\r\nforgot and changepassword\r\n\r\ndelete account\r\n\r\nadd admins and validate users\r\n\r\nupdate profile picture\r\n\r\nupcoming and past event', '853609.jpg', 1597950868, '2020-08-20 19:14:28'),
(6, '5854536156198964777584221912235686857841', '5nv9xdx47x', 2, 'my name is titilayo i am a futa student annd i pretty good', '1955028.jpg', 1597965232, '2020-08-20 23:13:52'),
(7, '3645653371833285424495157627233951463476', '5nv9xdx47x', 2, '', '100829336_2673603516207711_570310303300976640_n.jpg', 1597966273, '2020-08-20 23:31:13'),
(8, '4188639264857254432658212685426716153953', 'oy6ab5u6ss', 2, '', '53741184_2317685778466155_7941256455695368192_n.jpg', 1597966394, '2020-08-20 23:33:15'),
(9, '6889713258128482717848698331642554188971', '5nv9xdx47x', 2, 'vibing the vibes valid', 'IMG_20200605_071923.jpg', 1598120652, '2020-08-22 18:24:12'),
(10, '1742182468959682182991191888785235167953', '5nv9xdx47x', 2, 'no se', '95538750_3021272694597022_5833576311664849050_n.jpg', 1598120742, '2020-08-22 18:25:42'),
(11, '7626189566947738845775113719425397891611', '5nv9xdx47x', 2, '', '106902195_2708610856040310_7678697858868668102_n.jpg', 1598120768, '2020-08-22 18:26:08'),
(12, '7541989318384271632678296688257435246381', '5nv9xdx47x', 2, '', '101683736_1199191540444041_2274913790074028032_o.jpg', 1598120801, '2020-08-22 18:26:41'),
(13, '5669226644462648659598872933321765715917', '5nv9xdx47x', 2, '', 'BeautyPlus_20200506165604674_save.jpg', 1598120840, '2020-08-22 18:27:20'),
(14, '8299122719879563921463461845158442893114', '5nv9xdx47x', 2, '', '105357534_146537916952112_5590471743024242201_n.jpg', 1598120923, '2020-08-22 18:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `sn` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id` varchar(15) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `type` int(3) NOT NULL DEFAULT '1',
  `pass` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `sex` varchar(9) DEFAULT NULL,
  `photo` varchar(150) NOT NULL DEFAULT 'user.png',
  `bio` mediumtext,
  `dob` varchar(20) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  `ctime` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `sn` (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sn`, `id`, `firstname`, `lastname`, `email`, `category`, `phone`, `type`, `pass`, `country`, `state`, `city`, `address`, `sex`, `photo`, `bio`, `dob`, `status`, `ctime`, `created`) VALUES
(1, 'buf1dfnylr', 'admin', 'admin', 'admin@gmail.com', 3, '09038772366', 7, '$2y$10$PB2Qz1eYtD22h2rG4MmNxejwD2NU.KtXH0xKrbRY9JZ/0fgucVkK2', 'nigeria', NULL, 'akuure', 'ondo state nigeria', NULL, 'user.png', 'my bio', NULL, 1, 0, '2020-08-02 15:13:39'),
(2, 'oy6ab5u6ss', 'nimi', 'braid', 'braid@gmail.com', 2, '09038772366', 2, '$2y$10$ZevL0JYSmOZ5KPXCZRTPRebUcgEWci0JSPi1qfX8Rb9DvjdtQESii', 'nigeria', NULL, 'akure', 'state@gmail.com', NULL, '105357534_146537916952112_5590471743024242201_n(1).jpg', 'i am a good girl', NULL, 1, 0, '2020-08-23 10:05:58'),
(3, 'lg8iwn3tko', 'thomas', 'onyemechi', 'thomasonyemechi03@gmail.com', 1, '09038772366', 1, '$2y$10$9Q3fCviQo50J58meaPqtFuF0uQJruGEUvamF4X0oW19c0d/NyZkS.', 'nigeria', NULL, 'kastina', 'no 100b dodikoyi akure', 'M', 'user.png', 'i am a boy', NULL, 1, 0, '2020-08-16 08:29:20'),
(4, '5nv9xdx47x', 'aladesuyi', 'titilayomi', 'aladesuyi@gmail.com', 2, '08065658231', 1, '$2y$10$fFfPIsIbJk1iRf2DRS2PRezlGIzfL1Iu0QzLkPrjcg4rFcvPwcKqK', NULL, NULL, NULL, NULL, NULL, '106902195_2708610856040310_7678697858868668102_n.jpg', NULL, NULL, 1, 1597601259, '2020-08-23 10:01:54');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
