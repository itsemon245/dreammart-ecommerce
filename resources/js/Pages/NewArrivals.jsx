import React from 'react'
import CommonLayout from '@/Layouts/CommonLayout';
import ProductPageLayout from '@/Layouts/ProductPageLayout';

export default function NewArrivals(props) {
    const products = [
        { name: "controller", image: "assets/carousel-img-controller.png" },
        { name: "watch", image: "assets/carousel-img-watch.png" },
        { name: "shoe", image: "assets/carousel-img-shoe.png" },
        { name: "watch black", image: "assets/carousel-img-watch-2.png" },
        { name: "controller", image: "assets/carousel-img-controller.png" },
        { name: "watch", image: "assets/carousel-img-watch.png" },
        { name: "shoe", image: "assets/carousel-img-shoe.png" },
        { name: "watch black", image: "assets/carousel-img-watch-2.png" }
    ]
    return (
        <CommonLayout pageTitle="New Arrivals" auth={props.auth}>
            <ProductPageLayout heading="Showing new arrivals" products={products} />
        </CommonLayout>
    )
}
