---
layout: post
title: Apache OFBiz News - January 2019
date: '2019-02-22T06:31:55+00:00'
permalink: apache-ofbiz-news-january-2019
---
<h2>Apache OFBiz News January 2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have more news about OFBiz chat room migration from HipChat to Slack, planning to move from SVN to GIT, along with&nbsp;our usual list of features and improvements. <br /></p> 
  <h2>OFBiz is now on Slack</h2> 
  <p>OFBiz chat room is migrated to Slack from HipChat. To join the OFBiz chat room, please follow the steps below.</p> 
  <p>1.) Create a Slack account using ASF's invite link - <a href="https://s.apache.org/slack-invite">https://s.apache.org/slack-invite</a><br />2.) Join the #ofbiz channel - <a href="https://s.apache.org/ofbiz-slack-channel">https://s.apache.org/ofbiz-slack-channel</a></p> 
  <p>Please <strong>do not</strong> discuss OFBiz related topics in the #general channel.</p> 
  <p>Thanks, everyone who is involved in this effort.</p> 
  <h2>Moving from <span>Subversion (SVN)</span> to GIT</h2> 
  <p>The community is planning to adopt Git version control system for source code management. We are hopeful, the use of Git would make things much easier for collaboration.<br />To get more details on this discussion, please refer <a href="https://s.apache.org/svntogit">here</a>.<br /></p> 
  <p>Thank&nbsp;you Hans Bakker for the initial proposal. Thanks so much, Taher and Michael for reviving this thread and sharing thoughtful insights.<br />Thanks, Jacques, Deepak Dixit, Julian, Nicolas, and everyone who actively participated in the discussion and shared your valuable inputs. Indeed, this will be an impactful change. <br /></p> 
  <h2>New features and improvements</h2>Functional enhancements and improvements as well as updates of <g class="gr_ gr_127 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="127" data-gr-id="127">third party</g> libraries and source code refactoring:
  <h3>Framework</h3> 
  <ul> 
    <li>Upgrade of Refactor ControlFilter (<a href="https://issues.apache.org/jira/browse/OFBIZ-10449">OFBIZ-10449</a>)</li> 
    <li>Refactors boolean returns from methods in UtilHttp, ServiUtil, UtilValidate, TemporalExpression and ShoppingCart (<a href="https://issues.apache.org/jira/browse/OFBIZ-10725">OFBIZ-10725</a>)</li> 
    <li>Upgrade of Groovy 2.4.13 to 2.4.16 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10762">OFBIZ-10762</a>)</li> 
    <li>Extracts verification of certificates in &quot;RequestHandler&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-10450">OFBIZ-10450</a>)</li> 
    <li><g class="gr_ gr_106 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="106" data-gr-id="106">Simplifys</g> &quot;entity.model.ModelField#EncryptMethod&quot; enum (<a href="https://issues.apache.org/jira/browse/OFBIZ-10763">OFBIZ-10763</a>)</li> 
    <li>Refactors EntityCondition (<a href="https://issues.apache.org/jira/browse/OFBIZ-10691">OFBIZ-10691</a>)</li> 
    <li>Sets Copyright to 2001-2019</li> 
    <li>Updates Apache commons-<g class="gr_ gr_107 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="107" data-gr-id="107">fileupload</g> to version 1.3-3 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10770">OFBIZ-10770</a>)</li> 
    <li>Replaces jQuery.bind() with jQuery.on() (<a href="https://issues.apache.org/jira/browse/OFBIZ-10758">OFBIZ-10758</a>)</li> 
    <li>Sets &quot;ModelFieldType&quot; class members to private (<a href="https://issues.apache.org/jira/browse/OFBIZ-10773">OFBIZ-10773</a>)</li> 
    <li>Removes unneeded code in &quot;entity&quot; component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10777">OFBIZ-10777</a>)</li> 
    <li>Upgrades jquery-validation plugin from 1.17.0 to 1.19.0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10785">OFBIZ-10785</a>)</li> 
    <li>Upgrades jQuery 1.11.0 to jQuery 3.2.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9978">OFBIZ-9978</a>)</li> 
    <li>Updates &quot;<g class="gr_ gr_108 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="108" data-gr-id="108">convertUom</g>&quot; service and given priority to &quot;UomConversionDated&quot; entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-10747">OFBIZ-10747</a>)</li> 
    <li>Replaces Inline js with External js in renderDateTimeField macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-9848">OFBIZ-9848</a>)</li> 
    <li>Replaces Inline js with External js in renderDateFindField macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-9850">OFBIZ-9850</a>)</li> 
    <li>Replaces Inline js with External js in renderFieldGroupOpen macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-9853">OFBIZ-9853</a>)</li> 
    <li>Replaces Inline js with External js in renderTextField macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-9844">OFBIZ-9844</a>)</li> 
    <li>Translates es-CL in AccountingUiLabels (<a href="https://issues.apache.org/jira/browse/OFBIZ-10784">OFBIZ-10784</a>)</li> 
    <li>Adds translations es and es-CL (<a href="https://issues.apache.org/jira/browse/OFBIZ-10815">OFBIZ-10815</a>)</li> 
    <li>Removes unneeded code in ObjectType (<a href="https://issues.apache.org/jira/browse/OFBIZ-10771">OFBIZ-10771</a>)</li> 
    <li>Updates and cleans deprecated code after release 18.12 creation (<a href="https://issues.apache.org/jira/browse/OFBIZ-10761">OFBIZ-10761</a>)</li> 
    <li>Adds session tracking mode and make cookie secure (<a href="https://issues.apache.org/jira/browse/OFBIZ-6655">OFBIZ-6655</a>)</li> 
    <li>Cleans EntitySync push and pull functionalities (<a href="https://issues.apache.org/jira/browse/OFBIZ-10818">OFBIZ-10818</a>)</li> 
    <li>Provides <g class="gr_ gr_109 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="109" data-gr-id="109">funcionallity</g>: Navigate from a domain to another with automated signed in authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-10307">OFBIZ-10307</a>)</li> 
    <li>Upgrades Apache Tika to 1.20 (CVE-2018-8017/CVE-2018-17197)</li> 
    <li>Adds: Unit test case for service - CustRequestPermissionCheck (<a href="https://issues.apache.org/jira/browse/OFBIZ-8958">OFBIZ-8958</a>)</li> 
    <li>Adds: Unit test case for service - <g class="gr_ gr_110 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="110" data-gr-id="110">createPayment</g> (<a href="https://issues.apache.org/jira/browse/OFBIZ-9083">OFBIZ-9083</a>)</li> 
    <li>Adds: Unit test case for service - updatePaymentGatewayConfig (<a href="https://issues.apache.org/jira/browse/OFBIZ-9115">OFBIZ-9115</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Replaces jQuery.bind() with jQuery.on() (<a href="https://issues.apache.org/jira/browse/OFBIZ-10758">OFBIZ-10758</a>)</li> 
    <li>Updates <g class="gr_ gr_111 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="111" data-gr-id="111">multifex</g> theme as per new markup (<a href="https://issues.apache.org/jira/browse/OFBIZ-10118">OFBIZ-10118</a>)</li> 
    <li>Provides UI improvements on <g class="gr_ gr_112 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="112" data-gr-id="112">splitship</g> page of <g class="gr_ gr_113 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="113" data-gr-id="113">ecommerce</g> (<a href="https://issues.apache.org/jira/browse/OFBIZ-10730">OFBIZ-10730</a>)</li> 
    <li>Improves <g class="gr_ gr_114 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="114" data-gr-id="114">ecommerce</g> main-decorator (<a href="https://issues.apache.org/jira/browse/OFBIZ-10790">OFBIZ-10790</a>)</li> 
    <li>Uses Bootstrap to style <g class="gr_ gr_105 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del" id="105" data-gr-id="105">e-commerces</g> promotion screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-10793">OFBIZ-10793</a>)</li> 
    <li>Replaces Inline js with External js in renderDateFindField macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-9850">OFBIZ-9850</a>)</li> 
    <li>Adds session tracking mode and make cookie secure (<a href="https://issues.apache.org/jira/browse/OFBIZ-6655">OFBIZ-6655</a>)</li> 
    <li>Provides <g class="gr_ gr_115 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="115" data-gr-id="115">funcionallity</g>: Navigate from a domain to another with automated signed in authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-10307">OFBIZ-10307</a>)</li> 
  </ul> 
  <h2>Bugfixes</h2>Functional and technical bugfixes:
  <h3>Framework</h3> 
  <ul> 
    <li>Fixes: Function parseBigDecimalForEntity is in wrong location (<a href="https://issues.apache.org/jira/browse/OFBIZ-10689">OFBIZ-10689</a>)</li> 
    <li>Fixes: When using Select2 for multiple selects the field is too narrow in &quot;no results&quot; case (<a href="https://issues.apache.org/jira/browse/OFBIZ-10682">OFBIZ-10682</a>)</li> 
    <li>Fixes: Wrong German translation in <g class="gr_ gr_116 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="116" data-gr-id="116">PartyUiLabels</g> (<a href="https://issues.apache.org/jira/browse/OFBIZ-10786">OFBIZ-10786</a>)</li> 
    <li>Fixes: &quot;EntityOperator#getId()&quot; is not used in the framework (<a href="https://issues.apache.org/jira/browse/OFBIZ-10607">OFBIZ-10607</a>)</li> 
    <li>Fixes: ObjectType:doRealCompare returns null instead of a boolean in few places (<a href="https://issues.apache.org/jira/browse/OFBIZ-10812">OFBIZ-10812</a>)</li> 
    <li>Fixes: Impossible secure and autologin cookie names when <g class="gr_ gr_117 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="117" data-gr-id="117">mountpoint</g> contains a slash inside its name (<a href="https://issues.apache.org/jira/browse/OFBIZ-10766">OFBIZ-10766</a>)</li> 
    <li>Corrects behaviour of Autologin cookies (<a href="https://issues.apache.org/jira/browse/OFBIZ-10635">OFBIZ-10635</a>)</li> 
    <li>Fixes: In packing, only use reservations with stock on hand (<a href="https://issues.apache.org/jira/browse/OFBIZ-9677">OFBIZ-9677</a>)</li> 
    <li>Fixes: Unable to add additional product images from catalog (<a href="https://issues.apache.org/jira/browse/OFBIZ-10673">OFBIZ-10673</a>)</li> 
    <li>Fixes: Failed registration for virtual hosts with similar mount points (<a href="https://issues.apache.org/jira/browse/OFBIZ-10765">OFBIZ-10765</a>)</li> 
    <li>Fixes: Page dropdown list on <g class="gr_ gr_118 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="118" data-gr-id="118">categorydetail</g> page broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-10787">OFBIZ-10787</a>)</li> 
    <li>Fixes: Invoice date is not displayed on findInvoice screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-10620">OFBIZ-10620</a>)</li> 
    <li>Fixes: Product tags section displays &quot;Update&quot; button, despite of having no results (<a href="https://issues.apache.org/jira/browse/OFBIZ-9642">OFBIZ-9642</a>)</li> 
    <li>Fixes: Errors and warnings in <g class="gr_ gr_119 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="119" data-gr-id="119">webtools</g> ArtifactInfo (<a href="https://issues.apache.org/jira/browse/OFBIZ-10760">OFBIZ-10760</a>)</li> 
    <li>Fixes: Users name is displayed on <g class="gr_ gr_120 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="120" data-gr-id="120">ecommerce</g> even after user logs out (<a href="https://issues.apache.org/jira/browse/OFBIZ-10666">OFBIZ-10666</a>)</li> 
    <li>Fixes: Blank page is displayed on <g class="gr_ gr_121 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="121" data-gr-id="121">ecommerce</g> (<a href="https://issues.apache.org/jira/browse/OFBIZ-10741">OFBIZ-10741</a>)</li> 
    <li>Fixes: PartyId misses in <g class="gr_ gr_122 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="122" data-gr-id="122">EditEftAccount</g>.<g class="gr_ gr_123 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="123" data-gr-id="123">ftl</g> (party) when you create an EFT account from the quick finalize page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10680">OFBIZ-10680</a>)</li> 
    <li>Fixes: ModelForm.java is using an incorrect parameter name for sorting if a form extends from another form</li> 
    <li>Fixes: Disable widget verbose property on context doesn't works for rendering <g class="gr_ gr_128 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling" id="128" data-gr-id="128">ftl</g> template (<a href="http://mail-archives.apache.org/mod_mbox/ofbiz-commits/201901.mbox/%3C20190130162025.629843A0100@svn01-us-west.apache.org%3E">r1852533</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Fixes: Themes can't be changed in <g class="gr_ gr_124 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="124" data-gr-id="124">webpos</g> (<a href="https://issues.apache.org/jira/browse/OFBIZ-10767">OFBIZ-10767</a>)</li> 
    <li>Fixes: Page dropdown list on <g class="gr_ gr_125 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="125" data-gr-id="125">categorydetail</g> page broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-10787">OFBIZ-10787</a>)</li> 
    <li>Fixes: List Request page seems distorted of <g class="gr_ gr_126 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="126" data-gr-id="126">ecommerce</g> component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10621">OFBIZ-10621</a>)</li> 
  </ul>
