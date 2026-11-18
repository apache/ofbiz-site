---
layout: post
title: 'Apache OFBiz News - July 2018 '
date: '2018-08-28T07:40:10+00:00'
permalink: apache-ofbiz-news-july-2018
---
## Apache OFBiz News July 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about our ongoing refactoring work, we discuss managing Tax and VAT in OFBiz, we consider the impacts of the change of Oracle's Java release model, our community continues to come with suggestions to improve the codebase and OFBiz is Super Healthy!

<!--more-->

## Ongoing Refactoring

The work to re-factor and improve the OFBiz framework is continuing. During July our development list included a some detailed discussions about ways to clean up and improve the existing code. A special mention goes to contributor Mathieu Lirzin who has been very active and has currently provided patches for quite a few different JIRA issues.

- <a href="https://issues.apache.org/jira/browse/OFBIZ-10411" target="_blank" rel="noopener">OFBIZ-10411- XML schemas should use predefined boolean type</a>
- <a href="https://issues.apache.org/jira/browse/OFBIZ-10488" target="_blank" rel="noopener">OFBIZ-10488 - Replace Callable objects with lambda expressions.</a>
- <a href="https://issues.apache.org/jira/browse/OFBIZ-10450" target="_blank" rel="noopener">OFBIZ-10450 - Extract verification of certificates in ‘RequestHandler’</a>
- <a href="https://issues.apache.org/jira/browse/OFBIZ-10474" target="_blank" rel="noopener">OFBIZ-10474 - Remove duplicated code when running login/logout events</a>
- <a href="https://issues.apache.org/jira/browse/OFBIZ-10452" target="_blank" rel="noopener">OFBIZ-10452 - Remove unused ‘RequestHandler::doRequest’ m</a>

Also normally a Jira ticket contains a single patch file but as refactoring sometimes become complex, 13 patches have so far been submitted for one Jira ticket! ( See <a href="https://issues.apache.org/jira/browse/OFBIZ-10485" target="_blank" rel="noopener">OFBIZ-10485 - Refactor MapContext</a>). Thanks very much for your contributions Mathieu and also everyone from the community that is working on making OFBiz better!

If you are interested in helping us with the continued refactoring work then please post a message to our dev mailing list.

## Managing VAT and Tax Exemptions

Another discussion topic that was raised this month was about how <a href="https://s.apache.org/xGbT" target="_blank" rel="noopener">VAT and tax exemptions can be managed in OFBiz.</a>. There are many tax rules about how taxes should be calculated and the discussion was focussed on European cross border rules for business and non business customers. The discussion highlighted that we may need to do some additional analysis and work to ensure that OFBiz can be configured to manage these specific tax rules correctly.

The discussion also highlighted that the flags in Tax Authorities and Product setup used to include or exclude VAT were not functioning as expected. A JIRA <a href="https://issues.apache.org/jira/browse/OFBIZ-10500" target="_blank" rel="noopener">OFBIZ-10500 - Tax calculation incorrect when creating orders .</a> has been created to manage the investigation and any work to correct the issues found.

If you are interested in contributing or helping us produce a solution for managing VAT and Tax Exemptions then please feel free to join any discussions on the JIRA ticket or the dev mailing list.

## Suggested OFBiz Improvements

We are always looking for ways to improve OFBiz and this month several members from our community came up with some suggestions. See below for detail of proposed enhancements:

- <a href="https://s.apache.org/QHWi" target="_blank" rel="noopener">Proposal to add SMS integration for OFBiz</a>
- <a href="https://s.apache.org/FBPg" target="_blank" rel="noopener">Inventory Cycle Count Gap</a>
- <a href="https://s.apache.org/NkSe" target="_blank" rel="noopener">Suggested improvement for Manufacturing Workflow</a>

Remember that improvements can be suggested by anyone in the community, so if you are using OFBiz and have a suggestion for improvement then please post the details about your idea on our mailing list.

## Oracle Java Release Model Changes and Potential Consequences for OFBiz

Another discussion topic raised this month was related to changes in the release model for Oracle Java. Oracle is changing from a feature based model to a time based one. One of the potential negative aspects of this is that they may not continue to release patches for older versions once a new Java release has been published. This affects the project because we may have to look at changing the support for our OFBiz releases to make sure they are aligned with the Oracle model.

Options for using OpenJDK rather than Oracle Java are also being disucussed. If you have an opinion or would like to be involved in the discussion then you can find out more on the <a href="https://s.apache.org/zLah" target="_blank" rel="noopener">dev mailing list thread.</a>

## OFBiz is Super Healthy!

