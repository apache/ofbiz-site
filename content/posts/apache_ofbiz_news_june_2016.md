---
layout: post
title: Apache OFBiz News - June 2016
date: '2016-07-05T07:37:15+00:00'
permalink: apache_ofbiz_news_june_2016
---
## Apache OFBiz News June 2016

Welcome to our regular monthly round-up of OFBiz news. We have had a busy time this month and have news about our Community Day event, OFBiz becomes a Registered Trademark, we setup an environment to help mentor our Committers, we prepare to change our build system and our PMC grows.

<!--more-->

## OFBiz Community Day

Our Community Days are held every 3 months and we held our second one for 2016 on 18th June. They are proving very popular and the community is also using the opportunity to make it fun. The activity level was very high and contributions came in from around the world reinforcing the our focus on collaboration.

<p></p>

During the Community Day a total of 34 issues were closed or resolved, another 21 were worked on (of which 9 now have patches available). A Jira sprint was set up to monitor the activity and the details can be found in the <a href="https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=64&view=reporting&chart=sprintRetrospective&sprint=241">Sprint Report</a>

<p></p>

OFBiz was also showing up on the <a href="https://status.apache.org/">ASF Status Monitor </a> as the most active project over the Community Day weekend with Pranay Pandey and Mridul Pathak appearing in the list of the top 5 most active Committers.

<p></p>

Thanks to everyone for a great effort and we are looking forward to the next Community Day on 17th September.

## Apache OFBiz - A Registered Trademark

We are very pleased to announce that Apache OFBiz became a registered trademark of the Apache Software Foundation this month. This change was done to protect and reinforce our brand. Our existing logo has been updated with the new 'Registered Trademark' symbol.

## New PMC Members

Two new members joined the OFBiz Project Management Committee (PMC) this month - Taher Alkhateeb and Christian Geisert. Congratulations to them both!

## Mentoring for Committers

The results from our Committer's Survey last month showed that the majority of our Committers wanted a mentoring programme put in place. In response to this a mentoring environment has been setup using HipChat. The main aim is to provide an informal place where newer committers can learn and collaborate with more experienced ones. The feedback so far has been very positive.

## Moving from Ant to Gradle

Our ongoing code re-factoring uncovered a limitation with our current Ant build system. Our existing scripts are very large and make it difficult to implement a more detailed unit testing framework. After some detailed discussions about the options available, the community has decided go ahead using Gradle as the new build tool. To keep user impact low, Gradle will only be implemented in the trunk and any future releases. All existing releases and branches will continue to use Ant.

<p></p>

An initial Gradle patch for the trunk is currently being tested and once complete will be applied to the trunk.

