---
layout: post
title: 'Apache OFBiz News - October 2016 '
date: '2016-11-07T16:39:17+00:00'
permalink: apache_ofbiz_news_october_2016
---
## Apache OFBiz News October 2016

Welcome to our regular monthly round-up of OFBiz news. This month we have news about the refactoring of some key components, we continue the introduction of more unit tests, an OFBiz Security Mailing list is setup and the community starts preparing to create a new and much awaited release branch.

<!--more-->

## Refactored Start and Base Components

Work is still continuing on refactoring OFBiz. The refactoring effort has already significantly reduced our codebase making it more efficient to run. This month a large amount of work was done to refactor the <a href="https://issues.apache.org/jira/browse/OFBIZ-8337"> Start and Base Components. </a>

<p></p>

These are two key components, with complex code that form the core of OFBiz functionality, so tidying these up is an important step. We have needed to be especially careful to ensure that everything works correctly after the refactoring. Thanks to everyone involved in the reviewing and testing and also to Taher Alkhateeb for leading this work effort.

## More OFBiz Unit Tests

A few months ago, code was added to the trunk as the base framework for the introduction of unit tests. Creating unit tests for OFBiz is important because it helps us ensure that code can be tested to prove that it works as expected. The focus on refactoring has given us an opportunity to add more unit tests to the code base. We hope that the use of unit testing will help us improve both code quality and debugging or tracking down bugs.

## OFBiz Security Mailing List

Recently the project setup a new mailing list where people can report any security issues they encounter with OFBiz. It is very important that security vulnerabilities are reported immediately to the OFBiz Security Team and not to the standard community development or user lists. The OFBiz Security Team is responsible for investigating and fixing any vulnerabilities found. See the link below for details of how to contact them:

<p></p>

<a href="https://www.apache.org/security/projects.html">OFBiz Security Team </a>

<p></p>

Details of any OFBiz security vulnerabilities are published under the <a href="http://ofbiz.apache.org/download.html">Security Vulnerabilities </a> section of our Downloads Page.
Please check this page regularly for the latest information.

## Preparing for a new OFBiz Release

