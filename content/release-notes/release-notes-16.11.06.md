---
layout: page
title: Release Notes 16.11.06
description: downloads
---
Apache OFBiz&reg; 16.11.06, released in 2019-08-20, is the sixth release of the 16.11 series, that has been stabilized since November 2016.

## Sub-task

- [[OFBIZ-9533](https://issues.apache.org/jira/browse/OFBIZ-9533)] - User should be notified with success message on MRP run in manufacturing component
- [[OFBIZ-9973](https://issues.apache.org/jira/browse/OFBIZ-9973)] - [FB] Find Security Bugs
- [[OFBIZ-10678](https://issues.apache.org/jira/browse/OFBIZ-10678)] - CLONE - Check embedded Javascript libs vulnerabilities using retire.js
- [[OFBIZ-10873](https://issues.apache.org/jira/browse/OFBIZ-10873)] - Update Tomcat to 9.0.16 due to CVE-2019-0199
- [[OFBIZ-10920](https://issues.apache.org/jira/browse/OFBIZ-10920)] - Update Tomcat to 9.0.18 due to CVE-2019-0232
- [[OFBIZ-10930](https://issues.apache.org/jira/browse/OFBIZ-10930)] - Stores can&#39;t be modified at ofbizsetup/control/updateProductStore

## Bug

- [[OFBIZ-5157](https://issues.apache.org/jira/browse/OFBIZ-5157)] - Error on createShoppingListItem when adding item to cart as anonymous
- [[OFBIZ-5254](https://issues.apache.org/jira/browse/OFBIZ-5254)] - Services allow arbitrary HTML for parameters with allow-html set to &quot;safe&quot;
- [[OFBIZ-7816](https://issues.apache.org/jira/browse/OFBIZ-7816)] - Profile of contact person not shown on quick add of contact in SFA
- [[OFBIZ-8842](https://issues.apache.org/jira/browse/OFBIZ-8842)] - Search operation on &#39;AssocRevisionItemView&#39; entity causing exception.
- [[OFBIZ-9299](https://issues.apache.org/jira/browse/OFBIZ-9299)] - Logo image not showing on party profile
- [[OFBIZ-9461](https://issues.apache.org/jira/browse/OFBIZ-9461)] - Alignment issue at Catalog Manager page
- [[OFBIZ-9677](https://issues.apache.org/jira/browse/OFBIZ-9677)] - In packing, only use reservations with stock on hand
- [[OFBIZ-9743](https://issues.apache.org/jira/browse/OFBIZ-9743)] - updateContent service does not return an error/success message
- [[OFBIZ-9746](https://issues.apache.org/jira/browse/OFBIZ-9746)] - updateContentAssoc does not return success/error message to the UI.
- [[OFBIZ-9840](https://issues.apache.org/jira/browse/OFBIZ-9840)] - Mime Type not supported Error while generating a Composite Pdf
- [[OFBIZ-9855](https://issues.apache.org/jira/browse/OFBIZ-9855)] - Using try-with-resources with File IO Objects.
- [[OFBIZ-9890](https://issues.apache.org/jira/browse/OFBIZ-9890)] - Having condition is ignored on queryList() and queryFirst() calls in EntityQuery
- [[OFBIZ-9908](https://issues.apache.org/jira/browse/OFBIZ-9908)] - Quick Add button for shopping list on Orderentry screen is not working
- [[OFBIZ-9912](https://issues.apache.org/jira/browse/OFBIZ-9912)] - Force complete Purchase Order button throws error
- [[OFBIZ-10054](https://issues.apache.org/jira/browse/OFBIZ-10054)] - Product content management screen doesn&#39;t validate trusted users&#39; input
- [[OFBIZ-10125](https://issues.apache.org/jira/browse/OFBIZ-10125)] - Error exporting Product entities
- [[OFBIZ-10187](https://issues.apache.org/jira/browse/OFBIZ-10187)] - OWASP sanitizer breaks proper rendering of HTML code
- [[OFBIZ-10310](https://issues.apache.org/jira/browse/OFBIZ-10310)] - Issue with Status of invoice
- [[OFBIZ-10315](https://issues.apache.org/jira/browse/OFBIZ-10315)] - Update Contact Mech ID with Billing Account not working
- [[OFBIZ-10356](https://issues.apache.org/jira/browse/OFBIZ-10356)] - Display of entities in text input field for Product Name
- [[OFBIZ-10396](https://issues.apache.org/jira/browse/OFBIZ-10396)] - All party contact mech should be deleted before creating new one
- [[OFBIZ-10533](https://issues.apache.org/jira/browse/OFBIZ-10533)] - Seed data sequence bug regarding &quot;MIDNIGHT\_DAILY&quot; TemporalExpression
- [[OFBIZ-10542](https://issues.apache.org/jira/browse/OFBIZ-10542)] - Instructions for Configurable PC don&#39;t work
- [[OFBIZ-10569](https://issues.apache.org/jira/browse/OFBIZ-10569)] - Wrong handling of response type &quot;cross-redirect&quot;
- [[OFBIZ-10580](https://issues.apache.org/jira/browse/OFBIZ-10580)] - Classification group filter not working on find party screen
- [[OFBIZ-10588](https://issues.apache.org/jira/browse/OFBIZ-10588)] - Incorrect PartyContactMechPurpose created while calling createUpdateBillingAddress service
- [[OFBIZ-10595](https://issues.apache.org/jira/browse/OFBIZ-10595)] - The query iCalendar/CALENDAR\_PUB\_DEMO/ no longer works
- [[OFBIZ-10597](https://issues.apache.org/jira/browse/OFBIZ-10597)] - Missing Security and Cache Headers in CMS Events
- [[OFBIZ-10605](https://issues.apache.org/jira/browse/OFBIZ-10605)] - Creating Javadoc on Windows fails
- [[OFBIZ-10615](https://issues.apache.org/jira/browse/OFBIZ-10615)] - Content - Able to add empty Forum Group
- [[OFBIZ-10637](https://issues.apache.org/jira/browse/OFBIZ-10637)] - ComponentConfig::getAppBarWebInfos creates infos only for components without &lt;&lt;app-bar-display=&quot;false&quot;&gt;&gt;
- [[OFBIZ-10648](https://issues.apache.org/jira/browse/OFBIZ-10648)] - Manufacturing: BOM search returning duplicate entries in search results.
- [[OFBIZ-10653](https://issues.apache.org/jira/browse/OFBIZ-10653)] - Missing nullcheck in service createContactListParty
- [[OFBIZ-10666](https://issues.apache.org/jira/browse/OFBIZ-10666)] - User&#39;s name is displayed on ecommerce even after user logs out
- [[OFBIZ-10668](https://issues.apache.org/jira/browse/OFBIZ-10668)] - Quantity of the product added in the cart should not be negative
- [[OFBIZ-10671](https://issues.apache.org/jira/browse/OFBIZ-10671)] - Error message is displayed when user having space in username logs in at ecommerce
- [[OFBIZ-10673](https://issues.apache.org/jira/browse/OFBIZ-10673)] - Unable to add additional product images from catalog
- [[OFBIZ-10676](https://issues.apache.org/jira/browse/OFBIZ-10676)] - UI bug in scrum component
- [[OFBIZ-10680](https://issues.apache.org/jira/browse/OFBIZ-10680)] - partyId misses in EditEftAccount.ftl (party) when you create an EFT account from the quick finalize page
- [[OFBIZ-10681](https://issues.apache.org/jira/browse/OFBIZ-10681)] - Dependent dropdowns should be used in createPostalAddress and Set Billing screens of ordermgr.
- [[OFBIZ-10696](https://issues.apache.org/jira/browse/OFBIZ-10696)] - ConcurrentModificationException in ShoppingCart.cleanUpShipGroups
- [[OFBIZ-10706](https://issues.apache.org/jira/browse/OFBIZ-10706)] - EmailServices.sendMail causes a NPE, when sendFrom is missing
- [[OFBIZ-10712](https://issues.apache.org/jira/browse/OFBIZ-10712)] - Inconsistent behaviour of ServiceDispatcher.checkAuth
- [[OFBIZ-10713](https://issues.apache.org/jira/browse/OFBIZ-10713)] - wrong title in table header of Config Option List
- [[OFBIZ-10727](https://issues.apache.org/jira/browse/OFBIZ-10727)] - Service failed to mark expired authorized payments of Authorize.net as void
- [[OFBIZ-10736](https://issues.apache.org/jira/browse/OFBIZ-10736)] - Date format doesn&#39;t change on change of locale
- [[OFBIZ-10743](https://issues.apache.org/jira/browse/OFBIZ-10743)] - Error message is populating while clicking on product barcode
- [[OFBIZ-10766](https://issues.apache.org/jira/browse/OFBIZ-10766)] - Impossible secure and autologin cookie names when mountpoint contains a slash inside its name
- [[OFBIZ-10787](https://issues.apache.org/jira/browse/OFBIZ-10787)] - Page dropdown list on categorydetail page broken
- [[OFBIZ-10797](https://issues.apache.org/jira/browse/OFBIZ-10797)] - CSS Styling for Party Content progress bar is wrong in multiple theme
- [[OFBIZ-10816](https://issues.apache.org/jira/browse/OFBIZ-10816)] - URL not encoding in FTL
- [[OFBIZ-10818](https://issues.apache.org/jira/browse/OFBIZ-10818)] - Fix the EntitySync Push and Pull functionality
- [[OFBIZ-10826](https://issues.apache.org/jira/browse/OFBIZ-10826)] - Upgrade Apache Tika to 1.20 (CVE-2018-8017/CVE-2018-17197)
- [[OFBIZ-10827](https://issues.apache.org/jira/browse/OFBIZ-10827)] - 404 error while creating new contact information from checkout page
- [[OFBIZ-10828](https://issues.apache.org/jira/browse/OFBIZ-10828)] - Html escaping missing for portalPageId parameter of Help button
- [[OFBIZ-10832](https://issues.apache.org/jira/browse/OFBIZ-10832)] - simpleTypeConvert always returns Null for Document, Document Type and Notation Node
- [[OFBIZ-10836](https://issues.apache.org/jira/browse/OFBIZ-10836)] - Add To Order button not working on shopping list screen
- [[OFBIZ-10842](https://issues.apache.org/jira/browse/OFBIZ-10842)] - No userLogin given in calculateProductPrice service call context
- [[OFBIZ-10844](https://issues.apache.org/jira/browse/OFBIZ-10844)] - Ecommerce AnonContactus.ftl doesn&#39;t work
- [[OFBIZ-10856](https://issues.apache.org/jira/browse/OFBIZ-10856)] - Customer Party getting set as &#39;organizationPartyId&#39; in one the Account transaction for Customer Invoice
- [[OFBIZ-10858](https://issues.apache.org/jira/browse/OFBIZ-10858)] - Last Categories section is blank
- [[OFBIZ-10870](https://issues.apache.org/jira/browse/OFBIZ-10870)] - Updating productprice results in error
- [[OFBIZ-10876](https://issues.apache.org/jira/browse/OFBIZ-10876)] - Run MRP fails, Incompatible class
- [[OFBIZ-10885](https://issues.apache.org/jira/browse/OFBIZ-10885)] - Blank page appears after using Tell-A-Friend functionality while adding item to cart
- [[OFBIZ-10900](https://issues.apache.org/jira/browse/OFBIZ-10900)] - Agreement overview does not show names of parties
- [[OFBIZ-10913](https://issues.apache.org/jira/browse/OFBIZ-10913)] - FindTask does not allow for all statuses possible to be selected
- [[OFBIZ-10925](https://issues.apache.org/jira/browse/OFBIZ-10925)] - Wrong permission check in ProductScreens#FindProduct
- [[OFBIZ-10926](https://issues.apache.org/jira/browse/OFBIZ-10926)] - Update an order linked to an other order lost relation
- [[OFBIZ-10927](https://issues.apache.org/jira/browse/OFBIZ-10927)] - Can&#39;t set (expected) start and end date of project when creating a project
- [[OFBIZ-10929](https://issues.apache.org/jira/browse/OFBIZ-10929)] - Duplicate a ShoppingCartItem didn&#39;t propage OrderItemAttributes
- [[OFBIZ-10940](https://issues.apache.org/jira/browse/OFBIZ-10940)] - Ensure html verbosity is following general setup
- [[OFBIZ-10958](https://issues.apache.org/jira/browse/OFBIZ-10958)] - Service createProductFeature ignores passed productFeatureId
- [[OFBIZ-10967](https://issues.apache.org/jira/browse/OFBIZ-10967)] - Remove link is not working in shopping list
- [[OFBIZ-10969](https://issues.apache.org/jira/browse/OFBIZ-10969)] - Unable to create Employments
- [[OFBIZ-10992](https://issues.apache.org/jira/browse/OFBIZ-10992)] - No pre-filled value while selecting &quot;facilityId To&quot; on Transfer Inventory Item screen
- [[OFBIZ-11006](https://issues.apache.org/jira/browse/OFBIZ-11006)] - Create customer request screen breaks when entering special characters
- [[OFBIZ-11009](https://issues.apache.org/jira/browse/OFBIZ-11009)] - Update invoice item looses invoice context
- [[OFBIZ-11010](https://issues.apache.org/jira/browse/OFBIZ-11010)] - Touch F8 in webpos does not work and generate an error
- [[OFBIZ-11018](https://issues.apache.org/jira/browse/OFBIZ-11018)] - Redirection of pathAlias to aliasTo does not work properly
- [[OFBIZ-11022](https://issues.apache.org/jira/browse/OFBIZ-11022)] - Edit WebSite Path Alias is not working
- [[OFBIZ-11028](https://issues.apache.org/jira/browse/OFBIZ-11028)] - field emplFromDate is forgot in PayHistory entity
- [[OFBIZ-11029](https://issues.apache.org/jira/browse/OFBIZ-11029)] - Issue in function getVariantSelectionFeatures of ProductWorker.java
- [[OFBIZ-11041](https://issues.apache.org/jira/browse/OFBIZ-11041)] - Incorrect findByCount on DynamicView with groupBy and selected field
- [[OFBIZ-11047](https://issues.apache.org/jira/browse/OFBIZ-11047)] - It&#39;s impossible to create more than 1 ProductManufacturingRule
- [[OFBIZ-11048](https://issues.apache.org/jira/browse/OFBIZ-11048)] - When you select a ProductManufacturingRule if several exist only the one selected will show multiple times in the list
- [[OFBIZ-11049](https://issues.apache.org/jira/browse/OFBIZ-11049)] - massPrintOrders does not work
- [[OFBIZ-11052](https://issues.apache.org/jira/browse/OFBIZ-11052)] - Mass actions in FindOrders.ftl don&#39;t keep parameters
- [[OFBIZ-11059](https://issues.apache.org/jira/browse/OFBIZ-11059)] - Runtime error exceptions at Leads page
- [[OFBIZ-11062](https://issues.apache.org/jira/browse/OFBIZ-11062)] - Wrong page title displayed on contact us page of ecommerce
- [[OFBIZ-11071](https://issues.apache.org/jira/browse/OFBIZ-11071)] - Gradle eclipse task - classpath modification (Add exclusion for &lt;OFBiz&gt;/framework/base/config and &lt;OFBiz&gt;/framework/base/dtd)
- [[OFBIZ-11090](https://issues.apache.org/jira/browse/OFBIZ-11090)] - Html escaping missing for renderLink parameters
- [[OFBIZ-11109](https://issues.apache.org/jira/browse/OFBIZ-11109)] - Getting an error while creating event from SFA without providing event name
- [[OFBIZ-11125](https://issues.apache.org/jira/browse/OFBIZ-11125)] - No proper error message displayed if user misses to select entities
- [[OFBIZ-11146](https://issues.apache.org/jira/browse/OFBIZ-11146)] - favicon.ico missing for LookupDecorator

## New Feature

- [[OFBIZ-10639](https://issues.apache.org/jira/browse/OFBIZ-10639)] - Cookie Consent In E-Commerce

## Improvement

- [[OFBIZ-3907](https://issues.apache.org/jira/browse/OFBIZ-3907)] - Product Promo Worker description patch
- [[OFBIZ-10377](https://issues.apache.org/jira/browse/OFBIZ-10377)] - Missing oldStatusId in error when no status valid change record found
- [[OFBIZ-10717](https://issues.apache.org/jira/browse/OFBIZ-10717)] - EntityUtilProperties.getProperties method should use cache.
- [[OFBIZ-10756](https://issues.apache.org/jira/browse/OFBIZ-10756)] - Prepare the migration to XStream 1.5
- [[OFBIZ-10770](https://issues.apache.org/jira/browse/OFBIZ-10770)] - Update Apache commons-fileupload to last version
- [[OFBIZ-10786](https://issues.apache.org/jira/browse/OFBIZ-10786)] - Wrong German translation in PartyUiLabels
- [[OFBIZ-10837](https://issues.apache.org/jira/browse/OFBIZ-10837)] - Improve ObjectInputStream class
- [[OFBIZ-11124](https://issues.apache.org/jira/browse/OFBIZ-11124)] - Allow to create single file if both directory and filename is provided by user

## Task

- [[OFBIZ-10721](https://issues.apache.org/jira/browse/OFBIZ-10721)] - Remove all the fk dependencies from stats entities to the business entities
- [[OFBIZ-10788](https://issues.apache.org/jira/browse/OFBIZ-10788)] - R16.11: Upgrade Tomcat to 8.5.37
