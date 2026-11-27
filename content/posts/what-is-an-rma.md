---
layout: post
title: What Is an RMA? Customer Returns in Apache OFBiz
date: '2026-11-26T16:10:00+00:00'
permalink: what-is-an-rma
metaDescription: "An RMA, or return merchandise authorization, is the approval a customer needs to send goods back. See how Apache OFBiz handles customer returns."
---
## What is an RMA?

An RMA, or return merchandise authorization, is the approval a customer needs before sending goods back. The business gives the return a number. The customer writes it on the parcel, so the warehouse knows what it is.

Without an RMA, parcels arrive with no record. Nobody knows which order they came from, or what the customer expects.

## What does a returns process need?

- A return record, linked to the original order.
- A reason for each returned item, such as defective or not wanted.
- An approval step.
- A way to receive the parcel and decide if the units can be sold again.
- A refund, a credit or a replacement for the customer.

## How does Apache OFBiz handle customer returns?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. In OFBiz, the RMA is the return record, with its own return number.

1. Customer service creates the return for the customer.
2. They load the order's lines, and choose the quantity and a reason for each one.
3. They accept the return. OFBiz then creates an incoming return shipment.

In a test with the OFBiz demo data, we returned two widgets from one order. One was not wanted, and one was defective.

![The return items, loaded from the order, with a reason for each line](/images/posts/rma/return-items.png)

## How does the warehouse receive it?

When the parcel arrives, staff open the return and click Receive Return. For each line, they choose a location and a stock status. The status tells OFBiz if the units can be sold again. The guide below explains one known issue with the Defective status.

![Receiving the returned items, with a status for each line](/images/posts/rma/receive-return.png)

OFBiz puts the units back into stock. When all lines are received, it handles the return type. For a refund, it creates the refund to the customer.

## Try it yourself

Our step-by-step guide walks through the test above:
[Receive Customer Returns Back into Stock in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436300).

For returns you send to a supplier, read our post
[What Is a Purchase Return?](/posts/what-is-a-purchase-return/).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
