---
layout: post
title: 'Apache OFBiz News - April 2017 '
date: '2017-05-05T13:47:43+00:00'
permalink: apache-ofbiz-news-april-2017
---
## Apache OFBiz News April 2017

Welcome to our regular monthly round-up of OFBiz news. This month we have news about more new OFBiz tutorials that are available, we setup another video channel, OFBiz goes live on Facebook, we remove some deprecated entities and we congratulate 7 new ASF members from our community.

<!--more-->

## Apache OFBiz on Facebook

Did you know that Apache OFBiz is now on Facebook?

  <p> </p>

Our project expanded its social media presence this month by getting setup on Facebook. Facebook automatically generates pages for highly requested pages that don't already exist. One of these auto generated pages existed for OFBiz and it had over 250 likes indicating that followers were looking for us. Our new project Facebook page can be found at the link below

  <p> </p> <a href="https://s.apache.org/wP4E" target="_blank">OFBiz on Facebook</a>

  <p> </p>

We are now working on actively building our following. If you are on Facebook then please help support OFBiz by liking us and sharing your comments, views and pictures with us. Many thanks to Deepak Dixit, Ashish Vijaywargiya and Michael Brohl for getting things setup and also for taking on Facebook administration on behalf of the project.

## OFBiz Vimeo Channel

Last month we talked about our <a href="https://www.youtube.com/user/ofbiz" target="_blank">Youtube Channel</a>. This month we are once again expanding and have also setup a <a href="https://vimeo.com/channels/apacheofbiz">Vimeo Channel for OFBiz</a>.
We will be publishing the same content on both channels and our users will have the choice of which video channel they prefer to use.

  <p> </p>

Please feel free to follow our video channels and thanks to Deepak Dixit for getting this setup.

## New OFBiz Tutorials

During the month, one of our community members, Pranay Pandey, created some more video tutorials. The new videos can be found using the links below:

<oll>

- <a href="https://youtu.be/uMs5eedtHYo" target="_blank">Introduction to OFBiz Directory Structure Release 16.11</a>
- <a href="https://youtu.be/d14-emy5lSE" target="_blank">Create a Plugin Release 16.11</a>
- <a href="https://youtu.be/Lzmv0DCC5N4" target="_blank">Setup OFBiz with MySQL</a>
- <a href="https://youtu.be/mxToh2rX7NY" target="_blank">Setup OFBiz in IntelliJ IDEA IDE - Release 16.11 and Trunk</a>
- <a href="https://youtu.be/UWceeQwk-Ho" target="_blank">Database Entities</a>

    <p> </p>

A very big thank you to Pranay for taking the time to make these videos and we hope that our community is finding them useful.

    <p> </p>

If you have some ideas for videos that you would like to see on our channels or perhaps you would like to create a video for our OFBiz Youtube and Vimeo channels then please send a message with the details to our dev mailing list <a href="https://lists.apache.org/list.html?dev@ofbiz.apache.org">dev@ofbiz.apache.org</a>.

## New ASF Members from the OFBiz Community

Seven people from our community have become Apache Software Foundation members. Membership is by invitation only so it's a real honour to be invited. Many congratulations to:

- Taher Alkhateeb
- Michael Brohl
- Scott Gray
- Bilgin Ibryam
- Nicolas Malin
- Anil Patel
- Ashish Vijaywargiya

This means that OFBiz now has 12 ASF members from our community. Thank you all for your work and commitment to OFBiz and the ASF.

## Removal of Deprecated Entities

The code clean up work is continuing and as part of this the community has decided to remove old and deprecated entities. Details of what has been removed can be found in the following Jira

    <p> </p> <a href="https://issues.apache.org/jira/browse/OFBIZ-9327" target="_blank">OFBIZ-9327 Remove Deprecated Entities </a>

    <p> </p>

Thanks very much to everyone who has been involved in this and other clean up or refactoring work.

## New features and improvements

<span style="font-weight: normal;">Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:</span>

#### Framework

