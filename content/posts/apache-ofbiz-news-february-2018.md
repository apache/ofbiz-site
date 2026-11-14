---
layout: post
title: 'Apache OFBiz News - February 2018 '
date: '2018-03-07T14:04:40+00:00'
permalink: apache-ofbiz-news-february-2018
---
## Apache OFBiz News February 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have news about our new OFBiz documentation framework, we recruit a team of OFBIz volunteers to help with documentation and we look a some of our community metrics.

<!--more-->

## OFBiz Documentation Framework

Last month we mentioned the discussions that were happening around the proposal for an OFBiz Documentation Framework, The framework would be used to allow us to include OFBiz documentation within the codebase. This would mean that each version of OFBiz would contain its own complete documentation. During this month, an actual <a href="https://issues.apache.org/jira/browse/OFBIZ-9873" target="_blank" rel="noopener">Proof of Concept (POC) for the framework</a> was created by Taher Alkhateeb.

Some tests have already been carried out using the PoC and feedback from the community has been positive. The next step is to look at <a href="https://s.apache.org/x8nM" target="_blank" rel="noopener">moving the code into the OFBiz trunk.</a>

Thanks very much to Taher for his work and to all those who have helped so far with feedback and testing. It is expected that the framework will evolve over time, so the more people that understand how it works, the better. So if you would like to help out with the work involved in the Documentation Framework then please send a message to our development mailing list.

## OFBiz Documentation Team

During this month in preparation for the implementation of a documentation framework in OFBiz, we made a <a href="https://s.apache.org/FfRF" target="_blank" rel="noopener">request for volunteers from the community</a> to become part of a documentation team that would be responsible for working on completing the documentation.

We had over 15 responses which shows that our community think that documentation is important. A <a href="https://s.apache.org/Rnfa" target="_blank" rel="noopener">Documentation Team wiki page</a> has been setup to help plan and co-ordinate the work. To kickstart the work for the Documentation Team, an initial call was setup to give the everyone some background and an introduction to the project. It was also used to create some action points for the next steps. Notes from the call are available on the wiki at the following link

- <a href="https://s.apache.org/R6ft" target="_blank" rel="noopener">Documentation Team Call Notes</a>

If you are interested in helping with documentation or being part of the documentation team then please send a message to our user or development mailing lists.

The next steps will be to define the roles and processes to follow, as well as organising as creating a first example document that the team can use as a reference.

## OFBiz Statistics - February

Last month we mentioned that OFBiz is tracking some community statistics using Apache Kibble, so we have highlighted a few of our stats for the last month:

- **JIRA Issue Tracker:** 55 issues were opened and 45 issues were closed (11 different people helped to close these issues)
- **Code Change and Commit Activity:** 114 commits to the codebase that changed 35,994 lines of code (10 committers were active)
- **Mailing Lists:** 372 emails sent and 92 topics discussed on the mailing lists (67 different people)

