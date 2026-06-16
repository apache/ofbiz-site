---
layout: post
title: 'Apache OFBiz News - June 2015 '
date: '2015-07-02T09:01:18+00:00'
permalink: apache_ofbiz_news_june_2015
---
<h2>News from the Apache OFBiz Community.</h2>
The 2nd <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">OFBiz Community Day</a> has been conducted with great success, a new bootstrap based theme is in the works and the community discusses new technologies to document the project.<!--more-->
<h2>2nd OFBiz Community Day</h2>
On 20th June community members around the world spent their time collaborating and working on issues and tasks to help improve the project. A Jira Sprint set up for the Community Day included 38 issues and tasks of which 24 were closed at the end of the event. For more details see the <a href="https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=64&amp;view=reporting&amp;chart=sprintRetrospective&amp;sprint=145">sprint report</a>.<br/>
<br/>
There were also some activities on the social side: contributors updated their work status on <a href="https://twitter.com/apacheofbiz">Twitter</a> and the webchat rooms (Skype and Freenode IRC chat) proved very useful in getting fast feedback or clarifications on particular points.<br/>
<br/>
Thanks to everyone who participated in the 2nd OFBiz Community Day! The next Community Day is set for <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days#OFBizCommunityDays-WhenaretheCommunityDays?">19th September</a>.
<h2>New Bootstrap Based Theme</h2>
A new theme based on bootstrap is being developed in a separate branch. It should provide a base for more sophisticated UI experience. The current state of the effort and moving it to trunk is currently being discussed.
<h2>Ongoing Discussions</h2>
<h3>OFBiz Online documentation</h3>
The discussions about the online documentation is still active. Tools and fomats like DITA, AsciiDoc and Markdown were discussed and there are several interesting articles about them in the <a href="http://markmail.org/message/bpttum4zz7fiq53b">mailing list thread</a>.<br/>
<br/>
During the community day a trial was done using Asciidoc for general document editing and then converting it into other formats.<br><br>
An OFBiz addon developed to implement Docbook Webhelp for the OFBiz Online Help is being documented to see if the code can be reused to implement as a Webhelp solution.<br>
You can follow progress using the following Jira issues <a href= "https://issues.apache.org/jira/browse/OFBIZ-6450">OFBIZ-6450</a> and <a href= "https://issues.apache.org/jira/browse/OFBIZ-6015">OFBIZ-6015</a>.

<br><br>
Below now the detailed enhancements and bug fixes from June 2015.
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring: foll
<ul>
	<li>Order manager customer requests
<ul>
	<li>All &lt;dropdown&gt; fields at order/widget/ordermgr/CustRequestForms.xml#FindRequests were updated with allow-multiple="true" to enable multi-value searches (<a href="https://issues.apache.org/jira/browse/OFBIZ-6315">OFBIZ-6315</a>)</li>
	<li>Added ListRequestList &lt;display-entity&gt; for custRequestTypeId so the description would be displayed instead of the id value to match the find field (<a href="https://issues.apache.org/jira/browse/OFBIZ-6445">OFBIZ-6445</a>)</li>
	<li>FindRequest ListRequestList productStoreId rendered as &lt;display-entity&gt; with storeName as the description and &lt;sub-hyperlink&gt; with link text as [${productStoreId}] (<a href="https://issues.apache.org/jira/browse/OFBIZ-6446">OFBIZ-6446</a>)</li>
	<li>Added custRequestDate FindRequest ListRequestList because it appears as a find field in FindRequests form (<a href="https://issues.apache.org/jira/browse/OFBIZ-6447">OFBIZ-6447</a>)</li>
	<li>Consolidated name and partyId fields of CustRequestForms.xml#ListRequestRoles by removing name and turning partyId into &lt;display-entity&gt; and converting name &lt;hyperlink&gt; as its &lt;sub-hyperlink&gt; (<a href="https://issues.apache.org/jira/browse/OFBIZ-6464">OFBIZ-6464</a>)</li>
	<li>Replaced submit button uiLabelMap.CommonSubmit text with CommonCreate at CustRequestForms.xml#EditRequestRole to improve user understanding that the form only allows creations (<a href="https://issues.apache.org/jira/browse/OFBIZ-6465">OFBIZ-6465</a>)</li>
	<li>Replacing deleteCustRequestParty with expireCustRequestParty to be exectuted with newly added Expire &lt;hyperlink&gt; and implementing deleteCustRequestParty to perform &lt;remove-value&gt; instead of updating (<a href="https://issues.apache.org/jira/browse/OFBIZ-6463">OFBIZ-6463</a>)</li>
