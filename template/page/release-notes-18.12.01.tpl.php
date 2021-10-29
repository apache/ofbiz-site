<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 18.12.01</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 18.12.01</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 18.12.01</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 18.12.01, released on October 2021, is the first release of the 18.12 series, that has been stabilized since December 2018.</p>

<h2>        Sub-task
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3499'>OFBIZ-3499</a>] -         help requires content component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4361'>OFBIZ-4361</a>] -         Any ecommerce user has the ability to reset anothers password (including admin) via &quot;Forget Your Password&quot;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5444'>OFBIZ-5444</a>] -         Create patch for removal of IDEAL code in framework
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5445'>OFBIZ-5445</a>] -         Have eCommerce component reflect the new situation re iDEAL
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6655'>OFBIZ-6655</a>] -         Add session tracking mode and make cookie secure
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6946'>OFBIZ-6946</a>] -         Remove ftl dependency in order on ecommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7246'>OFBIZ-7246</a>] -         Workeffort : Arrange UI labels in alphabetic order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7325'>OFBIZ-7325</a>] -         Ecommerce : Arrange UI Labels in alphabetic order according to best practice.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7670'>OFBIZ-7670</a>] -         OFBIZ-7517:SpecialPurpose/ecommerce: Correct all the checkboxes and radio buttons in all the ecommerce FTLs.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7738'>OFBIZ-7738</a>] -         OFBIZ-7471: Improve all the service level error messages for missing required field for workeffort component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8929'>OFBIZ-8929</a>] -         OFBIZ-7520: Consistency and Readability improvements for log tag
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8930'>OFBIZ-8930</a>] -         OFBIZ-7520: Consistency and Readability improvements for option (form widget) tag
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8965'>OFBIZ-8965</a>] -         OFBIZ-7520: Consistency and Readability improvements for event tag (controller.xml)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8972'>OFBIZ-8972</a>] -         OFBIZ-7520: Consistency and Readability improvements for include-menu tag
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8991'>OFBIZ-8991</a>] -         OFBIZ-7520: Consistency and Readability improvements for condition tag
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9089'>OFBIZ-9089</a>] -         Unit test case for service - createProductFeatureType
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9522'>OFBIZ-9522</a>] -         User should be notified with success message on creating shopping list in ecommerce component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9533'>OFBIZ-9533</a>] -         User should be notified with success message on MRP run in manufacturing component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9585'>OFBIZ-9585</a>] -         Convert createContactList service from simple to entity-auto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9804'>OFBIZ-9804</a>] -         Link in verification email for Newsletter gives security error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9844'>OFBIZ-9844</a>] -         Replace Inline js with External js in renderTextField macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9846'>OFBIZ-9846</a>] -         Replace Inline js with External js in renderFormClose macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9848'>OFBIZ-9848</a>] -         Replace Inline js with External js in renderDateTimeField macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9849'>OFBIZ-9849</a>] -         Replace Inline js with External js in renderDropDownField macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9850'>OFBIZ-9850</a>] -         Replace Inline js with External js in renderDateFindField macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9853'>OFBIZ-9853</a>] -         Replace Inline js with External js in renderFieldGroupOpen macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9973'>OFBIZ-9973</a>] -         [FB] Find Security Bugs
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9986'>OFBIZ-9986</a>] -         Convert InvoiceServices.xml mini lang to groovy
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10031'>OFBIZ-10031</a>] -         Convert CategoryServices.xml mini lang to groovy
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10113'>OFBIZ-10113</a>] -         Replace Asm select plugin with Select2.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10214'>OFBIZ-10214</a>] -         Update build.gradle to the latest dependencies
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10254'>OFBIZ-10254</a>] -         Create Empty Document templates for Human Resources Documentation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10257'>OFBIZ-10257</a>] -         Add Document Content: hr-employee-evaluations.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10258'>OFBIZ-10258</a>] -         Add Document Content: hr-glossary.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10259'>OFBIZ-10259</a>] -         Add Document Content: hr-employee-positions.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10260'>OFBIZ-10260</a>] -         Add Document Content: hr-employees.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10261'>OFBIZ-10261</a>] -         Add Document Content: hr-employments.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10263'>OFBIZ-10263</a>] -         Add Document Content: hr-positions.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10264'>OFBIZ-10264</a>] -         Add Document Content: hr-qualifications.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10265'>OFBIZ-10265</a>] -         Add Document Content: hr-recruitment.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10266'>OFBIZ-10266</a>] -         Add Document Content: hr-skills.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10267'>OFBIZ-10267</a>] -         Add Document Content: hr-resumes.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10269'>OFBIZ-10269</a>] -         Add Document Content: hr-leave.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10270'>OFBIZ-10270</a>] -         Add Document Content: hr-security.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10332'>OFBIZ-10332</a>] -         Standardise layout for Order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10334'>OFBIZ-10334</a>] -         Standardise layout for Party
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10380'>OFBIZ-10380</a>] -         Convert facility party related services from simple to entity-auto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10395'>OFBIZ-10395</a>] -         Convert Requirement related services from simple to entity-auto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10401'>OFBIZ-10401</a>] -         Migrate createContent service from Minilang to  Entity Auto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10408'>OFBIZ-10408</a>] -         Remove entity suffix from title of all entities
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10415'>OFBIZ-10415</a>] -         Update Solr and Lucene from 7.2.1 to Solr 7.3.1 for security reason (CVE-2018-8010)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10534'>OFBIZ-10534</a>] -         &#39;Reserve After Date&#39; for order items
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10562'>OFBIZ-10562</a>] -         Document the automated authentification from a domain to another
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10564'>OFBIZ-10564</a>] -         Create an empty document templates for webapp socumentation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10678'>OFBIZ-10678</a>] -         CLONE - Check embedded Javascript libs vulnerabilities using retire.js
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10758'>OFBIZ-10758</a>] -         Replace jQuery.bind() with jQuery.on()
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10759'>OFBIZ-10759</a>] -         Replace document.write() occurrences with some legitimate code
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10770'>OFBIZ-10770</a>] -         Update Apache commons-fileupload to last version (CVE-2019-0189)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10837'>OFBIZ-10837</a>] -         Improve ObjectInputStream class (CVE-2019-0189)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10849'>OFBIZ-10849</a>] -         UI issue on ecommerce main page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10873'>OFBIZ-10873</a>] -         Update Tomcat to 9.0.16 due to CVE-2019-0199
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10920'>OFBIZ-10920</a>] -         Update Tomcat to 9.0.18 due to CVE-2019-0232 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10930'>OFBIZ-10930</a>] -         Stores can&#39;t be modified at ofbizsetup/control/updateProductStore
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11006'>OFBIZ-11006</a>] -         Create customer request screen breaks when entering special characters (CVE-2019-10074)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11033'>OFBIZ-11033</a>] -         service &#39;loadSalesOrderItemFact&#39; has hard coded currencyUomId
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11150'>OFBIZ-11150</a>] -         Form widget field with input-method=&quot;time-dropdown&quot; unable to understand the default time
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11171'>OFBIZ-11171</a>] -         Same content uploaded twice, if refresh the page after uploading the content
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11195'>OFBIZ-11195</a>] -          XML Entity Injection in webtools/control/entityImport
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11196'>OFBIZ-11196</a>] -         Path Traversal in webtools/control/FetchLogs and ViewFile
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11197'>OFBIZ-11197</a>] -         Arbitrary Code Execution
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11276'>OFBIZ-11276</a>] -         Update the SvnCheckout Gradle task to use Github svn repo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11284'>OFBIZ-11284</a>] -         We have build problems in branches with plugins
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11304'>OFBIZ-11304</a>] -         Install a Checkstyle pre-push (on every committer machine?)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11325'>OFBIZ-11325</a>] -         Fixed the issue on party page that will upload the data each time after refreshing the page.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11349'>OFBIZ-11349</a>] -         The &quot;stream&quot; request-map in ecommerce and commonext controllers requires authentication
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11470'>OFBIZ-11470</a>] -         Ensure that the SameSite attribute is set to &#39;strict&#39; for all cookies. (CVE-2019-0235)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11477'>OFBIZ-11477</a>] -         Improve Web Content Caching
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11583'>OFBIZ-11583</a>] -         Prevent Host Header Injection (CVE-2019-12425)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11709'>OFBIZ-11709</a>] -         Prevent FreeMarker Template Injection (SSTI)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11716'>OFBIZ-11716</a>] -         Apache OFBiz unsafe deserialization of XMLRPC arguments (CVE-2020-9496)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11752'>OFBIZ-11752</a>] -         CLONE - Check embedded Javascript libs vulnerabilities using retire.js
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11836'>OFBIZ-11836</a>] -         IDOR vulnerability in the order processing feature in ecommerce component (CVE-2020-13923)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11840'>OFBIZ-11840</a>] -         Reflected XSS in content component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11848'>OFBIZ-11848</a>] -         Upgrade Tomcat from 9.0.34 to 9.0.36 (CVE-2020-11996)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11871'>OFBIZ-11871</a>] -         Server-Side Template Injection using Static
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11948'>OFBIZ-11948</a>] -         Remote Code Execution (File Upload) Vulnerability
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11949'>OFBIZ-11949</a>] -         Local File Inclusion vulnerability
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12055'>OFBIZ-12055</a>] -         Prevent possible post-auth RCE from webtools/control/ProgramExport
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12056'>OFBIZ-12056</a>] -         Prevent Zip Slip vulnerability
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12057'>OFBIZ-12057</a>] -         Prevent arbitary file write using webtools/control/EntitySQLProcessor.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12080'>OFBIZ-12080</a>] -         Secure the uploads
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12096'>OFBIZ-12096</a>] -         Post-auth XSS vulnerability at catalog/control/EditProductPromo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12098'>OFBIZ-12098</a>] -         Make ruleName field in PriceForms.xml#AddPriceRules safe
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12165'>OFBIZ-12165</a>] -         Upgrade Tomcat from 9.0.41 to 9.0.43
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12195'>OFBIZ-12195</a>] -         webtools/control/threadList no longer works on trunk (only)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12205'>OFBIZ-12205</a>] -         Upgrade Apache PDFBox to 2.0.23  because of CVE-2021-27807 and CVE-2021-27906
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12212'>OFBIZ-12212</a>] -         Comment out the SOAP and HTTP engines - Fix [CVE-2021-30128]
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12216'>OFBIZ-12216</a>] -         Fixed UtilObject class [CVE-2021-29200] 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12221'>OFBIZ-12221</a>] -         Fixed ObjectInputStream denyList [CVE-2021-30128]
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12256'>OFBIZ-12256</a>] -         Update PDFBox to 2.0.24 because of CVE-2021-31811 &amp; CVE-2021-31812
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12297'>OFBIZ-12297</a>] -         Wrong uploaded file checked in Image Management [CVE-2021-37608]
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12301'>OFBIZ-12301</a>] -         SecuredUpload::isValidTextFile wrong check with uppercase
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12304'>OFBIZ-12304</a>] -         Found a new XXE (XML External Entity Injection) vulnerability in EntityImport
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12306'>OFBIZ-12306</a>] -         Found a new XXE (XML External Entity Injection) vulnerability in ArtifactInfo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12307'>OFBIZ-12307</a>] -         CVE-2021-37608 vulnerability bypass
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12316'>OFBIZ-12316</a>] -         The Solr version included in OFBiz has an SSRF vulnerability (CVE-2021-27905)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12332'>OFBIZ-12332</a>] -         post-auth Remote Code Execution Vulnerability
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12337'>OFBIZ-12337</a>] -         [SECURITY] CVE-2021-42340 Apache Tomcat DoS
</li>
</ul>
            
