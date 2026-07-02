<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 17.12.01</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 17.12.01</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 17.12.01</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 17.12.01, released in 2020-03-04, is the first release of the 17.12 series, that has been stabilized since December 2017.</p>

    
<h2>        Sub-task
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4454'>OFBIZ-4454</a>] -         Enable/Disable JMS
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6595'>OFBIZ-6595</a>] -         Have the ability to test solr queries through widgets (screens &amp; forms)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6655'>OFBIZ-6655</a>] -         Add session tracking mode and make cookie secure
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6766'>OFBIZ-6766</a>] -         Secure HTTP headers
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6884'>OFBIZ-6884</a>] -         Replace Static[&quot;org.ofbiz.base.util.UtilProperties&quot;].getPropertyValue in .ftl files with EntityUtilProperties variant
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7307'>OFBIZ-7307</a>] -         Proper client side validation while creating price rule from catalog manager
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7406'>OFBIZ-7406</a>] -         Find Projects throw &quot;EntityListIterator Not Closed for Entity&quot; error on terminal
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7424'>OFBIZ-7424</a>] -         Require client side validation while creating Product Association
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7425'>OFBIZ-7425</a>] -         Client side validation on Add product categories form in catalog
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7429'>OFBIZ-7429</a>] -         Client side validation required in Add Billing Accounts Role
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7430'>OFBIZ-7430</a>] -         Client Side validation missing on Create Payment screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7436'>OFBIZ-7436</a>] -         Client Side validation missing on Create New Tax Authority Form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7437'>OFBIZ-7437</a>] -         Client side validation required in Tax Infos (Add Party Tax Authority Info)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7441'>OFBIZ-7441</a>] -         Proper Form validation should be added while creating new agreement product
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7458'>OFBIZ-7458</a>] -         Proper form validation should be there while creating Agreement Item Party
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7461'>OFBIZ-7461</a>] -         Proper form validation should be there while creating Agreement Item Facility
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7462'>OFBIZ-7462</a>] -         Required Field Indicator (*) / Form Validation is missing on Create New Data Source Form  
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7465'>OFBIZ-7465</a>] -         Proper form validation should be there while creating Agreement Roles
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7476'>OFBIZ-7476</a>] -         Proper Form Validation should be there while adding new Example Feature
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7766'>OFBIZ-7766</a>] -         Demo data for serialized and non-serialised product
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7852'>OFBIZ-7852</a>] -         Client side validation is missing at Create Ebay Account form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7866'>OFBIZ-7866</a>] -         Client side validation is missing at Add Ebay Configuration form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7877'>OFBIZ-7877</a>] -         Set the default value for Html Menu Macro Library
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7879'>OFBIZ-7879</a>] -         Set the default value for Html screen Macro Library.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7932'>OFBIZ-7932</a>] -         Set the default value for Fo Form Macro Library.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7933'>OFBIZ-7933</a>] -         Set the default value for Fo Screen Macro Library.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7984'>OFBIZ-7984</a>] -         Client side validation is missing at Create User Login form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7985'>OFBIZ-7985</a>] -         Set the default value for Html Form Macro Library.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7988'>OFBIZ-7988</a>] -         Set the default value for Html Tree Macro Library.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7992'>OFBIZ-7992</a>] -         Set the default value for Csv Screen Macro Library, Text Screen Macro Library, Xml Form Macro Library and Xls Form Macro Library.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8191'>OFBIZ-8191</a>] -         Make Create Menu tab bar for Routing consistent
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8201'>OFBIZ-8201</a>] -         Make Create Menu tab bar for Contact consistent
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8273'>OFBIZ-8273</a>] -         Improvements in Lot entity definition and services
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8300'>OFBIZ-8300</a>] -         Framework: Remove inline js for toggleAll calling from ftls and also remove checkToggle, toggleAll and selectAll js functions
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8462'>OFBIZ-8462</a>] -         Improvements in ShipmentItemBilling entity definition and services
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8486'>OFBIZ-8486</a>] -         My Portal: Align column titles in list forms
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8487'>OFBIZ-8487</a>] -         Content : Remove unused imports from groovy files for code optimization.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8657'>OFBIZ-8657</a>] -         Convert CarrierShipmentMethod entity CRUD service to entity-auto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8664'>OFBIZ-8664</a>] -         Convert ShipmentMethodType entity CRUD service to entity-auto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8843'>OFBIZ-8843</a>] -         Improvements in CommEventContentAssoc entity definition and services
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8986'>OFBIZ-8986</a>] -         OFBIZ-7520: Consistency and Readability improvements for make-value tag
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9110'>OFBIZ-9110</a>] -         OFBIZ-7520: Consistency and Readability improvements for view-map tag
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9124'>OFBIZ-9124</a>] -         Upgrade Tomcat to 8.0.39
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9128'>OFBIZ-9128</a>] -         Document current possiblities of the EntityAutoEngine
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9138'>OFBIZ-9138</a>] -         Create a common theme
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9164'>OFBIZ-9164</a>] -         Refactor ContentWorkerInterface methods signatures
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9166'>OFBIZ-9166</a>] -         Create and use an OWASP PolicyFactory for content sanitization in ContentWorker for Birt Flexible Reports
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9169'>OFBIZ-9169</a>] -         Make xssi prefix configurable
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9188'>OFBIZ-9188</a>] -         Complete Birt Flexible Reports documentation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9189'>OFBIZ-9189</a>] -         Birt Report Builder: migrate delegator.find calls to EntityQuery
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9198'>OFBIZ-9198</a>] -         Missing file results in error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9269'>OFBIZ-9269</a>] -         Check embedded Javascript libs vulnerabilities using retire.js
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9284'>OFBIZ-9284</a>] -         Improvement: warn users about sending a flexible report before having published it
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9291'>OFBIZ-9291</a>] -         EntityListIterator Not Closed for Entity [Content], caught in Finalize
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9310'>OFBIZ-9310</a>] -         On setting verbose true, UtilHttp.getParameterMap() method prints username and password in logs
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9313'>OFBIZ-9313</a>] -         Update Tomcat to 8.0.42 because of CVE-2017-5648
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9327'>OFBIZ-9327</a>] -         Remove Deprecated Entities
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9331'>OFBIZ-9331</a>] -         Convert QuoteRole entity related service from simple to entity auto. 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9354'>OFBIZ-9354</a>] -         Replace fields with &quot;id-ne&quot;, &quot;id-long-ne&quot; and &quot;id-vlong-ne&quot; with &quot;id&quot;, &quot;id-long&quot; and &quot;id-vlong&quot; respectively which are primary keys
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9355'>OFBIZ-9355</a>] -         Replace fields with &quot;id-ne&quot;, &quot;id-long-ne&quot; and &quot;id-vlong-ne&quot; by &quot;id&quot;, &quot;id-long&quot; and &quot;id-vlong&quot; respectively which are not primary keys
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9359'>OFBIZ-9359</a>] -         Put back the Birt order reports
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9381'>OFBIZ-9381</a>] -         Convert RateServices.xml mini-lang to groovyDSL
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9383'>OFBIZ-9383</a>] -         Birt plugin depends on example plugin 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9385'>OFBIZ-9385</a>] -         EntityListIterator closed but not in case of exception
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9439'>OFBIZ-9439</a>] -         Lucene tests fail due to problems in the test data
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9444'>OFBIZ-9444</a>] -         Dependency problem between Solr 6.6.0 and Guava
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9451'>OFBIZ-9451</a>] -         [FB] Package org.apache.ofbiz.accounting.payment
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9452'>OFBIZ-9452</a>] -         [FB] Package org.apache.ofbiz.accounting.tax
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9453'>OFBIZ-9453</a>] -         [FB] Package org.apache.ofbiz.accounting.thirdparty.authorizedotnet
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9454'>OFBIZ-9454</a>] -         [FB] Package org.apache.ofbiz.accounting.thirdparty.clearcommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9457'>OFBIZ-9457</a>] -         Improvements in OrderHeader entity definition and services
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9460'>OFBIZ-9460</a>] -         Convert AgreementServices.xml mini-lang to groovyDSL
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9485'>OFBIZ-9485</a>] -         [FB] Package org.apache.ofbiz.accounting.thirdparty.eway
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9486'>OFBIZ-9486</a>] -         [FB] Package org.apache.ofbiz.accounting.thirdparty.gosoftware
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9493'>OFBIZ-9493</a>] -         Replace Masked Input Plugin with jQuery-Mask-Plugin.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9504'>OFBIZ-9504</a>] -         [FB] Package org.apache.ofbiz.accounting.finaccount
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9505'>OFBIZ-9505</a>] -         [FB] Package org.apache.ofbiz.accounting.ledger
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9508'>OFBIZ-9508</a>] -         Convert createPartyDataSource service to entity-auto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9509'>OFBIZ-9509</a>] -         Order : Remove unused imports from groovy files for code optimization.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9510'>OFBIZ-9510</a>] -         Manufacturing : Remove unused imports from groovy files for code optimization.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9511'>OFBIZ-9511</a>] -         Scrum : Remove unused imports from groovy files for code optimization.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9515'>OFBIZ-9515</a>] -         Apply new ruleSet definition into Ofbiz files
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9519'>OFBIZ-9519</a>] -         User should be notified with success message on Update Quote page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9527'>OFBIZ-9527</a>] -         [FB] Packages org.apache.ofbiz.accounting.period and org.apache.ofbiz.accounting.tax
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9528'>OFBIZ-9528</a>] -         [FB] Package org.apache.ofbiz.accounting.thirdparty.eway (Additional Bugs)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9533'>OFBIZ-9533</a>] -         User should be notified with success message on MRP run in manufacturing component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9538'>OFBIZ-9538</a>] -         User should be notified with success message on adding note for party in party component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9539'>OFBIZ-9539</a>] -         [FB] Package org.apache.ofbiz.accounting.thirdparty.paypal
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9541'>OFBIZ-9541</a>] -         [FB] Package org.apache.ofbiz.accounting.invoice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9545'>OFBIZ-9545</a>] -         [FB] Package org.apache.ofbiz.accounting.thirdparty.sagepay
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9548'>OFBIZ-9548</a>] -         [FB] Package org.apache.ofbiz.accounting.thirdparty.worldpay
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9560'>OFBIZ-9560</a>] -         [FB] Package org.apache.ofbiz.base.component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9562'>OFBIZ-9562</a>] -         [FB] Package org.apache.ofbiz.base.concurrent
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9563'>OFBIZ-9563</a>] -         [FB] Package org.apache.ofbiz.base.container
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9564'>OFBIZ-9564</a>] -         [FB] Package org.apache.ofbiz.base.lang
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9565'>OFBIZ-9565</a>] -         [FB] Package org.apache.ofbiz.base.lang.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9566'>OFBIZ-9566</a>] -         [FB] Package org.apache.ofbiz.base.config
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9570'>OFBIZ-9570</a>] -         Deprecated Methods in OrderChangeHelper
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9573'>OFBIZ-9573</a>] -         [FB] Package org.apache.ofbiz.base.start
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9574'>OFBIZ-9574</a>] -         [FB] Package org.apache.ofbiz.base.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9575'>OFBIZ-9575</a>] -         [FB] Package org.apache.ofbiz.base.util.cache
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9576'>OFBIZ-9576</a>] -         [FB] Package org.apache.ofbiz.base.util.cache.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9581'>OFBIZ-9581</a>] -         Merge extended entity definition in data model component into the existing entity definition
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9583'>OFBIZ-9583</a>] -         Client side validation is missing in quick create accounting transaction process
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9587'>OFBIZ-9587</a>] -         Required field indicator (*) is missing on create contact list form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9589'>OFBIZ-9589</a>] -         [FB] Package org.apache.ofbiz.base.util.string.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9590'>OFBIZ-9590</a>] -         [FB] Package org.apache.ofbiz.base.util.collections
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9608'>OFBIZ-9608</a>] -         Use auto-attributes in ProductFeatureCategory CRUD services
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9626'>OFBIZ-9626</a>] -         [FB] Package org.apache.ofbiz.cmssite.multisite
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9627'>OFBIZ-9627</a>] -         [FB] Package org.apache.ofbiz.common.authentication
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9628'>OFBIZ-9628</a>] -         [FB] Package org.apache.ofbiz.common.email
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9629'>OFBIZ-9629</a>] -         [FB] Package org.apache.ofbiz.common.image
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9630'>OFBIZ-9630</a>] -         [FB] Package org.apache.ofbiz.common.login
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9631'>OFBIZ-9631</a>] -         [FB] Package org.apache.ofbiz.common.period
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9633'>OFBIZ-9633</a>] -         [FB] Package org.apache.ofbiz.common.qrcode
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9634'>OFBIZ-9634</a>] -         [FB] Package org.apache.ofbiz.common.uom
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9635'>OFBIZ-9635</a>] -         [FB] Package org.apache.ofbiz.security
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9637'>OFBIZ-9637</a>] -         [FB] Package org.apache.ofbiz.securityext.login
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9638'>OFBIZ-9638</a>] -         [FB] Package org.apache.ofbiz.service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9639'>OFBIZ-9639</a>] -         [FB] Package org.apache.ofbiz.catalina.container
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9640'>OFBIZ-9640</a>] -         [FB] Package org.apache.ofbiz.common.preferences
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9647'>OFBIZ-9647</a>] -         Missing Relationship from OrderHeader to WebSite
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9674'>OFBIZ-9674</a>] -         Update build.gradle to the latest dependencies
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9678'>OFBIZ-9678</a>] -         Missing foreign key constraint for fields userLoginId &amp; userPrefGroupTypeId in UserPreference entity
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9679'>OFBIZ-9679</a>] -         [FB] Package org.apache.ofbiz.base.conversion
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9681'>OFBIZ-9681</a>] -         [FB] Package org.apache.ofbiz.common
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9682'>OFBIZ-9682</a>] -         [FB] Package org.apache.ofbiz.service.config.model
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9683'>OFBIZ-9683</a>] -         [FB] Package org.apache.ofbiz.service.eca
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9684'>OFBIZ-9684</a>] -         [FB] Package org.apache.ofbiz.service.group
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9685'>OFBIZ-9685</a>] -         [FB] Package org.apache.ofbiz.widget.renderer.fo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9686'>OFBIZ-9686</a>] -         [FB] Package org.apache.ofbiz.widget.renderer.html
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9688'>OFBIZ-9688</a>] -         [FB] Package org.apache.ofbiz.service.engine
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9689'>OFBIZ-9689</a>] -         [FB] Package org.apache.ofbiz.base.crypto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9690'>OFBIZ-9690</a>] -         [FB] Package org.apache.ofbiz.service.mail
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9691'>OFBIZ-9691</a>] -         [FB] Package org.apache.ofbiz.service.calendar
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9692'>OFBIZ-9692</a>] -         [FB] Package org.apache.ofbiz.base.util
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9693'>OFBIZ-9693</a>] -         [FB] Package org.apache.ofbiz.service.semaphore
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9694'>OFBIZ-9694</a>] -         [FB] Package org.apache.ofbiz.service.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9695'>OFBIZ-9695</a>] -         [FB] Package org.apache.ofbiz.widget.cache
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9700'>OFBIZ-9700</a>] -         [FB] Package org.apache.ofbiz.base.util.string
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9702'>OFBIZ-9702</a>] -         [FB] Package org.apache.ofbiz.widget.renderer.macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9703'>OFBIZ-9703</a>] -         [FB] Package org.apache.ofbiz.workeffort.workeffort
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9704'>OFBIZ-9704</a>] -         [FB] Package org.apache.ofbiz.widget.renderer
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9705'>OFBIZ-9705</a>] -         [FB] Package org.apache.ofbiz.entity.serialize
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9706'>OFBIZ-9706</a>] -         [FB] Package org.apache.ofbiz.entity.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9707'>OFBIZ-9707</a>] -         [FB] Package org.apache.ofbiz.entity.transaction
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9709'>OFBIZ-9709</a>] -         [FB] Package org.apache.ofbiz.service.job
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9710'>OFBIZ-9710</a>] -         [FB] Package org.apache.ofbiz.widget.model
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9711'>OFBIZ-9711</a>] -         [FB] Package org.apache.ofbiz.entity.cache
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9712'>OFBIZ-9712</a>] -         [FB] Package org.apache.ofbiz.entity.finder
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9713'>OFBIZ-9713</a>] -         [FB] Package org.apache.ofbiz.entity.condition
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9714'>OFBIZ-9714</a>] -         [FB] Package org.apache.ofbiz.service.rmi.socket.ssl
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9715'>OFBIZ-9715</a>] -         [FB] Package org.apache.ofbiz.datafile
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9716'>OFBIZ-9716</a>] -         [FB] Package org.apache.ofbiz.entity
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9717'>OFBIZ-9717</a>] -         [FB] Package org.apache.ofbiz.entity.config.model
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9718'>OFBIZ-9718</a>] -         [FB] Package org.apache.ofbiz.entity.connection
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9719'>OFBIZ-9719</a>] -         [FB] Package org.apache.ofbiz.entity.model
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9720'>OFBIZ-9720</a>] -         [FB] Package org.apache.ofbiz.entity.util
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9721'>OFBIZ-9721</a>] -         [FB] Package org.apache.ofbiz.entityext.data
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9722'>OFBIZ-9722</a>] -         [FB] Package org.apache.ofbiz.base.util.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9723'>OFBIZ-9723</a>] -         [FB] Package org.apache.ofbiz.entity.datasource
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9724'>OFBIZ-9724</a>] -         [FB] Package org.apache.ofbiz.widget
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9729'>OFBIZ-9729</a>] -         [FB] org.apache.ofbiz.order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9730'>OFBIZ-9730</a>] -         [FB] Package org.apache.ofbiz.order.finaccount
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9731'>OFBIZ-9731</a>] -         [FB] Package org.apache.ofbiz.order.shoppinglist
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9732'>OFBIZ-9732</a>] -         [FB] Package org.apache.ofbiz.order.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9733'>OFBIZ-9733</a>] -         [FB] Package org.apache.ofbiz.order.thirdparty.paypal
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9734'>OFBIZ-9734</a>] -         [FB] Package org.apache.ofbiz.party.communication
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9735'>OFBIZ-9735</a>] -         [FB] Package org.apache.ofbiz.party.contact
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9736'>OFBIZ-9736</a>] -         [FB] Package org.apache.ofbiz.party.party
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9737'>OFBIZ-9737</a>] -         [FB] Package org.apache.ofbiz.order.thirdparty.zipsales
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9739'>OFBIZ-9739</a>] -         Required field indicator (*) is missing from the required field on create website form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9741'>OFBIZ-9741</a>] -         Required field indicator (*) is missing from the required field on create website content form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9748'>OFBIZ-9748</a>] -         Required field indicator (*) is missing on the Add an association section
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9749'>OFBIZ-9749</a>] -         Required field indicator (*) is missing from the required field on add content role.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9754'>OFBIZ-9754</a>] -         Required field indicator (*) is missing from create web site parties.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9756'>OFBIZ-9756</a>] -         Required field indicator (*) is missing from create contact list.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9757'>OFBIZ-9757</a>] -         Required field indicator (*) is missing on edit data resource role
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9767'>OFBIZ-9767</a>] -         Missing FK constraints in OrderItem entity for ShoppingListItem
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9771'>OFBIZ-9771</a>] -         Move ecommerce related css file from common-theme to ecommerce component.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9772'>OFBIZ-9772</a>] -         [FB] Package org.apache.ofbiz.product.category
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9773'>OFBIZ-9773</a>] -         [FB] Package org.apache.ofbiz.product.category.ftl
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9774'>OFBIZ-9774</a>] -         [FB] Package org.apache.ofbiz.product.config
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9775'>OFBIZ-9775</a>] -         [FB] Package org.apache.ofbiz.product.feature
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9776'>OFBIZ-9776</a>] -         [FB] Package org.apache.ofbiz.product.image
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9777'>OFBIZ-9777</a>] -         [FB] Package org.apache.ofbiz.product.imagemanagement
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9778'>OFBIZ-9778</a>] -         [FB] Package org.apache.ofbiz.product.inventory
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9779'>OFBIZ-9779</a>] -         [FB] org.apache.ofbiz.product.price
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9781'>OFBIZ-9781</a>] -         [FB] Package org.apache.ofbiz.order.shoppingcart.product
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9782'>OFBIZ-9782</a>] -         [FB] Package org.apache.ofbiz.entity.jdbc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9783'>OFBIZ-9783</a>] -         [FB] Package org.apache.ofbiz.order.shoppingcart
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9784'>OFBIZ-9784</a>] -         [FB] Package org.apache.ofbiz.product.spreadsheetimport
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9785'>OFBIZ-9785</a>] -         [FB] Package org.apache.ofbiz.product.promo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9786'>OFBIZ-9786</a>] -         [FB] Package org.apache.ofbiz.product.subscription
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9787'>OFBIZ-9787</a>] -         [FB] Package org.apache.ofbiz.product.supplier
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9788'>OFBIZ-9788</a>] -         [FB] Package org.apache.ofbiz.shipment.shipment
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9789'>OFBIZ-9789</a>] -         Move Ecommere theme to plugins.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9799'>OFBIZ-9799</a>] -         [FB] Package org.apache.ofbiz.shipment.thirdparty.fedex
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9804'>OFBIZ-9804</a>] -         Link in verification email for Newsletter gives security error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9807'>OFBIZ-9807</a>] -         [FB] Package org.apache.ofbiz.product.product
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9808'>OFBIZ-9808</a>] -         [FB] Package org.apache.ofbiz.shipment.packing
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9809'>OFBIZ-9809</a>] -         [FB] Package org.apache.ofbiz.product.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9810'>OFBIZ-9810</a>] -         [FB] Package org.apache.ofbiz.shipment.thirdparty.dhl
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9811'>OFBIZ-9811</a>] -         [FB] Package org.apache.ofbiz.content.data
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9812'>OFBIZ-9812</a>] -         [FB] Package org.apache.ofbiz.content.layout
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9814'>OFBIZ-9814</a>] -         [FB] Package org.apache.ofbiz.content.output
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9815'>OFBIZ-9815</a>] -         [FB] Package org.apache.ofbiz.content.webapp.ftl
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9816'>OFBIZ-9816</a>] -         [FB] Package org.apache.ofbiz.content.survey
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9817'>OFBIZ-9817</a>] -         [FB] Package org.apache.ofbiz.content.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9819'>OFBIZ-9819</a>] -         [FB] Package org.apache.ofbiz.shipment.thirdparty.ups
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9820'>OFBIZ-9820</a>] -         [FB] Package org.apache.ofbiz.shipment.thirdparty.usps
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9821'>OFBIZ-9821</a>] -         [FB] Package org.apache.ofbiz.shipment.verify
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9822'>OFBIZ-9822</a>] -         [FB] Package org.apache.ofbiz.shipment.weightPackage
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9823'>OFBIZ-9823</a>] -         [FB] Package org.apache.ofbiz.marketing.tracking
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9824'>OFBIZ-9824</a>] -         [FB] Package org.apache.ofbiz.content.cms
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9825'>OFBIZ-9825</a>] -         [FB] Package org.apache.ofbiz.content.compdoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9843'>OFBIZ-9843</a>] -         Replace Inline js with External js in renderDisplayField macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9845'>OFBIZ-9845</a>] -         Replace Inline js with External js in renderTextareaField macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9851'>OFBIZ-9851</a>] -         Replace Inline js with External js in renderLookupField macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9852'>OFBIZ-9852</a>] -         Replace Inline js with External js in makeHyperlinkString macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9858'>OFBIZ-9858</a>] -         [FB] Package org.apache.ofbiz.content
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9859'>OFBIZ-9859</a>] -         [FB] Package org.apache.ofbiz.content.content
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9860'>OFBIZ-9860</a>] -         [Refactoring] Package org.apache.ofbiz.base.util.collections
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9861'>OFBIZ-9861</a>] -         [Refactoring] Package org.apache.ofbiz.base.container
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9865'>OFBIZ-9865</a>] -         Enhance cookies security
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9868'>OFBIZ-9868</a>] -         [Refactoring] Package org.apache.ofbiz.securityext.login
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9869'>OFBIZ-9869</a>] -         [Refactoring] Package org.apache.ofbiz.service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9870'>OFBIZ-9870</a>] -         [Refactoring] Package org.apache.ofbiz.accounting.invoice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9871'>OFBIZ-9871</a>] -         [Refactoring] Package org.apache.ofbiz.catalina.container
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9872'>OFBIZ-9872</a>] -         [Refactoring] Package org.apache.ofbiz.base.component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9874'>OFBIZ-9874</a>] -         [Refactoring] Package org.apache.ofbiz.accounting.payment
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9875'>OFBIZ-9875</a>] -         [Refactoring] Package org.apache.ofbiz.common.authentication
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9876'>OFBIZ-9876</a>] -         [Refactoring] Package org.apache.ofbiz.common.email
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9877'>OFBIZ-9877</a>] -         [Refactoring] Package org.apache.ofbiz.accounting.tax
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9878'>OFBIZ-9878</a>] -         [Refactoring] Package org.apache.ofbiz.common.image
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9879'>OFBIZ-9879</a>] -         [Refactoring] Package org.apache.ofbiz.accounting.thirdparty.clearcommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9880'>OFBIZ-9880</a>] -         [Refactoring] Package org.apache.ofbiz.common.login
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9881'>OFBIZ-9881</a>] -         [Refactoring] Package org.apache.ofbiz.accounting.thirdparty.eway
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9882'>OFBIZ-9882</a>] -         [Refactoring] Package org.apache.ofbiz.accounting.thirdparty.gosoftware
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9883'>OFBIZ-9883</a>] -         [Refactoring] Package org.apache.ofbiz.common.qrcode
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9884'>OFBIZ-9884</a>] -         [Refactoring] Package org.apache.ofbiz.accounting.finaccount
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9885'>OFBIZ-9885</a>] -         [Refactoring] Packages org.apache.ofbiz.accounting.period
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9907'>OFBIZ-9907</a>] -         Replace ContentAssoc related CRUD services with entity-auto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9927'>OFBIZ-9927</a>] -         [Refactoring] Package org.apache.ofbiz.common.preferences
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9928'>OFBIZ-9928</a>] -         [Refactoring] Package org.apache.ofbiz.base.concurrent
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9929'>OFBIZ-9929</a>] -         [Refactoring] Package org.apache.ofbiz.base.conversion
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9930'>OFBIZ-9930</a>] -         [Refactoring] Package org.apache.ofbiz.common
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9931'>OFBIZ-9931</a>] -         [Refactoring] Package org.apache.ofbiz.base.lang
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9932'>OFBIZ-9932</a>] -         [Refactoring] Package org.apache.ofbiz.service.group
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9933'>OFBIZ-9933</a>] -         [Refactoring] Package org.apache.ofbiz.widget.renderer.html
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9934'>OFBIZ-9934</a>] -         [Refactoring] Package org.apache.ofbiz.service.engine
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9935'>OFBIZ-9935</a>] -         [Refactoring] Package org.apache.ofbiz.base.config
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9936'>OFBIZ-9936</a>] -         [Refactoring] Package org.apache.ofbiz.base.metrics
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9937'>OFBIZ-9937</a>] -         [Refactoring] Package org.apache.ofbiz.base.start
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9938'>OFBIZ-9938</a>] -         [Refactoring] Package org.apache.ofbiz.base.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9939'>OFBIZ-9939</a>] -         [Refactoring] Package org.apache.ofbiz.base.util.cache
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9940'>OFBIZ-9940</a>] -         [Refactoring] Package org.apache.ofbiz.base.util.cache.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9941'>OFBIZ-9941</a>] -         [Refactoring] Package org.apache.ofbiz.base.util.template
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9942'>OFBIZ-9942</a>] -         [Refactoring] Package org.apache.ofbiz.base.crypto
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9943'>OFBIZ-9943</a>] -         [Refactoring] Package org.apache.ofbiz.service.mail
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9944'>OFBIZ-9944</a>] -         [Refactoring] Package org.apache.ofbiz.base.util
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9945'>OFBIZ-9945</a>] -         [Refactoring] Package org.apache.ofbiz.service.semaphore
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9946'>OFBIZ-9946</a>] -         [Refactoring] Package org.apache.ofbiz.service.calendar
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9947'>OFBIZ-9947</a>] -         [Refactoring] Package org.apache.ofbiz.service.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9948'>OFBIZ-9948</a>] -         [Refactoring] Package org.apache.ofbiz.widget.cache
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9949'>OFBIZ-9949</a>] -         [Refactoring] Package org.apache.ofbiz.entity.cache
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9950'>OFBIZ-9950</a>] -         [Refactoring] Package org.apache.ofbiz.widget.renderer
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9951'>OFBIZ-9951</a>] -         [Refactoring] Package org.apache.ofbiz.entity.serialize
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9952'>OFBIZ-9952</a>] -         [Refactoring] Package org.apache.ofbiz.entity.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9953'>OFBIZ-9953</a>] -         [Refactoring] Package org.apache.ofbiz.entity.finder
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9954'>OFBIZ-9954</a>] -         [Refactoring] Package org.apache.ofbiz.service.job
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9955'>OFBIZ-9955</a>] -         [Refactoring] Package org.apache.ofbiz.widget.model
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9956'>OFBIZ-9956</a>] -         [Refactoring] Package org.apache.ofbiz.entity.condition
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9957'>OFBIZ-9957</a>] -         [Refactoring] Package org.apache.ofbiz.entity
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9959'>OFBIZ-9959</a>] -         [Refactoring] Package org.apache.ofbiz.service.rmi.socket.ssl
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9960'>OFBIZ-9960</a>] -         [Refactoring] Package org.apache.ofbiz.widget.renderer.macro
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9961'>OFBIZ-9961</a>] -         [Refactoring] Package org.apache.ofbiz.workeffort.workeffort
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9962'>OFBIZ-9962</a>] -         [Refactoring] Package org.apache.ofbiz.entity.transaction
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9963'>OFBIZ-9963</a>] -         [Refactoring] Package org.apache.ofbiz.datafile
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9966'>OFBIZ-9966</a>] -         Secure the login.secret_key_string
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9973'>OFBIZ-9973</a>] -         [FB] Find Security Bugs
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9979'>OFBIZ-9979</a>] -         Upgrade to JQuery.1.12.3 and Jquery.migrate.1.4.1 &amp; resolve all the warnings
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10011'>OFBIZ-10011</a>] -         Update markup of Home page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10016'>OFBIZ-10016</a>] -         Update markup of Login page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10018'>OFBIZ-10018</a>] -         Update markup of Register page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10021'>OFBIZ-10021</a>] -         Accounting: Handle service response effectively
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10026'>OFBIZ-10026</a>] -         Update build.gradle to the latest dependencies
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10029'>OFBIZ-10029</a>] -         Replace all delegator findByAnd and findOne method calling by EntityQuery methods
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10041'>OFBIZ-10041</a>] -         Update markup of ContactUs page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10043'>OFBIZ-10043</a>] -         Update markup of party profile page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10046'>OFBIZ-10046</a>] -         Logging: change System.out/.err/.. println to Debug.log... in PdfSurveyServices.java
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10055'>OFBIZ-10055</a>] -         Update markup of Home page product summary section to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10056'>OFBIZ-10056</a>] -         [FB] Package org.apache.ofbiz.order.order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10060'>OFBIZ-10060</a>] -         [FB] Package org.apache.ofbiz.accounting.thirdparty.valuelink
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10061'>OFBIZ-10061</a>] -         [FB] Package org.apache.ofbiz.service.jms
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10062'>OFBIZ-10062</a>] -         [Refactoring] Package org.apache.ofbiz.order.shoppinglist
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10063'>OFBIZ-10063</a>] -         [Refactoring] Package org.apache.ofbiz.order.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10064'>OFBIZ-10064</a>] -         [Refactoring] Package org.apache.ofbiz.order.thirdparty.paypal
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10065'>OFBIZ-10065</a>] -         [Refactoring] Package org.apache.ofbiz.order.shoppingcart.product
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10066'>OFBIZ-10066</a>] -         [Refactoring] Package org.apache.ofbiz.party.communication
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10067'>OFBIZ-10067</a>] -         [Refactoring] Package org.apache.ofbiz.party.contact
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10068'>OFBIZ-10068</a>] -         [Refactoring] Package org.apache.ofbiz.party.party
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10069'>OFBIZ-10069</a>] -         [Refactoring] Package org.apache.ofbiz.product.config
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10070'>OFBIZ-10070</a>] -         [Refactoring] Package org.apache.ofbiz.product.image 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10071'>OFBIZ-10071</a>] -         [Refactoring] Package org.apache.ofbiz.product.imagemanagement
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10072'>OFBIZ-10072</a>] -         [Refactoring] Package org.apache.ofbiz.product.inventory
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10073'>OFBIZ-10073</a>] -         [Refactoring] Package org.apache.ofbiz.product.product
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10074'>OFBIZ-10074</a>] -         [Refactoring] Package org.apache.ofbiz.product.subscription
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10075'>OFBIZ-10075</a>] -         [Refactoring] Package org.apache.ofbiz.product.supplier
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10076'>OFBIZ-10076</a>] -         [Refactoring] Package org.apache.ofbiz.product.test
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10077'>OFBIZ-10077</a>] -         [Refactoring] Package org.apache.ofbiz.content.data
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10078'>OFBIZ-10078</a>] -         [Refactoring] Package org.apache.ofbiz.content.output
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10079'>OFBIZ-10079</a>] -         [Refactoring] Package org.apache.ofbiz.content.survey
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10080'>OFBIZ-10080</a>] -         [Refactoring] Package org.apache.ofbiz.content.webapp.ftl
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10081'>OFBIZ-10081</a>] -         [Refactoring] Package org.apache.ofbiz.product.promo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10082'>OFBIZ-10082</a>] -         [Refactoring] Package org.apache.ofbiz.product.spreadsheetimport
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10084'>OFBIZ-10084</a>] -         [Refactoring] Package org.apache.ofbiz.order.shoppingcart
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10090'>OFBIZ-10090</a>] -         Update markup of Messages page according to standard markup given by Bootstrap v4.0.s
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10092'>OFBIZ-10092</a>] -         Update markup of List Requests page according to standard markup given by Bootstrap v4.0.s
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10095'>OFBIZ-10095</a>] -         Update markup of List Quotes page according to standard markup given by Bootstrap v4.0.s
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10097'>OFBIZ-10097</a>] -         [FB] Package org.apache.ofbiz.base.util.string
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10099'>OFBIZ-10099</a>] -         Update markup of Product Detail page according to standard markup given by Bootstrap v4.0.s
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10101'>OFBIZ-10101</a>] -         [Refactoring] Package org.apache.ofbiz.order.order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10102'>OFBIZ-10102</a>] -         [FB] Packages org.apache.ofbiz -bi.util, -birt and -birt.container
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10104'>OFBIZ-10104</a>] -         Update markup of Shopping Cart page according to standard markup given by Bootstrap v4.0.s
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10105'>OFBIZ-10105</a>] -         Update markup of Checkout page according to standard markup given by Bootstrap v4.0.s
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10106'>OFBIZ-10106</a>] -         Restructuring of ecommerce container according to responsive behaviour of bootstrap
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10110'>OFBIZ-10110</a>] -         Update markup of Configure product page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10116'>OFBIZ-10116</a>] -         Update markup of Anonymous login page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10117'>OFBIZ-10117</a>] -         Improvement in Header and footer of ecommerce page and removed custom ecommain.css
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10118'>OFBIZ-10118</a>] -         Update multifex theme as per new markup
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10119'>OFBIZ-10119</a>] -         Update markup of Shopping Lists page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10126'>OFBIZ-10126</a>] -         Update markup of One Page checkout page and improve markup on Shopping Cart according to standard markup given by Bootstrap 4.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10127'>OFBIZ-10127</a>] -         Improvement in UI of register page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10132'>OFBIZ-10132</a>] -         Make the number of initially visible applications in main menu a properties
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10135'>OFBIZ-10135</a>] -         Update markup of OrderHistory page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10136'>OFBIZ-10136</a>] -         Update markup of Quick Checkout Page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10138'>OFBIZ-10138</a>] -         [Refactoring] Package org.apache.ofbiz.product.category.ftl
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10160'>OFBIZ-10160</a>] -         Update markup of various product page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10161'>OFBIZ-10161</a>] -         Update markup of qucik add page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10162'>OFBIZ-10162</a>] -         Update markup of advanced seach page page according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10163'>OFBIZ-10163</a>] -         Update markup of quick reorder section according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10169'>OFBIZ-10169</a>] -         Update markup of Last Products section according to standard markup given by Bootstrap v4.0.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10177'>OFBIZ-10177</a>] -         Rainbow theme: bug in avatar.ftl when the last name does not exist
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10179'>OFBIZ-10179</a>] -         Update Bootstrap 4.0 library to stable version from bootstrap 4.0 beta-2
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10185'>OFBIZ-10185</a>] -         Fix UI issue for error messages.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10222'>OFBIZ-10222</a>] -         Access the online help in Rainbow themes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10283'>OFBIZ-10283</a>] -         Removing Birt dependencies in ReportScreens.xml
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10420'>OFBIZ-10420</a>] -         Session fixation issue
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10463'>OFBIZ-10463</a>] -         Framework webapp freemarkerTransform.properties has dependency on product component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10621'>OFBIZ-10621</a>] -         List Request page seems distorted of ecommerce component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10678'>OFBIZ-10678</a>] -         CLONE - Check embedded Javascript libs vulnerabilities using retire.js
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10770'>OFBIZ-10770</a>] -         Update Apache commons-fileupload to last version (CVE-2019-0189)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10790'>OFBIZ-10790</a>] -         Improve ecommerce main-decorator 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10793'>OFBIZ-10793</a>] -         Convert Promotion Screen of e-commerce as per Bootstrap Styling
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10837'>OFBIZ-10837</a>] -         Improve ObjectInputStream class (CVE-2019-0189)
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11196'>OFBIZ-11196</a>] -         Path Traversal in webtools/control/FetchLogs and ViewFile
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11276'>OFBIZ-11276</a>] -         Update the SvnCheckout Gradle task to use Github svn repo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11284'>OFBIZ-11284</a>] -         We have build problems in branches with plugins
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11325'>OFBIZ-11325</a>] -         Fixed the issue on party page that will upload the data each time after refreshing the page.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11348'>OFBIZ-11348</a>] -         Temporarily comment out the &quot;stream&quot; request-map in ecommerce controller for security reason
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11349'>OFBIZ-11349</a>] -         The &quot;stream&quot; request-map in ecommerce and commonext controllers requires authentication
</li>
</ul>
        
