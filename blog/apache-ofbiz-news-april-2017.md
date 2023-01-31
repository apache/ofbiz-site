---
layout: post
title: 'Apache OFBiz News - April 2017 '
date: '2017-05-05T13:47:43+00:00'
permalink: apache-ofbiz-news-april-2017
---
<h2>Apache OFBiz News April 2017 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about more new OFBiz tutorials that are available, we setup another video channel, OFBiz goes live on Facebook, we remove some deprecated entities and we congratulate 7 new ASF members from our community.
<!--more--> 
  <h2>Apache OFBiz on Facebook</h2>
Did you know that Apache OFBiz is now on Facebook? 

  
  
  
  
  
  
  
  <p> </p>
Our project expanded its social media presence this month by getting setup on Facebook. Facebook automatically generates pages for highly requested pages that don't already exist. One of these auto generated pages existed for OFBiz and it had over 250 likes indicating that followers were looking for us. Our new project Facebook page can be found at the link below
  
  
  
  
  
  
  
  
  <p> </p> <a href="https://s.apache.org/wP4E" target="_blank">OFBiz on Facebook</a> 
  <p> </p>
We are now working on actively building our following. If you are on Facebook then please help support OFBiz by liking us and sharing your comments, views and pictures with us. Many thanks to Deepak Dixit, Ashish Vijaywargiya and Michael Brohl for getting things setup and also for taking on Facebook administration on behalf of the project.
  
  
  
  
  
  
  
  
  <h2>OFBiz Vimeo Channel</h2>
Last month we talked about our <a href="https://www.youtube.com/user/ofbiz" target="_blank">Youtube Channel</a>. This month we are once again expanding and have also setup a <a href="https://vimeo.com/channels/apacheofbiz">Vimeo Channel for OFBiz</a>.
We will be publishing the same content on both channels and our users will have the choice of which video channel they prefer to use.

  
  
  
  
  
  
  
  <p> </p>
Please feel free to follow our video channels and thanks to Deepak Dixit for getting this setup.

  
  
  
  
  
  
  
  <h2>New OFBiz Tutorials</h2>
During the month, one of our community members, Pranay Pandey, created some more video tutorials. The new videos can be found using the links below:

  
  
  
  
  
  
  
  <p> </p> <oll> 
    <li><a href="https://youtu.be/uMs5eedtHYo" target="_blank">Introduction to OFBiz Directory Structure Release 16.11</a></li> 
    <li><a href="https://youtu.be/d14-emy5lSE" target="_blank">Create a Plugin Release 16.11</a></li> 
    <li><a href="https://youtu.be/Lzmv0DCC5N4" target="_blank">Setup OFBiz with MySQL</a></li> 
    <li><a href="https://youtu.be/mxToh2rX7NY" target="_blank">Setup OFBiz in IntelliJ IDEA IDE - Release 16.11 and Trunk</a></li> 
    <li><a href="https://youtu.be/UWceeQwk-Ho" target="_blank">Database Entities</a></li> 
    <p> </p>
A very big thank you to Pranay for taking the time to make these videos and we hope that our community is finding them useful. 

    
    
    
    
    
    
    
    <p> </p>
If you have some ideas for videos that you would like to see on our channels or perhaps you would like to create a video for our OFBiz Youtube and Vimeo channels then please send a message with the details to our dev mailing list <a href="https://lists.apache.org/list.html?dev@ofbiz.apache.org">dev@ofbiz.apache.org</a>.

    
    
    
    
    
    
    
    <h2>New ASF Members from the OFBiz Community</h2>
Seven people from our community have become Apache Software Foundation members. Membership is by invitation only so it's a real honour to be invited. Many congratulations to:
    
    
    
    
    
    
    
    
    <ul> 
      <li>Taher Alkhateeb</li> 
      <li>Michael Brohl</li> 
      <li>Scott Gray</li> 
      <li>Bilgin Ibryam</li> 
      <li>Nicolas Malin</li> 
      <li>Anil Patel</li> 
      <li>Ashish Vijaywargiya </li> 
    </ul>
