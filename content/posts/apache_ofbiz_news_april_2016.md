---
layout: post
title: Apache OFBiz News - April 2016
date: '2016-05-04T16:00:54+00:00'
permalink: apache_ofbiz_news_april_2016
---
## Apache OFBiz News April 2016

Welcome to our monthly round-up of OFBiz news. This month we have news about the continuing work on our code tidy up and re-factor, the community spend another weekend improving OFBiz and we announce two OFBiz releases.

<!--more-->

## OFBiz April Releases

In April not one, but two new OFBiz releases came out. Details of these releases are below:<p></p>
Release 12.04.06 is the 6th update and also the last release in the 12.04 series. Release details and notes can be found  at the following link <p></p>
<a href="https://blogs.apache.org/ofbiz/entry/announce_apache_ofbiz_12_04">12.04.06 Announcement</a>

<p></p>

Release 13.07.03 is the 3rd update to the 13.07 series. Release details and notes can be found  at the following link <p></p>
<a href="https://blogs.apache.org/ofbiz/entry/announce_apache_ofbiz_13_07">13.07.03 Announcement</a>

<p></p>

The community is now working on the preparation of the next brand new release - OFBiz Release 14.12!

## OFBiz Code Tidy Up and Re-Factor

The work on the OFBiz code tidy up and re-factor is continuing. An initial 13 tasks were identified in our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Re-Factor+To-Do+List">Current Re-Factor To Do List</a>

<p></p>

Community members have picked up and worked on specific tasks and so far 4 tasks have been completed and fixed. Another 3 tasks are currently in progress and there are 6 tasks yet to be started. The community is actively looking for people to help with the re-factoring effort so if you are interested then please take a look at the to do list and choose an open task to pick up.

<p></p>

Although not part of the list, tidying up has been happening in other areas too, such as the standardisation of file directory structures and naming conventions. <p></p>
Thanks very much to everyone for their contributions as all clean up work however small contributes the overall effort.

## Hotwax Team 'Community Weekend'

Although our next OFBiz Community Day is not planned until June, the team at Hotwax Systems held another one of their monthly community events earlier this month. A total of 27 members from their team participated and worked on various OFBiz tasks including testing, providing patches and committing changes and improvements.

<p></p>

As usual, over that weekend, other community members joined in and collaborated with the Hotwax Team. Thank you to everyone who gave up their time to work on improving OFBiz!

