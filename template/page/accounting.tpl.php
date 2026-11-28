<?php //Variable declarations for region templates
  $head_title = '<title>Open Source Accounting Software | Apache OFBiz</title>';
  $head_description = 'Apache OFBiz is free, open source accounting software. Keep the general ledger, invoices, payments and financial reports joined to orders and stock.';
?>

  <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Open Source Accounting Software</h1>
          <div class="span4" id="navTrail"> <a href="<?= $base_url ?>index.html" class="homeLink">home</a><span>/</span><a href="<?= $base_url ?>business-users.html#UsrModules">Modules</a><span>/</span><span class="current">Accounting</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
    <div class="slice clearfix">
      <div class="container">
        <div class="row ">
          <aside class="span2 PortfolioStickyMenu" id="sidebar">
            <ul  id="subnav" class="nav nav-stacked sidenav scrollspyNav">
              <li> <a href="#Acc1"> Who it is for </a> </li>
              <li> <a href="#Acc2"> Features </a> </li>
              <li> <a href="#Acc3"> How it connects </a> </li>
              <li> <a href="#Acc4"> Try it </a> </li>
              <li> <a href="#Acc5"> Questions </a> </li>
              <li> <a href="#Acc6"> Get help </a> </li>
            </ul>
          </aside>
          <div class="span10">
            <section class="slice row clearfix">
              <div class="span10">
                <p>Apache OFBiz is open source accounting software. It shares one database with orders, purchasing and stock. Sales, receipts and payments post to the general ledger as the work happens. It is free and open source under the Apache License 2.0.</p>
              </div>
            </section>
            <section id="Acc1" class="slice row clearfix">
              <div class="span10">
                <h2>Who it is for</h2>
                <div class="divider"><span></span></div>
                <ul class="iconsList">
                  <li><i class="icon-pin"></i> Finance teams in companies that sell, buy and hold stock.</li>
                  <li><i class="icon-pin"></i> Businesses that want invoices and the ledger to follow orders and shipments.</li>
                  <li><i class="icon-pin"></i> Groups that keep the books for more than one company in one system.</li>
                </ul>
              </div>
            </section>
            <section id="Acc2" class="slice row clearfix">
              <div class="span10">
                <h2>What OFBiz does for accounting</h2>
                <div class="divider"><span></span></div>
                <h3>Chart of accounts and general ledger</h3>
                <p>Set up your chart of accounts once. Then use it for each company you keep books for. The general ledger is the record of every amount posted to each account. Staff can also enter a journal entry by hand.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_organization_gl_settings">Accounting, Organization GL Settings</a></p>
                <h3>Postings that follow the work</h3>
                <p>OFBiz writes the ledger entries for you when the work is done. Goods received and goods shipped create entries. So do ready invoices, and payments received or sent. A stock count difference and a production run post too.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_organization_gl_settings">Accounting, Organization GL Settings</a></p>
                <h3>Sales invoices and card payments</h3>
                <p>OFBiz creates the sales invoice when an order is packed. With a payment provider connected, a card is authorized when the order is placed and charged when the invoice is ready. Trunk ships no provider connections, so a developer must add one.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436343">Invoice and Capture Payment for a Sales Order in Apache OFBiz</a></p>
                <h3>Purchase invoices</h3>
                <p>When a supplier shipment is fully received, OFBiz prepares the purchase invoice. It uses the received quantities and the prices on the purchase order. Staff check it, fix any differences and approve it.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=406620312">Managing Purchase Invoices in Apache OFBiz</a></p>
                <h3>Pay suppliers</h3>
                <p>Pay one invoice in full or in parts. Or pay several invoices with one payment. OFBiz can print checks for a group of payments. The money itself moves through your bank.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=406620331">Making Payments against Purchases in Apache OFBiz</a></p>
                <h3>See what customers and suppliers owe</h3>
                <p>The receivables and payables screens list invoices that are past due or due soon. Each list shows a total. Receivables are amounts customers owe you. Payables are amounts you owe suppliers.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_invoices">Accounting, Invoices</a></p>
                <h3>Bank accounts and reconciliation</h3>
                <p>Keep each bank account as a financial account. Group received payments into a deposit, and match the bank statement to the ledger. This matching is called reconciliation.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_financial_accounts">Accounting, Financial Accounts</a></p>
                <h3>Sales tax</h3>
                <p>Set up tax rates by country, state, county and postal code. OFBiz adds the tax lines to each order. The tax posts to its own ledger account.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436340">Set Up Sales Tax for Orders in Apache OFBiz</a></p>
                <h3>Fixed assets and depreciation</h3>
                <p>Keep a record of each machine, vehicle or building, with its cost and maintenance. OFBiz works out its depreciation by straight line or double declining balance. Depreciation is the part of an asset's cost used up each year.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_accounting">Accounting</a></p>
                <h3>Budgets</h3>
                <p>Write a budget for a period, line by line. Send it for review, then approve or reject it.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_accounting">Accounting</a></p>
                <h3>Financial reports and period close</h3>
                <p>Run the trial balance, income statement, balance sheet and cash flow statement. Compare two periods side by side, and save most reports as PDF or CSV. An inventory valuation report shows what your stock is worth. When a period is done, close it so no more entries go into it.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_accounting">Accounting</a></p>
              </div>
            </section>
            <section id="Acc3" class="slice row clearfix">
              <div class="span10">
                <h2>How it connects with the rest of OFBiz</h2>
                <div class="divider"><span></span></div>
                <p>Orders create sales invoices, and purchase orders create purchase invoices. Stock moves post their value to the ledger. See <a href="<?= $base_url ?>order-management.html">Order Management</a>, <a href="<?= $base_url ?>inventory-management.html">Inventory Management</a> and <a href="<?= $base_url ?>warehouse-management.html">Warehouse Management</a>.</p>
              </div>
            </section>
            <section id="Acc4" class="slice row clearfix">
              <div class="span10">
                <h2>Try it</h2>
                <div class="divider"><span></span></div>
                <ul class="iconsList">
                  <li><i class="icon-pin"></i> Open the <a href="<?= $base_url ?>ofbiz-demos.html">public demo</a> and go to the Accounting application.</li>
                  <li><i class="icon-pin"></i> <a href="<?= $base_url ?>download.html">Download Apache OFBiz</a> and run it on your own computer.</li>
                  <li><i class="icon-pin"></i> Read the <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_accounting">Accounting chapter of the OFBiz user manual</a>.</li>
                </ul>
              </div>
            </section>
            <section id="Acc5" class="slice row clearfix">
              <div class="span10">
                <h2>Questions and answers</h2>
                <div class="divider"><span></span></div>
                <h3>Is Apache OFBiz free?</h3>
                <p>Yes. It is open source under the Apache License 2.0. You can use it, change it and run it at no cost.</p>
                <h3>Can I use the accounting on its own?</h3>
                <p>Yes, but it is built to work with orders, purchasing and stock. Most of its value comes from postings that follow that work.</p>
                <h3>Does it compare my budget with actual spending?</h3>
                <p>Not on a built-in report today. You can record, review and approve budgets.</p>
                <h3>Does it file tax returns or download tax rates?</h3>
                <p>No. You set up the tax rates yourself, and file returns outside OFBiz.</p>
                <h3>Do I need technical skills to set it up?</h3>
                <p>Yes. OFBiz runs on Java, and setup needs some technical work. An accountant should also map your ledger accounts. The <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a> names people who can help.</p>
              </div>
            </section>
            <section id="Acc6" class="slice row clearfix">
              <div class="span10">
                <h2>Get help</h2>
                <div class="divider"><span></span></div>
                <p>Ask questions on the <a href="<?= $base_url ?>mailing-lists.html">user mailing list</a>. See who uses OFBiz on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+User+List">user list</a>, and find help on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a>.</p>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
 </section>
