---
layout: post
title: Apache OFBiz News - May 2019
date: '2019-06-11T05:59:43+00:00'
permalink: apache-ofbiz-news-may-2019
---
## Apache OFBiz News May 2019

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about OFBiz mention in Top 15 Open Source ERP Solutions, OFBiz Community Days, and OFBiz at ApacheCon along with our usual list of features, improvements and Statistics.

## OFBiz mentioned as Top Open Source ERP on Solution Reviews

The article &quot;Top 15 Free and Open Source ERP Solutions&quot; on Solution Reviews mentioned OFBiz as top open source ERP.&nbsp; The writer of the article Elizabeth Quirk, is a leading enterprise technology writer covering Enterprise Resource Planning (ERP), Business Process Management (BPM) and Talent Management Suites (TMS). The article draws a distinction between free and open source ERP solutions and compares top 15 among them. The link to the article can be found <a href="https://solutionsreview.com/enterprise-resource-planning/top-15-free-and-open-source-erp-solutions/" target="_blank">here</a>.

## OFBiz Community Days

In year 2017, we started celebrating the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days" target="_blank">OFBiz community days</a>. The contribution during these days plays a very significant role in overall progress of project. The community days are organised once per quarter so a total of four (4) events throughout the year. Here dates for this year's community day decided such that.

- Quarter 1 - Community Days - February 2019 - N/A (Since we already skipped the February 2019 month)
- Quarter 2 - Community Days - May 2019 - Friday 24th, Saturday 25th, Sunday 26th, Monday 27th and Tuesday 28th
- Quarter 3 - Community Days - August 2019 - Friday 23rd, Saturday 24th, Sunday 25th, Monday 26th and Tuesday 27th
- Quarter 4 - Community Days - November 2019 - Friday 22nd, Saturday 23rd, Sunday 24th, Monday 25th and Tuesday 26nd

Contributors can select any single day based on there availability and preferences.

We are pleased to inform that this month we have successfully organised the community days of this quarter.&nbsp;

