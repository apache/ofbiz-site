---
layout: post
title: 'Apache OFBiz News - September 2016 '
date: '2016-10-06T07:31:19+00:00'
permalink: apache_ofbiz_news_september_2016
---
## Apache OFBiz News September 2016

Welcome to our regular monthly round-up of OFBiz news. This month we have news about an OFBiz track for Apachecon EU, a new Community HipChat room is setup, our PMC grows larger, OFBiz gets a new plug in system and the community collaborates on yet another Community Day.

<!--more-->

## Apachecon EU 2016 - Seville

The community submitted a range of talks for Apachecon EU in Seville. Five OFBiz talks have been selected to make up an OFBiz track. The topics range from improving the OFBiz user experience through to the new OFBiz plug in management system.

<p></p>

It's great to see another OFBiz track at Apachecon as it gives an opportunity for our community to meet face to face, get to know each other and collaborate. Our speakers will be coming from France, India and Kuwait. . Full details of the OFBiz track can be found at the following link:

<p></p>

<a href="https://apacheconeu2016.sched.org/overview/type/ofbiz">OFBiz Track </a>

<p></p>

Thank you to everyone that made a submission. We hope that there will be a strong OFBiz presence in Seville including some of our committers and PMC members. If you are interested in coming to Apachecon, then please register via the <a href="http://events.linuxfoundation.org/events/apachecon-europe/attend/register"> Linux Foundation </a> website.

## OFBiz Community HipChat Room

This month a HipChat room was setup for the OFBiz Community. The room is open to anyone to join and can be accessed using the following link

<p></p>

<a href="https://www.hipchat.com/g4vOayvmc">OFBiz HipChat Room </a>

<p></p>

It is hoped that the online chat forum can help with collaboration, mentoring and also as a way to build community spirit. People can easily see other community members online, ask simple questions and chat about OFBiz. As usual any discussions topics are taken back to the mailing lists.

<p></p>

The HipChat room has been very successful and was used during the this month's Community Day.

## OFBiz Community Day

Our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">Community Days</a>  are held every 3 months and our third one for 2016 was held on 17th September. As usual they are very popular. Once again the activity level was very high with 103 commits and 82 tickets closed or resolved.  OFBiz was showing up on the ASF Status Monitor as the most active project over the Community Day weekend with Michael Brohl, Pranay Pandey, Arun Patidar, Jacques Le Roux and Gil Portenseigne filling the list of the top 5 most active Committers.

<p></p>

Thanks to everyone for their contributions, involvement and great effort. Our next Community Day is planned for 17th December. If you are interested in taking part then mark the date in your diary.

## OFBiz Plug In Manager

A lot of work has been done this month to create a plug in management system for OFBiz. OFBiz covers many business aspects that being able to create a plug in and choose what functionality you want to enable will be a very strong and flexible business feature. The change of build system from Ant to Gradle has made the implementation of a plug in system for OFBiz a lot easier and after many weeks of effort the code has now been added to the trunk. This means that it will be included as part of the next OFBiz release.

<p></p>

Huge thanks and kudos to Taher Alkhateeb for doing all the hard work!

## New PMC Member

