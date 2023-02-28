import React from 'react'
import { useState } from 'react'
import { AiOutlineHeart, AiFillHeart } from 'react-icons/ai'
import toast from 'react-hot-toast'


export default function AddToFavourite({ isFavorite, productId, className = 'w-6 h-6', auth }) {
    const [like, setLike] = useState(isFavorite)
    const onLikeHandler = (e) => {
        e.preventDefault();
        if (auth.user) {
            sendRequest(route('favorite.toggle', productId))
            setLike(prev => !prev)
        } else {
            toast.error('Please log in first')
        }
    }
    async function sendRequest(url) {
        const response = await fetch(url);
        const data = await response.json();
        data ? toast.success('Added to Favorite') : toast.success('Removed from Favorite')
    }

    return (
        <button title={like ? 'Remove from Favorites' : 'Add to Favorites'} onClick={onLikeHandler} className={` btn bg-transparent h-min min-h-6 hover:bg-transparent border-0 p-0 m-0`}>
            {like ? <AiFillHeart className={`${className} text-pink-600 transition-all`}></AiFillHeart> : <AiOutlineHeart className={`${className}`}></AiOutlineHeart>}
        </button>
    );
}