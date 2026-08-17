---
layout: post
title: 'Apache OFBiz News - October 2016 '
date: '2016-11-07T16:39:17+00:00'
permalink: apache_ofbiz_news_october_2016
---
<h2>Apache OFBiz News October 2016 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about the refactoring of some key components, we continue the introduction of more unit tests, an OFBiz Security Mailing list is setup and the community starts preparing to create a new and much awaited release branch.
<!--more-->
<h2>Refactored Start and Base Components</h2> 
Work is still continuing on refactoring OFBiz. The refactoring effort has already significantly reduced our codebase making it more efficient to run. This month a large amount of work was done to refactor the <a href="https://issues.apache.org/jira/browse/OFBIZ-8337"> Start and Base Components. </a>
<p></p>
These are two key components, with complex code that form the core of OFBiz functionality, so tidying these up is an important step. We have needed to be especially careful to ensure that everything works correctly after the refactoring.  Thanks to everyone involved in the reviewing and testing and also to Taher Alkhateeb for leading this work effort. 
 
<h2>More OFBiz Unit Tests</h2> 
A few months ago, code was added to the trunk as the base framework for the introduction of unit tests. Creating unit tests for OFBiz is important because it helps us ensure that code can be tested to prove that it works as expected. The focus on refactoring has given us an opportunity to add more unit tests to the code base. We hope that the use of unit testing will help us improve both code quality and debugging or tracking down bugs.

<h2>OFBiz Security Mailing List</h2> 
Recently the project setup a new mailing list where people can report any security issues they encounter with OFBiz. It is very important that security vulnerabilities are reported immediately to the OFBiz Security Team and not to the standard community development or user lists. The OFBiz Security Team is responsible for investigating and fixing any vulnerabilities found. See the link below for details of how to contact them:
<p></p>
<a href="https://www.apache.org/security/projects.html">OFBiz Security Team </a> 
<p></p>
Details of any OFBiz security vulnerabilities are published under the <a href="http://ofbiz.apache.org/download.html">Security Vulnerabilities </a> section of our Downloads Page.
Please check this page regularly for the latest information.
 
<h2>Preparing for a new OFBiz Release</h2> 
This year has been a very busy one for the project with a lot of changes happening such as significant refactoring and the introduction of Gradle. Discussions are now in progress for the creation of a branch that will eventually become our next release. The new release will be dedicated to the memory of  <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Memorial+-+Adrian+Crum">Adrian Crum </a>  who died earlier this year.

<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Made the entity delegator test less noisy by disabling the error log level during the execution of these tests.</li>
 	<li>Removed the specialpurpose/oagis component; a reference to it is in the Attic page.</li>
 	<li>Align the column title in list forms in Accounting. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8278">OFBIZ-8278</a>)</li>
 	<li>QuoteId field is no longer shown when creating a new Quote (<a href="https://issues.apache.org/jira/browse/OFBIZ-7777">OFBIZ-7777</a>)</li>
 	<li>Removed unused imports from groovy files for code optimization in
<ul>
 	<li>WebPos. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8442">OFBIZ-8442</a>)</li>
 	<li>Party. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8465">OFBIZ-8465</a>)</li>
 	<li>BI. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8474">OFBIZ-8474</a>)</li>
 	<li>Birt. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8482">OFBIZ-8482</a>)</li>
 	<li>Ebaystore. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8485">OFBIZ-8485</a>)</li>
 	<li>Example. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8483">OFBIZ-8483</a>)</li>
 	<li>Accounting. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8484">OFBIZ-8484</a>)</li>
 	<li>Projectmgr. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8488">OFBIZ-8488</a>)</li>
</ul>
</li>
 	<li>Align the column title in list forms in Accounting-AR. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8449">OFBIZ-8449</a>)</li>
 	<li>Services of Entity moved to EntityExt and services of Datamodel moved to Component.</li>
 	<li>Improved product based promotion calculation. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7359">OFBIZ-7359</a>)</li>
 	<li>Entity auto services now return success messages. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7597">OFBIZ-7597</a>)</li>
 	<li>Align the column title in list forms in
