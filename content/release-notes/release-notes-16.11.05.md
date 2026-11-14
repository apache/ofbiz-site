---
layout: page
title: Release Notes 16.11.05
description: downloads
---
Apache OFBiz&reg; 16.11.05, released in 2018-10-02, is the fifth release of the 16.11 series, that has been stabilized since November 2016.

## Bugs

- [[OFBIZ-4514](https://issues.apache.org/jira/browse/OFBIZ-4514)] - Taxes are not handled correctly when creating accounting transactions from purchase invoices
- [[OFBIZ-4959](https://issues.apache.org/jira/browse/OFBIZ-4959)] - Logout do not remove autoLogin
- [[OFBIZ-6330](https://issues.apache.org/jira/browse/OFBIZ-6330)] - The invoiceTaxTotal value is missing from createAcctgTransForPurchaseInvoice service
- [[OFBIZ-7535](https://issues.apache.org/jira/browse/OFBIZ-7535)] - Broken page renders while click on Submit button
- [[OFBIZ-7709](https://issues.apache.org/jira/browse/OFBIZ-7709)] - Party Search doesn&#39;t consider Billing Address and Shipping Address checkbox in WebPos
- [[OFBIZ-7719](https://issues.apache.org/jira/browse/OFBIZ-7719)] - Not able to select Virtual Product in WebPos
- [[OFBIZ-7945](https://issues.apache.org/jira/browse/OFBIZ-7945)] - Webpos Keyboard Shortcut keys does not work correctly
- [[OFBIZ-8411](https://issues.apache.org/jira/browse/OFBIZ-8411)] - popup image takes full width of browser window for ecommerce multiflex theme
- [[OFBIZ-8622](https://issues.apache.org/jira/browse/OFBIZ-8622)] - Required parameters are optional for createWorkRequirementFulfillment service
- [[OFBIZ-9664](https://issues.apache.org/jira/browse/OFBIZ-9664)] - OFBiz 16 migration - HTML content filtered
- [[OFBIZ-9898](https://issues.apache.org/jira/browse/OFBIZ-9898)] - Incorrect success message after creating customer
- [[OFBIZ-10006](https://issues.apache.org/jira/browse/OFBIZ-10006)] - Exception Error rendering on all View Category pages
- [[OFBIZ-10121](https://issues.apache.org/jira/browse/OFBIZ-10121)] - Incorrect Party profile view redirection in SFA due to missing roleType
- [[OFBIZ-10122](https://issues.apache.org/jira/browse/OFBIZ-10122)] - Not able to add the requirement,broken screen with the error message in workeffort component
- [[OFBIZ-10133](https://issues.apache.org/jira/browse/OFBIZ-10133)] - streaming large content cause out of memory exception.
- [[OFBIZ-10148](https://issues.apache.org/jira/browse/OFBIZ-10148)] - Display the included vat amount on order item detail instead of 0
- [[OFBIZ-10149](https://issues.apache.org/jira/browse/OFBIZ-10149)] - ProductPriceRuleCondition &quot;is Product&quot; don&#39;t check the virtual product
- [[OFBIZ-10153](https://issues.apache.org/jira/browse/OFBIZ-10153)] - Shipping Label printing not working
- [[OFBIZ-10154](https://issues.apache.org/jira/browse/OFBIZ-10154)] - pagination errors in &quot;KeywordSearch.ftl&quot; and &quot;ProductSearchSession.java&quot;
- [[OFBIZ-10158](https://issues.apache.org/jira/browse/OFBIZ-10158)] - Find Employee Position does not allow &quot;don&#39;t care&quot; for boolean fields
- [[OFBIZ-10159](https://issues.apache.org/jira/browse/OFBIZ-10159)] - Correcting findOne() in OfbizDslDescriptorForEclipse.dsld
- [[OFBIZ-10210](https://issues.apache.org/jira/browse/OFBIZ-10210)] - Values are not aligned with column over EditShoppingList Screen
- [[OFBIZ-10218](https://issues.apache.org/jira/browse/OFBIZ-10218)] - UtilNumber.getBigDecimalRoundingMode() returns a wrong value
- [[OFBIZ-10232](https://issues.apache.org/jira/browse/OFBIZ-10232)] - Survey response data lost on loadCartFromOrder service
- [[OFBIZ-10243](https://issues.apache.org/jira/browse/OFBIZ-10243)] - Error in service definition for deleteOrderHeaderWorkEffort
- [[OFBIZ-10274](https://issues.apache.org/jira/browse/OFBIZ-10274)] - Wrong locale/fallbackLocale logic in CategoryContentWrapper leads to unavailable alternate locale content
- [[OFBIZ-10275](https://issues.apache.org/jira/browse/OFBIZ-10275)] - UtilCodec URL decoding breaks values with german umlauts
- [[OFBIZ-10277](https://issues.apache.org/jira/browse/OFBIZ-10277)] - The getJSONuiLabel javascript function is no longer working
- [[OFBIZ-10278](https://issues.apache.org/jira/browse/OFBIZ-10278)] - The server hour normally shown in the jobs list is no longer showing
- [[OFBIZ-10321](https://issues.apache.org/jira/browse/OFBIZ-10321)] - Multi-level BOM (same raw MM in different level) MRP not supportive
- [[OFBIZ-10369](https://issues.apache.org/jira/browse/OFBIZ-10369)] - ConfigXMLReader - Events are not executed in the order defined
- [[OFBIZ-10389](https://issues.apache.org/jira/browse/OFBIZ-10389)] - The first visit event are not executed in case of CMS
- [[OFBIZ-10392](https://issues.apache.org/jira/browse/OFBIZ-10392)] - FindInventoryEventPlan Error
- [[OFBIZ-10394](https://issues.apache.org/jira/browse/OFBIZ-10394)] - Fix typo &quot;paramters&quot; =&gt; &quot;parameters&quot;
- [[OFBIZ-10405](https://issues.apache.org/jira/browse/OFBIZ-10405)] - Wrong permission action leads to error
- [[OFBIZ-10406](https://issues.apache.org/jira/browse/OFBIZ-10406)] - Dynamic values not rendering properly in property tag of fail-property attribute
- [[OFBIZ-10419](https://issues.apache.org/jira/browse/OFBIZ-10419)] - Incorrect data type conversion of variable serviceEndTime in CoreEvents.java
- [[OFBIZ-10425](https://issues.apache.org/jira/browse/OFBIZ-10425)] - When check out after input billing information, it&#39;s displayed as java object
- [[OFBIZ-10458](https://issues.apache.org/jira/browse/OFBIZ-10458)] - GetLocaleList call can provide duplicate results
- [[OFBIZ-10486](https://issues.apache.org/jira/browse/OFBIZ-10486)] - Blog title is invisible on blog view page of ecommerce store
- [[OFBIZ-10487](https://issues.apache.org/jira/browse/OFBIZ-10487)] - compressableMimeType is not a valid attribute of apache http connector
- [[OFBIZ-10493](https://issues.apache.org/jira/browse/OFBIZ-10493)] - Display From address in send confirmation email form
- [[OFBIZ-10506](https://issues.apache.org/jira/browse/OFBIZ-10506)] - Initial set of hasLoogedOut flag when logging in
- [[OFBIZ-10523](https://issues.apache.org/jira/browse/OFBIZ-10523)] - You can&#39;t create a New Payment Group
- [[OFBIZ-10524](https://issues.apache.org/jira/browse/OFBIZ-10524)] - Could not find &lt;simple-method name=&quot;createWorkEffortSkillStandard&quot;&gt;
- [[OFBIZ-10545](https://issues.apache.org/jira/browse/OFBIZ-10545)] - SurveyOptions.ftl is in the wrong location
- [[OFBIZ-10549](https://issues.apache.org/jira/browse/OFBIZ-10549)] - Action (find) button not visible in LabelManager search screen

## Improvements

- [[OFBIZ-1032](https://issues.apache.org/jira/browse/OFBIZ-1032)] - EntitySaxReader mostly-insert (store after create-error) Fix
- [[OFBIZ-6206](https://issues.apache.org/jira/browse/OFBIZ-6206)] - The &quot;always&quot; log level in minilang is logged as FATAL
- [[OFBIZ-9337](https://issues.apache.org/jira/browse/OFBIZ-9337)] - Update msyql sql-type for datetime field-type to support Fractional Seconds in Time Values
- [[OFBIZ-10103](https://issues.apache.org/jira/browse/OFBIZ-10103)] - Useful parameter usage extension and small fix of getDependentDropdownValues in miscAjaxFunctions.js
- [[OFBIZ-10172](https://issues.apache.org/jira/browse/OFBIZ-10172)] - GeoAssoc data is missing for Telangana state of India
- [[OFBIZ-10223](https://issues.apache.org/jira/browse/OFBIZ-10223)] - Use Tomcat default ciphers
- [[OFBIZ-10235](https://issues.apache.org/jira/browse/OFBIZ-10235)] - Update org.ofbiz package to org.apache.ofbiz in some missing entity def
- [[OFBIZ-10253](https://issues.apache.org/jira/browse/OFBIZ-10253)] - Pass JVM options to OFBiz when using Gradle
- [[OFBIZ-10364](https://issues.apache.org/jira/browse/OFBIZ-10364)] - Update Currency UOM data as per iso amendment 164, 165 and 166
- [[OFBIZ-10436](https://issues.apache.org/jira/browse/OFBIZ-10436)] - Update xml-rpc libraries to latest release 3.1.3
- [[OFBIZ-10484](https://issues.apache.org/jira/browse/OFBIZ-10484)] - Sanitize the output of XML-RPC replies of error data
- [[OFBIZ-10530](https://issues.apache.org/jira/browse/OFBIZ-10530)] - Add mergeFromPlugins.sh similar as mergeFromPlugins.bat

## Sub-tasks

- [[OFBIZ-9966](https://issues.apache.org/jira/browse/OFBIZ-9966)] - Secure the login.secret\_key\_string
- [[OFBIZ-10004](https://issues.apache.org/jira/browse/OFBIZ-10004)] - Error in Create Billing Account from Party Profile
- [[OFBIZ-10177](https://issues.apache.org/jira/browse/OFBIZ-10177)] - Rainbow theme: bug in avatar.ftl when the last name does not exist
- [[OFBIZ-10222](https://issues.apache.org/jira/browse/OFBIZ-10222)] - Access the online help in Rainbow themes
- [[OFBIZ-10283](https://issues.apache.org/jira/browse/OFBIZ-10283)] - Removing Birt dependencies in ReportScreens.xml
- [[OFBIZ-10420](https://issues.apache.org/jira/browse/OFBIZ-10420)] - Session fixation issue
- [[OFBIZ-10463](https://issues.apache.org/jira/browse/OFBIZ-10463)] - Framework webapp freemarkerTransform.properties has dependency on product component
