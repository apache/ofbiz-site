---
layout: post
title: 'Apache OFBiz News - August 2017 '
date: '2017-09-18T10:09:40+00:00'
permalink: apache-ofbiz-news-august-2017
---
<h2>Apache OFBiz News August 2017 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about a new documentation effort to produce a Business Process Reference Guide, our new look OFBiz project website goes live, we discuss improving the look and feel of our blog, and we welcome two new committers.
<!--more--> 
<h2>New OFBiz Website</h2> 
In previous updates, we have mentioned the work happening to update our existing website. It has been in progress for a while but during August we are proud to announce that our new OFBiz website went live. The new site includes our updated logo and has a totally new look and feel that we hope our community and potential OFBiz users will like.
<p></p>
A key focus was on making it easy for developers and non-developers to get started as well as providing links to key information.  Since it went live, we have been implementing minor changes and feedback from the community and has been very positive. We will be looking to add additional pages such as an OFBiz Service Providers list and more FAQs in the future.
<p></p>
Thanks very much to everyone that contributed to the website in any way and especially Kenneth Paskett for his graphic design, Deepak Dixit and the Apache Infrastructure team for their help in moving the site live.
<h2>Improving our Blog Template</h2> 
Following on from the work done on creating a new logo and website, this month the community discussed <a href=" https://s.apache.org/UgFW" target="_blank" rel="noopener"> improving our blog template</a>
<p></p>
Kenneth Paskett who did the graphic work for the logo and the new website has come up with a <a href="https://s.apache.org/GCFM" target="_blank" rel="noopener"> draft idea for a layout</a> so please feel free to join the discussion and tell us what you think.
<h2>OFBiz Business Process Reference Guide</h2> 
Another discussion that came up this month was about creating an <a href="https://s.apache.org/Hf2k" target="_blank" rel="noopener"> OFBiz Business Process Reference Guide.</a>
Community feedback was very positive and some work has already started. The aim is to provide a process overview for each area including activity diagrams and also incorporate user stories, use cases and test cases.
<p></p>
An example of the work for the Sales Order Management can be found at the links below:
<ul> 
<li><a href="https://s.apache.org/BJvi" target="_blank" rel="noopener"> Sales Order Management Process Overview</a></li>
<li><a href="https://s.apache.org/RV8K" target="_blank" rel="noopener"> Sales Order Management User Stories, Use Cases and Test Cases</a></li>
</ul>

The Parent page for all these documents can be found<a href="https://cwiki.apache.org/confluence/x/1gm8Ag" target="_blank" rel="noopener"> here</a></li>.
<p></p>
Thanks very much to contributors Shivangi Tanwar, Sonal Patwari, Priya Sharma, Humera Khan, Renuka Srishti, Jagpreet Kaur and also Pranay Pandey for working on this important documentation effort. We hope that this set of documentation will greatly help potential OFBiz users and evaluators. 
<h2>New OFBiz Committers </h2> 
During August the Project Management Committee (PMC) invited two new Committers, Rishi Solanki and Akash Jain. Congratulations to both Rishi and Akash and thank you for all your contributions to the project.
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Replace fields with id-ne, id-long-ne and id-vlong-ne by id, id-long and id-vlong respectively which are not primary keys (<a href="https://issues.apache.org/jira/browse/OFBIZ-9355">OFBIZ-9355</a>)</li>
 	<li>Remove unnecessary field types, also removed -ne field references from code. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9351">OFBIZ-9351</a>)</li>
 	<li>Remove the never implemented deleteParty (pre Apache era) (<a href="https://issues.apache.org/jira/browse/OFBIZ-9556">OFBIZ-9556</a>)</li>
 	<li>Refactor EntityListIterator (<a href="https://issues.apache.org/jira/browse/OFBIZ-9549">OFBIZ-9549</a>)</li>
 	<li>OEM Party Id field should have lookup on Edit Product page (<a href="https://issues.apache.org/jira/browse/OFBIZ-9368">OFBIZ-9368</a>)
