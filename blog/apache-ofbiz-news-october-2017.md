---
layout: post
title: 'Apache OFBiz News - October 2017 '
date: '2017-11-14T08:18:24+00:00'
permalink: apache-ofbiz-news-october-2017
---
<h2>Apache OFBiz News October 2017 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about a proposed new OFBiz documentation framework, we look at making it easier for users to find out about data model changes, we look forward to having an OFBiz presence at the Open Source Summit in Paris and we prepare to create some new 17.xx branches.
<!--more--> 
<h2>Proposed New Documentation Framework</h2> 
A lot of discussion has been happening this month on a proposal about setting up a documentation framework integrated within OFBiz. See below for some of the key ideas being suggested:
<ul>
<li>Use of Asciidoc as the documentation language</li>
<li>Use of Asciidoctor as the documentation tool</l>
<li>Publishing documentation using the Gradle Asciidoctor plugin</li>
<li>Each component contains its own documentation</li>
<li>General documentation goes to either a standalone directory or a generic component like common or base</li>
<li>Documentation files are small and focused on one topic. </li>
<li>Publishing will be in all formats including PDF for users, or HTML for embedded help and wiki pages. (NOTE: This means that OFBiz will not parse docbook for its help system, instead it will render generated HTML)</li>
</ul>
If you have any feedback or would like to be involved with the work to implement our documentation framework then please respond to the <a href="https://s.apache.org/Pr5g" target="_blank" rel="noopener">  documentation framework discussion thread</a> highlighting your willingness to participate or help out.
<p></p>
This will be a big step forward for the project, and thanks to everyone who has contributed so far.
<h2>Tracking Data Model Changes</h2>
Last month we talked about the new Data Model documentation that had been put together by Aditya Sharma. This month an effort has begun to create a  DATAMODELCHANGES.md file that contains the details of the changes to the data model over time. This will make it a lot easier for users to identify and locate data model changes. The initial file will feature all changes between 9.04 to date.
<p></p>
If you would like to keep up to date with what is happening then <a href="https://issues.apache.org/jira/browse/OFBIZ-9902" target="_blank" rel="noopener"> JIRA OFBIZ-9902</a> has been created to help track progress.
<h2>OFBiz at Open Source Summit in Paris</h2> 
The ASF has been given half day track at the  <a href="https://cwiki.apache.org/confluence/display/COMDEV/ASF+Track+@+Open+Source+Summit+Paris+2017" target="_blank" rel="noopener"> Open Source Summit in Paris</a>. The conference is free to attend and will take place on 6th and 7th December 2017. A call for presentations (in French or English) was made on the ComDev mailing list and we have an OFBiz presentation on the schedule:
<ul>
<li>DevOps for Apache OFBiz using Jenkins and Selenium  - Olivier Heintz</l>
</ul>
There will also be other members of the OFBiz Community at the event as well as an Apache booth.  More details about the event can be found on the conference website: 
<a href="http://www.opensourcesummit.paris" target="_blank" rel="noopener"> www.opensourcesummit.paris</a>
<h2>Preparing to Create OFBiz 17.xx Branches</h2> 
You may have noticed that there has been a lot of work happening on our dev list. This is in preparation for the creation of some new OFBiz branches from our current trunk. In the past we have usually created one release branch that was stabilsed and then released as our next stable release. 
<p></p>
Our current 16.11 stable release was initially created from a trunk branch from November last year, so it is around the right time for us to look at creating a  17.xx branch. However, we now have two trunks - one for the framework and one for plugins so it will be the first time that we will be creating 2 branches. This is an exciting time for the project as we start thinking about what to include before the branches are created.
<p></p>
If you would like to keep informed of the progress around the creation of these new branches then please subscribe to our dev mailing list.
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Add session tracking mode and make cookie secure (<a href="https://issues.apache.org/jira/browse/OFBIZ-6655">OFBIZ-6655</a>)</li>
 	<li>Moved multiflex theme from themes to plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-9789">OFBIZ-9789</a>)</li>
 	<li>Moved ecommain.css from common theme to ecommerce plugin as it's only for ecommerce. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9771">OFBIZ-9771</a>)</li>
 	<li>Moved form.css and reset.css from common theme to ecommerce plugin as it's only for ecommerce. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9771">OFBIZ-9771</a>)</li>
 	<li>Update to Tomcat 8.5.23. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9813">OFBIZ-9813</a>)</li>
 	<li>Fixing defects reported by FindBugs,
