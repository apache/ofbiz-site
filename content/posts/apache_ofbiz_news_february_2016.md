---
layout: post
title: Apache OFBiz News - February 2016
date: '2016-03-06T16:43:24+00:00'
permalink: apache_ofbiz_news_february_2016
---
## Apache OFBiz News February 2016

Welcome to our monthly round-up of OFBiz news. This month we have news regarding the OFBiz presentation submissions for Apachecon NA, an OFBiz bug crush event, new videos are posted on our Youtube channel and the community discuss starting work on some code re-factoring.

<!--more-->

## Apachecon NA 2016

<a href="http://events.linuxfoundation.org/events/apachecon-north-america">Apachecon NA 2016</a> will be held in Vancouver 11th - 13th May. In the past, OFBiz has been well represented at previous Apachecons including a full track for 2015. A total of <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apachecon+NA+2016">5 OFBiz based presentations</a> have been submitted from the community across a range of technical and business subjects. The Apachecon selection committee is currently working on selecting the program so we are now waiting to see if any of our submissions have been accepted.

<p></p>

Thank you to everyone that made a submission and we continue to encourage active participation at Apachecon.

## OFBiz Bug Crush Event

On 20th February, 24 people from the development team at <a href="http://www.hotwaxsystems.com">Hotwax Systems</a> spent the whole day working through a range of OFBiz Jira issues. The team worked in collaboration with other community members and by the end of the day a total of 22 issues were closed. This was a great demonstration of community, teamwork and collaboration.

<p></p>

A reminder that the first OFBiz Community Day of 2016 is planned for 19th March and we hope to repeat the collaborative spirit and increase the community involvement.

## OFBiz Re-Factoring

Last month a discussion began around the re-factoring of parts of the OFBiz code base as a way to tidy up and improve it. Several ideas around where and how it could start have been raised. The community is looking for people to actively help with this.

<p></p>

To help focus the effort <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Framework+Re-factor">a wiki page</a> has been setup to highlight a list of 5 areas that people could work on. Anyone interested is encouraged to add their name to the wiki page.

## OFBiz on Youtube

