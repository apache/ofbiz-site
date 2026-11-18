---
layout: post
title: 'Apache OFBiz News - March 2017 '
date: '2017-04-06T13:51:33+00:00'
permalink: apache-ofbiz-news-march-2017
---
## Apache OFBiz News March 2017

Welcome to our regular monthly round-up of OFBiz news. This month we have news about some new OFBiz tutorials on Youtube, we publish our first blog contributions from the community, work continues on our website, the community decides to remove hot-deploy and we welcome another new committer to the project.

<!--more-->

## New OFBiz Youtube Videos

Did you know that Apache OFBiz has a <a href="https://www.youtube.com/user/ofbiz">Youtube Channel?</a>. This month one of our community members Pranay Panday created some new introduction videos and uploaded them to our channel. The new videos can be found using the links below:<p></p>

1. [How to use Apache OFBiz Mailing Lists](https://www.youtube.com/watch?v=bIS2kftvsq4l)
2. [OFBiz Beginners Tutorial - Basic Setup Release16.11](https://youtu.be/efkB_aN-ODw)

A big thank you to Pranay for taking the time to make the videos and we hope that our community will find them useful. If you would like to create videos for our OFBiz Youtube channel then please send a message with the details to our dev mailing list. <a href="https://lists.apache.org/list.html?dev@ofbiz.apache.org">dev@ofbiz.apache.org</a>

## New Committer

This month the Project Management Committee (PMC) invited James Yong to become a Committer on the project and he accepted.

<p></p>

Congratulations and welcome James!

## OFBiz Blog Articles

Last month we mentioned that we would be opening up our blog to also accept articles about OFBiz from our community members. During March we received two blog articles from Pranay Pandey. They have been published and you can find them using the links below:<p></p>

- [Apache OFBiz - How and Where to Start?](https://s.apache.org/OXsn)
- [Omnichannel Orders - Does Your System Support it?](https://s.apache.org/lmLI)

Thanks very much to Pranay Pandey and remember that if you have an article that you would like to publish on our blog about OFBiz or how you are using it then please send a message to our dev mailing list <a href="https://lists.apache.org/list.html?dev@ofbiz.apache.org">dev@ofbiz.apache.org</a>

## OFBiz Website

We are still working on our new OFBiz website and to help visibility and collaboration a new branch has been created so that the community can see the work so far, comment and also help out. Please feel free to take a look at and follow our  <a href="http://svn.apache.org/repos/asf/ofbiz/branches/ofbiz-new-website/index.html">Work in Progress </a> and post any feedback to our dev mailing list. <a href="https://lists.apache.org/list.html?dev@ofbiz.apache.org">dev@ofbiz.apache.org</a>

<p></p>

A wiki page has been created to help [organise and plan the outstanding work.](https://s.apache.org/UVDq)

<

The new website will include a <a href="http://svn.apache.org/repos/asf/ofbiz/branches/ofbiz-new-website/service-providers.html">Service Providers page</a> so if you are an OFBiz Service Provider and would like your logo displayed then please check that you <a href="https://s.apache.org/SCxg">meet the requirements.</a> for being included.

## Removal of hot-deploy Directory

The refactoring of the trunk is continuing as more work is being done on standardising and formalising the plugins system. As part of this work the community has <a href="https://s.apache.org/Wygr">discussed and agreed </a>to remove the hot-deploy directory. The hot-deploy directory a way to enable extend OFBiz functionality by including your own specific component. This functionality is now available as part of the integrated plugins system.

<p></p>

As the plugin system API provides more functionality than hot-deploy such as the automatic control of a plugin, the removal of hot-deploy will help standardise the way that OFBiz can be extended and also help with the ongoing refactoring effort and code clean up.

<p></p>

<strong>IMPORTANT NOTE</strong>: Please note that the removal of hot-deploy only applies to the current trunk and does not affect any of the existing releases.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Create new task pullAllPluginsSource and make improvements to plugins API ([OFBIZ-9182](https://issues.apache.org/jira/browse/OFBIZ-9182)) This task downloads all the official Apache OFBiz plugins from source control and places them in the /plugins directory inclusive of their .svn directory. It makes it possible to automate buildbot for OFBiz without the need to use something like svn:externals and to have two separate build scripts for framework-alone and framework+plugins.
  - Update README.md with new task definition and cleanup.
  - Improve the plugins API in gradle to make use of shared code for calling gradle as a sub-process from multiple locations.
- Refactor list related forms in BillingAccount ([OFBIZ-9215](https://issues.apache.org/jira/browse/OFBIZ-9215)), Cost ([OFBIZ-9229](https://issues.apache.org/jira/browse/OFBIZ-9229)), Lookup ([OFBIZ-9232](https://issues.apache.org/jira/browse/OFBIZ-9232)), Partymgr ([OFBIZ-9266](https://issues.apache.org/jira/browse/OFBIZ-9266)), and Manufacturing ([OFBIZ-9236](https://issues.apache.org/jira/browse/OFBIZ-9236)) screen widgets. Refactor various list forms into grids and various list form references in screen widgets.
- Change to only handle labels with the "\_" separator between languages and countries in LabelManagerFactory.java ([OFBIZ-9261](https://issues.apache.org/jira/browse/OFBIZ-9261))
- Remove the now useless hot-deploy directory ([OFBIZ-9268](https://issues.apache.org/jira/browse/OFBIZ-9268)) The hot-deploy removal was discussed [here](https://s.apache.org/7Y2w).
- Convert CarrierShipmentMethod ([OFBIZ-8657](https://issues.apache.org/jira/browse/OFBIZ-8657)), QuoteTerm ([OFBIZ-8903](https://issues.apache.org/jira/browse/OFBIZ-8903)), and ShipmentMethodType ([OFBIZ-8664](https://issues.apache.org/jira/browse/OFBIZ-8664)) entities respective CRUD services to entity-auto.
- Use try-with-resources statement wherever possible ([OFBIZ-8202](https://issues.apache.org/jira/browse/OFBIZ-8202)).
- Makes sure the local date time uses the time zone from the local browser ([OFBIZ-9264](https://issues.apache.org/jira/browse/OFBIZ-9264)). The user can still set his own time zone though.
- Implement OFBiz startup message which shows after all containers/components are loaded ([OFBIZ-9285](https://issues.apache.org/jira/browse/OFBIZ-9285))

## Bugfixes

Functional and technical bugfixes:

- Login and logout process in demos show a certificate issue ([OFBIZ-9206](https://issues.apache.org/jira/browse/OFBIZ-9206))
- Missing reference to the delegator in HtmlFormMacroLibrary.ftl ([OFBIZ-9230](https://issues.apache.org/jira/browse/OFBIZ-9230)) The delegatorName needs to be passed on to a macro. This was achieved by creating an EntityUtilProperties.getPropertyValueFromDelegatorName() method for the macros renderLookupField and renderTextField.
- compareBigDecimals in org.ofbiz.minilang.method.conditional.Compare does not compare certain values correctly ([OFBIZ-6386](https://issues.apache.org/jira/browse/OFBIZ-6386)) compareBigDecimals scales down and rounds up meaning you lose information and the comparison result is not as expected
- catalog/control/FindReviews does not render proper column data Replace "use-when" attribute with "ignore-when" attribute in ListReviews form amending conditions used accordingly.
- While re-ordering an order, OrderTerms field doesn't set ([OFBIZ-9252](https://issues.apache.org/jira/browse/OFBIZ-9252))
- Error message when svn is updating due to pullAllPluginsSource ([OFBIZ-9262](https://issues.apache.org/jira/browse/OFBIZ-9262)) Remove the duplicate plugins directory.
- Error in accounting report InventoryValuation with thruDate with an empty value ([OFBIZ-9265](https://issues.apache.org/jira/browse/OFBIZ-9265)) The provided patch fixes this by setting the default thruDate to now.
- Renamed internal task to avoid collission on regex task name matching ([OFBIZ-9262](https://issues.apache.org/jira/browse/OFBIZ-9262)) A bug was detected in which a task activates when calling cleanAll because it starts with the word "clean" which is matched automatically in a regex.
- Induce Model XML from Database throws exception ([OFBIZ-7473](https://issues.apache.org/jira/browse/OFBIZ-7473))
- Regression: a commit between the R15 branch and the Gradle switch uses/blocks the ports ([OFBIZ-9196](https://issues.apache.org/jira/browse/OFBIZ-9196)) Disabled the admin server from starting on contexts other than "start". This commit has reference to this [discussion thread](https://s.apache.org/xfxS) in which buildbot is failing in between commits due to blocking the admin server thread.
- Error: Cannot do a find that returns an EntityListIterator with no transaction in place ([OFBIZ-9286](https://issues.apache.org/jira/browse/OFBIZ-9286))

## Documentation

- Update \\tools\\demo-backup\\README.MD now that "Let's encrypt" is used on demos ([OFBIZ-9203](https://issues.apache.org/jira/browse/OFBIZ-9203)) Change derived from [OFBIZ-7928](https://issues.apache.org/jira/browse/OFBIZ-7928).
