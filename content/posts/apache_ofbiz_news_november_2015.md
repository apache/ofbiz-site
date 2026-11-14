---
layout: post
title: Apache OFBiz News - November 2015
date: '2015-12-05T13:05:15+00:00'
permalink: apache_ofbiz_news_november_2015
---
## Apache OFBiz News November 2015

This month we have some news from the marketing and promotion efforts, the next ApacheCon in Vancouver is being planned and we also have several bugfixes and improvements in our code base.

<!--more-->

## New Website and Marketing

Work is currently underway on the planning and development of a new project website. One of the things discussed was that potential new users are interested in knowing who is already using OFBiz. In order to highlight this we are planning to include a section with logos from companies that are using OFBiz.<p></p>
OFBiz Service Providers are encouraged to contact their customers to see if they are willing to have their logos displayed on our website.

## Apache OFBiz Youtube Channel

We are currently reactivating our  <a href="https://www.youtube.com/user/ofbiz">OFBiz Youtube</a> channel to help promote OFBiz and provide information to both current and potential new users or developers. It is planned to produce a set of basic introduction videos to help people get started with OFBiz.  We are currently collecting a list of topics to be covered in these videos.<p></p>
We are also looking for volunteers from the community to begin making OFBiz these based videos that could be published on our channel. If you are interested in helping in either of these areas then please check our  <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Youtube+Channel">wiki page</a> for details.

## ApacheCon Core NA 2016 in Vancouver

The next  <a href="http://events.linuxfoundation.org/events/apachecon-north-america">ApacheCon Core NA</a> will take place in Vancouver from 11th to 13th May 2016. As a project we have been very fortunate to have had full OFBiz tracks at both Apachecon EU and Apachecon NA in 2015 so are hoping that we can repeat this for 2016.<p></p>
In preparation for it we are now asking community members to help us put together an OFBiz track proposal.Anyone who is interested in presenting at Apachecon NA please complete the details in the table on our  <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apachecon+NA+2016">ApacheCon Core NA 2016 wiki page</a> that we can track the potential and actual submissions.

