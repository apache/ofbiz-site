---
layout: post
title: 'Apache OFBiz News - September 2017 '
date: '2017-10-11T09:40:07+00:00'
permalink: apache-ofbiz-news-september-2017
---
## Apache OFBiz News September 2017

Welcome to our regular monthly round-up of OFBiz news. This month we have news about another documentation effort but this time it is around our existing Data Model, we continue to tidy up our new website, we discuss the possibility of adding bitcoin support to OFBiz and we take a look at some of our Twitter statistics.

<!--more-->

## Updated OFBiz Data Model Book

Recently we have been looking at ways to improve our documentation and it has been a focus of the project and over the last month and contributors in our community are working hard to update our review and update our existing documentation. Many of you may already know about the OFBiz Data Model diagrams that were put together by David E. Jones. Over time OFBiz has changed, so we have had to make adjustments and improvements to the original Data Model.

<p></p>

Last week Aditya Sharma announced an updated version of the OFBiz Data Model that has been published on our wiki. Details can be found at the link below: <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Data+Model+Diagrams" target="_blank" rel="noopener"> Big Book for Apache OFBiz Data Model 2017</a>

<p></p>

The main key changes are as follows:

- Colored content with titles according to the internal color pattern.
- Added a separate page for integration specific entities.
- Removed technical process diagrams, making it specific for entities.
- Added 77 new entities.
- Removed 8 entities.
- Added around 200+ new fields in entities (Though major portion includes the addition of description or attrDescription fields in \*Attribute or \*TypeAttr entities).
- Removed 24 fields.

This is a great resource for anyone wanting to understand the OFBiz Data Model and its relationships. A big thank you to Aditya Sharma, Sonal Patwari and everyone who contributed to this effort.

## Ongoing Website Improvements

Last month we told you about our new website going live. Over the last few weeks, we have continued to do some minor corrections and other small tasks associated with tidying up the site. We hope that the community is finding the new site useful and easy to navigate.Thanks very much to everyone who is helping out with these tasks especially Jacques Le Roux.

<p></p>

Also contributors from our French community are keen to promote OFBiz in France and have proposed ways to make the content from our website available in French. Work is already in progress around this and a Jira has been created with the details.

<p></p>

Our next step will be to put together our plans to continue to improve the site and information.

## Adding Bitcoin Support in OFBiz

One of the discussions raised this month was regarding a proposal to add Bitcoin support to OFBiz. Details of the thread can be found below: <a href="https://s.apache.org/UgKF" target="_blank" rel="noopener"> Bitcoin Discussion</a> As feedback was very positive and a <a href="https://issues.apache.org/jira/browse/OFBIZ-9699" target="_blank" rel="noopener"> Jira Ticket</a> has been created which is to be used to monitor the progress of adding and testing this new feature.

<p></p>

Thanks very much to Julian Smith for the proposal and the offer to provide a patch for this functionality. We look forward to seeing the results.

## Apache OFBiz on Twitter

The project has been using its Twitter account to promote OFBiz and its features, community and the ASF. Currently, we have made over 1700 tweets and have 469 followers. Over the last month, our tweets are gained over 2000 impressions which means that we are successfully spreading the word. Guess what tends to be our most popular monthly tweet? - The answer is a link to this monthly blog update!

<p></p>

