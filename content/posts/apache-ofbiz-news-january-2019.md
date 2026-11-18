---
layout: post
title: Apache OFBiz News - January 2019
date: '2019-02-22T06:31:55+00:00'
permalink: apache-ofbiz-news-january-2019
---
## Apache OFBiz News January 2019

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about OFBiz chat room migration from HipChat to Slack, planning to move from SVN to GIT, along with&nbsp;our usual list of features and improvements. <br>

## OFBiz is now on Slack

OFBiz chat room is migrated to Slack from HipChat. To join the OFBiz chat room, please follow the steps below.

1.) Create a Slack account using ASF's invite link - [https://s.apache.org/slack-invite](https://s.apache.org/slack-invite)<br>2.) Join the #ofbiz channel - [https://s.apache.org/ofbiz-slack-channel](https://s.apache.org/ofbiz-slack-channel)

Please **do not** discuss OFBiz related topics in the #general channel.

Thanks, everyone who is involved in this effort.

## Moving from <span>Subversion (SVN)</span> to GIT

The community is planning to adopt Git version control system for source code management. We are hopeful, the use of Git would make things much easier for collaboration.<br>To get more details on this discussion, please refer [here](https://s.apache.org/svntogit).<br>

Thank&nbsp;you Hans Bakker for the initial proposal. Thanks so much, Taher and Michael for reviving this thread and sharing thoughtful insights.<br>Thanks, Jacques, Deepak Dixit, Julian, Nicolas, and everyone who actively participated in the discussion and shared your valuable inputs. Indeed, this will be an impactful change. <br>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Upgrade of Refactor ControlFilter ([OFBIZ-10449](https://issues.apache.org/jira/browse/OFBIZ-10449))
- Refactors boolean returns from methods in UtilHttp, ServiUtil, UtilValidate, TemporalExpression and ShoppingCart ([OFBIZ-10725](https://issues.apache.org/jira/browse/OFBIZ-10725))
- Upgrade of Groovy 2.4.13 to 2.4.16 ([OFBIZ-10762](https://issues.apache.org/jira/browse/OFBIZ-10762))
- Extracts verification of certificates in &quot;RequestHandler&quot; ([OFBIZ-10450](https://issues.apache.org/jira/browse/OFBIZ-10450))
- Simplifys &quot;entity.model.ModelField#EncryptMethod&quot; enum ([OFBIZ-10763](https://issues.apache.org/jira/browse/OFBIZ-10763))
- Refactors EntityCondition ([OFBIZ-10691](https://issues.apache.org/jira/browse/OFBIZ-10691))
- Sets Copyright to 2001-2019
- Updates Apache commons-fileupload to version 1.3-3 ([OFBIZ-10770](https://issues.apache.org/jira/browse/OFBIZ-10770))
- Replaces jQuery.bind() with jQuery.on() ([OFBIZ-10758](https://issues.apache.org/jira/browse/OFBIZ-10758))
- Sets &quot;ModelFieldType&quot; class members to private ([OFBIZ-10773](https://issues.apache.org/jira/browse/OFBIZ-10773))
- Removes unneeded code in &quot;entity&quot; component ([OFBIZ-10777](https://issues.apache.org/jira/browse/OFBIZ-10777))
- Upgrades jquery-validation plugin from 1.17.0 to 1.19.0 ([OFBIZ-10785](https://issues.apache.org/jira/browse/OFBIZ-10785))
- Upgrades jQuery 1.11.0 to jQuery 3.2.1 ([OFBIZ-9978](https://issues.apache.org/jira/browse/OFBIZ-9978))
- Updates &quot;convertUom&quot; service and given priority to &quot;UomConversionDated&quot; entity ([OFBIZ-10747](https://issues.apache.org/jira/browse/OFBIZ-10747))
- Replaces Inline js with External js in renderDateTimeField macro ([OFBIZ-9848](https://issues.apache.org/jira/browse/OFBIZ-9848))
- Replaces Inline js with External js in renderDateFindField macro ([OFBIZ-9850](https://issues.apache.org/jira/browse/OFBIZ-9850))
- Replaces Inline js with External js in renderFieldGroupOpen macro ([OFBIZ-9853](https://issues.apache.org/jira/browse/OFBIZ-9853))
- Replaces Inline js with External js in renderTextField macro ([OFBIZ-9844](https://issues.apache.org/jira/browse/OFBIZ-9844))
- Translates es-CL in AccountingUiLabels ([OFBIZ-10784](https://issues.apache.org/jira/browse/OFBIZ-10784))
- Adds translations es and es-CL ([OFBIZ-10815](https://issues.apache.org/jira/browse/OFBIZ-10815))
- Removes unneeded code in ObjectType ([OFBIZ-10771](https://issues.apache.org/jira/browse/OFBIZ-10771))
- Updates and cleans deprecated code after release 18.12 creation ([OFBIZ-10761](https://issues.apache.org/jira/browse/OFBIZ-10761))
- Adds session tracking mode and make cookie secure ([OFBIZ-6655](https://issues.apache.org/jira/browse/OFBIZ-6655))
- Cleans EntitySync push and pull functionalities ([OFBIZ-10818](https://issues.apache.org/jira/browse/OFBIZ-10818))
- Provides funcionallity: Navigate from a domain to another with automated signed in authentication ([OFBIZ-10307](https://issues.apache.org/jira/browse/OFBIZ-10307))
- Upgrades Apache Tika to 1.20 (CVE-2018-8017/CVE-2018-17197)
- Adds: Unit test case for service - CustRequestPermissionCheck ([OFBIZ-8958](https://issues.apache.org/jira/browse/OFBIZ-8958))
- Adds: Unit test case for service - createPayment ([OFBIZ-9083](https://issues.apache.org/jira/browse/OFBIZ-9083))
- Adds: Unit test case for service - updatePaymentGatewayConfig ([OFBIZ-9115](https://issues.apache.org/jira/browse/OFBIZ-9115))

### Plugins

- Replaces jQuery.bind() with jQuery.on() ([OFBIZ-10758](https://issues.apache.org/jira/browse/OFBIZ-10758))
- Updates multifex theme as per new markup ([OFBIZ-10118](https://issues.apache.org/jira/browse/OFBIZ-10118))
- Provides UI improvements on splitship page of ecommerce ([OFBIZ-10730](https://issues.apache.org/jira/browse/OFBIZ-10730))
- Improves ecommerce main-decorator ([OFBIZ-10790](https://issues.apache.org/jira/browse/OFBIZ-10790))
- Uses Bootstrap to style e-commerces promotion screen ([OFBIZ-10793](https://issues.apache.org/jira/browse/OFBIZ-10793))
- Replaces Inline js with External js in renderDateFindField macro ([OFBIZ-9850](https://issues.apache.org/jira/browse/OFBIZ-9850))
- Adds session tracking mode and make cookie secure ([OFBIZ-6655](https://issues.apache.org/jira/browse/OFBIZ-6655))
- Provides funcionallity: Navigate from a domain to another with automated signed in authentication ([OFBIZ-10307](https://issues.apache.org/jira/browse/OFBIZ-10307))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: Function parseBigDecimalForEntity is in wrong location ([OFBIZ-10689](https://issues.apache.org/jira/browse/OFBIZ-10689))
- Fixes: When using Select2 for multiple selects the field is too narrow in &quot;no results&quot; case ([OFBIZ-10682](https://issues.apache.org/jira/browse/OFBIZ-10682))
- Fixes: Wrong German translation in PartyUiLabels ([OFBIZ-10786](https://issues.apache.org/jira/browse/OFBIZ-10786))
- Fixes: &quot;EntityOperator#getId()&quot; is not used in the framework ([OFBIZ-10607](https://issues.apache.org/jira/browse/OFBIZ-10607))
- Fixes: ObjectType:doRealCompare returns null instead of a boolean in few places ([OFBIZ-10812](https://issues.apache.org/jira/browse/OFBIZ-10812))
- Fixes: Impossible secure and autologin cookie names when mountpoint contains a slash inside its name ([OFBIZ-10766](https://issues.apache.org/jira/browse/OFBIZ-10766))
- Corrects behaviour of Autologin cookies ([OFBIZ-10635](https://issues.apache.org/jira/browse/OFBIZ-10635))
- Fixes: In packing, only use reservations with stock on hand ([OFBIZ-9677](https://issues.apache.org/jira/browse/OFBIZ-9677))
- Fixes: Unable to add additional product images from catalog ([OFBIZ-10673](https://issues.apache.org/jira/browse/OFBIZ-10673))
- Fixes: Failed registration for virtual hosts with similar mount points ([OFBIZ-10765](https://issues.apache.org/jira/browse/OFBIZ-10765))
- Fixes: Page dropdown list on categorydetail page broken ([OFBIZ-10787](https://issues.apache.org/jira/browse/OFBIZ-10787))
- Fixes: Invoice date is not displayed on findInvoice screen ([OFBIZ-10620](https://issues.apache.org/jira/browse/OFBIZ-10620))
- Fixes: Product tags section displays &quot;Update&quot; button, despite of having no results ([OFBIZ-9642](https://issues.apache.org/jira/browse/OFBIZ-9642))
- Fixes: Errors and warnings in webtools ArtifactInfo ([OFBIZ-10760](https://issues.apache.org/jira/browse/OFBIZ-10760))
- Fixes: Users name is displayed on ecommerce even after user logs out ([OFBIZ-10666](https://issues.apache.org/jira/browse/OFBIZ-10666))
- Fixes: Blank page is displayed on ecommerce ([OFBIZ-10741](https://issues.apache.org/jira/browse/OFBIZ-10741))
- Fixes: PartyId misses in EditEftAccount.ftl (party) when you create an EFT account from the quick finalize page ([OFBIZ-10680](https://issues.apache.org/jira/browse/OFBIZ-10680))
- Fixes: ModelForm.java is using an incorrect parameter name for sorting if a form extends from another form
- Fixes: Disable widget verbose property on context doesn't works for rendering ftl template ([r1852533](http://mail-archives.apache.org/mod_mbox/ofbiz-commits/201901.mbox/%3C20190130162025.629843A0100@svn01-us-west.apache.org%3E))

### Plugins

- Fixes: Themes can't be changed in webpos ([OFBIZ-10767](https://issues.apache.org/jira/browse/OFBIZ-10767))
- Fixes: Page dropdown list on categorydetail page broken ([OFBIZ-10787](https://issues.apache.org/jira/browse/OFBIZ-10787))
- Fixes: List Request page seems distorted of ecommerce component ([OFBIZ-10621](https://issues.apache.org/jira/browse/OFBIZ-10621))
