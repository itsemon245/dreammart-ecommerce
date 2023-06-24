import React from 'react'
import { MagnifyingGlassIcon } from "@heroicons/react/24/outline";



export default function SearchBox() {

    return (
        <div className='pl-8 flex items-center justify-center gap-3 border border-primary rounded-lg'>
            <MagnifyingGlassIcon className=' w-6 h-6 text-primary font-semibold'></MagnifyingGlassIcon>
            <input className=' bg-transparent border-transparent focus:border-transparent focus:ring-0 placeholder:text-white font-light text-sm' type="text" placeholder='Quick Search...' />
        </div>
    )
}
