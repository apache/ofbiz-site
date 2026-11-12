---
layout: page
title: Release Notes 13.07.02
description: downloads
---
Apache OFBiz&reg; 13.07.02, released in 2015-05-23, is the second release of the 13.07 series, that has been stabilized with bug fixes since July 2013.

Please notice that in the 13.07 series the specialpurpose components are no more included with the only exception of the ecommerce component (because there are still some dependencies on it): the specialpurpose components may be released in a separate package in the future.

## Bug

- [[OFBIZ-223](https://issues.apache.org/jira/browse/OFBIZ-223)] - CartShipInfo objects are not properly cloned when shopping cart items are exploded.
- [[OFBIZ-904](https://issues.apache.org/jira/browse/OFBIZ-904)] - Error when &quot;Inventory Facility Id&quot; is left blank in product store settings
- [[OFBIZ-2146](https://issues.apache.org/jira/browse/OFBIZ-2146)] - Quote to order - manual adjustments amount not included in cart grand total
- [[OFBIZ-2567](https://issues.apache.org/jira/browse/OFBIZ-2567)] - Entity VirtualProduct missing
- [[OFBIZ-2618](https://issues.apache.org/jira/browse/OFBIZ-2618)] - double forward slashes in ecommerce emails
- [[OFBIZ-3382](https://issues.apache.org/jira/browse/OFBIZ-3382)] - inter-app hyperlink generates incorrect url
- [[OFBIZ-3433](https://issues.apache.org/jira/browse/OFBIZ-3433)] - eCommerce main store front error returned when attempt is made to &quot;Sign Up For Contact List&quot;
- [[OFBIZ-3464](https://issues.apache.org/jira/browse/OFBIZ-3464)] - Added check if the creditcard number string is numeric in validation method isCreditcard in UtilValidate
- [[OFBIZ-3563](https://issues.apache.org/jira/browse/OFBIZ-3563)] - Creating a category with an ID (manually or automatically) that matches an existing productID will show the unrelated product when enter into the category on the &#39;Browse category&#39; of the Ecommerce application.
- [[OFBIZ-3666](https://issues.apache.org/jira/browse/OFBIZ-3666)] - Errors attempting to use quantities with more than 2 decimals of precision
- [[OFBIZ-4360](https://issues.apache.org/jira/browse/OFBIZ-4360)] - Content is getting public to web search engine no privacy
- [[OFBIZ-4362](https://issues.apache.org/jira/browse/OFBIZ-4362)] - MapKey for CMS content cannot be updated
- [[OFBIZ-4407](https://issues.apache.org/jira/browse/OFBIZ-4407)] - ofbiz is not tenant aware when uploading image assoc with categories
- [[OFBIZ-4459](https://issues.apache.org/jira/browse/OFBIZ-4459)] - PurchaseOrder status not updated after QuickCompleteDropShipment
- [[OFBIZ-4468](https://issues.apache.org/jira/browse/OFBIZ-4468)] - After login it shows error &#39;Product not found!&#39;
- [[OFBIZ-4528](https://issues.apache.org/jira/browse/OFBIZ-4528)] - Out of stock products screw up the pagination during category browsing
- [[OFBIZ-4558](https://issues.apache.org/jira/browse/OFBIZ-4558)] - Verify subscription email requires form submit
- [[OFBIZ-4569](https://issues.apache.org/jira/browse/OFBIZ-4569)] - Update address dialog shows multiple CommonUpdatingData when required field is missing
- [[OFBIZ-4655](https://issues.apache.org/jira/browse/OFBIZ-4655)] - searchCategory is not available in results in keywordsearch.groovy
- [[OFBIZ-4668](https://issues.apache.org/jira/browse/OFBIZ-4668)] - CommunicationEventAndRole entity: Field with name custRequestDate not found
- [[OFBIZ-4837](https://issues.apache.org/jira/browse/OFBIZ-4837)] - Separator Error in data file tools
- [[OFBIZ-4897](https://issues.apache.org/jira/browse/OFBIZ-4897)] - Setting the reservation of persons on a routing task isn&#39;t reflected in the overview of routing tasks
- [[OFBIZ-4927](https://issues.apache.org/jira/browse/OFBIZ-4927)] - The update and deletion of content meta data tab is not working.Needs a change of entity ContentMetaData.
- [[OFBIZ-4946](https://issues.apache.org/jira/browse/OFBIZ-4946)] - Getting error when uploading a file after creating a data resource.
- [[OFBIZ-4977](https://issues.apache.org/jira/browse/OFBIZ-4977)] - Limitation and issue with delegator.findByPrimaryKeyPartial method : returns error when partialKeyset contains PK value.
- [[OFBIZ-5034](https://issues.apache.org/jira/browse/OFBIZ-5034)] - Contact us with service message &amp; email notification
- [[OFBIZ-5035](https://issues.apache.org/jira/browse/OFBIZ-5035)] - Special characters (latin, accent ...) are in error from an input (search, contact us ...)
- [[OFBIZ-5110](https://issues.apache.org/jira/browse/OFBIZ-5110)] - PortalPage entity definition wrong. ownerUserLoginId field must be id-vlong-ne
- [[OFBIZ-5150](https://issues.apache.org/jira/browse/OFBIZ-5150)] - reserveProductInventory method looses priority attribute in oisgir for non serialized and non requireInventory
- [[OFBIZ-5261](https://issues.apache.org/jira/browse/OFBIZ-5261)] - Party contact expiration and its hidden problems
- [[OFBIZ-5279](https://issues.apache.org/jira/browse/OFBIZ-5279)] - Wrong to use !jQuery(&#39;#content-messages&#39;) in \\framework\\images\\webapp\\images\\selectall.js line #354
- [[OFBIZ-5295](https://issues.apache.org/jira/browse/OFBIZ-5295)] - Anonymous Quick Checkout: No Payment Method Information shown in Order Confirmation
- [[OFBIZ-5370](https://issues.apache.org/jira/browse/OFBIZ-5370)] - OrderItemShipGrpInvRes incorrect when receiving an inventory item that relates to more than one record
- [[OFBIZ-5373](https://issues.apache.org/jira/browse/OFBIZ-5373)] - If received quantity is greater then ordered quantity then order item quantity update but order item shipgroup assoc quantity does not updated.
- [[OFBIZ-5385](https://issues.apache.org/jira/browse/OFBIZ-5385)] - Purchase order immutable/unchangeable errors when adding variant products
- [[OFBIZ-5416](https://issues.apache.org/jira/browse/OFBIZ-5416)] - Sales order cart items already assigned to ship groups are incorrectly able to be modified to quantities/prices that break the ProductStoreShipmentMeth rules
- [[OFBIZ-5419](https://issues.apache.org/jira/browse/OFBIZ-5419)] - Ordering a License product sometimes (most often) gives a blank page
- [[OFBIZ-5424](https://issues.apache.org/jira/browse/OFBIZ-5424)] - OrderStatus with status ITEM\_CREATED not created for auto-added promo items and items appended after order creation
- [[OFBIZ-5430](https://issues.apache.org/jira/browse/OFBIZ-5430)] - &quot;Please Select Your Shipping Method&quot; error sometimes occurs when updating order items
- [[OFBIZ-5470](https://issues.apache.org/jira/browse/OFBIZ-5470)] - List Price gets reset to zero after updating default/base price of existing order items
- [[OFBIZ-5482](https://issues.apache.org/jira/browse/OFBIZ-5482)] - Create Production Run RoutingId lookup field dropdown results empty
- [[OFBIZ-5501](https://issues.apache.org/jira/browse/OFBIZ-5501)] - ImageManagementServices.createContentAndDataResource() method might uses DataResource.dataResourceName field to store too long names
- [[OFBIZ-5546](https://issues.apache.org/jira/browse/OFBIZ-5546)] - RAW\_MATERIAL return/RMA functionality not supported OOTB
- [[OFBIZ-5551](https://issues.apache.org/jira/browse/OFBIZ-5551)] - Cannot delete the record When Server Timezone and Application timeZone are different.
- [[OFBIZ-5570](https://issues.apache.org/jira/browse/OFBIZ-5570)] - appendOrderItem Service Not Applying Order Item Attributes
- [[OFBIZ-5629](https://issues.apache.org/jira/browse/OFBIZ-5629)] - Pagination at find WorkEffort screen does not work
- [[OFBIZ-5630](https://issues.apache.org/jira/browse/OFBIZ-5630)] - service updateFxConversion doesn&#39;t set thruDate properly
- [[OFBIZ-5632](https://issues.apache.org/jira/browse/OFBIZ-5632)] - Changing Visual theme in Order manager results in error message
- [[OFBIZ-5641](https://issues.apache.org/jira/browse/OFBIZ-5641)] - Problem with Purchase Order Accounting Entries
- [[OFBIZ-5658](https://issues.apache.org/jira/browse/OFBIZ-5658)] - checkExistsImage method in ImageManagementServices
- [[OFBIZ-5685](https://issues.apache.org/jira/browse/OFBIZ-5685)] - Setting a dependent question for question of type &#39;Boolean Yes/No&#39; is not possible
- [[OFBIZ-5714](https://issues.apache.org/jira/browse/OFBIZ-5714)] - Comment does not save
- [[OFBIZ-5766](https://issues.apache.org/jira/browse/OFBIZ-5766)] - Error when adding/modifying a task to a Production Run - field type error
- [[OFBIZ-5773](https://issues.apache.org/jira/browse/OFBIZ-5773)] - &lt;@htmlTemplate.renderDateTimeField&gt; icon buttons disappear on some pages after refresh
- [[OFBIZ-5799](https://issues.apache.org/jira/browse/OFBIZ-5799)] - Can&#39;t mount root web app
- [[OFBIZ-5806](https://issues.apache.org/jira/browse/OFBIZ-5806)] - Incoming context (in runSync : deletePartyContactMechPurpose) does not match expected requirements
- [[OFBIZ-5822](https://issues.apache.org/jira/browse/OFBIZ-5822)] - use requestParameters for customMethod call
- [[OFBIZ-5824](https://issues.apache.org/jira/browse/OFBIZ-5824)] - Error in communication screen while perfom sorting
- [[OFBIZ-5826](https://issues.apache.org/jira/browse/OFBIZ-5826)] - Shipper Account screen not rendering shipper accounts
- [[OFBIZ-5846](https://issues.apache.org/jira/browse/OFBIZ-5846)] - Field definition problem, program should use purposeFromDate in stead of fromDate.
- [[OFBIZ-5847](https://issues.apache.org/jira/browse/OFBIZ-5847)] - If define the &amp;amp; and combine with &quot;part&quot; that encode to ∂
- [[OFBIZ-5848](https://issues.apache.org/jira/browse/OFBIZ-5848)] - Poodle-disable sslv3
- [[OFBIZ-5850](https://issues.apache.org/jira/browse/OFBIZ-5850)] - &lt;@htmlTemplate.renderDateTimeField does not parse date string based on input format
- [[OFBIZ-5854](https://issues.apache.org/jira/browse/OFBIZ-5854)] - Order On Hold Auto Approves When Edited
- [[OFBIZ-5858](https://issues.apache.org/jira/browse/OFBIZ-5858)] - Quote profit percentage is calculated wrong
- [[OFBIZ-5869](https://issues.apache.org/jira/browse/OFBIZ-5869)] - correction to changeset r1626462 and r1626463
- [[OFBIZ-5877](https://issues.apache.org/jira/browse/OFBIZ-5877)] - Add new address not workign on manage address screen
- [[OFBIZ-5883](https://issues.apache.org/jira/browse/OFBIZ-5883)] - jQuery datetimepicker popup time value is not set correctly from an existing value
- [[OFBIZ-5885](https://issues.apache.org/jira/browse/OFBIZ-5885)] - EntityListIterator Not Closed for Entity JobSandbox, caught in Finalize
- [[OFBIZ-5891](https://issues.apache.org/jira/browse/OFBIZ-5891)] - Party Content Upload Ajax Is Broken
- [[OFBIZ-5904](https://issues.apache.org/jira/browse/OFBIZ-5904)] - &quot;Value&quot; attribute of hidden form field is overridden by same name value in context
- [[OFBIZ-5906](https://issues.apache.org/jira/browse/OFBIZ-5906)] - The &lt;delete&gt; action in &lt;entity-engine-xml&gt; definitions throw an error in tests
- [[OFBIZ-5909](https://issues.apache.org/jira/browse/OFBIZ-5909)] - FTL error message is displayed on Return screen, when clicked on Return selected items button
- [[OFBIZ-5914](https://issues.apache.org/jira/browse/OFBIZ-5914)] - Gift card reload service not working OOTB
- [[OFBIZ-5915](https://issues.apache.org/jira/browse/OFBIZ-5915)] - Error when viewing Shipment Plan from Manufacturing
- [[OFBIZ-5916](https://issues.apache.org/jira/browse/OFBIZ-5916)] - Cutting List Report from Manufacturing Shipment Plans throws error due to due to missing EntityCondition import
- [[OFBIZ-5920](https://issues.apache.org/jira/browse/OFBIZ-5920)] - Incorrect use of if-has-permission tag
- [[OFBIZ-5923](https://issues.apache.org/jira/browse/OFBIZ-5923)] - Production Run Content button throws unable to resolve class GenericValue error
- [[OFBIZ-5930](https://issues.apache.org/jira/browse/OFBIZ-5930)] - Data resouce caching issue while render data resource on multi tenant environment
- [[OFBIZ-5933](https://issues.apache.org/jira/browse/OFBIZ-5933)] - state/province dropdown contains incorrect items when Canada is chosen in country dropdown
- [[OFBIZ-5934](https://issues.apache.org/jira/browse/OFBIZ-5934)] - Project &#39;ofbiz-release13.07&#39; is missing required library: avalon-util-exception-1.0.0.jar
- [[OFBIZ-5941](https://issues.apache.org/jira/browse/OFBIZ-5941)] - Error when adding quantity less than 1 but greater than 0 to cart
- [[OFBIZ-5945](https://issues.apache.org/jira/browse/OFBIZ-5945)] - GlReconciledFinAccountTrans.ftl finAccountTrans.entryDateId should be finAccountTrans.entryDate
- [[OFBIZ-5951](https://issues.apache.org/jira/browse/OFBIZ-5951)] - Product Costs page actions cause incorrect listings
- [[OFBIZ-5962](https://issues.apache.org/jira/browse/OFBIZ-5962)] - If orderDecimalQuantity set to N then system should return error if user add partial quantity in order
- [[OFBIZ-5968](https://issues.apache.org/jira/browse/OFBIZ-5968)] - framework/images/webapp/images/fieldlookup.js throws a javascript error in google chrome from a link to ofbiz from another site
- [[OFBIZ-6013](https://issues.apache.org/jira/browse/OFBIZ-6013)] - &quot;Return Selected Item(s)&quot; button broken for manually created returns
- [[OFBIZ-6057](https://issues.apache.org/jira/browse/OFBIZ-6057)] - Quote item view FreeMarker error due Freemarker 2.3 versions higher than 2.3.19
- [[OFBIZ-6070](https://issues.apache.org/jira/browse/OFBIZ-6070)] - Create content for product causes exception
- [[OFBIZ-6077](https://issues.apache.org/jira/browse/OFBIZ-6077)] - Error when creating a quote report
- [[OFBIZ-6088](https://issues.apache.org/jira/browse/OFBIZ-6088)] - There should not need to setup SystemProperty data on each tenant for specifying path to store tenant images.
- [[OFBIZ-6090](https://issues.apache.org/jira/browse/OFBIZ-6090)] - Unable to return order items in return process.
- [[OFBIZ-6095](https://issues.apache.org/jira/browse/OFBIZ-6095)] - Promo action party lookup dropdown throws error
- [[OFBIZ-6101](https://issues.apache.org/jira/browse/OFBIZ-6101)] - Error updating order when item quantity less than 1 but greater than 0 exists
- [[OFBIZ-6114](https://issues.apache.org/jira/browse/OFBIZ-6114)] - webtools entity references generates exceptions
- [[OFBIZ-6120](https://issues.apache.org/jira/browse/OFBIZ-6120)] - Allow FOP to support &lt;fo:external-graphic/&gt; for -Dportoffset
- [[OFBIZ-6131](https://issues.apache.org/jira/browse/OFBIZ-6131)] - Error when updating shipment destinationFacilityId
- [[OFBIZ-6142](https://issues.apache.org/jira/browse/OFBIZ-6142)] - returnItems.ftl freemarker null error when returnPrice or returnQuantity is null
- [[OFBIZ-6157](https://issues.apache.org/jira/browse/OFBIZ-6157)] - Upgrade commons-validator from 1.4.0 to 1.4.1
- [[OFBIZ-6158](https://issues.apache.org/jira/browse/OFBIZ-6158)] - Upgrade commons-net from 3.1 to 3.3
- [[OFBIZ-6159](https://issues.apache.org/jira/browse/OFBIZ-6159)] - Upgrade commons-logging from 1.1.2 to 1.2
- [[OFBIZ-6160](https://issues.apache.org/jira/browse/OFBIZ-6160)] - Upgrade commons-csv from 1.0 to 1.1
- [[OFBIZ-6161](https://issues.apache.org/jira/browse/OFBIZ-6161)] - Upgrade commons-codec from 1.6 to 1.10
- [[OFBIZ-6169](https://issues.apache.org/jira/browse/OFBIZ-6169)] - Upgrade Tomcat from 7.0.57 to 7.0.59
- [[OFBIZ-6183](https://issues.apache.org/jira/browse/OFBIZ-6183)] - Error when web app has mount point /
- [[OFBIZ-6188](https://issues.apache.org/jira/browse/OFBIZ-6188)] - Task Report error for Manufacturing Shipment Plan
- [[OFBIZ-6196](https://issues.apache.org/jira/browse/OFBIZ-6196)] - Package Labels Report error for Manufacturing Shipment Plan
- [[OFBIZ-6199](https://issues.apache.org/jira/browse/OFBIZ-6199)] - Find Commission Run screen is broken.
- [[OFBIZ-6200](https://issues.apache.org/jira/browse/OFBIZ-6200)] - Order Adjustment details are hidden on order Item section of order entry page.
- [[OFBIZ-6202](https://issues.apache.org/jira/browse/OFBIZ-6202)] - &quot;Expected hash&quot; Freemarker error in FindInventoryEventPlan
- [[OFBIZ-6205](https://issues.apache.org/jira/browse/OFBIZ-6205)] - Use EntityUtilProperties to get the WebSiteProperties
- [[OFBIZ-6207](https://issues.apache.org/jira/browse/OFBIZ-6207)] - Anyone can view any Request or Quote
- [[OFBIZ-6252](https://issues.apache.org/jira/browse/OFBIZ-6252)] - Release branches fail to compile with JDK 1.8
- [[OFBIZ-6254](https://issues.apache.org/jira/browse/OFBIZ-6254)] - Minilang: type=&quot;NewMap&quot; and type=&quot;NewList&quot; for the Set element don&#39;t work
- [[OFBIZ-6260](https://issues.apache.org/jira/browse/OFBIZ-6260)] - foScreenMacroLibrary.ftl renderLabel doesn&#39;t apply style parameter
- [[OFBIZ-6262](https://issues.apache.org/jira/browse/OFBIZ-6262)] - CategoryContentWrapper ignores session locale
- [[OFBIZ-6269](https://issues.apache.org/jira/browse/OFBIZ-6269)] - Pro-rate shipping calculation is generating incorrect invoice in case of order with subtotal $0.00
- [[OFBIZ-6309](https://issues.apache.org/jira/browse/OFBIZ-6309)] - Freemarker errors at language change page due to locale with no display name returned by Locale.getAvailableLocales() in UtilMisc.java#getAvailableLocaleList
- [[OFBIZ-6346](https://issues.apache.org/jira/browse/OFBIZ-6346)] - When used setDependentDropdownValuesJs.ftl precludes focus-field-name
- [[OFBIZ-6351](https://issues.apache.org/jira/browse/OFBIZ-6351)] - ordermgr/control/ListQuoteItems quoteItemSeqId button not showing due to ${bsh}
- [[OFBIZ-6357](https://issues.apache.org/jira/browse/OFBIZ-6357)] - Some fields are missing in the person simple-map-processor
- [[OFBIZ-6369](https://issues.apache.org/jira/browse/OFBIZ-6369)] - Corrected the order in which invoice and payment transactions are created
- [[OFBIZ-6387](https://issues.apache.org/jira/browse/OFBIZ-6387)] - Duplicate referredByPartyId field for EmployementAppForms.xml#ListEmployementApps at humanres/control/FindEmploymentApps

## Improvement

- [[OFBIZ-4020](https://issues.apache.org/jira/browse/OFBIZ-4020)] - Sign up for a contact list always redirects to the main ecommerce page
- [[OFBIZ-5325](https://issues.apache.org/jira/browse/OFBIZ-5325)] - Deprecate doCacheClear in Delegator interface and class and related minilang classes
- [[OFBIZ-5807](https://issues.apache.org/jira/browse/OFBIZ-5807)] - Upgraded to Freemarker 2.3.21
- [[OFBIZ-5835](https://issues.apache.org/jira/browse/OFBIZ-5835)] - Trunk fails to compile with Java 1.8
- [[OFBIZ-6030](https://issues.apache.org/jira/browse/OFBIZ-6030)] - ViewQuoteItemInfo.ftl has &lt;td&gt;&lt;/td&gt; at the wrong place
- [[OFBIZ-6118](https://issues.apache.org/jira/browse/OFBIZ-6118)] - Upgrade Log4j from 2.0.1 to 2.2
- [[OFBIZ-6370](https://issues.apache.org/jira/browse/OFBIZ-6370)] - Removed unused commons-cli 1.2 jar

## Task

- [[OFBIZ-6123](https://issues.apache.org/jira/browse/OFBIZ-6123)] - Upgrade Freemarker from 2.3.21 to 2.3.22

## Sub-task

- [[OFBIZ-2602](https://issues.apache.org/jira/browse/OFBIZ-2602)] - Main storefront page, Featured Products (middle column) overwrites right column. Should just crop column, but not overwrite right column.
- [[OFBIZ-3920](https://issues.apache.org/jira/browse/OFBIZ-3920)] - HtmlFormRenderer : with attribute skip-start, lookup fields are broken
- [[OFBIZ-4457](https://issues.apache.org/jira/browse/OFBIZ-4457)] - Checkout layout: in screens before payment screen: the fields are below the last div in right column.
- [[OFBIZ-6139](https://issues.apache.org/jira/browse/OFBIZ-6139)] - Lookup fields break when used with a form having skip-start=&quot;true&quot;
- [[OFBIZ-6170](https://issues.apache.org/jira/browse/OFBIZ-6170)] - You can&#39;t rely on Lookup field description-field-name attribute in a form having skip-start=&quot;true&quot;
- [[OFBIZ-6340](https://issues.apache.org/jira/browse/OFBIZ-6340)] - Replacing bsh code with groovy Code in ORDER screens, forms and menus
