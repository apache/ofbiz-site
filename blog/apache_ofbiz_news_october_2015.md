---
layout: post
title: Apache OFBiz News - October 2015
date: '2015-11-08T15:15:21+00:00'
permalink: apache_ofbiz_news_october_2015
---
<h2>Apache OFBiz News October 2015</h2>
We had a full track and some interesting meetings at ApacheCon Core 2015 in Budapest, there's an active discussion and conceptual work on a framework rewrite and there were several bugfixes and improvements implemented during the last month.

<!--more-->
<h2>ApacheCon Core 2015 in Budapest</h2>
The Apache OFBiz community had a full track at <a href="http://events.linuxfoundation.org/events/apachecon-core-europe">ApacheCon Core EU 2015</a> in Budapest. The track included six interesting <a href="http://apacheconcore2015.sched.org/overview/type/ofbiz?iframe=no&amp;w=i:100;&amp;sidebar=yes&amp;bg=no">presentations</a> by OFBiz PMC members, Committers and Contributors. In addition to our track an extra presentation was accepted into the Community Track. It was extremely good to see that our community was represented internationally with members coming not only from Europe but also Africa and the US.<p></p>
<p></p>
Presentation attendance numbers were good and we have setup an <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Track+@+Apachecon+Core+EU+2015+Budapest">ApacheCon Core wiki page</a> where you can find the presentation summaries and the slides for download.
<p></p>
On the 2nd October our Apachecon attendees held an informal workshop session to talk about any points that people wanted to raise. Several topics were discussed and details have been documented on the wiki in a <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Workshop+%3A+2nd+October+2015">workshop session overview</a>. 
<p></p>
Many of us met each other for the first time. Everyone had a lot of fun and it was a very good experience for team building as well as networking with other Apache projects. A lot of photos were taken and some have been posted <a href="https://www.flickr.com/photos/77101947@N00/albums/72157659439983942">here</a>.
<p></p>
We are looking forward to the next event and hope to see each other again soon.
<h2>Possible Framework Re-Write</h2>
One of the main topics raised in the informal workshop at Apachecon was about doing some work to improve the current OFBiz framework. An active discussion was started to consider a possible rewrite of the framework (see <a href="http://markmail.org/message/iycu3uuggx6uabzl">mailing list thread</a>).
<p></p> 

Some conceptual work has been done on an initial central part of the framework and documented in the wiki. If the work gains momentum and support then we will continue and expand to look at other framework areas.
<p></p>
If you are interested in joining or contributing to this work effort then please take a look at the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Potential+Framework+Project+for+the+Foundation+Sub+Component">Framework Project Wiki page</a>.

<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
	<li>Replaced 'Open for Business' references with 'Apache OFBiz' (<a href="https://issues.apache.org/jira/browse/OFBIZ-6171">OFBIZ-6171</a>).</li>
	<li>Upgrade OFBiz to JDK 8 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6458">OFBIZ-6458</a>). Upgrades the framework to Java JDK 8 and prevents compiling on earlier versions.</li>
	<li>Removing Javolution from framework components (<a href="https://issues.apache.org/jira/browse/OFBIZ-5169">OFBIZ-5169</a>).</li>
	<li>Upgrade Solr and Lucene librairies to version 5 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6610">OFBIZ-6610</a>).
<ul>
	<li>Upgrade the solr/lucene component to the latest 5.3.1.</li>
	<li>Angular related js and html files are removed.</li>
	<li>The jquery-1.7.2.min.js is removed as it's not used in solr.</li>
	<li>Change specialpurpose/solr/conf to specialpurpose/solr/home.</li>
	<li>Move specialpurpose/solr/solrdefault to specialpurpose/solr/home/solrdefault.</li>
	<li>The files under specialpurpose/solr/home/solrdefault are all from solr-5.3.1 package/server/solr/configsets/sample_techproducts_configs/, the solrconfig.xml is configured: &lt;dataDir&gt;${solr.data.dir:runtime/indexes}&lt;/dataDir&gt;</li>
