---
layout: post
title: Apache OFBiz News - September 2015
date: '2015-10-04T14:58:23+00:00'
permalink: apache_ofbiz_news_september_2015
---
<h2>Apache OFBiz News September 2015</h2>
The 3rd Apache OFBiz Community Day in September was a great success, the new website structure takes form and many bugfixes and improvements were made during the last month.

<!--more-->
<h2>3rd OFBiz Community Day 2015</h2>
The latest <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">OFBiz Community Day</a> in September once again was a great success. We had 47 issues from our current backlog included in the
sprint. By the end of the Community Day we had closed 32 of the 47 issues (which is fantastic!). <br><br>
Please see below for a couple links to the details of the sprint reports:<br>
<a href="https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=64&amp;view=reporting&amp;chart=sprintRetrospective&amp;sprint=184">Sprint Retrospective</a> <br> 
<a href="https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=64&amp;view=reporting&amp;chart=controlChart">Control Chart</a>
<br><br>
We would like to thank everyone that took part in our Community Day and once again our community has shown how we can all work together to achieve something good for OFBiz. Our next Community Day is set for 19th December 2015.
<h2>New Website Proposal</h2>
Work on the new website is ongoing. Several website structure proposals were made and discussed by the community on the mailing lists. Based on feedback received, the community preferred the following <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Revised+Website+Structure+v2">revised website structure for Apache OFBiz</a>.<br><br>
The next step will be to put together a draft proposed design for the main page and site.

You can follow progress on this via our <a href="http://ofbiz.markmail.org/thread/agnc6ju3quqvvnjt">mailing list</a>.<br>

<h2>OFBiz at Apachecon Core EU</h2>
A full OFBiz track was included at Apachecon Core EU in Budapest. A wide range of talks were presented covering Business, Community and Technical areas.
Full details will be included in our October update.<br>

<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
	<li>Apache Solr Implementation (<a href="https://issues.apache.org/jira/browse/OFBIZ-5042">OFBIZ-5042</a>).
<ul>
	<li>Added apache solr to secondary top menu and /solr/control/main request to accept the link from the menu.</li>
	<li>Add permission check on /update, /update/json, /update/csv and /update/extract requests.</li>
</ul>
</li>
	<li>Update site-conf.xsd to prioritise Groovy over BSF (<a href="https://issues.apache.org/jira/browse/OFBIZ-6597">OFBIZ-6597</a>).</li>
	<li>Replace bsf event type and handler with groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-6598">OFBIZ-6598</a>).</li>
	<li>Ant build:
<ul>
	<li>Removed build-website and docs targets, copy-dtds is sufficient.</li>
	<li>Commented out "docs-all" ant target because it is now done automatically by Buildbot.</li>