The community regained access to the  <a href="https://www.youtube.com/user/ofbiz">OFBiz Youtube Channel</a> recently and have begun planning some new videos to include. <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Youtube+Channel">A wiki page </a> has been created with some suggestions for short videos that will help people learn more about OFBiz and how it works.
Two new videos have been added (one in French and one in English) and we are encouraging the community to provide videos in various languages that reflect the community worldwide. 

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Have the ability to add terms to invoices ([OFBIZ-6865](https://issues.apache.org/jira/browse/OFBIZ-6865)))
- Remove the forceManualJsessionid feature ([OFBIZ-66867](https://issues.apache.org/jira/browse/OFBIZ-6867))
- Added new template locations ([OFBIZ-6868](https://issues.apache.org/jira/browse/OFBIZ-6868)):
  - VT\_LOGIN\_TMPLT\_LOC for the login
  - VT\_CHPWD\_TMPLT\_LOC for the changePassword
  - VT\_FGPWD\_TMPLT\_LOC for the forgetPassword
  - VT\_GSQUE\_TMPLT\_LOC for the getSecurityQuestion
- JGrowl enhancement for internationalization, center and speed up display, with some format/typo fixes ([OFBIZ-6869](https://issues.apache.org/jira/browse/OFBIZ-6869))
- Gets rid of the session-cookie-accepted feature ([OFBIZ-6871](https://issues.apache.org/jira/browse/OFBIZ-6871))
- Convert simple crud service to entity-auto for the following entities ProductPaymentMethodType, SupplierProduct, CommunicationEventProduct, ProductCategoryMember, ProductFeatureDataResource, ProductConfig, ProductConfigItem, ProductConfigOption, ProductConfigProduct, ProductPriceRule, ProductPriceCond, ProductPriceAction, PhysicalInventory, ProductFacilityLocation, Facility, FacilityLocation, FacilityGroupMember, FacilityGroupRollup, FacilityParty, FacilityContent, InventoryItemLabelType, InventoryItemLabelAppl, InventoryItemLabel, ProductPromo, ProductPromoCode, ProductPromoCategory, ProductPromoCodeEmail, ProductPromoCodeParty, ProductPromoProduct, ProductPromoRule also added a new service productPriceGenericPermission for acces control to related price service ([OFBIZ-6873](https://issues.apache.org/jira/browse/OFBIZ-6873))
- Add properties in widget.properties, for easy customization of JGrowl alert ([OFBIZ-6869](https://issues.apache.org/jira/browse/OFBIZ-6869))
- Removes all sessionsIds put in URLs ([OFBIZ-6872](https://issues.apache.org/jira/browse/OFBIZ-6872))
- Removes forceHttpSession feature ([OFBIZ-6879](https://issues.apache.org/jira/browse/OFBIZ-6879))
- Added new theme rainbowstone ([OFBIZ-6843](https://issues.apache.org/jira/browse/OFBIZ-6843))
- Update of accounting NL labels ([OFBIZ-6875](https://issues.apache.org/jira/browse/OFBIZ-6875))
- Czech translations ([OFBIZ-6885](https://issues.apache.org/jira/browse/OFBIZ-6885))
- Be able to set accounting company in the header, so other companent can change it too ([OFBIZ-6802](https://issues.apache.org/jira/browse/OFBIZ-6802))
- Replaces with EnitityUtilProperties variant where appropriate ([OFBIZ-6884](https://issues.apache.org/jira/browse/OFBIZ-6884))
- Extend the PostalAddress entity with additional elements ([OFBIZ-6882](https://issues.apache.org/jira/browse/OFBIZ-6882))
- Hide sessionId in logs by default, show them using a properties ([OFBIZ-6886](https://issues.apache.org/jira/browse/OFBIZ-6886))
- Upgrade Groovy to the latest version ([OFBIZ-6568](https://issues.apache.org/jira/browse/OFBIZ-6568))
- DB2 example based on [http://markmail.org/message/ez55yv5m36liliue](http://markmail.org/message/ez55yv5m36liliue) ([OFBIZ-1607](https://issues.apache.org/jira/browse/OFBIZ-1607))
- Replace the contrast Java agent by the notsoserial Java agent which can be used to protect OFBiz instances from possible Java serialize vulnerabilities
  - For that it modifies the \*-secure targets (start-secure, start-batch-secure, start-pos-secure, start-both-secure) to use the notsoserial Java agent with its most secure setting. See [https://cwiki.apache.org/confluence/display/OFBIZ/The+infamous+Java+serialize+vulnerability](https://cwiki.apache.org/confluence/display/OFBIZ/The+infamous+Java+serialize+vulnerability) for more information .
  - The notsoserial Java agent is placed in the tools/security/notsoserial folder and a dependency-check folder created under the tools/security folder to move there the dependency-check files from the tools/security folder.
  - The demos will be using the notsoserial Java agent ASAP.
- In framework/base/lib/ updates Xalan from 2.7.1 to 2.7.2 because of CVE-2014-0107 (was fixed at XALANJ-2435) ([OFBIZ-6905](https://issues.apache.org/jira/browse/OFBIZ-6905))
- AprintCheck action generates an error ([OFBIZ-6898](https://issues.apache.org/jira/browse/OFBIZ-6898))
- Corrected commit r1728261 ([OFBIZ-6873](https://issues.apache.org/jira/browse/OFBIZ-6873)) Added seca to addPartyToFacilityGroup and addPartyToFacility, if a roleTypeId is present call ensurePartyRole. Correct the entity name present on crud PartyToFacilityGroup service.
- Replace html widget rendering with Macro widget rendering in
  - EmailServices.java file ([OFBIZ-6282](https://issues.apache.org/jira/browse/OFBIZ-6282))
  - BirtEmailServices.java file ([OFBIZ-6287](https://issues.apache.org/jira/browse/OFBIZ-6287))
  - Oagis classes ([OFBIZ-6289](https://issues.apache.org/jira/browse/OFBIZ-6289))
  - ExamplePrintServices.java file ([OFBIZ-6288](https://issues.apache.org/jira/browse/OFBIZ-6288))
  - OutputServices.java file ([OFBIZ-6285](https://issues.apache.org/jira/browse/OFBIZ-6285))
  - FoPrintServerEvents.java file ([OFBIZ-6283](https://issues.apache.org/jira/browse/OFBIZ-6283))
  - framework/widget files ([OFBIZ-6281](https://issues.apache.org/jira/browse/OFBIZ-6281))
- Set productFeatureTypeId as INOUT in service defination so that the calling service can use it for further processing ([OFBIZ-6910](https://issues.apache.org/jira/browse/OFBIZ-6910))
- Show currencyUomId of the invoice in the invoice selection for payments ([OFBIZ-6906](https://issues.apache.org/jira/browse/OFBIZ-6906))
- new Configuration() is deprecated; instead, the desired freemarker version should be passed in. To make it easier to control the version centrally, add a helper method on FreeMarkerWorker that wraps the instantiation of the Configuration object ([OFBIZ-6277](https://issues.apache.org/jira/browse/OFBIZ-6277))
- Added return message in service after succesfully deleting of contactMech record. Thanks Aman for providing patch ([OFBIZ-6911](https://issues.apache.org/jira/browse/OFBIZ-6911))
- UtilDateTime implements deprecated methods, so add the @Deprecated tag to stop javac from producing a warning ([OFBIZ-6279](https://issues.apache.org/jira/browse/OFBIZ-6279))
- Fix deprecated use of SimpleMethod.getAll{Entity,Service}NamesUsed(), instead using ArtifactInfoContext ([OFBIZ-6284](https://issues.apache.org/jira/browse/OFBIZ-6284))
- Applied patch for adding a new fieled 'disabledBy' in UserLogin entity ([OFBIZ-6909](https://issues.apache.org/jira/browse/OFBIZ-6909))
- Removed deprecated warning from FoFormRender as we don't have support to create MacroFormRender object in services ([OFBIZ-5780](https://issues.apache.org/jira/browse/OFBIZ-5780))
- Show "Create Return" button on order view screen other than when order status is complete ([OFBIZ-6012](https://issues.apache.org/jira/browse/OFBIZ-6012))

## Bugfixes

Functional and technical bugfixes:

- webSiteId being null in RegisterPerson.ftl fixed
- Fix the classpath file for updated tomcat libraries
- Fix issue on avatar.ftl for rainbowstone theme ([OFBIZ-6843](https://issues.apache.org/jira/browse/OFBIZ-6843))
- Fix rainbowstone theme personal avatar image ([OFBIZ-6881](https://issues.apache.org/jira/browse/OFBIZ-6881))
- Revert r1728959 because of misc. issues with the patch, see ([OFBIZ-6884](https://issues.apache.org/jira/browse/OFBIZ-6884))
- Fix a typo in AccountingEntityLabels (xlm -&gt; xml)
- With the implementation of @BaseScript annotations (introduced with Groovy 2.3.0) something was broken in the CompilerConfiguration.setScriptBaseClass method and an error is thrown when our scripts are executed; the workaround is to execute at startup a script containing the @BaseScript annotation. ([OFBIZ-6568](https://issues.apache.org/jira/browse/OFBIZ-6568))
- Error during first attempt of the synchronisation ([OFBIZ-6893](https://issues.apache.org/jira/browse/OFBIZ-6893))
- Start fixing solr rebuild problem ([OFBIZ-6715](https://issues.apache.org/jira/browse/OFBIZ-6715))
- On the balance sheet, it displays incorrect value on the total of long-term asset ([OFBIZ-6845](https://issues.apache.org/jira/browse/OFBIZ-6845))
- corrective patch for xml and pdf error ([OFBIZ-6802](https://issues.apache.org/jira/browse/OFBIZ-6802))
- Fixed some compilation warnings ([OFBIZ-5780](https://issues.apache.org/jira/browse/OFBIZ-5780))
  - Mark some SecurityFactory method as deprecated
  - Mark FoFormRender as deprecated
  - Fixed deprecation warning for PassportUtil class.
- Order Manager ViewQuote screen should display party name and link to party manager ([OFBIZ-6311](https://issues.apache.org/jira/browse/OFBIZ-6311))
- Fixed issue of removeContentFromProductConfigItem request by passing request parameters by submiting a form ([OFBIZ-6801](https://issues.apache.org/jira/browse/OFBIZ-6801))
- Make use of ResourceLoader.readXmlRootElement, which is non-caching; this fixes a deprecation warning. Use ResourceLoader.readXmlRootElement, which is a non-caching version. This fixes a deprecation warning. Provide method variants (readXml{Document,RootElement}) that contain the body of the deprecated methods.(getXml{Document,RootElement}) ([OFBIZ-6278](https://issues.apache.org/jira/browse/OFBIZ-6278)).
- Exclusion of Manufacturing components leads to load errors ([OFBIZ-6757](https://issues.apache.org/jira/browse/OFBIZ-6757))
- ApplicationDecorator Entity-One Screen Action Incomplete Primary Key ([OFBIZ-6918](https://issues.apache.org/jira/browse/OFBIZ-6918))
