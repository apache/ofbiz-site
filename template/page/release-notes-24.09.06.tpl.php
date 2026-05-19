<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 24.09.06</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 24.09.06</h1>
           <div class="span4" id="navTrail">
               <a href="index.html" class="homeLink">home</a>
               <span>/</span>
               <a href="download.html">Download</a>
               <span>/</span><span class="current">Release Notes 24.09.06</span>
           </div>
      </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 24.09.06, released in May 2026, is the sixth release of the 24.09 series, which has been feature-frozen since September 2024, receiving only bug fixes.</p>

        Release Notes - OFBiz - Version 24.09.06
    
<h2>        Sub-task
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13339'>OFBIZ-13339</a>] -         jsgantt-improved bloks qs.js update
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13365'>OFBIZ-13365</a>] -         [SECURITY]  Several CVEs in Apache Tomcat
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13381'>OFBIZ-13381</a>] -         [SECURITY]  Several CVEs in Apache Tomcat
</li>
</ul>
            
<h2>        Bug
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12104'>OFBIZ-12104</a>] -         Promotion item is added in created status after page is refresh
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12157'>OFBIZ-12157</a>] -         Exception Error while trying add address id in Shipment
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12325'>OFBIZ-12325</a>] -         pricatdemo/control/pricatUpload fails to load the demo file
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12561'>OFBIZ-12561</a>] -         Payment Find screen shows unnecessary &#39;find&#39; trigger
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12818'>OFBIZ-12818</a>] -         request PaymentAcctgTransEntriesPdf throws an error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13243'>OFBIZ-13243</a>] -         Fix Production Run cost calculation logic to exclude returned items from material cost calculations
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13332'>OFBIZ-13332</a>] -         Lookup don&#39;t work on area just updated
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13341'>OFBIZ-13341</a>] -         Endless loop in SecuredUpload::inflate
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13342'>OFBIZ-13342</a>] -         CommonEmptyHeader wrong value
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13343'>OFBIZ-13343</a>] -         When a shipment has already been marked as &#39;Received&#39;, the screen &#39;Receive Inventory Against Purchase Order&#39; should not allow further items to be received
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13353'>OFBIZ-13353</a>] -         The Receive Against PO menu item is misplaced, duplicated, and does not show focus
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13357'>OFBIZ-13357</a>] -         Issues affect the &#39;Shipment Action Bar&#39; menu of the ‘Receive Inventory Against Purchase Order’ screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13358'>OFBIZ-13358</a>] -         When receiving inventory from the ‘Receive Inventory Against Purchase Order’ screen, invoices generated for purchase orders containing more than one item are incomplete
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13364'>OFBIZ-13364</a>] -         Some widget form targets violate security checks
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13368'>OFBIZ-13368</a>] -         Remove obsolete enableRemoteStreaming from solrconfig.xml
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13373'>OFBIZ-13373</a>] -         Error when forcing PO completion if receipt contains rejected units
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13374'>OFBIZ-13374</a>] -         catalog/control/ImageRecentlyApproved fails
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13376'>OFBIZ-13376</a>] -         PO receipts with zero accepted units are not handled correctly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13377'>OFBIZ-13377</a>] -         Incorrect management of CORS origins in the rest-api plugin
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13378'>OFBIZ-13378</a>] -         Pressing sort button in any UI view will end with NPE
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13379'>OFBIZ-13379</a>] -         Not possible to add product to Promo Action Rule
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13385'>OFBIZ-13385</a>] -         Possible NPE in PayPal services
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13387'>OFBIZ-13387</a>] -         Currently RAT report stable and next are inversed
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13389'>OFBIZ-13389</a>] -         Updating field with URL with TLD not listed in UtilHttp.extractUrls 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13390'>OFBIZ-13390</a>] -         Sales Order Screen broken (Huge font size) after order completed with email notification
</li>
</ul>
                
<h2>        Improvement
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12850'>OFBIZ-12850</a>] -         Duplicate class ... hot reload failed
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-13371'>OFBIZ-13371</a>] -         Allow to optionally opt out from whitelisted static calls in Freemarker
</li>
</ul>

</div>
</div>
</div>
</div>
</section>
</section>
