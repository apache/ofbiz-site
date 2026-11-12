---
layout: post
title: 'Apache OFBiz News - May 2018 '
date: '2018-07-07T10:11:48+00:00'
permalink: apache-ofbiz-news-may-2018
---
## Apache OFBiz News May 2018

Welcome to our regular monthly round-up of OFBiz news. This month we have news about improving the OFBiz user interface (UI) using Bootstrap and Vue.js and we discuss how to make the OFBiz accounting module more configurable.

<!--more-->

## Bootstrap and Vue.js

Early in the month a discussion was started on our development mailing about the <a href="https://s.apache.org/RG0j" target="_blank" rel="noopener">introduction of Bootstrap and Vue.js</a>. The OFBiz user interface works well, but can sometime seem a little old fashioned. The proposal was to make use of these technologies to improve the look and feel of the OFBiz. After a detailed discussion the consensus was to to implement Bootstrap and delay Vue.js until we have worked on producing a Web Services API.

Thanks to Taher Alkhateeb for starting the discussion and to everyone who participated and shared their experiences.

## Making Accounting Configurable

Another discussion happening this month was related to the OFBiz accounting module and was a <a href="https://s.apache.org/wgWw" target="_blank" rel="noopener">proposal to make accounting configurable</a>. Not everyone wants to implement or use OFBiz accounting so this proposal was looking at ways to disable accounting for users that don't want to use it. After a discussion, the general consensus was that this was something that would be useful.

Thanks to Aman Agrawal for the proposal and patch. This has now been implemented under <a href="https://issues.apache.org/jira/browse/OFBIZ-10391" target="_blank" rel="noopener">OFBIZ-10391.</a>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Introduce a quick way for adding Sales Price agreements with customers for any specific product from Catalog. From date is now defaulting to now timestamp improvement suggested in verification. ([OFBIZ-7713](https://issues.apache.org/jira/browse/OFBIZ-7713))
- Added missing condition-service in entity-eca.xsd file ([OFBIZ-10220](https://issues.apache.org/jira/browse/OFBIZ-10220))
- Added section for HR process descriptions ([OFBIZ-10256](https://issues.apache.org/jira/browse/OFBIZ-10256))
- Check for QOH while doing reservations. Change the codition to check ATP instead of QOH. As ATP will be always lesser than QOH, will improved performance with no impact on the reservation logic. ([OFBIZ-10337](https://issues.apache.org/jira/browse/OFBIZ-10337))
- Convert Requirement related services from simple to entity-auto ([OFBIZ-10395](https://issues.apache.org/jira/browse/OFBIZ-10395))
- Migrate createContent service from Minilang to Entity Auto ([OFBIZ-10401](https://issues.apache.org/jira/browse/OFBIZ-10401))
- Migrate product promotion condition and action rule on SOA ([OFBIZ-10370](https://issues.apache.org/jira/browse/OFBIZ-10370))
- XML schemas should use predefined boolean type ([OFBIZ-10411](https://issues.apache.org/jira/browse/OFBIZ-10411))
- adds a missing ASL2 header. It could be that we don't want one there but then I let Michael decide and put a line in the RAT exclude file. I finally did because I thought that maybe this file will be enhanced
- Secure HTTP headers,avoid caching in proxy. ([OFBIZ-6766](https://issues.apache.org/jira/browse/OFBIZ-6766))
- Generic message from entity-auto service can be enhanced. For example ProductStoreFacility Updated Successfully, we can have better success message as Product Store Facility Updated Successfully. ([OFBIZ-10409](https://issues.apache.org/jira/browse/OFBIZ-10409))
- Empty header row should not render if list to render in file is empty ([OFBIZ-7598](https://issues.apache.org/jira/browse/OFBIZ-7598))
- New documentation for EntitySync ([OFBIZ-10390](https://issues.apache.org/jira/browse/OFBIZ-10390))
- Corrected some minor spelling mistakes and modified a few sentences ([OFBIZ-10306](https://issues.apache.org/jira/browse/OFBIZ-10306))
- Remove createContent Java service implementation ([OFBIZ-10393](https://issues.apache.org/jira/browse/OFBIZ-10393))
- Remove unused code from ContentServices class file ([OFBIZ-10397](https://issues.apache.org/jira/browse/OFBIZ-10397))
- Remove \`UtilValidate::isEmpty(String)\` method ([OFBIZ-10412](https://issues.apache.org/jira/browse/OFBIZ-10412))
- Remove Entity suffix from title of all entities. In all EntityModel.xml files, title should not contain Entity as suffix. ([OFBIZ-10408](https://issues.apache.org/jira/browse/OFBIZ-10408))
- Replace deleteRequirement service by entity-auto ([OFBIZ-10400](https://issues.apache.org/jira/browse/OFBIZ-10400))
- Replace Inline js with External js in renderFormClose macro ([OFBIZ-9846](https://issues.apache.org/jira/browse/OFBIZ-9846))
- Refactor \`JavaEventHandler\` class ([OFBIZ-10410](https://issues.apache.org/jira/browse/OFBIZ-10410))
- Upgraded to latest Tomcat (9.0.7). ([OFBIZ-10036](https://issues.apache.org/jira/browse/OFBIZ-10036))
- Update DBCP to 2.3.0 (minor release) ([OFBIZ-10404](https://issues.apache.org/jira/browse/OFBIZ-10404))

&nbsp;

### Plugins

- Upgraded to latest Tomcat (9.0.7), Updated tomcat embed websocket jar to 9.0.7 ([OFBIZ-10036](https://issues.apache.org/jira/browse/OFBIZ-10036))
- Update Solr and Lucene from 7.2.1 to Solr 7.3.1 for security reason (CVE-2018-8010) ([OFBIZ-10415](https://issues.apache.org/jira/browse/OFBIZ-10415))

&nbsp;

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fix typo 'paramters' =&gt; 'parameters' ([OFBIZ-10394](https://issues.apache.org/jira/browse/OFBIZ-10394))
- The "request" attribute type of the userLogin service is wrong ([OFBIZ-10304](https://issues.apache.org/jira/browse/OFBIZ-10304)) Now that we use Tomcat 9 this problem is over
- Existing BILLING\_LOCATION record of party should expire while creating a new one. Now service will first expires all the billing location against party and create new one. ([OFBIZ-10374](https://issues.apache.org/jira/browse/OFBIZ-10374))
- Sending mail button from viewProfile doesn't work ([OFBIZ-7075](https://issues.apache.org/jira/browse/OFBIZ-7075))
- Removed unnecessary class and folders.
- Wrong permission action leads to error ([OFBIZ-10405](https://issues.apache.org/jira/browse/OFBIZ-10405))
- bugs with asciidoctor PDF generation in Windows ([OFBIZ-9873](https://issues.apache.org/jira/browse/OFBIZ-9873))
- Dynamic values not rendering properly in property tag of fail-property attribute ([OFBIZ-10406](https://issues.apache.org/jira/browse/OFBIZ-10406))
- Escape NullPointerException with test ProductPromo.testProductShipCharge ([OFBIZ-10370](https://issues.apache.org/jira/browse/OFBIZ-10370))

## Documentation

- New documentation for EntitySync ([OFBIZ-10390](https://issues.apache.org/jira/browse/OFBIZ-10390))
