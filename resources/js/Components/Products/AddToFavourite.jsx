import React from 'react'
import { useState } from 'react'
import { AiOutlineHeart, AiFillHeart } from 'react-icons/ai'

export default function AddToFavourite({isFavorite, productId }) {
    const [like, setLike] = useState(isFavorite)

    const onLikeHandler = (e) => {
        e.preventDefault();
        sendRequest(route('favorite.toggle', productId))
        setLike(prev => !prev)
    }
    async function sendRequest(url) {
        const response = await fetch(url);
        const data = await response.json();
        console.log(data)
    }
    
    return (
        <button onClick={onLikeHandler} className='cursor-pointer hover:scale-110'>
            {like ? <AiFillHeart className='w-6 h-6 text-pink-600 transition-all'></AiFillHeart> : <AiOutlineHeart className='w-6 h-6 '></AiOutlineHeart>}
        </button>
    );
}