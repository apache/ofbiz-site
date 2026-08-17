---
layout: post
title: Apache OFBiz News - April 2016
date: '2016-05-04T16:00:54+00:00'
permalink: apache_ofbiz_news_april_2016
---
<h2>Apache OFBiz News April 2016</h2>
Welcome to our monthly round-up of OFBiz news.
This month we have news about the continuing work on our code tidy up and re-factor, the community spend another weekend improving OFBiz and we announce two OFBiz releases.
<!--more-->
<h2>OFBiz April Releases</h2>
In April not one, but two new OFBiz releases came out. Details of these releases are below:<p></p>
Release 12.04.06 is the 6th update and also the last release in the 12.04 series. Release details and notes can be found  at the following link <p></p>
<a href="https://blogs.apache.org/ofbiz/entry/announce_apache_ofbiz_12_04">12.04.06 Announcement</a>
<p></p>
Release 13.07.03 is the 3rd update to the 13.07 series. Release details and notes can be found  at the following link <p></p>
<a href="https://blogs.apache.org/ofbiz/entry/announce_apache_ofbiz_13_07">13.07.03 Announcement</a>
<p></p>
The community is now working on the preparation of the next brand new release - OFBiz Release 14.12!
<h2>OFBiz Code Tidy Up and Re-Factor</h2>
The work on the OFBiz code tidy up and re-factor is continuing. An initial 13 tasks were identified in our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Re-Factor+To-Do+List">Current Re-Factor To Do List</a>
<p></p>
Community members have picked up and worked on specific tasks and so far 4 tasks have been completed and fixed. Another 3 tasks are currently in progress and there are 6 tasks yet to be started. The community is actively looking for people to help with the re-factoring effort so if you are interested then please take a look at the to do list and choose an open task to pick up.
<p></p>
Although not part of the list, tidying up has been happening in other areas too, such as the standardisation of file directory structures and naming conventions. <p></p>
Thanks very much to everyone for their contributions as all clean up work however small contributes the overall effort.

<h2>Hotwax Team 'Community Weekend'</h2>
Although our next OFBiz Community Day is not planned until June, the team at Hotwax Systems held another one of their monthly community events earlier this month. A total of 27 members from their team participated and worked on various OFBiz tasks including testing, providing patches and committing changes and improvements.
<p></p>
As usual, over that weekend, other community members joined in and collaborated with the Hotwax Team. Thank you to everyone who gave up their time to work on improving OFBiz!
<p></p>
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Replace OFBiz HttpClient by org.apache.commons.httpclient.HttpClient (<a href="https://issues.apache.org/jira/browse/OFBIZ-4430">OFBIZ-4430</a>)</li>
 	<li>Update the passport component to use httpclient/core-4.4.1 instead of commons-httpclient-3.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6755">OFBIZ-6755</a>)</li>
 	<li>Add commented out "-Xlint:deprecation" compilerarg value for convenience in macros.xml</li>
 	<li>Remove unnecessary space and unnecessary return in ModelService.java</li>
 	<li>Add a french label in HumanResErrorUiLabels.xml</li>
 	<li>Simplify getChildHRCategoryTree. Breaking the single long method to multiple private functions with improved exception handling (<a href="https://issues.apache.org/jira/browse/OFBIZ-6986">OFBIZ-6986</a>)</li>
 	<li>Improved CMS tree: more functionality and faster for large trees (<a href="https://issues.apache.org/jira/browse/OFBIZ-4502">OFBIZ-4502</a>)</li>
 	<li>Relocate .ftl files in
<ul>
 	<li>accounting component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6813">OFBIZ-6813</a>)</li>
 	<li>assetmaint component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6825">OFBIZ-6825</a>)</li>
 	<li>oagis component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6840">OFBIZ-6840</a>)</li>
 	<li>content component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6815">OFBIZ-6815</a>)</li>
 	<li>party component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6820">OFBIZ-6820</a>)</li>
 	<li>party and specialpurpose/ecommerce component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6821">OFBIZ-6821</a>)</li>
 	<li>workeffort component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6822">OFBIZ-6822</a>)</li>
 	<li>framework/common component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6823">OFBIZ-6823</a>)</li>
 	<li>framework/webtools component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6824">OFBIZ-6824</a>)</li>
 	<li>specialpurpose/bi component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6826">OFBIZ-6826</a>)</li>
 	<li>specialpurpose/birt component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6827">OFBIZ-6827</a>)</li>
 	<li>marketing component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6818">OFBIZ-6818</a>)</li>
 	<li>specialpurpose/ebay and specialpurpose/ebaystore component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6829">OFBIZ-6829</a>)</li>
 	<li>specialpurpose/googlebase component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6833">OFBIZ-6833</a>)</li>
 	<li>specialpurpose/googlecheckout component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6834">OFBIZ-6834</a>)</li>
 	<li>specialpurpose/hhfacility component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6835">OFBIZ-6835</a>)</li>
 	<li>specialpurpose/passport component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6838">OFBIZ-6838</a>)</li>
 	<li>specialpurpose/lucene component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6839">OFBIZ-6839</a>)</li>
 	<li>specialpurpose/scrum component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6836">OFBIZ-6836</a>)</li>
 	<li>specialpurpose/example component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6831">OFBIZ-6831</a>)</li>
 	<li>securityext component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6975">OFBIZ-6975</a>)</li>
 	<li>all theme components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7022">OFBIZ-7022</a>)</li>
