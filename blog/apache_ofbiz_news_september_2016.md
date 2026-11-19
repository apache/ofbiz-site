---
layout: post
title: 'Apache OFBiz News - September 2016 '
date: '2016-10-06T07:31:19+00:00'
permalink: apache_ofbiz_news_september_2016
---
<h2>Apache OFBiz News September 2016 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about an OFBiz track for Apachecon EU, a new Community HipChat room is setup, our PMC grows larger, OFBiz gets a new plug in system and the community collaborates on yet another Community Day.
<!--more-->
<h2>Apachecon EU 2016 - Seville</h2> 
The community submitted a range of talks for Apachecon EU in Seville. Five OFBiz talks have been selected to make up an OFBiz track. The topics range from improving the OFBiz user experience through to the new OFBiz plug in management system. 
<p></p>
It's great to see another OFBiz track at Apachecon as it gives an opportunity for our community to meet face to face, get to know each other and collaborate. Our speakers will be coming from France, India and Kuwait. . Full details of the OFBiz track can be found at the following link:
<p></p>
<a href="https://apacheconeu2016.sched.org/overview/type/ofbiz">OFBiz Track </a> 
<p></p>
Thank you to everyone that made a submission. We hope that there will be a strong OFBiz presence in Seville including some of our committers and PMC members. If you are interested in coming to Apachecon, then please register via the <a href="http://events.linuxfoundation.org/events/apachecon-europe/attend/register"> Linux Foundation </a> website.

<h2>OFBiz Community HipChat Room</h2>
This month a HipChat room was setup for the OFBiz Community. The room is open to anyone to join and can be accessed using the following link
<p></p>
<a href="https://www.hipchat.com/g4vOayvmc">OFBiz HipChat Room </a> 
<p></p>
It is hoped that the online chat forum can help with collaboration, mentoring and also as a way to build community spirit. People can easily see other community members online, ask simple questions and chat about OFBiz. As usual any discussions topics are taken back to the mailing lists.
<p></p>
The HipChat room has been very successful and was used during the this month's Community Day.

<h2>OFBiz Community Day</h2>
Our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">Community Days</a>  are held every 3 months and our third one for 2016 was held on 17th September. As usual they are very popular. Once again the activity level was very high with 103 commits and 82 tickets closed or resolved.  OFBiz was showing up on the ASF Status Monitor as the most active project over the Community Day weekend with Michael Brohl, Pranay Pandey, Arun Patidar, Jacques Le Roux and Gil Portenseigne filling the list of the top 5 most active Committers. 
<p></p>
Thanks to everyone for their contributions, involvement and great effort. Our next Community Day is planned for 17th December.  If you are interested in taking part then mark the date in your diary.

<h2>OFBiz Plug In Manager</h2>
A lot of work has been done this month to create a plug in management system for OFBiz. OFBiz covers many business aspects that being able to create a plug in and choose what functionality you want to enable will be a very strong and flexible business feature. The change of build system from Ant to Gradle has made the implementation of a plug in system for OFBiz a lot easier and after many weeks of effort the code has now been added to the trunk. This means that it will be included as part of the next OFBiz release. 
<p></p>
Huge thanks and kudos to Taher Alkhateeb for doing all the hard work!

<h2>New PMC Member</h2>
A new member has joined the OFBiz Project Management Committee (PMC) this month - Michael Brohl. Congratulations Michael! 