</ul>
</li>
	<li>Moved guava lib from solr/lib/runtime to base/lib to avoid dependency on the solr component.</li>
	<li>Make layered-window available in forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-6327">OFBIZ-6327</a>). Added an example to use on example form and widget example and set new properties to define defaut layered windows size.</li>
	<li>Selenium web driver integration using XML files (<a href="https://issues.apache.org/jira/browse/OFBIZ-6618">OFBIZ-6618</a>).</li>
	<li>Use JGrowl to display alerts (<a href="https://issues.apache.org/jira/browse/OFBIZ-6023">OFBIZ-6023</a>). This allows to display system messages in a popup at the top of the windows even if you scroll. This is also useful for ajax calls because there is no need to scroll to the top of the screen to view a message. The message can stick to the screen until it is intentionally closed by the user or not.</li>
	<li>Removed tooltip="${uiLabelMap.CommonRequired}" from fields (<a href="https://issues.apache.org/jira/browse/OFBIZ-6691">OFBIZ-6691</a>).</li>
	<li>PartyRole Lifespan fields - Have QuoteRole entity work with the change (<a href="https://issues.apache.org/jira/browse/OFBIZ-6679">OFBIZ-6679</a>).</li>
	<li>SalaryStep entity missing From and Thru dates (<a href="https://issues.apache.org/jira/browse/OFBIZ-5758">OFBIZ-5758</a>).</li>
	<li>Have parentCustRequest in edit screens for Request in order manager be a lookup function (<a href="https://issues.apache.org/jira/browse/OFBIZ-6177">OFBIZ-6177</a>).</li>
	<li>Added french labels in ProductEntityLabels.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-6700">OFBIZ-6700</a>).</li>
	<li>Paginator.getListLimits listSize gets set to viewSize for FindServices.performFindList (<a href="https://issues.apache.org/jira/browse/OFBIZ-6422">OFBIZ-6422</a>). This patch adds code to the paginator to account for the entryList being instanceOf List and extracts the original listSize from the context.results object.</li>
	<li>Enhancement in the content wrappers to gain better performance (<a href="https://issues.apache.org/jira/browse/OFBIZ-6701">OFBIZ-6701</a>).</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
	<li>Data import: nulling fields impossible (<a href="https://issues.apache.org/jira/browse/OFBIZ-293">OFBIZ-293</a>). Empty string values in a data file are not longer ignored but set as NULL values in the database.</li>
	<li>Blank page when ordering an open-gismo-GZ-1006-p (<a href="https://issues.apache.org/jira/browse/OFBIZ-6650">OFBIZ-6650</a>). Fixed a typo in product.groovy which causing error on redering product page. Removed additional ')' from the statement.</li>
	<li>Survey shows wrong submitter details (<a href="https://issues.apache.org/jira/browse/OFBIZ-6584">OFBIZ-6584</a>). When a questionnaire is submitted through the e-commerce component, the results can be found via the FindSurveyResponse in the content application. The overview shows the correct partyId. But when the submission is opened via EditSurveyResponse, the page showed the details of the user that is logged in, instead of the submitter.</li>
	<li>Uploading a file after a session timeout (<a href="https://issues.apache.org/jira/browse/OFBIZ-4651">OFBIZ-4651</a>). Handled error in js code to fix timeout issue.</li>
	<li>Domain name should not be created for tenant if is left empty during tenant creation (<a href="https://issues.apache.org/jira/browse/OFBIZ-6092">OFBIZ-6092</a>).</li>
	<li>Error occurred while printing Deposit Slip (<a href="https://issues.apache.org/jira/browse/OFBIZ-6663">OFBIZ-6663</a>).</li>
	<li>Accounting reports fail (<a href="https://issues.apache.org/jira/browse/OFBIZ-6212">OFBIZ-6212</a>). Fixed accounting report PDF export issue, it was throwing a FOP exception. This was due to an empty description string. If the description is empty then makeHyperlinkString does not call the makeHyperlinkString macro to render the hyper link and due to this fo:table-cell is rendered without fo:block and its not a valid syntax of fo:table-cell.</li>
	<li>Error adding a product to an order (<a href="https://issues.apache.org/jira/browse/OFBIZ-5579">OFBIZ-5579</a>).</li>
	<li>PartyRelationship.securityGroupId not added when adding a PartyRelationship (<a href="https://issues.apache.org/jira/browse/OFBIZ-6662">OFBIZ-6662</a>). When adding a PartyRelationship the value selected for SecurityGroupId is ignored as createPartyRelationship service expects the parameter to be named securityGroupId. The AddOtherPartyRelationship form incorrectly names the field groupId causing the value to be missed in the set-nonpk-fields call in applications/party/script/org/ofbiz/party/party/PartyServices.xml.</li>
	<li>Work Effort Month Calendar View Is Broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-6637">OFBIZ-6637</a>). Fixed a possible endless loop in TemporalExpression Evaluation. The daybump flag must be turned off when used.</li>
	<li>Display of a recurrent workeffort in workeffort calendar do not respect estimatedStart/CompletionDate (<a href="https://issues.apache.org/jira/browse/OFBIZ-6654">OFBIZ-6654</a>). Fixed getWorkEffortEventsByPeriod service by
