---
layout: post
title: What Is Putaway? Putting Stock Away in Apache OFBiz
date: '2026-11-26T16:50:00+00:00'
permalink: what-is-putaway
metaDescription: "Putaway means moving received stock to its place in the warehouse. See how Apache OFBiz suggests locations when you receive, and lists stock moves."
---
## What is putaway?

Putaway means moving received stock from the dock to its place in the warehouse. It is the step between receiving the goods and picking them for orders.

Good putaway saves time later. When stock sits in the right place, pickers find it fast.

## What does a putaway process need?

- A home location for each product, such as a shelf or a bin.
- Pick locations, where pickers take stock, and bulk locations for extra stock.
- A suggestion of where each product should go.
- A list of moves from bulk to pick locations, when a pick location runs low.

## How does Apache OFBiz handle putaway?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. Each product can have home locations in a warehouse. A location can be a pick location or a bulk location.

When staff receive stock, OFBiz offers the product's home locations. Staff choose one, and the stock is recorded there.

In the OFBiz demo data, Round Gizmo has one pick location and one bulk location. When we received it, OFBiz offered only those two.

![Receiving stock, with the product's home locations to choose from](/images/posts/putaway/receive-with-location.png)

## How does stock get to the pick location?

OFBiz lists the moves your pick locations need on the warehouse's Stock Moves tab. A move is listed when:

- an order has reserved stock that still sits in a bulk location, or
- a pick location has less stock than its minimum.

In the demo data, Big Gizmo had 3 units in its pick location, but a minimum of 5. OFBiz suggested a move from its bulk location, which held 15 units.

![The Stock Moves tab with a suggested move](/images/posts/putaway/stock-moves.png)

Staff confirm the move, and OFBiz updates both locations. For other moves inside the warehouse, they use Quick Stock Move.

## Try it yourself

Our step-by-step guide shows both screens:
[Put Away Received Stock into Locations in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436223).

To set up locations first, see
[Set Up Warehouses and Locations in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436219).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
