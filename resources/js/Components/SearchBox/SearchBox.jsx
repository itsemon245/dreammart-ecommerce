import React from 'react'
import { MagnifyingGlassIcon, FunnelIcon } from "@heroicons/react/24/outline";
import './search-box.css';


export default function SearchBox() {
    
    return (

        <div className='flex gap-6 border border-primary px-5 py-2.5 rounded-full text-lg items-center'>  
            <MagnifyingGlassIcon className='w-6 h-6 text-neutral-content'></MagnifyingGlassIcon>
            <input type="text"
                className='bg-none border-0 outline-0'
                name="search-product"
                id="search-product"
                placeholder='Search products' />

        </div>
    )
}
