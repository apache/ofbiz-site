---
layout: post
title: Apache OFBiz News - May 2016
date: '2016-06-08T14:18:00+00:00'
permalink: apache_ofbiz_news_may_2016
---
## Apache OFBiz News May 2016

Welcome to our regular monthly round-up of OFBiz news. This month we have news about Apachecon NA, work on a new style website, our Committers give their opinions in a survey and work continues on our re-factoring effort.

<!--more-->

## Apachecon NA 2016 Vancouver

Four presentations from the OFBiz community were accepted for Apachecon NA in Vancouver. Unfortunately one speaker had to cancel so this was reduced to two. The audio for all Apachecon sessions was recorded and is available on  <a href="http://feathercast.apache.org">feathercast.apache.org</a>

<p></p>

The audio from the OFBiz related presentations can be found using the links below:<p></p>
 <a href="http://feathercast.apache.org/apachecon-na-2016-its-ok-consensus-reached-weve-agreed-to-disagree-sharan-foga/">It's OK Consensus Reached. We've Agreed to Disagree!</a>

<p></p>

 <a href="http://feathercast.apache.org/apachecon-na-2016-ofbiz-configuration-only-or-look-no-code-sharan-foga/">OFBiz Configuration Only (Or Look No Code!)</a>

<p></p>

Our community is now looking forward to <a href="http://events.linuxfoundation.org/events/apachecon-europe">Apachecon EU 2016</a> in Seville, Spain.

## New Website and Logo Ideas

This month the community gave their feedback on some initial draft pages for a new look project website. The existing website has not been updated for a while and the community think it's time to give the existing site a new look and feel. Feedback on the draft pages was very positive and now work is continuing to refine the site and also complete the remaining pages.

<p></p>

As part of the website update, options for an updated logo featuring the newly style Apache feather were also discussed. The community has decided to change the style and lettering of the logo so that it reflects the true project name 'OFBiz'. Work is now in progress to prepare some draft layouts for the new logo for the community to review.

<p></p>

## OFBiz Committers Survey

This month we ran our first ever OFBiz Committer Survey. The intention was to find out what was important to our Committers and what ideas they saw as key for helping improve the project. The survey was completely voluntary and 24 out of our 38 Committers responded. <p></p>
The survey took place over a week, and the results have been summarised on the wiki at the link below:

<p></p>

<a href="https://cwiki.apache.org/confluence/display/OFBIZ/May+2016+-+Committers+Survey">OFBiz Committers Survey</a>

<p></p>

Thank you to everyone who participated and as a result we have some new topics raised for discussion on our mailing lists.

## OFBiz Code Tidy Up and Re-Factor

There was a continued focus on re-factoring and general code tidy up this month. A revised and much leaner version of the OFBiz start component (start.java) was committed to the repository. This re-factor needed community collaboration to test and validate that the new version worked correctly. Thanks to Taher Alkhateeb for taking on this difficult task from our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Re-Factor+To-Do+List">Current Re-Factor To Do List</a>

<p></p>