<ul>
 	<li>package org.apache.ofbiz.accounting.invoice. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9541">OFBIZ-9541</a>)</li>
 	<li>package org.apache.ofbiz.accounting.thirdparty.clearcommerce. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9454">OFBIZ-9454</a>)</li>
 	<li>package org.apache.ofbiz.base.start. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9573">OFBIZ-9573</a>)</li>
 	<li>package org.apache.ofbiz.base.test. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9574">OFBIZ-9574</a>)</li>
 	<li>package org.apache.ofbiz.base.util.cache. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9575">OFBIZ-9575</a>)</li>
 	<li>package org.apache.ofbiz.base.util.cache.test. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9576">OFBIZ-9576</a>)</li>
 	<li>package org.apache.ofbiz.base.util.string.test. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9589">OFBIZ-9589</a>)</li>
 	<li>package org.apache.ofbiz.common.authentication. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9627">OFBIZ-9627</a>)</li>
 	<li>package org.apache.ofbiz.common.email. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9628">OFBIZ-9628</a>)</li>
 	<li>package org.apache.ofbiz.common.image. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9629">OFBIZ-9629</a>)</li>
 	<li>package org.apache.ofbiz.common.login. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9630">OFBIZ-9630</a>)</li>
 	<li>package org.apache.ofbiz.common.period. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9631">OFBIZ-9631</a>)</li>
 	<li>package org.apache.ofbiz.common.qrcode. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9633">OFBIZ-9633</a>)</li>
 	<li>package org.apache.ofbiz.common.uom. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9634">OFBIZ-9634</a>)</li>
 	<li>package org.apache.ofbiz.security. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9635">OFBIZ-9635</a>)</li>
 	<li>package org.apache.ofbiz.securityext.login. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9637">OFBIZ-9637</a>)</li>
 	<li>package org.apache.ofbiz.service. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9638">OFBIZ-9638</a>)</li>
 	<li>package org.apache.ofbiz.catalina.container. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9639">OFBIZ-9639</a>)</li>
 	<li>package org.apache.ofbiz.common.preferences. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9640">OFBIZ-9640</a>)</li>
 	<li>package org.apache.ofbiz.base.conversion. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9679">OFBIZ-9679</a>)</li>
 	<li>package org.apache.ofbiz.common. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9681">OFBIZ-9681</a>)</li>
 	<li>package org.apache.ofbiz.widget.renderer.html. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9686">OFBIZ-9686</a>)</li>
 	<li>package org.apache.ofbiz.service.group. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9684">OFBIZ-9684</a>)</li>
 	<li>package org.apache.ofbiz.service.engine. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9688">OFBIZ-9688</a>)</li>
 	<li>package org.apache.ofbiz.base.util.collections. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9590">OFBIZ-9590</a>)</li>
 	<li>package org.apache.ofbiz.service.config.model. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9682">OFBIZ-9682</a>)</li>
 	<li>package org.apache.ofbiz.widget.renderer.fo. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9685">OFBIZ-9685</a>)</li>
 	<li>package org.apache.ofbiz.base.crypto. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9689">OFBIZ-9689</a>)</li>
 	<li>package org.apache.ofbiz.service.mail. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9690">OFBIZ-9690</a>)</li>
 	<li>package org.apache.ofbiz.service.calendar. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9691">OFBIZ-9691</a>)</li>
 	<li>package org.apache.ofbiz.base.util. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9692">OFBIZ-9692</a>)</li>
 	<li>package org.apache.ofbiz.service.test. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9694">OFBIZ-9694</a>)</li>
 	<li>package org.apache.ofbiz.service.semaphore. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9693">OFBIZ-9693</a>)</li>
 	<li>package org.apache.ofbiz.widget.cache. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9695">OFBIZ-9695</a>)</li>
 	<li>package org.apache.ofbiz.accounting.thirdparty.sagepay. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9545">OFBIZ-9545</a>)</li>
 	<li>package org.apache.ofbiz.service.eca. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9683">OFBIZ-9683</a>)</li>
 	<li>package org.apache.ofbiz.widget.renderer.macro. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9702">OFBIZ-9702</a>)</li>
 	<li>package org.apache.ofbiz.workeffort.workeffort. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9703">OFBIZ-9703</a>)</li>
 	<li>package org.apache.ofbiz.widget.renderer. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9704">OFBIZ-9704</a>)</li>
 	<li>package org.apache.ofbiz.entity.serialize. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9705">OFBIZ-9705</a>)</li>
 	<li>package org.apache.ofbiz.entity.test. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9706">OFBIZ-9706</a>)</li>
 	<li>package org.apache.ofbiz.entity.transaction. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9707">OFBIZ-9707</a>)</li>
 	<li>package org.apache.ofbiz.service.job. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9709">OFBIZ-9709</a>)</li>
 	<li>package org.apache.ofbiz.widget.model. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9710">OFBIZ-9710</a>)</li>
 	<li>package org.apache.ofbiz.entity.cache. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9711">OFBIZ-9711</a>)</li>
 	<li>package org.apache.ofbiz.entity.finder. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9712">OFBIZ-9712</a>)</li>
 	<li>package org.apache.ofbiz.entity.condition. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9713">OFBIZ-9713</a>)</li>
 	<li>package org.apache.ofbiz.service.rmi.socket.ssl. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9714">OFBIZ-9714</a>)</li>
 	<li>package org.apache.ofbiz.datafile. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9715">OFBIZ-9715</a>)</li>
 	<li>package org.apache.ofbiz.entity. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9716">OFBIZ-9716</a>)</li>
