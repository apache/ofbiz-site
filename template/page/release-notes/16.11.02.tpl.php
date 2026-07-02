<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 16.11.02</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 16.11.02</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 16.11.02</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
      <p>Apache OFBiz&reg; 16.11.02, released in 2017-05-22, is the second release of the 16.11 series, that has been stabilized since November 2016.</p>
<h2>Bug</h2>
<ul>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6386'>OFBIZ-6386</a>] - compareBigDecimals in org.ofbiz.minilang.method.conditional.Compare does not compare certain values correctly</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7066'>OFBIZ-7066</a>] - temporal expression screen missing date dialogbox</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7265'>OFBIZ-7265</a>] - Could not obtain Lock on lucene index Lock</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7375'>OFBIZ-7375</a>] - Routing should not be allow to update with empty routing name</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8266'>OFBIZ-8266</a>] - From Date and Thru Date doesn&#39;t reflect on List Quote Roles screen.</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8318'>OFBIZ-8318</a>] - Error on scrum main page</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9125'>OFBIZ-9125</a>] - Errormessage is displayed twice in LoginEvents.java</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9126'>OFBIZ-9126</a>] - SimpleMethod: Problem with Variables in key-fields</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9133'>OFBIZ-9133</a>] - catalog/control/FindReviews does not render proper column data</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9152'>OFBIZ-9152</a>] - SimpleMethod: FindByAnd never using EntityListIterator</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9155'>OFBIZ-9155</a>] - JobPoller does not run and hence scheduled/async jobs are never run</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9157'>OFBIZ-9157</a>] - &quot;View Order&quot; throws exception in getReturnableQuantity</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9178'>OFBIZ-9178</a>] - deprecation messages in console output</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9184'>OFBIZ-9184</a>] - In entitymodel.xsd entity-alias for condition-expr must be required</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9191'>OFBIZ-9191</a>] - Navigate Accounts tree does not work</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9195'>OFBIZ-9195</a>] - Error in glAccountId retrieval for fixed asset depreciations </li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9196'>OFBIZ-9196</a>] - Regression: a commit between R15 and the Gradle switch uses/blocks the ports</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9201'>OFBIZ-9201</a>] - Birt logging unlogical high</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9204'>OFBIZ-9204</a>] - Cancelled OrderItems are still included in orderGrandTotal</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9208'>OFBIZ-9208</a>] - reinstate url cache in UtilURL.fromResource</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9216'>OFBIZ-9216</a>] - report GL Account Trial Balance</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9220'>OFBIZ-9220</a>] - Employment Applications in Party manager does not list any record even if they exist.</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9224'>OFBIZ-9224</a>] - 16.11 ofbizUrl include host+port and break some reverse-proxy / docker setups</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9225'>OFBIZ-9225</a>] - Editing quantity of configurable products changes actual product </li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9228'>OFBIZ-9228</a>] - Create an Accounting Transaction page not found</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9230'>OFBIZ-9230</a>] - Missing reference to the delegator in framework/widget/templates/HtmlFormMacroLibrary.ftl</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9234'>OFBIZ-9234</a>] - The ecommerce breadcrumb fails when you come from the catalog product link</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9252'>OFBIZ-9252</a>] - While re-ordering an order, order terms doesn&#39;t set</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9261'>OFBIZ-9261</a>] - Handle only labels with the &quot;_&quot; separator between languages and countries</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9265'>OFBIZ-9265</a>] - Error in accounting report inventory valuation with through date with an empty value.</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9280'>OFBIZ-9280</a>] - Sort Links in Lookup for Data Resource Id causes unwanted behaviour on Find Content page</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9309'>OFBIZ-9309</a>] - Ecommerce component showing error screen on searchContent from showcontenttree page</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9311'>OFBIZ-9311</a>] - The help button or link does not show for the Birt, BI and example components</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9314'>OFBIZ-9314</a>] - WorkEffort shows error on party assignment</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9315'>OFBIZ-9315</a>] - WorkEffort Keywords does not list after adding.</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9324'>OFBIZ-9324</a>] - Accounting_quantity_diff &lt;-- Item variance</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9345'>OFBIZ-9345</a>] - Error viewing tomahawk-themed page when externalLoginKey is not enabled</li>
</ul>
                    
<h2>Improvement</h2>
<ul>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9144'>OFBIZ-9144</a>] - refactor javadocs in OFBiz to be standards compliant</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9175'>OFBIZ-9175</a>] - Build OFBIZ as EAR with Gradle EAR Plugin</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9289'>OFBIZ-9289</a>] - SOAPEventHandler only outputs error to log when secureSoapAnswer = false</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9318'>OFBIZ-9318</a>] - Create New Quote button is duplicated on View Quote page</li>
</ul>
                                                                        
<h2>Task</h2>
<ul>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9323'>OFBIZ-9323</a>] - Remove the birt.tld file and all related files and lines</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9326'>OFBIZ-9326</a>] - Running and Debugging OFBiz in Intellij IDEA</li>
</ul> 
<h2>Sub-task</h2>
<ul>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9198'>OFBIZ-9198</a>] - Missing file results in error</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9310'>OFBIZ-9310</a>] - On setting verbose true, UtilHttp.getParameterMap() method prints username and password in logs</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9313'>OFBIZ-9313</a>] - Update Tomcat to 8.0.42 because of CVE-2017-5648</li>
 <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9331'>OFBIZ-9331</a>] - Convert QuoteRole entity related service from simple to entity auto. </li>
</ul>
  </div>
</div>
</div>
</div>
</section>
</section>