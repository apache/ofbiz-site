---
layout: post
title: Apache OFBiz News - January 2016
date: '2016-02-08T13:35:47+00:00'
permalink: apache_ofbiz_news_january_2016
---
## Apache OFBiz News January 2016

Happy New Year!

<p></p>

We have a double set of news this month covering both December and January, including our Apache birthday, details about our Community Day, FOSDEM and the very sad news of the death of Adrian Crum, a key member of our community.

<!--more-->

## Happy Birthday Apache OFBiz !

In December OFBiz celebrated it's 9th Apache birthday.

<p></p>

On 20th December 2006, OFBiz graduated from incubation and became an Apache Top Level Project. Since then the project has continued to grow and develop. The project now has 30 committers and very active mailing lists for users and developers.Over the 9 years the project has released a range of OFBiz versions from versions 4.0 through to 13.07 and is currently preparing for the next release.

## December Community Day

Our final Community Day for 2015 was held on 19th December. Although close to the festive season, community members still gave up some of their time to collaborate and work on the project. The key tasks were working through the list of task we have open on Jira and applying previously submitted patches. A big thank you goes out to all those who partcipated and a total 13 issues were closed.

<p></p>

Our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">Community Days</a>  have been very popular so we have decided to continue them for 2016. Dates have been set as :

<p></p>

Q1 - Saturday 19th March 2016

<p></p>

Q2 - Saturday 18th June 2016

<p></p>

Q3 - Saturday 17th September 2016

<p></p>

Q4 - Saturday 17th December 2016

<p></p>

Please add them to your diary if you are interested in participating.

## Adrian Crum

On 1st January 2016, OFBiz Committer and ex PMC member  <a href="http://www.apache.org/memorials/adrian_crum.html">Adrian Crum</a> passed away. His loss is strongly felt within the community and we have had many messages of sympathy and support.

<p></p>

Adrian joined the OFBiz project during the incubation phase and in 2007 was invited to become a committer. Later that year Adrian joined the OFBiz PMC and participated until June 2014. Over the years Adrian contributed around 5,000 postings to the mailing lists, over 2,300 issues and comments to issues and over 2,000 commits.

<p></p>

Adrian also adopted the abandoned <a href="https://commons.apache.org/sandbox/commons-convert/index.html">Apache Commons Convert</a>  project in April 2010, and made it the home of a Java data-type conversion framework he developed for Apache OFBiz.

<p></p>

The project has setup a <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Memorial+-+Adrian+Crum">memorial page</a> for the community to share their stories, and experiences of Adrian.

<p></p>

The community has also decided to dedicate our next OFBiz release to him. The whole OFBiz Community sends its condolences to Adrian's family and friends.

## FOSDEM 2016

During January, some of our OFBiz community members attended <a href="https://fosdem.org/2016/">FOSDEM</a>, an open source conference for developers. It was held in Brussels and OFBiz community members from France, The Netherlands, Czech Republic and Belgium came along for conference as well as an informal meetup. The project was allocated a timeslot on the ASF booth to promote OFBiz.

<p></p>

With reportedly over 7000 attendees, there were lots of presentations, tutorials and devrooms to choose from. The ASF is planning to have a regular presence at FOSDEM in the future, so it is hoped that we can repeat the meetup and project promotion next year.

<p></p>

