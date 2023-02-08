import React from 'react'
import { ProductCard, FilterBtn, FilterMenu, SortByBtn } from '@/Components/';
import CommonLayout from '@/Layouts/CommonLayout';
import ProductPageLayout from '@/Layouts/ProductPageLayout';
import { usePage } from '@inertiajs/inertia-react';

export default function Shoes({products, auth}) {

    const { messages } = usePage().props
  
    return (
        <CommonLayout pageTitle="Shoes" auth={auth}>
            <ProductPageLayout heading="Showing Shoes" products={products} />
        </CommonLayout>
    )
}
