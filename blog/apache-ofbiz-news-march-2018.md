---
layout: post
title: 'Apache OFBiz News - March 2018 '
date: '2018-04-16T07:26:12+00:00'
permalink: apache-ofbiz-news-march-2018
---
<h2>Apache OFBiz News March 2018 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have more news about our documentation effort, we start allocating documentation mentors to people who would like them, we move our documentation discussions onto the dev mailing list, the community helps respond to questions about the OFBiz Manufacturing and MRP module, and our PMC grows larger.
<!--more--> 
<h2>Move of Documentation Topics to Dev Mailing List</h2><p>If you are interested in keeping up to date with our documentation effort and have been wondering why there haven't been many conversations happening on our user list, then it's because we have now moved all documentation topics onto our development mailing list. The main reason for doing this is that the documentation work is actually a part of developing and improving OFBiz. Writing documentation helps improve OFBiz and all the documentation that our documentation team writes, will be added and be published as part of our future releases.</p><p>Our dev list sometimes contain some technical discussions so to help people easily find and track documentation team related messages we are prefixing the subject lines with [DOC]. During March we raised several different discussion threads related to documentation. You can find a summary of them all at the link below:</p><a href="https://s.apache.org/vPSE" target="_blank" rel="noopener">Documentation Discussions - March 2018 </a> <p>Please subscribe to our dev mailing list if you want to follow the documentation effort.</p>
<h2>Documentation Mentors</h2><p>We are still moving forward with our documentation effort. This month we have started assigning mentors to people who have requested them. We currently have several OFBiz community members willing to help mentor new people wanting to help us getting started with the documentation effort. If you want to help but are not sure where to start then please post a message on our dev mailing list or contact any of our documentation mentors .</p>
<p>Thanks very much to our documentation mentors Michael  Brohl, Swapnil M Mane, Sharan Foga, and also Taher Alkhateeb for helping provide technical advice for the documentation framework. We are always looking for people to help out, so if you would like to be a mentor then please let us know.</p> 
<h2>OFBiz Manufacturing</h2><p>During March our user mailing list received quite a few questions about the OFBiz MRP and Manufacturing module. Our users were keen to understand the different ways in which the module can be used. Many of the OFBiz modules are generic so can be a good starting point for implementing your own processes.</p><p>Some of the questions asked this month were as follows:</p><ul><li><a href="https://s.apache.org/mESH" target="_blank" rel="noopener">How to setup sub contracting work out to your suppliers </a> </li><li><a href="https://s.apache.org/UMiY" target="_blank" rel="noopener">Running MRP for Plants and Warehouses </a></li><li><a href="https://s.apache.org/4KXX" target="_blank" rel="noopener">How to find out the Inventory Item that will be used for Picking Goods </a></li><li><a href="https://s.apache.org/wjDJ" target="_blank" rel="noopener">An MRP bug report identifying a DATETIME database issue </a></li></ul><p>It's great to see people wanting to know more about the functionality of the various modules and how they can be applied to real business situations. Thank you to all our community members who responded and helped these users understand OFBiz a little more.</p><p>Remember that if you need any help or have any questions about any of the OFBiz modules then please feel free to post a message on our user mailing list.</p>
<h2>New PMC Member</h2><p>This month the OFBiz Project Management Committee (PMC) invited Paul Foxworthy to become a PMC member and we are pleased to announce that he has accepted. Congratulations and welcome Paul!</p><p>If you would like to find out more about our who our PMC and Committers are, then please use the following link:</p><a href="https://s.apache.org/9eYw" target="_blank" rel="noopener">OFBiz PMC and Committers List </a>
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Pass JVM options to OFBiz when using Gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-10253">OFBIZ-10253</a>)</li>
 	<li>Change log level from INFO to VERBOSE for detail logging in UtilCache.findSizeInByte (<a href="https://issues.apache.org/jira/browse/OFBIZ-10200">OFBIZ-10200</a>)</li>
 	<li>Improve GeneralLedgerServices to set transaction date as payment's effective date(<a href="https://issues.apache.org/jira/browse/OFBIZ-10239">OFBIZ-10239</a>)</li>
 	<li>Extend updatePassword service API with optional parameter requirePasswordChange (<a href="https://issues.apache.org/jira/browse/OFBIZ-10201">OFBIZ-10201</a>)</li>
 	<li>Extend UtilFormatOut with new method formatPercentageRate (<a href="https://issues.apache.org/jira/browse/OFBIZ-10199">OFBIZ-10199</a>)</li>
 	<li>Token Based Authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-9833">OFBIZ-9833</a>)</li>
 	<li>Standardise Layout throughout Applications (<a href="https://issues.apache.org/jira/browse/OFBIZ-10242">OFBIZ-10242</a>)