<ul>
 	<li>Manufacturing. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8467">OFBIZ-8467</a>)</li>
 	<li>Facility. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8480">OFBIZ-8480</a>)</li>
 	<li>HR. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8456">OFBIZ-8456</a>)</li>
</ul>
</li>
 	<li>In list form widgets the header row now doesn't render if said list is empty. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7598">OFBIZ-7598</a>)</li>
 	<li>Error message now properly visible after adding an item in webpos. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7563">OFBIZ-7563</a>)</li>
 	<li>Refactor and simplify the startup sequence in OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-8337">OFBIZ-8337</a>)
<ul>
 	<li>Rename ContainerConfig.Container to ContainerConfig.Configuration, the old nameing was very confusing as it confuses it with actual containers.</li>
 	<li>Change the signature of ContainerLoader and Container to accept List&lt;StartupCommand&gt; instead of String[]. And also migrate the adapter for converting these args into a standalone class called StartupCommandsToArgsAdapter.</li>
 	<li>Remove the LockedBy annotation as it is not used.</li>
 	<li>Substantially simplify the ContainerLoader load and unload logic and delete the start logic (merge it with load). The interface StartupLoader was updated accordingly.</li>
 	<li>Remove old logic to load containers in hot-deploy components.</li>
 	<li>Remove printThreadDump output from ContainerLoader which used to exist for debugging purposes and is no longer necessary.</li>
 	<li>Cleanup the AdminServer startup logic.</li>
 	<li>Change the StartupControlPanel logic to use only one StartupLoader instead of a list. The only implementation is ContainerLoader.</li>
 	<li>Remove the synchronized blocks in StartupControlPanel due to having only one loader.</li>
 	<li>Update the startup .properties files to reflect the changes in the startup logic.</li>
 	<li>Update the TestRunContainer to use List&lt;StartupCommand&gt; in its logic.</li>
</ul>
</li>
 	<li>Convert entity related CRUD services from simple to entity-auto for
<ul>
 	<li>MimeType. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8365">OFBIZ-8365</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8366">OFBIZ-8366</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8367">OFBIZ-8367</a>)</li>
 	<li>MimeTypeHtmlTemplate. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8368">OFBIZ-8368</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8369">OFBIZ-8369</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8370">OFBIZ-8370</a>)</li>
 	<li>MetaDataPredicate. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8362">OFBIZ-8362</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8363">OFBIZ-8363</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8364">OFBIZ-8364</a>)</li>
 	<li>FileExtension. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8359">OFBIZ-8359</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8360">OFBIZ-8360</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8361">OFBIZ-8361</a>)</li>
 	<li>CharacterSet. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8355">OFBIZ-8355</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8356">OFBIZ-8356</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8357">OFBIZ-8357</a>)</li>
 	<li>DataResourceTypeAttr. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8352">OFBIZ-8352</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8353">OFBIZ-8353</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8354">OFBIZ-8354</a>)</li>
 	<li>ElectronicText. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8371">OFBIZ-8371</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8372">OFBIZ-8372</a>)</li>
 	<li>ContactMechAttribute. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8373">OFBIZ-8373</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8374">OFBIZ-8374</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8375">OFBIZ-8375</a>)</li>
 	<li>GlAccountOrganization. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8379">OFBIZ-8379</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8380">OFBIZ-8380</a>)</li>
 	<li>GlJournal. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8381">OFBIZ-8381</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8382">OFBIZ-8382</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8383">OFBIZ-8383</a>)</li>
 	<li>WorkEffort. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8394">OFBIZ-8394</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8395">OFBIZ-8395</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8396">OFBIZ-8396</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8397">OFBIZ-8397</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8398">OFBIZ-8398</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8399">OFBIZ-8399</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8400">OFBIZ-8400</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8401">OFBIZ-8401</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8402">OFBIZ-8402</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8403">OFBIZ-8403</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8404">OFBIZ-8404</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8405">OFBIZ-8405</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8406">OFBIZ-8406</a>)</li>
 	<li>GlAccount. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8378">OFBIZ-8378</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8377">OFBIZ-8377</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8387">OFBIZ-8387</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8386">OFBIZ-8386</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8385">OFBIZ-8385</a>)</li>
 	<li>DataResource. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8346">OFBIZ-8346</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8347">OFBIZ-8347</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8349">OFBIZ-8349</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8350">OFBIZ-8350</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8351">OFBIZ-8351</a>)</li>
