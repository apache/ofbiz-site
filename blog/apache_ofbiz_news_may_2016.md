---
layout: post
title: Apache OFBiz News - May 2016
date: '2016-06-08T14:18:00+00:00'
permalink: apache_ofbiz_news_may_2016
---
<h2>Apache OFBiz News May 2016 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about Apachecon NA,  work on a new style website, our Committers give their opinions in a survey and work continues on our re-factoring effort.
<!--more-->
<h2>Apachecon NA 2016 Vancouver</h2>
Four presentations from the OFBiz community were accepted for Apachecon NA in Vancouver. Unfortunately one speaker had to cancel so this was reduced to two. The audio for all Apachecon sessions was recorded and is available on  <a href="http://feathercast.apache.org">feathercast.apache.org</a>
<p></p>
The audio from the OFBiz related presentations can be found using the links below:<p></p>
 <a href="http://feathercast.apache.org/apachecon-na-2016-its-ok-consensus-reached-weve-agreed-to-disagree-sharan-foga/">It's OK Consensus Reached. We've Agreed to Disagree!</a>
<p></p>
 <a href="http://feathercast.apache.org/apachecon-na-2016-ofbiz-configuration-only-or-look-no-code-sharan-foga/">OFBiz Configuration Only (Or Look No Code!)</a>
<p></p>
Our community is now looking forward to <a href="http://events.linuxfoundation.org/events/apachecon-europe">Apachecon EU 2016</a> in Seville, Spain.
<h2>New Website and Logo Ideas</h2>
This month the community gave their feedback on some initial draft pages for a new look project website. The existing website has not been updated for a while and the community think it's time to give the existing site a new look and feel. Feedback on the draft pages was very positive and now work is continuing to refine the site and also complete the remaining pages.
<p></p>
As part of the website update, options for an updated logo featuring the newly style Apache feather were also discussed. The community has decided to change the style and lettering of the logo so that it reflects the true project name 'OFBiz'.  Work is now in progress to prepare some draft layouts for the new logo for the community to review.
<p></p>

<h2>OFBiz Committers Survey</h2>
This month we ran our first ever OFBiz Committer Survey. The intention was to find out what was important to our Committers and what ideas they saw as key for helping improve the project. The survey was completely voluntary and 24 out of our 38 Committers responded. <p></p>
The survey took place over a week, and the results have been summarised on the wiki at the link below:
<p></p>
<a href="https://cwiki.apache.org/confluence/display/OFBIZ/May+2016+-+Committers+Survey">OFBiz Committers Survey</a>
<p></p>
Thank you to everyone who participated and as a result we have some new topics raised for discussion on our mailing lists.
<h2>OFBiz Code Tidy Up and Re-Factor</h2>
There was a continued focus on re-factoring and general code tidy up this month. A revised and much leaner version of the OFBiz start component (start.java) was committed to the repository. This re-factor needed community collaboration to test and validate that the new version worked correctly. Thanks to Taher Alkhateeb for taking on this difficult task from our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Re-Factor+To-Do+List">Current Re-Factor To Do List</a>
<p></p>
If you are interested in helping out with any of the code refactoring work, then please check the current list for tasks that are open.
<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Continue work on the form widget grid element (<a href="https://issues.apache.org/jira/browse/OFBIZ-7029">OFBIZ-7029</a>)
<ul>
 	<li>updates XSD documentation and remove the list type when grid element is used</li>
 	<li>Replace some form lists by grids</li>
 	<li>StatsForm.xml now only uses grids and the "searchList" form in ecommerce Content Forms does NOT.</li>
