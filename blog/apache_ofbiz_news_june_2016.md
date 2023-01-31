---
layout: post
title: Apache OFBiz News - June 2016
date: '2016-07-05T07:37:15+00:00'
permalink: apache_ofbiz_news_june_2016
---
<h2>Apache OFBiz News June 2016 </h2>
Welcome to our regular monthly round-up of OFBiz news.
We have had a busy time this month and have news about our Community Day event, OFBiz becomes a Registered Trademark, we setup an environment to help mentor our Committers,  we prepare to change our build system and our PMC grows.
<!--more-->
<h2>OFBiz Community Day</h2>
Our Community Days are held every 3 months and we held our second one for 2016 on 18th June. They are proving very popular and the community is also using the opportunity to make it fun. The activity level was very high and contributions came in from around the world reinforcing the our focus on collaboration. 
<p></p>
During the Community Day a total of 34 issues were closed or resolved, another 21 were worked on (of which 9 now have patches available). A Jira sprint was set up to monitor the activity and the details can be found in the <a href="https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=64&view=reporting&chart=sprintRetrospective&sprint=241">Sprint Report</a>
<p></p>
OFBiz was also showing up on the <a href="https://status.apache.org/">ASF Status Monitor </a> as the most active project over the Community Day weekend with Pranay Pandey and Mridul Pathak appearing in the list of the top 5 most active Committers. 
<p></p>
Thanks to everyone for a great effort and we are looking forward to the next Community Day on 17th September.
<h2>Apache OFBiz - A Registered Trademark</h2>
We are very pleased to announce that Apache OFBiz became a registered trademark of the Apache Software Foundation this month. This change was done to protect and  reinforce our brand. Our existing logo has been updated with the new 'Registered Trademark' symbol.
<h2>New PMC Members</h2>
Two new members joined the OFBiz Project Management Committee (PMC) this month - Taher Alkhateeb and Christian Geisert. Congratulations to them both!
<h2>Mentoring for Committers</h2>
The results from our Committer's Survey last month showed that the majority of our Committers wanted a mentoring programme put in place. In response to this a mentoring environment has been setup using HipChat. The main aim is to provide an informal place where newer committers can learn and collaborate with more experienced ones. 
The feedback so far has been very positive.
<h2>Moving from Ant to Gradle</h2>
Our ongoing code re-factoring uncovered a limitation with our current Ant build system. Our existing scripts are very large and make it difficult to implement a more detailed unit testing framework. After some detailed discussions about the options available, the community has decided go ahead using Gradle as the new build tool. To keep user impact low, Gradle will only be implemented in the trunk and any future releases. All existing releases and branches will continue to use Ant.
<p></p>
An initial Gradle patch for the trunk is currently being tested and once complete will be applied to the trunk.
<p></p>
<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Updated dependency-check-report.html to include recently updated jar (<a href="https://issues.apache.org/jira/browse/OFBIZ-7141">OFBIZ-7141</a>)</li>
 	<li>Added condition on EditProduct form, now inventoryItemTypeId will be enabled only for createProduct, and on EditProduct screen it will be displayed as readonly instead of editable dropdown. Also fixed fk-name for inventoryItemTypeId relation (<a href="https://issues.apache.org/jira/browse/OFBIZ-7079">OFBIZ-7079</a>)</li>
 	<li>invoiceType data. Added new InvoiceType 'INVOICE' and set it as parent type for SALES_INVOICE, PURCHASE_INVOICE and TEMPLATE (<a href="https://issues.apache.org/jira/browse/OFBIZ-7147">OFBIZ-7147</a>)</li>
 	<li>Display all the one time configurable fields on edit product screen in display mode (<a href="https://issues.apache.org/jira/browse/OFBIZ-7151">OFBIZ-7151</a>)</li>
 	<li>createQuoteItem now displays EditQuoteItem page instead of ListQuoteItems, when an error occurs (<a href="https://issues.apache.org/jira/browse/OFBIZ-6361">OFBIZ-6361</a>)</li>
 	<li>Added support for specifying lead time while placing a quote to purchase a product. Lead time days will also be shown in "view quote"-screen and "list quote"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7051">OFBIZ-7051</a>)</li>
 	<li>UI Improvement made question field in EditSurveyQuestions read-only corrected button labels for "Survey Question Create/Update"-form (<a href="https://issues.apache.org/jira/browse/OFBIZ-7154">OFBIZ-7154</a>)</li>
 	<li>Add lookup for party when associating party to category (<a href="https://issues.apache.org/jira/browse/OFBIZ-7176">OFBIZ-7176</a>)</li>
 	<li>Successfully adding a new feature interaction now redirects to the "Find Feature Interaction"-page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7178">OFBIZ-7178</a>)</li>
 	<li>Improvements in "Find Shipment"-screen to make it consistent with other find screens (<a href="https://issues.apache.org/jira/browse/OFBIZ-7170">OFBIZ-7170</a>)</li>
 	<li>Material/components required will now also be shown when production run is confirmed (<a href="https://issues.apache.org/jira/browse/OFBIZ-7087">OFBIZ-7087</a>)</li>
 	<li>Add fields for "product name" in the create and edit forms in ProductForms so the user can add a product name when creating a product (<a href="https://issues.apache.org/jira/browse/OFBIZ-7139">OFBIZ-7139</a>)</li>
 	<li>The "Create Product Return"-screen now doesn't show the "created by"-field (<a href="https://issues.apache.org/jira/browse/OFBIZ-7175">OFBIZ-7175</a>)</li>
 	<li>ContentWrapper now honors the contents over the entity fields (<a href="https://issues.apache.org/jira/browse/OFBIZ-7169">OFBIZ-7169</a>)</li>
 	<li>Refactor the start component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6783">OFBIZ-6783</a>)
