import React from 'react'
import { Hero, Section } from '@/Components/';
import CommonLayout from '@/Layouts/CommonLayout'


export default function App({ auth, landingProducts, categories }) {
    const carouselImages = [
        { name: "controller", src: "/assets/img/hero/carousel-img-controller.png" },
        { name: "watch", src: "/assets/img/hero/carousel-img-watch.png" },
        { name: "shoe", src: "/assets/img/hero/carousel-img-shoe.png" },
        { name: "watch2", src: "/assets/img/hero/carousel-img-watch-2.png" }
    ]

    return (
        <CommonLayout pageTitle="Home" auth={auth} categories={categories}>
            <Hero carouselImages={carouselImages}></Hero>
            {/* {categories.map(category=>(
                <div key={category.id} className="m-1 bg-primary">{category.name}</div>
            ))} */}
            {landingProducts.map((products, index) => (
                <Section key={index} eventProducts={products} heading={products[0].event.tagline} subTitle={products[0].event.name}></Section>
            ))}

        </CommonLayout>
    );
}

