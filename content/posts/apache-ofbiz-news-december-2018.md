---
layout: post
title: 'Apache OFBiz News - December 2018 '
date: '2019-01-30T09:35:48+00:00'
permalink: apache-ofbiz-news-december-2018
---
## Apache OFBiz News December 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have news about our usual end of year tasks to create a new branch, a new&nbsp;Marketplace plugin, and also some news about various upgrades were are implementing.

## Gradle upgraded to version 5.0

OFBiz has been upgraded to [Gradle 5.0&nbsp;](https://gradle.org/whats-new/gradle-5/) which is much faster for loading, as it runs parallel processes for downloading dependencies, and it is also more compatible with newer versions of Java. This will speed up the OFBiz installation and general running. Please refer to Jira task <a href="https://issues.apache.org/jira/browse/OFBIZ-9972" target="_blank" style="color: #1155cc;">OFBIZ-9972</a> for more information about what has been implemented.

Thanks very much to&nbsp;Mathieu Lirzin,&nbsp;Taher Alkhateeb and also everyone who contributed to getting this upgrade implemented.

## New Framework and Plugin 18.12 Branches

As part of our usual end of year tasks, the community has worked on creating a new branch&nbsp;Release 18.12&nbsp;for both the framework and the plugin.<br>

Please note that [ofbiz-framework-18.12](http://svn.apache.org/repos/asf/ofbiz/ofbiz-framework/branches/release18.12/) branch and [ofbiz-plugins-18.12](http://svn.apache.org/repos/asf/ofbiz/ofbiz-plugins/branches/release18.12/) branch are not yet officially released and will be stabilized over the next few months until the community is satisfied that they are ready for release.

A big thank you to Nicolas Malin and everyone who contributed to this effort.

Note: **The community is also working on the plan to release OFBiz 17.12 branch. In past one year, the community had worked on stabilizing the 17.12 branch.**<br>

<font size="4"> </font>

## Upgrade to Java 11

Discussions have started on our development mailing list for upgrading OFBiz to Java 11. OFBiz currently runs using Java 8, we are making sure that we understand the changes and there should not be any potential issues if we go ahead with the upgrade. You can check the progress of the work being done in the Jira task <a href="https://issues.apache.org/jira/browse/OFBIZ-10757" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://issues.apache.org/jira/browse/OFBIZ-10757&amp;source=gmail&amp;ust=1547183373522000&amp;usg=AFQjCNEvXAk4gOGTUi8J32ymQulbZeq9KQ" style="color: #1155cc;">OFBIZ-10757<br></a>

Thanks very much to Taher Alkhateeb for starting the discussion about this upgrade and also everyone who participated by providing feedback or comments.

## OFBiz as Marketplace

The main discussion topic this month has been around the creation of a new 'marketplace' plugin for OFBiz. This potential new plugin will behave similar to ecommerce&nbsp;plugin but will also offer sellers the ability to sell their&nbsp;products on the marketplace

We have begun collecting and documenting user stories about the functionality that we would like to implement. User stories will soon be available at:

Home &gt; Documentation &gt; OFBiz Features &gt; Proposed Features &gt;&nbsp;Marketplace.

A big thanks goes to Rishi Solanki for starting the discussion and everyone who participated.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Upgrades gradle wrapper to version 5.0 ([OFBIZ-9972](https://issues.apache.org/jira/browse/OFBIZ-9972))
- Improves Accounting - AR container structure ([OFBIZ-10469](https://issues.apache.org/jira/browse/OFBIZ-10469))
- Improves Accounting - AP container structure ([OFBIZ-10464](https://issues.apache.org/jira/browse/OFBIZ-10464))
- Changes ControlEventListener Log-Level from &quot;warning&quot; to &quot;info&quot; ([OFBIZ-10330](https://issues.apache.org/jira/browse/OFBIZ-10330))
- Implements dependency from &quot;State/Province&quot; Field to &quot;Country&quot; in New Employee Form ([OFBIZ-10326](https://issues.apache.org/jira/browse/OFBIZ-10326))
- Replaces callable objects with lambda expressions ([OFBIZ-10488](https://issues.apache.org/jira/browse/OFBIZ-10488))
- Fixes or Silence various warnings ([OFBIZ-10701](https://issues.apache.org/jira/browse/OFBIZ-10701))
- Replaces Callable objects with lambda expressions and removes unused imports ([OFBIZ-10488](https://issues.apache.org/jira/browse/OFBIZ-10488))
- Converts Minilang to Groovy Guide into asciidoc ([OFBIZ-10300](https://issues.apache.org/jira/browse/OFBIZ-10300))
- Splitting CommonRate and CommonProductRating ([OFBIZ-3844](https://issues.apache.org/jira/browse/OFBIZ-3844))
- Seperates Asciidoc documentation of plugins ([OFBIZ-10658](https://issues.apache.org/jira/browse/OFBIZ-10658))
- Adds a warning on UI about the &quot;X quantity of Product&quot; condition in Promo Rules ([OFBIZ-6032](https://issues.apache.org/jira/browse/OFBIZ-6032))
- LoginWorker.autoLoginCheck performance improvement ([OFBIZ-10709](https://issues.apache.org/jira/browse/OFBIZ-10709))
- Fixes: request map to create party content in controller.xml exists twice ([OFBIZ-10699](https://issues.apache.org/jira/browse/OFBIZ-10699))
- Converts createBudget service to entity-auto ([OFBIZ-10715](https://issues.apache.org/jira/browse/OFBIZ-10715))
- Converts updateContent and removeContent service to entity-auto ([OFBIZ-10625](https://issues.apache.org/jira/browse/OFBIZ-10625))
- Fixes: EntityUtilProperties.getProperties method should use cache. ([OFBIZ-10717](https://issues.apache.org/jira/browse/OFBIZ-10717))
- Removes all fk dependencies from stats entities to the business entities ([OFBIZ-10721](https://issues.apache.org/jira/browse/OFBIZ-10721))
- Refactors ServiceUtil.isSuccess(), isError() and isFailure() methods ([OFBIZ-10724](https://issues.apache.org/jira/browse/OFBIZ-10724))
- Refactors boolean returns for ShoppingCart methods ([OFBIZ-10745](https://issues.apache.org/jira/browse/OFBIZ-10745))
- Refactors boolean returns for UtilValidate methods ([OFBIZ-10728](https://issues.apache.org/jira/browse/OFBIZ-10728))
- Refactors boolean returns for UtilHttp methods ([OFBIZ-10726](https://issues.apache.org/jira/browse/OFBIZ-10726))
- Refactors boolean returns from methods ([OFBIZ-10725](https://issues.apache.org/jira/browse/OFBIZ-10725))
- Refactors boolean returns for TemporalExpression methods ([OFBIZ-10732](https://issues.apache.org/jira/browse/OFBIZ-10732))
- Converts QuoteServices.xml mini lang to groovy ([OFBIZ-10553](https://issues.apache.org/jira/browse/OFBIZ-10553))
- Adds token based authentication ([OFBIZ-9833](https://issues.apache.org/jira/browse/OFBIZ-9833))
- Adds a PoC for a documentation system for OFBiz based on Asciidoc ([OFBIZ-9873](https://issues.apache.org/jira/browse/OFBIZ-9873))
- Replaces Callable objects with lambda expressions ([OFBIZ-10488](https://issues.apache.org/jira/browse/OFBIZ-10488))
- Cleans various linting compiler warnings ([OFBIZ-10701](https://issues.apache.org/jira/browse/OFBIZ-10701))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: User should be notified if product is already added in the compare list ([OFBIZ-9727](https://issues.apache.org/jira/browse/OFBIZ-9727))
- Fixes: Error on createShoppingListItem when adding item to cart as anonymous ([OFBIZ-5157](https://issues.apache.org/jira/browse/OFBIZ-5157))
- Fixes: ConcurrentModificationException in ShoppingCart.cleanUpShipGroups ([OFBIZ-10696](https://issues.apache.org/jira/browse/OFBIZ-10696))
- Fixes: Standalone Asciidoc plugins documents can't render logo correctly in PDF ([OFBIZ-10677](https://issues.apache.org/jira/browse/OFBIZ-10677))
- Fixes: Username is displayed on ecommerce even after user logs out ([OFBIZ-10666](https://issues.apache.org/jira/browse/OFBIZ-10666))
- Fixes: UI bug in scrum component ([OFBIZ-10676](https://issues.apache.org/jira/browse/OFBIZ-10676))
- Fixes: Missing nullcheck in service createContactListParty. ([OFBIZ-10653](https://issues.apache.org/jira/browse/OFBIZ-10653))
- Fixes: ‘./gradlew generateOfbizDocumentation’ fails with Gradle 5.0 ([OFBIZ-10693](https://issues.apache.org/jira/browse/OFBIZ-10693))
- Fixes: FindGeneric page broken ([OFBIZ-10711](https://issues.apache.org/jira/browse/OFBIZ-10711))
- Fixes: Relation UserLogin of entity UserLoginHistory is not unique for that entity ([OFBIZ-10515](https://issues.apache.org/jira/browse/OFBIZ-10515))
- Fixes: Inconsistent behaviour of ServiceDispatcher.checkAuth ([OFBIZ-10712](https://issues.apache.org/jira/browse/OFBIZ-10712))
- Fixes: Incorrect PartyContactMechPurpose created while calling createUpdateBillingAddress service ([OFBIZ-10588](https://issues.apache.org/jira/browse/OFBIZ-10588))
- Fixes: Classification group filter not working on find party screen. ([OFBIZ-10580](https://issues.apache.org/jira/browse/OFBIZ-10580))
- Fixes: Wrong title in table header of Config Option List ([OFBIZ-10713](https://issues.apache.org/jira/browse/OFBIZ-10713))
- Fixes: Date format does not change on change of locale ([OFBIZ-10736](https://issues.apache.org/jira/browse/OFBIZ-10736))
- Fixes: Dependent dropdowns should be used in createPostalAddress and Set Billing screens of ordermgr ([OFBIZ-10681](https://issues.apache.org/jira/browse/OFBIZ-10681))
- Fixes: Having condition is ignored on queryList() and queryFirst() calls in EntityQuery ([OFBIZ-9890](https://issues.apache.org/jira/browse/OFBIZ-9890))
- Fixes: Forum Group update throws an error ([OFBIZ-10744](https://issues.apache.org/jira/browse/OFBIZ-10744))
- Fixes: double fk-name in ProductFacility entity relations ([OFBIZ-7357](https://issues.apache.org/jira/browse/OFBIZ-7357)) <br>Adds: Demo Data based on the proposed design to support replenishment planning through any inter-company facility.
- Fixes: Fallthrough in switch-case of eway/GatewayResponse.java ([OFBIZ-10642](https://issues.apache.org/jira/browse/OFBIZ-10642))
- Fixes: Seed data sequence bug regarding &quot;MIDNIGHT\_DAILY&quot; TemporalExpression ([OFBIZ-10533](https://issues.apache.org/jira/browse/OFBIZ-10533))
- Fixes: duplicate request getAssociatedStateList (committed at r#1848469)

### Plugins

- Fixes: OFBizPricatUtil class don't use a org.apache.ofbiz.pricat package ([OFBIZ-10655](https://issues.apache.org/jira/browse/OFBIZ-10655))
- Fixes: In widget forms display element has not time type ([OFBIZ-6731](https://issues.apache.org/jira/browse/OFBIZ-6731))
- Fixes: Plugins Asciidoc documentation must be standalone ([OFBIZ-10658](https://issues.apache.org/jira/browse/OFBIZ-10658))
- Fixes: Standalone Asciidoc plugins documents can't render logo correctly in PDF ([OFBIZ-10677](https://issues.apache.org/jira/browse/OFBIZ-10677))
- Fixes: User's name is displayed on ecommerce even after user logs out ([OFBIZ-10666](https://issues.apache.org/jira/browse/OFBIZ-10666))
- Fixes: visual-editor not working on ecommerce ([OFBIZ-10708](https://issues.apache.org/jira/browse/OFBIZ-10708))
- Fixes: Quantity of the product added in the cart should not be negative ([OFBIZ-10668](https://issues.apache.org/jira/browse/OFBIZ-10668))