Please see below for the list of January changes for the OFBiz project.

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Added session tracking mode and make cookie secure for scrum, solr, and some special purposes components ([OFBIZ-6655](https://issues.apache.org/jira/browse/OFBIZ-6655))
- Add getFieldList method to EntityQuery ([OFBIZ-6848](https://issues.apache.org/jira/browse/OFBIZ-6848))
- Converted simple CRUD services to entity-auto for
  - PartyContent and CommunicationEventPurpose ([OFBIZ-6850](https://issues.apache.org/jira/browse/OFBIZ-6850))
  - TaxAuthority, TaxAuthorityAssoc, TaxAuthorityCategory (without remove), TaxAuthorityGlAccount, TaxAuthorityRateProduct ([OFBIZ-6851](https://issues.apache.org/jira/browse/OFBIZ-6851)), also moved the permission check to the service definition.
  - CreditCardTypeGlAccount ([OFBIZ-6852](https://issues.apache.org/jira/browse/OFBIZ-6852)), also converted updatePaymentMethodType and removePaymentContent service ([OFBIZ-6853](https://issues.apache.org/jira/browse/OFBIZ-6853))
  - SalesOpportunity and SalesForecastDetail
  - several Order entities ([OFBIZ-6854](https://issues.apache.org/jira/browse/OFBIZ-6854))
  - AgreementItemAttribute ([OFBIZ-6857](https://issues.apache.org/jira/browse/OFBIZ-6857))
- Contact Mech Translation in Facility Application ([OFBIZ-6856](https://issues.apache.org/jira/browse/OFBIZ-6856))
- Add the possibility to set a blackout period for job manager service ([OFBIZ-6790](https://issues.apache.org/jira/browse/OFBIZ-6790)). During this time all async and scheduled service are put on hold. Adds the following
  - an entity JobManagerLock
  - a new screen to add/edit job manager lock
  - an information for end user on FindJob and ScheduleJob screen.

## Bugfixes

Functional and technical bugfixes:

- When OFbiz reloads crashed jobs on startup, replay the crashed jobs only once. Remove all temporal information to ensure that the new job doesn't create any reccurent schedule that duplicates the origin job's configuration ([OFBIZ-6784](https://issues.apache.org/jira/browse/OFBIZ-6784))
- Sales opportunity creation: required-field removed, disturbed the form submission, entityone no value field, error in the log
- Various fixes to the salesopportunity list and create functions
- Correct the service CommunicationServices.createAttachmentContent that duplicates attachments for existing CommunicationEvents ([OFBIZ-6697](https://issues.apache.org/jira/browse/OFBIZ-6697))
- Small typo in ecommerce productdetail.ftl would prevent similar products by feature from rendering if the related functionality is enabled in ProductDetailgroovy ([OFBIZ-6797](https://issues.apache.org/jira/browse/OFBIZ-6797))
- Fixes an issue related to r1715960 and ([OFBIZ-6745](https://issues.apache.org/jira/browse/OFBIZ-6745))
- Broken filter links if using ecommerce Layered Navigation ([OFBIZ-6798](https://issues.apache.org/jira/browse/OFBIZ-6798))
- Exception when sending an order confirmation email ([OFBIZ-6792](https://issues.apache.org/jira/browse/OFBIZ-6792))
- Error occur when create Lead/Contact from Vcard ([OFBIZ-6795](https://issues.apache.org/jira/browse/OFBIZ-6795))
- Error when accessing /webtools/control/entitymain ([OFBIZ-6707](https://issues.apache.org/jira/browse/OFBIZ-6707) and [OFBIZ-6786](https://issues.apache.org/jira/browse/OFBIZ-6786))
- Missing parameters when calling the link from a form because they're passed in the url and not with the jquery data set ([OFBIZ-6803](https://issues.apache.org/jira/browse/OFBIZ-6803))
- ChartOfAccounts.fo.ftl still using the removed (in r1530274) postedBalance field results in system throwing an exception while accessing COA pdf ([OFBIZ-6799](https://issues.apache.org/jira/browse/OFBIZ-6799))
- There's no attribute "align" for tag "&lt;fo:block&gt;", must change to "text-align" ([OFBIZ-6800](https://issues.apache.org/jira/browse/OFBIZ-6800))
- Image management cannot share images ([OFBIZ-6789](https://issues.apache.org/jira/browse/OFBIZ-6789))
- Fix permissions at specialpurpose/myportal/widget/PortalAdmScreens.xml ([OFBIZ-6400](https://issues.apache.org/jira/browse/OFBIZ-6400))
- Order Item with multiple qty reserved with multiple inventory item not correctly recorded into Shipment\_Item\_Billing ([OFBIZ-6806](https://issues.apache.org/jira/browse/OFBIZ-6806))
- Session already invalidated on destroyCart for anonymous userLogin ([OFBIZ-6805](https://issues.apache.org/jira/browse/OFBIZ-6805))
- Tooltip Calendar field (date or date-time) should not stop when using tab key ([OFBIZ-6735](https://issues.apache.org/jira/browse/OFBIZ-6735))
- The GL account for USA\_IRS is set to 224106 (SALES TAX COLLECTED USA - CA) should be 224100 (SALES TAX COLLECTED USA) ([OFBIZ-6753](https://issues.apache.org/jira/browse/OFBIZ-6753))
- The passport component misses a web.xml file ([OFBIZ-6809](https://issues.apache.org/jira/browse/OFBIZ-6809))
- Fixed stack trace on configproductdetail.ftl, Used correct method to get INSTRUCTIONS from ProductConfigItemContentWrapper.
- ProjectMgr: GanttChart fails in case of dependencies for tasks ([OFBIZ-6842](https://issues.apache.org/jira/browse/OFBIZ-6842))
- In DemoTaxAuthority.xml the associated countrycode for Bulgaria is wrong ([OFBIZ-6844](https://issues.apache.org/jira/browse/OFBIZ-6844))
- Temporary fix for "UtilXml.LocalResolver.resolveEntity] could not find LOCAL DTD/Schema with publicId [null] and the file/resource is [web-app\_3\_0.xsd]" ([OFBIZ-6807](https://issues.apache.org/jira/browse/OFBIZ-6807))
- Various fixes related with sales opportunity ([OFBIZ-6791](https://issues.apache.org/jira/browse/OFBIZ-6791))
- Error on the Split Payment button from the Quick Finalize Order screen ([OFBIZ-6743](https://issues.apache.org/jira/browse/OFBIZ-6743))

## Documentation

- Added wiki documentation regarding the Apache Solr component ([OFBIZ-6592](https://issues.apache.org/jira/browse/OFBIZ-6592))
