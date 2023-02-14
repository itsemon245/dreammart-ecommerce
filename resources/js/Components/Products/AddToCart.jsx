import React from 'react'
import { useState } from 'react'
import { BsCartPlus, BsCartCheck } from 'react-icons/bs'

export default function AddToCart({ productId, isCarted, qty }) {
    const [cart, setCart] = useState(isCarted)

    const onCartHandler = (e) => {
        e.preventDefault();
        sendRequest(route('cart.toggle', [productId, qty]))
        setCart(prev => !prev)
    }
    async function sendRequest(url) {
        const response = await fetch(url);
        const data = await response.json();
        console.log(data)
    }
    return (
        <button onClick={onCartHandler} className='btn'>
            {cart ? <BsCartCheck className='w-6 h-6'></BsCartCheck> : <BsCartPlus className='w-6 h-6'></BsCartPlus>}
        </button>
    );
}