<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Remove legal statements from existing README files (<a href="https://issues.apache.org/jira/browse/OFBIZ-8085">OFBIZ-8085</a>)</li>
 	<li>Add functionality for adding Check accounts in the party profile page (<a href="https://issues.apache.org/jira/browse/OFBIZ-6899">OFBIZ-6899</a>)</li>
 	<li>Change the transaction URL of Payment Gateway from https://certification.authorize.net/gateway/transact.dll to https://test.authorize.net/gateway/transact.dll (<a href="https://issues.apache.org/jira/browse/OFBIZ-7251">OFBIZ-7251</a>)</li>
 	<li>Add field 'changeByUserLoginId' to PartyStatus (<a href="https://issues.apache.org/jira/browse/OFBIZ-7616">OFBIZ-7616</a>)</li>
 	<li>Add "success/error" message UI labels in various components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7726">OFBIZ-7726</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7979">OFBIZ-7979</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7980">OFBIZ-7980</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7987">OFBIZ-7987</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7990">OFBIZ-7990</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7991">OFBIZ-7991</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7993">OFBIZ-7993</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7994">OFBIZ-7994</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7996">OFBIZ-7996</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7997">OFBIZ-7997</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7998">OFBIZ-7998</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7999">OFBIZ-7999</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8002">OFBIZ-8002</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8004">OFBIZ-8004</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8009">OFBIZ-8009</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8011">OFBIZ-8011</a>)</li>
 	<li>Add unit tests for the UtilCodec class</li>
 	<li>Add CRUD services for various entities (<a href="https://issues.apache.org/jira/browse/OFBIZ-7847">OFBIZ-7847</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7853">OFBIZ-7853</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7859">OFBIZ-7859</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7862">OFBIZ-7862</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7868">OFBIZ-7868</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7869">OFBIZ-7869</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7870">OFBIZ-7870</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7871">OFBIZ-7871</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7873">OFBIZ-7873</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7878">OFBIZ-7878</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7890">OFBIZ-7890</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7891">OFBIZ-7891</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8000">OFBIZ-8000</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8003">OFBIZ-8003</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8005">OFBIZ-8005</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8006">OFBIZ-8006</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8008">OFBIZ-8008</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8015">OFBIZ-8015</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8017">OFBIZ-8017</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8018">OFBIZ-8018</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8019">OFBIZ-8019</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8020">OFBIZ-8020</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8022">OFBIZ-8022</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8025">OFBIZ-8025</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8030">OFBIZ-8030</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8031">OFBIZ-8031</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8035">OFBIZ-8035</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8045">OFBIZ-8045</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8046">OFBIZ-8046</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8047">OFBIZ-8047</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8048">OFBIZ-8048</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8049">OFBIZ-8049</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8050">OFBIZ-8050</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8057">OFBIZ-8057</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8058">OFBIZ-8058</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8059">OFBIZ-8059</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8060">OFBIZ-8060</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8061">OFBIZ-8061</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8062">OFBIZ-8062</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8080">OFBIZ-8080</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8081">OFBIZ-8081</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8082">OFBIZ-8082</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8083">OFBIZ-8083</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8084">OFBIZ-8084</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8086">OFBIZ-8086</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8092">OFBIZ-8092</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8093">OFBIZ-8093</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8094">OFBIZ-8094</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8095">OFBIZ-8095</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8096">OFBIZ-8096</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8131">OFBIZ-8131</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8132">OFBIZ-8132</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8133">OFBIZ-8133</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8134">OFBIZ-8134</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8161">OFBIZ-8161</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8162">OFBIZ-8162</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8163">OFBIZ-8163</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8164">OFBIZ-8164</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8165">OFBIZ-8165</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8166">OFBIZ-8166</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8167">OFBIZ-8167</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8168">OFBIZ-8168</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8169">OFBIZ-8169</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8170">OFBIZ-8170</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8171">OFBIZ-8171</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8208">OFBIZ-8208</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8246">OFBIZ-8246</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8247">OFBIZ-8247</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8259">OFBIZ-8259</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8269">OFBIZ-8269</a>)</li>
 	<li>Enable adding a content to an agreement (<a href="https://issues.apache.org/jira/browse/OFBIZ-7969">OFBIZ-7969</a>)</li>
 	<li>Clean up commented out code in various freemarker templates (<a href="https://issues.apache.org/jira/browse/OFBIZ-8064">OFBIZ-8064</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8065">OFBIZ-8065</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8066">OFBIZ-8066</a>)</li>
 	<li>Clean up commented out code in various groovy scripts (<a href="https://issues.apache.org/jira/browse/OFBIZ-8069">OFBIZ-8069</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8070">OFBIZ-8070</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8071">OFBIZ-8071</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8072">OFBIZ-8072</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8073">OFBIZ-8073</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8074">OFBIZ-8074</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8075">OFBIZ-8075</a>)</li>
 	<li>Clean up commented out code in various xml files (<a href="https://issues.apache.org/jira/browse/OFBIZ-8091">OFBIZ-8091</a>)</li>
 	<li>Clean up commented out code in the java source various components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7848">OFBIZ-7848</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7856">OFBIZ-7856</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8036">OFBIZ-8036</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8037">OFBIZ-8037</a>)</li>
 	<li>Load the OWASP dependency checker Gradle plugin efficiently (<a href="https://issues.apache.org/jira/browse/OFBIZ-7930">OFBIZ-7930</a>)</li>
 	<li>Various cleanups concerning OFBiz servlet filters (<a href="https://issues.apache.org/jira/browse/OFBIZ-8142">OFBIZ-8142</a>)</li>
 	<li>Remove unused parameter from CatalogUrlFilter</li>
 	<li>Implement a new servlet filter that provides all controller related logic currently in ContextFilter</li>
 	<li>ContextFilter: Set the character encoding to the system default (UTF-8) if and only if it is not set already by the client</li>
 	<li>Remove controller related logic from ContextFilter which is now provided by ControlFilter</li>
 	<li>Modify classes to use the FORWARDED_FROM_SERVLET constant defined in the new ControlFilter class</li>
 	<li>Implement unit tests for some mechanisms to create delegator objects and for the initialization of ControlFilter</li>
 	<li>Moved several filter config related variables from the doGet method to class level and initialed them in the init method</li>
 	<li>Allow users to select multiple options in the "Purchases by Product" and "Purchases by Payment Method"-reports (<a href="https://issues.apache.org/jira/browse/OFBIZ-7403">OFBIZ-7403</a>)</li>
 	<li>Improve error message logged by DelegatorFactoryImpl.getInstance when a delegator can't be created</li>
 	<li>Remove the need for the webtools.properties file</li>
 	<li>Small improvements to LoginWorker.java and WebSiteWorker.java</li>
 	<li>Remove the jars from "eBay SDK for Java" licensed under CDDL thus not being compatible with ASL2.0, add instructions on how to run it in the component's README</li>
 	<li>Remove several unused jars</li>
 	<li>Add the new test testCreatePartyGround to the party component (<a href="https://issues.apache.org/jira/browse/OFBIZ-8144">OFBIZ-8144</a>)</li>
 	<li>Use the try-with-resources statement wherever possible (<a href="https://issues.apache.org/jira/browse/OFBIZ-8202">OFBIZ-8202</a>)</li>
 	<li>Make menu names consistent (<a href="https://issues.apache.org/jira/browse/OFBIZ-8118">OFBIZ-8118</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8122">OFBIZ-8122</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8123">OFBIZ-8123</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8124">OFBIZ-8124</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8125">OFBIZ-8125</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8126">OFBIZ-8126</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8127">OFBIZ-8127</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8128">OFBIZ-8128</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8129">OFBIZ-8129</a>)</li>
 	<li>Make form names consistent (<a href="https://issues.apache.org/jira/browse/OFBIZ-8045">OFBIZ-8045</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8046">OFBIZ-8046</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8067">OFBIZ-8067</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8077">OFBIZ-8077</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8078">OFBIZ-8078</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8088">OFBIZ-8088</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8089">OFBIZ-8089</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8090">OFBIZ-8090</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8099">OFBIZ-8099</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8100">OFBIZ-8100</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8101">OFBIZ-8101</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8103">OFBIZ-8103</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8104">OFBIZ-8104</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8105">OFBIZ-8105</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8106">OFBIZ-8106</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8107">OFBIZ-8107</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8108">OFBIZ-8108</a>)</li>
 	<li>Remove the genorimo component and move GeronimoTransactionFactory to the entity component (<a href="https://issues.apache.org/jira/browse/OFBIZ-8179">OFBIZ-8179</a>)</li>
 	<li>Remove support for the Bean Scripting Framework (BSF) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8224">OFBIZ-8224</a>)</li>
 	<li>Remove support for "notsoserial" (<a href="https://issues.apache.org/jira/browse/OFBIZ-8241">OFBIZ-8241</a>)</li>
 	<li>Implement a PoC plugin system for OFBiz based on Gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-7972">OFBIZ-7972</a>)</li>
 	<li>Change the inlineHandlePriceWithTaxIncuded method name (<a href="https://issues.apache.org/jira/browse/OFBIZ-8244">OFBIZ-8244</a>)</li>
 	<li>Translate the svn and git info footers (<a href="https://issues.apache.org/jira/browse/OFBIZ-7798">OFBIZ-7798</a>)</li>
 	<li>Convert search criteria on status into multi-select pattern in various components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7542">OFBIZ-7542</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7544">OFBIZ-7544</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7545">OFBIZ-7545</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7546">OFBIZ-7546</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7547">OFBIZ-7547</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7548">OFBIZ-7548</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7549">OFBIZ-7549</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7550">OFBIZ-7550</a>)</li>
 	<li>Create a Gradle task to use Xlint arguments when building (<a href="https://issues.apache.org/jira/browse/OFBIZ-8251">OFBIZ-8251</a>)</li>
 	<li>Improve freemarker formatting in the ecommerce component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7949">OFBIZ-7949</a>)</li>
 	<li>Add multisite support in specialpurpose/cmssite (<a href="https://issues.apache.org/jira/browse/OFBIZ-7120">OFBIZ-7120</a>)</li>
 	<li>Update various dutch labels in various components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7956">OFBIZ-7956</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8052">OFBIZ-8052</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8054">OFBIZ-8054</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8232">OFBIZ-8232</a>)</li>
 	<li>Remove unused fields from various Java classes (<a href="https://issues.apache.org/jira/browse/OFBIZ-7698">OFBIZ-7698</a>)</li>
 	<li>Use one generic functionality for selecting all checkboxes (<a href="https://issues.apache.org/jira/browse/OFBIZ-7720">OFBIZ-7720</a>)</li>
 	<li>Remove inline js for toggleAll, checkToggle and selectAll in various components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7896">OFBIZ-7896</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7931">OFBIZ-7931</a>)</li>
 	<li>Add check for required input fields in the "Add Facility Party Role"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7464">OFBIZ-7464</a>)</li>
 	<li>Improved titles and labels in some create forms in various components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7876">OFBIZ-7876</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8140">OFBIZ-8140</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8141">OFBIZ-8141</a>)</li>
 	<li>Add required check to the field "facility type" in the "Edit Facility"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7480">OFBIZ-7480</a>)</li>
 	<li>Display "fromDate" with default "now timestamp" and add an asterisk if it is part of the primary key in all components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7650">OFBIZ-7650</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7651">OFBIZ-7651</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7653">OFBIZ-7653</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7660">OFBIZ-7660</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7662">OFBIZ-7662</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7665">OFBIZ-7665</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7666">OFBIZ-7666</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8028">OFBIZ-8028</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8029">OFBIZ-8029</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8255">OFBIZ-8255</a>)</li>
 	<li>Rename button label to create a new agreement from "Edit Agreement" to "Create Agreement" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7608">OFBIZ-7608</a>)</li>
 	<li>Implemented being able to add tasks from different projects on the same invoice (<a href="https://issues.apache.org/jira/browse/OFBIZ-8116">OFBIZ-8116</a>)</li>
 	<li>Add a default table style for Payments in the "View Gateway Response" screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-8276">OFBIZ-8276</a>)</li>
 	<li>Enable status selection for WorkEffort duplication (<a href="https://issues.apache.org/jira/browse/OFBIZ-7959">OFBIZ-7959</a>)</li>
 	<li>Enhance event handler to support a transaction-timeout attribute in the "&lt;event&gt;" element (<a href="https://issues.apache.org/jira/browse/OFBIZ-8160">OFBIZ-8160</a>)</li>
 	<li>Change drop-down option from "Any" to empty in Admin Search of the lucene component to make it consistent with similar search forms in the other applications</li>
 	<li>Remove unused import in various groovy files (<a href="https://issues.apache.org/jira/browse/OFBIZ-7895">OFBIZ-7895</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8032">OFBIZ-8032</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8033">OFBIZ-8033</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8034">OFBIZ-8034</a>)</li>
 	<li>Remove the "ecomclone" web application for the ecommerce component</li>
 	<li>Improve the local library classpath setup in OFBiz</li>
 	<li>Remove the need to generate ofbiz-base-test.jar</li>
 	<li>The "find" buton in the "Lookup Account" search screen redirects to the "Lookup Group"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7117">OFBIZ-7117</a>)</li>
 	<li>Use the "ignore_missing" option of the "&lt;#include" ftl directive and fix said option not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-8292">OFBIZ-8292</a>)</li>
 	<li>Improved gradle setting for eclipse classpath</li>
 	<li>gzip json files are now served compressed by Tomcat (<a href="https://issues.apache.org/jira/browse/OFBIZ-8299">OFBIZ-8299</a>)</li>
 	<li>Reintroduce iteration over components for building the classpath</li>
 	<li>Add WebSocket support (<a href="https://issues.apache.org/jira/browse/OFBIZ-7073">OFBIZ-7073</a>)</li>
 	<li>Remove the class SSLImpl since it is not needed anymore</li>
 	<li>Upgrade Tomcat to 8.0.37 and Log4j to 2.6.2</li>
 	<li>Major refactoring of the content of the LICENSE and NOTICE files as a consequence of switching to Gradle</li>
 	<li>Convert EntitySaxReader to use the default Sax reader instead of the legacy Javolution implementation and made several of its fields and methods private</li>
 	<li>Several cleanups and enhancements in the FreeMarkerWorker class and client code using it
<ul>
 	<li>simplify and cleanup its public methods</li>
 	<li>removed unused methods and made others private</li>
 	<li>improve integration code to better use the Freemarker API</li>
 	<li>improve implementation of template rendering from strings</li>
 	<li>move freemarkerImports.properties from "widget" to "base"</li>
 	<li>create FreeMarkerWorkerTests for unit tests</li>
 	<li>refactor WebToolsServices.entityImport() to leverage FreeMarkerWorker.renderTemplate()</li>
 	<li>move encodeDoubleQuotes() from FreeMarkerWorker to MacroFormRenderer</li>
</ul>
</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>Minor issues that show as warnings in Eclipse (<a href="https://issues.apache.org/jira/browse/OFBIZ-8115">OFBIZ-8115</a>)</li>
 	<li>Error in the print PDF functionality on the "Inventory Average Cost"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7390">OFBIZ-7390</a>)</li>
 	<li>Console warning related to duplicate field alias (<a href="https://issues.apache.org/jira/browse/OFBIZ-7986">OFBIZ-7986</a>)</li>
 	<li>Unnecessary condition in the product decorator (<a href="https://issues.apache.org/jira/browse/OFBIZ-7602">OFBIZ-7602</a>)</li>
 	<li>No need to show "---" after selecting any option from drop-down in find screens (<a href="https://issues.apache.org/jira/browse/OFBIZ-8050">OFBIZ-8050</a>)</li>
 	<li>Geo Location functionality of "Facility Contact Information"-screen not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-7343">OFBIZ-7343</a>)</li>
 	<li>Revert a commit that deprecated the 'safe' value for the attribute 'allow-html'</li>
 	<li>Character encoding issue in build.gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-8119">OFBIZ-8119</a>)</li>
 	<li>"testFopMacroLibrary" fails on Windows (<a href="https://issues.apache.org/jira/browse/OFBIZ-7938">OFBIZ-7938</a>)</li>
 	<li>Missing delete service (<a href="https://issues.apache.org/jira/browse/OFBIZ-8012">OFBIZ-8012</a>)</li>
 	<li>In build.gradle move java encoding declaration to the project configuration section (<a href="https://issues.apache.org/jira/browse/OFBIZ-8119">OFBIZ-8119</a>)</li>
 	<li>EntityName starting with a schema name causes an error in Postgres (<a href="https://issues.apache.org/jira/browse/OFBIZ-8137">OFBIZ-8137</a>)</li>
 	<li>System erroneously allows changing the status from cancel to empty for returns (<a href="https://issues.apache.org/jira/browse/OFBIZ-7724">OFBIZ-7724</a>)</li>
 	<li>Auto-completer does not work for "Data Resource Id" and "Owner Content Id" (<a href="https://issues.apache.org/jira/browse/OFBIZ-7721">OFBIZ-7721</a>)</li>
 	<li>Unable to set a new lotId to an existing inventory item (<a href="https://issues.apache.org/jira/browse/OFBIZ-7533">OFBIZ-7533</a>)</li>
 	<li>Donation amount gets prorated based on shipped quantity (<a href="https://issues.apache.org/jira/browse/OFBIZ-7440">OFBIZ-7440</a>)</li>
 	<li>Wrong module name in the DelegatorFactory class</li>
 	<li>GenericDelegator fails with a NPE if delegatorInfo is null</li>
 	<li>No States/Provinces exist when creating a new customer from Japan (<a href="https://issues.apache.org/jira/browse/OFBIZ-8136">OFBIZ-8136</a>)</li>
 	<li>The "Only Not Used Labels" option of the label manager is broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-8114">OFBIZ-8114</a>)</li>
 	<li>Vulnerability in the form widget sort-order element</li>
 	<li>The menu item ShipmentGatewayConfig in FacilityMenus has the wrong permission (<a href="https://issues.apache.org/jira/browse/OFBIZ-8172">OFBIZ-8172</a>)</li>
 	<li>The Label manager doesn't search .groovy files (<a href="https://issues.apache.org/jira/browse/OFBIZ-8153">OFBIZ-8153</a>)</li>
 	<li>The display of State/Provice for non US entities in customer profile is inaccurate (<a href="https://issues.apache.org/jira/browse/OFBIZ-8231">OFBIZ-8231</a>)</li>
 	<li>The view screen in the Apache Solr Integration component is broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-8225">OFBIZ-8225</a>)</li>
 	<li>postalAddressHtmlFormatter in PartyScreens.xml does not work properly (<a href="https://issues.apache.org/jira/browse/OFBIZ-8242">OFBIZ-8242</a>)</li>
 	<li>Profile of contact person not shown on quick add of contact in SFA (<a href="https://issues.apache.org/jira/browse/OFBIZ-7816">OFBIZ-7816</a>)</li>
 	<li>Pagination errors in various forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-8254">OFBIZ-8254</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8236">OFBIZ-8236</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8280">OFBIZ-8280</a>)</li>
 	<li>Missaligned column titles in list forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-8260">OFBIZ-8260</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8272">OFBIZ-8272</a>)</li>
 	<li>RateAmount is not found when the level is "WorkEffort" (<a href="https://issues.apache.org/jira/browse/OFBIZ-8052">OFBIZ-8052</a>)</li>
 	<li>Invalid UiLabel in the "Edit Return"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-8262">OFBIZ-8262</a>)</li>
 	<li>The screens "Edit Calendar Exception Day" and "Edit Calendar Exception Week" are broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-8222">OFBIZ-8222</a>)</li>
 	<li>Obsolete "popUpPrint" functions in OfbizUtil.js (<a href="https://issues.apache.org/jira/browse/OFBIZ-8275">OFBIZ-8275</a>)</li>
 	<li>"Update Party Invitation" ignores the "ToName" field (<a href="https://issues.apache.org/jira/browse/OFBIZ-8151">OFBIZ-8151</a>)</li>
 	<li>jquery.jgrowl.min.css is linked twice in the HTML source (<a href="https://issues.apache.org/jira/browse/OFBIZ-7758">OFBIZ-7758</a>)</li>
 	<li>The find button in the "Lookup Account"-screen redirects to the "Lookup Group"-screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-7117">OFBIZ-7117</a>)</li>
 	<li>Adding a WorkEffort Timesheet to "Invoice" or "New Invoice" does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-5636">OFBIZ-5636</a>)</li>
 	<li>Adding a role for a party fails when trying to add a second role (<a href="https://issues.apache.org/jira/browse/OFBIZ-7135">OFBIZ-7135</a>)</li>
 	<li>SvnInfo.ftl and GitInfo.ftl are not generated by default (<a href="https://issues.apache.org/jira/browse/OFBIZ-8250">OFBIZ-8250</a>)</li>
 	<li>Busted layout of the "order status"-screen in the ecommerce component (<a href="https://issues.apache.org/jira/browse/OFBIZ-8265">OFBIZ-8265</a>)</li>
 	<li>Barcode elements embedded in XSL-FO templates don't work because of a wrong dependency declared in build.gradle</li>
 	<li>Clicking the submit button in the Qualification screen renders a broken page (<a href="https://issues.apache.org/jira/browse/OFBIZ-8223">OFBIZ-8223</a>)</li>
 	<li>Error when trying to update the routing task deliverable product (<a href="https://issues.apache.org/jira/browse/OFBIZ-8296">OFBIZ-8296</a>)</li>
 	<li>"Order By Referrer" not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-7318">OFBIZ-7318</a>)</li>
 	<li>Error on the main page of the scrum component (<a href="https://issues.apache.org/jira/browse/OFBIZ-8318">OFBIZ-8318</a>)</li>
 	<li>Issue in label search in webtools (<a href="https://issues.apache.org/jira/browse/OFBIZ-8315">OFBIZ-8315</a>)</li>
 	<li>Sorting product overview in the product catalog results in a blank screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-8302">OFBIZ-8302</a>)</li>
 	<li>Unable to run the service findContentParens from webtools (<a href="https://issues.apache.org/jira/browse/OFBIZ-8322">OFBIZ-8322</a>)</li>
</ul>
<h2>Documentation</h2>
<ul>
 	<li>Update the documentation with respect to Gradle changes (<a href="https://issues.apache.org/jira/browse/OFBIZ-7677">OFBIZ-7677</a>)</li>
 	<li>Add READMEs for various components (<a href="https://issues.apache.org/jira/browse/OFBIZ-7500">OFBIZ-7500</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7501">OFBIZ-7501</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-7505">OFBIZ-7505</a>)</li>
</ul>