</ul>
</li>
 	<li>Add links to edit/delete a term, for instance from the list (<a href="https://issues.apache.org/jira/browse/OFBIZ-6866">OFBIZ-6866</a>)</li>
 	<li>Add Uom descriptor for selection and display in invoice forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-7032">OFBIZ-7032</a>)</li>
 	<li>Upgraded freemarker jar to 2.3.24 and remove 2.3.22 (<a href="https://issues.apache.org/jira/browse/OFBIZ-7041">OFBIZ-7041</a>)</li>
 	<li>Have ExampleReportPdfBarcode open in a new window (<a href="https://issues.apache.org/jira/browse/OFBIZ-7036">OFBIZ-7036</a>)</li>
 	<li>Add a drop-down for Tax Auth Combined Id in Product Price Creation screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-5697">OFBIZ-5697</a>)</li>
 	<li>Enhance PartyTypeAttr with a description field (<a href="https://issues.apache.org/jira/browse/OFBIZ-6738">OFBIZ-6738</a>)</li>
 	<li>Updated fromDate and thruDate field type for CustomTimePeriod entity from date to date-time, and made changes accordingly (<a href="https://issues.apache.org/jira/browse/OFBIZ-5740">OFBIZ-5740</a>)</li>
 	<li>Move all Groovy scripts in components WEB-INF/actions sub-folder (<a href="https://issues.apache.org/jira/browse/OFBIZ-6981">OFBIZ-6981</a>)</li>
 	<li>Major changes to the start component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6783">OFBIZ-6783</a>)
<ul>
 	<li>add commons-cli library</li>
 	<li>fix build.xml in start menu to include the commons-cli</li>
 	<li>set a default portoffset value of 0 when not selected in build.xml</li>
 	<li>fully redefine the commands passed in java -jar ofbiz.jar using the commons-cli api</li>
 	<li>remove ofbiz dependency on String[] args across the different components and isolatethem in a new entity class called StartupCommand. This decouples ofbiz from both String[] args and commons-cli at the same time</li>
 	<li>fix all the calls in the master build.xml to comply with the new commands</li>
 	<li>fix the Config.java to remove dependecies on the args array</li>
 	<li>create a utility class StartupCommandUtil that takes care of all commons-cli operations and abstracts away the implementation in private methods</li>
 	<li>substantially reduce the size of main and init in Start.java by refactoring them in different places</li>
 	<li>create an intermediate function called populateLoaderArgs. This is the first step in removing the dependecies on args by "adapting" them using this method</li>
 	<li>unify the exception model everywhere to StartupException. This makes exception propagation cleaner and easier</li>
 	<li>lots of cleanup of the code related in all these areas</li>
 	<li>refactor Start.java to make it about 140 lines long and focused only on high level function calls. Also minimized the number of class fields (state) to only two (ServerState and Config)</li>
 	<li>separate the AdminPortThread into a new class with some refactoring done to ensure interoperability with other classes</li>
 	<li>delete CommonsDaemonStart as jsvc is not yet fully implemented in ofbiz and it stands in the way of a proper refactoring of ofbiz</li>
 	<li>refactor everything so that all dependencies between classes are explicit through function calls (no hidden state or declarations)</li>
 	<li>move all the server processing logic (status, shutdown, start ...) to a new class called StartupControlPanel. All methods in this class are static with side effects only limited to the arguments passed to them</li>
 	<li>add a few missing apache copyright headers</li>
 	<li>refactor Config.java and make it much cleaner and simpler by breaking things down into private methods. Also changed the portoffset to be a normal int instead of a boxed int (Integer)</li>
 	<li>redefine most classes to be package protected (not public) to offer more isolation from the rest of the framework</li>
 	<li>redefine most classes to be final</li>
 	<li>move validation logic to its correct place in StartupCommandUtil</li>
