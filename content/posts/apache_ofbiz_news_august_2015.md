---
layout: post
title: Apache OFBiz News - August 2015
date: '2015-09-05T08:29:14+00:00'
permalink: apache_ofbiz_news_august_2015
---
## News from the Apache OFBiz Community

The next Apache OFBiz Community Day is coming up in September, OFBiz now has been integrated with Apache Solr and discussions are in progress regarding re-designing our current website. There is a new initiative to establish an Apache OFBiz Extensions Marketplace.

<!--more-->

## OFBiz Community Day - September 2015

The next <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">OFBiz Community Day</a> will take place on Saturday 19th September 2015. This will be the 3rd Community Day that the project has held this year and we are actively encouraging as many people as possible to participate.<p></p>
Our Community Day is a chance for our community to donate their time and effort to helping improve OFBiz, not only through fixing bugs and patches but also by testing and writing documentation.
The main topics and fields of action are the website redesign and ongoing work on current issues. 

<p></p>

There will be a summary about the event in our next blog post.

## Apache Solr Integration for OFBiz

Apache Solr has now been implemented into the current OFBiz trunk and will form part of our future releases (from this trunk onwards).<p></p>

A lot of work was done to achieve this integration and we'd like to thank all the people that worked together to make this happen as well as the  <a href="http://lucene.apache.org/solr/">Apache Solr</a> and <a href="https://lucene.apache.org/core/">Apache Lucene</a> projects.<p></p>

## OFBiz Website Re-design

Discussions have taken place about updating and re-organising our current website. There has been quite a lot of feedback from the Community with some really good ideas of how it could be done.<p></p>

Some initial work has already begun to draft some potential website structures and organisation. Once completed, the next step will be to get community feedback and consensus.

## New Initiative: OFBiz Extensions Marketplace (OEM)

The idea to establish an OFBiz Extensions Marketplace (OEM) was brought up recently and is now being discussed on our User Mailing List. The marketplace would be a place where both open source contributors and 3rd party solution providers could showcase their add-ons, extensions and solution replacements.<p></p>

The OEM would not be intended to function as a code repository, instead it would be regarded as something like the Yellow Pages and contain links to profiles of the creators/maintainers or to the code repository for 3rd party OFBiz extensions.

<p></p>

It is hoped that this will create more visibility for OFBiz by highlighting the additional potential solutions, add-ons and extensions that are available. It will also give more visibility to the Contributors, Solution and Service providers that want to market their OFBiz related products to potential customers.

<p></p>

You can follow the discussion in this <a href="http://markmail.org/message/cjbsrxm467tqo4e2">mailing list thread</a>.

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Based on recent Moqui addition, added description and geoPointTypeEnumId to GeoPoint entity, see [this comment](https://github.com/sssonline/moqui/commit/39a12eaedcc8e8d134457f6a38146737728bda24) for details.
- Changed UtilProperties.getPropertyValue("general.properties", "multitenant") to EntityUtil.isMultiTenantEnabled().
- Use ZXing to generate QR 2D barcodes ([OFBIZ-4154](https://issues.apache.org/jira/browse/OFBIZ-4154)).
  - Added zxing-core-3.2.0.jar to framework/base/lib and .classpath.
  - Added services\_qrcode.xml and QRCodeService.java in framework/common/.
  - Added qrcode request in common-controller.xml and QRCodeEvents.java under framework/common/.
  - Added qrcode.properties and QRCodeUiLabels.xml under framework/common/.
  - Added a barcode example page in specialpurpose/example, entry is on page: /example/control/EditExample?exampleId=EX01, the example can be seen on page: /example/control/ExampleReportPdfBarcode?exampleId=EX01
- Reverted 1530237: the sql type for Postgres for "comments" and "description" fields was changed from VARCHAR(255) to TEXT; the new TEXT type allows strings of any length; however all other types definitions (MySQL, Derby etc...) are using VARCHAR(255) thus limiting the length of "comments" and "description" fields to 255 characters. By reverting this change we make sure that the Postgres db will be consistent with the other dbs.
- Simple coding cleanup in CompanyHeader.groovy ([OFBIZ-6583](https://issues.apache.org/jira/browse/OFBIZ-6583)).
- Apache Solr Implementation ([OFBIZ-5042](https://issues.apache.org/jira/browse/OFBIZ-5042)).
  - Patch is added into trunk.
  - Added access control to solr /admin/ pages.
  - Upgraded solr to 4.9.0 to match Lucene version in trunk.
  - Removed solr.solr.home, used SolrResourceLoader loader = new SolrResourceLoader("specialpurpose/solr/conf"); instead.

## Bugfixes

Functional and technical bugfixes:

- GenericDelegator.store fails to clear userLogin cache on password update from ecommerce profile ([OFBIZ-6561](https://issues.apache.org/jira/browse/OFBIZ-6561)).
- Removed duplicate german translations for labels AccountingPayWithWorldPay and FormFieldTitle\_organizationPartyId.
- Fixed character encoding issue if multitenant is set to Y, move the setCharacterEncoding and setAttributesFromRequestBody method before the multitenant block in ContextFilter, as multitenant block reading the tenatId form request parameter ([OFBIZ-6572](https://issues.apache.org/jira/browse/OFBIZ-6572)).
- Anonymous unsubscribe from contact list generates an error ([OFBIZ-6570](https://issues.apache.org/jira/browse/OFBIZ-6570)).
- Popup calendar icon missing and dialog is transparent in flat grey theme ([OFBIZ-6569](https://issues.apache.org/jira/browse/OFBIZ-6569)). Changed FlatGreyThemeData.xml to make javascript.css work.
- SecurityGroup doesn't get removed from a Party ([OFBIZ-6566](https://issues.apache.org/jira/browse/OFBIZ-6566)).
- Added missing code in header.ftl file to include component specific js file ([OFBIZ-6362](https://issues.apache.org/jira/browse/OFBIZ-6362)).
- Error adding items to a Customer Return Invoice ([OFBIZ-6571](https://issues.apache.org/jira/browse/OFBIZ-6571)). Passed parameter in correct sequence while doing EntityUtil.getRelated.
- When searching for group named 'OFBiz' all parties are returned ([OFBIZ-6563](https://issues.apache.org/jira/browse/OFBIZ-6563)). Fixed lookup party search form, used correct name for groupName field. Fix the focus-field-name from partyName to partyId as partyName is not a valid field on lookup party form. Used correct jQuery.each method in for paginationMenus.
- SQL Exceptions (OPTION) occuring when running OFBiz 13.07.02 against MySQL ([OFBIZ-6582](https://issues.apache.org/jira/browse/OFBIZ-6582)). Updates the "MySQL Connector/J" from 5.1.6 to 5.1.36.
- Popup calendar does not work in all themes ([OFBIZ-6589](https://issues.apache.org/jira/browse/OFBIZ-6589)). Removed date picker localization data from theme file. GlobalActions decorator will generate this data and will be added in screens accordingly.

## Documentation

- Incorporate the readme for the Lucene component ([OFBIZ-6577](https://issues.apache.org/jira/browse/OFBIZ-6577)).

&nbsp;
