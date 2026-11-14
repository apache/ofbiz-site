---
layout: post
title: 'Apache OFBiz News - September 2018 '
date: '2019-01-21T10:07:44+00:00'
permalink: apache-ofbiz-news-september-2018
---
## Apache OFBiz News September 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have news about the discussions around the location of permission data and accounting AP and AR along with&nbsp;our usual list of features and improvements.

### Move accounting AP and AR to the plugin

Currently in OFBiz, accounting AR and AP doesn't contain any logic so instead of keeping them as a part of the functional framework they can be moved to plugins. The main webapp is accounting, AP/AR are a business orientation that can be loaded at demand through plugins.

Please refer to&nbsp;<a href="https://markmail.org/message/bhxjdt65usz6tdcz" style="color: #1155cc;">Mail thread</a>&nbsp;and Jira task&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10552" style="color: #1155cc;">OFBIZ-10552</a>&nbsp;for more information.

A big thank you to Nicolas Malin for initiating the discussion and to everyone who contributed.

### Move SecurityPermission, SecurityGroup, and SecurityGroupPermission Data to seed data files

Currently, in OFBiz, SecurityPermission, SecurityGroup, and SecurityGroupPermission data are mixed in demo and seed data files. All the 'SecurityPermission' data should be in the seed data files. All the 'SecurityGroup' and 'SecurityGroupPermission' data should be in the demo data files. The 'SecurityGroup' and 'SecurityGroupPermission' data for&nbsp;the groupId 'super' should remain in the seed data files.

Please refer to&nbsp;<a href="https://markmail.org/message/peoz4axie4ona6ah" style="color: #1155cc;">Mail thread</a>&nbsp;and Jira task&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10575" style="color: #1155cc;">OFBIZ-10575</a>&nbsp;for more information.

A big thank you to Deepak Nigam for initiating the discussion and to everyone who contributed.

### New features and improvements

Functional enhancements and improvements as well as updates of third-party libraries and source code refactoring:

#### Framework

