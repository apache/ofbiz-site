<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 12.04.06</title>'; 
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 12.04.06</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 12.04.06</span> </div>
        </div>
      </div>
    </header>
    <section id="content" class="features">
        <div class="slice clearfix">
            <div class="container">
                <div class="row">
                    <p>Apache OFBiz&reg; 12.04.06, released in 2016-04-04, is the last release of the 12.04 series, that has been stabilized with bug fixes since April 2012.</p>
                    <div>
                        <h2>Bug</h2>
                        <ul>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-223'>OFBIZ-223</a>] - CartShipInfo objects are not properly cloned when shopping cart items are exploded.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-293'>OFBIZ-293</a>] - data import - nulling fields impossible</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-817'>OFBIZ-817</a>] - Require Inventory of Marketing Package Product can&#39;t be shipped</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-904'>OFBIZ-904</a>] - Error when &quot;Inventory Facility Id&quot; is left blank in product store settings</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2146'>OFBIZ-2146</a>] - Quote to order - manual adjustments amount not included in cart grand total</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2567'>OFBIZ-2567</a>] - Entity VirtualProduct missing</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2618'>OFBIZ-2618</a>] - double forward slashes in ecommerce emails</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3382'>OFBIZ-3382</a>] - inter-app hyperlink generates incorrect url</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3433'>OFBIZ-3433</a>] - eCommerce main store front error returned when attempt is made to &quot;Sign Up For Contact List&quot;</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3464'>OFBIZ-3464</a>] - Added check if the creditcard number string is numeric in validation method isCreditcard in UtilValidate</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3563'>OFBIZ-3563</a>] - Creating a category with an ID (manually or automatically) that matches an existing productID will show the unrelated product when enter into the category on the &#39;Browse category&#39;  of the Ecommerce application.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3666'>OFBIZ-3666</a>] - Errors attempting to use quantities with more than 2 decimals of precision</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4206'>OFBIZ-4206</a>] - Project Manager throws error if project user is not assigned to every project</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4362'>OFBIZ-4362</a>] - MapKey for CMS content cannot be updated</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4407'>OFBIZ-4407</a>] - ofbiz is not tenant aware when uploading image assoc with categories</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4459'>OFBIZ-4459</a>] - PurchaseOrder status not updated after QuickCompleteDropShipment</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4468'>OFBIZ-4468</a>] - After login it shows error &#39;Product not found!&#39;</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4558'>OFBIZ-4558</a>] - Verify subscription email requires form submit</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4559'>OFBIZ-4559</a>] - InventoryWorker.getOutstandingProductQuantities returns inaccurate results when there are multiple ItemIssuances for an order</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4569'>OFBIZ-4569</a>] - Update address dialog shows multiple CommonUpdatingData when required field is missing</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4655'>OFBIZ-4655</a>] - searchCategory is not available in results in keywordsearch.groovy</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4668'>OFBIZ-4668</a>] - CommunicationEventAndRole entity: Field with name custRequestDate not found</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4837'>OFBIZ-4837</a>] - Separator Error in data file tools</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4849'>OFBIZ-4849</a>] - YUI Compressor conflict with BIRT</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4861'>OFBIZ-4861</a>] - view sprint overview has errors</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4897'>OFBIZ-4897</a>] - Setting the reservation of persons on a routing task isn&#39;t reflected in the overview of routing tasks</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4927'>OFBIZ-4927</a>] - The update and deletion of content meta data tab is not working.Needs a change of entity ContentMetaData.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4946'>OFBIZ-4946</a>] - Getting error when uploading a file after creating a data resource.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4977'>OFBIZ-4977</a>] - Limitation and issue with delegator.findByPrimaryKeyPartial method :  returns error when partialKeyset contains PK value.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5070'>OFBIZ-5070</a>] - Problems With BIRT Reports</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5074'>OFBIZ-5074</a>] - date-find in form widget does not persist value</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5110'>OFBIZ-5110</a>] - PortalPage entity definition wrong. ownerUserLoginId field must be id-vlong-ne</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5150'>OFBIZ-5150</a>] - reserveProductInventory method looses priority attribute in oisgir for non serialized and non requireInventory</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5279'>OFBIZ-5279</a>] - Wrong to use !jQuery(&#39;#content-messages&#39;) in \framework\images\webapp\images\selectall.js line #354</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5295'>OFBIZ-5295</a>] - Anonymous Quick Checkout: No Payment Method Information shown in Order Confirmation</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5373'>OFBIZ-5373</a>] - If received quantity is greater then ordered quantity then order item quantity update but order item shipgroup assoc quantity does not updated.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5416'>OFBIZ-5416</a>] - Sales order cart items already assigned to ship groups are incorrectly able to be modified to quantities/prices that break the ProductStoreShipmentMeth rules</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5419'>OFBIZ-5419</a>] - Ordering a License product sometimes (most often) gives a blank page</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5430'>OFBIZ-5430</a>] - &quot;Please Select Your Shipping Method&quot; error sometimes occurs when updating order items</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5452'>OFBIZ-5452</a>] - Illegal simple methods name</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5470'>OFBIZ-5470</a>] - List Price gets reset to zero after updating default/base price of existing order items</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5482'>OFBIZ-5482</a>] - Create Production Run RoutingId lookup field dropdown results empty</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5501'>OFBIZ-5501</a>] - ImageManagementServices.createContentAndDataResource() method might uses DataResource.dataResourceName field to store too long names</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5546'>OFBIZ-5546</a>] - RAW_MATERIAL return/RMA functionality not supported OOTB</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5551'>OFBIZ-5551</a>] - Cannot delete the record When Server Timezone and Application timeZone are different.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5579'>OFBIZ-5579</a>] - Error when add product to an order.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5588'>OFBIZ-5588</a>] - Error while press F9(change quantity) in webpos </li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5629'>OFBIZ-5629</a>] - Pagination at find WorkEffort screen does not work</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5630'>OFBIZ-5630</a>] - service updateFxConversion doesn&#39;t set thruDate properly</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5632'>OFBIZ-5632</a>] - Changing Visual theme in Order manager results in error message</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5658'>OFBIZ-5658</a>] - checkExistsImage method in ImageManagementServices </li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5685'>OFBIZ-5685</a>] - Setting a dependent question for question of type &#39;Boolean Yes/No&#39; is not possible</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5708'>OFBIZ-5708</a>] - ListEmplPositionFulfillments links to wrong profile of employee</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5714'>OFBIZ-5714</a>] - Comment does not save </li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5730'>OFBIZ-5730</a>] - Uploaded  project content is not delete </li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5745'>OFBIZ-5745</a>] - Forgot password functionality is not honoring the &#39;password.lowercase&#39; property of &#39;security.properties&#39;</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5753'>OFBIZ-5753</a>] - Wrong label in Product Config Item</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5766'>OFBIZ-5766</a>] - Error when adding/modifying a task to a Production Run - field type error</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5773'>OFBIZ-5773</a>] - &lt;@htmlTemplate.renderDateTimeField&gt; icon buttons disappear on some pages after refresh</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5787'>OFBIZ-5787</a>] - HttpClient does not support charset name with quotation mark around</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5799'>OFBIZ-5799</a>] - Can&#39;t mount root web app</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5806'>OFBIZ-5806</a>] - Incoming context (in runSync : deletePartyContactMechPurpose) does not match expected requirements</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5815'>OFBIZ-5815</a>] - link of dependent task in Task Dependencies of task links Dependencies of Task</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5822'>OFBIZ-5822</a>] - use requestParameters for customMethod call</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5824'>OFBIZ-5824</a>] - Error in communication screen while perfom sorting</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5826'>OFBIZ-5826</a>] - Shipper Account screen not rendering shipper accounts</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5846'>OFBIZ-5846</a>] - Field definition problem, program should use purposeFromDate in stead of fromDate.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5847'>OFBIZ-5847</a>] - If define the &amp;amp; and combine with &quot;part&quot; that encode to ∂</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5850'>OFBIZ-5850</a>] - &lt;@htmlTemplate.renderDateTimeField does not parse date string based on input format</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5854'>OFBIZ-5854</a>] - Order On Hold Auto Approves When Edited</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5858'>OFBIZ-5858</a>] - Quote profit percentage is calculated wrong</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5877'>OFBIZ-5877</a>] - Add new address not workign on manage address screen</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5883'>OFBIZ-5883</a>] - jQuery datetimepicker popup time value is not set correctly from an existing value</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5885'>OFBIZ-5885</a>] - EntityListIterator Not Closed for Entity JobSandbox, caught in Finalize</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5891'>OFBIZ-5891</a>] - Party Content Upload Ajax Is Broken</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5904'>OFBIZ-5904</a>] - &quot;Value&quot; attribute of hidden form field is overridden by same name value in context</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5906'>OFBIZ-5906</a>] - The &lt;delete&gt; action in &lt;entity-engine-xml&gt; definitions throw an error in tests</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5909'>OFBIZ-5909</a>] - FTL error message is displayed on Return screen, when clicked on Return selected items button</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5914'>OFBIZ-5914</a>] - Gift card reload service not working OOTB </li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5918'>OFBIZ-5918</a>] - NPE at http://demo-trunk-ofbiz.apache.org/ecommerce/products/</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5920'>OFBIZ-5920</a>] - Incorrect use of if-has-permission tag</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5923'>OFBIZ-5923</a>] - Production Run Content button throws unable to resolve class GenericValue error</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5927'>OFBIZ-5927</a>] - Issue reported while performing Refund &amp; Void (java.lang.ClassCastException: java.lang.String cannot be cast to java.math.BigDecimal)</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5930'>OFBIZ-5930</a>] - Data resouce  caching issue while render data resource on multi tenant environment</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5933'>OFBIZ-5933</a>] - state/province dropdown contains incorrect items when Canada is chosen in country dropdown</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5941'>OFBIZ-5941</a>] - Error when adding quantity less than 1 but greater than 0 to cart</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5945'>OFBIZ-5945</a>] - GlReconciledFinAccountTrans.ftl finAccountTrans.entryDateId should be finAccountTrans.entryDate</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5951'>OFBIZ-5951</a>] - Product Costs page actions cause incorrect listings</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5968'>OFBIZ-5968</a>] - framework/images/webapp/images/fieldlookup.js throws a javascript error in google chrome from a link to ofbiz from another site</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5979'>OFBIZ-5979</a>] - Form TotalProdBacklog has typo in link</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6013'>OFBIZ-6013</a>] - &quot;Return Selected Item(s)&quot; button broken for manually created returns</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6070'>OFBIZ-6070</a>] - Create content for product causes exception</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6088'>OFBIZ-6088</a>] - There should not need to setup SystemProperty data on each tenant for specifying path to store tenant images.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6090'>OFBIZ-6090</a>] - Unable to return order items in return process.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6091'>OFBIZ-6091</a>] - Supplier preferred currency not considered for drop-ship order</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6092'>OFBIZ-6092</a>] - Domain name should not create for tenant if its left empty during tenant creation</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6095'>OFBIZ-6095</a>] - Promo action party lookup dropdown throws error</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6101'>OFBIZ-6101</a>] - Error updating order when item quantity less than 1 but greater than 0 exists</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6114'>OFBIZ-6114</a>] - webtools entity references generates exceptions</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6131'>OFBIZ-6131</a>] - Error when updating shipment destinationFacilityId</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6142'>OFBIZ-6142</a>] - returnItems.ftl freemarker null error when returnPrice or returnQuantity is  null</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6169'>OFBIZ-6169</a>] - Upgrade Tomcat from 7.0.57 to 7.0.59</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6183'>OFBIZ-6183</a>] - Error when web app has mount point /</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6188'>OFBIZ-6188</a>] - Task Report error for Manufacturing Shipment Plan</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6196'>OFBIZ-6196</a>] - Package Labels Report error for Manufacturing Shipment Plan</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6199'>OFBIZ-6199</a>] - Find Commission Run screen is broken.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6200'>OFBIZ-6200</a>] - Order Adjustment details are hidden on order Item section of order entry page.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6202'>OFBIZ-6202</a>] - &quot;Expected hash&quot; Freemarker error in FindInventoryEventPlan</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6218'>OFBIZ-6218</a>] - Unit tests throw exception in DBCP</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6226'>OFBIZ-6226</a>] - Webpos F4-F11 label mismatch</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6229'>OFBIZ-6229</a>] - Can&#39;t create a geo without providing a geoID</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6252'>OFBIZ-6252</a>] - Release branches fail to compile with JDK 1.8</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6254'>OFBIZ-6254</a>] - Minilang: type=&quot;NewMap&quot; and type=&quot;NewList&quot; for the Set element don&#39;t work</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6269'>OFBIZ-6269</a>] - Pro-rate shipping calculation is generating incorrect invoice in case of order with subtotal $0.00</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6346'>OFBIZ-6346</a>] - When used setDependentDropdownValuesJs.ftl precludes focus-field-name</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6347'>OFBIZ-6347</a>] - Two order payment preferences are added to order, when order of order total 0(zero) is placed with Billing Account</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6351'>OFBIZ-6351</a>] - ordermgr/control/ListQuoteItems quoteItemSeqId button not showing due to ${bsh}</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6357'>OFBIZ-6357</a>] - Some fields are missing in the person simple-map-processor</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6369'>OFBIZ-6369</a>] - Corrected the order in which invoice and payment transactions are created</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6374'>OFBIZ-6374</a>] - PartyContentWrapper.getPartyContentAsText use wrong signature</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6387'>OFBIZ-6387</a>] - Duplicate referredByPartyId field for EmployementAppForms.xml#ListEmployementApps at humanres/control/FindEmploymentApps</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6397'>OFBIZ-6397</a>] - Survey : FTL error message when using Enumeration or Geo question type</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6425'>OFBIZ-6425</a>] - FindService.performFindList listSize = null causes errors when list is empty because the rendering system expects 0</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6444'>OFBIZ-6444</a>] - Postal Address PDF Formatter Screen Problems</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6492'>OFBIZ-6492</a>] - FTL errors at facility/control/authview/ViewContactMechs when TELECOM_NUMBER countryCode or contactNumber is blank</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6496'>OFBIZ-6496</a>] - error in parsing array in  ajaxUpdateAreas</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6520'>OFBIZ-6520</a>] - Price of product does not shows up when you change currency of your store and setup product prices with new currency</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6534'>OFBIZ-6534</a>] - Same Billing Address generates an error</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6547'>OFBIZ-6547</a>] - Screen with pagination on tables  lead to multiple db entries when submitting</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6554'>OFBIZ-6554</a>] - streamContentToBrowser fails when the file name contains a comma, only with Chrome.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6555'>OFBIZ-6555</a>] - errors and warning after load-extseed and running ofbiz</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6567'>OFBIZ-6567</a>] - Wrong percent encoding in Webtool/SQL Processor</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6570'>OFBIZ-6570</a>] - Anonymous unsubscribe from contact list generates an error</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6579'>OFBIZ-6579</a>] - ERROR: could not find ModelField for entity name: ItemIssuanceQuantitySum and field: issuedDateTime</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6582'>OFBIZ-6582</a>] - SQL Exceptions (OPTION) occuring when running OFBiz 13.07.02 against MySQL</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6594'>OFBIZ-6594</a>] - Wrong Documentation for Temporal Expressions</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6601'>OFBIZ-6601</a>] - example component causes exceptions</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6605'>OFBIZ-6605</a>] - createQuoteRole, createContentRole, and createRequirementRole allow for adding Roles to a Party without permissions</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6622'>OFBIZ-6622</a>] - Incorrectly encoded url in form widget</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6624'>OFBIZ-6624</a>] - error in isValidEan util</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6627'>OFBIZ-6627</a>] - multiple select dropdown listbox shows only one entry</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6632'>OFBIZ-6632</a>] - Incorrect comparison in TemporalExpressionWorker.java</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6637'>OFBIZ-6637</a>] - Work Effort Month Calendar View Is Broken</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6641'>OFBIZ-6641</a>] - Missing CountryCodeData.xml values for countries of the former Yugoslavia</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6642'>OFBIZ-6642</a>] - Non-breaking space incorrectly encoded in forms</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6652'>OFBIZ-6652</a>] - Errors in ProductSummary.groovy</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6654'>OFBIZ-6654</a>] - Display of a recurrent workeffort in workeffort calendar do not respect estimatedStart/CompletionDate</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6666'>OFBIZ-6666</a>] - ModelService constructor does not copy all attribute of service model.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6674'>OFBIZ-6674</a>] - In addToCart() method, reset shipment method information in cart only if shipping applies on product</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6697'>OFBIZ-6697</a>] - CommunicationServices.createAttachmentContent duplicates attachments for existing CommunicationEvents</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6707'>OFBIZ-6707</a>] - WebtoolsUiLabels went missing</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6725'>OFBIZ-6725</a>] - Best Selling Products section in main order page takes into account cancelled orders</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6733'>OFBIZ-6733</a>] - Error with Service Product Invoice Lines</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6741'>OFBIZ-6741</a>] - The state list is not populated when trying to add a shipping address from the Quick Finalize Order screen.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6743'>OFBIZ-6743</a>] - Error on the Split Payment button from the Quick Finalize Order screen</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6753'>OFBIZ-6753</a>] - DemoTaxAuthority.xml GL Account for USA_IRS is incorrect</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6778'>OFBIZ-6778</a>] - Possible &quot;NPE&quot; in viewcontent.ftl (found in trunk demo log)</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6779'>OFBIZ-6779</a>] - Wrong entity condition expression for fetching the view entity PartyAndContactMech.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6782'>OFBIZ-6782</a>] - Service parameter should be required.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6784'>OFBIZ-6784</a>] - JobSandbox : reload crashed job maybe duplicate pending service</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6788'>OFBIZ-6788</a>] - OFBIZ not generating pdf invoices</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6797'>OFBIZ-6797</a>] - Typo in ecommerce productdetail</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6842'>OFBIZ-6842</a>] - ProjectMgr: GanttChart fails, in case of dependencies for tasks</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6888'>OFBIZ-6888</a>] - GroovyEngine.serviceInvoker masks Groovy script exceptions in some cases</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6910'>OFBIZ-6910</a>] - Newly created id should be out from service &#39;createProductFeatureType&#39;</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6917'>OFBIZ-6917</a>] - Error with UtilMisc.availableLocales() shows with Java 8</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6918'>OFBIZ-6918</a>] - ApplicationDecorator Entity-One Screen Action Incomplete Primary Key</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6920'>OFBIZ-6920</a>] - Credit card details cannot be updated</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6922'>OFBIZ-6922</a>] - Currently the testRemoteSoap test service does not work.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6925'>OFBIZ-6925</a>] - Incorrect content length in response from HTTP service engine</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6933'>OFBIZ-6933</a>] - When we update the Allow order decimal quantity to N for product store and update the unit price of item in shopping cart then its shown error. </li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6937'>OFBIZ-6937</a>] - Company Check payment method should be shown when issuing chek</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6961'>OFBIZ-6961</a>] - popup fades in and out non-stop when hovers on a product image in list view</li>
                        </ul>
                        <h2>Improvement</h2>
                        <ul>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4020'>OFBIZ-4020</a>] - Sign up for a contact list always redirects to the main ecommerce page</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5325'>OFBIZ-5325</a>] - Deprecate doCacheClear in Delegator interface and class and related minilang classes</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5835'>OFBIZ-5835</a>] - Trunk fails to compile with Java 1.8</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6030'>OFBIZ-6030</a>] - ViewQuoteItemInfo.ftl has &lt;td&gt;&lt;/td&gt; at the wrong place</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6185'>OFBIZ-6185</a>] - Type-ahead regarding LookupInvoice in AP doesn&#39;t return result</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6415'>OFBIZ-6415</a>] - renderTextFindField doesn&#39;t reselect operation dropdown or ignoreCase checkbox</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6417'>OFBIZ-6417</a>] - renderDateFindField doesn&#39;t reselect operation</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6566'>OFBIZ-6566</a>] - SecurityGroup doesn&#39;t get removed from a Party</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6721'>OFBIZ-6721</a>] - org.ofbiz.common.login.LoginServices.userLogin causes stack track when username or password is incorrect</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6727'>OFBIZ-6727</a>] - Webtools Entity edition, the suggested date and time formats are not localised</li>
                        </ul>
                        <h2>Sub-task</h2>
                        <ul>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-2602'>OFBIZ-2602</a>] - Main storefront page, Featured Products (middle column) overwrites right column. Should just crop column, but not overwrite right column.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-3920'>OFBIZ-3920</a>] - HtmlFormRenderer : with attribute skip-start, lookup fields are broken</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4457'>OFBIZ-4457</a>] - Checkout layout: in screens before payment screen: the fields are below the last div in right column.</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5634'>OFBIZ-5634</a>] - Error in pagination in createProductSubscriptionResource (Catalog) </li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5801'>OFBIZ-5801</a>] - Upgrade Axis2 to 1.6.3</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-5848'>OFBIZ-5848</a>] - Poodle-disable sslv3</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6139'>OFBIZ-6139</a>] - Lookup fields break when used with a form having skip-start=&quot;true&quot;</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6170'>OFBIZ-6170</a>] - You can&#39;t rely on Lookup field description-field-name attribute in a form having skip-start=&quot;true&quot;</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6340'>OFBIZ-6340</a>] - Replacing bsh code with groovy Code in ORDER screens, forms and menus</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6568'>OFBIZ-6568</a>] - Update Groovy to 2.4.5 version</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6726'>OFBIZ-6726</a>] - Update commons collections to 3.2.2 because of known possible exploit</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6751'>OFBIZ-6751</a>] - POI security fix</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6754'>OFBIZ-6754</a>] - Update Spring Framework</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6905'>OFBIZ-6905</a>] - Update Xalan libs to version 2.7.2 because of CVE-2014-0107</li>
                            <li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6959'>OFBIZ-6959</a>] - Update XStream lib to prevent XML External Entity (XXE) Processing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>