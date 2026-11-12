---
layout: post
title: 'Apache OFBiz News - March 2018 '
date: '2018-04-16T07:26:12+00:00'
permalink: apache-ofbiz-news-march-2018
---
## Apache OFBiz News March 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about our documentation effort, we start allocating documentation mentors to people who would like them, we move our documentation discussions onto the dev mailing list, the community helps respond to questions about the OFBiz Manufacturing and MRP module, and our PMC grows larger.

<!--more-->

## Move of Documentation Topics to Dev Mailing List

If you are interested in keeping up to date with our documentation effort and have been wondering why there haven't been many conversations happening on our user list, then it's because we have now moved all documentation topics onto our development mailing list. The main reason for doing this is that the documentation work is actually a part of developing and improving OFBiz. Writing documentation helps improve OFBiz and all the documentation that our documentation team writes, will be added and be published as part of our future releases.

Our dev list sometimes contain some technical discussions so to help people easily find and track documentation team related messages we are prefixing the subject lines with [DOC]. During March we raised several different discussion threads related to documentation. You can find a summary of them all at the link below:

<a href="https://s.apache.org/vPSE" target="_blank" rel="noopener">Documentation Discussions - March 2018</a>

Please subscribe to our dev mailing list if you want to follow the documentation effort.

## Documentation Mentors

We are still moving forward with our documentation effort. This month we have started assigning mentors to people who have requested them. We currently have several OFBiz community members willing to help mentor new people wanting to help us getting started with the documentation effort. If you want to help but are not sure where to start then please post a message on our dev mailing list or contact any of our documentation mentors .

Thanks very much to our documentation mentors Michael Brohl, Swapnil M Mane, Sharan Foga, and also Taher Alkhateeb for helping provide technical advice for the documentation framework. We are always looking for people to help out, so if you would like to be a mentor then please let us know.

## OFBiz Manufacturing

During March our user mailing list received quite a few questions about the OFBiz MRP and Manufacturing module. Our users were keen to understand the different ways in which the module can be used. Many of the OFBiz modules are generic so can be a good starting point for implementing your own processes.

Some of the questions asked this month were as follows:

- <a href="https://s.apache.org/mESH" target="_blank" rel="noopener">How to setup sub contracting work out to your suppliers</a>
- <a href="https://s.apache.org/UMiY" target="_blank" rel="noopener">Running MRP for Plants and Warehouses</a>
- <a href="https://s.apache.org/4KXX" target="_blank" rel="noopener">How to find out the Inventory Item that will be used for Picking Goods</a>
- <a href="https://s.apache.org/wjDJ" target="_blank" rel="noopener">An MRP bug report identifying a DATETIME database issue</a>

It's great to see people wanting to know more about the functionality of the various modules and how they can be applied to real business situations. Thank you to all our community members who responded and helped these users understand OFBiz a little more.

Remember that if you need any help or have any questions about any of the OFBiz modules then please feel free to post a message on our user mailing list.

## New PMC Member

This month the OFBiz Project Management Committee (PMC) invited Paul Foxworthy to become a PMC member and we are pleased to announce that he has accepted. Congratulations and welcome Paul!

If you would like to find out more about our who our PMC and Committers are, then please use the following link:

