<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 13.07.01</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 13.07.01</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 13.07.01</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
        <p>Apache OFBiz&reg; 13.07.01, released in 2015-10-06, is the first release of the 13.07 series, that has been stabilized with bug fixes since July 2013. It is the OFBiz current stable release and users of the previous releases are encouraged to migrate to it.</p>
        <p>Please notice that in the 13.07 series the specialpurpose components are no more included with the only exception of the ecommerce component (because there are still some dependencies on it): the specialpurpose components may be released in a separate package in the future.</p>
    
<h2>Bug</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-254'>OFBIZ-254</a>] - Noisy, Possibly Unnecessary Logging when a browser request is cancelled by the user</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2353'>OFBIZ-2353</a>] - SequenceUtil  may generate duplicate IDs in Load Balancing mode</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2942'>OFBIZ-2942</a>] - createPartyContactMechPurpose service doesn&#39;t allow fromDate</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2990'>OFBIZ-2990</a>] - New Order ship to partyid is ignored.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3255'>OFBIZ-3255</a>] - Purchase Invoice screen - Transcation entries are not posted to correct GL Accounts</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3474'>OFBIZ-3474</a>] - Wrong label in new request creation screen</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3537'>OFBIZ-3537</a>] - Not all sales invoice item types are showing in listInvoiceItems screen</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3833'>OFBIZ-3833</a>] - Payment capture is less than Order total</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3879'>OFBIZ-3879</a>] - invalid invoice id is not handled correctly by invoiceOverview</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4363'>OFBIZ-4363</a>] - Return &quot;dataResource&quot; from CreateDataResource service</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4372'>OFBIZ-4372</a>] - Order terms not displayed correctly</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4973'>OFBIZ-4973</a>] - AvsSettings screenlet read data bug, entity-one should be used, not entity-and</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5017'>OFBIZ-5017</a>] - Quick Refund Entire Order create a Payment without the Adjustment Item amount </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5185'>OFBIZ-5185</a>] - Unable to delete rate associated with employee position</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5203'>OFBIZ-5203</a>] - In HR Componant, In Globle HR Setting menu, Position Type find the position type and delete it delete is not working properly </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5392'>OFBIZ-5392</a>] - Return Item received quantity does not updated correctly in case of partial receiving </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5418'>OFBIZ-5418</a>] - Purchase Shipment &quot;Receive Inventory Against Purchase Order&quot; functionality not working</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5424'>OFBIZ-5424</a>] - OrderStatus with status ITEM_CREATED not created for auto-added promo items and items appended after order creation</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5456'>OFBIZ-5456</a>] - Party logo images not stored in SystemProperty location</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5479'>OFBIZ-5479</a>] - Groovy error when trying to filter virtual product feature variants in lookup popup window</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5514'>OFBIZ-5514</a>] - EntitySyncServices.cleanSyncRemoveInfo() takes minutes as seconds</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5515'>OFBIZ-5515</a>] - EditCustRequestContent contentId lookup field doesn&#39;t work</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5527'>OFBIZ-5527</a>] - Wrong title shown for production run name</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5578'>OFBIZ-5578</a>] - Quick Ship Entire Order Never Shipping</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5595'>OFBIZ-5595</a>] - &quot;Run&quot; function doesn&#39;t work in AP - Invoices</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5599'>OFBIZ-5599</a>] - Facility Pick Stock Moves &quot;Cannot compare: r-value is null&quot; error when ProductFacilityLocation.quantityNeeded is not set</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5602'>OFBIZ-5602</a>] - Sales Order with dropship item(s) uses non-existent GenericValue field to display supplier information</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5619'>OFBIZ-5619</a>] - Minilang call-service always use transaction</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5654'>OFBIZ-5654</a>] - Updating  custom time period generates error</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5655'>OFBIZ-5655</a>] - When periodNum is not set an error is thrown</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5673'>OFBIZ-5673</a>] - user in securityPermissionGroup &quot;CONTENT_USER&quot; can&#39;t access content application</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5675'>OFBIZ-5675</a>] - SecurityPermissions for Menu-Items and Screens is not consistent in content application</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5676'>OFBIZ-5676</a>] - User with update permission can&#39;t access screens in content application</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5689'>OFBIZ-5689</a>] - Mini-lang&#39;s iterate element can cause NPE when verbose mode is on</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5690'>OFBIZ-5690</a>] - Order confirmation and order order complete email notification issue from backend</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5692'>OFBIZ-5692</a>] - Wrong eca event set on changeOrderStatus and updateReturnStatusFromReceipt</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5693'>OFBIZ-5693</a>] - modification on daemon script for debian</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5694'>OFBIZ-5694</a>] - AddOtherPartyRelationship allows user to select roles the selected party doesn&#39;t have</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5702'>OFBIZ-5702</a>] - Wrong timeFormat of datetimepicker causes hours represented as 12 not 24</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5707'>OFBIZ-5707</a>] - AddEmplPositionFulfillment allows selection of partygroups and external persons to be selected</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5708'>OFBIZ-5708</a>] - ListEmplPositionFulfillments links to wrong profile of employee</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5710'>OFBIZ-5710</a>] - Running OFBIZ with jsvc (Commons Daemon) Breaks JobPoller</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5711'>OFBIZ-5711</a>] - Duplicate content in humanres.css file</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5720'>OFBIZ-5720</a>] - When click the &quot;Go Back&quot; button, the style of the page is mess</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5721'>OFBIZ-5721</a>] - Generate pdf doesn&#39;t open in new target</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5745'>OFBIZ-5745</a>] - Forgot password functionality is not honoring the &#39;password.lowercase&#39; property of &#39;security.properties&#39;</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5762'>OFBIZ-5762</a>] - Duplicated &#39;ALSO_BOUGHT&#39; associations in product details page</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5787'>OFBIZ-5787</a>] - HttpClient does not support charset name with quotation mark around</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5788'>OFBIZ-5788</a>] - ClassCastException in DataResourceWorker.getDataResourceStream method</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5791'>OFBIZ-5791</a>] - CommonUiLabels.xml - malformed XML</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6078'>OFBIZ-6078</a>] - error</li>
</ul>

<h2>Improvement</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3802'>OFBIZ-3802</a>] - Changing the Supplier Product Screen</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4740'>OFBIZ-4740</a>] - Un-necessary Drop Down in Web Tools</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5287'>OFBIZ-5287</a>] - Migrating from Log4j 1.2.17 to log4j2</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5592'>OFBIZ-5592</a>] - UX improvement - aligment Chart of Account</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5698'>OFBIZ-5698</a>] - Upgrade to Tomcat 7.0.55</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5777'>OFBIZ-5777</a>] - Picking screen get block when there are large number of records to process</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5778'>OFBIZ-5778</a>] - Manage Picklist screen get block when there are large number of records to process</li>
</ul>

<h2>New Feature</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6055'>OFBIZ-6055</a>] - ofbiz 13.07.01  &quot;main menu&quot; and &quot;sub menu&quot; into a single UL, LI structure?  by default there is two &lt; UL &gt; tags one for the applications menu and one for the sub menu of the current application.Please Help Us</li>
</ul>
<h2>Sub-task</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5684'>OFBIZ-5684</a>] - Help Updates to some Manufacturing Screens</li>
</ul>


<h2>Wish</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6053'>OFBIZ-6053</a>] - I&#39;m having issues in displaying Thai Characters in the OFBiz 13.07.01 PDF Reports. Please help</li>
</ul>

  </div>
</div>
</div>
</div>
</section>
</section>