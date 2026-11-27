---
layout: post
title: What Is a Work Order? Production Runs in Apache OFBiz
date: '2026-11-26T12:20:00+00:00'
permalink: what-is-a-work-order
metaDescription: "A work order is an instruction to make a quantity of a product. See how Apache OFBiz runs work orders as production runs, with tasks, parts and finished goods."
---
## What is a work order?

A work order is an instruction to make a quantity of a product. It says what to make, which parts to use, and which steps to follow.

Some businesses call it a production order. Each step on it is sometimes called a job card. The step tells the shop floor what to do, on which machine, and for how long.

## What does a work order hold?

- The product and the quantity to make.
- The parts, with the quantity of each. This comes from the bill of materials, the list of parts in a product.
- The steps, in order, with the machine and the time for each. This comes from the routing, the list of steps that make a product.
- The status: planned, running or done.

## How does Apache OFBiz handle work orders?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. In OFBiz, a work order is a production run, and each step is a production run task. The machine on each task is called a work center.

When you create a production run, OFBiz copies the steps from the routing and the parts from the bill of materials. Staff then work through the run:

1. Confirm the run, so it is ready for the shop floor.
2. Start each task.
3. Issue the parts. OFBiz takes them out of stock.
4. Complete the task with the quantity made.
5. Put the finished goods into stock.

In a test with the OFBiz demo data, we made 2 units of a demo product. Each unit needs 2 of Material A and 3 of Material B. OFBiz took 4 of Material A and 6 of Material B out of stock.

![The task of the production run, completed, with the materials it used](/images/posts/work-orders/task-and-materials.png)

When the task was done, OFBiz put 2 finished units into the warehouse.

![The production run, completed, with 2 units produced](/images/posts/work-orders/completed.png)

## Where do work orders come from?

You can create a production run by hand. OFBiz can also propose them. MRP, material requirements planning, compares orders with stock. It proposes what to make, and each approved proposal becomes a production run.

## Try it yourself

Our step-by-step guide walks through the test above:
[Work Orders in Apache OFBiz: Production Runs, Tasks and Job Cards](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436441).

To see how planning fits together, read
[Production Planning in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436474).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
