import React from 'react'
import CommonLayout from '@/Layouts/CommonLayout';
import ProductPageLayout from '@/Layouts/ProductPageLayout';

export default function NewArrivals({ products, auth, categories }) {

    return (
        <CommonLayout categories={categories} pageTitle="New Arrivals" auth={auth}>
            <ProductPageLayout categories={categories} heading="Showing New Arrivals" products={products} />
        </CommonLayout>
    )
}