<h2>        Bug
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-1585'>OFBIZ-1585</a>] -         Credit card valdation does not work properly during anonymous quick checkout process
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2618'>OFBIZ-2618</a>] -         double forward slashes in ecommerce emails
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3972'>OFBIZ-3972</a>] -         user of tenant generate errors on entity Server_Hit
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4160'>OFBIZ-4160</a>] -         Tax not added for order shipping or promotion
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4514'>OFBIZ-4514</a>] -         Taxes are not handled correctly when creating accounting transactions from purchase invoices
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4959'>OFBIZ-4959</a>] -         Logout do not remove autoLogin
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5157'>OFBIZ-5157</a>] -         Error on createShoppingListItem when adding item to cart as anonymous
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5254'>OFBIZ-5254</a>] -         Services allow arbitrary HTML for parameters with allow-html set to &quot;safe&quot;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5409'>OFBIZ-5409</a>] -         JSON Response does not set http status on error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6330'>OFBIZ-6330</a>] -         The invoiceTaxTotal value is missing from createAcctgTransForPurchaseInvoice service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6386'>OFBIZ-6386</a>] -         compareBigDecimals in org.ofbiz.minilang.method.conditional.Compare does not compare certain values correctly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6625'>OFBIZ-6625</a>] -         EcomSEO generates an error when used in multi-tenancy setup
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6993'>OFBIZ-6993</a>] -         Cannot find the declaration of element &#39;web-app&#39; in version 3.0 files.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6994'>OFBIZ-6994</a>] -         Multiple logins required when using help screen before navigating to another application
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7066'>OFBIZ-7066</a>] -         temporal expression screen missing date dialogbox
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7263'>OFBIZ-7263</a>] -         Price rule created with product specific quantity condition not applied to the order when adding the product to cart with less quantity than mentioned in condition
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7265'>OFBIZ-7265</a>] -         Could not obtain Lock on lucene index Lock
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7375'>OFBIZ-7375</a>] -         Routing should not be allow to update with empty routing name
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7535'>OFBIZ-7535</a>] -         Broken page renders while click on Submit button
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7594'>OFBIZ-7594</a>] -         Unable to delete a survey in project component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7610'>OFBIZ-7610</a>] -         Product Price set based on &#39;Purchase Price Agreement&#39; isn&#39;t honoured while same is used during ordering
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7664'>OFBIZ-7664</a>] -         Inconsistencies on the title and the label on button of create forms.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7683'>OFBIZ-7683</a>] -         Error occurred when making Shopping list public/private from Party Detail screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7709'>OFBIZ-7709</a>] -         Party Search doesn&#39;t consider Billing Address and Shipping Address checkbox in WebPos 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7719'>OFBIZ-7719</a>] -         Not able to select Virtual Product in WebPos
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7759'>OFBIZ-7759</a>] -         Link in LookupContent causes unwanted behaviour
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7816'>OFBIZ-7816</a>] -         Profile of contact person not shown on quick add of contact in SFA
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7945'>OFBIZ-7945</a>] -         Webpos Keyboard Shortcut keys does not work correctly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8266'>OFBIZ-8266</a>] -         From Date and Thru Date doesn&#39;t reflect on List Quote Roles screen.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8323'>OFBIZ-8323</a>] -         can enter empty content for product facility
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8411'>OFBIZ-8411</a>] -         popup image takes full width of browser window for ecommerce multiflex theme
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8457'>OFBIZ-8457</a>] -         Create new Return page required fields validations are not working correctly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8505'>OFBIZ-8505</a>] -         Can&#39;t find Company and admin in Party find feature
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9114'>OFBIZ-9114</a>] -         Many reversed key and description of drop-down in the code
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9117'>OFBIZ-9117</a>] -         EntityAuto engine override the passed service in parameters
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9126'>OFBIZ-9126</a>] -         SimpleMethod: Problem with Variables in key-fields
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9133'>OFBIZ-9133</a>] -         catalog/control/FindReviews does not render proper column data
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9152'>OFBIZ-9152</a>] -         SimpleMethod: FindByAnd never using EntityListIterator
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9155'>OFBIZ-9155</a>] -         JobPoller does not run and hence scheduled/async jobs are never run
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9157'>OFBIZ-9157</a>] -         &quot;View Order&quot; throws exception in getReturnableQuantity
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9167'>OFBIZ-9167</a>] -         add item to order cause exception
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9184'>OFBIZ-9184</a>] -         In entitymodel.xsd entity-alias for condition-expr must be required
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9191'>OFBIZ-9191</a>] -         Navigate Accounts tree does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9192'>OFBIZ-9192</a>] -         Implement and demonstrate few services in Birt Report Builder
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9193'>OFBIZ-9193</a>] -         NPE when changing locale from birt/control/CreateFlexibleReport 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9194'>OFBIZ-9194</a>] -         After creating a new Flexible Birt report, before visualising it you need to do other actions
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9195'>OFBIZ-9195</a>] -         Error in glAccountId retrieval for fixed asset depreciations 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9196'>OFBIZ-9196</a>] -         Regression: a commit between R15 and the Gradle switch uses/blocks the ports
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9201'>OFBIZ-9201</a>] -         Birt logging unlogical high
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9204'>OFBIZ-9204</a>] -         Cancelled OrderItems are still included in orderGrandTotal
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9206'>OFBIZ-9206</a>] -         Login and logout process in demo backends (Management Apps) shows a certificate issue
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9208'>OFBIZ-9208</a>] -         reinstate url cache in UtilURL.fromResource
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9216'>OFBIZ-9216</a>] -         report GL Account Trial Balance
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9220'>OFBIZ-9220</a>] -         Employment Applications in Party manager does not list any record even if they exist.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9225'>OFBIZ-9225</a>] -         Editing quantity of configurable products changes actual product 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9228'>OFBIZ-9228</a>] -         Create an Accounting Transaction page not found
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9230'>OFBIZ-9230</a>] -         Missing reference to the delegator in framework/widget/templates/HtmlFormMacroLibrary.ftl
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9234'>OFBIZ-9234</a>] -         The ecommerce breadcrumb fails when you come from the catalog product link
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9252'>OFBIZ-9252</a>] -         While re-ordering an order, order terms doesn&#39;t set
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9253'>OFBIZ-9253</a>] -         Order contact mechs are not copied over while re-ordering an order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9260'>OFBIZ-9260</a>] -         Wrong &lt;&quot;zh_TW&quot; instead of &quot;zh-TW&quot; in 2 labels files
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9261'>OFBIZ-9261</a>] -         Handle only labels with the &quot;_&quot; separator between languages and countries
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9262'>OFBIZ-9262</a>] -         Error message when svn updating due to pullAllPluginsSource
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9265'>OFBIZ-9265</a>] -         Error in accounting report inventory valuation with through date with an empty value.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9273'>OFBIZ-9273</a>] -         The createTenant Gradle task fails
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9278'>OFBIZ-9278</a>] -         Login after multitenant
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9280'>OFBIZ-9280</a>] -         Sort Links in Lookup for Data Resource Id causes unwanted behaviour on Find Content page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9286'>OFBIZ-9286</a>] -         ERROR: Cannot do a find that returns an EntityListIterator with no transaction in place
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9298'>OFBIZ-9298</a>] -         logout and humanres
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9299'>OFBIZ-9299</a>] -         Logo image not showing on party profile 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9301'>OFBIZ-9301</a>] -         CMS shows error screen on clicking Find button
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9309'>OFBIZ-9309</a>] -         Ecommerce component showing error screen on searchContent from showcontenttree page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9311'>OFBIZ-9311</a>] -         The help button or link does not show for the Birt, BI and example components
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9314'>OFBIZ-9314</a>] -         WorkEffort shows error on party assignment
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9315'>OFBIZ-9315</a>] -         WorkEffort Keywords does not list after adding.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9336'>OFBIZ-9336</a>] -         Ecommerce login/logout events don&#39;t work properly for Shopping Cart
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9345'>OFBIZ-9345</a>] -         Error viewing tomahawk-themed page when externalLoginKey is not enabled
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9379'>OFBIZ-9379</a>] -         No definition found for view with name [setLocaleFromBrowser]
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9471'>OFBIZ-9471</a>] -         Set autocomplete to off for all the password fields.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9481'>OFBIZ-9481</a>] -         order page shows widget exceptions
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9494'>OFBIZ-9494</a>] -         Wrong repository links on FormWidgetExamples page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9497'>OFBIZ-9497</a>] -         Profile link for Lead not working properly in sfa component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9512'>OFBIZ-9512</a>] -         Lead Profile URL not working properly in SFA
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9518'>OFBIZ-9518</a>] -         Wrong success message after creating lead in sfa component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9524'>OFBIZ-9524</a>] -         Uploading content to a product email is not working 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9525'>OFBIZ-9525</a>] -         MRP incorrectly computes quantity already received in open purchase order shipments
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9531'>OFBIZ-9531</a>] -         Error on &#39;Edit backlog&#39; for a product in Scrum
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9534'>OFBIZ-9534</a>] -         exception in service semaphore in wait mode and with multi thread calls
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9537'>OFBIZ-9537</a>] -         In case of request redirect context filter override the redirect parameter
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9622'>OFBIZ-9622</a>] -         Errors on orderview page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9642'>OFBIZ-9642</a>] -         Product tags section displays &#39;Update&#39; button, despite of having no results 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9649'>OFBIZ-9649</a>] -         Unable to create Customer
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9652'>OFBIZ-9652</a>] -         Stack trace on E-commerce Home page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9653'>OFBIZ-9653</a>] -         Issue while creating new person in the party component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9654'>OFBIZ-9654</a>] -         HTML encoded path of image is showing on product detail page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9656'>OFBIZ-9656</a>] -         Misplaced error messages throughout application
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9657'>OFBIZ-9657</a>] -         Unable to select Values from Auto-Completer
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9658'>OFBIZ-9658</a>] -         Issue while redirecting to Request Detail Screen from View Communication Event
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9667'>OFBIZ-9667</a>] -         Date selection on the EditFacilityGroups does not work.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9668'>OFBIZ-9668</a>] -         Date selection not working for &quot;Create WebSite Parties&quot; on EditWebSite screen.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9670'>OFBIZ-9670</a>] -         Party Communication Screen is broken
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9677'>OFBIZ-9677</a>] -         In packing, only use reservations with stock on hand
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9728'>OFBIZ-9728</a>] -         Empty rows affect the imported
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9742'>OFBIZ-9742</a>] -         Ftl error shown on Edit Shopping List page in ecommerce component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9743'>OFBIZ-9743</a>] -         updateContent service does not return an error/success message 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9751'>OFBIZ-9751</a>] -         Request handler exception in create billing account from suppliers profile page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9755'>OFBIZ-9755</a>] -         ShoppingCart&#39;s &#39;getPaymentMethodTypes&#39; method should use &#39;getPaymentMethodTypeIds&#39; internally instead of &#39;getPaymentMethodIds&#39;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9758'>OFBIZ-9758</a>] -         Party Id label missing from edit data resource role
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9761'>OFBIZ-9761</a>] -         Update regex used for validating credit cards 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9762'>OFBIZ-9762</a>] -         Getting error in select frequency drop down on eCommerce shopping list screen  
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9791'>OFBIZ-9791</a>] -         builds in git fail quickly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9794'>OFBIZ-9794</a>] -         Unable to run the MRP
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9798'>OFBIZ-9798</a>] -         InitTheme.groovy can&#39;t work without request
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9803'>OFBIZ-9803</a>] -         FTL Error in OrderView screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9805'>OFBIZ-9805</a>] -         Ecommerce theme is broken
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9830'>OFBIZ-9830</a>] -         Template edit are not working correctly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9837'>OFBIZ-9837</a>] -         The online help is broken
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9840'>OFBIZ-9840</a>] -         Mime Type not supported Error while generating a Composite Pdf
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9842'>OFBIZ-9842</a>] -         Service level check is missing on transfer inventory
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9847'>OFBIZ-9847</a>] -         setLocaleFromBrowser request missing for webpos component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9855'>OFBIZ-9855</a>] -         Using try-with-resources with File IO Objects.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9867'>OFBIZ-9867</a>] -         &lt;description&gt; of &lt;visual-theme&gt; in Theme.xml does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9889'>OFBIZ-9889</a>] -         Not setting VIEW_INDEX for IterateSectionWidget.renderWidgetString causes rendering error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9890'>OFBIZ-9890</a>] -         Having condition is ignored on queryList() and queryFirst() calls in EntityQuery
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9891'>OFBIZ-9891</a>] -         X-Frame-Options configuration is not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9902'>OFBIZ-9902</a>] -         Create a DATAMODELCHANGES.md to track data model changes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9904'>OFBIZ-9904</a>] -         Issue while removing RateAmount Record
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9908'>OFBIZ-9908</a>] -         Quick Add button for shopping list on Orderentry screen is not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9912'>OFBIZ-9912</a>] -         Force complete Purchase Order button throws error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9915'>OFBIZ-9915</a>] -         Error printing Return PDF
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9919'>OFBIZ-9919</a>] -         EntityListIterator.getComplateList returns error randomly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9925'>OFBIZ-9925</a>] -         Error on first access to Online Help
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9977'>OFBIZ-9977</a>] -         While creating return fin account used currency must be same
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9990'>OFBIZ-9990</a>] -         The main logo in screen upper part shows distorted
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9991'>OFBIZ-9991</a>] -         OpenStreetMap geolocation no longer works
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9997'>OFBIZ-9997</a>] -         Replace request-redirect w/ no redirect-param attribute by request-redirect-noparam
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10003'>OFBIZ-10003</a>] -         Lookup Not Working with All Screens
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10006'>OFBIZ-10006</a>] -         Exception Error rendering on all View Category pages
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10012'>OFBIZ-10012</a>] -         Alert message : &quot;Developer: for lookups to work you must provide a form name!&quot; appears when try to select contentId from Lookup
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10015'>OFBIZ-10015</a>] -         Unable to create inventory item label
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10030'>OFBIZ-10030</a>] -         TrackingCodeEvents#checkTrackingCodeUrlParam returns &quot;error&quot; if tracking code is not available
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10033'>OFBIZ-10033</a>] -         RuntimeException on viewroles page of Scrum component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10051'>OFBIZ-10051</a>] -         Fixing potential Nullpointer in ContentWorker.checkConditions()
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10054'>OFBIZ-10054</a>] -         Product content management screen doesn&#39;t validate trusted users&#39; input
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10058'>OFBIZ-10058</a>] -         Issues in error.log both locally and in trunk demo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10087'>OFBIZ-10087</a>] -         Viewing entity in webtools no longer works
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10096'>OFBIZ-10096</a>] -         Error on updating sub content of CMS webSIte
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10098'>OFBIZ-10098</a>] -         service:createContent fails to create proper entity:ContentAssoc entry
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10107'>OFBIZ-10107</a>] -         Replace hard coded error message String with more suitable uiLabel in CheckoutHelper.createOrder 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10109'>OFBIZ-10109</a>] -         Encoding issue while exporting CSV
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10112'>OFBIZ-10112</a>] -         service:updateTextContent fails
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10120'>OFBIZ-10120</a>] -         Unable to remove selected item from cart
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10121'>OFBIZ-10121</a>] -         Incorrect Party profile view redirection in SFA due to missing roleType
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10122'>OFBIZ-10122</a>] -         Not able to add the requirement,broken screen with the error message in workeffort component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10129'>OFBIZ-10129</a>] -         Order Process Broken - Due to Missing Service Defination
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10133'>OFBIZ-10133</a>] -         streaming large content cause out of memory exception.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10142'>OFBIZ-10142</a>] -         Trailing fraction are not entertained by formatCurrency  method of UtilFormatOut
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10143'>OFBIZ-10143</a>] -         Hardcoded String in PaymentGatewayServices#processCaptureResult
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10148'>OFBIZ-10148</a>] -         Display the included vat amount on order item detail instead of 0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10154'>OFBIZ-10154</a>] -         pagination errors in &quot;KeywordSearch.ftl&quot; and &quot;ProductSearchSession.java&quot;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10158'>OFBIZ-10158</a>] -         Find Employee Position does not allow &quot;don&#39;t care&quot; for boolean fields
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10159'>OFBIZ-10159</a>] -         Correcting findOne() in OfbizDslDescriptorForEclipse.dsld
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10167'>OFBIZ-10167</a>] -         Fix the HttpServletRequestWrapper in ContextFilter.doFilter()
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10176'>OFBIZ-10176</a>] -         Add an option &quot;All&quot; to show entities of all groups
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10183'>OFBIZ-10183</a>] -         Error on My Portal &gt; Request Overview Page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10187'>OFBIZ-10187</a>] -         OWASP sanitizer breaks proper rendering of HTML code
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10218'>OFBIZ-10218</a>] -         UtilNumber.getBigDecimalRoundingMode() returns a wrong value
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10232'>OFBIZ-10232</a>] -         Survey response data lost on loadCartFromOrder service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10243'>OFBIZ-10243</a>] -         Error in service definition for deleteOrderHeaderWorkEffort
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10244'>OFBIZ-10244</a>] -         french typo fix
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10246'>OFBIZ-10246</a>] -         EmailServices.sendMailFromScreen attachment rendering broken
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10274'>OFBIZ-10274</a>] -         Wrong locale/fallbackLocale logic in CategoryContentWrapper leads to unavailable alternate locale content
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10275'>OFBIZ-10275</a>] -         UtilCodec URL decoding breaks values with german umlauts
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10276'>OFBIZ-10276</a>] -         Theme screens do not load properly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10277'>OFBIZ-10277</a>] -         The getJSONuiLabel javascript function is no longer working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10278'>OFBIZ-10278</a>] -         The server hour normally shown in the jobs list is no longer showing
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10284'>OFBIZ-10284</a>] -         Handling tenant in XmlRpcEventHandler
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10298'>OFBIZ-10298</a>] -         Fluent API Bug in getFieldList()
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10301'>OFBIZ-10301</a>] -         loadCartFromOrder changes order date even when updating order items
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10304'>OFBIZ-10304</a>] -         The &quot;request&quot; attribute type of the userLogin service is wrong
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10310'>OFBIZ-10310</a>] -         Issue with Status of invoice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10314'>OFBIZ-10314</a>] -         Multiple rows are getting created on updating Party details
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10315'>OFBIZ-10315</a>] -         Update Contact Mech ID with Billing Account not working 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10329'>OFBIZ-10329</a>] -         One Page Checkout page cannot move to Step 5 due to javascript errors
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10342'>OFBIZ-10342</a>] -         Service Log screen is broken
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10356'>OFBIZ-10356</a>] -         Display of entities in text input field for Product Name
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10369'>OFBIZ-10369</a>] -         ConfigXMLReader - Events are not executed in the order defined
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10374'>OFBIZ-10374</a>] -         Existing BILLING_LOCATION record of party should expire while creating a new one
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10389'>OFBIZ-10389</a>] -         The first visit event are not executed in case of CMS
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10396'>OFBIZ-10396</a>] -         All party contact mech should be deleted before creating new one
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10406'>OFBIZ-10406</a>] -         Dynamic values not rendering properly in property tag of fail-property attribute
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10419'>OFBIZ-10419</a>] -         Incorrect data type conversion of variable serviceEndTime in CoreEvents.java
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10421'>OFBIZ-10421</a>] -         jquery.jgrowl.min.css url out of date
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10423'>OFBIZ-10423</a>] -         Click on category the filter function doesn&#39;t work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10425'>OFBIZ-10425</a>] -         When check out after input billing information, it&#39;s displayed as java object
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10455'>OFBIZ-10455</a>] -         Put back the com.lowagie:itext license from 4.2.0 to 2.1.7
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10458'>OFBIZ-10458</a>] -         GetLocaleList call can provide duplicate results
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10460'>OFBIZ-10460</a>] -         setLocaleFromBrowser requires authentification
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10466'>OFBIZ-10466</a>] -         UI issue on blog screens on storefront
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10475'>OFBIZ-10475</a>] -         Missing Import in CmsEditAddPrep.groovy
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10483'>OFBIZ-10483</a>] -         Not able to delete PartyRate
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10487'>OFBIZ-10487</a>] -         compressableMimeType is not a valid attribute of apache http connector 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10489'>OFBIZ-10489</a>] -         Unnecessary ship groups in orders
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10493'>OFBIZ-10493</a>] -         Display From address in send confirmation email form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10506'>OFBIZ-10506</a>] -         Initial set of hasLoogedOut flag when logging in
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10511'>OFBIZ-10511</a>] -         Use of layered-modal with parameter does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10523'>OFBIZ-10523</a>] -         You can&#39;t create a New Payment Group
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10524'>OFBIZ-10524</a>] -         Could not find &lt;simple-method name=&quot;createWorkEffortSkillStandard&quot;&gt;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10531'>OFBIZ-10531</a>] -         Search in Ecommerce no longer works
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10533'>OFBIZ-10533</a>] -         Seed data sequence bug regarding &quot;MIDNIGHT_DAILY&quot; TemporalExpression
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10542'>OFBIZ-10542</a>] -         Instructions for Configurable PC don&#39;t work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10549'>OFBIZ-10549</a>] -         Action (find) button not visible in LabelManager search screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10567'>OFBIZ-10567</a>] -         Stores can&#39;t be modified at catalog/control/updateProductStore
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10569'>OFBIZ-10569</a>] -         Wrong handling of response type &quot;cross-redirect&quot;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10580'>OFBIZ-10580</a>] -         Classification group filter not working on find party screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10585'>OFBIZ-10585</a>] -         Production run not created for marketing package auto type product if component inventory is not available
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10588'>OFBIZ-10588</a>] -         Incorrect PartyContactMechPurpose created while calling createUpdateBillingAddress service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10597'>OFBIZ-10597</a>] -         Missing Security and Cache Headers in CMS Events
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10605'>OFBIZ-10605</a>] -         Creating Javadoc on Windows fails
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10615'>OFBIZ-10615</a>] -         Content - Able to add empty Forum Group
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10617'>OFBIZ-10617</a>] -         ECommerce landing page breaks if popular category does not exists
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10620'>OFBIZ-10620</a>] -         Invoice date is not displayed on findInvoice screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10623'>OFBIZ-10623</a>] -         Error message is displayed on ecommerce when user tries to use Split shipment functionality
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10628'>OFBIZ-10628</a>] -         Quote list is not showing on ecommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10635'>OFBIZ-10635</a>] -         Correct behaviour of Autologin cookies
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10637'>OFBIZ-10637</a>] -         ComponentConfig::getAppBarWebInfos creates infos only for components without &lt;&lt;app-bar-display=&quot;false&quot;&gt;&gt;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10641'>OFBIZ-10641</a>] -         Error in GetLocaleListTests.java 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10642'>OFBIZ-10642</a>] -         Fallthrough in switch-case of org.apache.ofbiz.accounting.thirdparty.eway.GatewayResponse.java
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10648'>OFBIZ-10648</a>] -         Manufacturing: BOM search returning duplicate entries in search results.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10653'>OFBIZ-10653</a>] -         Missing nullcheck in service createContactListParty
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10655'>OFBIZ-10655</a>] -         OFBizPricatUtil class don&#39;t use a org.apache.ofbiz.pricat package
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10658'>OFBIZ-10658</a>] -         Plugins Asciidoc documentation must be standalone
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10666'>OFBIZ-10666</a>] -         User&#39;s name is displayed on ecommerce even after user logs out
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10668'>OFBIZ-10668</a>] -         Quantity of the product added in the cart should not be negative
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10671'>OFBIZ-10671</a>] -         Error message is displayed when user having space in username logs in at ecommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10676'>OFBIZ-10676</a>] -         UI bug in scrum component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10677'>OFBIZ-10677</a>] -         Standalone Asciidoc plugins documents can&#39;t render logo correctly in PDF
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10680'>OFBIZ-10680</a>] -         partyId misses in EditEftAccount.ftl (party) when you create an EFT account from the quick finalize page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10681'>OFBIZ-10681</a>] -         Dependent dropdowns should be used in createPostalAddress and  Set Billing screens of ordermgr.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10696'>OFBIZ-10696</a>] -         ConcurrentModificationException in ShoppingCart.cleanUpShipGroups
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10706'>OFBIZ-10706</a>] -         EmailServices.sendMail causes a NPE, when sendFrom is missing
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10708'>OFBIZ-10708</a>] -         visual-editor not working on ecommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10713'>OFBIZ-10713</a>] -         wrong title in table header of Config Option List
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10722'>OFBIZ-10722</a>] -         Date-find error when used in two forms of a same screen
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10796'>OFBIZ-10796</a>] -         Check run payment(A/P) transactions not getting available for reconciliation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10797'>OFBIZ-10797</a>] -         CSS Styling for Party Content progress bar is wrong in multiple theme
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10798'>OFBIZ-10798</a>] -         Unable to add item in shopping list from Quick Add
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10802'>OFBIZ-10802</a>] -         UserLoginPasswordHistory is not maintaining password as present in UserLogin.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10816'>OFBIZ-10816</a>] -         URL not encoding in FTL 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10833'>OFBIZ-10833</a>] -         CMS add content not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10836'>OFBIZ-10836</a>] -         Add To Order button not working on shopping list screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10842'>OFBIZ-10842</a>] -         No userLogin given in calculateProductPrice service call context
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10844'>OFBIZ-10844</a>] -         Ecommerce AnonContactus.ftl doesn&#39;t work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10850'>OFBIZ-10850</a>] -         User is unable to create return
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10852'>OFBIZ-10852</a>] -         Error message is displayed in shopping cart when click on recalculate cart link
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10856'>OFBIZ-10856</a>] -         Customer Party getting set as &#39;organizationPartyId&#39; in one the Account transaction for Customer Invoice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10858'>OFBIZ-10858</a>] -         Last Categories section is blank 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10859'>OFBIZ-10859</a>] -         Incorrect decorator being used over view all promotions and view promotion details screen causing back navigation
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10895'>OFBIZ-10895</a>] -         Unknown request [images]; this request does not exist or cannot be called directly.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10900'>OFBIZ-10900</a>] -         Agreement overview does not show names of parties
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10913'>OFBIZ-10913</a>] -         FindTask does not allow for all statuses possible to be selected
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10959'>OFBIZ-10959</a>] -         Enable entity timestamp fields
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10967'>OFBIZ-10967</a>] -         Remove link is not working in shopping list
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10969'>OFBIZ-10969</a>] -         Unable to create Employments
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11059'>OFBIZ-11059</a>] -         Runtime error exceptions at Leads page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11061'>OFBIZ-11061</a>] -         UI issue on contactus page of ecommerce
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11146'>OFBIZ-11146</a>] -         favicon.ico missing for LookupDecorator
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11148'>OFBIZ-11148</a>] -         In Product Image Management uploading file fails due to missing StatusValidChange
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11156'>OFBIZ-11156</a>] -         Issue loading solr component (JNDI timeout)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11160'>OFBIZ-11160</a>] -         Add button for &#39;Gift Message is shown on completed order
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11223'>OFBIZ-11223</a>] -         User should not be directed to main page after adding product to cart from showcart page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11226'>OFBIZ-11226</a>] -         Issue with &quot;User name filed&quot; while creating the new user
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11230'>OFBIZ-11230</a>] -         EditExample always update status, because current Status not shown
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11231'>OFBIZ-11231</a>] -         Order Status History section broken for anonymous order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11252'>OFBIZ-11252</a>] -         FTL error for purchase order with Bulk Item Type
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11312'>OFBIZ-11312</a>] -         DatabaseUtil.getColumnInfo(...) does not retrieve primary keys due to connection-locks
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11316'>OFBIZ-11316</a>] -         Bug when order contains adjustments with NULL amount
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11318'>OFBIZ-11318</a>] -         Unable to continue to Step 3 in One Page Checkout 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11319'>OFBIZ-11319</a>] -         processorder is submitted as GET instead of POST
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11320'>OFBIZ-11320</a>] -         updatePassword does not save optional parameter requirePasswordChange
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11329'>OFBIZ-11329</a>] -         setUserTimeZone should ran only once based on error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11340'>OFBIZ-11340</a>] -         Crashed Scheduled jobs are not getting rescheduled with temporal expression
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11341'>OFBIZ-11341</a>] -         Possible NullPointerException in FinAccountServices
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11353'>OFBIZ-11353</a>] -         For security reason require authenticationfor the &quot;stream&quot; request-map in commonext controller.xml 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11396'>OFBIZ-11396</a>] -         replaceFirst sensible to variable pattern
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11410'>OFBIZ-11410</a>] -         Agreement Item can&#39;t be removed.
</li>
</ul>
            