</ul>
</li>
	<li>Cleanup of UI Labels for languages which aren't well supported (<a href="https://issues.apache.org/jira/browse/OFBIZ-5177">OFBIZ-5177</a>)</li>
	<li>Added another ModelFormField.TextField constructor to allow subclass RangeFindField constructor to override the TextField default fieldType of FieldInfo.TEXT with FieldInfo.RANGEQBE (<a href="https://issues.apache.org/jira/browse/OFBIZ-6459">OFBIZ-6459</a>)</li>
	<li>Added Postal Address templates for the Netherlands (<a href="https://issues.apache.org/jira/browse/OFBIZ-6470">OFBIZ-6470</a>)</li>
	<li>Added Postal Address templates for France</li>
	<li>First steps for upgrading OFBiz to use the Java JDK 8, incl. fixing a compilation error in Eclipse EJC (<a href="https://issues.apache.org/jira/browse/OFBIZ-6458">OFBIZ-6458</a>)</li>
	<li>Added support for renderImage in framework/widget/templates/foScreenMacroLibrary.ftl (<a href="https://issues.apache.org/jira/browse/OFBIZ-6475">OFBIZ-6475</a>)</li>
	<li>Added Geo Data Set for Chile (<a href="https://issues.apache.org/jira/browse/OFBIZ-6476">OFBIZ-6476</a>)</li>
	<li>Commented out unused form ViewSprintItem in the Scrum component (<a href="https://issues.apache.org/jira/browse/OFBIZ-5975">OFBIZ-5975</a>)</li>
	<li>Added support for foFormMacroLibrary.ftl
<ul>
	<li>renderFieldTitle style parameter (<a href="https://issues.apache.org/jira/browse/OFBIZ-6479">OFBIZ-6479</a>)</li>
	<li>renderFormOpen styles (<a href="https://issues.apache.org/jira/browse/OFBIZ-6481">OFBIZ-6481</a>)</li>
	<li>renderFormatListWrapperOpen (<a href="https://issues.apache.org/jira/browse/OFBIZ-6483">OFBIZ-6483</a>)</li>
</ul>
</li>
	<li>New implementation of the two-way cryptographic services of OFBiz based on Apache Shiro:
<ul>
	<li>two-way encryption is now delegated to Apache Shiro, with stronger initialization vectors</li>
	<li>the mechanism is backward compatible</li>
	<li>new tools to update the encryption of private keys, useful to upgrade older versions of OFBiz and most of all to replace old keys with new ones (this is critical to implement stronger security practices as requested by PCI)</li>
	<li>unit tests</li>
</ul>
</li>
	<li>Reorganized the eclipse classpath file</li>
	<li>Resynchronised MacroFormTemplate for xml, text, csv and fo with the one for html (<a href="https://issues.apache.org/jira/browse/OFBIZ-6461">OFBIZ-6461</a>)</li>
	<li>countyGeoId and geoPointId fields are missing in PartyAndPostalAddress entity view (<a href="https://issues.apache.org/jira/browse/OFBIZ-6513">OFBIZ-6513</a>). Fields are added via alias-all so newly added fields to PostalAddress will show up in the view automatically.</li>
	<li>Improved widget-form with four elements : include-form, include-grid, include-menu, include-screen to offer more flexibility to define complex displays. The main purpose is to complete the screen widget capacity to replace ftl screen. With these elements, example component has a new FindExample search screen to select the display list type with examples of:
<ul>
	<li>include-form : list examples with their features</li>
	<li>include-screen : list examples with their item</li>
	<li>include-grid : list examples with their status history
The element include-menu is present on FindUtilCache screen. Also a new CommonInlineBarMenu menu type to display menu with specific purpose (in-line) is now present and with this logic adding in-line-bar css class on themes thomawak and flatgrey.
This covers the following issues:</li>
	<li>Add support for form/grid embedding within grids (<a href="https://issues.apache.org/jira/browse/OFBIZ-6502">OFBIZ-6502</a>)</li>
	<li>Add support for screen embedding inside grids (<a href="https://issues.apache.org/jira/browse/OFBIZ-6501">OFBIZ-6501</a>)</li>
	<li>Allow form/grid widget hyperlinks to be grouped into a single column (<a href="https://issues.apache.org/jira/browse/OFBIZ-6404">OFBIZ-6404</a>)</li>