</ul>
</li>
 	<li>removed dependency from start component on base</li>
 	<li>Removed some old and unused images.</li>
 	<li>Using try-with-resources with JDBC objects (<a href="https://issues.apache.org/jira/browse/OFBIZ-9839">OFBIZ-9839</a>)</li>
 	<li>Implement AutoCloseable interface in SQLProcessor Class (<a href="https://issues.apache.org/jira/browse/OFBIZ-9841">OFBIZ-9841</a>)</li>
 	<li>Moved some utility js files from images to common-theme/js/util</li>
 	<li>Removed unused theme related data, also fix the ofbiz logo for bluelight theme.</li>
 	<li>Update build.gradle to the latest dependencies. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9674">OFBIZ-9674</a>)</li>
 	<li>Inconsistent String Comparisons (<a href="https://issues.apache.org/jira/browse/OFBIZ-9254">OFBIZ-9254</a>)
<ul>
 	<li>accounting java files</li>
 	<li>ftl file</li>
 	<li>framework base</li>
 	<li>application content</li>
 	<li>framework entity</li>
 	<li>order</li>
 	<li>party and workeffort</li>
 	<li>Applications order</li>
 	<li>framework service</li>
 	<li>framework entityext</li>
 	<li>webapp</li>
 	<li>webtools and widgets</li>
</ul>
</li>
 	<li>Usage of factory method or Builder pattern for Locale object creation and usage. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9488">OFBIZ-9488</a>)</li>
 	<li>Proper use of if-has-permission (<a href="https://issues.apache.org/jira/browse/OFBIZ-9740">OFBIZ-9740</a>)</li>
 	<li>Manage life span of SecurityGroupPermission entity. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9801">OFBIZ-9801</a>)</li>
 	<li>While fetching product inventory, it should also return accounting quantity as well.</li>
 	<li>While creating inventory transfer, to-location parameter is not handled (<a href="https://issues.apache.org/jira/browse/OFBIZ-9834">OFBIZ-9834</a>)</li>
 	<li>Added ability to disable seca rule (<a href="https://issues.apache.org/jira/browse/OFBIZ-9826">OFBIZ-9826</a>)</li>
 	<li>Label Manager: Have totals shown at the top of the search results. (<a href="https://issues.apache.org/jira/browse/OFBIZ-6457">OFBIZ-6457</a>)</li>
 	<li>Enhance cookies security (<a href="https://issues.apache.org/jira/browse/OFBIZ-9865">OFBIZ-9865</a>)</li>
 	<li>Secure HTTP headers (<a href="https://issues.apache.org/jira/browse/OFBIZ-6766">OFBIZ-6766</a>)
