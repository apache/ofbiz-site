---
layout: post
title: 'Apache OFBiz News - November 2017 '
date: '2017-12-12T13:31:03+00:00'
permalink: apache-ofbiz-news-november-2017
---
## Apache OFBiz News November 2017

Welcome to our regular monthly round-up of OFBiz news. This month we have news about our continuing work to convert Minilang to Groovy, we participate and collaborate during our Community Days, we share some community statistics about how we are working together and we celebrate our 11th year as an Apache Top Level project.

<!--more-->

## Happy OFBiz Birthday!

It was 11 years ago on 20th December 2006 that Apache OFBiz graduated from the Apache Incubator to become a Top Level Project. Since then, with the help of our great community, we have continued to grow, develop and incorporate new technologies. Our project now has 40 committers and includes a large number of contributors coming from our very active user and developer mailing lists.

<p></p>

Over the past 11 years the project has released a range of OFBiz versions from 4.0 through to 16.11 and are currently preparing to create our branch releases that will be the basis for our next releases. Help us celebrate our Apache Birthday this month and we look forward to the next 11 years at Apache!

## Minilang to Groovy Conversion

Some time ago we mentioned that we would be converting our minilang scripts to Groovy where it was more efficient to do so. Work is still progressing on this and you can follow progress on <a href="https://issues.apache.org/jira/browse/OFBIZ-9350" target="_blank" rel="noopener">JIRA OFBIZ 9350 Deprecate Minilang</a>

Also one of our contributors, Nicolas Malin has updated our test tools suite to include Groovy tests. Details of implementation can be found in <a href="https://issues.apache.org/jira/browse/OFBIZ-9996" target="_blank" rel="noopener">  JIRA OFBIZ-9996</a>. If you would like to help in the conversion effort then please send a message to our dev mailing list..

## Community Days - November

During the year we try to hold several community days where our community comes together and collaborates of fixing issues and bugs, test or help produce something that helps the project. In the past the Community day has been a particular day only but feedback from the community asked us to extend the time to include the days before and after the weekend.

<p></p>

Our final set of Community Days for 2017 was planned during November running from Friday 17th - Tuesday 22nd and several community members decided to volunteer their time to work on some of our outstanding issues. Thanks very much to everyone who has worked to improve OFBiz and make it a better overall product for our users.

## OFBiz Community Statistics

Many of the ASF projects have access to an online that can help gather statistics about the community. This month we have decided to access a few of the statistics and share a few of the items with you.

<strong>Mailing Lists:</strong>

- Over the last 3 months, on our user mailing list, 320 emails have been sent by 74 different authors discussing 72 different topics.
- 

<strong>Jira Contributions</strong>
Over the last 3 months we have had:

- 27 newcomers to the project that have contributed to helping us with our Jira issues, (15 arrived in September, 11 in October and 1 in November)
- 4 returning contributors (so people who have contributed in the past but not on a regular basis), and
- 66 regular contributors to the project
- 612 issues created, 390 issues closed, 95 different people creating issues and 38 different people closing them

