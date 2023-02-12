import React from 'react'
import { Link } from '@inertiajs/inertia-react'
import { HeartIcon, ShoppingCartIcon, PlusSmallIcon, MinusSmallIcon, InformationCircleIcon } from '@heroicons/react/24/outline'
import { StarIcon } from '@heroicons/react/24/solid'
import { useState } from 'react'
import route from '/vendor/tightenco/ziggy/src/js'

export default function ProductCard({ product }) {
  const offerPrice = product.price
  const price = offerPrice + (product.discount / 100)

  const [cartState, setCartState] = useState(false);
  const addToCart = () => {
    let toggle = !cartState
    setCartState(toggle)
  }
  return (
    <div className='rounded-lg bg-slate-900 hover:scale-105 transition-all shadow-lg shadow-gray-900 hover:shadow-gray-700 flex flex-col justify-between'>
      <div className='relative'>
        <div className="w-54">
          <Link href={route('browse.product', product.id)}>
            <img className='w-full aspect-square rounded-t-xl' src={`/storage/${product.image}`} alt={product.name} />
          </Link>
        </div>
        <div className='absolute text-sm font-light pr-2 top-0 left-0 rounded-r-full badge-primary'>
          {"Discount: " + product.discount + "%"}
        </div>
        <div className='cursor-pointer peer absolute top-0 right-0 bg-slate-800 p-3 rounded-tr-lg z-10' style={{ borderBottomLeftRadius: '50%' }}>
          <InformationCircleIcon className='w-6 h-6 text-primary'></InformationCircleIcon>
        </div>
        <div className='w-0 h-0 opacity-0 bg-slate-800 p-3 absolute top-0 right-0 peer-hover:w-full peer-hover:h-full peer-hover:opacity-100' style={{ transition: 'all 500ms cubic-bezier(0.4, 0, 0.2, 1), color 2000ms ease' }}>
          <div className=''>
            <div className='mb-2'>
              <h4 className='font-semibold text-sm'>Description:</h4>
              <p className='text-sm max-w-[15ch]'>{product.detail}</p>
            </div>
            <div className='mb-2'>
              <h4 className='font-semibold text-sm'>Category: <span className='font-normal'>{product.category.name}</span></h4>
              <h4 className='font-semibold text-sm'>Brand: <span className='font-normal'>{product.brand.name}</span></h4>
              <div className='flex gap-2 font-semibold text-sm'>Rating:
                <div className="flex items-center">
                  <div className='font-medium'>4.3</div>
                  <div className='mask mask-star-2 bg-yellow-500 rounded w-4 h-4'></div>
                  <span className='ml-1 text-sm text-primary'>(1225)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className='bg-slate-800 rounded-b-lg flex justify-between gap-3 border-t-2 border-primary'>
        <div className='pl-4 mt-1'>
          <Link href={route('browse.product', product.id)}>
            <h3 className='font-medium'>{product.name}</h3>
          </Link>
          <div className='flex gap-2 items-center'>
            <p className='font-semibold'>{'$' + offerPrice}</p>
            <p className='text-slate-500 text-sm line-through'>{'$' + price}</p>
          </div>
        </div>
        <div onClick={addToCart} className='cursor-pointer bg-gray-900 h-full p-4 rounded-br-lg flex items-center justify-center'>
          <button className='relative'>
            <div>
              <ShoppingCartIcon className='w-6 h-6'></ShoppingCartIcon>
              {cartState ?
                <MinusSmallIcon className='w-5 h-5 absolute -top-3 -right-1.5'></MinusSmallIcon>
                :
                <PlusSmallIcon className='w-5 h-5 absolute -top-3 -right-1.5'></PlusSmallIcon>}
            </div>
          </button>
        </div>
      </div>
    </div>
  )
}
