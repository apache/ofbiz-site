---
layout: page
title: Release Notes 17.07.01
description: downloads
---
Apache OFBiz&reg; 13.07.03, released in 2016-04-04, is the third release of the 13.07 series, that has been stabilized with bug fixes since July 2013.

Please notice that in the 13.07 series the specialpurpose components are no more included with the only exception of the ecommerce component (because there are still some dependencies on it): the specialpurpose components may be released in a separate package in the future.

## Bug

- [<a href="//issues.apache.org/jira/browse/OFBIZ-293" target="external">[OFBIZ-293]</a>] - data import - nulling fields impossible
- [<a href="//issues.apache.org/jira/browse/OFBIZ-817" target="external">[OFBIZ-817]</a>] - Require Inventory of Marketing Package Product can't be shipped
- [<a href="//issues.apache.org/jira/browse/OFBIZ-4559" target="external">[OFBIZ-4559]</a>] - InventoryWorker.getOutstandingProductQuantities returns inaccurate results when there are multiple ItemIssuances for an order
- [<a href="//issues.apache.org/jira/browse/OFBIZ-5347" target="external">[OFBIZ-5347]</a>] - Shipping costs not recalculated after changing sales order shipment method
- [<a href="//issues.apache.org/jira/browse/OFBIZ-5579" target="external">[OFBIZ-5579]</a>] - Error when add product to an order.
- [<a href="//issues.apache.org/jira/browse/OFBIZ-5918" target="external">[OFBIZ-5918]</a>] - NPE at //demo-trunk-ofbiz.apache.org/ecommerce/products/
- [<a href="//issues.apache.org/jira/browse/OFBIZ-5927" target="external"> [OFBIZ-5927]</a>] - Issue reported while performing Refund & Void (java.lang.ClassCastException: java.lang.String cannot be cast to java.math.BigDecimal)
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6043" target="external">[OFBIZ-6043]</a>] - Change of ship-to address is not persisted when stepping forward and backward in a create order process
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6091" target="external">[OFBIZ-6091]</a>] - Supplier preferred currency not considered for drop-ship order
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6092" target="external">[OFBIZ-6092]</a>] - Domain name should not create for tenant if its left empty during tenant creation
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6218" target="external">[OFBIZ-6218]</a>] - Unit tests throw exception in DBCP
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6229" target="external">[OFBIZ-6229]</a>] - Can't create a geo without providing a geoID
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6237" target="external">[OFBIZ-6237]</a>] - function linkGeos deletes existing GeoAssocs for geoId
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6249" target="external">[OFBIZ-6249]</a>] - Complete OFBIZ-6057 (error in Freemarker 2.3 versions higher than 2.3.19)
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6347" target="external">[OFBIZ-6347]</a>] - Two order payment preferences are added to order, when order of order total 0(zero) is placed with Billing Account
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6374" target="external">[OFBIZ-6374]</a>] - PartyContentWrapper.getPartyContentAsText use wrong signature
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6396" target="external">[OFBIZ-6396]</a>] - Field Lookup do not show description when widget-verbose is set to false
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6397" target="external">[OFBIZ-6397]</a>] - Survey : FTL error message when using Enumeration or Geo question type
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6400" target="external">[OFBIZ-6400]</a>] - Fix permissions at specialpurpose/myportal/widget/PortalAdmScreens.xml
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6425" target="external">[OFBIZ-6425]</a>] - FindService.performFindList listSize = null causes errors when list is empty because the rendering system expects 0
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6430" target="external">[OFBIZ-6430]</a>] - date-find in form widget does not persist value
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6444" target="external">[OFBIZ-6444]</a>] - Postal Address PDF Formatter Screen Problems
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6492" target="external">[OFBIZ-6492]</a>] - FTL errors at facility/control/authview/ViewContactMechs when TELECOM\_NUMBER countryCode or contactNumber is blank
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6495" target="external">[OFBIZ-6495]</a>] - The filter-by-date="true" of <entity-condition/> in view entity PartyExport does not work
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6496" target="external">[OFBIZ-6496]</a>] - error in parsing array in ajaxUpdateAreas
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6520" target="external">[OFBIZ-6520]</a>] - Price of product does not shows up when you change currency of your store and setup product prices with new currency
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6530" target="external">[OFBIZ-6530]</a>] - Ajax request should be async
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6534" target="external">[OFBIZ-6534]</a>] - Same Billing Address generates an error
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6547" target="external">[OFBIZ-6547]</a>] - Screen with pagination on tables lead to multiple db entries when submitting
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6554" target="external">[OFBIZ-6554]</a>] - streamContentToBrowser fails when the file name contains a comma, only with Chrome.
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6555" target="external">[OFBIZ-6555]</a>] - errors and warning after load-extseed and running ofbiz
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6567" target="external">[OFBIZ-6567]</a>] - Wrong percent encoding in Webtool/SQL Processor
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6570" target="external">[OFBIZ-6570]</a>] - Anonymous unsubscribe from contact list generates an error
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6571" target="external">[OFBIZ-6571]</a>] - Error Adding items to a Customer Return Invoice
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6579" target="external">[OFBIZ-6579]</a>] - ERROR: could not find ModelField for entity name: ItemIssuanceQuantitySum and field: issuedDateTime
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6582" target="external">[OFBIZ-6582]</a>] - SQL Exceptions (OPTION) occuring when running OFBiz 13.07.02 against MySQL
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6594" target="external">[OFBIZ-6594]</a>] - Wrong Documentation for Temporal Expressions
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6602" target="external">[OFBIZ-6602]</a>] - Upgrade Tomcat from 7.0.59 to 7.0.64
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6605" target="external">[OFBIZ-6605]</a>] - createQuoteRole, createContentRole, and createRequirementRole allow for adding Roles to a Party without permissions
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6619" target="external">[OFBIZ-6619]</a>] - PurgeJob.java does not delete RecurrenceRule because it is still referenced by RecurrenceInfo
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6622" target="external">[OFBIZ-6622]</a>] - Incorrectly encoded url in form widget
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6624" target="external">[OFBIZ-6624]</a>] - error in isValidEan util
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6627" target="external">[OFBIZ-6627]</a>] - multiple select dropdown listbox shows only one entry
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6632" target="external">[OFBIZ-6632]</a>] - Incorrect comparison in TemporalExpressionWorker.java
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6637" target="external">[OFBIZ-6637]</a>] - Work Effort Month Calendar View Is Broken
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6641" target="external">[OFBIZ-6641]</a>] - Missing CountryCodeData.xml values for countries of the former Yugoslavia
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6642" target="external">[OFBIZ-6642]</a>] - Non-breaking space incorrectly encoded in forms
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6652" target="external">[OFBIZ-6652]</a>] - Errors in ProductSummary.groovy
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6654" target="external">[OFBIZ-6654]</a>] - Display of a recurrent workeffort in workeffort calendar do not respect estimatedStart/CompletionDate
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6666" target="external">[OFBIZ-6666]</a>] - ModelService constructor does not copy all attribute of service model.
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6674" target="external">[OFBIZ-6674]</a>] - In addToCart() method, reset shipment method information in cart only if shipping applies on product
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6681" target="external">[OFBIZ-6681]</a>] - Type-ahead regarding workeffort in AddQuoteWorkEffort
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6683" target="external">[OFBIZ-6683]</a>] - Type-ahead regarding workeffort in AddCommEventWorkEffort throws an error
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6687" target="external">[OFBIZ-6687]</a>] - org.ofbiz.entity.GenericModelException: Could not find definition for entity name FixedAssetMaintWorkEffort
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6697" target="external">[OFBIZ-6697]</a>] - CommunicationServices.createAttachmentContent duplicates attachments for existing CommunicationEvents
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6706" target="external">[OFBIZ-6706]</a>] - The Widget-style of a menuItem in its link when the menu is selected
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6707" target="external">[OFBIZ-6707] </a>] - WebtoolsUiLabels went missing
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6708" target="external">[OFBIZ-6708]</a>] - Missing userLogin error on party profile screen when 1st content is non public
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6725" target="external">[OFBIZ-6725]</a>] - Best Selling Products section in main order page takes into account cancelled orders
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6733" target="external">[OFBIZ-6733]</a>] - Error with Service Product Invoice Lines
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6741" target="external">[OFBIZ-6741]</a>] - The state list is not populated when trying to add a shipping address from the Quick Finalize Order screen.
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6743" target="external">[OFBIZ-6743]</a>] - Error on the Split Payment button from the Quick Finalize Order screen
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6753" target="external">[OFBIZ-6753]</a>] - DemoTaxAuthority.xml GL Account for USA\_IRS is incorrect
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6763" target="external">[OFBIZ-6763]</a>] - Wrong purchase invoice item type for product type IDs RAW\_MATERIAL, GOOD
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6778" target="external"> [OFBIZ-6778]</a>] - Possible "NPE" in viewcontent.ftl (found in trunk demo log)
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6779" target="external">[OFBIZ-6779]</a>] - Wrong entity condition expression for fetching the view entity PartyAndContactMech.
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6782" target="external">[OFBIZ-6782]</a>] - Service parameter should be required.
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6784" target="external">[OFBIZ-6784]</a>] - JobSandbox : reload crashed job maybe duplicate pending service
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6788" target="external">[OFBIZ-6788]</a>] - OFBIZ not generating pdf invoices
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6789" target="external">[OFBIZ-6789]</a>] - image management cannot share images
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6797" target="external">[OFBIZ-6797]</a>] - Typo in ecommerce productdetail
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6799" target="external">[OFBIZ-6799]</a>] - Export Chart of Account as PDF is broken.
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6856" target="external">[OFBIZ-6856]</a>] - ContactMechs Label
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6888" target="external">[OFBIZ-6888]</a>] - GroovyEngine.serviceInvoker masks Groovy script exceptions in some cases
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6910" target="external">[OFBIZ-6910]</a>] - Newly created id should be out from service 'createProductFeatureType'
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6918" target="external">[OFBIZ-6918]</a>] - ApplicationDecorator Entity-One Screen Action Incomplete Primary Key
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6920" target="external">[OFBIZ-6920]</a>] - Credit card details cannot be updated
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6922" target="external">[OFBIZ-6922]</a>] - Currently the testRemoteSoap test service does not work.
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6933" target="external">[OFBIZ-6933]</a>] - When we update the Allow order decimal quantity to N for product store and update the unit price of item in shopping cart then its shown error.
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6937" target="external">[OFBIZ-6937]</a>] - Company Check payment method should be shown when issuing chek
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6961" target="external">[OFBIZ-6961] </a>] - popup fades in and out non-stop when hovers on a product image in list view

