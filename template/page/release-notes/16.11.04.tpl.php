<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 16.11.04</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 16.11.04</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 16.11.04</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 16.11.04, released in 2018-01-02, is the fourth release of the 16.11 series, that has been stabilized since November 2016.</p>
<h2>Bugs</h2>
<ul>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-5938'>OFBIZ-5938</a>] -         GlAccountOrganizations manually added using accounting forms do not appear on trial report because fromDate gets set to NULL</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-6054'>OFBIZ-6054</a>] -         ofbizsetup cannot create first customer. problem with state/province dropdown</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-6774'>OFBIZ-6774</a>] -         ACCTG TRANS ENTRIES PDF link on invoiceOverview does not work</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-7253'>OFBIZ-7253</a>] -         UI issue on web pos for different themes</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-7438'>OFBIZ-7438</a>] -         Inventory Report PDF lists all available statusId&#39;s irrespective of selection criteria</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-8153'>OFBIZ-8153</a>] -         LabelManager doesn&#39;t search labels in .groovy files</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9143'>OFBIZ-9143</a>] -         The copyAgreement service fails</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9240'>OFBIZ-9240</a>] -         Ecommerce login/logout don&#39;t work properly for trunk and stable and even old</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9259'>OFBIZ-9259</a>] -         Uploading images at catalog/control/addImageForProduct does not work</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9316'>OFBIZ-9316</a>] -         Error displayed while adding WorkEffort Contact Mechs.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9317'>OFBIZ-9317</a>] -         WorkEffort shows error on adding party with specific role to Timesheet.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9344'>OFBIZ-9344</a>] -         Incorrect MimeTypeId value shown if the form is submitted</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9365'>OFBIZ-9365</a>] -         Screen rendering error on Content Advanced Search page</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9377'>OFBIZ-9377</a>] -         fix tag &quot;disable-if-empty&quot; in menus if field has no value</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9404'>OFBIZ-9404</a>] -         Insufficient checking of checkOutPaymentId in CheckOutEvents.getSelectedPaymentMethods</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9424'>OFBIZ-9424</a>] -         Typo in value of SfaAddSalesForecastDetail uiLabel in MarketingUiLabels.xml</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9426'>OFBIZ-9426</a>] -         The following required parameter is missing: [IN] [removeWebSitePathAlias.fromDate].</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9428'>OFBIZ-9428</a>] -         getResultsSizeAfterPartialList() return wrong count with distinct() for View Entity</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9432'>OFBIZ-9432</a>] -         Error running the simple-method: Error running groovy script</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9438'>OFBIZ-9438</a>] -         add gift certificate in purchase order cause exception</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9445'>OFBIZ-9445</a>] -         ContentWorker#findAlternateLocaleContent(Delegator, GenericValue, Locale) does not use fallback locale</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9446'>OFBIZ-9446</a>] -         https://localhost:8443/ecomseo/checkLogin exception</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9449'>OFBIZ-9449</a>] -         Missing secure port in URLs when sending mails</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9455'>OFBIZ-9455</a>] -         Required check missing for supplier product id and last price on Add Product Supplier page</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9456'>OFBIZ-9456</a>] -         Required check missing for Routing Task Name on Add Routing Task page</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9459'>OFBIZ-9459</a>] -         Wrong screen redirection after adding note on Lead profile screen</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9462'>OFBIZ-9462</a>] -         On create order, the page shows orderview screen, but Url does not change. It shows processorder.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9468'>OFBIZ-9468</a>] -         UI issue in ATP/QOH table on Create Purchase Order screen</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9470'>OFBIZ-9470</a>] -         Missing productId in input field after Atp/Qoh button is clicked on create PO screen</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9473'>OFBIZ-9473</a>] -         Status of communication event role is marked &quot;Read&quot; on View Communication Event page.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9477'>OFBIZ-9477</a>] -         UI issue in Lead Lookup on find opportunity</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9499'>OFBIZ-9499</a>] -         FacilityId should be mandatory for &quot;Create Inventory Item&quot; form in EditInventoryItem screen.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9503'>OFBIZ-9503</a>] -         Fixed Asset Id field is below update button on EditInventoryItem page</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9525'>OFBIZ-9525</a>] -         MRP incorrectly computes quantity already received in open purchase order shipments</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9526'>OFBIZ-9526</a>] -         MRP generates duplicate requirements when items are initially under minimum quantity and have with pending approved purchase orders.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9530'>OFBIZ-9530</a>] -         Missing action in empty if-statement in accounting.PaymentGatewayServices</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9532'>OFBIZ-9532</a>] -         Edit Party Group page does not shows current set values</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9535'>OFBIZ-9535</a>] -         Error in payment address for purchase invoice via service createinvoicefororder</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9542'>OFBIZ-9542</a>] -         Can&#39;t Create a new PartyAcctgPreference in 16.11.03</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9553'>OFBIZ-9553</a>] -         Creating Lead Source from profile page it redirects to empty profile page</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9578'>OFBIZ-9578</a>] -         Collection added to itself</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9606'>OFBIZ-9606</a>] -         LabelManager doesn&#39;t search labels in all elements in xml</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9621'>OFBIZ-9621</a>] -         MimeType displayed in HTML encoded pattern</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9623'>OFBIZ-9623</a>] -         Improvements in LabelReferences class</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9624'>OFBIZ-9624</a>] -         NullPointerException when calling EntityQuery#getFieldList</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9644'>OFBIZ-9644</a>] -         Fix references where Mime type is displayed in HTML encoded pattern</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9648'>OFBIZ-9648</a>] -         Deleting workeffort from Find WorkEffort page gives unusual response</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9655'>OFBIZ-9655</a>] -         Lead Profile missing if clicked on other menu</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9676'>OFBIZ-9676</a>] -         Error of GROUP BY in MSSQL</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9697'>OFBIZ-9697</a>] -         Create Related Account from Contact Profile redirect to empty profile screen.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9698'>OFBIZ-9698</a>] -         Party Id field missing while creating contact list party in the marketing component</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9725'>OFBIZ-9725</a>] -         Transaction Timeout in JavaEventHandler</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9745'>OFBIZ-9745</a>] -         Labels messed up because of missing UiLabels</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9753'>OFBIZ-9753</a>] -         &#39;Find Opportunities&#39; field name is reflecting in place of &#39;Opportunity Id&#39; on FindSalesOpportunity screen.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9838'>OFBIZ-9838</a>] -         Purchase Order is not getting canceled automatically if all items are canceled</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9896'>OFBIZ-9896</a>] -         Incorrect success message after creating prospect</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9899'>OFBIZ-9899</a>] -         UI Issue with Account Limit at Find Billing Account(s)</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9914'>OFBIZ-9914</a>] -         Issue in redirection while creating a new party group</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9915'>OFBIZ-9915</a>] -         Error printing Return PDF</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9922'>OFBIZ-9922</a>] -         Content related changes needs OFBiz server restart</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9964'>OFBIZ-9964</a>] -         UtilMisc.ensureLocale does not always return a valid Locale</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9967'>OFBIZ-9967</a>] -         In &#39;updateOrderContactMech&#39; service, A check should be added to call &#39;removeOrderContactMech&#39;.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9968'>OFBIZ-9968</a>] -         Duplicated dollar symbols should be removed from uiLabels.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9970'>OFBIZ-9970</a>] -         NullPointer Access in CategoryContentWrapper.getProductCategoryContentAsText when locale parameter is missing</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9971'>OFBIZ-9971</a>] -         Inventory transfer creates unnecessary record with 0</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9975'>OFBIZ-9975</a>] -         ShippingEvents.getShipGroupEstimate() method gives untraceable null pointer exception for BigDecimal comparison</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9977'>OFBIZ-9977</a>] -         While creating return fin account used currency must be same</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-10007'>OFBIZ-10007</a>] -         Party Classification Groups are not listing on FindParty screen.</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-10010'>OFBIZ-10010</a>] -         No option to create the account contacts in SFA component</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-10027'>OFBIZ-10027</a>] -         Improvements in gift certificate process</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-10037'>OFBIZ-10037</a>] -         Creating an example from the Ajax screen does not work</li>
</ul>
                                        
<h2>Improvements</h2>
<ul>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9675'>OFBIZ-9675</a>] -         Use ofbizCurrency macro and remove hardcoded ##0.00 string</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9862'>OFBIZ-9862</a>] -         Improve Rainbow theme showing themes</li>
</ul>
                                                                                                
<h2>Sub-tasks</h2>
<ul>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9529'>OFBIZ-9529</a>] -         [FB] Package org.apache.ofbiz.accounting.payment (Additional Bugs)</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-9567'>OFBIZ-9567</a>] -         [FB] Package org.apache.ofbiz.base.metrics</li>
<li>[<a href='//issues.apache.org/jira/browse/OFBIZ-10085'>OFBIZ-10085</a>] -         Prevent the possible return of the Robot attack</li>
</ul>
  </div>
</div>
</div>
</div>
</section>
</section>