---
layout: post
title: Apache OFBiz News - June 2019
date: '2019-07-24T11:19:48+00:00'
permalink: apache-ofbiz-news-june-2019
---
## Apache OFBiz News June 2019

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about 'Getting Started with Apache OFBiz Manufacturing & MRP in 5 Easy Steps' tutorial by Sharan Foga, Apache Roadshow India along with our usual list of features, improvements and Statistics.

## Getting Started with Apache OFBiz Manufacturing & MRP in 5 Easy Steps tutorial by Sharan Foga is now under ASL v2

Sharan Foga has recently announced to release the copyright for this tutorial document &quot;Getting Started with Apache OFBiz Manufacturing &amp; MRP in 5 Easy Steps&quot; and contribute it under ASL v2.

The document is a ultimate resource for a novice end user who wants to understand what is available with OFBiz manufacturing &quot;out of the box&quot;.&nbsp;&nbsp;

Thank you so much, Sharan for this invaluable contribution. It will add a lot of value to the project.

A new confluence document will be created from PDF, updating the screenshots, etc. in original PDF document to sync with the latest OFBiz release.

Thanks Swapnil M Mane and&nbsp;Archana Asthana for putting efforts in this direction.&nbsp;

Initial version of improved document can be found <a href="https://cwiki.apache.org/confluence/x/Pw3HBg" target="_blank">here</a>.

