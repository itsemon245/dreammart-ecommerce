import React from 'react'
import { useState } from 'react'
import { BsCartPlus, BsCartCheck} from 'react-icons/bs'

export default function AddToCart({}) {
    const [cart, setCart] = useState(false)

    const onCartHandler = (e) => {
        e.preventDefault();
        setCart(prev => !prev)
        //TODO send request to endpoint to cahnge cart state
    }
    return (
        <button onClick={onCartHandler} className='btn'>
            {cart ? <BsCartCheck className='w-6 h-6'></BsCartCheck> : <BsCartPlus className='w-6 h-6'></BsCartPlus>}
        </button>
    );
}