---
layout: "page"
title: "OFBiz Source Repository"
trail_title: "Source Repository"
description: "Community"

sections:
  - title: "Public Access"
    url: "#SRepoPublic"
  - title: "Committer Access"
    url: "#SRepoComm"
---
<h2 id="SRepoPublic">Public Access</h2>
<div class="divider"><span></span></div>

<p>Anyone can checkout or browse the source code in the OFBiz gitbox repository.</P>

### Browsing the Repository

<div class="divider"><span></span></div>

You can browse the repository using any of the following links.

<ul class="iconsList">
<li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-framework.git" target="external"><strong>gitbox ofbiz-framework</strong></a></li>
<li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-plugins.git" target="external"><strong>gitbox ofbiz-plugins</strong></a></li>
<li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-site.git" target="external"><strong>gitbox ofbiz-site</strong></a></li>
<li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-tools.git" target="external"><strong>gitbox ofbiz-tools</strong></a></li>
</ul>

<p></p>

Our ofbiz-framework trunk and ofbiz-plugins trunk are also available on Git at the links below:

<ul class="iconsList">
<li><i class="icon-pin"></i> <a href="https://github.com/apache/ofbiz-framework" target="external"><strong>ofbiz-framework trunk on Github</strong></a></li>
<li><i class="icon-pin"></i> <a href="https://github.com/apache/ofbiz-plugins" target="external"><strong>ofbiz-plugins trunk on Github</strong></a></li>
</ul>

### Checking out the Repository Source Code

**NOTE:** Apache OFBiz uses <a href="//git.apache.org/" target="external">**Git**</a> for version control of our source repository. If you are not familiar with Git and you don't have a Git client tool, then the following could be useful:

<i class="icon-pin"></i><a href="//git.apache.org/" target="external">**ASF Writable Git Services**</a>

To checkout the source code, simply use the following command (if you are using a GUI client, configure it appropriately).

## Trunk

On gitbox:

<dl class="iconsList">
<dt><i class="icon-pin"></i> <strong>ofbiz-framework</strong></dt>
<dd><code>$ git clone https://gitbox.apache.org/repos/asf/ofbiz-framework.git ofbiz-framework </code></dd>
<dt><i class="icon-pin"></i> <strong>ofbiz-plugins</strong></dt>
<dd><code>git clone https://gitbox.apache.org/repos/asf/ofbiz-plugins.git plugins </code></dd>
</dl>

On GitHub:

<dl class="iconsList">
<dt><i class="icon-pin"></i> <strong>ofbiz-framework</strong></dt>
<dd><code>$ git clone https://github.com/apache/ofbiz-framework.git ofbiz-framework </code></dd>
<dt><i class="icon-pin"></i> <strong>ofbiz-plugins</strong></dt>
<dd><code>$ git clone https://github.com/apache/ofbiz-plugins.git plugins </code></dd>
</dl>

## Releases

<dl class="iconsList">
<dt><i class="icon-pin"></i> <strong>ofbiz-framework branch release24.09 (stable)</strong></dt>
<dd><code>$ git clone https://gitbox.apache.org/repos/asf/ofbiz-framework.git ofbiz-framework </code></dd>
<dd><code>$ git checkout origin/release24.09</code></dd>
<dt><i class="icon-pin"></i> <strong>ofbiz-plugins branch release24.09 (stable)</strong><dt>
<dd><code>$ git clone https://gitbox.apache.org/repos/asf/ofbiz-plugins.git plugins </code></dd>
<dd><code>$ git checkout origin/release24.09 </code></dd>
</dt></dt></dl>

## Tools

<dl class="iconsList">
<dt><i class="icon-pin"></i> <strong>ofbiz tools</strong></dt>
<dd><code>$ git clone https://gitbox.apache.org/repos/asf/ofbiz-tools.git ofbiz-tools </code></dd>
</dl>

## Website

<dl class="iconsList">
<dt><i class="icon-pin"></i> <strong>ofbiz website</strong></dt>
<dd><code>$ git clone https://gitbox.apache.org/repos/asf/ofbiz-site.git ofbiz-website </code></dd>
</dl>

<h2 id="SRepoComm">Committer Access</h2>
<div class="divider"><span></span></div>

Committer access requires a special account which is provided by the OFBiz adminstrators. If you have a Committer account you can access the repository through HTTPS. When checking in, you will be prompted your userID and password

When you first connect you will be prompted to accept the SSL certificate. Verify the certificate. .

Git handles keyword expansion, EOL conversion as well as many other features. These features are configured at the server level, so you don't have to worry about them
