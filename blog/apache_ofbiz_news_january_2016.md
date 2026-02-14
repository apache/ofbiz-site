---
layout: post
title: Apache OFBiz News - January 2016
date: '2016-02-08T13:35:47+00:00'
permalink: apache_ofbiz_news_january_2016
---
<h2>Apache OFBiz News January 2016</h2>
Happy New Year! 
<p></p> 
We have a double set of news this month covering both December and January, including our Apache birthday, details about our Community Day, FOSDEM and the very sad news of the death of Adrian Crum, a key member of our community.

<!--more-->
<h2>Happy Birthday Apache OFBiz !</h2>
In December OFBiz celebrated it's 9th Apache birthday. 
<p></p> 
On 20th December 2006, OFBiz graduated from incubation and became an Apache Top Level Project.  Since then the project has continued to grow and develop. The project now has 30 committers and very active mailing lists for users and developers.Over the 9 years the project has released a range of OFBiz versions from versions 4.0 through to 13.07 and is currently preparing for the next release. 

<h2>December Community Day</h2>
Our final Community Day for 2015 was held on 19th December. Although close to the festive season, community members still gave up some of their time to collaborate and work on the project. The key tasks were working through the list of task we have open on Jira and applying previously submitted patches. A big thank you goes out to all those who partcipated and a total 13 issues were closed.
<p></p> 
Our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">Community Days</a>  have been very popular so we have decided to continue them for 2016. Dates have been set as :
<p></p> 
   Q1 - Saturday 19th March 2016
<p></p> 
   Q2 - Saturday 18th June 2016
<p></p> 
    Q3 - Saturday 17th September 2016
<p></p> 
    Q4 - Saturday 17th December  2016 
<p></p> 
Please add them to your diary if you are interested in participating.

<h2>Adrian Crum</h2>
On 1st January 2016, OFBiz Committer and ex PMC member  <a href="http://www.apache.org/memorials/adrian_crum.html">Adrian Crum</a> passed away. His loss is strongly felt within the community and we have had many messages of sympathy and support. 
<p></p> 
Adrian joined the OFBiz project during the incubation phase and in 2007 was invited to become a committer. Later that year Adrian joined the OFBiz PMC and participated until June 2014. Over the years Adrian contributed around 5,000 postings to the mailing lists, over 2,300 issues and comments to issues and over 2,000 commits. 
<p></p> 
Adrian also adopted the abandoned <a href="https://commons.apache.org/sandbox/commons-convert/index.html">Apache Commons Convert</a>  project in April 2010, and made it the home of a Java data-type conversion framework he developed for Apache OFBiz.
<p></p> 
The project has setup a <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Memorial+-+Adrian+Crum">memorial page</a> for the community to share their stories, and experiences of Adrian.  
<p></p> 
The community has also decided to dedicate our next OFBiz release to him. The whole OFBiz Community sends its condolences to Adrian's family and friends.

<h2>FOSDEM 2016</h2>
During January, some of our OFBiz community members attended <a href="https://fosdem.org/2016/">FOSDEM</a>, an open source conference for developers. It was held in Brussels and OFBiz community members from France, The Netherlands, Czech Republic and Belgium came along for conference as well as an informal meetup. The project was allocated a timeslot on the ASF booth to promote OFBiz.
<p></p> 
With reportedly over 7000 attendees, there were lots of presentations, tutorials and devrooms to choose from. The ASF is planning to have a regular presence at FOSDEM in the future, so it is hoped that we can repeat the meetup and project promotion next year.
<p></p> 
Please see below for the list of January changes for the OFBiz project.
<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
	<li>Added session tracking mode and make cookie secure for scrum, solr, and some special purposes components (<a href="https://issues.apache.org/jira/browse/OFBIZ-6655">OFBIZ-6655</a>)</li>
	<li>Add getFieldList method to EntityQuery (<a href="https://issues.apache.org/jira/browse/OFBIZ-6848">OFBIZ-6848</a>)</li>
	<li>Converted simple CRUD services to entity-auto for
<ul>
	<li>PartyContent and CommunicationEventPurpose (<a href="https://issues.apache.org/jira/browse/OFBIZ-6850">OFBIZ-6850</a>)</li>
	<li>TaxAuthority, TaxAuthorityAssoc, TaxAuthorityCategory (without remove), TaxAuthorityGlAccount, TaxAuthorityRateProduct (<a href="https://issues.apache.org/jira/browse/OFBIZ-6851">OFBIZ-6851</a>), also moved the permission check to the service definition.</li>
	<li>CreditCardTypeGlAccount (<a href="https://issues.apache.org/jira/browse/OFBIZ-6852">OFBIZ-6852</a>), also converted updatePaymentMethodType and removePaymentContent service (<a href="https://issues.apache.org/jira/browse/OFBIZ-6853">OFBIZ-6853</a>)</li>
	<li>SalesOpportunity and SalesForecastDetail</li>
	<li>several Order entities (<a href="https://issues.apache.org/jira/browse/OFBIZ-6854">OFBIZ-6854</a>)</li>
	<li>AgreementItemAttribute (<a href="https://issues.apache.org/jira/browse/OFBIZ-6857">OFBIZ-6857</a>)</li>
</ul>
</li>
	<li>Contact Mech Translation in Facility Application (<a href="https://issues.apache.org/jira/browse/OFBIZ-6856">OFBIZ-6856</a>)</li>
	<li>Add the possibility to set a blackout period for job manager service (<a href="https://issues.apache.org/jira/browse/OFBIZ-6790">OFBIZ-6790</a>). During this time all async and scheduled service are put on hold.
