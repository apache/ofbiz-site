---
layout: post
title: " Apache OFBiz News - June 2018 "
date: '2018-07-17T08:36:49+00:00'
permalink: apache-ofbiz-news-june-2018
---
<h2>Apache OFBiz News June 2018 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have more news about how our community is sharing knowledge and helping to support new users, we welcome three new committers and we share some OFBiz technical statistics.
<!--more--> 
<h2>Sharing Community Knowledge</h2>
During May and June we have continued to receive questions and requests for help to get OFBiz setup for different scenarios. Manufacturing seems to be the module currently getting a few questions on our mailing list. Please see below for a few of the queries that our community has responded to: 
<ul>
<li><a href="https://s.apache.org/gVF8" target="_blank" rel="noopener">  Adding Actual Labor to the Manufacturing Process</a></li>
<li><a href="https://s.apache.org/I0yj" target="_blank" rel="noopener">  Defining a Product Store for E-Commerce.</a></li>
<li><a href="https://s.apache.org/RvDt" target="_blank" rel="noopener"> Product Costing </a> </li>
<li><a href="https://s.apache.org/7Dtj" target="_blank" rel="noopener"> OFBiz and USPS Integration </a> </li>
</ul>

It is great to see that our community is keen to share their knowledge and experience with new OFBiz users. If you have a question or query about Apache OFBiz then please feel free to post a message to our user mailing list and our community will do its best to respond and support you.
<h2>New Committers</h2>
During June the Project Management Committee (PMC) invited three new Committers, Aditya Sharma, Swapnil M. Mane and Suraj Khurana. Please join us in welcoming and congratulating Aditya, Swapnil and Suraj in their new role on the project, and also thanking them for all their contributions.
<h2>OFBiz Technical Statistics</h2>
This month using the ASF online project statistics tool (kibble.apache.org), we have decided to focus on some of the technical aspects of the projects and give you some statistics around the development work that is ongoing. 
Commits:
<ul><li>OFBiz currently has over 2.4 million lines of code, over 300,000 lines of comments and over 200,000 blank lines! (NOTE: At its highest there was over 3.5 million lines of code so the refactoring and code clean up effort is working!</li>
<li>Over the last 3 months, 15,765 lines have been changed by 13 of our committers using 155 commits</li>
<li>The most active repository for commits is the ofbiz-framework with 77% of commits</li>
<li>The top 3 most active committers were Jacques Le Roux, Deepak Dixit and Rishi Solanki!</li>
</ul>
Dev Mailing Lists:
<ul><li>Over the last 3 months, on our dev mailing list,  918 emails have been sent by 87 different people discussing 175 different topics</li>
<li>Some of the main discussion topics were a proposal regarding  <a href="https://s.apache.org/Xgwl" target="_blank" rel="noopener">  bootstrap and vue.js in OFBiz</a> and also a discussion related to <a href="https://s.apache.org/C4NT" target="_blank" rel="noopener">  Licence Issue with iText 4.2.0</a>
</li>
</ul>
Jira:
<ul><li>We have had 9 newcomers to the project that have been helping with contributions to Jira issues</li>
<li>1 returning contributor (someone who has contributed in the past but not on a regular basis) and;</li>
<li>36 regular contributors to the OFBiz Jira>/li>
<li>Over the last 3 months 103 issues were opened, 63 issues closed, 29 different people creating issues and 13 different people closing them</li>
</ul>
Thanks to everyone who has contributed to make the project what it is today, and also to all the new contributors who are continually joining our community and helping to improve OFBiz.

<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Add a VERSION file in root dir. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10141">OFBIZ-10141</a>)
This adds a VERSION file to store the release version information</li>
 	<li>Add Support for Disable attribute in CheckBox Form Widget. Disabled attribute can be used as
&lt;field&gt;&lt;check disabled=true/&gt;&lt;/field&gt; and default value for attribute will be false. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10367">OFBIZ-10367</a>)</li>
 	<li>Remove unused code in `CommonEvents::setFollowerPage` (<a href="https://issues.apache.org/jira/browse/OFBIZ-10413">OFBIZ-10413</a>)</li>
 	<li>Improve XML parsing with more restrictive settings (<a href="https://issues.apache.org/jira/browse/OFBIZ-10435">OFBIZ-10435</a>)</li>
 	<li>Don't guess the system file separator (<a href="https://issues.apache.org/jira/browse/OFBIZ-10428">OFBIZ-10428</a>)
The JVM already knows the file separator of the current system when running Gradle so use that value instead of guessing from the operating system property.</li>
 	<li>Use functional programming in build script (<a href="https://issues.apache.org/jira/browse/OFBIZ-10429">OFBIZ-10429</a>)
No functional change, the idea is to have more declarative code.</li>
 	<li>Use list literals when possible (<a href="https://issues.apache.org/jira/browse/OFBIZ-10431">OFBIZ-10431</a>)
No functional change. List literals feels simply more readable.</li>
 	<li>Use `in` and spread operator in `gradlewSubprocess` (<a href="https://issues.apache.org/jira/browse/OFBIZ-10431">OFBIZ-10431</a>)
No functional change. The idea of using the spread operator is to have less mutation involved. In Groovy, using operator overloads like in is more idiomatic than using explicitly the associated method.</li>
 	<li>Make accounting entry configurable. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10391">OFBIZ-10391</a>)</li>
 	<li>Improve Hindi UiLables. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10362">OFBIZ-10362</a>)</li>
 	<li>Enable drop-ship PO feature at product store and product facility level as well, applied patch from jira issue with slightly changes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9987">OFBIZ-9987</a>)</li>
 	<li>Define generic types in (<a href="https://issues.apache.org/jira/browse/OFBIZ-10355">OFBIZ-10355</a>)</li>
 	<li>Add method attribute to request-map to controll a uri can be called GET or POST only <a href="https://issues.apache.org/jira/browse/OFBIZ-10438">OFBIZ-10438</a>
The request-map element has a new method attribute to control a uri be called by GET or POST or all.</li>
 	<li>Adds missing license headers (<a href="https://issues.apache.org/jira/browse/OFBIZ-10245">OFBIZ-10245</a>)</li>
 	<li>Add method attribute to request-map to controll a uri can be called GET or POST only <a href="https://issues.apache.org/jira/browse/OFBIZ-10438">OFBIZ-10438</a>
ControlServlet.java returned to the previous doGet/doPost structure.</li>
 	<li>Add method attribute to request-map to controll a uri can be called GET or POST only <a href="https://issues.apache.org/jira/browse/OFBIZ-10438">OFBIZ-10438</a>
Add apache license to MethodNotAllowedException.java.</li>
 	<li>Factorize code logic from ConfigXMLReader (<a href="https://issues.apache.org/jira/browse/OFBIZ-10453">OFBIZ-10453</a>)
There is a lot of repetitive code in ConfigXMLReader. Using a functional interface as a parameter of a generic algorithm avoids those repetitions.</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>Session fixation issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-10420">OFBIZ-10420</a>)
Prevents the session fixation by making Tomcat generate a new jsessionId (ultimately put in cookie).</li>
 	<li>The first visit event are not executed in case of CMS (<a href="https://issues.apache.org/jira/browse/OFBIZ-10389">OFBIZ-10389</a>)</li>
 	<li>Streaming large content cause out of memory exception. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10133">OFBIZ-10133</a>)
With r1821036 DataResourceWorker.getDataResourceStream() may return an InputStream (if the data resource is a file) instead of a ByteArrayInputStream which was expected in few places.</li>
 	<li>Incorrect succes mesage after creating customer. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9898">OFBIZ-9898</a>)</li>
 	<li>Values are not aligned with column over EditShoppingList Screen, applied patch from jira issue. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10210">OFBIZ-10210</a>)</li>
</ul>
<h2>Documentation</h2>
