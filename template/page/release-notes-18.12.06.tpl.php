<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 18.12.04</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 18.12.06</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 18.12.06</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 18.12.06, released on September 2022, is the sixth and final release of the 18.12 series, that has been stabilized since December 2018.</p>



        Release Notes - OFBiz - Version 18.12.06
    
<h2>        Sub-task
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12646'>OFBIZ-12646</a>] -         Java Deserialization vulnerability in Apache OfBiz (CVE-2022-29063)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11407'>OFBIZ-11407</a>] -         Upgrade Tomcat from 9.0.29 to 9.0.31 (CVE-2020-1938)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11948'>OFBIZ-11948</a>] -         Remote Code Execution (File Upload) Vulnerability
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12539'>OFBIZ-12539</a>] -         Upgrade Tomcat from 9.0.54 to 9.0.58
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12549'>OFBIZ-12549</a>] -         [SECURITY] CVE-2022-23437: Infinite loop within Apache XercesJ xml parser
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12558'>OFBIZ-12558</a>] -         Possible authenticated attack related to Tomcat CVE-2020-1938
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12573'>OFBIZ-12573</a>] -         CLONE - [SECURITY] Upgrade Tika to 1.28.1
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12582'>OFBIZ-12582</a>] -         Prevent post-Auth vulnerability: FreeMarker Bypass
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12584'>OFBIZ-12584</a>] -         Stored XSS in webappPath parameter from content/control/EditWebSite
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12592'>OFBIZ-12592</a>] -         Prevent possible DOS attack done using Java deserialisation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12594'>OFBIZ-12594</a>] -         Prevent Freemarker interpolation in fields
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12626'>OFBIZ-12626</a>] -         [SECURITY] Upgrade Tika to 1.28.3
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12656'>OFBIZ-12656</a>] -         Update Solr and Lucene from 8.11.1 to 8.11.2 for security reason
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12657'>OFBIZ-12657</a>] -         [SECURITY] Upgrade Tika to 1.28.4
</li>
</ul>
            
<h2>        Bug
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11429'>OFBIZ-11429</a>] -         Setting VIEW-INDEX to 0, when not initialised in ForumScreens.xml#Showforum &quot;New Message&quot; Link
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12097'>OFBIZ-12097</a>] -         Date picker not initialised in ajax-called form 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12178'>OFBIZ-12178</a>] -         ModelInduceFromDb does not show entity relations.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12264'>OFBIZ-12264</a>] -         Multiple Facility Inventory reservation does not consider store facility thru date
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12359'>OFBIZ-12359</a>] -         ProductFacility on ecommerce listing product issue
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12455'>OFBIZ-12455</a>] -         Product inventory reservation places orders if quantityNotReserved !=0 and requireInventory=Y
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12466'>OFBIZ-12466</a>] -         Solr generates an error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12478'>OFBIZ-12478</a>] -         Screen Xml renderer failed on renderContainer[Begin,End] ftl macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12485'>OFBIZ-12485</a>] -         AssetMaint not accessible by user with &#39;VIEW&#39; permission
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12505'>OFBIZ-12505</a>] -         Wrong Field Name Definition in RequirementForms
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12548'>OFBIZ-12548</a>] -         placeholder text has been implemented but seems to do nothing
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12550'>OFBIZ-12550</a>] -         Manufacturing Jobshop find screen by default does not show all production runs
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12552'>OFBIZ-12552</a>] -         View for ViewBinaryDataResource missing
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12555'>OFBIZ-12555</a>] -          default-field-type hidden doesn&#39;t works for auto-fields-service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12571'>OFBIZ-12571</a>] -         Groovy denied list bypass causes post-auth RCE from webtools/control/ProgramExport
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12595'>OFBIZ-12595</a>] -         Test run was unsuccessful because of failing solr tests
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12600'>OFBIZ-12600</a>] -         Solr requires application/x-www-form-urlencoded
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12602'>OFBIZ-12602</a>] -         XML Import fails due to security check
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12603'>OFBIZ-12603</a>] -         In place editor wrong enable on display field
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12618'>OFBIZ-12618</a>] -         German Translation - Inv. Nr.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12619'>OFBIZ-12619</a>] -         Required field not working on upload type form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12625'>OFBIZ-12625</a>] -         Webtools Service Logs ‘Service Name’ column always empty
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12635'>OFBIZ-12635</a>] -         Add missing notification tag in services xsd file
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12636'>OFBIZ-12636</a>] -         Unable to upload a file through ecommerce, but if i move the same menu to Webtools,Its working.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12685'>OFBIZ-12685</a>] -         Content tag in a screen does not display correctly images
</li>
</ul>
                
<h2>        Improvement
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6065'>OFBIZ-6065</a>] -         Data of tenant specific component gets loaded in all instances
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6066'>OFBIZ-6066</a>] -         Tenant specific components are visible/accessible in any tenant instance
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12589'>OFBIZ-12589</a>] -         Update to Tomcat 9.0.60
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12590'>OFBIZ-12590</a>] -         Update to log4j 2.17.2
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12599'>OFBIZ-12599</a>] -         In UtilHttp, for regex processing of urls, replace Java regexp with RE2J
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12632'>OFBIZ-12632</a>] -         German Translation - Category
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12670'>OFBIZ-12670</a>] -         Make loading of data containing urls configurable
</li>
</ul>       

  </div>
</div>
</div>
</div>
</section>
</section>