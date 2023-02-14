import React from 'react'
import DashboardLayout from '@/Layouts/DashboardLayout'
import ProductCard from '@/Components/Products/ProductCard'

export default function Favorites({ categories, auth, favorites }) {
    console.log(favorites)
    return (
        <DashboardLayout pageTitle="Favorites" categories={categories} auth={auth}>
            <div>
                {favorites.length === 0 ?
                    <div className='text-lg text-primary text-center font-semibold mt-12'>Nothing to show in favorites</div>
                    :
                    <>
                        <div className='text-lg text-primary text-center font-semibold my-5 '>Favorite Products</div>
                        <div className='grid gap-x-4 gap-y-6 grid-cols-3 max-xs:grid-cols-1 max-sm:grid-cols-2 max-md:grid-cols-4 lg:grid-cols-5 2xl:grid-cols-6'>
                            {favorites.map((product, i) => (
                                <ProductCard product={product} key={i}></ProductCard>
                            ))}
                        </div>
                    </>
                }
            </div>
        </DashboardLayout>
    )
}
