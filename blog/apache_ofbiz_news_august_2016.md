---
layout: post
title: 'Apache OFBiz News - August 2016 '
date: '2016-09-05T06:06:13+00:00'
permalink: apache_ofbiz_news_august_2016
---
<h2>Apache OFBiz News August 2016 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about how statistics show that OFBiz is a typical ASF project, we begin marketing our new OFBiz logo, a new notifications mailing list is setup and our OFBiz Service Providers page gets a clean up.
<!--more-->

<h2>OFBiz - A Typical ASF Project</h2>
Recently some ASF analytics have been made available using Snoot. One of the most recent factoids that came out this month was about OFBiz. Did you know that OFBiz mimics the focus of all the ASF projects? 
<p></p>
Yes it it true! Just take a look at the <a href="https://twitter.com/snoot_io/status/767063202123354112">Snoot OFBiz Factoid </a> and you will see that we spend time equally on all of the following:
<ul>
<li>Working on Bug Fixes and Improvements</li>
<li>Discussing Developments</li>
<li>Interacting with Our Users </li>
<li>Committing Code</li>
</ul>
 <p></p>
Which goes to show that OFBiz is a truly balanced project!
<h2>Marketing our New Logo</h2>
In our last update, we talked about the new OFBiz logo selected by the community. Various versions and formats of the logo have been uploaded to the wiki including a completely white version for use on dark backgrounds. The main logo file is in SVG format which allows it to be resized easily without any loss of quality. You can find all the logo files displayed at the following gallery link:  <a href="https://cwiki.apache.org/confluence/display/OFBADMIN/Material+for+Branding+and+Marketing#MaterialforBrandingandMarketing-Gallery" target="_blank">OFBiz Logo Gallery</a> 
The logos are sorted by date with the newest first.
<p></p>
Also remember that some stickers with the new OFBiz logo have been printed, so if you are going to ApacheCon in Seville then please come along to the ASF booth and pick up some stickers!

<h2>New Notifications Mailing List</h2>
OFBiz has had so much going on lately (e.g. re-factoring, Gradle, bug fixes etc.) that all the automatic JIRA notifications were filling up our development mailing list. The large volume of messages was making it difficult to follow general discussion threads. To help solve the problem, a new Notifications mailing list has been created and all the automatic JIRA messages have been re-routed to it.  This will leave our development mailing clear so that discussion threads can be followed more easily.
<p></p>
If you want to follow the JIRA notification messages then you will need to subscribe to the new list at notifications@ofbiz.apache.org.

<h2>Service Providers</h2>
A review was done this month to tidy up our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">OFBiz Service Providers page</a>. Over the years this page had become out of date and contained information that wasn't necessary. The page has now had a complete cleanup.
<p></p>
If you want to be added as a OFBiz Service Provider then details of how to do this are also included on the Service Providers page.

