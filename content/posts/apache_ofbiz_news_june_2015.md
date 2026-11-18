---
layout: post
title: 'Apache OFBiz News - June 2015 '
date: '2015-07-02T09:01:18+00:00'
permalink: apache_ofbiz_news_june_2015
---
## News from the Apache OFBiz Community.

The 2nd <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">OFBiz Community Day</a> has been conducted with great success, a new bootstrap based theme is in the works and the community discusses new technologies to document the project.<!--more-->

## 2nd OFBiz Community Day

On 20th June community members around the world spent their time collaborating and working on issues and tasks to help improve the project. A Jira Sprint set up for the Community Day included 38 issues and tasks of which 24 were closed at the end of the event. For more details see the <a href="https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=64&amp;view=reporting&amp;chart=sprintRetrospective&amp;sprint=145">sprint report</a>.<br/>
<br/>
There were also some activities on the social side: contributors updated their work status on <a href="https://twitter.com/apacheofbiz">Twitter</a> and the webchat rooms (Skype and Freenode IRC chat) proved very useful in getting fast feedback or clarifications on particular points.<br/>
<br/>
Thanks to everyone who participated in the 2nd OFBiz Community Day! The next Community Day is set for <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days#OFBizCommunityDays-WhenaretheCommunityDays?">19th September</a>.

## New Bootstrap Based Theme

A new theme based on bootstrap is being developed in a separate branch. It should provide a base for more sophisticated UI experience. The current state of the effort and moving it to trunk is currently being discussed.

## Ongoing Discussions

### OFBiz Online documentation

The discussions about the online documentation is still active. Tools and fomats like DITA, AsciiDoc and Markdown were discussed and there are several interesting articles about them in the <a href="http://markmail.org/message/bpttum4zz7fiq53b">mailing list thread</a>.<br/>
<br/>
During the community day a trial was done using Asciidoc for general document editing and then converting it into other formats.<br><br>
An OFBiz addon developed to implement Docbook Webhelp for the OFBiz Online Help is being documented to see if the code can be reused to implement as a Webhelp solution.<br>
You can follow progress using the following Jira issues <a href= "https://issues.apache.org/jira/browse/OFBIZ-6450">OFBIZ-6450</a> and <a href= "https://issues.apache.org/jira/browse/OFBIZ-6015">OFBIZ-6015</a>.

<br><br>
Below now the detailed enhancements and bug fixes from June 2015.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring: foll

