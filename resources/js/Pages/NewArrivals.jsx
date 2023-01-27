import React from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import NavBar from '/resources/js/Components/NavBar/NavBar';
import ProductCard from '/resources/js/Components/Products/ProductCard';

export default function NewArrivals(props) {
    const array = [1,2,3,4,5,6,7,8,9,10]
    return (
        <>
            <Head>
                <meta name="description" content="this is new arrivals page of dream mart" />
                <title>New Arrivals</title>
            </Head>
            <div className='w-100' >
                <NavBar auth={props.auth}></NavBar>
                <div className='grid gap-3 grid-cols-4 max-xs:grid-cols-1 max-sm:grid-cols-2 max-md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5'>
                    {array.map((v, i)=>(
                        <ProductCard key={i}></ProductCard>
                    ))}
                </div>
            </div>


        </>
    )
}