<h2>        Bug
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2618'>OFBIZ-2618</a>] -         double forward slashes in ecommerce emails
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4514'>OFBIZ-4514</a>] -         Taxes are not handled correctly when creating accounting transactions from purchase invoices
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5254'>OFBIZ-5254</a>] -         Services allow arbitrary HTML for parameters with allow-html set to &quot;safe&quot;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5409'>OFBIZ-5409</a>] -         JSON Response does not set http status on error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6330'>OFBIZ-6330</a>] -         The invoiceTaxTotal value is missing from createAcctgTransForPurchaseInvoice service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6408'>OFBIZ-6408</a>] -         Adding a group order generates an error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6993'>OFBIZ-6993</a>] -         Cannot find the declaration of element &#39;web-app&#39; in version 3.0 files.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7249'>OFBIZ-7249</a>] -         Error on removing scrum members
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7473'>OFBIZ-7473</a>] -         Induce Model XML from Database throws exception
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7610'>OFBIZ-7610</a>] -         Product Price set based on &#39;Purchase Price Agreement&#39; isn&#39;t honoured while same is used during ordering
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7664'>OFBIZ-7664</a>] -         Inconsistencies on the title and the label on button of create forms.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7816'>OFBIZ-7816</a>] -         Profile of contact person not shown on quick add of contact in SFA
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8302'>OFBIZ-8302</a>] -         Sorting of lists generates undesired results
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8459'>OFBIZ-8459</a>] -         InventoryItemStatus is not updated to INV_PROMISED status while creating sales order for serialized product
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9299'>OFBIZ-9299</a>] -         Logo image not showing on party profile 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9379'>OFBIZ-9379</a>] -         No definition found for view with name [setLocaleFromBrowser]
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9476'>OFBIZ-9476</a>] -         UI issue in payment lookup.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9478'>OFBIZ-9478</a>] -         RequestHandlerException in dataResource and fixed asset lookup.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9642'>OFBIZ-9642</a>] -         Product tags section displays &#39;Update&#39; button, despite of having no results 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9658'>OFBIZ-9658</a>] -         Issue while redirecting to Request Detail Screen from View Communication Event
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9677'>OFBIZ-9677</a>] -         In packing, only use reservations with stock on hand
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9687'>OFBIZ-9687</a>] -         Bug in order manager main page when using Arab language
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9855'>OFBIZ-9855</a>] -         Using try-with-resources with File IO Objects.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9867'>OFBIZ-9867</a>] -         &lt;description&gt; of &lt;visual-theme&gt; in Theme.xml does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9898'>OFBIZ-9898</a>] -         Incorrect success message after creating customer
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9901'>OFBIZ-9901</a>] -         Unable to create event in SFA component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9908'>OFBIZ-9908</a>] -         Quick Add button for shopping list on Orderentry screen is not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9997'>OFBIZ-9997</a>] -         Replace request-redirect w/ no redirect-param attribute by request-redirect-noparam
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10054'>OFBIZ-10054</a>] -         Product content management screen doesn&#39;t validate trusted users&#39; input
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10173'>OFBIZ-10173</a>] -         Add/Modify Calender Event Screen is Broken
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10183'>OFBIZ-10183</a>] -         Error on My Portal &gt; Request Overview Page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10187'>OFBIZ-10187</a>] -         OWASP sanitizer breaks proper rendering of HTML code
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10205'>OFBIZ-10205</a>] -         The setToComplete of ofbizsetup run in error when running demo General Chart Of Accounts.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10210'>OFBIZ-10210</a>] -         Values are not aligned with column over EditShoppingList Screen 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10243'>OFBIZ-10243</a>] -         Error in service definition for deleteOrderHeaderWorkEffort
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10244'>OFBIZ-10244</a>] -         french typo fix
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10274'>OFBIZ-10274</a>] -         Wrong locale/fallbackLocale logic in CategoryContentWrapper leads to unavailable alternate locale content
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10275'>OFBIZ-10275</a>] -         UtilCodec URL decoding breaks values with german umlauts
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10276'>OFBIZ-10276</a>] -         Theme screens do not load properly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10281'>OFBIZ-10281</a>] -         HttpClient failed to return the error result
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10284'>OFBIZ-10284</a>] -         Handling tenant in XmlRpcEventHandler
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10298'>OFBIZ-10298</a>] -         Fluent API Bug in getFieldList()
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10301'>OFBIZ-10301</a>] -         loadCartFromOrder changes order date even when updating order items
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10302'>OFBIZ-10302</a>] -         Display/functionality  improvement in findParty of OOTB regarding classification group
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10308'>OFBIZ-10308</a>] -         Financial account transaction --&gt; accounting transaction
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10310'>OFBIZ-10310</a>] -         Issue with Status of invoice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10327'>OFBIZ-10327</a>] -         CatalogServices #createProductCategoryAttribute doesn&#39;t check for existing attributes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10328'>OFBIZ-10328</a>] -         CatalogServices #duplicateProductCategory doesn&#39;t check for existing categories
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10356'>OFBIZ-10356</a>] -         Display of entities in text input field for Product Name
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10369'>OFBIZ-10369</a>] -         ConfigXMLReader - Events are not executed in the order defined
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10374'>OFBIZ-10374</a>] -         Existing BILLING_LOCATION record of party should expire while creating a new one
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10426'>OFBIZ-10426</a>] -         When creating blog or forums, it failed to save
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10437'>OFBIZ-10437</a>] -         &lt;#if containerId?has_content&gt; id=&quot;${containerId}&quot;&lt;/#if&gt; is missed in renderFormOpen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10459'>OFBIZ-10459</a>] -         Freemarker error on shopping list page on eCommerce storefront
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10466'>OFBIZ-10466</a>] -         UI issue on blog screens on storefront
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10473'>OFBIZ-10473</a>] -         Upper case styling for buttontext in Tomahawk theme causing wrong behaviour for alphabetical index of the service engine page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10489'>OFBIZ-10489</a>] -         Unnecessary ship groups in orders
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10501'>OFBIZ-10501</a>] -         Unable to create new facility when DB has no facility
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10506'>OFBIZ-10506</a>] -         Initial set of hasLoogedOut flag when logging in
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10532'>OFBIZ-10532</a>] -         Default value flags not working for configurable and variant products at the time of order entry
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10535'>OFBIZ-10535</a>] -         Configurable PC: adding or verifying does not work, maybe more issues...
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10536'>OFBIZ-10536</a>] -         Giant Widget with variant explosion: a &quot;Select Unit of Measure&quot; dropdown box appears with no reason.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10538'>OFBIZ-10538</a>] -         Promised Datetime &amp; Current Promised Date values not getting updated in OISGIR Entity
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10539'>OFBIZ-10539</a>] -         Issue with opening a page via bookmark when the user is logged out
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10583'>OFBIZ-10583</a>] -         Issue while creating any new event
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10585'>OFBIZ-10585</a>] -         Production run not created for marketing package auto type product if component inventory is not available
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10617'>OFBIZ-10617</a>] -         ECommerce landing page breaks if popular category does not exists
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10620'>OFBIZ-10620</a>] -         Invoice date is not displayed on findInvoice screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10635'>OFBIZ-10635</a>] -         Correct behaviour of Autologin cookies
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10666'>OFBIZ-10666</a>] -         User&#39;s name is displayed on ecommerce even after user logs out
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10669'>OFBIZ-10669</a>] -         Getting Insecure connection error while navigating from product link
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10671'>OFBIZ-10671</a>] -         Error message is displayed when user having space in username logs in at ecommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10675'>OFBIZ-10675</a>] -         createGlReconciliation throws an error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10680'>OFBIZ-10680</a>] -         partyId misses in EditEftAccount.ftl (party) when you create an EFT account from the quick finalize page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10706'>OFBIZ-10706</a>] -         EmailServices.sendMail causes a NPE, when sendFrom is missing
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10707'>OFBIZ-10707</a>] -         ListLocales throws StringIndexOutOfBounds Exception under Java 1.8.0_181
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10727'>OFBIZ-10727</a>] -         Service failed to mark expired authorized payments of Authorize.net as void
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10735'>OFBIZ-10735</a>] -         Unable to add survey product to cart in order entry form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10738'>OFBIZ-10738</a>] -         Product image is not displayed on showcart page of ecommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10741'>OFBIZ-10741</a>] -         Blank page is displayed on ecommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10743'>OFBIZ-10743</a>] -         Error message is populating while clicking on product barcode
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10765'>OFBIZ-10765</a>] -         Failed registration for virtual hosts with similar mount points
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10766'>OFBIZ-10766</a>] -         Impossible secure and autologin cookie names when mountpoint contains a slash inside its name
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10791'>OFBIZ-10791</a>] -         Unable to add product (of ASSET_USAGE type) in order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10794'>OFBIZ-10794</a>] -         Promotion condition/action type of few promotion not showing
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10796'>OFBIZ-10796</a>] -         Check run payment(A/P) transactions not getting available for reconciliation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10797'>OFBIZ-10797</a>] -         CSS Styling for Party Content progress bar is wrong in multiple theme
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10798'>OFBIZ-10798</a>] -         Unable to add item in shopping list from Quick Add
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10800'>OFBIZ-10800</a>] -         Unable to remove items from onePageCheckout screen of ecommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10802'>OFBIZ-10802</a>] -         UserLoginPasswordHistory is not maintaining password as present in UserLogin.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10814'>OFBIZ-10814</a>] -         Error parsing JWT
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10816'>OFBIZ-10816</a>] -         URL not encoding in FTL 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10833'>OFBIZ-10833</a>] -         CMS add content not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10834'>OFBIZ-10834</a>] -         Uploading image to data resource
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10836'>OFBIZ-10836</a>] -         Add To Order button not working on shopping list screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10842'>OFBIZ-10842</a>] -         No userLogin given in calculateProductPrice service call context
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10844'>OFBIZ-10844</a>] -         Ecommerce AnonContactus.ftl doesn&#39;t work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10847'>OFBIZ-10847</a>] -         Issue in order history promotion
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10850'>OFBIZ-10850</a>] -         User is unable to create return
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10852'>OFBIZ-10852</a>] -         Error message is displayed in shopping cart when click on recalculate cart link
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10853'>OFBIZ-10853</a>] -         AutoDescription of promotion showing invalid text
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10856'>OFBIZ-10856</a>] -         Customer Party getting set as &#39;organizationPartyId&#39; in one the Account transaction for Customer Invoice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10858'>OFBIZ-10858</a>] -         Last Categories section is blank 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10870'>OFBIZ-10870</a>] -         Updating productprice results in error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10876'>OFBIZ-10876</a>] -         Run MRP fails, Incompatible class
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10882'>OFBIZ-10882</a>] -         Error message is displayed while click on create new quotes.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10883'>OFBIZ-10883</a>] -         Picklist is in Input status even after order is completed
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10885'>OFBIZ-10885</a>] -         Blank page appears after using Tell-A-Friend functionality while adding item to cart
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10886'>OFBIZ-10886</a>] -         Unable to create new quote from cart at eCommerce store
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10890'>OFBIZ-10890</a>] -         Requesthandler exception is showing after clicking cancel/done button on editPerson screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10891'>OFBIZ-10891</a>] -         Send me this every month link is not working in order items section.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10895'>OFBIZ-10895</a>] -         Unknown request [images]; this request does not exist or cannot be called directly.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10900'>OFBIZ-10900</a>] -         Agreement overview does not show names of parties
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10904'>OFBIZ-10904</a>] -         Creating custom Time Period does not show in party time period
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10906'>OFBIZ-10906</a>] -         When add item on shopping cart, we lost orderItemAttributes 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10913'>OFBIZ-10913</a>] -         FindTask does not allow for all statuses possible to be selected
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10914'>OFBIZ-10914</a>] -         Fitering on StatusId in FindTask does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10915'>OFBIZ-10915</a>] -         Terminal automatically scrolls down on never ending tasks with the new console
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10926'>OFBIZ-10926</a>] -         Update an order linked to an other order lost relation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10927'>OFBIZ-10927</a>] -         Can&#39;t set (expected) start and end date of project when creating a project
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10929'>OFBIZ-10929</a>] -         Duplicate a ShoppingCartItem didn&#39;t propage OrderItemAttributes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10932'>OFBIZ-10932</a>] -         Updating an OrderItem loses supplierProductId
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10940'>OFBIZ-10940</a>] -         Ensure html verbosity is following general setup
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10942'>OFBIZ-10942</a>] -         User depersonation do not clean out impersonated user session.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10959'>OFBIZ-10959</a>] -         Enable entity timestamp fields
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10961'>OFBIZ-10961</a>] -         Shortkeys missing on WebPOS
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10967'>OFBIZ-10967</a>] -         Remove link is not working in shopping list
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10969'>OFBIZ-10969</a>] -         Unable to create Employments
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10975'>OFBIZ-10975</a>] -         Buttons on edit credit card page are shown twice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10978'>OFBIZ-10978</a>] -         Unable to find any product in Quick Add functionality
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11009'>OFBIZ-11009</a>] -         Update invoice item looses invoice context
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11010'>OFBIZ-11010</a>] -         Touch F8 in webpos does not work and generate an error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11013'>OFBIZ-11013</a>] -         Scrum parties don&#39;t have partyTypeId set
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11018'>OFBIZ-11018</a>] -         Redirection of pathAlias to aliasTo does not work properly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11021'>OFBIZ-11021</a>] -         The drop-ship process behaves incorrectly when a combination of drop-ship and non-drop-ship products are added into the cart
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11022'>OFBIZ-11022</a>] -         Edit WebSite Path Alias is not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11028'>OFBIZ-11028</a>] -         field emplFromDate is forgot in PayHistory entity
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11029'>OFBIZ-11029</a>] -         Issue in function getVariantSelectionFeatures of ProductWorker.java
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11038'>OFBIZ-11038</a>] -         Unable to view a PartyContent on view profile page of a party
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11040'>OFBIZ-11040</a>] -         Manage EECAs on delegator.removeBy
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11041'>OFBIZ-11041</a>] -         Incorrect findByCount on DynamicView with groupBy and selected field
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11047'>OFBIZ-11047</a>] -         It&#39;s impossible to create more than 1 ProductManufacturingRule
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11048'>OFBIZ-11048</a>] -         When you select a ProductManufacturingRule if several exist only the one selected will show multiple times in the list
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11049'>OFBIZ-11049</a>] -         massPrintOrders does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11052'>OFBIZ-11052</a>] -         Mass actions in FindOrders.ftl don&#39;t keep parameters
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11056'>OFBIZ-11056</a>] -         Fix duplicate entry in paramWithSuffix
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11058'>OFBIZ-11058</a>] -         Issue in creating promotion action
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11059'>OFBIZ-11059</a>] -         Runtime error exceptions at Leads page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11068'>OFBIZ-11068</a>] -         Error while CSR creates a return.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11071'>OFBIZ-11071</a>] -         Gradle eclipse task - classpath modification (Add exclusion for &lt;OFBiz&gt;/framework/base/config and &lt;OFBiz&gt;/framework/base/dtd)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11078'>OFBIZ-11078</a>] -         Decrypt a field on embedded entity-view failed
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11108'>OFBIZ-11108</a>] -         Freemarker error on reviewProduct page on storefront
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11109'>OFBIZ-11109</a>] -         Getting an error while creating event from SFA without providing event name
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11113'>OFBIZ-11113</a>] -         “At least one phone number is required below” message should be uneditable while creating new customer using partymgr
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11119'>OFBIZ-11119</a>] -         Sales By Store Report not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11121'>OFBIZ-11121</a>] -         Order status history should show  party id instead of login id .
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11123'>OFBIZ-11123</a>] -         NotSerializableException after uploading images to an order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11125'>OFBIZ-11125</a>] -         No proper error message displayed if user misses to select entities 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11144'>OFBIZ-11144</a>] -         Create Exchange Order button on Return screen is distorted
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11146'>OFBIZ-11146</a>] -         favicon.ico missing for LookupDecorator
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11148'>OFBIZ-11148</a>] -         In Product Image Management uploading file fails due to missing StatusValidChange
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11156'>OFBIZ-11156</a>] -         Issue loading solr component (JNDI timeout)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11160'>OFBIZ-11160</a>] -         Add button for &#39;Gift Message is shown on completed order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11168'>OFBIZ-11168</a>] -         Issue in creating promotion action
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11170'>OFBIZ-11170</a>] -         UiLabel is missing for Web Analytics Type on content  component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11175'>OFBIZ-11175</a>] -         CategoryServices returns null when opening Product main page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11186'>OFBIZ-11186</a>] -         Fix syntax error on groovy
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11201'>OFBIZ-11201</a>] -         Error in log when looking for parties at partymgr/control/main
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11207'>OFBIZ-11207</a>] -         Send upload form with even-update-area doesn&#39;t works
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11211'>OFBIZ-11211</a>] -         Fix multi modal opening
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11212'>OFBIZ-11212</a>] -         Default option for ModelFormField.DateFindField doesn&#39;t work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11215'>OFBIZ-11215</a>] -         Email password is not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11221'>OFBIZ-11221</a>] -         Wrong heading on creating quote under order component.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11223'>OFBIZ-11223</a>] -         User should not be directed to main page after adding product to cart from showcart page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11226'>OFBIZ-11226</a>] -         Issue with &quot;User name filed&quot; while creating the new user
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11230'>OFBIZ-11230</a>] -         EditExample always update status, because current Status not shown
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11231'>OFBIZ-11231</a>] -         Order Status History section broken for anonymous order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11246'>OFBIZ-11246</a>] -         The createTaskContent request does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11252'>OFBIZ-11252</a>] -         FTL error for purchase order with Bulk Item Type
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11259'>OFBIZ-11259</a>] -         SOAPService does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11265'>OFBIZ-11265</a>] -         Getting policy error while editing html text data using cms
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11267'>OFBIZ-11267</a>] -         baseEcommerceSecureUrl does not work in ecomseo. 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11278'>OFBIZ-11278</a>] -         SeoContextFilter.java is not able to handle query strings
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11281'>OFBIZ-11281</a>] -         Possible Nullpointer in StringUtil#strToMap
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11283'>OFBIZ-11283</a>] -         Number problem cancelling order item
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11291'>OFBIZ-11291</a>] -         Alternate KeyWord Thesaurus functionality does not work properly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11294'>OFBIZ-11294</a>] -         EntityQuery queryCount is throwing error with distinct method
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11312'>OFBIZ-11312</a>] -         DatabaseUtil.getColumnInfo(...) does not retrieve primary keys due to connection-locks
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11316'>OFBIZ-11316</a>] -         Bug when order contains adjustments with NULL amount
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11318'>OFBIZ-11318</a>] -         Unable to continue to Step 3 in One Page Checkout 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11320'>OFBIZ-11320</a>] -         updatePassword does not save optional parameter requirePasswordChange
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11329'>OFBIZ-11329</a>] -         setUserTimeZone should ran only once based on error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11340'>OFBIZ-11340</a>] -         Crashed Scheduled jobs are not getting rescheduled with temporal expression
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11342'>OFBIZ-11342</a>] -         Error in user impersonation with sub permission
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11356'>OFBIZ-11356</a>] -         FindOrders.ftl: paginateOrderList does not find orders on next page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11385'>OFBIZ-11385</a>] -         Possible NPE in DatabaseUtil.getColumnInfo(...)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11396'>OFBIZ-11396</a>] -         replaceFirst sensible to variable pattern
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11398'>OFBIZ-11398</a>] -         Issue with creating SEO CATEGORIES/PRODUCTS from catalog manager
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11400'>OFBIZ-11400</a>] -         Product Images not rendering on One Page Checkout
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11401'>OFBIZ-11401</a>] -         getEntityRefData service has a weird issue
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11410'>OFBIZ-11410</a>] -         Agreement Item can&#39;t be removed.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11441'>OFBIZ-11441</a>] -         createMissingCategoryAndProductAltUrls service misses a transaction 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11448'>OFBIZ-11448</a>] -         Potential Nullpointer in ErrorPage.ftl
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11451'>OFBIZ-11451</a>] -         ofbiz-plugins repo does not have our license
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11466'>OFBIZ-11466</a>] -         CommonTheme has a dependency on Flatgrey application.js
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11534'>OFBIZ-11534</a>] -         Error in uploading very large files, ie &gt;2MB
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11573'>OFBIZ-11573</a>] -         Incorrect column alias in EntitySQLProcessor for sql query working with mysql 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11582'>OFBIZ-11582</a>] -         Required fields for party content upload are not checked
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11597'>OFBIZ-11597</a>] -         Error removing an uploaded party content
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11601'>OFBIZ-11601</a>] -         Build failed due to gradle-svntools-plugin dependency
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11606'>OFBIZ-11606</a>] -         Compound-widget not works with condition
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11633'>OFBIZ-11633</a>] -         PartyProfileContent.js does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11668'>OFBIZ-11668</a>] -         startup-service does not work without runtime-data-id
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11680'>OFBIZ-11680</a>] -         ViewQuoteProfit shows fields in wrong order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11681'>OFBIZ-11681</a>] -         ListParty does not show middleName
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11684'>OFBIZ-11684</a>] -         Form to add an employee position doesn&#39;t function properly when invoked from Humanres tree
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11714'>OFBIZ-11714</a>] -         Issue with redirect queryParameters when the user is logged out
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11734'>OFBIZ-11734</a>] -         View Image button on order view page fails to render the image
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11735'>OFBIZ-11735</a>] -         Product link on Order confirmation page is not responding
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11743'>OFBIZ-11743</a>] -         Multiple menu item link parameters get lost if link type is layered-modal
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11745'>OFBIZ-11745</a>] -         plugins in common-theme/webapp/common/js is not monitored by git
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11785'>OFBIZ-11785</a>] -         ViewShipment in facility does not show phone details
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11787'>OFBIZ-11787</a>] -         Overview of shipments shows links to edit shipment. Should point to viewshipment
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11788'>OFBIZ-11788</a>] -         Edit button(s) are shown for shipments received or shipped
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11796'>OFBIZ-11796</a>] -         Unnecessary iterations for all productFacilities in setLastInventoryCount
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11822'>OFBIZ-11822</a>] -         Double encoded urls are not being decoded
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11838'>OFBIZ-11838</a>] -         One page checkout is broken because of ordermgr::getAssociatedStateList
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11842'>OFBIZ-11842</a>] -         Failed to load PDF document after &#39;Quick checkout&#39;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11858'>OFBIZ-11858</a>] -         Console warning related to OrderHeader caching
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11862'>OFBIZ-11862</a>] -         BigDecimal casting in Groovy
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11906'>OFBIZ-11906</a>] -         product summary looks bad in the promotion products list
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11910'>OFBIZ-11910</a>] -         product summary cards don&#39;t have uniform height
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11920'>OFBIZ-11920</a>] -         Distorted Final Checkout Review page when Credit card is selected as Payment option
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11928'>OFBIZ-11928</a>] -         Explode items not handling tax and adjustments properly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11943'>OFBIZ-11943</a>] -         Makes Cancel/Done buttons used in payment methods screens from SFA profile work as in &quot;Create EFT Account&quot; screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11967'>OFBIZ-11967</a>] -         wrong maxheapsize
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11970'>OFBIZ-11970</a>] -         Add to cart is not working for products with selectable features
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12016'>OFBIZ-12016</a>] -         DiskFileItem as request attribute creates problems
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12046'>OFBIZ-12046</a>] -         Edit record in product promotion, &quot;Promotion Last Modified Date&quot; is invalid, but don&#39;t notice to user
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12047'>OFBIZ-12047</a>] -         Remove _PREVIOUS_REQUEST_ Session Attribute on non-authentication pages
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12050'>OFBIZ-12050</a>] -         NotSerializableException using uploadPartyContentFile service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12068'>OFBIZ-12068</a>] -         Order processing issue for dropship only products
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12108'>OFBIZ-12108</a>] -         Invalid Currency symbol in income statement csv export
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12110'>OFBIZ-12110</a>] -         Overlapped labels in Accounting transaction pdf export
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12140'>OFBIZ-12140</a>] -         Ampersand in Party not displayed correctly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12142'>OFBIZ-12142</a>] -         Creating a new Customer create a wrong record in CommunicationEvent
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12143'>OFBIZ-12143</a>] -         Incorrect mapping for Lookup Purchase Order 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12153'>OFBIZ-12153</a>] -         Error in deleting Financial Account
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12164'>OFBIZ-12164</a>] -         NPE in Party/My Communications
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12173'>OFBIZ-12173</a>] -         Visit disabling causes NullPointerException on ecomm groovy script
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12175'>OFBIZ-12175</a>] -         Party Export/Import not congruent
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12177'>OFBIZ-12177</a>] -         Possibly currency display bug in &quot;Find Invoices&quot;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12182'>OFBIZ-12182</a>] -         Bypass Java GString to String conversion in ObjectType::simpleTypeOrObjectConvert
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12187'>OFBIZ-12187</a>] -         Error while running MRP
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12189'>OFBIZ-12189</a>] -         Exception error on ecommerce portal while trying to register new user
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12191'>OFBIZ-12191</a>] -         Bug preventing proper explosion of BOM containing virtual nodes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12193'>OFBIZ-12193</a>] -         Cant search ViewEntity InventoryItemDetailForSum
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12198'>OFBIZ-12198</a>] -         EditFinAccountReconciliations does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12210'>OFBIZ-12210</a>] -         orderStatus.changeReason not set when orderItem is cancelled
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12211'>OFBIZ-12211</a>] -         addImageForProduct fails
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12222'>OFBIZ-12222</a>] -         Error while deleting a Facility because of an existing FacilityLocationGeoPoint
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12228'>OFBIZ-12228</a>] -         Setup instructions don&#39;t work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12229'>OFBIZ-12229</a>] -         Error page shown when clicking on a product Id in the purchase order page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12233'>OFBIZ-12233</a>] -         Plugin not showing in menu due to permission 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12236'>OFBIZ-12236</a>] -         Incorrect price for selected variant shown
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12247'>OFBIZ-12247</a>] -         Allow to pass a Google API key for geolocation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12249'>OFBIZ-12249</a>] -         Unexpected decoding of url encoded textarea data after submission 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12250'>OFBIZ-12250</a>] -         Failed to update work effort child
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12253'>OFBIZ-12253</a>] -         Show WorkEffort names in FindWorkEffort page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12254'>OFBIZ-12254</a>] -         XSS vulnerability for ListWorkEfforts form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12258'>OFBIZ-12258</a>] -         Adding tel protocol in CustomPermissivePolicy is not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12259'>OFBIZ-12259</a>] -         SeoConfigUtil does not maintaince char-replace-order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12273'>OFBIZ-12273</a>] -         IndexOutOfBoundsException on Entity Import
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12280'>OFBIZ-12280</a>] -         Upgrade Tomcat from 9.0.43 to 9.0.48 (due to CVEs-2021-30037/30639/30640)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12281'>OFBIZ-12281</a>] -         Static initialization vectors for encryption
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12286'>OFBIZ-12286</a>] -         Changes in dtds or parsers coused ofbiz build to crash
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12289'>OFBIZ-12289</a>] -         bug on button from catalog to party associated
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12290'>OFBIZ-12290</a>] -         GL Reconciliation unable to be edited
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12305'>OFBIZ-12305</a>] -         Groovy Program sandbox bypass
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12322'>OFBIZ-12322</a>] -         Groovy DSL failed to use &#39;run service&#39; from an event call
</li>
</ul>
        
