---
layout: post
title: Apache OFBiz News - June 2019
date: '2019-07-24T11:19:48+00:00'
permalink: apache-ofbiz-news-june-2019
---
<h2>Apache OFBiz News June 2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have more news about 'Getting Started with Apache OFBiz Manufacturing & MRP in 5 Easy Steps' tutorial by Sharan Foga, Apache Roadshow India along with our usual list of features, improvements and Statistics.</p> 
  <h2>Getting Started with Apache OFBiz Manufacturing & MRP in 5 Easy Steps tutorial by Sharan Foga is now under ASL v2</h2> 
  <p>Sharan Foga has recently announced to release the copyright for this tutorial document &quot;Getting Started with Apache OFBiz Manufacturing &amp; MRP in 5 Easy Steps&quot; and contribute it under ASL v2.</p> 
  <p>The document is a ultimate resource for a novice end user who wants to understand what is available with OFBiz manufacturing &quot;out of the box&quot;.&nbsp;&nbsp;</p> 
  <p>Thank you so much, Sharan for this invaluable contribution. It will add a lot of value to the project.</p> 
  <p>A new confluence document will be created from PDF, updating the screenshots, etc. in original PDF document to sync with the latest OFBiz release.</p> 
  <p>Thanks Swapnil M Mane and&nbsp;Archana Asthana for putting efforts in this direction.&nbsp;</p> 
  <p>Initial version of improved document can be found <a href="https://cwiki.apache.org/confluence/x/Pw3HBg" target="_blank">here</a>.</p> 
  <p>Please refer to this&nbsp;<a href="https://markmail.org/message/uqdigrwu6flo2tit">mail thread</a>&nbsp;for more details.</p> 
  <h2>Apache Roadshow India in 2020</h2> 
  <div>Apache community is exploring the possibility of Apache Roadshow India in 2020.
