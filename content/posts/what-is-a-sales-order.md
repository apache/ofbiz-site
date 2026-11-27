---
layout: post
title: What Is a Sales Order? How Apache OFBiz Handles It
date: '2026-11-26T15:40:00+00:00'
permalink: what-is-a-sales-order
metaDescription: "A sales order records what a customer bought, at what price, and where to ship it. See how Apache OFBiz creates, prices and approves sales orders."
---
## What is a sales order?

A sales order records what a customer has agreed to buy. It lists the products, the quantities, the prices, the ship-to address and how the customer pays.

A sales order is not an invoice. The order says what to deliver. The invoice, sent later, asks for payment.

## What does a sales order hold?

- The customer, and the store or channel the order came from.
- Each product, with its quantity and price.
- Discounts, shipping charges and tax.
- The ship-to address and the shipping method.
- The payment method.
- A status, such as created, approved or completed.

## How does Apache OFBiz handle sales orders?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. Orders come from its web store, or staff enter them in the Order application, for example during a phone call.

When staff add a product, OFBiz sets the price from the store's prices and price rules. Store promotions apply by themselves. Under each line, staff see the stock on hand and the stock available.

In a test with the OFBiz demo data, we ordered 3 Round Gizmos. OFBiz set the price, and the store added a 10% discount.

![The order entry screen with Round Gizmo added](/images/posts/sales-order/order-items.png)

Staff then choose the ship-to address, the shipping method and the payment. OFBiz adds the shipping charge and tax, and creates the order.

## What happens after the order is created?

A new order starts in status Created. It reserves stock at once, so no other order can promise the same units.

![A new sales order in status Created, with the Approve Order button](/images/posts/sales-order/order-created.png)

Someone then approves the order. Some orders are approved by themselves, for example when a credit card payment is authorized. Only approved orders can be picked and packed.

## Try it yourself

Our step-by-step guide walks through each screen:
[Create a Sales Order in the Back Office in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436325).

To start from a price offer, read our post
[What Is a Sales Quote?](/posts/what-is-a-sales-quote/).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
