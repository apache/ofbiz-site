---
layout: post
title: 'Apache OFBiz News - August 2016 '
date: '2016-09-05T06:06:13+00:00'
permalink: apache_ofbiz_news_august_2016
---
## Apache OFBiz News August 2016

Welcome to our regular monthly round-up of OFBiz news. This month we have news about how statistics show that OFBiz is a typical ASF project, we begin marketing our new OFBiz logo, a new notifications mailing list is setup and our OFBiz Service Providers page gets a clean up.

<!--more-->

## OFBiz - A Typical ASF Project

Recently some ASF analytics have been made available using Snoot. One of the most recent factoids that came out this month was about OFBiz. Did you know that OFBiz mimics the focus of all the ASF projects?

<p></p>

Yes it it true! Just take a look at the <a href="https://twitter.com/snoot_io/status/767063202123354112">Snoot OFBiz Factoid </a> and you will see that we spend time equally on all of the following:

- Working on Bug Fixes and Improvements
- Discussing Developments
- Interacting with Our Users
- Committing Code

 <p></p>

Which goes to show that OFBiz is a truly balanced project!

## Marketing our New Logo

In our last update, we talked about the new OFBiz logo selected by the community. Various versions and formats of the logo have been uploaded to the wiki including a completely white version for use on dark backgrounds. The main logo file is in SVG format which allows it to be resized easily without any loss of quality. You can find all the logo files displayed at the following gallery link:  <a href="https://cwiki.apache.org/confluence/display/OFBADMIN/Material+for+Branding+and+Marketing#MaterialforBrandingandMarketing-Gallery" target="_blank">OFBiz Logo Gallery</a>
The logos are sorted by date with the newest first.

<p></p>

Also remember that some stickers with the new OFBiz logo have been printed, so if you are going to ApacheCon in Seville then please come along to the ASF booth and pick up some stickers!

## New Notifications Mailing List

OFBiz has had so much going on lately (e.g. re-factoring, Gradle, bug fixes etc.) that all the automatic JIRA notifications were filling up our development mailing list. The large volume of messages was making it difficult to follow general discussion threads. To help solve the problem, a new Notifications mailing list has been created and all the automatic JIRA messages have been re-routed to it. This will leave our development mailing clear so that discussion threads can be followed more easily.

<p></p>

If you want to follow the JIRA notification messages then you will need to subscribe to the new list at notifications@ofbiz.apache.org.

## Service Providers

A review was done this month to tidy up our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">OFBiz Service Providers page</a>. Over the years this page had become out of date and contained information that wasn't necessary. The page has now had a complete cleanup.

<p></p>

