import React from 'react'
import { HeartIcon, ShoppingCartIcon, ShoppingBagIcon } from '@heroicons/react/24/outline'

export function CartBtn() {
    return (
        <button class="btn max-sm:btn-sm btn-outline btn-primary group" type="button">
            <ShoppingCartIcon className='text-primary group-hover:text-slate-900 w-6 h-6 max-sm:w-5 max-sm:h-5  font-medium' ></ShoppingCartIcon>
        </button>

    )
}
export function HeartBtn() {
    return (
        <button class="btn max-sm:btn-sm btn-outline btn-primary group" type="button">
            <HeartIcon className='text-primary group-hover:text-slate-900 w-6 h-6 max-sm:w-5 max-sm:h-5 font-medium' ></HeartIcon>
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

