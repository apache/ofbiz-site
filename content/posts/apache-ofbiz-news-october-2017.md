---
layout: post
title: 'Apache OFBiz News - October 2017 '
date: '2017-11-14T08:18:24+00:00'
permalink: apache-ofbiz-news-october-2017
---
## Apache OFBiz News October 2017

Welcome to our regular monthly round-up of OFBiz news. This month we have news about a proposed new OFBiz documentation framework, we look at making it easier for users to find out about data model changes, we look forward to having an OFBiz presence at the Open Source Summit in Paris and we prepare to create some new 17.xx branches.

<!--more-->

## Proposed New Documentation Framework

A lot of discussion has been happening this month on a proposal about setting up a documentation framework integrated within OFBiz. See below for some of the key ideas being suggested:

- Use of Asciidoc as the documentation language
- Use of Asciidoctor as the documentation tool
- Publishing documentation using the Gradle Asciidoctor plugin
- Each component contains its own documentation
- General documentation goes to either a standalone directory or a generic component like common or base
- Documentation files are small and focused on one topic.
- Publishing will be in all formats including PDF for users, or HTML for embedded help and wiki pages. (NOTE: This means that OFBiz will not parse docbook for its help system, instead it will render generated HTML)

If you have any feedback or would like to be involved with the work to implement our documentation framework then please respond to the <a href="https://s.apache.org/Pr5g" target="_blank" rel="noopener">  documentation framework discussion thread</a> highlighting your willingness to participate or help out.

<p></p>

This will be a big step forward for the project, and thanks to everyone who has contributed so far.

## Tracking Data Model Changes

Last month we talked about the new Data Model documentation that had been put together by Aditya Sharma. This month an effort has begun to create a DATAMODELCHANGES.md file that contains the details of the changes to the data model over time. This will make it a lot easier for users to identify and locate data model changes. The initial file will feature all changes between 9.04 to date.

<p></p>

If you would like to keep up to date with what is happening then <a href="https://issues.apache.org/jira/browse/OFBIZ-9902" target="_blank" rel="noopener"> JIRA OFBIZ-9902</a> has been created to help track progress.

## OFBiz at Open Source Summit in Paris

The ASF has been given half day track at the  <a href="https://cwiki.apache.org/confluence/display/COMDEV/ASF+Track+@+Open+Source+Summit+Paris+2017" target="_blank" rel="noopener"> Open Source Summit in Paris</a>. The conference is free to attend and will take place on 6th and 7th December 2017. A call for presentations (in French or English) was made on the ComDev mailing list and we have an OFBiz presentation on the schedule:

- DevOps for Apache OFBiz using Jenkins and Selenium - Olivier Heintz

There will also be other members of the OFBiz Community at the event as well as an Apache booth. More details about the event can be found on the conference website: <a href="http://www.opensourcesummit.paris" target="_blank" rel="noopener"> www.opensourcesummit.paris</a>

## Preparing to Create OFBiz 17.xx Branches

You may have noticed that there has been a lot of work happening on our dev list. This is in preparation for the creation of some new OFBiz branches from our current trunk. In the past we have usually created one release branch that was stabilsed and then released as our next stable release.

<p></p>

Our current 16.11 stable release was initially created from a trunk branch from November last year, so it is around the right time for us to look at creating a 17.xx branch. However, we now have two trunks - one for the framework and one for plugins so it will be the first time that we will be creating 2 branches. This is an exciting time for the project as we start thinking about what to include before the branches are created.

<p></p>

