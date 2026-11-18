---
layout: post
title: Apache OFBiz News - November 2018
date: '2019-01-30T09:35:29+00:00'
permalink: apache-ofbiz-news-november-2018
---
## Apache OFBiz News November 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about new SMS gateway integration feature for OFBiz as well as our usual list of features and improvements.

## Short Messaging Service (SMS) Gateway Integration

One of our contributor Pritam Kute has proposed Short Messaging Service (SMS) Gateway Integration for OFBiz.<br>Nowadays many e-commerce businesses (especially operating in Asian countries) use short messaging service (SMS) in mobile phones to notify and update customers about order details, shipment statuses etc.

If you would like to try the SMS gateway integration feature, it is available here:&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10457" title="Short Messaging Service (SMS) Gateway Integration">OFBIZ-10457</a><br>

Thanks very much to Pritam and everyone who contributed to this feature implementation.&nbsp;<br>

## New features and improvements

Functional enhancements and improvements as well as updates of third-party libraries and source code refactoring:

### Framework

- Navigates from a domain to another with automated signed in authentication ([OFBIZ-10307](https://issues.apache.org/jira/browse/OFBIZ-10307))
- Introduces the ability to clear specific cache from cache maintenance ([OFBIZ-10402](https://issues.apache.org/jira/browse/OFBIZ-10402))
- Adds the ability to schedule a job to run as a system/service user ([OFBIZ-9557](https://issues.apache.org/jira/browse/OFBIZ-9557))
- Removes deprecated and not used PhoneNumber functions ([OFBIZ-10631](https://issues.apache.org/jira/browse/OFBIZ-10631))
- Removes unused code related to rememberMe ([svn Commit: r590554](https://markmail.org/message/dmqqxse65inh6amr))
- Removes IDEAL specifics from the Accounting component([OFBIZ-5444](https://issues.apache.org/jira/browse/OFBIZ-5444))
- Ads the ability to write unit tests in Groovy ([OFBIZ-10611](https://issues.apache.org/jira/browse/OFBIZ-10611))
- Cleans some Groovy files in base component ([OFBIZ-10646](https://issues.apache.org/jira/browse/OFBIZ-10646))
- Substitute of ad-hoc boolean enumeration with XML standard boolean datatype ([OFBIZ-10411](https://issues.apache.org/jira/browse/OFBIZ-10411))
- Simplificates the service callback handling ([OFBIZ-10649](https://issues.apache.org/jira/browse/OFBIZ-10649))
- Removes ControlServlet::getRequestHandler method ([OFBIZ-10445](https://issues.apache.org/jira/browse/OFBIZ-10445))
- Overrides ‘GenericServlet::init’ instead of ‘Servlet::init’ ([OFBIZ-10446](https://issues.apache.org/jira/browse/OFBIZ-10446))
- Removes useless ControlServlet code ([OFBIZ-10447](https://issues.apache.org/jira/browse/OFBIZ-10447))
- Uses ‘String#equalsIgnoreCase’ in ‘RequestHandler#doRequest’ ([OFBIZ-10451](https://issues.apache.org/jira/browse/OFBIZ-10451))
- Creates a Gradle task to generate the documenation for all plugins ([OFBIZ-10651](https://issues.apache.org/jira/browse/OFBIZ-10651))
- Removes duplicated code when running login/logout events ([OFBIZ-10474](https://issues.apache.org/jira/browse/OFBIZ-10474))
- Updates build.gradle to the latest dependencies ([OFBIZ-10214](https://issues.apache.org/jira/browse/OFBIZ-10214))
- Migrates from minilang to entity-auto createQuoteWorkEffort et deleteQuoteWorkEffort. ([OFBIZ-10553](https://issues.apache.org/jira/browse/OFBIZ-10553))
- Adds data for 'ORDERMGR\_CRQ\_ADMIN' permissionId. ([OFBIZ-10574](https://issues.apache.org/jira/browse/OFBIZ-10574))
- Adds the ability to use multi part input parameters in Groovy events ([OFBIZ-5048](https://issues.apache.org/jira/browse/OFBIZ-5048))

### Plugins

- Removes IDEAL related code from the ecommerce component ([OFBIZ-5445](https://issues.apache.org/jira/browse/OFBIZ-5445))
- Updates build.gradle to the latest dependencies ([OFBIZ-10214](https://issues.apache.org/jira/browse/OFBIZ-10214))
- Removes some unused commented code ([OFBIZ-10482](https://issues.apache.org/jira/browse/OFBIZ-10482))
- Fixes checkbox and radio buttons located in ecommerce FTLs ([OFBIZ-7670](https://issues.apache.org/jira/browse/OFBIZ-7670))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Missing Security and Cache Headers in CMS Events Fixed ([OFBIZ-10597](https://issues.apache.org/jira/browse/OFBIZ-10597))
- ComponentConfig::getAppBarWebInfos creates infos only for components without &lt;&lt;app-bar-display=&quot;false&quot;&gt;&gt; ([OFBIZ-10637](https://issues.apache.org/jira/browse/OFBIZ-10637))
- Corrects behaviour of Autologin cookies ([OFBIZ-10635](https://issues.apache.org/jira/browse/OFBIZ-10635))
- Error in GetLocaleListTests.java on updated trunk while running unit tests([OFBIZ-10641](https://issues.apache.org/jira/browse/OFBIZ-10641))
- Stores can't be modified at catalog/control/updateProductStore ([OFBIZ-10567](https://issues.apache.org/jira/browse/OFBIZ-10567))
- CatalogServices #createProductCategoryAttribute doesn't check for existing attributes ([OFBIZ-10327](https://issues.apache.org/jira/browse/OFBIZ-10327))
- CatalogServices #duplicateProductCategory doesn't check for existing categories ([OFBIZ-10328](https://issues.apache.org/jira/browse/OFBIZ-10328))
- Content - Able to add empty Forum Group ([OFBIZ-10615](https://issues.apache.org/jira/browse/OFBIZ-10615))
- Manufacturing BOM search returning duplicate entries in search results ([OFBIZ-10648](https://issues.apache.org/jira/browse/OFBIZ-10648))
- Typo in shipmentTypeId. It should be INCOMING\_SHIPMENT instead of INGOING\_SHIPMENT. ([OFBIZ-6958](https://issues.apache.org/jira/browse/OFBIZ-6958))
- Force complete purchase order button throws error ([OFBIZ-9912](https://issues.apache.org/jira/browse/OFBIZ-9912))
- Update Contact Mech ID with Billing Account not working. ([OFBIZ-10315](https://issues.apache.org/jira/browse/OFBIZ-10315))
- Instructions for Configurable PC don't work in R16, R17 and trunk([OFBIZ-10542](https://issues.apache.org/jira/browse/OFBIZ-10542))
- Mime Type not supported Error while generating a Composite Pdf ([OFBIZ-9840](https://issues.apache.org/jira/browse/OFBIZ-9840))
- Tax not added for order shipping or promotion ([OFBIZ-4160](https://issues.apache.org/jira/browse/OFBIZ-4160))
- Update and fix openstreetmap.org integration. ([OFBIZ-10553](https://issues.apache.org/jira/browse/OFBIZ-10553))

### Plugins

- Fixes behaviour of Autologin cookies ([OFBIZ-10635](https://issues.apache.org/jira/browse/OFBIZ-10635))
- Seperates Asciidoc documentation of plugnins ([OFBIZ-10658](https://issues.apache.org/jira/browse/OFBIZ-10658))
- Fixes: Quote list is not showing on ecommerce ([OFBIZ-10628](https://issues.apache.org/jira/browse/OFBIZ-10628))
- Fixes: Error message is displayed on ecommerce when user tries to use Split shipment functionality ([OFBIZ-10623](https://issues.apache.org/jira/browse/OFBIZ-10623))
- Fixes: Instructions for Configurable PC don't work ([OFBIZ-10542](https://issues.apache.org/jira/browse/OFBIZ-10542))
- Fixes: User should be redirected to view cart page after adding the product from compare product screen ([OFBIZ-10667](https://issues.apache.org/jira/browse/OFBIZ-10667))
- Updates and fixes openstreetmap.org integration ([OFBIZ-10553](https://issues.apache.org/jira/browse/OFBIZ-10553))

## Documentation

### Framework

- Renames the security doc dir to docs as requested by documentation guidelines Includes webapp.adoc in developer-manual.adoc
- Formats too long lines in wa-cross-domains-SSO.adoc Fixes references in bt-creating reports.adoc
- Fixes levels, I did not get that AsciiDoctor is handling that automatically
- Fixes security-impersonation.adoc file name to sy-impersonation.adoc

<he>Plugins</he>

- Convert Birt component doc from Markdown to AsciiDoc ([OFBIZ-10647](https://issues.apache.org/jira/browse/OFBIZ-10647))
- Formats too long lines in wa-cross-domains-SSO.adoc Fixes references in bt-creating reports.adoc
- Fixes: Standalone Asciidoc plugins documents can't render logo correctly in PDF ([OFBIZ-10677](https://issues.apache.org/jira/browse/OFBIZ-10677))