</ul>
</li>
 	<li>Converted some CRUD services from simple to entity-auto. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8384">OFBIZ-8384</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8388">OFBIZ-8388</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8295">OFBIZ-8295</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8294">OFBIZ-8294</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8389">OFBIZ-8389</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8390">OFBIZ-8390</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8391">OFBIZ-8391</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8392">OFBIZ-8392</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8393">OFBIZ-8393</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-8407">OFBIZ-8407</a>)</li>
 	<li>Added CRUD services for
<ul>
 	<li>InvoiceTypeAttr, MrpEventType, OrderAdjustmentAttribute, OrderAdjustmentType, OrderAttribute, OrderBlacklist, OrderBlacklistType, QuantityBreakType, QuoteTermAttribute and QuoteType entities. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8271">OFBIZ-8271</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8277">OFBIZ-8277</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8281">OFBIZ-8281</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8283">OFBIZ-8283</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8285">OFBIZ-8285</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8286">OFBIZ-8286</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8287">OFBIZ-8287</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8303">OFBIZ-8303</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8304">OFBIZ-8304</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8305">OFBIZ-8305</a>)</li>
 	<li>QuoteTypeAttr, RejectionReason, ReorderGuideline, RequirementAttribute, RequirementBudgetAllocation, RequirementType, RequirementTypeAttr, RespondingParty, ReturnAdjustmentType and ReturnHeaderType entities. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8306">OFBIZ-8306</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8308">OFBIZ-8308</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8309">OFBIZ-8309</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8310">OFBIZ-8310</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8311">OFBIZ-8311</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8314">OFBIZ-8314</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8325">OFBIZ-8325</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8326">OFBIZ-8326</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8327">OFBIZ-8327</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8328">OFBIZ-8328</a>)</li>
 	<li>Added CRUD services for ReturnItemType, ReturnItemTypeMap, ReturnReason, ReturnType, RoleType, RoleTypeAttr and SaleType entities. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8329">OFBIZ-8329</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8330">OFBIZ-8330</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8331">OFBIZ-8331</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8332">OFBIZ-8332</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8333">OFBIZ-8333</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8334">OFBIZ-8334</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8335">OFBIZ-8335</a>)</li>
 	<li>FinAccountTransType, FinAccountTransTypeAttr, FinAccountType, FinAccountTypeAttr, FixedAssetAttribute, FixedAssetIdentType, FixedAssetProductType, FixedAssetStdCostType,FixedAssetType, FixedAssetTypeAttr, GlAccountClass, GlAccountGroup, GlAccountGroupMember, GlAccountGroupType, GlAccountRole, GlAccountType, GlBudgetXref, FacilityCarrierShipment, FacilityLocationGeoPoint and ExampleType entities. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8205">OFBIZ-8205</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8206">OFBIZ-8206</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8207">OFBIZ-8207</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8209">OFBIZ-8209</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8210">OFBIZ-8210</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8211">OFBIZ-8211</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8212">OFBIZ-8212</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8213">OFBIZ-8213</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8214">OFBIZ-8214</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8215">OFBIZ-8215</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8216">OFBIZ-8216</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8217">OFBIZ-8217</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8218">OFBIZ-8218</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8219">OFBIZ-8219</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8220">OFBIZ-8220</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8221">OFBIZ-8221</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8233">OFBIZ-8233</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8234">OFBIZ-8234</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8235">OFBIZ-8235</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8236">OFBIZ-8236</a>)</li>
 	<li>GlFiscalType, GlResourceType, GlXbrlClass, GlResourceType, InvoiceAttribute, InvoiceItemAssocType, InvoiceNote, MarketingCampaignNote, OrderContent, SalesOpportunityCompetitor