<ul>
 	<li>Removed manufacturerPartyId from Product entity</li>
 	<li>Removed its relations from view entities namely GoodIdentificationAndProduct</li>
 	<li>Removed it from forms EditProduct (Product), SearchInventoryItemsParams (EditFacilityInventoryItems screen in Facility) and SearchInventoryItemsDetailsParams (ViewFacilityInventoryItemsDetails screen in Facility)</li>
</ul>
</li>
 	<li>Bugfixes found by <a href="http://findbugs.sourceforge.net/">FindBugs</a>
<ul>
 	<li>Package org.apache.ofbiz.base.lang (<a href="https://issues.apache.org/jira/browse/OFBIZ-9564">OFBIZ-9564</a>)
Implemented method hashCode() because method equals() was implemented, Changed Exception to RuntimeException because no exception was thrown and the only occurring exception could be a runtimeexception</li>
 	<li>Package org.apache.ofbiz.base.lang.test (<a href="https://issues.apache.org/jira/browse/OFBIZ-9565">OFBIZ-9565</a>)
Fixes some diamond operators</li>
 	<li>Package org.apache.ofbiz.base.concurrent (<a href="https://issues.apache.org/jira/browse/OFBIZ-9562">OFBIZ-9562</a>)
Fixes some diamond operators, Implementes equals method to fix potential problems, Implementes hashCode method because equals method was implemented, Implemented timeDiff method to keep the code DRY</li>
 	<li>Package org.apache.ofbiz.base.container (<a href="https://issues.apache.org/jira/browse/OFBIZ-9563">OFBIZ-9563</a>)
Fixes some diamond operators, deleted multiple unnecessary nullchecks, added nullcheck, deleted multiple unnecessary else-blocks</li>
 	<li>Package org.apache.ofbiz.base.config (<a href="https://issues.apache.org/jira/browse/OFBIZ-9566">OFBIZ-9566</a>)
The protected fields were set to private since the class is not extended anywhere. If they need to be accessed in the future, getter that return an unmodifiable version should be implemented (Collections.unmodifiableXXX). Refactor: Uses multi exceptions catch (explicitly to not catch, hence somehow swallow, RuntimeException), Uses return instead of else when appropriate, Extracts a getLoader() handy method, Removes a useless thrown exception in invalidateDocument(), Removes a useless Document cast</li>
 	<li>Package org.apache.ofbiz.base.metrics (<a href="https://issues.apache.org/jira/browse/OFBIZ-9567">OFBIZ-9567</a>)
Changes a division with two long variables whose result was casted into a double, Now it performs a proper double division</li>
 	<li>Package org.apache.ofbiz.accounting.thirdparty.gosoftware. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9486">OFBIZ-9486</a>)</li>
 	<li>Package org.apache.ofbiz.accounting.finaccount (<a href="https://issues.apache.org/jira/browse/OFBIZ-9504">OFBIZ-9504</a>)
FinAccountPaymentServices.finAccountPreAuth(DispatchContext, Map) A value is checked here to see whether it is null, but this value can't be null because it was previously dereferenced and if it were null a null pointer exception would have occurred at the earlier dereference.</li>
 	<li>Package org.apache.ofbiz.accounting.ledger. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9505">OFBIZ-9505</a>)</li>
 	<li>Packages org.apache.ofbiz.accounting.period and org.apache.ofbiz.accounting.tax. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9527">OFBIZ-9527</a>)</li>
 	<li>Package org.apache.ofbiz.base.component. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9560">OFBIZ-9560</a>)</li>
</ul>
</li>
 	<li>Manage deprecated service in the ModelService,  When removing a service a new XML element &lt;deprecated&gt; can be added (<a href="https://issues.apache.org/jira/browse/OFBIZ-9558">OFBIZ-9558</a>)</li>
 	<li>Connect OFBiz to a read only database,  Add a DAO helper class to use a datasource as readonly. (<a href="https://issues.apache.org/jira/browse/OFBIZ-6401">OFBIZ-6401</a>)</li>
 	<li>Deprecated Methods