<p></p>

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Updated dependency-check-report.html to include recently updated jar ([OFBIZ-7141](https://issues.apache.org/jira/browse/OFBIZ-7141))
- Added condition on EditProduct form, now inventoryItemTypeId will be enabled only for createProduct, and on EditProduct screen it will be displayed as readonly instead of editable dropdown. Also fixed fk-name for inventoryItemTypeId relation ([OFBIZ-7079](https://issues.apache.org/jira/browse/OFBIZ-7079))
- invoiceType data. Added new InvoiceType 'INVOICE' and set it as parent type for SALES\_INVOICE, PURCHASE\_INVOICE and TEMPLATE ([OFBIZ-7147](https://issues.apache.org/jira/browse/OFBIZ-7147))
- Display all the one time configurable fields on edit product screen in display mode ([OFBIZ-7151](https://issues.apache.org/jira/browse/OFBIZ-7151))
- createQuoteItem now displays EditQuoteItem page instead of ListQuoteItems, when an error occurs ([OFBIZ-6361](https://issues.apache.org/jira/browse/OFBIZ-6361))
- Added support for specifying lead time while placing a quote to purchase a product. Lead time days will also be shown in "view quote"-screen and "list quote"-screen ([OFBIZ-7051](https://issues.apache.org/jira/browse/OFBIZ-7051))
- UI Improvement made question field in EditSurveyQuestions read-only corrected button labels for "Survey Question Create/Update"-form ([OFBIZ-7154](https://issues.apache.org/jira/browse/OFBIZ-7154))
- Add lookup for party when associating party to category ([OFBIZ-7176](https://issues.apache.org/jira/browse/OFBIZ-7176))
- Successfully adding a new feature interaction now redirects to the "Find Feature Interaction"-page ([OFBIZ-7178](https://issues.apache.org/jira/browse/OFBIZ-7178))
- Improvements in "Find Shipment"-screen to make it consistent with other find screens ([OFBIZ-7170](https://issues.apache.org/jira/browse/OFBIZ-7170))
- Material/components required will now also be shown when production run is confirmed ([OFBIZ-7087](https://issues.apache.org/jira/browse/OFBIZ-7087))
- Add fields for "product name" in the create and edit forms in ProductForms so the user can add a product name when creating a product ([OFBIZ-7139](https://issues.apache.org/jira/browse/OFBIZ-7139))
- The "Create Product Return"-screen now doesn't show the "created by"-field ([OFBIZ-7175](https://issues.apache.org/jira/browse/OFBIZ-7175))
- ContentWrapper now honors the contents over the entity fields ([OFBIZ-7169](https://issues.apache.org/jira/browse/OFBIZ-7169))
- Refactor the start component ([OFBIZ-6783](https://issues.apache.org/jira/browse/OFBIZ-6783))
  - convert the startup loaders from ArrayList to List. Given that only two loaders existed in the system since the beginning of OFBiz means that it is really unnecessary to use the loaders.trimToSize() method. This leads to changing many method signatures from ArrayList to list across different classes
  - more simplification of Config.java by simplifying timezone setting logic
  - remove the throws StartupException from main.
  - introduce a function called fullyTerminateSystem(StartupException e). This function replaces the exception described above. Consequently, the methods init, status and shutdown no longer throw an exception but instead terminate the system (which is the right thing to do).
  - finetune adaptStartupCommandsToLoaderArgs(...) and other places in StartupControlPanel
  - separate the Classpath creation from NativeLibClassLoader creation. This makes it cleaner and easier to refactor in the future
  - break the StartupControlPanel.start(...) method into smaller more readable methods. It is easier now to understand the startup sequence for ofbiz in english words (the method names). It also allows for cleaner refactoring in the future.
  - add JavaDoc to a lot of methods all over the start component
  - rename AdminPortThread to AdminServer and create a new class called AdminClient. Now everything relating to controlling OFBiz directly happens through StartupControlPanel such as start, stop or init for the server, and everything which happens indirectly through the network (by an admin client) is done through the AdminClient which talks to AdminServer
  - more refactoring of AdminServer to simplify the code and break it down into multiple methods and refactor some messy old code
- Implement Party lookup by External Id OFBIZ-382
- Add a look-up for Product Id in "Find Facility Inventory Items"-screen ([OFBIZ-7250](https://issues.apache.org/jira/browse/OFBIZ-7250))
- Arrange UI Labels in alphabetic order according to best practice in many \*UiLabel.xml files ([OFBIZ-7247](https://issues.apache.org/jira/browse/OFBIZ-7247)) ([OFBIZ-7196](https://issues.apache.org/jira/browse/OFBIZ-7196)) ([OFBIZ-7198](https://issues.apache.org/jira/browse/OFBIZ-7198)) ([OFBIZ-7204](https://issues.apache.org/jira/browse/OFBIZ-7204)) ([OFBIZ-7206](https://issues.apache.org/jira/browse/OFBIZ-7206)) ([OFBIZ-7226](https://issues.apache.org/jira/browse/OFBIZ-7226)) ([OFBIZ-7218](https://issues.apache.org/jira/browse/OFBIZ-7218)) ([OFBIZ-7279](https://issues.apache.org/jira/browse/OFBIZ-7279)) ([OFBIZ-7278](https://issues.apache.org/jira/browse/OFBIZ-7278))
- Added support to include party classification information in promo description ([OFBIZ-7027](https://issues.apache.org/jira/browse/OFBIZ-7027))
- Move minilang scripts from component://componentname/script/org/ofbiz to component://componentname/minilang ([OFBIZ-7267](https://issues.apache.org/jira/browse/OFBIZ-7267))
- Relocate .groovy files in the all components ([OFBIZ-7218](https://issues.apache.org/jira/browse/OFBIZ-7218)) ([OFBIZ-7219](https://issues.apache.org/jira/browse/OFBIZ-7219)) ([OFBIZ-7222](https://issues.apache.org/jira/browse/OFBIZ-7222)) - ([OFBIZ-7245](https://issues.apache.org/jira/browse/OFBIZ-7245))
- Improved the styling for the anchor links inside the 'button-bar' to fix styling for CommonButtonBarMenu ([OFBIZ-7268](https://issues.apache.org/jira/browse/OFBIZ-7268))
- Added the -server JVM argument to Ant targets like start and tools/start\*.bat files ([OFBIZ-7321](https://issues.apache.org/jira/browse/OFBIZ-7321))
- Support to add condition for Geo Location in Promo Engine ([OFBIZ-7008](https://issues.apache.org/jira/browse/OFBIZ-7008))
- Made SequenceNum field editable on "Edit Content Purpose"-form ([OFBIZ-7326](https://issues.apache.org/jira/browse/OFBIZ-7326))
- Improved check on existing production runs for order so that createProductionRunsForOrder service considers cancelled production runs ([OFBIZ-6328](https://issues.apache.org/jira/browse/OFBIZ-6328))
- EntityUtilProperties improved so that if there's a database entry for a property the database entry overrides the associated properties file ([OFBIZ-7112](https://issues.apache.org/jira/browse/OFBIZ-7112))
- Added WebSiteAlias usage example to cmssite data ([OFBIZ-7132](https://issues.apache.org/jira/browse/OFBIZ-7132))
- Added a look-up for Shipment Id and WorkEffort Id in "Inventory Items Details"-screen in the facility component ([OFBIZ-7301](https://issues.apache.org/jira/browse/OFBIZ-7301))
- Added a look-up for Product Id, UserLogin Id and Billing Account in "Find Order"-screen ([OFBIZ-7302](https://issues.apache.org/jira/browse/OFBIZ-7302))
- Removed unused imports from groovy files for code optimization ([OFBIZ-7400](https://issues.apache.org/jira/browse/OFBIZ-7400)), ([OFBIZ-7396](https://issues.apache.org/jira/browse/OFBIZ-7396)) and ([OFBIZ-7411](https://issues.apache.org/jira/browse/OFBIZ-7411))
- Added a look-up for UserLogin Id in "Find Party"-screen ([OFBIZ-7303](https://issues.apache.org/jira/browse/OFBIZ-7303))
- Added a look-up for Product Id in "Find Revision"-screen in the scrum component ([OFBIZ-7304](https://issues.apache.org/jira/browse/OFBIZ-7304))
- Made "find timesheet result"-list non-editable as this list is intended to display information about timesheets and any timesheet can be edited from their view page ([OFBIZ-7354](https://issues.apache.org/jira/browse/OFBIZ-7354))
- Hovering over the logo section now shows layout settings markup in Tomahawk theme instead of displaying company name ([OFBIZ-7407](https://issues.apache.org/jira/browse/OFBIZ-7407))
- New ProductPriceType 'SHIPPING\_ALLOWANCE' and a new minimumPrice field in ProductStoreShipmentMeth entity ([OFBIZ-6940](https://issues.apache.org/jira/browse/OFBIZ-6940))
- Now product added for any task from Actual Material screen will be consumed/issued in production run declaration screen ([OFBIZ-7173](https://issues.apache.org/jira/browse/OFBIZ-7173))
- Added capability to expire or remove the content for a party ([OFBIZ-7374](https://issues.apache.org/jira/browse/OFBIZ-7374))
- Users can now select multiple options in the "Purchases by Organization"-report from basic search criteria while generating report ([OFBIZ-7389](https://issues.apache.org/jira/browse/OFBIZ-7389))
- Users can now select multiple options in the "Sales by Store"-report from basic search criteria while generating report ([OFBIZ-7385](https://issues.apache.org/jira/browse/OFBIZ-7385))
- Users can now select multiple options in the "Open Order Items"-report from basic search criteria while generating report ([OFBIZ-7386](https://issues.apache.org/jira/browse/OFBIZ-7386))
- Comments added while adding products to cart are now editable at cart item level, added field for item comment in cart item ([OFBIZ-7187](https://issues.apache.org/jira/browse/OFBIZ-7187))
- Provided an option to specifiy the "facility location" while providing the inventory/stock once the production run gets completed ([OFBIZ-7108](https://issues.apache.org/jira/browse/OFBIZ-7108))
- Now CSR should be able to cancel order items of multiple ship groups. Also CSR should be able to cancel quantities less than ordered quantity ([OFBIZ-7255](https://issues.apache.org/jira/browse/OFBIZ-7255))
- Updated Apache Shiro to 1.2.5 ([OFBIZ-7373](https://issues.apache.org/jira/browse/OFBIZ-7373))
- Completed and finished "Autocompletion for Compound Widget" ([OFBIZ-7061](https://issues.apache.org/jira/browse/OFBIZ-7061))
- Now "Sales Quotes" won't be created for cacelled or rejected item form CustRequestItem ([OFBIZ-7404](https://issues.apache.org/jira/browse/OFBIZ-7404))
- Updated optionality to required for attributes in "entity auto"-services where pk fields were mentioned optional ([OFBIZ-7519](https://issues.apache.org/jira/browse/OFBIZ-7519))
- Added Product lookup when associating product with location from "Edit Facility Location"-page ([OFBIZ-7332](https://issues.apache.org/jira/browse/OFBIZ-7332))
- After adding child categories users now remain on the same page ([OFBIZ-7256](https://issues.apache.org/jira/browse/OFBIZ-7256))
- Hide associated content related section when creating new Product/Category content ([OFBIZ-7259](https://issues.apache.org/jira/browse/OFBIZ-7259))
- Hide Rule Id field when creating "Product Manufacturing"-rule ([OFBIZ-7530](https://issues.apache.org/jira/browse/OFBIZ-7530))
- Display commission agreements on "product detail"-page ([OFBIZ-7528](https://issues.apache.org/jira/browse/OFBIZ-7528))
- Converted FindShipment ftl to form widget ([OFBIZ-6144](https://issues.apache.org/jira/browse/OFBIZ-6144))
- Now showing price comlumn in supplier prduct lookup during PO creation ([OFBIZ-7592](https://issues.apache.org/jira/browse/OFBIZ-7592))
- Removed HtmlFormWrapper dependencies from the following screens
  - Production Run ([OFBIZ-7566](https://issues.apache.org/jira/browse/OFBIZ-7566))
  - Production Run Cost ([OFBIZ-7567](https://issues.apache.org/jira/browse/OFBIZ-7567))
  - Calendar Exception Week ([OFBIZ-7569](https://issues.apache.org/jira/browse/OFBIZ-7569))
  - Order Delivery Schedule Info ([OFBIZ-7570](https://issues.apache.org/jira/browse/OFBIZ-7570))
  - Content Search ([OFBIZ-7572](https://issues.apache.org/jira/browse/OFBIZ-7572))
  - Survey Question ([OFBIZ-7565](https://issues.apache.org/jira/browse/OFBIZ-7565))
  - Calendar Exception Day ([OFBIZ-7568](https://issues.apache.org/jira/browse/OFBIZ-7568))
  - Product Config Item Content ([OFBIZ-7571](https://issues.apache.org/jira/browse/OFBIZ-7571))
- Remove HtmlFormWrapper Class after removing all its dependencies ([OFBIZ-7574](https://issues.apache.org/jira/browse/OFBIZ-7574))
- Removed unused imports related to HtmlFormWrapper and unused files using it ([OFBIZ-7573](https://issues.apache.org/jira/browse/OFBIZ-7573))
- Now fromDate and thruDate can be added while adding a party to a "production run"-form ([OFBIZ-7336](https://issues.apache.org/jira/browse/OFBIZ-7336))
- Added lookup for approver party at "leave approval find"-form ([OFBIZ-7604](https://issues.apache.org/jira/browse/OFBIZ-7604))
- Now party can be assigned to a routing task ([OFBIZ-5852](https://issues.apache.org/jira/browse/OFBIZ-5852))
- Changed the field "andCondition" (which uses direct call to groovy) to "conditionFields" a couple of lookups
  - applications/party/widget/partymgr/LookupScreens#LookupCustomerName ([OFBIZ-7656](https://issues.apache.org/jira/browse/OFBIZ-7656))
  - applications/product/widget/catalog/LookupScreens#LookupVirtualProduct ([OFBIZ-7659](https://issues.apache.org/jira/browse/OFBIZ-7659))
  - applications/party/widget/partymgr/LookupScreens#LookupInternalOrganization ([OFBIZ-7657](https://issues.apache.org/jira/browse/OFBIZ-7657))
  - applications/party/widget/partymgr/LookupScreens#LookupContact ([OFBIZ-7658](https://issues.apache.org/jira/browse/OFBIZ-7658))
- Now able to manage filters in lookup auto completion ([OFBIZ-7350](https://issues.apache.org/jira/browse/OFBIZ-7350))
- Added websocket support in OFBiz ([OFBIZ-7073](https://issues.apache.org/jira/browse/OFBIZ-7073))
- Enforced noninstantiability to multiple classes ([OFBIZ-7378](https://issues.apache.org/jira/browse/OFBIZ-7378)) ([OFBIZ-7379](https://issues.apache.org/jira/browse/OFBIZ-7379)) ([OFBIZ-7380](https://issues.apache.org/jira/browse/OFBIZ-7380)) ([OFBIZ-7382](https://issues.apache.org/jira/browse/OFBIZ-7382)) ([OFBIZ-7383](https://issues.apache.org/jira/browse/OFBIZ-7383)) ([OFBIZ-7388](https://issues.apache.org/jira/browse/OFBIZ-7388)) ([OFBIZ-7391](https://issues.apache.org/jira/browse/OFBIZ-7391)) ([OFBIZ-7393](https://issues.apache.org/jira/browse/OFBIZ-7393)) ([OFBIZ-7398](https://issues.apache.org/jira/browse/OFBIZ-7398)) ([OFBIZ-7399](https://issues.apache.org/jira/browse/OFBIZ-7399)) ([OFBIZ-7408](https://issues.apache.org/jira/browse/OFBIZ-7408)) ([OFBIZ-7401](https://issues.apache.org/jira/browse/OFBIZ-7401)) ([OFBIZ-7405](https://issues.apache.org/jira/browse/OFBIZ-7405)) ([OFBIZ-7410](https://issues.apache.org/jira/browse/OFBIZ-7410)) ([OFBIZ-7412](https://issues.apache.org/jira/browse/OFBIZ-7412)) ([OFBIZ-7413](https://issues.apache.org/jira/browse/OFBIZ-7413)) ([OFBIZ-7417](https://issues.apache.org/jira/browse/OFBIZ-7417)) ([OFBIZ-7419](https://issues.apache.org/jira/browse/OFBIZ-7419)) ([OFBIZ-7420](https://issues.apache.org/jira/browse/OFBIZ-7420)) ([OFBIZ-7422](https://issues.apache.org/jira/browse/OFBIZ-7422)) ([OFBIZ-7423](https://issues.apache.org/jira/browse/OFBIZ-7423)) ([OFBIZ-7426](https://issues.apache.org/jira/browse/OFBIZ-7426)) ([OFBIZ-7431](https://issues.apache.org/jira/browse/OFBIZ-7431)) ([OFBIZ-7433](https://issues.apache.org/jira/browse/OFBIZ-7433)) ([OFBIZ-7445](https://issues.apache.org/jira/browse/OFBIZ-7445)) ([OFBIZ-7446](https://issues.apache.org/jira/browse/OFBIZ-7446)) ([OFBIZ-7447](https://issues.apache.org/jira/browse/OFBIZ-7447)) ([OFBIZ-7448](https://issues.apache.org/jira/browse/OFBIZ-7448)) ([OFBIZ-7450](https://issues.apache.org/jira/browse/OFBIZ-7450)) ([OFBIZ-7453](https://issues.apache.org/jira/browse/OFBIZ-7453)) ([OFBIZ-7455](https://issues.apache.org/jira/browse/OFBIZ-7455)) ([OFBIZ-7459](https://issues.apache.org/jira/browse/OFBIZ-7459)) ([OFBIZ-7460](https://issues.apache.org/jira/browse/OFBIZ-7460)) ([OFBIZ-7397](https://issues.apache.org/jira/browse/OFBIZ-7397)) ([OFBIZ-7463](https://issues.apache.org/jira/browse/OFBIZ-7463)) ([OFBIZ-7466](https://issues.apache.org/jira/browse/OFBIZ-7466)) ([OFBIZ-7470](https://issues.apache.org/jira/browse/OFBIZ-7470)) ([OFBIZ-7474](https://issues.apache.org/jira/browse/OFBIZ-7474)) ([OFBIZ-7479](https://issues.apache.org/jira/browse/OFBIZ-7479)) ([OFBIZ-7540](https://issues.apache.org/jira/browse/OFBIZ-7540))

## Bugfixes

Functional and technical bugfixes:

- Error on updating product categories from Product's Quick Admin page ([OFBIZ-7142](https://issues.apache.org/jira/browse/OFBIZ-7142))
- Error in rendering Quote PDF which is not having terms associated to it ([OFBIZ-7146](https://issues.apache.org/jira/browse/OFBIZ-7146))
- "Create New Product Config Item Content"-Page missing field names ([OFBIZ-7148](https://issues.apache.org/jira/browse/OFBIZ-7148))
- Issue of Incorrect fetching of Invoice while creating paymentApplication from matching invoices ([OFBIZ-7124](https://issues.apache.org/jira/browse/OFBIZ-7124))
- Fixed typo javascrip -&gt; javascript ([OFBIZ-7160](https://issues.apache.org/jira/browse/OFBIZ-7160))
- Definition Location filter at Service Reference ([OFBIZ-7163](https://issues.apache.org/jira/browse/OFBIZ-7163))
- Typo in freemarker else tag ([OFBIZ-7164](https://issues.apache.org/jira/browse/OFBIZ-7164))
- Freemarker template error on "Edit Custom Time Periods" for Child Periods ([OFBIZ-7156](https://issues.apache.org/jira/browse/OFBIZ-7156))
- Lexical error on clicking "Create New Financial Account Reconciliations" button ([OFBIZ-7157](https://issues.apache.org/jira/browse/OFBIZ-7157))
- Regression caused by refactoring start comp ([OFBIZ-7167](https://issues.apache.org/jira/browse/OFBIZ-7167)) FIXTHIS weiter ausfuehren?
- Problem assigning contentassoc with different "content assoc" types ([OFBIZ-7159](https://issues.apache.org/jira/browse/OFBIZ-7159))
- "Purchase Return Shipments" not allowing to select received inventory against the Product that needed to be returned ([OFBIZ-7060](https://issues.apache.org/jira/browse/OFBIZ-7060))
- Error in the "Asset Geo Location"-page ([OFBIZ-7153](https://issues.apache.org/jira/browse/OFBIZ-7153))
- "Purchase Return shipments" not allowing to select received inventory within auto-completer search against the returned item by adding support to enable auto-completer at Issue inventory item section, now user is able to search inventories supplied by the given vendor and having ATP &gt; 0 via auto-completer ([OFBIZ-7105](https://issues.apache.org/jira/browse/OFBIZ-7105))
- Error in "accounting transactions"-pdf due to missing child block in case when there was a no field for exchange rate when currencyUomId is equal to origCurrencyUomId ([OFBIZ-7171](https://issues.apache.org/jira/browse/OFBIZ-7171))
- Added some missing UI Label on the EditProductCost page ([OFBIZ-7177](https://issues.apache.org/jira/browse/OFBIZ-7177))
- Error in "Quote view" for party when none is set, also now opening the party view in new tab ([OFBIZ-7185](https://issues.apache.org/jira/browse/OFBIZ-7185))
- Security issue with delete child period in EditCustomTimePeriod ([OFBIZ-7162](https://issues.apache.org/jira/browse/OFBIZ-7162))
- Bug where back end user was not able to update password from Party manager application ([OFBIZ-6952](https://issues.apache.org/jira/browse/OFBIZ-6952))
- Exception being thrown when sorting by projectId on "Request List" in CustRequestForms, now uses workEffortParentId instead of projectId ([OFBIZ-7191](https://issues.apache.org/jira/browse/OFBIZ-7191))
- Issue with the "Fixed Order Ship Group"-PDF ([OFBIZ-7209](https://issues.apache.org/jira/browse/OFBIZ-7209))
- Different forms, screens and services affected due to removal of parentTypeId from 'PURCHASE\_INVOICE' and 'SALES\_INVOICE' InvoiceType data ([OFBIZ-7201](https://issues.apache.org/jira/browse/OFBIZ-7201))
- Error thrown in CMS by clicking the "find"-button ([OFBIZ-7104](https://issues.apache.org/jira/browse/OFBIZ-7104))
- Error in the "Cost Centers Report"-PDF ([OFBIZ-7215](https://issues.apache.org/jira/browse/OFBIZ-7215))
- Failure in the "Payment Capture"-process when ERROR is returned in referenceNum in paymentGatewayResponse ([OFBIZ-7011](https://issues.apache.org/jira/browse/OFBIZ-7011))
- "Create Party Resume" not working because ResumeId couldn't be entered ([OFBIZ-7205](https://issues.apache.org/jira/browse/OFBIZ-7205))
- Error in the Picking Screen by correcting a typo ([OFBIZ-7261](https://issues.apache.org/jira/browse/OFBIZ-7261))
- Error in the "GL Account Trial Balance"-PDF ([OFBIZ-7216](https://issues.apache.org/jira/browse/OFBIZ-7216))
- Problem in "Print Pick Sheet" ([OFBIZ-7200](https://issues.apache.org/jira/browse/OFBIZ-7200))
- "Requirement Id" and "Product Id"-fields being empty, when generating pdf for "Approved Product Requirements" ([OFBIZ-7203](https://issues.apache.org/jira/browse/OFBIZ-7203))
- Monthly "Sales Report"-PDF not rendering details ([OFBIZ-7289](https://issues.apache.org/jira/browse/OFBIZ-7289))
- "Sales Orders By Channel"-PDF not rendering details ([OFBIZ-7273](https://issues.apache.org/jira/browse/OFBIZ-7273))
- UI Label issue on Find Subscription Resource screen, it was being shown twice ([OFBIZ-7271](https://issues.apache.org/jira/browse/OFBIZ-7271))
- "timesheet lookup"-dialog find not working ([OFBIZ-7293](https://issues.apache.org/jira/browse/OFBIZ-7293))
- Corrected typo in createWorkEffortRequestItem ([OFBiz-7295](https://issues.apache.org/jira/browse/OFBiz-7295))
- Error while importing party in PartyServices ([OFBIZ-7269](https://issues.apache.org/jira/browse/OFBIZ-7269))
- Error when that prevented the allow-html attribute from being overriden in service implementing any interface ([OFBIZ-7213](https://issues.apache.org/jira/browse/OFBIZ-7213))
- Typo for middleName in importParty service ([OFBIZ-7269](https://issues.apache.org/jira/browse/OFBIZ-7269))
- Unable to select "From stock location" from "List Facility Location"-popup ([OFBIZ-7309](https://issues.apache.org/jira/browse/OFBIZ-7309))
- Security error on "Create New Shopping List" in eCommerce ([OFBIZ-7270](https://issues.apache.org/jira/browse/OFBIZ-7270)) and ([OFBIZ-7291](https://issues.apache.org/jira/browse/OFBIZ-7291))
- "Create Request for Quote", "Create New Quote" and "Save" links on "shopping list details"-screen ([OFBIZ-7296](https://issues.apache.org/jira/browse/OFBIZ-7296))
- Terminal errors on "Timesheet overview"-page of projectmgr and scrum ([OFBIZ-7115](https://issues.apache.org/jira/browse/OFBIZ-7115))
- PDF reports in Agreements not opening in a new screen ([OFBIZ-6688](https://issues.apache.org/jira/browse/OFBIZ-6688))
- http://docs.ofbiz.org/ being wrongly used in content ([OFBIZ-7001](https://issues.apache.org/jira/browse/OFBIZ-7001))
- Getting console error while reading property value in eCommerce ([OFBIZ-7331](https://issues.apache.org/jira/browse/OFBIZ-7331))
- Error on deletion of WorkEffort Request Item on ListWorkEffortRequests view ([OFBIZ-7298](https://issues.apache.org/jira/browse/OFBIZ-7298))
- statusId field being ignored instead of showing it empty when a new quote is being created ([OFBIZ-7337](https://issues.apache.org/jira/browse/OFBIZ-7337))
- "date time" field not working properly in case of multiple parent category rollup ([OFBIZ-7277](https://issues.apache.org/jira/browse/OFBIZ-7277))
- DB connections remaining open and unused on startup ([OFBIZ-7344](https://issues.apache.org/jira/browse/OFBIZ-7344))
- Error on adding new term to an agreement after updating any existing term or adding new one ([OFBIZ-7349](https://issues.apache.org/jira/browse/OFBIZ-7349))
- Completed "Service Order Items" being allowed to be edited over SO and approved PO
- "print pdf"-function in facility/control/ViewFacilityInventoryByProduct throwing an error ([OFBIZ-6947](https://issues.apache.org/jira/browse/OFBIZ-6947))
- "Connection Pool Status"-feature in webtools is broken ([OFBIZ-7363](https://issues.apache.org/jira/browse/OFBIZ-7363))
- Corrected a typo which the breaks the BIRT report ([OFBIZ-7364](https://issues.apache.org/jira/browse/OFBIZ-7364))
- Connection pooling not working ([OFBIZ-7346](https://issues.apache.org/jira/browse/OFBIZ-7346))
- Error on deleting Content Type Attribute ([OFBIZ-7369](https://issues.apache.org/jira/browse/OFBIZ-7369))
- Creation of a new forum in Content Manager ([OFBIZ-1191](https://issues.apache.org/jira/browse/OFBIZ-1191))
- Corrected formatting of a lot of CSS files ([OFBIZ-7311](https://issues.apache.org/jira/browse/OFBIZ-7311))
- Exception being thrown when day links are clicked in the Week and Month view of the Calendar widget ([OFBIZ-7329](https://issues.apache.org/jira/browse/OFBIZ-7329))
- Updated the widget.lookup.width property so that the pagination header in lookups is rendered properly ([OFBIZ-7274](https://issues.apache.org/jira/browse/OFBIZ-7274))
- "Find Facility Inventory Items" showing the same 20 items on all pagination pages ([OFBIZ-7186](https://issues.apache.org/jira/browse/OFBIZ-7186))
- "From Date" and "Through Date" not setting up on adding a new task member as they weren't being sent to service ([OFBIZ-7367](https://issues.apache.org/jira/browse/OFBIZ-7367))
- Typo in the "requestitems"-target from order menu ([OFBIZ-7381](https://issues.apache.org/jira/browse/OFBIZ-7381))
- Typo in groovy file name ([OFBIZ-7218](https://issues.apache.org/jira/browse/OFBIZ-7218))
- Removed unnecessary "Status ID"-field from the "Request Roles" section ([OFBIZ-7384](https://issues.apache.org/jira/browse/OFBIZ-7384))
- Added missing SecurityUiLabels in scrum component main-decorator to fix UI Label issues in the Profile view ([OFBIZ-7432](https://issues.apache.org/jira/browse/OFBIZ-7432))
- Purchase Order created out of "Approved Product Requirement" not getting linked/shown over "Requirement - Order"-screen ([OFBIZ-7128](https://issues.apache.org/jira/browse/OFBIZ-7128))
- Popup to show the existing inventory against "Purchase Return shipments" showing Zero ATP inventory against the Product need to be returned
- Issue where closing a project for the first time would yield an error ([OFBIZ-2947](https://issues.apache.org/jira/browse/OFBIZ-2947))
- Page navigation problem with grid and include-grid ([OFBIZ-7020](https://issues.apache.org/jira/browse/OFBIZ-7020))
- "Coupon Sales"-report not working ([OFBIZ-7313](https://issues.apache.org/jira/browse/OFBIZ-7313))
- Issue where creating a new ticket without a project Id would assign it to the first project from the list ([OFBIZ-7392](https://issues.apache.org/jira/browse/OFBIZ-7392))
- "Last 3 Months Sales"-report not working ([OFBIZ-7314](https://issues.apache.org/jira/browse/OFBIZ-7314))
- Security error in deleting AddressMatchMap for party ([OFBIZ-7523](https://issues.apache.org/jira/browse/OFBIZ-7523))
- Adding standard product features not working from "Quick Admin"-page ([OFBIZ-7308](https://issues.apache.org/jira/browse/OFBIZ-7308))
- Added missing UiLabel on "Product Inventory Summary"-page ([OFBIZ-7351](https://issues.apache.org/jira/browse/OFBIZ-7351))
- Rule id being set erroneously when deleting a manufacturing rule and then passed to the form ([OFBIZ-7531](https://issues.apache.org/jira/browse/OFBIZ-7531))
- Questions from category should not be shown on survey when creating/editing any question ([OFBIZ-7527](https://issues.apache.org/jira/browse/OFBIZ-7527))
- "Mime Type Id"-field on Content Lookup displaing Html Encoded String for special character ([OFBIZ-7368](https://issues.apache.org/jira/browse/OFBIZ-7368))
- Error with "Agreement Item Supplier Product"-PDF ([OFBIZ-7330](https://issues.apache.org/jira/browse/OFBIZ-7330))
- Replaced EntityUtilProperties getPropertyValue method with correct method calls ([OFBIZ-7339](https://issues.apache.org/jira/browse/OFBIZ-7339))
- Invoice address being shown when it shouldn't be ([OFBIZ-7122](https://issues.apache.org/jira/browse/OFBIZ-7122))
- Auto-completer not working when seraching for "Contact Party Id" ([OFBIZ-7576](https://issues.apache.org/jira/browse/OFBIZ-7576))
- Issue with autocompletion in the Compound widget ([OFBIZ-7061](https://issues.apache.org/jira/browse/OFBIZ-7061))
- Error in addings tasks to backlog ([OFBIZ-7252](https://issues.apache.org/jira/browse/OFBIZ-7252))
- Issue where if a party was both a contact and a lead "SFA profile" would render screens for both ([OFBIZ-6293](https://issues.apache.org/jira/browse/OFBIZ-6293))
- Error when clicking the "Content Page"-button in the "Edit Product Config Item Content"-screen ([OFBIZ-7524](https://issues.apache.org/jira/browse/OFBIZ-7524))
- Error that occured when making notes private/public from project screen ([OFBIZ-7556](https://issues.apache.org/jira/browse/OFBIZ-7556))
- Added missing UI Label in the "Production Run Assoc"-screen ([OFBIZ-7516](https://issues.apache.org/jira/browse/OFBIZ-7516))
- Error when deleting "Party Invitation" ([OFBIZ-7596](https://issues.apache.org/jira/browse/OFBIZ-7596))
- Promo text not getting rendered properly in the "Order Return"-screen when it contained HTML elements ([OFBIZ-7347](https://issues.apache.org/jira/browse/OFBIZ-7347))
- Shipment button not working on first click in the facility component ([OFBIZ-7358](https://issues.apache.org/jira/browse/OFBIZ-7358))
- Error in "Product Requirement Creation" ([OFBIZ-7181](https://issues.apache.org/jira/browse/OFBIZ-7181))
- Adding "Work Effort Party Assignment" creating record with invalid PartyId ([OFBIZ-7188](https://issues.apache.org/jira/browse/OFBIZ-7188))
- Being unable to set "thru date" for "Product Promo Stores" if promotion is associated with multiple stores
- Product name showing multiple times on "create purchase order" ([OFBIZ-7387](https://issues.apache.org/jira/browse/OFBIZ-7387))
- Styling issue on Logs in LogView, as none were being applied ([OFBIZ-7575](https://issues.apache.org/jira/browse/OFBIZ-7575))
- Removed deprecated XmlFormRenderer class that has been replace by MacroFormRenderer ([OFBIZ-7631](https://issues.apache.org/jira/browse/OFBIZ-7631))
- Removed deprecated TextFormRenderer class that has been replace by MacroFormRenderer ([OFBIZ-7632](https://issues.apache.org/jira/browse/OFBIZ-7632)) and ([OFBIZ-7633](https://issues.apache.org/jira/browse/OFBIZ-7633))
- Issues with "Forum Screens Delete/Update"-buttons ([OFBIZ-7554](https://issues.apache.org/jira/browse/OFBIZ-7554))
- Error on closing an re-opening of projects ([OFBIZ-7262](https://issues.apache.org/jira/browse/OFBIZ-7262))

## Documentation

- added JavaDoc to a lot of methods all over the Start component