## New Features and Improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Improve the way default position and size lookup parameters are set ([OFBIZ-6710](https://issues.apache.org/jira/browse/OFBIZ-6710))
- Update SimpleContentViewHandler to return mime type on file extension and use inline for content-disposition ([OFBIZ-6702](https://issues.apache.org/jira/browse/OFBIZ-6702)). SimpleContentViewHandler will return mime type 'text/html' for all DataResource values without a specified mimeTypeId. Changing to DataResourceWorker.getMimeType will allow determining the mimeTypeId by file extension. Fixing the mime type will allow the browsers to display content inline if UtilHttp is updated as well. All unknown extensions will be set to octet-stream causing the browser to prompt for download. Uses a content-disposition-type property in requestHandler.properties to allow more flexibility for users (see UtilHttp.setContentDisposition() method). Beware "inline" is less secure. For this reason, Gareth forced the "dangerous" text/html mime type to application/octet-stream in SimpleContentViewHandler class. This to prevent possible static XSS attacks. See the Jira issue for more details.
- New feature to reclaim a user account using security questions ([OFBIZ-4983](https://issues.apache.org/jira/browse/OFBIZ-4983)). When a customer creates an account on the eCommerce site, he will also need to answer a security question. This security question then can be used by the user to reclaim his account in case he forgets his password. If the user correctly answers the required security question while reclaiming his account, his password will be sent through email notification. This part would work in the same way as the existing functionality of email password (forget password).
- Display GeoPoint with map in WebTools ([OFBIZ-6527](https://issues.apache.org/jira/browse/OFBIZ-6527)).
- Remove superfluous .properties extension from EntityUtilProperties requests ([OFBIZ-6719](https://issues.apache.org/jira/browse/OFBIZ-6719)). Many EntityUtilProperties requests had the .properties extension in the parameters for the resource, but this is not needed as it is stripped later on.
- Remove tenant data from the demo data set ([OFBIZ-5757](https://issues.apache.org/jira/browse/OFBIZ-5757)).
- LoginServices.userLogin causes stacktrace when username or password is incorrect ([OFBIZ-6721](https://issues.apache.org/jira/browse/OFBIZ-6721)). It should return FAILURE instead of error to avoid this.
- Remove superfluous comment from entity-eca.xsd ([OFBIZ-6724](https://issues.apache.org/jira/browse/OFBIZ-6724)).
- Updates commons collections from 3.2.1 to 4.1 ([OFBIZ-6748](https://issues.apache.org/jira/browse/OFBIZ-6748)).
- Added some UiLabels in French ([OFBIZ-6732](https://issues.apache.org/jira/browse/OFBIZ-6732)).
- Convert Party entites CRUD service from simple to entity-auto ([OFBIZ-5750](https://issues.apache.org/jira/browse/OFBIZ-5750)).
- Replace remaining occurrence of Open For Business with Apache OFBiz ([OFBIZ-6171](https://issues.apache.org/jira/browse/OFBIZ-6171)).
- Quote report should open in a new window ([OFBIZ-6107](https://issues.apache.org/jira/browse/OFBIZ-6107)).
- Layout improvement for showing cart properly on order entry page for bizznesstime theme ([OFBIZ-2995](https://issues.apache.org/jira/browse/OFBIZ-2995)).
- Add session tracking mode and make cookie secure ([OFBIZ-6655](https://issues.apache.org/jira/browse/OFBIZ-6655)).
- Replace EditProductAssoc ftl with widgets ([OFBIZ-6320](https://issues.apache.org/jira/browse/OFBIZ-6320)).
- Convert Survey entites CRUD service from simple to entity-auto ([OFBIZ-6744](https://issues.apache.org/jira/browse/OFBIZ-6744)).
- Convert Content entites CRUD service from simple to entity-auto ([OFBIZ-6745](https://issues.apache.org/jira/browse/OFBIZ-6745)).

## Bugfixes

Functional and technical bugfixes:

- ProductStore did not allow the default timezone to be set ([OFBIZ-2813](https://issues.apache.org/jira/browse/OFBIZ-2813)). The ProductStore has the defaultLocaleString and the defaultCurrencyUomId but does not have a defaultTimeZoneString. What happens when a store is selected (from e-commerce or the POS) is that it will look at the user for a lastTimeZone and if that is not set, it would simply revert to the TimeZone.getDefault() (the timezone based on the server). This is troubling when you may have an application server that is running in a completely different timezone than what is desired for the store.
- Form layered-modal is not respecting passed (default) width ([OFBIZ-6673](https://issues.apache.org/jira/browse/OFBIZ-6673))
- Possible stored XSS issue with Content ([OFBIZ-6669](https://issues.apache.org/jira/browse/OFBIZ-6669)).
- EcomSEO generates an error when used in multi-tenancy setup ([OFBIZ-6525](https://issues.apache.org/jira/browse/OFBIZ-6525)). When using the ecomseo application of the ecommerce component in a tenant the tenant entity couldn't be accessed and an error was returned.
- Require Inventory of Marketing Package Product can't be shipped ([OFBIZ-817](https://issues.apache.org/jira/browse/OFBIZ-817)).
- Project Manager throws error if project user is not assigned to every project ([OFBIZ-4206](https://issues.apache.org/jira/browse/OFBIZ-4206)). The project manager returns an error on the main page unless every user is added to every single project. It should return a list of just the projects the user is assigned to.
- Webtools Entity edition, the suggested date and time formats are not localised ([OFBIZ-6727](https://issues.apache.org/jira/browse/OFBIZ-6727))
- Cannot create more than one lead in the SFA component by same user ([OFBIZ-6703](https://issues.apache.org/jira/browse/OFBIZ-6703)). Replace createPartyRole service call with ensurePartyRole, avoiding duplicate primary key creation error.
- Best Selling Products section in main order page takes cancelled orders into account ([OFBIZ-6725](https://issues.apache.org/jira/browse/OFBIZ-6725)).
- sendCommEventAsEmail does not filter CommEventContentAssoc ([OFBIZ-6698](https://issues.apache.org/jira/browse/OFBIZ-6698)).
- Type-ahead regarding workeffort in AddCommEventWorkEffort throws an error ([OFBIZ-6683](https://issues.apache.org/jira/browse/OFBIZ-6683)). Corrected the lookup-target request for AddCommEventWorkEffort .
- Type-ahead regarding workeffort in AddQuoteWorkEffort ([OFBIZ-6681](https://issues.apache.org/jira/browse/OFBIZ-6681)). Corrected the lookup-target request for AddQuoteWorkEffort.
- Implemented ability to refund non-physical goods (e.g. services), includes
  - Getting error when returning service (non-physical) product ([OFBIZ-6728](https://issues.apache.org/jira/browse/OFBIZ-6728)).
  - Return invoice not generated for service (non-physical) product ([OFBIZ-6729](https://issues.apache.org/jira/browse/OFBIZ-6729)).
  - Return shipment created for non-physical product ([OFBIZ-6730](https://issues.apache.org/jira/browse/OFBIZ-6730)).
- Fixed table-layout="auto" FOP warning. Used table-layout="fixed" to fix the warning ([OFBIZ-6241](https://issues.apache.org/jira/browse/OFBIZ-6241)).
- The state list is not populated when trying to add a shipping address from the Quick Finalize Order screen ([OFBIZ-6741](https://issues.apache.org/jira/browse/OFBIZ-6741)).
- Missing userLogin error on party profile screen when 1st content is non public ([OFBIZ-6708](https://issues.apache.org/jira/browse/OFBIZ-6708)).
- When you add a party content the party profile screen does not refresh ([OFBIZ-6709](https://issues.apache.org/jira/browse/OFBIZ-6709)).
- Same Billing Address generates an error ([OFBIZ-6534](https://issues.apache.org/jira/browse/OFBIZ-6534)).
- Last categories section in e-commerce pages is broken ([OFBIZ-6742](https://issues.apache.org/jira/browse/OFBIZ-6742)).
- Can not display product category name in Unicode ([OFBIZ-6739](https://issues.apache.org/jira/browse/OFBIZ-6739)).
- Entity ECAs not triggered correctly when using Delegator.storeAll() method ([OFBIZ-3847](https://issues.apache.org/jira/browse/OFBIZ-3847)).