<ul>
 	<li>convert the startup loaders from ArrayList to List. Given that only two loaders existed in the system since the beginning of OFBiz means that it is really unnecessary to use the loaders.trimToSize() method. This leads to changing many method signatures from ArrayList to list across different classes</li>
 	<li>more simplification of Config.java by simplifying timezone setting logic</li>
 	<li>remove the throws StartupException from main.</li>
 	<li>introduce a function called fullyTerminateSystem(StartupException e). This function replaces the exception described above. Consequently, the methods init, status and shutdown no longer throw an exception but instead terminate the system (which is the right thing to do).</li>
 	<li>finetune adaptStartupCommandsToLoaderArgs(...) and other places in StartupControlPanel</li>
 	<li>separate the Classpath creation from NativeLibClassLoader creation. This makes it cleaner and easier to refactor in the future</li>
 	<li>break the StartupControlPanel.start(...) method into smaller more readable methods. It is easier now to understand the startup sequence for ofbiz in english words (the method names). It also allows for cleaner refactoring in the future.</li>
 	<li>add JavaDoc to a lot of methods all over the start component</li>
 	<li>rename AdminPortThread to AdminServer and create a new class called AdminClient. Now everything relating to controlling OFBiz directly happens through StartupControlPanel such as start, stop or init for the server, and everything which happens indirectly through the network (by an admin client) is done through the AdminClient which talks to AdminServer</li>
 	<li> more refactoring of AdminServer to simplify the code and break it down into multiple methods and refactor some messy old code</li>