It is great to see OFBiz community active and also continue to attract new contributors.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Token based Authentication ([OFBIZ-9833](https://issues.apache.org/jira/browse/OFBIZ-9833))
- Set security object on groovy context ([OFBIZ-10196](https://issues.apache.org/jira/browse/OFBIZ-10196)) In a groovy service to call the security object you need to do : Security security = dispatcher.dispatchContext.security
- Convert CategoryServices.xml from mini lang to groovy ([OFBIZ-10031](https://issues.apache.org/jira/browse/OFBIZ-10031))
- Convert CommonPermissionServices.xml from mini lang to groovy ([OFBIZ-9993](https://issues.apache.org/jira/browse/OFBIZ-9993))
- Remove of loadBestSellingCategory and all related methods in CategoryServices.xml ([OFBIZ-10146](https://issues.apache.org/jira/browse/OFBIZ-10146))
- Move all data in applications to the data model component, move demo data from some components to datamodel component and remove unused files as no data in it([OFBIZ-9501](https://issues.apache.org/jira/browse/OFBIZ-9501))
- Security issue in Token Based Authentication ([OFBIZ-10206](https://issues.apache.org/jira/browse/OFBIZ-10206)) Update the security.properties content related to JWT.
- Add seqId to GlAccountClass table to support the sorting of GLAccount sub classes ([OFBIZ-10209](https://issues.apache.org/jira/browse/OFBIZ-10209))
- Replace BigDecimal.ROUND\_\* by RoundingMode.\* ([OFBIZ-9571](https://issues.apache.org/jira/browse/OFBIZ-9571))
- Replace all "BigDecimal ZERO" by BigDecimal.ZERO ([OFBIZ-9572](https://issues.apache.org/jira/browse/OFBIZ-9572))
- General refactoring and code improvements for package org.apache.ofbiz.product.category.ftl ([OFBIZ-10138](https://issues.apache.org/jira/browse/OFBIZ-10138))
- Add CustomScreen entity copy from CustomMethod pattern, add PartyPrefDocTypeTpl entity to link official template document to organisational party ([OFBIZ-10186](https://issues.apache.org/jira/browse/OFBIZ-10186))
- Use Tomcat default ciphers ([OFBIZ-10223](https://issues.apache.org/jira/browse/OFBIZ-10223))
- Fix default or empty catch block in Java and Groovy files ([OFBIZ-8341](https://issues.apache.org/jira/browse/OFBIZ-8341))
- Show title information on Entity Data Maintenance page ([OFBIZ-10207](https://issues.apache.org/jira/browse/OFBIZ-10207))
- Use agreement on drop shipment process ([OFBIZ-10227](https://issues.apache.org/jira/browse/OFBIZ-10227)) Extend the drop shipment process to manage an agreement for the supplier related to the order context.
- Introduce support for condition-service tags for entity eca's ([OFBIZ-10220](https://issues.apache.org/jira/browse/OFBIZ-10220))
- In 'ValidateMethod.java', don't pass any className from xml files ([OFBIZ-9969](https://issues.apache.org/jira/browse/OFBIZ-9969))
- Improve all the service level error messages for missing required field for workeffort component ([OFBIZ-7738](https://issues.apache.org/jira/browse/OFBIZ-7738))
- Update regex for validating credit cards ([OFBIZ-9761](https://issues.apache.org/jira/browse/OFBIZ-9761))
- Improve layout and structure of forms ([OFBIZ-10221](https://issues.apache.org/jira/browse/OFBIZ-10221))
- Convert createContactList service from simple to entity-auto ([OFBIZ-9585](https://issues.apache.org/jira/browse/OFBIZ-9585))
- Resolve invoiceItem description from InvoiceWorker ([OFBIZ-10240](https://issues.apache.org/jira/browse/OFBIZ-10240))
- Add the ability in performFind service to set OR search criteria ([OFBIZ-10195](https://issues.apache.org/jira/browse/OFBIZ-10195))

### Plugins

- Fix UI issue for error messages ([OFBIZ-10185](https://issues.apache.org/jira/browse/OFBIZ-10185))
- Update markup of various product pages according to standard markup given by Bootstrap v4.0.0 ([OFBIZ-10160](https://issues.apache.org/jira/browse/OFBIZ-10160))
- UI improvement on various pages 1) Improvement of various button UI 2) Improvement in layout at some screens 3) Alignment issues of some card-header
- Do some markup cleanup, remove some unused html tag, add css rule to set padding=0 ([OFBIZ-9760](https://issues.apache.org/jira/browse/OFBIZ-9760))
- Add examples for call\_fieldlookup3 ([OFBIZ-10012](https://issues.apache.org/jira/browse/OFBIZ-10012))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Security issue in Token Based Authentication ([OFBIZ-10206](https://issues.apache.org/jira/browse/OFBIZ-10206))
- Rename the common-theme component directory ([OFBIZ-10175](https://issues.apache.org/jira/browse/OFBIZ-10175))
- UtilNumber.getBigDecimalRoundingMode() returns a wrong value ([OFBIZ-10218](https://issues.apache.org/jira/browse/OFBIZ-10218))
- Fix default or empty catch block in java and groovy files ([OFBIZ-8341](https://issues.apache.org/jira/browse/OFBIZ-8341))
- Access the online help in Rainbow themes ([OFBIZ-10222](https://issues.apache.org/jira/browse/OFBIZ-10222))
- The invoiceTaxTotal value is missing from createAcctgTransForPurchaseInvoice service ([OFBIZ-6330](https://issues.apache.org/jira/browse/OFBIZ-6330))
- Logout do not remove autoLogin ([OFBIZ-4959](https://issues.apache.org/jira/browse/OFBIZ-4959))
- Survey response data lost on loadCartFromOrder service. ([OFBIZ-10232](https://issues.apache.org/jira/browse/OFBIZ-10232))
- Alert message : "Developer: for lookups to work you must provide a form name!" appears when try to select contentId from lookup ([OFBIZ-10012](https://issues.apache.org/jira/browse/OFBIZ-10012))
- Incorrect Party profile view redirection in SFA due to missing roleType ([OFBIZ-10121](https://issues.apache.org/jira/browse/OFBIZ-10121))
- Unable to create inventory item label. ([OFBIZ-10015](https://issues.apache.org/jira/browse/OFBIZ-10015))
- Fix french typo ([OFBIZ-10244](https://issues.apache.org/jira/browse/OFBIZ-10244))
- Error in service definition for deleteOrderHeaderWorkEffort ([OFBIZ-10243](https://issues.apache.org/jira/browse/OFBIZ-10243))

### Plugins

- Logout do not remove autoLogin ([OFBIZ-4959](https://issues.apache.org/jira/browse/OFBIZ-4959))
- Change org.ofbiz package to org.apache.ofbiz in missing files ([OFBIZ-10235](https://issues.apache.org/jira/browse/OFBIZ-10235))
-
