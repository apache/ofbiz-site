---
layout: post
title: 'Apache OFBiz News - November 2017 '
date: '2017-12-12T13:31:03+00:00'
permalink: apache-ofbiz-news-november-2017
---
<h2>Apache OFBiz News November 2017 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about our continuing work to convert Minilang to Groovy,  we participate and collaborate during our Community Days, we share some community statistics about how we are working together and we celebrate our 11th year as an Apache Top Level project.
<!--more--> 
<h2>Happy OFBiz Birthday!</h2>It was 11 years ago on 20th December 2006 that Apache OFBiz graduated from the Apache Incubator to become a Top Level Project. Since then, with the help of our great community, we have continued to grow, develop and incorporate new technologies. Our project now has 40 committers and includes a large number of contributors coming from our very active user and developer mailing lists.
<p></p>
Over the past 11 years the project has released a range of OFBiz versions from 4.0 through to 16.11 and are currently preparing to create our branch releases that will be the basis for our next releases. Help us celebrate our Apache Birthday this month and we look forward to the next 11 years at Apache! 
<h2>Minilang to Groovy Conversion</h2>Some time ago we mentioned that we would be converting our minilang scripts to Groovy where it was more efficient to do so. Work is still progressing on this and you can follow progress on <a href="https://issues.apache.org/jira/browse/OFBIZ-9350" target="_blank" rel="noopener">  JIRA OFBIZ 9350 Deprecate Minilang</a><p></p>
Also one of our contributors, Nicolas Malin has updated our test tools suite to include Groovy tests. Details of implementation can be found in <a href="https://issues.apache.org/jira/browse/OFBIZ-9996" target="_blank" rel="noopener">  JIRA OFBIZ-9996</a>. If you would like to help in the conversion effort then please send a message to our dev mailing list..
<h2>Community Days - November</h2>During the year we try to hold several community days where our community comes together and collaborates of fixing issues and bugs, test or help produce something that helps the project. In the past the Community day has been a particular day only but feedback from the community asked us to extend the time to include the days before and after the weekend.
<p></p>
Our final set of Community Days for 2017 was planned during November running from Friday 17th - Tuesday 22nd and several community members decided to volunteer their time to work on some of our outstanding issues. Thanks very much to everyone who has worked to improve OFBiz and make it a better overall product for our users.
<h2>OFBiz Community Statistics</h2>Many of the ASF projects have access to an online that can help gather statistics about the community. This month we have decided to access a few of the statistics and share a few of the items with you.<p></p>
<strong>Mailing Lists:</strong>
<ul>
<li>Over the last 3 months, on our user mailing list, 320 emails have been sent by 74 different authors discussing 72 different topics.</li>
<li.>Over the last 3 months on our dev mailing list, 315 emails have been sent by 47 different authors discussing 107 different topics</li>
</ul>
<strong>Jira Contributions</strong>
Over the last 3 months we have had:
<ul>
<li> 27 newcomers to the project that have contributed to helping us with our Jira issues, (15 arrived in September, 11 in October and 1 in November)</li>
 <li>4 returning contributors (so people who have contributed in the past but not on a regular basis), and</li>
 <li>66 regular contributors to the project</li>
 <li> 612 issues created, 390 issues closed, 95 different people creating issues and 38 different people closing them
