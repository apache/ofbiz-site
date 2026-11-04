---
layout: post
title: Apache OFBiz News - July 2016
date: '2016-08-09T17:58:27+00:00'
permalink: apache_ofbiz_news_july_2016
---
<h2>Apache OFBiz News July 2016 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about the new build system in our trunk, the introduction of unit tests, ongoing support for our unreleased branches and the community selects a new logo.
<!--more-->

<h2>Changeover from Ant to Gradle in the OFBiz Trunk</h2>
As mentioned in our last update, a patch was being prepared to changeover our existing build system (Ant) to Gradle. A key driver of the change was to remove external dependencies from the source code. In future releases Gradle will automatically download any dependencies.
<p></p>
A lot of hard work was done and during July the patch was applied to the trunk. This is a significant step for the project as this is a major change. Thanks to everyone who helped  with reviewing, testing, and removal of dependencies. Ensuring that all the existing functionality available with Ant and was also was available in Gradle is still ongoing, with some clean-up also being done. There are still a few dependencies left to remove and work is in progress to finalise these. 
<p></p>


<h2>Introduction of Unit Tests </h2>
Our existing code made use of integration tests rather than unit tests. With the change to Gradle, we now have the ability to introduce unit tests and Test Driven Development (TDD). This is something that will improve the quality of the code and also ensure that developers make sure their code is tested. 
The unit test setup is now in place in the trunk and an initial patch with unit tests for the start component has been submitted. All developers are being encouraged to begin writing and including more unit tests.
<p></p>


<h2>Support for 14.12 and 15.12 </h2>
With the change of build system in the trunk, it was important that current users and service providers have access to extended support for the existing codebase. There are currently two unreleased branches 14.12 (created in December 2014) and 15.12 (created in December 2015) that our service providers and developers have been customising for their customer implementations. To ease the transition and to keep the impact low,  the community has agreed to backport bug fixes and improvements into these branches until   July 2017. 
<p></p>

<h2>New Project Logo</h2>
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