We would like to continue to increase our following so if you would like to keep up to date with what is happening on the project then please follow <a href="https://twitter.com/ApacheOfbiz" target="_blank" rel="noopener">@ApacheOfbiz</a>.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- CommonEvents improvements ([OFBIZ-9673](https://issues.apache.org/jira/browse/OFBIZ-9673))
- Missing foreign key constraint
  - for fields userLoginId &amp; userPrefGroupTypeId in UserPreference entity ([OFBIZ-9678](https://issues.apache.org/jira/browse/OFBIZ-9678))
  - OrderItem entity for ShoppingListItem ([OFBIZ-9767](https://issues.apache.org/jira/browse/OFBIZ-9767))
- Merge extended entity definition in data model component into the existing entity definition ([OFBIZ-9581](https://issues.apache.org/jira/browse/OFBIZ-9581))
- Required field indicator (\*) is missing
  - from the required field on add content role. ([OFBIZ-9749](https://issues.apache.org/jira/browse/OFBIZ-9749))
  - on the Add an association section ([OFBIZ-9748](https://issues.apache.org/jira/browse/OFBIZ-9748))
  - from the required field on create website content form, applied patch from jira issue ([OFBIZ-9741](https://issues.apache.org/jira/browse/OFBIZ-9741))
  - from the required field on create website form, applied patch from jira issue ([OFBIZ-9739](https://issues.apache.org/jira/browse/OFBIZ-9739))
  - from create web site parties. ([OFBIZ-9754](https://issues.apache.org/jira/browse/OFBIZ-9754))
- Extend SecurityGroup entity and add name/groupName field. Added groupName field to entity SecurityGroup and related changes done in the data, services and UI. ([OFBIZ-9620](https://issues.apache.org/jira/browse/OFBIZ-9620))
- Moved to common-theme
  - jquery related js/plugins from images to webapp ([OFBIZ-5776](https://issues.apache.org/jira/browse/OFBIZ-5776))
  - Moved OfbizUtil.js and fieldlookup.js from images to common-theme and made changes accordingly. ([OFBIZ-5776](https://issues.apache.org/jira/browse/OFBIZ-5776))
- Removed unused file categorytree.css from code
- Moved images from webapp/multiflex/\* to webapp/multiflex/images and updated references
- Add session tracking mode and make cookie secure ([OFBIZ-6655](https://issues.apache.org/jira/browse/OFBIZ-6655))
- Missing Relationship from OrderHeader to WebSite ([OFBIZ-9647](https://issues.apache.org/jira/browse/OFBIZ-9647))
  - Upgrade and clean the implementation for OWASP dependency checker
  - Upgrade the version from 1.4.0 to 2.1.1
  - Remove the dependency on MavenCentral and replace it with a custom link to the original source of work using a custom maven URL. Thus all dependencies are downloaded from JCenter to avoid duplication of library downloads.
  - Update README.md on how to use this task
- Updated phone validation method to validate phone for specific geo. ([OFBIZ-9358](https://issues.apache.org/jira/browse/OFBIZ-9358))
- New Rule Based Number Format for Indian Number System in International Components for Unicode (ICU) OFBiz usage. ([OFBIZ-9489](https://issues.apache.org/jira/browse/OFBIZ-9489))
- Update UtilMisc.formatRuleBasedAmount() method to take rules and ruleSet and formatting can be done, rather than system providing all ruleset support. ([OFBIZ-9490](https://issues.apache.org/jira/browse/OFBIZ-9490))
- Apply new ruleSet definition into Ofbiz files. ([OFBIZ-9515](https://issues.apache.org/jira/browse/OFBIZ-9515))

### Plugins

- Updated moved file references for plugins ([OFBIZ-5776](https://issues.apache.org/jira/browse/OFBIZ-5776))
- Apply new ruleSet definition into Ofbiz files. ([OFBIZ-9515](https://issues.apache.org/jira/browse/OFBIZ-9515))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fix references where Mime type is displayed in HTML encoded pattern ([OFBIZ-9644](https://issues.apache.org/jira/browse/OFBIZ-9644))
- Fix Default or Empty Catch block in Java and Groovy files ([OFBIZ-8341](https://issues.apache.org/jira/browse/OFBIZ-8341))
- Can enter empty content for product facility ([OFBIZ-8323](https://issues.apache.org/jira/browse/OFBIZ-8323)). A Generic Issue with EntityAutoEngine in which success message is appended to result after invoking create, update, delete, expire methods.
- FacilityId should be mandatory for Create Inventory Item form in EditInventoryItem screen ([OFBIZ-9499](https://issues.apache.org/jira/browse/OFBIZ-9499))
- Error in payment address for purchase invoice via service createinvoicefororder ([OFBIZ-9535](https://issues.apache.org/jira/browse/OFBIZ-9535))
- Add JsLanguageFilesMapping.java location to createJsLanguageFileMapping service
- Add auto generated java file for language mapping js.
- Fix missing UiLabels ([OFBIZ-9745](https://issues.apache.org/jira/browse/OFBIZ-9745))
- MRP incorrectly computes quantity already received in open purchase order shipments. ([OFBIZ-9525](https://issues.apache.org/jira/browse/OFBIZ-9525)) The MRP algorithm incorrectly computed the quantity of items partially received in a purchase shipment because it leveraged the OrderReadHelper.getItemShippedQuantity(...) method that is intended to be used only to count the quantity shipped of sales order.
- Corrected Readme.md file path.
- Transaction Timeout in JavaEventHandler ([OFBIZ-9725](https://issues.apache.org/jira/browse/OFBIZ-9725)) When running a service from webtools (not scheduling it) the duration of the service is limited to the transaction default timeout (60 seconds)
- 'Find Opportunities' field name is reflecting in place of 'Opportunity Id' on FindSalesOpportunity screen, applied patch from jira issue ([OFBIZ-9753](https://issues.apache.org/jira/browse/OFBIZ-9753))
- Creating Lead Source from profile page it redirects to empty profile page ([OFBIZ-9553](https://issues.apache.org/jira/browse/OFBIZ-9553))
- UI issue in Lead Lookup on find opportunity ([OFBIZ-9477](https://issues.apache.org/jira/browse/OFBIZ-9477))
- Fix type entities to follow convention of hasTable ([OFBIZ-9696](https://issues.apache.org/jira/browse/OFBIZ-9696))
- UI issue on web pos for different themes. ([OFBIZ-7253](https://issues.apache.org/jira/browse/OFBIZ-7253))

### Plugins

- Fix references where Mime type is displayed in HTML encoded pattern ([OFBIZ-9644](https://issues.apache.org/jira/browse/OFBIZ-9644))
- Empty rows in Excel files affect the imported data ([OFBIZ-9728](https://issues.apache.org/jira/browse/OFBIZ-9728))
- Ftl error shown on Edit Shopping List page in ecommerce component ([OFBIZ-9742](https://issues.apache.org/jira/browse/OFBIZ-9742))
- Getting error in select frequency drop down on eCommerce shopping list screen ([OFBIZ-9762](https://issues.apache.org/jira/browse/OFBIZ-9762))
- UI issue on Web POS for different themes. ([OFBIZ-7253](https://issues.apache.org/jira/browse/OFBIZ-7253))
