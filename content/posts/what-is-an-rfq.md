---
layout: post
title: What Is an RFQ? Supplier Price Quotes in Apache OFBiz
date: '2026-11-26T12:10:00+00:00'
permalink: what-is-an-rfq
metaDescription: "An RFQ, or request for quotation, asks a supplier for a price. See how Apache OFBiz records the supplier's quote and turns it into a purchase order."
---
## What is an RFQ?

An RFQ, or request for quotation, is a request to a supplier for a price. You tell the supplier what you want to buy and how many. The supplier sends back a quote: a price, and often a date until which the price is valid.

Buyers send RFQs to get the best price before they place an order. They often ask several suppliers for the same items, then pick the best offer.

## What does a buyer need to track?

- Which supplier offered which price, for which items and quantity.
- How long each offer is valid.
- Which offer was accepted, and which were rejected.
- A purchase order that keeps the agreed price, so the invoice can be checked against it.

## How does Apache OFBiz handle supplier quotes?

Apache OFBiz is a free, open source ERP. It records each supplier's answer as a purchase quote.

OFBiz does not send the RFQ itself. You ask the supplier by email or phone, as usual. When the supplier answers, you record the quote in the Order application:

1. Create a quote of type Product Purchase, for the supplier.
2. Add the items and quantities.
3. Enter the supplier's price.

In a test with the OFBiz demo data, Demo Supplier offered Round Gizmos at 15.00 each. We entered that price on the quote.

![A purchase quote with the supplier's price of 15.00](/images/posts/rfq/quote-prices.png)

To compare suppliers, you create one quote for each supplier with the same items. You then open each quote and compare the prices. You reject the offers you do not want.

## From quote to purchase order

When you accept a quote, OFBiz can turn it into a purchase order with one click. The order keeps the supplier, the items, the quantities and the quote price. The quote is then marked as Ordered, so it cannot be used twice.

![The purchase order created from the quote, with the price of 15.00](/images/posts/rfq/po-from-quote.png)

## Try it yourself

Our step-by-step guide shows every screen, from the new quote to the purchase order:
[Ask Suppliers for a Price Quote (RFQ) in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436372).

To set standard supplier prices without a quote, see
[Set Up Suppliers and Supplier Prices in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436368).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
