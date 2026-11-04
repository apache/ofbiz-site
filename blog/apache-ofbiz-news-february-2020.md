---
layout: post
title: Apache OFBiz News - February 2020
date: '2020-08-19T14:45:33+00:00'
permalink: apache-ofbiz-news-february-2020
---
<h2>Apache OFBiz News&nbsp;February&nbsp;2020</h2><p>Welcome to our regular monthly round-up of OFBiz news. This month we 
share with you details of our usual list of features, improvements and 
statistics.</p><h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p> 
  <ul><li><strong>JIRA Issue Tracker:</strong> 94 issues were opened and 92 issues were closed ( 11 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong> 
      <ul><li><strong>Framework: </strong>177 commits to the code base that changed 41,600 lines of code ( 14 committers were active)</li><li><strong>Plugins: </strong>36 commits to the code base that changed 2,430 lines of code ( 7 committers were active)</li></ul> 
    </li><li><strong>Mailing Lists:</strong> 
      <ul><li><strong>Dev: </strong>186 emails sent and 39 topics discussed (31 different people)</li><li><strong>User: </strong>35 emails sent and 9 topics discussed (17 different people) <br></li></ul></li></ul><h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Provides German translation improvements in HumanResUiLabels (<a href="https://issues.apache.org/jira/browse/OFBIZ-11134" target="_blank">OFBIZ-11134</a>) </li>

    <li>Translates invoice type dropdown (<a href="https://issues.apache.org/jira/browse/OFBIZ-10191" target="_blank">OFBIZ-10191</a>) </li>

    <li>Adds 'controlPath' attribute (<a href="https://github.com/apache/ofbiz-framework/commit/e1e1a4813d05f236ea851c729d3b01f5c2ff44a4" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused labels from ProductUiLabels (<a href="https://github.com/apache/ofbiz-framework/commit/58b0da26f540924d06b2c572b51ee604536a0198" target="_blank">GitHub Link</a>) </li>

    <li>Manages VisualTheme in ModelForm (<a href="https://issues.apache.org/jira/browse/OFBIZ-11335" target="_blank">OFBIZ-11335</a>) </li>

    <li>Adds CommonForms as template pattern configured by theme (<a href="https://issues.apache.org/jira/browse/OFBIZ-11335" target="_blank">OFBIZ-11335</a>) </li>

    <li>Removes unused AccountingUiLabels (<a href="https://github.com/apache/ofbiz-framework/commit/c71a7ae06d3deedfebfbda52450b49c438e16b0c" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused HumanResUiLabels (<a href="https://github.com/apache/ofbiz-framework/commit/974b85f4ec1d4f49c0238ad2d744e507e8d6c852" target="_blank">GitHub Link</a>) </li>

    <li>Converts ProductServices from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-10231" target="_blank">OFBIZ-10231</a>) </li>

    <li>Enhances the programmable export feature for EntityQuery support (<a href="https://issues.apache.org/jira/browse/OFBIZ-11158" target="_blank">OFBIZ-11158</a>) </li>

    <li>Removes duplicated quantity and 'Add to Cart' button while comparing products (<a href="https://issues.apache.org/jira/browse/OFBIZ-10665" target="_blank">OFBIZ-10665</a>) </li>

    <li>Removes view request button on quote itmes screen, when there is no customer request data (<a href="https://issues.apache.org/jira/browse/OFBIZ-10629" target="_blank">OFBIZ-10629</a>) </li>

    <li>Converts ContactMechServices from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11358" target="_blank">OFBIZ-11358</a>) </li>

    <li>Opens print and export of ViewFacilityInventoryByProduct report in a new window (<a href="https://issues.apache.org/jira/browse/OFBIZ-10526" target="_blank">OFBIZ-10526</a>) </li>

    <li>Refactors old job process (<a href="https://issues.apache.org/jira/browse/OFBIZ-11200" target="_blank">OFBIZ-11200</a>) </li>

    <li>Adds testing method ModelFormFieldTest#fieldUsesFlexibleContainerId (<a href="https://github.com/apache/ofbiz-framework/commit/e76cbd1f3499183d7cc9c54da145fbac6b483809" target="_blank">GitHub Link</a>) </li>

    <li>Imporves comments in build.gradle file (<a href="https://github.com/apache/ofbiz-framework/commit/ca9121227a928cda6654f9aecf47f254f0deeb34" target="_blank">GitHub Link</a>) </li>

    <li>Moves permission checks to service definitions via permission service (<a href="https://github.com/apache/ofbiz-framework/commit/59f05e6df119f527aba0d7c1125e86a3c2f3074f" target="_blank">GitHub Link</a>) </li>

    <li>Converts CategoryContentServices from mini lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/f3d3547515aaba8d62f93b364116b8a4d4285034" target="_blank">GitHub Link</a>) </li>

    <li>Provides performance optimization for entities in xml data export (<a href="https://github.com/apache/ofbiz-framework/commit/74db8bde12ef853882b3fb5941d812dfd52f3d9f" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused createTopic service (<a href="https://issues.apache.org/jira/browse/OFBIZ-11376" target="_blank">OFBIZ-11376</a>) </li>

    <li>Refactors classes CallService, EntityCount, Calculate and Log (<a href="https://issues.apache.org/jira/browse/OFBIZ-10571" target="_blank">OFBIZ-10571</a>) </li>

    <li>Puts the TOCs on left in generated AsciiDoc documentation (<a href="https://issues.apache.org/jira/browse/OFBIZ-11423" target="_blank">OFBIZ-11423</a>) </li>

    <li>Uses FlexibleStringExpander in form widget lookup field field target parameters (<a href="https://github.com/apache/ofbiz-framework/commit/08a371d0471a506e663c879f30299f424fc70921" target="_blank">GitHub Link</a>) </li>

    <li>Provides checkstyle to use LF line endings (<a href="https://github.com/apache/ofbiz-framework/commit/e665f9dc68a4cd494c71e61134b3833d27de47ef" target="_blank">GitHub Link</a>) </li>

    <li>Converts PartyInvitationService from minilang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11360" target="_blank">OFBIZ-11360</a>) </li>

    <li>Adds 'controlPath' attribute to 'ofbizUrl' freemarker macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-11317" target="_blank">OFBIZ-11317</a>) </li>

    <li>Improves ObjectInputStream class (<a href="https://issues.apache.org/jira/browse/OFBIZ-10837" target="_blank">OFBIZ-10837</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-11398" target="_blank">OFBIZ-11398</a>) </li>

    <li>Provides code refactoring to support groovy syntax (<a href="https://issues.apache.org/jira/browse/OFBIZ-10231" target="_blank">OFBIZ-10231</a>) </li>

    <li>Updates India Geo information according to ISO notifications from 2019-11-22 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11399" target="_blank">OFBIZ-11399</a>) </li>

    <li>Adds missing GeoAssoc data for Ladakh geo (<a href="https://github.com/apache/ofbiz-framework/commit/0e007d80c2647d0cd22a61be949d887057652855" target="_blank">GitHub Link</a>) </li>

    <li>Converts Thesaurus services in CommonServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11357" target="_blank">OFBIZ-11357</a>) </li>

    <li>Provides a FileItem entry in UtilHttp#getMultiPartParameterMap (<a href="https://issues.apache.org/jira/browse/OFBIZ-11346" target="_blank">OFBIZ-11346</a>) </li>

    <li>Upgrades Tomcat from 9.0.29 to 9.0.31 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11407" target="_blank">OFBIZ-11407</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Adds .gitignore file (<a href="https://github.com/apache/ofbiz-framework/commit/985840046a1273ab35b52766996737b32bee3112" target="_blank">GitHub Link</a>) </li>

    <li>Provides Cookie Consent In E-Commerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-11333" target="_blank">OFBIZ-11333</a>) </li>

    <li>Removes superfluous 'stream' request from ecomseo  (<a href="https://github.com/apache/ofbiz-framework/commit/dbde1204e9f8a1bea4e65b2e9dda7375c62e0f16" target="_blank">GitHub Link</a>) </li>

    <li>Removes svg definition (<a href="https://github.com/apache/ofbiz-framework/commit/75251778005fec43b0d2491756dd603bcc081dcc" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused labels from AssetMaintUiLabels (<a href="https://github.com/apache/ofbiz-framework/commit/8173afed0f6adfef7acd8425a3c6b69780fcd71a" target="_blank">GitHub Link</a>) </li>

    <li>Removes duplicated quantity and 'Add to Cart' button while comparing products (<a href="https://issues.apache.org/jira/browse/OFBIZ-10665" target="_blank">OFBIZ-10665</a>) </li>

    <li>Opens print and export of ViewFacilityInventoryByProduct report in a new window (<a href="https://issues.apache.org/jira/browse/OFBIZ-10526" target="_blank">OFBIZ-10526</a>) </li>

    <li>Improves dropdown behaviour at Reports under 'Sale Orders By Channel' (<a href="https://issues.apache.org/jira/browse/OFBIZ-10624" target="_blank">OFBIZ-10624</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes Javadoc creation issue (<a href="https://github.com/apache/ofbiz-framework/commit/fec0e19de09ac843ea81da014ee87f7bd7a4a493" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: error in user impersonation with sub permission (<a href="https://issues.apache.org/jira/browse/OFBIZ-11342" target="_blank">OFBIZ-11342</a>) </li>

    <li>Removes userLogin and impersonateLogin from jsonResponseFromRequestAttributes (<a href="https://issues.apache.org/jira/browse/OFBIZ-5409" target="_blank">OFBIZ-5409</a>) </li>

    <li>Fixes: setUserTimeZone should ran only once based on error (<a href="https://issues.apache.org/jira/browse/OFBIZ-11329" target="_blank">OFBIZ-11329</a>) </li>

    <li>Fixes: correct check style issue on class ComponentContainerTest (<a href="https://github.com/apache/ofbiz-framework/commit/30a389c8d99319adea182aa518dd2476be5ba75f" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: crashed scheduled jobs are not getting rescheduled with temporal expression (<a href="https://issues.apache.org/jira/browse/OFBIZ-11340" target="_blank">OFBIZ-11340</a>) </li>

    <li>Removes unnecessary ship groups in orders (<a href="https://issues.apache.org/jira/browse/OFBIZ-10489" target="_blank">OFBIZ-10489</a>) </li>

    <li>Fixes: unable to continue to step 3 in One Page Checkout (<a href="https://issues.apache.org/jira/browse/OFBIZ-11318" target="_blank">OFBIZ-11318</a>) </li>

    <li>Fixes: Form widget field with input-method='time-dropdown' is unable to understand the default time (<a href="https://issues.apache.org/jira/browse/OFBIZ-11150" target="_blank">OFBIZ-11150</a>) </li>

    <li>Temporarily comments out the 'stream' request-map in ecommerce controller for security reason (<a href="https://issues.apache.org/jira/browse/OFBIZ-11353" target="_blank">OFBIZ-11353</a>) </li>

    <li>Fixes: Alternate KeyWord Thesaurus functionality does not work properly (<a href="https://issues.apache.org/jira/browse/OFBIZ-11291" target="_blank">OFBIZ-11291</a>) </li>

    <li>Fixes: CMS add content does not work properly (<a href="https://issues.apache.org/jira/browse/OFBIZ-10833" target="_blank">OFBIZ-10833</a>) </li>

    <li>Temporarily comments out the 'stream' request-map in commonext controller for security reason (<a href="https://issues.apache.org/jira/browse/OFBIZ-11353" target="_blank">OFBIZ-11353</a>) </li>

    <li>Fixes: The 'stream' request-map in ecommerce and commonext controllers requires authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-11349" target="_blank">OFBIZ-11349</a>) </li>

    <li>Corrects FoFormMacro to support form list with non separate fields (<a href="https://issues.apache.org/jira/browse/OFBIZ-11335" target="_blank">OFBIZ-11335</a>) </li>

    <li>Corrects check style issue on ModelTheme (<a href="https://github.com/apache/ofbiz-framework/commit/296417a7bd0ca8e5472958631813dfee8c0956e8" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: FindGeneric failed to generate forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-11335" target="_blank">OFBIZ-11335</a>) </li>

    <li>Fixes: replaceFirst is sensible to variable pattern (<a href="https://issues.apache.org/jira/browse/OFBIZ-11396" target="_blank">OFBIZ-11396</a>) </li>

    <li>Fixes: UserLoginPasswordHistory is not maintaining password as present in UserLogin (<a href="https://issues.apache.org/jira/browse/OFBIZ-10802" target="_blank">OFBIZ-10802</a>) </li>

    <li>Fixes: Issue while redirecting to Request Detail Screen from view Communication Event (<a href="https://issues.apache.org/jira/browse/OFBIZ-9658" target="_blank">OFBIZ-9658</a>) </li>

    <li>Fixes: Product Price set based on 'Purchase Price Agreement' isn't honoured while same is used during ordering (<a href="https://issues.apache.org/jira/browse/OFBIZ-7610" target="_blank">OFBIZ-7610</a>) </li>

    <li>Fixes: Error showing on Allocation Plan screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-11338" target="_blank">OFBIZ-11338</a>) </li>

    <li>Fixes: Issue in which Agreement Item can't be removed from Agreement (<a href="https://issues.apache.org/jira/browse/OFBIZ-11410" target="_blank">OFBIZ-11410</a>) </li>

    <li>Adds missing field type definition of type Integer for Apache Derby, MySQL and PostgreSQL (<a href="https://github.com/apache/ofbiz-framework/commit/75ed0c48ee37b642399fbe31eabc6ad8f61fb0f7" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Fluent API Bug in EntityQuery#getFieldList (<a href="https://github.com/apache/ofbiz-framework/commit/8afb711ef31751e36cc6155dd6bbaf21cacb6f3e" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Wrong include file name in accounting.adoc (<a href="https://github.com/apache/ofbiz-framework/commit/ed097f7f835ecd11dff0061e20632d8ee4ea3498" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: DatabaseUtil#getColumnInfo does not retrieve primary keys due to connection-locks (<a href="https://issues.apache.org/jira/browse/OFBIZ-11312" target="_blank">OFBIZ-11312</a>) </li>

    <li>Fixes: Picklist is in Input status even after order is completed (<a href="https://issues.apache.org/jira/browse/OFBIZ-10883" target="_blank">OFBIZ-10883</a>) </li>

    <li>Fixes error in hr-glossary.adoc: line 22: id assigned to block already in use: ANNUAL_REVENUE (<a href="https://github.com/apache/ofbiz-framework/commit/c0a9714ef14f37c02270f953f28925f9ad415c0d" target="_blank">GitHub Link</a>) </li>

    <li>Fixes line lengths in ModelFormFieldTest to adhere to coding standards (<a href="https://github.com/apache/ofbiz-framework/commit/0ece441228b224e4d3247f0d0bf54f3663a6caf3" target="_blank">GitHub Link</a>) </li>

    <li>Reverts "Improved: Remove unused services from party/services_view.xml and PartyServices.java/.xml. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9988" target="_blank">OFBIZ-9988</a>)" (<a href="https://github.com/apache/ofbiz-framework/commit/abf11bd3e6c7e2c27e0adc71bf59755d94aad15d" target="_blank">GitHub Link</a>)</li>

    <li>Reverts "Multi Part Input Parameters not Available in Groovy Event (<a href="https://issues.apache.org/jira/browse/OFBIZ-5048" target="_blank">OFBIZ-5048</a>)" (<a href="https://github.com/apache/ofbiz-framework/commit/3788f6766a01eb476c15d32e6b9d9127061d12f4" target="_blank">GitHub Link</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes: Error when initialize billFromParty from groovy context in loadSalesOrderItemFact service (<a href="https://github.com/apache/ofbiz-framework/commit/04b2c4c28ac1211870d0f71df5ee980be3ea7a9f" target="_blank">GitHub Link</a>) </li>

    <li>Temporarily comments out the 'stream' request-map in ecommerce controller for security reason (<a href="https://issues.apache.org/jira/browse/OFBIZ-11348" target="_blank">OFBIZ-11348</a>) </li>

    <li>Fixes: The 'stream' request-map in ecommerce and commonext controllers requires authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-11349" target="_blank">OFBIZ-11349</a>) </li>

    <li>Fixes: replaceFirst is sensible to variable pattern (<a href="https://issues.apache.org/jira/browse/OFBIZ-11396" target="_blank">OFBIZ-11396</a>) </li>

    <li>Fixes: Billing Information UI getting distorted (<a href="https://issues.apache.org/jira/browse/OFBIZ-10980" target="_blank">OFBIZ-10980</a>) </li>

</ul>

<h2>Documentation</h2>

<h3>Framework</h3>

<ul>

    <li>Provides themes documentation migration from md to asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11311" target="_blank">OFBIZ-11311</a>) </li>

    <li>Upgrades documentation references in catalina's ofbiz-component to documentation 9.0 (<a href="https://github.com/apache/ofbiz-framework/commit/f5a8479c46165901ce80afbbd3875f4bc4db3711" target="_blank">GitHub Link</a>) </li>

    <li>Adds documentation for form widget attribute 'id-name' (<a href="https://github.com/apache/ofbiz-framework/commit/d6132fa534620fe3d368e207bd38e847afbfdbc5" target="_blank">GitHub Link</a>) </li>

    <li>Converts all setup help files in docbook format to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-11363" target="_blank">OFBIZ-11363</a>) </li>

    <li>Converts Agreement Help Docbook file to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-10290" target="_blank">OFBIZ-10290</a>) </li>

    <li>Converts Financial Account Help Docbook file to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-10296" target="_blank">OFBIZ-10296</a>) </li>

    <li>Converts Global GL Setting Help Docbook file to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-10297" target="_blank">OFBIZ-10297</a>) </li>

    <li>Converts Invoice Docbook files to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-10292" target="_blank">OFBIZ-10292</a>) </li>

    <li>Converts Payments Docbook files to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-10294" target="_blank">OFBIZ-10294</a>) </li>

    <li>Converts Payment-gateway Docbook files to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-10294" target="_blank">OFBIZ-10294</a>) </li>

    <li>Converts Billing Account Docbook files to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-10293" target="_blank">OFBIZ-10293</a>) </li>

    <li>Converts Tax-Authorities Docbook files to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-10291" target="_blank">OFBIZ-10291</a>) </li>

    <li>Converts Organization-Gl-Settings Docbook files to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-11352" target="_blank">OFBIZ-11352</a>) </li>

    <li>Formats Accounting intro help file 'acc-intor.adoc'(<a href="https://issues.apache.org/jira/browse/OFBIZ-10289" target="_blank">OFBIZ-10289</a>) </li>

    <li>Remove empty help files in Accounting (<a href="https://issues.apache.org/jira/browse/OFBIZ-10288" target="_blank">OFBIZ-10288</a>) </li>

    <li>Adds Accounting Glossary in Accounting documentation (<a href="https://issues.apache.org/jira/browse/OFBIZ-10626" target="_blank">OFBIZ-10626</a>) </li>

    <li>Provides content overview doc file to asciidoc format (<a href="https://issues.apache.org/jira/browse/OFBIZ-11384" target="_blank">OFBIZ-11384</a>) </li>

    <li>Restores docbook help files for accounting, commonext-SETUP, content and humanres (<a href="https://issues.apache.org/jira/browse/OFBIZ-11420" target="_blank">OFBIZ-11420</a>) </li>

    <li>Improves documentations in widget-form.xsd (<a href="https://github.com/apache/ofbiz-framework/commit/5640de4eba0148e4a95d72528945866b7069d2ed" target="_blank">GitHub Link</a>) </li>

    <li>Fixes dead link in README.adoc (<a href="https://github.com/apache/ofbiz-framework/commit/12af361c38b31550882d67ad4bbbda9c35bf746b" target="_blank">GitHub Link</a>) </li>

    <li>Converts Help to asciidoc and includes it in hr-intro.adoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10256" target="_blank">OFBIZ-10256</a>) </li>

    <li>Converts Employee Help to asciidoc and includes it in hr-employees.adoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10260" target="_blank">OFBIZ-10260</a>) </li>

    <li>Converts Employment Help to asciidoc and includes in it hr-employment.adoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10261" target="_blank">OFBIZ-10261</a>) </li>

    <li>Converts Employee-position Help to asciidoc and includes it in hr-employee-positions.adoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10259" target="_blank">OFBIZ-10259</a>) </li>

    <li>Converts Training Howto Help to asciidoc and includes it in hr-training.adoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10268" target="_blank">OFBIZ-10268</a>) </li>

    <li>Remove trailing spaces in various adoc files (<a href="https://issues.apache.org/jira/browse/OFBIZ-10251" target="_blank">OFBIZ-10251</a>) </li>

</ul>