- Order manager customer requests
  - All &lt;dropdown&gt; fields at order/widget/ordermgr/CustRequestForms.xml#FindRequests were updated with allow-multiple="true" to enable multi-value searches ([OFBIZ-6315](https://issues.apache.org/jira/browse/OFBIZ-6315))
  - Added ListRequestList &lt;display-entity&gt; for custRequestTypeId so the description would be displayed instead of the id value to match the find field ([OFBIZ-6445](https://issues.apache.org/jira/browse/OFBIZ-6445))
  - FindRequest ListRequestList productStoreId rendered as &lt;display-entity&gt; with storeName as the description and &lt;sub-hyperlink&gt; with link text as [${productStoreId}] ([OFBIZ-6446](https://issues.apache.org/jira/browse/OFBIZ-6446))
  - Added custRequestDate FindRequest ListRequestList because it appears as a find field in FindRequests form ([OFBIZ-6447](https://issues.apache.org/jira/browse/OFBIZ-6447))
  - Consolidated name and partyId fields of CustRequestForms.xml#ListRequestRoles by removing name and turning partyId into &lt;display-entity&gt; and converting name &lt;hyperlink&gt; as its &lt;sub-hyperlink&gt; ([OFBIZ-6464](https://issues.apache.org/jira/browse/OFBIZ-6464))
  - Replaced submit button uiLabelMap.CommonSubmit text with CommonCreate at CustRequestForms.xml#EditRequestRole to improve user understanding that the form only allows creations ([OFBIZ-6465](https://issues.apache.org/jira/browse/OFBIZ-6465))
  - Replacing deleteCustRequestParty with expireCustRequestParty to be exectuted with newly added Expire &lt;hyperlink&gt; and implementing deleteCustRequestParty to perform &lt;remove-value&gt; instead of updating ([OFBIZ-6463](https://issues.apache.org/jira/browse/OFBIZ-6463))
- Cleanup of UI Labels for languages which aren't well supported ([OFBIZ-5177](https://issues.apache.org/jira/browse/OFBIZ-5177))
- Added another ModelFormField.TextField constructor to allow subclass RangeFindField constructor to override the TextField default fieldType of FieldInfo.TEXT with FieldInfo.RANGEQBE ([OFBIZ-6459](https://issues.apache.org/jira/browse/OFBIZ-6459))
- Added Postal Address templates for the Netherlands ([OFBIZ-6470](https://issues.apache.org/jira/browse/OFBIZ-6470))
- Added Postal Address templates for France
- First steps for upgrading OFBiz to use the Java JDK 8, incl. fixing a compilation error in Eclipse EJC ([OFBIZ-6458](https://issues.apache.org/jira/browse/OFBIZ-6458))
- Added support for renderImage in framework/widget/templates/foScreenMacroLibrary.ftl ([OFBIZ-6475](https://issues.apache.org/jira/browse/OFBIZ-6475))
- Added Geo Data Set for Chile ([OFBIZ-6476](https://issues.apache.org/jira/browse/OFBIZ-6476))
- Commented out unused form ViewSprintItem in the Scrum component ([OFBIZ-5975](https://issues.apache.org/jira/browse/OFBIZ-5975))
- Added support for foFormMacroLibrary.ftl
  - renderFieldTitle style parameter ([OFBIZ-6479](https://issues.apache.org/jira/browse/OFBIZ-6479))
  - renderFormOpen styles ([OFBIZ-6481](https://issues.apache.org/jira/browse/OFBIZ-6481))
  - renderFormatListWrapperOpen ([OFBIZ-6483](https://issues.apache.org/jira/browse/OFBIZ-6483))
- New implementation of the two-way cryptographic services of OFBiz based on Apache Shiro:
  - two-way encryption is now delegated to Apache Shiro, with stronger initialization vectors
  - the mechanism is backward compatible
  - new tools to update the encryption of private keys, useful to upgrade older versions of OFBiz and most of all to replace old keys with new ones (this is critical to implement stronger security practices as requested by PCI)
  - unit tests
- Reorganized the eclipse classpath file
- Resynchronised MacroFormTemplate for xml, text, csv and fo with the one for html ([OFBIZ-6461](https://issues.apache.org/jira/browse/OFBIZ-6461))
- countyGeoId and geoPointId fields are missing in PartyAndPostalAddress entity view ([OFBIZ-6513](https://issues.apache.org/jira/browse/OFBIZ-6513)). Fields are added via alias-all so newly added fields to PostalAddress will show up in the view automatically.
- Improved widget-form with four elements : include-form, include-grid, include-menu, include-screen to offer more flexibility to define complex displays. The main purpose is to complete the screen widget capacity to replace ftl screen. With these elements, example component has a new FindExample search screen to select the display list type with examples of:
  - include-form : list examples with their features
  - include-screen : list examples with their item
  - include-grid : list examples with their status history The element include-menu is present on FindUtilCache screen. Also a new CommonInlineBarMenu menu type to display menu with specific purpose (in-line) is now present and with this logic adding in-line-bar css class on themes thomawak and flatgrey. This covers the following issues:
  - Add support for form/grid embedding within grids ([OFBIZ-6502](https://issues.apache.org/jira/browse/OFBIZ-6502))
  - Add support for screen embedding inside grids ([OFBIZ-6501](https://issues.apache.org/jira/browse/OFBIZ-6501))
  - Allow form/grid widget hyperlinks to be grouped into a single column ([OFBIZ-6404](https://issues.apache.org/jira/browse/OFBIZ-6404))
- Added missing entries to .gitignore to ignore typical Idea/Eclipse folders/files ([OFBIZ-6319](https://issues.apache.org/jira/browse/OFBIZ-6319))
- Added framework/base/config to the Eclipse .classpath file ([OFBIZ-6317](https://issues.apache.org/jira/browse/OFBIZ-6317))
- Replaced Freemarker templates at webtools/control/entitymaint with widgets. Removed multi column and converted links as include-menu ([OFBIZ-6402](https://issues.apache.org/jira/browse/OFBIZ-6402))
- Moved theme-specific js &amp; css references from CommonDecorator(s) to themes ([OFBIZ-6362](https://issues.apache.org/jira/browse/OFBIZ-6362))
- Migrated findParty.ftl to form widgets ([OFBIZ-6227](https://issues.apache.org/jira/browse/OFBIZ-6227)).
- Added new orderRoleInfo screen to display all role associations to an order on vieworder ([OFBIZ-6044](https://issues.apache.org/jira/browse/OFBIZ-6044))
- Use description attribute as default on &lt;entity-option&gt; and &lt;list-option&gt; like &lt;display-entity&gt; element ([OFBIZ-6489](https://issues.apache.org/jira/browse/OFBIZ-6489) and [OFBIZ-6490](https://issues.apache.org/jira/browse/OFBIZ-6490))
- Set viewIndex and viewSize for lists as optional and if they aren't present resolve viewSize from widgets.properties and set viewIndex to one ([OFBIZ-6523](https://issues.apache.org/jira/browse/OFBIZ-6523))
- Removed old deprecated code in WorkEffortEventReminder services ([OFBIZ-6519](https://issues.apache.org/jira/browse/OFBIZ-6519))
- New translations
  - Simplified Chinese for Accounting, Content, Order, Party, Product, WorkEffort, Common, Service, Webtools, Birt, Ecommerce, Example, WebPos ([OFBIZ-6518](https://issues.apache.org/jira/browse/OFBIZ-6518))
  - Added about 1800 missing or wrong German labels for the accounting component ([OFBIZ-6521](https://issues.apache.org/jira/browse/OFBIZ-6521))
- Added functionality to untie geo associations ([OFBIZ-6528](https://issues.apache.org/jira/browse/OFBIZ-6528)). Adds a new grid in EditGeoScreen to see/delete GeoAssoc and CommonEntityLabels default-resource-name on GeoAssocType for translation purpose. Introduces a clickable link to open the associated Geo and a column to show the geoTypeId of the associated Geo.
- Show estimatedShipDate and estimatedDeliveryDate on OrderItemShipGroup if they are present ([OFBIZ-6198](https://issues.apache.org/jira/browse/OFBIZ-6198))
- Removed async=false from lookupDescriptionLoaded, getJSONuiLabels and getJSONuiLabel Javascript methods ([OFBIZ-6530](https://issues.apache.org/jira/browse/OFBIZ-6530))
- The oauth2 login icons will appear in /ecomseo/checkLogin page if the seed data files are properly configured and imported into database ([OFBIZ-6135](https://issues.apache.org/jira/browse/OFBIZ-6135))

&nbsp;

## Bugfixes

Functional and technical bugfixes:

- Fixed Postal Address PDF Formatter Screen Problems ([OFBIZ-6444](https://issues.apache.org/jira/browse/OFBIZ-6444)). It was set to use the HTML renderer which results in errors written to the log. Also the various PostalAddressXXXX.fo.ftl files did not escape XML properly, and addresses with an &amp; in them ended up causing a FreeMarker template error.
- Removed duplicate title attibute from RecentFeedback form ([OFBIZ-6454](https://issues.apache.org/jira/browse/OFBIZ-6454))
- All postalAddress simple-map-processors miss some fields ([OFBIZ-6514](https://issues.apache.org/jira/browse/OFBIZ-6514))
- Fixed error "field name (or key) unitCost is not valid for entity ShipmentReceipt" on receive return screen.
- PortalPageViewPermissionError is missing UiLabelMap translation data ([OFBIZ-6500](https://issues.apache.org/jira/browse/OFBIZ-6500))
- Fix for "Print Pick Sheet PDF using orderId.pdf as attachement name" ([OFBIZ-6398](https://issues.apache.org/jira/browse/OFBIZ-6398)). This was introduced during the improvement for ([OFBIZ-4480](https://issues.apache.org/jira/browse/OFBIZ-4480)). The behaviour is changed to name the attachment PickSheet&lt;orderId&gt;.pdf for single order pick sheets and preserve the original naming when used for multiple order pick sheets.
- Two order payment preferences were added to the order, when order with order total 0 (zero) is placed with Billing Account ([OFBIZ-6347](https://issues.apache.org/jira/browse/OFBIZ-6347))
- Product price does not show up when the store currency is changed and product prices are setup with the new currency ([OFBIZ-6520](https://issues.apache.org/jira/browse/OFBIZ-6520))
- Compiler-Error with JDK 1.8 and source compatibility 1.8 ([OFBIZ-6300](https://issues.apache.org/jira/browse/OFBIZ-6300)). This reintroduces type safety for getFieldentryIterator.
- Strange behaviour of the eCommerce Login link ([OFBIZ-6111](https://issues.apache.org/jira/browse/OFBIZ-6111)). Now user redirects on its last view page.
- FTL errors at facility/control/authview/ViewContactMechs when TELECOM\_NUMBER countryCode or contactNumber is blank ([OFBIZ-6492](https://issues.apache.org/jira/browse/OFBIZ-6492))
- Fixed error in parsing array in ajaxUpdateAreas ([OFBIZ-6496](https://issues.apache.org/jira/browse/OFBIZ-6496))
- Function linkGeos deletes existing GeoAssocs for geoId ([OFBIZ-6237](https://issues.apache.org/jira/browse/OFBIZ-6237))
- Shipping costs were not recalculated after changing the sales order shipment method ([OFBIZ-5347](https://issues.apache.org/jira/browse/OFBIZ-5347)). A new service was introduced which loads the cart, saves new shipping method in the cart, recalculates tax and promotions and saves the cart again in order. Also added a new SECA rule which will trigger the resetGrandTotal service on new service updateShipGroupShipInfo.
- InventoryWorker.getOutstandingProductQuantities returns inaccurate results when there are multiple ItemIssuances for an order ([OFBIZ-4559](https://issues.apache.org/jira/browse/OFBIZ-4559))
- Restored the 'request-confirmation' and 'confirmation-message' menu item attributes that were removed in the recent widget refactoring ([OFBIZ-6334](https://issues.apache.org/jira/browse/OFBIZ-6334))
- Potential IndexOutOfBoundsException in CategoryServices.getProductCategoryAndLimitedMembers ([OFBIZ-6522](https://issues.apache.org/jira/browse/OFBIZ-6522)). If view indexes as input parameters of service getProductCategoryAndLimitedMembers get manipulated (e.g. by manipulating URL params or bookmarking an URL), it can lead to an IndexOutOfBoundsException because of a lowIndex greater than the list size.
- Corrected compilation error, missing delegatorBaseName parameter for function GenericDelegator.getEntityNamesByGroup ([OFBIZ-6533](https://issues.apache.org/jira/browse/OFBIZ-6533))
- The "Create new" link under partymgr has disappeared ([OFBIZ-6536](https://issues.apache.org/jira/browse/OFBIZ-6536))
