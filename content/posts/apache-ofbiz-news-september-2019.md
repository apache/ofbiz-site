---
layout: post
title: Apache OFBiz News - September 2019
date: '2020-08-11T15:26:09+00:00'
permalink: apache-ofbiz-news-september-2019
---
## Apache OFBiz News&nbsp;September&nbsp;2019

Welcome to our regular monthly round-up of OFBiz news. This month we have news about new PMC Member joining along with our usual list of features, improvements, and Statistics.

## New PMC Member

The OFBiz PMC has invited Pranay Pandey to become a new member of the committee and we are glad to announce that he has accepted the nomination. Please join us in welcoming and congratulating Pranay in his new role on the project, and also thanking him for all his contributions.

## Best of both Groovy worlds: compile and on the fly

The community discussed how OFBiz users can have benefits of using Groovy with compilation as well as on the fly. Mathieu proposed to move Groovy scripts to/src/main/groovy/ and after adding the necessary package names, a developer can have continuously built on any changes in Gradle source sets with "gradlew --continuous" command. Besides compilation, it will enhance the integration in your IDE, and add the possibility to re-use methods from<br>these script migrated to explicit classes.<br>Thank you Jacques for initiating the thread, Mathieu for the initial proposal on OFBIZ-10226 and to everyone who contributed to this productive discussion.

Refer following links for more information:

Tickets: <a href="https://issues.apache.org/jira/browse/OFBIZ-10226" target="_blank">OFBIZ-10226</a>, <a href="https://issues.apache.org/jira/browse/OFBIZ-11205" target="_blank">OFBIZ-11205</a><br>

Thread: <a href="https://markmail.org/message/2grqu63yvfpvxzz6" target="_blank">Link</a><br>

## <span style="letter-spacing: -0.018em;">OFBiz Statistics</span>

Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:

- **JIRA Issue Tracker:**&nbsp;48 issues were opened and 63 issues were closed ( 9 different people helped to close these issues)
- **Code Change and Commit Activity:**
  - **Framework:** 107 commits to the code base that changed 8200 lines of code ( 7 committers were active)
  - **Plugins:** 9 commits to the code base that changed 280 lines of code ( 3 committers were active)
