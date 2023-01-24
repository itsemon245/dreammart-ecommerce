import React from 'react'
import { StarIcon } from '@heroicons/react/24/outline'

export default function ProductCard() {
  return (
    <>
      <div className="bg-base-300 shadow-lg rounded-box w-72 aspect-square grid grid-cols-1 grid-rows-4">
        <img src="assets/hero-controller.png" alt="ProductImage" className='w-full row-span-3 '/>
        <div className='bg-base-200 w-full text-white px-6 py-12 rounded-b-box flex flex-col justify-center'>
            <h3 className='flex justify-between items-start text-xl font-medium'>
                Lorem, ipsum dolor <p className='text-yellow-500 font-medium flex items-center'>4.3<StarIcon className='w-5 h-5 text-yellow-500'></StarIcon></p>
            </h3>
            <div className='flex justify-between'>
                <p>
                    Category: <span>Accessories</span>
                </p>
                <p className='text-primary text-lg font-medium'>
                    $199
                </p>
            </div>
        </div>
      </div>

    </>
  )
}