</ul>
</li>
	<li>Added missing entries to .gitignore to ignore typical Idea/Eclipse folders/files (<a href="https://issues.apache.org/jira/browse/OFBIZ-6319">OFBIZ-6319</a>)</li>
	<li>Added framework/base/config to the Eclipse .classpath file (<a href="https://issues.apache.org/jira/browse/OFBIZ-6317">OFBIZ-6317</a>)</li>
	<li>Replaced Freemarker templates at webtools/control/entitymaint with widgets. Removed multi column and converted links as include-menu (<a href="https://issues.apache.org/jira/browse/OFBIZ-6402">OFBIZ-6402</a>)</li>
	<li>Moved theme-specific js &amp; css references from CommonDecorator(s) to themes (<a href="https://issues.apache.org/jira/browse/OFBIZ-6362">OFBIZ-6362</a>)</li>
	<li>Migrated findParty.ftl to form widgets (<a href="https://issues.apache.org/jira/browse/OFBIZ-6227">OFBIZ-6227</a>).</li>
	<li>Added new orderRoleInfo screen to display all role associations to an order on vieworder (<a href="https://issues.apache.org/jira/browse/OFBIZ-6044">OFBIZ-6044</a>)</li>
	<li>Use description attribute as default on &lt;entity-option&gt; and &lt;list-option&gt; like &lt;display-entity&gt; element (<a href="https://issues.apache.org/jira/browse/OFBIZ-6489">OFBIZ-6489</a> and <a href="https://issues.apache.org/jira/browse/OFBIZ-6490">OFBIZ-6490</a>)</li>
	<li>Set viewIndex and viewSize for lists as optional and if they aren't present resolve viewSize from widgets.properties and set viewIndex to one (<a href="https://issues.apache.org/jira/browse/OFBIZ-6523">OFBIZ-6523</a>)</li>
	<li>Removed old deprecated code in WorkEffortEventReminder services (<a href="https://issues.apache.org/jira/browse/OFBIZ-6519">OFBIZ-6519</a>)</li>
	<li>New translations
<ul>
	<li>Simplified Chinese for Accounting, Content, Order, Party, Product, WorkEffort, Common, Service, Webtools, Birt, Ecommerce, Example, WebPos (<a href="https://issues.apache.org/jira/browse/OFBIZ-6518">OFBIZ-6518</a>)</li>
	<li>Added about 1800 missing or wrong German labels for the accounting component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6521">OFBIZ-6521</a>)</li>
</ul>
</li>
	<li>Added functionality to untie geo associations (<a href="https://issues.apache.org/jira/browse/OFBIZ-6528">OFBIZ-6528</a>). Adds a new grid in EditGeoScreen to see/delete GeoAssoc and CommonEntityLabels default-resource-name on GeoAssocType for translation purpose. Introduces a clickable link to open the associated Geo and a column to show the geoTypeId of the associated Geo.</li>
	<li>Show estimatedShipDate and estimatedDeliveryDate on OrderItemShipGroup if they are present (<a href="https://issues.apache.org/jira/browse/OFBIZ-6198">OFBIZ-6198</a>)</li>
	<li>Removed async=false from lookupDescriptionLoaded, getJSONuiLabels and getJSONuiLabel Javascript methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-6530">OFBIZ-6530</a>)</li>
	<li>The oauth2 login icons will appear in /ecomseo/checkLogin page if the seed data files are properly configured and imported into database (<a href="https://issues.apache.org/jira/browse/OFBIZ-6135">OFBIZ-6135</a>)</li>