</ul>
</li>
 	<li>Implement Party lookup by External Id OFBIZ-382</li>
 	<li>Add a look-up for Product Id in "Find Facility Inventory Items"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7250">OFBIZ-7250</a>)</li>
 	<li>Arrange UI Labels in alphabetic order according to best practice in many *UiLabel.xml files (<a href="https://issues.apache.org/jira/browse/OFBIZ-7247">OFBIZ-7247</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7196">OFBIZ-7196</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7198">OFBIZ-7198</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7204">OFBIZ-7204</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7206">OFBIZ-7206</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7226">OFBIZ-7226</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7218">OFBIZ-7218</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7279">OFBIZ-7279</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7278">OFBIZ-7278</a>)</li>
 	<li>Added support to include party classification information in promo description (<a href="https://issues.apache.org/jira/browse/OFBIZ-7027">OFBIZ-7027</a>)</li>
 	<li>Move minilang scripts from component://componentname/script/org/ofbiz to component://componentname/minilang (<a href="https://issues.apache.org/jira/browse/OFBIZ-7267">OFBIZ-7267</a>)</li>
 	<li>Relocate .groovy files in the all components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7218">OFBIZ-7218</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7219">OFBIZ-7219</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7222">OFBIZ-7222</a>) - (<a href="https://issues.apache.org/jira/browse/OFBIZ-7245">OFBIZ-7245</a>)</li>
 	<li>Improved the styling for the anchor links inside the 'button-bar' to fix styling for CommonButtonBarMenu (<a href="https://issues.apache.org/jira/browse/OFBIZ-7268">OFBIZ-7268</a>)</li>
 	<li>Added the -server JVM argument to Ant targets like start and tools/start*.bat files (<a href="https://issues.apache.org/jira/browse/OFBIZ-7321">OFBIZ-7321</a>)</li>
 	<li>Support to add condition for Geo Location in Promo Engine (<a href="https://issues.apache.org/jira/browse/OFBIZ-7008">OFBIZ-7008</a>)</li>
 	<li>Made SequenceNum field editable on "Edit Content Purpose"-form (<a href="https://issues.apache.org/jira/browse/OFBIZ-7326">OFBIZ-7326</a>)</li>
 	<li>Improved check on existing production runs for order so that createProductionRunsForOrder service considers cancelled production runs (<a href="https://issues.apache.org/jira/browse/OFBIZ-6328">OFBIZ-6328</a>)</li>
 	<li>EntityUtilProperties improved so that if there's a database entry for a property the database entry overrides the associated properties file (<a href="https://issues.apache.org/jira/browse/OFBIZ-7112">OFBIZ-7112</a>)</li>
 	<li>Added WebSiteAlias usage example to cmssite data (<a href="https://issues.apache.org/jira/browse/OFBIZ-7132">OFBIZ-7132</a>)</li>
 	<li>Added a look-up for Shipment Id and WorkEffort Id in "Inventory Items Details"-screen in the facility component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7301">OFBIZ-7301</a>)</li>
 	<li>Added a look-up for Product Id, UserLogin Id and Billing Account in "Find Order"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7302">OFBIZ-7302</a>)</li>
 	<li>Removed unused imports from groovy files for code optimization (<a href="https://issues.apache.org/jira/browse/OFBIZ-7400">OFBIZ-7400</a>), (<a href="https://issues.apache.org/jira/browse/OFBIZ-7396">OFBIZ-7396</a>) and (<a href="https://issues.apache.org/jira/browse/OFBIZ-7411">OFBIZ-7411</a>)</li>
 	<li>Added a look-up for UserLogin Id in "Find Party"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7303">OFBIZ-7303</a>)</li>
 	<li>Added a look-up for Product Id in "Find Revision"-screen in the scrum component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7304">OFBIZ-7304</a>)</li>
 	<li>Made "find timesheet result"-list non-editable as this list is intended to display information about timesheets and any timesheet can be edited from their view page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7354">OFBIZ-7354</a>)</li>
 	<li>Hovering over the logo section now shows layout settings markup in Tomahawk theme instead of displaying company name (<a href="https://issues.apache.org/jira/browse/OFBIZ-7407">OFBIZ-7407</a>)</li>
 	<li>New ProductPriceType 'SHIPPING_ALLOWANCE' and a new minimumPrice field in ProductStoreShipmentMeth entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-6940">OFBIZ-6940</a>)</li>
 	<li>Now product added for any task from Actual Material screen will be consumed/issued in production run declaration screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7173">OFBIZ-7173</a>)</li>
 	<li>Added capability to expire or remove the content for a party (<a href="https://issues.apache.org/jira/browse/OFBIZ-7374">OFBIZ-7374</a>)</li>
 	<li>Users can now select multiple options in the "Purchases by Organization"-report from basic search criteria while generating report (<a href="https://issues.apache.org/jira/browse/OFBIZ-7389">OFBIZ-7389</a>)</li>
 	<li>Users can now select multiple options in the "Sales by Store"-report from basic search criteria while generating report (<a href="https://issues.apache.org/jira/browse/OFBIZ-7385">OFBIZ-7385</a>)</li>
 	<li>Users can now select multiple options in the "Open Order Items"-report from basic search criteria while generating report (<a href="https://issues.apache.org/jira/browse/OFBIZ-7386">OFBIZ-7386</a>)</li>
 	<li>Comments added while adding products to cart are now editable at cart item level, added field for item comment in cart item (<a href="https://issues.apache.org/jira/browse/OFBIZ-7187">OFBIZ-7187</a>)</li>
 	<li>Provided an option to specifiy the "facility location" while providing the inventory/stock once the production run gets completed (<a href="https://issues.apache.org/jira/browse/OFBIZ-7108">OFBIZ-7108</a>)</li>
 	<li>Now CSR should be able to cancel order items of multiple ship groups. Also CSR should be able to cancel quantities less than ordered quantity (<a href="https://issues.apache.org/jira/browse/OFBIZ-7255">OFBIZ-7255</a>)</li>
 	<li>Updated Apache Shiro to 1.2.5 (<a href="https://issues.apache.org/jira/browse/OFBIZ-7373">OFBIZ-7373</a>)</li>
 	<li>Completed and finished "Autocompletion for Compound Widget" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7061">OFBIZ-7061</a>)</li>
 	<li>Now "Sales Quotes" won't be created for cacelled or rejected item form CustRequestItem (<a href="https://issues.apache.org/jira/browse/OFBIZ-7404">OFBIZ-7404</a>)</li>
 	<li>Updated optionality to required for attributes in "entity auto"-services where pk fields were mentioned optional (<a href="https://issues.apache.org/jira/browse/OFBIZ-7519">OFBIZ-7519</a>)</li>
 	<li>Added Product lookup when associating product with location from "Edit Facility Location"-page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7332">OFBIZ-7332</a>)</li>
 	<li>After adding child categories users now remain on the same page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7256">OFBIZ-7256</a>)</li>
 	<li>Hide associated content related section when creating new Product/Category content (<a href="https://issues.apache.org/jira/browse/OFBIZ-7259">OFBIZ-7259</a>)</li>
 	<li>Hide Rule Id field when creating "Product Manufacturing"-rule (<a href="https://issues.apache.org/jira/browse/OFBIZ-7530">OFBIZ-7530</a>)</li>
 	<li>Display commission agreements on "product detail"-page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7528">OFBIZ-7528</a>)</li>
 	<li>Converted FindShipment ftl to form widget (<a href="https://issues.apache.org/jira/browse/OFBIZ-6144">OFBIZ-6144</a>)</li>
 	<li>Now showing price comlumn in supplier prduct lookup during PO creation (<a href="https://issues.apache.org/jira/browse/OFBIZ-7592">OFBIZ-7592</a>)</li>
 	<li>Removed HtmlFormWrapper dependencies from the following screens