</ul>
</li>
	<li>Upgraded Apache Tomcat to the latest bug fix release of the 7 series: 7.0.64.</li>
	<li>Upgraded Solr and Lucene libraries to version 5. Added runtime/indexes/index.properties to exclude in clean-search-indexes target.</li>
	<li>Using official content type for json requests (<a href="https://issues.apache.org/jira/browse/OFBIZ-6608">OFBIZ-6608</a>).</li>
	<li>Move PartyRelationshipAndPartyDetail entity to Party component (<a href="https://issues.apache.org/jira/browse/OFBIZ-5814">OFBIZ-5814</a>). Also adds PartyRelationshipType and its relation to the view (<a href="https://issues.apache.org/jira/browse/OFBIZ-6610">OFBIZ-6610</a>).</li>
	<li>MapContext.entrySet() slows down when ByteBuffer objects are in the context (<a href="https://issues.apache.org/jira/browse/OFBIZ-6621">OFBIZ-6621</a>). Introduces a private inner class ListSet representing a Set backed by a List instead of the HashSet implementation.</li>
	<li>Form RequestRolesInfo is not being accessed from Screens (<a href="https://issues.apache.org/jira/browse/OFBIZ-5970">OFBIZ-5970</a>). Unused form was removed.</li>
	<li>Optimize ShoppingCart.removeCartItem (skip price calc and inventory check) (<a href="https://issues.apache.org/jira/browse/OFBIZ-6631">OFBIZ-6631</a>).</li>
        <li>partymgr/control/EditPartyRelationships add odd-row="alternate-row" for ListPartRelationships and remove navigation-form-name for containing screenlet for better UI (<a href="https://issues.apache.org/jira/browse/OFBIZ-6515">OFBIZ-6515</a>). Displays the relationship table with alternate colors for better visibility and uses the screenlet pagination controls at top/bottom of the list.</li>
	<li>Adding the week number in date picking dropdowns (<a href="https://issues.apache.org/jira/browse/OFBIZ-5361">OFBIZ-5361</a>). For some users, having the week shown in dropdown calendars is an important thing. There is an option to show week numbers in the dropdown date picker used by OFBiz (datetimepicker). It can be done by adding "showWeek: true," in the datetimepicker calls in framework/widget/templates/htmlFormMacroLibrary.ftl.</li>
	<li>Missing CountryCodeData.xml values for countries of the former Yugoslavia (<a href="https://issues.apache.org/jira/browse/OFBIZ-6641">OFBIZ-6641</a>). Instead of former Yugoslavia there now is Serbia. Also CountryTeleCode and CountryCapital was missing for Montenegro.</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
	<li>OFBiz does not compile (<a href="https://issues.apache.org/jira/browse/OFBIZ-6591">OFBIZ-6591</a>). The reason behind is lack of jars in applications/content/build/lib and specialpurpose/lucene/lib.</li>
	<li>The Solr redirection does not work in trunk demo (<a href="https://issues.apache.org/jira/browse/OFBIZ-6596">OFBIZ-6596</a>).
<ul>
	<li>Use response.sendRedirect to forward url to login page instead of the response.setHeader("location", url), this avoids the warning messages from EntityUtilProperties. Besides, when testing in similar config as demo-ofbiz-trunk is (port 80 -&gt; 8080, port 443 -&gt; 8443), this change can keep the url to 80 or 443.</li>
	<li>Removed https scheme check</li>
</ul>
</li>
	<li>Example component causes exceptions (<a href="https://issues.apache.org/jira/browse/OFBIZ-6601">OFBIZ-6601</a>).
<ul>
	<li>Add specialpurpose/webapp/exampleext/error/error.jsp to display error page.</li>
	<li>Move specialpurpose/example/widget/exampleext to specialpurpose/exampleext/widget/example.</li>
</ul>
</li>
	<li>Scrum component
<ul>
	<li>Total billing causes exception (<a href="https://issues.apache.org/jira/browse/OFBIZ-6600">OFBIZ-6600</a>). The import for java.sql.Timestamp was missing.</li>
	<li>View sprint overview has errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-4861">OFBIZ-4861</a>). When viewing the sprint overview page errors are shown related to burndown chart and the sprint backlog list.</li>
	<li>Scrum productstatistics shows errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-4863">OFBIZ-4863</a>).</li>
	<li>Remove unused view-maps from SCRUM controller (<a href="https://issues.apache.org/jira/browse/OFBIZ-6478">OFBIZ-6478</a>).</li>
