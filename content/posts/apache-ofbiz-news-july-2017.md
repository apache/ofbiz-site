---
layout: post
title: 'Apache OFBiz News - July 2017 '
date: '2017-08-14T14:12:41+00:00'
permalink: apache-ofbiz-news-july-2017
---
## Apache OFBiz News July 2017

Welcome to our regular monthly round-up of OFBiz news. This month we have news about the end of life for two unreleased branches, the work going on to re-organise OFBiz application data, we start a discussion on ways to improve the OFBiz user interface, one of our contributors creates an OFBiz sanity check and new contributors joined the OFBiz community.

<!--more-->

## End of Support for Unreleased Branches 14.12 and 15.12

When the project changed the build system from Ant to Gradle, two unreleased branches 14.12 and 15.12 had already been created. These unreleased branches still use Ant as the build system and contain the complete codebase including the specialpurpose components. The community agreed to keep these branches available for developers and service providers so that they could continue to support their client base.

<p></p>

The support period for backporting bug fixes to these unreleased branches was extended to be longer than normal to give users more time to transition to 16.11. The deadline for supporting 14.12 and 15.12 was the end of July 2017.

<p></p>

This means that bug fixes will not automatically be backported to these unreleased branches and will be handled on a case by case basis. You will still be able to get help, advice and support on the mailing lists regarding these branches but we will now be encouraging users to look at upgrading to the 16.11 release.

## Re-Organising OFBiz Application Data

This month there was a <a href="https://s.apache.org/GpKc" target="_blank" rel="noopener">detailed discussion</a> about simplifying the OFBiz data files and making it easier to understand the dependencies. A lot of setup is done via the demo data files and when an issue occurs in data loading, it can sometimes be difficult to debug and track down.

<p></p>

By re-organising and standardising the structure of the folders and files, we can also review and clean up any dependencies. <a href="https://issues.apache.org/jira/browse/OFBIZ-9501" target="_blank" rel="noopener">A Jira has been created</a>  and we are actively looking for volunteers from the community to help with this effort. If you would like to help out with this task then please add your patch or comments to the Jira issue.

## Improving the OFBiz User Interface

A big discussion topic this month was related to <a href="https://s.apache.org/qu8i" target="_blank" rel="noopener">improving the OFBiz user interface.</a> This subject has also been raised in the past but now there is a new effort focussed on getting something done that could really improve the user's perception of OFBiz.

<p></p>

Nicolas Malin is currently doing some work on this and we look forward to seeing the result.

## OFBiz Sanity Test

Is OFBiz a little crazy? Probably not, but during this month one of our OFBiz contributors Sanjay Yadav created an OFBiz Sanity Check document to help users run through a list of basic OFBiz tests. Details of <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Sanity+Test" target="_blank" rel="noopener">Sanity Test document</a> can be found on the wiki. Thanks very much to Sanjay for putting this together and sharing it with the community.

<p></p>

## New OFBiz Contributors