Please refer to this [mail thread](https://markmail.org/thread/kc2pi3oib7tydt2y)&nbsp;for more details.

Indeed it was a very impactful community day, the community worked on around 31 issues, more details can be found [here](https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=318&projectKey=OFBIZ&view=reporting&chart=sprintRetrospective&sprint=523) (requires Jira Login).

To get the more insights, we run a brief survey for the participants of community days. Responses can be found [here](https://cwiki.apache.org/confluence/display/OFBIZ/May+2019+-+Community+Day+Survey).

Our next community day is planned on <span>**23rd to <span>**27th <span>**August 2019**</span>**</span>**<span><span>, for more detail please refer to this [document](https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days+Dates), stay tuned!</span></span></span>

Thanks you Swapnil M Mane for reviving it and to everyone who contributed to this effort.

  <p> </p>

## OFBiz at ApacheCon North America, Las Vegas

We are please to share this update, the organisers of ApacheCon North America have offered to allocate a &quot;full track&quot; to the OFBiz project at the upcoming conference.<br>This year's ApacheCon North America will be held in Las Vegas from 9 to 12 of September.

OFBiz track is scheduled on 12th September 2019, more details on ApacheCon schedules can be found [here](https://www.apachecon.com/acna19/schedule.html).<br>

## OFBiz Statistics

Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:

- **JIRA Issue Tracker:** <span style="color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; --darkreader-inline-color:#2a2f32;">86</span>&nbsp;issues were opened and 61 issues were closed (11 different people helped to close these issues)
- **Code Change and Commit Activity:**
  - **Framework:** 188 commits to the code base that changed 6,160 lines of code (8 committers were active)
  - **Plugins:** 21 commits to the code base that changed 1,026 lines of code (3 committers were active)
- **Mailing Lists:**
  - **Dev:** 167 emails sent and 36 topics discussed (25 different people)
  - **User:** 72 emails sent and 24 topics discussed (26 different people)

  <p> </p>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Refactors 'DataServices' and 'ContainerLoader' which used 'java.util's backported classes. ([OFBIZ-11003](https://issues.apache.org/jira/browse/OFBIZ-11003))
- Removes unneeded generics in 'MapContextTest'. ([OFBIZ-10933](https://issues.apache.org/jira/browse/OFBIZ-10933))
- Removes unused local variables in 'OrderServices'. ([OFBIZ-10518](https://issues.apache.org/jira/browse/OFBIZ-10518))
- Improves condition in which reversation block was not being executed in case of auto-reserve not found in attribute. ([OFBIZ-10518](https://issues.apache.org/jira/browse/OFBIZ-10518))
- Substitutes permission-service with required-permissions in services 'createArticleContent', 'createBlogEntry' and 'updateBlogEntry'. ([r1858539](https://svn.apache.org/viewvc?view=revision&revision=1858539))
- Rewrites 'CustomPermissivePolicy#matchesEither's static method. ([OFBIZ-10187](https://issues.apache.org/jira/browse/OFBIZ-10187))
- Removes useless 'UtilMisc#makeSetWritable' method. ([OFBIZ-11015](https://issues.apache.org/jira/browse/OFBIZ-11015))
- Removes useless null check in 'UtilCodec#checkStringForHtmlStrictNone'. ([OFBIZ-10054](https://issues.apache.org/jira/browse/OFBIZ-10054))
- Adds an Auditor party with associated 'AUDITOR' SecurityGroup permissions in all DEMO instances. ([OFBIZ-10899](https://issues.apache.org/jira/browse/OFBIZ-10899))
- Adds generic type entity fields to ContactMechPurposeType entities. ([OFBIZ-11008](https://issues.apache.org/jira/browse/OFBIZ-11008))
- Cleans up 'StringUtil'. ([OFBIZ-11014](https://issues.apache.org/jira/browse/OFBIZ-11014))
- Refactors 'ServiceDispatcher' by setting 'private' instead of 'protected'. ([OFBIZ-11032](https://issues.apache.org/jira/browse/OFBIZ-11032))
- Migrates integration tests to unit tests when possible. ([OFBIZ-11067](https://issues.apache.org/jira/browse/OFBIZ-11067))
- Adds Unit test case for service - quickReturnOrder. ([OFBIZ-8809](https://issues.apache.org/jira/browse/OFBIZ-8809))
- Adds Unit test case for service - CreateReturnAndItemOrAdjustment. ([OFBIZ-8858](https://issues.apache.org/jira/browse/OFBIZ-8858))
- Adds Unit test case for service - CheckReturnComplete. ([OFBIZ-8853](https://issues.apache.org/jira/browse/OFBIZ-8853))
- Adds Unit test case for service - CheckPaymentAmountForRefund. ([OFBIZ-8852](https://issues.apache.org/jira/browse/OFBIZ-8852))
- Adds Unit test case for service - CheckCreateProductRequirementForFacility. ([OFBIZ-8937](https://issues.apache.org/jira/browse/OFBIZ-8937))
- Adds Unit test case for service - CreateReturnItemShipment. ([OFBIZ-8859](https://issues.apache.org/jira/browse/OFBIZ-8859))
- Uses more declarative style for the context map, that prefers map literals over imperative map. ([OFBIZ-8853](https://issues.apache.org/jira/browse/OFBIZ-8853))
- Uses Groovy Truth instead of UtilValidate Class in Groovy. ([OFBIZ-11064](https://issues.apache.org/jira/browse/OFBIZ-11064))

### Plugins

- Refactors 'CustSettings.groovy', 'EditPerson.ftl' and 'ViewProfile.ftl' to provide needed compatibility to new marital status. ([OFBIZ-10921](https://issues.apache.org/jira/browse/OFBIZ-10921))
- Removes redundant type declarations. ([OFBIZ-10937](https://issues.apache.org/jira/browse/OFBIZ-10937))
- Removes useless null check in UtilCodec#checkStringForHtmlStrictNone. ([OFBIZ-10054](https://issues.apache.org/jira/browse/OFBIZ-10054))
- Uses the ‘@Override’ annotation in many classes. ([OFBIZ-10939](https://issues.apache.org/jira/browse/OFBIZ-10939))
- Uses Groovy Truth instead of UtilValidate Class in Groovy. ([OFBIZ-11064](https://issues.apache.org/jira/browse/OFBIZ-11064))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Adds missing uiLabel for 'Create New' on CMS Content Find Screen. ([OFBIZ-11005](https://issues.apache.org/jira/browse/OFBIZ-11005))
- Adds missing 'synchronized' modifier in 'ExtendedProperties#loadFromXML'. ([OFBIZ-11004](https://issues.apache.org/jira/browse/OFBIZ-11004))
- Ensures that the story field in ordermgr's EditCustRequest form is html encoded. ([OFBIZ-11006](https://issues.apache.org/jira/browse/OFBIZ-11006))
- Ensures that product content management screen validates trusted users' input. ([OFBIZ-10054](https://issues.apache.org/jira/browse/OFBIZ-10054))
- Fixes: OWASP sanitizer breaks proper rendering of HTML code. ([OFBIZ-10187](https://issues.apache.org/jira/browse/OFBIZ-10187))
- Fixes: Update invoice item looses invoice context. ([OFBIZ-11009](https://issues.apache.org/jira/browse/OFBIZ-11009))
- Replaces response type 'request-redirect-noparam' with 'request-redirect' in many request-maps. ([OFBIZ-9997](https://issues.apache.org/jira/browse/OFBIZ-9997))
- Fixes: Test integration were failing if plugins directory is empty due to dependent data on projectmgr component. ([r1859111](https://svn.apache.org/viewvc?view=revision&revision=1859111))
- Fixes: javadoc build for OpenJDK 11. ([OFBIZ-10757](https://issues.apache.org/jira/browse/OFBIZ-10757))
- Fixes: Issue in method ProductWorker#getVariantSelectionFeatures. ([OFBIZ-11029](https://issues.apache.org/jira/browse/OFBIZ-11029))
- Fixes: Incorrect findByCount on DynamicView with groupBy and selected fields. ([OFBIZ-11041](https://issues.apache.org/jira/browse/OFBIZ-11041))
- Fixes: Redirection of pathAlias to aliasTo does not work properly. ([OFBIZ-11018](https://issues.apache.org/jira/browse/OFBIZ-11018))
- Adds 'PayHistory's missing field 'emplFromDate'. ([OFBIZ-11028](https://issues.apache.org/jira/browse/OFBIZ-11028))
- Ensures that it is possible to create more than one ProductManufacturingRule. ([OFBIZ-11047](https://issues.apache.org/jira/browse/OFBIZ-11047))
- Ensures that available ProductManufacturingRules will be presented. ([OFBIZ-11048](https://issues.apache.org/jira/browse/OFBIZ-11048))
- Ensures that 'massPrintOrders' service works. ([OFBIZ-11049](https://issues.apache.org/jira/browse/OFBIZ-11049))
- Adds missing ampersands in 'FindOrders.ftl's mass actions. ([OFBIZ-11052](https://issues.apache.org/jira/browse/OFBIZ-11052))
- Fixes: Services allow arbitrary HTML for parameters with allow-html set to &quot;safe&quot;. ([OFBIZ-5254](https://issues.apache.org/jira/browse/OFBIZ-5254))
- Ensures that delegator.removeBy\* operations triggers EECAs. ([OFBIZ-11040](https://issues.apache.org/jira/browse/OFBIZ-11040))
- Fixes: Drop-ship process behaves incorrectly when a combination of drop-ship and non-drop-ship products are added to cart. ([OFBIZ-11021](https://issues.apache.org/jira/browse/OFBIZ-11021))
- Fixes: Issue in order history promotion. ([OFBIZ-10847](https://issues.apache.org/jira/browse/OFBIZ-10847))
- Enables entity timestamp fields in search result screens. ([OFBIZ-10959](https://issues.apache.org/jira/browse/OFBIZ-10959))
- Fixes: Unable to delete a survey in project component. ([OFBIZ-7594](https://issues.apache.org/jira/browse/OFBIZ-7594))
- Fixes: Duplicate entries in paramWithSuffix. ([OFBIZ-11056](https://issues.apache.org/jira/browse/OFBIZ-11056))
- Fixes: Runtime error exceptions at Leads page. ([OFBIZ-11059](https://issues.apache.org/jira/browse/OFBIZ-11059))
- Fixes CSS Styling for Party Content progress bar in multiple themes. ([OFBIZ-10797](https://issues.apache.org/jira/browse/OFBIZ-10797))
- Fixes: Edit WebSite Path Alias is not working. ([OFBIZ-11022](https://issues.apache.org/jira/browse/OFBIZ-11022))
- Corrects inventory transfer screens navigation of 'To Facility ID'. ([OFBIZ-10992](https://issues.apache.org/jira/browse/OFBIZ-10992))
- Adds classpath exclusion of '/framework/base/config' and '/framework/base/dtd' for Gradle task 'eclipse'. ([OFBIZ-11071](https://issues.apache.org/jira/browse/OFBIZ-11071))
- Fixes: Decrypt a field on embedded entity-view failed. ([OFBIZ-11078](https://issues.apache.org/jira/browse/OFBIZ-11078))

### Plugins

- Adds missing uiLabel for 'Create New' on CMS Content Find Screen. ([OFBIZ-11005](https://issues.apache.org/jira/browse/OFBIZ-11005))
- Fixes: Touch F8 in webpos does not work and generate an error. ([OFBIZ-11010](https://issues.apache.org/jira/browse/OFBIZ-11010))
- Ensures that 'massPrintOrders' service works. ([OFBIZ-11049](https://issues.apache.org/jira/browse/OFBIZ-11049))
- Fixes: Services allow arbitrary HTML for parameters with allow-html set to &quot;safe&quot;. ([OFBIZ-5254](https://issues.apache.org/jira/browse/OFBIZ-5254))
- Fixes: Unable to find any product in Quick Add functionality. ([OFBIZ-10978](https://issues.apache.org/jira/browse/OFBIZ-10978))
- Fixes: Product image not scaling properly on ecommerce at different screen resolution. ([OFBIZ-10880](https://issues.apache.org/jira/browse/OFBIZ-10880))