If you would like to keep informed of the progress around the creation of these new branches then please subscribe to our dev mailing list.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring: Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Add session tracking mode and make cookie secure ([OFBIZ-6655](https://issues.apache.org/jira/browse/OFBIZ-6655))
- Moved multiflex theme from themes to plugins ([OFBIZ-9789](https://issues.apache.org/jira/browse/OFBIZ-9789))
- Moved ecommain.css from common theme to ecommerce plugin as it's only for ecommerce. ([OFBIZ-9771](https://issues.apache.org/jira/browse/OFBIZ-9771))
- Moved form.css and reset.css from common theme to ecommerce plugin as it's only for ecommerce. ([OFBIZ-9771](https://issues.apache.org/jira/browse/OFBIZ-9771))
- Update to Tomcat 8.5.23. ([OFBIZ-9813](https://issues.apache.org/jira/browse/OFBIZ-9813))
- Fixing defects reported by FindBugs,
  - package org.apache.ofbiz.accounting.invoice. ([OFBIZ-9541](https://issues.apache.org/jira/browse/OFBIZ-9541))
  - package org.apache.ofbiz.accounting.thirdparty.clearcommerce. ([OFBIZ-9454](https://issues.apache.org/jira/browse/OFBIZ-9454))
  - package org.apache.ofbiz.base.start. ([OFBIZ-9573](https://issues.apache.org/jira/browse/OFBIZ-9573))
  - package org.apache.ofbiz.base.test. ([OFBIZ-9574](https://issues.apache.org/jira/browse/OFBIZ-9574))
  - package org.apache.ofbiz.base.util.cache. ([OFBIZ-9575](https://issues.apache.org/jira/browse/OFBIZ-9575))
  - package org.apache.ofbiz.base.util.cache.test. ([OFBIZ-9576](https://issues.apache.org/jira/browse/OFBIZ-9576))
  - package org.apache.ofbiz.base.util.string.test. ([OFBIZ-9589](https://issues.apache.org/jira/browse/OFBIZ-9589))
  - package org.apache.ofbiz.common.authentication. ([OFBIZ-9627](https://issues.apache.org/jira/browse/OFBIZ-9627))
  - package org.apache.ofbiz.common.email. ([OFBIZ-9628](https://issues.apache.org/jira/browse/OFBIZ-9628))
  - package org.apache.ofbiz.common.image. ([OFBIZ-9629](https://issues.apache.org/jira/browse/OFBIZ-9629))
  - package org.apache.ofbiz.common.login. ([OFBIZ-9630](https://issues.apache.org/jira/browse/OFBIZ-9630))
  - package org.apache.ofbiz.common.period. ([OFBIZ-9631](https://issues.apache.org/jira/browse/OFBIZ-9631))
  - package org.apache.ofbiz.common.qrcode. ([OFBIZ-9633](https://issues.apache.org/jira/browse/OFBIZ-9633))
  - package org.apache.ofbiz.common.uom. ([OFBIZ-9634](https://issues.apache.org/jira/browse/OFBIZ-9634))
  - package org.apache.ofbiz.security. ([OFBIZ-9635](https://issues.apache.org/jira/browse/OFBIZ-9635))
  - package org.apache.ofbiz.securityext.login. ([OFBIZ-9637](https://issues.apache.org/jira/browse/OFBIZ-9637))
  - package org.apache.ofbiz.service. ([OFBIZ-9638](https://issues.apache.org/jira/browse/OFBIZ-9638))
  - package org.apache.ofbiz.catalina.container. ([OFBIZ-9639](https://issues.apache.org/jira/browse/OFBIZ-9639))
  - package org.apache.ofbiz.common.preferences. ([OFBIZ-9640](https://issues.apache.org/jira/browse/OFBIZ-9640))
  - package org.apache.ofbiz.base.conversion. ([OFBIZ-9679](https://issues.apache.org/jira/browse/OFBIZ-9679))
  - package org.apache.ofbiz.common. ([OFBIZ-9681](https://issues.apache.org/jira/browse/OFBIZ-9681))
  - package org.apache.ofbiz.widget.renderer.html. ([OFBIZ-9686](https://issues.apache.org/jira/browse/OFBIZ-9686))
  - package org.apache.ofbiz.service.group. ([OFBIZ-9684](https://issues.apache.org/jira/browse/OFBIZ-9684))
  - package org.apache.ofbiz.service.engine. ([OFBIZ-9688](https://issues.apache.org/jira/browse/OFBIZ-9688))
  - package org.apache.ofbiz.base.util.collections. ([OFBIZ-9590](https://issues.apache.org/jira/browse/OFBIZ-9590))
  - package org.apache.ofbiz.service.config.model. ([OFBIZ-9682](https://issues.apache.org/jira/browse/OFBIZ-9682))
  - package org.apache.ofbiz.widget.renderer.fo. ([OFBIZ-9685](https://issues.apache.org/jira/browse/OFBIZ-9685))
  - package org.apache.ofbiz.base.crypto. ([OFBIZ-9689](https://issues.apache.org/jira/browse/OFBIZ-9689))
  - package org.apache.ofbiz.service.mail. ([OFBIZ-9690](https://issues.apache.org/jira/browse/OFBIZ-9690))
  - package org.apache.ofbiz.service.calendar. ([OFBIZ-9691](https://issues.apache.org/jira/browse/OFBIZ-9691))
  - package org.apache.ofbiz.base.util. ([OFBIZ-9692](https://issues.apache.org/jira/browse/OFBIZ-9692))
  - package org.apache.ofbiz.service.test. ([OFBIZ-9694](https://issues.apache.org/jira/browse/OFBIZ-9694))
  - package org.apache.ofbiz.service.semaphore. ([OFBIZ-9693](https://issues.apache.org/jira/browse/OFBIZ-9693))
  - package org.apache.ofbiz.widget.cache. ([OFBIZ-9695](https://issues.apache.org/jira/browse/OFBIZ-9695))
  - package org.apache.ofbiz.accounting.thirdparty.sagepay. ([OFBIZ-9545](https://issues.apache.org/jira/browse/OFBIZ-9545))
  - package org.apache.ofbiz.service.eca. ([OFBIZ-9683](https://issues.apache.org/jira/browse/OFBIZ-9683))
  - package org.apache.ofbiz.widget.renderer.macro. ([OFBIZ-9702](https://issues.apache.org/jira/browse/OFBIZ-9702))
  - package org.apache.ofbiz.workeffort.workeffort. ([OFBIZ-9703](https://issues.apache.org/jira/browse/OFBIZ-9703))
  - package org.apache.ofbiz.widget.renderer. ([OFBIZ-9704](https://issues.apache.org/jira/browse/OFBIZ-9704))
  - package org.apache.ofbiz.entity.serialize. ([OFBIZ-9705](https://issues.apache.org/jira/browse/OFBIZ-9705))
  - package org.apache.ofbiz.entity.test. ([OFBIZ-9706](https://issues.apache.org/jira/browse/OFBIZ-9706))
  - package org.apache.ofbiz.entity.transaction. ([OFBIZ-9707](https://issues.apache.org/jira/browse/OFBIZ-9707))
  - package org.apache.ofbiz.service.job. ([OFBIZ-9709](https://issues.apache.org/jira/browse/OFBIZ-9709))
  - package org.apache.ofbiz.widget.model. ([OFBIZ-9710](https://issues.apache.org/jira/browse/OFBIZ-9710))
  - package org.apache.ofbiz.entity.cache. ([OFBIZ-9711](https://issues.apache.org/jira/browse/OFBIZ-9711))
  - package org.apache.ofbiz.entity.finder. ([OFBIZ-9712](https://issues.apache.org/jira/browse/OFBIZ-9712))
  - package org.apache.ofbiz.entity.condition. ([OFBIZ-9713](https://issues.apache.org/jira/browse/OFBIZ-9713))
  - package org.apache.ofbiz.service.rmi.socket.ssl. ([OFBIZ-9714](https://issues.apache.org/jira/browse/OFBIZ-9714))
  - package org.apache.ofbiz.datafile. ([OFBIZ-9715](https://issues.apache.org/jira/browse/OFBIZ-9715))
  - package org.apache.ofbiz.entity. ([OFBIZ-9716](https://issues.apache.org/jira/browse/OFBIZ-9716))
- removed dependency from start component on base
- Removed some old and unused images.
- Using try-with-resources with JDBC objects ([OFBIZ-9839](https://issues.apache.org/jira/browse/OFBIZ-9839))
- Implement AutoCloseable interface in SQLProcessor Class ([OFBIZ-9841](https://issues.apache.org/jira/browse/OFBIZ-9841))
- Moved some utility js files from images to common-theme/js/util
- Removed unused theme related data, also fix the ofbiz logo for bluelight theme.
- Update build.gradle to the latest dependencies. ([OFBIZ-9674](https://issues.apache.org/jira/browse/OFBIZ-9674))
- Inconsistent String Comparisons ([OFBIZ-9254](https://issues.apache.org/jira/browse/OFBIZ-9254))
  - accounting java files
  - ftl file
  - framework base
  - application content
  - framework entity
  - order
  - party and workeffort
  - Applications order
  - framework service
  - framework entityext
  - webapp
  - webtools and widgets
- Usage of factory method or Builder pattern for Locale object creation and usage. ([OFBIZ-9488](https://issues.apache.org/jira/browse/OFBIZ-9488))
- Proper use of if-has-permission ([OFBIZ-9740](https://issues.apache.org/jira/browse/OFBIZ-9740))
- Manage life span of SecurityGroupPermission entity. ([OFBIZ-9801](https://issues.apache.org/jira/browse/OFBIZ-9801))
- While fetching product inventory, it should also return accounting quantity as well.
- While creating inventory transfer, to-location parameter is not handled ([OFBIZ-9834](https://issues.apache.org/jira/browse/OFBIZ-9834))
- Added ability to disable seca rule ([OFBIZ-9826](https://issues.apache.org/jira/browse/OFBIZ-9826))
- Label Manager: Have totals shown at the top of the search results. ([OFBIZ-6457](https://issues.apache.org/jira/browse/OFBIZ-6457))
- Enhance cookies security ([OFBIZ-9865](https://issues.apache.org/jira/browse/OFBIZ-9865))
- Secure HTTP headers ([OFBIZ-6766](https://issues.apache.org/jira/browse/OFBIZ-6766))
  - Add no-referrer-when-downgrade Referrer-Policy
  - Add a Content Security Policy To not block anything
- Facility main screen relies on demo data ([OFBIZ-5321](https://issues.apache.org/jira/browse/OFBIZ-5321))
- Add rat exclude files to exclude those files that do not need license header ([OFBIZ-9856](https://issues.apache.org/jira/browse/OFBIZ-9856))
- removed unused empty folder, and its classpath entry from order/ofbiz-component.xml
- Moved date plugin from images/date to common/js/plugins([OFBIZ-5776](https://issues.apache.org/jira/browse/OFBIZ-5776))
- No option to add Event Purpose on Events page, applied patch from jira issue with slightly changes ([OFBIZ-9680](https://issues.apache.org/jira/browse/OFBIZ-9680))
- Required field indicator (\*) is missing
  - create contact list ([OFBIZ-9756](https://issues.apache.org/jira/browse/OFBIZ-9756))
  - edit data resource role ([OFBIZ-9757](https://issues.apache.org/jira/browse/OFBIZ-9757))
- Create separate Permission Services for CRUD services of ShoppingList and ShoppingListItem. ([OFBIZ-9763](https://issues.apache.org/jira/browse/OFBIZ-9763))
- Replace ContentAssoc related CRUD services with entity-auto. ([OFBIZ-9907](https://issues.apache.org/jira/browse/OFBIZ-9907))
- Added a hint to skip tasks which are automatically invoked during the main task and provided an example to run ./gradle build without the JUnit tests (useful for server deployments).
- Update to Apache Derby 10.14.1.0. ([OFBIZ-9887](https://issues.apache.org/jira/browse/OFBIZ-9887))
- Improve Rainbow theme showing themes ([OFBIZ-9862](https://issues.apache.org/jira/browse/OFBIZ-9862))
- Token Based Authentication ([OFBIZ-9833](https://issues.apache.org/jira/browse/OFBIZ-9833))
- Move all data in applications to the datamodel component. Moved seed and seed-initial data from party, content, security ext and work effort component. ([OFBIZ-9501](https://issues.apache.org/jira/browse/OFBIZ-9501))

### Plugins

- Add session tracking mode and make cookie secure ([OFBIZ-6655](https://issues.apache.org/jira/browse/OFBIZ-6655))
- Moved multiflex theme from themes to plugins ([OFBIZ-9789](https://issues.apache.org/jira/browse/OFBIZ-9789))
- Updated contentForum.css path in plugins.
- Moved ecommain.css, form.css and reset.css from common theme to ecommerce plugin as its only for ecommerce. ([OFBIZ-9771](https://issues.apache.org/jira/browse/OFBIZ-9771))
- Update Apache Solr/Lucene to release 6.6.0. ([OFBIZ-9391](https://issues.apache.org/jira/browse/OFBIZ-9391))
- Add a new plugin for the redis ([OFBIZ-9829](https://issues.apache.org/jira/browse/OFBIZ-9829))
- Updated miscAjaxFunctions.js location in ecommerce component
- Proper use of if-has-permission ([OFBIZ-9740](https://issues.apache.org/jira/browse/OFBIZ-9740))
- Manage life span of SecurityGroupPermission entity. ([OFBIZ-9801](https://issues.apache.org/jira/browse/OFBIZ-9801))
- Removed unfinished Solr query functionality from the codebase which was introduced with ([OFBIZ-6595](https://issues.apache.org/jira/browse/OFBIZ-6595))
- Update Solr/Lucene to 7.1.0 [CVE-2017-9803] [CVE-2017-12629]. ([OFBIZ-9835](https://issues.apache.org/jira/browse/OFBIZ-9835))
- Inconsistent String Comparisons, Applied patch for plugins classes. Thanks Devanshu Vyas for your contribution ([OFBIZ-9254](https://issues.apache.org/jira/browse/OFBIZ-9254))

## Bugfixes

Functional and technical bugfixes:

### Framework

- EmailServices.sendMailFromScreen improved to take multiple attachments with appropriate type along with several email fixes. ([OFBIZ-9395](https://issues.apache.org/jira/browse/OFBIZ-9395)).
- InitTheme.groovy can't work without request ([OFBIZ-9798](https://issues.apache.org/jira/browse/OFBIZ-9798))
- FTL Error in OrderView screen ([OFBIZ-9803](https://issues.apache.org/jira/browse/OFBIZ-9803))
- Moved contentForum.css to contentimages webapp and updated path accordinlgy. ([OFBIZ-6259](https://issues.apache.org/jira/browse/OFBIZ-6259))
- Exception in service semaphore in wait mode and with multi thread calls. ([OFBIZ-9534](https://issues.apache.org/jira/browse/OFBIZ-9534)).
- the introduction of multicatch in Converters.java which came with r1811434 breaks MiscTests#testLoadContainedConvertersIgnoresException
- Template edit are not working correctly ([OFBIZ-9830](https://issues.apache.org/jira/browse/OFBIZ-9830))
- Purchase Order is not getting canceled automatically if all items are canceled ([OFBIZ-9838](https://issues.apache.org/jira/browse/OFBIZ-9838))
- GlAccountOrganizations manually added using accounting forms do not appear on trial report because fromDate gets set to NULL ([OFBIZ-5938](https://issues.apache.org/jira/browse/OFBIZ-5938))
- Corrected elseif tag closing in GenericSurvey.ftl file found this while working on [OFBIZ-9254](https://issues.apache.org/jira/browse/OFBIZ-9254)
- Lead Profile missing if clicked on other menu ([OFBIZ-9655](https://issues.apache.org/jira/browse/OFBIZ-9655))
- Wrong String comparisons introduced in r1812255.
- added JavaDoc param name and description.
- Not setting VIEW\_INDEX for IterateSectionWidget.renderWidgetString causes rendering error ([OFBIZ-9889](https://issues.apache.org/jira/browse/OFBIZ-9889))
- Moved enabled attribute definition to its correct place, it was added in wrong attribute group
- X-Frame-Options configuration is not working ([OFBIZ-9891](https://issues.apache.org/jira/browse/OFBIZ-9891))
- Party Id label missing from edit data resource role. Remove the empty title property to populate the default ui label using FormFieldTitle\_ pattern. ([OFBIZ-9758](https://issues.apache.org/jira/browse/OFBIZ-9758))
- Fixed Asset Id field is below update button on EditInventoryItem page ([OFBIZ-9503](https://issues.apache.org/jira/browse/OFBIZ-9503))
- Issue while removing RateAmount Record ([OFBIZ-9904](https://issues.apache.org/jira/browse/OFBIZ-9904))
- Success message showing before the party identification number is updated ([OFBIZ-9895](https://issues.apache.org/jira/browse/OFBIZ-9895))
- Fixed testExpirePartyRate test. Passed required field as per modification in service definetion. ([OFBIZ-9904](https://issues.apache.org/jira/browse/OFBIZ-9904))
- Service level check is missing on transfer inventory. ([OFBIZ-9842](https://issues.apache.org/jira/browse/OFBIZ-9842))
- Request handler exception in create billing account from suppliers profile page. ([OFBIZ-9751](https://issues.apache.org/jira/browse/OFBIZ-9751))
- Issue while creating new person in the party component. ([OFBIZ-9653](https://issues.apache.org/jira/browse/OFBIZ-9653))
- ofbizsetup cannot create first customer. problem with state/province dropdown ([OFBIZ-6054](https://issues.apache.org/jira/browse/OFBIZ-6054))

### Plugins

- Added EC\_DEFAULT as theme for ecommerce. ([OFBIZ-9805](https://issues.apache.org/jira/browse/OFBIZ-9805))
- Get the header and footer template location correctly in ecommerce main decorator. Now multiflex theme will work fine with ecommerce.([OFBIZ-9805](https://issues.apache.org/jira/browse/OFBIZ-9805))
- setLocaleFromBrowser request missing for webpos component ([OFBIZ-9847](https://issues.apache.org/jira/browse/OFBIZ-9847))
- Removed getRelatedOneCache cache call, as this method is removed from trunk.
