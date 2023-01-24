import React from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import NavBar from '/resources/js/Components/NavBar/NavBar';
import ProductCard from '/resources/js/Components/Products/ProductCard';

export default function NewArrivals() {
    return (
        <>
            <Head>
                <meta name="description" content="this is new arrivals page of dream mart" />
                <title>New Arrivals</title>
            </Head>
            <div className='w-100' >
                <NavBar></NavBar>
                <div className='mt-10'>
                    <ProductCard></ProductCard>
                </div>
            </div>


        </>
    )
}
