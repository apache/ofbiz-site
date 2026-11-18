---
layout: post
title: Apache OFBiz News - October 2015
date: '2015-11-08T15:15:21+00:00'
permalink: apache_ofbiz_news_october_2015
---
## Apache OFBiz News October 2015

We had a full track and some interesting meetings at ApacheCon Core 2015 in Budapest, there's an active discussion and conceptual work on a framework rewrite and there were several bugfixes and improvements implemented during the last month.

<!--more-->

## ApacheCon Core 2015 in Budapest

The Apache OFBiz community had a full track at <a href="http://events.linuxfoundation.org/events/apachecon-core-europe">ApacheCon Core EU 2015</a> in Budapest. The track included six interesting <a href="http://apacheconcore2015.sched.org/overview/type/ofbiz?iframe=no&amp;w=i:100;&amp;sidebar=yes&amp;bg=no">presentations</a> by OFBiz PMC members, Committers and Contributors. In addition to our track an extra presentation was accepted into the Community Track. It was extremely good to see that our community was represented internationally with members coming not only from Europe but also Africa and the US.<p></p>

<p></p>

Presentation attendance numbers were good and we have setup an <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Track+@+Apachecon+Core+EU+2015+Budapest">ApacheCon Core wiki page</a> where you can find the presentation summaries and the slides for download.

<p></p>

On the 2nd October our Apachecon attendees held an informal workshop session to talk about any points that people wanted to raise. Several topics were discussed and details have been documented on the wiki in a <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Workshop+%3A+2nd+October+2015">workshop session overview</a>.

<p></p>

Many of us met each other for the first time. Everyone had a lot of fun and it was a very good experience for team building as well as networking with other Apache projects. A lot of photos were taken and some have been posted <a href="https://www.flickr.com/photos/77101947@N00/albums/72157659439983942">here</a>.

<p></p>

We are looking forward to the next event and hope to see each other again soon.

## Possible Framework Re-Write

One of the main topics raised in the informal workshop at Apachecon was about doing some work to improve the current OFBiz framework. An active discussion was started to consider a possible rewrite of the framework (see <a href="http://markmail.org/message/iycu3uuggx6uabzl">mailing list thread</a>).

<p></p>

Some conceptual work has been done on an initial central part of the framework and documented in the wiki. If the work gains momentum and support then we will continue and expand to look at other framework areas.

<p></p>

