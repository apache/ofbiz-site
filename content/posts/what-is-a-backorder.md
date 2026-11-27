---
layout: post
title: What Is a Backorder? How Apache OFBiz Handles It
date: '2026-11-26T12:00:00+00:00'
permalink: what-is-a-backorder
metaDescription: "A backorder is an order for stock you do not have yet. See how Apache OFBiz takes backorders, and fills them when new stock arrives."
---
## What is a backorder?

A backorder is an order for stock you do not have yet. The customer orders today, and you ship when new stock arrives.

Backorders happen when demand is higher than stock. A product sells faster than expected, or a supplier delivers late.

A business can handle this in two ways:

- Refuse the order, and lose the sale.
- Take the order as a backorder, and ship it later.

Taking backorders keeps the sale. But the business must know which orders are waiting, and fill them first when stock comes in.

## What does a good backorder process need?

- Clear stock numbers. Staff need to see what is on the shelf, and what is already promised to orders.
- A record of what each order is waiting for.
- New stock that goes to the waiting orders first, in a fair order.
- A message to the customer when an order will ship late.

## How does Apache OFBiz handle backorders?

Apache OFBiz is a free, open source ERP. It tracks two numbers for every product in every warehouse:

- Quantity on hand (QOH): the units on the shelf.
- Available to promise (ATP): the units no order has reserved yet.

When an order asks for more than is available, OFBiz reserves what it has. It marks the rest as backordered, and ATP goes below zero.

In a test with the OFBiz demo data, Nan Gizmo had 8 units free. A customer ordered 10. OFBiz reserved the 8 units, and marked the other 2 as backordered.

![An order for 10 Nan Gizmos, with 8 in stock and 2 backordered](/images/posts/backorders/order-backordered.png)

We then received 5 new Nan Gizmos into the warehouse. OFBiz gave the new stock to the waiting order by itself. The backorder was cleared, and 3 units were left free.

![The same order after receiving 5 units, with nothing backordered](/images/posts/backorders/order-after-receive.png)

When several orders wait for the same product, OFBiz serves them in order of priority and promised date.

## Can OFBiz tell the customer?

Yes. A daily job, BackOrder Notification, checks the orders still waiting for stock. If an order cannot ship by its promised date, OFBiz sets a new estimated ship date and emails the customer. The job is part of OFBiz, but an administrator must schedule it first.

## Try it yourself

Our step-by-step guide shows the store setting that allows backorders, and walks through the test above:
[Backorders in Apache OFBiz: Selling When Stock Runs Out](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436435).

To learn how OFBiz reserves stock for orders, see
[Reserve Stock for Orders in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436238).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
