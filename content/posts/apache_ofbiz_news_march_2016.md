---
layout: post
title: Apache OFBiz News - March 2016
date: '2016-04-04T12:27:15+00:00'
permalink: apache_ofbiz_news_march_2016
---
## Apache OFBiz News March 2016

Welcome to our monthly round-up of OFBiz news. This month we have news about our first Community Day for 2016, OFBiz at Apachecon NA, an update on the code tidy up and re-factoring work and we congratulate two new ASF members from our community.

<!--more-->

## OFBiz Community Day

Last year the project introduced <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">Community Days</a> where we focus on getting as many people as possible from the community to collaborate and work on improving OFBiz.

<p></p>

Four Community Days are held each year and our first for 2016 was held on Saturday 19th March. Contributors from around the world participated and collaborated. Countries included France, The Netherlands, India and the Czech Republic and work ranged from bug fixes through to documentation.

<p></p>

A total of 39 commits were made to the repository on the Community Day itself although work did span days before and after the event. A Jira Sprint was used to manage the tasks and generate a report for the event.

<p></p>

Our next Community Day is planned for Saturday 18th June.

## Apachecon NA Vancouver 2016

OFBiz will be represented at Apachecon NA in Vancouver. Over the last few years the community has been consistently submitting presentations with the hope of running OFBiz tracks. This time four presentations from the OFBiz community have been selected and cover several topics including community, functional setup and technical development areas.

<p></p>

The OFBiz 'mini track' is planned for Friday 13th May.  Please take a look at the full <a href="http://events.linuxfoundation.org/events/apachecon-north-america/program/schedule">Apachecon NA schedule</a> for more details.

<p></p>

A big thank you to everyone that made a submission.

## OFBiz Re-Factoring

Work has started on some code re-factoring. The <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Framework+Re-factor">overall objective</a> is to tidy up and improve the code base so that it becomes easier to maintain.

<p></p>

To help people get started, a list of tasks we'd like to work on has been created. The tasks range from simple straightforward clean up work that anyone can pick up to more complex work that will take a bit more time and effort to complete. We also have a list of general tasks that will also help the clean up effort.

<p></p>

The community is looking for people to actively help with this so if you are interested in joining the effort then please take a look at the links below:

<p></p>

<a href="https://cwiki.apache.org/confluence/display/OFBIZ/Project+Approach">Re-Factor Approach</a>

<p></p>

<a href="https://cwiki.apache.org/confluence/display/OFBIZ/Re-Factor+To-Do+List">Current Re-Factor To Do List</a>

<p></p>

It is hoped that this work will become part of a continual ongoing effort.

## New ASF Members from the OFBiz Community

Two people from our community (Jacques Le Roux and Sharan Foga) have become Apache Software Foundation members. Membership is by invitation only so it's a real honour to be invited.

<p></p>

