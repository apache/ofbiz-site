---
layout: post
title: Apache OFBiz News - September 2015
date: '2015-10-04T14:58:23+00:00'
permalink: apache_ofbiz_news_september_2015
---
## Apache OFBiz News September 2015

The 3rd Apache OFBiz Community Day in September was a great success, the new website structure takes form and many bugfixes and improvements were made during the last month.

<!--more-->

## 3rd OFBiz Community Day 2015

The latest <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">OFBiz Community Day</a> in September once again was a great success. We had 47 issues from our current backlog included in the
sprint. By the end of the Community Day we had closed 32 of the 47 issues (which is fantastic!). <br><br>
Please see below for a couple links to the details of the sprint reports:<br>
<a href="https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=64&amp;view=reporting&amp;chart=sprintRetrospective&amp;sprint=184">Sprint Retrospective</a> <br>
<a href="https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=64&amp;view=reporting&amp;chart=controlChart">Control Chart</a>
<br><br>
We would like to thank everyone that took part in our Community Day and once again our community has shown how we can all work together to achieve something good for OFBiz. Our next Community Day is set for 19th December 2015.

## New Website Proposal

Work on the new website is ongoing. Several website structure proposals were made and discussed by the community on the mailing lists. Based on feedback received, the community preferred the following <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Revised+Website+Structure+v2">revised website structure for Apache OFBiz</a>.<br><br>
The next step will be to put together a draft proposed design for the main page and site.

You can follow progress on this via our <a href="http://ofbiz.markmail.org/thread/agnc6ju3quqvvnjt">mailing list</a>.<br>

## OFBiz at Apachecon Core EU