<ul>
 	<li>OrderChangeHelper (<a href="https://issues.apache.org/jira/browse/OFBIZ-9570">OFBIZ-9570</a>)
The methods abortOrderProcessing and releaseInitialOrderHold have been deprecated since the workflow engine has been replaced by the ECA.</li>
</ul>
</li>
 	<li>Replace unnecessary local variable ZERO with BigDecimal.ZERO. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9529">OFBIZ-9529</a>)</li>
 	<li>ServiceSemaphore: Check for Transaction before suspending it in dbWrite(...) (<a href="https://issues.apache.org/jira/browse/OFBIZ-9401">OFBIZ-9401</a>)</li>
 	<li>Replace BigDecimal.ROUND_* by RoundingMode.* (<a href="https://issues.apache.org/jira/browse/OFBIZ-9571">OFBIZ-9571</a>)</li>
 	<li>GenericServiceJob.failed(Throwable) avoid logging stacktraces for non technical service semaphore exceptions (<a href="https://issues.apache.org/jira/browse/OFBIZ-9400">OFBIZ-9400</a>)</li>
 	<li>New UtilMisc method collectionToString(...) safely building a String with the given collection and delimiter (<a href="https://issues.apache.org/jira/browse/OFBIZ-9397">OFBIZ-9397</a>)</li>
 	<li>Required field indicator (*) is missing on some forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-9579">OFBIZ-9579</a>)</li>
 	<li>Required Field Indicator (*) / Form Validation is missing on Create New Data Source Form (<a href="https://issues.apache.org/jira/browse/OFBIZ-7462">OFBIZ-7462</a>)</li>
 	<li>Check for white spaces around the name of a form field when updating a form (<a href="https://issues.apache.org/jira/browse/OFBIZ-9306">OFBIZ-9306</a>)</li>
 	<li>Enable/Disable JMS via configuration (<a href="https://issues.apache.org/jira/browse/OFBIZ-4454">OFBIZ-4454</a>)</li>
 	<li>Required Field Indicator (*) / Form Validation is missing on Create New Data Source Form (<a href="https://issues.apache.org/jira/browse/OFBIZ-7462">OFBIZ-7462</a>)</li>
 	<li>Required field indicator (*) is missing on create contact list form (<a href="https://issues.apache.org/jira/browse/OFBIZ-9587">OFBIZ-9587</a>)</li>
 	<li>Client side validation is missing in quick create accounting transaction process (<a href="https://issues.apache.org/jira/browse/OFBIZ-9583">OFBIZ-9583</a>)</li>
 	<li>EmailServices.sendMailFromScreen improved to take multiple attachments with appropriate type along with several email fixes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9395">OFBIZ-9395</a>)
<ul>
 	<li>it enables to add BCC adress(es) to service OrderServices.sendOrderNotificationScreens to oversteer ProductStoreEmailSetting of BCC the same was as for CC.</li>
 	<li>a method UtilValidate.isEmailList(String) is added to check a comma separated list of email addresses, used for example to check the String passed to the new BCC field for an Order-Notification.</li>
 	<li>there are improvements in EmailServices.sendMailFromScreen. The attachment type of MailAttachments is now not only .pdf but depends on the specific file. This has not been the case before - the mime type was always hard coded as .pdf. The same goes for the bodyPart content-type which is now set to the passed content type or the default text/html type. Before this was also always set to text/html. Additionally, an attachment that has the mime-type text/plain is not rendered with the fop-renderer anymore but with a simple text-renderer. Therefore it is possible to send an CSV file as attachment now.</li>