<ul>
 	<li>Add no-referrer-when-downgrade Referrer-Policy</li>
 	<li>Add a Content Security Policy To not block anything</li>
</ul>
</li>
 	<li>Facility main screen relies on demo data (<a href="https://issues.apache.org/jira/browse/OFBIZ-5321">OFBIZ-5321</a>)</li>
 	<li>Add rat exclude files to exclude those files that do not need license header (<a href="https://issues.apache.org/jira/browse/OFBIZ-9856">OFBIZ-9856</a>)</li>
 	<li>removed unused empty folder, and its classpath entry from order/ofbiz-component.xml</li>
 	<li>Moved date plugin from images/date to common/js/plugins(<a href="https://issues.apache.org/jira/browse/OFBIZ-5776">OFBIZ-5776</a>)</li>
 	<li>No option to add Event Purpose on Events page, applied patch from jira issue with slightly changes (<a href="https://issues.apache.org/jira/browse/OFBIZ-9680">OFBIZ-9680</a>)</li>
 	<li>Required field indicator (*) is missing
<ul>
 	<li>create contact list (<a href="https://issues.apache.org/jira/browse/OFBIZ-9756">OFBIZ-9756</a>)</li>
 	<li>edit data resource role (<a href="https://issues.apache.org/jira/browse/OFBIZ-9757">OFBIZ-9757</a>)</li>
