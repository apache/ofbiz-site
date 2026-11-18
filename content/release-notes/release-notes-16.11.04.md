---
layout: page
title: Release Notes 16.11.04
description: downloads
---
Apache OFBiz&reg; 16.11.04, released in 2018-01-02, is the fourth release of the 16.11 series, that has been stabilized since November 2016.

## Bugs

- [[OFBIZ-5938](//issues.apache.org/jira/browse/OFBIZ-5938)] - GlAccountOrganizations manually added using accounting forms do not appear on trial report because fromDate gets set to NULL
- [[OFBIZ-6054](//issues.apache.org/jira/browse/OFBIZ-6054)] - ofbizsetup cannot create first customer. problem with state/province dropdown
- [[OFBIZ-6774](//issues.apache.org/jira/browse/OFBIZ-6774)] - ACCTG TRANS ENTRIES PDF link on invoiceOverview does not work
- [[OFBIZ-7253](//issues.apache.org/jira/browse/OFBIZ-7253)] - UI issue on web pos for different themes
- [[OFBIZ-7438](//issues.apache.org/jira/browse/OFBIZ-7438)] - Inventory Report PDF lists all available statusId&#39;s irrespective of selection criteria
- [[OFBIZ-8153](//issues.apache.org/jira/browse/OFBIZ-8153)] - LabelManager doesn&#39;t search labels in .groovy files
- [[OFBIZ-9143](//issues.apache.org/jira/browse/OFBIZ-9143)] - The copyAgreement service fails
- [[OFBIZ-9240](//issues.apache.org/jira/browse/OFBIZ-9240)] - Ecommerce login/logout don&#39;t work properly for trunk and stable and even old
- [[OFBIZ-9259](//issues.apache.org/jira/browse/OFBIZ-9259)] - Uploading images at catalog/control/addImageForProduct does not work
- [[OFBIZ-9316](//issues.apache.org/jira/browse/OFBIZ-9316)] - Error displayed while adding WorkEffort Contact Mechs.
- [[OFBIZ-9317](//issues.apache.org/jira/browse/OFBIZ-9317)] - WorkEffort shows error on adding party with specific role to Timesheet.
- [[OFBIZ-9344](//issues.apache.org/jira/browse/OFBIZ-9344)] - Incorrect MimeTypeId value shown if the form is submitted
- [[OFBIZ-9365](//issues.apache.org/jira/browse/OFBIZ-9365)] - Screen rendering error on Content Advanced Search page
- [[OFBIZ-9377](//issues.apache.org/jira/browse/OFBIZ-9377)] - fix tag &quot;disable-if-empty&quot; in menus if field has no value
- [[OFBIZ-9404](//issues.apache.org/jira/browse/OFBIZ-9404)] - Insufficient checking of checkOutPaymentId in CheckOutEvents.getSelectedPaymentMethods
- [[OFBIZ-9424](//issues.apache.org/jira/browse/OFBIZ-9424)] - Typo in value of SfaAddSalesForecastDetail uiLabel in MarketingUiLabels.xml
- [[OFBIZ-9426](//issues.apache.org/jira/browse/OFBIZ-9426)] - The following required parameter is missing: [IN] [removeWebSitePathAlias.fromDate].
- [[OFBIZ-9428](//issues.apache.org/jira/browse/OFBIZ-9428)] - getResultsSizeAfterPartialList() return wrong count with distinct() for View Entity
- [[OFBIZ-9432](//issues.apache.org/jira/browse/OFBIZ-9432)] - Error running the simple-method: Error running groovy script
- [[OFBIZ-9438](//issues.apache.org/jira/browse/OFBIZ-9438)] - add gift certificate in purchase order cause exception
- [[OFBIZ-9445](//issues.apache.org/jira/browse/OFBIZ-9445)] - ContentWorker#findAlternateLocaleContent(Delegator, GenericValue, Locale) does not use fallback locale
- [[OFBIZ-9446](//issues.apache.org/jira/browse/OFBIZ-9446)] - https://localhost:8443/ecomseo/checkLogin exception
- [[OFBIZ-9449](//issues.apache.org/jira/browse/OFBIZ-9449)] - Missing secure port in URLs when sending mails
- [[OFBIZ-9455](//issues.apache.org/jira/browse/OFBIZ-9455)] - Required check missing for supplier product id and last price on Add Product Supplier page
- [[OFBIZ-9456](//issues.apache.org/jira/browse/OFBIZ-9456)] - Required check missing for Routing Task Name on Add Routing Task page
- [[OFBIZ-9459](//issues.apache.org/jira/browse/OFBIZ-9459)] - Wrong screen redirection after adding note on Lead profile screen
- [[OFBIZ-9462](//issues.apache.org/jira/browse/OFBIZ-9462)] - On create order, the page shows orderview screen, but Url does not change. It shows processorder.
- [[OFBIZ-9468](//issues.apache.org/jira/browse/OFBIZ-9468)] - UI issue in ATP/QOH table on Create Purchase Order screen
- [[OFBIZ-9470](//issues.apache.org/jira/browse/OFBIZ-9470)] - Missing productId in input field after Atp/Qoh button is clicked on create PO screen
- [[OFBIZ-9473](//issues.apache.org/jira/browse/OFBIZ-9473)] - Status of communication event role is marked &quot;Read&quot; on View Communication Event page.
- [[OFBIZ-9477](//issues.apache.org/jira/browse/OFBIZ-9477)] - UI issue in Lead Lookup on find opportunity
- [[OFBIZ-9499](//issues.apache.org/jira/browse/OFBIZ-9499)] - FacilityId should be mandatory for &quot;Create Inventory Item&quot; form in EditInventoryItem screen.
- [[OFBIZ-9503](//issues.apache.org/jira/browse/OFBIZ-9503)] - Fixed Asset Id field is below update button on EditInventoryItem page
- [[OFBIZ-9525](//issues.apache.org/jira/browse/OFBIZ-9525)] - MRP incorrectly computes quantity already received in open purchase order shipments
- [[OFBIZ-9526](//issues.apache.org/jira/browse/OFBIZ-9526)] - MRP generates duplicate requirements when items are initially under minimum quantity and have with pending approved purchase orders.
- [[OFBIZ-9530](//issues.apache.org/jira/browse/OFBIZ-9530)] - Missing action in empty if-statement in accounting.PaymentGatewayServices
- [[OFBIZ-9532](//issues.apache.org/jira/browse/OFBIZ-9532)] - Edit Party Group page does not shows current set values
- [[OFBIZ-9535](//issues.apache.org/jira/browse/OFBIZ-9535)] - Error in payment address for purchase invoice via service createinvoicefororder
- [[OFBIZ-9542](//issues.apache.org/jira/browse/OFBIZ-9542)] - Can&#39;t Create a new PartyAcctgPreference in 16.11.03
- [[OFBIZ-9553](//issues.apache.org/jira/browse/OFBIZ-9553)] - Creating Lead Source from profile page it redirects to empty profile page
- [[OFBIZ-9578](//issues.apache.org/jira/browse/OFBIZ-9578)] - Collection added to itself
- [[OFBIZ-9606](//issues.apache.org/jira/browse/OFBIZ-9606)] - LabelManager doesn&#39;t search labels in all elements in xml
- [[OFBIZ-9621](//issues.apache.org/jira/browse/OFBIZ-9621)] - MimeType displayed in HTML encoded pattern
- [[OFBIZ-9623](//issues.apache.org/jira/browse/OFBIZ-9623)] - Improvements in LabelReferences class
- [[OFBIZ-9624](//issues.apache.org/jira/browse/OFBIZ-9624)] - NullPointerException when calling EntityQuery#getFieldList
- [[OFBIZ-9644](//issues.apache.org/jira/browse/OFBIZ-9644)] - Fix references where Mime type is displayed in HTML encoded pattern
- [[OFBIZ-9648](//issues.apache.org/jira/browse/OFBIZ-9648)] - Deleting workeffort from Find WorkEffort page gives unusual response
- [[OFBIZ-9655](//issues.apache.org/jira/browse/OFBIZ-9655)] - Lead Profile missing if clicked on other menu
- [[OFBIZ-9676](//issues.apache.org/jira/browse/OFBIZ-9676)] - Error of GROUP BY in MSSQL
- [[OFBIZ-9697](//issues.apache.org/jira/browse/OFBIZ-9697)] - Create Related Account from Contact Profile redirect to empty profile screen.
- [[OFBIZ-9698](//issues.apache.org/jira/browse/OFBIZ-9698)] - Party Id field missing while creating contact list party in the marketing component
- [[OFBIZ-9725](//issues.apache.org/jira/browse/OFBIZ-9725)] - Transaction Timeout in JavaEventHandler
- [[OFBIZ-9745](//issues.apache.org/jira/browse/OFBIZ-9745)] - Labels messed up because of missing UiLabels
- [[OFBIZ-9753](//issues.apache.org/jira/browse/OFBIZ-9753)] - &#39;Find Opportunities&#39; field name is reflecting in place of &#39;Opportunity Id&#39; on FindSalesOpportunity screen.
- [[OFBIZ-9838](//issues.apache.org/jira/browse/OFBIZ-9838)] - Purchase Order is not getting canceled automatically if all items are canceled
- [[OFBIZ-9896](//issues.apache.org/jira/browse/OFBIZ-9896)] - Incorrect success message after creating prospect
- [[OFBIZ-9899](//issues.apache.org/jira/browse/OFBIZ-9899)] - UI Issue with Account Limit at Find Billing Account(s)
- [[OFBIZ-9914](//issues.apache.org/jira/browse/OFBIZ-9914)] - Issue in redirection while creating a new party group
- [[OFBIZ-9915](//issues.apache.org/jira/browse/OFBIZ-9915)] - Error printing Return PDF
- [[OFBIZ-9922](//issues.apache.org/jira/browse/OFBIZ-9922)] - Content related changes needs OFBiz server restart
- [[OFBIZ-9964](//issues.apache.org/jira/browse/OFBIZ-9964)] - UtilMisc.ensureLocale does not always return a valid Locale
- [[OFBIZ-9967](//issues.apache.org/jira/browse/OFBIZ-9967)] - In &#39;updateOrderContactMech&#39; service, A check should be added to call &#39;removeOrderContactMech&#39;.
- [[OFBIZ-9968](//issues.apache.org/jira/browse/OFBIZ-9968)] - Duplicated dollar symbols should be removed from uiLabels.
- [[OFBIZ-9970](//issues.apache.org/jira/browse/OFBIZ-9970)] - NullPointer Access in CategoryContentWrapper.getProductCategoryContentAsText when locale parameter is missing
- [[OFBIZ-9971](//issues.apache.org/jira/browse/OFBIZ-9971)] - Inventory transfer creates unnecessary record with 0
- [[OFBIZ-9975](//issues.apache.org/jira/browse/OFBIZ-9975)] - ShippingEvents.getShipGroupEstimate() method gives untraceable null pointer exception for BigDecimal comparison
- [[OFBIZ-9977](//issues.apache.org/jira/browse/OFBIZ-9977)] - While creating return fin account used currency must be same
- [[OFBIZ-10007](//issues.apache.org/jira/browse/OFBIZ-10007)] - Party Classification Groups are not listing on FindParty screen.
- [[OFBIZ-10010](//issues.apache.org/jira/browse/OFBIZ-10010)] - No option to create the account contacts in SFA component
- [[OFBIZ-10027](//issues.apache.org/jira/browse/OFBIZ-10027)] - Improvements in gift certificate process
- [[OFBIZ-10037](//issues.apache.org/jira/browse/OFBIZ-10037)] - Creating an example from the Ajax screen does not work

## Improvements

- [[OFBIZ-9675](//issues.apache.org/jira/browse/OFBIZ-9675)] - Use ofbizCurrency macro and remove hardcoded ##0.00 string
- [[OFBIZ-9862](//issues.apache.org/jira/browse/OFBIZ-9862)] - Improve Rainbow theme showing themes

## Sub-tasks

- [[OFBIZ-9529](//issues.apache.org/jira/browse/OFBIZ-9529)] - [FB] Package org.apache.ofbiz.accounting.payment (Additional Bugs)
- [[OFBIZ-9567](//issues.apache.org/jira/browse/OFBIZ-9567)] - [FB] Package org.apache.ofbiz.base.metrics
- [[OFBIZ-10085](//issues.apache.org/jira/browse/OFBIZ-10085)] - Prevent the possible return of the Robot attack
