---
layout: page
title: Release Notes 13.07.01
description: downloads
---
Apache OFBiz&reg; 13.07.01, released in 2015-10-06, is the first release of the 13.07 series, that has been stabilized with bug fixes since July 2013. It is the OFBiz current stable release and users of the previous releases are encouraged to migrate to it.

Please notice that in the 13.07 series the specialpurpose components are no more included with the only exception of the ecommerce component (because there are still some dependencies on it): the specialpurpose components may be released in a separate package in the future.

## Bug

- [[OFBIZ-254](https://issues.apache.org/jira/browse/OFBIZ-254)] - Noisy, Possibly Unnecessary Logging when a browser request is cancelled by the user
- [[OFBIZ-2353](https://issues.apache.org/jira/browse/OFBIZ-2353)] - SequenceUtil may generate duplicate IDs in Load Balancing mode
- [[OFBIZ-2942](https://issues.apache.org/jira/browse/OFBIZ-2942)] - createPartyContactMechPurpose service doesn&#39;t allow fromDate
- [[OFBIZ-2990](https://issues.apache.org/jira/browse/OFBIZ-2990)] - New Order ship to partyid is ignored.
- [[OFBIZ-3255](https://issues.apache.org/jira/browse/OFBIZ-3255)] - Purchase Invoice screen - Transcation entries are not posted to correct GL Accounts
- [[OFBIZ-3474](https://issues.apache.org/jira/browse/OFBIZ-3474)] - Wrong label in new request creation screen
- [[OFBIZ-3537](https://issues.apache.org/jira/browse/OFBIZ-3537)] - Not all sales invoice item types are showing in listInvoiceItems screen
- [[OFBIZ-3833](https://issues.apache.org/jira/browse/OFBIZ-3833)] - Payment capture is less than Order total
- [[OFBIZ-3879](https://issues.apache.org/jira/browse/OFBIZ-3879)] - invalid invoice id is not handled correctly by invoiceOverview
- [[OFBIZ-4363](https://issues.apache.org/jira/browse/OFBIZ-4363)] - Return &quot;dataResource&quot; from CreateDataResource service
- [[OFBIZ-4372](https://issues.apache.org/jira/browse/OFBIZ-4372)] - Order terms not displayed correctly
- [[OFBIZ-4973](https://issues.apache.org/jira/browse/OFBIZ-4973)] - AvsSettings screenlet read data bug, entity-one should be used, not entity-and
- [[OFBIZ-5017](https://issues.apache.org/jira/browse/OFBIZ-5017)] - Quick Refund Entire Order create a Payment without the Adjustment Item amount
- [[OFBIZ-5185](https://issues.apache.org/jira/browse/OFBIZ-5185)] - Unable to delete rate associated with employee position
- [[OFBIZ-5203](https://issues.apache.org/jira/browse/OFBIZ-5203)] - In HR Componant, In Globle HR Setting menu, Position Type find the position type and delete it delete is not working properly
- [[OFBIZ-5392](https://issues.apache.org/jira/browse/OFBIZ-5392)] - Return Item received quantity does not updated correctly in case of partial receiving
- [[OFBIZ-5418](https://issues.apache.org/jira/browse/OFBIZ-5418)] - Purchase Shipment &quot;Receive Inventory Against Purchase Order&quot; functionality not working
- [[OFBIZ-5424](https://issues.apache.org/jira/browse/OFBIZ-5424)] - OrderStatus with status ITEM\_CREATED not created for auto-added promo items and items appended after order creation
- [[OFBIZ-5456](https://issues.apache.org/jira/browse/OFBIZ-5456)] - Party logo images not stored in SystemProperty location
- [[OFBIZ-5479](https://issues.apache.org/jira/browse/OFBIZ-5479)] - Groovy error when trying to filter virtual product feature variants in lookup popup window
- [[OFBIZ-5514](https://issues.apache.org/jira/browse/OFBIZ-5514)] - EntitySyncServices.cleanSyncRemoveInfo() takes minutes as seconds
- [[OFBIZ-5515](https://issues.apache.org/jira/browse/OFBIZ-5515)] - EditCustRequestContent contentId lookup field doesn&#39;t work
- [[OFBIZ-5527](https://issues.apache.org/jira/browse/OFBIZ-5527)] - Wrong title shown for production run name
- [[OFBIZ-5578](https://issues.apache.org/jira/browse/OFBIZ-5578)] - Quick Ship Entire Order Never Shipping
- [[OFBIZ-5595](https://issues.apache.org/jira/browse/OFBIZ-5595)] - &quot;Run&quot; function doesn&#39;t work in AP - Invoices
- [[OFBIZ-5599](https://issues.apache.org/jira/browse/OFBIZ-5599)] - Facility Pick Stock Moves &quot;Cannot compare: r-value is null&quot; error when ProductFacilityLocation.quantityNeeded is not set
- [[OFBIZ-5602](https://issues.apache.org/jira/browse/OFBIZ-5602)] - Sales Order with dropship item(s) uses non-existent GenericValue field to display supplier information
- [[OFBIZ-5619](https://issues.apache.org/jira/browse/OFBIZ-5619)] - Minilang call-service always use transaction
- [[OFBIZ-5654](https://issues.apache.org/jira/browse/OFBIZ-5654)] - Updating custom time period generates error
- [[OFBIZ-5655](https://issues.apache.org/jira/browse/OFBIZ-5655)] - When periodNum is not set an error is thrown
- [[OFBIZ-5673](https://issues.apache.org/jira/browse/OFBIZ-5673)] - user in securityPermissionGroup &quot;CONTENT\_USER&quot; can&#39;t access content application
- [[OFBIZ-5675](https://issues.apache.org/jira/browse/OFBIZ-5675)] - SecurityPermissions for Menu-Items and Screens is not consistent in content application
- [[OFBIZ-5676](https://issues.apache.org/jira/browse/OFBIZ-5676)] - User with update permission can&#39;t access screens in content application
- [[OFBIZ-5689](https://issues.apache.org/jira/browse/OFBIZ-5689)] - Mini-lang&#39;s iterate element can cause NPE when verbose mode is on
- [[OFBIZ-5690](https://issues.apache.org/jira/browse/OFBIZ-5690)] - Order confirmation and order order complete email notification issue from backend
- [[OFBIZ-5692](https://issues.apache.org/jira/browse/OFBIZ-5692)] - Wrong eca event set on changeOrderStatus and updateReturnStatusFromReceipt
- [[OFBIZ-5693](https://issues.apache.org/jira/browse/OFBIZ-5693)] - modification on daemon script for debian
- [[OFBIZ-5694](https://issues.apache.org/jira/browse/OFBIZ-5694)] - AddOtherPartyRelationship allows user to select roles the selected party doesn&#39;t have
- [[OFBIZ-5702](https://issues.apache.org/jira/browse/OFBIZ-5702)] - Wrong timeFormat of datetimepicker causes hours represented as 12 not 24
- [[OFBIZ-5707](https://issues.apache.org/jira/browse/OFBIZ-5707)] - AddEmplPositionFulfillment allows selection of partygroups and external persons to be selected
- [[OFBIZ-5708](https://issues.apache.org/jira/browse/OFBIZ-5708)] - ListEmplPositionFulfillments links to wrong profile of employee
- [[OFBIZ-5710](https://issues.apache.org/jira/browse/OFBIZ-5710)] - Running OFBIZ with jsvc (Commons Daemon) Breaks JobPoller
- [[OFBIZ-5711](https://issues.apache.org/jira/browse/OFBIZ-5711)] - Duplicate content in humanres.css file
- [[OFBIZ-5720](https://issues.apache.org/jira/browse/OFBIZ-5720)] - When click the &quot;Go Back&quot; button, the style of the page is mess
- [[OFBIZ-5721](https://issues.apache.org/jira/browse/OFBIZ-5721)] - Generate pdf doesn&#39;t open in new target
- [[OFBIZ-5745](https://issues.apache.org/jira/browse/OFBIZ-5745)] - Forgot password functionality is not honoring the &#39;password.lowercase&#39; property of &#39;security.properties&#39;
- [[OFBIZ-5762](https://issues.apache.org/jira/browse/OFBIZ-5762)] - Duplicated &#39;ALSO\_BOUGHT&#39; associations in product details page
- [[OFBIZ-5787](https://issues.apache.org/jira/browse/OFBIZ-5787)] - HttpClient does not support charset name with quotation mark around
- [[OFBIZ-5788](https://issues.apache.org/jira/browse/OFBIZ-5788)] - ClassCastException in DataResourceWorker.getDataResourceStream method
- [[OFBIZ-5791](https://issues.apache.org/jira/browse/OFBIZ-5791)] - CommonUiLabels.xml - malformed XML
- [[OFBIZ-6078](https://issues.apache.org/jira/browse/OFBIZ-6078)] - error

## Improvement

- [[OFBIZ-3802](https://issues.apache.org/jira/browse/OFBIZ-3802)] - Changing the Supplier Product Screen
- [[OFBIZ-4740](https://issues.apache.org/jira/browse/OFBIZ-4740)] - Un-necessary Drop Down in Web Tools
- [[OFBIZ-5287](https://issues.apache.org/jira/browse/OFBIZ-5287)] - Migrating from Log4j 1.2.17 to log4j2
- [[OFBIZ-5592](https://issues.apache.org/jira/browse/OFBIZ-5592)] - UX improvement - aligment Chart of Account
- [[OFBIZ-5698](https://issues.apache.org/jira/browse/OFBIZ-5698)] - Upgrade to Tomcat 7.0.55
- [[OFBIZ-5777](https://issues.apache.org/jira/browse/OFBIZ-5777)] - Picking screen get block when there are large number of records to process
- [[OFBIZ-5778](https://issues.apache.org/jira/browse/OFBIZ-5778)] - Manage Picklist screen get block when there are large number of records to process

## New Feature

- [[OFBIZ-6055](https://issues.apache.org/jira/browse/OFBIZ-6055)] - ofbiz 13.07.01 &quot;main menu&quot; and &quot;sub menu&quot; into a single UL, LI structure? by default there is two &lt; UL &gt; tags one for the applications menu and one for the sub menu of the current application.Please Help Us

## Sub-task

- [[OFBIZ-5684](https://issues.apache.org/jira/browse/OFBIZ-5684)] - Help Updates to some Manufacturing Screens

## Wish

- [[OFBIZ-6053](https://issues.apache.org/jira/browse/OFBIZ-6053)] - I&#39;m having issues in displaying Thai Characters in the OFBiz 13.07.01 PDF Reports. Please help
