---
layout: post
title: 'Apache OFBiz News - August 2017 '
date: '2017-09-18T10:09:40+00:00'
permalink: apache-ofbiz-news-august-2017
---
## Apache OFBiz News August 2017

Welcome to our regular monthly round-up of OFBiz news. This month we have news about a new documentation effort to produce a Business Process Reference Guide, our new look OFBiz project website goes live, we discuss improving the look and feel of our blog, and we welcome two new committers.

<!--more-->

## New OFBiz Website

In previous updates, we have mentioned the work happening to update our existing website. It has been in progress for a while but during August we are proud to announce that our new OFBiz website went live. The new site includes our updated logo and has a totally new look and feel that we hope our community and potential OFBiz users will like.

<p></p>

A key focus was on making it easy for developers and non-developers to get started as well as providing links to key information. Since it went live, we have been implementing minor changes and feedback from the community and has been very positive. We will be looking to add additional pages such as an OFBiz Service Providers list and more FAQs in the future.

<p></p>

Thanks very much to everyone that contributed to the website in any way and especially Kenneth Paskett for his graphic design, Deepak Dixit and the Apache Infrastructure team for their help in moving the site live.

## Improving our Blog Template

Following on from the work done on creating a new logo and website, this month the community discussed <a href=" https://s.apache.org/UgFW" target="_blank" rel="noopener"> improving our blog template</a>

<p></p>

Kenneth Paskett who did the graphic work for the logo and the new website has come up with a <a href="https://s.apache.org/GCFM" target="_blank" rel="noopener"> draft idea for a layout</a> so please feel free to join the discussion and tell us what you think.

## OFBiz Business Process Reference Guide

Another discussion that came up this month was about creating an <a href="https://s.apache.org/Hf2k" target="_blank" rel="noopener"> OFBiz Business Process Reference Guide.</a>
Community feedback was very positive and some work has already started. The aim is to provide a process overview for each area including activity diagrams and also incorporate user stories, use cases and test cases.

<p></p>

An example of the work for the Sales Order Management can be found at the links below:

- <a href="https://s.apache.org/BJvi" target="_blank" rel="noopener">Sales Order Management Process Overview</a>
- <a href="https://s.apache.org/RV8K" target="_blank" rel="noopener">Sales Order Management User Stories, Use Cases and Test Cases</a>

The Parent page for all these documents can be found<a href="https://cwiki.apache.org/confluence/x/1gm8Ag" target="_blank" rel="noopener"> here</a>.

<p></p>

Thanks very much to contributors Shivangi Tanwar, Sonal Patwari, Priya Sharma, Humera Khan, Renuka Srishti, Jagpreet Kaur and also Pranay Pandey for working on this important documentation effort. We hope that this set of documentation will greatly help potential OFBiz users and evaluators.

## New OFBiz Committers