</ul>
It is great  to see the community maintaining its activity but also and still growing by attracting new people to the community.
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Removed com.fasterxml.jackson.core dependecies from build.gradle, as these will be downloaded with io.jsonwebtoken:jjwt</li>
 	<li>Add ability to disable entity eca rule (<a href="https://issues.apache.org/jira/browse/OFBIZ-9897">OFBIZ-9897</a>)</li>
 	<li>Add toString() method in ServiceEcaAction class file</li>
 	<li>make utility function findWebsite public to be usable from outside</li>
 	<li>Replace Inline Javascript with External Javascript (<a href="https://issues.apache.org/jira/browse/OFBIZ-9465">OFBIZ-9465</a>)</li>
 	<li>Remove deprecated method GenericDelegator.decryptFieldValue(String, String). (<a href="https://issues.apache.org/jira/browse/OFBIZ-9916">OFBIZ-9916</a>)</li>
 	<li>Token Based Authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-9833">OFBIZ-9833</a>)</li>
 	<li>Company Logo is missing at Print Pick Sheet PDF (<a href="https://issues.apache.org/jira/browse/OFBIZ-7322">OFBIZ-7322</a>)</li>
 	<li>implemented a declarative style of executing integration test reports</li>
 	<li>Use FlexibleLocation.resolveLocation to resolve the fop.path and fop.font.base.url (<a href="https://issues.apache.org/jira/browse/OFBIZ-9974">OFBIZ-9974</a>)</li>
 	<li>Remove inline js for toggleAll calling from ftls and also remove checkToggle, toggleAll and selectAll js functions (<a href="https://issues.apache.org/jira/browse/OFBIZ-8300">OFBIZ-8300</a>)</li>
 	<li>CSS files defined through layoutSettings in GlobalActions are loaded twice (<a href="https://issues.apache.org/jira/browse/OFBIZ-9770">OFBIZ-9770</a>)</li>
 	<li>Set the default value for Html screen Macro Library.(<a href="https://issues.apache.org/jira/browse/OFBIZ-7879">OFBIZ-7879</a>)</li>
 	<li>Set the default value for Fo Form Macro Library. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7932">OFBIZ-7932</a>)</li>
 	<li>Set the default value for Fo Screen Macro Library. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7933">OFBIZ-7933</a>)</li>
 	<li>Set the default value for Html Tree Macro Library.(<a href="https://issues.apache.org/jira/browse/OFBIZ-7988">OFBIZ-7988</a>)</li>
 	<li>Set the default value for Csv Screen Macro Library, Text Screen Macro Library, Xml Form Macro Library and Xls Form Macro Library. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7992">OFBIZ-7992</a>)</li>
 	<li>Set the default value for Html Form Macro Library. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7985">OFBIZ-7985</a>)</li>
 	<li>Fixing defects reported by FindBugs
<ul>
 	<li>package org.apache.ofbiz.base.start. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9573">OFBIZ-9573</a>)</li>
 	<li>package org.apache.ofbiz.securityext.login. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9637">OFBIZ-9637</a>)</li>