A new member has joined the OFBiz Project Management Committee (PMC) this month - Michael Brohl. Congratulations Michael!

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Remove legal statements from existing README files ([OFBIZ-8085](https://issues.apache.org/jira/browse/OFBIZ-8085))
- Add functionality for adding Check accounts in the party profile page ([OFBIZ-6899](https://issues.apache.org/jira/browse/OFBIZ-6899))
- Change the transaction URL of Payment Gateway from https://certification.authorize.net/gateway/transact.dll to https://test.authorize.net/gateway/transact.dll ([OFBIZ-7251](https://issues.apache.org/jira/browse/OFBIZ-7251))
- Add field 'changeByUserLoginId' to PartyStatus ([OFBIZ-7616](https://issues.apache.org/jira/browse/OFBIZ-7616))
- Add "success/error" message UI labels in various components ([OFBIZ-7726](https://issues.apache.org/jira/browse/OFBIZ-7726)) ([OFBIZ-7979](https://issues.apache.org/jira/browse/OFBIZ-7979)) ([OFBIZ-7980](https://issues.apache.org/jira/browse/OFBIZ-7980)) ([OFBIZ-7987](https://issues.apache.org/jira/browse/OFBIZ-7987)) ([OFBIZ-7990](https://issues.apache.org/jira/browse/OFBIZ-7990)) ([OFBIZ-7991](https://issues.apache.org/jira/browse/OFBIZ-7991)) ([OFBIZ-7993](https://issues.apache.org/jira/browse/OFBIZ-7993)) ([OFBIZ-7994](https://issues.apache.org/jira/browse/OFBIZ-7994)) ([OFBIZ-7996](https://issues.apache.org/jira/browse/OFBIZ-7996)) ([OFBIZ-7997](https://issues.apache.org/jira/browse/OFBIZ-7997)) ([OFBIZ-7998](https://issues.apache.org/jira/browse/OFBIZ-7998)) ([OFBIZ-7999](https://issues.apache.org/jira/browse/OFBIZ-7999)) ([OFBIZ-8002](https://issues.apache.org/jira/browse/OFBIZ-8002)) ([OFBIZ-8004](https://issues.apache.org/jira/browse/OFBIZ-8004)) ([OFBIZ-8009](https://issues.apache.org/jira/browse/OFBIZ-8009)) ([OFBIZ-8011](https://issues.apache.org/jira/browse/OFBIZ-8011))
- Add unit tests for the UtilCodec class
- Add CRUD services for various entities ([OFBIZ-7847](https://issues.apache.org/jira/browse/OFBIZ-7847)) ([OFBIZ-7853](https://issues.apache.org/jira/browse/OFBIZ-7853)) ([OFBIZ-7859](https://issues.apache.org/jira/browse/OFBIZ-7859)) ([OFBIZ-7862](https://issues.apache.org/jira/browse/OFBIZ-7862)) ([OFBIZ-7868](https://issues.apache.org/jira/browse/OFBIZ-7868)) ([OFBIZ-7869](https://issues.apache.org/jira/browse/OFBIZ-7869)) ([OFBIZ-7870](https://issues.apache.org/jira/browse/OFBIZ-7870)) ([OFBIZ-7871](https://issues.apache.org/jira/browse/OFBIZ-7871)) ([OFBIZ-7873](https://issues.apache.org/jira/browse/OFBIZ-7873)) ([OFBIZ-7878](https://issues.apache.org/jira/browse/OFBIZ-7878)) ([OFBIZ-7890](https://issues.apache.org/jira/browse/OFBIZ-7890)) ([OFBIZ-7891](https://issues.apache.org/jira/browse/OFBIZ-7891)) ([OFBIZ-8000](https://issues.apache.org/jira/browse/OFBIZ-8000)) ([OFBIZ-8003](https://issues.apache.org/jira/browse/OFBIZ-8003)) ([OFBIZ-8005](https://issues.apache.org/jira/browse/OFBIZ-8005)) ([OFBIZ-8006](https://issues.apache.org/jira/browse/OFBIZ-8006)) ([OFBIZ-8008](https://issues.apache.org/jira/browse/OFBIZ-8008)) ([OFBIZ-8015](https://issues.apache.org/jira/browse/OFBIZ-8015)) ([OFBIZ-8017](https://issues.apache.org/jira/browse/OFBIZ-8017)) ([OFBIZ-8018](https://issues.apache.org/jira/browse/OFBIZ-8018)) ([OFBIZ-8019](https://issues.apache.org/jira/browse/OFBIZ-8019)) ([OFBIZ-8020](https://issues.apache.org/jira/browse/OFBIZ-8020)) ([OFBIZ-8022](https://issues.apache.org/jira/browse/OFBIZ-8022)) ([OFBIZ-8025](https://issues.apache.org/jira/browse/OFBIZ-8025)) ([OFBIZ-8030](https://issues.apache.org/jira/browse/OFBIZ-8030)) ([OFBIZ-8031](https://issues.apache.org/jira/browse/OFBIZ-8031)) ([OFBIZ-8035](https://issues.apache.org/jira/browse/OFBIZ-8035)) ([OFBIZ-8045](https://issues.apache.org/jira/browse/OFBIZ-8045)) ([OFBIZ-8046](https://issues.apache.org/jira/browse/OFBIZ-8046)) ([OFBIZ-8047](https://issues.apache.org/jira/browse/OFBIZ-8047)) ([OFBIZ-8048](https://issues.apache.org/jira/browse/OFBIZ-8048)) ([OFBIZ-8049](https://issues.apache.org/jira/browse/OFBIZ-8049)) ([OFBIZ-8050](https://issues.apache.org/jira/browse/OFBIZ-8050)) ([OFBIZ-8057](https://issues.apache.org/jira/browse/OFBIZ-8057)) ([OFBIZ-8058](https://issues.apache.org/jira/browse/OFBIZ-8058)) ([OFBIZ-8059](https://issues.apache.org/jira/browse/OFBIZ-8059)) ([OFBIZ-8060](https://issues.apache.org/jira/browse/OFBIZ-8060)) ([OFBIZ-8061](https://issues.apache.org/jira/browse/OFBIZ-8061)) ([OFBIZ-8062](https://issues.apache.org/jira/browse/OFBIZ-8062)) ([OFBIZ-8080](https://issues.apache.org/jira/browse/OFBIZ-8080)) ([OFBIZ-8081](https://issues.apache.org/jira/browse/OFBIZ-8081)) ([OFBIZ-8082](https://issues.apache.org/jira/browse/OFBIZ-8082)) ([OFBIZ-8083](https://issues.apache.org/jira/browse/OFBIZ-8083)) ([OFBIZ-8084](https://issues.apache.org/jira/browse/OFBIZ-8084)) ([OFBIZ-8086](https://issues.apache.org/jira/browse/OFBIZ-8086)) ([OFBIZ-8092](https://issues.apache.org/jira/browse/OFBIZ-8092)) ([OFBIZ-8093](https://issues.apache.org/jira/browse/OFBIZ-8093)) ([OFBIZ-8094](https://issues.apache.org/jira/browse/OFBIZ-8094)) ([OFBIZ-8095](https://issues.apache.org/jira/browse/OFBIZ-8095)) ([OFBIZ-8096](https://issues.apache.org/jira/browse/OFBIZ-8096)) ([OFBIZ-8131](https://issues.apache.org/jira/browse/OFBIZ-8131)) ([OFBIZ-8132](https://issues.apache.org/jira/browse/OFBIZ-8132)) ([OFBIZ-8133](https://issues.apache.org/jira/browse/OFBIZ-8133)) ([OFBIZ-8134](https://issues.apache.org/jira/browse/OFBIZ-8134)) ([OFBIZ-8161](https://issues.apache.org/jira/browse/OFBIZ-8161)) ([OFBIZ-8162](https://issues.apache.org/jira/browse/OFBIZ-8162)) ([OFBIZ-8163](https://issues.apache.org/jira/browse/OFBIZ-8163)) ([OFBIZ-8164](https://issues.apache.org/jira/browse/OFBIZ-8164)) ([OFBIZ-8165](https://issues.apache.org/jira/browse/OFBIZ-8165)) ([OFBIZ-8166](https://issues.apache.org/jira/browse/OFBIZ-8166)) ([OFBIZ-8167](https://issues.apache.org/jira/browse/OFBIZ-8167)) ([OFBIZ-8168](https://issues.apache.org/jira/browse/OFBIZ-8168)) ([OFBIZ-8169](https://issues.apache.org/jira/browse/OFBIZ-8169)) ([OFBIZ-8170](https://issues.apache.org/jira/browse/OFBIZ-8170)) ([OFBIZ-8171](https://issues.apache.org/jira/browse/OFBIZ-8171)) ([OFBIZ-8208](https://issues.apache.org/jira/browse/OFBIZ-8208)) ([OFBIZ-8246](https://issues.apache.org/jira/browse/OFBIZ-8246)) ([OFBIZ-8247](https://issues.apache.org/jira/browse/OFBIZ-8247)) ([OFBIZ-8259](https://issues.apache.org/jira/browse/OFBIZ-8259)) ([OFBIZ-8269](https://issues.apache.org/jira/browse/OFBIZ-8269))
- Enable adding a content to an agreement ([OFBIZ-7969](https://issues.apache.org/jira/browse/OFBIZ-7969))
- Clean up commented out code in various freemarker templates ([OFBIZ-8064](https://issues.apache.org/jira/browse/OFBIZ-8064)) ([OFBIZ-8065](https://issues.apache.org/jira/browse/OFBIZ-8065)) ([OFBIZ-8066](https://issues.apache.org/jira/browse/OFBIZ-8066))
- Clean up commented out code in various groovy scripts ([OFBIZ-8069](https://issues.apache.org/jira/browse/OFBIZ-8069)) ([OFBIZ-8070](https://issues.apache.org/jira/browse/OFBIZ-8070)) ([OFBIZ-8071](https://issues.apache.org/jira/browse/OFBIZ-8071)) ([OFBIZ-8072](https://issues.apache.org/jira/browse/OFBIZ-8072)) ([OFBIZ-8073](https://issues.apache.org/jira/browse/OFBIZ-8073)) ([OFBIZ-8074](https://issues.apache.org/jira/browse/OFBIZ-8074)) ([OFBIZ-8075](https://issues.apache.org/jira/browse/OFBIZ-8075))
- Clean up commented out code in various xml files ([OFBIZ-8091](https://issues.apache.org/jira/browse/OFBIZ-8091))
- Clean up commented out code in the java source various components ([OFBIZ-7848](https://issues.apache.org/jira/browse/OFBIZ-7848)) ([OFBIZ-7856](https://issues.apache.org/jira/browse/OFBIZ-7856)) ([OFBIZ-8036](https://issues.apache.org/jira/browse/OFBIZ-8036)) ([OFBIZ-8037](https://issues.apache.org/jira/browse/OFBIZ-8037))
- Load the OWASP dependency checker Gradle plugin efficiently ([OFBIZ-7930](https://issues.apache.org/jira/browse/OFBIZ-7930))
- Various cleanups concerning OFBiz servlet filters ([OFBIZ-8142](https://issues.apache.org/jira/browse/OFBIZ-8142))
- Remove unused parameter from CatalogUrlFilter
- Implement a new servlet filter that provides all controller related logic currently in ContextFilter
- ContextFilter: Set the character encoding to the system default (UTF-8) if and only if it is not set already by the client
- Remove controller related logic from ContextFilter which is now provided by ControlFilter
- Modify classes to use the FORWARDED\_FROM\_SERVLET constant defined in the new ControlFilter class
- Implement unit tests for some mechanisms to create delegator objects and for the initialization of ControlFilter
- Moved several filter config related variables from the doGet method to class level and initialed them in the init method
- Allow users to select multiple options in the "Purchases by Product" and "Purchases by Payment Method"-reports ([OFBIZ-7403](https://issues.apache.org/jira/browse/OFBIZ-7403))
- Improve error message logged by DelegatorFactoryImpl.getInstance when a delegator can't be created
- Remove the need for the webtools.properties file
- Small improvements to LoginWorker.java and WebSiteWorker.java
- Remove the jars from "eBay SDK for Java" licensed under CDDL thus not being compatible with ASL2.0, add instructions on how to run it in the component's README
- Remove several unused jars
- Add the new test testCreatePartyGround to the party component ([OFBIZ-8144](https://issues.apache.org/jira/browse/OFBIZ-8144))
- Use the try-with-resources statement wherever possible ([OFBIZ-8202](https://issues.apache.org/jira/browse/OFBIZ-8202))
- Make menu names consistent ([OFBIZ-8118](https://issues.apache.org/jira/browse/OFBIZ-8118)) ([OFBIZ-8122](https://issues.apache.org/jira/browse/OFBIZ-8122)) ([OFBIZ-8123](https://issues.apache.org/jira/browse/OFBIZ-8123)) ([OFBIZ-8124](https://issues.apache.org/jira/browse/OFBIZ-8124)) ([OFBIZ-8125](https://issues.apache.org/jira/browse/OFBIZ-8125)) ([OFBIZ-8126](https://issues.apache.org/jira/browse/OFBIZ-8126)) ([OFBIZ-8127](https://issues.apache.org/jira/browse/OFBIZ-8127)) ([OFBIZ-8128](https://issues.apache.org/jira/browse/OFBIZ-8128)) ([OFBIZ-8129](https://issues.apache.org/jira/browse/OFBIZ-8129))
- Make form names consistent ([OFBIZ-8045](https://issues.apache.org/jira/browse/OFBIZ-8045)) ([OFBIZ-8046](https://issues.apache.org/jira/browse/OFBIZ-8046)) ([OFBIZ-8067](https://issues.apache.org/jira/browse/OFBIZ-8067)) ([OFBIZ-8077](https://issues.apache.org/jira/browse/OFBIZ-8077)) ([OFBIZ-8078](https://issues.apache.org/jira/browse/OFBIZ-8078)) ([OFBIZ-8088](https://issues.apache.org/jira/browse/OFBIZ-8088)) ([OFBIZ-8089](https://issues.apache.org/jira/browse/OFBIZ-8089)) ([OFBIZ-8090](https://issues.apache.org/jira/browse/OFBIZ-8090)) ([OFBIZ-8099](https://issues.apache.org/jira/browse/OFBIZ-8099)) ([OFBIZ-8100](https://issues.apache.org/jira/browse/OFBIZ-8100)) ([OFBIZ-8101](https://issues.apache.org/jira/browse/OFBIZ-8101)) ([OFBIZ-8103](https://issues.apache.org/jira/browse/OFBIZ-8103)) ([OFBIZ-8104](https://issues.apache.org/jira/browse/OFBIZ-8104)) ([OFBIZ-8105](https://issues.apache.org/jira/browse/OFBIZ-8105)) ([OFBIZ-8106](https://issues.apache.org/jira/browse/OFBIZ-8106)) ([OFBIZ-8107](https://issues.apache.org/jira/browse/OFBIZ-8107)) ([OFBIZ-8108](https://issues.apache.org/jira/browse/OFBIZ-8108))
- Remove the genorimo component and move GeronimoTransactionFactory to the entity component ([OFBIZ-8179](https://issues.apache.org/jira/browse/OFBIZ-8179))
- Remove support for the Bean Scripting Framework (BSF) ([OFBIZ-8224](https://issues.apache.org/jira/browse/OFBIZ-8224))
- Remove support for "notsoserial" ([OFBIZ-8241](https://issues.apache.org/jira/browse/OFBIZ-8241))
- Implement a PoC plugin system for OFBiz based on Gradle ([OFBIZ-7972](https://issues.apache.org/jira/browse/OFBIZ-7972))
- Change the inlineHandlePriceWithTaxIncuded method name ([OFBIZ-8244](https://issues.apache.org/jira/browse/OFBIZ-8244))
- Translate the svn and git info footers ([OFBIZ-7798](https://issues.apache.org/jira/browse/OFBIZ-7798))
- Convert search criteria on status into multi-select pattern in various components ([OFBIZ-7542](https://issues.apache.org/jira/browse/OFBIZ-7542)) ([OFBIZ-7544](https://issues.apache.org/jira/browse/OFBIZ-7544)) ([OFBIZ-7545](https://issues.apache.org/jira/browse/OFBIZ-7545)) ([OFBIZ-7546](https://issues.apache.org/jira/browse/OFBIZ-7546)) ([OFBIZ-7547](https://issues.apache.org/jira/browse/OFBIZ-7547)) ([OFBIZ-7548](https://issues.apache.org/jira/browse/OFBIZ-7548)) ([OFBIZ-7549](https://issues.apache.org/jira/browse/OFBIZ-7549)) ([OFBIZ-7550](https://issues.apache.org/jira/browse/OFBIZ-7550))
- Create a Gradle task to use Xlint arguments when building ([OFBIZ-8251](https://issues.apache.org/jira/browse/OFBIZ-8251))
- Improve freemarker formatting in the ecommerce component ([OFBIZ-7949](https://issues.apache.org/jira/browse/OFBIZ-7949))
- Add multisite support in specialpurpose/cmssite ([OFBIZ-7120](https://issues.apache.org/jira/browse/OFBIZ-7120))
- Update various dutch labels in various components ([OFBIZ-7956](https://issues.apache.org/jira/browse/OFBIZ-7956)) ([OFBIZ-8052](https://issues.apache.org/jira/browse/OFBIZ-8052)) ([OFBIZ-8054](https://issues.apache.org/jira/browse/OFBIZ-8054)) ([OFBIZ-8232](https://issues.apache.org/jira/browse/OFBIZ-8232))
- Remove unused fields from various Java classes ([OFBIZ-7698](https://issues.apache.org/jira/browse/OFBIZ-7698))
- Use one generic functionality for selecting all checkboxes ([OFBIZ-7720](https://issues.apache.org/jira/browse/OFBIZ-7720))
- Remove inline js for toggleAll, checkToggle and selectAll in various components ([OFBIZ-7896](https://issues.apache.org/jira/browse/OFBIZ-7896)) ([OFBIZ-7931](https://issues.apache.org/jira/browse/OFBIZ-7931))
- Add check for required input fields in the "Add Facility Party Role"-screen ([OFBIZ-7464](https://issues.apache.org/jira/browse/OFBIZ-7464))
- Improved titles and labels in some create forms in various components ([OFBIZ-7876](https://issues.apache.org/jira/browse/OFBIZ-7876)) ([OFBIZ-8140](https://issues.apache.org/jira/browse/OFBIZ-8140)) ([OFBIZ-8141](https://issues.apache.org/jira/browse/OFBIZ-8141))
- Add required check to the field "facility type" in the "Edit Facility"-screen ([OFBIZ-7480](https://issues.apache.org/jira/browse/OFBIZ-7480))
- Display "fromDate" with default "now timestamp" and add an asterisk if it is part of the primary key in all components ([OFBIZ-7650](https://issues.apache.org/jira/browse/OFBIZ-7650)) ([OFBIZ-7651](https://issues.apache.org/jira/browse/OFBIZ-7651)) ([OFBIZ-7653](https://issues.apache.org/jira/browse/OFBIZ-7653)) ([OFBIZ-7660](https://issues.apache.org/jira/browse/OFBIZ-7660)) ([OFBIZ-7662](https://issues.apache.org/jira/browse/OFBIZ-7662)) ([OFBIZ-7665](https://issues.apache.org/jira/browse/OFBIZ-7665)) ([OFBIZ-7666](https://issues.apache.org/jira/browse/OFBIZ-7666)) ([OFBIZ-8028](https://issues.apache.org/jira/browse/OFBIZ-8028)) ([OFBIZ-8029](https://issues.apache.org/jira/browse/OFBIZ-8029)) ([OFBIZ-8255](https://issues.apache.org/jira/browse/OFBIZ-8255))
- Rename button label to create a new agreement from "Edit Agreement" to "Create Agreement" ([OFBIZ-7608](https://issues.apache.org/jira/browse/OFBIZ-7608))
- Implemented being able to add tasks from different projects on the same invoice ([OFBIZ-8116](https://issues.apache.org/jira/browse/OFBIZ-8116))
- Add a default table style for Payments in the "View Gateway Response" screen ([OFBIZ-8276](https://issues.apache.org/jira/browse/OFBIZ-8276))
- Enable status selection for WorkEffort duplication ([OFBIZ-7959](https://issues.apache.org/jira/browse/OFBIZ-7959))
- Enhance event handler to support a transaction-timeout attribute in the "&lt;event&gt;" element ([OFBIZ-8160](https://issues.apache.org/jira/browse/OFBIZ-8160))
- Change drop-down option from "Any" to empty in Admin Search of the lucene component to make it consistent with similar search forms in the other applications
- Remove unused import in various groovy files ([OFBIZ-7895](https://issues.apache.org/jira/browse/OFBIZ-7895)) ([OFBIZ-8032](https://issues.apache.org/jira/browse/OFBIZ-8032)) ([OFBIZ-8033](https://issues.apache.org/jira/browse/OFBIZ-8033)) ([OFBIZ-8034](https://issues.apache.org/jira/browse/OFBIZ-8034))
- Remove the "ecomclone" web application for the ecommerce component
- Improve the local library classpath setup in OFBiz
- Remove the need to generate ofbiz-base-test.jar
- The "find" buton in the "Lookup Account" search screen redirects to the "Lookup Group"-screen ([OFBIZ-7117](https://issues.apache.org/jira/browse/OFBIZ-7117))
- Use the "ignore\_missing" option of the "&lt;#include" ftl directive and fix said option not working ([OFBIZ-8292](https://issues.apache.org/jira/browse/OFBIZ-8292))
- Improved gradle setting for eclipse classpath
- gzip json files are now served compressed by Tomcat ([OFBIZ-8299](https://issues.apache.org/jira/browse/OFBIZ-8299))
- Reintroduce iteration over components for building the classpath
- Add WebSocket support ([OFBIZ-7073](https://issues.apache.org/jira/browse/OFBIZ-7073))
- Remove the class SSLImpl since it is not needed anymore
- Upgrade Tomcat to 8.0.37 and Log4j to 2.6.2
- Major refactoring of the content of the LICENSE and NOTICE files as a consequence of switching to Gradle
- Convert EntitySaxReader to use the default Sax reader instead of the legacy Javolution implementation and made several of its fields and methods private
- Several cleanups and enhancements in the FreeMarkerWorker class and client code using it
  - simplify and cleanup its public methods
  - removed unused methods and made others private
  - improve integration code to better use the Freemarker API
  - improve implementation of template rendering from strings
  - move freemarkerImports.properties from "widget" to "base"
  - create FreeMarkerWorkerTests for unit tests
  - refactor WebToolsServices.entityImport() to leverage FreeMarkerWorker.renderTemplate()
  - move encodeDoubleQuotes() from FreeMarkerWorker to MacroFormRenderer

## Bugfixes

Functional and technical bugfixes:

- Minor issues that show as warnings in Eclipse ([OFBIZ-8115](https://issues.apache.org/jira/browse/OFBIZ-8115))
- Error in the print PDF functionality on the "Inventory Average Cost"-screen ([OFBIZ-7390](https://issues.apache.org/jira/browse/OFBIZ-7390))
- Console warning related to duplicate field alias ([OFBIZ-7986](https://issues.apache.org/jira/browse/OFBIZ-7986))
- Unnecessary condition in the product decorator ([OFBIZ-7602](https://issues.apache.org/jira/browse/OFBIZ-7602))
- No need to show "---" after selecting any option from drop-down in find screens ([OFBIZ-8050](https://issues.apache.org/jira/browse/OFBIZ-8050))
- Geo Location functionality of "Facility Contact Information"-screen not working ([OFBIZ-7343](https://issues.apache.org/jira/browse/OFBIZ-7343))
- Revert a commit that deprecated the 'safe' value for the attribute 'allow-html'
- Character encoding issue in build.gradle ([OFBIZ-8119](https://issues.apache.org/jira/browse/OFBIZ-8119))
- "testFopMacroLibrary" fails on Windows ([OFBIZ-7938](https://issues.apache.org/jira/browse/OFBIZ-7938))
- Missing delete service ([OFBIZ-8012](https://issues.apache.org/jira/browse/OFBIZ-8012))
- In build.gradle move java encoding declaration to the project configuration section ([OFBIZ-8119](https://issues.apache.org/jira/browse/OFBIZ-8119))
- EntityName starting with a schema name causes an error in Postgres ([OFBIZ-8137](https://issues.apache.org/jira/browse/OFBIZ-8137))
- System erroneously allows changing the status from cancel to empty for returns ([OFBIZ-7724](https://issues.apache.org/jira/browse/OFBIZ-7724))
- Auto-completer does not work for "Data Resource Id" and "Owner Content Id" ([OFBIZ-7721](https://issues.apache.org/jira/browse/OFBIZ-7721))
- Unable to set a new lotId to an existing inventory item ([OFBIZ-7533](https://issues.apache.org/jira/browse/OFBIZ-7533))
- Donation amount gets prorated based on shipped quantity ([OFBIZ-7440](https://issues.apache.org/jira/browse/OFBIZ-7440))
- Wrong module name in the DelegatorFactory class
- GenericDelegator fails with a NPE if delegatorInfo is null
- No States/Provinces exist when creating a new customer from Japan ([OFBIZ-8136](https://issues.apache.org/jira/browse/OFBIZ-8136))
- The "Only Not Used Labels" option of the label manager is broken ([OFBIZ-8114](https://issues.apache.org/jira/browse/OFBIZ-8114))
- Vulnerability in the form widget sort-order element
- The menu item ShipmentGatewayConfig in FacilityMenus has the wrong permission ([OFBIZ-8172](https://issues.apache.org/jira/browse/OFBIZ-8172))
- The Label manager doesn't search .groovy files ([OFBIZ-8153](https://issues.apache.org/jira/browse/OFBIZ-8153))
- The display of State/Provice for non US entities in customer profile is inaccurate ([OFBIZ-8231](https://issues.apache.org/jira/browse/OFBIZ-8231))
- The view screen in the Apache Solr Integration component is broken ([OFBIZ-8225](https://issues.apache.org/jira/browse/OFBIZ-8225))
- postalAddressHtmlFormatter in PartyScreens.xml does not work properly ([OFBIZ-8242](https://issues.apache.org/jira/browse/OFBIZ-8242))
- Profile of contact person not shown on quick add of contact in SFA ([OFBIZ-7816](https://issues.apache.org/jira/browse/OFBIZ-7816))
- Pagination errors in various forms ([OFBIZ-8254](https://issues.apache.org/jira/browse/OFBIZ-8254)) ([OFBIZ-8236](https://issues.apache.org/jira/browse/OFBIZ-8236)) ([OFBIZ-8280](https://issues.apache.org/jira/browse/OFBIZ-8280))
- Missaligned column titles in list forms ([OFBIZ-8260](https://issues.apache.org/jira/browse/OFBIZ-8260)) ([OFBIZ-8272](https://issues.apache.org/jira/browse/OFBIZ-8272))
- RateAmount is not found when the level is "WorkEffort" ([OFBIZ-8052](https://issues.apache.org/jira/browse/OFBIZ-8052))
- Invalid UiLabel in the "Edit Return"-screen ([OFBIZ-8262](https://issues.apache.org/jira/browse/OFBIZ-8262))
- The screens "Edit Calendar Exception Day" and "Edit Calendar Exception Week" are broken ([OFBIZ-8222](https://issues.apache.org/jira/browse/OFBIZ-8222))
- Obsolete "popUpPrint" functions in OfbizUtil.js ([OFBIZ-8275](https://issues.apache.org/jira/browse/OFBIZ-8275))
- "Update Party Invitation" ignores the "ToName" field ([OFBIZ-8151](https://issues.apache.org/jira/browse/OFBIZ-8151))
- jquery.jgrowl.min.css is linked twice in the HTML source ([OFBIZ-7758](https://issues.apache.org/jira/browse/OFBIZ-7758))
- The find button in the "Lookup Account"-screen redirects to the "Lookup Group"-screen ([OFBIZ-7117](https://issues.apache.org/jira/browse/OFBIZ-7117))
- Adding a WorkEffort Timesheet to "Invoice" or "New Invoice" does not work ([OFBIZ-5636](https://issues.apache.org/jira/browse/OFBIZ-5636))
- Adding a role for a party fails when trying to add a second role ([OFBIZ-7135](https://issues.apache.org/jira/browse/OFBIZ-7135))
- SvnInfo.ftl and GitInfo.ftl are not generated by default ([OFBIZ-8250](https://issues.apache.org/jira/browse/OFBIZ-8250))
- Busted layout of the "order status"-screen in the ecommerce component ([OFBIZ-8265](https://issues.apache.org/jira/browse/OFBIZ-8265))
- Barcode elements embedded in XSL-FO templates don't work because of a wrong dependency declared in build.gradle
- Clicking the submit button in the Qualification screen renders a broken page ([OFBIZ-8223](https://issues.apache.org/jira/browse/OFBIZ-8223))
- Error when trying to update the routing task deliverable product ([OFBIZ-8296](https://issues.apache.org/jira/browse/OFBIZ-8296))
- "Order By Referrer" not working ([OFBIZ-7318](https://issues.apache.org/jira/browse/OFBIZ-7318))
- Error on the main page of the scrum component ([OFBIZ-8318](https://issues.apache.org/jira/browse/OFBIZ-8318))
- Issue in label search in webtools ([OFBIZ-8315](https://issues.apache.org/jira/browse/OFBIZ-8315))
- Sorting product overview in the product catalog results in a blank screen ([OFBIZ-8302](https://issues.apache.org/jira/browse/OFBIZ-8302))
- Unable to run the service findContentParens from webtools ([OFBIZ-8322](https://issues.apache.org/jira/browse/OFBIZ-8322))

## Documentation

- Update the documentation with respect to Gradle changes ([OFBIZ-7677](https://issues.apache.org/jira/browse/OFBIZ-7677))
- Add READMEs for various components ([OFBIZ-7500](https://issues.apache.org/jira/browse/OFBIZ-7500)) ([OFBIZ-7501](https://issues.apache.org/jira/browse/OFBIZ-7501)) ([OFBIZ-7505](https://issues.apache.org/jira/browse/OFBIZ-7505))