A full OFBiz track was included at Apachecon Core EU in Budapest. A wide range of talks were presented covering Business, Community and Technical areas. Full details will be included in our October update.<br>

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Apache Solr Implementation ([OFBIZ-5042](https://issues.apache.org/jira/browse/OFBIZ-5042)).
  - Added apache solr to secondary top menu and /solr/control/main request to accept the link from the menu.
  - Add permission check on /update, /update/json, /update/csv and /update/extract requests.
- Update site-conf.xsd to prioritise Groovy over BSF ([OFBIZ-6597](https://issues.apache.org/jira/browse/OFBIZ-6597)).
- Replace bsf event type and handler with groovy ([OFBIZ-6598](https://issues.apache.org/jira/browse/OFBIZ-6598)).
- Ant build:
  - Removed build-website and docs targets, copy-dtds is sufficient.
  - Commented out "docs-all" ant target because it is now done automatically by Buildbot.
- Upgraded Apache Tomcat to the latest bug fix release of the 7 series: 7.0.64.
- Upgraded Solr and Lucene libraries to version 5. Added runtime/indexes/index.properties to exclude in clean-search-indexes target.
- Using official content type for json requests ([OFBIZ-6608](https://issues.apache.org/jira/browse/OFBIZ-6608)).
- Move PartyRelationshipAndPartyDetail entity to Party component ([OFBIZ-5814](https://issues.apache.org/jira/browse/OFBIZ-5814)). Also adds PartyRelationshipType and its relation to the view ([OFBIZ-6610](https://issues.apache.org/jira/browse/OFBIZ-6610)).
- MapContext.entrySet() slows down when ByteBuffer objects are in the context ([OFBIZ-6621](https://issues.apache.org/jira/browse/OFBIZ-6621)). Introduces a private inner class ListSet representing a Set backed by a List instead of the HashSet implementation.
- Form RequestRolesInfo is not being accessed from Screens ([OFBIZ-5970](https://issues.apache.org/jira/browse/OFBIZ-5970)). Unused form was removed.
- Optimize ShoppingCart.removeCartItem (skip price calc and inventory check) ([OFBIZ-6631](https://issues.apache.org/jira/browse/OFBIZ-6631)).
- partymgr/control/EditPartyRelationships add odd-row="alternate-row" for ListPartRelationships and remove navigation-form-name for containing screenlet for better UI ([OFBIZ-6515](https://issues.apache.org/jira/browse/OFBIZ-6515)). Displays the relationship table with alternate colors for better visibility and uses the screenlet pagination controls at top/bottom of the list.
- Adding the week number in date picking dropdowns ([OFBIZ-5361](https://issues.apache.org/jira/browse/OFBIZ-5361)). For some users, having the week shown in dropdown calendars is an important thing. There is an option to show week numbers in the dropdown date picker used by OFBiz (datetimepicker). It can be done by adding "showWeek: true," in the datetimepicker calls in framework/widget/templates/htmlFormMacroLibrary.ftl.
- Missing CountryCodeData.xml values for countries of the former Yugoslavia ([OFBIZ-6641](https://issues.apache.org/jira/browse/OFBIZ-6641)). Instead of former Yugoslavia there now is Serbia. Also CountryTeleCode and CountryCapital was missing for Montenegro.

## Bugfixes

Functional and technical bugfixes:

- OFBiz does not compile ([OFBIZ-6591](https://issues.apache.org/jira/browse/OFBIZ-6591)). The reason behind is lack of jars in applications/content/build/lib and specialpurpose/lucene/lib.
- The Solr redirection does not work in trunk demo ([OFBIZ-6596](https://issues.apache.org/jira/browse/OFBIZ-6596)).
  - Use response.sendRedirect to forward url to login page instead of the response.setHeader("location", url), this avoids the warning messages from EntityUtilProperties. Besides, when testing in similar config as demo-ofbiz-trunk is (port 80 -&gt; 8080, port 443 -&gt; 8443), this change can keep the url to 80 or 443.
  - Removed https scheme check
- Example component causes exceptions ([OFBIZ-6601](https://issues.apache.org/jira/browse/OFBIZ-6601)).
  - Add specialpurpose/webapp/exampleext/error/error.jsp to display error page.
  - Move specialpurpose/example/widget/exampleext to specialpurpose/exampleext/widget/example.
- Scrum component
  - Total billing causes exception ([OFBIZ-6600](https://issues.apache.org/jira/browse/OFBIZ-6600)). The import for java.sql.Timestamp was missing.
  - View sprint overview has errors ([OFBIZ-4861](https://issues.apache.org/jira/browse/OFBIZ-4861)). When viewing the sprint overview page errors are shown related to burndown chart and the sprint backlog list.
  - Scrum productstatistics shows errors ([OFBIZ-4863](https://issues.apache.org/jira/browse/OFBIZ-4863)).
  - Remove unused view-maps from SCRUM controller ([OFBIZ-6478](https://issues.apache.org/jira/browse/OFBIZ-6478)).
- Some groovy files using Timestamp.valueOf are missing essential jar. ([OFBIZ-6606](https://issues.apache.org/jira/browse/OFBIZ-6606)). The import for java.sql.Timestamp was missing in CommissionReport.groovy, CommissionRun.groovy.
- The EntityListIterator must be closed in EntityQuery.query() ([OFBIZ-6615](https://issues.apache.org/jira/browse/OFBIZ-6615)).
- createQuoteRole, createContentRole, and createRequirementRole allow for adding Roles to a Party without permissions ([OFBIZ-6605](https://issues.apache.org/jira/browse/OFBIZ-6605)). These functions add a PartyRole entry if the PartyRole does not exist even when the userLogin doesn't have PARTYMGR\_UPDATE or PARTYMGR\_CREATE permissions. A permission check was added before creating the new role.
- PurgeJob.java does not delete RecurrenceRule because it is still referenced by RecurrenceInfo ([OFBIZ-6619](https://issues.apache.org/jira/browse/OFBIZ-6619)).
- Error in UtilValidate.isValidEan ([OFBIZ-6624](https://issues.apache.org/jira/browse/OFBIZ-6624)). charAt offset was wrong in calcChecksum.
- Select survey for product store cause exception ([OFBIZ-6460](https://issues.apache.org/jira/browse/OFBIZ-6460)). Fixed the exception due to incorrect use of EntityQuery method and fixed the query statement.
- PartyGeoLocation shows menus when accessed ([OFBIZ-6438](https://issues.apache.org/jira/browse/OFBIZ-6438)).
- Modal window for lookup doesn't allow selection ([OFBIZ-6499](https://issues.apache.org/jira/browse/OFBIZ-6499)). Added z-index value with dialog class to fix the issue of lookup in theme.
- Quote item adjustment rows incorrect color and misaligned on view page ([OFBIZ-6348](https://issues.apache.org/jira/browse/OFBIZ-6348)).
- Duplicate calculation and typo in ShoppingCart.getGrandTotal() ([OFBIZ-6629](https://issues.apache.org/jira/browse/OFBIZ-6629)). Removes duplicate code, fixes a method name typo and adds type safety to an iterator.
- Issue reported while performing Refund &amp; Void (java.lang.ClassCastException: java.lang.String cannot be cast to java.math.BigDecimal) ([OFBIZ-5927](https://issues.apache.org/jira/browse/OFBIZ-5927)).
- Supplier preferred currency not considered for drop-ship order ([OFBIZ-6091](https://issues.apache.org/jira/browse/OFBIZ-6091)).
- findOrders service returns incorrect orderCount and therefore viewSize ([OFBIZ-6526](https://issues.apache.org/jira/browse/OFBIZ-6526)). This change replaces the HashSet with LinkedHashSet for fieldsToSelect because otherwise statusId was being added to the front of the set which was then passed to count distinct query causing incorrect counts. LinkedHashSet preserves the order in which items are added so orderId always appears at the front of the set for the count distinct query.
- Accounting reports fail ([OFBIZ-6212](https://issues.apache.org/jira/browse/OFBIZ-6212)) Fixed the issue #1 of Accounting reports due to a minor typo and missing screen. Added a decorator screen for using with accounting report.
- Update ShoppingCartItem locale if ShoppingCart locale is changed ([OFBIZ-6630](https://issues.apache.org/jira/browse/OFBIZ-6630)). Introduces the setLocale method for ShoppingCartItem and sets the locale for every item if the ShoppingCart setLocale method is called.
- Eclipse .classpath is missing the runtime libs for the solr component ([OFBIZ-6633](https://issues.apache.org/jira/browse/OFBIZ-6633)). Added the missing libs so OFBiz can be started with the solr component out of Eclipse.
- Eclipse .classpath contains internal Groovy Library classpath container ([OFBIZ-6640](https://issues.apache.org/jira/browse/OFBIZ-6640)). There were unnecessary eclipse internal Groovy Library classpath container referenced in the .classpath file. This may lead to conflicts with the OFBiz "original" groovy libs contained in the framework and produces errors while running OFBiz within eclipse.
- Incorrect comparison in TemporalExpressionWorker.java ([OFBIZ-6632](https://issues.apache.org/jira/browse/OFBIZ-6632)). Introduces some constants for the expression types and corrects the wrong comparison.
- Old UserLogin from userLoginId-change is not correctly disabled ([OFBIZ-6635](https://issues.apache.org/jira/browse/OFBIZ-6635)). If a userLoginId of an existing user is updated by LoginServices.updateUserLoginId, a new UserLogin value is created with the data of the old one and the old one is disabled afterwards. In addition to switch the enabled flag to "N" the disabledDateTime is set to current date. This is wrong because this makes it possible to reenable the old UserLogin by just do a login with the old userLoginId (standard mechanism to lock the login for a while after subsequent failed login requests).
- multiple select dropdown listbox shows only one entry ([OFBIZ-6627](https://issues.apache.org/jira/browse/OFBIZ-6627)). Extends existing dropdown implementation to allow several dropdowns in the same form using a simple ftl. Find Request use the new ftl in this example.
- Fix deprecation issues in framework/entity ([OFBIZ-6276](https://issues.apache.org/jira/browse/OFBIZ-6276)). Removes the use of deprecated API and the deprecated API itself from Delegator and GenericDelegator. Introduced the EntityStoreOptions class to substitute the createDummyFks parameter of storeAll method to avoid ambiguous API after removing the deprecated doCacheClear parameter.
- FOP renderer doesn't apply title-area-style ([OFBIZ-6356](https://issues.apache.org/jira/browse/OFBIZ-6356)). NotoSans is the defaultFontFamily for FOP and the extra stylings and the font-weight="bold" are not rendered correctly unless changed to another font family.
- FOP renderer does not support alternate row style ([OFBIZ-6355](https://issues.apache.org/jira/browse/OFBIZ-6355)).
- Non-breaking space incorrectly encoded in forms ([OFBIZ-6642](https://issues.apache.org/jira/browse/OFBIZ-6642)).
- Order items for GZ-1006-5 via ecommerce/ordermgr shows error ([OFBIZ-6643](https://issues.apache.org/jira/browse/OFBIZ-6643)). When an order is entered via the ecommerce component for a GZ-1006-5 an error is shown in the order items section. This was due to removed deprecated delegator methods still used in scripts and templates.
- Errors in ProductSummary.groovy ([OFBIZ-6652](https://issues.apache.org/jira/browse/OFBIZ-6652)). In all releases the code in ProductSummary.groovy tries to collect prices for variants. Doing so it uses NumberFormat.format() to transform the base price into a string that is part of an embedded JS snippet. In case of a purchase order this price is rather empty, causing an exception in the formatter. Now N/A is displayed if the price is not available.
- Fixed a possible XSS attack through ProductContentWrapper.getProductContentAsText() which is notably used in several FTL files. This vulnerability exists also in other \*ContentWrapper.java classes. Note that in supported releases it's hard to exploit, it's a [Stored XSS](https://www.owasp.org/index.php/Types_of_Cross-Site_Scripting) which means you first need to inject exploiting code in the database. This is fixed in all \*ContentWrapper classes.

## Documentation

- Added framework/base/lib/zxing-core-3.2.0.jar into LICENSE.
- Added all the jars under specialpurpose/solr/ into LICENSE ([OFBIZ-5042](https://issues.apache.org/jira/browse/OFBIZ-5042)).
- Wrong Documentation for Temporal Expressions ([OFBIZ-6594](https://issues.apache.org/jira/browse/OFBIZ-6594)). The integer value representing the HOUR was wrong in the documentation.

&nbsp;