If you are interested in joining or contributing to this work effort then please take a look at the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Potential+Framework+Project+for+the+Foundation+Sub+Component">Framework Project Wiki page</a>.

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Replaced 'Open for Business' references with 'Apache OFBiz' ([OFBIZ-6171](https://issues.apache.org/jira/browse/OFBIZ-6171)).
- Upgrade OFBiz to JDK 8 ([OFBIZ-6458](https://issues.apache.org/jira/browse/OFBIZ-6458)). Upgrades the framework to Java JDK 8 and prevents compiling on earlier versions.
- Removing Javolution from framework components ([OFBIZ-5169](https://issues.apache.org/jira/browse/OFBIZ-5169)).
- Upgrade Solr and Lucene librairies to version 5 ([OFBIZ-6610](https://issues.apache.org/jira/browse/OFBIZ-6610)).
  - Upgrade the solr/lucene component to the latest 5.3.1.
  - Angular related js and html files are removed.
  - The jquery-1.7.2.min.js is removed as it's not used in solr.
  - Change specialpurpose/solr/conf to specialpurpose/solr/home.
  - Move specialpurpose/solr/solrdefault to specialpurpose/solr/home/solrdefault.
  - The files under specialpurpose/solr/home/solrdefault are all from solr-5.3.1 package/server/solr/configsets/sample\_techproducts\_configs/, the solrconfig.xml is configured: &lt;dataDir&gt;${solr.data.dir:runtime/indexes}&lt;/dataDir&gt;
- Moved guava lib from solr/lib/runtime to base/lib to avoid dependency on the solr component.
- Make layered-window available in forms ([OFBIZ-6327](https://issues.apache.org/jira/browse/OFBIZ-6327)). Added an example to use on example form and widget example and set new properties to define defaut layered windows size.
- Selenium web driver integration using XML files ([OFBIZ-6618](https://issues.apache.org/jira/browse/OFBIZ-6618)).
- Use JGrowl to display alerts ([OFBIZ-6023](https://issues.apache.org/jira/browse/OFBIZ-6023)). This allows to display system messages in a popup at the top of the windows even if you scroll. This is also useful for ajax calls because there is no need to scroll to the top of the screen to view a message. The message can stick to the screen until it is intentionally closed by the user or not.
- Removed tooltip="${uiLabelMap.CommonRequired}" from fields ([OFBIZ-6691](https://issues.apache.org/jira/browse/OFBIZ-6691)).
- PartyRole Lifespan fields - Have QuoteRole entity work with the change ([OFBIZ-6679](https://issues.apache.org/jira/browse/OFBIZ-6679)).
- SalaryStep entity missing From and Thru dates ([OFBIZ-5758](https://issues.apache.org/jira/browse/OFBIZ-5758)).
- Have parentCustRequest in edit screens for Request in order manager be a lookup function ([OFBIZ-6177](https://issues.apache.org/jira/browse/OFBIZ-6177)).
- Added french labels in ProductEntityLabels.xml ([OFBIZ-6700](https://issues.apache.org/jira/browse/OFBIZ-6700)).
- Paginator.getListLimits listSize gets set to viewSize for FindServices.performFindList ([OFBIZ-6422](https://issues.apache.org/jira/browse/OFBIZ-6422)). This patch adds code to the paginator to account for the entryList being instanceOf List and extracts the original listSize from the context.results object.
- Enhancement in the content wrappers to gain better performance ([OFBIZ-6701](https://issues.apache.org/jira/browse/OFBIZ-6701)).

## Bugfixes

Functional and technical bugfixes:

- Data import: nulling fields impossible ([OFBIZ-293](https://issues.apache.org/jira/browse/OFBIZ-293)). Empty string values in a data file are not longer ignored but set as NULL values in the database.
- Blank page when ordering an open-gismo-GZ-1006-p ([OFBIZ-6650](https://issues.apache.org/jira/browse/OFBIZ-6650)). Fixed a typo in product.groovy which causing error on redering product page. Removed additional ')' from the statement.
- Survey shows wrong submitter details ([OFBIZ-6584](https://issues.apache.org/jira/browse/OFBIZ-6584)). When a questionnaire is submitted through the e-commerce component, the results can be found via the FindSurveyResponse in the content application. The overview shows the correct partyId. But when the submission is opened via EditSurveyResponse, the page showed the details of the user that is logged in, instead of the submitter.
- Uploading a file after a session timeout ([OFBIZ-4651](https://issues.apache.org/jira/browse/OFBIZ-4651)). Handled error in js code to fix timeout issue.
- Domain name should not be created for tenant if is left empty during tenant creation ([OFBIZ-6092](https://issues.apache.org/jira/browse/OFBIZ-6092)).
- Error occurred while printing Deposit Slip ([OFBIZ-6663](https://issues.apache.org/jira/browse/OFBIZ-6663)).
- Accounting reports fail ([OFBIZ-6212](https://issues.apache.org/jira/browse/OFBIZ-6212)). Fixed accounting report PDF export issue, it was throwing a FOP exception. This was due to an empty description string. If the description is empty then makeHyperlinkString does not call the makeHyperlinkString macro to render the hyper link and due to this fo:table-cell is rendered without fo:block and its not a valid syntax of fo:table-cell.
- Error adding a product to an order ([OFBIZ-5579](https://issues.apache.org/jira/browse/OFBIZ-5579)).
- PartyRelationship.securityGroupId not added when adding a PartyRelationship ([OFBIZ-6662](https://issues.apache.org/jira/browse/OFBIZ-6662)). When adding a PartyRelationship the value selected for SecurityGroupId is ignored as createPartyRelationship service expects the parameter to be named securityGroupId. The AddOtherPartyRelationship form incorrectly names the field groupId causing the value to be missed in the set-nonpk-fields call in applications/party/script/org/ofbiz/party/party/PartyServices.xml.
- Work Effort Month Calendar View Is Broken ([OFBIZ-6637](https://issues.apache.org/jira/browse/OFBIZ-6637)). Fixed a possible endless loop in TemporalExpression Evaluation. The daybump flag must be turned off when used.
- Display of a recurrent workeffort in workeffort calendar do not respect estimatedStart/CompletionDate ([OFBIZ-6654](https://issues.apache.org/jira/browse/OFBIZ-6654)). Fixed getWorkEffortEventsByPeriod service by
  - ignoring actual date timed workeffort in temporal expression process
  - excluding workeffort occurence that are out of estimated date range
- ModelService constructor does not copy all attribute of service model ([OFBIZ-6666](https://issues.apache.org/jira/browse/OFBIZ-6666)). Added missing service model attributes while cloning it.
- Possible static XSS issue with Content ([OFBIZ-6669](https://issues.apache.org/jira/browse/OFBIZ-6669)). Added owasp-java-html-sanitizer-r239.jar and set a "content.sanitize=true" property in content.properties with some explanations. The reason to set this property is because the sanitizer does some (safe) changes which might be unwanted in a context where you are "sure" no one can inject/exploit your DB, see the JIra issue for details. Note that this does not affect the \*ContentWrapper.java classes where we use OWASP encoding and not the sanitizer. The reason we need the sanitizer here is because we are no only handling content but also HTML code.
- The filter-by-date="true" of &lt;entity-condition&gt;&lt;/entity&gt; in view entity PartyExport does not work ([OFBIZ-6495](https://issues.apache.org/jira/browse/OFBIZ-6495)).
- In the addToCart() method, reset shipment method information in cart only if shipping applies on product ([OFBIZ-6674](https://issues.apache.org/jira/browse/OFBIZ-6674)).
- viewimage in order generates an error ([OFBIZ-6678](https://issues.apache.org/jira/browse/OFBIZ-6678)).
- Grid widget requires cache clear before modifications are rendered ([OFBIZ-6405](https://issues.apache.org/jira/browse/OFBIZ-6405)).
- Find Screen Layout: the main title is missing in Tomahawk ([OFBIZ-6153](https://issues.apache.org/jira/browse/OFBIZ-6153)).
- Form widget &lt;auto-fields-entity default-field-type="find"/&gt; does not render range find fields for fixed-point ([OFBIZ-6443](https://issues.apache.org/jira/browse/OFBIZ-6443)).
- org.ofbiz.entity.GenericModelException: Could not find definition for entity name FixedAssetMaintWorkEffort ([OFBIZ-6687](https://issues.apache.org/jira/browse/OFBIZ-6687)). Moved FixedAssetMaintWorkEffort view entity from specialpurpose/assetmaint to accounting.
- FindService.performFindList listSize = null causes errors when list is empty because the rendering system expects 0 ([OFBIZ-6425](https://issues.apache.org/jira/browse/OFBIZ-6425)).
- FOP rendered list form widgets do not work for fields with postition &gt; 0 ([OFBIZ-6354](https://issues.apache.org/jira/browse/OFBIZ-6354)).
- Removed invalid field condition from StatusValidChange data ([OFBIZ-6699](https://issues.apache.org/jira/browse/OFBIZ-6699)).
- Cannot create more than one lead in the SFA component by same user ([OFBIZ-6703](https://issues.apache.org/jira/browse/OFBIZ-6703)). The reason was that the createLead tried to create a PartyRole of type OWNER everytime even if it already exists which leads to a failure and transaction rollback for the entire call.

## Documentation

- CcTypes.groovy misses licence ([OFBIZ-6679](https://issues.apache.org/jira/browse/OFBIZ-6679)).
- Completed schema documentation for override-list-size in case of performFindList use ([OFBIZ-6422](https://issues.apache.org/jira/browse/OFBIZ-6422)).
