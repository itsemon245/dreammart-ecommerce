import React from 'react'
import { ProductCard, FilterBtn, FilterMenu, SortByBtn } from '@/Components/';
import CommonLayout from '@/Layouts/CommonLayout';
import { usePage } from '@inertiajs/inertia-react';
import { useState } from 'react';

export default function NewArrivals(props) {
    const [showMenu, setShowMenu] = useState(false)
    const onClickHandler = () => {
        let toggle = !showMenu
        setShowMenu(toggle)
        console.log(showMenu);
    }
    const closeFilterMenu = () => {
        console.log('closed')
    }
    const { messages } = usePage().props
    const array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    return (
        <CommonLayout title="New Arrivals" auth={props.auth} messages={messages}>
            {showMenu && <FilterMenu closeFilterMenu={closeFilterMenu} />}
            <h1 className='text-center mt-5 text-xl font-semibold text-primary'>Showing new arrived items</h1>
            <div className="flex justify-end max-sm:justify-between">
                <FilterBtn onClickHandler={onClickHandler}></FilterBtn>
                <SortByBtn></SortByBtn>
            </div>
            <div className='grid gap-3 grid-cols-4 max-xs:grid-cols-1 max-sm:grid-cols-2 max-md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5'>
                {array.map((v, i) => (
                    <ProductCard key={i}></ProductCard>
                ))}
            </div>
        </CommonLayout>
    )
}