- Improves Dutch labels in ProductUiLabels.xml ([OFBIZ-10544](https://issues.apache.org/jira/browse/OFBIZ-10544)).
- Introduces Parameter 'Reserve After Date' for order items ([OFBIZ-10534](https://issues.apache.org/jira/browse/OFBIZ-10534)). Indicates the date after which reservation can happen. This way, the stock availability can be managed more efficiently.
- Refactors EntityUtil findBy methods using Stream API ([OFBIZ-10537](https://issues.apache.org/jira/browse/OFBIZ-10537)).
- Improves Dutch labels in ManufacturingUiLabels.xml ([OFBIZ-10547](https://issues.apache.org/jira/browse/OFBIZ-10547)).
- Implements &quot;depends-on&quot; support for Component Loading ([OFBIZ-10368](https://issues.apache.org/jira/browse/OFBIZ-10368)). Enabeling the declaration of dependancies, if any anomaly is found while loading components, the process will stop.
- Displays from-address in send confirmation email form ([OFBIZ-10493](https://issues.apache.org/jira/browse/OFBIZ-10493)).
- Removes duplicate labels from OrderUiLabel.xml ([OFBIZ-10548](https://issues.apache.org/jira/browse/OFBIZ-10548)).
- Removes duplicate labels from ProductUiLabel.xml ([OFBIZ-10550](https://issues.apache.org/jira/browse/OFBIZ-10550)).
- Updates Geo information according to ISO notifications ([OFBIZ-10028](https://issues.apache.org/jira/browse/OFBIZ-10028)).
- Sets the default value for retries of async persistant services from -1 to 0 ([OFBIZ-10557](https://issues.apache.org/jira/browse/OFBIZ-10557)).
- Arranges workeffort UI labels in alphabetic order ([OFBIZ-7246](https://issues.apache.org/jira/browse/OFBIZ-7246)).
- Modifies QRCodeServices.java and uses EntityUtilProperties. Removes unused data variables and uses them directly inside the service ([OFBIZ-7037](https://issues.apache.org/jira/browse/OFBIZ-7037)).
- Calculates estimated shipment delivery time ([OFBIZ-10372](https://issues.apache.org/jira/browse/OFBIZ-10372)).
- Limits Parameter 'Reserve After Date' to sales orders only ([OFBIZ-10559](https://issues.apache.org/jira/browse/OFBIZ-10559)).
- Arranges content UI labels in alphabetic order ([OFBIZ-7211](https://issues.apache.org/jira/browse/OFBIZ-7211)).
- Changes 'quickShipPurchaseOrder' to 'quickReceivePurchaseOrder' ([OFBIZ-10558](https://issues.apache.org/jira/browse/OFBIZ-10558)).
- Arranges manufacturing UI labels in alphabetic order ([OFBIZ-7338](https://issues.apache.org/jira/browse/OFBIZ-7338)).
- Arranges framework UI labels in alphabetic order ([OFBIZ-7345](https://issues.apache.org/jira/browse/OFBIZ-7345)).
- Upgrades Freemarker to the latest stable version (from 2.3.27-incubating to 2.3.28).
- Updates missing entries in GDSL descriptors and cleans up findOne to use EntityQuery instead ([OFBIZ-10566](https://issues.apache.org/jira/browse/OFBIZ-10566)).
- Arranges party UI labels in alphabetic order ([OFBIZ-7353](https://issues.apache.org/jira/browse/OFBIZ-7353)).
- Deprecates shoppingCart.makeItemShipGroupAndAssoc with the boolean parameter newShipGroup as it is not used ([OFBIZ-10576](https://issues.apache.org/jira/browse/OFBIZ-10576)).
- Alters Service createAutoRequirementsForOrder to use OrderItemShipGroup.facilityId instead of ProductStore.inventoryFactory ([OFBIZ-10570](https://issues.apache.org/jira/browse/OFBIZ-10570)). Takes into account that an order can have multiple ship groups with individual facilityIds.
- Prevents orders with zero item quantity from being placed ([OFBIZ-10555](https://issues.apache.org/jira/browse/OFBIZ-10555)).
- Removes unused labels from content ([OFBIZ-9364](https://issues.apache.org/jira/browse/OFBIZ-9364)).
- Creates RequirementStatus record while creating or updating requirement ([OFBIZ-10568](https://issues.apache.org/jira/browse/OFBIZ-10568)).
- Uses 'buttontext' styling for buttons inside the ListEntities table ([OFBIZ-10465](https://issues.apache.org/jira/browse/OFBIZ-10465)).
- Redirects work effort's agreement to agreement detail page instead of agreement list page ([OFBIZ-7627](https://issues.apache.org/jira/browse/OFBIZ-7627)).
- Introduces a new feature that allows the impersonation of a login by an authorized user ([OFBIZ-10515](https://issues.apache.org/jira/browse/OFBIZ-10515)). Also adds the documentation with all the details in security-impersonation.adoc.

#### Plugins

- Shows promotions as listing instead of inline ([OFBIZ-10462](https://issues.apache.org/jira/browse/OFBIZ-10462)).
- Replaces #assign with #local in all the ftl macros ([OFBIZ-10516](https://issues.apache.org/jira/browse/OFBIZ-10516)).
- Renames setLocaleFromBrowser to setTimeZoneFromBrowser everywhere it is needed ([OFBIZ-10472](https://issues.apache.org/jira/browse/OFBIZ-10472)).
- Arranges ECommerce UI Labels in alphabetic order according to best practice ([OFBIZ-7325](https://issues.apache.org/jira/browse/OFBIZ-7325)).
- Calculates estimated shipment delivery time ([OFBIZ-10372](https://issues.apache.org/jira/browse/OFBIZ-10372)).
- Arranges webpos UI labels in alphabetic order ([OFBIZ-7320](https://issues.apache.org/jira/browse/OFBIZ-7320)).
- Arranges projectmgr UI labels in alphabetic order ([OFBIZ-7371](https://issues.apache.org/jira/browse/OFBIZ-7371)).
- Arranges scrum UI labels in alphabetic order ([OFBIZ-7370](https://issues.apache.org/jira/browse/OFBIZ-7370)).
- Arranges ebaystore UI labels in alphabetic order ([OFBIZ-7280](https://issues.apache.org/jira/browse/OFBIZ-7280)).
- Arranges example UI labels in alphabetic order ([OFBIZ-7281](https://issues.apache.org/jira/browse/OFBIZ-7281)).
- Arranges myportal UI labels in alphabetic order ([OFBIZ-7282](https://issues.apache.org/jira/browse/OFBIZ-7282)).
- Arranges passport UI labels in alphabetic order ([OFBIZ-7285](https://issues.apache.org/jira/browse/OFBIZ-7285)).

### Bugfixes

Functional and technical bugfixes:

#### Framework

- Warning in console logs related to entity definitions ([OFBIZ-10540](https://issues.apache.org/jira/browse/OFBIZ-10540)).
- When a user executes a search/find action in the Label Manager, and there are duplicated labels the 'Find'-button is not visible anymore ([OFBIZ-10549](https://issues.apache.org/jira/browse/OFBIZ-10549)).
- Exceptions thrown in ConfigXMLReader during the xml parsing now incorporate the location of the failed file.
- Warning in console logs related to entity definitions ([OFBIZ-10540](https://issues.apache.org/jira/browse/OFBIZ-10540)). Also adds a unit test for WorkEffortContactMech.
- Orders the file log list drop-down on webtools/control/FetchLogs screen to help the search
- Search operation on 'AssocRevisionItemView' entity causing exception. ([OFBIZ-8842](https://issues.apache.org/jira/browse/OFBIZ-8842)).
- Broken page renders while click on Submit button ([OFBIZ-7535](https://issues.apache.org/jira/browse/OFBIZ-7535)).
- Impersonation of userLogin feature ([OFBIZ-10515](https://issues.apache.org/jira/browse/OFBIZ-10515)).
- Use of layered-modal with parameter does not work ([OFBIZ-10511](https://issues.apache.org/jira/browse/OFBIZ-10511)).

#### Plugins

- Freemarker error on shopping list page on eCommerce storefront ([OFBIZ-10459](https://issues.apache.org/jira/browse/OFBIZ-10459)).
- Use assign tag instead of local in Tree.ftl,as its causing data load error. Tree.ftl used in DemoTree.xml to demonstrate the entity-engine-transform-xml feature.
- Webpos keyboard shortcut keys do not work correctly ([OFBIZ-7945](https://issues.apache.org/jira/browse/OFBIZ-7945)).
- Cart summary section distorted after add to cart on Medium screen devices. ([OFBIZ-10385](https://issues.apache.org/jira/browse/OFBIZ-10385)).

### Documentation

- Adds content for Performance Review in Human Resources ([OFBIZ-10262](https://issues.apache.org/jira/browse/OFBIZ-10262)).
- Creates an empty document templates for webapp socumentation ([OFBIZ-10564](https://issues.apache.org/jira/browse/OFBIZ-10564)).
- Documents the automated authentification from a domain to another ([OFBIZ-10562](https://issues.apache.org/jira/browse/OFBIZ-10562)).
- Adds content for Employments in Human Resources ([OFBIZ-10261](https://issues.apache.org/jira/browse/OFBIZ-10261)).
- Adds content for Employees in Human Resources. ([OFBIZ-10260](https://issues.apache.org/jira/browse/OFBIZ-10260)).
- Adds content for Employee Positions in Human Resources. ([OFBIZ-10259](https://issues.apache.org/jira/browse/OFBIZ-10259)).
- Adds content details for hr-recruitment.adoc file ([OFBIZ-10265](https://issues.apache.org/jira/browse/OFBIZ-10265)).
- Adds documentation content for qualifications in Human Resources guide ([OFBIZ-10264](https://issues.apache.org/jira/browse/OFBIZ-10264)).
- Adds documentation content for skills in Human Resources guide ([OFBIZ-10266](https://issues.apache.org/jira/browse/OFBIZ-10266)).
- Adds documentation content for resumes in Human Resources guide ([OFBIZ-10267](https://issues.apache.org/jira/browse/OFBIZ-10267)).
- Adds documentation content for employee leave in Human Resources guide ([OFBIZ-10269](https://issues.apache.org/jira/browse/OFBIZ-10269)).
- Adds documentation content for security setup in Human Resources guide ([OFBIZ-10270](https://issues.apache.org/jira/browse/OFBIZ-10270)).
- Adds documentation content for Skill Types in Human Resources guide ([OFBIZ-10271](https://issues.apache.org/jira/browse/OFBIZ-10271)).
