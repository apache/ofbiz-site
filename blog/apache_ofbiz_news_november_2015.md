---
layout: post
title: Apache OFBiz News - November 2015
date: '2015-12-05T13:05:15+00:00'
permalink: apache_ofbiz_news_november_2015
---
<h2>Apache OFBiz News November 2015</h2>
This month we have some news from the marketing and promotion efforts, the next ApacheCon in Vancouver is being planned and we also have several bugfixes and improvements in our code base.

<!--more-->
<h2>New Website and Marketing</h2>
Work is currently underway on the planning and development of a new project website. One of the things discussed was that potential new users are interested in knowing who is already using OFBiz. In order to highlight this we are planning to include a section with logos from companies that are using OFBiz.<p></p> 
OFBiz Service Providers are encouraged to contact their customers to see if they are willing to have their logos displayed on our website.
<h2>Apache OFBiz Youtube Channel</h2>
We are currently reactivating our  <a href="https://www.youtube.com/user/ofbiz">OFBiz Youtube</a> channel to help promote OFBiz and provide information to both current and potential new users or developers. It is planned to produce a set of basic introduction videos to help people get started with OFBiz.  We are currently collecting a list of topics to be covered in these videos.<p></p>
We are also looking for volunteers from the community to begin making OFBiz these based videos that could be published on our channel. If you are interested in helping in either of these areas then please check our  <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Youtube+Channel">wiki page</a> for details.
<h2>ApacheCon Core NA 2016 in Vancouver</h2>
The next  <a href="http://events.linuxfoundation.org/events/apachecon-north-america">ApacheCon Core NA</a> will take place in Vancouver from 11th to 13th May 2016. As a project we have been very fortunate to have had full OFBiz tracks at both Apachecon EU and Apachecon NA in 2015 so are hoping that we can repeat this for 2016.<p></p>
In preparation for it we are now asking community members to help us put together an OFBiz track proposal.Anyone who is interested in presenting at Apachecon NA please complete the details in the table on our  <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apachecon+NA+2016">ApacheCon Core NA 2016 wiki page</a> that we can track the potential and actual submissions. 
<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
	<li>Improve the way default position and size lookup parameters are set (<a href="https://issues.apache.org/jira/browse/OFBIZ-6710">OFBIZ-6710</a>)</li>
	<li>Update SimpleContentViewHandler to return mime type on file extension and use inline for content-disposition (<a href="https://issues.apache.org/jira/browse/OFBIZ-6702">OFBIZ-6702</a>). SimpleContentViewHandler will return mime type 'text/html' for all DataResource values without a specified mimeTypeId. Changing to DataResourceWorker.getMimeType will allow determining the mimeTypeId by file extension. Fixing the mime type will allow the browsers to display content inline if UtilHttp is updated as well. All unknown extensions will be set to octet-stream causing the browser to prompt for download. Uses a content-disposition-type property in requestHandler.properties to allow more flexibility for users (see UtilHttp.setContentDisposition() method). Beware "inline" is less secure. For this reason, Gareth forced the "dangerous" text/html mime type to application/octet-stream in SimpleContentViewHandler class. This to prevent possible static XSS attacks. See the Jira issue for more details.</li>
	<li>New feature to reclaim a user account using security questions (<a href="https://issues.apache.org/jira/browse/OFBIZ-4983">OFBIZ-4983</a>). When a customer creates an account on the eCommerce site, he will also need to answer a security question. This security question then can be used by the user to reclaim his account in case he forgets his password. If the user correctly answers the required security question while reclaiming his account, his password will be sent through email notification. This part would work in the same way as the existing functionality of email password (forget password).</li>
	<li>Display GeoPoint with map in WebTools (<a href="https://issues.apache.org/jira/browse/OFBIZ-6527">OFBIZ-6527</a>).</li>
	<li>Remove superfluous .properties extension from EntityUtilProperties requests (<a href="https://issues.apache.org/jira/browse/OFBIZ-6719">OFBIZ-6719</a>). Many EntityUtilProperties requests had the .properties extension in the parameters for the resource, but this is not needed as it is stripped later on.</li>
	<li>Remove tenant data from the demo data set (<a href="https://issues.apache.org/jira/browse/OFBIZ-5757">OFBIZ-5757</a>).</li>
	<li>LoginServices.userLogin causes stacktrace when username or password is incorrect (<a href="https://issues.apache.org/jira/browse/OFBIZ-6721">OFBIZ-6721</a>). It should return FAILURE instead of error to avoid this.</li>
	<li>Remove superfluous comment from entity-eca.xsd (<a href="https://issues.apache.org/jira/browse/OFBIZ-6724">OFBIZ-6724</a>).</li>
	<li>Updates commons collections from 3.2.1 to 4.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6748">OFBIZ-6748</a>).</li>
	<li>Added some UiLabels in French (<a href="https://issues.apache.org/jira/browse/OFBIZ-6732">OFBIZ-6732</a>).</li>
	<li>Convert Party entites CRUD service from simple to entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-5750">OFBIZ-5750</a>).</li>
	<li>Replace remaining occurrence of Open For Business with Apache OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-6171">OFBIZ-6171</a>).</li>
	<li>Quote report should open in a new window (<a href="https://issues.apache.org/jira/browse/OFBIZ-6107">OFBIZ-6107</a>).</li>
	<li>Layout improvement for showing cart properly on order entry page for bizznesstime theme (<a href="https://issues.apache.org/jira/browse/OFBIZ-2995">OFBIZ-2995</a>).</li>
	<li>Add session tracking mode and make cookie secure (<a href="https://issues.apache.org/jira/browse/OFBIZ-6655">OFBIZ-6655</a>).</li>
	<li>Replace EditProductAssoc ftl with widgets (<a href="https://issues.apache.org/jira/browse/OFBIZ-6320">OFBIZ-6320</a>).</li>
	<li>Convert Survey entites CRUD service from simple to entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-6744">OFBIZ-6744</a>).</li>
	<li>Convert Content entites CRUD service from simple to entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-6745">OFBIZ-6745</a>).</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
	<li>ProductStore did not allow the default timezone to be set (<a href="https://issues.apache.org/jira/browse/OFBIZ-2813">OFBIZ-2813</a>). The ProductStore has the defaultLocaleString and the defaultCurrencyUomId but does not have a defaultTimeZoneString. What happens when a store is selected (from e-commerce or the POS) is that it will look at the user for a lastTimeZone and if that is not set, it would simply revert to the TimeZone.getDefault() (the timezone based on the server). This is troubling when you may have an application server that is running in a completely different timezone than what is desired for the store.</li>
	<li>Form layered-modal is not respecting passed (default) width (<a href="https://issues.apache.org/jira/browse/OFBIZ-6673">OFBIZ-6673</a>)</li>
	<li>Possible stored XSS issue with Content (<a href="https://issues.apache.org/jira/browse/OFBIZ-6669">OFBIZ-6669</a>).</li>
	<li>EcomSEO generates an error when used in multi-tenancy setup (<a href="https://issues.apache.org/jira/browse/OFBIZ-6525">OFBIZ-6525</a>). When using the ecomseo application of the ecommerce component in a tenant the tenant entity couldn't be accessed and an error was returned.</li>
	<li>Require Inventory of Marketing Package Product can't be shipped (<a href="https://issues.apache.org/jira/browse/OFBIZ-817">OFBIZ-817</a>).</li>
	<li>Project Manager throws error if project user is not assigned to every project (<a href="https://issues.apache.org/jira/browse/OFBIZ-4206">OFBIZ-4206</a>). The project manager returns an error on the main page unless every user is added to every single project. It should return a list of just the projects the user is assigned to.</li>
	<li>Webtools Entity edition, the suggested date and time formats are not localised (<a href="https://issues.apache.org/jira/browse/OFBIZ-6727">OFBIZ-6727</a>)</li>
	<li>Cannot create more than one lead in the SFA component by same user (<a href="https://issues.apache.org/jira/browse/OFBIZ-6703">OFBIZ-6703</a>). Replace createPartyRole service call with ensurePartyRole, avoiding duplicate primary key creation error.</li>
	<li>Best Selling Products section in main order page takes cancelled orders into account (<a href="https://issues.apache.org/jira/browse/OFBIZ-6725">OFBIZ-6725</a>).</li>
	<li>sendCommEventAsEmail does not filter CommEventContentAssoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-6698">OFBIZ-6698</a>).</li>
	<li>Type-ahead regarding workeffort in AddCommEventWorkEffort throws an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6683">OFBIZ-6683</a>). Corrected the lookup-target request for AddCommEventWorkEffort .</li>
	<li>Type-ahead regarding workeffort in AddQuoteWorkEffort (<a href="https://issues.apache.org/jira/browse/OFBIZ-6681">OFBIZ-6681</a>). Corrected the lookup-target request for AddQuoteWorkEffort.</li>
	<li>Implemented ability to refund non-physical goods (e.g. services), includes
