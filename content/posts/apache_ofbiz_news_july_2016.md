---
layout: post
title: Apache OFBiz News - July 2016
date: '2016-08-09T17:58:27+00:00'
permalink: apache_ofbiz_news_july_2016
---
## Apache OFBiz News July 2016

Welcome to our regular monthly round-up of OFBiz news. This month we have news about the new build system in our trunk, the introduction of unit tests, ongoing support for our unreleased branches and the community selects a new logo.

<!--more-->

## Changeover from Ant to Gradle in the OFBiz Trunk

As mentioned in our last update, a patch was being prepared to changeover our existing build system (Ant) to Gradle. A key driver of the change was to remove external dependencies from the source code. In future releases Gradle will automatically download any dependencies.

<p></p>

A lot of hard work was done and during July the patch was applied to the trunk. This is a significant step for the project as this is a major change. Thanks to everyone who helped with reviewing, testing, and removal of dependencies. Ensuring that all the existing functionality available with Ant and was also was available in Gradle is still ongoing, with some clean-up also being done. There are still a few dependencies left to remove and work is in progress to finalise these.

<p></p>

## Introduction of Unit Tests

Our existing code made use of integration tests rather than unit tests. With the change to Gradle, we now have the ability to introduce unit tests and Test Driven Development (TDD). This is something that will improve the quality of the code and also ensure that developers make sure their code is tested. The unit test setup is now in place in the trunk and an initial patch with unit tests for the start component has been submitted. All developers are being encouraged to begin writing and including more unit tests.

<p></p>

## Support for 14.12 and 15.12

With the change of build system in the trunk, it was important that current users and service providers have access to extended support for the existing codebase. There are currently two unreleased branches 14.12 (created in December 2014) and 15.12 (created in December 2015) that our service providers and developers have been customising for their customer implementations. To ease the transition and to keep the impact low, the community has agreed to backport bug fixes and improvements into these branches until July 2017.

<p></p>

## New Project Logo

This month the community has been discussing whether or not to change the project logo. The OFBiz trademark registration has been finalised and this seemed a good point to talk about any potential changes. Changing a logo is a significant move as it forms part of the project identity so after a lot of community discussion, three potential design options were selected for a community vote. They were as follows:

<p></p>

<a href="https://cwiki.apache.org/confluence/download/attachments/61317052/Original-Ofbiz.png">Option 1: Based on our Existing Logo </a>

<p></p>

<a href="https://cwiki.apache.org/confluence/download/attachments/61317052/NewFeather-OFBiz.png">Option 2: Based on Correct Project Name Spelling and New ASF Feather </a>

<p></p>

<a href="https://cwiki.apache.org/confluence/download/attachments/61317052/Power-OFBiz.png">Option 3: Based on our old OFBiz Power Button </a>

<p></p>

Anyone from the community could vote and the vote was open 5 days. The results were summarised at the following wiki page:

<p></p>

<a href="https://cwiki.apache.org/confluence/display/OFBIZ/July+2016+-+OFBiz+Logo+Survey+Results">OFBiz Logo Survey Results </a>

<p></p>

The most popular selection was Option 3 which uses the icon that was used in the original OFBiz logo when the project first came to Apache. The icon has been re-worked to use the same colours as the new ASF feather.

