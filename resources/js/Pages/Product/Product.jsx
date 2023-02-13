import CommonLayout from '@/Layouts/CommonLayout'
import { AiOutlineHeart, AiFillHeart } from 'react-icons/ai'
import { BsCartPlus, BsCartCheck, BsBag } from 'react-icons/bs'
import React from 'react'
import { useState } from 'react'

export default function Product({ auth, product, categories }) {

  const [count, setCount] = useState(0)
  const [cart, setCart] = useState(false)
  const [like, setLike] = useState(false)
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

  const onLikeHandler = (e) => {
    e.preventDefault();
    setLike(prev => !prev)
    //TODO send request to endpoint to cahnge like state
  }
  const onCartHandler = (e) => {
    e.preventDefault();
    setCart(prev => !prev)
    //TODO send request to endpoint to cahnge cart state
  }
  const onBuyHandler = (e) => {
    e.preventDefault();
    console.log('Buy')
    //TODO send request to endpoint to cahnge order state
  }

  const onThumbnailClick = (e) => {
    setSrc(e.target.src)
  }
  return (
    <CommonLayout categories={categories} pageTitle={product.name} auth={auth} >

      {/* container */}
      <div className="flex justify-center mt-5 px-8">

        {/* wrapper */}
        <div className="flex justify-center font-sans gap-x-4">

          {/* product images */}
          <div className="w-[30%] flex flex-col gap-2">
            <img src={src} alt={product.name} className="w-full object-contain rounded-lg" loading="lazy" />
            <ClickableThumbnails onThumbnailClick={onThumbnailClick} />
          </div>

          {/* product info */}
          <form className="p-6">

            {/* product heading  */}
            <div className="mb-2">
              <div className="flex justify-between items-center">
                <h1 className='text-2xl font-semibold'>{product.name}</h1>

                {/* favorite btn  */}
                <AddToFavourite onLikeHandler={onLikeHandler} like={like} />
              </div>
              {/* brand */}
              <span className='font-semibold'>Brand : </span><div className="badge badge-primary font-semibold uppercase">{product.brand.name}</div>
            </div>
            {/* product price  */}
            <h2 className='text-2xl font-semibold'>${product.price}</h2>

            {/* product rating */}
            <div className='flex items-center mb-5'>
              <div className="rating">
                <div className="w-5 h-5 mask mask-star-2 bg-yellow-400" ></div>
                <div className="w-5 h-5 mask mask-star-2 bg-yellow-400" ></div>
                <div className="w-5 h-5 mask mask-star-2 bg-yellow-400" ></div>
                <div className="w-5 h-5 mask mask-star-2 bg-yellow-400" ></div>
                <div className="w-5 h-5 mask mask-star-2 bg-yellow-400" ></div>
              </div> <span>(8 Reviews)</span>
            </div>

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
            <div className="grid grid-cols-6 gap-2">

              {/* Quantity counter CTA  */}
              <Counter onCounterClickHandler={onCounterClickHandler} count={count} />
              {/* add to cart btn  */}
              <AddToCart onCartHandler={onCartHandler} cart={cart} />

              <div className='col-span-3'></div>

              {/* buy btn */}
              <button className='col-span-3 flex gap-1 items-center btn btn-primary'>
                <span className='text-lg'>Buy</span>
                <BsBag className='w-5 h-5'></BsBag>
              </button>
            </div>
          </form>
        </div>
      </div>
    </CommonLayout>
  )

  function Counter({ onCounterClickHandler, count }) {
    return (<div className='flex col-span-2 gap-x-2'>
      <button onClick={onCounterClickHandler} id='minus-counter' className='btn btn-outline'>-</button>
      <input type="text" name='qty' disabled className='input w-12' value={count} />
      <button onClick={onCounterClickHandler} id='plus-counter' className='btn btn-outline'>+</button>
    </div>);
  }

  function AddToCart({ onCartHandler, cart }) {
    return (<button onClick={onCartHandler} className='btn col-span-1'>
      {cart ? <BsCartCheck className='w-6 h-6'></BsCartCheck> : <BsCartPlus className='w-6 h-6'></BsCartPlus>}
    </button>);
  }

  function AddToFavourite({ onLikeHandler, like }) {
    return (<button onClick={onLikeHandler} className='btn bg-transparent border-0 '>
      {like ? <AiFillHeart className='w-6 h-6 text-pink-600 transition-all'></AiFillHeart> : <AiOutlineHeart className='w-6 h-6 '></AiOutlineHeart>}
    </button>);
  }

  function ClickableThumbnails({ onThumbnailClick }) {
    return (
      <div className='grid grid-cols-4 gap-x-2'>
        <img onClick={onThumbnailClick} src={`/storage/${product.image}`} alt={product.name} className="w-full object-contain rounded-lg" loading="lazy" />
        <img onClick={onThumbnailClick} src={`/assets/image_placeholder.jpg`} alt={product.name} className="w-full object-contain rounded-lg" loading="lazy" />
        <img onClick={onThumbnailClick} src={`/assets/image_placeholder.jpg`} alt={product.name} className="w-full object-contain rounded-lg" loading="lazy" />
        <img onClick={onThumbnailClick} src={`/assets/image_placeholder.jpg`} alt={product.name} className="w-full object-contain rounded-lg" loading="lazy" />
      </div>
    );
  }
}