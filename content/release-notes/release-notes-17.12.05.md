---
layout: page
title: Release Notes 17.12.05
description: downloads
---
Apache OFBiz&reg; 17.12.05, released on January 2021, is the fifth and final release of the 17.12 series, that has been stabilized since December 2017.

## Sub-task

- [[OFBIZ-11840](https://issues.apache.org/jira/browse/OFBIZ-11840)] - Reflected XSS in content component
- [[OFBIZ-11871](https://issues.apache.org/jira/browse/OFBIZ-11871)] - Server-Side Template Injection using Static
- [[OFBIZ-12055](https://issues.apache.org/jira/browse/OFBIZ-12055)] - Prevent possible post-auth RCE from webtools/control/ProgramExport
- [[OFBIZ-12057](https://issues.apache.org/jira/browse/OFBIZ-12057)] - Prevent arbitary file write using webtools/control/EntitySQLProcessor.
- [[OFBIZ-12080](https://issues.apache.org/jira/browse/OFBIZ-12080)] - Secure the uploads
- [[OFBIZ-12096](https://issues.apache.org/jira/browse/OFBIZ-12096)] - Post-auth XSS vulnerability at catalog/control/EditProductPromo
- [[OFBIZ-12098](https://issues.apache.org/jira/browse/OFBIZ-12098)] - Make ruleName field in PriceForms.xml#AddPriceRules safe

## Bug

- [[OFBIZ-7249](https://issues.apache.org/jira/browse/OFBIZ-7249)] - Error on removing scrum members
- [[OFBIZ-8302](https://issues.apache.org/jira/browse/OFBIZ-8302)] - Sorting of lists generates undesired results
- [[OFBIZ-9687](https://issues.apache.org/jira/browse/OFBIZ-9687)] - Bug in order manager main page when using Arab language
- [[OFBIZ-9901](https://issues.apache.org/jira/browse/OFBIZ-9901)] - Unable to create event in SFA component
- [[OFBIZ-10302](https://issues.apache.org/jira/browse/OFBIZ-10302)] - Display/functionality improvement in findParty of OOTB regarding classification group
- [[OFBIZ-10532](https://issues.apache.org/jira/browse/OFBIZ-10532)] - Default value flags not working for configurable and variant products at the time of order entry
- [[OFBIZ-10536](https://issues.apache.org/jira/browse/OFBIZ-10536)] - Giant Widget with variant explosion: a &quot;Select Unit of Measure&quot; dropdown box appears with no reason.
- [[OFBIZ-10669](https://issues.apache.org/jira/browse/OFBIZ-10669)] - Getting Insecure connection error while navigating from product link
- [[OFBIZ-10834](https://issues.apache.org/jira/browse/OFBIZ-10834)] - Uploading image to data resource
- [[OFBIZ-11168](https://issues.apache.org/jira/browse/OFBIZ-11168)] - Issue in creating promotion action
- [[OFBIZ-11582](https://issues.apache.org/jira/browse/OFBIZ-11582)] - Required fields for party content upload are not checked
- [[OFBIZ-11734](https://issues.apache.org/jira/browse/OFBIZ-11734)] - View Image button on order view page fails to render the image
- [[OFBIZ-11735](https://issues.apache.org/jira/browse/OFBIZ-11735)] - Product link on Order confirmation page is not responding
- [[OFBIZ-11788](https://issues.apache.org/jira/browse/OFBIZ-11788)] - Edit button(s) are shown for shipments received or shipped
- [[OFBIZ-11838](https://issues.apache.org/jira/browse/OFBIZ-11838)] - One page checkout is broken because of ordermgr::getAssociatedStateList
- [[OFBIZ-11881](https://issues.apache.org/jira/browse/OFBIZ-11881)] - Wrong image name in css
- [[OFBIZ-11906](https://issues.apache.org/jira/browse/OFBIZ-11906)] - product summary looks bad in the promotion products list
- [[OFBIZ-11910](https://issues.apache.org/jira/browse/OFBIZ-11910)] - product summary cards don&#39;t have uniform height
- [[OFBIZ-11920](https://issues.apache.org/jira/browse/OFBIZ-11920)] - Distorted Final Checkout Review page when Credit card is selected as Payment option
- [[OFBIZ-11971](https://issues.apache.org/jira/browse/OFBIZ-11971)] - Incorrect data for InvoiceItemTypeMap and ReturnItemTypeMap
- [[OFBIZ-11972](https://issues.apache.org/jira/browse/OFBIZ-11972)] - wrong quote marks
- [[OFBIZ-11976](https://issues.apache.org/jira/browse/OFBIZ-11976)] - svg files not removed on clean
- [[OFBIZ-11977](https://issues.apache.org/jira/browse/OFBIZ-11977)] - multiflex css is linking to wrong location
- [[OFBIZ-11978](https://issues.apache.org/jira/browse/OFBIZ-11978)] - &quot;cart&quot; should be &quot;card&quot;
- [[OFBIZ-11984](https://issues.apache.org/jira/browse/OFBIZ-11984)] - MessagingException in sendShipmentScheduledNotification service
- [[OFBIZ-11993](https://issues.apache.org/jira/browse/OFBIZ-11993)] - display/selection of unit of measure is broken/plugins
- [[OFBIZ-12014](https://issues.apache.org/jira/browse/OFBIZ-12014)] - Error while decoding url parameters with percent character
- [[OFBIZ-12019](https://issues.apache.org/jira/browse/OFBIZ-12019)] - variant product selection trashes image
- [[OFBIZ-12023](https://issues.apache.org/jira/browse/OFBIZ-12023)] - Label issue on List Companies page
- [[OFBIZ-12026](https://issues.apache.org/jira/browse/OFBIZ-12026)] - Hyperlink title under form widget doesn&#39;t support character encoding for special characters
- [[OFBIZ-12039](https://issues.apache.org/jira/browse/OFBIZ-12039)] - Flexible reports use an old noNamespaceSchemaLocation
- [[OFBIZ-12044](https://issues.apache.org/jira/browse/OFBIZ-12044)] - Issue: Displaying company and product information at product backlog, subcomponent of Scrum Application
- [[OFBIZ-12045](https://issues.apache.org/jira/browse/OFBIZ-12045)] - Single product tile is displayed on one row in product search
- [[OFBIZ-12050](https://issues.apache.org/jira/browse/OFBIZ-12050)] - NotSerializableException using uploadPartyContentFile service
- [[OFBIZ-12066](https://issues.apache.org/jira/browse/OFBIZ-12066)] - init-gradle-wrapper.sh fails to install wrapper files using wget
- [[OFBIZ-12078](https://issues.apache.org/jira/browse/OFBIZ-12078)] - Remove hardcoded product category on CategoryWorker.getCatalogTopCategory
- [[OFBIZ-12082](https://issues.apache.org/jira/browse/OFBIZ-12082)] - Unique form names for promo actions
- [[OFBIZ-12087](https://issues.apache.org/jira/browse/OFBIZ-12087)] - Lucene TopScoreDocCollector::create wrong call the 2 in Search.groovy scripts
- [[OFBIZ-12100](https://issues.apache.org/jira/browse/OFBIZ-12100)] - Gradle build of 17.12.04 crashes on Centos 8
- [[OFBIZ-12101](https://issues.apache.org/jira/browse/OFBIZ-12101)] - partymgr fails to upload image

## Improvement

- [[OFBIZ-9254](https://issues.apache.org/jira/browse/OFBIZ-9254)] - Inconsistent String Comparisons
- [[OFBIZ-9978](https://issues.apache.org/jira/browse/OFBIZ-9978)] - Upgrade jQuery 1.11.0 to jQuery 3.2.1
- [[OFBIZ-11882](https://issues.apache.org/jira/browse/OFBIZ-11882)] - Rename a few map files
- [[OFBIZ-11891](https://issues.apache.org/jira/browse/OFBIZ-11891)] - Hard coded label in ProductUomDropDownOnly
- [[OFBIZ-11892](https://issues.apache.org/jira/browse/OFBIZ-11892)] - Add missing jGrowl map file
- [[OFBIZ-11950](https://issues.apache.org/jira/browse/OFBIZ-11950)] - Add a title to Javadoc overview
- [[OFBIZ-12029](https://issues.apache.org/jira/browse/OFBIZ-12029)] - Handle special characters like single quote in Freemarker template (prevent encoding)
- [[OFBIZ-12067](https://issues.apache.org/jira/browse/OFBIZ-12067)] - Update IND Geo data as per 2020-11-24 notification
- [[OFBIZ-12085](https://issues.apache.org/jira/browse/OFBIZ-12085)] - Gradle logging hygiene