</ul>
</li>
 	<li>Improve the visibility of the Start error messages, also provide pretty printing (<a href="https://issues.apache.org/jira/browse/OFBIZ-6783">OFBIZ-6783</a>)</li>
 	<li>Added manually calculated sales tax while recalculating tax of order (<a href="https://issues.apache.org/jira/browse/OFBIZ-5935">OFBIZ-5935</a>)</li>
 	<li>Minor improvement for "change password" screen title in ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-7080">OFBIZ-7080</a>)</li>
 	<li>Extend OrderAdjustment entity and add isManual field (<a href="https://issues.apache.org/jira/browse/OFBIZ-7078">OFBIZ-7078</a>)</li>
 	<li>Viewing party content should open in a new window (<a href="https://issues.apache.org/jira/browse/OFBIZ-6364">OFBIZ-6364</a>)</li>
 	<li>Example -&gt; PDF should be open in a new window (<a href="https://issues.apache.org/jira/browse/OFBIZ-7054">OFBIZ-7054</a>)</li>
 	<li>Have the internal organization set upon Quote creation (<a href="https://issues.apache.org/jira/browse/OFBIZ-6105">OFBIZ-6105</a>)</li>
 	<li>Have /example/control/fonts.pdf open in a new window (<a href="https://issues.apache.org/jira/browse/OFBIZ-7035">OFBIZ-7035</a>)</li>
 	<li>Show quantityUom in InventoryValuation Report (OFBIZ-5288)</li>
 	<li>Remove restriction of setting PARTY_ENABLED as first default status of party (<a href="https://issues.apache.org/jira/browse/OFBIZ-7098">OFBIZ-7098</a>)</li>
 	<li>Improvement on Edit Promo Screen where two empty options were being shown in shipping method select box (<a href="https://issues.apache.org/jira/browse/OFBIZ-7091">OFBIZ-7091</a>)</li>
 	<li>Show quantityUom in InventoryByProduct (<a href="https://issues.apache.org/jira/browse/OFBIZ-5291">OFBIZ-5291</a>)</li>
 	<li>Show quantityUom in production runs (<a href="https://issues.apache.org/jira/browse/OFBIZ-5289">OFBIZ-5289</a>)</li>
 	<li>Show quantityUom in BoM (<a href="https://issues.apache.org/jira/browse/OFBIZ-5290">OFBIZ-5290</a>)</li>
 	<li>Changed button name from Approve Order to Approve item in PO (<a href="https://issues.apache.org/jira/browse/OFBIZ-7102">OFBIZ-7102</a>)</li>
 	<li>Removed some unused screens and ftl files (<a href="https://issues.apache.org/jira/browse/OFBIZ-6810">OFBIZ-6810</a>)</li>
 	<li>Use only HTTPS in OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-6849">OFBIZ-6849</a>)</li>
 	<li>Move groovy script under WEB-INF/actions for webpos (<a href="https://issues.apache.org/jira/browse/OFBIZ-6981">OFBIZ-6981</a>)</li>
 	<li>Now cmssite will start working again with mapkey in the url in trunk. The code block was commented while working on (<a href="https://issues.apache.org/jira/browse/OFBIZ-4502">OFBIZ-4502</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7119">OFBIZ-7119</a>)</li>
 	<li>Extend Product entity and add serialized field (<a href="https://issues.apache.org/jira/browse/OFBIZ-7079">OFBIZ-7079</a>)</li>
 	<li>Ugrade PDFBox to 1.8.12 due to vulnerability (<a href="https://issues.apache.org/jira/browse/OFBIZ-7136">OFBIZ-7136</a>)</li>
 	<li>Upgrade hadoop jars in the solr component from 2.6.0 to 2.7.2 (<a href="https://issues.apache.org/jira/browse/OFBIZ-7026">OFBIZ-7026</a>)</li>
 	<li>Add xls screen renderer to convert a screen definition like an html flow directly ready by a spreadsheet application
In addition, add an export example button on FindExample screen and add complete macro ftl renderer unit test (<a href="https://issues.apache.org/jira/browse/OFBIZ-6931">OFBIZ-6931</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>Agreement Search List requires partyIdFrom/partyIdTo or fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-7030">OFBIZ-7030</a>)</li>
 	<li>Renamed all component ftl filenames from lower case to upper case (<a href="https://issues.apache.org/jira/browse/OFBIZ-7021">OFBIZ-7021</a>)</li>
 	<li>Un-shipped sales orders are getting listed for returns while creating sales return for another matching address order, now only partially shipped or completely shipped are shown. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7047">OFBIZ-7047</a>)</li>
 	<li>Fixed UiLabel for the GeneratedDescription in ordermgr after applying promotion which was missing due to the usage from EcommerceUiLabels (<a href="https://issues.apache.org/jira/browse/OFBIZ-7057">OFBIZ-7057</a>)</li>
 	<li>Removed redundant entries of handlers from controllers where common-controller is already included (<a href="https://issues.apache.org/jira/browse/OFBIZ-7044">OFBIZ-7044</a>)</li>
 	<li>Non existent item when added as Bulk Item while creating purchase order is throwing null pointer exception (<a href="https://issues.apache.org/jira/browse/OFBIZ-7045">OFBIZ-7045</a>)</li>
 	<li>Non existent Bulk Item throwing errors while its respective qty get updated. Actually system tries to get SupplierProduct data when updating quantity. When productId is not available for item in cart, added check in code so that system should not fetch SupplierProduct record (<a href="https://issues.apache.org/jira/browse/OFBIZ-7046">OFBIZ-7046</a>)</li>
 	<li>Setting a new password in the "forgot password" workflow sometimes doesn't work and causes an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-7058">OFBIZ-7058</a>)</li>
 	<li>CMS does not store "Long text" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7050">OFBIZ-7050</a>)</li>
 	<li>Update empty blog article text does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-7062">OFBIZ-7062</a>)</li>
 	<li>Order term description is not getting set on adding and updating new order term (<a href="https://issues.apache.org/jira/browse/OFBIZ-7053">OFBIZ-7053</a>)</li>
 	<li>Pagination in product price does not work correctly after a price creation (<a href="https://issues.apache.org/jira/browse/OFBIZ-7067">OFBIZ-7067</a>)</li>
 	<li>Export widget ftl pointing to wrong location (<a href="https://issues.apache.org/jira/browse/OFBIZ-7068">OFBIZ-7068</a>)</li>
 	<li>Forgot your password" process for Web POS. On clicking "Forgot your password" link from the Web POS login page, the system was navigating to blank page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7042">OFBIZ-7042</a>)</li>
 	<li>Pagination Problem in Find Invoices By Due Date (<a href="https://issues.apache.org/jira/browse/OFBIZ-7070">OFBIZ-7070</a>)</li>
 	<li>CategoryContent &amp; ProductContent cachekey problem on multi tenant environment (<a href="https://issues.apache.org/jira/browse/OFBIZ-7071">OFBIZ-7071</a>)</li>
 	<li>"Send mail" button from viewProfile doesn't work (<a href="https://issues.apache.org/jira/browse/OFBIZ-7075">OFBIZ-7075</a>)</li>
 	<li>DataResource.dataResourceName field should be at least 255 Chars (<a href="https://issues.apache.org/jira/browse/OFBIZ-7072">OFBIZ-7072</a>)</li>
 	<li>Asset maintenance pdf has missing UI Labels (<a href="https://issues.apache.org/jira/browse/OFBIZ-7084">OFBIZ-7084</a>)</li>
 	<li>Unable to add new note to Fixed Asset's maintenance (<a href="https://issues.apache.org/jira/browse/OFBIZ-7083">OFBIZ-7083</a>)</li>
 	<li>Fixed error in updating employee position's responsibility. There wasn't a requirement of calling the service as "service-multi" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7086">OFBIZ-7086</a>)</li>
 	<li>WorkEffort Reviews list not showing up (<a href="https://issues.apache.org/jira/browse/OFBIZ-7085">OFBIZ-7085</a>)</li>
 	<li>Fixed console error on Calendar Widget pagination. An exception was being thrown when pagination buttons are clicked on the Calendar widget (<a href="https://issues.apache.org/jira/browse/OFBIZ-7095">OFBIZ-7095</a>)</li>
 	<li>While creating inventory item of type "SERIALIZED_INV_ITEM" in "INV_ON_HOLD" status it gets created in "INV_AVAILABLE" status (<a href="https://issues.apache.org/jira/browse/OFBIZ-7094">OFBIZ-7094</a>)</li>
 	<li>Cash Flow Statement report is broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-7089">OFBIZ-7089</a>)</li>
 	<li>Sales Return - UI issues for top level buttons after sales return is created (<a href="https://issues.apache.org/jira/browse/OFBIZ-7048">OFBIZ-7048</a>)</li>
 	<li>Sales Return Item Status is misleading (<a href="https://issues.apache.org/jira/browse/OFBIZ-7049">OFBIZ-7049</a>)</li>
 	<li>Service entity auto not having duplicate record check when we pass single primary key (<a href="https://issues.apache.org/jira/browse/OFBIZ-7099">OFBIZ-7099</a>)</li>
 	<li>Return Pdf is throwing exception (<a href="https://issues.apache.org/jira/browse/OFBIZ-7090">OFBIZ-7090</a>)</li>
 	<li>Product price rule with no conditions (<a href="https://issues.apache.org/jira/browse/OFBIZ-6895">OFBIZ-6895</a>)</li>
 	<li>Quote report doesn't show terms of the quote (<a href="https://issues.apache.org/jira/browse/OFBIZ-5861">OFBIZ-5861</a>)</li>
 	<li>When changing the status of any return to 'accepted', the status of return item should be changed to 'accepted' as well (<a href="https://issues.apache.org/jira/browse/OFBIZ-7101">OFBIZ-7101</a>)</li>
 	<li>FreeMarker template error - Template inclusion failed, on selection of the bluelight theme (<a href="https://issues.apache.org/jira/browse/OFBIZ-7103">OFBIZ-7103</a>)</li>
 	<li>RUN MRP is not working properly for multiple facilities. It deletes the 'Proposed' requirements for all facilities and creates only for selected facility (<a href="https://issues.apache.org/jira/browse/OFBIZ-7097">OFBIZ-7097</a>)</li>
 	<li>Fixed error on console when accessing project manager (<a href="https://issues.apache.org/jira/browse/OFBIZ-7003">OFBIZ-7003</a>)</li>
 	<li>Fixed missing parameter error on deleting workeffort contactmech (<a href="https://issues.apache.org/jira/browse/OFBIZ-7109">OFBIZ-7109</a>)</li>
 	<li>At /accounting/control/globalGLSettings the number of GL accounts is wrong: always 20 items in PDF report list and same problem with XML export in the same screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7038">OFBIZ-7038</a>)</li>
 	<li>Remaining quantity should be ZERO for completed order items (<a href="https://issues.apache.org/jira/browse/OFBIZ-7093">OFBIZ-7093</a>)</li>
 	<li>Backordered flag should not be shown for service product (<a href="https://issues.apache.org/jira/browse/OFBIZ-7092">OFBIZ-7092</a>)</li>
 	<li>Fixes an issue in workEffort children tree which breaks when the user collapses it from the root node (<a href="https://issues.apache.org/jira/browse/OFBIZ-7114">OFBIZ-7114</a>)</li>
 	<li>Fixes an issue in Product Backlog items update (<a href="https://issues.apache.org/jira/browse/OFBIZ-7116">OFBIZ-7116</a>)</li>
 	<li>Fixes an error on adding a manufacturing exception day (<a href="https://issues.apache.org/jira/browse/OFBIZ-7131">OFBIZ-7131</a>)</li>
 	<li>'Acctg Trans Entries PDF' on payment details screen not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-7100">OFBIZ-7100</a>)</li>
 	<li>UI Fix to make the ecommerce cart summary consistent with other sections (<a href="https://issues.apache.org/jira/browse/OFBIZ-7133">OFBIZ-7133</a>)</li>
 	<li>Added existence check to fix stack trace on return links ftl (<a href="https://issues.apache.org/jira/browse/OFBIZ-7134">OFBIZ-7134</a>)</li>
 	<li>Added missing content-type on ExampleReportXls to force the mime file type send to user (<a href="https://issues.apache.org/jira/browse/OFBIZ-6931">OFBIZ-6931</a>)</li>
 	<li>Fixes an error on console when navigating to update party email address view (<a href="https://issues.apache.org/jira/browse/OFBIZ-7130">OFBIZ-7130</a>)</li>
</ul>
<h2>Documentation</h2>
<ul>
 	<li>Remove commented code labeled as "TO BE REMOVED" since 2008 (<a href="https://issues.apache.org/jira/browse/OFBIZ-7043">OFBIZ-7043</a>)</li>
</ul>
