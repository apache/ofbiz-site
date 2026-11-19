---
layout: post
title: Apache OFBiz News - December 2017
date: '2018-02-06T09:31:51+00:00'
permalink: apache-ofbiz-news-december-2017
---
<h2>Apache OFBiz News December 2017</h2>
Welcome to our regular monthly round-up of OFBiz news. 
This month we have news about our usual end of year tasks to create a new branch but this time it's two instead of one!.
<!--more--> 
<h2>New Framework and Plugin 17.12 Branches</h2>
<p>If you have been following our list of monthly fixes and improvements then you may have noticed the separation being made between "Framework" and "Plugins". As part of our usual end of year tasks, the community looks at creating a new branch that will become the basis for the next release. During December the community decided to create not one, but two new branches. This is the first time we have created two in parallel, one for the framework and one for the plugins.</p>
Both branches were created with 17.12 as part of their descriptions. The framework branch contains not only the framework components but also the core applications such as Accounting, Human Resources, Manufacturing, Marketing, Order Management while the plugins includes the other applications such as eCommerce, Asset Maintenance, Project Manager and Scrum.</p>
<p><strong>Note that these two branches are not yet released and will be stablised over the next few months until they are ready.</strong> </p>
<p>Thanks very much to the many members of the community who have done a lot of amazing work out with code cleanup and refactoring. The overall aim is to make OFBiz flexible yet simple to implement. Users can still install OFBiz with both core and plugin applications together but also have the flexibility of having a framework only version. In future, we hope that our contributors will also start to create their own plugins that can be made available to the community.</p>
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Move the hhfacility application and jQuery mobile to Attic (<a href="https://issues.apache.org/jira/browse/OFBIZ-10032">OFBIZ-10032</a>)</li>
 	<li>Replace Rainbow OFBiz logo (<a href="https://issues.apache.org/jira/browse/OFBIZ-10034">OFBIZ-10034</a>)</li>
 	<li>Move all data in applications to the datamodel component and remove unused files (<a href="https://issues.apache.org/jira/browse/OFBIZ-9501">OFBIZ-9501</a>)
<ul>
 	<li>Move selected seed data for product, accounting, manufacturing, humanres, marketing, commonext and order component.</li>
 	<li>Leave the protlet, security and help data for some of the components.</li>
</ul>
</li>
 	<li>Update build.gradle to the latest dependencies. Apache Tomcat (<a href="https://issues.apache.org/jira/browse/OFBIZ-10026">OFBIZ-10026</a>)</li>
 	<li>Upgrade Jquery 1.11.0 to JQuery 3.2.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9978">OFBIZ-9978</a>)
<ul>
 	<li>Include css files to theme properties and screens. Manually add datepicker-en.js and datepicker-it-CH.js.</li>
 	<li>Update JGrowl from 1.4.1 to 1.4.6</li>
</ul>
</li>
 	<li>Fix defects reported by FindBugs for ca. 50 packages in all components (<a href="https://issues.apache.org/jira/browse/OFBIZ-9450">OFBIZ-9450</a>)</li>
 	<li>Create a new entity FacilityCalendar (<a href="https://issues.apache.org/jira/browse/OFBIZ-10040">OFBIZ-10040</a>)
This entity creates the one-to-many relationship between facility and calendar.</li>
 	<li>Handle service response effectively in ServiceUtil and Accounting (<a href="https://issues.apache.org/jira/browse/OFBIZ-9981">OFBIZ-9981</a> and <a href="https://issues.apache.org/jira/browse/OFBIZ-10021">OFBIZ-10021</a>)</li>
 	<li>General refactoring and code improvements in ca. 80 packages in all components (<a id="key-val" class="issue-link" href="https://issues.apache.org/jira/browse/OFBIZ-9836" rel="13108296" data-issue-key="OFBIZ-9836">OFBIZ-9836</a>)
Changes include:
<ul>
 	<li>Remove unnecessary parameters in diamond operators</li>
 	<li>Remove unnecessary else-phrase</li>
 	<li>Use multi catches</li>
 	<li>Enhance for-loops</li>
 	<li>Remove exceptions which aren't thrown</li>
 	<li>Remove old commented out code</li>
 	<li>Use braces around all if and else statements</li>