(<a href="https://issues.apache.org/jira/browse/OFBIZ-8237">OFBIZ-8237</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8238">OFBIZ-8238</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8239">OFBIZ-8239</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8240">OFBIZ-8240</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8256">OFBIZ-8256</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8258">OFBIZ-8258</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8268">OFBIZ-8268</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8274">OFBIZ-8274</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8288">OFBIZ-8288</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8431">OFBIZ-8431</a>)</li>
 	<li>SalesOpportunityRole, SalesOpportunityStage, SalesOpportunityTrckCode, SalesOpportunityWorkEffort, SecurityGroup, SettlementTerm, ShipmentGatewayUsps, and ShipmentItemFeature entities. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8433">OFBIZ-8433</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8434">OFBIZ-8434</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8435">OFBIZ-8435</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8436">OFBIZ-8436</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8438">OFBIZ-8438</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8441">OFBIZ-8441</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8464">OFBIZ-8464</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8466">OFBIZ-8466</a>)</li>
 	<li>ShipmentGatewayUps and SalesOpportunityQuote entities.
(<a href="https://issues.apache.org/jira/browse/OFBIZ-8463">OFBIZ-8463</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8432">OFBIZ-8432</a>)</li>
 	<li>ShipmentAttribute, ShipmentBoxType, ShipmentContactMechType, ShipmentCostEstimate, ShipmentGatewayConfig, ShipmentReceipt, ShipmentTypeAttr, ShoppingListItemSurvey, StandardLanguage and StatusItem entities
(<a href="https://issues.apache.org/jira/browse/OFBIZ-8443">OFBIZ-8443</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8444">OFBIZ-8444</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8452">OFBIZ-8452</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8453">OFBIZ-8453</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8454">OFBIZ-8454</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8468">OFBIZ-8468</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8472">OFBIZ-8472</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8477">OFBIZ-8477</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8479">OFBIZ-8479</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8481">OFBIZ-8481</a>)</li>
 	<li>SalesInvoiceItemFact, OrderItemAssoc, OrderItemAssocType, OrderItemContactMech, OrderItemGroup, OrderItemPriceInfo, OrderItemRole, OrderItemShipGrpInvRes, OrderItemType and OrderItemTypeAttr entities.
(<a href="https://issues.apache.org/jira/browse/OFBIZ-8430">OFBIZ-8430</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8581">OFBIZ-8581</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8582">OFBIZ-8582</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8583">OFBIZ-8583</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8584">OFBIZ-8584</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8585">OFBIZ-8585</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8586">OFBIZ-8586</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8587">OFBIZ-8587</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8588">OFBIZ-8588</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8589">OFBIZ-8589</a>)</li>
</ul>
</li>
 	<li>Added agreementItemSeqId in AgreementContent entity, now content can be uploaded for item level as well (<a href="https://issues.apache.org/jira/browse/OFBIZ-7969">OFBIZ-7969</a>)</li>
 	<li>Removed duplicate entry for product in specialpurpose/ecommerce/data/DemoRentalProduct.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-8623">OFBIZ-8623</a>)</li>
 	<li>Unit test case for service - sendOrderConfirmation (<a href="https://issues.apache.org/jira/browse/OFBIZ-8507">OFBIZ-8507</a>)</li>
 	<li>Improved look of the view and edit buttons in the shipment page with flatgray theme. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7486">OFBIZ-7486</a>)</li>
 	<li>Made UI consistent for keyword search result screen of Ebay. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7472">OFBIZ-7472</a>)</li>
 	<li>Use UtilValidate isEmpty and isNotEmpty methods correctly. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8413">OFBIZ-8413</a>)</li>
 	<li>Add WebSocket support (<a href="https://issues.apache.org/jira/browse/OFBIZ-7073">OFBIZ-7073</a>)</li>
 	<li>Removed the unused ControlApplet.java class</li>
 	<li>Renamed files
<ul>
 	<li>conditional.xml to conditionalLabels.xml</li>
 	<li>DefaultMessages.xml to DefaultMessagesLabels.xml</li>
 	<li>EmailPassword.xml to EmailPasswordLabels.xml</li>
</ul>
</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>Null Pointer Exception in the ecommerce webapp when accessed with multitenant mode on, caused by the recent refactoring to ContextFilter. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8338">OFBIZ-8338</a>)</li>
 	<li>The Payment section in the party profile page is broken when the Party does not have a check account. (<a href="https://issues.apache.org/jira/browse/OFBIZ-6899">OFBIZ-6899</a>)</li>
 	<li>Cannot edit shopping list for ecommerce and ecomseo (<a href="https://issues.apache.org/jira/browse/OFBIZ-8348">OFBIZ-8348</a>)</li>
 	<li>Entity description labels are considered not used by the Label Manager (<a href="https://issues.apache.org/jira/browse/OFBIZ-8154">OFBIZ-8154</a>)</li>
 	<li>Error in the deleteCustomerTaxAuthInfo page called from /ecommerce/control/viewprofile (<a href="https://issues.apache.org/jira/browse/OFBIZ-4106">OFBIZ-4106</a>)</li>
 	<li>Labels and properties caches clearing no longer work (<a href="https://issues.apache.org/jira/browse/OFBIZ-8321">OFBIZ-8321</a>)</li>
 	<li> Shortlist the needed resources to start OFBiz in the sourcesets block in Gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-7937">OFBIZ-7937</a>)</li>
 	<li>Pagination error in
<ul>
 	<li>Accounting PaymentGroupForms. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8446">OFBIZ-8446</a>)</li>
 	<li>Accounting TaxAuthorityForms. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8475">OFBIZ-8475</a>)</li>
</ul>
</li>
 	<li>InventoryItemStatus logging for reserved serialized inventory item. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8459">OFBIZ-8459</a>)</li>
 	<li>Entity ECA rules throws Null Pointer Exception in case of a remove operation. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8001">OFBIZ-8001</a>)</li>
 	<li>Popup calendar fails for ecomseo et Ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-8345">OFBIZ-8345</a>)</li>
 	<li>Cannot edit images in Content (<a href="https://issues.apache.org/jira/browse/OFBIZ-7000">OFBIZ-7000</a>)</li>
 	<li>Product page missing form elements (<a href="https://issues.apache.org/jira/browse/OFBIZ-8489">OFBIZ-8489</a>)</li>
 	<li>Error due to missing entry of service resource in ofbiz-component.</li>
 	<li>Updating Party Content Image does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-8458">OFBIZ-8458</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8347">OFBIZ-8347</a>)</li>
 	<li>Footer text inconsistent in flatgray theme (<a href="https://issues.apache.org/jira/browse/OFBIZ-8625">OFBIZ-8625</a>)</li>
 	<li>Console Warning: No parameter found for override parameter named ... (<a href="https://issues.apache.org/jira/browse/OFBIZ-7814">OFBIZ-7814</a>)</li>
 	<li>Search Single Transactions From eBay not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-8624">OFBIZ-8624</a>)</li>
 	<li>Missing uiLabel on Export Products to eBay screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-8508">OFBIZ-8508</a>)</li>
 	<li>Column 'DATA_CATEGORY_ID' cannot accept a NULL value (<a href="https://issues.apache.org/jira/browse/OFBIZ-8282">OFBIZ-8282</a>)</li>
 	<li>When we pass only "orderId" in "updateOrderHeader" service all values are getting null. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8339">OFBIZ-8339</a>)</li>
 	<li>Bursted Layout in screen "orderstatus" of Ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-8265">OFBIZ-8265</a>)</li>
 	<li>Nonsense css value in html output (<a href="https://issues.apache.org/jira/browse/OFBIZ-8312">OFBIZ-8312</a>)</li>
 	<li>Errormessage "Can't find resource for bundle" on EditProductContent (<a href="https://issues.apache.org/jira/browse/OFBIZ-8336">OFBIZ-8336</a>)</li>
 	<li>Net Before Overhead Report is not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-7317">OFBIZ-7317</a>)</li>
</ul>
