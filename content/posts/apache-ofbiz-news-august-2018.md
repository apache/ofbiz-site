---
layout: post
title: 'Apache OFBiz News - August 2018 '
date: '2019-01-14T10:20:36+00:00'
permalink: apache-ofbiz-news-august-2018
---
## Apache OFBiz News August 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about a new impersonate feature that has been implemented for OFBiz as well as our usual list of features and improvements.

## Impersonate Feature

One of our contributors Gil Portenseigne has proposed a new feature for OFBiz. It is called the Impersonate feature. So what does it do? And how does it work?

Imagine that someone has reported something to you such as strange OFBiz behavior and you want to help them by validating it but don't want to ask for their login details. They can instead give you permission to impersonate them in the system. This impersonation feature can be very useful when you need to validate some behavior or to assist a user in production without asking for their credentials. This type of functionality is a common feature that can help people in support roles and is a common feature that can be found for example in Gitlab.

This feature has been developed by one of our OFBiz service providers and has been contributed back to the OFBiz community and project.

***&quot;This feature became so easy to use that even in preproduction or integration environments we use it daily to impersonate specific configured userlogin without trying to remember the password... It's implemented in a very basic way;&nbsp; a new permission is created and can be granted to an authorized user, that will be offered a way to select a userlogin to impersonate.&quot;*** <br>

If you would like try the new impersonate feature then it is available here:&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10515" rel="noreferrer" target="_blank">OFBIZ-10515</a>

Thanks very much to Gil Portenseigne for contributing this feature to OFBiz.

  <p> </p>

## Inventory Allocation Planning

Also during this month, the community discussed a proposal to provide a feature to allocate available inventory and any future supply in a more practical way amongst existing customers orders by considering different factors like estimated delivery dates, order priority, customer preference etc.

Currently in OFBiz, as part of the inventory reservation flow, inventory gets reserved for an order&nbsp;based on the reservation algorithm that is specified e.g. First in First Out (FIFO,) Last in First Out (LIFO)&nbsp; etc. Sometimes,&nbsp;the fulfillment cycle of the order takes too long, or due to some unexpected circumstances, the order holds the inventory allocation for a long time. In such scenarios, inventory availability becomes one of the major bottlenecks in fulfilling the other sales orders and businesses often are short supplied against their actual demand.

This modification will help resolve this issue. You can find out more details about this proposal, including design notes and current progress in Jira <a href="https://issues.apache.org/jira/browse/OFBIZ-10518" rel="noreferrer" target="_blank">OFBIZ-10518</a>

A big thank you to Deepak Nigam for the proposal and to everyone who contributed ideas and feedback.

  <p> </p>

## New features and improvements

Functional enhancements and improvements as well as updates of third-party libraries and source code refactoring:

### Framework

