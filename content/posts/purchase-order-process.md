---
layout: post
title: The Purchase Order Process in Apache OFBiz
date: '2026-11-26T16:40:00+00:00'
permalink: purchase-order-process
metaDescription: "The purchase order process runs from creating a purchase order to receiving the goods. See each step in Apache OFBiz, with supplier prices and approval."
---
## What is a purchase order?

A purchase order, or PO, tells a supplier what to deliver, how many, at what price, and where. Once the supplier accepts it, it is an agreement between you and the supplier.

## What are the steps of the purchase order process?

1. Know what to buy. This can come from a staff request, a reorder point or a plan.
2. Create the purchase order, with the supplier's prices.
3. Approve it.
4. Send it to the supplier.
5. Receive the goods into the warehouse.
6. Check the supplier's invoice against the order and the receipt.

## How does Apache OFBiz handle purchase orders?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. Before you start, each supplier needs a price for each product it sells you. OFBiz uses these prices on every order.

In the Order application, the buyer chooses the supplier and adds the products. OFBiz takes the unit price from the supplier's price, for that quantity and currency.

![Two items on a new purchase order, with quantity and unit price](/images/posts/purchase-order-process/po-items.png)

If the supplier has no price for a product, OFBiz does not add it. This stops orders to the wrong supplier.

The buyer then chooses the receiving warehouse and creates the order. A new order has the status Created.

![A new purchase order in status Created, with the Approve Order button](/images/posts/purchase-order-process/po-created.png)

## What does approval do?

When someone clicks Approve Order, the order and its lines become Approved. The warehouse can now receive the goods against it. You can send the order to the supplier from the order page, for example by email.

In a test with the OFBiz demo data, we ordered 10 units of a demo product from a demo supplier at 9.00 each. After approval, the Receive buttons appeared on the order.

## Where else do purchase orders come from?

OFBiz can also create purchase orders from approved requests, called requirements. It groups them by supplier.

## Try it yourself

Our step-by-step guide walks through each screen:
[Create and Approve a Purchase Order by Hand in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436364).

To start from internal requests, read our post
[What Is a Purchase Requisition?](/posts/what-is-a-purchase-requisition/).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