If you are interested in helping out with any of the code refactoring work, then please check the current list for tasks that are open.

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Continue work on the form widget grid element ([OFBIZ-7029](https://issues.apache.org/jira/browse/OFBIZ-7029))
  - updates XSD documentation and remove the list type when grid element is used
  - Replace some form lists by grids
  - StatsForm.xml now only uses grids and the "searchList" form in ecommerce Content Forms does NOT.
- Add links to edit/delete a term, for instance from the list ([OFBIZ-6866](https://issues.apache.org/jira/browse/OFBIZ-6866))
- Add Uom descriptor for selection and display in invoice forms ([OFBIZ-7032](https://issues.apache.org/jira/browse/OFBIZ-7032))
- Upgraded freemarker jar to 2.3.24 and remove 2.3.22 ([OFBIZ-7041](https://issues.apache.org/jira/browse/OFBIZ-7041))
- Have ExampleReportPdfBarcode open in a new window ([OFBIZ-7036](https://issues.apache.org/jira/browse/OFBIZ-7036))
- Add a drop-down for Tax Auth Combined Id in Product Price Creation screen ([OFBIZ-5697](https://issues.apache.org/jira/browse/OFBIZ-5697))
- Enhance PartyTypeAttr with a description field ([OFBIZ-6738](https://issues.apache.org/jira/browse/OFBIZ-6738))
- Updated fromDate and thruDate field type for CustomTimePeriod entity from date to date-time, and made changes accordingly ([OFBIZ-5740](https://issues.apache.org/jira/browse/OFBIZ-5740))
- Move all Groovy scripts in components WEB-INF/actions sub-folder ([OFBIZ-6981](https://issues.apache.org/jira/browse/OFBIZ-6981))
- Major changes to the start component ([OFBIZ-6783](https://issues.apache.org/jira/browse/OFBIZ-6783))
  - add commons-cli library
  - fix build.xml in start menu to include the commons-cli
  - set a default portoffset value of 0 when not selected in build.xml
  - fully redefine the commands passed in java -jar ofbiz.jar using the commons-cli api
  - remove ofbiz dependency on String[] args across the different components and isolatethem in a new entity class called StartupCommand. This decouples ofbiz from both String[] args and commons-cli at the same time
  - fix all the calls in the master build.xml to comply with the new commands
  - fix the Config.java to remove dependecies on the args array
  - create a utility class StartupCommandUtil that takes care of all commons-cli operations and abstracts away the implementation in private methods
  - substantially reduce the size of main and init in Start.java by refactoring them in different places
  - create an intermediate function called populateLoaderArgs. This is the first step in removing the dependecies on args by "adapting" them using this method
  - unify the exception model everywhere to StartupException. This makes exception propagation cleaner and easier
  - lots of cleanup of the code related in all these areas
  - refactor Start.java to make it about 140 lines long and focused only on high level function calls. Also minimized the number of class fields (state) to only two (ServerState and Config)
  - separate the AdminPortThread into a new class with some refactoring done to ensure interoperability with other classes
  - delete CommonsDaemonStart as jsvc is not yet fully implemented in ofbiz and it stands in the way of a proper refactoring of ofbiz
  - refactor everything so that all dependencies between classes are explicit through function calls (no hidden state or declarations)
  - move all the server processing logic (status, shutdown, start ...) to a new class called StartupControlPanel. All methods in this class are static with side effects only limited to the arguments passed to them
  - add a few missing apache copyright headers
  - refactor Config.java and make it much cleaner and simpler by breaking things down into private methods. Also changed the portoffset to be a normal int instead of a boxed int (Integer)
  - redefine most classes to be package protected (not public) to offer more isolation from the rest of the framework
  - redefine most classes to be final
  - move validation logic to its correct place in StartupCommandUtil
- Improve the visibility of the Start error messages, also provide pretty printing ([OFBIZ-6783](https://issues.apache.org/jira/browse/OFBIZ-6783))
- Added manually calculated sales tax while recalculating tax of order ([OFBIZ-5935](https://issues.apache.org/jira/browse/OFBIZ-5935))
- Minor improvement for "change password" screen title in ecommerce ([OFBIZ-7080](https://issues.apache.org/jira/browse/OFBIZ-7080))
- Extend OrderAdjustment entity and add isManual field ([OFBIZ-7078](https://issues.apache.org/jira/browse/OFBIZ-7078))
- Viewing party content should open in a new window ([OFBIZ-6364](https://issues.apache.org/jira/browse/OFBIZ-6364))
- Example -&gt; PDF should be open in a new window ([OFBIZ-7054](https://issues.apache.org/jira/browse/OFBIZ-7054))
- Have the internal organization set upon Quote creation ([OFBIZ-6105](https://issues.apache.org/jira/browse/OFBIZ-6105))
- Have /example/control/fonts.pdf open in a new window ([OFBIZ-7035](https://issues.apache.org/jira/browse/OFBIZ-7035))
- Show quantityUom in InventoryValuation Report (OFBIZ-5288)
- Remove restriction of setting PARTY\_ENABLED as first default status of party ([OFBIZ-7098](https://issues.apache.org/jira/browse/OFBIZ-7098))
- Improvement on Edit Promo Screen where two empty options were being shown in shipping method select box ([OFBIZ-7091](https://issues.apache.org/jira/browse/OFBIZ-7091))
- Show quantityUom in InventoryByProduct ([OFBIZ-5291](https://issues.apache.org/jira/browse/OFBIZ-5291))
- Show quantityUom in production runs ([OFBIZ-5289](https://issues.apache.org/jira/browse/OFBIZ-5289))
- Show quantityUom in BoM ([OFBIZ-5290](https://issues.apache.org/jira/browse/OFBIZ-5290))
- Changed button name from Approve Order to Approve item in PO ([OFBIZ-7102](https://issues.apache.org/jira/browse/OFBIZ-7102))
- Removed some unused screens and ftl files ([OFBIZ-6810](https://issues.apache.org/jira/browse/OFBIZ-6810))
- Use only HTTPS in OFBiz ([OFBIZ-6849](https://issues.apache.org/jira/browse/OFBIZ-6849))
- Move groovy script under WEB-INF/actions for webpos ([OFBIZ-6981](https://issues.apache.org/jira/browse/OFBIZ-6981))
- Now cmssite will start working again with mapkey in the url in trunk. The code block was commented while working on ([OFBIZ-4502](https://issues.apache.org/jira/browse/OFBIZ-4502)) ([OFBIZ-7119](https://issues.apache.org/jira/browse/OFBIZ-7119))
- Extend Product entity and add serialized field ([OFBIZ-7079](https://issues.apache.org/jira/browse/OFBIZ-7079))
- Ugrade PDFBox to 1.8.12 due to vulnerability ([OFBIZ-7136](https://issues.apache.org/jira/browse/OFBIZ-7136))
- Upgrade hadoop jars in the solr component from 2.6.0 to 2.7.2 ([OFBIZ-7026](https://issues.apache.org/jira/browse/OFBIZ-7026))
- Add xls screen renderer to convert a screen definition like an html flow directly ready by a spreadsheet application In addition, add an export example button on FindExample screen and add complete macro ftl renderer unit test ([OFBIZ-6931](https://issues.apache.org/jira/browse/OFBIZ-6931))

## Bugfixes

Functional and technical bugfixes:

- Agreement Search List requires partyIdFrom/partyIdTo or fails ([OFBIZ-7030](https://issues.apache.org/jira/browse/OFBIZ-7030))
- Renamed all component ftl filenames from lower case to upper case ([OFBIZ-7021](https://issues.apache.org/jira/browse/OFBIZ-7021))
- Un-shipped sales orders are getting listed for returns while creating sales return for another matching address order, now only partially shipped or completely shipped are shown. ([OFBIZ-7047](https://issues.apache.org/jira/browse/OFBIZ-7047))
- Fixed UiLabel for the GeneratedDescription in ordermgr after applying promotion which was missing due to the usage from EcommerceUiLabels ([OFBIZ-7057](https://issues.apache.org/jira/browse/OFBIZ-7057))
- Removed redundant entries of handlers from controllers where common-controller is already included ([OFBIZ-7044](https://issues.apache.org/jira/browse/OFBIZ-7044))
- Non existent item when added as Bulk Item while creating purchase order is throwing null pointer exception ([OFBIZ-7045](https://issues.apache.org/jira/browse/OFBIZ-7045))
- Non existent Bulk Item throwing errors while its respective qty get updated. Actually system tries to get SupplierProduct data when updating quantity. When productId is not available for item in cart, added check in code so that system should not fetch SupplierProduct record ([OFBIZ-7046](https://issues.apache.org/jira/browse/OFBIZ-7046))
- Setting a new password in the "forgot password" workflow sometimes doesn't work and causes an error ([OFBIZ-7058](https://issues.apache.org/jira/browse/OFBIZ-7058))
- CMS does not store "Long text" ([OFBIZ-7050](https://issues.apache.org/jira/browse/OFBIZ-7050))
- Update empty blog article text does not work ([OFBIZ-7062](https://issues.apache.org/jira/browse/OFBIZ-7062))
- Order term description is not getting set on adding and updating new order term ([OFBIZ-7053](https://issues.apache.org/jira/browse/OFBIZ-7053))
- Pagination in product price does not work correctly after a price creation ([OFBIZ-7067](https://issues.apache.org/jira/browse/OFBIZ-7067))
- Export widget ftl pointing to wrong location ([OFBIZ-7068](https://issues.apache.org/jira/browse/OFBIZ-7068))
- Forgot your password" process for Web POS. On clicking "Forgot your password" link from the Web POS login page, the system was navigating to blank page ([OFBIZ-7042](https://issues.apache.org/jira/browse/OFBIZ-7042))
- Pagination Problem in Find Invoices By Due Date ([OFBIZ-7070](https://issues.apache.org/jira/browse/OFBIZ-7070))
- CategoryContent &amp; ProductContent cachekey problem on multi tenant environment ([OFBIZ-7071](https://issues.apache.org/jira/browse/OFBIZ-7071))
- "Send mail" button from viewProfile doesn't work ([OFBIZ-7075](https://issues.apache.org/jira/browse/OFBIZ-7075))
- DataResource.dataResourceName field should be at least 255 Chars ([OFBIZ-7072](https://issues.apache.org/jira/browse/OFBIZ-7072))
- Asset maintenance pdf has missing UI Labels ([OFBIZ-7084](https://issues.apache.org/jira/browse/OFBIZ-7084))
- Unable to add new note to Fixed Asset's maintenance ([OFBIZ-7083](https://issues.apache.org/jira/browse/OFBIZ-7083))
- Fixed error in updating employee position's responsibility. There wasn't a requirement of calling the service as "service-multi" ([OFBIZ-7086](https://issues.apache.org/jira/browse/OFBIZ-7086))
- WorkEffort Reviews list not showing up ([OFBIZ-7085](https://issues.apache.org/jira/browse/OFBIZ-7085))
- Fixed console error on Calendar Widget pagination. An exception was being thrown when pagination buttons are clicked on the Calendar widget ([OFBIZ-7095](https://issues.apache.org/jira/browse/OFBIZ-7095))
- While creating inventory item of type "SERIALIZED\_INV\_ITEM" in "INV\_ON\_HOLD" status it gets created in "INV\_AVAILABLE" status ([OFBIZ-7094](https://issues.apache.org/jira/browse/OFBIZ-7094))
- Cash Flow Statement report is broken ([OFBIZ-7089](https://issues.apache.org/jira/browse/OFBIZ-7089))
- Sales Return - UI issues for top level buttons after sales return is created ([OFBIZ-7048](https://issues.apache.org/jira/browse/OFBIZ-7048))
- Sales Return Item Status is misleading ([OFBIZ-7049](https://issues.apache.org/jira/browse/OFBIZ-7049))
- Service entity auto not having duplicate record check when we pass single primary key ([OFBIZ-7099](https://issues.apache.org/jira/browse/OFBIZ-7099))
- Return Pdf is throwing exception ([OFBIZ-7090](https://issues.apache.org/jira/browse/OFBIZ-7090))
- Product price rule with no conditions ([OFBIZ-6895](https://issues.apache.org/jira/browse/OFBIZ-6895))
- Quote report doesn't show terms of the quote ([OFBIZ-5861](https://issues.apache.org/jira/browse/OFBIZ-5861))
- When changing the status of any return to 'accepted', the status of return item should be changed to 'accepted' as well ([OFBIZ-7101](https://issues.apache.org/jira/browse/OFBIZ-7101))
- FreeMarker template error - Template inclusion failed, on selection of the bluelight theme ([OFBIZ-7103](https://issues.apache.org/jira/browse/OFBIZ-7103))
- RUN MRP is not working properly for multiple facilities. It deletes the 'Proposed' requirements for all facilities and creates only for selected facility ([OFBIZ-7097](https://issues.apache.org/jira/browse/OFBIZ-7097))
- Fixed error on console when accessing project manager ([OFBIZ-7003](https://issues.apache.org/jira/browse/OFBIZ-7003))
- Fixed missing parameter error on deleting workeffort contactmech ([OFBIZ-7109](https://issues.apache.org/jira/browse/OFBIZ-7109))
- At /accounting/control/globalGLSettings the number of GL accounts is wrong: always 20 items in PDF report list and same problem with XML export in the same screen ([OFBIZ-7038](https://issues.apache.org/jira/browse/OFBIZ-7038))
- Remaining quantity should be ZERO for completed order items ([OFBIZ-7093](https://issues.apache.org/jira/browse/OFBIZ-7093))
- Backordered flag should not be shown for service product ([OFBIZ-7092](https://issues.apache.org/jira/browse/OFBIZ-7092))
- Fixes an issue in workEffort children tree which breaks when the user collapses it from the root node ([OFBIZ-7114](https://issues.apache.org/jira/browse/OFBIZ-7114))
- Fixes an issue in Product Backlog items update ([OFBIZ-7116](https://issues.apache.org/jira/browse/OFBIZ-7116))
- Fixes an error on adding a manufacturing exception day ([OFBIZ-7131](https://issues.apache.org/jira/browse/OFBIZ-7131))
- 'Acctg Trans Entries PDF' on payment details screen not working ([OFBIZ-7100](https://issues.apache.org/jira/browse/OFBIZ-7100))
- UI Fix to make the ecommerce cart summary consistent with other sections ([OFBIZ-7133](https://issues.apache.org/jira/browse/OFBIZ-7133))
- Added existence check to fix stack trace on return links ftl ([OFBIZ-7134](https://issues.apache.org/jira/browse/OFBIZ-7134))
- Added missing content-type on ExampleReportXls to force the mime file type send to user ([OFBIZ-6931](https://issues.apache.org/jira/browse/OFBIZ-6931))
- Fixes an error on console when navigating to update party email address view ([OFBIZ-7130](https://issues.apache.org/jira/browse/OFBIZ-7130))

## Documentation

- Remove commented code labeled as "TO BE REMOVED" since 2008 ([OFBIZ-7043](https://issues.apache.org/jira/browse/OFBIZ-7043))
