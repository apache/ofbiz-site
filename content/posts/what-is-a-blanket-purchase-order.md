---
layout: post
title: What Is a Blanket Purchase Order? Supplier Agreements in Apache OFBiz
date: '2026-11-26T16:00:00+00:00'
permalink: what-is-a-blanket-purchase-order
metaDescription: "A blanket purchase order fixes prices with a supplier for a period, with several deliveries. See how Apache OFBiz keeps agreed supplier prices for every order."
---
## What is a blanket purchase order?

A blanket purchase order is a long-term deal with a supplier. You agree on prices for a period, such as one year. Then you order the goods in several deliveries, each called a release.

Buyers use it for items they buy again and again. They agree the price once, and do not need to agree it again for each order.

Many blanket orders also set a total quantity or a total amount for the period.

## What does a blanket order need?

- The agreed price of each product.
- The dates when the prices are valid.
- An order for each delivery, at the agreed price.
- Often, a check of how much of the total has been ordered.

## How does Apache OFBiz handle it?

Apache OFBiz is a free, open source ERP. It keeps the agreed prices in a supplier agreement. The agreement names the supplier, the dates it is valid, and a fixed price for each product.

In a test with the OFBiz demo data, we agreed a price of 10.00 for Round Gizmo with a supplier. The price shows on the product.

![The agreement and its price on the product](/images/posts/blanket-purchase-order/product-agreements.png)

For each delivery, the buyer creates a purchase order and chooses the agreement. OFBiz then uses the agreed price. It also copies the agreement's terms, such as payment terms, onto the order.

![A purchase order line at the agreed price of 10.00](/images/posts/blanket-purchase-order/po-agreement-price.png)

## What does OFBiz not track?

A supplier agreement in OFBiz holds prices and terms. It does not hold a total quantity or a total amount for the period. So OFBiz does not show how much of a blanket order is left. Buyers who need that number must track it outside OFBiz.

## Try it yourself

Our step-by-step guide walks through the test above:
[Set Up a Supplier Agreement with Fixed Prices in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436376).

For normal supplier prices without an agreement, see
[Set Up Suppliers and Supplier Prices in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436368).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
