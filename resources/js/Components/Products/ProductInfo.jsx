import React from 'react'

export default function ProductInfo({ name }) {
    return (
        <div class="flex flex-wrap">
            <h1 class="card-title flex-auto text-lg font-semibold text-white capitalize">
                {name}
            </h1>
            <div class="text-lg font-semibold text-secondary">
                $110.00
            </div>
            <div class="w-full flex-none text-sm font-medium text-secondary mt-2">
                <p>In Stock <span className='text-primary'>(199)</span></p>
                <p className='text-secondary-focus font-semibold'>Accessories</p>
            </div>
        </div>
    )
}
