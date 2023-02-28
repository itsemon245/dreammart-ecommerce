import CommonLayout from '@/Layouts/CommonLayout'
import ProductImage from '@/Components/Products/ProductImage'
import AddToFavourite from '@/Components/Products/AddToFavourite'
import AddToCart from '@/Components/Products/AddToCart'
import Counter from '@/Components/Products/Counter'
import { Link } from '@inertiajs/inertia-react'
import Rating from '@/Components/Products/Rating'
import { BsBag } from 'react-icons/bs'
import React from 'react'
import { useState } from 'react'
import route from '/vendor/tightenco/ziggy/src/js'

export default function Product({ auth, product, categories, isFavorite, isCarted }) {

  const [count, setCount] = useState(1)
  const [src, setSrc] = useState('/storage/' + product.image)

  //handler for counter
  const onCounterClickHandler = (e) => {
    e.preventDefault()
    if (e.target.id === 'plus-counter') {
      setCount(prev => prev + 1)
    }
    if (count > 0 && e.target.id === 'minus-counter') {
      setCount(prev => prev - 1)
    }
  }

  const onBuyHandler = (e) => {
    e.preventDefault();
    console.log('Buy')
    //TODO send request to endpoint to cahnge order state
  }

  const onThumbnailClick = (e) => {
    setSrc(e.target.src)
  }

  async function sendRequest(url) {
    const response = await fetch(url);
    const data = await response.json();
    console.log(data)
  }
  return (
    <CommonLayout categories={categories} pageTitle={product.name} auth={auth} >

      {/* product section container */}
      <div className="flex justify-center mt-5 px-8">

        {/* wrapper */}
        <div className="lg:flex-row flex flex-col justify-center font-sans gap-4 items-center">

          {/* product images */}
          <ProductImage src={src} product={product} onThumbnailClick={onThumbnailClick} />

          {/* product info */}
          <form className="p-6 max-w-[350px]">

            {/* product heading  */}
            <div className="mb-2">
              <div className="flex justify-between items-center">
                <h1 className='text-2xl font-semibold'>{product.name}</h1>

                {/* favorite btn  */}
                <AddToFavourite auth={auth} productId={product.id} isFavorite={isFavorite} />
              </div>
              {/* brand */}
              <span className='font-semibold'>Brand : </span><div className="badge badge-primary font-semibold uppercase">{product.brand.name}</div>
            </div>
            {/* product price  */}
            <h2 className='text-2xl font-semibold'>${product.price}</h2>

            {/* product rating */}
            <Rating />

            {/* Description */}
            <div className='text-lg mb-8'>
              <div className='font-medium underline mb-2'>Description: </div>
              <div className='max-w-[40ch]'>
                {product.detail}
              </div>
            </div>

            {/* category  */}
            <div className='flex gap-4 mb-5'>
              <div className="badge badge-secondary font-semibold uppercase">{product.category.name}</div>
            </div>

            {/* CTA */}
            <div className="">

              <div className="max-w-[200px]">
                <div className="flex flex-col gap-2">
                  <div className="flex justify-between items-center">
                    {/* Quantity counter CTA  */}
                    <Counter onCounterClickHandler={onCounterClickHandler} count={count} />
                    {/* add to cart btn  */}
                    <AddToCart auth={auth} className='w-8 h-8 mr-1' qty={count} isCarted={isCarted} productId={product.id} />


                    {/* buy btn */}
                  </div>
                  <Link href={route('checkout.product', product.id)} data={{qty:count}} as="button" method='POST' className='flex gap-1 items-center btn btn-primary shadow-md '>
                    <span className='text-lg'>Buy</span>
                    <BsBag className='w-5 h-4'></BsBag>
                  </Link>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </CommonLayout>

  )



}