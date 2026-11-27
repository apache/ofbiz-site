---
layout: post
title: What Is a Sales Quote? From Quote to Order in Apache OFBiz
date: '2026-11-26T16:30:00+00:00'
permalink: what-is-a-sales-quote
metaDescription: "A sales quote is a price offer to a customer before they order. See how Apache OFBiz builds a quote, approves it and turns it into a sales order."
---
## What is a sales quote?

A sales quote is a price offer you send to a customer before they order. It lists the products, the quantities and the prices. It is often valid until a set date.

When the customer accepts, the quote becomes a sales order. The agreed prices must carry over exactly.

## What does a quoting process need?

- The products and quantities, with the normal price as a start.
- A way to change a price or give a discount for this customer.
- An approval, so the offer cannot change after it is sent.
- A document to send to the customer.
- A quick way to turn the accepted quote into an order.

## How does Apache OFBiz handle sales quotes?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. You create quotes in the Order application:

1. Create the quote for the customer.
2. Add the items. OFBiz fills in the normal price for this customer and store.
3. Change prices, or add a discount, if you agreed them.
4. Accept the quote. OFBiz then locks the items and prices.

You can print the quote as a PDF, or email it.

In a test with the OFBiz demo data, we quoted 5 Round Gizmos. The normal price was 38.40. We offered 35.00, and added a discount of 10.00.

![An approved quote, with the Create Order link](/images/posts/sales-quote/approved-quote.png)

## From quote to sales order

When the customer says yes, you click Create Order on the approved quote. OFBiz opens order entry with the quote already loaded. You choose the payment, check the order and create it.

![The order confirmation, with the quote price and discount](/images/posts/sales-quote/order-confirmation.png)

The order keeps the quote's prices and discount. The quote is then marked as Ordered, so it cannot be used twice.

## Try it yourself

Our step-by-step guide walks through the test above:
[Create a Quote and Turn It into a Sales Order in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436329).

To learn more about orders, read our post
[What Is a Sales Order?](/posts/what-is-a-sales-order/).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
