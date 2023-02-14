import React from 'react'
import DashboardLayout from '@/Layouts/DashboardLayout'
import { ProductCard } from '@/Components'

export default function Cart({ categories, auth, carts }) {
  return (
    <DashboardLayout pageTitle="Carts" categories={categories} auth={auth}>

      {/* //TODO design cart items here */}
      <div className="">
        {carts.length === 0 ?
          <div className='text-lg text-primary text-center font-semibold mt-12'>Nothing to show in carts</div>
          :
          <>
            <div className='text-lg text-primary text-center font-semibold my-5 '>Cart</div>
            <div className='grid gap-x-4 gap-y-6 grid-cols-3 max-xs:grid-cols-1 max-sm:grid-cols-2 max-md:grid-cols-4 lg:grid-cols-5 2xl:grid-cols-6'>
              {carts.map((product, i) => (
                <ProductCard product={product} key={i}></ProductCard>
              ))}
            </div>
          </>
        }
      </div>
    </DashboardLayout>
  )
}