<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Enforce noninstantiability to multiple classes (<a href="https://issues.apache.org/jira/browse/OFBIZ-7799">OFBIZ-7799</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7800">OFBIZ-7800</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7802">OFBIZ-7802</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7803">OFBIZ-7803</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7806">OFBIZ-7806</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7807">OFBIZ-7807</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7809">OFBIZ-7809</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7810">OFBIZ-7810</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7811">OFBIZ-7811</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7911">OFBIZ-7911</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7912">OFBIZ-7912</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7913">OFBIZ-7913</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7914">OFBIZ-7914</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7915">OFBIZ-7915</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7982">OFBIZ-7982</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7983">OFBIZ-7983</a>)</li>
 	<li>Move SeoConfig.xml to commonext/config (<a href="https://issues.apache.org/jira/browse/OFBIZ-7939">OFBIZ-7939</a>)</li>
 	<li>Remove system generated fields from data files in multiple components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7901">OFBIZ-7901</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7902">OFBIZ-7902</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7903">OFBIZ-7903</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7904">OFBIZ-7904</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7905">OFBIZ-7905</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7909">OFBIZ-7909</a>)</li>
 	<li>Make displaying logs in webtools better by removing LogView.groovy and optimizing FetchLogs.groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-7944">OFBIZ-7944</a>)</li>
 	<li>Remove warnings regarding missing component lib folders (<a href="https://issues.apache.org/jira/browse/OFBIZ-7776">OFBIZ-7776</a>)</li>
 	<li>Rename PasswordSecurityData.xml to PasswordSecurityDemoData.xml</li>
 	<li>Update Apache Shiro dependency from 1.2.5 to 1.3.0</li>
 	<li>Remove ofbizSecure and ofbizBackgroundSecure from gradle and make all OFBiz server tasks secure by default, also update trunk scripts (<a href="https://issues.apache.org/jira/browse/OFBIZ-7951">OFBIZ-7951</a>)</li>
 	<li>Unify all occurences of operating system checks in one variable in build.gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-7534">OFBIZ-7534</a>)</li>
 	<li>Update the Ubuntu script with respect to Gradle changes (<a href="https://issues.apache.org/jira/browse/OFBIZ-7677">OFBIZ-7677</a>)</li>
 	<li>Improve component templates to work with the Gradle solution (<a href="https://issues.apache.org/jira/browse/OFBIZ-7910">OFBIZ-7910</a>)</li>
 	<li>Update various labels in CommonUiLabels.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-7953">OFBIZ-7953</a>)</li>
 	<li>Use Pandoc to integrate our README.MD from the repo to confluence (<a href="https://issues.apache.org/jira/browse/OFBIZ-7723">OFBIZ-7723</a>)</li>
 	<li>Remove 42 unneeded libraries from the master script (<a href="https://issues.apache.org/jira/browse/OFBIZ-7534">OFBIZ-7534</a>)</li>
 	<li>Remove build dependency of Order on Marketing (<a href="https://issues.apache.org/jira/browse/OFBIZ-7966">OFBIZ-7966</a>)</li>
 	<li>Remove the view-entity "AgreementAndRole" (<a href="https://issues.apache.org/jira/browse/OFBIZ-5994">OFBIZ-5994</a>)</li>
 	<li>Remove EventReminders.properties as it has been declared deprecated (<a href="https://issues.apache.org/jira/browse/OFBIZ-6303">OFBIZ-6303</a>)</li>
 	<li>Upgrade Tomcat to 8.5.3 (actually to 8.0.36 for now) - First step (<a href="https://issues.apache.org/jira/browse/OFBIZ-7348">OFBIZ-7348</a>)</li>
 	<li>Simplify and shorten Gradle tasks (<a href="https://issues.apache.org/jira/browse/OFBIZ-7968">OFBIZ-7968</a>)</li>
 	<li>Remove quotes to evaluate tenantId instead of treating it as a string (in build.gradle) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7968">OFBIZ-7968</a>)</li>
 	<li>Add translations to AccountingUILabels.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-7918">OFBIZ-7918</a>)</li>
 	<li>Add WorkEffortAttribute CRUD services and simplify submit button definition (<a href="https://issues.apache.org/jira/browse/OFBIZ-7973">OFBIZ-7973</a>)</li>
 	<li>Add field "changeByUserLoginId" for multiple entities (<a href="https://issues.apache.org/jira/browse/OFBIZ-7624">OFBIZ-7624</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7625">OFBIZ-7625</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7620">OFBIZ-7620</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7621">OFBIZ-7621</a>)</li>
 	<li>Purchase requirements are set to "ordered" once a purchase order is approved and not as soon as it is created (<a href="https://issues.apache.org/jira/browse/OFBIZ-7478">OFBIZ-7478</a>)</li>
 	<li>Improve Dutch labels for the multiple components (<a href="https://issues.apache.org/jira/browse/OFBIZ-8010">OFBIZ-8010</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8021">OFBIZ-8021</a>)</li>
 	<li>Add CRUD services to multiple entities (<a href="https://issues.apache.org/jira/browse/OFBIZ-8012">OFBIZ-8012</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7831">OFBIZ-7831</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7837">OFBIZ-7837</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7839">OFBIZ-7839</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7845">OFBIZ-7845</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7846">OFBIZ-7846</a>)</li>
 	<li>Clean up commented out code in Java source for the multiple components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7848">OFBIZ-7848</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7894">OFBIZ-7894</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7854">OFBIZ-7854</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7855">OFBIZ-7855</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7857">OFBIZ-7857</a>)</li>
 	<li>Clean up commented out code in the Freemarker template for multiple components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7894">OFBIZ-7894</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8023">OFBIZ-8023</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8035">OFBIZ-8035</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7872">OFBIZ-7872</a>)</li>
 	<li>Modify data retrieval and storage logic (<a href="https://issues.apache.org/jira/browse/OFBIZ-5024">OFBIZ-5024</a>)</li>
 	<li>Have TransactionTotalsPdf.pdf show the internal company it has been generated for (<a href="https://issues.apache.org/jira/browse/OFBIZ-7920">OFBIZ-7920</a>)</li>
 	<li>Allow Gantt function to compute tasks with non-numerical IDs (<a href="https://issues.apache.org/jira/browse/OFBIZ-7971">OFBIZ-7971</a>)</li>
 	<li>Add themes as gradle sub-products like in all other components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7534">OFBIZ-7534</a>)</li>
 	<li>Incorporate the readme for the product component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7507">OFBIZ-7507</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>Error in the gradle task 'loadTenant' (<a href="https://issues.apache.org/jira/browse/OFBIZ-7534">OFBIZ-7534</a>)</li>
 	<li>Data load error in the webpos component caused by the removal of the POS component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7946">OFBIZ-7946</a>)</li>
 	<li>External library files are not in the OFBiz folder structure (<a href="https://issues.apache.org/jira/browse/OFBIZ-7783">OFBIZ-7783</a>)</li>
 	<li>"GitInfo.ftl" cannot be created when using svn (<a href="https://issues.apache.org/jira/browse/OFBIZ-7942">OFBIZ-7942</a>)</li>
 	<li>The jar "jpim.jar" is not presented since it can't be downloaded from jcenter (<a href="https://issues.apache.org/jira/browse/OFBIZ-7961">OFBIZ-7961</a>)</li>
 	<li>The "PrepareFind" service ignore the "timeZone" parameter when performing Date/Time calculations (<a href="https://issues.apache.org/jira/browse/OFBIZ-3739">OFBIZ-3739</a>)</li>
 	<li>Some unit tests in the start component cause a regression (<a href="https://issues.apache.org/jira/browse/OFBIZ-7897">OFBIZ-7897</a>)</li>
 	<li>Remove a useless IE7 hack (<a href="https://issues.apache.org/jira/browse/OFBIZ-7960">OFBIZ-7960</a>)</li>
 	<li>Any update made for 'Quantity to produce' in a newly created production run is not saved (<a href="https://issues.apache.org/jira/browse/OFBIZ-7558">OFBIZ-7558</a>)</li>
 	<li>The performance test screen is broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-7989">OFBIZ-7989</a>)</li>
 	<li>Index.jsp is missing for the BI component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7981">OFBIZ-7981</a>)</li>
 	<li>OrderId and PartId are shown multiple times in the ReceiveInventoryAgainstPurchaseOrder screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7427">OFBIZ-7427</a>)</li>
 	<li>Starting the server shows a warning regarding "InventoryItemAndLocation" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7986">OFBIZ-7986</a>)</li>
 	<li>Empty link icon in search results of find screens (<a href="https://issues.apache.org/jira/browse/OFBIZ-7819">OFBIZ-7819</a>)</li>
 	<li>Client side required field validation is not working for password type field (<a href="https://issues.apache.org/jira/browse/OFBIZ-7978">OFBIZ-7978</a>)</li>
 	<li>Empty scroll bar in the party component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7820">OFBIZ-7820</a>)</li>
 	<li>Upload communication content functionality is not working from the InternalNoteCreation screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7830">OFBIZ-7830</a>)</li>
 	<li>Unable to perform search in the eBayOrdersImport screen of the eBay component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7674">OFBIZ-7674</a>)</li>
 	<li>Adding communication event roles does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-7628">OFBIZ-7628</a>)</li>
 	<li>Request not redirecting when creating party classification (<a href="https://issues.apache.org/jira/browse/OFBIZ-8007">OFBIZ-8007</a>)</li>
 	<li>Redundant options at select filter on find screens (<a href="https://issues.apache.org/jira/browse/OFBIZ-7833">OFBIZ-7833</a>)</li>
 	<li>View Entities are not shown as being wiew entities in the new entity listing UI in webtools (<a href="https://issues.apache.org/jira/browse/OFBIZ-7977">OFBIZ-7977</a>)</li>
 	<li>Cancelling shipment receipt doubles the inventory (<a href="https://issues.apache.org/jira/browse/OFBIZ-7943">OFBIZ-7943</a>)</li>
 	<li>Missing CommonCode label in CommonUiLabels.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-8055">OFBIZ-8055</a>)</li>
 	<li>Unused import in TestSuiteInfo.groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-7975">OFBIZ-7975</a>)</li>
 	<li>"Create Customer" fails because password is missing (<a href="https://issues.apache.org/jira/browse/OFBIZ-7947">OFBIZ-7947</a>)</li>
 	<li>Unused references of maincss.css from source code (<a href="https://issues.apache.org/jira/browse/OFBIZ-7311">OFBIZ-7311</a>)</li>
</ul>
<h2>Documentation</h2>
<ul>
 	<li>Update the documentation with respect to Gradle changes (<a href="https://issues.apache.org/jira/browse/OFBIZ-7677">OFBIZ-7677</a>)</li>
</ul>
