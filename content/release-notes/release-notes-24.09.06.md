---
layout: page
title: Release Notes 24.09.06
description: downloads
---
Apache OFBiz&reg; 24.09.06, released in May 2026, is the sixth release of the 24.09 series, which has been feature-frozen since September 2024, receiving only bug fixes.

Release Notes - OFBiz - Version 24.09.06

## Sub-task

- [[OFBIZ-13339](https://issues.apache.org/jira/browse/OFBIZ-13339)] - jsgantt-improved bloks qs.js update
- [[OFBIZ-13365](https://issues.apache.org/jira/browse/OFBIZ-13365)] - [SECURITY] Several CVEs in Apache Tomcat
- [[OFBIZ-13381](https://issues.apache.org/jira/browse/OFBIZ-13381)] - [SECURITY] Several CVEs in Apache Tomcat

## Bug

- [[OFBIZ-12104](https://issues.apache.org/jira/browse/OFBIZ-12104)] - Promotion item is added in created status after page is refresh
- [[OFBIZ-12157](https://issues.apache.org/jira/browse/OFBIZ-12157)] - Exception Error while trying add address id in Shipment
- [[OFBIZ-12325](https://issues.apache.org/jira/browse/OFBIZ-12325)] - pricatdemo/control/pricatUpload fails to load the demo file
- [[OFBIZ-12561](https://issues.apache.org/jira/browse/OFBIZ-12561)] - Payment Find screen shows unnecessary &#39;find&#39; trigger
- [[OFBIZ-12818](https://issues.apache.org/jira/browse/OFBIZ-12818)] - request PaymentAcctgTransEntriesPdf throws an error
- [[OFBIZ-13243](https://issues.apache.org/jira/browse/OFBIZ-13243)] - Fix Production Run cost calculation logic to exclude returned items from material cost calculations
- [[OFBIZ-13332](https://issues.apache.org/jira/browse/OFBIZ-13332)] - Lookup don&#39;t work on area just updated
- [[OFBIZ-13341](https://issues.apache.org/jira/browse/OFBIZ-13341)] - Endless loop in SecuredUpload::inflate
- [[OFBIZ-13342](https://issues.apache.org/jira/browse/OFBIZ-13342)] - CommonEmptyHeader wrong value
- [[OFBIZ-13343](https://issues.apache.org/jira/browse/OFBIZ-13343)] - When a shipment has already been marked as &#39;Received&#39;, the screen &#39;Receive Inventory Against Purchase Order&#39; should not allow further items to be received
- [[OFBIZ-13353](https://issues.apache.org/jira/browse/OFBIZ-13353)] - The Receive Against PO menu item is misplaced, duplicated, and does not show focus
- [[OFBIZ-13357](https://issues.apache.org/jira/browse/OFBIZ-13357)] - Issues affect the &#39;Shipment Action Bar&#39; menu of the ‘Receive Inventory Against Purchase Order’ screen
- [[OFBIZ-13358](https://issues.apache.org/jira/browse/OFBIZ-13358)] - When receiving inventory from the ‘Receive Inventory Against Purchase Order’ screen, invoices generated for purchase orders containing more than one item are incomplete
- [[OFBIZ-13364](https://issues.apache.org/jira/browse/OFBIZ-13364)] - Some widget form targets violate security checks
- [[OFBIZ-13368](https://issues.apache.org/jira/browse/OFBIZ-13368)] - Remove obsolete enableRemoteStreaming from solrconfig.xml
- [[OFBIZ-13373](https://issues.apache.org/jira/browse/OFBIZ-13373)] - Error when forcing PO completion if receipt contains rejected units
- [[OFBIZ-13374](https://issues.apache.org/jira/browse/OFBIZ-13374)] - catalog/control/ImageRecentlyApproved fails
- [[OFBIZ-13376](https://issues.apache.org/jira/browse/OFBIZ-13376)] - PO receipts with zero accepted units are not handled correctly
- [[OFBIZ-13377](https://issues.apache.org/jira/browse/OFBIZ-13377)] - Incorrect management of CORS origins in the rest-api plugin
- [[OFBIZ-13378](https://issues.apache.org/jira/browse/OFBIZ-13378)] - Pressing sort button in any UI view will end with NPE
- [[OFBIZ-13379](https://issues.apache.org/jira/browse/OFBIZ-13379)] - Not possible to add product to Promo Action Rule
- [[OFBIZ-13385](https://issues.apache.org/jira/browse/OFBIZ-13385)] - Possible NPE in PayPal services
- [[OFBIZ-13387](https://issues.apache.org/jira/browse/OFBIZ-13387)] - Currently RAT report stable and next are inversed
- [[OFBIZ-13389](https://issues.apache.org/jira/browse/OFBIZ-13389)] - Updating field with URL with TLD not listed in UtilHttp.extractUrls
- [[OFBIZ-13390](https://issues.apache.org/jira/browse/OFBIZ-13390)] - Sales Order Screen broken (Huge font size) after order completed with email notification

## Improvement

- [[OFBIZ-12850](https://issues.apache.org/jira/browse/OFBIZ-12850)] - Duplicate class ... hot reload failed
- [[OFBIZ-13371](https://issues.apache.org/jira/browse/OFBIZ-13371)] - Allow to optionally opt out from whitelisted static calls in Freemarker
