import React from 'react'
import { ProductCard, FilterBtn, FilterMenu, SortByBtn } from '@/Components/';
import CommonLayout from '@/Layouts/CommonLayout';
import ProductPageLayout from '@/Layouts/ProductPageLayout';
import { usePage } from '@inertiajs/inertia-react';

export default function All({products, auth}) {
    const { messages } = usePage().props
   
    return (
        <CommonLayout pageTitle="All" auth={auth}>
            <ProductPageLayout heading="Showing All" products={products} />
        </CommonLayout>
    )
}
