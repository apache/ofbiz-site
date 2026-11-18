---
layout: post
title: 'Apache OFBiz News - April 2019 '
date: '2019-05-09T06:23:04+00:00'
permalink: apache-ofbiz-news-april-2019
---
## Apache OFBiz News April 2019

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about OFBiz build support with Java Open JDK &amp; Java 8, and a new Job prioritisation feature along with our usual list of features and improvements.

## Support with Java Open JDK and Java 8

In February blog we have informed about community's decision to keep release 17.12 (unreleased) on Java 8, and 18.12 (unreleased) &amp; trunk be switched to Java 11 on OpenJDK. As per the recent discussion, the community has decided that 18.12 and trunk be kept on Java 8 only. [Adopt Open JDK 8 LTS](https://adoptopenjdk.net/support.html) is supported at least until September 2023. The idea is to provide minimal Java version support. It will give users enough time to plan, test and migrate to newer Java version. Though the community will continue to make codebase forward compatible.

Please refer to [Mail thread](https://markmail.org/message/swajtt3aaam7jq4m).

Thanks, Jacques, Scott, Michael, Taher, Mathieu, Pierre, Jim and to everyone who gave their valuable inputs.&nbsp;&nbsp;

## Job prioritization

Job prioritization allows specifying a priority for a job thus JobPoller queue them accordingly. It will help important jobs to be prioritized over normal jobs, and low priority jobs can be left until last. The feature is committed to trunk thus it will be available in future releases (after unreleased 18.12).

Please refer to&nbsp;[OFBIZ-10865](https://issues.apache.org/jira/browse/OFBIZ-10865), and [Mail thread](https://markmail.org/message/zitvvekscmwdznkb)&nbsp;to know more about its implementation.

Thank you so much, Scott Gray, for initiating and putting efforts in this direction, and to everyone who contributed to this effort

## Using code128 instead of code39 for barcode generation

Currently, OFBiz uses code39 to generate barcodes but there are some limitations associated with it. It is only able to encrypt letters from A to Z, digits from 0 to 9 and an additional set of special characters – “. $ % + – / \*”. To enhance the support for more characters in the barcode community decided on using code128 instead of code39. <br>Some of the advantages of using code128:

1. It supports all the 128 ASCII symbols.
2. It is more concise and space-efficient.
3. It provides its users with higher degree of data security.

Please refer to&nbsp;[OFBIZ-10896](https://issues.apache.org/jira/browse/OFBIZ-10896) and [Mail thread](https://markmail.org/message/2unwynhirkjfradl).

Thanks, Pawan Verma for initiating the discussion and to everyone who participated by providing their valuable inputs.

## Marital status to be managed with Enumeration entity

Currently, marital status is managed as an indicator (Y/N) in Person entity. The community has decided to enhance it with support of more broader classifications namely Married, Widowed,&nbsp;Separated,&nbsp;Divorced and Single by&nbsp;making it derived from Enumeration entity.

Please refer to&nbsp;[OFBIZ-10921](https://issues.apache.org/jira/browse/OFBIZ-10921) and [Mail thread](https://markmail.org/message/5b33qm3osy76if24).

Thanks, Suraj Khurana for initiating the discussion and to everyone who participated by providing their valuable inputs.

  <p> </p>

## OFBiz Statistics

Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:

- **JIRA Issue Tracker:** 105 issues were opened and 71 issues were closed (15 different people helped to close these issues)
- **Code Change and Commit Activity:**
  - **Framework:** 150 commits to the code base that changed 11,098 lines of code (13 committers were active)
  - **Plugins:** 48 commits to the code base that changed 782 lines of code (5 committers were active)
- **Mailing Lists:**
  - **Dev:** 219 emails sent and 41 topics discussed (36 different people)
  - **User:** 146 emails sent and 56 topics discussed (40 different people)

  <p> </p>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Adds the possibility to prioritize Jobs to count in which is more important than other. ([OFBIZ-10865](https://issues.apache.org/jira/browse/OFBIZ-10865))
- Adds the ability to edit/remove terms of an invoice. ([OFBIZ-9290](https://issues.apache.org/jira/browse/OFBIZ-9290))
- Removes unused private ‘UnsupportedClassConverter’ class. ([OFBIZ-10908](https://issues.apache.org/jira/browse/OFBIZ-10908))
- Removes redundant null checks. ([OFBIZ-10911](https://issues.apache.org/jira/browse/OFBIZ-10911))
- Removes ‘CreateTableCallable’ private class. ([OFBIZ-10912](https://issues.apache.org/jira/browse/OFBIZ-10912))
- Adds try-with-resources with File IO Objects. ([OFBIZ-9855](https://issues.apache.org/jira/browse/OFBIZ-9855))
- Adds french label for CommonImport and CommonImportExport. ([r1857335](http://svn.apache.org/viewvc?view=revision&revision=1857335))
- Improves ObjectInputStream class. ([OFBIZ-10837](https://issues.apache.org/jira/browse/OFBIZ-10837))
- Removes ecommerce links from applications. ([OFBIZ-9241](https://issues.apache.org/jira/browse/OFBIZ-9241))
- Converts createMarketingCampaignRole service to entity-auto service. ([OFBIZ-9551](https://issues.apache.org/jira/browse/OFBIZ-9551))
- Adds missing permission check for MarketingCampaignRole update/expire/delete service. ([r1857547](https://svn.apache.org/viewvc?view=revision&revision=1857547))
- Updates build.gradle to the latest dependencies. ([OFBIZ-10213](https://issues.apache.org/jira/browse/OFBIZ-10213))
- Refactors DBCPConnectionFactory. Method setAutoCommitOnReturn is used instead of deprecated method setEnableAutoCommitOnReturn. ([OFBIZ-10935](https://issues.apache.org/jira/browse/OFBIZ-10935))
- Removes in constructor redundant specification of type arguments. ([OFBIZ-10937](https://issues.apache.org/jira/browse/OFBIZ-10937))
- Removes unnecessary declared exceptions for ‘ContainerException’. ([OFBIZ-10938](https://issues.apache.org/jira/browse/OFBIZ-10938))
- Improves Check Map equality in ‘MultivaluedMapContextTests’. ([r1857958](https://svn.apache.org/viewvc?view=revision&revision=1857958))
- Improves the use of ‘contains’ and ‘containsInAnyOrder’ matcher when possible. ([OFBIZ-10941](https://issues.apache.org/jira/browse/OFBIZ-10941))
- Removes unnecessary semicolons from Java code. ([OFBIZ-10936](https://issues.apache.org/jira/browse/OFBIZ-10936))
- Adds ability to change ship group destinations on order view page. ([OFBIZ-5401](https://issues.apache.org/jira/browse/OFBIZ-5401))
- Uses ObjectType.simpleTypeConvert for all amount variables to make sure proper type conversion in PaymentGatewayServices.java. ([OFBIZ-10811](https://issues.apache.org/jira/browse/OFBIZ-10811))
- Improves order of showing glAccountIds in AddFinAccountTrans based on accountCode instead of glAccountId. ([OFBIZ-10846](https://issues.apache.org/jira/browse/OFBIZ-10846))
- Improves the appear of submit button. It will not be displaing when there is no item present over Quote Prices Screen. ([OFBIZ-10627](https://issues.apache.org/jira/browse/OFBIZ-10627))
- Improves barcode generation. Uses code128 instead of code39. ([OFBIZ-10896](https://issues.apache.org/jira/browse/OFBIZ-10896))
- Adds unit test case for service 'createInvoiceContent'. ([OFBIZ-8932](https://issues.apache.org/jira/browse/OFBIZ-8932))
- Improves marital status in Person entity. Now there are more selectable values than 'Y' and 'N'. ([OFBIZ-10921](https://issues.apache.org/jira/browse/OFBIZ-10921))
- Adds unit test case for service 'setPaymentStatus'. ([OFBIZ-9084](https://issues.apache.org/jira/browse/OFBIZ-9084))
- Adds support for Inventory (Supply) Allocation Planning. ([OFBIZ-10518](https://issues.apache.org/jira/browse/OFBIZ-10518))
- Adds unit test case for service 'quickSendPayment'. ([OFBIZ-9086](https://issues.apache.org/jira/browse/OFBIZ-9086))
- Uses &quot;Create&quot; instead of &quot;Create New&quot; on various screens of all components. ([OFBIZ-9905](https://issues.apache.org/jira/browse/OFBIZ-9905))
- Removes unused imports. ([r1857897](https://svn.apache.org/viewvc?view=revision&revision=1857897))
- Removes unused local variables. ([r1858293](https://svn.apache.org/viewvc?view=revision&revision=1858293))
- Removes redundant specification of type arguments. ([r1858294](https://svn.apache.org/viewvc?view=revision&revision=1858294))
- Improves the use of ‘@Override’ annotation. ([OFBIZ-10939](https://issues.apache.org/jira/browse/OFBIZ-10939))
- Adds date control to 'Product Configuration Options'. ([OFBIZ-10950](https://issues.apache.org/jira/browse/OFBIZ-10950))
- Moves display of page title 'Party' accounting screens to location above (action) menu(s). ([OFBIZ-10949](https://issues.apache.org/jira/browse/OFBIZ-10949))
- Improves the view of 'createPriceCond'. Similar values were reflected twice on Add Action Type dropdown in Pricerule. ([OFBIZ-10660](https://issues.apache.org/jira/browse/OFBIZ-10660))
- Improves financial account container structure in accounting. ([OFBIZ-10813](https://issues.apache.org/jira/browse/OFBIZ-10813))
- Improves german translations for the hr component. ([OFBIZ-10698](https://issues.apache.org/jira/browse/OFBIZ-10698))
- Removes unused type parameters. ([OFBIZ-10909](https://issues.apache.org/jira/browse/OFBIZ-10909))
- Removes unused ‘java.util.TreeMap’ import. ([r1857083](https://svn.apache.org/viewvc?view=revision&revision=1857083))
- Removes redundant interface declaration. ([OFBIZ-10910](https://issues.apache.org/jira/browse/OFBIZ-10910))
- Adds converter for StringWrapper and StringBuffer. ([OFBIZ-5028](https://issues.apache.org/jira/browse/OFBIZ-5028))
- Cleans deprecated code after release 18.12 creation. ([OFBIZ-10761](https://issues.apache.org/jira/browse/OFBIZ-10761))
- Updates Tomcat to 9.0.18 due to CVE-2019-0232. ([OFBIZ-10920](https://issues.apache.org/jira/browse/OFBIZ-10920))
- Updates an order linked to an other order lost relation applications/order/. ([OFBIZ-10926](https://issues.apache.org/jira/browse/OFBIZ-10926))

### Plugins

- Removes unnecessary semicolons from Java code. ([OFBIZ-10936](https://issues.apache.org/jira/browse/OFBIZ-10936))
- Improves barcode generation. Uses code128 instead of code39. ([OFBIZ-10896](https://issues.apache.org/jira/browse/OFBIZ-10896))
- Renames custom component for SMS gateway integration. ([OFBIZ-10973](https://issues.apache.org/jira/browse/OFBIZ-10973))
- Updates Tomcat to 9.0.18 due to CVE-2019-0232. ([OFBIZ-10920](https://issues.apache.org/jira/browse/OFBIZ-10920))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: Insertion order of ‘LinkedHashMap’ is not preserved by ‘MapContext’. ([OFBIZ-10933](https://issues.apache.org/jira/browse/OFBIZ-10933))
- Fixes: When adding an item to shopping cart, orderItemAttributes gets lost. ([OFBIZ-10906](https://issues.apache.org/jira/browse/OFBIZ-10906))
- Removes Raw type cast warning in ‘ObjectType’. ([r1857082](https://svn.apache.org/viewvc?view=revision&revision=1857082))
- Fixes: Terminal automatically scrolls down on never ending tasks with the new console. ([OFBIZ-10915](https://issues.apache.org/jira/browse/OFBIZ-10915))
- Fixes: Error message is displayed while click on create new quotes. ([OFBIZ-10882](https://issues.apache.org/jira/browse/OFBIZ-10882))
- Fixes: Quick Add button for shopping list on Orderentry screen is not working. ([OFBIZ-9908](https://issues.apache.org/jira/browse/OFBIZ-9908))
- Fixes: Temporal expressions sometimes incorrectly calculate next occurrence. ([OFBIZ-10875](https://issues.apache.org/jira/browse/OFBIZ-10875))
- Fixes: ‘./gradlew generateOfbizDocumentation’ fails with Gradle 5.0. ([OFBIZ-10693](https://issues.apache.org/jira/browse/OFBIZ-10693))
- Fixes: Escape potential NPE when call by DataEvents.serverImage by mocked request. ([r1857456](https://svn.apache.org/viewvc?view=revision&revision=1857456))
- Fixes: Wrong permission check in ProductScreens#FindProduct. ([OFBIZ-10925](https://issues.apache.org/jira/browse/OFBIZ-10925))
- Fixes: Duplicate a ShoppingCartItem didn't propage OrderItemAttributes. ([OFBIZ-10929](https://issues.apache.org/jira/browse/OFBIZ-10929))
- Stores can now modified at ofbizsetup/control/updateProductStore. ([OFBIZ-10930](https://issues.apache.org/jira/browse/OFBIZ-10930))
- Fixes: Updating an OrderItem loses supplierProductId. ([OFBIZ-10932](https://issues.apache.org/jira/browse/OFBIZ-10932))
- Fixes: If the picklist cancelation process failed, the picklist item shouldn't be marked as cancel. ([OFBIZ-4690](https://issues.apache.org/jira/browse/OFBIZ-4690))
- Fixes: User depersonation do not clean out impersonated user session. ([OFBIZ-10942](https://issues.apache.org/jira/browse/OFBIZ-10942))
- Fixes: Parameters are not available to the next response type when form of enctype=multipart/form-data type is submitted. ([OFBIZ-10833](https://issues.apache.org/jira/browse/OFBIZ-10833))
- Fixes: Customer Party getting set as 'organizationPartyId' in one the Account transaction for Customer return invoice. ([OFBIZ-10856](https://issues.apache.org/jira/browse/OFBIZ-10856))
- Fixes: Unable to add survey product to cart in order entry form. ([OFBIZ-10735](https://issues.apache.org/jira/browse/OFBIZ-10735))
- Fixes: Poor display of entities in text input field for Product Name. ([OFBIZ-10356](https://issues.apache.org/jira/browse/OFBIZ-10356))
- Fixes: createProductFeature service ignors passed productFeatureId parameter. ([OFBIZ-10958](https://issues.apache.org/jira/browse/OFBIZ-10958))
- Fixes: Failed registration for virtual hosts with similar mount points. ([OFBIZ-10765](https://issues.apache.org/jira/browse/OFBIZ-10765))
- Fixes: OWASP sanitizer breaks proper rendering of HTML code. ([OFBIZ-10187](https://issues.apache.org/jira/browse/OFBIZ-10187))

### Plugins

- Fixes: Amount field is editable at Product Detail Page. ([OFBIZ-10663](https://issues.apache.org/jira/browse/OFBIZ-10663))
- Fixes: UI issue on ecommerce main page. ([OFBIZ-10849](https://issues.apache.org/jira/browse/OFBIZ-10849))
- Fixes: Error message is displayed in shopping cart when click on recalculate cart link. ([OFBIZ-10852](https://issues.apache.org/jira/browse/OFBIZ-10852))
- Fixes: Unable to create new quote from cart at eCommerce store. ([OFBIZ-10886](https://issues.apache.org/jira/browse/OFBIZ-10886))
- Fixes: Error message is displayed while click on create new quotes. ([OFBIZ-10882](https://issues.apache.org/jira/browse/OFBIZ-10882))
- Ensures html verbosity is following general setup. ([OFBIZ-10940](https://issues.apache.org/jira/browse/OFBIZ-10940))
- Fixes: Can't set (expected) start and end date of project when creating a project. ([OFBIZ-10927](https://issues.apache.org/jira/browse/OFBIZ-10927))
- Fixes: FindTask does not allow for all statuses possible to be selected. ([OFBIZ-10913](https://issues.apache.org/jira/browse/OFBIZ-10913))
- Fixes: Shortkeys missing on WebPOS. ([OFBIZ-10961](https://issues.apache.org/jira/browse/OFBIZ-10961))
- Fixes: Remove link is not working in shopping list. ([OFBIZ-10967](https://issues.apache.org/jira/browse/OFBIZ-10967))

## Documentation

### Framework

- Adds adoptopenjdk links to README.adoc. ([OFBIZ-10757](https://issues.apache.org/jira/browse/OFBIZ-10757))
