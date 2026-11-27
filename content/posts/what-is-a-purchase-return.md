---
layout: post
title: What Is a Purchase Return? Returning Stock to a Supplier in Apache OFBiz
date: '2026-11-26T13:40:00+00:00'
permalink: what-is-a-purchase-return
metaDescription: "A purchase return sends received stock back to the supplier, for example damaged goods. See how Apache OFBiz creates the return and ships the stock out."
---
## What is a purchase return?

A purchase return sends stock you bought back to the supplier. Common reasons are damaged goods, the wrong product, or too many units.

It is also called a return to vendor, or a supplier return. Many suppliers give you a return number first, called an RMA (return merchandise authorization).

## What does a purchase return need?

- A link to the purchase order, so you return what you actually bought, at the price you paid.
- A reason for each returned item.
- The supplier's return number, if they gave one.
- A shipment out of your warehouse, so the stock numbers drop.

## How does Apache OFBiz handle purchase returns?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. You create the return from the purchase order:

1. Open the purchase order and click Create Return.
2. Enter the quantity to return and a reason, such as Defective Item.
3. Approve the return.

In a test with the OFBiz demo data, we returned 1 Round Gizmo from a purchase order that brought in 2. OFBiz filled in the price we paid.

![Returning one Round Gizmo from the purchase order](/images/posts/purchase-return/return-items-from-po.png)

## How does the stock leave the warehouse?

From the approved return, you create a return shipment, a shipment from your warehouse to the supplier. You then tell OFBiz which stock goes into the box. This is called issuing stock to the shipment.

![Issuing the returned unit from stock to the return shipment](/images/posts/purchase-return/issue-stock-to-shipment.png)

OFBiz checks three things. The stock must be the same product. The quantity cannot be more than the stock available, or more than the return quantity.

The stock numbers drop when you issue the stock, not when the truck leaves. So check the quantity before you issue it.

## Try it yourself

Our step-by-step guide walks through every screen of the test above:
[Return Stock to a Supplier (Purchase Return) in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436310).

For the purchase order itself, see
[Create and Approve a Purchase Order by Hand in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436364).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