It is great to see the community maintaining its activity but also and still growing by attracting new people to the community.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Removed com.fasterxml.jackson.core dependecies from build.gradle, as these will be downloaded with io.jsonwebtoken:jjwt
- Add ability to disable entity eca rule ([OFBIZ-9897](https://issues.apache.org/jira/browse/OFBIZ-9897))
- Add toString() method in ServiceEcaAction class file
- make utility function findWebsite public to be usable from outside
- Replace Inline Javascript with External Javascript ([OFBIZ-9465](https://issues.apache.org/jira/browse/OFBIZ-9465))
- Remove deprecated method GenericDelegator.decryptFieldValue(String, String). ([OFBIZ-9916](https://issues.apache.org/jira/browse/OFBIZ-9916))
- Token Based Authentication ([OFBIZ-9833](https://issues.apache.org/jira/browse/OFBIZ-9833))
- Company Logo is missing at Print Pick Sheet PDF ([OFBIZ-7322](https://issues.apache.org/jira/browse/OFBIZ-7322))
- implemented a declarative style of executing integration test reports
- Use FlexibleLocation.resolveLocation to resolve the fop.path and fop.font.base.url ([OFBIZ-9974](https://issues.apache.org/jira/browse/OFBIZ-9974))
- Remove inline js for toggleAll calling from ftls and also remove checkToggle, toggleAll and selectAll js functions ([OFBIZ-8300](https://issues.apache.org/jira/browse/OFBIZ-8300))
- CSS files defined through layoutSettings in GlobalActions are loaded twice ([OFBIZ-9770](https://issues.apache.org/jira/browse/OFBIZ-9770))
- Set the default value for Html screen Macro Library.([OFBIZ-7879](https://issues.apache.org/jira/browse/OFBIZ-7879))
- Set the default value for Fo Form Macro Library. ([OFBIZ-7932](https://issues.apache.org/jira/browse/OFBIZ-7932))
- Set the default value for Fo Screen Macro Library. ([OFBIZ-7933](https://issues.apache.org/jira/browse/OFBIZ-7933))
- Set the default value for Html Tree Macro Library.([OFBIZ-7988](https://issues.apache.org/jira/browse/OFBIZ-7988))
- Set the default value for Csv Screen Macro Library, Text Screen Macro Library, Xml Form Macro Library and Xls Form Macro Library. ([OFBIZ-7992](https://issues.apache.org/jira/browse/OFBIZ-7992))
- Set the default value for Html Form Macro Library. ([OFBIZ-7985](https://issues.apache.org/jira/browse/OFBIZ-7985))
- Fixing defects reported by FindBugs
  - package org.apache.ofbiz.base.start. ([OFBIZ-9573](https://issues.apache.org/jira/browse/OFBIZ-9573))
  - package org.apache.ofbiz.securityext.login. ([OFBIZ-9637](https://issues.apache.org/jira/browse/OFBIZ-9637))
- refactor list related forms in PartyScreen widgets ([OFBIZ-9405](https://issues.apache.org/jira/browse/OFBIZ-9405))
- Refactor list related form widgets in various WorkEffort screens ([OFBIZ-9415](https://issues.apache.org/jira/browse/OFBIZ-9415))
- Refactoring methods of PartyServices.java ([OFBIZ-9982](https://issues.apache.org/jira/browse/OFBIZ-9982))
- refactor list related forms in PartyScreen widgets ([OFBIZ-9405](https://issues.apache.org/jira/browse/OFBIZ-9405))
- Add a note about the --offline switch for running Gradle in an offline environment without internet connection
- Upgrade Jquery 1.11.0 to JQuery 3.2.1 ([OFBIZ-9978](https://issues.apache.org/jira/browse/OFBIZ-9978))
- Replace request-redirect w/ no redirect-param attribute by request-redirect-no-param ([OFBIZ-9997](https://issues.apache.org/jira/browse/OFBIZ-9997))
- Rearrange permission-service tab in updateShoppingList service definition
- Remove unused service checkContentAssocIds and its usage ([OFBIZ-9999](https://issues.apache.org/jira/browse/OFBIZ-9999))
- Replace Inline js with External js in renderDisplayField macro ([OFBIZ-9843](https://issues.apache.org/jira/browse/OFBIZ-9843))
- Fiscal Gl type is reflecting twice in drop-down of Cost Centers ([OFBIZ-9759](https://issues.apache.org/jira/browse/OFBIZ-9759))
- Moved imagemanagement plugin from images to common/js/plugins ([OFBIZ-5776](https://issues.apache.org/jira/browse/OFBIZ-5776))
- Add ofbiz\_logo.ping ([OFBIZ-9760](https://issues.apache.org/jira/browse/OFBIZ-9760))
- Use ofbizCurrency macro and remove hardcoded ##0.00 string ([OFBIZ-9675](https://issues.apache.org/jira/browse/OFBIZ-9675))
- Implement Groovy test in testtools ([OFBIZ-9996](https://issues.apache.org/jira/browse/OFBIZ-9996))
- improve makeValue in groovy DSL to load directly with a map ([OFBIZ-10020](https://issues.apache.org/jira/browse/OFBIZ-10020))
- Add ability to store latitude and longitude as well while creating postal address ([OFBIZ-9980](https://issues.apache.org/jira/browse/OFBIZ-9980))
- Convert BudgetServices.xml mini lang to groovy ([OFBIZ-9985](https://issues.apache.org/jira/browse/OFBIZ-9985))
- Use console.log instead of alert to show error message if setLocaleFromBrowser returns error
- Remove unused service checkContentAssocIds and its usage ([OFBIZ-9999](https://issues.apache.org/jira/browse/OFBIZ-9999))
- Migrate BudgetServiceTest and AutoAcctgBudgetTests from minilang to groovy ([OFBIZ-9985](https://issues.apache.org/jira/browse/OFBIZ-9985))

### Plugins

- Replace Inline Javascript with External Javascript ([OFBIZ-9465](https://issues.apache.org/jira/browse/OFBIZ-9465))
- Updated tomcat-embed-websocket jar to 8.5.23
- Fixing defects reported by FindBugs
  - package org.apache.ofbiz.securityext.login. ([OFBIZ-9637](https://issues.apache.org/jira/browse/OFBIZ-9637))
- Hardcoded stylesheets and javascript resources ([OFBIZ-5682](https://issues.apache.org/jira/browse/OFBIZ-5682))
- Upgrade Jquery 1.11.0 to JQuery 3.2.1 ([OFBIZ-9978](https://issues.apache.org/jira/browse/OFBIZ-9978))
- Replace request-redirect w/ no redirect-param attribute by request-redirect-no-param ([OFBIZ-9997](https://issues.apache.org/jira/browse/OFBIZ-9997))
- Using Bootstrap Framework for E-Commerce Website ([OFBIZ-9760](https://issues.apache.org/jira/browse/OFBIZ-9760))
- Removed some inline styling from xhtml and w3c images, also removed protocol from external url and used //, the browser automatically appends the appropriate protocol ([OFBIZ-9760](https://issues.apache.org/jira/browse/OFBIZ-9760))

## Bugfixes

Functional and technical bugfixes:

### Framework

- doDecrypt method may throw ClassNotFoundException, BadPaddingException, instead of catching GeneralException Exception will be caught
- The online help is broken ([OFBIZ-9837](https://issues.apache.org/jira/browse/OFBIZ-9837))
- Error on first access to Online Help ([OFBIZ-9925](https://issues.apache.org/jira/browse/OFBIZ-9925))
- Corrected wrong FindBugs/refactoring change introduced in r1813640. ([OFBIZ-9716](https://issues.apache.org/jira/browse/OFBIZ-9716))
- Sales by Store report calculates Value Sold incorrectly ([OFBIZ-9958](https://issues.apache.org/jira/browse/OFBIZ-9958))
- UtilMisc.ensureLocale does not always return a valid Locale. ([OFBIZ-9964](https://issues.apache.org/jira/browse/OFBIZ-9964))
- Empty Space above Find Payment header [OFBIZ-9965](https://issues.apache.org/jira/browse/OFBIZ-9965)
- NullPointer Access in CategoryContentWrapper.getProductCategoryContentAsText when locale parameter is missing ([OFBIZ-9970](https://issues.apache.org/jira/browse/OFBIZ-9970))
- EntityListIterator.getComplateList returns error randomly ([OFBIZ-9919](https://issues.apache.org/jira/browse/OFBIZ-9919))
- Inventory Report PDF lists all available statusId's irrespective of selection criteria ([OFBIZ-7438](https://issues.apache.org/jira/browse/OFBIZ-7438))
- [FB] Find Security Bugs ([OFBIZ-9973](https://issues.apache.org/jira/browse/OFBIZ-9973))
- ShippingEvents.getShipGroupEstimate() method gives untraceable null pointer exception for BigDecimal comparison ([OFBIZ-9975](https://issues.apache.org/jira/browse/OFBIZ-9975))
- Party Id field missing while creating contact list party in the marketing component ([OFBIZ-9698](https://issues.apache.org/jira/browse/OFBIZ-9698))
- Duplicated dollar symbols should be removed from uiLabels. ([OFBIZ-9968](https://issues.apache.org/jira/browse/OFBIZ-9968))
- Content related changes needs OFBiz server restart ([OFBIZ-9922](https://issues.apache.org/jira/browse/OFBIZ-9922))
- Fix Default or Empty Catch block in Java and Groovy files ([OFBIZ-8341](https://issues.apache.org/jira/browse/OFBIZ-8341))
- OpenStreetMap geolocation no longer works ([OFBIZ-9991](https://issues.apache.org/jira/browse/OFBIZ-9991))
- Issue in redirection while creating a new party group ([OFBIZ-9914](https://issues.apache.org/jira/browse/OFBIZ-9914))
- Deleting workeffort from Find WorkEffort page gives unusual response ([OFBIZ-9648](https://issues.apache.org/jira/browse/OFBIZ-9648))
- Create Related Account from Contact Profile redirect to empty profile screen ([OFBIZ-9697](https://issues.apache.org/jira/browse/OFBIZ-9697))
- Inventory transfer creates unnecessary record with 0 (zero) ([OFBIZ-9971](https://issues.apache.org/jira/browse/OFBIZ-9971))
- Incorrect success message after creating prospect ([OFBIZ-9896](https://issues.apache.org/jira/browse/OFBIZ-9896))
- Add the class GroovyScriptTestCase.java and the simple groovy test-suite in the previous commit related to issue [OFBIZ-9996](https://issues.apache.org/jira/browse/OFBIZ-9996)
- UI Issue with Account Limit at Find Billing Account(s) ([OFBIZ-9899](https://issues.apache.org/jira/browse/OFBIZ-9899))
- No option to create the account contacts in SFA component ([OFBIZ-10010](https://issues.apache.org/jira/browse/OFBIZ-10010))
- Replace org.apache.commons.lang.StringEscapeUtils.unescapeHtml() method by org.jsoup.parser.Parser.unescapeEntities() ([OFBIZ-10023](https://issues.apache.org/jira/browse/OFBIZ-10023))
- Improvements in gift certificate process ([OFBIZ-10027](https://issues.apache.org/jira/browse/OFBIZ-10027))
