<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 13.07.02</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 13.07.02</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 13.07.02</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 13.07.02, released in 2015-05-23, is the second release of the 13.07 series, that has been stabilized with bug fixes since July 2013.</p>
  <p>Please notice that in the 13.07 series the specialpurpose components are no more included with the only exception of the ecommerce component (because there are still some dependencies on it): the specialpurpose components may be released in a separate package in the future.</p>                        
<h2>Bug</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-223'>OFBIZ-223</a>] - CartShipInfo objects are not properly cloned when shopping cart items are exploded.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-904'>OFBIZ-904</a>] - Error when &quot;Inventory Facility Id&quot; is left blank in product store settings</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2146'>OFBIZ-2146</a>] - Quote to order - manual adjustments amount not included in cart grand total</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2567'>OFBIZ-2567</a>] - Entity VirtualProduct missing</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2618'>OFBIZ-2618</a>] - double forward slashes in ecommerce emails</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3382'>OFBIZ-3382</a>] - inter-app hyperlink generates incorrect url</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3433'>OFBIZ-3433</a>] - eCommerce main store front error returned when attempt is made to &quot;Sign Up For Contact List&quot;</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3464'>OFBIZ-3464</a>] - Added check if the creditcard number string is numeric in validation method isCreditcard in UtilValidate</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3563'>OFBIZ-3563</a>] - Creating a category with an ID (manually or automatically) that matches an existing productID will show the unrelated product when enter into the category on the &#39;Browse category&#39;  of the Ecommerce application.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3666'>OFBIZ-3666</a>] - Errors attempting to use quantities with more than 2 decimals of precision</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4360'>OFBIZ-4360</a>] - Content is getting public to web search engine no privacy</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4362'>OFBIZ-4362</a>] - MapKey for CMS content cannot be updated</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4407'>OFBIZ-4407</a>] - ofbiz is not tenant aware when uploading image assoc with categories</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4459'>OFBIZ-4459</a>] - PurchaseOrder status not updated after QuickCompleteDropShipment</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4468'>OFBIZ-4468</a>] - After login it shows error &#39;Product not found!&#39;</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4528'>OFBIZ-4528</a>] - Out of stock products screw up the pagination during category browsing</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4558'>OFBIZ-4558</a>] - Verify subscription email requires form submit</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4569'>OFBIZ-4569</a>] - Update address dialog shows multiple CommonUpdatingData when required field is missing</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4655'>OFBIZ-4655</a>] - searchCategory is not available in results in keywordsearch.groovy</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4668'>OFBIZ-4668</a>] - CommunicationEventAndRole entity: Field with name custRequestDate not found</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4837'>OFBIZ-4837</a>] - Separator Error in data file tools</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4897'>OFBIZ-4897</a>] - Setting the reservation of persons on a routing task isn&#39;t reflected in the overview of routing tasks</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4927'>OFBIZ-4927</a>] - The update and deletion of content meta data tab is not working.Needs a change of entity ContentMetaData.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4946'>OFBIZ-4946</a>] - Getting error when uploading a file after creating a data resource.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4977'>OFBIZ-4977</a>] - Limitation and issue with delegator.findByPrimaryKeyPartial method :  returns error when partialKeyset contains PK value.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5034'>OFBIZ-5034</a>] - Contact us with service message &amp; email notification</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5035'>OFBIZ-5035</a>] - Special characters (latin, accent ...) are in error from an input (search, contact us ...)</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5110'>OFBIZ-5110</a>] - PortalPage entity definition wrong. ownerUserLoginId field must be id-vlong-ne</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5150'>OFBIZ-5150</a>] - reserveProductInventory method looses priority attribute in oisgir for non serialized and non requireInventory</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5261'>OFBIZ-5261</a>] - Party contact expiration and its hidden problems</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5279'>OFBIZ-5279</a>] - Wrong to use !jQuery(&#39;#content-messages&#39;) in \framework\images\webapp\images\selectall.js line #354</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5295'>OFBIZ-5295</a>] - Anonymous Quick Checkout: No Payment Method Information shown in Order Confirmation</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5370'>OFBIZ-5370</a>] - OrderItemShipGrpInvRes incorrect when receiving an inventory item that relates to more than one record</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5373'>OFBIZ-5373</a>] - If received quantity is greater then ordered quantity then order item quantity update but order item shipgroup assoc quantity does not updated.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5385'>OFBIZ-5385</a>] - Purchase order immutable/unchangeable errors when adding variant products</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5416'>OFBIZ-5416</a>] - Sales order cart items already assigned to ship groups are incorrectly able to be modified to quantities/prices that break the ProductStoreShipmentMeth rules</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5419'>OFBIZ-5419</a>] - Ordering a License product sometimes (most often) gives a blank page</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5424'>OFBIZ-5424</a>] - OrderStatus with status ITEM_CREATED not created for auto-added promo items and items appended after order creation</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5430'>OFBIZ-5430</a>] - &quot;Please Select Your Shipping Method&quot; error sometimes occurs when updating order items</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5470'>OFBIZ-5470</a>] - List Price gets reset to zero after updating default/base price of existing order items</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5482'>OFBIZ-5482</a>] - Create Production Run RoutingId lookup field dropdown results empty</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5501'>OFBIZ-5501</a>] - ImageManagementServices.createContentAndDataResource() method might uses DataResource.dataResourceName field to store too long names</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5546'>OFBIZ-5546</a>] - RAW_MATERIAL return/RMA functionality not supported OOTB</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5551'>OFBIZ-5551</a>] - Cannot delete the record When Server Timezone and Application timeZone are different.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5570'>OFBIZ-5570</a>] - appendOrderItem Service Not Applying Order Item Attributes</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5629'>OFBIZ-5629</a>] - Pagination at find WorkEffort screen does not work</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5630'>OFBIZ-5630</a>] - service updateFxConversion doesn&#39;t set thruDate properly</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5632'>OFBIZ-5632</a>] - Changing Visual theme in Order manager results in error message</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5641'>OFBIZ-5641</a>] - Problem with Purchase Order Accounting Entries </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5658'>OFBIZ-5658</a>] - checkExistsImage method in ImageManagementServices </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5685'>OFBIZ-5685</a>] - Setting a dependent question for question of type &#39;Boolean Yes/No&#39; is not possible</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5714'>OFBIZ-5714</a>] - Comment does not save </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5766'>OFBIZ-5766</a>] - Error when adding/modifying a task to a Production Run - field type error</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5773'>OFBIZ-5773</a>] - &lt;@htmlTemplate.renderDateTimeField&gt; icon buttons disappear on some pages after refresh</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5799'>OFBIZ-5799</a>] - Can&#39;t mount root web app</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5806'>OFBIZ-5806</a>] - Incoming context (in runSync : deletePartyContactMechPurpose) does not match expected requirements</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5822'>OFBIZ-5822</a>] - use requestParameters for customMethod call</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5824'>OFBIZ-5824</a>] - Error in communication screen while perfom sorting</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5826'>OFBIZ-5826</a>] - Shipper Account screen not rendering shipper accounts</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5846'>OFBIZ-5846</a>] - Field definition problem, program should use purposeFromDate in stead of fromDate.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5847'>OFBIZ-5847</a>] - If define the &amp;amp; and combine with &quot;part&quot; that encode to ∂</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5848'>OFBIZ-5848</a>] - Poodle-disable sslv3</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5850'>OFBIZ-5850</a>] - &lt;@htmlTemplate.renderDateTimeField does not parse date string based on input format</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5854'>OFBIZ-5854</a>] - Order On Hold Auto Approves When Edited</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5858'>OFBIZ-5858</a>] - Quote profit percentage is calculated wrong</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5869'>OFBIZ-5869</a>] - correction to changeset r1626462  and r1626463  </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5877'>OFBIZ-5877</a>] - Add new address not workign on manage address screen</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5883'>OFBIZ-5883</a>] - jQuery datetimepicker popup time value is not set correctly from an existing value</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5885'>OFBIZ-5885</a>] - EntityListIterator Not Closed for Entity JobSandbox, caught in Finalize</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5891'>OFBIZ-5891</a>] - Party Content Upload Ajax Is Broken</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5904'>OFBIZ-5904</a>] - &quot;Value&quot; attribute of hidden form field is overridden by same name value in context</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5906'>OFBIZ-5906</a>] - The &lt;delete&gt; action in &lt;entity-engine-xml&gt; definitions throw an error in tests</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5909'>OFBIZ-5909</a>] - FTL error message is displayed on Return screen, when clicked on Return selected items button</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5914'>OFBIZ-5914</a>] - Gift card reload service not working OOTB </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5915'>OFBIZ-5915</a>] - Error when viewing Shipment Plan from Manufacturing</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5916'>OFBIZ-5916</a>] - Cutting List Report from Manufacturing Shipment Plans throws error due to due to missing EntityCondition import</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5920'>OFBIZ-5920</a>] - Incorrect use of if-has-permission tag</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5923'>OFBIZ-5923</a>] - Production Run Content button throws unable to resolve class GenericValue error</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5930'>OFBIZ-5930</a>] - Data resouce  caching issue while render data resource on multi tenant environment</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5933'>OFBIZ-5933</a>] - state/province dropdown contains incorrect items when Canada is chosen in country dropdown</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5934'>OFBIZ-5934</a>] - Project &#39;ofbiz-release13.07&#39; is missing required library: avalon-util-exception-1.0.0.jar</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5941'>OFBIZ-5941</a>] - Error when adding quantity less than 1 but greater than 0 to cart</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5945'>OFBIZ-5945</a>] - GlReconciledFinAccountTrans.ftl finAccountTrans.entryDateId should be finAccountTrans.entryDate</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5951'>OFBIZ-5951</a>] - Product Costs page actions cause incorrect listings</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5962'>OFBIZ-5962</a>] - If orderDecimalQuantity set to N then system should return error if user add partial quantity in order</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5968'>OFBIZ-5968</a>] - framework/images/webapp/images/fieldlookup.js throws a javascript error in google chrome from a link to ofbiz from another site</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6013'>OFBIZ-6013</a>] - &quot;Return Selected Item(s)&quot; button broken for manually created returns</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6057'>OFBIZ-6057</a>] - Quote item view FreeMarker error due Freemarker 2.3 versions higher than 2.3.19</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6070'>OFBIZ-6070</a>] - Create content for product causes exception</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6077'>OFBIZ-6077</a>] - Error when creating a quote report</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6088'>OFBIZ-6088</a>] - There should not need to setup SystemProperty data on each tenant for specifying path to store tenant images.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6090'>OFBIZ-6090</a>] - Unable to return order items in return process.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6095'>OFBIZ-6095</a>] - Promo action party lookup dropdown throws error</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6101'>OFBIZ-6101</a>] - Error updating order when item quantity less than 1 but greater than 0 exists</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6114'>OFBIZ-6114</a>] - webtools entity references generates exceptions</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6120'>OFBIZ-6120</a>] - Allow FOP to support &lt;fo:external-graphic/&gt; for -Dportoffset</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6131'>OFBIZ-6131</a>] - Error when updating shipment destinationFacilityId</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6142'>OFBIZ-6142</a>] - returnItems.ftl freemarker null error when returnPrice or returnQuantity is  null</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6157'>OFBIZ-6157</a>] - Upgrade commons-validator from 1.4.0 to 1.4.1</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6158'>OFBIZ-6158</a>] - Upgrade commons-net from 3.1 to 3.3</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6159'>OFBIZ-6159</a>] - Upgrade commons-logging from 1.1.2 to 1.2</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6160'>OFBIZ-6160</a>] - Upgrade commons-csv from 1.0 to 1.1</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6161'>OFBIZ-6161</a>] - Upgrade commons-codec from 1.6 to 1.10</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6169'>OFBIZ-6169</a>] - Upgrade Tomcat from 7.0.57 to 7.0.59</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6183'>OFBIZ-6183</a>] - Error when web app has mount point /</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6188'>OFBIZ-6188</a>] - Task Report error for Manufacturing Shipment Plan</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6196'>OFBIZ-6196</a>] - Package Labels Report error for Manufacturing Shipment Plan</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6199'>OFBIZ-6199</a>] - Find Commission Run screen is broken.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6200'>OFBIZ-6200</a>] - Order Adjustment details are hidden on order Item section of order entry page.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6202'>OFBIZ-6202</a>] - &quot;Expected hash&quot; Freemarker error in FindInventoryEventPlan</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6205'>OFBIZ-6205</a>] - Use EntityUtilProperties to get the WebSiteProperties</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6207'>OFBIZ-6207</a>] - Anyone can view any Request or Quote</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6252'>OFBIZ-6252</a>] - Release branches fail to compile with JDK 1.8</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6254'>OFBIZ-6254</a>] - Minilang: type=&quot;NewMap&quot; and type=&quot;NewList&quot; for the Set element don&#39;t work</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6260'>OFBIZ-6260</a>] - foScreenMacroLibrary.ftl renderLabel doesn&#39;t apply style parameter</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6262'>OFBIZ-6262</a>] - CategoryContentWrapper ignores session locale</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6269'>OFBIZ-6269</a>] - Pro-rate shipping calculation is generating incorrect invoice in case of order with subtotal $0.00</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6309'>OFBIZ-6309</a>] - Freemarker errors at language change page due to locale with no display name returned by Locale.getAvailableLocales() in UtilMisc.java#getAvailableLocaleList</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6346'>OFBIZ-6346</a>] - When used setDependentDropdownValuesJs.ftl precludes focus-field-name</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6351'>OFBIZ-6351</a>] - ordermgr/control/ListQuoteItems quoteItemSeqId button not showing due to ${bsh}</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6357'>OFBIZ-6357</a>] - Some fields are missing in the person simple-map-processor</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6369'>OFBIZ-6369</a>] - Corrected the order in which invoice and payment transactions are created</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6387'>OFBIZ-6387</a>] - Duplicate referredByPartyId field for EmployementAppForms.xml#ListEmployementApps at humanres/control/FindEmploymentApps</li>
</ul>
                    
