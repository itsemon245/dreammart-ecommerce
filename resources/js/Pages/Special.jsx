import React from 'react'
import { ProductCard, FilterBtn, FilterMenu, SortByBtn } from '@/Components/';
import CommonLayout from '@/Layouts/CommonLayout';
import ProductPageLayout from '@/Layouts/ProductPageLayout';
import { usePage } from '@inertiajs/inertia-react';

export default function Exclusives({ products, auth, categories }) {

    const { messages } = usePage().props
    const array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    return (
        <CommonLayout categories={categories} pageTitle="Popular" auth={auth}>
            <ProductPageLayout categories={categories} heading="Showing Special Products" products={products} />
        </CommonLayout>
    )
}
