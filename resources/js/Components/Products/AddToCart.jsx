import React from 'react'
import { useState } from 'react'
import toast from 'react-hot-toast'
import { BsCartPlus, BsCartCheck } from 'react-icons/bs'

export default function AddToCart({ productId, isCarted, qty, className = 'w-6 h-6', auth }) {
    const [cart, setCart] = useState(isCarted)
    const onCartHandler = (e) => {
        e.preventDefault();
        if (auth.user) {
            sendRequest(route('cart.toggle', [productId, qty]))
            setCart(prev => !prev)
        } else {
            toast.error('Please log in first')

        }
    }
    async function sendRequest(url) {
        const response = await fetch(url);
        const data = await response.json();
        data ? toast.success('Added to Cart') : toast.success('Removed from Cart')
    }
    return (
        <button title={cart ? 'Remove from Cart' : 'Add to Cart'} onClick={onCartHandler} className={` btn bg-transparent h-min min-h-6  hover:bg-transparent border-0 p-0 m-0`}>
            {cart ? <BsCartCheck className={`${className}`}></BsCartCheck> : <BsCartPlus className={`${className}`}></BsCartPlus>}
        </button>
    );
}