- Factorizes and refactors filtering of duplicated &quot;use-when&quot; fields in &quot;FormRenderer&quot; ([OFBIZ-10502](https://issues.apache.org/jira/browse/OFBIZ-10502)).
- Refactors <tt>FormRenderer::getFieldListsByPosition</tt> ([OFBIZ-10503](https://issues.apache.org/jira/browse/OFBIZ-10503)).
- Refactores the MapContext object with multiple improvements ([OFBIZ-10485](https://issues.apache.org/jira/browse/OFBIZ-10485)). Removes the constructor and factory method &quot;getMapContext&quot; as it is redundant and does not add any value - Replaces manual for-loop for collection walking in multiple methods with simple stream calls applied declaratively with less noise in the code. - Fully removed the ListSet custom data structure with as that data structure did not serve any meaningful purpose and it is always better to rely on the java builtin data structures where possible. Construction was replaced with a HashSet instead.
- Uses the stream API in FormRenderer ([OFBIZ-10505](https://issues.apache.org/jira/browse/OFBIZ-10505)).
- Refactos MapContext and MapStack further ([OFBIZ-10485](https://issues.apache.org/jira/browse/OFBIZ-10485)). Renames stackList to contexts (the data structure holding the context Deque) . Refactors the size function to utilize streams to sum all keys. Implements a function &quot;entryStream()&quot; that returns a stream of all keys in the correct sequential order and utilizes this function in multiple functions for iterating over the keys including &quot;containsValue&quot;, &quot;values&quot; and &quot;entrySet&quot;. Re-designs the get functions of the context map to use a generic function with a functional interface &quot;withMapContainingKey&quot;.
- Removes all unnecessary boxing and unboxing in Java classes ([OFBIZ-10504](https://issues.apache.org/jira/browse/OFBIZ-10504)).
- Adds the missing ASL2 license.
- Disables DTDs for XML-RPC requests ([OFBIZ-10509](https://issues.apache.org/jira/browse/OFBIZ-10509)). Disables any doctype declarations in XML-RPC requests to OFBiz to enhance performance and security.
- Renders different HTML container types with ScreenRenderer ([OFBIZ-10495](https://issues.apache.org/jira/browse/OFBIZ-10495)).
- Replaces #assign with #local in all the ftl macros ([OFBIZ-10516](https://issues.apache.org/jira/browse/OFBIZ-10516)).
- Uses input type=submit for form submission ([OFBIZ-10482](https://issues.apache.org/jira/browse/OFBIZ-10482)).
- Changes font Title to match with the initial implementation ([OFBIZ-10513](https://issues.apache.org/jira/browse/OFBIZ-10513)).
- Enhances Main menu ([OFBIZ-10521](https://issues.apache.org/jira/browse/OFBIZ-10521)).
- Introduces a new favicon ([OFBIZ-10522](https://issues.apache.org/jira/browse/OFBIZ-10522)).
- Removes org.apache.tomcat.util.net.secure\_protocol\_version from json output ([OFBIZ-10443](https://issues.apache.org/jira/browse/OFBIZ-10443)) and ads it to ignoreAttrs.
- Adds method attribute to request-map to ensure that a uri can be called GET or POST only ([OFBIZ-10438](https://issues.apache.org/jira/browse/OFBIZ-10438)).
- Removes checks to store only 250 characters of URL in VisitHandler.getVisit() &amp; ServerHitBin.saveHit() ([OFBIZ-10508](https://issues.apache.org/jira/browse/OFBIZ-10508)).
- Adds support to calculate deposit price as well while creating shopping cart item ([OFBIZ-7482](https://issues.apache.org/jira/browse/OFBIZ-7482)).
- Refactors ContactMechWorker.get[Entity]ContactMechValueMaps function to improve processing speed ([OFBIZ-10514](https://issues.apache.org/jira/browse/OFBIZ-10514)).
- Improves NL labels in OrderUiLabels.xml ([OFBIZ-10543](https://issues.apache.org/jira/browse/OFBIZ-10543)).
- Removes extra unused code to set the fromDate to avoid duplicate PK in case of mysql. As mysql added support to store Fractional Seconds in Time Values, this has been fixed under ([OFBIZ-9337](https://issues.apache.org/jira/browse/OFBIZ-9337)).
- Removes comment from ServerHitBin.java related to mysql Fractional Seconds related issue, this issue fixed under ([OFBIZ-9337](https://issues.apache.org/jira/browse/OFBIZ-9337)).

## Bugfixes

Functional and technical bugfixes:

### Framework

- File transfer management with communicationEvent and new contactMech FTP\_ADDRESS ([OFBIZ-10245](https://issues.apache.org/jira/browse/OFBIZ-10245))
- Initial set of hasLoggedOut flag when logging in ([OFBIZ-10506](https://issues.apache.org/jira/browse/OFBIZ-10506)).
- Use of layered-modal with parameter does not work ([OFBIZ-10511](https://issues.apache.org/jira/browse/OFBIZ-10511)).
- Update Apache Tomcat to 9.0.10 because of CVE-2018-8037 ([OFBIZ-10517](https://issues.apache.org/jira/browse/OFBIZ-10517)). If an async request was completed by the application at the same time as the container triggered the async timeout, a race condition existed that could result in a user seeing a response intended for a different user. An additional issue was present in the NIO and NIO2 connectors that did not correctly track the closure of the connection when an async request was completed by the application and timed out by the container at the same time.
- Code duplication in main rainbowstone less file.
- Build scripts for plugins are not executing.
- New Payment Group can not be created ([OFBIZ-10523](https://issues.apache.org/jira/browse/OFBIZ-10523)).
- Fix Default or Empty Catch block in Java and Groovy files ([OFBIZ-8341](https://issues.apache.org/jira/browse/OFBIZ-8341)).
- Escape null pointer exception on ShipmentWorker.calcPackageWeight when a product haven't a productWeight value.
- Add method attribute to request-map to controll a uri can be called GET or POST only ([OFBIZ-10438](https://issues.apache.org/jira/browse/OFBIZ-10438)).

### Plugins

- Not able to select Virtual Product in WebPos ([OFBIZ-7719](https://issues.apache.org/jira/browse/OFBIZ-7719)).
- Party Search doesn't consider Billing Address and Shipping Address checkbox in WebPos ([OFBIZ-7709](https://issues.apache.org/jira/browse/OFBIZ-7709)).
- Could not find simple-method createWorkEffortSkillStandard as it was called as simple method and it is converted to entity-auto service ([OFBIZ-10524](https://issues.apache.org/jira/browse/OFBIZ-10524)).
- Search in Ecommerce no longer works ([OFBIZ-10531](https://issues.apache.org/jira/browse/OFBIZ-10531)).
- Java object rendering on billing section of one page anonymous checkout process ([OFBIZ-10425](https://issues.apache.org/jira/browse/OFBIZ-10425)).