</ul>
</li>
 	<li>Upgrade Tomcat to 8.0.32 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6915">OFBIZ-6915</a>)</li>
 	<li>Add Support For Compound Screen Widget XML Files (<a href="https://issues.apache.org/jira/browse/OFBIZ-4090">OFBIZ-4090</a>) and add Example for Compound Screen Widget (<a href="https://issues.apache.org/jira/browse/OFBIZ-6990">OFBIZ-6990</a>)</li>
 	<li>Update supress.xml to deal with Tomcat 8.0.33</li>
 	<li>Remove Facilities.groovy from hhfacility as it isn't being used (<a href="https://issues.apache.org/jira/browse/OFBIZ-6841">OFBIZ-6841</a>)</li>
 	<li>UI Improvements in webtools/widget/Menus.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-7006">OFBIZ-7006</a>)</li>
 	<li>Support to add condition for Geo Location in Promo Engine (<a href="https://issues.apache.org/jira/browse/OFBIZ-7008">OFBIZ-7008</a>)</li>
 	<li>Upgrade the Apache Tika Library, related to (<a href="https://issues.apache.org/jira/browse/OFBIZ-6497">OFBIZ-6497</a>) and (<a href="https://issues.apache.org/jira/browse/OFBIZ-7015">OFBIZ-7015</a>)</li>
 	<li>Support configuration options for
<ul>
 	<li>ordermgr (<a href="https://issues.apache.org/jira/browse/OFBIZ-6191">OFBIZ-6191</a>)</li>
 	<li>catalog webapp (<a href="https://issues.apache.org/jira/browse/OFBIZ-6192">OFBIZ-6192</a>)</li>
 	<li>ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-6193">OFBIZ-6193</a>)</li>
 	<li>workeffort (<a href="https://issues.apache.org/jira/browse/OFBIZ-6294">OFBIZ-6294</a>)</li>
 	<li>bi (<a href="https://issues.apache.org/jira/browse/OFBIZ-6194">OFBIZ-6194</a>)</li>
