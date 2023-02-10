import React from 'react'
import { ProductCard, FilterBtn, FilterMenu, SortByBtn } from '@/Components/';
import CommonLayout from '@/Layouts/CommonLayout';
import ProductPageLayout from '@/Layouts/ProductPageLayout';
import { usePage } from '@inertiajs/inertia-react';

export default function Wearables({products, auth}) {

    const { messages } = usePage().props
    return (
        <CommonLayout pageTitle="Wearables" auth={auth}>
            <ProductPageLayout check="Wearables" heading="Showing Wearables " products={products} />
        </CommonLayout>
    )
}
