<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 16.11.06</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 16.11.06</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 16.11.06</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 16.11.06, released in 2019-08-20, is the sixth release of the 16.11 series, that has been stabilized since November 2016.</p>

<h2>Sub-task</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9533'>OFBIZ-9533</a>] -         User should be notified with success message on MRP run in manufacturing component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9973'>OFBIZ-9973</a>] -         [FB] Find Security Bugs
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10678'>OFBIZ-10678</a>] -         CLONE - Check embedded Javascript libs vulnerabilities using retire.js
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10873'>OFBIZ-10873</a>] -         Update Tomcat to 9.0.16 due to CVE-2019-0199
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10920'>OFBIZ-10920</a>] -         Update Tomcat to 9.0.18 due to CVE-2019-0232 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10930'>OFBIZ-10930</a>] -         Stores can&#39;t be modified at ofbizsetup/control/updateProductStore
</li>
</ul>
        
<h2>Bug</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5157'>OFBIZ-5157</a>] -         Error on createShoppingListItem when adding item to cart as anonymous
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5254'>OFBIZ-5254</a>] -         Services allow arbitrary HTML for parameters with allow-html set to &quot;safe&quot;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7816'>OFBIZ-7816</a>] -         Profile of contact person not shown on quick add of contact in SFA
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8842'>OFBIZ-8842</a>] -         Search operation on &#39;AssocRevisionItemView&#39; entity causing exception.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9299'>OFBIZ-9299</a>] -         Logo image not showing on party profile 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9461'>OFBIZ-9461</a>] -         Alignment issue at Catalog Manager page 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9677'>OFBIZ-9677</a>] -         In packing, only use reservations with stock on hand
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9743'>OFBIZ-9743</a>] -         updateContent service does not return an error/success message 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9746'>OFBIZ-9746</a>] -         updateContentAssoc does not return success/error message to the UI.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9840'>OFBIZ-9840</a>] -         Mime Type not supported Error while generating a Composite Pdf
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9855'>OFBIZ-9855</a>] -         Using try-with-resources with File IO Objects.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9890'>OFBIZ-9890</a>] -         Having condition is ignored on queryList() and queryFirst() calls in EntityQuery
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9908'>OFBIZ-9908</a>] -         Quick Add button for shopping list on Orderentry screen is not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9912'>OFBIZ-9912</a>] -         Force complete Purchase Order button throws error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10054'>OFBIZ-10054</a>] -         Product content management screen doesn&#39;t validate trusted users&#39; input
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10125'>OFBIZ-10125</a>] -         Error exporting Product entities
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10187'>OFBIZ-10187</a>] -         OWASP sanitizer breaks proper rendering of HTML code
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10310'>OFBIZ-10310</a>] -         Issue with Status of invoice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10315'>OFBIZ-10315</a>] -         Update Contact Mech ID with Billing Account not working 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10356'>OFBIZ-10356</a>] -         Display of entities in text input field for Product Name
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10396'>OFBIZ-10396</a>] -         All party contact mech should be deleted before creating new one
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10533'>OFBIZ-10533</a>] -         Seed data sequence bug regarding &quot;MIDNIGHT_DAILY&quot; TemporalExpression
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10542'>OFBIZ-10542</a>] -         Instructions for Configurable PC don&#39;t work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10569'>OFBIZ-10569</a>] -         Wrong handling of response type &quot;cross-redirect&quot;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10580'>OFBIZ-10580</a>] -         Classification group filter not working on find party screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10588'>OFBIZ-10588</a>] -         Incorrect PartyContactMechPurpose created while calling createUpdateBillingAddress service
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10595'>OFBIZ-10595</a>] -         The query iCalendar/CALENDAR_PUB_DEMO/ no longer works
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10597'>OFBIZ-10597</a>] -         Missing Security and Cache Headers in CMS Events
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10605'>OFBIZ-10605</a>] -         Creating Javadoc on Windows fails
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10615'>OFBIZ-10615</a>] -         Content - Able to add empty Forum Group
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10637'>OFBIZ-10637</a>] -         ComponentConfig::getAppBarWebInfos creates infos only for components without &lt;&lt;app-bar-display=&quot;false&quot;&gt;&gt;
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10648'>OFBIZ-10648</a>] -         Manufacturing: BOM search returning duplicate entries in search results.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10653'>OFBIZ-10653</a>] -         Missing nullcheck in service createContactListParty
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10666'>OFBIZ-10666</a>] -         User&#39;s name is displayed on ecommerce even after user logs out
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10668'>OFBIZ-10668</a>] -         Quantity of the product added in the cart should not be negative
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10671'>OFBIZ-10671</a>] -         Error message is displayed when user having space in username logs in at ecommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10673'>OFBIZ-10673</a>] -         Unable to add additional product images from catalog
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10676'>OFBIZ-10676</a>] -         UI bug in scrum component
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10680'>OFBIZ-10680</a>] -         partyId misses in EditEftAccount.ftl (party) when you create an EFT account from the quick finalize page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10681'>OFBIZ-10681</a>] -         Dependent dropdowns should be used in createPostalAddress and  Set Billing screens of ordermgr.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10696'>OFBIZ-10696</a>] -         ConcurrentModificationException in ShoppingCart.cleanUpShipGroups
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10706'>OFBIZ-10706</a>] -         EmailServices.sendMail causes a NPE, when sendFrom is missing
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10712'>OFBIZ-10712</a>] -         Inconsistent behaviour of ServiceDispatcher.checkAuth 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10713'>OFBIZ-10713</a>] -         wrong title in table header of Config Option List
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10727'>OFBIZ-10727</a>] -         Service failed to mark expired authorized payments of Authorize.net as void
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10736'>OFBIZ-10736</a>] -         Date format doesn&#39;t change on change of locale
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10743'>OFBIZ-10743</a>] -         Error message is populating while clicking on product barcode
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10766'>OFBIZ-10766</a>] -         Impossible secure and autologin cookie names when mountpoint contains a slash inside its name
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10787'>OFBIZ-10787</a>] -         Page dropdown list on categorydetail page broken
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10797'>OFBIZ-10797</a>] -         CSS Styling for Party Content progress bar is wrong in multiple theme
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10816'>OFBIZ-10816</a>] -         URL not encoding in FTL 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10818'>OFBIZ-10818</a>] -         Fix the EntitySync Push and Pull functionality
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10826'>OFBIZ-10826</a>] -         Upgrade Apache Tika to 1.20 (CVE-2018-8017/CVE-2018-17197)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10827'>OFBIZ-10827</a>] -         404 error while creating new contact information from checkout page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10828'>OFBIZ-10828</a>] -         Html escaping missing for portalPageId parameter of Help button
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10832'>OFBIZ-10832</a>] -         simpleTypeConvert always returns Null for Document, Document Type and Notation Node
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10836'>OFBIZ-10836</a>] -         Add To Order button not working on shopping list screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10842'>OFBIZ-10842</a>] -         No userLogin given in calculateProductPrice service call context
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10844'>OFBIZ-10844</a>] -         Ecommerce AnonContactus.ftl doesn&#39;t work
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10856'>OFBIZ-10856</a>] -         Customer Party getting set as &#39;organizationPartyId&#39; in one the Account transaction for Customer Invoice
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10858'>OFBIZ-10858</a>] -         Last Categories section is blank 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10870'>OFBIZ-10870</a>] -         Updating productprice results in error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10876'>OFBIZ-10876</a>] -         Run MRP fails, Incompatible class
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10885'>OFBIZ-10885</a>] -         Blank page appears after using Tell-A-Friend functionality while adding item to cart
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10900'>OFBIZ-10900</a>] -         Agreement overview does not show names of parties
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10913'>OFBIZ-10913</a>] -         FindTask does not allow for all statuses possible to be selected
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10925'>OFBIZ-10925</a>] -         Wrong permission check in ProductScreens#FindProduct
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10926'>OFBIZ-10926</a>] -         Update an order linked to an other order lost relation
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10927'>OFBIZ-10927</a>] -         Can&#39;t set (expected) start and end date of project when creating a project
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10929'>OFBIZ-10929</a>] -         Duplicate a ShoppingCartItem didn&#39;t propage OrderItemAttributes
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10940'>OFBIZ-10940</a>] -         Ensure html verbosity is following general setup
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10958'>OFBIZ-10958</a>] -         Service createProductFeature ignores passed productFeatureId
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10967'>OFBIZ-10967</a>] -         Remove link is not working in shopping list
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10969'>OFBIZ-10969</a>] -         Unable to create Employments
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10992'>OFBIZ-10992</a>] -         No pre-filled value while selecting &quot;facilityId To&quot; on Transfer Inventory Item screen
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11006'>OFBIZ-11006</a>] -         Create customer request screen breaks when entering special characters
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11009'>OFBIZ-11009</a>] -         Update invoice item looses invoice context
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11010'>OFBIZ-11010</a>] -         Touch F8 in webpos does not work and generate an error
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11018'>OFBIZ-11018</a>] -         Redirection of pathAlias to aliasTo does not work properly
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11022'>OFBIZ-11022</a>] -         Edit WebSite Path Alias is not working
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11028'>OFBIZ-11028</a>] -         field emplFromDate is forgot in PayHistory entity
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11029'>OFBIZ-11029</a>] -         Issue in function getVariantSelectionFeatures of ProductWorker.java
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
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11059'>OFBIZ-11059</a>] -         Runtime error exceptions at Leads page
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11062'>OFBIZ-11062</a>] -         Wrong page title displayed on contact us page of ecommerce
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11071'>OFBIZ-11071</a>] -         Gradle eclipse task - classpath modification (Add exclusion for &lt;OFBiz&gt;/framework/base/config and &lt;OFBiz&gt;/framework/base/dtd)
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11090'>OFBIZ-11090</a>] -         Html escaping missing for renderLink parameters
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11109'>OFBIZ-11109</a>] -         Getting an error while creating event from SFA without providing event name
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11125'>OFBIZ-11125</a>] -         No proper error message displayed if user misses to select entities 
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11146'>OFBIZ-11146</a>] -         favicon.ico missing for LookupDecorator
</li>
</ul>
        
<h2>New Feature</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10639'>OFBIZ-10639</a>] -         Cookie Consent In E-Commerce
</li>
</ul>
        
<h2>Improvement</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3907'>OFBIZ-3907</a>] -         Product Promo Worker description patch
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10377'>OFBIZ-10377</a>] -         Missing oldStatusId in error when no status valid change record found
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10717'>OFBIZ-10717</a>] -         EntityUtilProperties.getProperties method should use cache.
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10756'>OFBIZ-10756</a>] -         Prepare the migration to XStream 1.5
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10770'>OFBIZ-10770</a>] -         Update Apache commons-fileupload to last version
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10786'>OFBIZ-10786</a>] -         Wrong German translation in PartyUiLabels
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10837'>OFBIZ-10837</a>] -         Improve ObjectInputStream class
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-11124'>OFBIZ-11124</a>] -         Allow to create single file if both directory and filename is provided by user
</li>
</ul>
            
<h2>Task</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10721'>OFBIZ-10721</a>] -         Remove all the fk dependencies from stats entities to the business entities
</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10788'>OFBIZ-10788</a>] -         R16.11: Upgrade Tomcat to 8.5.37
</li>
</ul>

  </div>
</div>
</div>
</div>
</section>
</section>