Our congratulations goes out to both Jacques and Sharan.

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Small update mostly about OTP, the "nicely" scripts, and notsoserial Java agent replacing contrast
- Upgrade Axis2 to 1.7.1 ([OFBIZ-6916](https://issues.apache.org/jira/browse/OFBIZ-6916))
- Remove "ivy:cleancache" from "clean" target ([OFBIZ-5461](https://issues.apache.org/jira/browse/OFBIZ-5461))
- Update Tomcat to 7.0.68 ([OFBIZ-6913](https://issues.apache.org/jira/browse/OFBIZ-6913))
- Update the passport component to use httpclient/core-4.4.1 instead of commons-httpclient-3.1 ([OFBIZ-6755](https://issues.apache.org/jira/browse/OFBIZ-6755))
  - Remove commons-httpclient-3.1.jar from passport component.
  - Use httpclient 4.4.1 in base/lib instead.
  - Remove randomString methods, use RandomStringUtils.randomAlphanumeric instead.
  - Move getAllowAllHttpClient to UtilHttp.
- Improve the decorator for manufacturing/order/facility component for re-use ([OFBIZ-6923](https://issues.apache.org/jira/browse/OFBIZ-6923))
- Comments on ordering products should be store driven ([OFBIZ-6924](https://issues.apache.org/jira/browse/OFBIZ-6924))
- Company check payment method should be shown when issuing check ([OFBIZ-6937](https://issues.apache.org/jira/browse/OFBIZ-6937))
- Change how the action expire on entity-auto engine is managed ([OFBIZ-6892](https://issues.apache.org/jira/browse/OFBIZ-6892))
  - if a date field is present on service attribute, OFBiz tries to expire it with the given value or with now date
  - else try to expire thruDate field
  - else try to expire \*ThruDate or thru\*Date field
- Add width and height attributes retrieval in renderLink method in MacroMenuRenderer ([OFBIZ-6927](https://issues.apache.org/jira/browse/OFBIZ-6927))
- For screen engine drop-down, sort with the locale the entity-list if the related entity have a default resource defined. ([OFBIZ-3311](https://issues.apache.org/jira/browse/OFBIZ-3311))
- Update entity definition of OtherDataResource, VideoDataResource and AudioDataResource replacing object to byte-array data type and title correction ([OFBIZ-6943](https://issues.apache.org/jira/browse/OFBIZ-6943))
- Allowing inventory transfers based on Product instead of only InventoryItem. ([OFBIZ-6042](https://issues.apache.org/jira/browse/OFBIZ-6042))
- Move forms in ProductStoreForms.xml to StoreForms.xml ([OFBIZ-6938](https://issues.apache.org/jira/browse/OFBIZ-6938))
- Adding event definitions for inbound and outbound shipments ([OFBIZ-6958](https://issues.apache.org/jira/browse/OFBIZ-6958))
- Enhancing \*Attribute entities with a description field ([OFBIZ-6962](https://issues.apache.org/jira/browse/OFBIZ-6962))
- Have the ability to test solr queries through widgets (screens &amp; forms) ([OFBIZ-6595](https://issues.apache.org/jira/browse/OFBIZ-6595))
- Ensure a ModelField is set for rhs EntityConditionValues that don't already have it, such as the EntityFunction classes
- Remove antwebsystems.com references
- Adding some translations for French ([OFBIZ-4761](https://issues.apache.org/jira/browse/OFBIZ-4761))
- Update various manufacturing labels regarding the dutch locale ([OFBIZ-6876](https://issues.apache.org/jira/browse/OFBIZ-6876))
- Dutch translations for catalog labels ([OFBIZ-6890](https://issues.apache.org/jira/browse/OFBIZ-6890))
- Enhancement of Dutch labels ([OFBIZ-6850](https://issues.apache.org/jira/browse/OFBIZ-6850))
- Adding some translations for French ([OFBIZ-4761](https://issues.apache.org/jira/browse/OFBIZ-4761))

## Bugfixes

Functional and technical bugfixes:

- Temporarily replaced the demo-trunk.ofbiz.apache.org domain by ofbiz-vm.apache.org:8080 ([OFBIZ-6922](https://issues.apache.org/jira/browse/OFBIZ-6922))
- Incorrect content length in response from HTTP service engine ([OFBIZ-6925](https://issues.apache.org/jira/browse/OFBIZ-6925))
- GroovyEngine.serviceInvoker masks Groovy script exceptions in some cases ([OFBIZ-6888](https://issues.apache.org/jira/browse/OFBIZ-6888))
- Fixed broken 'run-test-list' target ([OFBIZ-6936](https://issues.apache.org/jira/browse/OFBIZ-6936))
- Credit card details cannot be updated ([OFBIZ-6920](https://issues.apache.org/jira/browse/OFBIZ-6920))
- Comment out RMI related code because of the Java deserialization issue ([OFBIZ-6942](https://issues.apache.org/jira/browse/OFBIZ-6942))
- Currently the View Profit overview is only visible when the quote has the status 'QUO\_CREATED'. It should be visible independently of the status. ([OFBIZ-5868](https://issues.apache.org/jira/browse/OFBIZ-5868))
- When updating the allow order decimal quantity to N for the product store and then updating the unit price of an item in the shopping cart an error is shown ([OFBIZ-6933](https://issues.apache.org/jira/browse/OFBIZ-6933))
- Added missing jgrowl js and css file for ecommerce main-decorator.
- Cannot find linkToProduct from createCommunicationEvent SECA ([OFBIZ-6894](https://issues.apache.org/jira/browse/OFBIZ-6894))
- ProductSearch generates an error ([OFBIZ-6860](https://issues.apache.org/jira/browse/OFBIZ-6860))
- Fixed Search.groovy, use correct method for analyzer, QueryParser and TopScoreDocCollector. in both lucene and ecommerce ([OFBIZ-6859](https://issues.apache.org/jira/browse/OFBIZ-6859)) and ([OFBIZ-6861](https://issues.apache.org/jira/browse/OFBIZ-6861))
- Fixed NPE for ecommerce/products url, if user enters invalid url ecommerce/products then redirect it to main. ([OFBIZ-5918](https://issues.apache.org/jira/browse/OFBIZ-5918))
- Credit Card validation does not work properly during anonymous quick checkout process. Added new method checkoutValidation which will validate if the shipping method and payment method are in the cart and if not available then this method will return an error.
- Project contents were not getting deleted. auto-parameters-entity does not seem to be working, for now passed all the needed parameters ([OFBIZ-5703](https://issues.apache.org/jira/browse/OFBIZ-5703))
- Comment out RMI related code because of the Java deserialization issue ([OFBIZ-6942](https://issues.apache.org/jira/browse/OFBIZ-6942))
- Update XStream lib to prevent XML External Entity (XXE) Processing ([OFBIZ-6959](https://issues.apache.org/jira/browse/OFBIZ-6959))
- jQuery plugin jGrowl is loaded before jQuery in ecommerce ([OFBIZ-6957](https://issues.apache.org/jira/browse/OFBIZ-6957))
- Correct setting of the WorkEffortPurposeTypeId on production run tasks ([OFBIZ-6954](https://issues.apache.org/jira/browse/OFBIZ-6954))
- Failed to load contentForum.css ([OFBIZ-6956](https://issues.apache.org/jira/browse/OFBIZ-6956))
- Rename AccountingConfig.properties to accounting.properties ([OFBIZ-6954](https://issues.apache.org/jira/browse/OFBIZ-6954))
- Popup fades in and out non-stop when hovers on a product image in list view ([OFBIZ-6961](https://issues.apache.org/jira/browse/OFBIZ-6961))
- Relocate .ftl files in the components
  - humanres ([OFBIZ-6816](https://issues.apache.org/jira/browse/OFBIZ-6816))
  - manufacturing ([OFBIZ-6817](https://issues.apache.org/jira/browse/OFBIZ-6817))
  - order ([OFBIZ-6819](https://issues.apache.org/jira/browse/OFBIZ-6819))
  - webPOS ([OFBIZ-6837](https://issues.apache.org/jira/browse/OFBIZ-6837))
  - myportal ([OFBIZ-6860](https://issues.apache.org/jira/browse/OFBIZ-6860))
  - project ([OFBIZ-6812](https://issues.apache.org/jira/browse/OFBIZ-6812))
- There is no commons-httpclient-3.1.jar in the project but the .classpath file still links to it ([OFBIZ-6755](https://issues.apache.org/jira/browse/OFBIZ-6755))
- Unable to change language in ecommerce ([OFBIZ-6966](https://issues.apache.org/jira/browse/OFBIZ-6966))

## Documentation

- Add a comment to the testRemoteSoap service to clarify when to use it and how it works.
- Improve uom convert error message
- Improved the documentation about the purpose and behavior of the "auth" and "in-validate" secas events.