During August the Project Management Committee (PMC) invited two new Committers, Rishi Solanki and Akash Jain. Congratulations to both Rishi and Akash and thank you for all your contributions to the project.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Replace fields with id-ne, id-long-ne and id-vlong-ne by id, id-long and id-vlong respectively which are not primary keys ([OFBIZ-9355](https://issues.apache.org/jira/browse/OFBIZ-9355))
- Remove unnecessary field types, also removed -ne field references from code. ([OFBIZ-9351](https://issues.apache.org/jira/browse/OFBIZ-9351))
- Remove the never implemented deleteParty (pre Apache era) ([OFBIZ-9556](https://issues.apache.org/jira/browse/OFBIZ-9556))
- Refactor EntityListIterator ([OFBIZ-9549](https://issues.apache.org/jira/browse/OFBIZ-9549))
- OEM Party Id field should have lookup on Edit Product page ([OFBIZ-9368](https://issues.apache.org/jira/browse/OFBIZ-9368))
  - Removed manufacturerPartyId from Product entity
  - Removed its relations from view entities namely GoodIdentificationAndProduct
  - Removed it from forms EditProduct (Product), SearchInventoryItemsParams (EditFacilityInventoryItems screen in Facility) and SearchInventoryItemsDetailsParams (ViewFacilityInventoryItemsDetails screen in Facility)
- Bugfixes found by [FindBugs](http://findbugs.sourceforge.net/)
  - Package org.apache.ofbiz.base.lang ([OFBIZ-9564](https://issues.apache.org/jira/browse/OFBIZ-9564)) Implemented method hashCode() because method equals() was implemented, Changed Exception to RuntimeException because no exception was thrown and the only occurring exception could be a runtimeexception
  - Package org.apache.ofbiz.base.lang.test ([OFBIZ-9565](https://issues.apache.org/jira/browse/OFBIZ-9565)) Fixes some diamond operators
  - Package org.apache.ofbiz.base.concurrent ([OFBIZ-9562](https://issues.apache.org/jira/browse/OFBIZ-9562)) Fixes some diamond operators, Implementes equals method to fix potential problems, Implementes hashCode method because equals method was implemented, Implemented timeDiff method to keep the code DRY
  - Package org.apache.ofbiz.base.container ([OFBIZ-9563](https://issues.apache.org/jira/browse/OFBIZ-9563)) Fixes some diamond operators, deleted multiple unnecessary nullchecks, added nullcheck, deleted multiple unnecessary else-blocks
  - Package org.apache.ofbiz.base.config ([OFBIZ-9566](https://issues.apache.org/jira/browse/OFBIZ-9566)) The protected fields were set to private since the class is not extended anywhere. If they need to be accessed in the future, getter that return an unmodifiable version should be implemented (Collections.unmodifiableXXX). Refactor: Uses multi exceptions catch (explicitly to not catch, hence somehow swallow, RuntimeException), Uses return instead of else when appropriate, Extracts a getLoader() handy method, Removes a useless thrown exception in invalidateDocument(), Removes a useless Document cast
  - Package org.apache.ofbiz.base.metrics ([OFBIZ-9567](https://issues.apache.org/jira/browse/OFBIZ-9567)) Changes a division with two long variables whose result was casted into a double, Now it performs a proper double division
  - Package org.apache.ofbiz.accounting.thirdparty.gosoftware. ([OFBIZ-9486](https://issues.apache.org/jira/browse/OFBIZ-9486))
  - Package org.apache.ofbiz.accounting.finaccount ([OFBIZ-9504](https://issues.apache.org/jira/browse/OFBIZ-9504)) FinAccountPaymentServices.finAccountPreAuth(DispatchContext, Map) A value is checked here to see whether it is null, but this value can't be null because it was previously dereferenced and if it were null a null pointer exception would have occurred at the earlier dereference.
  - Package org.apache.ofbiz.accounting.ledger. ([OFBIZ-9505](https://issues.apache.org/jira/browse/OFBIZ-9505))
  - Packages org.apache.ofbiz.accounting.period and org.apache.ofbiz.accounting.tax. ([OFBIZ-9527](https://issues.apache.org/jira/browse/OFBIZ-9527))
  - Package org.apache.ofbiz.base.component. ([OFBIZ-9560](https://issues.apache.org/jira/browse/OFBIZ-9560))
- Manage deprecated service in the ModelService, When removing a service a new XML element &lt;deprecated&gt; can be added ([OFBIZ-9558](https://issues.apache.org/jira/browse/OFBIZ-9558))
- Connect OFBiz to a read only database, Add a DAO helper class to use a datasource as readonly. ([OFBIZ-6401](https://issues.apache.org/jira/browse/OFBIZ-6401))
- Deprecated Methods
  - OrderChangeHelper ([OFBIZ-9570](https://issues.apache.org/jira/browse/OFBIZ-9570)) The methods abortOrderProcessing and releaseInitialOrderHold have been deprecated since the workflow engine has been replaced by the ECA.
- Replace unnecessary local variable ZERO with BigDecimal.ZERO. ([OFBIZ-9529](https://issues.apache.org/jira/browse/OFBIZ-9529))
- ServiceSemaphore: Check for Transaction before suspending it in dbWrite(...) ([OFBIZ-9401](https://issues.apache.org/jira/browse/OFBIZ-9401))
- Replace BigDecimal.ROUND\_\* by RoundingMode.\* ([OFBIZ-9571](https://issues.apache.org/jira/browse/OFBIZ-9571))
- GenericServiceJob.failed(Throwable) avoid logging stacktraces for non technical service semaphore exceptions ([OFBIZ-9400](https://issues.apache.org/jira/browse/OFBIZ-9400))
- New UtilMisc method collectionToString(...) safely building a String with the given collection and delimiter ([OFBIZ-9397](https://issues.apache.org/jira/browse/OFBIZ-9397))
- Required field indicator (\*) is missing on some forms ([OFBIZ-9579](https://issues.apache.org/jira/browse/OFBIZ-9579))
- Required Field Indicator (\*) / Form Validation is missing on Create New Data Source Form ([OFBIZ-7462](https://issues.apache.org/jira/browse/OFBIZ-7462))
- Check for white spaces around the name of a form field when updating a form ([OFBIZ-9306](https://issues.apache.org/jira/browse/OFBIZ-9306))
- Enable/Disable JMS via configuration ([OFBIZ-4454](https://issues.apache.org/jira/browse/OFBIZ-4454))
- Required Field Indicator (\*) / Form Validation is missing on Create New Data Source Form ([OFBIZ-7462](https://issues.apache.org/jira/browse/OFBIZ-7462))
- Required field indicator (\*) is missing on create contact list form ([OFBIZ-9587](https://issues.apache.org/jira/browse/OFBIZ-9587))
- Client side validation is missing in quick create accounting transaction process ([OFBIZ-9583](https://issues.apache.org/jira/browse/OFBIZ-9583))
- EmailServices.sendMailFromScreen improved to take multiple attachments with appropriate type along with several email fixes. ([OFBIZ-9395](https://issues.apache.org/jira/browse/OFBIZ-9395))
  - it enables to add BCC adress(es) to service OrderServices.sendOrderNotificationScreens to oversteer ProductStoreEmailSetting of BCC the same was as for CC.
  - a method UtilValidate.isEmailList(String) is added to check a comma separated list of email addresses, used for example to check the String passed to the new BCC field for an Order-Notification.
  - there are improvements in EmailServices.sendMailFromScreen. The attachment type of MailAttachments is now not only .pdf but depends on the specific file. This has not been the case before - the mime type was always hard coded as .pdf. The same goes for the bodyPart content-type which is now set to the passed content type or the default text/html type. Before this was also always set to text/html. Additionally, an attachment that has the mime-type text/plain is not rendered with the fop-renderer anymore but with a simple text-renderer. Therefore it is possible to send an CSV file as attachment now.
- Use auto-attributes in ProductFeatureCategory CRUD services ([OFBIZ-9608](https://issues.apache.org/jira/browse/OFBIZ-9608))
- Add explicit UEL (unified expression language) function to resolve a label, instead of calling a static worker via groovy ([OFBIZ-9617](https://issues.apache.org/jira/browse/OFBIZ-9617))
- Manage life span of marketing related entites ([OFBIZ-9550](https://issues.apache.org/jira/browse/OFBIZ-9550)) Add life span attributes (fromDate, thruDate) on entities : MarketingCampaignPrice, MarketingCampaignPromo, MarketingCampaignRole Complete related CRUD service with align service name on the best pratice for consistency. The previous service name has been set as deprecated :
  - addPromoToMarketingCampaign replace by createMarketingCampaignPromo
  - removePromoFromMarketingCampaign replace by deleteMarketingCampaignPromo
  - addPriceRuleToMarketingCampaign replace by createMarketingCampaignPrice
  - removePriceRuleFromMarketingCampaign replace by deleteMarketingCampaignPrice
- common-theme upload ([OFBIZ-9138](https://issues.apache.org/jira/browse/OFBIZ-9138)) Migrate themes to common-theme component.
- Move all data in applications to the datamodel component. ([OFBIZ-9501](https://issues.apache.org/jira/browse/OFBIZ-9501))(content, workeffort, product)
- User should be notified with success message on adding note for party in party component. ([OFBIZ-9538](https://issues.apache.org/jira/browse/OFBIZ-9538))
- Wrong success message after creating lead in sfa component. ([OFBIZ-9518](https://issues.apache.org/jira/browse/OFBIZ-9518)).
- Use from-field pattern instead of value=dollor pattern in 'set' element Apply slightly modified patch from jira issue, fixed some typo ([OFBIZ-9607](https://issues.apache.org/jira/browse/OFBIZ-9607))
- When creating New Lead, Lead Source should be associated with the Lead. ([OFBIZ-9588](https://issues.apache.org/jira/browse/OFBIZ-9588))
- Refactor OFBiz containers and remove StartupCommandToArgsAdapter ([OFBIZ-9441](https://issues.apache.org/jira/browse/OFBIZ-9441))
  - Fully refactor the EntityDataLoadContainer
  - Fully refactor the TestRunContainer
  - Remove most old documentation and commented out code where applicable
  - Delete the StartupCommandToArgsAdapter as it is no longer needed
  - Create a new feature in which OFBiz by default fails if any data file fails to load. This can be overridden by passing a flag called "continue-on-failure" e.g. ./gradlew "ofbiz --load-data continue-on-failure"
  - Add a new property to --test called "loglevel" (old code but working properly)
  - Add many new properties to the --load-data command including repair-columns, try-inserts, maintain-txs, etc
  - Update the documentation output of ./gradlew "ofbiz --help" to incorporate the new mentioned properties
  - Refactor README.md to incorporate the changes to the gradle commands for both "-load-data" and "-test" properties. Also remove the gradle GUI documentation as it is now deprecated.
  - Also refactor README.md in other locations to cleanup and make it more consistent. This icludes moving long notes into new sections and reducing the verbosity of the security header. Furthermore, created a new header called Miscellaneous documentation to house the newly created sections

### Plugins

- Replace fields with id-ne, id-long-ne and id-vlong-ne by id, id-long and id-vlong respectively which are not primary keys ([OFBIZ-9355](https://issues.apache.org/jira/browse/OFBIZ-9355))
- Removed ne references from BirtUtil class file ([OFBIZ-9351](https://issues.apache.org/jira/browse/OFBIZ-9351))
- OEM Party Id field should have lookup on Edit Product page ([OFBIZ-9368](https://issues.apache.org/jira/browse/OFBIZ-9368))
- Removed duplicate field type entry from BirtUtil class file.
- Change all &lt;set&gt; screen and script groovy that call widget.properties values replaced by call to modelTheme ([OFBIZ-9138](https://issues.apache.org/jira/browse/OFBIZ-9138))
- Use from-field pattern instead of value=dollor pattern in 'set' element Apply slightly modified patch from jira issue, fixed some typo ([OFBIZ-9607](https://issues.apache.org/jira/browse/OFBIZ-9607))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Bug SQL Count Distinct command in GenericDAO.java ([OFBIZ-5701](https://issues.apache.org/jira/browse/OFBIZ-5701))
- Connect OFBiz to a read only database, Escape null pointer exception stack trace when the helper return no value ([OFBIZ-6401](https://issues.apache.org/jira/browse/OFBIZ-6401))
- Bugfixes found by [FindBugs](http://findbugs.sourceforge.net/)
  - Package org.apache.ofbiz.accounting.payment ([OFBIZ-9529](https://issues.apache.org/jira/browse/OFBIZ-9529))
- Missing fieldInfo when call constructor for ModelFormField Password, File and Lookup ([OFBIZ-9577](https://issues.apache.org/jira/browse/OFBIZ-9577))
- Collection added to itself ([OFBIZ-9578](https://issues.apache.org/jira/browse/OFBIZ-9578))
- LabelManager doesn't search labels in .groovy files ([OFBIZ-8153](https://issues.apache.org/jira/browse/OFBIZ-8153))
- Ecommerce login/logout don't work properly for trunk and stable ([OFBIZ-9240](https://issues.apache.org/jira/browse/OFBIZ-9240)) To fix this problem the code which copies all the attribute from parent request to redirect request was removed because this thing is already taken care of in the RequestHandler.
- Consistency and Readability improvements
  - for view-map tag ([OFBIZ-9110](https://issues.apache.org/jira/browse/OFBIZ-9110)) Consistency on the attribute order for view-map element as : name, type, page
  - for make-value tag ([OFBIZ-8986](https://issues.apache.org/jira/browse/OFBIZ-8986)) Consistency on the attribute order for make-value element as : entity-name, value-field
- clean marketing-entitymodel.xml file with remove all field empty body xml ([OFBIZ-9550](https://issues.apache.org/jira/browse/OFBIZ-9550))
- clean (second pass) marketing-entitymodel.xml file to realign correctly the file format ([OFBIZ-9550](https://issues.apache.org/jira/browse/OFBIZ-9550))
- MimeType displayed in HTML encoded pattern ([OFBIZ-9621](https://issues.apache.org/jira/browse/OFBIZ-9621))
- Correct all Theme.xml file fo the theme definition with the good xmlns ([OFBIZ-9138](https://issues.apache.org/jira/browse/OFBIZ-9138))
- Updated deprecated element type set mixed as true in services.xsd as we are using it in mixed mode. Also moved deprecated sequence after namespace.Found this issue while reading log, this will fix those warnings.
- Warning related to duplicate type assignment for widget attribute in theme.xsd file
- Removed unused attribute sequenceId from property element, also fix position value from topLeft to top-left as per dtd
- Logo image was missing in tomahawk theme.
- Removed the visualThemeSetId for common theme. Now common theme will be display on backend visual theme popup. ([OFBIZ-9138](https://issues.apache.org/jira/browse/OFBIZ-9138))
- NullPointerException when calling EntityQuery#getFieldList if distinct is not explicitly set([OFBIZ-9624](https://issues.apache.org/jira/browse/OFBIZ-9624))
- Correct library ftl call to render the email body, add possibility to call the ThemeFactory.resolveTheme() with empty request if the visualTheme normaly present on the service context isn't found, so we return the default theme define in general.properties ([OFBIZ-9138](https://issues.apache.org/jira/browse/OFBIZ-9138))
- Lead Profile URL not working properly in SFA. ([OFBIZ-9512](https://issues.apache.org/jira/browse/OFBIZ-9512))
- Improvements in LabelReferences class ([OFBIZ-9623](https://issues.apache.org/jira/browse/OFBIZ-9623))
- LabelManager doesn't search labels in all elements in xml ([OFBIZ-9606](https://issues.apache.org/jira/browse/OFBIZ-9606)) Currently, label manager for xml search only for fail-property elements in xml files, it should also search for the property-to-field, default-message element in xml files.
- Updated images component reference path, as images component were removed and now these files are part of common-theme componnet.
- Rename the URL for gradle tab-completion to the correct official one
- Unable to create Customer ([OFBIZ-9649](https://issues.apache.org/jira/browse/OFBIZ-9649))
- Groovy MissingPropertyException related to theme.([OFBIZ-9657](https://issues.apache.org/jira/browse/OFBIZ-9657))
- Party Communication Screen is broken ([OFBIZ-9670](https://issues.apache.org/jira/browse/OFBIZ-9670)). Issue was due to missing closing quotes in from-field attribute of set field tag.
- Typo introduced in r#1806326 ([OFBIZ-9607](https://issues.apache.org/jira/browse/OFBIZ-9607))
- Jgrowl lost configuration with common-theme ([OFBIZ-9138](https://issues.apache.org/jira/browse/OFBIZ-9138))
- Lookup property showDescription not present in common-theme ([OFBIZ-9138)](https://issues.apache.org/jira/browse/OFBIZ-9138)
- HtmlFormMacroLibary.ftl contains direct call to widget.properties ([OFBIZ-9138](https://issues.apache.org/jira/browse/OFBIZ-9138)) Instead of using the properties on the current theme, some ftl macro present in the file HtmlFormMacroLibary.ftl used a direct call to widget.properties.

### Plugins

- Consistency and Readability improvements
  - for view-map tag ([OFBIZ-9110](https://issues.apache.org/jira/browse/OFBIZ-9110)) Consistency on the attribute order for view-map element as : name, type, page
  - for make-value tag ([OFBIZ-8986](https://issues.apache.org/jira/browse/OFBIZ-8986)) Consistency on the attribute order for make-value element as : entity-name, value-field
- Correct library ftl call to render the email body ([OFBIZ-9138](https://issues.apache.org/jira/browse/OFBIZ-9138)) add possibility to call the ThemeFactory.resolveTheme() with empty request if the visualTheme normaly present on the service context isn't found, so we return the default theme defined in general.properties
- Updated images component reference path, as we removed images component and now these files are part of common-theme component.
- Used semicolon instead of comma to terminate css statement
- HTML encoded path of image is showing on product detail page, applied slightly modified patch from jira issue.([OFBIZ-9654](https://issues.apache.org/jira/browse/OFBIZ-9654))
- Stack trace on E-commerce Home page ([OFBIZ-9652](https://issues.apache.org/jira/browse/OFBIZ-9652)) Updated common template path as now these common template moved to common-theme component.
- Unable to create Customer ([OFBIZ-9649](https://issues.apache.org/jira/browse/OFBIZ-9649))
