---
layout: post
title: 'Apache OFBiz News - July 2017 '
date: '2017-08-14T14:12:41+00:00'
permalink: apache-ofbiz-news-july-2017
---
<h2>Apache OFBiz News July 2017 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about the end of life for two unreleased branches, the work going on to re-organise OFBiz application data, we start a  discussion on ways to improve the OFBiz user interface, one of our contributors creates an OFBiz sanity check and new contributors joined the OFBiz community.
<!--more--> 

<h2>End of Support for Unreleased Branches 14.12 and 15.12 </h2>
When the project changed the build system from Ant to Gradle, two unreleased branches 14.12 and 15.12 had already been created. These unreleased branches still use Ant as the build system and contain the complete codebase including the specialpurpose components. The community agreed to keep these branches available for developers and service providers so that they could continue to support their client base.
<p></p>
The support period for backporting bug fixes to these unreleased branches was extended to be longer than normal to give users more time to transition to 16.11. The deadline for supporting 14.12 and 15.12 was the end of July 2017. 
<p></p>
This means that bug fixes will not automatically be backported to these unreleased branches and will be handled on a case by case basis. You will still be able to get help, advice and support on the mailing lists regarding these branches but we will now be encouraging users to look at upgrading to the 16.11 release.
<h2>Re-Organising OFBiz Application Data </h2>
This month there was a <a href="https://s.apache.org/GpKc" target="_blank" rel="noopener">detailed discussion</a> about simplifying the OFBiz data files and making it easier to understand the dependencies. A lot of setup is done via the demo data files and when an issue occurs in data loading, it can sometimes be difficult to debug and track down. 
<p></p>
By re-organising and standardising the structure of the folders and files, we can also review and clean up any dependencies. <a href="https://issues.apache.org/jira/browse/OFBIZ-9501" target="_blank" rel="noopener">A Jira has been created</a>  and we are actively looking for volunteers from the community to help with this effort. If you would like to help out with this task then please add your patch or comments to the Jira issue.
<h2>Improving the OFBiz User Interface</h2>
A big discussion topic this month was related to <a href="https://s.apache.org/qu8i" target="_blank" rel="noopener">improving the OFBiz user interface.</a> This subject has also been raised in the past but now there is a new effort focussed on getting something done that could really improve the user's perception of OFBiz.
<p></p>
Nicolas Malin is currently doing some work on this and we look forward to seeing the result.
<h2>OFBiz Sanity Test</h2>
Is OFBiz a little crazy? Probably not, but during this month one of our OFBiz contributors Sanjay Yadav created an OFBiz Sanity Check document to help users run through a list of basic OFBiz tests. Details of <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Sanity+Test" target="_blank" rel="noopener">Sanity Test document</a> can be found on the wiki. Thanks very much to Sanjay for putting this together and sharing it with the community.
<p></p>
<h2>New OFBiz Contributors</h2>
During the month of July-2017, OFBiz community welcomed 22 new open source contributors who filed ICLA to ASF. OFBiz contributors list can be found <a href="https://cwiki.apache.org/confluence/x/AIRMAg" target="_blank" rel="noopener">here</a>. 
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Fix defects in the payment package reported by the code analysis tool FindBugs (<a href="https://issues.apache.org/jira/browse/OFBIZ-9451">OFBIZ-9451</a>)
The patch contains miscellaneous improvements to the code base such as setting variables to final to avoid malicious changes from outside code, using stringBuilders for efficiency, removing unnecessary null queries, and exchanging inefficient Boolean constructers with available functions.</li>
 	<li>Replace hard-coded instances of "IN" with ModelService.IN_PARAM (<a href="https://issues.apache.org/jira/browse/OFBIZ-9434">OFBIZ-9434</a>)
<ul>
 	<li>Add new constraints for "INOUT" modelservice param.</li>
 	<li>Update remaining occurrences for hard-coded "IN", "OUT" and "INOUT" (<a href="https://issues.apache.org/jira/browse/OFBIZ-9434">OFBIZ-9434</a>)</li>
</ul>
</li>
 	<li>Improve further inconsistent String Comparisons (<a href="https://issues.apache.org/jira/browse/OFBIZ-9254">OFBIZ-9254</a>)</li>
 	<li>Move certain uiLabels from ProductUiLabels.xml to CommonEntityLabels.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-9408">OFBIZ-9408</a>)
