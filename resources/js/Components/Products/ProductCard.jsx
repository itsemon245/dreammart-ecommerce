import React from 'react'
import { HeartIcon, ShoppingCartIcon } from '@heroicons/react/24/outline'
import { StarIcon } from '@heroicons/react/24/solid'
import { HeartBtn, CartBtn, BuyNowBtn } from './ProductBtns'
import ProductInfo from './ProductInfo'

export default function ProductCard({ product }) {
  return (
    <div className="card w-full bg-slate-900 shadow-xl">
      <figure><img className='w-[60%] scale-75 aspect-square object-contain' src={product.image} alt={product.name} loading='lazy' /></figure>
      <div className="card-body justify-between p-3 bg-slate-900 rounded-b-2xl">
        <ProductInfo name={product.name} />
        <div class="flex text-sm font-medium">
          <div className='flex text-md items-center gap-1'>4.3 <StarIcon className='w-4 h-4 text-yellow-500'></StarIcon></div>
          <div class="flex-auto items-center flex justify-end gap-2">
            <CartBtn />
            <HeartBtn />
          </div>

        </div>
        <BuyNowBtn />
      </div>
    </div>
  )
}
