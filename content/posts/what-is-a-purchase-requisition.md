---
layout: post
title: What Is a Purchase Requisition? How Apache OFBiz Handles It
date: '2026-11-26T13:30:00+00:00'
permalink: what-is-a-purchase-requisition
metaDescription: "A purchase requisition is an internal request to buy something. See how Apache OFBiz approves requisitions and turns them into purchase orders by supplier."
---
## What is a purchase requisition?

A purchase requisition is an internal request to buy something. Staff ask for it, a manager approves it, and a buyer turns it into a purchase order for a supplier.

A requisition stays inside the company. A purchase order goes to the supplier. The requisition step lets a manager check each request before money is spent.

## What does a requisition process need?

- A record of what is needed, how many, where and by when.
- An approval step.
- A way to group approved requests by supplier, so one order covers many requests.
- A link from each order line back to its request.

## How does Apache OFBiz handle purchase requisitions?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. In OFBiz, a purchase requisition is called a requirement. Staff can create one by hand. OFBiz also creates them by itself, for example when stock falls below its minimum.

The flow has three steps:

1. Create the requirement, with the product, warehouse and quantity.
2. Approve it.
3. Turn approved requirements into purchase orders, grouped by supplier.

In a test with the OFBiz demo data, we asked for 20 Round Gizmos for a spring sale. A manager approved the request.

![Approving the requirement for 20 Round Gizmos](/images/posts/purchase-requisition/approve-requirement.png)

The buyer then opened the approved requirements by supplier. Each line shows the supplier's product code, last price and stock on hand.

![The approved requirement, with the supplier code and a price of 10.00](/images/posts/purchase-requisition/requirement-to-order.png)

The buyer ticked the line and created the order. OFBiz created a purchase order for 20 Round Gizmos, 200.00 in total.

## What happens to the requirement?

OFBiz links each order line to its requirement. When the purchase order is approved, the requirement changes to Ordered. It then leaves the list of approved requirements, so nobody orders it twice.

## Try it yourself

Our step-by-step guide walks through the test above:
[Purchase Requisitions in Apache OFBiz: From Request to Purchase Order](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436465).

To let OFBiz create requirements when stock runs low, see
[Set Minimum Stock and Reorder Quantities in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436233).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