Adapt ProductUiLabels to the pattern of other labels of the "Uom" entity: &lt;entityName&gt;.&lt;fieldName&gt;.&lt;PrimaryKey&gt;.</li>
 	<li>Use serviceUtil() in place of hard-coded error/success messages (<a href="https://issues.apache.org/jira/browse/OFBIZ-9466">OFBIZ-9466</a>)</li>
 	<li>Set autocomplete to "off" for all the password fields to improve security (<a href="https://issues.apache.org/jira/browse/OFBIZ-9471">OFBIZ-9471</a>)</li>
 	<li>Convert AgreementServices.xml from mini-lang to groovyDSL (<a href="https://issues.apache.org/jira/browse/OFBIZ-9460">OFBIZ-9460</a>)</li>
 	<li>Correct the Service implementation of deletePayHistory (<a href="https://issues.apache.org/jira/browse/OFBIZ-9111">OFBIZ-9111</a>)
Use entity auto for deletePayHistory service, also add new service to expirePayHistory and call expirePayHistory from UI.</li>
 	<li>Remove cancelAgreement service and add expireAgreement entity-auto service (<a href="https://issues.apache.org/jira/browse/OFBIZ-9480">OFBIZ-9480</a>)</li>
 	<li>Improve EntityQuery.queryOne() function to resolve a record by auto matching the primary key on a given context (<a href="https://issues.apache.org/jira/browse/OFBIZ-9447">OFBIZ-9447</a>)
This improvement simulates the minilang element &lt;entity-one entity-name=Product value-name=product/&gt; to help the minilang migration to groovy.
<ul>
 	<li>With new groovyDSL for queryOne, simplify groovy rate amount services</li>
</ul>
</li>
 	<li>Use FlexibleLocation.resolveLocation() instead of hard-coded path (<a href="https://issues.apache.org/jira/browse/OFBIZ-9479">OFBIZ-9479</a>)</li>
 	<li>Improve groovyDSL: call makeValidContext when running a service (<a href="https://issues.apache.org/jira/browse/OFBIZ-9523">OFBIZ-9523</a>)
When calling a groovy service, all paramters must be checked for the service call. The Improvement simplifies this dsl with an automatic parameters check so that the context can be directly specified.</li>
 	<li>Improvements in entity definitions and services (<a href="https://issues.apache.org/jira/browse/OFBIZ-8273">OFBIZ-8273)</a>
<ul>
 	<li>Lot (<a href="https://issues.apache.org/jira/browse/OFBIZ-8273">OFBIZ-8273)</a></li>
 	<li>ShipmentItemBilling (<a href="https://issues.apache.org/jira/browse/OFBIZ-8462">OFBIZ-8462</a>)</li>
 	<li>CommEventContentAssoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-8843">OFBIZ-8843</a>)</li>
 	<li>OrderHeader (<a href="https://issues.apache.org/jira/browse/OFBIZ-9457">OFBIZ-9457</a>)</li>
</ul>
</li>
 	<li>Move all data in applications to the datamodel component (<a href="https://issues.apache.org/jira/browse/OFBIZ-9501">OFBIZ-9501</a>)