During the month of July-2017, OFBiz community welcomed 22 new open source contributors who filed ICLA to ASF. OFBiz contributors list can be found <a href="https://cwiki.apache.org/confluence/x/AIRMAg" target="_blank" rel="noopener">here</a>.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Fix defects in the payment package reported by the code analysis tool FindBugs ([OFBIZ-9451](https://issues.apache.org/jira/browse/OFBIZ-9451)) The patch contains miscellaneous improvements to the code base such as setting variables to final to avoid malicious changes from outside code, using stringBuilders for efficiency, removing unnecessary null queries, and exchanging inefficient Boolean constructers with available functions.
- Replace hard-coded instances of "IN" with ModelService.IN\_PARAM ([OFBIZ-9434](https://issues.apache.org/jira/browse/OFBIZ-9434))
  - Add new constraints for "INOUT" modelservice param.
  - Update remaining occurrences for hard-coded "IN", "OUT" and "INOUT" ([OFBIZ-9434](https://issues.apache.org/jira/browse/OFBIZ-9434))
- Improve further inconsistent String Comparisons ([OFBIZ-9254](https://issues.apache.org/jira/browse/OFBIZ-9254))
- Move certain uiLabels from ProductUiLabels.xml to CommonEntityLabels.xml ([OFBIZ-9408](https://issues.apache.org/jira/browse/OFBIZ-9408)) Adapt ProductUiLabels to the pattern of other labels of the "Uom" entity: &lt;entityName&gt;.&lt;fieldName&gt;.&lt;PrimaryKey&gt;.
- Use serviceUtil() in place of hard-coded error/success messages ([OFBIZ-9466](https://issues.apache.org/jira/browse/OFBIZ-9466))
- Set autocomplete to "off" for all the password fields to improve security ([OFBIZ-9471](https://issues.apache.org/jira/browse/OFBIZ-9471))
- Convert AgreementServices.xml from mini-lang to groovyDSL ([OFBIZ-9460](https://issues.apache.org/jira/browse/OFBIZ-9460))
- Correct the Service implementation of deletePayHistory ([OFBIZ-9111](https://issues.apache.org/jira/browse/OFBIZ-9111)) Use entity auto for deletePayHistory service, also add new service to expirePayHistory and call expirePayHistory from UI.
- Remove cancelAgreement service and add expireAgreement entity-auto service ([OFBIZ-9480](https://issues.apache.org/jira/browse/OFBIZ-9480))
- Improve EntityQuery.queryOne() function to resolve a record by auto matching the primary key on a given context ([OFBIZ-9447](https://issues.apache.org/jira/browse/OFBIZ-9447)) This improvement simulates the minilang element &lt;entity-one entity-name=Product value-name=product/&gt; to help the minilang migration to groovy.
  - With new groovyDSL for queryOne, simplify groovy rate amount services
- Use FlexibleLocation.resolveLocation() instead of hard-coded path ([OFBIZ-9479](https://issues.apache.org/jira/browse/OFBIZ-9479))
- Improve groovyDSL: call makeValidContext when running a service ([OFBIZ-9523](https://issues.apache.org/jira/browse/OFBIZ-9523)) When calling a groovy service, all paramters must be checked for the service call. The Improvement simplifies this dsl with an automatic parameters check so that the context can be directly specified.
- Improvements in entity definitions and services ([OFBIZ-8273)](https://issues.apache.org/jira/browse/OFBIZ-8273)
  - Lot ([OFBIZ-8273)](https://issues.apache.org/jira/browse/OFBIZ-8273)
  - ShipmentItemBilling ([OFBIZ-8462](https://issues.apache.org/jira/browse/OFBIZ-8462))
  - CommEventContentAssoc ([OFBIZ-8843](https://issues.apache.org/jira/browse/OFBIZ-8843))
  - OrderHeader ([OFBIZ-9457](https://issues.apache.org/jira/browse/OFBIZ-9457))
- Move all data in applications to the datamodel component ([OFBIZ-9501](https://issues.apache.org/jira/browse/OFBIZ-9501)) This is the first of many more commits to move all data from applications to the data model component to centralize both entity definitions and the data supporting it. This commit partially moves data from PartyTypeData.xml file to the newly created central file PartySeedData.
- Integrating google phone number library for validating telecom numbers ([OFBIZ-9358](https://issues.apache.org/jira/browse/OFBIZ-9358))

### Plugins

- Improve inconsistent String Comparisons ([OFBIZ-9254](https://issues.apache.org/jira/browse/OFBIZ-9254))
  - in ftl-file of the ecommerce plugin
  - in ftl-file of the ebay plugin
- Set autocomplete to "off" for all the password field to improve security ([OFBIZ-9471](https://issues.apache.org/jira/browse/OFBIZ-9471))

## Bugfixes

Functional and technical bugfixes:

### Framework

- ContentWorker#findAlternateLocaleContent does not use fallback locale. ([OFBIZ-9445](https://issues.apache.org/jira/browse/OFBIZ-9445)) If no alternate locale content for the requested locale is found, search for an alternate locale content with the locale configured in general.properties at locale.properties.fallback. If this one isn't found either we can still return the original content.
- Missing secure port in URLs when sending mails ([OFBIZ-9449](https://issues.apache.org/jira/browse/OFBIZ-9449)) This issue came up after [OFBIZ-9206](https://issues.apache.org/jira/browse/OFBIZ-9206) where the value of port.https in url.properties was removed.
- Required check missing for supplier product id and last price on AddProductSupplier page ([OFBIZ-9455](https://issues.apache.org/jira/browse/OFBIZ-9455))
- Wrong price overriding when adding items to cart ([OFBIZ-7263](https://issues.apache.org/jira/browse/OFBIZ-7263)) Changing the item quantity in cart set the flag isModifiedPrice true which conflicted with the updatePrice condition and hence price recalculation was not being triggered.
- Adding a gift certificate in purchaseOrder throws exception ([OFBIZ-9438](https://issues.apache.org/jira/browse/OFBIZ-9438))
- Accounting quantity transfer is zero while transferring inventory from one facility to another ([OFBIZ-9464](https://issues.apache.org/jira/browse/OFBIZ-9464))
- Incorrect MimeTypeId value shown if the form is submitted ([OFBIZ-9344](https://issues.apache.org/jira/browse/OFBIZ-9344))
- UI issue in ATP/QOH table on Create Purchase Order screen ([OFBIZ-9468](https://issues.apache.org/jira/browse/OFBIZ-9468))
- "ACCTG trans entries pdf" link on invoiceOverview does not work ([OFBIZ-6774](https://issues.apache.org/jira/browse/OFBIZ-6774)) This is a link to a birt component which was not included in the 13.07 release.
- Insufficient checking of checkOutPaymentId in CheckOutEvents.getSelectedPaymentMethods ([OFBIZ-9404](https://issues.apache.org/jira/browse/OFBIZ-9404))
- WorkEffort shows error on adding party with specific role to Timesheet ([OFBIZ-9317](https://issues.apache.org/jira/browse/OFBIZ-9317))
- The copyAgreement service fails ([OFBIZ-9143](https://issues.apache.org/jira/browse/OFBIZ-9143))
- Order page shows widget exceptions ([OFBIZ-9481](https://issues.apache.org/jira/browse/OFBIZ-9481))
- Uploading images at catalog/control/addImageForProduct does not work ([OFBIZ-9259](https://issues.apache.org/jira/browse/OFBIZ-9259)) Delegator was fetched from the context instead of the DispatchContext and thus was throwing NPE while running the EntityUtilProperties.getPropertyValue().
- Adding condition in price rule on "Role Type" showing incorrect result ([OFBIZ-7275](https://issues.apache.org/jira/browse/OFBIZ-7275)) The issue exists because in roleTypeList there are multiple occurrences of substring "CUSTOMER". The existing check was just checking the occurrence of a substring in the string and found this value more than once in the list so the last option gets selected. Applied equality check to find the exact match.
- MRP generates duplicate requirements when items are initially under minimum quantity and have with pending approved purchase orders. ([OFBIZ-9526](https://issues.apache.org/jira/browse/OFBIZ-9526)) With this change the requirements to replenish the inventory up to the minimum stock quantity is generated, if needed, only when the first demand event is processed or at the end.
- Order contact mechs are not copied over while re-ordering an order ([OFBIZ-9253](https://issues.apache.org/jira/browse/OFBIZ-9253))

### Plugins

- Wrong repository links on FormWidgetExamples page ([OFBIZ-9494](https://issues.apache.org/jira/browse/OFBIZ-9494)) Update the URL path and instead of changing it at all the places, introduced a variable.
- Uploading content to a product email in SCRUM component is not working ([OFBIZ-9524](https://issues.apache.org/jira/browse/OFBIZ-9524)) Fix typo in form name in the javascript function on the button.
- Error on "Edit backlog" for a product in SCRUM component ([OFBIZ-9531](https://issues.apache.org/jira/browse/OFBIZ-9531)) Add missing import for GenericEntityException and define customer and items list at right place to make it available.
