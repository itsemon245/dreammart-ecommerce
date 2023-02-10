import React from 'react'
import { Hero, Section} from '@/Components/';
import CommonLayout from '@/Layouts/CommonLayout'


export default function App({auth, landingProducts}) {
    const carouselImages = [
        { name: "controller", src: "assets/carousel-img-controller.png" },
        { name: "watch", src: "assets/carousel-img-watch.png" },
        { name: "shoe", src: "assets/carousel-img-shoe.png" },
        { name: "watch2", src: "assets/carousel-img-watch-2.png" }
    ]
    console.log(landingProducts)

    return (
        <CommonLayout pageTitle="Home" auth={auth}>
            <Hero carouselImages={carouselImages}></Hero>
            <Section landingProducts={landingProducts.newArrivals} heading={"Live-Your-Dreams"} subTitle="New Arrivals"></Section>
            <Section landingProducts={landingProducts.mostPopular} heading={"Chosen-By-People"} subTitle="Most Popular"></Section>
            <Section landingProducts={landingProducts.exclusive} heading={"Our-Recommendation"} subTitle="Exclusive"></Section>
        </CommonLayout>
    );
}