</ul>
</li>
 	<li>Create separate Permission Services for CRUD services of ShoppingList and ShoppingListItem. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9763">OFBIZ-9763</a>)</li>
 	<li>Replace ContentAssoc related CRUD services with entity-auto. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9907">OFBIZ-9907</a>)</li>
 	<li>Added a hint to skip tasks which are automatically invoked during the main task and provided an example to run ./gradle build without the JUnit tests (useful for server deployments).</li>
 	<li>Update to Apache Derby 10.14.1.0. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9887">OFBIZ-9887</a>)</li>
 	<li>Improve Rainbow theme showing themes (<a href="https://issues.apache.org/jira/browse/OFBIZ-9862">OFBIZ-9862</a>)</li>
 	<li>Token Based Authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-9833">OFBIZ-9833</a>)</li>
 	<li>Move all data in applications to the datamodel component. Moved seed and seed-initial data from party, content, security ext and work effort component. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9501">OFBIZ-9501</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Add session tracking mode and make cookie secure (<a href="https://issues.apache.org/jira/browse/OFBIZ-6655">OFBIZ-6655</a>)</li>
 	<li>Moved multiflex theme from themes to plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-9789">OFBIZ-9789</a>)</li>
 	<li>Updated contentForum.css path in plugins.</li>
 	<li>Moved ecommain.css, form.css and reset.css from common theme to ecommerce plugin as its only for ecommerce. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9771">OFBIZ-9771</a>)</li>
 	<li>Update Apache Solr/Lucene to release 6.6.0. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9391">OFBIZ-9391</a>)</li>
 	<li>Add a new plugin for the redis (<a href="https://issues.apache.org/jira/browse/OFBIZ-9829">OFBIZ-9829</a>)</li>
 	<li>Updated miscAjaxFunctions.js location in ecommerce component</li>
 	<li>Proper use of if-has-permission (<a href="https://issues.apache.org/jira/browse/OFBIZ-9740">OFBIZ-9740</a>)</li>
 	<li>Manage life span of SecurityGroupPermission entity. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9801">OFBIZ-9801</a>)</li>
 	<li>Removed unfinished Solr query functionality from the codebase which was introduced with (<a href="https://issues.apache.org/jira/browse/OFBIZ-6595">OFBIZ-6595</a>)</li>
 	<li>Update Solr/Lucene to 7.1.0 [CVE-2017-9803] [CVE-2017-12629]. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9835">OFBIZ-9835</a>)</li>
 	<li>Inconsistent String Comparisons, Applied patch for plugins classes. Thanks Devanshu Vyas for your contribution (<a href="https://issues.apache.org/jira/browse/OFBIZ-9254">OFBIZ-9254</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>EmailServices.sendMailFromScreen improved to take multiple attachments with appropriate type along with several email fixes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9395">OFBIZ-9395</a>).</li>
 	<li>InitTheme.groovy can't work without request (<a href="https://issues.apache.org/jira/browse/OFBIZ-9798">OFBIZ-9798</a>)</li>
 	<li>FTL Error in OrderView screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-9803">OFBIZ-9803</a>)</li>
 	<li>Moved contentForum.css to contentimages webapp and updated path accordinlgy. (<a href="https://issues.apache.org/jira/browse/OFBIZ-6259">OFBIZ-6259</a>)</li>
 	<li>Exception in service semaphore in wait mode and with multi thread calls. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9534">OFBIZ-9534</a>).</li>
 	<li>the introduction of multicatch in Converters.java which came with r1811434 breaks MiscTests#testLoadContainedConvertersIgnoresException</li>
 	<li>Template edit are not working correctly (<a href="https://issues.apache.org/jira/browse/OFBIZ-9830">OFBIZ-9830</a>)</li>
 	<li>Purchase Order is not getting canceled automatically if all items are canceled (<a href="https://issues.apache.org/jira/browse/OFBIZ-9838">OFBIZ-9838</a>)</li>
 	<li>GlAccountOrganizations manually added using accounting forms do not appear on trial report because fromDate gets set to NULL (<a href="https://issues.apache.org/jira/browse/OFBIZ-5938">OFBIZ-5938</a>)</li>
 	<li>Corrected elseif tag closing in GenericSurvey.ftl file found this while working on <a href="https://issues.apache.org/jira/browse/OFBIZ-9254">OFBIZ-9254</a></li>
 	<li>Lead Profile missing if clicked on other menu (<a href="https://issues.apache.org/jira/browse/OFBIZ-9655">OFBIZ-9655</a>)</li>
 	<li>Wrong String comparisons introduced in r1812255.</li>
 	<li>added JavaDoc param name and description.</li>
 	<li>Not setting VIEW_INDEX for IterateSectionWidget.renderWidgetString causes rendering error (<a href="https://issues.apache.org/jira/browse/OFBIZ-9889">OFBIZ-9889</a>)</li>
 	<li>Moved enabled attribute definition to its correct place, it was added in wrong attribute group</li>
 	<li>X-Frame-Options configuration is not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-9891">OFBIZ-9891</a>)</li>
 	<li>Party Id label missing from edit data resource role. Remove the empty title property to populate the default ui label using FormFieldTitle_ pattern. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9758">OFBIZ-9758</a>)</li>
 	<li>Fixed Asset Id field is below update button on EditInventoryItem page (<a href="https://issues.apache.org/jira/browse/OFBIZ-9503">OFBIZ-9503</a>)</li>
 	<li>Issue while removing RateAmount Record (<a href="https://issues.apache.org/jira/browse/OFBIZ-9904">OFBIZ-9904</a>)</li>
 	<li>Success message showing before the party identification number is updated (<a href="https://issues.apache.org/jira/browse/OFBIZ-9895">OFBIZ-9895</a>)</li>
 	<li>Fixed testExpirePartyRate test. Passed required field as per modification in service definetion. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9904">OFBIZ-9904</a>)</li>
 	<li>Service level check is missing on transfer inventory. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9842">OFBIZ-9842</a>)</li>
 	<li>Request handler exception in create billing account from suppliers profile page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9751">OFBIZ-9751</a>)</li>
 	<li>Issue while creating new person in the party component. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9653">OFBIZ-9653</a>)</li>
 	<li>ofbizsetup cannot create first customer. problem with state/province dropdown (<a href="https://issues.apache.org/jira/browse/OFBIZ-6054">OFBIZ-6054</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Added EC_DEFAULT as theme for ecommerce. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9805">OFBIZ-9805</a>)</li>
 	<li>Get the header and footer template location correctly in ecommerce main decorator. Now multiflex theme will work fine with ecommerce.(<a href="https://issues.apache.org/jira/browse/OFBIZ-9805">OFBIZ-9805</a>)</li>
 	<li>setLocaleFromBrowser request missing for webpos component (<a href="https://issues.apache.org/jira/browse/OFBIZ-9847">OFBIZ-9847</a>)</li>
 	<li>Removed getRelatedOneCache cache call, as this method is removed from trunk.</li>
</ul>
