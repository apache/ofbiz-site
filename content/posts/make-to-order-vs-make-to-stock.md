---
layout: post
title: Make to Order vs Make to Stock in Apache OFBiz
date: '2026-11-26T14:20:00+00:00'
permalink: make-to-order-vs-make-to-stock
metaDescription: "Make to order means making a product only when a customer orders it. Make to stock means making it ahead. See how Apache OFBiz plans both with MRP."
---
## What is the difference?

Make to order means you make a product only when a customer orders it. Make to stock means you make it ahead, to keep a set amount on the shelf.

| | Make to order | Make to stock |
| :--- | :--- | :--- |
| When you make it | After the order comes in | Before the order comes in |
| Stock of finished goods | Little or none | Kept at a target level |
| Customer waits | Yes, while you make it | No |
| Good for | Custom or costly products | Steady, fast-selling products |

Many manufacturers do both, for different products.

## What does each need?

- Make to order needs a fast link from the sales order to the work, so production starts at once.
- Make to stock needs a target stock level, and a check that plans more work when stock drops.

## How does Apache OFBiz handle both?

Apache OFBiz is a free, open source ERP. It plans both with MRP, material requirements planning. MRP compares demand with stock and with production already planned. For each shortfall, it proposes a requirement to make the product.

**Make to order.** The approved sales order is the demand. In a test with the OFBiz demo data, two orders asked for 3 Gizmo Gift Sets, and none were in stock. MRP proposed making 3.

![The MRP plan, with orders for 3 gift sets and a proposal to make 3](/images/posts/make-to-order/mrp-make-to-order.png)

A planner approved the proposal, and OFBiz created a production run for 3 gift sets by itself.

**Make to stock.** You give the product a minimum stock in the warehouse. MRP then plans to keep at least that much, beyond what orders need. We set the minimum to 5 and ran MRP again. MRP counted the production run for the 3 ordered sets. It then proposed making 5 more for stock.

![The MRP plan after setting a minimum stock of 5](/images/posts/make-to-order/mrp-make-to-stock.png)

## What about assemble to order?

Assemble to order means you keep the parts in stock, and put the product together when the order comes in. In OFBiz, an auto kit does this without MRP. An order for an auto kit starts a production run at once.

## One setting to watch

MRP plans a product in a warehouse only when the product is set up in that warehouse. Add the warehouse on the product's Facilities tab first, even with a minimum stock of 0.

## Try it yourself

Our step-by-step guide walks through both tests:
[Make to Order and Make to Stock in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436485).

For assemble to order, see
[Kitting in Apache OFBiz: Selling Several Products as One Kit](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436446).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