<h2>        New Feature
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5048'>OFBIZ-5048</a>] -         Multi Part Input Parameters not Available in Groovy Event
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6919'>OFBIZ-6919</a>] -         Birt Report Builder: an enhancement of the Birt component. Easier user possibility of report creation.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7073'>OFBIZ-7073</a>] -         Add WebSocket support in OFBiz
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9134'>OFBIZ-9134</a>] -         Add Party criteria to Routing Tasks
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9158'>OFBIZ-9158</a>] -         Add a isValid() method to the ModelService class
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9159'>OFBIZ-9159</a>] -         Add the entity-auto CRUD services for JobSandbox
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9161'>OFBIZ-9161</a>] -         Add the entity-auto CRUD services for RuntimeData
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9187'>OFBIZ-9187</a>] -         payroll integration
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9264'>OFBIZ-9264</a>] -         Make sure the local date time uses the time zone from the local browser.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9558'>OFBIZ-9558</a>] -         Manage deprecated service on the ModelService
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9617'>OFBIZ-9617</a>] -         Add uel function to resolve a label
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10088'>OFBIZ-10088</a>] -         Website can manage hidden webapp
</li>
</ul>
    
<h2>        Improvement
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-1032'>OFBIZ-1032</a>] -         EntitySaxReader mostly-insert (store after create-error) Fix
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3907'>OFBIZ-3907</a>] -         Product Promo Worker description patch
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5321'>OFBIZ-5321</a>] -         Facility main screen relies on demo data
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5682'>OFBIZ-5682</a>] -         Hardcoded stylesheets and javascript resources
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6206'>OFBIZ-6206</a>] -         The &quot;always&quot; log  level in minilang is logged as FATAL
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6457'>OFBIZ-6457</a>] -         Have totals shown at the top of the search results.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6759'>OFBIZ-6759</a>] -         Improves HTTP header
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6760'>OFBIZ-6760</a>] -         Move all entity definitions from the applications components into a separate one
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7061'>OFBIZ-7061</a>] -         Autocompletion for Compound Widget
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7183'>OFBIZ-7183</a>] -         Completed Service Order Items are being allowed to be received along with finished goods over Approved PO 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7220'>OFBIZ-7220</a>] -         No quick ship option with back ordered products
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7322'>OFBIZ-7322</a>] -         Company Logo is missing at Print Pick Sheet PDF 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7334'>OFBIZ-7334</a>] -         Remove unused imports from Groovy files
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7402'>OFBIZ-7402</a>] -         Catalog : Showing error when duplicating product
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7452'>OFBIZ-7452</a>] -         Proper validation must be there while creating product attributes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7496'>OFBIZ-7496</a>] -         Require check on Create Work Effort Screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7511'>OFBIZ-7511</a>] -         Add proper form validation  across the application
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7606'>OFBIZ-7606</a>] -         Set the default value for macros 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7611'>OFBIZ-7611</a>] -         Track userlogin for status change
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7722'>OFBIZ-7722</a>] -         Sub-menu looks overlapping in Tomahawk theme
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7791'>OFBIZ-7791</a>] -         Rename specialpurpose to plugins 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7828'>OFBIZ-7828</a>] -         Entity and Service definition
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7835'>OFBIZ-7835</a>] -         Title of column fields are not aligned
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7850'>OFBIZ-7850</a>] -         Special characters displays in From Date UI label field in forum screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7972'>OFBIZ-7972</a>] -         Create a (PoC) plugin system for OFBiz based on Gradle
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8202'>OFBIZ-8202</a>] -         Use try-with-resources statement wherever it&#39;s possible
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8316'>OFBIZ-8316</a>] -         Update Apache Solr/Lucene to release 6.2.1
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8337'>OFBIZ-8337</a>] -         Refactor and simplify the startup sequence in OFBiz
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8831'>OFBIZ-8831</a>] -         Typo in error message when OFBiz is unable to connect to database.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9111'>OFBIZ-9111</a>] -         Service &quot;deletePayHistory&quot; does not have correct implementation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9145'>OFBIZ-9145</a>] -         Greater precise value overriding price in order
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9146'>OFBIZ-9146</a>] -         Refactor forms in Example
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9160'>OFBIZ-9160</a>] -         upgrade gradle to version 3.2.1
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9172'>OFBIZ-9172</a>] -         Add Geo id support for New Zealand
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9173'>OFBIZ-9173</a>] -         Minor spelling mistakes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9183'>OFBIZ-9183</a>] -         Remove the cleanGradle and cleanAnt Gradles Task
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9186'>OFBIZ-9186</a>] -         refactor list related forms in Agreeement widgets
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9215'>OFBIZ-9215</a>] -         refactor list related forms in BillingAccount widgets
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9219'>OFBIZ-9219</a>] -         Delete obsolete branches
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9229'>OFBIZ-9229</a>] -         refactor list related forms in Cost widgets
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9232'>OFBIZ-9232</a>] -         refactor list related forms in Lookup widgets
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9236'>OFBIZ-9236</a>] -         refactor list related forms in Manufacturing widgets
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9251'>OFBIZ-9251</a>] -         Add support for &#39;set-if-null&#39; and &#39;set-if-empty&#39; attributes on screens for set element.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9266'>OFBIZ-9266</a>] -         Refactor lists related to contactlist forms in partymgr
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9274'>OFBIZ-9274</a>] -         Add parameters information into Gradle tasks descriptions
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9281'>OFBIZ-9281</a>] -         Code Improvement on Product Config
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9282'>OFBIZ-9282</a>] -         Refactor lists related to gateway transactions in accounting
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9285'>OFBIZ-9285</a>] -         OFBiz Startup Message
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9287'>OFBIZ-9287</a>] -         Refactor the runAction method in AbstractModelAction, ModelFormAction and ModelTreeAction classes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9289'>OFBIZ-9289</a>] -         SOAPEventHandler only outputs error to log when secureSoapAnswer = false
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9297'>OFBIZ-9297</a>] -         EntityListIterator Not Closed for Entity [EntityName], caught in Finalize
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9303'>OFBIZ-9303</a>] -         Remove hard-coded success/error message variables set in service output 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9306'>OFBIZ-9306</a>] -         Check there are no white spaces around the name of a form field when updating a form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9318'>OFBIZ-9318</a>] -         Create New Quote button is duplicated on View Quote page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9328'>OFBIZ-9328</a>] -         Create New button is misplaced on Party Content Screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9334'>OFBIZ-9334</a>] -         Show the embedded help in a layered window rather than a new browser window
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9337'>OFBIZ-9337</a>] -         Update msyql sql-type for datetime field-type to support Fractional Seconds in Time Values
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9341'>OFBIZ-9341</a>] -         When searched from FindGeneric page it looses entityName from the url
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9347'>OFBIZ-9347</a>] -         Loading standard web application
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9351'>OFBIZ-9351</a>] -         Remove unnecessary field types
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9357'>OFBIZ-9357</a>] -         Rename Lucene runtime folders to clearly show the origin
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9358'>OFBIZ-9358</a>] -         Integrating google phone number library for validating telecom numbers
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9366'>OFBIZ-9366</a>] -         Upgrade Tomcat to 8.5.15
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9368'>OFBIZ-9368</a>] -         OEM Party Id field should have lookup on Edit Product page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9375'>OFBIZ-9375</a>] -         Missing Java Option solr.log.dir. Logging may be missing or incomplete
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9378'>OFBIZ-9378</a>] -         set auto completion only in lookup field
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9388'>OFBIZ-9388</a>] -         Writer closed but not in case of exception
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9389'>OFBIZ-9389</a>] -         performFindResults.listIt closed but not in case of exception in 3 Scrum Groovy files
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9391'>OFBIZ-9391</a>] -         Update Apache Solr/Lucene to release 6.6.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9392'>OFBIZ-9392</a>] -         Refactor CatalinaContainer
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9393'>OFBIZ-9393</a>] -         UtilMisc.toMap(), toList() and toSet() refactoring taking Varargs for creating the wanted data structure
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9395'>OFBIZ-9395</a>] -         EmailServices.sendMailFromScreen improved to take multiple attachments with appropriate type along with several email fixes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9397'>OFBIZ-9397</a>] -         New UtilMisc method collectionToString(...) building safely a String with the given collection and delimiter
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9399'>OFBIZ-9399</a>] -         ServiceSemaphore.waitOrFail() remove redundant logging
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9400'>OFBIZ-9400</a>] -         GenericServiceJob.failed(Throwable) avoid logging stacktraces for non technical service semaphore exceptions
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9401'>OFBIZ-9401</a>] -         ServiceSemaphore: Check for Transaction before suspending it in dbWrite(...)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9402'>OFBIZ-9402</a>] -         Cut of unnecessary auto-stamp fields from Visit, ServerHit and ServerHitBin
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9405'>OFBIZ-9405</a>] -         refactor list related forms in PartyScreen widgets
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9408'>OFBIZ-9408</a>] -         Following uiLabels should move from ProductUiLabels.xml to CommonEntityLabels.xml.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9409'>OFBIZ-9409</a>] -         Add numeric code for Currency UOM
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9415'>OFBIZ-9415</a>] -         Refactor list related form widgets in various WorkEffort screens
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9430'>OFBIZ-9430</a>] -         Update Groovy to 2.4.12
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9434'>OFBIZ-9434</a>] -         Remove hard-coded instances of &quot;IN&quot; with ModelService.IN_PARAM
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9435'>OFBIZ-9435</a>] -         Refactor Config.java and properties files
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9436'>OFBIZ-9436</a>] -         refactor createPlugin task in gradle
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9437'>OFBIZ-9437</a>] -         Upgrade Tomcat to 8.5.16
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9441'>OFBIZ-9441</a>] -         Refactor OFBiz containers and remove StartupCommandToArgsAdapter
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9447'>OFBIZ-9447</a>] -         Improve groovy DSL : resolve automatic pk field for entity one
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9466'>OFBIZ-9466</a>] -         Use serviceUtil() in place of hard-coded error/success messages.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9479'>OFBIZ-9479</a>] -         Use FlexibleLocation.resolveLocation() instead of hard-coded path
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9480'>OFBIZ-9480</a>] -         Remove cancelAgreement service 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9488'>OFBIZ-9488</a>] -         Usage of factory method or Builder pattern for Locale object creation and usage.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9489'>OFBIZ-9489</a>] -         Add new Rule Based Number Format for Indian Number System in International Components for Unicode (ICU) OFBiz usage.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9490'>OFBIZ-9490</a>] -         Update UtilMisc.formatRuleBasedAmount() method to take rules and ruleSet and formatting can be done, rather than system providing all ruleset support.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9523'>OFBIZ-9523</a>] -         Improve groovy DSL : runService call makeValidContext
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9536'>OFBIZ-9536</a>] -         IN CSV export file from record add a new attribut to select the EOL type
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9543'>OFBIZ-9543</a>] -         Removing Assignment between UserLogin and SecurtyGroup does not work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9549'>OFBIZ-9549</a>] -         Refactor EntityListIterator
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9550'>OFBIZ-9550</a>] -         Manage life span of marketing related entites
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9588'>OFBIZ-9588</a>] -         When creating New Lead, Lead Source should be associated with the Lead
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9595'>OFBIZ-9595</a>] -         Move config data related to PaymentGateway configuration from seed-initial to demo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9607'>OFBIZ-9607</a>] -         Use from-field pattern instead of value=${***} pattern in &#39;set&#39; element
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9618'>OFBIZ-9618</a>] -         &quot;Order Entry Payment Settings&quot; should not be hard coded.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9620'>OFBIZ-9620</a>] -         Extend SecurityGroup entity and add name/groupName field 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9636'>OFBIZ-9636</a>] -         Incomplete RoleMember Permission Checks for ROLE_MEMBER in ModelPermission#evalRoleMember
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9680'>OFBIZ-9680</a>] -         No option to add Event Purpose on Events page.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9696'>OFBIZ-9696</a>] -         Fix type entities to follow convention of hasTable
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9740'>OFBIZ-9740</a>] -         Proper use of if-has-permission
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9765'>OFBIZ-9765</a>] -         While fetching product inventory, it should also return accounting quantity as well
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9770'>OFBIZ-9770</a>] -         CSS files defined through layoutSettings in GlobalActions are loaded twice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9801'>OFBIZ-9801</a>] -         Manage life span of SecurityGroupPermission entity 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9813'>OFBIZ-9813</a>] -         Update to Tomcat 8.5.23
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9826'>OFBIZ-9826</a>] -         Add ability to disable seca rule 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9834'>OFBIZ-9834</a>] -         While creating inventory transfer, to location parameter is not handled.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9835'>OFBIZ-9835</a>] -         Update Solr/Lucene to 7.1.0 [CVE-2017-9803] [CVE-2017-12629]
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9836'>OFBIZ-9836</a>] -         General refactoring and code improvements
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9839'>OFBIZ-9839</a>] -         Using try-with-resources with JDBC objects
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9863'>OFBIZ-9863</a>] -         Use Labels in themes names
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9873'>OFBIZ-9873</a>] -         Create a PoC for a documentation system for OFBiz based on Asciidoc
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9887'>OFBIZ-9887</a>] -         Update to Apache Derby 10.14.1.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9897'>OFBIZ-9897</a>] -         Add ability to disable entity eca rule 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9906'>OFBIZ-9906</a>] -         Inconsistent styling in Tomahawk theme
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9916'>OFBIZ-9916</a>] -         Remove deprecated method GenericDelegator.decryptFieldValue(String, String)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9917'>OFBIZ-9917</a>] -         Update DBCP to 2.2.0
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9924'>OFBIZ-9924</a>] -         Make the general.SystemPropertyValue same than the related property in general properties
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9965'>OFBIZ-9965</a>] -         Empty Space above Find Payment header
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9974'>OFBIZ-9974</a>] -         Use FlexibleLocation.resolveLocation to resolve the fop.path
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9996'>OFBIZ-9996</a>] -         Implement Groovy test in testtools
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9999'>OFBIZ-9999</a>] -         Remove unused service checkContentAssocIds and its usage
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10020'>OFBIZ-10020</a>] -         Improve groovy DSL : makeValue accept fields map and call delegator.makeValidValue
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10023'>OFBIZ-10023</a>] -         Replace org.apache.commons.lang.StringEscapeUtils.unescapeHtml() method by org.jsoup.parser.Parser.unescapeEntities()
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10025'>OFBIZ-10025</a>] -         Add logVerbose to GroovyBaseScript.groovy
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10034'>OFBIZ-10034</a>] -         Replace Rainbow OFBiz logo
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10036'>OFBIZ-10036</a>] -         Update to Tomcat 9.0.x
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10040'>OFBIZ-10040</a>] -         Create a new entity FacilityCalendar 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10045'>OFBIZ-10045</a>] -         Logging: change all System.out/.err/.. println to Debug.log... in the code base
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10047'>OFBIZ-10047</a>] -         Tomcat SSO
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10052'>OFBIZ-10052</a>] -         Always check if debug verbose is on when using Debug.logVerbose()
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10083'>OFBIZ-10083</a>] -         Replace all the &quot;e.printStackTrace();&quot; by calls to Debug class
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10100'>OFBIZ-10100</a>] -          Refactor magic numbers in org.apache.ofbiz.accounting.thirdparty.clearcommerce.CCPaymentServices
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10108'>OFBIZ-10108</a>] -         Import file with data-file, add start-line to escape the header column line
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10141'>OFBIZ-10141</a>] -         Add a VERSION file in root dir
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10144'>OFBIZ-10144</a>] -         DataEvents.java API
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10166'>OFBIZ-10166</a>] -         Update Solr/lucene to 7.2.1
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10200'>OFBIZ-10200</a>] -         Change log level from INFO to VERBOSE for detail logging in UtilCache.findSizeInByte
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10223'>OFBIZ-10223</a>] -         Use Tomcat default ciphers
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10235'>OFBIZ-10235</a>] -         Update org.ofbiz package to org.apache.ofbiz  in some missing entity def
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10253'>OFBIZ-10253</a>] -         Pass JVM options to OFBiz when using Gradle
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10273'>OFBIZ-10273</a>] -         Update postgres datasource name in entityengine file for consistency  
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10300'>OFBIZ-10300</a>] -         Convert Minilang to Groovy Guide into asciidoc 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10326'>OFBIZ-10326</a>] -         Implement dependency from &quot;State/Province&quot; Field to &quot;Country&quot; in New Employee Form
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10330'>OFBIZ-10330</a>] -         ControlEventListener - Change Log-Level
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10484'>OFBIZ-10484</a>] -         Sanitize the output of XML-RPC replies of error data
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10508'>OFBIZ-10508</a>] -         Remove checks to store only 250 characters of URL in VisitHandler.getVisit() &amp; ServerHitBin.saveHit()
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10509'>OFBIZ-10509</a>] -         Disable DTDs for XML-RPC requests
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10522'>OFBIZ-10522</a>] -         Change the uggly favicon with the new one !
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10607'>OFBIZ-10607</a>] -         ‘EntityOperator#getId()’ is not used in the framework
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10618'>OFBIZ-10618</a>] -         Update google libphonenumber to  v8.9.16 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10647'>OFBIZ-10647</a>] -         Convert Birt component doc from Markdown to AsciiDoc 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10663'>OFBIZ-10663</a>] -         Amount field is editable at Product Detail Page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10699'>OFBIZ-10699</a>] -         request map to create party content in controller.xml exists twice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10753'>OFBIZ-10753</a>] -         Improve error message page to support Theming
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10756'>OFBIZ-10756</a>] -         Prepare the migration to XStream 1.5
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10786'>OFBIZ-10786</a>] -         Wrong German translation in PartyUiLabels
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10884'>OFBIZ-10884</a>] -         UI issue on ecommerce Product page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11004'>OFBIZ-11004</a>] -         Add missing ‘synchronized’ modifier
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11124'>OFBIZ-11124</a>] -         Allow to create single file if both directory and filename is provided by user
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11134'>OFBIZ-11134</a>] -         Adds a few german translation improvements in HumanResUiLabels
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11198'>OFBIZ-11198</a>] -         FindArInvoices request needs performance improvement regarding use of EntityListIterator::hasNext method
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
</ul>
            
