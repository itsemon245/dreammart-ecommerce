import React from 'react'
import DashboardLayout from '@/Layouts/DashboardLayout'
import ProductCard from '@/Components/Products/ProductCard'

export default function Favorites({ categories, auth, favorites, carts }) {
    
    return (
        <DashboardLayout pageTitle="Favorites" categories={categories} auth={auth}>
            <div >
                {favorites.length === 0 ?
                    <div className='text-lg text-primary text-center font-semibold mt-12'>Nothing to show in favorites</div>
                    :
                    <>
                        <div className='text-lg text-primary text-center font-semibold my-5 '>Favorite Products</div>
                        <div className='grid xl:grid-cols-10 lg:grid-cols-12 mini-tab:grid-cols-2 xs:grid-cols-1 gap-5'>
                            {favorites.map((product) => (
                                <div className="xl:col-span-2 lg:col-span-3 md:col-span-4 col-span-1" key={product.id}>
                                    <ProductCard carts={carts} favorites={favorites} auth={auth} product={product} ></ProductCard>
                                </div>
                            ))}
                        </div>
                    </>
                }
            </div>
        </DashboardLayout>
    )
}
