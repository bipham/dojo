@extends('layouts.master')

@section('content')
    <div class="container shopping-cart">
      <h4 class="title-page">Shoping Cart</h4>
      <div class="shop-table-content container">
          <form method="post" action="#" class="shoping-form">
              <a class="button button-check-out" href="#">Proceed  to  Checkout</a>
              <div class="div-table-cart">
                  <table class="shop_table cart">
                    <thead>
                        <tr>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Product Name</th>
                            <th class="product-edit">&nbsp;</th>
                            <th class="product-price">Unit Price</th>
                            <th class="product-quantity">Qty</th>
                            <th class="product-subtotal">Subtotal</th>
                            <th class="product-remove">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td class="product-thumbnail" data-title="">
                                <a href="#"><img height="150" width="185" alt="s_c" class="attachment-shop_thumbnail wp-post-image" src="assets/images/s_c.jpg"></a>
                            </td>
                            <td class="product-name" data-title="Product Name">
                                <a href="#">Fukasawa's Twelve watch</a>
                            </td>
                            <td class="edit"><a href="#">Edit</a></td>
                            <td class="product-price" data-title="Unit Price">
                                <span class="amount">$168.00</span>
                            </td>
                            <td class="product-quantity" data-title="Qty">
                                <div class="quantity buttons_added">
                                    <input type="text" class="input-text qty text" title="Qty" value="1" name="qty">
                                </div>
                            </td>
                            <td class="product-subtotal" data-title="Subtotal">
                                <span class="amount">$168.00</span>
                            </td>
                            <td class="product-remove" data-title="Remove">
                                <a title="Remove this item" class="remove" href="#">×</a>
                            </td>
                        </tr>
                    </tbody>
                  </table><!--end table-->
                  <div class="button-cart">
                      <a class="button button-check-out" href="#">Clear Shoping Cart</a>
                      <a class="button button-check-out" href="#">Update Shoping Cart</a>
                      <a class="button button-check-out" href="#">Continue Shoping</a>
                  </div>
              </div><!--end table cart-->
          </form>
          <div class="row">
              <div class="col-md-6">
                  <div class="discount-cost-box cart-box">
                      <p>Discount codes</p>
                      <span>Enter your coupon code if you have one.</span>
                      <input type="text" placeholder="" value="">
                      <a class="button button-check-out" href="#">Apply Coupon</a>
                  </div>

              </div>
              <div class="col-md-6">
                <div class="cart_totals cart-box">
                    <table class="text-right">
                        <tbody>
                            <tr class="cart-subtotal">
                                <th>Subtotal:</th>
                                <td><span class="amount">$168.00</span></td>
                            </tr>
                            <tr class="grand">
                                <th>Grand Total:</th>
                                <td><span class="amount">$168.00</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="button button-check-out pull-right" href="#">Proceed To Checkout</a>
                </div>
              </div>
          </div><!--end row-->
      </div><!--end shop-table-content-->
      <div id="section-icon-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-box style1">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="flaticon-umbrella"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-content">
                                        <h4>Buyer Protection</h4>
                                        <p>Secure payments
                                            Guaranteed refunds
                                            Escrow protection on every oder</p>
                                        <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box style1">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="flaticon-return-of-investment"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-content">
                                        <h4>RETURN &amp; EXCHANGE</h4>
                                        <p>Wholesale products from certified
                                            Worldwide shipping
                                            Low prices from US $0.1</p>
                                        <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box style1">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="flaticon-transport"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-content">
                                        <h4>FREE DELIVERY</h4>
                                        <p>Wholesale products from certified
                                            Worldwide shipping
                                            Low prices from US $0.1</p>
                                        <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end shopping cart-->

@stop
