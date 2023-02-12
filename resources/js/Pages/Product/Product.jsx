import CommonLayout from '@/Layouts/CommonLayout'
import React from 'react'

export default function Product({ auth, product, categories }) {
  return (
    <CommonLayout categories={categories} pageTitle={product.name} auth={auth} >
      {/*TODO: design cart list here */}
      <div className="flex font-sans bg-slate-900 rounded-lg shadow-lg shadow-gray-900">
        <div className="flex-none w-96 relative">
          <img src={`/storage/${product.image}`} alt={product.name} className="w-full object-contain rounded-l-lg" loading="lazy" />
        </div>
        <form className="flex-auto p-6">
          <div className="flex flex-wrap">
            <h1 className="flex-auto text-lg font-semibold text-slate-200">
              {product.name}
            </h1>
            <div className="text-lg font-semibold text-gray-200">
              ${product.price}
            </div>
            <div className="w-full flex-none text-sm font-medium text-slate-400 mt-2">
              In stock(<span className='text-primary'>{product.in_stock}</span>)
            </div>
          </div>
          <div className="flex mb-6 text-sm font-medium">
            <div className="flex-auto flex space-x-4">
              <button className="h-10 px-6 font-semibold rounded-md bg-primary text-slate-900" type="submit">
                Buy now
              </button>
              <button className="h-10 px-6 font-semibold rounded-md border border-slate-200 text-slate-200" type="button">
                Add to Cart
              </button>
            </div>
            <button className="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200" type="button" aria-label="Like">
              <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
              </svg>
            </button>
          </div>
          <p className="text-sm text-slate-700">
            Free shipping on all continental US orders.
          </p>
        </form>
      </div>
    </CommonLayout>
  )
}