</ul>
</li>
 	<li>refactor list related forms in PartyScreen widgets (<a href="https://issues.apache.org/jira/browse/OFBIZ-9405">OFBIZ-9405</a>)</li>
 	<li>Refactor list related form widgets in various WorkEffort screens (<a href="https://issues.apache.org/jira/browse/OFBIZ-9415">OFBIZ-9415</a>)</li>
 	<li>Refactoring methods of PartyServices.java (<a href="https://issues.apache.org/jira/browse/OFBIZ-9982">OFBIZ-9982</a>)</li>
 	<li>refactor list related forms in PartyScreen widgets (<a href="https://issues.apache.org/jira/browse/OFBIZ-9405">OFBIZ-9405</a>)</li>
 	<li>Add a note about the --offline switch for running Gradle in an offline environment without internet connection</li>
 	<li>Upgrade Jquery 1.11.0 to JQuery 3.2.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9978">OFBIZ-9978</a>)</li>
 	<li>Replace request-redirect w/ no redirect-param attribute by request-redirect-no-param (<a href="https://issues.apache.org/jira/browse/OFBIZ-9997">OFBIZ-9997</a>)</li>
 	<li>Rearrange permission-service tab in updateShoppingList service definition</li>
 	<li>Remove unused service checkContentAssocIds and its usage (<a href="https://issues.apache.org/jira/browse/OFBIZ-9999">OFBIZ-9999</a>)</li>
 	<li>Replace Inline js with External js in renderDisplayField macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-9843">OFBIZ-9843</a>)</li>
 	<li>Fiscal Gl type is reflecting twice in drop-down of Cost Centers (<a href="https://issues.apache.org/jira/browse/OFBIZ-9759">OFBIZ-9759</a>)</li>
 	<li>Moved imagemanagement plugin from images to common/js/plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-5776">OFBIZ-5776</a>)</li>
 	<li>Add ofbiz_logo.ping (<a href="https://issues.apache.org/jira/browse/OFBIZ-9760">OFBIZ-9760</a>)</li>
 	<li>Use ofbizCurrency macro and remove hardcoded ##0.00 string (<a href="https://issues.apache.org/jira/browse/OFBIZ-9675">OFBIZ-9675</a>)</li>
 	<li>Implement Groovy test in testtools (<a href="https://issues.apache.org/jira/browse/OFBIZ-9996">OFBIZ-9996</a>)</li>
 	<li>improve makeValue in groovy DSL to load directly with a map (<a href="https://issues.apache.org/jira/browse/OFBIZ-10020">OFBIZ-10020</a>)</li>
 	<li>Add ability to store latitude and longitude as well while creating postal address (<a href="https://issues.apache.org/jira/browse/OFBIZ-9980">OFBIZ-9980</a>)</li>
 	<li>Convert BudgetServices.xml mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-9985">OFBIZ-9985</a>)</li>
 	<li>Use console.log instead of alert to show error message if setLocaleFromBrowser returns error</li>
 	<li>Remove unused service checkContentAssocIds and its usage (<a href="https://issues.apache.org/jira/browse/OFBIZ-9999">OFBIZ-9999</a>)</li>
 	<li>Migrate BudgetServiceTest and AutoAcctgBudgetTests from minilang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-9985">OFBIZ-9985</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Replace Inline Javascript with External Javascript (<a href="https://issues.apache.org/jira/browse/OFBIZ-9465">OFBIZ-9465</a>)</li>
 	<li>Updated tomcat-embed-websocket jar to 8.5.23</li>
 	<li>Fixing defects reported by FindBugs
<ul>
 	<li>package org.apache.ofbiz.securityext.login. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9637">OFBIZ-9637</a>)</li>