<ul>
 	<li>Production Run (<a href="https://issues.apache.org/jira/browse/OFBIZ-7566">OFBIZ-7566</a>)</li>
 	<li>Production Run Cost (<a href="https://issues.apache.org/jira/browse/OFBIZ-7567">OFBIZ-7567</a>)</li>
 	<li>Calendar Exception Week (<a href="https://issues.apache.org/jira/browse/OFBIZ-7569">OFBIZ-7569</a>)</li>
 	<li>Order Delivery Schedule Info (<a href="https://issues.apache.org/jira/browse/OFBIZ-7570">OFBIZ-7570</a>)</li>
 	<li>Content Search (<a href="https://issues.apache.org/jira/browse/OFBIZ-7572">OFBIZ-7572</a>)</li>
 	<li>Survey Question (<a href="https://issues.apache.org/jira/browse/OFBIZ-7565">OFBIZ-7565</a>)</li>
 	<li>Calendar Exception Day (<a href="https://issues.apache.org/jira/browse/OFBIZ-7568">OFBIZ-7568</a>)</li>
 	<li>Product Config Item Content (<a href="https://issues.apache.org/jira/browse/OFBIZ-7571">OFBIZ-7571</a>)</li>
</ul>
</li>
 	<li>Remove HtmlFormWrapper Class after removing all its dependencies (<a href="https://issues.apache.org/jira/browse/OFBIZ-7574">OFBIZ-7574</a>)</li>
 	<li>Removed unused imports related to HtmlFormWrapper and unused files using it (<a href="https://issues.apache.org/jira/browse/OFBIZ-7573">OFBIZ-7573</a>)</li>
 	<li>Now fromDate and thruDate can be added while adding a party to a "production run"-form (<a href="https://issues.apache.org/jira/browse/OFBIZ-7336">OFBIZ-7336</a>)</li>
 	<li>Added lookup for approver party at "leave approval find"-form (<a href="https://issues.apache.org/jira/browse/OFBIZ-7604">OFBIZ-7604</a>)</li>
 	<li>Now party can be assigned to a routing task (<a href="https://issues.apache.org/jira/browse/OFBIZ-5852">OFBIZ-5852</a>)</li>
 	<li>Changed the field "andCondition" (which uses direct call to groovy) to "conditionFields" a couple of lookups
<ul>
 	<li>applications/party/widget/partymgr/LookupScreens#LookupCustomerName (<a href="https://issues.apache.org/jira/browse/OFBIZ-7656">OFBIZ-7656</a>)</li>
 	<li>applications/product/widget/catalog/LookupScreens#LookupVirtualProduct (<a href="https://issues.apache.org/jira/browse/OFBIZ-7659">OFBIZ-7659</a>)</li>
 	<li>applications/party/widget/partymgr/LookupScreens#LookupInternalOrganization (<a href="https://issues.apache.org/jira/browse/OFBIZ-7657">OFBIZ-7657</a>)</li>
 	<li>applications/party/widget/partymgr/LookupScreens#LookupContact (<a href="https://issues.apache.org/jira/browse/OFBIZ-7658">OFBIZ-7658</a>)</li>
