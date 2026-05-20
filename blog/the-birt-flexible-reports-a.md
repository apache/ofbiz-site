---
layout: post
title: Reporting in Apache OFBiz® and the OFBiz Flexible Reports, a new and important
  feature
date: '2017-05-20T13:26:38+00:00'
permalink: the-birt-flexible-reports-a
---
<h1>Reporting in OFBiz and the new OFBiz Flexible Reports<br></h1> 
  <h2>Reporting in OFBiz, a brief history</h2> 
  <p>Initially, OFBiz came with JasperReports as its main reporting tool. But due to licensing issues, it was removed when OFBiz became part of the Apache Software Foundation. OFBiz needed to generate reports so at that time only Apache FOP was available until Birt was added to OFBiz as a component.</p> 
  <p>Apart their licenses, Birt and JasperReports are <a href="http://www.innoventsolutions.com/open-source-reporting-review-birt-jasper-pentaho.html" title="Compare reporting tools">roughly comparable</a>. Notably, they both offer a report editor, respectively <a href="https://eclipse.org/birt/about/designer.php" title="Birt Report Designer">Birt Report Designer</a> and <a href="http://community.jaspersoft.com/project/ireport-designer" title="iReport Designer">iReport Designer</a>. <a href="https://birtgrip.blogspot.fr/2012/10/birt-vs-jasper.html" title="Birt preferred">Some people prefer Birt</a>, while <a href="https://xmight.blogspot.fr/2012/03/birt-vs-jasperreports-comparison.html" title="Jasper preferred">others prefer JasperReports</a>. When making a choice, there is though a major difference between them. JasperReports works on a pixel basis, like a desktop GUI, while Birt works on relative positions, like HTML. This is an important point, because it makes them incompatible, meaning that you can't convert a report from one format to the other.<br></p> 
  <p>After an initial effort in 2007, the birt component was finally integrated into OFBiz in 2009. It was later refactored because of few issues. And more recently, because it was not correctly licensed, a minor part, <a href="https://issues.apache.org/jira/browse/OFBIZ-9323" title="Jira  9323">the Birt Web Viewer was removed.<br></a></p> 
  <p>But the main purpose of this blog post is to announce the creation of the <strong>OFBiz Flexible Reports</strong>. <a href="https://issues.apache.org/jira/browse/OFBIZ-6919" title="Jira 6919">It's a new feature added recently which will be officially available with the R17.12 branch first release</a> and <a href="https://ci.apache.org/projects/ofbiz/site/trunk/pluginsdoc/birt/html5/birt.html" title="Birt Flexible Reports documentation" target="_blank">documented inside the birt component with AsciiDoc</a>.<br></p> 
  <h2>But in few words, why are the new OFBiz Flexible Reports important?</h2> 
  <p> </p> 
  <p>When developing an application, the reporting part is often neglected. This is because, though it seems trivial to create reports, it's often more complicated. And reporting is almost always a major function in displaying and using information from any application software.</p> 
  <p>To create reports in OFBiz with Birt before the OFBiz Flexible Reports, you had to:</p> 
  <ol> 
    <li>completely create the design of your report using the Birt Report Designer.</li> 
    <li>Code in Java how to collect and insert the data  into the report</li> 
  </ol><br>In other words, you had to create a complete .rptdesign file using the Birt Report Designer. And once done as a single piece, you could not change your report without changing the .rptdesign file. This was time consuming and something that users could not easily adapt to their needs.<br> 
  <p><a href="https://ci.apache.org/projects/ofbiz/site/trunk/pluginsdoc/birt/html5/birt.html#_report_creation" title="Wiki: report master creation" target="_blank">As explained in the OFBiz documentation</a>, with the OFBiz Flexible Reports you can:</p> 
  <ol> 
    <li> automatically create a .rptdesign file based on an Entity, an Entity View or even a Service. <br></li> 
    <li>It's then very easy, <a href="https://ci.apache.org/projects/ofbiz/site/trunk/pluginsdoc/birt/html5/birt.html#_using_the_birt_report_designer" title="Wiki: using the birt report designer" target="_blank">using the Birt Report Designer,</a> to add the data set you want to use.<br></li> 
    <li>Later, the report design can be easily enhanced by the user with the Birt Report Designer.</li> 
  </ol> 
  <p>Now you can see the advantages that OFBiz Flexible Reports has over what was previously available in OFBiz.</p> 
  <p>Thanks for taking the time to read this post and please feel free to provide your comments and feedback. For any questions please use the <a href="http://ofbiz.apache.org/mailing-lists.html">Apache OFBiz User Mailing list</a>.</p> 
  <p><strong>This blog post was written by&nbsp;</strong><span style="color: rgb(34, 34, 34); font-family: arial,sans-serif; font-size: 12.8px; white-space: nowrap; --darkreader-inline-color:#303436;" data-darkreader-inline-color=""><strong>Jacques Le Roux</strong></span><strong>, Apache OFBiz PMC Member, Committer and ASF Member.</strong></p>
  <p>Adapted from an initial work by <a class="user-hover user-avatar" rel="fwurmser" id="commentauthor_15193223_verbose" href="https://issues.apache.org/jira/secure/ViewProfile.jspa?name=fwurmser">François Wurmser</a> <span class="commentdate_15193223_verbose subText"><span class="date user-tz" title="14/Mar/16 13:53"><time class="livestamp" datetime="2016-03-14T13:53:55+0100"></time></span></span>and the Nereide team.<br></p>
  <p> </p> 
  <p><br></p>