<a href="https://s.apache.org/9eYw" target="_blank" rel="noopener">OFBiz PMC and Committers List</a>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Pass JVM options to OFBiz when using Gradle ([OFBIZ-10253](https://issues.apache.org/jira/browse/OFBIZ-10253))
- Change log level from INFO to VERBOSE for detail logging in UtilCache.findSizeInByte ([OFBIZ-10200](https://issues.apache.org/jira/browse/OFBIZ-10200))
- Improve GeneralLedgerServices to set transaction date as payment's effective date([OFBIZ-10239](https://issues.apache.org/jira/browse/OFBIZ-10239))
- Extend updatePassword service API with optional parameter requirePasswordChange ([OFBIZ-10201](https://issues.apache.org/jira/browse/OFBIZ-10201))
- Extend UtilFormatOut with new method formatPercentageRate ([OFBIZ-10199](https://issues.apache.org/jira/browse/OFBIZ-10199))
- Token Based Authentication ([OFBIZ-9833](https://issues.apache.org/jira/browse/OFBIZ-9833))
- Standardise Layout throughout Applications ([OFBIZ-10242](https://issues.apache.org/jira/browse/OFBIZ-10242)) This contains the improvements for web tools, content manager and common
- Display improvement in catalog ([OFBIZ-10299](https://issues.apache.org/jira/browse/OFBIZ-10299))
- Open the SQL screen straight to OFBiz ([OFBIZ-10323)](https://issues.apache.org/jira/browse/OFBIZ-10323)

## Bugfixes

Functional and technical bugfixes:

### Framework

- UtilCodec URL decoding breaks values with german umlauts ([OFBIZ-10275](https://issues.apache.org/jira/browse/OFBIZ-10275))
- Wrong locale/fallbackLocale logic in CategoryContentWrapper ([OFBIZ-10274](https://issues.apache.org/jira/browse/OFBIZ-10274))
- EmailServices.sendMailFromScreen attachment rendering broken ([OFBIZ-10246](https://issues.apache.org/jira/browse/OFBIZ-10246))
- Theme screens do not load properly ([OFBIZ-10276](https://issues.apache.org/jira/browse/OFBIZ-10276))
- The getJSONuiLabel javascript function is no longer working ([OFBIZ-10277](https://issues.apache.org/jira/browse/OFBIZ-10277))
- Removing Birt dependencies in ReportScreens.xml ([OFBIZ-10283](https://issues.apache.org/jira/browse/OFBIZ-10283))
- Logout do not remove autoLogin ([OFBIZ-4959](https://issues.apache.org/jira/browse/OFBIZ-4959))
- The server hour normally shown in the jobs list is no longer showing ([OFBIZ-10278](https://issues.apache.org/jira/browse/OFBIZ-10278))
- HttpClient failed to return the error result ([OFBIZ-10281](https://issues.apache.org/jira/browse/OFBIZ-10281))
- Bug in running asciidoctor on windows clients ([OFBIZ-9873](https://issues.apache.org/jira/browse/OFBIZ-9873))
- loadCartFromOrder changes order date even when updating order items ([OFBIZ-10301](https://issues.apache.org/jira/browse/OFBIZ-10301))
- Correct field name partyId on the service createPartyPrefDocTypeTpl ([OFBIZ-10186](https://issues.apache.org/jira/browse/OFBIZ-10186))

### Plugins

- Fixed a typo in Creating reports.md

## Documentation

- PoC for a documentation system for OFBiz based on Asciidoc ([OFBIZ-9837](https://issues.apache.org/jira/browse/OFBIZ-9837))
- Create Empty Document templates for Human Resources Documentation ([OFBIZ-10254](https://issues.apache.org/jira/browse/OFBIZ-10254))
- Add the introduction section of the OFBiz user manual ([OFBIZ-10285](https://issues.apache.org/jira/browse/OFBIZ-10285))
- Convert README.md to README.adoc ([OFBIZ-10272](https://issues.apache.org/jira/browse/OFBIZ-10272))
- Add Human Resources application description ([OFBIZ-10255](https://issues.apache.org/jira/browse/OFBIZ-10255))
- Add documentation content for accounitng introduction ([OFBIZ-10289](https://issues.apache.org/jira/browse/OFBIZ-10289))
- Add agreements documentation content and linked it to accounting ([OFBIZ-10290](https://issues.apache.org/jira/browse/OFBIZ-10290))
- Add glossary for human resources ([OFBIZ-10258](https://issues.apache.org/jira/browse/OFBIZ-10258))
- Add initial skeleton and some content to developer manual ([OFBIZ-10285](https://issues.apache.org/jira/browse/OFBIZ-10285))
- Add additional configuration to the user manual (remove chapter label, activate experimental features), included the quick start section of README.adoc to the user manual and add headlines/structure for the development environment
- Move some shared attributes in asciidoc sources to gradle ([OFBIZ-10285](https://issues.apache.org/jira/browse/OFBIZ-10285))