<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Improved the distortion in the UI of the payment section when there is a billing account present for a customer while placing a sales order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7484">OFBIZ-7484</a>)</li>
 	<li>Enforced noninstantiability to multiple classes (<a href="https://issues.apache.org/jira/browse/OFBIZ-7601">OFBIZ-7601</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7588">OFBIZ-7588</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7562">OFBIZ-7562</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7551">OFBIZ-7551</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7690">OFBIZ-7690</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7715">OFBIZ-7715</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7732">OFBIZ-7732</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7590">OFBIZ-7590</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7600">OFBIZ-7600</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7710">OFBIZ-7710</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7733">OFBIZ-7733</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7593">OFBIZ-7593</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7630">OFBIZ-7630</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7541">OFBIZ-7541</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7740">OFBIZ-7740</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7685">OFBIZ-7685</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7742">OFBIZ-7742</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7687">OFBIZ-7687</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7688">OFBIZ-7688</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7686">OFBIZ-7686</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7744">OFBIZ-7744</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7689">OFBIZ-7689</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7691">OFBIZ-7691</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7684">OFBIZ-7684</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7692">OFBIZ-7692</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7708">OFBIZ-7708</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7716">OFBIZ-7716</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7717">OFBIZ-7717</a>)</li>
 	<li>Added content lookup when adding Content to Product Config Item (<a href="https://issues.apache.org/jira/browse/OFBIZ-7629">OFBIZ-7629</a>)</li>
 	<li>Removed Google Checkout and Google Base components from specialpurpose as they were discontinued (<a href="https://issues.apache.org/jira/browse/OFBIZ-7705">OFBIZ-7705</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7727">OFBIZ-7727</a>)</li>
 	<li>Removed HtmlScreenRenderer Class after removing its dependency (<a href="https://issues.apache.org/jira/browse/OFBIZ-7635">OFBIZ-7635</a>)</li>
 	<li>Removed HtmlFormRenderer Class after removing its dependency (<a href="https://issues.apache.org/jira/browse/OFBIZ-7634">OFBIZ-7634</a>)</li>
 	<li>Replaced Apache Ant with Gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-7534">OFBIZ-7534</a>)</li>
 	<li>Allowed Gradle to generate JavaDocs even if they contain bad formatting (<a href="https://issues.apache.org/jira/browse/OFBIZ-7775">OFBIZ-7775</a>)</li>
 	<li>Renamed generated *ofbiz-gradle.jar* to *ofbiz.jar (<a href="https://issues.apache.org/jira/browse/OFBIZ-7893">OFBIZ-7893</a>)</li>
 	<li>Created a (short term) Gradle "cleanAnt" task to remove old build dirs (<a href="https://issues.apache.org/jira/browse/OFBIZ-7898">OFBIZ-7898</a>)</li>
 	<li>Hidden user inputs for Location/Lot# for fully issued components against production run task (<a href="https://issues.apache.org/jira/browse/OFBIZ-7522">OFBIZ-7522</a>)</li>
 	<li>Added new entity Check as payment method (<a href="https://issues.apache.org/jira/browse/OFBIZ-7682">OFBIZ-7682</a>)</li>
 	<li>Added a look-up for Product Id at "Add Product Store Surveys" screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7702">OFBIZ-7702</a>)</li>
 	<li>Migrated promotext.properties to UiLabels (<a href="https://issues.apache.org/jira/browse/OFBIZ-7297">OFBIZ-7297</a>)</li>
 	<li>Reformatted multiple FTLs for better readability, no functional changes (<a href="https://issues.apache.org/jira/browse/OFBIZ-7678">OFBIZ-7678</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7679">OFBIZ-7679</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7636">OFBIZ-7636</a>)</li>
 	<li>Added a new procces on entity-auto for "create invocation" to automatically populate the field "changeUserLoginId" and "statusDate" for EntityStatus. The purpose is to track the userlogin for a status change and apply that to all entities that cover the EntityStatus concept (<a href="https://issues.apache.org/jira/browse/OFBIZ-7611">OFBIZ-7611</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7617">OFBIZ-7617</a>)</li>
 	<li>Added Province data for Turkey via GeoData_TR.xml and the address format for Turkey in GeoData.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-7755">OFBIZ-7755</a>)</li>
 	<li>Removed the ability to persist entries in the file system from UtilCache (<a href="https://issues.apache.org/jira/browse/OFBIZ-7760">OFBIZ-7760</a>)</li>
 	<li>Removed the watermarker jar and the code that was dependent on it because Watermarker is a dead project and the jar is no longer publicly available</li>
 	<li>Removed a series of artifacts dependent on the old Beanshell jar that is going to be removed from the project, also removed all bash libraries and remaining bsh functionalities (<a href="https://issues.apache.org/jira/browse/OFBIZ-7763">OFBIZ-7763</a>)</li>
 	<li>Improved the FinAccountStatus, ShipmentStatus and BudgetStatus entities to manage the "changeByUserLoginId" field along with the conversion of the minilang services to entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-7623">OFBIZ-7623</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7618">OFBIZ-7618</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7619">OFBIZ-7619</a>)</li>
 	<li>Added Province data for South Africa via GeoData_ZA.xml and address format for South Africa in GeoData.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-7778">OFBIZ-7778</a>)</li>
 	<li>Cleaned the tools directory (<a href="https://issues.apache.org/jira/browse/OFBIZ-7795">OFBIZ-7795</a>)</li>
 	<li>Migrated all java files from /src to /src/main/java (<a href="https://issues.apache.org/jira/browse/OFBIZ-7790">OFBIZ-7790</a>)</li>
 	<li>Renamed OFBiz artifacts from org.ofbiz.* to org.apache.ofbiz.* (<a href="https://issues.apache.org/jira/browse/OFBIZ-6274">OFBIZ-6274</a>)</li>
 	<li>Renamed search.properties in specialpurpose/lucene to lucene.properties (<a href="https://issues.apache.org/jira/browse/OFBIZ-6224">OFBIZ-6224</a>)</li>
 	<li>Added download definition for drivers of commonly used open source rdbms to build.gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-7793">OFBIZ-7793</a>)</li>
 	<li>Moved SeoConfig.xml from product to e-commerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-6125">OFBIZ-6125</a>)</li>
 	<li>Commented out the auto-detect font for apache fop (<a href="https://issues.apache.org/jira/browse/OFBIZ-6274">OFBIZ-6274</a>)</li>
 	<li>Added pagination targets on 'BillingAccountForms', 'CostForms' and 'AP/AR-InvoiceForms' (<a href="https://issues.apache.org/jira/browse/OFBIZ-7858">OFBIZ-7858</a>)</li>
 	<li>Cleaned up commented out code in Java source for Accounting and Content (<a href="https://issues.apache.org/jira/browse/OFBIZ-7826">OFBIZ-7826</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7838">OFBIZ-7838</a>)</li>
 	<li>Cleaned up commented out code in Free Marker Template for Accounting (<a href="https://issues.apache.org/jira/browse/OFBIZ-7860">OFBIZ-7860)</a></li>
 	<li>Improved payment method information UI on "party profile" screen for creating new payment methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-7707">OFBIZ-7707</a>)</li>
 	<li>Improved ViewCertificate to use widgets instead of FTL (<a href="https://issues.apache.org/jira/browse/OFBIZ-6302">OFBIZ-6302</a>)</li>
 	<li>Introduced unit testing to OFBiz for components in /src/test/java (<a href="https://issues.apache.org/jira/browse/OFBIZ-7254">OFBIZ-7254</a>)</li>
 	<li>Introduced unit tests to the start component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7897">OFBIZ-7897</a>)</li>
 	<li>Changed logger level from "info" to "all" for org.apache.ofbiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-6274">OFBIZ-6274</a>)</li>
 	<li>Moved CertKeystore.groovy to "framework/common/groovyScripts" according to best practice (<a href="https://issues.apache.org/jira/browse/OFBIZ-7892">OFBIZ-7892</a>)</li>
 	<li>Created demo PartyStatus data for existing parties for the specialpurpose component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7672">OFBIZ-7672</a>)</li>
 	<li>Created demo PartyStatus data for existing parties for the applications component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7673">OFBIZ-7673</a>)</li>
 	<li>Removed the pos component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7804">OFBIZ-7804</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7529">OFBIZ-7529</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7908">OFBIZ-7908</a>)</li>
 	<li>Removed the testlist OFBiz server command (<a href="https://issues.apache.org/jira/browse/OFBIZ-7924">OFBIZ-7924</a>)</li>
 	<li>Added the OWASP dependency check plugin for "Copy external jars in OFBiz $buildDir/externalJars for (at least) dependency check" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7930">OFBIZ-7930</a>)</li>
 	<li>Commented out the downloads of the main DBMS JDBC drivers (MySql and PostgreSQL) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7793">OFBIZ-7793</a>)</li>
 	<li>Migrated promotext_zh.properties and promotext_zh_TW.properties to ProductPromoUiLabels.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-7297">OFBIZ-7297</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>TrialBalance PDF export fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-6638">OFBIZ-6638</a>)</li>
 	<li>Income Statement PDF export fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-7514">OFBIZ-7514</a>)</li>
 	<li>Balance Sheet PDF export fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-7515">OFBIZ-7515</a>)</li>
 	<li>Order Discount Code Report is not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-7315">OFBIZ-7315</a>)</li>
 	<li>Product Demand Report is not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-7316">OFBIZ-7316</a>)</li>
 	<li>Error on product detail page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7212">OFBIZ-7212</a>)</li>
 	<li>Small UI issue at project overview (<a href="https://issues.apache.org/jira/browse/OFBIZ-7305">OFBIZ-7305</a>)</li>
 	<li>Missing required client side validation on sending BIRT report by mail (<a href="https://issues.apache.org/jira/browse/OFBIZ-7421">OFBIZ-7421</a>)</li>
 	<li>Wrong UI Labels for Forum group name on forum group roles and purposes screens (<a href="https://issues.apache.org/jira/browse/OFBIZ-7676">OFBIZ-7676</a>)</li>
 	<li>Invalid content was found starting with element 'xls' (<a href="https://issues.apache.org/jira/browse/OFBIZ-7699">OFBIZ-7699</a>)</li>
 	<li>Error on cancelling agreement (<a href="https://issues.apache.org/jira/browse/OFBIZ-7143">OFBIZ-7143</a>)</li>
 	<li>While adding a new skill to any party the old skills disappear from the party skill list (<a href="https://issues.apache.org/jira/browse/OFBIZ-7560">OFBIZ-7560</a>)</li>
 	<li>Removed mistakenly added code (<a href="https://issues.apache.org/jira/browse/OFBIZ-7571">OFBIZ-7571</a>)</li>
 	<li>Entered "toName" is not getting stored when creating Party Invitation (<a href="https://issues.apache.org/jira/browse/OFBIZ-7599">OFBIZ-7599</a>)</li>
 	<li>Unable to create a new communication from LEAD in SFA (<a href="https://issues.apache.org/jira/browse/OFBIZ-6421">OFBIZ-6421</a>)</li>
 	<li>The alt-target tag is not working as expected in the Form Widget (<a href="https://issues.apache.org/jira/browse/OFBIZ-7513">OFBIZ-7513</a>)</li>
 	<li>Checks --&gt; Print (PDF) should open in a new window (<a href="https://issues.apache.org/jira/browse/OFBIZ-7193">OFBIZ-7193</a>)</li>
 	<li>Duplicated product feature groups associated with a category when duplicating category and selected option to duplicate feature (<a href="https://issues.apache.org/jira/browse/OFBIZ-7258">OFBIZ-7258</a>)</li>
 	<li>Multiple components: Checkbox and Radio buttons should get selected when clicking on their labels (<a href="https://&lt;/li&gt; &lt;p&gt;issues.apache.org/jira/browse/OFBIZ-7577">OFBIZ-7577</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7578">OFBIZ-7578</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7580">OFBIZ-7580</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7582">OFBIZ-7582</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7583">OFBIZ-7583</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7584">OFBIZ-7584</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7585">OFBIZ-7585</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7667">OFBIZ-7667</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7668">OFBIZ-7668</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7669">OFBIZ-7669</a>)</li>
 	<li>The "ALL" Checkbox for status field in Order List does not work properly (<a href="https://issues.apache.org/jira/browse/OFBIZ-7553">OFBIZ-7553</a>)</li>
 	<li>Unable to create Product Store Roles from Party manager (<a href="https://issues.apache.org/jira/browse/OFBIZ-7518">OFBIZ-7518</a>)</li>
 	<li>Pricing error in Variant Products when setup with VAT and price set on Virtual Product (<a href="https://issues.apache.org/jira/browse/OFBIZ-6576">OFBIZ-6576</a>)</li>
 	<li>The 'Issue Component' option after partial issuance against required component quantity is not accounting for already issued quantity (<a href="https://issues.apache.org/jira/browse/OFBIZ-7512">OFBIZ-7512</a>)</li>
 	<li>Unable to set "thruDate" for "List survey" screen of the project component if more than one survey in available (<a href="https://issues.apache.org/jira/browse/OFBIZ-7703">OFBIZ-7703</a>)</li>
 	<li>Success message should be shown on screen for successfully applied promotion (<a href="https://issues.apache.org/jira/browse/OFBIZ-7654">OFBIZ-7654</a>)</li>
 	<li>"Tasks" menu is not showing as selected when clicked in the scrum component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7652">OFBIZ-7652</a>)</li>
 	<li>Shipping charges reset to ZERO on updating the purchase order item quantity (<a href="https://issues.apache.org/jira/browse/OFBIZ-7063">OFBIZ-7063</a>)</li>
 	<li>When loading with a derby database - Error adding foreign key: ModelEntity was null for related entity name Tenant (<a href="https://issues.apache.org/jira/browse/OFBIZ-7750">OFBIZ-7750</a>)</li>
 	<li>Missing field "parentTypeId" in the DeductionType entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-7751">OFBIZ-7751</a>)</li>
 	<li>UI improvements on XML Data Export screen: label "Entity Names:" not positioned correctly; "Entity Sync Dump:" text box not visible in all the themes except Tomahawk (<a href="https://issues.apache.org/jira/browse/OFBIZ-7443">OFBIZ-7443</a>)</li>
 	<li>Inconsistent UI for Update and Expire button in the "Facility Contact Information" screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7342">OFBIZ-7342</a>)</li>
 	<li>Wrong AddedNoteCustRequestNotification.ftl path in CustRequestScreens.xml</li>
 	<li>Overview of questions in EditSurveyQuestions.ftl does not paginate properly (<a href="https://issues.apache.org/jira/browse/OFBIZ-6214">OFBIZ-6214</a>)</li>
 	<li>Catalog: Product Store Group from Product Store Group List item doesn't open when clicking on it (<a href="https://issues.apache.org/jira/browse/OFBIZ-7361">OFBIZ-7361</a>)</li>
 	<li>Removed TaxAuthorityVATReport forms and the related controller request, as it's marked as WIP since 2009 (<a href="https://issues.apache.org/jira/browse/OFBIZ-7764">OFBIZ-7764</a>)</li>
 	<li>Converted Minilang code that was using the deprecated "call-bsh" element to use the "script" element with Groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-7765">OFBIZ-7765</a>)</li>
 	<li>Multiple issues in the gradle eclipse plugin (<a href="https://issues.apache.org/jira/browse/OFBIZ-7779">OFBIZ-7779</a>)</li>
 	<li>Bug in OFBizSetup Create Customer Step (<a href="https://issues.apache.org/jira/browse/OFBIZ-7797">OFBIZ-7797</a>)</li>
 	<li>IterateOverActiveComponents exists twice (<a href="https://issues.apache.org/jira/browse/OFBIZ-7749">OFBIZ-7749</a>)</li>
 	<li>Removed unused imports from groovy files from workerffort and hhfacility (<a href="https://issues.apache.org/jira/browse/OFBIZ-7761">OFBIZ-7761</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7829">OFBIZ-7829</a>)</li>
 	<li>"File not found" exception in export to ebay (<a href="https://issues.apache.org/jira/browse/OFBIZ-7700">OFBIZ-7700</a>)</li>
 	<li>Running MRP shows all types of facilities, only facilities of type "WAREHOUSE" should be listed (<a href="https://issues.apache.org/jira/browse/OFBIZ-7168">OFBIZ-7168</a>)</li>
 	<li>Product look-up not available while adding items in the shopping list (<a href="https://issues.apache.org/jira/browse/OFBIZ-7823">OFBIZ-7823</a>)</li>
 	<li>Renamed selectall.js to OfbizUtil.js (<a href="https://issues.apache.org/jira/browse/OFBIZ-1319">OFBIZ-1319</a>)</li>
 	<li>UiLabels missing on Examples PDF (<a href="https://issues.apache.org/jira/browse/OFBIZ-7525">OFBIZ-7525</a>)</li>
 	<li>Attribute Name should not be allowed to edit while updating Party Attribute record (<a href="https://issues.apache.org/jira/browse/OFBIZ-7561">OFBIZ-7561</a>)</li>
 	<li>Creating CustReq from CommEvent shows error on screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7435">OFBIZ-7435</a>)</li>
 	<li>FromDate and ThruDate shows empty for WorkEffort Children (<a href="https://issues.apache.org/jira/browse/OFBIZ-7663">OFBIZ-7663</a>)</li>
 	<li>Broken link to "View Customer request" in email sent to the customer (<a href="https://issues.apache.org/jira/browse/OFBIZ-7844">OFBIZ-7844</a>)</li>
 	<li>Parent Comm Event Id rendering on the "Edit Communication Event" form is distorted (<a href="https://issues.apache.org/jira/browse/OFBIZ-7840">OFBIZ-7840</a>)</li>
 	<li>Missing UI Label resource in the main-decorator for the SFA component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7825">OFBIZ-7825</a>)</li>
 	<li>Party content in party component is not getting updated (<a href="https://issues.apache.org/jira/browse/OFBIZ-7612">OFBIZ-7612</a>)</li>
 	<li>Issue in the SFA "Lead Profile" view in the "quick add" form when a group is provided (<a href="https://issues.apach&lt;/li&gt; &lt;p&gt;e.org/jira/browse/OFBIZ-7843">OFBIZ-7843</a>)</li>
 	<li>Broken screen on "Go Back" from the "Edit Contact Mech" screen in the scrum component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7712">OFBIZ-7712</a>)</li>
 	<li>"parentCommEventId" does not get passed as a parameter from "Edit Communication Event" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7752">OFBIZ-7752</a>)</li>
 	<li>Unwanted input box on OrderList screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7836">OFBIZ-7836</a>)</li>
 	<li>Removal of old OFBiz images from images folder (<a href="https://issues.apache.org/jira/browse/OFBIZ-7919">OFBIZ-7919</a>)</li>
 	<li>Gradle tasks not running on Windows (<a href="https://issues.apache.org/jira/browse/OFBIZ-7815">OFBIZ-7815</a>)</li>
 	<li>ListGlAccountsReport should open in a new window (<a href="https://issues.apache.org/jira/browse/OFBIZ-79&lt;/li&gt; &lt;p&gt;25">OFBIZ-7925</a>)</li>
 	<li>Pagination through marketing campains is broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-7922">OFBIZ-7922</a></li>
 	<li>"find Total Backlog Item" in the scrum component is not working in a non-English language (<a href="https:&lt;/li&gt; &lt;p&gt;//issues.apache.org/jira/browse/OFBIZ-7929">OFBIZ-7929</a>)</li>
 	<li>Error when creating PartyTaxAuthInfo (<a href="https://issues.apache.org/jira/browse/OFBIZ-7442">OFBIZ-7442</a>)</li>
</ul>
