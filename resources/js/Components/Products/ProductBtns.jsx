import React from 'react'
import { HeartIcon, ShoppingCartIcon, ShoppingBagIcon } from '@heroicons/react/24/outline'

export function CartBtn() {
    return (
        <button class="btn md:btn-md sm:btn-sm btn-outline btn-primary max-sm:px-2 max-sm:py-2 group" type="button">
            <ShoppingCartIcon className='text-primary group-hover:text-base-100 lg:w-8 lg:h-8 max-sm:w-6 max-sm:h-6  sm:w-4 sm:h-4 font-medium' ></ShoppingCartIcon>
        </button>

    )
}
export function HeartBtn() {
    return (
        <button class="btn md:btn-md  sm:btn-sm btn-outline btn-primary max-sm:px-2 max-sm:py-2 group" type="button">
            <HeartIcon className='text-primary group-hover:text-base-100 lg:w-8 lg:h-8 max-sm:w-6 max-sm:h-6 sm:w-4 sm:h-4 font-medium' ></HeartIcon>
        </button>
    )
}
export function BuyNowBtn() {
    return (
        <button class="flex gap-2 items-center btn btn-primary text-base-100 w-full" type="button">
            Buy Now <ShoppingBagIcon className="w-5 h-5 mb-1 text-base-100" />
        </button>
    )
}