</ul>
</li>
 	<li>Hardcoded stylesheets and javascript resources (<a href="https://issues.apache.org/jira/browse/OFBIZ-5682">OFBIZ-5682</a>)</li>
 	<li>Upgrade Jquery 1.11.0 to JQuery 3.2.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9978">OFBIZ-9978</a>)</li>
 	<li>Replace request-redirect w/ no redirect-param attribute by request-redirect-no-param (<a href="https://issues.apache.org/jira/browse/OFBIZ-9997">OFBIZ-9997</a>)</li>
 	<li>Using Bootstrap Framework for E-Commerce Website (<a href="https://issues.apache.org/jira/browse/OFBIZ-9760">OFBIZ-9760</a>)</li>
 	<li>Removed some inline styling from xhtml and w3c images, also removed protocol from external url and used //, the browser automatically appends the appropriate protocol (<a href="https://issues.apache.org/jira/browse/OFBIZ-9760">OFBIZ-9760</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>doDecrypt method may throw ClassNotFoundException, BadPaddingException, instead of catching GeneralException Exception will be caught</li>
 	<li>The online help is broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-9837">OFBIZ-9837</a>)</li>
 	<li>Error on first access to Online Help (<a href="https://issues.apache.org/jira/browse/OFBIZ-9925">OFBIZ-9925</a>)</li>
 	<li>Corrected wrong FindBugs/refactoring change introduced in r1813640. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9716">OFBIZ-9716</a>)</li>
 	<li>Sales by Store report calculates Value Sold incorrectly (<a href="https://issues.apache.org/jira/browse/OFBIZ-9958">OFBIZ-9958</a>)</li>
 	<li>UtilMisc.ensureLocale does not always return a valid Locale. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9964">OFBIZ-9964</a>)</li>
 	<li>Empty Space above Find Payment header <a href="https://issues.apache.org/jira/browse/OFBIZ-9965">OFBIZ-9965</a></li>
 	<li>NullPointer Access in CategoryContentWrapper.getProductCategoryContentAsText when locale parameter is missing (<a href="https://issues.apache.org/jira/browse/OFBIZ-9970">OFBIZ-9970</a>)</li>
 	<li>EntityListIterator.getComplateList returns error randomly (<a href="https://issues.apache.org/jira/browse/OFBIZ-9919">OFBIZ-9919</a>)</li>
 	<li>Inventory Report PDF lists all available statusId's irrespective of selection criteria (<a href="https://issues.apache.org/jira/browse/OFBIZ-7438">OFBIZ-7438</a>)</li>
 	<li>[FB] Find Security Bugs (<a href="https://issues.apache.org/jira/browse/OFBIZ-9973">OFBIZ-9973</a>)</li>
 	<li>ShippingEvents.getShipGroupEstimate() method gives untraceable null pointer exception for BigDecimal comparison (<a href="https://issues.apache.org/jira/browse/OFBIZ-9975">OFBIZ-9975</a>)</li>
 	<li>Party Id field missing while creating contact list party in the marketing component (<a href="https://issues.apache.org/jira/browse/OFBIZ-9698">OFBIZ-9698</a>)</li>
 	<li>Duplicated dollar symbols should be removed from uiLabels. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9968">OFBIZ-9968</a>)</li>
 	<li>Content related changes needs OFBiz server restart (<a href="https://issues.apache.org/jira/browse/OFBIZ-9922">OFBIZ-9922</a>)</li>
 	<li>Fix Default or Empty Catch block in Java and Groovy files (<a href="https://issues.apache.org/jira/browse/OFBIZ-8341">OFBIZ-8341</a>)</li>
 	<li>OpenStreetMap geolocation no longer works (<a href="https://issues.apache.org/jira/browse/OFBIZ-9991">OFBIZ-9991</a>)</li>
 	<li>Issue in redirection while creating a new party group (<a href="https://issues.apache.org/jira/browse/OFBIZ-9914">OFBIZ-9914</a>)</li>
 	<li>Deleting workeffort from Find WorkEffort page gives unusual response (<a href="https://issues.apache.org/jira/browse/OFBIZ-9648">OFBIZ-9648</a>)</li>
 	<li>Create Related Account from Contact Profile redirect to empty profile screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-9697">OFBIZ-9697</a>)</li>
 	<li>Inventory transfer creates unnecessary record with 0 (zero) (<a href="https://issues.apache.org/jira/browse/OFBIZ-9971">OFBIZ-9971</a>)</li>
 	<li>Incorrect success message after creating prospect (<a href="https://issues.apache.org/jira/browse/OFBIZ-9896">OFBIZ-9896</a>)</li>
 	<li>Add the class GroovyScriptTestCase.java and the simple groovy test-suite in the previous commit related to issue <a href="https://issues.apache.org/jira/browse/OFBIZ-9996">OFBIZ-9996</a></li>
 	<li>UI Issue with Account Limit at Find Billing Account(s) (<a href="https://issues.apache.org/jira/browse/OFBIZ-9899">OFBIZ-9899</a>)</li>
 	<li>No option to create the account contacts in SFA component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10010">OFBIZ-10010</a>)</li>
 	<li>Replace org.apache.commons.lang.StringEscapeUtils.unescapeHtml() method by org.jsoup.parser.Parser.unescapeEntities() (<a href="https://issues.apache.org/jira/browse/OFBIZ-10023">OFBIZ-10023</a>)</li>
 	<li>Improvements in gift certificate process (<a href="https://issues.apache.org/jira/browse/OFBIZ-10027">OFBIZ-10027</a>)</li>
</ul>
