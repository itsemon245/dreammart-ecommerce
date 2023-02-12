import React from 'react'
import { Hero, Section } from '@/Components/';
import CommonLayout from '@/Layouts/CommonLayout'


export default function App({ auth, landingProducts }) {
    const carouselImages = [
        { name: "controller", src: "assets/carousel-img-controller.png" },
        { name: "watch", src: "assets/carousel-img-watch.png" },
        { name: "shoe", src: "assets/carousel-img-shoe.png" },
        { name: "watch2", src: "assets/carousel-img-watch-2.png" }
    ]

    return (
        <CommonLayout pageTitle="Home" auth={auth}>
            <Hero carouselImages={carouselImages}></Hero>
            {landingProducts.map((products, index) => (
                <Section key={index} eventProducts={products} heading={products[0].event.tagline} subTitle={products[0].event.name}></Section>
            ))}

        </CommonLayout>
    );
}

