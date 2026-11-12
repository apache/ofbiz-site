---
layout: post
title: " Apache OFBiz News - June 2018 "
date: '2018-07-17T08:36:49+00:00'
permalink: apache-ofbiz-news-june-2018
---
## Apache OFBiz News June 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about how our community is sharing knowledge and helping to support new users, we welcome three new committers and we share some OFBiz technical statistics.

<!--more-->

## Sharing Community Knowledge

During May and June we have continued to receive questions and requests for help to get OFBiz setup for different scenarios. Manufacturing seems to be the module currently getting a few questions on our mailing list. Please see below for a few of the queries that our community has responded to:

- <a href="https://s.apache.org/gVF8" target="_blank" rel="noopener">Adding Actual Labor to the Manufacturing Process</a>
- <a href="https://s.apache.org/I0yj" target="_blank" rel="noopener">Defining a Product Store for E-Commerce.</a>
- <a href="https://s.apache.org/RvDt" target="_blank" rel="noopener">Product Costing</a>
- <a href="https://s.apache.org/7Dtj" target="_blank" rel="noopener">OFBiz and USPS Integration</a>

It is great to see that our community is keen to share their knowledge and experience with new OFBiz users. If you have a question or query about Apache OFBiz then please feel free to post a message to our user mailing list and our community will do its best to respond and support you.

## New Committers

During June the Project Management Committee (PMC) invited three new Committers, Aditya Sharma, Swapnil M. Mane and Suraj Khurana. Please join us in welcoming and congratulating Aditya, Swapnil and Suraj in their new role on the project, and also thanking them for all their contributions.

## OFBiz Technical Statistics

This month using the ASF online project statistics tool (kibble.apache.org), we have decided to focus on some of the technical aspects of the projects and give you some statistics around the development work that is ongoing. Commits:

- OFBiz currently has over 2.4 million lines of code, over 300,000 lines of comments and over 200,000 blank lines! (NOTE: At its highest there was over 3.5 million lines of code so the refactoring and code clean up effort is working!
- Over the last 3 months, 15,765 lines have been changed by 13 of our committers using 155 commits
- The most active repository for commits is the ofbiz-framework with 77% of commits
- The top 3 most active committers were Jacques Le Roux, Deepak Dixit and Rishi Solanki!

Dev Mailing Lists:

- Over the last 3 months, on our dev mailing list, 918 emails have been sent by 87 different people discussing 175 different topics
- Some of the main discussion topics were a proposal regarding <a href="https://s.apache.org/Xgwl" target="_blank" rel="noopener">bootstrap and vue.js in OFBiz</a> and also a discussion related to <a href="https://s.apache.org/C4NT" target="_blank" rel="noopener">Licence Issue with iText 4.2.0</a>

Jira:

- We have had 9 newcomers to the project that have been helping with contributions to Jira issues
- 1 returning contributor (someone who has contributed in the past but not on a regular basis) and;
- 36 regular contributors to the OFBiz Jira>/li>
- Over the last 3 months 103 issues were opened, 63 issues closed, 29 different people creating issues and 13 different people closing them

Thanks to everyone who has contributed to make the project what it is today, and also to all the new contributors who are continually joining our community and helping to improve OFBiz.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Add a VERSION file in root dir. ([OFBIZ-10141](https://issues.apache.org/jira/browse/OFBIZ-10141)) This adds a VERSION file to store the release version information
- Add Support for Disable attribute in CheckBox Form Widget. Disabled attribute can be used as &lt;field&gt;&lt;check disabled=true/&gt;&lt;/field&gt; and default value for attribute will be false. ([OFBIZ-10367](https://issues.apache.org/jira/browse/OFBIZ-10367))
- Remove unused code in \`CommonEvents::setFollowerPage\` ([OFBIZ-10413](https://issues.apache.org/jira/browse/OFBIZ-10413))
- Improve XML parsing with more restrictive settings ([OFBIZ-10435](https://issues.apache.org/jira/browse/OFBIZ-10435))
- Don't guess the system file separator ([OFBIZ-10428](https://issues.apache.org/jira/browse/OFBIZ-10428)) The JVM already knows the file separator of the current system when running Gradle so use that value instead of guessing from the operating system property.
- Use functional programming in build script ([OFBIZ-10429](https://issues.apache.org/jira/browse/OFBIZ-10429)) No functional change, the idea is to have more declarative code.
- Use list literals when possible ([OFBIZ-10431](https://issues.apache.org/jira/browse/OFBIZ-10431)) No functional change. List literals feels simply more readable.
- Use \`in\` and spread operator in \`gradlewSubprocess\` ([OFBIZ-10431](https://issues.apache.org/jira/browse/OFBIZ-10431)) No functional change. The idea of using the spread operator is to have less mutation involved. In Groovy, using operator overloads like in is more idiomatic than using explicitly the associated method.
- Make accounting entry configurable. ([OFBIZ-10391](https://issues.apache.org/jira/browse/OFBIZ-10391))
- Improve Hindi UiLables. ([OFBIZ-10362](https://issues.apache.org/jira/browse/OFBIZ-10362))
- Enable drop-ship PO feature at product store and product facility level as well, applied patch from jira issue with slightly changes. ([OFBIZ-9987](https://issues.apache.org/jira/browse/OFBIZ-9987))
- Define generic types in ([OFBIZ-10355](https://issues.apache.org/jira/browse/OFBIZ-10355))
- Add method attribute to request-map to controll a uri can be called GET or POST only [OFBIZ-10438](https://issues.apache.org/jira/browse/OFBIZ-10438) The request-map element has a new method attribute to control a uri be called by GET or POST or all.
- Adds missing license headers ([OFBIZ-10245](https://issues.apache.org/jira/browse/OFBIZ-10245))
- Add method attribute to request-map to controll a uri can be called GET or POST only [OFBIZ-10438](https://issues.apache.org/jira/browse/OFBIZ-10438) ControlServlet.java returned to the previous doGet/doPost structure.
- Add method attribute to request-map to controll a uri can be called GET or POST only [OFBIZ-10438](https://issues.apache.org/jira/browse/OFBIZ-10438) Add apache license to MethodNotAllowedException.java.
- Factorize code logic from ConfigXMLReader ([OFBIZ-10453](https://issues.apache.org/jira/browse/OFBIZ-10453)) There is a lot of repetitive code in ConfigXMLReader. Using a functional interface as a parameter of a generic algorithm avoids those repetitions.

## Bugfixes

Functional and technical bugfixes:

- Session fixation issue ([OFBIZ-10420](https://issues.apache.org/jira/browse/OFBIZ-10420)) Prevents the session fixation by making Tomcat generate a new jsessionId (ultimately put in cookie).
- The first visit event are not executed in case of CMS ([OFBIZ-10389](https://issues.apache.org/jira/browse/OFBIZ-10389))
- Streaming large content cause out of memory exception. ([OFBIZ-10133](https://issues.apache.org/jira/browse/OFBIZ-10133)) With r1821036 DataResourceWorker.getDataResourceStream() may return an InputStream (if the data resource is a file) instead of a ByteArrayInputStream which was expected in few places.
- Incorrect succes mesage after creating customer. ([OFBIZ-9898](https://issues.apache.org/jira/browse/OFBIZ-9898))
- Values are not aligned with column over EditShoppingList Screen, applied patch from jira issue. ([OFBIZ-10210](https://issues.apache.org/jira/browse/OFBIZ-10210))

## Documentation
