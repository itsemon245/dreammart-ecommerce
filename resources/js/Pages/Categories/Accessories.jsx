import React from 'react'
import { ProductCard, FilterBtn, FilterMenu, SortByBtn } from '@/Components/';
import CommonLayout from '@/Layouts/CommonLayout';
import ProductPageLayout from '@/Layouts/ProductPageLayout';
import { usePage } from '@inertiajs/inertia-react';

export default function Accessories(props) {

    const { messages } = usePage().props
    const array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    const products = [
        { name: "gucci", image: "assets/carousel-img-controller.png" },
        { name: "rolex", image: "assets/carousel-img-watch.png" },
        { name: "nike", image: "assets/carousel-img-shoe.png" },
        { name: "rolex black", image: "assets/carousel-img-watch-2.png" },
        { name: "playstation 5", image: "assets/carousel-img-controller.png" },
        { name: "watch", image: "assets/carousel-img-watch.png" },
        { name: "shoe", image: "assets/carousel-img-shoe.png" },
        { name: "watch black", image: "assets/carousel-img-watch-2.png" }
    ]
    return (
        <CommonLayout pageTitle="Accessories" auth={props.auth}>
            <ProductPageLayout heading="Showing Accessories" products={products} />
        </CommonLayout>
    )
}