<h2>        New Feature
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5048'>OFBIZ-5048</a>] -         Multi Part Input Parameters not Available in Groovy Event
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7482'>OFBIZ-7482</a>] -         Deposit price support 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7713'>OFBIZ-7713</a>] -         Introduce a quick way for adding Sales Price agreements with customers for any specific product from Catalog
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9558'>OFBIZ-9558</a>] -         Manage deprecated service on the ModelService
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9833'>OFBIZ-9833</a>] -         Token Based Authentication
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10171'>OFBIZ-10171</a>] -         Implement and Apply Return Lookup
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10188'>OFBIZ-10188</a>] -         Add new FileUtil methods for zip management
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10227'>OFBIZ-10227</a>] -         Use agreement on drop shipment process
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10307'>OFBIZ-10307</a>] -         Navigate from a domain to another with automated signed in authentication
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10368'>OFBIZ-10368</a>] -         Implement Depends on support for Component Loading.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10372'>OFBIZ-10372</a>] -         Calculate estimated shipment delivery time
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11094'>OFBIZ-11094</a>] -         Buildbot RAT for releases branches
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11333'>OFBIZ-11333</a>] -         Cookie Consent In E-Commerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11691'>OFBIZ-11691</a>] -         Create a simple INSTALL file with minimum installation information and redirection to more documentation
</li>
</ul>
        