## Improvement

- [<a href="//issues.apache.org/jira/browse/OFBIZ-6185" target="external">[OFBIZ-6185]</a>] - Type-ahead regarding LookupInvoice in AP doesn't return result
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6415" target="external">[OFBIZ-6415]</a>] - renderTextFindField doesn't reselect operation dropdown or ignoreCase checkbox
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6417" target="external">[OFBIZ-6417]</a>] - renderDateFindField doesn't reselect operation
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6566" target="external">[OFBIZ-6566]</a>] - SecurityGroup doesn't get removed from a Party
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6721" target="external">[OFBIZ-6721]</a>] - org.ofbiz.common.login.LoginServices.userLogin causes stack track when username or password is incorrect
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6727" target="external">[OFBIZ-6727]</a>] - Webtools Entity edition, the suggested date and time formats are not localised
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6908" target="external">[OFBIZ-6908]</a>] - Received quantity not shown on order view screen

## Task

- [<a href="//issues.apache.org/jira/browse/OFBIZ-6380" target="external">[OFBIZ-6380]</a>] - Update Log4j 2.2 to 2.3

## Sub Task

- [<a href="//issues.apache.org/jira/browse/OFBIZ-5634" target="external">[OFBIZ-5634]</a>] - Error in pagination in createProductSubscriptionResource (Catalog)
- [<a href="//issues.apache.org/jira/browse/OFBIZ-5801" target="external">[OFBIZ-5801]</a>] - Upgrade Axis2 to 1.6.3
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6568" target="external">[OFBIZ-6568]</a>] - Update Groovy to 2.4.5 version
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6726" target="external">[OFBIZ-6726]</a>] - Update commons collections to 3.2.2 because of known possible exploit
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6751" target="external">[OFBIZ-6751]</a>] - POI security fix
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6752" target="external">[OFBIZ-6752]</a>] - Updates Tomcat to 7.0.65
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6754" target="external">[OFBIZ-6754]</a>] - Update Spring Framework
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6800" target="external">[OFBIZ-6800]</a>] - Another .fo.ftl file use "align" attribute in "&lt;fo:block&gt;" tag.
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6905" target="external">[OFBIZ-6905]</a>] - Update Xalan libs to version 2.7.2 because of CVE-2014-0107
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6913" target="external">[OFBIZ-6913]</a>] - Update Tomcat to 7.0.68
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6916" target="external">[OFBIZ-6916]</a>] - Upgrade Axis2 to 1.7.1
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6942" target="external">[OFBIZ-6942]</a>] - Comment out RMI related code because of the Java deserialization issue
- [<a href="//issues.apache.org/jira/browse/OFBIZ-6959" target="external">[OFBIZ-6959]</a>] - Update XStream lib to prevent XML External Entity (XXE) Processing