OFBiz has a been given a super healthy classification of 10. Projects are assessed using a range of criteria including the mailing list activity, committers activity and also how frequently new releases are made. Together it can give a high level picture of how the project community is working and interacting. The scores ranges from -10 to +10 and OFBiz is currenty has a 10.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Resolves shipping address from Invoice ([OFBIZ-10249](https://issues.apache.org/jira/browse/OFBIZ-10249)). In some country (like european) you need to indicate on your sales invoice where you ship the finish good product related. To help this case, a new worker function (InvoiceWorker.getShippingAddress) was added to found information from an invoice and improve the generic EditInvoice.groovy and the invoice ftl template to display it as example. To homogenize postal address displaying with order the subscreen PartyScreens.xml#postalAddressPdfFormatter was used on the invoice ftl template.
- Converts CategoryServices.xml from mini lang to groovy ([OFBIZ-10031](https://issues.apache.org/jira/browse/OFBIZ-10031)).
- Adds a mechanism to prevent the usage of EntitySyncRemove ([OFBIZ-10008](https://issues.apache.org/jira/browse/OFBIZ-10008)). No configurations is available to disable usage of EntitySyncRemove. And it's creating problems when having a large database and frequent delete operations. saveEntitySyncRemoveInfo is used to create EntitySyncRemove records in GenericDelegator.removeValue() and removeByPrimaryKey(). This adds a mechanism to prevent the usage of EntitySyncRemove by adding a property in general.properties file used to configure in entityengine.xml
- Uses SessionStorage to call setLocaleFromBrowser only once per session ([OFBIZ-10471](https://issues.apache.org/jira/browse/OFBIZ-10471)).
- Improve Dutch UiLabels in Accounting component ([OFBIZ-10363](https://issues.apache.org/jira/browse/OFBIZ-10363)).
- Uses 'buttontext' styling for the index of service engine ([OFBIZ-10467](https://issues.apache.org/jira/browse/OFBIZ-10467)). To improve the consitancy in the look of OFBiz, the style buttontext can be added for the alphabetical index of the service engine main page. This makes the buttons look like the ones that are already there for the entity engine main page.
- Aligns the input fields at catalog/control/main ([OFBIZ-10454](https://issues.apache.org/jira/browse/OFBIZ-10454))
- Renames the misnamed setUserLocale.js to setUserTimeZone.js ([OFBIZ-10472](https://issues.apache.org/jira/browse/OFBIZ-10472)). At the same time renames setLocaleFromBrowser to SetTimeZoneFromBrowser everywhere it's needed.
- Deletes existing party contact mechs before new one are created ([OFBIZ-10396](https://issues.apache.org/jira/browse/OFBIZ-10396)).
- Improves Order layout ([OFBIZ-10331](https://issues.apache.org/jira/browse/OFBIZ-10331)).
- Standardise layout for Party ([OFBIZ-10334](https://issues.apache.org/jira/browse/OFBIZ-10334)).
- Handles File transfer management with communicationEvent and new contactMech FTP\_ADDRESS ([OFBIZ-10245](https://issues.apache.org/jira/browse/OFBIZ-10245)).
- Sanitizes the output of XML-RPC when errors are reported ([OFBIZ-10848](https://issues.apache.org/jira/browse/OFBIZ-10848)).
- Removes the usage of deprecated language attribute from script tag ([OFBIZ-10491](https://issues.apache.org/jira/browse/OFBIZ-10491)).
- Refactors MapContext by removing unused code ([OFBIZ-10485](https://issues.apache.org/jira/browse/OFBIZ-10485)).
- Adds missing @override annotations in MapContext ([OFBIZ-10485](https://issues.apache.org/jira/browse/OFBIZ-10485)).
- Refactors the MapContext to use a Deque instead of List interface ([OFBIZ-10485](https://issues.apache.org/jira/browse/OFBIZ-10485)).
- Uses application/javascript instead of text/javascript ([OFBIZ-10492](https://issues.apache.org/jira/browse/OFBIZ-10492)). Also updates compressibleMimeType list.
- Renames deletePartyContactMechPurpose\* services to expirePartyContactMechPurpose\* ([OFBIZ-10398](https://issues.apache.org/jira/browse/OFBIZ-10398)).
- Verifies contact mech details (expired or not) before copying it to new order while re-ordering ([OFBIZ-9544](https://issues.apache.org/jira/browse/OFBIZ-9544)).
- Uses input type=submit instead of anchor and javascript code to submit form where applicable ([OFBIZ-10482](https://issues.apache.org/jira/browse/OFBIZ-10482)).
- Adds the option to update Facility Party Role on Edit Facility Party Role screen ([OFBIZ-9085](https://issues.apache.org/jira/browse/OFBIZ-9085)).

## Bugfixes

Functional and technical bugfixes:

- &lt;#if containerId?has\_content&gt; id=''&lt;/#if&gt; is missed in renderFormOpen ([OFBIZ-10437](https://issues.apache.org/jira/browse/OFBIZ-10437))
- Framework webapp freemarkerTransform.properties has dependency on product component ([OFBIZ-10463](https://issues.apache.org/jira/browse/OFBIZ-10463))
- GetLocaleList call can provide duplicate results ([OFBIZ-10458](https://issues.apache.org/jira/browse/OFBIZ-10458))
- Upper case styling for buttontext in Tomahawk theme causing wrong behaviour for alphabetical index of the service engine page ([OFBIZ-10473](https://issues.apache.org/jira/browse/OFBIZ-10473))
- Invalid content was found starting with element 'field'. ([OFBIZ-10391](https://issues.apache.org/jira/browse/OFBIZ-10391))
- Not able to expire the rate amount and an error is displayed in Workeffort ([OFBIZ-10114](https://issues.apache.org/jira/browse/OFBIZ-10114))
- Possible NullPointerException in getProductCategoryContentAsText() ([OFBIZ-9164](https://issues.apache.org/jira/browse/OFBIZ-9164))
- Missing Import in CmsEditAddPrep.groovy ([OFBIZ-10475](https://issues.apache.org/jira/browse/OFBIZ-10475))
- Not able to delete PartyRate ([OFBIZ-10483](https://issues.apache.org/jira/browse/OFBIZ-10483))
- compressableMimeType is not a valid attribute of apache http connector ([OFBIZ-10487](https://issues.apache.org/jira/browse/OFBIZ-10487))

## Documentation

- Adds content for Performance Reviews, Employee Benefits and Training to HR introduction document ([OFBIZ-10256](https://issues.apache.org/jira/browse/OFBIZ-10256)).