This is the first of many more commits to move all data from applications to the data model component to centralize both entity definitions and the data supporting it. This commit partially moves data from PartyTypeData.xml file to the newly created central file PartySeedData.</li>
 	<li>Integrating google phone number library for validating telecom numbers (<a href="https://issues.apache.org/jira/browse/OFBIZ-9358">OFBIZ-9358</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Improve inconsistent String Comparisons (<a href="https://issues.apache.org/jira/browse/OFBIZ-9254">OFBIZ-9254</a>)
<ul>
 	<li>in ftl-file of the ecommerce plugin</li>
 	<li>in ftl-file of the ebay plugin</li>
</ul>
</li>
 	<li>Set autocomplete to "off" for all the password field to improve security (<a href="https://issues.apache.org/jira/browse/OFBIZ-9471">OFBIZ-9471</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>ContentWorker#findAlternateLocaleContent does not use fallback locale. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9445">OFBIZ-9445</a>)
If no alternate locale content for the requested locale is found, search for an alternate locale content with the locale configured in general.properties at locale.properties.fallback. If this one isn't found either we can still return the original content.</li>
 	<li>Missing secure port in URLs when sending mails (<a href="https://issues.apache.org/jira/browse/OFBIZ-9449">OFBIZ-9449</a>)
This issue came up after <a href="https://issues.apache.org/jira/browse/OFBIZ-9206">OFBIZ-9206</a> where the value of port.https in url.properties was removed.</li>
 	<li>Required check missing for supplier product id and last price on AddProductSupplier page (<a href="https://issues.apache.org/jira/browse/OFBIZ-9455">OFBIZ-9455</a>)</li>
 	<li>Wrong price overriding when adding items to cart (<a href="https://issues.apache.org/jira/browse/OFBIZ-7263">OFBIZ-7263</a>)
Changing the item quantity in cart set the flag isModifiedPrice true which conflicted with the updatePrice condition and hence price recalculation was not being triggered.</li>
 	<li>Adding a gift certificate in purchaseOrder throws exception (<a href="https://issues.apache.org/jira/browse/OFBIZ-9438">OFBIZ-9438</a>)</li>
 	<li>Accounting quantity transfer is zero while transferring inventory from one facility to another (<a href="https://issues.apache.org/jira/browse/OFBIZ-9464">OFBIZ-9464</a>)</li>
 	<li>Incorrect MimeTypeId value shown if the form is submitted (<a href="https://issues.apache.org/jira/browse/OFBIZ-9344">OFBIZ-9344</a>)</li>
 	<li>UI issue in ATP/QOH table on Create Purchase Order screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-9468">OFBIZ-9468</a>)</li>
 	<li>"ACCTG trans entries pdf" link on invoiceOverview does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-6774">OFBIZ-6774</a>)
This is a link to a birt component which was not included in the 13.07 release.</li>
 	<li>Insufficient checking of checkOutPaymentId in CheckOutEvents.getSelectedPaymentMethods (<a href="https://issues.apache.org/jira/browse/OFBIZ-9404">OFBIZ-9404</a>)</li>
 	<li>WorkEffort shows error on adding party with specific role to Timesheet (<a href="https://issues.apache.org/jira/browse/OFBIZ-9317">OFBIZ-9317</a>)</li>
 	<li>The copyAgreement service fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-9143">OFBIZ-9143</a>)</li>
 	<li>Order page shows widget exceptions (<a href="https://issues.apache.org/jira/browse/OFBIZ-9481">OFBIZ-9481</a>)</li>
 	<li>Uploading images at catalog/control/addImageForProduct does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-9259">OFBIZ-9259</a>)
Delegator was fetched from the context instead of the DispatchContext and thus was throwing NPE while running the EntityUtilProperties.getPropertyValue().</li>
 	<li>Adding condition in price rule on "Role Type" showing incorrect result (<a href="https://issues.apache.org/jira/browse/OFBIZ-7275">OFBIZ-7275</a>)
The issue exists because in roleTypeList there are multiple occurrences of substring "CUSTOMER". The existing check was just checking the occurrence of a substring in the string and found this value more than once in the list so the last option gets selected. Applied equality check to find the exact match.</li>
 	<li>MRP generates duplicate requirements when items are initially under minimum quantity and have with pending approved purchase orders. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9526">OFBIZ-9526</a>)
With this change the requirements to replenish the inventory up to the minimum stock quantity is generated, if needed, only when the first demand event is processed or at the end.</li>
 	<li>Order contact mechs are not copied over while re-ordering an order (<a href="https://issues.apache.org/jira/browse/OFBIZ-9253">OFBIZ-9253</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Wrong repository links on FormWidgetExamples page (<a href="https://issues.apache.org/jira/browse/OFBIZ-9494">OFBIZ-9494</a>)
Update the URL path and instead of changing it at all the places, introduced a variable.</li>
 	<li>Uploading content to a product email in SCRUM component is not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-9524">OFBIZ-9524</a>)
Fix typo in form name in the javascript function on the button.</li>
 	<li>Error on "Edit backlog" for a product in SCRUM component (<a href="https://issues.apache.org/jira/browse/OFBIZ-9531">OFBIZ-9531</a>)
Add missing import for GenericEntityException and define customer and items list at right place to make it available.</li>
</ul>