Adds the following
<ul>
	<li>an entity JobManagerLock</li>
	<li>a new screen to add/edit job manager lock</li>
	<li>an information for end user on FindJob and ScheduleJob screen.</li>
</ul>
</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
	<li>When OFbiz reloads crashed jobs on startup, replay the crashed jobs only once. Remove all temporal information to ensure that the new job doesn't create any reccurent schedule that duplicates the origin job's configuration (<a href="https://issues.apache.org/jira/browse/OFBIZ-6784">OFBIZ-6784</a>)</li>
	<li>Sales opportunity creation: required-field removed, disturbed the form submission, entityone no value field, error in the log</li>
	<li>Various fixes to the salesopportunity list and create functions</li>
	<li>Correct the service CommunicationServices.createAttachmentContent that duplicates attachments for existing CommunicationEvents (<a href="https://issues.apache.org/jira/browse/OFBIZ-6697">OFBIZ-6697</a>)</li>
	<li>Small typo in ecommerce productdetail.ftl would prevent similar products by feature from rendering if the related functionality is enabled in ProductDetailgroovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-6797">OFBIZ-6797</a>)</li>
	<li>Fixes an issue related to r1715960 and (<a href="https://issues.apache.org/jira/browse/OFBIZ-6745">OFBIZ-6745</a>)</li>
	<li>Broken filter links if using ecommerce Layered Navigation (<a href="https://issues.apache.org/jira/browse/OFBIZ-6798">OFBIZ-6798</a>)</li>
	<li>Exception when sending an order confirmation email (<a href="https://issues.apache.org/jira/browse/OFBIZ-6792">OFBIZ-6792</a>)</li>
	<li>Error occur when create Lead/Contact from Vcard (<a href="https://issues.apache.org/jira/browse/OFBIZ-6795">OFBIZ-6795</a>)</li>
	<li>Error when accessing /webtools/control/entitymain (<a href="https://issues.apache.org/jira/browse/OFBIZ-6707">OFBIZ-6707</a> and <a href="https://issues.apache.org/jira/browse/OFBIZ-6786">OFBIZ-6786</a>)</li>
	<li>Missing parameters when calling the link from a form because they're passed in the url and not with the jquery data set (<a href="https://issues.apache.org/jira/browse/OFBIZ-6803">OFBIZ-6803</a>)</li>
	<li>ChartOfAccounts.fo.ftl still using the removed (in r1530274) postedBalance field results in system throwing an exception while accessing COA pdf (<a href="https://issues.apache.org/jira/browse/OFBIZ-6799">OFBIZ-6799</a>)</li>
	<li>There's no attribute "align" for tag "&lt;fo:block&gt;", must change to "text-align" (<a href="https://issues.apache.org/jira/browse/OFBIZ-6800">OFBIZ-6800</a>)</li>
	<li>Image management cannot share images (<a href="https://issues.apache.org/jira/browse/OFBIZ-6789">OFBIZ-6789</a>)</li>
	<li>Fix permissions at specialpurpose/myportal/widget/PortalAdmScreens.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-6400">OFBIZ-6400</a>)</li>
	<li>Order Item with multiple qty reserved with multiple inventory item not correctly recorded into Shipment_Item_Billing (<a href="https://issues.apache.org/jira/browse/OFBIZ-6806">OFBIZ-6806</a>)</li>
	<li>Session already invalidated on destroyCart for anonymous userLogin (<a href="https://issues.apache.org/jira/browse/OFBIZ-6805">OFBIZ-6805</a>)</li>
	<li>Tooltip Calendar field (date or date-time) should not stop when using tab key (<a href="https://issues.apache.org/jira/browse/OFBIZ-6735">OFBIZ-6735</a>)</li>
	<li>The GL account for USA_IRS is set to 224106 (SALES TAX COLLECTED USA - CA) should be 224100 (SALES TAX COLLECTED USA) (<a href="https://issues.apache.org/jira/browse/OFBIZ-6753">OFBIZ-6753</a>)</li>
	<li>The passport component misses a web.xml file (<a href="https://issues.apache.org/jira/browse/OFBIZ-6809">OFBIZ-6809</a>)</li>
	<li>Fixed stack trace on configproductdetail.ftl, Used correct method to get INSTRUCTIONS from ProductConfigItemContentWrapper.</li>
	<li>ProjectMgr: GanttChart fails in case of dependencies for tasks (<a href="https://issues.apache.org/jira/browse/OFBIZ-6842">OFBIZ-6842</a>)</li>
	<li>In DemoTaxAuthority.xml the associated countrycode for Bulgaria is wrong (<a href="https://issues.apache.org/jira/browse/OFBIZ-6844">OFBIZ-6844</a>)</li>
	<li>Temporary fix for "UtilXml.LocalResolver.resolveEntity] could not find LOCAL DTD/Schema with publicId [null] and the file/resource is [web-app_3_0.xsd]" (<a href="https://issues.apache.org/jira/browse/OFBIZ-6807">OFBIZ-6807</a>)</li>
	<li>Various fixes related with sales opportunity (<a href="https://issues.apache.org/jira/browse/OFBIZ-6791">OFBIZ-6791</a>)</li>
	<li>Error on the Split Payment button from the Quick Finalize Order screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-6743">OFBIZ-6743</a>)</li>
</ul>
<h2>Documentation</h2>
<ul>
	<li>Added wiki documentation regarding the Apache Solr component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6592">OFBIZ-6592</a>)</li>
</ul>
