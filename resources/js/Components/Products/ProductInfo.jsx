import React from 'react'

export default function ProductInfo({ name, price, stock, category }) {
    return (
        <div class="flex flex-wrap">
            <h1 class="card-title flex-auto text-lg font-semibold text-white capitalize">
                {name}
            </h1>
            <div class="text-lg font-semibold text-secondary">
                ${price}
            </div>
            <div class="w-full flex-none text-sm font-medium text-secondary mt-2">
                <p>In Stock <span className='text-primary'>({stock})</span></p>
                <p className='text-secondary-focus font-semibold'>{category.name}</p>
            </div>
        </div>
    )
}
