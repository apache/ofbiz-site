---
layout: post
title: Apache OFBiz News - April 2020
date: '2020-08-19T14:46:54+00:00'
permalink: apache-ofbiz-news-april-2020
---
<h2>Apache OFBiz News&nbsp;April&nbsp;2020</h2><p>Welcome to our regular monthly round-up of OFBiz news. This month we 
share with you details of our usual list of features, improvements and 
statistics.</p><h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p> 
  <ul><li><strong>JIRA Issue Tracker:</strong> 52 issues were opened and 59 issues were closed ( 6 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong> 
      <ul><li><strong>Framework: </strong>130 commits to the code base that changed 30,425 lines of code ( 6 committers were active)</li><li><strong>Plugins: </strong>9 commits to the code base that changed 7,528 lines of code ( 2 committers were active)</li></ul> 
    </li><li><strong>Mailing Lists:</strong> 
      <ul><li><strong>Dev: </strong>237 emails sent and 51 topics discussed (48 different people)</li><li><strong>User: </strong>96 emails sent and 22 topics discussed (29 different people) <br></li></ul></li></ul><h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Decodes AjaxAutocompleteOptions return value (<a href="https://github.com/apache/ofbiz-framework/commit/8ee522e42e9a3498350f52b3c8c812dcce14e7a2" target="_blank">GitHub Link</a>) </li>

    <li>Sets 'auth' to true for request urls used for Application components (<a href="https://github.com/apache/ofbiz-framework/commit/6c49411ee7914e3aff8e31c802bff0721361abef" target="_blank">GitHub Link</a>) </li>

    <li>Adds unit testing, using JMockit, to ensure that form macros are rendered using ids from ModelFormField#getCurrentContainerId

        (<a href="https://github.com/apache/ofbiz-framework/commit/87277ab9925f9dfa7787b86605b43857d2fc4978" target="_blank">GitHub Link 1</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/d1ca68c166c44b06ec4b66eb53feb22e8cbdf158" target="_blank">GitHub Link 2</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/c68d43efa21b91f91a33fc002af1d387b0b11483" target="_blank">GitHub Link 3</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/43f46399ffdf144adf164da08edf5af97c8ebca7" target="_blank">GitHub Link 4</a>) </li>

    <li>Adds license header to MacroFormRendererTest (<a href="https://github.com/apache/ofbiz-framework/commit/1fbf6c3d6b614cadd340fc3550cef37c95188cd9" target="_blank">GitHub Link</a>) </li>

    <li>Styles alignment properties (<a href="https://github.com/apache/ofbiz-framework/commit/48e81c48dba67cd4c0814327ddc4242fe3cb4df1" target="_blank">GitHub Link</a>) </li>

    <li>Unifies style application

        (<a href="https://github.com/apache/ofbiz-framework/commit/20cf076c4487649b4678cb526080ef6af7e1056f" target="_blank">GitHub Link 1</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/321e51602a744799779b4edf7cd6ee5040ee2003" target="_blank">GitHub Link 2</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/c89e9346ba8703bf65a12542a60643d90cc949f7" target="_blank">GitHub Link 3</a>) </li>

    <li>Extends gitignore by upload's sub folder (<a href="https://github.com/apache/ofbiz-framework/commit/060e9ab950da20d6c03825b5676b86f532a3c718" target="_blank">GitHub Link</a>) </li>

    <li>Implements the pretty print for keyword search (<a href="https://github.com/apache/ofbiz-framework/commit/f2e69894fb1a4070696a1e4d6d05eef3dd7a11b9" target="_blank">GitHub Link</a>) </li>

    <li>Adds type="text/css" on an link element of Header.ftl (<a href="https://github.com/apache/ofbiz-framework/commit/ae3ae266986e238ceb9a68fcd53af319a691e2f2" target="_blank">GitHub Link</a>) </li>

    <li>Improves web content caching (<a href="https://github.com/apache/ofbiz-framework/commit/e666c65b7cb210bfeffb35884001775dc08fd3aa" target="_blank">GitHub Link</a>) </li>

    <li>Converts PartyPermissionServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11433" target="_blank">OFBIZ-11433</a>) </li>

    <li>Marks a row of class CsrfUtil to be removed with OFBIZ-11229 (<a href="https://github.com/apache/ofbiz-framework/commit/768353a09339eb431c89d50ee96568a998352d4b" target="_blank">GitHub Link</a>) </li>

    <li>Removes rawtype in class RequestHandler (<a href="https://github.com/apache/ofbiz-framework/commit/05354b73b7a0fea5afb734774ee1e79c925e7938" target="_blank">GitHub Link</a>) </li>

    <li>Provides POC for CSRF Token (<a href="https://issues.apache.org/jira/browse/OFBIZ-11306" target="_blank">OFBIZ-11306</a>) </li>

    <li>Replaces 'module' by 'MODULE' everywhere (<a href="https://github.com/apache/ofbiz-framework/commit/ddb8f4273a28b1f465af65907b507ff6535a9d36" target="_blank">GitHub Link</a>) </li>

    <li>Follows checkstyle conventions in files committed for CSRF token defense (<a href="https://github.com/apache/ofbiz-framework/commit/b95fa36bf48e1e29a269a3a8e39757008801a367" target="_blank">GitHub Link</a>) </li>

    <li>Converts OrderReturnService.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11442" target="_blank">OFBIZ-11442</a>) </li>

    <li>Converts createPayment service from mini lang to groovy

        (<a href="https://github.com/apache/ofbiz-framework/commit/b8848355d188ff91ce84e71b16433c9cf278b8d0" target="_blank">GitHub Link</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/aef9382a9c8e242af0d629f331bb5c73ea4e4746" target="_blank">GitHub Link</a>) </li>

    <li>Moves '10 seconds' comments from security.properties to class CommonEvents (<a href="https://github.com/apache/ofbiz-framework/commit/e1988a29c8503251bfa68756efafc0c4d44be53d" target="_blank">GitHub Link</a>) </li>

    <li>Adds security.internal.sso.enabled and security.token.key SystemProperties

        (<a href="https://github.com/apache/ofbiz-framework/commit/ff9335ac8c51a2212cfe3715d1cdd44ff4b3b78b" target="_blank">GitHub Link 1</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/01e98b5b5f1d3dca8b0143052f46f9ef0bb93ddf" target="_blank">GitHub Link 2</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/d8025d41dc176b17800d74a6af004748c0a77a2f" target="_blank">GitHub Link 3</a>) </li>

    <li>Adds more token expire time to compensate for possible time difference (<a href="https://github.com/apache/ofbiz-framework/commit/98f6d7ea8d5527ed7cee42fe39a3922875e00a2d" target="_blank">GitHub Link</a>) </li>

    <li>Removes TODO, that is not required anymore (<a href="https://github.com/apache/ofbiz-framework/commit/afb35572d0241423d960d906b5a2ca0214f1a758" target="_blank">GitHub Link</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors

        (<a href="https://github.com/apache/ofbiz-framework/commit/b0259904889757bf3a12737d424599907ed8646a" target="_blank">GitHub Link 1</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/c52786cee1514bd78540a327b54c0ab1b910d71b" target="_blank">GitHub Link 2</a>) </li>

    <li>Converts createContentAlternativeUrl service from mini lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/200c0e85fcc392131cb01e7685f87618259c2d22" target="_blank">GitHub Link</a>) </li>

    <li>Updates dependencycheck to last version (<a href="https://github.com/apache/ofbiz-framework/commit/7ecff33c2a85b432115c0a5e53709ea40b6bb23a" target="_blank">GitHub Link</a>) </li>

    <li>Increases the size of http.upload.max.sizethreshold (<a href="https://github.com/apache/ofbiz-framework/commit/d0144d96e127e93d4f9fbe2b2f0a3604e77eca10" target="_blank">GitHub Link</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Adds the meta CSRF token for Ajax (<a href="https://github.com/apache/ofbiz-framework/commit/aa26d8f0cfeea2035d638d8b9ee34a173f2a7860" target="_blank">GitHub Link</a>) </li>

    <li>Provides POC for CSRF Token (<a href="https://github.com/apache/ofbiz-framework/commit/cf272a9750db86927d6f2692320fe0f4165dd0ff" target="_blank">GitHub Link</a>) </li>

    <li>Replaces 'module' by 'MODULE' everywhere (<a href="https://github.com/apache/ofbiz-framework/commit/208ef1b1be4c41a5099c251f623cdb9e1cda086c" target="_blank">GitHub Link</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Ensures that the SameSite attribute is set to 'strict' for all cookies

        (<a href="https://github.com/apache/ofbiz-framework/commit/866c742e8fb8f10d71571e8bc5c54bca70de599c" target="_blank">GitHub Link</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/11c75b66613c73507852bc0d5b7652caa4b38278" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Specified key was too long; max key length is 767 bytes for ProductPromoCodeEmail entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-5426" target="_blank">OFBIZ-5426</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/44" target="_blank">#44</a>) </li>

    <li>Fixes a ProductPromoCodeEmail foreign key name (<a href="https://github.com/apache/ofbiz-framework/commit/6c66ce0dc2d70207c971ea45d946f45bb35bbd91" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: The createTaskContent request does not work (<a href="https://github.com/apache/ofbiz-framework/commit/c9d516d367d4c06d99adae002273540b13511d32" target="_blank">GitHub Link</a>) </li>

    <li>Corrects path to ftpAddress services in services_contact of party component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11359" target="_blank">OFBIZ-11359</a>) </li>

    <li>Corrects path to ftpAddress services in services of party component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11359" target="_blank">OFBIZ-11359</a>) </li>

    <li>Fixes: Prevent Host Header Injection (CVE-2019-12425) (<a href="https://github.com/apache/ofbiz-framework/commit/e0f0d5271a0443fe97fe11368df327e2c734604a" target="_blank">GitHub Link</a>) </li>

    <li>Fixes a Javadoc issue (<a href="https://github.com/apache/ofbiz-framework/commit/ab9b048d07b18eff9931ee9591d59835faf7f0dc" target="_blank">GitHub Link</a>) </li>

    <li>Fixes missing default NoCsrfDefenseStrategy in Header.ftl files (<a href="https://issues.apache.org/jira/browse/OFBIZ-11306" target="_blank">OFBIZ-11306</a>) </li>

    <li>Updates checkstyleMain.maxErrors to fits with Buildbot report

        (<a href="https://github.com/apache/ofbiz-framework/commit/b21327153a71e07a67120b12a61b102b4c965f0b" target="_blank">GitHub Link 1</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/7958d6d55d7652949fb7e1795bfeef780ef05635" target="_blank">GitHub Link 2</a>) </li>

    <li>Fixes: 'entity/list' request is not handled well

        (<a href="https://github.com/apache/ofbiz-framework/commit/e4871226249b7c5dcb51931b81bf5cdb79d7810f" target="_blank">GitHub Link 1</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/ed410dfd6899b979257c0c3774cc8dfa224a212b" target="_blank">GitHub Link 2</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/03780e466525c73f8bb2af59378a28020ea010ae" target="_blank">GitHub Link 3</a>) </li>

    <li>Fixes: 'FindJob' generates an error (<a href="https://github.com/apache/ofbiz-framework/commit/e0c8a1f4b0374a490d6dcebb79650106c45719c8" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Error in uploading very large files, ie &gt;2MB

        (<a href="https://github.com/apache/ofbiz-framework/commit/4725ae68d8f4afa58fa29fdd6bf977b95731b807" target="_blank">GitHub Link 1</a>)

        (<a href="https://github.com/apache/ofbiz-framework/commit/6d3d8f73c2f78a50d7768253a343fbcf00712bd9" target="_blank">GitHub Link 2</a>) </li>

    <li>Fixes: Error removing an uploaded party content (<a href="https://github.com/apache/ofbiz-framework/commit/57805aebabaee62736ecf8c99810b5b673a2e37e" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Exception error reflecting while eCommerce quick checkout and ordermgr checkout (<a href="https://issues.apache.org/jira/browse/OFBIZ-11506" target="_blank">OFBIZ-11506</a>) </li>

</ul>

<h2>Documentation</h2>

<h3>Framework</h3>

<ul>

    <li>Adds the download-the-gradle-wrapper section (<a href="https://github.com/apache/ofbiz-framework/commit/2d47e253e144df6fd7f2808c3fe2a90d7bf2f1c3" target="_blank">GitHub Link</a>) </li>

    <li>Adds CSRF defense and updates password and JWT (<a href="https://github.com/apache/ofbiz-framework/commit/fdb995fd501876dd2293de1d85ce45e5f287ae70" target="_blank">GitHub Link</a>) </li>

    <li>Improves security.properties documentation (<a href="https://github.com/apache/ofbiz-framework/commit/07a472f89c9b30b525bac099ee90e3e4ffd90ea4" target="_blank">GitHub Link</a>) </li>

</ul>
