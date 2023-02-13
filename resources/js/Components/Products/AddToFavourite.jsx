import React from 'react'
import { AiOutlineHeart, AiFillHeart } from 'react-icons/ai'

export default function AddToFavourite({ onLikeHandler, like }) {
    return (
        <button onClick={onLikeHandler} className='btn bg-transparent border-0 '>
            {like ? <AiFillHeart className='w-6 h-6 text-pink-600 transition-all'></AiFillHeart> : <AiOutlineHeart className='w-6 h-6 '></AiOutlineHeart>}
        </button>
    );
}