<h2>Improvement</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4020'>OFBIZ-4020</a>] - Sign up for a contact list always redirects to the main ecommerce page</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5325'>OFBIZ-5325</a>] - Deprecate doCacheClear in Delegator interface and class and related minilang classes</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5807'>OFBIZ-5807</a>] - Upgraded to Freemarker 2.3.21</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5835'>OFBIZ-5835</a>] - Trunk fails to compile with Java 1.8</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6030'>OFBIZ-6030</a>] - ViewQuoteItemInfo.ftl has &lt;td&gt;&lt;/td&gt; at the wrong place</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6118'>OFBIZ-6118</a>] - Upgrade Log4j from 2.0.1 to 2.2</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6370'>OFBIZ-6370</a>] - Removed unused commons-cli 1.2 jar</li>
</ul>
                                                                
<h2>Task</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6123'>OFBIZ-6123</a>] - Upgrade Freemarker from 2.3.21 to 2.3.22</li>
</ul>
<h2>Sub-task</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2602'>OFBIZ-2602</a>] - Main storefront page, Featured Products (middle column) overwrites right column. Should just crop column, but not overwrite right column.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3920'>OFBIZ-3920</a>] - HtmlFormRenderer : with attribute skip-start, lookup fields are broken</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4457'>OFBIZ-4457</a>] - Checkout layout: in screens before payment screen: the fields are below the last div in right column.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6139'>OFBIZ-6139</a>] - Lookup fields break when used with a form having skip-start=&quot;true&quot;</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6170'>OFBIZ-6170</a>] - You can&#39;t rely on Lookup field description-field-name attribute in a form having skip-start=&quot;true&quot;</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6340'>OFBIZ-6340</a>] - Replacing bsh code with groovy Code in ORDER screens, forms and menus</li>
</ul>
  </div>
</div>
</div>
</div>
</section>
</section>