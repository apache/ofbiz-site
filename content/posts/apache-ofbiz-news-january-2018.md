---
layout: post
title: Apache OFBiz News - January 2018
date: '2018-02-06T09:50:16+00:00'
permalink: apache-ofbiz-news-january-2018
---
## Apache OFBiz News January 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have news about our new OFBiz release, OFBiz volunteers for community metrics, we discuss the implementation of a documentation framework within OFBiz itself and we look at participating in Google Summer of Code.

<!--more-->

## 16.11.04 Released!

In early January OFBiz 16.11.04 was released. The new release consolidates all work done since the previous release 16.11.03 in July last year. The release file can be downloaded following the instructions on the <a href="http://ofbiz.apache.org/download.html" target="_blank" rel="noopener">OFBiz Downloads page</a>. Please refer to the <a href="http://ofbiz.apache.org/release-notes-16.11.04.html" target="_blank" rel="noopener">Release Notes</a> for more details of the changes introduced with this new version.

Please note that a security vulnerability has been reported in OFBiz releases 16.11.01 to 16.11.03. It is highly recommended that you upgrade to the 16.11.04 release to mitigate this vulnerability. Details can be found on "Security Vulnerabilities" section of the <a href="http://ofbiz.apache.org/download.html" target="_blank" rel="noopener">OFBiz Downloads page</a>.

## OFBiz as a Kibble Demo Project

The ASF has a new top level project called Kibble that is focussed on gathering and displaying community metrics. <a href="http://kibble.apache.org/" target="_blank" rel="noopener">http://kibble.apache.org/</a>.

The Kibble project sent out a request to all Apache projects asking for volunteers to be be part of the their demo instance. Any volunteer project could also provide feedback to the Kibble project about developing specific metrics that could be useful to the project community. OFBiz responded and has now been setup as one of the Kibble demo projects. As well as details of contributors over time and retention statistics, it also has some statistics on overall community moods. Looking at our "Communication Mood" statistics OFBiz's top three mood readings over the past year are

- Positive with a level of 70
- Trust with level of 16
- Anticipation with a level of 9

The OFBiz project overall mood reading is 92.4% which is very good.

If you are interested in seeing more OFBiz statistics and metrics then you can use the <a href="https://demo.kibble.apache.org/" target="_blank" rel="noopener">Kibble demo</a> to play around and take a look.

## OFBiz Documentation Framework

During this month there has been a lot of discussion about implementing a documentation framework within OFBiz that will be able to generate documentation in various formats. This means that we could consolidate OFBiz documentation within OFBiz itself and adapt it to any new releases. It will be based on asciidoc and details of the discussion can be found <a href="https://s.apache.org/VfxE" target="_blank" rel="noopener">here</a>.

Also discussed was how the documents would be structured, and a general agreement has been reached on this. Next we will be looking to create a documentation team that will work on reviewing the documents we have already available on the wiki and other sources, and then restructure them to fit into the new documentation framework model. If you are interested in being part of the documentation team or helping review or write OFBiz documentation then please volunteer by sending a message to our development mailing list.

## GSoC for OFBiz

Every year the ASF registers to be a mentor organisation for Google Summer of Code (GSoC). Projects that want to participate have been asked to start creating a list of task ideas that students could work on. Participating in GSoC is a good way of encouraging new people to become involved with OFBiz and maybe help promote it too.