- **Mailing Lists:**
  - **Dev:** 117 emails sent and 28 topics discussed (38 different people)
  - **User:** 116 emails sent and 27 topics discussed (27 different people)&nbsp;

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Improves log warning after "/images/" is found in path of request while request map is empty ([OFBIZ-11152](https://issues.apache.org/jira/browse/OFBIZ-11152))
- Converts Shipment Crud simple service to entity-auto. ([OFBIZ-6996](https://issues.apache.org/jira/browse/OFBIZ-6996))
- Provides abillity to set flexible strings as Service parameter default-value attributes ([OFBIZ-11180](https://issues.apache.org/jira/browse/OFBIZ-11180))
- Changes current view-link requirement to allow use of entity-condition only in view-entities ([OFBIZ-11179](https://issues.apache.org/jira/browse/OFBIZ-11179))
- Adds a mechanism to prevent the usage of EntitySyncRemove ([OFBIZ-10008](https://issues.apache.org/jira/browse/OFBIZ-10008))
- Provides correct information history for Company Header in pdf document ([OFBIZ-11177](https://issues.apache.org/jira/browse/OFBIZ-11177))
- Improves structure of entity PicklistStatusHistory ([OFBIZ-11182](https://issues.apache.org/jira/browse/OFBIZ-11182))
- Manages itemStatusId and oldItemStatusId on entity-auto engine ([OFBIZ-11183](https://issues.apache.org/jira/browse/OFBIZ-11183))
- Converts Picklist related CRUD services from simple to entity-auto ([OFBIZ-10636](https://issues.apache.org/jira/browse/OFBIZ-10636))
- Refactors permission model call ([OFBIZ-7113](https://issues.apache.org/jira/browse/OFBIZ-7113))
- Removes duplicated label ([r1866733](https://svn.apache.org/viewvc?view=revision&revision=1866733))
- Removes redundant type declarations ([r1866786](https://svn.apache.org/viewvc?view=revision&revision=1866786))
- Improves ObjectInputStream class ([OFBIZ-10837](https://issues.apache.org/jira/browse/OFBIZ-10837))
- Improves log warning after "d.png" is found in path of request while request map is empty ([OFBIZ-11199](https://issues.apache.org/jira/browse/OFBIZ-11199))
- Improves performance of request "FindArInvoices" ([OFBIZ-11198](https://issues.apache.org/jira/browse/OFBIZ-11198))
- Provides better use of "createFileWithNormalizedPath" in FrameImage and FileUtil ([r1866924](https://svn.apache.org/viewvc?view=revision&revision=1866924))
- Removes redundant path normalization in FileUtil#getFile ([r1866927](https://svn.apache.org/viewvc?view=revision&revision=1866927))
- Refactors boolean returns from methods ([OFBIZ-10725](https://issues.apache.org/jira/browse/OFBIZ-10725))
- Provides inclusion of properties and labels in build.gradle ([OFBIZ-11161](https://issues.apache.org/jira/browse/OFBIZ-11161))
- Formats common.gradle by replacing tabs with spaces ([r1866972](https://svn.apache.org/viewvc?view=revision&revision=1866972))
- Allows updating the ‘Config’ object of the server instance ([OFBIZ-11203](https://issues.apache.org/jira/browse/OFBIZ-11203))
- Moves Groovy scripts from "/groovyScripts/" to "/src/main/groovy/" ([OFBIZ-11205](https://issues.apache.org/jira/browse/OFBIZ-11205))
- Refactors ComponentLoaderConfig class ([OFBIZ-11192](https://issues.apache.org/jira/browse/OFBIZ-11192))
- Converts Config#ofbizHome and Config#logDir to a path ([OFBIZ-11192](https://issues.apache.org/jira/browse/OFBIZ-11192))
- Uses java.nio.file API in "ComponentContainer" class ([OFBIZ-11192](https://issues.apache.org/jira/browse/OFBIZ-11192))
- Refactors "ComponentContainer#loadComponentFromConfig" ([OFBIZ-11192](https://issues.apache.org/jira/browse/OFBIZ-11192))
- Adds a discussion feature in order detail view for following communication about the order (mail, phone etc.) ([OFBIZ-11210](https://issues.apache.org/jira/browse/OFBIZ-11210))
- Provides non static method OrderReadHelper.getOrderItemAttributes ([OFBIZ-11208](https://issues.apache.org/jira/browse/OFBIZ-11208))
- Adds transaction timeout default properties for screen widgets ([OFBIZ-11190](https://issues.apache.org/jira/browse/OFBIZ-11190))
- Refactors UelFunctions.java to remove error management via exception ([OFBIZ-11213](https://issues.apache.org/jira/browse/OFBIZ-11213))
- Provides serbian CommonEntityLabels for geo entity. ([OFBIZ-11209](https://issues.apache.org/jira/browse/OFBIZ-11209))
- Provides missing foreign key relation for dataSourceId in SalesOpportunity entity ([OFBIZ-11218](https://issues.apache.org/jira/browse/OFBIZ-11218))
- Adds unit test cases in AutoAcctgInvoiceTests.groovy and OrderTests.groovy ([OFBIZ-8936](https://issues.apache.org/jira/browse/OFBIZ-8936))
- Provides refactored create menu tab bar for employee ([OFBIZ-8189](https://issues.apache.org/jira/browse/OFBIZ-8189))
- Provides refactored create menu tab bar for Segment ([OFBIZ-8200](https://issues.apache.org/jira/browse/OFBIZ-8200))
- Provides refactored create menu tab bar for Facility ([OFBIZ-8181](https://issues.apache.org/jira/browse/OFBIZ-8181))
- Corrects location of "New Requirement" button on requirements view ([OFBIZ-7333](https://issues.apache.org/jira/browse/OFBIZ-7333))
- Provides refactored create menu tab bar for Employee Position ([OFBIZ-8190](https://issues.apache.org/jira/browse/OFBIZ-8190))
- Provides refactored create menu tab bar for CompDoc ([OFBIZ-8188](https://issues.apache.org/jira/browse/OFBIZ-8188))
- Provides refactored create menu tab bar for RoutingTask ([OFBIZ-8192](https://issues.apache.org/jira/browse/OFBIZ-8192))
- Provides refactored create menu tab bar for Calendar ([OFBIZ-8193](https://issues.apache.org/jira/browse/OFBIZ-8193))
- Provides refactored create menu tab bar for BOM ([OFBIZ-8194](https://issues.apache.org/jira/browse/OFBIZ-8194))
- Provides refactored create menu tab bar for Leave ([OFBIZ-8195](https://issues.apache.org/jira/browse/OFBIZ-8195))
- Provides refactored create menu tab bar for Data Source ([OFBIZ-8196](https://issues.apache.org/jira/browse/OFBIZ-8196))
- Provides refactored create menu tab bar for Marketing Campaign ([OFBIZ-8197](https://issues.apache.org/jira/browse/OFBIZ-8197))
- Provides refactored create menu tab bar for TrackingCode ([OFBIZ-8199](https://issues.apache.org/jira/browse/OFBIZ-8199))
- Converts CommunicationEventServices#createCommunicationEvent from mini lang to groovy ([OFBIZ-9992](https://issues.apache.org/jira/browse/OFBIZ-9992))
- Adds timezone support to recurring job temporal expressions ([OFBIZ-11035](https://issues.apache.org/jira/browse/OFBIZ-11035))
- Orders service attributes in service "updateQuantityBreak" ([r1866288](https://svn.apache.org/viewvc?view=revision&revision=1866288))
- Provides unit test case for service "createSimpleTextContentForInvoice" ([OFBIZ-8936](https://issues.apache.org/jira/browse/OFBIZ-8936))

### Plugins

- Provides add-compare-screen with latest bootstrap framework ([OFBIZ-10968](https://issues.apache.org/jira/browse/OFBIZ-10968))
- Provides small change in tsvn log template ([r1867711](https://svn.apache.org/viewvc?view=revision&revision=1867711))
- Improves UI of ecommerce product page ([OFBIZ-10884](https://issues.apache.org/jira/browse/OFBIZ-10884))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: NotSerializableException after uploading images to an order ([OFBIZ-11123](https://issues.apache.org/jira/browse/OFBIZ-11123))
- Fixes: Any ecommerce user has the ability to reset anothers password (including admin) via "Forget Your Password" ([OFBIZ-4361](https://issues.apache.org/jira/browse/OFBIZ-4361))
- Fixes: Path Traversal in webtools/control/FetchLogs and ViewFile ([OFBIZ-11196](https://issues.apache.org/jira/browse/OFBIZ-11196))
- Fixes default or empty catch block in Java and Groovy files ([OFBIZ-8341](https://issues.apache.org/jira/browse/OFBIZ-8341))
- Fixes: Error in log when looking for parties at partymgr/control/main ([OFBIZ-11201](https://issues.apache.org/jira/browse/OFBIZ-11201))
- Fixes: Send upload form with even-update-area doesn't work ([OFBIZ-11207](https://issues.apache.org/jira/browse/OFBIZ-11207))
- Fixes multi modal opening ([OFBIZ-11211](https://issues.apache.org/jira/browse/OFBIZ-11211))
- Fixes: Default option for ModelFormField.DateFindField doesn't work ([OFBIZ-11212](https://issues.apache.org/jira/browse/OFBIZ-11212))
- Revertes: JSON entity data import and export utility ([OFBIZ-10966](https://issues.apache.org/jira/browse/OFBIZ-10966)) <br>Implementation was not matching OFBiz code quality requirements. <br>
- Fixes parenthesis syntax error in groovy ([OFBIZ-11186](https://issues.apache.org/jira/browse/OFBIZ-11186))

### Plugins

- Fixes: Any ecommerce user has the ability to reset anothers password (including admin) via "Forget Your Password" ([OFBIZ-4361](https://issues.apache.org/jira/browse/OFBIZ-4361))
- Fixes: Freemarker error on reviewProduct page ([OFBIZ-11108](https://issues.apache.org/jira/browse/OFBIZ-11108))

## Documentation

### Framework

- Provides document how to store the JWT secret key ([OFBIZ-10751](https://issues.apache.org/jira/browse/OFBIZ-10751))
