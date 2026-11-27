---
layout: post
title: What Is a Stock Ledger? Stock History in Apache OFBiz
date: '2026-11-26T14:50:00+00:00'
permalink: what-is-a-stock-ledger
metaDescription: "A stock ledger records every change to your stock, with the reason for each. See how Apache OFBiz keeps a history of every receipt, reservation and shipment."
---
## What is a stock ledger?

A stock ledger is a record of every change to your stock. Each line says what changed, by how much, when, and why. Stock comes in on a receipt, goes out on a shipment, or changes after a count.

With a stock ledger, you can explain any stock number. If the shelf has 10 units today, the ledger shows how it got there.

## What should a stock ledger show?

- The date of each change.
- How much the quantity went up or down.
- What caused it: a purchase order, a sales order, a shipment or a stock count.
- A reason, for counts and manual changes.

## How does Apache OFBiz keep a stock ledger?

Apache OFBiz is a free, open source ERP. It records each batch of stock as an inventory item. Every change to an inventory item is saved as a line in its history. You see it on the item's Inventory Details tab.

OFBiz tracks two numbers on each line:

- Quantity on hand (QOH): the units on the shelf.
- Available to promise (ATP): the units no order has reserved yet.

Each line shows how much each number changed, with the order, shipment, receipt or stock count that caused it.

![The history of one inventory item, with each change and its cause](/images/posts/stock-ledger/item-history.png)

## How do you read the history?

Take order WSCO10431 for 2 units in the OFBiz demo data, as shown above:

1. When the order is placed, ATP drops by 2. The line shows the order. The units are reserved, but still on the shelf.
2. When the order ships, QOH drops by 2. The line shows the shipment. The units have left the warehouse.

A stock count works the same way. If the count finds 1 unit missing, staff record -1 for both numbers, with a reason such as Lost.

## Where do you see the totals?

The history is kept for each inventory item. For the totals of each product in a warehouse, use the Inventory tab of the warehouse. It shows the quantity on hand and available for every product.

## Try it yourself

Our step-by-step guide shows the history and the stock reports:
[Read Stock Reports: On Hand, Value and History in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436293).

To record a stock count, see
[Count Stock and Adjust Quantities in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436231).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