</ul>
</li>
 	<li>Use auto-attributes in ProductFeatureCategory CRUD services (<a href="https://issues.apache.org/jira/browse/OFBIZ-9608">OFBIZ-9608</a>)</li>
 	<li>Add explicit UEL (unified expression language) function to resolve a label, instead of calling a static worker via groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-9617">OFBIZ-9617</a>)</li>
 	<li>Manage life span of marketing related entites (<a href="https://issues.apache.org/jira/browse/OFBIZ-9550">OFBIZ-9550</a>) Add life span attributes (fromDate, thruDate) on entities : MarketingCampaignPrice, MarketingCampaignPromo, MarketingCampaignRole
Complete related CRUD service with align service name on the best pratice for consistency. The previous service name has been set as deprecated :
<ul>
 	<li> addPromoToMarketingCampaign replace by createMarketingCampaignPromo</li>
 	<li>removePromoFromMarketingCampaign replace by deleteMarketingCampaignPromo</li>
 	<li>addPriceRuleToMarketingCampaign replace by createMarketingCampaignPrice</li>
 	<li>removePriceRuleFromMarketingCampaign replace by deleteMarketingCampaignPrice</li>
</ul>
</li>
 	<li>common-theme upload (<a href="https://issues.apache.org/jira/browse/OFBIZ-9138">OFBIZ-9138</a>) Migrate themes to common-theme component.</li>
 	<li>Move all data in applications to the datamodel component. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9501">OFBIZ-9501</a>)(content, workeffort, product)</li>
 	<li>User should be notified with success message on adding note for party in party component. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9538">OFBIZ-9538</a>)</li>
 	<li>Wrong success message after creating lead in sfa component. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9518">OFBIZ-9518</a>).</li>
 	<li>Use from-field pattern instead of value=dollor pattern in 'set' element Apply slightly modified patch from jira issue, fixed some typo (<a href="https://issues.apache.org/jira/browse/OFBIZ-9607">OFBIZ-9607</a>)</li>
 	<li>When creating New Lead, Lead Source should be associated with the Lead. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9588">OFBIZ-9588</a>)</li>
 	<li>Refactor OFBiz containers and remove StartupCommandToArgsAdapter (<a href="https://issues.apache.org/jira/browse/OFBIZ-9441">OFBIZ-9441</a>)
<ul>
 	<li>Fully refactor the EntityDataLoadContainer</li>
 	<li>Fully refactor the TestRunContainer</li>
 	<li>Remove most old documentation and commented out code where applicable</li>
 	<li>Delete the StartupCommandToArgsAdapter as it is no longer needed</li>
 	<li>Create a new feature in which OFBiz by default fails if any data file fails to load. This can be overridden by passing a flag called "continue-on-failure" e.g. ./gradlew "ofbiz --load-data continue-on-failure"</li>
 	<li>Add a new property to --test called "loglevel" (old code but working properly)</li>
 	<li>Add many new properties to the --load-data command including repair-columns, try-inserts, maintain-txs, etc</li>
 	<li>Update the documentation output of ./gradlew "ofbiz --help" to incorporate the new mentioned properties</li>
 	<li>Refactor README.md to incorporate the changes to the gradle commands for both "-load-data" and "-test" properties. Also remove the gradle GUI documentation as it is now deprecated.</li>
 	<li>Also refactor README.md in other locations to cleanup and make it more consistent. This icludes moving long notes into new sections and reducing the verbosity of the security header. Furthermore, created a new header called Miscellaneous documentation to house the newly created sections</li>
