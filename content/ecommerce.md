---
title: "Open Source eCommerce"
layout: "page"
trail_title: "e-Commerce"
metaDescription: "Apache OFBiz has a free, open source online store. Customers browse, search, pay and track orders, on the same system as your stock and accounts."
sections:
  - title: "Who it is for"
    url: "#Ecom1"
  - title: "Features"
    url: "#Ecom2"
  - title: "How it connects"
    url: "#Ecom3"
  - title: "Try it"
    url: "#Ecom4"
  - title: "Questions"
    url: "#Ecom5"
  - title: "Get help"
    url: "#Ecom6"
---
<p>Apache OFBiz includes an online store for your own website. Customers browse your catalog, fill a cart and check out. Each order lands in the same system as your stock and accounting. It is free and open source under the Apache License 2.0.</p>

<h2 id="Ecom1">Who it is for</h2>
<div class="divider"><span></span></div>
<ul class="iconsList">
  <li><i class="icon-pin"></i> Businesses that want their own web store, not a store on someone else's platform.</li>
  <li><i class="icon-pin"></i> Companies that want web orders, stock and invoices in one system.</li>
  <li><i class="icon-pin"></i> Businesses that sell to other businesses, with quotes and purchase order numbers.</li>
</ul>

<h2 id="Ecom2">What the OFBiz online store does</h2>
<div class="divider"><span></span></div>
<h3>A store front for each store</h3>
<p>The online store shows the catalog of one product store. Its prices, promotions, tax and shipping all come from the Catalog application. Customers can choose their language and currency.
Where: Catalog &gt; Stores</p>
<h3>Browse and search products</h3>
<p>Customers browse by category and open a page for each product. They choose a variant, such as color and size. They search by keyword and compare products side by side.
Where: online store &gt; category and product pages</p>
<h3>Cross-sell and recently viewed</h3>
<p>Each product page can show related products, such as accessories or a better model. The store also lists the products the customer looked at last.
Where: Catalog &gt; Products &gt; Associations</p>
<h3>Cart and checkout</h3>
<p>Customers add items, change quantities and check out. They pick a ship-to address and a shipping method. One order can ship to several addresses. Guests can check out without an account, on a single checkout page.
Where: online store &gt; cart</p>
<h3>Customer accounts and order history</h3>
<p>Customers register and keep their addresses and saved payment methods. They see their past orders and the status of each one. They can cancel an item that has not shipped.
Where: online store &gt; My Account</p>
<h3>Promotions and coupon codes</h3>
<p>Promotions set up in the Catalog apply in the cart. Customers enter coupon codes at checkout and see the discount at once.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436336">Set Up Promotions and Coupon Codes in Apache OFBiz</a></p>
<h3>Gift cards</h3>
<p>Customers buy gift cards and pay with them. They can check a gift card balance online.
Where: online store &gt; My Account</p>
<h3>Shopping lists and repeat orders</h3>
<p>Customers save products in shopping lists for later. A list can be set to order again on a schedule, such as every month.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436351">Set Up Recurring Orders and Subscriptions in Apache OFBiz</a></p>
<h3>Payment options</h3>
<p>Each store chooses which payment types it accepts. Options include card, bank account, gift card, cash on delivery and pay later. Card payments need a connection to your payment provider.
Where: Catalog &gt; Stores &gt; Payments</p>
<h3>Customer returns</h3>
<p>Customers ask to return items from a past order. Staff then receive the return in the Order application and refund the customer.
Where: online store &gt; Order History</p>
<h3>Business customers</h3>
<p>Business customers can enter their own purchase order number. They can turn a cart into a request for a quote. Then they order from the accepted quote.
Where: online store &gt; Quotes</p>
<h3>Reviews, blog and forum</h3>
<p>Customers write product reviews. Each store sets whether staff approve them first. The store can also hold a blog and a forum.
Where: Catalog &gt; Reviews</p>

<h2 id="Ecom3">How it connects with the rest of OFBiz</h2>
<div class="divider"><span></span></div>
<p>Web orders appear in the same Order application as phone orders. They reserve stock, and the warehouse picks and ships them. Products, prices and promotions come from the Catalog. See <a href="/order-management/">Order Management</a>, <a href="/catalog-management/">Catalog Management</a> and <a href="/warehouse-management/">Warehouse Management</a>.</p>

<h2 id="Ecom4">Try it</h2>
<div class="divider"><span></span></div>
<ul class="iconsList">
  <li><i class="icon-pin"></i> Open the <a href="/ofbiz-demos/">public demo store</a>. The demo also has the back office.</li>
  <li><i class="icon-pin"></i> <a href="/downloads/">Download Apache OFBiz</a> and add the ecommerce plugin.</li>
  <li><i class="icon-pin"></i> Read the order guides on the wiki: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436386">Apache OFBiz for Order Management</a>.</li>
</ul>

<h2 id="Ecom5">Questions and answers</h2>
<div class="divider"><span></span></div>
<h3>Is Apache OFBiz free?</h3>
<p>Yes. It is open source under the Apache License 2.0. You can use it, change it and run it at no cost.</p>
<h3>Is the online store part of the main download?</h3>
<p>No. It is a plugin, an add-on you install separately. Its orders land in the same Order application.</p>
<h3>Can I take card payments?</h3>
<p>Yes, but you need a developer to connect your payment provider. OFBiz does not ship ready connections to payment providers today.</p>
<h3>Can I change how the store looks?</h3>
<p>Yes. The store pages are templates that a web developer can change. Expect design work before you go live.</p>
<h3>Do I need technical skills to set it up?</h3>
<p>Yes. OFBiz runs on Java, and setup needs some technical work. The <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a> names people who can help.</p>

<h2 id="Ecom6">Get help</h2>
<div class="divider"><span></span></div>
<p>Ask questions on the <a href="/mailing-lists/">user mailing list</a>. See who uses OFBiz on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+User+List">user list</a>, and find help on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a>.</p>