If you want to be added as a OFBiz Service Provider then details of how to do this are also included on the Service Providers page.

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Enforce noninstantiability to multiple classes ([OFBIZ-7799](https://issues.apache.org/jira/browse/OFBIZ-7799)) ([OFBIZ-7800](https://issues.apache.org/jira/browse/OFBIZ-7800)) ([OFBIZ-7802](https://issues.apache.org/jira/browse/OFBIZ-7802)) ([OFBIZ-7803](https://issues.apache.org/jira/browse/OFBIZ-7803)) ([OFBIZ-7806](https://issues.apache.org/jira/browse/OFBIZ-7806)) ([OFBIZ-7807](https://issues.apache.org/jira/browse/OFBIZ-7807)) ([OFBIZ-7809](https://issues.apache.org/jira/browse/OFBIZ-7809)) ([OFBIZ-7810](https://issues.apache.org/jira/browse/OFBIZ-7810)) ([OFBIZ-7811](https://issues.apache.org/jira/browse/OFBIZ-7811)) ([OFBIZ-7911](https://issues.apache.org/jira/browse/OFBIZ-7911)) ([OFBIZ-7912](https://issues.apache.org/jira/browse/OFBIZ-7912)) ([OFBIZ-7913](https://issues.apache.org/jira/browse/OFBIZ-7913)) ([OFBIZ-7914](https://issues.apache.org/jira/browse/OFBIZ-7914)) ([OFBIZ-7915](https://issues.apache.org/jira/browse/OFBIZ-7915)) ([OFBIZ-7982](https://issues.apache.org/jira/browse/OFBIZ-7982)) ([OFBIZ-7983](https://issues.apache.org/jira/browse/OFBIZ-7983))
- Move SeoConfig.xml to commonext/config ([OFBIZ-7939](https://issues.apache.org/jira/browse/OFBIZ-7939))
- Remove system generated fields from data files in multiple components ([OFBIZ-7901](https://issues.apache.org/jira/browse/OFBIZ-7901)) ([OFBIZ-7902](https://issues.apache.org/jira/browse/OFBIZ-7902)) ([OFBIZ-7903](https://issues.apache.org/jira/browse/OFBIZ-7903)) ([OFBIZ-7904](https://issues.apache.org/jira/browse/OFBIZ-7904)) ([OFBIZ-7905](https://issues.apache.org/jira/browse/OFBIZ-7905)) ([OFBIZ-7909](https://issues.apache.org/jira/browse/OFBIZ-7909))
- Make displaying logs in webtools better by removing LogView.groovy and optimizing FetchLogs.groovy ([OFBIZ-7944](https://issues.apache.org/jira/browse/OFBIZ-7944))
- Remove warnings regarding missing component lib folders ([OFBIZ-7776](https://issues.apache.org/jira/browse/OFBIZ-7776))
- Rename PasswordSecurityData.xml to PasswordSecurityDemoData.xml
- Update Apache Shiro dependency from 1.2.5 to 1.3.0
- Remove ofbizSecure and ofbizBackgroundSecure from gradle and make all OFBiz server tasks secure by default, also update trunk scripts ([OFBIZ-7951](https://issues.apache.org/jira/browse/OFBIZ-7951))
- Unify all occurences of operating system checks in one variable in build.gradle ([OFBIZ-7534](https://issues.apache.org/jira/browse/OFBIZ-7534))
- Update the Ubuntu script with respect to Gradle changes ([OFBIZ-7677](https://issues.apache.org/jira/browse/OFBIZ-7677))
- Improve component templates to work with the Gradle solution ([OFBIZ-7910](https://issues.apache.org/jira/browse/OFBIZ-7910))
- Update various labels in CommonUiLabels.xml ([OFBIZ-7953](https://issues.apache.org/jira/browse/OFBIZ-7953))
- Use Pandoc to integrate our README.MD from the repo to confluence ([OFBIZ-7723](https://issues.apache.org/jira/browse/OFBIZ-7723))
- Remove 42 unneeded libraries from the master script ([OFBIZ-7534](https://issues.apache.org/jira/browse/OFBIZ-7534))
- Remove build dependency of Order on Marketing ([OFBIZ-7966](https://issues.apache.org/jira/browse/OFBIZ-7966))
- Remove the view-entity "AgreementAndRole" ([OFBIZ-5994](https://issues.apache.org/jira/browse/OFBIZ-5994))
- Remove EventReminders.properties as it has been declared deprecated ([OFBIZ-6303](https://issues.apache.org/jira/browse/OFBIZ-6303))
- Upgrade Tomcat to 8.5.3 (actually to 8.0.36 for now) - First step ([OFBIZ-7348](https://issues.apache.org/jira/browse/OFBIZ-7348))
- Simplify and shorten Gradle tasks ([OFBIZ-7968](https://issues.apache.org/jira/browse/OFBIZ-7968))
- Remove quotes to evaluate tenantId instead of treating it as a string (in build.gradle) ([OFBIZ-7968](https://issues.apache.org/jira/browse/OFBIZ-7968))
- Add translations to AccountingUILabels.xml ([OFBIZ-7918](https://issues.apache.org/jira/browse/OFBIZ-7918))
- Add WorkEffortAttribute CRUD services and simplify submit button definition ([OFBIZ-7973](https://issues.apache.org/jira/browse/OFBIZ-7973))
- Add field "changeByUserLoginId" for multiple entities ([OFBIZ-7624](https://issues.apache.org/jira/browse/OFBIZ-7624)) ([OFBIZ-7625](https://issues.apache.org/jira/browse/OFBIZ-7625)) ([OFBIZ-7620](https://issues.apache.org/jira/browse/OFBIZ-7620)) ([OFBIZ-7621](https://issues.apache.org/jira/browse/OFBIZ-7621))
- Purchase requirements are set to "ordered" once a purchase order is approved and not as soon as it is created ([OFBIZ-7478](https://issues.apache.org/jira/browse/OFBIZ-7478))
- Improve Dutch labels for the multiple components ([OFBIZ-8010](https://issues.apache.org/jira/browse/OFBIZ-8010)) ([OFBIZ-8021](https://issues.apache.org/jira/browse/OFBIZ-8021))
- Add CRUD services to multiple entities ([OFBIZ-8012](https://issues.apache.org/jira/browse/OFBIZ-8012)) ([OFBIZ-7831](https://issues.apache.org/jira/browse/OFBIZ-7831)) ([OFBIZ-7837](https://issues.apache.org/jira/browse/OFBIZ-7837)) ([OFBIZ-7839](https://issues.apache.org/jira/browse/OFBIZ-7839)) ([OFBIZ-7845](https://issues.apache.org/jira/browse/OFBIZ-7845)) ([OFBIZ-7846](https://issues.apache.org/jira/browse/OFBIZ-7846))
- Clean up commented out code in Java source for the multiple components ([OFBIZ-7848](https://issues.apache.org/jira/browse/OFBIZ-7848)) ([OFBIZ-7894](https://issues.apache.org/jira/browse/OFBIZ-7894)) ([OFBIZ-7854](https://issues.apache.org/jira/browse/OFBIZ-7854)) ([OFBIZ-7855](https://issues.apache.org/jira/browse/OFBIZ-7855)) ([OFBIZ-7857](https://issues.apache.org/jira/browse/OFBIZ-7857))
- Clean up commented out code in the Freemarker template for multiple components ([OFBIZ-7894](https://issues.apache.org/jira/browse/OFBIZ-7894)) ([OFBIZ-8023](https://issues.apache.org/jira/browse/OFBIZ-8023)) ([OFBIZ-8035](https://issues.apache.org/jira/browse/OFBIZ-8035)) ([OFBIZ-7872](https://issues.apache.org/jira/browse/OFBIZ-7872))
- Modify data retrieval and storage logic ([OFBIZ-5024](https://issues.apache.org/jira/browse/OFBIZ-5024))
- Have TransactionTotalsPdf.pdf show the internal company it has been generated for ([OFBIZ-7920](https://issues.apache.org/jira/browse/OFBIZ-7920))
- Allow Gantt function to compute tasks with non-numerical IDs ([OFBIZ-7971](https://issues.apache.org/jira/browse/OFBIZ-7971))
- Add themes as gradle sub-products like in all other components ([OFBIZ-7534](https://issues.apache.org/jira/browse/OFBIZ-7534))
- Incorporate the readme for the product component ([OFBIZ-7507](https://issues.apache.org/jira/browse/OFBIZ-7507))

## Bugfixes

Functional and technical bugfixes:

- Error in the gradle task 'loadTenant' ([OFBIZ-7534](https://issues.apache.org/jira/browse/OFBIZ-7534))
- Data load error in the webpos component caused by the removal of the POS component ([OFBIZ-7946](https://issues.apache.org/jira/browse/OFBIZ-7946))
- External library files are not in the OFBiz folder structure ([OFBIZ-7783](https://issues.apache.org/jira/browse/OFBIZ-7783))
- "GitInfo.ftl" cannot be created when using svn ([OFBIZ-7942](https://issues.apache.org/jira/browse/OFBIZ-7942))
- The jar "jpim.jar" is not presented since it can't be downloaded from jcenter ([OFBIZ-7961](https://issues.apache.org/jira/browse/OFBIZ-7961))
- The "PrepareFind" service ignore the "timeZone" parameter when performing Date/Time calculations ([OFBIZ-3739](https://issues.apache.org/jira/browse/OFBIZ-3739))
- Some unit tests in the start component cause a regression ([OFBIZ-7897](https://issues.apache.org/jira/browse/OFBIZ-7897))
- Remove a useless IE7 hack ([OFBIZ-7960](https://issues.apache.org/jira/browse/OFBIZ-7960))
- Any update made for 'Quantity to produce' in a newly created production run is not saved ([OFBIZ-7558](https://issues.apache.org/jira/browse/OFBIZ-7558))
- The performance test screen is broken ([OFBIZ-7989](https://issues.apache.org/jira/browse/OFBIZ-7989))
- Index.jsp is missing for the BI component ([OFBIZ-7981](https://issues.apache.org/jira/browse/OFBIZ-7981))
- OrderId and PartId are shown multiple times in the ReceiveInventoryAgainstPurchaseOrder screen ([OFBIZ-7427](https://issues.apache.org/jira/browse/OFBIZ-7427))
- Starting the server shows a warning regarding "InventoryItemAndLocation" ([OFBIZ-7986](https://issues.apache.org/jira/browse/OFBIZ-7986))
- Empty link icon in search results of find screens ([OFBIZ-7819](https://issues.apache.org/jira/browse/OFBIZ-7819))
- Client side required field validation is not working for password type field ([OFBIZ-7978](https://issues.apache.org/jira/browse/OFBIZ-7978))
- Empty scroll bar in the party component ([OFBIZ-7820](https://issues.apache.org/jira/browse/OFBIZ-7820))
- Upload communication content functionality is not working from the InternalNoteCreation screen ([OFBIZ-7830](https://issues.apache.org/jira/browse/OFBIZ-7830))
- Unable to perform search in the eBayOrdersImport screen of the eBay component ([OFBIZ-7674](https://issues.apache.org/jira/browse/OFBIZ-7674))
- Adding communication event roles does not work ([OFBIZ-7628](https://issues.apache.org/jira/browse/OFBIZ-7628))
- Request not redirecting when creating party classification ([OFBIZ-8007](https://issues.apache.org/jira/browse/OFBIZ-8007))
- Redundant options at select filter on find screens ([OFBIZ-7833](https://issues.apache.org/jira/browse/OFBIZ-7833))
- View Entities are not shown as being wiew entities in the new entity listing UI in webtools ([OFBIZ-7977](https://issues.apache.org/jira/browse/OFBIZ-7977))
- Cancelling shipment receipt doubles the inventory ([OFBIZ-7943](https://issues.apache.org/jira/browse/OFBIZ-7943))
- Missing CommonCode label in CommonUiLabels.xml ([OFBIZ-8055](https://issues.apache.org/jira/browse/OFBIZ-8055))
- Unused import in TestSuiteInfo.groovy ([OFBIZ-7975](https://issues.apache.org/jira/browse/OFBIZ-7975))
- "Create Customer" fails because password is missing ([OFBIZ-7947](https://issues.apache.org/jira/browse/OFBIZ-7947))
- Unused references of maincss.css from source code ([OFBIZ-7311](https://issues.apache.org/jira/browse/OFBIZ-7311))

## Documentation

- Update the documentation with respect to Gradle changes ([OFBIZ-7677](https://issues.apache.org/jira/browse/OFBIZ-7677))
