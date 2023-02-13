import React from 'react'
import { BsCartPlus, BsCartCheck, BsBag } from 'react-icons/bs'

export default function AddToCart({ onCartHandler, cart }) {
    return (
        <button onClick={onCartHandler} className='btn col-span-1'>
            {cart ? <BsCartCheck className='w-6 h-6'></BsCartCheck> : <BsCartPlus className='w-6 h-6'></BsCartPlus>}
        </button>
    );
}