<h2>        Task
</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2330'>OFBIZ-2330</a>] -         Main task for securing URLs in Freemarker templates files
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6449'>OFBIZ-6449</a>] -         Update internal Ant from 1.9.0 to 1.9.5
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7962'>OFBIZ-7962</a>] -         Migrate the patch management Ant targets
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9256'>OFBIZ-9256</a>] -         Split the tools folder from the trunk and put it in another branch
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9268'>OFBIZ-9268</a>] -         Removes the now useless hot-deploy directory
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9272'>OFBIZ-9272</a>] -         Update OFBiz Buildbot config after the pullAllPluginsSource Gradle task creation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9296'>OFBIZ-9296</a>] -         Update Groovy to 2.4.10
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9323'>OFBIZ-9323</a>] -         Remove the birt.tld file and all related files and lines
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9411'>OFBIZ-9411</a>] -         Rename &quot;loadAll&quot; the &quot;loadDefault&quot; Gradle task 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9556'>OFBIZ-9556</a>] -         Remove the never implemented deleteParty (pre Apache era)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9857'>OFBIZ-9857</a>] -         Upload updated omnigraffle files of the Big Book of Data Model 2017
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10002'>OFBIZ-10002</a>] -         Document how the thread-pool max-threads works
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10032'>OFBIZ-10032</a>] -         Move the hhfacility application to Attic
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10094'>OFBIZ-10094</a>] -         Remove applet concept in OFBiz
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10130'>OFBIZ-10130</a>] -         Update Lucene and Solr to 7.2
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10145'>OFBIZ-10145</a>] -         Remove the Gradle wrapper from our release packages and add a step to our build notes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10517'>OFBIZ-10517</a>] -         Update Apache Tomcat to 9.0.10 because of CVE-2018-8037
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10651'>OFBIZ-10651</a>] -         Create a Gradle task to generate the documentation for all plugins
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10652'>OFBIZ-10652</a>] -         Modify the Buildbot script to generate and copy the documentation to the site
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10657'>OFBIZ-10657</a>] -         Backport the Asciidoc documentation and means to generate it to R17 branch
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10721'>OFBIZ-10721</a>] -         Remove all the fk dependencies from stats entities to the business entities
</li>
</ul>

  </div>
</div>
</div>
</div>
</section>
</section>