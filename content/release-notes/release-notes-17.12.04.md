---
layout: page
title: Release Notes 17.12.04
description: downloads
---
Apache OFBiz&reg; 17.12.04, released in 2020-07-13, is the fourth release of the 17.12 series, that has been stabilized since December 2017.

## Sub-task

- [[OFBIZ-11709](https://issues.apache.org/jira/browse/OFBIZ-11709)] - Prevent FreeMarker Template Injection (SSTI)
- [[OFBIZ-11716](https://issues.apache.org/jira/browse/OFBIZ-11716)] - Apache OFBiz unsafe deserialization of XMLRPC arguments
- [[OFBIZ-11752](https://issues.apache.org/jira/browse/OFBIZ-11752)] - CLONE - Check embedded Javascript libs vulnerabilities using retire.js
- [[OFBIZ-11836](https://issues.apache.org/jira/browse/OFBIZ-11836)] - IDOR vulnerability in the order processing feature in ecommerce component

## Bug

- [[OFBIZ-6408](https://issues.apache.org/jira/browse/OFBIZ-6408)] - Adding a group order generates an error
- [[OFBIZ-6993](https://issues.apache.org/jira/browse/OFBIZ-6993)] - Cannot find the declaration of element &#39;web-app&#39; in version 3.0 files.
- [[OFBIZ-8459](https://issues.apache.org/jira/browse/OFBIZ-8459)] - InventoryItemStatus is not updated to INV\_PROMISED status while creating sales order for serialized product
- [[OFBIZ-9476](https://issues.apache.org/jira/browse/OFBIZ-9476)] - UI issue in payment lookup.
- [[OFBIZ-9478](https://issues.apache.org/jira/browse/OFBIZ-9478)] - RequestHandlerException in dataResource and fixed asset lookup.
- [[OFBIZ-10538](https://issues.apache.org/jira/browse/OFBIZ-10538)] - Promised Datetime &amp; Current Promised Date values not getting updated in OISGIR Entity
- [[OFBIZ-10539](https://issues.apache.org/jira/browse/OFBIZ-10539)] - Issue with opening a page via bookmark when the user is logged out
- [[OFBIZ-10891](https://issues.apache.org/jira/browse/OFBIZ-10891)] - Send me this every month link is not working in order items section.
- [[OFBIZ-10904](https://issues.apache.org/jira/browse/OFBIZ-10904)] - Creating custom Time Period does not show in party time period
- [[OFBIZ-10975](https://issues.apache.org/jira/browse/OFBIZ-10975)] - Buttons on edit credit card page are shown twice
- [[OFBIZ-11144](https://issues.apache.org/jira/browse/OFBIZ-11144)] - Create Exchange Order button on Return screen is distorted
- [[OFBIZ-11294](https://issues.apache.org/jira/browse/OFBIZ-11294)] - EntityQuery queryCount is throwing error with distinct method
- [[OFBIZ-11312](https://issues.apache.org/jira/browse/OFBIZ-11312)] - DatabaseUtil.getColumnInfo(...) does not retrieve primary keys due to connection-locks
- [[OFBIZ-11356](https://issues.apache.org/jira/browse/OFBIZ-11356)] - FindOrders.ftl: paginateOrderList does not find orders on next page
- [[OFBIZ-11401](https://issues.apache.org/jira/browse/OFBIZ-11401)] - getEntityRefData service has a weird issue
- [[OFBIZ-11573](https://issues.apache.org/jira/browse/OFBIZ-11573)] - Incorrect column alias in EntitySQLProcessor for sql query working with mysql
- [[OFBIZ-11606](https://issues.apache.org/jira/browse/OFBIZ-11606)] - Compound-widget not works with condition
- [[OFBIZ-11633](https://issues.apache.org/jira/browse/OFBIZ-11633)] - PartyProfileContent.js does not work
- [[OFBIZ-11668](https://issues.apache.org/jira/browse/OFBIZ-11668)] - startup-service does not work without runtime-data-id
- [[OFBIZ-11681](https://issues.apache.org/jira/browse/OFBIZ-11681)] - ListParty does not show middleName
- [[OFBIZ-11714](https://issues.apache.org/jira/browse/OFBIZ-11714)] - Issue with redirect queryParameters when the user is logged out
- [[OFBIZ-11745](https://issues.apache.org/jira/browse/OFBIZ-11745)] - plugins in common-theme/webapp/common/js is not monitored by git
- [[OFBIZ-11785](https://issues.apache.org/jira/browse/OFBIZ-11785)] - ViewShipment in facility does not show phone details
- [[OFBIZ-11787](https://issues.apache.org/jira/browse/OFBIZ-11787)] - Overview of shipments shows links to edit shipment. Should point to viewshipment
- [[OFBIZ-11796](https://issues.apache.org/jira/browse/OFBIZ-11796)] - Unnecessary iterations for all productFacilities in setLastInventoryCount
- [[OFBIZ-11822](https://issues.apache.org/jira/browse/OFBIZ-11822)] - Double encoded urls are not being decoded
- [[OFBIZ-11842](https://issues.apache.org/jira/browse/OFBIZ-11842)] - Failed to load PDF document after &#39;Quick checkout&#39;
- [[OFBIZ-11858](https://issues.apache.org/jira/browse/OFBIZ-11858)] - Console warning related to OrderHeader caching

## New Feature

- [[OFBIZ-11094](https://issues.apache.org/jira/browse/OFBIZ-11094)] - Buildbot RAT for releases branches
- [[OFBIZ-11691](https://issues.apache.org/jira/browse/OFBIZ-11691)] - Create a simple INSTALL file with minimum installation information and redirection to more documentation

## Improvement

- [[OFBIZ-11665](https://issues.apache.org/jira/browse/OFBIZ-11665)] - Theme files loading taking longer time
- [[OFBIZ-11879](https://issues.apache.org/jira/browse/OFBIZ-11879)] - Put the AsciiDoc files in main repo under the web site