<a href="https://s.apache.org/MUUo" target="_blank" rel="noopener">Some discussions</a> have already taken place on our development mailing list, feedback has been positive and a few people have volunteered to be mentors. We are now in the process of defining a list of suitable tasks, so if you are interested in helping create this or provide mentoring for a student then please join the discussion.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Make the number of initially visible applications in main menu a property ([OFBIZ-10132](https://issues.apache.org/jira/browse/OFBIZ-10132))
- Update Geo information according to ISO notifications ([OFBIZ-10028](https://issues.apache.org/jira/browse/OFBIZ-10028)) For the countries:
  - Cyprus
  - Iceland
  - Ecuador
  - China
  - Germany
  - Hungary
  - Indonesia
  - Korea (the Democratic People's Republic of)
  - Lao People's Democratic Republic (the)
  - Moldova (the Republic of)
  - Mali
- Fix the mockito library version to stay consistent in versioning
- Replace Asm select plugin with Select2 ([OFBIZ-10113](https://issues.apache.org/jira/browse/OFBIZ-10113))
- Create missing services definitions in WorkEffortSimpleServices.xml ([OFBIZ-9708](https://issues.apache.org/jira/browse/OFBIZ-9708))
- Remove ftl dependency in order on ecommerce ([OFBIZ-6946](https://issues.apache.org/jira/browse/OFBIZ-6946)) Order management should work without the ecommerce component.
- Make xssi prefix configurable ([OFBIZ-9169](https://issues.apache.org/jira/browse/OFBIZ-9169))
- Add ability to record return communication, support to record communication event against return and new entity CommunicationEventReturn, crund and supporting screens. Also added support in the existing email services to handle the return cases. ([OFBIZ-9911](https://issues.apache.org/jira/browse/OFBIZ-9911))
- Token based authentication ([OFBIZ-9833](https://issues.apache.org/jira/browse/OFBIZ-9833))
- rename the common theme directory from "common" to "common-theme" ([OFBIZ-10175](https://issues.apache.org/jira/browse/OFBIZ-10175))
- When completing communicationEvent through setCommEventComplete, if datetimeEnded is null, set it to nowTimestamp ([OFBIZ-10181](https://issues.apache.org/jira/browse/OFBIZ-10181))
- Complete service order items are being allowed to be received along with finished goods over Approved purchase order. ([OFBIZ-7183](https://issues.apache.org/jira/browse/OFBIZ-7183))
- Implement and apply return lookup and add lookup with screen forms and controller entry. Use the same lookup on communication event return screen. ([OFBIZ-10171](https://issues.apache.org/jira/browse/OFBIZ-10171))

### Plugins

- Clean images, among them logos, in all locations used ([OFBIZ-10128](https://issues.apache.org/jira/browse/OFBIZ-10128))
- Message page markup improvement ([OFBIZ-10090](https://issues.apache.org/jira/browse/OFBIZ-10090))
- Update Bootstrap 4.0 library to stable version from bootstrap 4.0 beta-2 ([OFBIZ-10179](https://issues.apache.org/jira/browse/OFBIZ-10179))
- Update markup according to standard markup given by Bootstrap v4.0.0 for:
  - OrderHistory page ([OFBIZ-10135](https://issues.apache.org/jira/browse/OFBIZ-10135))
  - Quick checkout page ([OFBIZ-10136](https://issues.apache.org/jira/browse/OFBIZ-10136))
  - Last products section ([OFBIZ-10169](https://issues.apache.org/jira/browse/OFBIZ-10169))
  - Quick recorder section ([OFBIZ-10163](https://issues.apache.org/jira/browse/OFBIZ-10163))
  - Advanced search page ([OFBIZ-10162](https://issues.apache.org/jira/browse/OFBIZ-10162))
  - Quick add page ([OFBIZ-10161](https://issues.apache.org/jira/browse/OFBIZ-10161))
  - Checkout page ([OFBIZ-10105](https://issues.apache.org/jira/browse/OFBIZ-10105))
  - Shopping lists page ([OFBIZ-10119](https://issues.apache.org/jira/browse/OFBIZ-10119))
- Replace Asm select plugin with Select2. ([OFBIZ-10113](https://issues.apache.org/jira/browse/OFBIZ-10113))
- Update Solr/Lucene to 7.2.1. ([OFBIZ-10166](https://issues.apache.org/jira/browse/OFBIZ-10166))
- Improvement in UI of various pages of ecommerce ([OFBIZ-10182](https://issues.apache.org/jira/browse/OFBIZ-10182))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Add WebSocket support in OFBiz ([OFBIZ-7073](https://issues.apache.org/jira/browse/OFBIZ-7073))
- ID should be the abbreviation for identity in English ([OFBIZ-10131](https://issues.apache.org/jira/browse/OFBIZ-10131))
- Trailing fraction are not entertained by formatCurrency method of UtilFormatOut ([OFBIZ-10142](https://issues.apache.org/jira/browse/OFBIZ-10142))
- Hardcoded String in PaymentGatewayServices ([OFBIZ-10143](https://issues.apache.org/jira/browse/OFBIZ-10143))
- Display the included vat amount on order item detail instead of 0 ([OFBIZ-10148](https://issues.apache.org/jira/browse/OFBIZ-10148))
- Shipping label printing does not work ([OFBIZ-10153](https://issues.apache.org/jira/browse/OFBIZ-10153))
- Employee Position does not allow "don't care" for boolean fields ([OFBIZ-10158](https://issues.apache.org/jira/browse/OFBIZ-10158))
- Correcting findOne() in OfbizDslDescriptorForEclipse.dsld ([OFBIZ-10159](https://issues.apache.org/jira/browse/OFBIZ-10159))
- Pagination errors in "KeywordSearch.ftl" and "ProductSearchSession.java" ([OFBIZ-10154](https://issues.apache.org/jira/browse/OFBIZ-10154))
- Streaming large content cause out of memory exception. ([OFBIZ-10133](https://issues.apache.org/jira/browse/OFBIZ-10133))
- Error on updating sub content of CMS webSite ([OFBIZ-10096](https://issues.apache.org/jira/browse/OFBIZ-10096))
- Fix the HttpServletRequestWrapper in ContextFilter.doFilter() ([OFBIZ-10167](https://issues.apache.org/jira/browse/OFBIZ-10167))
- Replace Asm select plugin with Select2. ([OFBIZ-10113](https://issues.apache.org/jira/browse/OFBIZ-10113))
- Not able to add the requirement, broken screen with the error message in workeffort component ([OFBIZ-10122](https://issues.apache.org/jira/browse/OFBIZ-10122))
- GeoAssoc data is missing for Telangana state of India ([OFBIZ-10172](https://issues.apache.org/jira/browse/OFBIZ-10172))
- Rainbow theme: bug in avatar.ftl when the last name does not exist ([OFBIZ-10177](https://issues.apache.org/jira/browse/OFBIZ-10177))
- EntitySaxReader mostly-insert (store after create-error) Fix ([OFBIZ-1032](https://issues.apache.org/jira/browse/OFBIZ-1032))
- Add/modify Calender Event Screen is Broken. ([OFBIZ-10173](https://issues.apache.org/jira/browse/OFBIZ-10173))

### Plugins

- Birt plugin depends on example plugin ([OFBIZ-9383](https://issues.apache.org/jira/browse/OFBIZ-9383))
- Recent markup changed breaks Product view page ([OFBIZ-10117](https://issues.apache.org/jira/browse/OFBIZ-10117))
- Incorrect closign of div tag on one page checkout page.
- Error on My Portal Request Overview Page. ([OFBIZ-10183](https://issues.apache.org/jira/browse/OFBIZ-10183))
