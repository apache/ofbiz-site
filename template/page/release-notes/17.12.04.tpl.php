<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 17.12.04</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 17.12.04</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 17.12.04</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 17.12.04, released in 2020-07-13, is the fourth release of the 17.12 series, that has been stabilized since December 2017.</p>

    
<h2>        Sub-task
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11709'>OFBIZ-11709</a>] -         Prevent FreeMarker Template Injection (SSTI)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11716'>OFBIZ-11716</a>] -         Apache OFBiz unsafe deserialization of XMLRPC arguments
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11752'>OFBIZ-11752</a>] -         CLONE - Check embedded Javascript libs vulnerabilities using retire.js
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11836'>OFBIZ-11836</a>] -         IDOR vulnerability in the order processing feature in ecommerce component
</li>
</ul>
            
<h2>        Bug
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6408'>OFBIZ-6408</a>] -         Adding a group order generates an error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6993'>OFBIZ-6993</a>] -         Cannot find the declaration of element &#39;web-app&#39; in version 3.0 files.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8459'>OFBIZ-8459</a>] -         InventoryItemStatus is not updated to INV_PROMISED status while creating sales order for serialized product
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9476'>OFBIZ-9476</a>] -         UI issue in payment lookup.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9478'>OFBIZ-9478</a>] -         RequestHandlerException in dataResource and fixed asset lookup.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10538'>OFBIZ-10538</a>] -         Promised Datetime &amp; Current Promised Date values not getting updated in OISGIR Entity
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10539'>OFBIZ-10539</a>] -         Issue with opening a page via bookmark when the user is logged out
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10891'>OFBIZ-10891</a>] -         Send me this every month link is not working in order items section.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10904'>OFBIZ-10904</a>] -         Creating custom Time Period does not show in party time period
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10975'>OFBIZ-10975</a>] -         Buttons on edit credit card page are shown twice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11144'>OFBIZ-11144</a>] -         Create Exchange Order button on Return screen is distorted
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11294'>OFBIZ-11294</a>] -         EntityQuery queryCount is throwing error with distinct method
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11312'>OFBIZ-11312</a>] -         DatabaseUtil.getColumnInfo(...) does not retrieve primary keys due to connection-locks
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11356'>OFBIZ-11356</a>] -         FindOrders.ftl: paginateOrderList does not find orders on next page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11401'>OFBIZ-11401</a>] -         getEntityRefData service has a weird issue
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11573'>OFBIZ-11573</a>] -         Incorrect column alias in EntitySQLProcessor for sql query working with mysql 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11606'>OFBIZ-11606</a>] -         Compound-widget not works with condition
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11633'>OFBIZ-11633</a>] -         PartyProfileContent.js does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11668'>OFBIZ-11668</a>] -         startup-service does not work without runtime-data-id
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11681'>OFBIZ-11681</a>] -         ListParty does not show middleName
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11714'>OFBIZ-11714</a>] -         Issue with redirect queryParameters when the user is logged out
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11745'>OFBIZ-11745</a>] -         plugins in common-theme/webapp/common/js is not monitored by git
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11785'>OFBIZ-11785</a>] -         ViewShipment in facility does not show phone details
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11787'>OFBIZ-11787</a>] -         Overview of shipments shows links to edit shipment. Should point to viewshipment
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11796'>OFBIZ-11796</a>] -         Unnecessary iterations for all productFacilities in setLastInventoryCount
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11822'>OFBIZ-11822</a>] -         Double encoded urls are not being decoded
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11842'>OFBIZ-11842</a>] -         Failed to load PDF document after &#39;Quick checkout&#39;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11858'>OFBIZ-11858</a>] -         Console warning related to OrderHeader caching
</li>
</ul>
            
<h2>        New Feature
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11094'>OFBIZ-11094</a>] -         Buildbot RAT for releases branches
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11691'>OFBIZ-11691</a>] -         Create a simple INSTALL file with minimum installation information and redirection to more documentation
</li>
</ul>
    
<h2>        Improvement
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11665'>OFBIZ-11665</a>] -         Theme files loading taking longer time
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11879'>OFBIZ-11879</a>] -         Put the AsciiDoc files in main repo under the web site
</li>
</ul>
    

  </div>
</div>
</div>
</div>
</section>
</section>