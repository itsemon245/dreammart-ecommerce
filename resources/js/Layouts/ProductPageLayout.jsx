import React from 'react'
import { ProductCard, FilterBtn, FilterMenu, SortByBtn } from '@/Components/';
import { useState } from 'react';

export default function ProductPageLayout({ heading, products, check }) {
    const [showMenu, setShowMenu] = useState(false)
    const onClickHandler = () => {
        let toggle = !showMenu
        setShowMenu(toggle)
        console.log(showMenu);
    }
    const closeFilterMenuToggler = () => {
        if (showMenu === true) {
            setShowMenu(false)
        }
    }
    return (
        <>
            <h1 className='text-center mt-5 text-xl font-semibold text-primary'>{heading}</h1>
            <FilterMenu check={check} closeFilterMenuToggler={closeFilterMenuToggler} showMenu={showMenu} />
            <div className="flex justify-end max-sm:justify-between">
                <FilterBtn onClickHandler={onClickHandler}></FilterBtn>
                <SortByBtn></SortByBtn>
            </div>
            <div className='grid gap-x-4 gap-y-6 grid-cols-3 max-xs:grid-cols-1 max-sm:grid-cols-2 max-md:grid-cols-4 lg:grid-cols-5 2xl:grid-cols-6'>
                {products.map((product, i) => (
                    <ProductCard product={product} key={i}></ProductCard>
                ))}
            </div>
        </>
    )
}