<br>If the roadshow is approved, we are planning to have a dedicated OFBiz track. 
</div> 
  <p>Please refer to these mail threads, <a href="https://markmail.org/message/kwjnlahukn6ontk3" target="_blank">[1]</a>&nbsp;and <a href="https://s.apache.org/BJTl" target="_blank">[2]</a>&nbsp;for more details.&nbsp; &nbsp;</p> 
  <h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:</p> 
  <ul> 
    <li><strong>JIRA Issue Tracker:</strong> <span style="color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">46</span>&nbsp;issues were opened and 42 issues were closed (13 different people helped to close these issues)</li> 
    <li><strong>Code Change and Commit Activity:</strong> 
      <ul> 
        <li><strong>Framework: </strong>112 commits to the code base that changed 5,798 lines of code (10 committers were active)</li> 
        <li><strong>Plugins: </strong>21 commits to the code base that changed 356 lines of code (5 committers were active)</li> 
      </ul> 
    </li> 
    <li><strong>Mailing Lists:</strong> 
      <ul> 
        <li><strong>Dev: </strong>185 emails sent and 35 topics discussed (37 different people)</li> 
        <li><strong>User: </strong>103 emails sent and 30 topics discussed (36 different people)</li> 
      </ul> 
    </li> 
  </ul> 
  <p> </p> 
 <h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Adds Debug error statement for freemarker 'OFBIZ_DEFAULT_HANDLER' to make debugging easier. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10817">OFBIZ-10817</a>) </li>

    <li>Refactors class ‘EntityDataLoadContainer’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11070">OFBIZ-11070</a>) </li>

    <li>Adds missing ‘static’ modifier for private methods. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11098">OFBIZ-11098</a>) </li>

    <li>Uses the ‘Deque’ interface in ‘ContainerLoader’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11099">OFBIZ-11099</a>) </li>

    <li>Extracts ‘intersects’ predicate in a method. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11099">OFBIZ-11099</a>) </li>

    <li>Updates Tomcat to 9.0.21. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11102">OFBIZ-11102</a>) </li>

    <li>Adds unit test case for service - CreateReturnStatus. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8860">OFBIZ-8860</a>) </li>

    <li>Removes the Gradle wrapper jar. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10145">OFBIZ-10145</a>) </li>

    <li>Adds JUnit test case for creating a retrun header. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8808">OFBIZ-8808</a>) </li>

    <li>Adds unit test case for service - GetReturnAmountByOrder. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8861">OFBIZ-8861</a>) </li>

    <li>Refactors Gradle createPlugin task to reflect the actual file/folder structure of scripts. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10903">OFBIZ-10903</a>) </li>

    <li>Adds unit test case for service - getPayments. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9092">OFBIZ-9092</a>) </li>

    <li>Improves order detail page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7257">OFBIZ-7257</a>) </li>

    <li>Adds unit test case for service - CheckCreateStockRequirementQoh. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8939">OFBIZ-8939</a>) </li>

    <li>Provides JSON entity data import and export utility. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10966">OFBIZ-10966</a>) </li>

    <li>Rewrites ‘ComponentConfig#getAllClasspathInfos’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Rewrites ‘ComponentConfig#getAllConfigurations’ (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Rewrites ‘ComponentConfig#getAllKeystoreInfos’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Rewrites ‘ComponentConfig#getAllServiceResourceInfos’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Rewrites ‘ComponentConfig#getAllTestSuiteInfos’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Rewrites ‘ComponentConfig#getAllWebappResourceInfos’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Inlines ‘ComponentConfig#isFileResourceLoader’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Rewrites ‘ComponentConfig#getKeystoreInfo’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Rewrites ‘ComponentConfig#getAllEntityResourceInfos’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Adds ‘ComponentConfig#matchingComponentName’ static method. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Adds ‘ComponentConfig#components’ static method. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11101">OFBIZ-11101</a>) </li>

    <li>Inlines ‘StringUtil#toMap’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11014">OFBIZ-11014</a>) </li>

    <li>Makes private methods static when possible. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10966">OFBIZ-10966</a>) </li>

    <li>Removes dead code. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10966">OFBIZ-10966</a>) </li>

    <li>Adds missing generics. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10966">OFBIZ-10966</a>) </li>

    <li>Uses ‘ServletRequest#getServletContext’ when possible. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11129">OFBIZ-11129</a>) </li>

    <li>Adds static method ‘RequestHandler#from’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11129">OFBIZ-11129</a>) </li>

    <li>Refactors ‘trackStats’ and ‘trackVisit’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11130">OFBIZ-11130</a>) </li>

    <li>Uses try with resources in ‘readXmlDocument’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8202">OFBIZ-8202</a>) </li>

    <li>Removes useless ‘null’ check in ‘EventFactory’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10911">OFBIZ-10911</a>) </li>

    <li>Factorizes collecting events defined in 'controller.xml'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10453">OFBIZ-10453</a>) </li>

    <li>Rewrites ‘loadHandlerMap’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10453">OFBIZ-10453</a>) </li>

   <li>Explains how the previous item is handled when rendering form. (<a href="https://svn.apache.org/viewvc?view=revision&revision=1862227">r1862227</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Adds missing ‘static’ modifier for private methods. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11098">OFBIZ-11098</a>) </li>

    <li>Updates Tomcat to 9.0.21. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11102">OFBIZ-11102</a>) </li>

    <li>Provides better use of ‘ServletRequest#getServletContext’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11129">OFBIZ-11129</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes: Create New Product Promo screen should have Create Button instead of Update. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11104">OFBIZ-11104</a>) </li>

    <li>Fixes: Create New Shipment screen should have Create button instead of Update button. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11117">OFBIZ-11117</a>) </li>

    <li>Fixes log message: 'Unknown request [images]; this request does not exist or cannot be called directly'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10895">OFBIZ-10895</a>) </li>

    <li>Removes override directives to let the system perform proper validation of user input. (<a href="https://svn.apache.org/viewvc?view=revision&revision=1860592">r1860592</a>) </li>

    <li>Fixes: Html escaping missing for renderLink parameters. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11090">OFBIZ-11090</a>) </li>

    <li>Provides fine tuning for sanitization of user input by allowing 'safe' content. (<a href="https://svn.apache.org/viewvc?view=revision&revision=1860613">r1860613</a>) </li>

    <li>Fixes: Profile of contact person not shown on quick add of contact in SFA. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7816">OFBIZ-7816</a>) </li>

    <li>Fixes typo in the NOTICE file content. (<a href="https://svn.apache.org/viewvc?view=revision&revision=1861615">r1861615</a>) </li>

    <li>Fixes: Promotion condition/action type of few promotion not showing. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10794">OFBIZ-10794</a>) </li>

    <li>Fixes: AutoDescription of promotion showing invalid text. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10853">OFBIZ-10853</a>) </li>

    <li>Fixes: Issue with Status of invoice. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10310">OFBIZ-10310</a>) </li>

    <li>Fixes: Getting an error while creating event from SFA without providing event name. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11109">OFBIZ-11109</a>) </li>

    <li>Fixes: Issue of agreement overview does not show names of parties. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10900">OFBIZ-10900</a>) </li>

    <li>Fixes: Issue in which eCommerce anonymous contactus was having wrong fromAddress. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10844">OFBIZ-10844</a>) </li>

    <li>Fixes: Logo image not showing on party profile. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9299">OFBIZ-9299</a>) </li>

    <li>Allows to create a single file if both directory and filename is provided by user. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11124">OFBIZ-11124</a>) </li>

    <li>Fixes: No proper error message displayed if user misses to select entities in exporting XML data. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11125">OFBIZ-11125</a>) </li>

    <li>Fixes: User should be notified with success message on MRP run in manufacturing component. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9533">OFBIZ-9533</a>) </li>

    <li>Adds missing import. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10453">OFBIZ-10453</a>) </li>

    <li>Fixes: supplierProductId should have consistent types across entities. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10150">OFBIZ-10150</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes: Request details are overlapping with language and cart summary. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10739">OFBIZ-10739</a>) </li>

    <li>Fixes: eCommerce image distorted in trunk demo main page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11095">OFBIZ-11095</a>) </li>

    <li>Fixes: Wrong page title displayed on contact us page of eCommerce. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11062">OFBIZ-11062</a>) </li>

    <li>Fixes: Blank page appears after using Tell-A-Friend functionality while adding item to cart. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10885">OFBIZ-10885</a>)</li>

    <li>Fixes: UI issue on Contact Us page of eCommerce application. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11061">OFBIZ-11061</a>) </li>

    <li>Fixes: Last Categories section is blank. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10858">OFBIZ-10858</a>) </li>

</ul>