</ul>
</li>
 	<li>Replace all delegator findByAnd and findOne method callings by EntityQuery methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-10029">OFBIZ-10029</a>)</li>
 	<li>Always check if debug verbose is on when using Debug.logVerbose() (<a href="https://issues.apache.org/jira/browse/OFBIZ-10052">OFBIZ-10052</a>)</li>
 	<li>Website can manage hidden webapp (<a href="https://issues.apache.org/jira/browse/OFBIZ-10088">OFBIZ-10088</a>)
Improve RequestHandler.makeLink code to manage url generation with added webapp path. When a websiteId is present and it has a webappPatch defined, use it on the link generation.</li>
 	<li>Remove applet concept in OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-10094">OFBIZ-10094</a>)
Following discussion at <a href="http://markmail.org/message/dlp4zoo3xxuiefpn">http://markmail.org/message/dlp4zoo3xxuiefpn</a></li>
 	<li>Replace Inline js with External js in makeHyperlinkString macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-9852">OFBIZ-9852</a>)</li>
 	<li>Replace Masked-Input-Plugin with jQuery-Mask-Plugin (<a href="https://issues.apache.org/jira/browse/OFBIZ-9493">OFBIZ-9493</a>)</li>
 	<li>Tomcat SSO (<a href="https://issues.apache.org/jira/browse/OFBIZ-10047">OFBIZ-10047</a>)
<ul>
 	<li>Allows developers the option to use Tomcat SSO, instead of the externalLoginKey for SSO.</li>
 	<li>Fixes the issues mentioned in <a class="issue-link" title="Single sign-on to OFBiz with CAS" href="https://issues.apache.org/jira/browse/OFBIZ-6963" data-issue-key="OFBIZ-6963">OFBIZ-6963</a> and <a class="issue-link" title="Multiple logins required when using help screen before navigating to another application" href="https://issues.apache.org/jira/browse/OFBIZ-6994" data-issue-key="OFBIZ-6994">OFBIZ-6994</a>.</li>
</ul>
</li>
 	<li>Add option for multiple dependencies of dropdown values for the OFBiz website (<a href="https://issues.apache.org/jira/browse/OFBIZ-10103">OFBIZ-10103</a>)</li>
 	<li>Import csv file with data file and add start-line to escape the header column line (<a href="https://issues.apache.org/jira/browse/OFBIZ-10108">OFBIZ-10108</a>)</li>
 	<li>Add a new attribute to select the EOL type during the csv export file from data file process (<a href="https://issues.apache.org/jira/browse/OFBIZ-9536">OFBIZ-9536</a>)
With this improvement it's now possible to define an eol-type attribute on data-file elements as CR or CRLF values.</li>
 	<li>Update DBCP to 2.2.0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9917">OFBIZ-9917</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Update markup according to standard markup given by Bootstrap v4.0.0 for ca. 15 pages (<a href="https://issues.apache.org/jira/browse/OFBIZ-9760">OFBIZ-9760</a>)</li>
 	<li>Move the hhfacility application and jQuery to Attic (<a href="https://issues.apache.org/jira/browse/OFBIZ-10032">OFBIZ-10032</a>)</li>
 	<li>Upgrade JQuery from 1.11.0 to 3.2.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9978">OFBIZ-9978</a>)
<ul>
 	<li>Include css files to theme properties and screens. Manually add datepicker-en.js and datepicker-it-CH.js.</li>
 	<li>Update Jeditable from 1.7.2 to 1.7.3</li>
</ul>
</li>
 	<li>Fix defects reported by FindBugs
<ul>
 	<li>Package org.apache.ofbiz.cmssite.multisite. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9626">OFBIZ-9626</a>)</li>
 	<li>Package org.apache.ofbiz.content.test. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9817">OFBIZ-9817</a>)</li>
 	<li>Package org.apache.ofbiz -bi.util, -birt and -birt.container. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10102">OFBIZ-10102</a>)</li>