<p></p>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Replace OFBiz HttpClient by org.apache.commons.httpclient.HttpClient ([OFBIZ-4430](https://issues.apache.org/jira/browse/OFBIZ-4430))
- Update the passport component to use httpclient/core-4.4.1 instead of commons-httpclient-3.1 ([OFBIZ-6755](https://issues.apache.org/jira/browse/OFBIZ-6755))
- Add commented out "-Xlint:deprecation" compilerarg value for convenience in macros.xml
- Remove unnecessary space and unnecessary return in ModelService.java
- Add a french label in HumanResErrorUiLabels.xml
- Simplify getChildHRCategoryTree. Breaking the single long method to multiple private functions with improved exception handling ([OFBIZ-6986](https://issues.apache.org/jira/browse/OFBIZ-6986))
- Improved CMS tree: more functionality and faster for large trees ([OFBIZ-4502](https://issues.apache.org/jira/browse/OFBIZ-4502))
- Relocate .ftl files in
  - accounting component ([OFBIZ-6813](https://issues.apache.org/jira/browse/OFBIZ-6813))
  - assetmaint component ([OFBIZ-6825](https://issues.apache.org/jira/browse/OFBIZ-6825))
  - oagis component ([OFBIZ-6840](https://issues.apache.org/jira/browse/OFBIZ-6840))
  - content component ([OFBIZ-6815](https://issues.apache.org/jira/browse/OFBIZ-6815))
  - party component ([OFBIZ-6820](https://issues.apache.org/jira/browse/OFBIZ-6820))
  - party and specialpurpose/ecommerce component ([OFBIZ-6821](https://issues.apache.org/jira/browse/OFBIZ-6821))
  - workeffort component ([OFBIZ-6822](https://issues.apache.org/jira/browse/OFBIZ-6822))
  - framework/common component ([OFBIZ-6823](https://issues.apache.org/jira/browse/OFBIZ-6823))
  - framework/webtools component ([OFBIZ-6824](https://issues.apache.org/jira/browse/OFBIZ-6824))
  - specialpurpose/bi component ([OFBIZ-6826](https://issues.apache.org/jira/browse/OFBIZ-6826))
  - specialpurpose/birt component ([OFBIZ-6827](https://issues.apache.org/jira/browse/OFBIZ-6827))
  - marketing component ([OFBIZ-6818](https://issues.apache.org/jira/browse/OFBIZ-6818))
  - specialpurpose/ebay and specialpurpose/ebaystore component ([OFBIZ-6829](https://issues.apache.org/jira/browse/OFBIZ-6829))
  - specialpurpose/googlebase component ([OFBIZ-6833](https://issues.apache.org/jira/browse/OFBIZ-6833))
  - specialpurpose/googlecheckout component ([OFBIZ-6834](https://issues.apache.org/jira/browse/OFBIZ-6834))
  - specialpurpose/hhfacility component ([OFBIZ-6835](https://issues.apache.org/jira/browse/OFBIZ-6835))
  - specialpurpose/passport component ([OFBIZ-6838](https://issues.apache.org/jira/browse/OFBIZ-6838))
  - specialpurpose/lucene component ([OFBIZ-6839](https://issues.apache.org/jira/browse/OFBIZ-6839))
  - specialpurpose/scrum component ([OFBIZ-6836](https://issues.apache.org/jira/browse/OFBIZ-6836))
  - specialpurpose/example component ([OFBIZ-6831](https://issues.apache.org/jira/browse/OFBIZ-6831))
  - securityext component ([OFBIZ-6975](https://issues.apache.org/jira/browse/OFBIZ-6975))
  - all theme components ([OFBIZ-7022](https://issues.apache.org/jira/browse/OFBIZ-7022))
- Upgrade Tomcat to 8.0.32 ([OFBIZ-6915](https://issues.apache.org/jira/browse/OFBIZ-6915))
- Add Support For Compound Screen Widget XML Files ([OFBIZ-4090](https://issues.apache.org/jira/browse/OFBIZ-4090)) and add Example for Compound Screen Widget ([OFBIZ-6990](https://issues.apache.org/jira/browse/OFBIZ-6990))
- Update supress.xml to deal with Tomcat 8.0.33
- Remove Facilities.groovy from hhfacility as it isn't being used ([OFBIZ-6841](https://issues.apache.org/jira/browse/OFBIZ-6841))
- UI Improvements in webtools/widget/Menus.xml ([OFBIZ-7006](https://issues.apache.org/jira/browse/OFBIZ-7006))
- Support to add condition for Geo Location in Promo Engine ([OFBIZ-7008](https://issues.apache.org/jira/browse/OFBIZ-7008))
- Upgrade the Apache Tika Library, related to ([OFBIZ-6497](https://issues.apache.org/jira/browse/OFBIZ-6497)) and ([OFBIZ-7015](https://issues.apache.org/jira/browse/OFBIZ-7015))
- Support configuration options for
  - ordermgr ([OFBIZ-6191](https://issues.apache.org/jira/browse/OFBIZ-6191))
  - catalog webapp ([OFBIZ-6192](https://issues.apache.org/jira/browse/OFBIZ-6192))
  - ecommerce ([OFBIZ-6193](https://issues.apache.org/jira/browse/OFBIZ-6193))
  - workeffort ([OFBIZ-6294](https://issues.apache.org/jira/browse/OFBIZ-6294))
  - bi ([OFBIZ-6194](https://issues.apache.org/jira/browse/OFBIZ-6194))
- Remove limitation regarding menu-name in ofbiz-component.xsd ([OFBIZ-6667](https://issues.apache.org/jira/browse/OFBIZ-6667))
- Renamed party/templates folder to party/template ([OFBIZ-6820](https://issues.apache.org/jira/browse/OFBIZ-6820))
- Moved changeOrgPartyId.groovy to WEB-INF/actions, also removed unused ofbizsetup/viewcontact.ftl file ([OFBIZ-6814](https://issues.apache.org/jira/browse/OFBIZ-6814))
- Renamed ecommerce/templates to ecommerce/template to make it consistent ([OFBIZ-6811](https://issues.apache.org/jira/browse/OFBIZ-6811))
- Refactor Start.java as per guidelines in ([OFBIZ-6783](https://issues.apache.org/jira/browse/OFBIZ-6783))
- Use SecureRandom instead of Random where appropriate, and randomUUID for externalKey ([OFBIZ-7028](https://issues.apache.org/jira/browse/OFBIZ-7028))
- Add ability to change Routing statuses ([OFBIZ-6307](https://issues.apache.org/jira/browse/OFBIZ-6307))

## Bugfixes

Functional and technical bugfixes:

- Possible security issue "Flaw in content wrapper cache handling with encoderType" ([OFBIZ-6973](https://issues.apache.org/jira/browse/OFBIZ-6973))
- Redundant image in popup (tooltip) (<a href="https://issues.apache.org/jira/browse/<a href=">OFBIZ-6968</a>"&gt;[OFBIZ-6968](https://issues.apache.org/jira/browse/OFBIZ-6968))
- Resource leakes in CommonServices.java ([OFBIZ-6972](https://issues.apache.org/jira/browse/OFBIZ-6972))
- Remove dead imports ([OFBIZ-6971](https://issues.apache.org/jira/browse/OFBIZ-6971))
- SagePay classes make use of deprecated httpclient features ([OFBIZ-6286](https://issues.apache.org/jira/browse/OFBIZ-6286))
- Removes useless delegator var and import in SagePayPaymentServices
- Remove the deprecated code from trunk if deprecated before December 2014 ([OFBIZ-6273](https://issues.apache.org/jira/browse/OFBIZ-6273))
- Fixes "Error in entity reference chart for static in webtools" ([OFBIZ-6995](https://issues.apache.org/jira/browse/OFBIZ-6995))
- Corrects an error when sorting a localized field when the order way is present like '-field', '+field', 'field ASC', 'field DESC'
- Code correction for service=findContentParents ([OFBIZ-6997](https://issues.apache.org/jira/browse/OFBIZ-6997))
- Some files set viewIndex to 1 by default rather than 0 ([OFBIZ-6705](https://issues.apache.org/jira/browse/OFBIZ-6705))
- Replace streamDataResource with getDataResourceStream DataResourceWorker method, thus fixing OTHER\_OBJECT stream dataResource management ([OFBIZ-6944](https://issues.apache.org/jira/browse/OFBIZ-6944))
- Clicking party name from the header section generates an error ([OFBIZ-6953](https://issues.apache.org/jira/browse/OFBIZ-6953))
- POS login page getting error FileNotFoundException ([OFBIZ-7007](https://issues.apache.org/jira/browse/OFBIZ-7007))
- Shipping method is shown on all Promo Conditions even when only a single condition includes Shipping Method ([OFBIZ-7010](https://issues.apache.org/jira/browse/OFBIZ-7010))
- GlAccountOrganizations manually added using accounting forms do not appear on trial report because fromDate gets set to NULL ([OFBIZ-5938](https://issues.apache.org/jira/browse/OFBIZ-5938))
- Incorrect order adjustment after order item is cancelled ([OFBIZ-6781](https://issues.apache.org/jira/browse/OFBIZ-6781))
- Ofbizsetup create product store causes an exception, remove the use of temp file to load entity data ([OFBIZ-5949](https://issues.apache.org/jira/browse/OFBIZ-5949))
- Party search form does not properly collapse sections when none|postal|telecom|other selected ([OFBIZ-7013](https://issues.apache.org/jira/browse/OFBIZ-7013))
- Fixed a regression on &lt;auto-parameters-entity/&gt; and &lt;auto-parameters-service/&gt; in which default-entity-name and default-service-name weren't taken in consideration anymore ([OFBIZ-5703](https://issues.apache.org/jira/browse/OFBIZ-5703))
- Editing project in Project Manager duplicates resources ([OFBIZ-6989](https://issues.apache.org/jira/browse/OFBIZ-6989))
- Calling Groovy as Event generates error when delegator.find used ([OFBIZ-6808](https://issues.apache.org/jira/browse/OFBIZ-6808))
- Fixes "ExampleCompoundWidgets throws errors" ([OFBIZ-7023](https://issues.apache.org/jira/browse/OFBIZ-7023))
- Attribute 'placeholder' is not allowed to appear in element 'text' ([OFBIZ-7024](https://issues.apache.org/jira/browse/OFBIZ-7024))
- Remove duplicated jars under solr component ([OFBIZ-7026](https://issues.apache.org/jira/browse/OFBIZ-7026))
- Email-Notification send multiple times ([OFBIZ-7025](https://issues.apache.org/jira/browse/OFBIZ-7025))
- Error in sendMailHiddenInLog service ([OFBIZ-5732](https://issues.apache.org/jira/browse/OFBIZ-5732))

## Documentation

- Update OWASP dependency-check documents
- Add a comment to the testRemoteSoap service to clarify when to use it and how it works.
- Improve uom convert error message
- Improved the documentation about the purpose and behavior of the "auth" and "in-validate" secas events.
