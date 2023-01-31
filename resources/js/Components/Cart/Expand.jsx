import React from 'react'
import CartProduct from './CartProduct'

export default function Expand() {
    return (
        <div>
            <div className="cart-content hidden">
                <h3>Cart</h3>
                <hr />
                <p className="basket-empty">Your cart is empty</p>
                <div className="basket-filled hidden">
                    <CartProduct></CartProduct>
                    <button id="checkout-btn">Checkout</button>
                </div>
            </div>
        </div>
    )
}