</ul>
</li>
 	<li>Remove limitation regarding menu-name in ofbiz-component.xsd (<a href="https://issues.apache.org/jira/browse/OFBIZ-6667">OFBIZ-6667</a>)</li>
 	<li>Renamed party/templates folder to party/template (<a href="https://issues.apache.org/jira/browse/OFBIZ-6820">OFBIZ-6820</a>)</li>
 	<li>Moved changeOrgPartyId.groovy to WEB-INF/actions, also removed unused ofbizsetup/viewcontact.ftl file (<a href="https://issues.apache.org/jira/browse/OFBIZ-6814">OFBIZ-6814</a>)</li>
 	<li>Renamed ecommerce/templates to ecommerce/template to make it consistent (<a href="https://issues.apache.org/jira/browse/OFBIZ-6811">OFBIZ-6811</a>)</li>
 	<li>Refactor Start.java as per guidelines in (<a href="https://issues.apache.org/jira/browse/OFBIZ-6783">OFBIZ-6783</a>)</li>
 	<li>Use SecureRandom instead of Random where appropriate, and randomUUID for externalKey (<a href="https://issues.apache.org/jira/browse/OFBIZ-7028">OFBIZ-7028</a>)</li>
 	<li>Add ability to change Routing statuses (<a href="https://issues.apache.org/jira/browse/OFBIZ-6307">OFBIZ-6307</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>Possible security issue "Flaw in content wrapper cache handling with encoderType" (<a href="https://issues.apache.org/jira/browse/OFBIZ-6973">OFBIZ-6973</a>)</li>
 	<li>Redundant image in popup (tooltip) (<a href="https://issues.apache.org/jira/browse/&lt;a href=">OFBIZ-6968</a>"&gt;<a href="https://issues.apache.org/jira/browse/OFBIZ-6968">OFBIZ-6968</a>)</li>
 	<li>Resource leakes in CommonServices.java (<a href="https://issues.apache.org/jira/browse/OFBIZ-6972">OFBIZ-6972</a>)</li>
 	<li>Remove dead imports (<a href="https://issues.apache.org/jira/browse/OFBIZ-6971">OFBIZ-6971</a>)</li>
 	<li>SagePay classes make use of deprecated httpclient features (<a href="https://issues.apache.org/jira/browse/OFBIZ-6286">OFBIZ-6286</a>)</li>
 	<li>Removes useless delegator var and import in SagePayPaymentServices</li>
 	<li>Remove the deprecated code from trunk if deprecated before December 2014 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6273">OFBIZ-6273</a>)</li>
 	<li>Fixes "Error in entity reference chart for static in webtools" (<a href="https://issues.apache.org/jira/browse/OFBIZ-6995">OFBIZ-6995</a>)</li>
 	<li>Corrects an error when sorting a localized field when the order way is present like '-field', '+field', 'field ASC', 'field DESC'</li>
 	<li>Code correction for service=findContentParents (<a href="https://issues.apache.org/jira/browse/OFBIZ-6997">OFBIZ-6997</a>)</li>
 	<li>Some files set viewIndex to 1 by default rather than 0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6705">OFBIZ-6705</a>)</li>
 	<li>Replace streamDataResource with getDataResourceStream DataResourceWorker method, thus fixing OTHER_OBJECT stream dataResource management (<a href="https://issues.apache.org/jira/browse/OFBIZ-6944">OFBIZ-6944</a>)</li>
 	<li>Clicking party name from the header section generates an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6953">OFBIZ-6953</a>)</li>
 	<li>POS login page getting error FileNotFoundException (<a href="https://issues.apache.org/jira/browse/OFBIZ-7007">OFBIZ-7007</a>)</li>
 	<li>Shipping method is shown on all Promo Conditions even when only a single condition includes Shipping Method (<a href="https://issues.apache.org/jira/browse/OFBIZ-7010">OFBIZ-7010</a>)</li>
 	<li>GlAccountOrganizations manually added using accounting forms do not appear on trial report because fromDate gets set to NULL (<a href="https://issues.apache.org/jira/browse/OFBIZ-5938">OFBIZ-5938</a>)</li>
 	<li>Incorrect order adjustment after order item is cancelled (<a href="https://issues.apache.org/jira/browse/OFBIZ-6781">OFBIZ-6781</a>)</li>
 	<li>Ofbizsetup create product store causes an exception, remove the use of temp file to load entity data (<a href="https://issues.apache.org/jira/browse/OFBIZ-5949">OFBIZ-5949</a>)</li>
 	<li>Party search form does not properly collapse sections when none|postal|telecom|other selected (<a href="https://issues.apache.org/jira/browse/OFBIZ-7013">OFBIZ-7013</a>)</li>
 	<li>Fixed a regression on &lt;auto-parameters-entity/&gt; and &lt;auto-parameters-service/&gt; in which default-entity-name and default-service-name weren't taken in consideration anymore (<a href="https://issues.apache.org/jira/browse/OFBIZ-5703">OFBIZ-5703</a>)</li>
 	<li>Editing project in Project Manager duplicates resources (<a href="https://issues.apache.org/jira/browse/OFBIZ-6989">OFBIZ-6989</a>)</li>
 	<li>Calling Groovy as Event generates error when delegator.find used (<a href="https://issues.apache.org/jira/browse/OFBIZ-6808">OFBIZ-6808</a>)</li>
 	<li>Fixes "ExampleCompoundWidgets throws errors" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7023">OFBIZ-7023</a>)</li>
 	<li>Attribute 'placeholder' is not allowed to appear in element 'text' (<a href="https://issues.apache.org/jira/browse/OFBIZ-7024">OFBIZ-7024</a>)</li>
 	<li>Remove duplicated jars under solr component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7026">OFBIZ-7026</a>)</li>
 	<li>Email-Notification send multiple times (<a href="https://issues.apache.org/jira/browse/OFBIZ-7025">OFBIZ-7025</a>)</li>
 	<li>Error in sendMailHiddenInLog service (<a href="https://issues.apache.org/jira/browse/OFBIZ-5732">OFBIZ-5732</a>)</li>
</ul>
<h2>Documentation</h2>
<ul>
 	<li>Update OWASP dependency-check documents</li>
 	<li>Add a comment to the testRemoteSoap service to clarify when to use it and how it works.</li>
 	<li>Improve uom convert error message</li>
 	<li>Improved the documentation about the purpose and behavior of the "auth" and "in-validate" secas events.</li>
</ul>
