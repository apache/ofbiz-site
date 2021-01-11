<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 17.12.05</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 17.12.05</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 17.12.05</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 17.12.05, released on January 2021, is the fifth and final release of the 17.12 series, that has been stabilized since December 2017.</p>

    
<h2>        Sub-task
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11840'>OFBIZ-11840</a>] -         Reflected XSS in content component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11871'>OFBIZ-11871</a>] -         Server-Side Template Injection using Static
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12055'>OFBIZ-12055</a>] -         Prevent possible post-auth RCE from webtools/control/ProgramExport
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12057'>OFBIZ-12057</a>] -         Prevent arbitary file write using webtools/control/EntitySQLProcessor.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12080'>OFBIZ-12080</a>] -         Secure the uploads
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12096'>OFBIZ-12096</a>] -         Post-auth XSS vulnerability at catalog/control/EditProductPromo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12098'>OFBIZ-12098</a>] -         Make ruleName field in PriceForms.xml#AddPriceRules safe
</li>
</ul>
            
<h2>        Bug
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7249'>OFBIZ-7249</a>] -         Error on removing scrum members
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8302'>OFBIZ-8302</a>] -         Sorting of lists generates undesired results
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9687'>OFBIZ-9687</a>] -         Bug in order manager main page when using Arab language
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9901'>OFBIZ-9901</a>] -         Unable to create event in SFA component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10302'>OFBIZ-10302</a>] -         Display/functionality  improvement in findParty of OOTB regarding classification group
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10532'>OFBIZ-10532</a>] -         Default value flags not working for configurable and variant products at the time of order entry
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10536'>OFBIZ-10536</a>] -         Giant Widget with variant explosion: a &quot;Select Unit of Measure&quot; dropdown box appears with no reason.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10669'>OFBIZ-10669</a>] -         Getting Insecure connection error while navigating from product link
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10834'>OFBIZ-10834</a>] -         Uploading image to data resource
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11168'>OFBIZ-11168</a>] -         Issue in creating promotion action
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11582'>OFBIZ-11582</a>] -         Required fields for party content upload are not checked
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11734'>OFBIZ-11734</a>] -         View Image button on order view page fails to render the image
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11735'>OFBIZ-11735</a>] -         Product link on Order confirmation page is not responding
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11788'>OFBIZ-11788</a>] -         Edit button(s) are shown for shipments received or shipped
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11838'>OFBIZ-11838</a>] -         One page checkout is broken because of ordermgr::getAssociatedStateList
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11881'>OFBIZ-11881</a>] -         Wrong image name in css
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11906'>OFBIZ-11906</a>] -         product summary looks bad in the promotion products list
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11910'>OFBIZ-11910</a>] -         product summary cards don&#39;t have uniform height
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11920'>OFBIZ-11920</a>] -         Distorted Final Checkout Review page when Credit card is selected as Payment option
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11971'>OFBIZ-11971</a>] -         Incorrect data for InvoiceItemTypeMap and ReturnItemTypeMap
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11972'>OFBIZ-11972</a>] -         wrong quote marks
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11976'>OFBIZ-11976</a>] -         svg files not removed on clean
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11977'>OFBIZ-11977</a>] -         multiflex css is linking to wrong location
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11978'>OFBIZ-11978</a>] -         &quot;cart&quot; should be &quot;card&quot;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11984'>OFBIZ-11984</a>] -         MessagingException in sendShipmentScheduledNotification service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11993'>OFBIZ-11993</a>] -         display/selection of unit of measure is broken/plugins
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12014'>OFBIZ-12014</a>] -         Error while decoding url parameters with percent character
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12019'>OFBIZ-12019</a>] -         variant product selection trashes image
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12023'>OFBIZ-12023</a>] -         Label issue on List Companies page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12026'>OFBIZ-12026</a>] -         Hyperlink title under form widget doesn&#39;t support character encoding for special characters
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12039'>OFBIZ-12039</a>] -         Flexible reports use an old noNamespaceSchemaLocation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12044'>OFBIZ-12044</a>] -         Issue: Displaying company and product information at product backlog, subcomponent of Scrum Application
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12045'>OFBIZ-12045</a>] -         Single product tile is displayed on one row in product search
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12050'>OFBIZ-12050</a>] -         NotSerializableException using uploadPartyContentFile service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12066'>OFBIZ-12066</a>] -         init-gradle-wrapper.sh fails to install wrapper files using wget
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12078'>OFBIZ-12078</a>] -         Remove hardcoded product category on CategoryWorker.getCatalogTopCategory
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12082'>OFBIZ-12082</a>] -         Unique form names for promo actions
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12087'>OFBIZ-12087</a>] -         Lucene TopScoreDocCollector::create wrong call the 2 in Search.groovy scripts
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12100'>OFBIZ-12100</a>] -         Gradle build of 17.12.04 crashes on Centos 8
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12101'>OFBIZ-12101</a>] -         partymgr fails to upload image
</li>
</ul>
                
<h2>        Improvement
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9254'>OFBIZ-9254</a>] -         Inconsistent String Comparisons
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9978'>OFBIZ-9978</a>] -         Upgrade jQuery 1.11.0 to jQuery 3.2.1
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11882'>OFBIZ-11882</a>] -         Rename a few map files
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11891'>OFBIZ-11891</a>] -         Hard coded label in ProductUomDropDownOnly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11892'>OFBIZ-11892</a>] -         Add missing jGrowl map file
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11950'>OFBIZ-11950</a>] -         Add a title to Javadoc overview
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12029'>OFBIZ-12029</a>] -         Handle special characters like single quote in Freemarker template (prevent encoding)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12067'>OFBIZ-12067</a>] -         Update IND Geo data as per 2020-11-24  notification
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12085'>OFBIZ-12085</a>] -          Gradle logging hygiene
</li>
</ul>   

  </div>
</div>
</div>
</div>
</section>
</section>