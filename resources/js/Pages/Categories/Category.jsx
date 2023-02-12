import React from 'react'
import CommonLayout from '@/Layouts/CommonLayout';
import ProductPageLayout from '@/Layouts/ProductPageLayout';
import { usePage } from '@inertiajs/inertia-react';

export default function Category({products, auth, categories}) {
    const { messages } = usePage().props
    return (
        <CommonLayout categories={categories} messages={messages} pageTitle="Brands" auth={auth}>
            <ProductPageLayout categories={categories} heading={products.length ?  products[0].category.name : ''} products={products} />
        </CommonLayout>
    )
}
