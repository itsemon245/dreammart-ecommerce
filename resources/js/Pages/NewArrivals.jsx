import React from 'react'
import ProductCard from '/resources/js/Components/Products/ProductCard';
import CommonLayout from '@/Layouts/CommonLayout';
import { usePage } from '@inertiajs/inertia-react';

export default function NewArrivals(props) {
    const {messages} = usePage().props
    const array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    return (
        <CommonLayout title="New Arrivals" auth={props.auth} messages={messages}>
            <div className='grid gap-3 grid-cols-4 max-xs:grid-cols-1 max-sm:grid-cols-2 max-md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5'>
                {array.map((v, i) => (
                    <ProductCard key={i}></ProductCard>
                ))}
            </div>
        </CommonLayout>
    )
}