</ul>
</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Replace fields with id-ne, id-long-ne and id-vlong-ne by id, id-long and id-vlong respectively which are not primary keys (<a href="https://issues.apache.org/jira/browse/OFBIZ-9355">OFBIZ-9355</a>)</li>
 	<li>Removed ne references from BirtUtil class file (<a href="https://issues.apache.org/jira/browse/OFBIZ-9351">OFBIZ-9351</a>)</li>
 	<li>OEM Party Id field should have lookup on Edit Product page (<a href="https://issues.apache.org/jira/browse/OFBIZ-9368">OFBIZ-9368</a>)</li>
 	<li>Removed duplicate field type entry from BirtUtil class file.</li>
 	<li>Change all &lt;set&gt; screen and script groovy that call widget.properties values replaced by call to modelTheme (<a href="https://issues.apache.org/jira/browse/OFBIZ-9138">OFBIZ-9138</a>)</li>
 	<li>Use from-field pattern instead of value=dollor pattern in 'set' element Apply slightly modified patch from jira issue, fixed some typo (<a href="https://issues.apache.org/jira/browse/OFBIZ-9607">OFBIZ-9607</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>Bug SQL Count Distinct command in GenericDAO.java (<a href="https://issues.apache.org/jira/browse/OFBIZ-5701">OFBIZ-5701</a>)</li>
 	<li>Connect OFBiz to a read only database, Escape null pointer exception stack trace when the helper return no value (<a href="https://issues.apache.org/jira/browse/OFBIZ-6401">OFBIZ-6401</a>)</li>
 	<li>Bugfixes found by <a href="http://findbugs.sourceforge.net/">FindBugs</a>
<ul>
 	<li>Package org.apache.ofbiz.accounting.payment (<a href="https://issues.apache.org/jira/browse/OFBIZ-9529">OFBIZ-9529</a>)</li>
</ul>
</li>
 	<li>Missing fieldInfo when call constructor for ModelFormField Password, File and Lookup (<a href="https://issues.apache.org/jira/browse/OFBIZ-9577">OFBIZ-9577</a>)</li>
 	<li>Collection added to itself (<a href="https://issues.apache.org/jira/browse/OFBIZ-9578">OFBIZ-9578</a>)</li>
 	<li>LabelManager doesn't search labels in .groovy files (<a href="https://issues.apache.org/jira/browse/OFBIZ-8153">OFBIZ-8153</a>)</li>
 	<li>Ecommerce login/logout don't work properly for trunk and stable (<a href="https://issues.apache.org/jira/browse/OFBIZ-9240">OFBIZ-9240</a>) To fix this problem the code which copies all the attribute from parent request to redirect request was removed because this thing is already taken care of in the RequestHandler.</li>
 	<li>Consistency and Readability improvements
<ul>
 	<li>for view-map tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-9110">OFBIZ-9110</a>) Consistency on the attribute order for view-map element as : name, type, page</li>
 	<li>for make-value tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-8986">OFBIZ-8986</a>) Consistency on the attribute order for make-value element as : entity-name, value-field</li>
</ul>
</li>
 	<li>clean marketing-entitymodel.xml file with remove all field empty body xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-9550">OFBIZ-9550</a>)</li>
 	<li>clean (second pass) marketing-entitymodel.xml file to realign correctly the file format (<a href="https://issues.apache.org/jira/browse/OFBIZ-9550">OFBIZ-9550</a>)</li>
 	<li>MimeType displayed in HTML encoded pattern (<a href="https://issues.apache.org/jira/browse/OFBIZ-9621">OFBIZ-9621</a>)</li>
 	<li>Correct all Theme.xml file fo the theme definition with the good xmlns (<a href="https://issues.apache.org/jira/browse/OFBIZ-9138">OFBIZ-9138</a>)</li>
 	<li>Updated deprecated element type set mixed as true in services.xsd as we are using it in mixed mode. Also moved deprecated sequence after namespace.Found this issue while reading log, this will fix those warnings.</li>
 	<li>Warning related to duplicate type assignment for widget attribute in theme.xsd file</li>
 	<li>Removed unused attribute sequenceId from property element, also fix position value from topLeft to top-left as per dtd</li>
 	<li>Logo image was missing in tomahawk theme.</li>
 	<li>Removed the visualThemeSetId for common theme. Now common theme will be display on backend visual theme popup. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9138">OFBIZ-9138</a>)</li>
 	<li>NullPointerException when calling EntityQuery#getFieldList if distinct is not explicitly set(<a href="https://issues.apache.org/jira/browse/OFBIZ-9624">OFBIZ-9624</a>)</li>
 	<li>Correct library ftl call to render the email body, add possibility to call the ThemeFactory.resolveTheme() with empty request if the visualTheme normaly present on the service context isn't found, so we return the default theme define in general.properties (<a href="https://issues.apache.org/jira/browse/OFBIZ-9138">OFBIZ-9138</a>)</li>
 	<li>Lead Profile URL not working properly in SFA. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9512">OFBIZ-9512</a>)</li>
 	<li>Improvements in LabelReferences class (<a href="https://issues.apache.org/jira/browse/OFBIZ-9623">OFBIZ-9623</a>)</li>
 	<li>LabelManager doesn't search labels in all elements in xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-9606">OFBIZ-9606</a>)
Currently, label manager for xml search only for fail-property elements in xml files, it should also search for the property-to-field, default-message element in xml files.</li>
 	<li>Updated images component reference path, as images component were removed and now these files are part of common-theme componnet.</li>
 	<li>Rename the URL for gradle tab-completion to the correct official one</li>
 	<li>Unable to create Customer (<a href="https://issues.apache.org/jira/browse/OFBIZ-9649">OFBIZ-9649</a>)</li>
 	<li>Groovy MissingPropertyException related to theme.(<a href="https://issues.apache.org/jira/browse/OFBIZ-9657">OFBIZ-9657</a>)</li>
 	<li>Party Communication Screen is broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-9670">OFBIZ-9670</a>). Issue was due to missing closing quotes in from-field attribute of set field tag.</li>
 	<li>Typo introduced in r#1806326 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9607">OFBIZ-9607</a>)</li>
 	<li>Jgrowl lost configuration with common-theme (<a href="https://issues.apache.org/jira/browse/OFBIZ-9138">OFBIZ-9138</a>)</li>
 	<li>Lookup property showDescription not present in common-theme (<a href="https://issues.apache.org/jira/browse/OFBIZ-9138">OFBIZ-9138)</a></li>
 	<li>HtmlFormMacroLibary.ftl contains direct call to widget.properties (<a href="https://issues.apache.org/jira/browse/OFBIZ-9138">OFBIZ-9138</a>) Instead of using the properties on the current theme, some ftl macro present in the file HtmlFormMacroLibary.ftl used a direct call to widget.properties.</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Consistency and Readability improvements
<ul>
 	<li>for view-map tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-9110">OFBIZ-9110</a>) Consistency on the attribute order for view-map element as : name, type, page</li>
 	<li>for make-value tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-8986">OFBIZ-8986</a>) Consistency on the attribute order for make-value element as : entity-name, value-field</li>
</ul>
</li>
 	<li>Correct library ftl call to render the email body (<a href="https://issues.apache.org/jira/browse/OFBIZ-9138">OFBIZ-9138</a>) add possibility to call the ThemeFactory.resolveTheme() with empty request if the visualTheme normaly present on the service context isn't found, so we return the default theme defined in general.properties</li>
 	<li>Updated images component reference path, as we removed images component and now these files are part of common-theme component.</li>
 	<li>Used semicolon instead of comma to terminate css statement</li>
 	<li>HTML encoded path of image is showing on product detail page, applied slightly modified patch from jira issue.(<a href="https://issues.apache.org/jira/browse/OFBIZ-9654">OFBIZ-9654</a>)</li>
 	<li>Stack trace on E-commerce Home page (<a href="https://issues.apache.org/jira/browse/OFBIZ-9652">OFBIZ-9652</a>) Updated common template path as now these common template moved to common-theme component.</li>
 	<li>Unable to create Customer (<a href="https://issues.apache.org/jira/browse/OFBIZ-9649">OFBIZ-9649</a>)</li>
</ul>

