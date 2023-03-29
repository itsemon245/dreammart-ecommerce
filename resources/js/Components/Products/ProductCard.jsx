import React from 'react'
import { Link } from '@inertiajs/inertia-react'
import AddToCart from './AddToCart'
import AddToFavourite from './AddToFavourite'
import Rating from './Rating'
import { InformationCircleIcon } from '@heroicons/react/24/outline'
import route from '/vendor/tightenco/ziggy/src/js'

export default function ProductCard({ product, auth, carts, favorites }) {
  const offerPrice = product.price
  let price = offerPrice + (offerPrice * (product.discount / 100))
  price = price.toFixed(2)



  return (
    <div className='rounded-lg bg-slate-900 hover:scale-105 transition-all shadow-lg shadow-gray-900 hover:shadow-gray-700 flex flex-col'>
      <div className='relative'>
        <div className="w-54">
          <Link href={route('browse.product', product.id)}>
            <img className='w-full aspect-square rounded-t-xl' src={product.image.includes('uploads') ? `storage/${product.image}` : product.image} alt={product.name} />
          </Link>
        </div>
        <div className='absolute text-sm font-light pr-2 top-0 left-0 rounded-r-full badge-primary'>
          {"Discount: " + product.discount + "%"}
        </div>
        {/* <div className='cursor-pointer peer absolute top-0 right-0 bg-slate-800 p-3 rounded-tr-lg z-10' style={{ borderBottomLeftRadius: '50%' }}>
          <InformationCircleIcon className='w-6 h-6 text-primary'></InformationCircleIcon>
        </div> */}
        {/* <div className='w-0 h-0 opacity-0 bg-slate-800 p-3 absolute top-0 right-0 peer-hover:w-full peer-hover:h-full peer-hover:opacity-100' style={{ transition: 'all 500ms cubic-bezier(0.4, 0, 0.2, 1), color 2000ms ease' }}>
          <div className=''>
            <div className='mt-5'>
              <h4 className='font-semibold text-sm'>Description:</h4>
              <p className='text-sm'>{product.detail}</p>
            </div>
          </div>
        </div> */}
      </div>
      <div className="bg-slate-800 grow border-primary border-t-2 rounded-b-lg ">
        <div className='rounded-b-lg flex flex-col px-3 py-2'>
          <Link href={route('browse.product', product.id)}>
            <h3 className='font-medium'>{product.name}</h3>
          </Link>

          <div className='flex gap-1 items-baseline'>
            <p className=' text-lg font-semibold'>{'$' + offerPrice}</p>
            <p className='text-slate-500 text-sm line-through'>{'$' + price}</p>
          </div>
          <div className='flex justify-between items-end px-2 -mt-2'>
            <div>
              <div className="badge badge-sm badge-secondary font-semibold uppercase">{product.category.name}</div>
              <Rating></Rating>
            </div>
            <div className='flex flex-col items-end'>
              <div className="hover:scale-110 transition-all">
                <AddToCart isCarted={carts ? carts.find(cart => cart.id === product.id) : ''} auth={auth} qty={1} productId={
                  product.id
                }></AddToCart>
              </div>
              <div className="hover:scale-110 transition-all">
                <AddToFavourite isFavorite={favorites ? favorites.find(favorite => favorite.id === product.id) : ''} auth={auth} productId={product.id} />
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