This year has been a very busy one for the project with a lot of changes happening such as significant refactoring and the introduction of Gradle. Discussions are now in progress for the creation of a branch that will eventually become our next release. The new release will be dedicated to the memory of  <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Memorial+-+Adrian+Crum">Adrian Crum </a>  who died earlier this year.

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Made the entity delegator test less noisy by disabling the error log level during the execution of these tests.
- Removed the specialpurpose/oagis component; a reference to it is in the Attic page.
- Align the column title in list forms in Accounting. ([OFBIZ-8278](https://issues.apache.org/jira/browse/OFBIZ-8278))
- QuoteId field is no longer shown when creating a new Quote ([OFBIZ-7777](https://issues.apache.org/jira/browse/OFBIZ-7777))
- Removed unused imports from groovy files for code optimization in
  - WebPos. ([OFBIZ-8442](https://issues.apache.org/jira/browse/OFBIZ-8442))
  - Party. ([OFBIZ-8465](https://issues.apache.org/jira/browse/OFBIZ-8465))
  - BI. ([OFBIZ-8474](https://issues.apache.org/jira/browse/OFBIZ-8474))
  - Birt. ([OFBIZ-8482](https://issues.apache.org/jira/browse/OFBIZ-8482))
  - Ebaystore. ([OFBIZ-8485](https://issues.apache.org/jira/browse/OFBIZ-8485))
  - Example. ([OFBIZ-8483](https://issues.apache.org/jira/browse/OFBIZ-8483))
  - Accounting. ([OFBIZ-8484](https://issues.apache.org/jira/browse/OFBIZ-8484))
  - Projectmgr. ([OFBIZ-8488](https://issues.apache.org/jira/browse/OFBIZ-8488))
- Align the column title in list forms in Accounting-AR. ([OFBIZ-8449](https://issues.apache.org/jira/browse/OFBIZ-8449))
- Services of Entity moved to EntityExt and services of Datamodel moved to Component.
- Improved product based promotion calculation. ([OFBIZ-7359](https://issues.apache.org/jira/browse/OFBIZ-7359))
- Entity auto services now return success messages. ([OFBIZ-7597](https://issues.apache.org/jira/browse/OFBIZ-7597))
- Align the column title in list forms in
  - Manufacturing. ([OFBIZ-8467](https://issues.apache.org/jira/browse/OFBIZ-8467))
  - Facility. ([OFBIZ-8480](https://issues.apache.org/jira/browse/OFBIZ-8480))
  - HR. ([OFBIZ-8456](https://issues.apache.org/jira/browse/OFBIZ-8456))
- In list form widgets the header row now doesn't render if said list is empty. ([OFBIZ-7598](https://issues.apache.org/jira/browse/OFBIZ-7598))
- Error message now properly visible after adding an item in webpos. ([OFBIZ-7563](https://issues.apache.org/jira/browse/OFBIZ-7563))
- Refactor and simplify the startup sequence in OFBiz ([OFBIZ-8337](https://issues.apache.org/jira/browse/OFBIZ-8337))
  - Rename ContainerConfig.Container to ContainerConfig.Configuration, the old nameing was very confusing as it confuses it with actual containers.
  - Change the signature of ContainerLoader and Container to accept List&lt;StartupCommand&gt; instead of String[]. And also migrate the adapter for converting these args into a standalone class called StartupCommandsToArgsAdapter.
  - Remove the LockedBy annotation as it is not used.
  - Substantially simplify the ContainerLoader load and unload logic and delete the start logic (merge it with load). The interface StartupLoader was updated accordingly.
  - Remove old logic to load containers in hot-deploy components.
  - Remove printThreadDump output from ContainerLoader which used to exist for debugging purposes and is no longer necessary.
  - Cleanup the AdminServer startup logic.
  - Change the StartupControlPanel logic to use only one StartupLoader instead of a list. The only implementation is ContainerLoader.
  - Remove the synchronized blocks in StartupControlPanel due to having only one loader.
  - Update the startup .properties files to reflect the changes in the startup logic.
  - Update the TestRunContainer to use List&lt;StartupCommand&gt; in its logic.
- Convert entity related CRUD services from simple to entity-auto for
  - MimeType. ([OFBIZ-8365](https://issues.apache.org/jira/browse/OFBIZ-8365))([OFBIZ-8366](https://issues.apache.org/jira/browse/OFBIZ-8366))([OFBIZ-8367](https://issues.apache.org/jira/browse/OFBIZ-8367))
  - MimeTypeHtmlTemplate. ([OFBIZ-8368](https://issues.apache.org/jira/browse/OFBIZ-8368))([OFBIZ-8369](https://issues.apache.org/jira/browse/OFBIZ-8369))([OFBIZ-8370](https://issues.apache.org/jira/browse/OFBIZ-8370))
  - MetaDataPredicate. ([OFBIZ-8362](https://issues.apache.org/jira/browse/OFBIZ-8362))([OFBIZ-8363](https://issues.apache.org/jira/browse/OFBIZ-8363))([OFBIZ-8364](https://issues.apache.org/jira/browse/OFBIZ-8364))
  - FileExtension. ([OFBIZ-8359](https://issues.apache.org/jira/browse/OFBIZ-8359))([OFBIZ-8360](https://issues.apache.org/jira/browse/OFBIZ-8360))([OFBIZ-8361](https://issues.apache.org/jira/browse/OFBIZ-8361))
  - CharacterSet. ([OFBIZ-8355](https://issues.apache.org/jira/browse/OFBIZ-8355))([OFBIZ-8356](https://issues.apache.org/jira/browse/OFBIZ-8356))([OFBIZ-8357](https://issues.apache.org/jira/browse/OFBIZ-8357))
  - DataResourceTypeAttr. ([OFBIZ-8352](https://issues.apache.org/jira/browse/OFBIZ-8352))([OFBIZ-8353](https://issues.apache.org/jira/browse/OFBIZ-8353))([OFBIZ-8354](https://issues.apache.org/jira/browse/OFBIZ-8354))
  - ElectronicText. ([OFBIZ-8371](https://issues.apache.org/jira/browse/OFBIZ-8371))([OFBIZ-8372](https://issues.apache.org/jira/browse/OFBIZ-8372))
  - ContactMechAttribute. ([OFBIZ-8373](https://issues.apache.org/jira/browse/OFBIZ-8373))([OFBIZ-8374](https://issues.apache.org/jira/browse/OFBIZ-8374))([OFBIZ-8375](https://issues.apache.org/jira/browse/OFBIZ-8375))
  - GlAccountOrganization. ([OFBIZ-8379](https://issues.apache.org/jira/browse/OFBIZ-8379))([OFBIZ-8380](https://issues.apache.org/jira/browse/OFBIZ-8380))
  - GlJournal. ([OFBIZ-8381](https://issues.apache.org/jira/browse/OFBIZ-8381))([OFBIZ-8382](https://issues.apache.org/jira/browse/OFBIZ-8382))([OFBIZ-8383](https://issues.apache.org/jira/browse/OFBIZ-8383))
  - WorkEffort. ([OFBIZ-8394](https://issues.apache.org/jira/browse/OFBIZ-8394))([OFBIZ-8395](https://issues.apache.org/jira/browse/OFBIZ-8395))([OFBIZ-8396](https://issues.apache.org/jira/browse/OFBIZ-8396))([OFBIZ-8397](https://issues.apache.org/jira/browse/OFBIZ-8397))([OFBIZ-8398](https://issues.apache.org/jira/browse/OFBIZ-8398))([OFBIZ-8399](https://issues.apache.org/jira/browse/OFBIZ-8399))([OFBIZ-8400](https://issues.apache.org/jira/browse/OFBIZ-8400))([OFBIZ-8401](https://issues.apache.org/jira/browse/OFBIZ-8401))([OFBIZ-8402](https://issues.apache.org/jira/browse/OFBIZ-8402))([OFBIZ-8403](https://issues.apache.org/jira/browse/OFBIZ-8403))([OFBIZ-8404](https://issues.apache.org/jira/browse/OFBIZ-8404))([OFBIZ-8405](https://issues.apache.org/jira/browse/OFBIZ-8405))([OFBIZ-8406](https://issues.apache.org/jira/browse/OFBIZ-8406))
  - GlAccount. ([OFBIZ-8378](https://issues.apache.org/jira/browse/OFBIZ-8378))([OFBIZ-8377](https://issues.apache.org/jira/browse/OFBIZ-8377))([OFBIZ-8387](https://issues.apache.org/jira/browse/OFBIZ-8387))([OFBIZ-8386](https://issues.apache.org/jira/browse/OFBIZ-8386))([OFBIZ-8385](https://issues.apache.org/jira/browse/OFBIZ-8385))
  - DataResource. ([OFBIZ-8346](https://issues.apache.org/jira/browse/OFBIZ-8346))([OFBIZ-8347](https://issues.apache.org/jira/browse/OFBIZ-8347))([OFBIZ-8349](https://issues.apache.org/jira/browse/OFBIZ-8349))([OFBIZ-8350](https://issues.apache.org/jira/browse/OFBIZ-8350))([OFBIZ-8351](https://issues.apache.org/jira/browse/OFBIZ-8351))
- Converted some CRUD services from simple to entity-auto. ([OFBIZ-8384](https://issues.apache.org/jira/browse/OFBIZ-8384))([OFBIZ-8388](https://issues.apache.org/jira/browse/OFBIZ-8388))([OFBIZ-8295](https://issues.apache.org/jira/browse/OFBIZ-8295))([OFBIZ-8294](https://issues.apache.org/jira/browse/OFBIZ-8294))([OFBIZ-8389](https://issues.apache.org/jira/browse/OFBIZ-8389))([OFBIZ-8390](https://issues.apache.org/jira/browse/OFBIZ-8390))([OFBIZ-8391](https://issues.apache.org/jira/browse/OFBIZ-8391))([OFBIZ-8392](https://issues.apache.org/jira/browse/OFBIZ-8392))([OFBIZ-8393](https://issues.apache.org/jira/browse/OFBIZ-8393))([OFBIZ-8407](https://issues.apache.org/jira/browse/OFBIZ-8407))
- Added CRUD services for
  - InvoiceTypeAttr, MrpEventType, OrderAdjustmentAttribute, OrderAdjustmentType, OrderAttribute, OrderBlacklist, OrderBlacklistType, QuantityBreakType, QuoteTermAttribute and QuoteType entities. ([OFBIZ-8271](https://issues.apache.org/jira/browse/OFBIZ-8271)) ([OFBIZ-8277](https://issues.apache.org/jira/browse/OFBIZ-8277)) ([OFBIZ-8281](https://issues.apache.org/jira/browse/OFBIZ-8281)) ([OFBIZ-8283](https://issues.apache.org/jira/browse/OFBIZ-8283)) ([OFBIZ-8285](https://issues.apache.org/jira/browse/OFBIZ-8285)) ([OFBIZ-8286](https://issues.apache.org/jira/browse/OFBIZ-8286)) ([OFBIZ-8287](https://issues.apache.org/jira/browse/OFBIZ-8287)) ([OFBIZ-8303](https://issues.apache.org/jira/browse/OFBIZ-8303)) ([OFBIZ-8304](https://issues.apache.org/jira/browse/OFBIZ-8304)) ([OFBIZ-8305](https://issues.apache.org/jira/browse/OFBIZ-8305))
  - QuoteTypeAttr, RejectionReason, ReorderGuideline, RequirementAttribute, RequirementBudgetAllocation, RequirementType, RequirementTypeAttr, RespondingParty, ReturnAdjustmentType and ReturnHeaderType entities. ([OFBIZ-8306](https://issues.apache.org/jira/browse/OFBIZ-8306)) ([OFBIZ-8308](https://issues.apache.org/jira/browse/OFBIZ-8308)) ([OFBIZ-8309](https://issues.apache.org/jira/browse/OFBIZ-8309)) ([OFBIZ-8310](https://issues.apache.org/jira/browse/OFBIZ-8310)) ([OFBIZ-8311](https://issues.apache.org/jira/browse/OFBIZ-8311)) ([OFBIZ-8314](https://issues.apache.org/jira/browse/OFBIZ-8314)) ([OFBIZ-8325](https://issues.apache.org/jira/browse/OFBIZ-8325)) ([OFBIZ-8326](https://issues.apache.org/jira/browse/OFBIZ-8326)) ([OFBIZ-8327](https://issues.apache.org/jira/browse/OFBIZ-8327)) ([OFBIZ-8328](https://issues.apache.org/jira/browse/OFBIZ-8328))
  - Added CRUD services for ReturnItemType, ReturnItemTypeMap, ReturnReason, ReturnType, RoleType, RoleTypeAttr and SaleType entities. ([OFBIZ-8329](https://issues.apache.org/jira/browse/OFBIZ-8329)) ([OFBIZ-8330](https://issues.apache.org/jira/browse/OFBIZ-8330)) ([OFBIZ-8331](https://issues.apache.org/jira/browse/OFBIZ-8331)) ([OFBIZ-8332](https://issues.apache.org/jira/browse/OFBIZ-8332)) ([OFBIZ-8333](https://issues.apache.org/jira/browse/OFBIZ-8333)) ([OFBIZ-8334](https://issues.apache.org/jira/browse/OFBIZ-8334)) ([OFBIZ-8335](https://issues.apache.org/jira/browse/OFBIZ-8335))
  - FinAccountTransType, FinAccountTransTypeAttr, FinAccountType, FinAccountTypeAttr, FixedAssetAttribute, FixedAssetIdentType, FixedAssetProductType, FixedAssetStdCostType,FixedAssetType, FixedAssetTypeAttr, GlAccountClass, GlAccountGroup, GlAccountGroupMember, GlAccountGroupType, GlAccountRole, GlAccountType, GlBudgetXref, FacilityCarrierShipment, FacilityLocationGeoPoint and ExampleType entities. ([OFBIZ-8205](https://issues.apache.org/jira/browse/OFBIZ-8205)) ([OFBIZ-8206](https://issues.apache.org/jira/browse/OFBIZ-8206)) ([OFBIZ-8207](https://issues.apache.org/jira/browse/OFBIZ-8207)) ([OFBIZ-8209](https://issues.apache.org/jira/browse/OFBIZ-8209)) ([OFBIZ-8210](https://issues.apache.org/jira/browse/OFBIZ-8210)) ([OFBIZ-8211](https://issues.apache.org/jira/browse/OFBIZ-8211)) ([OFBIZ-8212](https://issues.apache.org/jira/browse/OFBIZ-8212)) ([OFBIZ-8213](https://issues.apache.org/jira/browse/OFBIZ-8213)) ([OFBIZ-8214](https://issues.apache.org/jira/browse/OFBIZ-8214)) ([OFBIZ-8215](https://issues.apache.org/jira/browse/OFBIZ-8215)) ([OFBIZ-8216](https://issues.apache.org/jira/browse/OFBIZ-8216)) ([OFBIZ-8217](https://issues.apache.org/jira/browse/OFBIZ-8217)) ([OFBIZ-8218](https://issues.apache.org/jira/browse/OFBIZ-8218)) ([OFBIZ-8219](https://issues.apache.org/jira/browse/OFBIZ-8219)) ([OFBIZ-8220](https://issues.apache.org/jira/browse/OFBIZ-8220)) ([OFBIZ-8221](https://issues.apache.org/jira/browse/OFBIZ-8221)) ([OFBIZ-8233](https://issues.apache.org/jira/browse/OFBIZ-8233)) ([OFBIZ-8234](https://issues.apache.org/jira/browse/OFBIZ-8234)) ([OFBIZ-8235](https://issues.apache.org/jira/browse/OFBIZ-8235)) ([OFBIZ-8236](https://issues.apache.org/jira/browse/OFBIZ-8236))
  - GlFiscalType, GlResourceType, GlXbrlClass, GlResourceType, InvoiceAttribute, InvoiceItemAssocType, InvoiceNote, MarketingCampaignNote, OrderContent, SalesOpportunityCompetitor ([OFBIZ-8237](https://issues.apache.org/jira/browse/OFBIZ-8237)) ([OFBIZ-8238](https://issues.apache.org/jira/browse/OFBIZ-8238)) ([OFBIZ-8239](https://issues.apache.org/jira/browse/OFBIZ-8239)) ([OFBIZ-8240](https://issues.apache.org/jira/browse/OFBIZ-8240)) ([OFBIZ-8256](https://issues.apache.org/jira/browse/OFBIZ-8256)) ([OFBIZ-8258](https://issues.apache.org/jira/browse/OFBIZ-8258)) ([OFBIZ-8268](https://issues.apache.org/jira/browse/OFBIZ-8268)) ([OFBIZ-8274](https://issues.apache.org/jira/browse/OFBIZ-8274)) ([OFBIZ-8288](https://issues.apache.org/jira/browse/OFBIZ-8288)) ([OFBIZ-8431](https://issues.apache.org/jira/browse/OFBIZ-8431))
  - SalesOpportunityRole, SalesOpportunityStage, SalesOpportunityTrckCode, SalesOpportunityWorkEffort, SecurityGroup, SettlementTerm, ShipmentGatewayUsps, and ShipmentItemFeature entities. ([OFBIZ-8433](https://issues.apache.org/jira/browse/OFBIZ-8433)) ([OFBIZ-8434](https://issues.apache.org/jira/browse/OFBIZ-8434)) ([OFBIZ-8435](https://issues.apache.org/jira/browse/OFBIZ-8435)) ([OFBIZ-8436](https://issues.apache.org/jira/browse/OFBIZ-8436)) ([OFBIZ-8438](https://issues.apache.org/jira/browse/OFBIZ-8438)) ([OFBIZ-8441](https://issues.apache.org/jira/browse/OFBIZ-8441)) ([OFBIZ-8464](https://issues.apache.org/jira/browse/OFBIZ-8464)) ([OFBIZ-8466](https://issues.apache.org/jira/browse/OFBIZ-8466))
  - ShipmentGatewayUps and SalesOpportunityQuote entities. ([OFBIZ-8463](https://issues.apache.org/jira/browse/OFBIZ-8463)) ([OFBIZ-8432](https://issues.apache.org/jira/browse/OFBIZ-8432))
  - ShipmentAttribute, ShipmentBoxType, ShipmentContactMechType, ShipmentCostEstimate, ShipmentGatewayConfig, ShipmentReceipt, ShipmentTypeAttr, ShoppingListItemSurvey, StandardLanguage and StatusItem entities ([OFBIZ-8443](https://issues.apache.org/jira/browse/OFBIZ-8443)) ([OFBIZ-8444](https://issues.apache.org/jira/browse/OFBIZ-8444)) ([OFBIZ-8452](https://issues.apache.org/jira/browse/OFBIZ-8452)) ([OFBIZ-8453](https://issues.apache.org/jira/browse/OFBIZ-8453)) ([OFBIZ-8454](https://issues.apache.org/jira/browse/OFBIZ-8454)) ([OFBIZ-8468](https://issues.apache.org/jira/browse/OFBIZ-8468)) ([OFBIZ-8472](https://issues.apache.org/jira/browse/OFBIZ-8472)) ([OFBIZ-8477](https://issues.apache.org/jira/browse/OFBIZ-8477)) ([OFBIZ-8479](https://issues.apache.org/jira/browse/OFBIZ-8479)) ([OFBIZ-8481](https://issues.apache.org/jira/browse/OFBIZ-8481))
  - SalesInvoiceItemFact, OrderItemAssoc, OrderItemAssocType, OrderItemContactMech, OrderItemGroup, OrderItemPriceInfo, OrderItemRole, OrderItemShipGrpInvRes, OrderItemType and OrderItemTypeAttr entities. ([OFBIZ-8430](https://issues.apache.org/jira/browse/OFBIZ-8430)) ([OFBIZ-8581](https://issues.apache.org/jira/browse/OFBIZ-8581)) ([OFBIZ-8582](https://issues.apache.org/jira/browse/OFBIZ-8582)) ([OFBIZ-8583](https://issues.apache.org/jira/browse/OFBIZ-8583)) ([OFBIZ-8584](https://issues.apache.org/jira/browse/OFBIZ-8584)) ([OFBIZ-8585](https://issues.apache.org/jira/browse/OFBIZ-8585)) ([OFBIZ-8586](https://issues.apache.org/jira/browse/OFBIZ-8586)) ([OFBIZ-8587](https://issues.apache.org/jira/browse/OFBIZ-8587)) ([OFBIZ-8588](https://issues.apache.org/jira/browse/OFBIZ-8588)) ([OFBIZ-8589](https://issues.apache.org/jira/browse/OFBIZ-8589))
- Added agreementItemSeqId in AgreementContent entity, now content can be uploaded for item level as well ([OFBIZ-7969](https://issues.apache.org/jira/browse/OFBIZ-7969))
- Removed duplicate entry for product in specialpurpose/ecommerce/data/DemoRentalProduct.xml ([OFBIZ-8623](https://issues.apache.org/jira/browse/OFBIZ-8623))
- Unit test case for service - sendOrderConfirmation ([OFBIZ-8507](https://issues.apache.org/jira/browse/OFBIZ-8507))
- Improved look of the view and edit buttons in the shipment page with flatgray theme. ([OFBIZ-7486](https://issues.apache.org/jira/browse/OFBIZ-7486))
- Made UI consistent for keyword search result screen of Ebay. ([OFBIZ-7472](https://issues.apache.org/jira/browse/OFBIZ-7472))
- Use UtilValidate isEmpty and isNotEmpty methods correctly. ([OFBIZ-8413](https://issues.apache.org/jira/browse/OFBIZ-8413))
- Add WebSocket support ([OFBIZ-7073](https://issues.apache.org/jira/browse/OFBIZ-7073))
- Removed the unused ControlApplet.java class
- Renamed files
  - conditional.xml to conditionalLabels.xml
  - DefaultMessages.xml to DefaultMessagesLabels.xml
  - EmailPassword.xml to EmailPasswordLabels.xml

## Bugfixes

Functional and technical bugfixes:

- Null Pointer Exception in the ecommerce webapp when accessed with multitenant mode on, caused by the recent refactoring to ContextFilter. ([OFBIZ-8338](https://issues.apache.org/jira/browse/OFBIZ-8338))
- The Payment section in the party profile page is broken when the Party does not have a check account. ([OFBIZ-6899](https://issues.apache.org/jira/browse/OFBIZ-6899))
- Cannot edit shopping list for ecommerce and ecomseo ([OFBIZ-8348](https://issues.apache.org/jira/browse/OFBIZ-8348))
- Entity description labels are considered not used by the Label Manager ([OFBIZ-8154](https://issues.apache.org/jira/browse/OFBIZ-8154))
- Error in the deleteCustomerTaxAuthInfo page called from /ecommerce/control/viewprofile ([OFBIZ-4106](https://issues.apache.org/jira/browse/OFBIZ-4106))
- Labels and properties caches clearing no longer work ([OFBIZ-8321](https://issues.apache.org/jira/browse/OFBIZ-8321))
- Shortlist the needed resources to start OFBiz in the sourcesets block in Gradle ([OFBIZ-7937](https://issues.apache.org/jira/browse/OFBIZ-7937))
- Pagination error in
  - Accounting PaymentGroupForms. ([OFBIZ-8446](https://issues.apache.org/jira/browse/OFBIZ-8446))
  - Accounting TaxAuthorityForms. ([OFBIZ-8475](https://issues.apache.org/jira/browse/OFBIZ-8475))
- InventoryItemStatus logging for reserved serialized inventory item. ([OFBIZ-8459](https://issues.apache.org/jira/browse/OFBIZ-8459))
- Entity ECA rules throws Null Pointer Exception in case of a remove operation. ([OFBIZ-8001](https://issues.apache.org/jira/browse/OFBIZ-8001))
- Popup calendar fails for ecomseo et Ecommerce ([OFBIZ-8345](https://issues.apache.org/jira/browse/OFBIZ-8345))
- Cannot edit images in Content ([OFBIZ-7000](https://issues.apache.org/jira/browse/OFBIZ-7000))
- Product page missing form elements ([OFBIZ-8489](https://issues.apache.org/jira/browse/OFBIZ-8489))
- Error due to missing entry of service resource in ofbiz-component.
- Updating Party Content Image does not work ([OFBIZ-8458](https://issues.apache.org/jira/browse/OFBIZ-8458)) ([OFBIZ-8347](https://issues.apache.org/jira/browse/OFBIZ-8347))
- Footer text inconsistent in flatgray theme ([OFBIZ-8625](https://issues.apache.org/jira/browse/OFBIZ-8625))
- Console Warning: No parameter found for override parameter named ... ([OFBIZ-7814](https://issues.apache.org/jira/browse/OFBIZ-7814))
- Search Single Transactions From eBay not working ([OFBIZ-8624](https://issues.apache.org/jira/browse/OFBIZ-8624))
- Missing uiLabel on Export Products to eBay screen ([OFBIZ-8508](https://issues.apache.org/jira/browse/OFBIZ-8508))
- Column 'DATA\_CATEGORY\_ID' cannot accept a NULL value ([OFBIZ-8282](https://issues.apache.org/jira/browse/OFBIZ-8282))
- When we pass only "orderId" in "updateOrderHeader" service all values are getting null. ([OFBIZ-8339](https://issues.apache.org/jira/browse/OFBIZ-8339))
- Bursted Layout in screen "orderstatus" of Ecommerce ([OFBIZ-8265](https://issues.apache.org/jira/browse/OFBIZ-8265))
- Nonsense css value in html output ([OFBIZ-8312](https://issues.apache.org/jira/browse/OFBIZ-8312))
- Errormessage "Can't find resource for bundle" on EditProductContent ([OFBIZ-8336](https://issues.apache.org/jira/browse/OFBIZ-8336))
- Net Before Overhead Report is not working ([OFBIZ-7317](https://issues.apache.org/jira/browse/OFBIZ-7317))
