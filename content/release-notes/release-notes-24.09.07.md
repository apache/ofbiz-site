---
layout: page
title: Release Notes 24.09.07
description: downloads
---
Apache OFBiz&reg; 24.09.07, released in June 2026, is the seventh release of the 24.09 series, which has been feature-frozen since September 2024, receiving only bug fixes.

Release Notes - OFBiz - Version 24.09.07

## Bug

- [[OFBIZ-3546](https://issues.apache.org/jira/browse/OFBIZ-3546)] - FreeMarkerViewHandler should load templates via the FreeMarkerWorker
- [[OFBIZ-3880](https://issues.apache.org/jira/browse/OFBIZ-3880)] - EntityDateFilterCondition causes the entity cache to return false matches
- [[OFBIZ-4251](https://issues.apache.org/jira/browse/OFBIZ-4251)] - DATASPD\_MEASURE has incorrect conversionFactors
- [[OFBIZ-5315](https://issues.apache.org/jira/browse/OFBIZ-5315)] - view-entity complex-alias field name bug when view-entities reference other view-entities
- [[OFBIZ-9205](https://issues.apache.org/jira/browse/OFBIZ-9205)] - Wrong OrderAdjustments (because of tax) when cancelling an Order
- [[OFBIZ-10434](https://issues.apache.org/jira/browse/OFBIZ-10434)] - Common theme does not work when using a path with a space in
- [[OFBIZ-10824](https://issues.apache.org/jira/browse/OFBIZ-10824)] - Error on Find Party screen
- [[OFBIZ-12111](https://issues.apache.org/jira/browse/OFBIZ-12111)] - Blank csv is exported for accounting transaction
- [[OFBIZ-13370](https://issues.apache.org/jira/browse/OFBIZ-13370)] - Recurring Job Not Rescheduled After Server Restart/Crash
- [[OFBIZ-13388](https://issues.apache.org/jira/browse/OFBIZ-13388)] - sendInvoicePerEmail fails with MissingMethodException: invalid makeValidContext() call in InvoiceServicesScript.groovy
- [[OFBIZ-13420](https://issues.apache.org/jira/browse/OFBIZ-13420)] - Correct invalid StatusItem key (ORDER\_CANDELLED) in OrderForms
- [[OFBIZ-13423](https://issues.apache.org/jira/browse/OFBIZ-13423)] - Deserializing ModelPermission.java throws an error
- [[OFBIZ-13424](https://issues.apache.org/jira/browse/OFBIZ-13424)] - Wrong Label is used in the ReceiveInventory screen for Accepted Quantity
- [[OFBIZ-13425](https://issues.apache.org/jira/browse/OFBIZ-13425)] - PO shipments are not marked as received when receipts contain rejected units
- [[OFBIZ-13429](https://issues.apache.org/jira/browse/OFBIZ-13429)] - When the &#39;Quantity Received&#39; value exceeds the &#39;Quantity&#39; specified on a purchase order, and one or more receipts contain rejected units, order and shipment updates fail.
- [[OFBIZ-13433](https://issues.apache.org/jira/browse/OFBIZ-13433)] - The &#39;View Shipment Receipts&#39; panel in the &#39;ViewShipment&#39; screen doesn&#39;t display receipt information
