---
layout: post
title: 'Apache OFBiz News - June 2017 '
date: '2017-07-11T19:31:19+00:00'
permalink: apache-ofbiz-news-june-2017
---
<h2>Apache OFBiz News June 2017 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about yet another OFBiz release, our new website is close to being finished, we discover what 11 years of OFBiz development looks like, we look for volunteers to help us improve our code using Code Analysis tools and OFBiz gets mentioned in the ASF annual report.
<!--more--> 
<h2>Apache OFBiz 16.11.03 Released</h2>
During this month the community announced the release of 16.11.03. The new release consolidates all work done since the previous release in November last year. The release file can be downloaded following the instructions in the OFBiz <a href="http://ofbiz.apache.org/download.html" target="_blank" rel="noopener">Downloads page.</a>
Please refer to the <a href="http://ofbiz.apache.org/release-notes-16.11.03.html" target="_blank" rel="noopener">Release Notes</a> for more details of the changes introduced with this new version.

Thanks very much to Scott Provost for highlighting a bug in our recent 16.11.02 release and to the OFBiz community for working together to fix the reported problem and getting the new release out so quickly to users.

<h2>Initial Draft of New OFBiz Website </h2>
Our community has been looking at and talking about changing our project website for quite a while. After some discussions on our mailing lists the structure was agreed and an initial template draft has been loaded into our code repository. We would like to finalise the site and hopefully change over to using the new site over the next month.

If you would like take a look at a preview of the work done so far then please use the link below:
<p> </p>
<a href="http://svn.apache.org/repos/asf/ofbiz/branches/ofbiz-new-website/index.html" target="_blank" rel="noopener">Draft OFBiz Website page.</a> 
<p> </p>
We hope that the new website will be easier to navigate and will also align with our new OFBiz project logo. 

<h2>Removing OFBiz Snapshots</h2>
For a long while, folllowing the way other ASF projects do, the OFBiz project has been providing nightly snapshots of the latest codebase. This was setup so that developers of our community could download and use the latest updates for the branch releases. Providing these snapshots takes time and effort and does not add much, if any, in the case of OFBiz. And we have found that this is almost not utilised so has now been discontinued. It's not much different from using the SVN repository to download (check out) and it's the same after to run things with Ant or Gradle. If you are annoyed by the .svn folder created by the check out, simply drop it or use svn export. But that should not even be an issue, most of the time it's even convenient because you can then easily update, compare, etc., when you want...<br />

<h2>OFBiz Development History on Gource</h2>
During this month Gource was mentioned as a way to visualise the development of the OFBiz project. Gource is a tool that displays software projects as an animated tree. Various directories are shown as branches and individual files are displayed as leaves. Also details of the developers who have worked on or updated the branches and leaves can be seen over time through an animation sequence. 

Thanks to Jacques Le Roux for highlighting the tool and also to Michael Brohl for generating a history of 11 years of OFBiz development from 2006 until 2017. The Gource animation Michael generated is available on Youtube via the following link
<p> </p>
<a href="https://youtu.be/JVdlw115Q_o" target="_blank" rel="noopener">OFBiz through the years</a> 
<p> </p>
We hope our community enjoys watching the evolution of the project.

<h2>Using Code Analysis Tools to Improve OFBiz</h2>
If you are interested in helping improve OFBiz but a little unsure how to get started then defects reported by code analysis tools could help.
<p> </p>
A while ago we had a discussion on the development mailing list mentioning that we could help improve and clean up our codebase by running Code Analysis tools on our codebase and using the reports as a guide to provide patches. Doing this can be a good way to get started with the project that also delivers great benefits.
<p> </p>
Details of the discussions and instructions for how to get started can be found at the following thread <a href="https://s.apache.org/AaEj" target="_blank" rel="noopener">Call to action: fixing defects reported by code analysis tools</a>.
<p> </p>
Everyone is welcome to help out so please feel free to ask for any advice or additional information on our development mailing list

<h2>OFBiz and the ASF Annual Report</h2>
In June the Apache Software Foundation published its regular <a href="https://blogs.apache.org/foundation/entry/the-apache-software-foundation-announces15" target="_blank">Annual Report.</a>. If you take a look at the report, you will see that on page 25 our OFBiz development list has been listed as one of the most active Apache project mailing lists and on page 26 Deepak Dixit is listed as one of the top 5 issue closers!
<p> </p>
It is great to see OFBiz so active and also congratulations to Deepak.

<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Improve closing of Objects for the case of an exception
In case of an exception after the EntityListIterator or Writer creation and before it's closed, the EntityListIterator or Writer remains in memory. Improve by using try-with-ressources where possible.
<ul>
 	<li>EntityListIterator (<a href="https://issues.apache.org/jira/browse/OFBIZ-9385">OFBIZ-9385</a>)</li>
 	<li>Writer (<a href="https://issues.apache.org/jira/browse/OFBIZ-9388">OFBIZ-9388</a>)</li>
</ul>
</li>
 	<li>Update geo data for India (<a href="https://issues.apache.org/jira/browse/OFBIZ-9406">OFBIZ-9406</a>)
India currently has 29 states and 7 Union Territories.
<ul>
 	<li>Update geoTypeId for 7 union territories from STATE to TERRITORY</li>
 	<li>Correct several geoName territory names</li>
 	<li>Add data for new state Telangana</li>
</ul>
</li>
 	<li>Rename Gradle task "loadDefault" to "loadAll" (<a href="https://issues.apache.org/jira/browse/OFBIZ-9411">OFBIZ-9411</a>)