</ul>
</li>
 	<li>Now able to manage filters in lookup auto completion (<a href="https://issues.apache.org/jira/browse/OFBIZ-7350">OFBIZ-7350</a>)</li>
 	<li>Added websocket support in OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-7073">OFBIZ-7073</a>)</li>
 	<li>Enforced noninstantiability to multiple classes (<a href="https://issues.apache.org/jira/browse/OFBIZ-7378">OFBIZ-7378</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7379">OFBIZ-7379</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7380">OFBIZ-7380</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7382">OFBIZ-7382</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7383">OFBIZ-7383</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7388">OFBIZ-7388</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7391">OFBIZ-7391</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7393">OFBIZ-7393</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7398">OFBIZ-7398</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7399">OFBIZ-7399</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7408">OFBIZ-7408</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7401">OFBIZ-7401</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7405">OFBIZ-7405</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7410">OFBIZ-7410</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7412">OFBIZ-7412</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7413">OFBIZ-7413</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7417">OFBIZ-7417</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7419">OFBIZ-7419</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7420">OFBIZ-7420</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7422">OFBIZ-7422</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7423">OFBIZ-7423</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7426">OFBIZ-7426</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7431">OFBIZ-7431</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7433">OFBIZ-7433</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7445">OFBIZ-7445</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7446">OFBIZ-7446</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7447">OFBIZ-7447</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7448">OFBIZ-7448</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7450">OFBIZ-7450</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7453">OFBIZ-7453</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7455">OFBIZ-7455</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7459">OFBIZ-7459</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7460">OFBIZ-7460</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7397">OFBIZ-7397</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7463">OFBIZ-7463</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7466">OFBIZ-7466</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7470">OFBIZ-7470</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7474">OFBIZ-7474</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7479">OFBIZ-7479</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7540">OFBIZ-7540</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>Error on updating product categories from Product's Quick Admin page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7142">OFBIZ-7142</a>)</li>
 	<li>Error in rendering Quote PDF which is not having terms associated to it (<a href="https://issues.apache.org/jira/browse/OFBIZ-7146">OFBIZ-7146</a>)</li>
 	<li>"Create New Product Config Item Content"-Page missing field names (<a href="https://issues.apache.org/jira/browse/OFBIZ-7148">OFBIZ-7148</a>)</li>
 	<li>Issue of Incorrect fetching of Invoice while creating paymentApplication from matching invoices (<a href="https://issues.apache.org/jira/browse/OFBIZ-7124">OFBIZ-7124</a>)</li>
 	<li>Fixed typo javascrip -&gt; javascript (<a href="https://issues.apache.org/jira/browse/OFBIZ-7160">OFBIZ-7160</a>)</li>
 	<li>Definition Location filter at Service Reference (<a href="https://issues.apache.org/jira/browse/OFBIZ-7163">OFBIZ-7163</a>)</li>
 	<li>Typo in freemarker else tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-7164">OFBIZ-7164</a>)</li>
 	<li>Freemarker template error on "Edit Custom Time Periods" for Child Periods (<a href="https://issues.apache.org/jira/browse/OFBIZ-7156">OFBIZ-7156</a>)</li>
 	<li>Lexical error on clicking "Create New Financial Account Reconciliations" button (<a href="https://issues.apache.org/jira/browse/OFBIZ-7157">OFBIZ-7157</a>)</li>
 	<li>Regression caused by refactoring start comp (<a href="https://issues.apache.org/jira/browse/OFBIZ-7167">OFBIZ-7167</a>) FIXTHIS weiter ausfuehren?</li>
 	<li>Problem assigning contentassoc with different "content assoc" types (<a href="https://issues.apache.org/jira/browse/OFBIZ-7159">OFBIZ-7159</a>)</li>
 	<li>"Purchase Return Shipments" not allowing to select received inventory against the Product that needed to be returned (<a href="https://issues.apache.org/jira/browse/OFBIZ-7060">OFBIZ-7060</a>)</li>
 	<li>Error in the "Asset Geo Location"-page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7153">OFBIZ-7153</a>)</li>
 	<li>"Purchase Return shipments" not allowing to select received inventory within auto-completer search against the returned item by adding support to enable auto-completer at Issue inventory item section, now user is able to search inventories supplied by the given vendor and having ATP &gt; 0 via auto-completer (<a href="https://issues.apache.org/jira/browse/OFBIZ-7105">OFBIZ-7105</a>)</li>
 	<li>Error in "accounting transactions"-pdf due to missing child block in case when there was a no field for exchange rate when currencyUomId is equal to origCurrencyUomId (<a href="https://issues.apache.org/jira/browse/OFBIZ-7171">OFBIZ-7171</a>)</li>
 	<li>Added some missing UI Label on the EditProductCost page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7177">OFBIZ-7177</a>)</li>
 	<li>Error in "Quote view" for party when none is set, also now opening the party view in new tab (<a href="https://issues.apache.org/jira/browse/OFBIZ-7185">OFBIZ-7185</a>)</li>
 	<li>Security issue with delete child period in EditCustomTimePeriod (<a href="https://issues.apache.org/jira/browse/OFBIZ-7162">OFBIZ-7162</a>)</li>
 	<li>Bug where back end user was not able to update password from Party manager application (<a href="https://issues.apache.org/jira/browse/OFBIZ-6952">OFBIZ-6952</a>)</li>
 	<li>Exception being thrown when sorting by projectId on "Request List" in CustRequestForms, now uses workEffortParentId instead of projectId (<a href="https://issues.apache.org/jira/browse/OFBIZ-7191">OFBIZ-7191</a>)</li>
 	<li>Issue with the "Fixed Order Ship Group"-PDF (<a href="https://issues.apache.org/jira/browse/OFBIZ-7209">OFBIZ-7209</a>)</li>
 	<li>Different forms, screens and services affected due to removal of parentTypeId from 'PURCHASE_INVOICE' and 'SALES_INVOICE' InvoiceType data (<a href="https://issues.apache.org/jira/browse/OFBIZ-7201">OFBIZ-7201</a>)</li>
 	<li>Error thrown in CMS by clicking the "find"-button (<a href="https://issues.apache.org/jira/browse/OFBIZ-7104">OFBIZ-7104</a>)</li>
 	<li>Error in the "Cost Centers Report"-PDF (<a href="https://issues.apache.org/jira/browse/OFBIZ-7215">OFBIZ-7215</a>)</li>
 	<li>Failure in the "Payment Capture"-process when ERROR is returned in referenceNum in paymentGatewayResponse (<a href="https://issues.apache.org/jira/browse/OFBIZ-7011">OFBIZ-7011</a>)</li>
 	<li>"Create Party Resume" not working because ResumeId couldn't be entered (<a href="https://issues.apache.org/jira/browse/OFBIZ-7205">OFBIZ-7205</a>)</li>
 	<li>Error in the Picking Screen by correcting a typo (<a href="https://issues.apache.org/jira/browse/OFBIZ-7261">OFBIZ-7261</a>)</li>
 	<li>Error in the "GL Account Trial Balance"-PDF (<a href="https://issues.apache.org/jira/browse/OFBIZ-7216">OFBIZ-7216</a>)</li>
 	<li>Problem in "Print Pick Sheet" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7200">OFBIZ-7200</a>)</li>
 	<li>"Requirement Id" and "Product Id"-fields being empty, when generating pdf for "Approved Product Requirements" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7203">OFBIZ-7203</a>)</li>
 	<li>Monthly "Sales Report"-PDF not rendering details (<a href="https://issues.apache.org/jira/browse/OFBIZ-7289">OFBIZ-7289</a>)</li>
 	<li>"Sales Orders By Channel"-PDF not rendering details (<a href="https://issues.apache.org/jira/browse/OFBIZ-7273">OFBIZ-7273</a>)</li>
 	<li>UI Label issue on Find Subscription Resource screen, it was being shown twice (<a href="https://issues.apache.org/jira/browse/OFBIZ-7271">OFBIZ-7271</a>)</li>
 	<li>"timesheet lookup"-dialog find not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-7293">OFBIZ-7293</a>)</li>
 	<li>Corrected typo in createWorkEffortRequestItem (<a href="https://issues.apache.org/jira/browse/OFBiz-7295">OFBiz-7295</a>)</li>
 	<li>Error while importing party in PartyServices (<a href="https://issues.apache.org/jira/browse/OFBIZ-7269">OFBIZ-7269</a>)</li>
 	<li>Error when that prevented the allow-html attribute from being overriden in service implementing any interface (<a href="https://issues.apache.org/jira/browse/OFBIZ-7213">OFBIZ-7213</a>)</li>
 	<li>Typo for middleName in importParty service (<a href="https://issues.apache.org/jira/browse/OFBIZ-7269">OFBIZ-7269</a>)</li>
 	<li>Unable to select "From stock location" from "List Facility Location"-popup (<a href="https://issues.apache.org/jira/browse/OFBIZ-7309">OFBIZ-7309</a>)</li>
 	<li>Security error on "Create New Shopping List" in eCommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-7270">OFBIZ-7270</a>) and (<a href="https://issues.apache.org/jira/browse/OFBIZ-7291">OFBIZ-7291</a>)</li>
 	<li>"Create Request for Quote", "Create New Quote" and "Save" links on "shopping list details"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7296">OFBIZ-7296</a>)</li>
 	<li>Terminal errors on "Timesheet overview"-page of projectmgr and scrum (<a href="https://issues.apache.org/jira/browse/OFBIZ-7115">OFBIZ-7115</a>)</li>
 	<li>PDF reports in Agreements not opening in a new screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-6688">OFBIZ-6688</a>)</li>
 	<li>http://docs.ofbiz.org/ being wrongly used in content (<a href="https://issues.apache.org/jira/browse/OFBIZ-7001">OFBIZ-7001</a>)</li>
 	<li>Getting console error while reading property value in eCommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-7331">OFBIZ-7331</a>)</li>
 	<li>Error on deletion of WorkEffort Request Item on ListWorkEffortRequests view (<a href="https://issues.apache.org/jira/browse/OFBIZ-7298">OFBIZ-7298</a>)</li>
 	<li>statusId field being ignored instead of showing it empty when a new quote is being created (<a href="https://issues.apache.org/jira/browse/OFBIZ-7337">OFBIZ-7337</a>)</li>
 	<li>"date time" field not working properly in case of multiple parent category rollup (<a href="https://issues.apache.org/jira/browse/OFBIZ-7277">OFBIZ-7277</a>)</li>
 	<li>DB connections remaining open and unused on startup (<a href="https://issues.apache.org/jira/browse/OFBIZ-7344">OFBIZ-7344</a>)</li>
 	<li>Error on adding new term to an agreement after updating any existing term or adding new one (<a href="https://issues.apache.org/jira/browse/OFBIZ-7349">OFBIZ-7349</a>)</li>
 	<li>Completed "Service Order Items" being allowed to be edited over SO and approved PO</li>
 	<li>"print pdf"-function in facility/control/ViewFacilityInventoryByProduct throwing an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6947">OFBIZ-6947</a>)</li>
 	<li>"Connection Pool Status"-feature in webtools is broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-7363">OFBIZ-7363</a>)</li>
 	<li>Corrected a typo which the breaks the BIRT report (<a href="https://issues.apache.org/jira/browse/OFBIZ-7364">OFBIZ-7364</a>)</li>
 	<li>Connection pooling not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-7346">OFBIZ-7346</a>)</li>
 	<li>Error on deleting Content Type Attribute (<a href="https://issues.apache.org/jira/browse/OFBIZ-7369">OFBIZ-7369</a>)</li>
 	<li>Creation of a new forum in Content Manager (<a href="https://issues.apache.org/jira/browse/OFBIZ-1191">OFBIZ-1191</a>)</li>
 	<li>Corrected formatting of a lot of CSS files (<a href="https://issues.apache.org/jira/browse/OFBIZ-7311">OFBIZ-7311</a>)</li>
 	<li>Exception being thrown when day links are clicked in the Week and Month view of the Calendar widget (<a href="https://issues.apache.org/jira/browse/OFBIZ-7329">OFBIZ-7329</a>)</li>
 	<li>Updated the widget.lookup.width property so that the pagination header in lookups is rendered properly (<a href="https://issues.apache.org/jira/browse/OFBIZ-7274">OFBIZ-7274</a>)</li>
 	<li>"Find Facility Inventory Items" showing the same 20 items on all pagination pages (<a href="https://issues.apache.org/jira/browse/OFBIZ-7186">OFBIZ-7186</a>)</li>
 	<li>"From Date" and "Through Date" not setting up on adding a new task member as they weren't being sent to service (<a href="https://issues.apache.org/jira/browse/OFBIZ-7367">OFBIZ-7367</a>)</li>
 	<li>Typo in the "requestitems"-target from order menu (<a href="https://issues.apache.org/jira/browse/OFBIZ-7381">OFBIZ-7381</a>)</li>
 	<li>Typo in groovy file name (<a href="https://issues.apache.org/jira/browse/OFBIZ-7218">OFBIZ-7218</a>)</li>
 	<li>Removed unnecessary "Status ID"-field from the "Request Roles" section (<a href="https://issues.apache.org/jira/browse/OFBIZ-7384">OFBIZ-7384</a>)</li>
 	<li>Added missing SecurityUiLabels in scrum component main-decorator to fix UI Label issues in the Profile view (<a href="https://issues.apache.org/jira/browse/OFBIZ-7432">OFBIZ-7432</a>)</li>
 	<li>Purchase Order created out of "Approved Product Requirement" not getting linked/shown over "Requirement - Order"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7128">OFBIZ-7128</a>)</li>
 	<li>Popup to show the existing inventory against "Purchase Return shipments" showing Zero ATP inventory against the Product need to be returned</li>
 	<li>Issue where closing a project for the first time would yield an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-2947">OFBIZ-2947</a>)</li>
 	<li>Page navigation problem with grid and include-grid (<a href="https://issues.apache.org/jira/browse/OFBIZ-7020">OFBIZ-7020</a>)</li>
 	<li>"Coupon Sales"-report not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-7313">OFBIZ-7313</a>)</li>
 	<li>Issue where creating a new ticket without a project Id would assign it to the first project from the list (<a href="https://issues.apache.org/jira/browse/OFBIZ-7392">OFBIZ-7392</a>)</li>
 	<li>"Last 3 Months Sales"-report not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-7314">OFBIZ-7314</a>)</li>
 	<li>Security error in deleting AddressMatchMap for party (<a href="https://issues.apache.org/jira/browse/OFBIZ-7523">OFBIZ-7523</a>)</li>
 	<li>Adding standard product features not working from "Quick Admin"-page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7308">OFBIZ-7308</a>)</li>
 	<li>Added missing UiLabel on "Product Inventory Summary"-page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7351">OFBIZ-7351</a>)</li>
 	<li>Rule id being set erroneously when deleting a manufacturing rule and then passed to the form (<a href="https://issues.apache.org/jira/browse/OFBIZ-7531">OFBIZ-7531</a>)</li>
 	<li>Questions from category should not be shown on survey when creating/editing any question (<a href="https://issues.apache.org/jira/browse/OFBIZ-7527">OFBIZ-7527</a>)</li>
 	<li>"Mime Type Id"-field on Content Lookup displaing Html Encoded String for special character (<a href="https://issues.apache.org/jira/browse/OFBIZ-7368">OFBIZ-7368</a>)</li>
 	<li>Error with "Agreement Item Supplier Product"-PDF (<a href="https://issues.apache.org/jira/browse/OFBIZ-7330">OFBIZ-7330</a>)</li>
 	<li>Replaced EntityUtilProperties getPropertyValue method with correct method calls (<a href="https://issues.apache.org/jira/browse/OFBIZ-7339">OFBIZ-7339</a>)</li>
 	<li>Invoice address being shown when it shouldn't be (<a href="https://issues.apache.org/jira/browse/OFBIZ-7122">OFBIZ-7122</a>)</li>
 	<li>Auto-completer not working when seraching for "Contact Party Id" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7576">OFBIZ-7576</a>)</li>
 	<li>Issue with autocompletion in the Compound widget (<a href="https://issues.apache.org/jira/browse/OFBIZ-7061">OFBIZ-7061</a>)</li>
 	<li>Error in addings tasks to backlog (<a href="https://issues.apache.org/jira/browse/OFBIZ-7252">OFBIZ-7252</a>)</li>
 	<li>Issue where if a party was both a contact and a lead "SFA profile" would render screens for both (<a href="https://issues.apache.org/jira/browse/OFBIZ-6293">OFBIZ-6293</a>)</li>
 	<li>Error when clicking the "Content Page"-button in the "Edit Product Config Item Content"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7524">OFBIZ-7524</a>)</li>
 	<li>Error that occured when making notes private/public from project screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7556">OFBIZ-7556</a>)</li>
 	<li>Added missing UI Label in the "Production Run Assoc"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7516">OFBIZ-7516</a>)</li>
 	<li>Error when deleting "Party Invitation" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7596">OFBIZ-7596</a>)</li>
 	<li>Promo text not getting rendered properly in the "Order Return"-screen when it contained HTML elements (<a href="https://issues.apache.org/jira/browse/OFBIZ-7347">OFBIZ-7347</a>)</li>
 	<li>Shipment button not working on first click in the facility component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7358">OFBIZ-7358</a>)</li>
 	<li>Error in "Product Requirement Creation" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7181">OFBIZ-7181</a>)</li>
 	<li>Adding "Work Effort Party Assignment" creating record with invalid PartyId (<a href="https://issues.apache.org/jira/browse/OFBIZ-7188">OFBIZ-7188</a>)</li>
 	<li>Being unable to set "thru date" for "Product Promo Stores" if promotion is associated with multiple stores</li>
 	<li>Product name showing multiple times on "create purchase order" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7387">OFBIZ-7387</a>)</li>
 	<li>Styling issue on Logs in LogView, as none were being applied (<a href="https://issues.apache.org/jira/browse/OFBIZ-7575">OFBIZ-7575</a>)</li>
 	<li>Removed deprecated XmlFormRenderer class that has been replace by MacroFormRenderer (<a href="https://issues.apache.org/jira/browse/OFBIZ-7631">OFBIZ-7631</a>)</li>
 	<li>Removed deprecated TextFormRenderer class that has been replace by MacroFormRenderer (<a href="https://issues.apache.org/jira/browse/OFBIZ-7632">OFBIZ-7632</a>) and (<a href="https://issues.apache.org/jira/browse/OFBIZ-7633">OFBIZ-7633</a>)</li>
 	<li>Issues with "Forum Screens Delete/Update"-buttons (<a href="https://issues.apache.org/jira/browse/OFBIZ-7554">OFBIZ-7554</a>)</li>
 	<li>Error on closing an re-opening of projects (<a href="https://issues.apache.org/jira/browse/OFBIZ-7262">OFBIZ-7262</a>)</li>
</ul>
<h2>Documentation</h2>
<ul>
 	<li>added JavaDoc to a lot of methods all over the Start component</li>
</ul>
