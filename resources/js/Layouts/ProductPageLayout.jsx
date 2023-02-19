import React from 'react'
import { ProductCard, FilterBtn, FilterMenu, SortByBtn } from '@/Components/';
import { useState } from 'react';

export default function ProductPageLayout({ products, heading, categories, auth, carts, favorites }) {
    const [showMenu, setShowMenu] = useState(false)
    const onClickHandler = () => {
        let toggle = !showMenu
        setShowMenu(toggle)
    }
    const closeFilterMenuToggler = () => {
        if (showMenu === true) {
            setShowMenu(false)
        }
    }
    return (
        <>
            <h1 className='text-center text-xl font-semibold text-primary my-5'>{heading}</h1>
            {/* <FilterMenu categories={categories} closeFilterMenuToggler={closeFilterMenuToggler} showMenu={showMenu} />
            <div className="flex justify-end max-sm:justify-between">
                <FilterBtn onClickHandler={onClickHandler}></FilterBtn>
                <SortByBtn></SortByBtn>
            </div> */}
            {products.length !== 0 ? (
                <div className='grid gap-x-4 gap-y-6 grid-cols-3 max-xs:grid-cols-1 max-sm:grid-cols-2 max-md:grid-cols-4 lg:grid-cols-5 2xl:grid-cols-6'>
                    {products.map((product, i) => (
                        <ProductCard carts={carts} favorites={favorites} auth={auth} product={product} key={i}></ProductCard>
                    ))}
                </div>
                ) : (<div className='text-center capitalize'>No products Found in this Category</div>)}
        </>
    )
}