This means that OFBiz now has 12 ASF members from our community. Thank you all for your work and commitment to OFBiz and the ASF.

    
    
    
    
    
    
    
    <h2>Removal of Deprecated Entities</h2>
The code clean up work is continuing and as part of this the community has decided to remove old and deprecated entities. Details of what has been removed can be found in the following Jira


    
    
    
    
    
    
    
    <p> </p> <a href="https://issues.apache.org/jira/browse/OFBIZ-9327" target="_blank">OFBIZ-9327 Remove Deprecated Entities </a> 
    <p> </p>
Thanks very much to everyone who has been involved in this and other clean up or refactoring work.
    
    

    
    
    
    
    
    <h2>New features and improvements</h2> <span style="font-weight: normal;">Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:</span> 
    <h4>Framework</h4> 
    <ul> 
      <li>Refactor list forms related to gateway transactions in accounting into grids (<a href="https://issues.apache.org/jira/browse/OFBIZ-9282">OFBIZ-9282</a>)
Refactor various list form references in screen widgets.</li> 
      <li>Add the entire plugins directory to .gitignore.</li> 
      <li>Remove &quot;quick ship&quot; option with back ordered products.</li> 
      <li>Include proper validation when adding attributes with the AddProductAttribute form (<a href="https://issues.apache.org/jira/browse/OFBIZ-7452">OFBIZ-7452</a>)</li> 
      <li>Remove duplicate NewQuote button on ViewQuote page (<a href="https://issues.apache.org/jira/browse/OFBIZ-9318">OFBIZ-9318</a>)</li> 
      <li>Upgrade to the latest version of Apache Geronimo Transaction from 3.1.1 to 3.1.4.</li> 
      <li>Remove deprecated entities and  related migration services (<a href="https://issues.apache.org/jira/browse/OFBIZ-9327">OFBIZ-9327</a>)</li> 
      <li>Convert service which creates and removes a QuoteRole to entity-auto and add service to update and expire a QuoteRole (<a href="https://issues.apache.org/jira/browse/OFBIZ-9331">OFBIZ-9331</a>)</li> 
      <li>Resolve OFBiz-framework dependencies on OFBiz-plugins in order to build an run tests (<a href="https://issues.apache.org/jira/browse/OFBIZ-9322">OFBIZ-9322</a>)
Move some files into applications directory and modify others to fix the dependency order.</li> 
    </ul> 
    <h4>Plugins</h4> 
    <ul> 
      <li>My Portal: Align column titles in list forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-8486">OFBIZ-8486</a>)</li> 
      <li>Remove dependencies from OFBiz framework to plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-9322">OFBIZ-9322</a>)
This is related to a commit in ofbiz-framework in which data that is removed in plugins is added to the framework (see above).</li> 
    </ul> 
    <h2>Bugfixes</h2>
Functional and technical bugfixes:

    
    
    
    
    
    <h4>Framework</h4> 
    <ul> 
      <li>SOAPEventHandler only outputs error to log when secureSoapAnswer = &quot;false&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-9289">OFBIZ-9289</a>)</li> 
      <li>Sorting Links in Lookup opens new unstyled window instead of sorting the table (Find Content page) (<a href="https://issues.apache.org/jira/browse/OFBIZ-9280">OFBIZ-9280</a>)
Behavior occurs for DataRessourceId and OwnerContentId.</li> 
      <li>Add missing default-entity-name attribute to the &quot;entity-auto&quot; service definition for createReturnItemResponse. The missing attribute was causing a service execution error, preventing the processing of returns.</li> 
      <li>Update Tomcat to 8.0.42 because of a disclosed bug in current version (see ticket for the notice from Apache) (<a href="https://issues.apache.org/jira/browse/OFBIZ-9313">OFBIZ-9313</a>)</li> 
      <li>The createTenant Gradle task fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-9273">OFBIZ-9273</a>)