Please refer to this&nbsp;[mail thread](https://markmail.org/message/uqdigrwu6flo2tit)&nbsp;for more details.

## Apache Roadshow India in 2020

<div>

Apache community is exploring the possibility of Apache Roadshow India in 2020.

<br>If the roadshow is approved, we are planning to have a dedicated OFBiz track.

</div>

Please refer to these mail threads, <a href="https://markmail.org/message/kwjnlahukn6ontk3" target="_blank">[1]</a>&nbsp;and <a href="https://s.apache.org/BJTl" target="_blank">[2]</a>&nbsp;for more details.&nbsp; &nbsp;

## <span style="letter-spacing: -0.018em;">OFBiz Statistics</span>

Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:

- **JIRA Issue Tracker:** <span style="color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">46</span>&nbsp;issues were opened and 42 issues were closed (13 different people helped to close these issues)
- **Code Change and Commit Activity:**
  - **Framework:** 112 commits to the code base that changed 5,798 lines of code (10 committers were active)
  - **Plugins:** 21 commits to the code base that changed 356 lines of code (5 committers were active)
- **Mailing Lists:**
  - **Dev:** 185 emails sent and 35 topics discussed (37 different people)
  - **User:** 103 emails sent and 30 topics discussed (36 different people)

  <p> </p>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Adds Debug error statement for freemarker 'OFBIZ\_DEFAULT\_HANDLER' to make debugging easier. ([OFBIZ-10817](https://issues.apache.org/jira/browse/OFBIZ-10817))
- Refactors class ‘EntityDataLoadContainer’. ([OFBIZ-11070](https://issues.apache.org/jira/browse/OFBIZ-11070))
- Adds missing ‘static’ modifier for private methods. ([OFBIZ-11098](https://issues.apache.org/jira/browse/OFBIZ-11098))
- Uses the ‘Deque’ interface in ‘ContainerLoader’. ([OFBIZ-11099](https://issues.apache.org/jira/browse/OFBIZ-11099))
- Extracts ‘intersects’ predicate in a method. ([OFBIZ-11099](https://issues.apache.org/jira/browse/OFBIZ-11099))
- Updates Tomcat to 9.0.21. ([OFBIZ-11102](https://issues.apache.org/jira/browse/OFBIZ-11102))
- Adds unit test case for service - CreateReturnStatus. ([OFBIZ-8860](https://issues.apache.org/jira/browse/OFBIZ-8860))
- Removes the Gradle wrapper jar. ([OFBIZ-10145](https://issues.apache.org/jira/browse/OFBIZ-10145))
- Adds JUnit test case for creating a retrun header. ([OFBIZ-8808](https://issues.apache.org/jira/browse/OFBIZ-8808))
- Adds unit test case for service - GetReturnAmountByOrder. ([OFBIZ-8861](https://issues.apache.org/jira/browse/OFBIZ-8861))
- Refactors Gradle createPlugin task to reflect the actual file/folder structure of scripts. ([OFBIZ-10903](https://issues.apache.org/jira/browse/OFBIZ-10903))
- Adds unit test case for service - getPayments. ([OFBIZ-9092](https://issues.apache.org/jira/browse/OFBIZ-9092))
- Improves order detail page. ([OFBIZ-7257](https://issues.apache.org/jira/browse/OFBIZ-7257))
- Adds unit test case for service - CheckCreateStockRequirementQoh. ([OFBIZ-8939](https://issues.apache.org/jira/browse/OFBIZ-8939))
- Provides JSON entity data import and export utility. ([OFBIZ-10966](https://issues.apache.org/jira/browse/OFBIZ-10966))
- Rewrites ‘ComponentConfig#getAllClasspathInfos’. ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Rewrites ‘ComponentConfig#getAllConfigurations’ ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Rewrites ‘ComponentConfig#getAllKeystoreInfos’. ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Rewrites ‘ComponentConfig#getAllServiceResourceInfos’. ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Rewrites ‘ComponentConfig#getAllTestSuiteInfos’. ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Rewrites ‘ComponentConfig#getAllWebappResourceInfos’. ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Inlines ‘ComponentConfig#isFileResourceLoader’. ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Rewrites ‘ComponentConfig#getKeystoreInfo’. ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Rewrites ‘ComponentConfig#getAllEntityResourceInfos’. ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Adds ‘ComponentConfig#matchingComponentName’ static method. ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Adds ‘ComponentConfig#components’ static method. ([OFBIZ-11101](https://issues.apache.org/jira/browse/OFBIZ-11101))
- Inlines ‘StringUtil#toMap’. ([OFBIZ-11014](https://issues.apache.org/jira/browse/OFBIZ-11014))
- Makes private methods static when possible. ([OFBIZ-10966](https://issues.apache.org/jira/browse/OFBIZ-10966))
- Removes dead code. ([OFBIZ-10966](https://issues.apache.org/jira/browse/OFBIZ-10966))
- Adds missing generics. ([OFBIZ-10966](https://issues.apache.org/jira/browse/OFBIZ-10966))
- Uses ‘ServletRequest#getServletContext’ when possible. ([OFBIZ-11129](https://issues.apache.org/jira/browse/OFBIZ-11129))
- Adds static method ‘RequestHandler#from’. ([OFBIZ-11129](https://issues.apache.org/jira/browse/OFBIZ-11129))
- Refactors ‘trackStats’ and ‘trackVisit’. ([OFBIZ-11130](https://issues.apache.org/jira/browse/OFBIZ-11130))
- Uses try with resources in ‘readXmlDocument’. ([OFBIZ-8202](https://issues.apache.org/jira/browse/OFBIZ-8202))
- Removes useless ‘null’ check in ‘EventFactory’. ([OFBIZ-10911](https://issues.apache.org/jira/browse/OFBIZ-10911))
- Factorizes collecting events defined in 'controller.xml'. ([OFBIZ-10453](https://issues.apache.org/jira/browse/OFBIZ-10453))
- Rewrites ‘loadHandlerMap’. ([OFBIZ-10453](https://issues.apache.org/jira/browse/OFBIZ-10453))
- Explains how the previous item is handled when rendering form. ([r1862227](https://svn.apache.org/viewvc?view=revision&revision=1862227))

### Plugins

- Adds missing ‘static’ modifier for private methods. ([OFBIZ-11098](https://issues.apache.org/jira/browse/OFBIZ-11098))
- Updates Tomcat to 9.0.21. ([OFBIZ-11102](https://issues.apache.org/jira/browse/OFBIZ-11102))
- Provides better use of ‘ServletRequest#getServletContext’. ([OFBIZ-11129](https://issues.apache.org/jira/browse/OFBIZ-11129))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: Create New Product Promo screen should have Create Button instead of Update. ([OFBIZ-11104](https://issues.apache.org/jira/browse/OFBIZ-11104))
- Fixes: Create New Shipment screen should have Create button instead of Update button. ([OFBIZ-11117](https://issues.apache.org/jira/browse/OFBIZ-11117))
- Fixes log message: 'Unknown request [images]; this request does not exist or cannot be called directly'. ([OFBIZ-10895](https://issues.apache.org/jira/browse/OFBIZ-10895))
- Removes override directives to let the system perform proper validation of user input. ([r1860592](https://svn.apache.org/viewvc?view=revision&revision=1860592))
- Fixes: Html escaping missing for renderLink parameters. ([OFBIZ-11090](https://issues.apache.org/jira/browse/OFBIZ-11090))
- Provides fine tuning for sanitization of user input by allowing 'safe' content. ([r1860613](https://svn.apache.org/viewvc?view=revision&revision=1860613))
- Fixes: Profile of contact person not shown on quick add of contact in SFA. ([OFBIZ-7816](https://issues.apache.org/jira/browse/OFBIZ-7816))
- Fixes typo in the NOTICE file content. ([r1861615](https://svn.apache.org/viewvc?view=revision&revision=1861615))
- Fixes: Promotion condition/action type of few promotion not showing. ([OFBIZ-10794](https://issues.apache.org/jira/browse/OFBIZ-10794))
- Fixes: AutoDescription of promotion showing invalid text. ([OFBIZ-10853](https://issues.apache.org/jira/browse/OFBIZ-10853))
- Fixes: Issue with Status of invoice. ([OFBIZ-10310](https://issues.apache.org/jira/browse/OFBIZ-10310))
- Fixes: Getting an error while creating event from SFA without providing event name. ([OFBIZ-11109](https://issues.apache.org/jira/browse/OFBIZ-11109))
- Fixes: Issue of agreement overview does not show names of parties. ([OFBIZ-10900](https://issues.apache.org/jira/browse/OFBIZ-10900))
- Fixes: Issue in which eCommerce anonymous contactus was having wrong fromAddress. ([OFBIZ-10844](https://issues.apache.org/jira/browse/OFBIZ-10844))
- Fixes: Logo image not showing on party profile. ([OFBIZ-9299](https://issues.apache.org/jira/browse/OFBIZ-9299))
- Allows to create a single file if both directory and filename is provided by user. ([OFBIZ-11124](https://issues.apache.org/jira/browse/OFBIZ-11124))
- Fixes: No proper error message displayed if user misses to select entities in exporting XML data. ([OFBIZ-11125](https://issues.apache.org/jira/browse/OFBIZ-11125))
- Fixes: User should be notified with success message on MRP run in manufacturing component. ([OFBIZ-9533](https://issues.apache.org/jira/browse/OFBIZ-9533))
- Adds missing import. ([OFBIZ-10453](https://issues.apache.org/jira/browse/OFBIZ-10453))
- Fixes: supplierProductId should have consistent types across entities. ([OFBIZ-10150](https://issues.apache.org/jira/browse/OFBIZ-10150))

### Plugins

- Fixes: Request details are overlapping with language and cart summary. ([OFBIZ-10739](https://issues.apache.org/jira/browse/OFBIZ-10739))
- Fixes: eCommerce image distorted in trunk demo main page. ([OFBIZ-11095](https://issues.apache.org/jira/browse/OFBIZ-11095))
- Fixes: Wrong page title displayed on contact us page of eCommerce. ([OFBIZ-11062](https://issues.apache.org/jira/browse/OFBIZ-11062))
- Fixes: Blank page appears after using Tell-A-Friend functionality while adding item to cart. ([OFBIZ-10885](https://issues.apache.org/jira/browse/OFBIZ-10885))
- Fixes: UI issue on Contact Us page of eCommerce application. ([OFBIZ-11061](https://issues.apache.org/jira/browse/OFBIZ-11061))
- Fixes: Last Categories section is blank. ([OFBIZ-10858](https://issues.apache.org/jira/browse/OFBIZ-10858))