</ul>
&nbsp;
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
	<li>Fixed Postal Address PDF Formatter Screen Problems (<a href="https://issues.apache.org/jira/browse/OFBIZ-6444">OFBIZ-6444</a>). It was set to use the HTML renderer which results in errors written to the log. Also the various PostalAddressXXXX.fo.ftl files did not escape XML properly, and addresses with an &amp; in them ended up causing a FreeMarker template error.</li>
	<li>Removed duplicate title attibute from RecentFeedback form (<a href="https://issues.apache.org/jira/browse/OFBIZ-6454">OFBIZ-6454</a>)</li>
	<li>All postalAddress simple-map-processors miss some fields (<a href="https://issues.apache.org/jira/browse/OFBIZ-6514">OFBIZ-6514</a>)</li>
	<li>Fixed error "field name (or key) unitCost is not valid for entity ShipmentReceipt" on receive return screen.</li>
	<li>PortalPageViewPermissionError is missing UiLabelMap translation data (<a href="https://issues.apache.org/jira/browse/OFBIZ-6500">OFBIZ-6500</a>)</li>
	<li>Fix for "Print Pick Sheet PDF using orderId.pdf as attachement name" (<a href="https://issues.apache.org/jira/browse/OFBIZ-6398">OFBIZ-6398</a>). This was introduced during the improvement for (<a href="https://issues.apache.org/jira/browse/OFBIZ-4480">OFBIZ-4480</a>). The behaviour is changed to name the attachment PickSheet&lt;orderId&gt;.pdf for single order pick sheets and preserve the original naming when used for multiple order pick sheets.</li>
	<li>Two order payment preferences were added to the order, when order with order total 0 (zero) is placed with Billing Account (<a href="https://issues.apache.org/jira/browse/OFBIZ-6347">OFBIZ-6347</a>)</li>
	<li>Product price does not show up when the store currency is changed and product prices are setup with the new currency (<a href="https://issues.apache.org/jira/browse/OFBIZ-6520">OFBIZ-6520</a>)</li>
	<li>Compiler-Error with JDK 1.8 and source compatibility 1.8 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6300">OFBIZ-6300</a>). This reintroduces type safety for getFieldentryIterator.</li>
	<li>Strange behaviour of the eCommerce Login link (<a href="https://issues.apache.org/jira/browse/OFBIZ-6111">OFBIZ-6111</a>). Now user redirects on its last view page.</li>
	<li>FTL errors at facility/control/authview/ViewContactMechs when TELECOM_NUMBER countryCode or contactNumber is blank (<a href="https://issues.apache.org/jira/browse/OFBIZ-6492">OFBIZ-6492</a>)</li>
	<li>Fixed error in parsing array in ajaxUpdateAreas (<a href="https://issues.apache.org/jira/browse/OFBIZ-6496">OFBIZ-6496</a>)</li>
	<li>Function linkGeos deletes existing GeoAssocs for geoId (<a href="https://issues.apache.org/jira/browse/OFBIZ-6237">OFBIZ-6237</a>)</li>
	<li>Shipping costs were not recalculated after changing the sales order shipment method (<a href="https://issues.apache.org/jira/browse/OFBIZ-5347">OFBIZ-5347</a>). A new service was introduced which loads the cart, saves new shipping method in the cart, recalculates tax and promotions and saves the cart again in order. Also added a new SECA rule which will trigger the resetGrandTotal service on new service updateShipGroupShipInfo.</li>
	<li>InventoryWorker.getOutstandingProductQuantities returns inaccurate results when there are multiple ItemIssuances for an order (<a href="https://issues.apache.org/jira/browse/OFBIZ-4559">OFBIZ-4559</a>)</li>
	<li>Restored the 'request-confirmation' and 'confirmation-message' menu item attributes that were removed in the recent widget refactoring (<a href="https://issues.apache.org/jira/browse/OFBIZ-6334">OFBIZ-6334</a>)</li>
	<li>Potential IndexOutOfBoundsException in CategoryServices.getProductCategoryAndLimitedMembers (<a href="https://issues.apache.org/jira/browse/OFBIZ-6522">OFBIZ-6522</a>). If view indexes as input parameters of service getProductCategoryAndLimitedMembers get manipulated (e.g. by manipulating URL params or bookmarking an URL), it can lead to an IndexOutOfBoundsException because of a lowIndex greater than the list size.</li>
	<li>Corrected compilation error, missing delegatorBaseName parameter for function GenericDelegator.getEntityNamesByGroup (<a href="https://issues.apache.org/jira/browse/OFBIZ-6533">OFBIZ-6533</a>)</li>
	<li>The "Create new" link under partymgr has disappeared (<a href="https://issues.apache.org/jira/browse/OFBIZ-6536">OFBIZ-6536</a>)</li>
</ul>