<p></p>

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Improved the distortion in the UI of the payment section when there is a billing account present for a customer while placing a sales order ([OFBIZ-7484](https://issues.apache.org/jira/browse/OFBIZ-7484))
- Enforced noninstantiability to multiple classes ([OFBIZ-7601](https://issues.apache.org/jira/browse/OFBIZ-7601)) ([OFBIZ-7588](https://issues.apache.org/jira/browse/OFBIZ-7588)) ([OFBIZ-7562](https://issues.apache.org/jira/browse/OFBIZ-7562)) ([OFBIZ-7551](https://issues.apache.org/jira/browse/OFBIZ-7551)) ([OFBIZ-7690](https://issues.apache.org/jira/browse/OFBIZ-7690)) ([OFBIZ-7715](https://issues.apache.org/jira/browse/OFBIZ-7715)) ([OFBIZ-7732](https://issues.apache.org/jira/browse/OFBIZ-7732)) ([OFBIZ-7590](https://issues.apache.org/jira/browse/OFBIZ-7590)) ([OFBIZ-7600](https://issues.apache.org/jira/browse/OFBIZ-7600)) ([OFBIZ-7710](https://issues.apache.org/jira/browse/OFBIZ-7710)) ([OFBIZ-7733](https://issues.apache.org/jira/browse/OFBIZ-7733)) ([OFBIZ-7593](https://issues.apache.org/jira/browse/OFBIZ-7593)) ([OFBIZ-7630](https://issues.apache.org/jira/browse/OFBIZ-7630)) ([OFBIZ-7541](https://issues.apache.org/jira/browse/OFBIZ-7541)) ([OFBIZ-7740](https://issues.apache.org/jira/browse/OFBIZ-7740)) ([OFBIZ-7685](https://issues.apache.org/jira/browse/OFBIZ-7685)) ([OFBIZ-7742](https://issues.apache.org/jira/browse/OFBIZ-7742)) ([OFBIZ-7687](https://issues.apache.org/jira/browse/OFBIZ-7687)) ([OFBIZ-7688](https://issues.apache.org/jira/browse/OFBIZ-7688)) ([OFBIZ-7686](https://issues.apache.org/jira/browse/OFBIZ-7686)) ([OFBIZ-7744](https://issues.apache.org/jira/browse/OFBIZ-7744)) ([OFBIZ-7689](https://issues.apache.org/jira/browse/OFBIZ-7689)) ([OFBIZ-7691](https://issues.apache.org/jira/browse/OFBIZ-7691)) ([OFBIZ-7684](https://issues.apache.org/jira/browse/OFBIZ-7684)) ([OFBIZ-7692](https://issues.apache.org/jira/browse/OFBIZ-7692)) ([OFBIZ-7708](https://issues.apache.org/jira/browse/OFBIZ-7708)) ([OFBIZ-7716](https://issues.apache.org/jira/browse/OFBIZ-7716)) ([OFBIZ-7717](https://issues.apache.org/jira/browse/OFBIZ-7717))
- Added content lookup when adding Content to Product Config Item ([OFBIZ-7629](https://issues.apache.org/jira/browse/OFBIZ-7629))
- Removed Google Checkout and Google Base components from specialpurpose as they were discontinued ([OFBIZ-7705](https://issues.apache.org/jira/browse/OFBIZ-7705)) ([OFBIZ-7727](https://issues.apache.org/jira/browse/OFBIZ-7727))
- Removed HtmlScreenRenderer Class after removing its dependency ([OFBIZ-7635](https://issues.apache.org/jira/browse/OFBIZ-7635))
- Removed HtmlFormRenderer Class after removing its dependency ([OFBIZ-7634](https://issues.apache.org/jira/browse/OFBIZ-7634))
- Replaced Apache Ant with Gradle ([OFBIZ-7534](https://issues.apache.org/jira/browse/OFBIZ-7534))
- Allowed Gradle to generate JavaDocs even if they contain bad formatting ([OFBIZ-7775](https://issues.apache.org/jira/browse/OFBIZ-7775))
- Renamed generated \*ofbiz-gradle.jar\* to \*ofbiz.jar ([OFBIZ-7893](https://issues.apache.org/jira/browse/OFBIZ-7893))
- Created a (short term) Gradle "cleanAnt" task to remove old build dirs ([OFBIZ-7898](https://issues.apache.org/jira/browse/OFBIZ-7898))
- Hidden user inputs for Location/Lot# for fully issued components against production run task ([OFBIZ-7522](https://issues.apache.org/jira/browse/OFBIZ-7522))
- Added new entity Check as payment method ([OFBIZ-7682](https://issues.apache.org/jira/browse/OFBIZ-7682))
- Added a look-up for Product Id at "Add Product Store Surveys" screen ([OFBIZ-7702](https://issues.apache.org/jira/browse/OFBIZ-7702))
- Migrated promotext.properties to UiLabels ([OFBIZ-7297](https://issues.apache.org/jira/browse/OFBIZ-7297))
- Reformatted multiple FTLs for better readability, no functional changes ([OFBIZ-7678](https://issues.apache.org/jira/browse/OFBIZ-7678)) ([OFBIZ-7679](https://issues.apache.org/jira/browse/OFBIZ-7679)) ([OFBIZ-7636](https://issues.apache.org/jira/browse/OFBIZ-7636))
- Added a new procces on entity-auto for "create invocation" to automatically populate the field "changeUserLoginId" and "statusDate" for EntityStatus. The purpose is to track the userlogin for a status change and apply that to all entities that cover the EntityStatus concept ([OFBIZ-7611](https://issues.apache.org/jira/browse/OFBIZ-7611)) ([OFBIZ-7617](https://issues.apache.org/jira/browse/OFBIZ-7617))
- Added Province data for Turkey via GeoData\_TR.xml and the address format for Turkey in GeoData.xml ([OFBIZ-7755](https://issues.apache.org/jira/browse/OFBIZ-7755))
- Removed the ability to persist entries in the file system from UtilCache ([OFBIZ-7760](https://issues.apache.org/jira/browse/OFBIZ-7760))
- Removed the watermarker jar and the code that was dependent on it because Watermarker is a dead project and the jar is no longer publicly available
- Removed a series of artifacts dependent on the old Beanshell jar that is going to be removed from the project, also removed all bash libraries and remaining bsh functionalities ([OFBIZ-7763](https://issues.apache.org/jira/browse/OFBIZ-7763))
- Improved the FinAccountStatus, ShipmentStatus and BudgetStatus entities to manage the "changeByUserLoginId" field along with the conversion of the minilang services to entity-auto ([OFBIZ-7623](https://issues.apache.org/jira/browse/OFBIZ-7623)) ([OFBIZ-7618](https://issues.apache.org/jira/browse/OFBIZ-7618)) ([OFBIZ-7619](https://issues.apache.org/jira/browse/OFBIZ-7619))
- Added Province data for South Africa via GeoData\_ZA.xml and address format for South Africa in GeoData.xml ([OFBIZ-7778](https://issues.apache.org/jira/browse/OFBIZ-7778))
- Cleaned the tools directory ([OFBIZ-7795](https://issues.apache.org/jira/browse/OFBIZ-7795))
- Migrated all java files from /src to /src/main/java ([OFBIZ-7790](https://issues.apache.org/jira/browse/OFBIZ-7790))
- Renamed OFBiz artifacts from org.ofbiz.\* to org.apache.ofbiz.\* ([OFBIZ-6274](https://issues.apache.org/jira/browse/OFBIZ-6274))
- Renamed search.properties in specialpurpose/lucene to lucene.properties ([OFBIZ-6224](https://issues.apache.org/jira/browse/OFBIZ-6224))
- Added download definition for drivers of commonly used open source rdbms to build.gradle ([OFBIZ-7793](https://issues.apache.org/jira/browse/OFBIZ-7793))
- Moved SeoConfig.xml from product to e-commerce ([OFBIZ-6125](https://issues.apache.org/jira/browse/OFBIZ-6125))
- Commented out the auto-detect font for apache fop ([OFBIZ-6274](https://issues.apache.org/jira/browse/OFBIZ-6274))
- Added pagination targets on 'BillingAccountForms', 'CostForms' and 'AP/AR-InvoiceForms' ([OFBIZ-7858](https://issues.apache.org/jira/browse/OFBIZ-7858))
- Cleaned up commented out code in Java source for Accounting and Content ([OFBIZ-7826](https://issues.apache.org/jira/browse/OFBIZ-7826)) ([OFBIZ-7838](https://issues.apache.org/jira/browse/OFBIZ-7838))
- Cleaned up commented out code in Free Marker Template for Accounting ([OFBIZ-7860)](https://issues.apache.org/jira/browse/OFBIZ-7860)
- Improved payment method information UI on "party profile" screen for creating new payment methods ([OFBIZ-7707](https://issues.apache.org/jira/browse/OFBIZ-7707))
- Improved ViewCertificate to use widgets instead of FTL ([OFBIZ-6302](https://issues.apache.org/jira/browse/OFBIZ-6302))
- Introduced unit testing to OFBiz for components in /src/test/java ([OFBIZ-7254](https://issues.apache.org/jira/browse/OFBIZ-7254))
- Introduced unit tests to the start component ([OFBIZ-7897](https://issues.apache.org/jira/browse/OFBIZ-7897))
- Changed logger level from "info" to "all" for org.apache.ofbiz ([OFBIZ-6274](https://issues.apache.org/jira/browse/OFBIZ-6274))
- Moved CertKeystore.groovy to "framework/common/groovyScripts" according to best practice ([OFBIZ-7892](https://issues.apache.org/jira/browse/OFBIZ-7892))
- Created demo PartyStatus data for existing parties for the specialpurpose component ([OFBIZ-7672](https://issues.apache.org/jira/browse/OFBIZ-7672))
- Created demo PartyStatus data for existing parties for the applications component ([OFBIZ-7673](https://issues.apache.org/jira/browse/OFBIZ-7673))
- Removed the pos component ([OFBIZ-7804](https://issues.apache.org/jira/browse/OFBIZ-7804)) ([OFBIZ-7529](https://issues.apache.org/jira/browse/OFBIZ-7529)) ([OFBIZ-7908](https://issues.apache.org/jira/browse/OFBIZ-7908))
- Removed the testlist OFBiz server command ([OFBIZ-7924](https://issues.apache.org/jira/browse/OFBIZ-7924))
- Added the OWASP dependency check plugin for "Copy external jars in OFBiz $buildDir/externalJars for (at least) dependency check" ([OFBIZ-7930](https://issues.apache.org/jira/browse/OFBIZ-7930))
- Commented out the downloads of the main DBMS JDBC drivers (MySql and PostgreSQL) ([OFBIZ-7793](https://issues.apache.org/jira/browse/OFBIZ-7793))
- Migrated promotext\_zh.properties and promotext\_zh\_TW.properties to ProductPromoUiLabels.xml ([OFBIZ-7297](https://issues.apache.org/jira/browse/OFBIZ-7297))

## Bugfixes

Functional and technical bugfixes:

- TrialBalance PDF export fails ([OFBIZ-6638](https://issues.apache.org/jira/browse/OFBIZ-6638))
- Income Statement PDF export fails ([OFBIZ-7514](https://issues.apache.org/jira/browse/OFBIZ-7514))
- Balance Sheet PDF export fails ([OFBIZ-7515](https://issues.apache.org/jira/browse/OFBIZ-7515))
- Order Discount Code Report is not working ([OFBIZ-7315](https://issues.apache.org/jira/browse/OFBIZ-7315))
- Product Demand Report is not working ([OFBIZ-7316](https://issues.apache.org/jira/browse/OFBIZ-7316))
- Error on product detail page ([OFBIZ-7212](https://issues.apache.org/jira/browse/OFBIZ-7212))
- Small UI issue at project overview ([OFBIZ-7305](https://issues.apache.org/jira/browse/OFBIZ-7305))
- Missing required client side validation on sending BIRT report by mail ([OFBIZ-7421](https://issues.apache.org/jira/browse/OFBIZ-7421))
- Wrong UI Labels for Forum group name on forum group roles and purposes screens ([OFBIZ-7676](https://issues.apache.org/jira/browse/OFBIZ-7676))
- Invalid content was found starting with element 'xls' ([OFBIZ-7699](https://issues.apache.org/jira/browse/OFBIZ-7699))
- Error on cancelling agreement ([OFBIZ-7143](https://issues.apache.org/jira/browse/OFBIZ-7143))
- While adding a new skill to any party the old skills disappear from the party skill list ([OFBIZ-7560](https://issues.apache.org/jira/browse/OFBIZ-7560))
- Removed mistakenly added code ([OFBIZ-7571](https://issues.apache.org/jira/browse/OFBIZ-7571))
- Entered "toName" is not getting stored when creating Party Invitation ([OFBIZ-7599](https://issues.apache.org/jira/browse/OFBIZ-7599))
- Unable to create a new communication from LEAD in SFA ([OFBIZ-6421](https://issues.apache.org/jira/browse/OFBIZ-6421))
- The alt-target tag is not working as expected in the Form Widget ([OFBIZ-7513](https://issues.apache.org/jira/browse/OFBIZ-7513))
- Checks --&gt; Print (PDF) should open in a new window ([OFBIZ-7193](https://issues.apache.org/jira/browse/OFBIZ-7193))
- Duplicated product feature groups associated with a category when duplicating category and selected option to duplicate feature ([OFBIZ-7258](https://issues.apache.org/jira/browse/OFBIZ-7258))
- Multiple components: Checkbox and Radio buttons should get selected when clicking on their labels (<a href="https:// <p>issues.apache.org/jira/browse/OFBIZ-7577">OFBIZ-7577) ([OFBIZ-7578](https://issues.apache.org/jira/browse/OFBIZ-7578)) ([OFBIZ-7580](https://issues.apache.org/jira/browse/OFBIZ-7580)) ([OFBIZ-7582](https://issues.apache.org/jira/browse/OFBIZ-7582)) ([OFBIZ-7583](https://issues.apache.org/jira/browse/OFBIZ-7583)) ([OFBIZ-7584](https://issues.apache.org/jira/browse/OFBIZ-7584)) ([OFBIZ-7585](https://issues.apache.org/jira/browse/OFBIZ-7585)) ([OFBIZ-7667](https://issues.apache.org/jira/browse/OFBIZ-7667)) ([OFBIZ-7668](https://issues.apache.org/jira/browse/OFBIZ-7668)) ([OFBIZ-7669](https://issues.apache.org/jira/browse/OFBIZ-7669))
- The "ALL" Checkbox for status field in Order List does not work properly ([OFBIZ-7553](https://issues.apache.org/jira/browse/OFBIZ-7553))
- Unable to create Product Store Roles from Party manager ([OFBIZ-7518](https://issues.apache.org/jira/browse/OFBIZ-7518))
- Pricing error in Variant Products when setup with VAT and price set on Virtual Product ([OFBIZ-6576](https://issues.apache.org/jira/browse/OFBIZ-6576))
- The 'Issue Component' option after partial issuance against required component quantity is not accounting for already issued quantity ([OFBIZ-7512](https://issues.apache.org/jira/browse/OFBIZ-7512))
- Unable to set "thruDate" for "List survey" screen of the project component if more than one survey in available ([OFBIZ-7703](https://issues.apache.org/jira/browse/OFBIZ-7703))
- Success message should be shown on screen for successfully applied promotion ([OFBIZ-7654](https://issues.apache.org/jira/browse/OFBIZ-7654))
- "Tasks" menu is not showing as selected when clicked in the scrum component ([OFBIZ-7652](https://issues.apache.org/jira/browse/OFBIZ-7652))
- Shipping charges reset to ZERO on updating the purchase order item quantity ([OFBIZ-7063](https://issues.apache.org/jira/browse/OFBIZ-7063))
- When loading with a derby database - Error adding foreign key: ModelEntity was null for related entity name Tenant ([OFBIZ-7750](https://issues.apache.org/jira/browse/OFBIZ-7750))
- Missing field "parentTypeId" in the DeductionType entity ([OFBIZ-7751](https://issues.apache.org/jira/browse/OFBIZ-7751))
- UI improvements on XML Data Export screen: label "Entity Names:" not positioned correctly; "Entity Sync Dump:" text box not visible in all the themes except Tomahawk ([OFBIZ-7443](https://issues.apache.org/jira/browse/OFBIZ-7443))
- Inconsistent UI for Update and Expire button in the "Facility Contact Information" screen ([OFBIZ-7342](https://issues.apache.org/jira/browse/OFBIZ-7342))
- Wrong AddedNoteCustRequestNotification.ftl path in CustRequestScreens.xml
- Overview of questions in EditSurveyQuestions.ftl does not paginate properly ([OFBIZ-6214](https://issues.apache.org/jira/browse/OFBIZ-6214))
- Catalog: Product Store Group from Product Store Group List item doesn't open when clicking on it ([OFBIZ-7361](https://issues.apache.org/jira/browse/OFBIZ-7361))
- Removed TaxAuthorityVATReport forms and the related controller request, as it's marked as WIP since 2009 ([OFBIZ-7764](https://issues.apache.org/jira/browse/OFBIZ-7764))
- Converted Minilang code that was using the deprecated "call-bsh" element to use the "script" element with Groovy ([OFBIZ-7765](https://issues.apache.org/jira/browse/OFBIZ-7765))
- Multiple issues in the gradle eclipse plugin ([OFBIZ-7779](https://issues.apache.org/jira/browse/OFBIZ-7779))
- Bug in OFBizSetup Create Customer Step ([OFBIZ-7797](https://issues.apache.org/jira/browse/OFBIZ-7797))
- IterateOverActiveComponents exists twice ([OFBIZ-7749](https://issues.apache.org/jira/browse/OFBIZ-7749))
- Removed unused imports from groovy files from workerffort and hhfacility ([OFBIZ-7761](https://issues.apache.org/jira/browse/OFBIZ-7761)) ([OFBIZ-7829](https://issues.apache.org/jira/browse/OFBIZ-7829))
- "File not found" exception in export to ebay ([OFBIZ-7700](https://issues.apache.org/jira/browse/OFBIZ-7700))
- Running MRP shows all types of facilities, only facilities of type "WAREHOUSE" should be listed ([OFBIZ-7168](https://issues.apache.org/jira/browse/OFBIZ-7168))
- Product look-up not available while adding items in the shopping list ([OFBIZ-7823](https://issues.apache.org/jira/browse/OFBIZ-7823))
- Renamed selectall.js to OfbizUtil.js ([OFBIZ-1319](https://issues.apache.org/jira/browse/OFBIZ-1319))
- UiLabels missing on Examples PDF ([OFBIZ-7525](https://issues.apache.org/jira/browse/OFBIZ-7525))
- Attribute Name should not be allowed to edit while updating Party Attribute record ([OFBIZ-7561](https://issues.apache.org/jira/browse/OFBIZ-7561))
- Creating CustReq from CommEvent shows error on screen ([OFBIZ-7435](https://issues.apache.org/jira/browse/OFBIZ-7435))
- FromDate and ThruDate shows empty for WorkEffort Children ([OFBIZ-7663](https://issues.apache.org/jira/browse/OFBIZ-7663))
- Broken link to "View Customer request" in email sent to the customer ([OFBIZ-7844](https://issues.apache.org/jira/browse/OFBIZ-7844))
- Parent Comm Event Id rendering on the "Edit Communication Event" form is distorted ([OFBIZ-7840](https://issues.apache.org/jira/browse/OFBIZ-7840))
- Missing UI Label resource in the main-decorator for the SFA component ([OFBIZ-7825](https://issues.apache.org/jira/browse/OFBIZ-7825))
- Party content in party component is not getting updated ([OFBIZ-7612](https://issues.apache.org/jira/browse/OFBIZ-7612))
- Issue in the SFA "Lead Profile" view in the "quick add" form when a group is provided (<a href="https://issues.apach </p><p>e.org/jira/browse/OFBIZ-7843">OFBIZ-7843)
- Broken screen on "Go Back" from the "Edit Contact Mech" screen in the scrum component ([OFBIZ-7712](https://issues.apache.org/jira/browse/OFBIZ-7712))
- "parentCommEventId" does not get passed as a parameter from "Edit Communication Event" ([OFBIZ-7752](https://issues.apache.org/jira/browse/OFBIZ-7752))
- Unwanted input box on OrderList screen ([OFBIZ-7836](https://issues.apache.org/jira/browse/OFBIZ-7836))
- Removal of old OFBiz images from images folder ([OFBIZ-7919](https://issues.apache.org/jira/browse/OFBIZ-7919))
- Gradle tasks not running on Windows ([OFBIZ-7815](https://issues.apache.org/jira/browse/OFBIZ-7815))
- ListGlAccountsReport should open in a new window (<a href="https://issues.apache.org/jira/browse/OFBIZ-79 </p><p>25">OFBIZ-7925)
- Pagination through marketing campains is broken ([OFBIZ-7922](https://issues.apache.org/jira/browse/OFBIZ-7922)
- "find Total Backlog Item" in the scrum component is not working in a non-English language (<a href="https: </p><p>//issues.apache.org/jira/browse/OFBIZ-7929">OFBIZ-7929)
- Error when creating PartyTaxAuthInfo ([OFBIZ-7442](https://issues.apache.org/jira/browse/OFBIZ-7442))
</p>
