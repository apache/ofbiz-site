---
layout: post
title: " Apache OFBiz News - April 2018 "
date: '2018-05-20T07:47:19+00:00'
permalink: apache-ofbiz-news-april-2018
---
<h2>Apache OFBiz News April 2018 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have more news about our how our community is supporting OFBiz users, we look for contributors to help with a proposed French version of our website, one of our contributors becomes a Apache member and we share some community statistics.
<!--more--> 
<h2>Supporting Our Users</h2>
During April our user mailing list activity has been high with us receiving many queries about setting up and configuring OFBiz. Some of the topics raised were as follows: 
<ul>
<li><a href="https://s.apache.org/oTfm" target="_blank" rel="noopener"> How to Upload Sales Orders </a></li>
<li><a href="https://s.apache.org/cyKM" target="_blank" rel="noopener"> Setting Up Shipping Rate </a></li>
<li><a href="https://s.apache.org/OhW5" target="_blank" rel="noopener">OFBiz and Cheque Processing </a> </li>
<li><a href="https://s.apache.org/Pmuh" target="_blank" rel="noopener">Dropship Warehouses </a> </li>
<li><a href="https://s.apache.org/I5eF" target="_blank" rel="noopener">Setting Up Price Rules </a></l>
</ul>
<p>As usual it was good to see that these questions were answered by a variety of people from our community wanting to help and support others. We would like to thank our users who have  helped us identify a few bugs this month, and we are happy to report that they have all now been fixed.</p>
<p>We encourage our community and anyone using OFBiz to use or mailing list to share knowledge, ask questions and to report anything that doesn't seem to be working correctly.</p>
<h2>Looking for French Contributors</h2><p>One of our contributors, Olivier Heintz has created a version of our OFBiz website in French and is looking for people from the community to help maintain it. We can publish versions of our OFBiz website in different languages as long as it is kept up to date each time there are any changes.  And sharing the workload, reduces the dependency on a single person.</p><p>If you are interested in contributing to or maintaining a French version of our OFBiz website then please join the <a href="https://s.apache.org/7SQj" target="_blank" rel="noopener">discussion on our dev mailing list </a> 
<h2>New ASF Member from the OFBiz Community</h2>
<p>Deepak Dixit has become an Apache Software Foundation member. Membership is by invitation only so it's a real honour to be invited. Many congratulations to Deepak!</p>
<p>This means that OFBiz now has 13 ASF members from our community. Thank you all for your work and commitment to OFBiz and the ASF.</p>

<h2>OFBiz Community Statistics</h2><p>A few months ago, we included some community statistics as many of the ASF projects have access to an online tool that can help gather statistics about the community. This month we have decided to access a few of the statistics and share a few of the items with you.</p><p>Mailing Lists:</p><ul><li> Over the last 3 months, on our user mailing list, 411 emails have been sent by 89 different authors discussing 116 different topics</li><li>Over the last 3 months on our dev mailing list, 398 emails have been sent by 51 different authors discussing 67 different topics</li><li>Over the last 3 months, the top 5 people who have been active on our mailing lists are Jacques Le Roux, Taher Alkhateeb, Michael Brohl, Deepak Dixit and Sharan Foga</li></ul><p>Jira Contributions Over the last 3 months we have had:</p><ul><li>14 newcomers to the project that have contributed to helping us with our Jira issues, (4 arrived in February, 4 in March and 6 in April)</li><li>3 returning contributors (so people who have contributed in the past but not on a regular basis), and</li>
<li>45 regular contributors to the project</li> <li>175 issues created, 86 issues closed, 40 different people creating issues and 14 different people closing them </li></ul><p>It is great to see the community maintaining its activity but also and still growing by attracting new people to the community. 
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Imporoved EntityUtilProperties (<a href="https://issues.apache.org/jira/browse/OFBIZ-7112">OFBIZ-7112</a>)</li>
 	<li>Move all data in applications to the datamodel component. Move the PortalPortlet, PortletPortletCategory and PortletCategory data to party, workeffort and content components from datamodel. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9501">OFBIZ-9501</a>)</li>
 	<li>Standardise Layout throughout Applications (<a href="https://issues.apache.org/jira/browse/OFBIZ-10242">OFBIZ-10242</a>)</li>
 	<li>Standardise layout for Order (<a href="https://issues.apache.org/jira/browse/OFBIZ-10332">OFBIZ-10332</a>)</li>
 	<li>Data Migration by releases wiki page
Pandoc was accurately not rendering wrong MarkDown code. Anyway this needs to be translater to Asciidoc one day or another. There is a Confluence plugin to import Asciidoc, not sure we will want to do that or only keep the doc in the source. I guess it depends on the importance of the document. Some needs really to be visible in wiki, or maybe not and why keeping the wiki at all ?</li>
 	<li>Same UiLabel used for multiple purposes (<a href="https://issues.apache.org/jira/browse/OFBIZ-10336">OFBIZ-10336</a>)</li>
 	<li>Standardise Layout throughout Applications (<a href="https://issues.apache.org/jira/browse/OFBIZ-10242">OFBIZ-10242)</a></li>
 	<li>Update Currency UOM data as per iso amendment 164, 165 and 166 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10364">OFBIZ-10364</a>)</li>
 	<li>Correected the sequence of service attribute tag to fix Invalid content was found warning</li>
 	<li><a href="https://issues.apache.org/jira/browse/OFBIZ-10323">Improve layout and structure of forms (</a><a href="https://issues.apache.org/jira/browse/OFBIZ-10221">OFBIZ-10221</a><a href="https://issues.apache.org/jira/browse/OFBIZ-10323">)</a></li>
 	<li>Add a link onto a crashed Job to reset it (<a href="https://issues.apache.org/jira/browse/OFBIZ-10371">OFBIZ-10371</a>)</li>
 	<li>Change the display condition on the added link (<a href="https://issues.apache.org/jira/browse/OFBIZ-10371">OFBIZ-10371</a>)</li>
 	<li>Convert facility party related services from simple to entity-auto. Remove the service implementation for removePartyFromFacility, removePartyFromFacilityGroup and deleteFacilityContent. Service removePartyFromFacilityGroup already converted into entity auto, simply removing it. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10380">OFBIZ-10380</a>)</li>
 	<li>Invoice in status approved - cancel, applied patch from jira issue with minor changes (<a href="https://issues.apache.org/jira/browse/OFBIZ-10189">OFBIZ-10189</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Improved the WebPos CSS. Fixed the alignment and width to adjust the text box in the window. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10316">OFBIZ-10316</a>)</li>
 	<li>UI Label Issue on WebPos screen. Removed unnecessary class that was causing text in white colour. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10312">OFBIZ-10312</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>FinAccountServices: Prevent possible NullPointerException.</li>
 	<li>Moved the reference of the license for the "Quicksand" fonts from the NOTICE file to the LICENSE file.</li>
 	<li>Required parameters are optional for createWorkRequirementFulfillment service (<a href="https://issues.apache.org/jira/browse/OFBIZ-8622">OFBIZ-8622</a>)</li>
 	<li>ConfigXMLReader - Events are not executed in the order defined (<a href="https://issues.apache.org/jira/browse/OFBIZ-10369">OFBIZ-10369</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>One Page Checkout page cannot move to Step 5 due to javascript errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-10329">OFBIZ-10329</a>)</li>
</ul>
