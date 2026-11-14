---
layout: page
description: downloads
title: Release Notes 16.11.02
---
Apache OFBiz&reg; 16.11.02, released in 2017-05-22, is the second release of the 16.11 series, that has been stabilized since November 2016.

## Bug

- [[OFBIZ-6386](https://issues.apache.org/jira/browse/OFBIZ-6386)] - compareBigDecimals in org.ofbiz.minilang.method.conditional.Compare does not compare certain values correctly
- [[OFBIZ-7066](https://issues.apache.org/jira/browse/OFBIZ-7066)] - temporal expression screen missing date dialogbox
- [[OFBIZ-7265](https://issues.apache.org/jira/browse/OFBIZ-7265)] - Could not obtain Lock on lucene index Lock
- [[OFBIZ-7375](https://issues.apache.org/jira/browse/OFBIZ-7375)] - Routing should not be allow to update with empty routing name
- [[OFBIZ-8266](https://issues.apache.org/jira/browse/OFBIZ-8266)] - From Date and Thru Date doesn&#39;t reflect on List Quote Roles screen.
- [[OFBIZ-8318](https://issues.apache.org/jira/browse/OFBIZ-8318)] - Error on scrum main page
- [[OFBIZ-9125](https://issues.apache.org/jira/browse/OFBIZ-9125)] - Errormessage is displayed twice in LoginEvents.java
- [[OFBIZ-9126](https://issues.apache.org/jira/browse/OFBIZ-9126)] - SimpleMethod: Problem with Variables in key-fields
- [[OFBIZ-9133](https://issues.apache.org/jira/browse/OFBIZ-9133)] - catalog/control/FindReviews does not render proper column data
- [[OFBIZ-9152](https://issues.apache.org/jira/browse/OFBIZ-9152)] - SimpleMethod: FindByAnd never using EntityListIterator
- [[OFBIZ-9155](https://issues.apache.org/jira/browse/OFBIZ-9155)] - JobPoller does not run and hence scheduled/async jobs are never run
- [[OFBIZ-9157](https://issues.apache.org/jira/browse/OFBIZ-9157)] - &quot;View Order&quot; throws exception in getReturnableQuantity
- [[OFBIZ-9178](https://issues.apache.org/jira/browse/OFBIZ-9178)] - deprecation messages in console output
- [[OFBIZ-9184](https://issues.apache.org/jira/browse/OFBIZ-9184)] - In entitymodel.xsd entity-alias for condition-expr must be required
- [[OFBIZ-9191](https://issues.apache.org/jira/browse/OFBIZ-9191)] - Navigate Accounts tree does not work
- [[OFBIZ-9195](https://issues.apache.org/jira/browse/OFBIZ-9195)] - Error in glAccountId retrieval for fixed asset depreciations
- [[OFBIZ-9196](https://issues.apache.org/jira/browse/OFBIZ-9196)] - Regression: a commit between R15 and the Gradle switch uses/blocks the ports
- [[OFBIZ-9201](https://issues.apache.org/jira/browse/OFBIZ-9201)] - Birt logging unlogical high
- [[OFBIZ-9204](https://issues.apache.org/jira/browse/OFBIZ-9204)] - Cancelled OrderItems are still included in orderGrandTotal
- [[OFBIZ-9208](https://issues.apache.org/jira/browse/OFBIZ-9208)] - reinstate url cache in UtilURL.fromResource
- [[OFBIZ-9216](https://issues.apache.org/jira/browse/OFBIZ-9216)] - report GL Account Trial Balance
- [[OFBIZ-9220](https://issues.apache.org/jira/browse/OFBIZ-9220)] - Employment Applications in Party manager does not list any record even if they exist.
- [[OFBIZ-9224](https://issues.apache.org/jira/browse/OFBIZ-9224)] - 16.11 ofbizUrl include host+port and break some reverse-proxy / docker setups
- [[OFBIZ-9225](https://issues.apache.org/jira/browse/OFBIZ-9225)] - Editing quantity of configurable products changes actual product
- [[OFBIZ-9228](https://issues.apache.org/jira/browse/OFBIZ-9228)] - Create an Accounting Transaction page not found
- [[OFBIZ-9230](https://issues.apache.org/jira/browse/OFBIZ-9230)] - Missing reference to the delegator in framework/widget/templates/HtmlFormMacroLibrary.ftl
- [[OFBIZ-9234](https://issues.apache.org/jira/browse/OFBIZ-9234)] - The ecommerce breadcrumb fails when you come from the catalog product link
- [[OFBIZ-9252](https://issues.apache.org/jira/browse/OFBIZ-9252)] - While re-ordering an order, order terms doesn&#39;t set
- [[OFBIZ-9261](https://issues.apache.org/jira/browse/OFBIZ-9261)] - Handle only labels with the &quot;\_&quot; separator between languages and countries
- [[OFBIZ-9265](https://issues.apache.org/jira/browse/OFBIZ-9265)] - Error in accounting report inventory valuation with through date with an empty value.
- [[OFBIZ-9280](https://issues.apache.org/jira/browse/OFBIZ-9280)] - Sort Links in Lookup for Data Resource Id causes unwanted behaviour on Find Content page
- [[OFBIZ-9309](https://issues.apache.org/jira/browse/OFBIZ-9309)] - Ecommerce component showing error screen on searchContent from showcontenttree page
- [[OFBIZ-9311](https://issues.apache.org/jira/browse/OFBIZ-9311)] - The help button or link does not show for the Birt, BI and example components
- [[OFBIZ-9314](https://issues.apache.org/jira/browse/OFBIZ-9314)] - WorkEffort shows error on party assignment
- [[OFBIZ-9315](https://issues.apache.org/jira/browse/OFBIZ-9315)] - WorkEffort Keywords does not list after adding.
- [[OFBIZ-9324](https://issues.apache.org/jira/browse/OFBIZ-9324)] - Accounting\_quantity\_diff &lt;-- Item variance
- [[OFBIZ-9345](https://issues.apache.org/jira/browse/OFBIZ-9345)] - Error viewing tomahawk-themed page when externalLoginKey is not enabled

## Improvement

- [[OFBIZ-9144](https://issues.apache.org/jira/browse/OFBIZ-9144)] - refactor javadocs in OFBiz to be standards compliant
- [[OFBIZ-9175](https://issues.apache.org/jira/browse/OFBIZ-9175)] - Build OFBIZ as EAR with Gradle EAR Plugin
- [[OFBIZ-9289](https://issues.apache.org/jira/browse/OFBIZ-9289)] - SOAPEventHandler only outputs error to log when secureSoapAnswer = false
- [[OFBIZ-9318](https://issues.apache.org/jira/browse/OFBIZ-9318)] - Create New Quote button is duplicated on View Quote page

## Task

- [[OFBIZ-9323](https://issues.apache.org/jira/browse/OFBIZ-9323)] - Remove the birt.tld file and all related files and lines
- [[OFBIZ-9326](https://issues.apache.org/jira/browse/OFBIZ-9326)] - Running and Debugging OFBiz in Intellij IDEA

## Sub-task

- [[OFBIZ-9198](https://issues.apache.org/jira/browse/OFBIZ-9198)] - Missing file results in error
- [[OFBIZ-9310](https://issues.apache.org/jira/browse/OFBIZ-9310)] - On setting verbose true, UtilHttp.getParameterMap() method prints username and password in logs
- [[OFBIZ-9313](https://issues.apache.org/jira/browse/OFBIZ-9313)] - Update Tomcat to 8.0.42 because of CVE-2017-5648
- [[OFBIZ-9331](https://issues.apache.org/jira/browse/OFBIZ-9331)] - Convert QuoteRole entity related service from simple to entity auto.
