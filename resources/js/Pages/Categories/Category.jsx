import React from 'react'
import CommonLayout from '@/Layouts/CommonLayout';
import ProductPageLayout from '@/Layouts/ProductPageLayout';
import { usePage } from '@inertiajs/inertia-react';

export default function Category({ products, auth, categories, carts, favorites }) {
    const { messages } = usePage().props
    let categoriesFound = []
    products.forEach(product => {
        categoriesFound.push(product.category)
    });
    const uniqueArr = categoriesFound.filter((obj, index, self) => index === self.findIndex((o) => o.id === obj.id));
    const hasAllProducts = uniqueArr.length > 1
    return (
        <CommonLayout categories={categories} messages={messages} pageTitle="Products" auth={auth}>
            <ProductPageLayout auth={auth} carts={carts} favorites={favorites} categories={categories} heading={hasAllProducts ? 'All Products' : products[0].category.name} products={products} />
        </CommonLayout>
    )
}