<ul>
	<li>ignoring actual date timed workeffort in temporal expression process</li>
	<li>excluding workeffort occurence that are out of estimated date range</li>
</ul>
</li>
	<li>ModelService constructor does not copy all attribute of service model (<a href="https://issues.apache.org/jira/browse/OFBIZ-6666">OFBIZ-6666</a>). Added missing service model attributes while cloning it.</li>
	<li>Possible static XSS issue with Content (<a href="https://issues.apache.org/jira/browse/OFBIZ-6669">OFBIZ-6669</a>). Added owasp-java-html-sanitizer-r239.jar and set a "content.sanitize=true" property in content.properties with some explanations. The reason to set this property is because the sanitizer does some (safe) changes which might be unwanted in a context where you are "sure" no one can inject/exploit your DB, see the JIra issue for details. Note that this does not affect the *ContentWrapper.java classes where we use OWASP encoding and not the sanitizer. The reason we need the sanitizer here is because we are no only handling content but also HTML code.</li>
	<li>The filter-by-date="true" of &lt;entity-condition&gt;&lt;/entity&gt; in view entity PartyExport does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-6495">OFBIZ-6495</a>).</li>
	<li>In the addToCart() method, reset shipment method information in cart only if shipping applies on product (<a href="https://issues.apache.org/jira/browse/OFBIZ-6674">OFBIZ-6674</a>).</li>
	<li>viewimage in order generates an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6678">OFBIZ-6678</a>).</li>
	<li>Grid widget requires cache clear before modifications are rendered (<a href="https://issues.apache.org/jira/browse/OFBIZ-6405">OFBIZ-6405</a>).</li>
	<li>Find Screen Layout: the main title is missing in Tomahawk (<a href="https://issues.apache.org/jira/browse/OFBIZ-6153">OFBIZ-6153</a>).</li>
	<li>Form widget &lt;auto-fields-entity default-field-type="find"/&gt; does not render range find fields for fixed-point (<a href="https://issues.apache.org/jira/browse/OFBIZ-6443">OFBIZ-6443</a>).</li>
	<li>org.ofbiz.entity.GenericModelException: Could not find definition for entity name FixedAssetMaintWorkEffort (<a href="https://issues.apache.org/jira/browse/OFBIZ-6687">OFBIZ-6687</a>). Moved FixedAssetMaintWorkEffort view entity from specialpurpose/assetmaint to accounting.</li>
	<li>FindService.performFindList listSize = null causes errors when list is empty because the rendering system expects 0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6425">OFBIZ-6425</a>).</li>
	<li>FOP rendered list form widgets do not work for fields with postition &gt; 0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6354">OFBIZ-6354</a>).</li>
	<li>Removed invalid field condition from StatusValidChange data (<a href="https://issues.apache.org/jira/browse/OFBIZ-6699">OFBIZ-6699</a>).</li>
	<li>Cannot create more than one lead in the SFA component by same user (<a href="https://issues.apache.org/jira/browse/OFBIZ-6703">OFBIZ-6703</a>). The reason was that the createLead tried to create a PartyRole of type OWNER everytime even if it already exists which leads to a failure and transaction rollback for the entire call.</li>
</ul>
<h2>Documentation</h2>
<ul>
	<li>CcTypes.groovy misses licence (<a href="https://issues.apache.org/jira/browse/OFBIZ-6679">OFBIZ-6679</a>).</li>
	<li>Completed schema documentation for override-list-size in case of performFindList use (<a href="https://issues.apache.org/jira/browse/OFBIZ-6422">OFBIZ-6422</a>).</li>
</ul>
