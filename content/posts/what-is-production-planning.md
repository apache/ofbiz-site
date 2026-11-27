---
layout: post
title: What Is Production Planning? How Apache OFBiz Plans Manufacturing
date: '2026-11-26T14:00:00+00:00'
permalink: what-is-production-planning
metaDescription: "Production planning decides what to make, how much and when. See how Apache OFBiz uses bills of materials, routings and MRP to plan manufacturing."
---
## What is production planning?

Production planning means deciding what to make, how much, and when, so products are ready when customers need them.

Without a plan, parts run out, machines sit idle, and orders ship late.

## What does a production plan answer?

- What must we make, and how many?
- What parts does each product need?
- Which steps and machines make it?
- When can it be ready?
- Which parts must we buy first?

## How does Apache OFBiz handle production planning?

Apache OFBiz is a free, open source ERP. It answers each question with one part of its Manufacturing application:

- **Parts:** a bill of materials lists every part of a product, to any depth.
- **Steps:** a routing lists the steps that make a product. Each step names a machine, called a work center, and the time it takes.
- **Working hours:** a work calendar sets the shifts and holidays of each machine. OFBiz uses it to work out when a job will finish.
- **What to make and buy:** MRP, material requirements planning, compares demand with stock and with supply already planned.

## How does MRP turn demand into a plan?

Demand comes from approved sales orders. Supply comes from stock, open purchase orders and production runs. For every shortfall, MRP proposes a requirement: make the item, or buy it. A planner reviews the proposals and approves them.

In a test with the OFBiz demo data, two orders asked for 3 Gizmo Gift Sets, and none were in stock. MRP proposed making 3.

![The MRP plan for the gift set, with orders for 3 and a proposal to make 3](/images/posts/production-planning/mrp-log.png)

The plan shows supply as positive and demand as negative, with a running total.

## How does a plan become real work?

An approved requirement to make an item becomes a production run, also called a work order. An approved requirement to buy becomes a purchase order, grouped by supplier.

On the shop floor, staff start each task of the production run, issue the parts from stock, and record the quantity made.

## Where should you start?

Set up the bill of materials and the routing for one product. Then create one production run by hand, before you run MRP.

## Try it yourself

Our overview page links to a step-by-step guide for each part:
[Production Planning in Apache OFBiz: From Demand to Finished Goods](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436474).

For a full MRP run, see
[A Practical Walkthrough of MRP Execution in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=372214398).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