<ul>
	<li>Getting error when returning service (non-physical) product (<a href="https://issues.apache.org/jira/browse/OFBIZ-6728">OFBIZ-6728</a>).</li>
	<li>Return invoice not generated for service (non-physical) product (<a href="https://issues.apache.org/jira/browse/OFBIZ-6729">OFBIZ-6729</a>).</li>
	<li>Return shipment created for non-physical product (<a href="https://issues.apache.org/jira/browse/OFBIZ-6730">OFBIZ-6730</a>).</li>
</ul>
</li>
	<li>Fixed table-layout="auto" FOP warning. Used table-layout="fixed" to fix the warning (<a href="https://issues.apache.org/jira/browse/OFBIZ-6241">OFBIZ-6241</a>).</li>
	<li>The state list is not populated when trying to add a shipping address from the Quick Finalize Order screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-6741">OFBIZ-6741</a>).</li>
	<li>Missing userLogin error on party profile screen when 1st content is non public (<a href="https://issues.apache.org/jira/browse/OFBIZ-6708">OFBIZ-6708</a>).</li>
	<li>When you add a party content the party profile screen does not refresh (<a href="https://issues.apache.org/jira/browse/OFBIZ-6709">OFBIZ-6709</a>).</li>
	<li>Same Billing Address generates an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6534">OFBIZ-6534</a>).</li>
	<li>Last categories section in e-commerce pages is broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-6742">OFBIZ-6742</a>).</li>
	<li>Can not display product category name in Unicode (<a href="https://issues.apache.org/jira/browse/OFBIZ-6739">OFBIZ-6739</a>).</li>
	<li>Entity ECAs not triggered correctly when using Delegator.storeAll() method (<a href="https://issues.apache.org/jira/browse/OFBIZ-3847">OFBIZ-3847</a>).</li>
</ul>
