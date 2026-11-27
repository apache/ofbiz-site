---
layout: post
title: What Is Supplier Management? How Apache OFBiz Helps
date: '2026-11-26T15:10:00+00:00'
permalink: what-is-supplier-management
metaDescription: "Supplier management means keeping track of who you buy from, what they sell and at what price. See how Apache OFBiz records suppliers and supplier prices."
---
## What is supplier management?

Supplier management means keeping track of the companies you buy from. You record who they are, what they sell you, at what price, and how fast they deliver.

Good supplier data saves the buyer time. Every purchase order then gets the right supplier, the right price and the right product code.

## What should you record for each supplier?

- The company, its address, phone and email.
- The products it sells you, with its own code for each one.
- The price, the currency and the minimum order quantity.
- How many days it needs to deliver, called the lead time.
- Which supplier comes first when two sell the same product.

## How does Apache OFBiz handle supplier management?

Apache OFBiz is a free, open source ERP. A supplier is a company in OFBiz with the role Supplier. Only companies with this role appear in the supplier lists.

For each product, the Suppliers tab lists who sells it. Each row holds the supplier's price, its product code and name, the minimum order quantity, the lead time and whether it is the main supplier.

In a test with the OFBiz demo data, we added a new supplier. It sells Round Gizmo under its own code GPS-2644, for 12.50 USD, with 7 days lead time.

![The supplier's price, code and lead time on the product's Suppliers tab](/images/posts/supplier-management/product-suppliers.png)

## How do purchase orders use this data?

When a buyer adds a product to a purchase order, OFBiz takes the price from that supplier's row. It uses the supplier's code and name on the order line, so the supplier knows the item at once.

![The purchase order line with the supplier's code, name and price](/images/posts/supplier-management/po-supplier-price.png)

If the supplier has no valid price for the product, OFBiz does not add it to the order. This stops orders to the wrong supplier.

Other parts of OFBiz use the same data. Planning uses the lead time. Dropshipping uses the main supplier.

## Try it yourself

Our step-by-step guide shows each field:
[Set Up Suppliers and Supplier Prices in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436368).

To compare prices from several suppliers, read our post
[What Is an RFQ?](/posts/what-is-an-rfq/).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