This contains the improvements for web tools, content manager and common</li>
 	<li>Display improvement in catalog (<a href="https://issues.apache.org/jira/browse/OFBIZ-10299">OFBIZ-10299</a>)</li>
 	<li>Open the SQL screen straight to OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-10323">OFBIZ-10323)</a></li>
</ul>

<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>UtilCodec URL decoding breaks values with german umlauts (<a href="https://issues.apache.org/jira/browse/OFBIZ-10275">OFBIZ-10275</a>)</li>
 	<li>Wrong locale/fallbackLocale logic in CategoryContentWrapper (<a href="https://issues.apache.org/jira/browse/OFBIZ-10274">OFBIZ-10274</a>)</li>
 	<li>EmailServices.sendMailFromScreen attachment rendering broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-10246">OFBIZ-10246</a>)</li>
 	<li>Theme screens do not load properly (<a href="https://issues.apache.org/jira/browse/OFBIZ-10276">OFBIZ-10276</a>)</li>
 	<li>The getJSONuiLabel javascript function is no longer working (<a href="https://issues.apache.org/jira/browse/OFBIZ-10277">OFBIZ-10277</a>)</li>
 	<li>Removing Birt dependencies in ReportScreens.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-10283">OFBIZ-10283</a>)</li>
 	<li>Logout do not remove autoLogin (<a href="https://issues.apache.org/jira/browse/OFBIZ-4959">OFBIZ-4959</a>)</li>
 	<li>The server hour normally shown in the jobs list is no longer showing (<a href="https://issues.apache.org/jira/browse/OFBIZ-10278">OFBIZ-10278</a>)</li>
 	<li>HttpClient failed to return the error result (<a href="https://issues.apache.org/jira/browse/OFBIZ-10281">OFBIZ-10281</a>)</li>
 	<li>Bug in running asciidoctor on windows clients (<a href="https://issues.apache.org/jira/browse/OFBIZ-9873">OFBIZ-9873</a>)</li>
 	<li>loadCartFromOrder changes order date even when updating order items (<a href="https://issues.apache.org/jira/browse/OFBIZ-10301">OFBIZ-10301</a>)</li>
 	<li>Correct field name partyId on the service createPartyPrefDocTypeTpl (<a href="https://issues.apache.org/jira/browse/OFBIZ-10186">OFBIZ-10186</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Fixed a typo in Creating reports.md</li>
</ul>
<h2>Documentation</h2>
<ul>
 	<li>PoC for a documentation system for OFBiz based on Asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-9837">OFBIZ-9837</a>)</li>
 	<li>Create Empty Document templates for Human Resources Documentation (<a href="https://issues.apache.org/jira/browse/OFBIZ-10254">OFBIZ-10254</a>)</li>
 	<li>Add the introduction section of the OFBiz user manual (<a href="https://issues.apache.org/jira/browse/OFBIZ-10285">OFBIZ-10285</a>)</li>
 	<li>Convert README.md to README.adoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10272">OFBIZ-10272</a>)</li>
 	<li>Add Human Resources application description (<a href="https://issues.apache.org/jira/browse/OFBIZ-10255">OFBIZ-10255</a>)</li>
 	<li>Add documentation content for accounitng introduction (<a href="https://issues.apache.org/jira/browse/OFBIZ-10289">OFBIZ-10289</a>)</li>
 	<li>Add agreements documentation content and linked it to accounting (<a href="https://issues.apache.org/jira/browse/OFBIZ-10290">OFBIZ-10290</a>)</li>
 	<li>Add glossary for human resources (<a href="https://issues.apache.org/jira/browse/OFBIZ-10258">OFBIZ-10258</a>)</li>
 	<li>Add initial skeleton and some content to developer manual (<a href="https://issues.apache.org/jira/browse/OFBIZ-10285">OFBIZ-10285</a>)</li>
 	<li>Add additional configuration to the user manual (remove chapter label, activate experimental features), included the quick start section of README.adoc to the user manual and add headlines/structure for the development environment</li>
 	<li>Move some shared attributes in asciidoc sources to gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-10285">OFBIZ-10285</a>)</li>
</ul>