</ul>
</li>
	<li>Some groovy files using Timestamp.valueOf are missing essential jar. (<a href="https://issues.apache.org/jira/browse/OFBIZ-6606">OFBIZ-6606</a>). The import for java.sql.Timestamp was missing in CommissionReport.groovy, CommissionRun.groovy.</li>
	<li>The EntityListIterator must be closed in EntityQuery.query() (<a href="https://issues.apache.org/jira/browse/OFBIZ-6615">OFBIZ-6615</a>).</li>
	<li>createQuoteRole, createContentRole, and createRequirementRole allow for adding Roles to a Party without permissions (<a href="https://issues.apache.org/jira/browse/OFBIZ-6605">OFBIZ-6605</a>). These functions add a PartyRole entry if the PartyRole does not exist even when the userLogin doesn't have PARTYMGR_UPDATE or PARTYMGR_CREATE permissions. A permission check was added before creating the new role.</li>
	<li>PurgeJob.java does not delete RecurrenceRule because it is still referenced by RecurrenceInfo (<a href="https://issues.apache.org/jira/browse/OFBIZ-6619">OFBIZ-6619</a>).</li>
	<li>Error in UtilValidate.isValidEan (<a href="https://issues.apache.org/jira/browse/OFBIZ-6624">OFBIZ-6624</a>). charAt offset was wrong in calcChecksum.</li>
	<li>Select survey for product store cause exception (<a href="https://issues.apache.org/jira/browse/OFBIZ-6460">OFBIZ-6460</a>). Fixed the exception due to incorrect use of EntityQuery method and fixed the query statement.</li>
	<li>PartyGeoLocation shows menus when accessed (<a href="https://issues.apache.org/jira/browse/OFBIZ-6438">OFBIZ-6438</a>).</li>
	<li>Modal window for lookup doesn't allow selection (<a href="https://issues.apache.org/jira/browse/OFBIZ-6499">OFBIZ-6499</a>). Added z-index value with dialog class to fix the issue of lookup in theme.</li>
	<li>Quote item adjustment rows incorrect color and misaligned on view page (<a href="https://issues.apache.org/jira/browse/OFBIZ-6348">OFBIZ-6348</a>).</li>
	<li>Duplicate calculation and typo in ShoppingCart.getGrandTotal() (<a href="https://issues.apache.org/jira/browse/OFBIZ-6629">OFBIZ-6629</a>). Removes duplicate code, fixes a method name typo and adds type safety to an iterator.</li>
	<li>Issue reported while performing Refund &amp; Void (java.lang.ClassCastException: java.lang.String cannot be cast to java.math.BigDecimal) (<a href="https://issues.apache.org/jira/browse/OFBIZ-5927">OFBIZ-5927</a>).</li>
	<li>Supplier preferred currency not considered for drop-ship order (<a href="https://issues.apache.org/jira/browse/OFBIZ-6091">OFBIZ-6091</a>).</li>
	<li>findOrders service returns incorrect orderCount and therefore viewSize (<a href="https://issues.apache.org/jira/browse/OFBIZ-6526">OFBIZ-6526</a>). This change replaces the HashSet with LinkedHashSet for fieldsToSelect because otherwise statusId was being added to the front of the set which was then passed to count distinct query causing incorrect counts. LinkedHashSet preserves the order in which items are added so orderId always appears at the front of the set for the count distinct query.</li>
	<li>Accounting reports fail (<a href="https://issues.apache.org/jira/browse/OFBIZ-6212">OFBIZ-6212</a>) Fixed the issue #1 of Accounting reports due to a minor typo and missing screen. Added a decorator screen for using with accounting report.</li>
	<li>Update ShoppingCartItem locale if ShoppingCart locale is changed (<a href="https://issues.apache.org/jira/browse/OFBIZ-6630">OFBIZ-6630</a>). Introduces the setLocale method for ShoppingCartItem and sets the locale for every item if the ShoppingCart setLocale method is called.</li>
	<li>Eclipse .classpath is missing the runtime libs for the solr component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6633">OFBIZ-6633</a>). Added the missing libs so OFBiz can be started with the solr component out of Eclipse.</li>
	<li>Eclipse .classpath contains internal Groovy Library classpath container (<a href="https://issues.apache.org/jira/browse/OFBIZ-6640">OFBIZ-6640</a>). There were unnecessary eclipse internal Groovy Library classpath container referenced in the .classpath file. This may lead to conflicts with the OFBiz "original" groovy libs contained in the framework and produces errors while running OFBiz within eclipse.</li>
	<li>Incorrect comparison in TemporalExpressionWorker.java (<a href="https://issues.apache.org/jira/browse/OFBIZ-6632">OFBIZ-6632</a>). Introduces some constants for the expression types and corrects the wrong comparison.</li>
	<li>Old UserLogin from userLoginId-change is not correctly disabled (<a href="https://issues.apache.org/jira/browse/OFBIZ-6635">OFBIZ-6635</a>). If a userLoginId of an existing user is updated by LoginServices.updateUserLoginId, a new UserLogin value is created with the data of the old one and the old one is disabled afterwards. In addition to switch the enabled flag to "N" the disabledDateTime is set to current date. This is wrong because this makes it possible to reenable the old UserLogin by just do a login with the old userLoginId (standard mechanism to lock the login for a while after subsequent failed login requests).</li>
	<li>multiple select dropdown listbox shows only one entry (<a href="https://issues.apache.org/jira/browse/OFBIZ-6627">OFBIZ-6627</a>). Extends existing dropdown implementation to allow several dropdowns in the same form using a simple ftl. Find Request use the new ftl in this example.</li>
	<li>Fix deprecation issues in framework/entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-6276">OFBIZ-6276</a>). Removes the use of deprecated API and the deprecated API itself from Delegator and GenericDelegator. Introduced the EntityStoreOptions class to substitute the createDummyFks parameter of storeAll method to avoid ambiguous API after removing the deprecated doCacheClear parameter.</li>
	<li>FOP renderer doesn't apply title-area-style (<a href="https://issues.apache.org/jira/browse/OFBIZ-6356">OFBIZ-6356</a>). NotoSans is the defaultFontFamily for FOP and the extra stylings and the font-weight="bold" are not rendered correctly unless changed to another font family.</li>
	<li>FOP renderer does not support alternate row style (<a href="https://issues.apache.org/jira/browse/OFBIZ-6355">OFBIZ-6355</a>).</li>
	<li>Non-breaking space incorrectly encoded in forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-6642">OFBIZ-6642</a>).</li>
	<li>Order items for GZ-1006-5 via ecommerce/ordermgr shows error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6643">OFBIZ-6643</a>). When an order is entered via the ecommerce component for a GZ-1006-5 an error is shown in the order items section. This was due to removed deprecated delegator methods still used in scripts and templates.</li>
	<li>Errors in ProductSummary.groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-6652">OFBIZ-6652</a>). In all releases the code in ProductSummary.groovy tries to collect prices for variants. Doing so it uses NumberFormat.format() to transform the base price into a string that is part of an embedded JS snippet. In case of a purchase order this price is rather empty, causing an exception in the formatter. Now N/A is displayed if the price is not available.</li>
	<li>Fixed a possible XSS attack through ProductContentWrapper.getProductContentAsText() which is notably used in several FTL files. This vulnerability exists also in other *ContentWrapper.java classes. Note that in supported releases it's hard to exploit, it's a <a href="https://www.owasp.org/index.php/Types_of_Cross-Site_Scripting">Stored XSS</a> which means you first need to inject exploiting code in the database. This is fixed in all *ContentWrapper classes.</li>
</ul>
<h2>Documentation</h2>
<ul>
	<li>Added framework/base/lib/zxing-core-3.2.0.jar into LICENSE.</li>
	<li>Added all the jars under specialpurpose/solr/ into LICENSE (<a href="https://issues.apache.org/jira/browse/OFBIZ-5042">OFBIZ-5042</a>).</li>
	<li>Wrong Documentation for Temporal Expressions (<a href="https://issues.apache.org/jira/browse/OFBIZ-6594">OFBIZ-6594</a>). The integer value representing the HOUR was wrong in the documentation.</li>
</ul>
&nbsp;