As of OFBiz 16.12 the Gradle task has the new name and the documentation, such as README.md, has been adjusted accordingly. Discussion on this topic: <a href="https://s.apache.org/xjFj">https://s.apache.org/xjFj</a></li>
 	<li>Add numericCode for Currency UOM (<a href="https://issues.apache.org/jira/browse/OFBIZ-9409">OFBIZ-9409</a>)
The three-digit numeric code is useful when currency codes need to be understood in countries that do not use Latin scripts and for computerised systems.
<ul>
 	<li>Set 3 digit numeric code the same as the numeric country code where possible.</li>
 	<li>Update some old currency UOM, as uomId has been updated. (https://www.iso.org/iso-4217-currency-codes.html)</li>
 	<li>Removed unused entity uiLabels for removed currency UOM (<a href="https://issues.apache.org/jira/browse/OFBIZ-9413">OFBIZ-9413</a>)</li>
</ul>
</li>
 	<li>Convert RateServices.xml from miniLang to groovyDSL (<a href="https://issues.apache.org/jira/browse/OFBIZ-9381">OFBIZ-9381</a>)</li>
 	<li>Refactor and Improve Code for the following:
<ul>
 	<li>CatalinaContainer (<a href="https://issues.apache.org/jira/browse/OFBIZ-9392">OFBIZ-9392</a>)</li>
 	<li>createPlugin task in Gradle script (<a href="https://issues.apache.org/jira/browse/OFBIZ-9436">OFBIZ-9436</a>)</li>
 	<li>UtilMisc.toMap(), toList() and toSet()  (<a href="https://issues.apache.org/jira/browse/OFBIZ-9393">OFBIZ-9393</a>)</li>
 	<li>Several file names that did not adhere to OFBiz naming conventions (<a href="https://issues.apache.org/jira/browse/OFBIZ-9338">OFBIZ-9338</a>)</li>
</ul>
</li>
 	<li>Upgrade Groovy to 2.4.12 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9430">OFBIZ-9430</a>)</li>
 	<li>Upgrade Tomcat to 8.5.16 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9437">OFBIZ-9437</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Improve closing performFindResults.listIt for the case of an exception in 3 Scrum Groovy files (<a href="https://issues.apache.org/jira/browse/OFBIZ-9389">OFBIZ-9389</a>)
In case of an exception after the call to the performFind service and before it's closed, the EntityListIterator remains in memory. The solution is to use a try-catch-finally  because Groovy does not have try-with-ressources blocks.</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>Report issues with the Wiki restructuring to this ticket: (<a href="https://issues.apache.org/jira/browse/OFBIZ-9416">OFBIZ-9416</a>)</li>
 	<li>CostServices.xml#getProductCost fails currency conversion (<a href="https://issues.apache.org/jira/browse/OFBIZ-9387">OFBIZ-9387</a>)</li>
 	<li>Simple method in shipment services not terminating on error condition (<a href="https://issues.apache.org/jira/browse/OFBIZ-9407">OFBIZ-9407</a>)
Add a &lt;check-errors/&gt; to the method.</li>
 	<li>RequestHandlerException on request link of Quote Profit page (<a href="https://issues.apache.org/jira/browse/OFBIZ-9386">OFBIZ-9386</a>)
Change the link to QuoteProfit from inter-app to simple. The Quote Price page has the same problem and solution (<a href="https://issues.apache.org/jira/browse/OFBIZ-9384">OFBIZ-9384</a>).</li>
 	<li>Error when creating new blog article entry (<a href="https://issues.apache.org/jira/browse/OFBIZ-9373">OFBIZ-9373</a>)
Change mode of auto-attributes for service  createElectronicText from INOUT to IN.</li>
 	<li>Unit test fails when "verbose" logging is turned on (<a href="https://issues.apache.org/jira/browse/OFBIZ-9305">OFBIZ-9305</a>)
Fix by temporarily disabling the verbose logging during the EntitySaxReaderTests.parse unit test.</li>
 	<li>CreateShipment code logic error (<a href="https://issues.apache.org/jira/browse/OFBIZ-9425">OFBIZ-9425</a>)
The service createShipment creates both sales and purchase shipment with workeffort. Details on the fix can be found in the ticket.</li>
 	<li>Cannot create a new GL Account (<a href="https://issues.apache.org/jira/browse/OFBIZ-9429">OFBIZ-9429</a>)
Change the service definition of createGLAccount so that it uses the pk attributes as OUT instead of INOUT. In this way, the glAccountId will be generated by OFBiz instead of being provided to the service.</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Screen broken on click ThirdPartyLogin, OAuth2GitHub, GitHubUser, OAuth2LinkedIn and LinkedInUser entities (<a href="https://issues.apache.org/jira/browse/OFBIZ-9390">OFBIZ-9390</a>)</li>
 	<li>Birt plugin depends on example plugin (<a href="https://issues.apache.org/jira/browse/OFBIZ-9383">OFBIZ-9383</a>)
The BIRT demo data for flexible reports depends on the Example entity from the Example plugin. Put a gradle dependency on the Example plugin. If the Example plugin misses, the birt component can't build.</li>
 	<li>Error running the simple-method and groovy script in file QuickAnonCustomerEvents.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-9432">OFBIZ-9432</a>)
The script is unable to resolve the class CartItemModifyException. Add complete path to CartItemModifyException for Groovy and remove trailing semicolons.  This error also concerns CustomerEvents.xml.</li>
 	<li>Lucene tests fail due to problems in the test data (<a href="https://issues.apache.org/jira/browse/OFBIZ-9439">OFBIZ-9439</a>)
The Lucene test data refers to the ownerContentId "CNTGIZMOS" which is not defined in the Lucene demo data. It was instead defined in the ecommerce demo data in the file DemoWebsitePublishPointData.xml. The data is rewritten so that it reflects the test code and adds missing content associations.</li>
</ul>
