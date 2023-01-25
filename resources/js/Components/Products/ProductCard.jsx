import React from 'react'
import { HeartIcon, ShoppingCartIcon } from '@heroicons/react/24/outline'
import { StarIcon } from '@heroicons/react/24/solid'

export default function ProductCard() {
  return (
    <div className="card w-full bg-base-200 shadow-xl">
      <figure><img src="assets/hero-controller.png" alt="Shoes" /></figure>
      <div className="card-body justify-between p-5 bg-base-300 rounded-b-2xl">
        <div class="flex flex-wrap">
          <h1 class=" card-title flex-auto text-lg font-semibold text-white">
            Product Name
          </h1>
          <div class="text-lg font-semibold text-secondary">
            $110.00
          </div>
          <div class="w-full flex-none text-sm font-medium text-secondary mt-2">
            <p>In Stock <span className='text-primary'>(199)</span></p>
            <p className='text-secondary-focus font-semibold'>Accessories</p>
          </div>
        </div>
        <div class="flex text-sm font-medium">
        <div className='flex text-md items-center gap-1'>4.3 <StarIcon className='w-4 h-4 text-yellow-500'></StarIcon></div>
          <div class="flex-auto items-center flex justify-end gap-2">
            <button class="btn btn-md btn-outline btn-primary max-sm:px-2 max-sm:py-2 group" type="button">
              <ShoppingCartIcon className='text-primary group-hover:text-base-100 w-8 h-8 max-sm:w-6 max-sm:h-6 font-medium' ></ShoppingCartIcon>
            </button>
            <button class="btn btn-md btn-outline btn-primary max-sm:px-2 max-sm:py-2 group" type="button">
              <HeartIcon className='text-primary group-hover:text-base-100 w-8 h-8 max-sm:w-6 max-sm:h-6 font-medium' ></HeartIcon>
            </button>
          </div>

        </div>
        <div class="flex mb-6 text-sm font-medium">
          <div class="flex-auto flex">
            <button class="btn btn-primary text-base-100 w-full" type="button">
              Buy Now
            </button>
          </div>
        </div>
      </div>
    </div>
  )
}
