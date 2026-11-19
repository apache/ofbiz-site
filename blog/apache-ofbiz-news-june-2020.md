---
layout: post
title: Apache OFBiz News - June 2020
date: '2020-08-19T14:47:38+00:00'
permalink: apache-ofbiz-news-june-2020
---
<h2>Apache OFBiz News&nbsp;June&nbsp;2020</h2><p>Welcome to our regular monthly round-up of OFBiz news. This month we 
share with you details of our usual list of features, improvements and 
statistics.</p><h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p> 
  <ul><li><strong>JIRA Issue Tracker:</strong> 85 issues were opened and 80 issues were closed ( 10 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong> 
      <ul><li><strong>Framework: </strong>160 commits to the code base that changed 32,253 lines of code ( 10 committers were active)</li><li><strong>Plugins: </strong>22 commits to the code base that changed 3,184 lines of code ( 5 committers were active)</li></ul> 
    </li><li><strong>Mailing Lists:</strong> 
      <ul><li><strong>Dev: </strong>246 emails sent and 49 topics discussed (33 different people)</li><li><strong>User: </strong>65 emails sent and 16 topics discussed (25 different people) <br></li></ul></li></ul><h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>framework</h3>

<ul>

    <li>Headerizes external script in multi-block html template (<a href="https://issues.apache.org/jira/browse/OFBIZ-11741" target="_blank">OFBIZ-11741</a>) </li>

    <li>Provides use of GroovyBaseScript's logging utility methods instead of using Debug (<a href="https://issues.apache.org/jira/browse/OFBIZ-11762" target="_blank">OFBIZ-11762</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/185" target="_blank">#185</a>) </li>

    <li>Converts testExpirePartyRate test from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11568" target="_blank">OFBIZ-11568</a>) </li>

    <li>Converts RateTests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11561" target="_blank">OFBIZ-11561</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11562" target="_blank">OFBIZ-11562</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11563" target="_blank">OFBIZ-11563</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11564" target="_blank">OFBIZ-11564</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11565" target="_blank">OFBIZ-11565</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11566" target="_blank">OFBIZ-11566</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11567" target="_blank">OFBIZ-11567</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11569" target="_blank">OFBIZ-11569</a>) </li>

    <li>Refactors class CatalogWorker to remove duplicate code (<a href="https://issues.apache.org/jira/browse/OFBIZ-11696" target="_blank">OFBIZ-11696</a>) </li>

    <li>Improves purchases by product report (<a href="https://issues.apache.org/jira/browse/OFBIZ-11733" target="_blank">OFBIZ-11733</a>) </li>

    <li>Improves UI on View Order page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10985" target="_blank">OFBIZ-10985</a>) </li>

    <li>Enforces noninstantiability to ExpressionUiHelper class (<a href="https://github.com/apache/ofbiz-framework/pull/173" target="_blank">#173</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/9423bfdcc58a253b2678a045826720118df465cf" target="_blank">GitHub Link</a>) </li>

    <li>Enforces noninstantiability to JobUtil class (<a href="https://github.com/apache/ofbiz-framework/pull/176" target="_blank">#176</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/65c235704cf472a20b1ff51999ccb80040f369ec" target="_blank">GitHub Link</a>) </li>

    <li>Enforces noninstantiability to ServiceGroupReader class (<a href="https://github.com/apache/ofbiz-framework/pull/177" target="_blank">#177</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/e92becb0fd99aac54529b21e87b0308c87c2f1e6" target="_blank">GitHub Link</a>) </li>

    <li>Enforces noninstantiability to BillingAccountWorker class (<a href="https://github.com/apache/ofbiz-framework/pull/167" target="_blank">#167</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/9ade9d776b41cbe33731ec4702d6c1d5dd3ff990" target="_blank">GitHub Link</a>) </li>

    <li>Enforces noninstantiability to FinAccountHelper class (<a href="https://github.com/apache/ofbiz-framework/pull/171" target="_blank">#171</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/73b15e98677567787e983db5d76df0f296070a44" target="_blank">GitHub Link</a>) </li>

    <li>Enforces noninstantiability to ConfigXMLReader class (<a href="https://github.com/apache/ofbiz-framework/pull/178" target="_blank">#178</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/924df4b217d5d0284a691d5445cc06a45e2b47e4" target="_blank">GitHub Link</a>) </li>

    <li>Enforces noninstantiability to GroovyUtil class (<a href="https://github.com/apache/ofbiz-framework/pull/180" target="_blank">#180</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/846e5f0dedcb4a723b0d0e37b1bf2d9102fcb0b3" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused location ${parameters.quoteDecoratorLocation} in decorator screen definitions (<a href="https://issues.apache.org/jira/browse/OFBIZ-11802" target="_blank">OFBIZ-11802</a>) </li>

    <li>Enforces noninstantiability to LoginWorker class (<a href="https://github.com/apache/ofbiz-framework/pull/175" target="_blank">#175</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/c00e61aa1804988d3153c3a5debab2d421d85567" target="_blank">GitHub Link</a>) </li>

    <li>Adds CSRF token support for 'getJs' request uri (<a href="https://issues.apache.org/jira/browse/OFBIZ-11686" target="_blank">OFBIZ-11686</a>) </li>

    <li>Removes plugins as a submodule (<a href="https://issues.apache.org/jira/browse/OFBIZ-8459" target="_blank">OFBIZ-8459</a>) </li>

    <li>Overloads groovy utility method 'logError' to handle error logging with only throwable object as parameter (<a href="https://issues.apache.org/jira/browse/OFBIZ-11762" target="_blank">OFBIZ-11762</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/194" target="_blank">#194</a>) </li>

    <li>Removes unnecessary iterations and sets inventory for all productFacilities in setLastInventoryCount (<a href="https://issues.apache.org/jira/browse/OFBIZ-11796" target="_blank">OFBIZ-11796</a>) </li>

    <li>Provides check of embedded Javascript libs vulnerabilities by using retire.js (<a href="https://issues.apache.org/jira/browse/OFBIZ-11752" target="_blank">OFBIZ-11752</a>) </li>

    <li>Allows definition of external style sheet in multi-block html template (<a href="https://issues.apache.org/jira/browse/OFBIZ-11819" target="_blank">OFBIZ-11819</a>) </li>

    <li>Changes decimals, rounding, zero and static variables names as per best practices in manufacturing component  (<a href="https://github.com/apache/ofbiz-framework/pull/200" target="_blank">#200</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/575defd088b6e785049646f8f909e6a5da363cd8" target="_blank">GitHub Link</a>) </li>

    <li>Provides pre commit hook to check staged files with list issues (<a href="https://issues.apache.org/jira/browse/OFBIZ-11304" target="_blank">OFBIZ-11304</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors (<a href="https://issues.apache.org/jira/browse/OFBIZ-11304" target="_blank">OFBIZ-11304</a>) </li>

    <li>Changes decimals, rounding, zero and static variables names as per best practices (<a href="https://github.com/apache/ofbiz-framework/pull/195" target="_blank">#195</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/a52786296100efe67b77eb2c2e44efcb27a495b6" target="_blank">GitHub Link</a>) </li>

    <li>Changes decimals, rounding, zero and static variables names as per best practices in order component (<a href="https://github.com/apache/ofbiz-framework/pull/196" target="_blank">#196</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/c03e27d73e860ccb3a9bd8950f3771d68e8dd0dc" target="_blank">GitHub Link</a>) </li>

    <li>Changes decimals, rounding, zero and static variables names as per best practices in third party payment component (<a href="https://github.com/apache/ofbiz-framework/pull/201" target="_blank">#201</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/f85d6439aaccdf0f80f63c589e0ec76a79f8207c" target="_blank">GitHub Link</a>) </li>

    <li>Changes decimals, rounding, zero and static variables names as per best practices in accounting component (<a href="https://github.com/apache/ofbiz-framework/pull/202" target="_blank">#202</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/e797845dda3141206aaebe0d48c662fd4908c16c" target="_blank">GitHub Link</a>) </li>

    <li>Converts assertInvoiceTotal, testInvoiceAppl and testToPayment tests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11530" target="_blank">OFBIZ-11530</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11557" target="_blank">OFBIZ-11557</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11559" target="_blank">OFBIZ-11559</a>) </li>

    <li>Converts testBillingAppl test from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11558" target="_blank">OFBIZ-11558</a>) </li>

    <li>Adds paymentRefNumber to CheckoutOptions.ftl (<a href="https://github.com/apache/ofbiz-framework/pull/203" target="_blank">#203</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/a3059c097dfd2f2ce85ba6eb90ac41f2556b1a91" target="_blank">GitHub Link</a>) </li>

    <li>Checks if the value passed to checkStringForHtmlSafe is not null (<a href="https://issues.apache.org/jira/browse/OFBIZ-11822" target="_blank">OFBIZ-11822</a>) </li>

    <li>Cleans code according to SpotBugs and Eclipse (<a href="https://issues.apache.org/jira/browse/OFBIZ-11824" target="_blank">OFBIZ-11824</a>) </li>

    <li>Provides a .asf.yaml file for more information in OFBiz GitHub repos (<a href="https://issues.apache.org/jira/browse/OFBIZ-11825" target="_blank">OFBIZ-11825</a>) </li>

    <li>Provides Gradle Checkstyle task (<a href="https://issues.apache.org/jira/browse/OFBIZ-11304" target="_blank">OFBIZ-11304</a>) </li>

    <li>Renames static String 'resources' as per proper naming convention in framework (<a href="https://issues.apache.org/jira/browse/OFBIZ-11834" target="_blank">OFBIZ-11834</a>) </li>

    <li>Migrates checkCreateOrderRequirement service to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-9984" target="_blank">OFBIZ-9984</a>) </li>

    <li>Replaces single method call lambdas with method references (<a href="https://issues.apache.org/jira/browse/OFBIZ-11835" target="_blank">OFBIZ-11835</a>) </li>

    <li>Replaces for-loops with forEach loops in veriouse classes (<a href="https://issues.apache.org/jira/browse/OFBIZ-11829" target="_blank">OFBIZ-11829</a>) </li>

    <li>Replaces Map#get with Map#getOrDefault (<a href="https://issues.apache.org/jira/browse/OFBIZ-11832" target="_blank">OFBIZ-11832</a>) </li>

    <li>Replaces try-finally with try with resources (<a href="https://issues.apache.org/jira/browse/OFBIZ-11826" target="_blank">OFBIZ-11826</a>) </li>

    <li>Converts testTaxGeoId test from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11560" target="_blank">OFBIZ-11560</a>) </li>

    <li>Refactors definition of test 'application-tests' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11560" target="_blank">OFBIZ-11560</a>) </li>

    <li>Converts ShipmentReceiptServices services from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11468" target="_blank">OFBIZ-11468</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/150" target="_blank">#150</a>) </li>

    <li>Replaces anonymous types with lambda expressions (<a href="https://issues.apache.org/jira/browse/OFBIZ-11833" target="_blank">OFBIZ-11833</a>) </li>

    <li>Merges identical catch blocks in single catch blocks (<a href="https://issues.apache.org/jira/browse/OFBIZ-11827" target="_blank">OFBIZ-11827</a>) </li>

    <li>Refactors PickListServices#isBinComplete method to remove unnecessary iterations (<a href="https://issues.apache.org/jira/browse/OFBIZ-11823" target="_blank">OFBIZ-11823</a>) </li>

    <li>Moves Shipment services files from sub-dirs to shipment dir (<a href="https://issues.apache.org/jira/browse/OFBIZ-11468" target="_blank">OFBIZ-11468</a>) </li>

    <li>Replaces Iterator#remove with Collection#removeIf (<a href="https://issues.apache.org/jira/browse/OFBIZ-11831" target="_blank">OFBIZ-11831</a>) </li>

    <li>Converts createFinAccoutnTransFromPayment service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11492" target="_blank">OFBIZ-11492</a>) </li>

    <li>Converts InvoicePerShipmentTests tests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11553" target="_blank">OFBIZ-11553</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/208" target="_blank">#208</a>) </li>

    <li>Replaces explicit type argument with diamond operator (<a href="https://issues.apache.org/jira/browse/OFBIZ-11828" target="_blank">OFBIZ-11828</a>) </li>

    <li>Replaces Collection#sort with List#sort (<a href="https://issues.apache.org/jira/browse/OFBIZ-11830" target="_blank">OFBIZ-11830</a>) </li>

    <li>Ensures the use of GroovyBaseScript's makeValue utility methods in each Groovy file (<a href="https://issues.apache.org/jira/browse/OFBIZ-11779" target="_blank">OFBIZ-11779</a>) </li>

    <li>Upgrades Tomcat to 9.0.36 due to CVE-2020-11996 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11848" target="_blank">OFBIZ-11848</a>) </li>

    <li>Makes ScreenFopViewHandler#render's debug area also usable on Windows (<a href="https://github.com/apache/ofbiz-framework/commit/b1e48eef3758615fde107b6cfae80f917c2e164f" target="_blank">GitHub Link</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors (<a href="https://github.com/apache/ofbiz-framework/commit/8b8e89024912e5821a2f55bc282105a77c5dde31" target="_blank">GitHub Link</a>) </li>

    <li>Converts AutoAcctgTransTestsPurchase tests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11522" target="_blank">OFBIZ-11522</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Let Breadcrumbs be shown in all pages of eCommerce application (<a href="https://issues.apache.org/jira/browse/OFBIZ-2584" target="_blank">OFBIZ-2584</a>) </li>

    <li>Enforces noninstantiability to FinAccountHelper class (<a href="https://github.com/apache/ofbiz-plugins/pull/22" target="_blank">#22</a>) (<a href="https://github.com/apache/ofbiz-plugins/commit/b08fa4a9441f4f67b210b29ef424f0eaf6ff0433" target="_blank">GitHub Link</a>) </li>

    <li>Enforces noninstantiability to LdapLoginWorker, OFBizSolrLoginWorker class (<a href="https://github.com/apache/ofbiz-plugins/pull/23" target="_blank">#23</a>) (<a href="https://github.com/apache/ofbiz-plugins/commit/9c447f248699e5942bc3b4c2ce4cb94d088fdf95" target="_blank">GitHub Link</a>) </li>

    <li>Provides use of GroovyBaseScript's logging utility methods instead of using Debug (<a href="https://issues.apache.org/jira/browse/OFBIZ-11762" target="_blank">OFBIZ-11762</a>) (<a href="https://github.com/apache/ofbiz-plugins/pull/24" target="_blank">#24</a>) </li>

    <li>Changes dependency of decimals and rounding static variables as per best practices in ebay component (<a href="https://github.com/apache/ofbiz-plugins/pull/28" target="_blank">#28</a>) (<a href="https://github.com/apache/ofbiz-plugins/commit/b4bdfcdf929919e7972d4882074be68e39643e40" target="_blank">GitHub Link</a>) </li>

    <li>Converts FixedAssetMaintTests test from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11444" target="_blank">OFBIZ-11444</a>) (<a href="https://github.com/apache/ofbiz-plugins/pull/29" target="_blank">#29</a>) </li>

    <li>Provides use of a .asf.yaml file for more information in OFBiz GitHub repos (<a href="https://github.com/apache/ofbiz-plugins/commit/670c08e7a3cab733e03ba16ae80a20346df95566" target="_blank">GitHub Link</a>) </li>

    <li>Replaces for-loops with forEach loops in veriouse classes (<a href="https://issues.apache.org/jira/browse/OFBIZ-11829" target="_blank">OFBIZ-11829</a>) </li>

    <li>Replaces try-finally with try with resources (<a href="https://issues.apache.org/jira/browse/OFBIZ-11826" target="_blank">OFBIZ-11826</a>) </li>

    <li>Replaces anonymous types with lambda expressions (<a href="https://issues.apache.org/jira/browse/OFBIZ-11833" target="_blank">OFBIZ-11833</a>) </li>

    <li>Adds a new plugin for integration of First Data payment gateway with Apache OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-11837" target="_blank">OFBIZ-11837</a>) </li>

    <li>Merges identical catch blocks in single catch blocks (<a href="https://issues.apache.org/jira/browse/OFBIZ-11827" target="_blank">OFBIZ-11827</a>) </li>

    <li>Replaces explicit type argument with diamond operator (<a href="https://issues.apache.org/jira/browse/OFBIZ-11828" target="_blank">OFBIZ-11828</a>) </li>

    <li>Replaces Collection#sort with List#sort (<a href="https://issues.apache.org/jira/browse/OFBIZ-11830" target="_blank">OFBIZ-11830</a>) </li>

    <li>Ensures the use of GroovyBaseScript's makeValue utility methods in each Groovy file (<a href="https://issues.apache.org/jira/browse/OFBIZ-11779" target="_blank">OFBIZ-11779</a>) (<a href="https://github.com/apache/ofbiz-plugins/pull/33" target="_blank">#33</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes: ViewShipment in facility does not show phone details (<a href="https://issues.apache.org/jira/browse/OFBIZ-11785" target="_blank">OFBIZ-11785</a>) </li>

    <li>Fixes: UI issue in payment lookup (<a href="https://issues.apache.org/jira/browse/OFBIZ-9476" target="_blank">OFBIZ-9476</a>) </li>

    <li>Fixes wrong target link in shipment form 'ListShipment' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11787" target="_blank">OFBIZ-11787</a>) </li>

    <li>Fixes: startup-service does not work without runtime-data-id (<a href="https://issues.apache.org/jira/browse/OFBIZ-11668" target="_blank">OFBIZ-11668</a>) </li>

    <li>Fixes: Navigation tree is not displayed in showHelp page (<a href="https://issues.apache.org/jira/browse/OFBIZ-11803" target="_blank">OFBIZ-11803</a>) </li>

    <li>Fixes: plugins in common-theme/webapp/common/js is not monitored by git (<a href="https://issues.apache.org/jira/browse/OFBIZ-11745" target="_blank">OFBIZ-11745</a>) </li>

    <li>Fixes: Double encoded urls are not being decoded (<a href="https://issues.apache.org/jira/browse/OFBIZ-11822" target="_blank">OFBIZ-11822</a>) </li>

    <li>Fixes: getEntityRefData service has a weird logging issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-11401" target="_blank">OFBIZ-11401</a>) </li>

    <li>Fixes: Rendering screen within freemarker template not done correctly when multi-block=true (<a href="https://issues.apache.org/jira/browse/OFBIZ-11706" target="_blank">OFBIZ-11706</a>) </li>

    <li>Adds missing license headers (<a href="https://github.com/apache/ofbiz-framework/commit/260373673d61fd34850f4285a3a7c86e99cfb3a3" target="_blank">GitHub Link</a>) </li>

    <li>Updates hard coded values of location types and used all available location enums instead (<a href="https://issues.apache.org/jira/browse/OFBIZ-6042" target="_blank">OFBIZ-6042</a>) </li>

    <li>Fixes: IDOR vulnerability in the order processing feature in ecommerce component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11836" target="_blank">OFBIZ-11836</a>) </li>

    <li>Fixes an issues in accept return process (<a href="https://issues.apache.org/jira/browse/OFBIZ-11843" target="_blank">OFBIZ-11843</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/211" target="_blank">#211</a>) </li>

    <li>Fixes: With Rainbow theme, a scrollbar appears at bottom where it's not needed (<a href="https://issues.apache.org/jira/browse/OFBIZ-10174" target="_blank">OFBIZ-10174</a>) </li>

    <li>Fixes: EntityQuery#queryCount is throwing error with distinct method (<a href="https://issues.apache.org/jira/browse/OFBIZ-11294" target="_blank">OFBIZ-11294</a>) </li>

    <li>Fixes: Unable to upload additional image for a product (<a href="https://issues.apache.org/jira/browse/OFBIZ-11844" target="_blank">OFBIZ-11844</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes: Error while uploading file in eCommerce Profile's File Manager (<a href="https://issues.apache.org/jira/browse/OFBIZ-10746" target="_blank">OFBIZ-10746</a>) </li>

    <li>Adds missing license header (<a href="https://github.com/apache/ofbiz-plugins/commit/0e1510701abb0af573d89bd784f69f06a037f8ed" target="_blank">GitHub Link</a>) </li>

</ul>

<h2>Documentation</h2>

<h3>Framework</h3>

<ul>

    <li>Provides help link using asciidoc files via generated html (<a href="https://issues.apache.org/jira/browse/OFBIZ-11693" target="_blank">OFBIZ-11693</a>) </li>

    <li>Removes docbook help files for accounting (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Removes docbook help files for commonext (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Adds an image and a link to the ASL2 license (<a href="https://github.com/apache/ofbiz-framework/commit/26bb8f602fcb7bd3a3d4a8b4cfab67df35a45764" target="_blank">GitHub Link</a>) </li>

    <li>Removes docbook help files for content (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Removes docbook help files for humanres (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Provides manufacturing migration to asciidoc and new documentation organization (<a href="https://issues.apache.org/jira/browse/OFBIZ-11416" target="_blank">OFBIZ-11416</a>) </li>

    <li>Provides manufacturing Production Run migration to asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11416" target="_blank">OFBIZ-11416</a>) </li>

    <li>Provides manufacturing Routing migration to asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11416" target="_blank">OFBIZ-11416</a>) </li>

    <li>Provides manufacturing Routing Task migration to asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11416" target="_blank">OFBIZ-11416</a>) </li>

    <li>Provides manufacturing Calendar migration to asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11416" target="_blank">OFBIZ-11416</a>) </li>

    <li>Provides manufacturing Cost Component Calc migration to asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11416" target="_blank">OFBIZ-11416</a>) </li>

    <li>Provides manufacturing Bill Of Material migration to asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11416" target="_blank">OFBIZ-11416</a>) </li>

    <li>Provides manufacturing MRP migration to asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11416" target="_blank">OFBIZ-11416</a>) </li>

    <li>Migrates help link to asciidoc user manual for manufacturing (<a href="https://issues.apache.org/jira/browse/OFBIZ-11416" target="_blank">OFBIZ-11416</a>) </li>

    <li>Removes docbook help files for manufacturing (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

</ul>