<h2>        Improvement
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3907'>OFBIZ-3907</a>] -         Product Promo Worker description patch
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6206'>OFBIZ-6206</a>] -         The &quot;always&quot; log  level in minilang is logged as FATAL
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6510'>OFBIZ-6510</a>] -         Replace webtools/control/view/ModelInduceFromDb with widgets
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7037'>OFBIZ-7037</a>] -         Have QRCodeServices.java use EntityUtilProperties
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7520'>OFBIZ-7520</a>] -         Minilang code readability and consistency improvements
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7598'>OFBIZ-7598</a>] -         Empty header row should not render if list to render in file is empty
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7627'>OFBIZ-7627</a>] -         Workeffort Agreement Appls redirect to wrong page and also gives error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9085'>OFBIZ-9085</a>] -         Add Option to update Facility Party Role on Edit Facility Party Role screen.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9254'>OFBIZ-9254</a>] -         Inconsistent String Comparisons
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9376'>OFBIZ-9376</a>] -         Add shipmentId list to quickshippurchaseorder return parameters
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9501'>OFBIZ-9501</a>] -         Move all data in applications to the datamodel component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9557'>OFBIZ-9557</a>] -         Add the ability to schedule a job to run as a system/service user
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9571'>OFBIZ-9571</a>] -         [DEPRECATION] Replace BigDecimal.ROUND_* by RoundingMode.*
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9572'>OFBIZ-9572</a>] -         Replace all &quot;BigDecimal ZERO&quot; by BigDecimal.ZERO
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9708'>OFBIZ-9708</a>] -         Create missing services definitions in WorkEffortSimpleServices.xml
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9863'>OFBIZ-9863</a>] -         Use Labels in themes names
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9923'>OFBIZ-9923</a>] -         Propagate the theme in DataResourceWorker.renderDataResourceAsText()
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9969'>OFBIZ-9969</a>] -         In &#39;ValidateMethod.java&#39;, when we don&#39;t pass any className from xml files. default value &#39;org.apache.ofbiz.base.util.UtilValidate&#39; should be set for className.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9978'>OFBIZ-9978</a>] -         Upgrade jQuery 1.11.0 to jQuery 3.2.1
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9987'>OFBIZ-9987</a>] -         Enable drop ship PO if &#39;Drop-ship Only&#39; property is set at Product Store level.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10008'>OFBIZ-10008</a>] -         Add mechanism to prevent the usage of EntitySyncRemove
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10028'>OFBIZ-10028</a>] -         Update Geo information according to ISO notifications
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10146'>OFBIZ-10146</a>] -         Removing of loadBestSellingCategory and all related methods in CategoryServices.xml
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10175'>OFBIZ-10175</a>] -         rename the common-theme component directory
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10181'>OFBIZ-10181</a>] -         When completing communicationEvent through setCommEventComplete, if datetimeEnded is null, set it to nowTimestamp
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10189'>OFBIZ-10189</a>] -         Invoice in status approved - cancel
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10195'>OFBIZ-10195</a>] -         Add the ability in performFind service to set OR search criteria
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10199'>OFBIZ-10199</a>] -         Extended UtilFormatOut with new method formatPercentageRate
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10201'>OFBIZ-10201</a>] -         Extend updatePassword service API with optional parameter requirePasswordChange
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10202'>OFBIZ-10202</a>] -         Make removeContentAndRelated service fail-save for missing content and remove related ContentAttributes also
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10204'>OFBIZ-10204</a>] -         The form field title of categoryName for japanese is wrong.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10207'>OFBIZ-10207</a>] -         Show title information on Entity Data Maintenance page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10209'>OFBIZ-10209</a>] -         Add seqId to GlAccountClass table to support the sorting of GLAccount sub classes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10220'>OFBIZ-10220</a>] -         Introduce support for condition-service for entity eca&#39;s as well
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10240'>OFBIZ-10240</a>] -         Resolve invoiceItem description from InvoiceWorker
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10245'>OFBIZ-10245</a>] -         File transfer management with communicationEvent and new contactMech FTP_ADDRESS
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10272'>OFBIZ-10272</a>] -         Documentation: Convert README.md to README.adoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10282'>OFBIZ-10282</a>] -         Remove empty field values from xml data files so that it will not override existing data with empty values
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10299'>OFBIZ-10299</a>] -         display improvement in catalog -&gt; categories in OOTB
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10312'>OFBIZ-10312</a>] -         UI Label Issue on WebPos screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10316'>OFBIZ-10316</a>] -         Fields going outside
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10335'>OFBIZ-10335</a>] -         Add new security page for ofbiz site
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10336'>OFBIZ-10336</a>] -         Same UiLabel used for multiple purposes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10337'>OFBIZ-10337</a>] -         Check for only QOH while doing reservations
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10341'>OFBIZ-10341</a>] -         Refactor/Rewrite the EntitySync documentation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10354'>OFBIZ-10354</a>] -         Generalize `toMap` to abitrary key types
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10355'>OFBIZ-10355</a>] -         Define generic types in `ProductStoreEvents`
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10362'>OFBIZ-10362</a>] -         Improve Hindi UiLables
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10367'>OFBIZ-10367</a>] -         Add Support for Disable attribute in CheckBox Form Widget
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10370'>OFBIZ-10370</a>] -         Migrate promotion condition and action rule
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10371'>OFBIZ-10371</a>] -         Add a link onto a crashed Job to reset it
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10384'>OFBIZ-10384</a>] -         Removing unused code 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10385'>OFBIZ-10385</a>] -         Cart summary section distorted
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10391'>OFBIZ-10391</a>] -         Make accounting entry configurable
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10393'>OFBIZ-10393</a>] -         Remove `createContent` Java service implementation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10398'>OFBIZ-10398</a>] -         Rename deletePartyContactMechPurpose* services
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10400'>OFBIZ-10400</a>] -         Replace deleteRequirement service by entity-auto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10402'>OFBIZ-10402</a>] -         Introduce ability to clear specific cache from cache maintenance
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10404'>OFBIZ-10404</a>] -         Update DBCP to 2.3.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10409'>OFBIZ-10409</a>] -         Generic message from entity-auto service can be enhanced
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10411'>OFBIZ-10411</a>] -         XML schemas should use predefined boolean type
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10412'>OFBIZ-10412</a>] -         Remove `UtilValidate::isEmpty(String)` method
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10413'>OFBIZ-10413</a>] -         Remove unused code in `CommonEvents::setFollowerPage`
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10414'>OFBIZ-10414</a>] -         The &quot;checkout section&quot; in the ecommerce main page is not easily legible
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10428'>OFBIZ-10428</a>] -         Don&#39;t guess the system file separator
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10429'>OFBIZ-10429</a>] -         Use functional programming in build script
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10430'>OFBIZ-10430</a>] -         Use `in` and spread operator in `gradlewSubprocess`
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10431'>OFBIZ-10431</a>] -         Use list literals when possible
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10438'>OFBIZ-10438</a>] -         Add method attribute to request-map to controll a uri can be called GET or POST only
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10445'>OFBIZ-10445</a>] -         Inline ‘ControlServlet::getRequestHandler’ method
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10446'>OFBIZ-10446</a>] -         Override ‘GenericServlet::init’ instead of ‘Servlet::init’
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10447'>OFBIZ-10447</a>] -         Remove useless ControlServlet code
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10448'>OFBIZ-10448</a>] -         Remove useless logging levels checks in ControlServlet
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10451'>OFBIZ-10451</a>] -         Use ‘String#equalsIgnoreCase’ in ‘RequestHandler#doRequest’
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10452'>OFBIZ-10452</a>] -         Remove unused ‘RequestHandler::doRequest’ method
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10453'>OFBIZ-10453</a>] -         Factorize code logic from ‘ConfigXMLReader’
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10462'>OFBIZ-10462</a>] -         UI for all promotions listing disturbed
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10465'>OFBIZ-10465</a>] -         Using &quot;buttontext&quot; styling for buttons inside the ListEntities table
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10467'>OFBIZ-10467</a>] -         Using &quot;buttontext&quot; styling for the index of service engine
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10471'>OFBIZ-10471</a>] -         setLocaleFromBrowser should only called once by session
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10472'>OFBIZ-10472</a>] -         Rename the misnamed setUserLocale.js to setUserTimeZone.js
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10485'>OFBIZ-10485</a>] -         Refactor MapContext
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10491'>OFBIZ-10491</a>] -         Remove use of deprecated language attribute from script tag
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10492'>OFBIZ-10492</a>] -         Use application/javascript instead of text/javascript
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10495'>OFBIZ-10495</a>] -         Rendering different HTML container types with ScreenRenderer
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10502'>OFBIZ-10502</a>] -         Factorize and Refactor filtering of duplicated ‘use-when’ fields in ‘FormRenderer’
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10503'>OFBIZ-10503</a>] -         Inline ‘getFieldListsByPosition’ method
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10505'>OFBIZ-10505</a>] -         Use the stream API in FormRenderer
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10513'>OFBIZ-10513</a>] -         Change font Title
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10514'>OFBIZ-10514</a>] -         Refactoring ContactMechWorker.get[Entity]ContactMechValueMaps
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10515'>OFBIZ-10515</a>] -         Impersonation of userLogin feature
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10516'>OFBIZ-10516</a>] -         Replace #assign with #local in all the ftl macros
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10521'>OFBIZ-10521</a>] -         Main menu enhancement
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10522'>OFBIZ-10522</a>] -         Change the uggly favicon with the new one !
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10537'>OFBIZ-10537</a>] -         Refactor EntityUtil findBy methods using Stream API
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10540'>OFBIZ-10540</a>] -         Warning in console logs related to entity definitions
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10543'>OFBIZ-10543</a>] -         Improve NL labels in OrderUiLabels.xml
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10544'>OFBIZ-10544</a>] -         Improve NL labels in ProductUiLabels.xml
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10547'>OFBIZ-10547</a>] -         Improve NL labels in ManufacturingUiLabels.xml
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10548'>OFBIZ-10548</a>] -         Remove duplicate labels from OrderUiLabel.xml
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10550'>OFBIZ-10550</a>] -         Remove duplicate labels from ProductUiLabel.xml
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10557'>OFBIZ-10557</a>] -         Async persist service on error no restart by default
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10558'>OFBIZ-10558</a>] -         [Naming Convention] Change &#39;quickShipPurchaseOrder&#39; to &#39;quickReceivePurchaseOrder&#39;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10559'>OFBIZ-10559</a>] -         &#39;Reserve After Date&#39; should be available for sales orders only
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10566'>OFBIZ-10566</a>] -         Update missing entries in GDSL descriptors and cleanup findOne to use EntityQuery instead.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10574'>OFBIZ-10574</a>] -         &#39;ORDERMGR_CRQ_ADMIN&#39; permissionId is not defined anywhere
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10576'>OFBIZ-10576</a>] -         Deprecate shoppingCart.makeItemShipGroupAndAssoc with newShipGroup boolean parameter
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10590'>OFBIZ-10590</a>] -         Add http to https redirect rule for ofbiz.apache.org
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10593'>OFBIZ-10593</a>] -         ‘EntityConditionVisitor’ is a confused visitor pattern
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10598'>OFBIZ-10598</a>] -         Add an ofbizsetup prefix to the data files names used by the ofbizsetup app
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10599'>OFBIZ-10599</a>] -         Create an &quot;url-redirect&quot; response type
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10600'>OFBIZ-10600</a>] -         Change the Menu extends-resource management to allow structure changes by themes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10602'>OFBIZ-10602</a>] -         Refactor ICalendar support
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10603'>OFBIZ-10603</a>] -         Javadoc doesn&#39;t contains links to external documentation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10607'>OFBIZ-10607</a>] -         ‘EntityOperator#getId()’ is not used in the framework
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10608'>OFBIZ-10608</a>] -         Remove few request-map &quot;edit&quot; attributes in controllers
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10611'>OFBIZ-10611</a>] -         Allow unit tests to be written in Groovy
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10619'>OFBIZ-10619</a>] -         Update Apache FOP to 2.3
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10631'>OFBIZ-10631</a>] -         remove deprecated and not used PhoneNumber functions
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10646'>OFBIZ-10646</a>] -         Clean some Groovy files in base and common components
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10649'>OFBIZ-10649</a>] -         Simplification of the service callback handling
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10682'>OFBIZ-10682</a>] -         When using Select2 for multiple selects the field is too narrow in &quot;no results&quot; case
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10753'>OFBIZ-10753</a>] -         Improve error message page to support Theming
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10756'>OFBIZ-10756</a>] -         Prepare the migration to XStream 1.5
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10785'>OFBIZ-10785</a>] -         Upgrade jquery-validation plugin from 1.17.0 to 1.19.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10786'>OFBIZ-10786</a>] -         Wrong German translation in PartyUiLabels
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10884'>OFBIZ-10884</a>] -         UI issue on ecommerce Product page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10903'>OFBIZ-10903</a>] -         Make Gradle createPlugin task reflect the actual file/folder structure
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11004'>OFBIZ-11004</a>] -         Add missing ‘synchronized’ modifier
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11045'>OFBIZ-11045</a>] -         Activate / Finish EmplPositionType ValidResponsibilities
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11105'>OFBIZ-11105</a>] -         Add backward compatibility for inputParamEnumId in promotion management
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11110'>OFBIZ-11110</a>] -         Able to add phone no. as contact type without adding number
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11116'>OFBIZ-11116</a>] -         Improper alignment of Status, OrderDate and PartyId column header on Find Orders page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11124'>OFBIZ-11124</a>] -         Allow to create single file if both directory and filename is provided by user
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11134'>OFBIZ-11134</a>] -         Adds a few german translation improvements in HumanResUiLabels
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11198'>OFBIZ-11198</a>] -         FindArInvoices request needs performance improvement regarding use of EntityListIterator::hasNext method
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11251'>OFBIZ-11251</a>] -         Use ‘checkstyle’ linting tool
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11286'>OFBIZ-11286</a>] -         Usage of &#39;include-form&#39; instead of &#39;include-grid&#39; in PartyScreens.xml for grid elements
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11308'>OFBIZ-11308</a>] -         German translation typo in PartyUiLabels
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11324'>OFBIZ-11324</a>] -         No such file error for ProcessPaymentSettings.groovy while placing anonymous order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11346'>OFBIZ-11346</a>] -         Provide a FileItem entry in UtilHttp.getMultiPartParameterMap
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11399'>OFBIZ-11399</a>] -         Update India Geo information according to ISO notifications 2019-11-22
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11423'>OFBIZ-11423</a>] -         Put the TOCs on left in generated AsciiDoc documentation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11437'>OFBIZ-11437</a>] -         Add 2020 version of Incoterms
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11475'>OFBIZ-11475</a>] -         AjaxAutocompleteOptions should be able to decode return values
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11665'>OFBIZ-11665</a>] -         Theme files loading taking longer time
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11879'>OFBIZ-11879</a>] -         Put the AsciiDoc files in main repo under the web site
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12161'>OFBIZ-12161</a>] -         Spelling error in the German translation of Slovakia
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12166'>OFBIZ-12166</a>] -         Default ordering of webapps titles in main menu
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12171'>OFBIZ-12171</a>] -         Handling the JCenter shutdown
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12181'>OFBIZ-12181</a>] -         Enlarge the &quot;more-app&quot; menu in Rainbow Stome theme
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12196'>OFBIZ-12196</a>] -         Update Freemaker to 2.3.31 in R17 and  R18
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12208'>OFBIZ-12208</a>] -         German translation for OrderShoppingList Labels
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12242'>OFBIZ-12242</a>] -         Missing service for updateFacilityLocationGeoPoint 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12271'>OFBIZ-12271</a>] -         Add TASK_STATUS to `status&#39; field options in EditCalEvent form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12278'>OFBIZ-12278</a>] -         Link request-confirmation not generated on menus
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12324'>OFBIZ-12324</a>] -         Create a deny list to reject webshell tokens
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12331'>OFBIZ-12331</a>] -         Improve velocity of PartyHelper.getPartyName() with the cache
</li>
</ul>
            
<h2>        Task
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2330'>OFBIZ-2330</a>] -         Main task for securing URLs in Freemarker templates files
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10145'>OFBIZ-10145</a>] -         Remove the Gradle wrapper from our release packages and add a step to our build notes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10563'>OFBIZ-10563</a>] -         Document the webapp component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10589'>OFBIZ-10589</a>] -         Update Solr and Lucene from 7.3.1 to Solr 7.5.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10594'>OFBIZ-10594</a>] -         Convert Birt Flexible Reports documentation to Asciidoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-12192'>OFBIZ-12192</a>] -         Replace Bintray by a new place to upload the Gradle Wrapper
</li>
</ul>    
                                                                                                                                                             

  </div>
</div>
</div>
</div>
</section>
</section>