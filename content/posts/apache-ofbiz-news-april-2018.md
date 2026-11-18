---
layout: post
title: " Apache OFBiz News - April 2018 "
date: '2018-05-20T07:47:19+00:00'
permalink: apache-ofbiz-news-april-2018
---
## Apache OFBiz News April 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about our how our community is supporting OFBiz users, we look for contributors to help with a proposed French version of our website, one of our contributors becomes a Apache member and we share some community statistics.

<!--more-->

## Supporting Our Users

During April our user mailing list activity has been high with us receiving many queries about setting up and configuring OFBiz. Some of the topics raised were as follows:

- <a href="https://s.apache.org/oTfm" target="_blank" rel="noopener">How to Upload Sales Orders</a>
- <a href="https://s.apache.org/cyKM" target="_blank" rel="noopener">Setting Up Shipping Rate</a>
- <a href="https://s.apache.org/OhW5" target="_blank" rel="noopener">OFBiz and Cheque Processing</a>
- <a href="https://s.apache.org/Pmuh" target="_blank" rel="noopener">Dropship Warehouses</a>
- <a href="https://s.apache.org/I5eF" target="_blank" rel="noopener">Setting Up Price Rules</a>

As usual it was good to see that these questions were answered by a variety of people from our community wanting to help and support others. We would like to thank our users who have helped us identify a few bugs this month, and we are happy to report that they have all now been fixed.

We encourage our community and anyone using OFBiz to use or mailing list to share knowledge, ask questions and to report anything that doesn't seem to be working correctly.

## Looking for French Contributors

One of our contributors, Olivier Heintz has created a version of our OFBiz website in French and is looking for people from the community to help maintain it. We can publish versions of our OFBiz website in different languages as long as it is kept up to date each time there are any changes. And sharing the workload, reduces the dependency on a single person.

If you are interested in contributing to or maintaining a French version of our OFBiz website then please join the <a href="https://s.apache.org/7SQj" target="_blank" rel="noopener">discussion on our dev mailing list</a>

## New ASF Member from the OFBiz Community

Deepak Dixit has become an Apache Software Foundation member. Membership is by invitation only so it's a real honour to be invited. Many congratulations to Deepak!

This means that OFBiz now has 13 ASF members from our community. Thank you all for your work and commitment to OFBiz and the ASF.

## OFBiz Community Statistics

A few months ago, we included some community statistics as many of the ASF projects have access to an online tool that can help gather statistics about the community. This month we have decided to access a few of the statistics and share a few of the items with you.

Mailing Lists:

- Over the last 3 months, on our user mailing list, 411 emails have been sent by 89 different authors discussing 116 different topics
- Over the last 3 months on our dev mailing list, 398 emails have been sent by 51 different authors discussing 67 different topics
- Over the last 3 months, the top 5 people who have been active on our mailing lists are Jacques Le Roux, Taher Alkhateeb, Michael Brohl, Deepak Dixit and Sharan Foga

Jira Contributions Over the last 3 months we have had:

- 14 newcomers to the project that have contributed to helping us with our Jira issues, (4 arrived in February, 4 in March and 6 in April)
- 3 returning contributors (so people who have contributed in the past but not on a regular basis), and
- 45 regular contributors to the project
- 175 issues created, 86 issues closed, 40 different people creating issues and 14 different people closing them

It is great to see the community maintaining its activity but also and still growing by attracting new people to the community.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Imporoved EntityUtilProperties ([OFBIZ-7112](https://issues.apache.org/jira/browse/OFBIZ-7112))
- Move all data in applications to the datamodel component. Move the PortalPortlet, PortletPortletCategory and PortletCategory data to party, workeffort and content components from datamodel. ([OFBIZ-9501](https://issues.apache.org/jira/browse/OFBIZ-9501))
- Standardise Layout throughout Applications ([OFBIZ-10242](https://issues.apache.org/jira/browse/OFBIZ-10242))
- Standardise layout for Order ([OFBIZ-10332](https://issues.apache.org/jira/browse/OFBIZ-10332))
- Data Migration by releases wiki page Pandoc was accurately not rendering wrong MarkDown code. Anyway this needs to be translater to Asciidoc one day or another. There is a Confluence plugin to import Asciidoc, not sure we will want to do that or only keep the doc in the source. I guess it depends on the importance of the document. Some needs really to be visible in wiki, or maybe not and why keeping the wiki at all ?
- Same UiLabel used for multiple purposes ([OFBIZ-10336](https://issues.apache.org/jira/browse/OFBIZ-10336))
- Standardise Layout throughout Applications ([OFBIZ-10242)](https://issues.apache.org/jira/browse/OFBIZ-10242)
- Update Currency UOM data as per iso amendment 164, 165 and 166 ([OFBIZ-10364](https://issues.apache.org/jira/browse/OFBIZ-10364))
- Correected the sequence of service attribute tag to fix Invalid content was found warning
- [Improve layout and structure of forms (](https://issues.apache.org/jira/browse/OFBIZ-10323)[OFBIZ-10221](https://issues.apache.org/jira/browse/OFBIZ-10221)[)](https://issues.apache.org/jira/browse/OFBIZ-10323)
- Add a link onto a crashed Job to reset it ([OFBIZ-10371](https://issues.apache.org/jira/browse/OFBIZ-10371))
- Change the display condition on the added link ([OFBIZ-10371](https://issues.apache.org/jira/browse/OFBIZ-10371))
- Convert facility party related services from simple to entity-auto. Remove the service implementation for removePartyFromFacility, removePartyFromFacilityGroup and deleteFacilityContent. Service removePartyFromFacilityGroup already converted into entity auto, simply removing it. ([OFBIZ-10380](https://issues.apache.org/jira/browse/OFBIZ-10380))
- Invoice in status approved - cancel, applied patch from jira issue with minor changes ([OFBIZ-10189](https://issues.apache.org/jira/browse/OFBIZ-10189))

### Plugins

- Improved the WebPos CSS. Fixed the alignment and width to adjust the text box in the window. ([OFBIZ-10316](https://issues.apache.org/jira/browse/OFBIZ-10316))
- UI Label Issue on WebPos screen. Removed unnecessary class that was causing text in white colour. ([OFBIZ-10312](https://issues.apache.org/jira/browse/OFBIZ-10312))

## Bugfixes

Functional and technical bugfixes:

### Framework

- FinAccountServices: Prevent possible NullPointerException.
- Moved the reference of the license for the "Quicksand" fonts from the NOTICE file to the LICENSE file.
- Required parameters are optional for createWorkRequirementFulfillment service ([OFBIZ-8622](https://issues.apache.org/jira/browse/OFBIZ-8622))
- ConfigXMLReader - Events are not executed in the order defined ([OFBIZ-10369](https://issues.apache.org/jira/browse/OFBIZ-10369))

### Plugins

- One Page Checkout page cannot move to Step 5 due to javascript errors ([OFBIZ-10329](https://issues.apache.org/jira/browse/OFBIZ-10329))