This issue is due to the creation of the build.gradle file in plugin which has an empty gradle task defined in it. Solve by comment out the build.gradle template content.</li> 
      <li>Creating plugins crashes the build system (<a href="https://issues.apache.org/jira/browse/OFBIZ-9273">OFBIZ-9273</a>)
The issue was due to introducing an incorrect flag of pluginId instead of plugin.name.</li> 
      <li>Keywords for a newly added WorkEffort are not listed (<a href="https://issues.apache.org/jira/browse/OFBIZ-9315">OFBIZ-9315</a>)</li> 
      <li>On setting verbose true, UtilHttp.getParameterMap() method prints username and password in logs (<a href="https://issues.apache.org/jira/browse/OFBIZ-9310">OFBIZ-9310</a>)
Commented out the line that prints &quot;Request Parameter Map Entries&quot; as it may print username and password entered by a user.</li> 
      <li>EmploymentApplications in Party manager does not list any record even if they exist (<a href="https://issues.apache.org/jira/browse/OFBIZ-9220">OFBIZ-9220</a>)</li> 
      <li>Routing updates with empty routing name (<a href="https://issues.apache.org/jira/browse/OFBIZ-7375">OFBIZ-7375</a>)</li> 
      <li>AccountingQuantity is not updated when a physical inventory variance is created (<a href="https://issues.apache.org/jira/browse/OFBIZ-9324">OFBIZ-9324</a>)</li> 
      <li>Create and use an OWASP PolicyFactory for content sanitization in ContentWorker for Birt Flexible Reports (<a href="https://issues.apache.org/jira/browse/OFBIZ-9166">OFBIZ-9166</a>)</li> 
    </ul> 
    <h4>Plugins</h4> 
    <ul> 
      <li>Lucene 5.4.0 deprecated default BooleanQuery constructor causes multiple error screens:

        
        
        
        
        
        <ul> 
          <li>CMS shows error screen on clicking Find button (<a href="https://issues.apache.org/jira/browse/OFBIZ-9301">OFBIZ-9301</a>) (ticket contains detailed Information about the constructor)</li> 
          <li>CMS shows error screen on Product Search (<a href="https://issues.apache.org/jira/browse/OFBIZ-9308">OFBIZ-9308</a>)</li> 
          <li>Ecommerce component showing error screen on searchContent from showcontenttree page (<a href="https://issues.apache.org/jira/browse/OFBIZ-9309">OFBIZ-9309</a>)</li> 
        </ul> 
      </li> 
      <li>The help button or link does not show for the Birt, BI and example components (<a href="https://issues.apache.org/jira/browse/OFBIZ-9311">OFBIZ-9311</a>)
<a href="https://issues.apache.org/jira/browse/OFBIZ-9312">OFBIZ-9312</a> is a duplicate of this.</li> 
      <li>Cannot obtain Lock on Lucene index Lock (<a href="https://issues.apache.org/jira/browse/OFBIZ-7265">OFBIZ-7265</a>)</li> 
      <li>Remove the birt.tld file and all related files and lines (<a href="https://issues.apache.org/jira/browse/OFBIZ-9323">OFBIZ-9323</a>)
For legal reasons the Birt Web Viewer from OFBiz needs to be removed.</li> 
    </ul> 
    <h2>Documentation</h2> 
    <h4>Framework</h4> 
    <ul> 
      <li>After changing the How+to+migrate+OFBiz+from+Derby+to+MySQL+database page in wiki, adapt the entityengine definition to modern mySQL use.</li> 
      <li>ViewSize converted to an Integer for multiplication.</li> 
    </ul> 
    <h4>Plugins</h4> 
    <ul> 
      <li>Complete Birt Flexible Reports documentation (<a href="https://issues.apache.org/jira/browse/OFBIZ-9188">OFBIZ-9188</a>).</li> 
    </ul> </oll>
