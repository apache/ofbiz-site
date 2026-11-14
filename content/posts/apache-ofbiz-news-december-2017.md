---
layout: post
title: Apache OFBiz News - December 2017
date: '2018-02-06T09:31:51+00:00'
permalink: apache-ofbiz-news-december-2017
---
## Apache OFBiz News December 2017

Welcome to our regular monthly round-up of OFBiz news. This month we have news about our usual end of year tasks to create a new branch but this time it's two instead of one!.

<!--more-->

## New Framework and Plugin 17.12 Branches

If you have been following our list of monthly fixes and improvements then you may have noticed the separation being made between "Framework" and "Plugins". As part of our usual end of year tasks, the community looks at creating a new branch that will become the basis for the next release. During December the community decided to create not one, but two new branches. This is the first time we have created two in parallel, one for the framework and one for the plugins.

Both branches were created with 17.12 as part of their descriptions. The framework branch contains not only the framework components but also the core applications such as Accounting, Human Resources, Manufacturing, Marketing, Order Management while the plugins includes the other applications such as eCommerce, Asset Maintenance, Project Manager and Scrum.

**Note that these two branches are not yet released and will be stablised over the next few months until they are ready.**

Thanks very much to the many members of the community who have done a lot of amazing work out with code cleanup and refactoring. The overall aim is to make OFBiz flexible yet simple to implement. Users can still install OFBiz with both core and plugin applications together but also have the flexibility of having a framework only version. In future, we hope that our contributors will also start to create their own plugins that can be made available to the community.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Move the hhfacility application and jQuery mobile to Attic ([OFBIZ-10032](https://issues.apache.org/jira/browse/OFBIZ-10032))
- Replace Rainbow OFBiz logo ([OFBIZ-10034](https://issues.apache.org/jira/browse/OFBIZ-10034))
- Move all data in applications to the datamodel component and remove unused files ([OFBIZ-9501](https://issues.apache.org/jira/browse/OFBIZ-9501))
  - Move selected seed data for product, accounting, manufacturing, humanres, marketing, commonext and order component.
  - Leave the protlet, security and help data for some of the components.
- Update build.gradle to the latest dependencies. Apache Tomcat ([OFBIZ-10026](https://issues.apache.org/jira/browse/OFBIZ-10026))
- Upgrade Jquery 1.11.0 to JQuery 3.2.1 ([OFBIZ-9978](https://issues.apache.org/jira/browse/OFBIZ-9978))
  - Include css files to theme properties and screens. Manually add datepicker-en.js and datepicker-it-CH.js.
  - Update JGrowl from 1.4.1 to 1.4.6
- Fix defects reported by FindBugs for ca. 50 packages in all components ([OFBIZ-9450](https://issues.apache.org/jira/browse/OFBIZ-9450))
- Create a new entity FacilityCalendar ([OFBIZ-10040](https://issues.apache.org/jira/browse/OFBIZ-10040)) This entity creates the one-to-many relationship between facility and calendar.
- Handle service response effectively in ServiceUtil and Accounting ([OFBIZ-9981](https://issues.apache.org/jira/browse/OFBIZ-9981) and [OFBIZ-10021](https://issues.apache.org/jira/browse/OFBIZ-10021))
- General refactoring and code improvements in ca. 80 packages in all components (<a id="key-val" class="issue-link" href="https://issues.apache.org/jira/browse/OFBIZ-9836" rel="13108296" data-issue-key="OFBIZ-9836">OFBIZ-9836</a>) Changes include:
  - Remove unnecessary parameters in diamond operators
  - Remove unnecessary else-phrase
  - Use multi catches
  - Enhance for-loops
  - Remove exceptions which aren't thrown
  - Remove old commented out code
  - Use braces around all if and else statements
- Replace all delegator findByAnd and findOne method callings by EntityQuery methods ([OFBIZ-10029](https://issues.apache.org/jira/browse/OFBIZ-10029))
- Always check if debug verbose is on when using Debug.logVerbose() ([OFBIZ-10052](https://issues.apache.org/jira/browse/OFBIZ-10052))
- Website can manage hidden webapp ([OFBIZ-10088](https://issues.apache.org/jira/browse/OFBIZ-10088)) Improve RequestHandler.makeLink code to manage url generation with added webapp path. When a websiteId is present and it has a webappPatch defined, use it on the link generation.
- Remove applet concept in OFBiz ([OFBIZ-10094](https://issues.apache.org/jira/browse/OFBIZ-10094)) Following discussion at [http://markmail.org/message/dlp4zoo3xxuiefpn](http://markmail.org/message/dlp4zoo3xxuiefpn)
- Replace Inline js with External js in makeHyperlinkString macro ([OFBIZ-9852](https://issues.apache.org/jira/browse/OFBIZ-9852))
- Replace Masked-Input-Plugin with jQuery-Mask-Plugin ([OFBIZ-9493](https://issues.apache.org/jira/browse/OFBIZ-9493))
- Tomcat SSO ([OFBIZ-10047](https://issues.apache.org/jira/browse/OFBIZ-10047))
  - Allows developers the option to use Tomcat SSO, instead of the externalLoginKey for SSO.
  - Fixes the issues mentioned in <a class="issue-link" title="Single sign-on to OFBiz with CAS" href="https://issues.apache.org/jira/browse/OFBIZ-6963" data-issue-key="OFBIZ-6963">OFBIZ-6963</a> and <a class="issue-link" title="Multiple logins required when using help screen before navigating to another application" href="https://issues.apache.org/jira/browse/OFBIZ-6994" data-issue-key="OFBIZ-6994">OFBIZ-6994</a>.
- Add option for multiple dependencies of dropdown values for the OFBiz website ([OFBIZ-10103](https://issues.apache.org/jira/browse/OFBIZ-10103))
- Import csv file with data file and add start-line to escape the header column line ([OFBIZ-10108](https://issues.apache.org/jira/browse/OFBIZ-10108))
- Add a new attribute to select the EOL type during the csv export file from data file process ([OFBIZ-9536](https://issues.apache.org/jira/browse/OFBIZ-9536)) With this improvement it's now possible to define an eol-type attribute on data-file elements as CR or CRLF values.
- Update DBCP to 2.2.0 ([OFBIZ-9917](https://issues.apache.org/jira/browse/OFBIZ-9917))

### Plugins

- Update markup according to standard markup given by Bootstrap v4.0.0 for ca. 15 pages ([OFBIZ-9760](https://issues.apache.org/jira/browse/OFBIZ-9760))
- Move the hhfacility application and jQuery to Attic ([OFBIZ-10032](https://issues.apache.org/jira/browse/OFBIZ-10032))
- Upgrade JQuery from 1.11.0 to 3.2.1 ([OFBIZ-9978](https://issues.apache.org/jira/browse/OFBIZ-9978))
  - Include css files to theme properties and screens. Manually add datepicker-en.js and datepicker-it-CH.js.
  - Update Jeditable from 1.7.2 to 1.7.3
- Fix defects reported by FindBugs
  - Package org.apache.ofbiz.cmssite.multisite. ([OFBIZ-9626](https://issues.apache.org/jira/browse/OFBIZ-9626))
  - Package org.apache.ofbiz.content.test. ([OFBIZ-9817](https://issues.apache.org/jira/browse/OFBIZ-9817))
  - Package org.apache.ofbiz -bi.util, -birt and -birt.container. ([OFBIZ-10102](https://issues.apache.org/jira/browse/OFBIZ-10102))
- Replace all delegator findByAnd and findOne method callings by EntityQuery methods ([OFBIZ-10029](https://issues.apache.org/jira/browse/OFBIZ-10029))
- Always check if debug verbose is on when using Debug.logVerbose() ([OFBIZ-10052](https://issues.apache.org/jira/browse/OFBIZ-10052))
- Remove applet concept in OFBiz ([OFBIZ-10094](https://issues.apache.org/jira/browse/OFBIZ-10094))
- Replace inline js with external js in makeHyperlinkString macro ([OFBIZ-9852](https://issues.apache.org/jira/browse/OFBIZ-9852))
- Replace Masked-Input-Plugin with jQuery-Mask-Plugin ([OFBIZ-9493](https://issues.apache.org/jira/browse/OFBIZ-9493))
- Improvement of navbar of ecommerce page ([OFBIZ-10117](https://issues.apache.org/jira/browse/OFBIZ-10117))
- Add responsive and thread-light class on quote list ecommerce page ([OFBIZ-10095](https://issues.apache.org/jira/browse/OFBIZ-10095))
- Update Lucene and Solr to 7.2 ([OFBIZ-10130](https://issues.apache.org/jira/browse/OFBIZ-10130))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Error is thrown because of missing 'orderContactMechId' when updating empty orderContactMech ([OFBIZ-9967](https://issues.apache.org/jira/browse/OFBIZ-9967))
- Unnecessary autogenerated Default or Empty Catch block in Java and Groovy files ([OFBIZ-8341](https://issues.apache.org/jira/browse/OFBIZ-8341))
- Missing default-entity-name on create and delete definition service for CarrierShipmentMethod entity ([OFBIZ-8664](https://issues.apache.org/jira/browse/OFBIZ-8664))
- Edit-Party-Group page does not show current set values ([OFBIZ-9532](https://issues.apache.org/jira/browse/OFBIZ-9532))
- Service createContent fails to create proper ContentAssoc entity ([OFBIZ-10098](https://issues.apache.org/jira/browse/OFBIZ-10098))
- Service updateTextContent fails ([OFBIZ-10112](https://issues.apache.org/jira/browse/OFBIZ-10112))
- While creating return fin account, currency is not the same ([OFBIZ-9977](https://issues.apache.org/jira/browse/OFBIZ-9977))
- Party Classification Groups are not listed on FindParty screen dropdown ([OFBIZ-10007](https://issues.apache.org/jira/browse/OFBIZ-10007))
- Error printing return pdf ([OFBIZ-9915](https://issues.apache.org/jira/browse/OFBIZ-9915))
- Unable to remove selected item from cart ([OFBIZ-10120](https://issues.apache.org/jira/browse/OFBIZ-10120))
- Order process broken due to missing service definition ([OFBIZ-10129](https://issues.apache.org/jira/browse/OFBIZ-10129))
- Encoding issue while exporting csv files ([OFBIZ-10109](https://issues.apache.org/jira/browse/OFBIZ-10109))

### Plugins

- Ecommerce js console error because of missing popper.js file ([OFBIZ-10016](https://issues.apache.org/jira/browse/OFBIZ-10016))
- RuntimeException on viewroles page of Scrum component ([OFBIZ-10033](https://issues.apache.org/jira/browse/OFBIZ-10033))
- Error while creating an example from the Ajax screen ([OFBIZ-10037](https://issues.apache.org/jira/browse/OFBIZ-10037))

## Documentation

- Document how the thread-pool max-threads works ([OFBIZ-10002](https://issues.apache.org/jira/browse/OFBIZ-10002)) Minimalist documentation with reference to stackoverflow, which references Brian Goetz's and co's "Java Concurrency in Practice" after discussion at [http://markmail.org/message/ksutqpuyyd4kmbl2](http://markmail.org/message/ksutqpuyyd4kmbl2)
- Create a DATAMODELCHANGES.md to track data model changes ([OFBIZ-9902](https://issues.apache.org/jira/browse/OFBIZ-9902))