</ul>
</li>
 	<li>Replace all delegator findByAnd and findOne method callings by EntityQuery methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-10029">OFBIZ-10029</a>)</li>
 	<li>Always check if debug verbose is on when using Debug.logVerbose() (<a href="https://issues.apache.org/jira/browse/OFBIZ-10052">OFBIZ-10052</a>)</li>
 	<li>Remove applet concept in OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-10094">OFBIZ-10094</a>)</li>
 	<li>Replace inline js with external js in makeHyperlinkString macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-9852">OFBIZ-9852</a>)</li>
 	<li>Replace Masked-Input-Plugin with jQuery-Mask-Plugin (<a href="https://issues.apache.org/jira/browse/OFBIZ-9493">OFBIZ-9493</a>)</li>
 	<li>Improvement of navbar of ecommerce page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10117">OFBIZ-10117</a>)</li>
 	<li>Add responsive and thread-light class on quote list ecommerce page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10095">OFBIZ-10095</a>)</li>
 	<li>Update Lucene and Solr to 7.2 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10130">OFBIZ-10130</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>Error is thrown because of missing 'orderContactMechId' when updating empty orderContactMech (<a href="https://issues.apache.org/jira/browse/OFBIZ-9967">OFBIZ-9967</a>)</li>
 	<li>Unnecessary autogenerated Default or Empty Catch block in Java and Groovy files (<a href="https://issues.apache.org/jira/browse/OFBIZ-8341">OFBIZ-8341</a>)</li>
 	<li>Missing default-entity-name on create and delete definition service for CarrierShipmentMethod entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-8664">OFBIZ-8664</a>)</li>
 	<li>Edit-Party-Group page does not show current set values (<a href="https://issues.apache.org/jira/browse/OFBIZ-9532">OFBIZ-9532</a>)</li>
 	<li>Service createContent fails to create proper ContentAssoc entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-10098">OFBIZ-10098</a>)</li>
 	<li>Service updateTextContent fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-10112">OFBIZ-10112</a>)</li>
 	<li>While creating return fin account, currency is not the same (<a href="https://issues.apache.org/jira/browse/OFBIZ-9977">OFBIZ-9977</a>)</li>
 	<li>Party Classification Groups are not listed on FindParty screen dropdown (<a href="https://issues.apache.org/jira/browse/OFBIZ-10007">OFBIZ-10007</a>)</li>
 	<li>Error printing return pdf (<a href="https://issues.apache.org/jira/browse/OFBIZ-9915">OFBIZ-9915</a>)</li>
 	<li>Unable to remove selected item from cart (<a href="https://issues.apache.org/jira/browse/OFBIZ-10120">OFBIZ-10120</a>)</li>
 	<li>Order process broken due to missing service definition (<a href="https://issues.apache.org/jira/browse/OFBIZ-10129">OFBIZ-10129</a>)</li>
 	<li>Encoding issue while exporting csv files (<a href="https://issues.apache.org/jira/browse/OFBIZ-10109">OFBIZ-10109</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Ecommerce js console error because of missing popper.js file (<a href="https://issues.apache.org/jira/browse/OFBIZ-10016">OFBIZ-10016</a>)</li>
 	<li>RuntimeException on viewroles page of Scrum component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10033">OFBIZ-10033</a>)</li>
 	<li>Error while creating an example from the Ajax screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-10037">OFBIZ-10037</a>)</li>
</ul>
<h2>Documentation</h2>
<ul>
 	<li>Document how the thread-pool max-threads works (<a href="https://issues.apache.org/jira/browse/OFBIZ-10002">OFBIZ-10002</a>)
Minimalist documentation with reference to stackoverflow, which references Brian Goetz's and co's "Java Concurrency in Practice" after discussion at <a href="http://markmail.org/message/ksutqpuyyd4kmbl2">http://markmail.org/message/ksutqpuyyd4kmbl2</a></li>
 	<li>Create a DATAMODELCHANGES.md to track data model changes (<a href="https://issues.apache.org/jira/browse/OFBIZ-9902">OFBIZ-9902</a>)</li>
</ul>
