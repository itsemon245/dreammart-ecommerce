import React from 'react'
import { MagnifyingGlassIcon, FunnelIcon } from "@heroicons/react/24/outline";


export default function SearchBox() {
    return (
        <div className='flex gap-6 items-center'>
            <MagnifyingGlassIcon className='w-6 h-6 text-neutral-content'></MagnifyingGlassIcon>
            <input type="text"
                className='bg-none border-0 outline-0 focus:border-0 focus:outline-0 focus:shadow-transparent'
                name="search-product"
                id="search-product"
                placeholder='Search products' />

        </div>
    )
}