- Refactor list forms related to gateway transactions in accounting into grids ([OFBIZ-9282](https://issues.apache.org/jira/browse/OFBIZ-9282)) Refactor various list form references in screen widgets.
- Add the entire plugins directory to .gitignore.
- Remove &quot;quick ship&quot; option with back ordered products.
- Include proper validation when adding attributes with the AddProductAttribute form ([OFBIZ-7452](https://issues.apache.org/jira/browse/OFBIZ-7452))
- Remove duplicate NewQuote button on ViewQuote page ([OFBIZ-9318](https://issues.apache.org/jira/browse/OFBIZ-9318))
- Upgrade to the latest version of Apache Geronimo Transaction from 3.1.1 to 3.1.4.
- Remove deprecated entities and related migration services ([OFBIZ-9327](https://issues.apache.org/jira/browse/OFBIZ-9327))
- Convert service which creates and removes a QuoteRole to entity-auto and add service to update and expire a QuoteRole ([OFBIZ-9331](https://issues.apache.org/jira/browse/OFBIZ-9331))
- Resolve OFBiz-framework dependencies on OFBiz-plugins in order to build an run tests ([OFBIZ-9322](https://issues.apache.org/jira/browse/OFBIZ-9322)) Move some files into applications directory and modify others to fix the dependency order.

#### Plugins

- My Portal: Align column titles in list forms ([OFBIZ-8486](https://issues.apache.org/jira/browse/OFBIZ-8486))
- Remove dependencies from OFBiz framework to plugins ([OFBIZ-9322](https://issues.apache.org/jira/browse/OFBIZ-9322)) This is related to a commit in ofbiz-framework in which data that is removed in plugins is added to the framework (see above).

## Bugfixes

Functional and technical bugfixes:

#### Framework

- SOAPEventHandler only outputs error to log when secureSoapAnswer = &quot;false&quot; ([OFBIZ-9289](https://issues.apache.org/jira/browse/OFBIZ-9289))
- Sorting Links in Lookup opens new unstyled window instead of sorting the table (Find Content page) ([OFBIZ-9280](https://issues.apache.org/jira/browse/OFBIZ-9280)) Behavior occurs for DataRessourceId and OwnerContentId.
- Add missing default-entity-name attribute to the &quot;entity-auto&quot; service definition for createReturnItemResponse. The missing attribute was causing a service execution error, preventing the processing of returns.
- Update Tomcat to 8.0.42 because of a disclosed bug in current version (see ticket for the notice from Apache) ([OFBIZ-9313](https://issues.apache.org/jira/browse/OFBIZ-9313))
- The createTenant Gradle task fails ([OFBIZ-9273](https://issues.apache.org/jira/browse/OFBIZ-9273)) This issue is due to the creation of the build.gradle file in plugin which has an empty gradle task defined in it. Solve by comment out the build.gradle template content.
- Creating plugins crashes the build system ([OFBIZ-9273](https://issues.apache.org/jira/browse/OFBIZ-9273)) The issue was due to introducing an incorrect flag of pluginId instead of plugin.name.
- Keywords for a newly added WorkEffort are not listed ([OFBIZ-9315](https://issues.apache.org/jira/browse/OFBIZ-9315))
- On setting verbose true, UtilHttp.getParameterMap() method prints username and password in logs ([OFBIZ-9310](https://issues.apache.org/jira/browse/OFBIZ-9310)) Commented out the line that prints &quot;Request Parameter Map Entries&quot; as it may print username and password entered by a user.
- EmploymentApplications in Party manager does not list any record even if they exist ([OFBIZ-9220](https://issues.apache.org/jira/browse/OFBIZ-9220))
- Routing updates with empty routing name ([OFBIZ-7375](https://issues.apache.org/jira/browse/OFBIZ-7375))
- AccountingQuantity is not updated when a physical inventory variance is created ([OFBIZ-9324](https://issues.apache.org/jira/browse/OFBIZ-9324))
- Create and use an OWASP PolicyFactory for content sanitization in ContentWorker for Birt Flexible Reports ([OFBIZ-9166](https://issues.apache.org/jira/browse/OFBIZ-9166))

#### Plugins

- Lucene 5.4.0 deprecated default BooleanQuery constructor causes multiple error screens:
  - CMS shows error screen on clicking Find button ([OFBIZ-9301](https://issues.apache.org/jira/browse/OFBIZ-9301)) (ticket contains detailed Information about the constructor)
  - CMS shows error screen on Product Search ([OFBIZ-9308](https://issues.apache.org/jira/browse/OFBIZ-9308))
  - Ecommerce component showing error screen on searchContent from showcontenttree page ([OFBIZ-9309](https://issues.apache.org/jira/browse/OFBIZ-9309))
- The help button or link does not show for the Birt, BI and example components ([OFBIZ-9311](https://issues.apache.org/jira/browse/OFBIZ-9311)) [OFBIZ-9312](https://issues.apache.org/jira/browse/OFBIZ-9312) is a duplicate of this.
- Cannot obtain Lock on Lucene index Lock ([OFBIZ-7265](https://issues.apache.org/jira/browse/OFBIZ-7265))
- Remove the birt.tld file and all related files and lines ([OFBIZ-9323](https://issues.apache.org/jira/browse/OFBIZ-9323)) For legal reasons the Birt Web Viewer from OFBiz needs to be removed.

## Documentation

#### Framework

- After changing the How+to+migrate+OFBiz+from+Derby+to+MySQL+database page in wiki, adapt the entityengine definition to modern mySQL use.
- ViewSize converted to an Integer for multiplication.

#### Plugins

- Complete Birt Flexible Reports documentation ([OFBIZ-9188](https://issues.apache.org/jira/browse/OFBIZ-9188)).
